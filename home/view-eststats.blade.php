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
                    <h6 class="card-title stat1">Est. Statistics</h6>

                    <div class="float-right">
                        <form action="{{route('view-eststats')}}" method="post">
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
                    <h6 class="card-title stat2">Est. Statistics</h6>


                    <div class="card-body">
                        <div class="row">
                            {{--                        estcash Out--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 text-center">
                                <input type="hidden" {{$total_estcash_out = 0}}>
                                @foreach($estcashout as $estcashouts)
                                    <input type="hidden" {{$total_estcash_out = $total_estcash_out + $estcashouts->amount}}>
                                @endforeach

                                <h6 class="float-left">Total estcash Out:</h6> <span>Rs. {{$total_estcash_out}}/-</span>
                                <h6 class="mt-4 bg-dark text-white p-2">PRODUCTS</h6>
                                {{--                                   Product Starts--}}
                                @foreach($product as $products)
                                    <input type="hidden" {{$total_product = 0}}>
                                    @foreach($estcashout as $estcashouts)

                                        @if($estcashouts->product_id == $products->id)
                                            <input type="hidden" {{$total_product = $total_product + $estcashouts->amount}}>
                                        @endif
                                    @endforeach
                                    @if($total_product != 0)
                                    <div class="mt-4">
                                        <h7 class="float-left">{{$products->name}}</h7> <span>Rs. {{$total_product}}/-</span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress">
                                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                                 aria-valuenow="{{round($total_product/$total_estcash_out * 100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width:{{round($total_product/$total_estcash_out * 100, 2)}}%">
                                                {{round($total_product/$total_estcash_out * 100, 2)}}%
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                {{--                            Product Ends--}}

                            </div>
                            {{--                        End estcash Out--}}

                            {{--                        estcash In--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 text-center">
                                <input type="hidden" {{$total_estcash_in = 0}}>
                                {{--                                   Job Starts--}}
                                @foreach($estcashin as $estcashins)
                                    <input type="hidden" {{$total_estcash_in = $total_estcash_in + $estcashins->amount}}>
                                @endforeach

                                <h6 class="float-left">Total estcash In:</h6> <span>Rs. {{$total_estcash_in}}/-</span>
                                <h6 class="mt-4 bg-dark text-white p-2">JOBS</h6>

                                @foreach($job as $jobs)
                                    <input type="hidden" {{$total_job = 0}}>
                                    @foreach($estcashin as $estcashins)

                                        @if($estcashins->job_id == $jobs->id)
                                            <input type="hidden" {{$total_job = $total_job + $estcashins->amount}}>
                                        @endif
                                    @endforeach
                                    @if($total_job != 0)
                                    <div class="mt-4">
                                        <h7 class="float-left">{{$jobs->name}}</h7> <span>Rs. {{$total_job}}/-</span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress">
                                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                 @if($total_estcash_in != 0)
                                                 aria-valuenow="{{round($total_job/$total_estcash_in * 100, 2)}}" aria-valuemin="0" aria-valuemax="100" style="width:{{round($total_job/$total_estcash_in * 100, 2)}}%">
                                                {{round($total_job/$total_estcash_in * 100, 2)}}%
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                {{--                            Job Ends--}}

                            </div>

                            {{--                        End estcash In--}}
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6 mx-auto col-md-6 col-sm-12 mt-4 text-center">

                                <input type="hidden" {{$total_cash_in = 0}}>
                                <input type="hidden" {{$total_cash_out = 0}}>

                                @foreach($cashin as $cashins)
                                    <input type="hidden" {{$total_cash_in = $total_cash_in + $cashins->amount}}>
                                @endforeach

                                @foreach($cashout as $cashouts)
                                    <input type="hidden" {{$total_cash_out = $total_cash_out + $cashouts->amount}}>
                                @endforeach

                                <h6 class="mt-4 bg-dark text-white p-2">REVENUE</h6>

                                <div class="mt-4 text-center pl-2">
                                    <div class="row">
                                        <div class="col">
                                            <h7>Est. Revenue</h7>
                                        </div>
                                        <div class="col">
                                            @if($total_estcash_in - $total_estcash_out < 0) <span>Rs. <span class="text-danger">{{$total_estcash_in - $total_estcash_out}}/-</span></span> @else <span>Rs. {{$total_estcash_in - $total_estcash_out}}/-</span> @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center pl-2">
                                    <div class="row">
                                        <div class="col">
                                            <h7>Actual Revenue</h7>
                                        </div>
                                        <div class="col">
                                            @if($total_cash_in - $total_cash_out < 0) <span>Rs. <span class="text-danger">{{$total_cash_in - $total_cash_out}}/-</span></span> @else <span class="text-success">Rs. {{$total_cash_in - $total_cash_out}}/-</span> @endif
                                        </div>
                                    </div>

                                </div>

                                <input type="hidden" {{$est_revenue = $total_estcash_in - $total_estcash_out}}>
                                <input type="hidden" {{$act_revenue = $total_cash_in - $total_cash_out}}>

                                @if($est_revenue > 0 && $act_revenue > 0)
                                    <div class="mt-4 text-center pl-2">
                                        <div class="row">
                                            <div class="col">
                                                <h7 class="font-weight-bold">Revenue Diff.</h7>
                                            </div>
                                            <div class="col">
                                           <span>Rs. <span class="text-success font-weight-bold">{{($total_estcash_in - $total_estcash_out) + ($total_cash_in - $total_cash_out)}}/-</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($est_revenue < 0 && $act_revenue < 0)
                                    <div class="mt-4 text-center pl-2">
                                        <div class="row">
                                            <div class="col">
                                                <h7 class="font-weight-bold">Revenue Diff.</h7>
                                            </div>
                                            <div class="col">
                                                <span>Rs. <span class="text-danger font-weight-bold">{{($total_estcash_in - $total_estcash_out) - ($total_cash_in - $total_cash_out)}}/-</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($est_revenue < 0 && $act_revenue > 0)
                                <div class="mt-4 text-center pl-2">
                                    <div class="row">
                                        <div class="col">
                                            <h7 class="font-weight-bold">Revenue Diff.</h7>
                                        </div>
                                        <div class="col">
                                           <span>Rs. <span class="text-success font-weight-bold">{{ $act_revenue - $est_revenue}}/-</span></span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($est_revenue > 0 && $act_revenue < 0)
                                    <div class="mt-4 text-center pl-2">
                                        <div class="row">
                                            <div class="col">
                                                <h7 class="font-weight-bold">Revenue Diff.</h7>
                                            </div>
                                            <div class="col">
                                                <span>Rs. <span class="text-danger font-weight-bold">{{ $est_revenue - $act_revenue}}/-</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection
