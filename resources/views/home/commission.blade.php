@extends('layout.app')

@section('content')
<h3 class="pb-4">Vendors Commissions</h3>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p> 
        @endforeach
    @endif
    <form id="btn-submit" method="post" action="/commissions" enctype='multipart/form-data'>

        <div class="form-group">
            <h4 style="" for="exampleInputEmail1">Vendor Name</h4>
           <span> <h5>{{$vendor->first_name}} {{$vendor->last_name}}</h5></span>
        </div>

            <div class="form-group">
            <h5 for="exampleInputEmail1">Commission</h5>
            <input type="number" class="form-control" id="name" name="commissions"  aria-describedby="emailHelp" placeholder="Enter Commisson" value="{{$vendor->commissions}}">
            <input type="hidden" name="id" value="{{$vendor->id}}">
        </div>

        <div class="modal-footer">
            <input type="submit" name="action_button"  class="btn btn-primary btn-block" value="Update Commission" />
            <span
                className="close cursor-pointer"
                data-dismiss="modal"
                aria-label="Close"
                id="myModalClose">
            </span>
            <input type="hidden" name="_token" value={{csrf_token()}}>
        </div>
    </form>
    

@endsection