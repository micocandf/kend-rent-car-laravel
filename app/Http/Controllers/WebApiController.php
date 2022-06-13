<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Vendor;

class WebApiController extends Controller
{
    public function index(){
        $cars = Car::with('vendor')->get();
        return response()->json($cars, 200);
    }
    
    public function car($id){
        $cars = Car::find($id);
        return response()->json($cars,200);
    }
}
