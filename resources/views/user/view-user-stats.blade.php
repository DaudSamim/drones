@extends('user.layout.app')

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
                        <form action="{{route('view-user-stats')}}" method="post">
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
                            <div class="col-lg-6 col-sm-12 mt-4 mx-auto text-center">
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

                            </div>
                            {{--                        End Cash Out--}}

                            {{--                        End Cash In--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
