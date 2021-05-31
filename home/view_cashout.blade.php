@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="card-title btn btn-primary btn-sm float-right text-white" name="create_record" id="create_product">
                        Add New Cash Out
                    </button>
                    <h6 class="card-title">Cash Outs</h6>
                    <!-- Modal -->
                    <div id="productModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Cash Out</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="m-body">
                                    <span id="form_result"></span>
                                    <form id="btn-submit">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Username</label>
                                                    <select id="user_id" name="user_id" class="form-control">

                                                        @foreach($user as $users)

                                                                <option>{{$users->username}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <select id="product_id" name="product_id" class="form-control">
                                                @foreach($product as $products)

                                                        <option>{{$products->name}}</option>

                                                @endforeach

                                            </select>
                                        </div>


                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Amount</label>
                                                    <input style="width: 100% !important;;" type="text" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" id="amount" placeholder="Amount">

                                                    @if ($errors->has('amount'))
                                                        <span class="text-danger">
                                <small class="font-weight-bold">{{ $errors->first('amount') }}</small>
                            </span>
                                                    @endif
                                                </div>

                                        <div class="modal-footer">
                                            <input type="hidden" name="action" id="action" />
                                            <input type="hidden" name="hidden_id" id="hidden_id" />
                                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block" value="Add" />
                                            {{--                          Modal Close--}}
                                            <span
                                                className="close cursor-pointer"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                                id="myModalClose"></span>
                                            {{--                            Modal Close--}}
                                            <input type="hidden" name="_token" value={{csrf_token()}}>

                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table id="product_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Date - Time</th>
                                <th>ID</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {

            $('#product_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('ajax-cashout.index') }}",
                },
                columns: [

                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },

                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'product_id',
                        name: 'product_id'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });


            $('#create_product').click(function(){
                $('.modal-title').text("Add New Cash Out");
                $('#action_button').val("Add");
                $('#action').val("Add");
                $('#btn-submit')[0].reset();
                $('#productModal').modal('show');
            });


            $('#btn-submit').on('submit', function(event){
                event.preventDefault();
                if($('#action').val() == 'Add')
                {

                    console.log('hi');

                    $.ajax({
                        url:"{{ route('ajax-cashout.store') }}",
                        method:"POST",
                        data: new FormData(this),
                        contentType: false,
                        cache:false,
                        processData: false,
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                swal({
                                    text: "Cash Out Successful!",
                                    icon: "success",
                                    button: "Done!",

                                });

                                document.getElementById("btn-submit").reset();

                                document.getElementById("myModalClose").click();
                                $('#product_table').DataTable().ajax.reload();
                                $('#form_result').html(html);



                            }else{
                                alert("Error")
                            }
                        },
                        error:function(error){
                            console.log(error)
                        }

                    });
                }

                if($('#action').val() == "Edit")
                {
                    console.log('hi edit');

                    $.ajax({
                        url:"{{ route('ajax-cashout.update') }}",
                        method:"POST",
                        data:new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                swal({
                                    text: "Cash Out Updated Successfully!",
                                    icon: "success",
                                    button: "Done!",

                                });

                                document.getElementById("btn-submit").reset();

                                document.getElementById("myModalClose").click();
                                $('#store_image').html('');
                                $('#product_table').DataTable().ajax.reload();
                                $('#form_result').html(html);



                            }else{
                                alert("Error")
                            }
                        },
                        error:function(error){
                            console.log(error)
                        }
                    });
                }
            });

            $(document).on('click', '.edit', function(){

                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url:"/ajax-cashout/"+id+"/edit",
                    dataType:"json",
                    success:function(html){

                        $('#user_id').val(html.user.username);
                        $('#product_id').val(html.product.name);
                        $('#amount').val(html.data.amount);

                        $('#hidden_id').val(html.data.id);
                        $('.modal-title').text("Edit Cash-Out");
                        $('#action_button').val("Edit");
                        $('#action').val("Edit");

                        $('#productModal').modal('show');
                    }
                })
            });




            var user_id;

            $(document).on('click', '.delete', function(){
                user_id = $(this).attr('id');


                swal({
                    title: "Are you sure?",
                    text: "This Action Cannot be Reversed!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                url:"ajax-cashout/destroy/"+user_id,
                                beforeSend:function(){

                                },
                                success:function(data)
                                {
                                    setTimeout(function(){

                                        $('#product_table').DataTable().ajax.reload();
                                    }, 2000);
                                }
                            })
                            swal("Cash out deleted successfully!", {
                                icon: "success",
                            });
                        }
                    });

            });


        });


    </script>


@endsection

