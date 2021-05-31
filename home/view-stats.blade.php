@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
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
                        <h6 class="card-title stat1">Statistics</h6>

                        <div class="float-right">
                            <form action="{{route('view-stats')}}" method="post">
                                @if($x == 'before')
                                    <input name="from" value="{{$from}}" type="date" class="date">
                                    <lable>To</lable>
                                    <input name="to" value="{{$to}}" type="date" class="date">
                                    <button type="submit" class="btn btn-sm btn-primary">GO</button>
                                    <input type="hidden" name="_token" value={{csrf_token()}}>
                                @endif
                                @if($x == 'after')
                                    <input name="from" value="{{$from}}" type="date" class="date">
                                    <lable>To</lable>
                                    <input name="to" type="date" value="{{$to}}" class="date">
                                    <button type="submit" class="btn btn-sm btn-primary">GO</button>
                                    <input type="hidden" name="_token" value={{csrf_token()}}>
                                @endif
                            </form>
                        </div>
                    <h6 class="card-title stat2">Statistics</h6>


                        <div class="card-body">
                    <div class="row">
{{--                        Cash Out--}}
                        <div class="col-lg-6 col-sm-12 mt-4 text-center">
                            <input type="hidden" {{$total_cash_out = 0}}>
                            @foreach($cashout as $cashouts)
                                <input type="hidden" {{$total_cash_out = $total_cash_out + $cashouts->amount}}>
                            @endforeach

                            <h6 class="float-left">Total Cash Out:</h6> <span>Rs. {{$total_cash_out}}/-</span>
                            <h6 class="mt-4 bg-dark text-white p-2">PRODUCTS</h6>
{{--                                   Product Starts--}}
                            @foreach($product as $products)
                                <input type="hidden" {{$total_product = 0}}>
                                @foreach($cashout as $cashouts)

                                    @if($cashouts->product_id == $products->id)
                                        <input type="hidden" {{$total_product = $total_product + $cashouts->amount}}>
                                    @endif
                                @endforeach
                            @if($total_product != 0)
                                <div class="mt-4">
                                    <h7 class="float-left">{{$products->name}}</h7> <span>Rs. {{$total_product}}/-</span>
                                </div>
                                <div class="mt-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                             aria-valuenow="{{round($total_product/$total_cash_out * 100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width:{{round($total_product/$total_cash_out * 100, 2)}}%">
                                            {{round($total_product/$total_cash_out * 100, 2)}}%
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
{{--                            Product Ends--}}

                            <h6 class="mt-4 bg-dark text-white p-2">USERS</h6>
                            {{--                                   User Starts--}}
                            @foreach($user as $users)
                                <input type="hidden" {{$total_user = 0}}>
                                @foreach($cashout as $cashouts)

                                    @if($cashouts->user_id == $users->id)
                                        <input type="hidden" {{$total_user = $total_user + $cashouts->amount}}>
                                    @endif
                                @endforeach
                                @if($total_user != 0)
                                <div class="mt-4">
                                    <h7 class="float-left">{{$users->username}}</h7> <span>Rs. {{$total_user}}/-</span>
                                </div>
                                <div class="mt-2">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                             @if($total_cash_out != 0)
                                             aria-valuenow="{{round($total_user/$total_cash_out * 100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width:{{round($total_user/$total_cash_out * 100, 2)}}%">
                                            {{round($total_user/$total_cash_out * 100, 2)}}%
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            {{--                            User Ends--}}
                        </div>
{{--                        End Cash Out--}}


{{--                        Cash In--}}
                        <div class="col-lg-6 col-sm-12 mt-4 text-center">
                            <hr class="d-block d-md-none">
                            <input type="hidden" {{$total_cash_in = 0}}>
                            {{--                                   Job Starts--}}
                            @foreach($cashin as $cashins)
                                <input type="hidden" {{$total_cash_in = $total_cash_in + $cashins->amount}}>
                            @endforeach

                            <h6 class="float-left">Total Cash In:</h6> <span>Rs. {{$total_cash_in}}/-</span>
                            <h6 class="mt-4 bg-dark text-white p-2">JOBS</h6>

                            @foreach($job as $jobs)
                                <input type="hidden" {{$total_job = 0}}>
                                @foreach($cashin as $cashins)

                                    @if($cashins->job_id == $jobs->id)
                                        <input type="hidden" {{$total_job = $total_job + $cashins->amount}}>
                                    @endif
                                @endforeach
                                @if($total_job != 0)
                                <div class="mt-4">
                                    <h7 class="float-left">{{$jobs->name}}</h7> <span>Rs. {{$total_job}}/-</span>
                                </div>
                                <div class="mt-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                             @if($total_cash_in != 0)
                                             aria-valuenow="{{round($total_job/$total_cash_in * 100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width:{{round($total_job/$total_cash_in * 100, 2)}}%">
                                            {{round($total_job/$total_cash_in * 100, 2)}}%
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            {{--                            Job Ends--}}

                            <h6 class="mt-4 bg-dark text-white p-2">REVENUE</h6>
                            <div class="mt-4 text-center">
                                @if($total_cash_in - $total_cash_out < 0) <h3 class="text-danger font-weight-bold">Rs. {{$total_cash_in - $total_cash_out}}/-</h3> @else <h3 class="font-weight-bold text-success">Rs. {{$total_cash_in - $total_cash_out}}/-</h3> @endif
                            </div>

                        </div>

{{--                        End Cash In--}}
                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection
