@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="card-title btn btn-primary btn-sm float-right text-white" data-toggle="modal" data-target="#new_user">
                        Add New User
                    </button>
                    <h6 class="card-title">Users</h6>
                  

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Email</th>
                                <th>Username</th>
                                <th>Created At</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($users))
                                    @foreach($users as $row)
                                        <tr>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->username}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td></td>
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

     <!-- Modal -->
                    <div id="new_user" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="m-body">
                                    <span id="form_result"></span>
                                    <form id="btn-submit" method="post" action="/view-user" enctype='multipart/form-data'>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input style="width: 100% !important;;" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="name" name="email"  aria-describedby="emailHelp" placeholder="Enter Email">

                                            @if ($errors->has('email'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('email') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input style="width: 100% !important;;" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="name" name="username"  aria-describedby="emailHelp" placeholder="Enter Username">

                                            @if ($errors->has('username'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('username') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input style="width: 100% !important;;" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="name" name="password"  aria-describedby="emailHelp" placeholder="Enter Password">

                                            @if ($errors->has('password'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('password') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                       



                                        <div class="modal-footer">
                                            <input type="submit" name="action_button"  class="btn btn-primary btn-block" value="Add" />
                                            
                                            <span
                                                className="close cursor-pointer"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                                id="myModalClose">
                                            </span>
                                        
                                            <input type="hidden" name="_token" value={{csrf_token()}}>

                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection



