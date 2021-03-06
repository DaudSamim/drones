@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="card-title btn btn-primary btn-sm float-right text-white" name="create_record" id="create_product">
                        Add New User
                    </button>
                    <h6 class="card-title">Users</h6>
                    <!-- Modal -->
                    <div id="productModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="m-body">
                                    <span id="form_result"></span>
                                    <form id="btn-submit">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Username / Email</label>
                                                    <input type="text" class="form-control" id="username" name="username"  placeholder="@username">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
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

                                <th>ID</th>
                                <th>Name</th>
                                <th>Username / Email</th>

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
                    url: "{{ route('ajax-user.index') }}",
                },
                columns: [

                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ],
                'columnDefs': [
                    {
                        "targets": 2, // your case first column
                        "className": "text-center",

                    }],
            });


            $('#create_product').click(function(){
                $('.modal-title').text("Add New User");
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
                        url:"{{ route('ajax-user.store') }}",
                        method:"POST",
                        data: new FormData(this),
                        contentType: false,
                        cache:false,
                        processData: false,
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                swal({
                                    text: "User Added Successfully!",
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
                    console.log('aqdas edit');

                    $.ajax({
                        url:"{{ route('ajax-user.update') }}",
                        method:"POST",
                        data:new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType:"json",
                        success:function(response){
                            if(response.success){
                                swal({

                                    text: "User Updated Successfully!",
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
            });

            $(document).on('click', '.edit', function(){
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url:"/ajax-user/"+id+"/edit",
                    dataType:"json",
                    success:function(html){

                            $('#username').val(html.data.username);
                            $('#password').val(html.data.password);
                            $('#name').val(html.data.name);

                            $('#hidden_id').val(html.data.id);
                            $('.modal-title').text("Edit User");
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
                                url:"ajax-user/destroy/"+user_id,
                                beforeSend:function(){

                                },
                                success:function(data)
                                {
                                    setTimeout(function(){

                                        $('#product_table').DataTable().ajax.reload();
                                    }, 2000);
                                }
                            })
                            swal("User deleted Successfully!", {
                                icon: "success",
                            });
                        }
                    });

            });


        });


    </script>


@endsection

