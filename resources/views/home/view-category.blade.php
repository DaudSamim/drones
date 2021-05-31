@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="card-title btn btn-primary btn-sm float-right text-white"data-toggle="modal" data-target="#new_category">
                        Add New Category
                    </button>
                    <h6 class="card-title">Categories</h6>
                   


                     <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($categories))
                                    @foreach($categories as $row)
                                        <tr>
                                            <td>{{$row->title}}</td>
                                            <td><img src="{{'images/'.$row->image}}" style="height: 50px; width: 50px"></td>
                                            <td>{{$row->created_at}}</td>
                                            <td><a href="{{'/delete_category/'.$row->id}}"><button class="btn btn-danger">Delete</button></a></td>
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
                    <div id="new_category" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="m-body">
                                    <span id="form_result"></span>
                                    <form id="btn-submit" method="post" action="/view-category" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Title</label>
                                            <input style="width: 100% !important;;" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="name" name="title"  aria-describedby="emailHelp" placeholder="Video Title">

                                            @if ($errors->has('title'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('title') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Image</label>
                                            <input class="form-control" accept="image/*" type="file" name="image">

                                            @if ($errors->has('image'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('image') }}</small>
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