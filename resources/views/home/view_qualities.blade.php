@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <h6 class="card-title">Video Qualities</h6>
                  @if(Session::has('message'))
                     <p class="alert alert-info text-center">{{ Session::get('message') }}</p>
                @endif

                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($qualities))
                                    @foreach($qualities as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>${{$row->price}}</td>
                                            <td><button class="btn btn-primary" data-toggle="modal" data-target="{{'#myModal'.$row->id}}">Edit Price</button></td>
                                        </tr>

                                        <!-- Modal -->
                                        <div id="{{'myModal'.$row->id}}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{$row->title}} videos Price</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form action="/view-qualities" method="post">
                                                    @csrf
                                                    <input type="number" class="form-control" required name="price" value="{{$row->price}}">
                                                    <input type="hidden" name="id" value="{{$row->id}}">
                                                    <button class="btn btn-primary btn-block mt-3">Update Price</button>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
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



