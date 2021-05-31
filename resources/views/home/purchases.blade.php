@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title">Purchases</h6>
                  @if(Session::has('message'))
                     <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
                @endif

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Order Id</th>
                                <th>User</th>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($purchases))
                                    @foreach($purchases as $row)
                                        @php
                                            $user = DB::table('users')->where('id',$row->user_id)->first();
                                        @endphp
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$user->username}}</td>
                                            <td><a href="{{'show_order/'.$row->id}}"><button class="btn btn-success">Show Products</button></a></td>
                                            <td>${{$row->price}}</td>
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



