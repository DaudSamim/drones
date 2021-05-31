@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title"></h6>
                  @if(Session::has('message'))
                     <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
                @endif

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>id</th>
                                <th>Product id</th>
                                <th>Title</th>
                                
                                <th>Price</th>
                                <th>Profit</th>
                                <th>Quality</th>
                                <th>Actions</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($allOrders))
                                    @foreach($allOrders as $row)
                                    
                                       
                                        <tr>
                                            
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->product_id}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>{{$row->price}}</td>
                                            <td>{{$row->profit}}</td>
                                            <td>{{$row->quality}}</td>
                                            <td><a href=""><button class="btn btn-success">View</button></a>
                                                <a href=""><button class="btn btn-primary">Download</button></a></td>
                                                <td>{{$row->created_at}}</td>
                                        </tr>

                                      
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
@endsection



