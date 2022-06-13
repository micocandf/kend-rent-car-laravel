<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $drivers = Driver::all();
        Session::put('menu','drivers');
        return view('dashboard.drivers');
    }

    public function create(Request $request)
    {
        $driver = new Driver;
        $driver->name_driver = $request->name_driver;
        $driver->day_price = $request->day_price;
        $driver->save();
         return redirect('drivers')
         ->with('success','Data car successfully added!');
    }

    public function update(Request $request,$id)
    {
        $driver = Driver::find($id);
        $driver->name_driver = $request->name_car;
        $car->day_price = $request->day_price;
        $car->save();
         return redirect('drivers')
         ->with('success','Data driver successfully updated!');
    }

    public function delete($id)
    {
        Driver::find($id)->delete();
         return redirect('drivers')
         ->with('success','Data driver successfully deleted!');
    }
}
