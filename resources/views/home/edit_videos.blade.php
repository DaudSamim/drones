@extends('layout.app')

@section('content')
<style>
.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: 0;
}
</style>
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                @if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif  

@if(Session::has('alert'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('alert') }}</p>
@endif  
                    <h6 class="card-title">Edit Video</h6>

                    <form id="btn-submit" method="post" action="/edit_video" enctype='multipart/form-data'>
                                        <div class="form-group">
                                        <input class="form-check-input" type="hidden" name="id" value="{{$video->id}}">

                                            <label for="exampleInputEmail1">Video Title</label>
                                            <input style="width: 100% !important;;" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="name" name="title"  aria-describedby="emailHelp" value="{{$video->title}}">

                                            @if ($errors->has('title'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('title') }}</small>
                                        </span>
                                            @endif
                                        </div>


                                       

                                        @php
                                            $qualities = DB::table('qualities')->get();
                                        @endphp

                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Video Quality</label>
                                            @if(isset($video->fourk_price))
                                            <div class="form-check 4k check_class" >
                                              <input class="form-check-input" type="checkbox" name="fourk" id="flexCheckDefault" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                4K
                                              </label>
                                              <input type="text" class="input_class form-control" name="fourk_price" value="{{$video->fourk_price}}">
                                            </div>
                                            @else
                                            <div class="form-check 4k check_class" >
                                              <input class="form-check-input" type="checkbox" name="fourk" id="flexCheckDefault" >
                                              <label class="form-check-label" for="flexCheckDefault">
                                                4K
                                              </label>
                                              <input type="text" class="input_class form-control" name="fourk_price" value="">
                                            </div>
                                            @endif
                                            @if(isset($video->fhd_price))
                                            <div class="form-check fhd check_class">
                                              <input class="form-check-input" type="checkbox" name="fhd" id="flexCheckChecked" checked>
                                              <label class="form-check-label" for="flexCheckChecked">
                                                FHD
                                              </label>
                                               <input type="text" class="input_class form-control" name="fhd_price" value="{{$video->fhd_price}}">
                                            </div>
                                            @else
                                            

                                            <div class="form-check fhd check_class">
                                              <input class="form-check-input" type="checkbox" name="fhd" id="flexCheckChecked" >
                                              <label class="form-check-label" for="flexCheckChecked">
                                                FHD
                                              </label>
                                               <input type="text" class="input_class form-control" name="fhd_price" value="">
                                            </div>
                                             @endif
                                             @if(isset($video->hd_price))

                                            <div class="form-check hd check_class">
                                              <input class="form-check-input" type="checkbox" name="hd" id="flexCheckChecked" checked>
                                              <label class="form-check-label" for="flexCheckChecked">
                                                HD
                                              </label>
                                               <input type="text" class="input_class form-control" name="hd_price" value="{{$video->hd_price}}">
                                            </div>
                                            @else
                                            <div class="form-check hd check_class">
                                              <input class="form-check-input" type="checkbox" name="hd" id="flexCheckChecked" >
                                              <label class="form-check-label" for="flexCheckChecked">
                                                HD
                                              </label>
                                               <input type="text" class="input_class form-control" name="hd_price" value="">
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Description</label>
                                            <textarea name="description" class="form-control" rows="3" required>{{$video->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">
                                            <small class="font-weight-bold">{{ $errors->first('description') }}</small>
                                        </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Category</label>
                                            @php
                                            $categories = DB::Table('categories')->get();
                                            $selected_category = DB::Table('categories')->where('id',$video->category_id)->first();
                                            @endphp
                                            <select class="form-select" aria-label="Default select example" name="category_id">
                                              <option value="{{$selected_category->id}}" selected>{{$selected_category->title}}</option>
                                                @if(isset($categories))
                                                @foreach($categories as $row)
                                              <option value="{{$row->id}}">{{$row->title}}</option>
                                              @endforeach
                                              @endif
                                              
                                            </select>

                                        </div>


                                        <div class="modal-footer">
                                            <input type="submit" name="action_button"  class="btn btn-primary btn-block" value="Update" />
                                            
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

