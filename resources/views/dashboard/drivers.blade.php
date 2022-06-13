@extends('layout.header')

@section('content')
    <!-- content -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Drivers</li>
            </ol>
        </div><!--/.row-->
       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Drivers</h1>
            </div>
        </div><!--/.row-->

        @if($message=Session::get('success'))
        <div class="alert bg-teal" role="alert">
            <em class="fa fa-lg fa-check">&nbsp;</em> 
           {{$message}}
        </div>
        @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <p align="left"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCars">
                          Add Driver
                        </button></p>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                             <div class="table-responsive">
                            <table class="table table-striped b-t b-b" id="tableok">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Driver Name</th>
                                        <th>Day Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$driver->name_driver}}</td>
                                    <td>{{number_format($driver->price_day)}}</td>
                                    <td>
                                                    <button 
                                                        class="btn btn-info btn-sm" 
                                                        data-toggle="modal" 
                                                        data-target="#Editdriver-{{$driver->id}}">
                                                    Edit
                                                    </button>
                                                    <button 
                                                        class="btn btn-danger btn-sm" 
                                                        data-toggle="modal"
                                                        data-target="#Deletedriver-{{$driver->id}}">
                                                    Delete
                                                    </button>
                                    </td>
                                </tr>
                                @php $no++; @endphp
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                             <div class="table-responsive">
                        </div>
                    </div>
                </div><!-- /.panel-->
    </div>  <!--/.main-->

     <!-- The Modal -->
  <div class="modal" id="AddDrivers">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Driver</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form role="form" action="{{url('driver_add')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="form-group">
            <label>Driver Name</label>
            <input required class="form-control" name="name_car" placeholder="Car Name">
        </div>

         <div class="form-group">
            <label>Day Price</label>
            <input required type="text" class="form-control" name="day_price" placeholder="Day Price">
        </div>
    
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

   @foreach($drivers as $driver)
   <div class="modal" id="Editcar-{{$driver->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit driver</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form role="form" action="{{url('car_update/'.$driver->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="form-group">
            <label>Car Name</label>
            <input required class="form-control" value="{{$driver->name_driver}}" name="name_car" placeholder="Car Name">
        </div>

         <div class="form-group">
            <label>Day Price</label>
            <input required type="text" value="{{$driver->price_day}}" class="form-control" name="day_price" placeholder="Day Price">
        </div>
    
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <button type="submit" class="btn btn-info">Update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
    </form>
      </div>
    </div>
  </div>

     <div class="modal" id="Deletecar-{{$driver->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete driver</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <h5>Are you sure you want to delete data, if the data is deleted it will also delete data related to this data! this action cannot be canceled</h5>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="{{url('car_delete/'.$driver->id)}}" class="btn btn-info">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
   @endforeach
@endsection
