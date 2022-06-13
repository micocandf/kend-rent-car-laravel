<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;
use App\Models\Transaction;

class Car extends Model
{
    use HasFactory;
    
    protected $hidden = ['created_at', 'updated_at'];
    
    protected $casts = [
    'day_price' => 'integer',
    // 'vendor_id' => 'integer',
    ];

    public function vendor()
    {
    	return $this->belongsTo(Vendor::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
