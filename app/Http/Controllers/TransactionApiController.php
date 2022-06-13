<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Driver;
use App\Models\Car;
use App\Models\Bank;
use App\Models\Vendor;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class TransactionApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function OrderCar()
    {
        $user = Auth::user()->id;
        $transaction = Transaction::where('user_id', $user)->with('car', 'driver')->get();

        return response()->json($transaction, 200);
        
        // return response()->json([
        //     'data' => $transaction,
        //     'bank' => $banks,
        // ], 200);
    }
    
     public function uploadFileKtp(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file;
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "admin/images/ktp/";
            // $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = url('admin/images/ktp').$tmp_file_name;
            // }
            return response()->json($result);
    }
    
    public function createOnline(Request $request)
    {
        $user = Auth::user()->id;
        // $img_ktp = 'img_ktp';
        $Transactions = new Transaction;
        $Transactions->code_transaction = strtoupper(Str::random(10));
        $Transactions->user_id = $user;
        // $Transactions->car_id = '1';
        $Transactions->car_id = $request->car_id;
        // $Transactions->driver_id = $request->driver_id;
        $Transactions->driver_id = '1';
        $Transactions->transaction_date = Carbon::now()->format('Y-m-d');
        $Transactions->lease_time = $request->lease_time;
        $Transactions->return_time = $request->lease_time;
        $Transactions->lease_date = $request->lease_date;
        $Transactions->return_date = $request->return_date;
        $Transactions->amount = str_replace(',', '', $request->amount);
        $Transactions->type_transaction = 'online';
        $Transactions->img_transaction = 'image';
        $Transactions->status_transaction ='process';
        $Transactions->where_go = "Jakarta";
        // $Transactions->where_go = $request->where_go;
        $Transactions->save();
        // return redirect('transaction_order/'.Auth::user()->id);

        return response()->json([
            'message' => 'Succes order the car',
            'data' => $Transactions       
        ], 200);
    }
    
    public function print_pdf_invoice($id)
    {
        $data = Transaction::where('id',$id)->with('car','user')->first();
        // $user = Auth::user()->id;
        $lease = Carbon::parse($data->lease_date)->addDays(1);
        $period = CarbonPeriod::create($lease, $data->return_date);
        $pdf = PDF::loadview('web.invoice',compact('data','period'));
        
        return response()->json([
            'data' => $pdf       
        ], 200);
        
        // return $pdf->download('invoice-'.$data->code_transaction.'.pdf');
        //return $pdf->stream();
        // return count($period);
    }
    
    public function uploadBukti(Request $request,$id)
    {
        $img_transaction = 'img_transaction';
        $transactions = Transaction::find($id);
        $transactions->img_transaction = $this->uploadFile($request,$img_transaction);
        $transactions->save();
        return redirect()->back()
        ->with('success','Successfully upload proof of transaction!');
    }

    // public function uploadFileKtp(Request $request,$oke)
    // {
    //         $result ='';
    //         $file = $request->file($oke);
    //         $name = $file;
    //         // $tmp_name = $file['tmp_name'];
    //         $extension = explode('.',$name);
    //         $extension = strtolower(end($extension));
    //         $key = rand().'-'.$oke;
    //         $tmp_file_name = "{$key}.{$extension}";
    //         $tmp_file_path = "admin/images/ktp/";
    //         // $file->move($tmp_file_path,$tmp_file_name);
    //         // if(move_uploaded_file($tmp_name, $tmp_file_path)){
    //         $result = url('admin/images/ktp').'/'.$tmp_file_name;
    //         // }
    //     return response()->json($result);
    // }
    
}
