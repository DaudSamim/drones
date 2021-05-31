@extends('layout.app')

@section('content')
    @if(Session::has('info'))
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('info') }}
        </div>
    @endif
    @if(Session::has('badInfo'))
        <div class="alert alert-danger text-center" role="alert">
            {{ Session::get('badInfo') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Change Password</h6>
                    <div>
                        <form method="post" action="{{url('change-password')}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input style="width: 100% !important;;" type="password" class="form-control {{ $errors->has('oldPassword') ? 'is-invalid' : '' }}" id="oldPassword" name="oldPassword"  aria-describedby="emailHelp" placeholder="Old Password">

                                @if ($errors->has('oldPassword'))
                                    <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('oldPassword') }}</small>
                            </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input style="width: 100% !important;;" type="password" class="form-control {{ $errors->has('newPassword') ? 'is-invalid' : '' }}" id="newPassword" name="newPassword"  aria-describedby="emailHelp" placeholder="New Password">

                                @if ($errors->has('newPassword'))
                                    <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('newPassword') }}</small>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm New Password</label>
                                <input style="width: 100% !important;;" type="password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}" id="confirmNewPassword" name="confirmNewPassword" placeholder="Re-enter New Password">

                                @if ($errors->has('confirmNewPassword'))
                                    <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('confirmNewPassword') }}</small>
                            </span>
                                @endif
                            </div>

                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <button type="submit" class="btn btn-primary">Change Password</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('scripts')--}}

{{--    <script type="text/javascript">--}}

{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}

{{--        $("#changePassword").submit(function(e){--}}

{{--            console.log('aqdas')--}}
{{--            e.preventDefault();--}}
{{--            var data = $(this).serialize();--}}
{{--            var url = '/change-password';--}}

{{--            $.ajax({--}}
{{--                url:url,--}}
{{--                method:'POST',--}}
{{--                dataType: 'json',--}}
{{--                data:data,--}}

{{--                success:function(response){--}}
{{--                    if(response.success){--}}
{{--                        alert(response.message) //Message come from controller--}}

{{--                    }else{--}}
{{--                        alert("Error")--}}
{{--                    }--}}
{{--                },--}}
{{--                error:function(error){--}}
{{--                    console.log(error)--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}






{{--@endsection--}}
