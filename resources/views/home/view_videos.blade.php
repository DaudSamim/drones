@extends('layout.app')

@section('content')
<style>
    .form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: 0 !important; 
}.check_class{
    display: flex;
    margin: 2%;
}.input_class{
    margin-left: 2%;
}
</style>
@if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif  

@if(Session::has('alert'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('alert') }}</p>
@endif  
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="card-title btn btn-primary btn-sm float-right text-white" data-toggle="modal" data-target="#new_video">
                        Add New Video
                    </button>
                    <h6 class="card-title">Videos</h6>

                     <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Title</th>
                                <th>Poster</th>
                                <th>File</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Status</th>
                                @if(auth()->user()->role == 1)<th>Update</th> @endif
                                <th>Created At</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($videos))
                                    @foreach($videos as $row)

                                    @php
                                        $category = DB::Table('categories')->where('id',$row->category_id)->first();
                                    @endphp
                                    
                                        <tr>
                                            <td>{{$row->title}}</td>
                                            <td><img src="{{'/images/'.$row->poster}}"></td>
                                            <td>{{$row->file}}</td>
                                            <td>${{$row->price}}</td>
                                            <td>@if(isset($category)){{$category->title}}@endif</td>
                                            <td>@if($row->status == 0) Pending @elseif($row->status == 1) Active @else  <button class="btn btn-danger" data-toggle="modal" data-target="{{'#reject_message'.$row->id}}">Reject Message</button> @endif</td>
                                           @if(auth()->user()->role == 1) <td> 
                                                @if(auth()->user()->role == 2) 
                                                    @if($row->status == 0) Pending @elseif($row->status == 2) Rejected @else Approved @endif 
                                                    @else 
                                                         @if($row->status == 0)  <button class="btn btn-warning" data-toggle="modal" data-target="{{'#reject'.$row->id}}">Reject</button>  <a href="{{'/approve_video/'.$row->id}}"><button class="btn btn-success">Approve</button></a> @elseif($row->status == 2) <button class="btn btn-danger" >Rejected </button>  @else   <button class="btn btn-warning" data-toggle="modal" data-target="{{'#reject'.$row->id}}">Reject</button>
                                                     @endif 
                                                @endif 
                                            </td>
                                            @endif
                                            <td>{{$row->created_at}}</td>
                                            <td>
                                                <a href="{{'/view_videos/'.$row->id}}"><button class="btn btn-warning">Edit</button></a>
                                                <a href="{{'/delete_video/'.$row->id}}"><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>



                                                    <!-- Modal -->
        <div class="modal fade" id="{{'reject'.$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reject Video</h5>
               
              </div>
              <div class="modal-body">
                <form method="post" action="/reject_video">
                    @csrf
                    <input type="hidden" value="{{$row->id}}" name="id">
                    <p>Rejection Message</p>
                    <textarea name="message"  class="form-control" rows="3"></textarea> 
                
              </div>
              <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">Reject</button>
              </div>
              </form>
            </div>
          </div>
        </div>

                                                    <!-- Modal -->
        <div class="modal fade" id="{{'reject_message'.$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reject Message</h5>
               
              </div>
              <div class="modal-body">
               
                    <input type="hidden" value="{{$row->id}}" name="id">
                    <h5>Message:</h5>
                    <p>{{$row->rejection_message}}</p> 
                
              </div>
              <div class="modal-footer">
                
               
              </div>
              </form>
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

                 <!-- Modal -->
                    <div id="new_video" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="m-body">
                                    <span id="form_result"></span>
                                    <form id="btn-submit" method="post" action="/view_videos" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Title</label>
                                            <input style="width: 100% !important;;" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="name" name="title"  aria-describedby="emailHelp" placeholder="Video Title">

                                            @if ($errors->has('title'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('title') }}</small>
                                        </span>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video File</label>
                                            <input class="form-control" accept="video/*" type="file" name="video">

                                            @if ($errors->has('video'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('video') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                        @php
                                            $qualities = DB::table('qualities')->get();
                                        @endphp

                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Video Quality</label>
                                            <div class="form-check 4k check_class" >
                                              <input class="form-check-input" type="checkbox" name="fourk" id="flexCheckDefault" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                4K
                                              </label>
                                              <input type="text" class="input_class form-control" name="fourk_price" value="{{$qualities[0]->price}}">
                                            </div>
                                            <div class="form-check fhd check_class">
                                              <input class="form-check-input" type="checkbox" name="fhd" id="flexCheckChecked" >
                                              <label class="form-check-label" for="flexCheckChecked">
                                                FHD
                                              </label>
                                               <input type="text" class="input_class form-control" name="fhd_price" value="{{$qualities[1]->price}}">
                                            </div>
                                            <div class="form-check hd check_class">
                                              <input class="form-check-input" type="checkbox" name="hd" id="flexCheckChecked" >
                                              <label class="form-check-label" for="flexCheckChecked">
                                                HD
                                              </label>
                                               <input type="text" class="input_class form-control" name="hd_price" value="{{$qualities[2]->price}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Description</label>
                                            <textarea name="description" class="form-control" rows="3" required></textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('description') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Category</label>
                                            
                                            <select class="form-select" aria-label="Default select example" name="category_id">
                                              <option selected>Categories</option>
                                                @if(isset($categories))
                                                @foreach($categories as $row)
                                              <option value="{{$row->id}}">{{$row->title}}</option>
                                              @endforeach
                                              @endif
                                              
                                            </select>

                                            @if ($errors->has('video'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('video') }}</small>
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

