@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title">Subscriptions</h6>
                  

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                               
                                <th>Email</th>
                                <th>Created At</th>
                                

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($queries))
                                    @foreach($queries as $row)
                                        <tr>

                                            <td>{{$row->email}}</td>
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



