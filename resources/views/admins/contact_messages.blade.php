@extends('layouts.admin_layout')

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Contact Message Details</h1>

        <!-- Content Row -->
        <div class="row">

            <!-- Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contact Messages</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Messages: {{$msg_count}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-university fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Card Example -->

        </div>
        <!-- /.End Content Row -->

        <!-- Page Body -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="custom-control-inline mt-2">
                    <h5 class="m-0 font-weight-bold text-primary">Contact Message Details</h5>
                </div>
                {{--<button style="float: right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfaculty">Add New Faculty</button>--}}
            </div>

            <div class="card-body">

                {{--<form action="faculty_search" method="post">
                    {{csrf_field()}}

                    <div class="input-group">
                        <input style="padding: 5px;" type="text" name="search" id="search" placeholder=" Search Here...">
                        <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                    </div>
                </form>

                <hr>--}}

                <div class="table-responsive">
                    <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>UIC_No</th>
                            <th>First_Name</th>
                            <th>Last_Name</th>
                            <th>Message</th>
                            <th><center>Action</center></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_msg as $msg)
                            <tr>
                                <td>{{$msg->id}}</td>
                                <td>{{$msg->uic_no}}</td>
                                <td>{{$msg->first_name}}</td>
                                <td>{{$msg->last_name}}</td>
                                <td>{{$msg->message}}</td>
                                <td><center>
                                        <a class="btn btn-info viewMsg" data-uic_no="{{$msg->uic_no}}" data-first_name="{{$msg->first_name}}"
                                           data-last_name="{{$msg->last_name}}" data-message="{{$msg->message}}" >View</a>
                                        <a class="btn btn-danger deleteMsg">Delete</a>
                                    </center></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {{$all_msg->links()}}

                </div>

            </div>
            <!-- /.end card body -->
        </div>
        <!-- /.End Page Body -->


    </div>
    <!-- /.container-fluid -->

    <!-- view hostel model button form -->
    <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h3 class="modal-title">View User Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="h6 modal-body ">
                    <div class="row">
                        <dic class="col">
                            <div class="form-group">
                                <label>UIC No:</label>&nbsp<span id="uic_no"  class="badge badge-primary"></span>
                            </div>
                            <div class="form-group">
                                <label>Name:</label>&nbsp<span id="first_name" class="badge badge-primary"></span>&nbsp<span id="last_name" class="badge badge-primary"></span>
                            </div>
                            <div class="form-group">
                                <label>Message:</label>&nbsp<span id="message" class="badge badge-primary"></span>
                            </div>
                        </dic>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End view hostel model button form -->


    <!-- Delete hostel model button form -->
    <div class="modal fade" id="deleteMsgModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Messages Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteMsgDetails">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <div class="modal-body">
                        <input type="hidden" id="msg_id" name="msg_id">
                        <p>Are You Sure !! Delete <br> this <input class="btn btn-danger btn-sm" type="text" id="uicNo" name="uicNo" disabled> Message..?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End edit hostel model button form -->

<!-------------------------------------------------- put this page related scripts here -------------------------------------------->

    <!-- Ajax scripts link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--- View Modal ajax Script code --->
    <script>
        // here we will do our view details part okay.
        $(document).on('click', '.viewMsg', function(){
            $('.modal-title').text('Contact Message ');
            $('.form-horizontal').show();
            $('#uic_no').text($(this).data('uic_no'));
            $('#first_name').text($(this).data('first_name'));
            $('#last_name').text($(this).data('last_name'));
            $('#message').text($(this).data('message'));
            $('#viewUserModal').modal('show');
        });
    </script>
    <!--- End View Modal ajax Script code --->


    <!--- Delete Modal ajax Script code --->
    <script>

        $('.deleteMsg').on('click', function () {
            $('#deleteMsgModal').modal('show');
            $tr = $(this).closest('tr');
            var data =$tr.children("td").map( function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#msg_id').val(data[0]);
            $('#uicNo').val(data[1]);
        });

        $('#deleteMsgDetails').on('submit', function (e) {
            e.preventDefault();
            var id =$('#msg_id').val();
            $.ajax({
                type: "DELETE",
                url: "/delete_message/"+id,
                data: $('#deleteMsgDetails').serialize(),
                success: function (response) {
                    console.log(response);
                    $('#deleteMsgModal').modal('hide');
                    alert("Data Deleted");
                    location.reload();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    </script>
    <!--- End Delete Modal ajax Script code --->

@endsection
