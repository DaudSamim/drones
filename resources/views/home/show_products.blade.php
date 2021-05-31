@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title">Order No: {{$id}}</h6>
                  @if(Session::has('message'))
                     <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
                @endif

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Title</th>
                                <th>Quality</th>
                                <th>Price</th>
                                <th>Actions</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($products))
                                    @foreach($products as $row)
                                        @php
                                            $product = DB::Table('videos')->where('id',$row->product_id)->first();
                                        @endphp
                                        <tr>
                                            <td>{{$product->title}}</td>
                                            <td>{{$row->quality}}</td>
                                            <td>${{$row->price}}</td>
                                            <td><a href="{{'/product_'.$row->product_id}}"><button class="btn btn-success">View</button></a>
                                                <a href="{{'/download_product_'.$row->product_id}}"><button class="btn btn-primary">Download</button></a></td>
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



