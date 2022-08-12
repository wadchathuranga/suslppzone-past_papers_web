@extends('layouts.admin_layout')

@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Subjects</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Adding Form</li>
                <li class="breadcrumb-item active" aria-current="page">Add Subjects</li>
            </ol>
        </div>


        <!-- Row -->
        <div class="row">
            <!-- Add Papers -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add Subjects</h6>
                    </div>

                    <div class="card-body">
                        @if(\Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ \Session::get('message') }}
                            </div>
                        @endif

                            @if(count($errors)>0)
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif

                        <form action="add_subject" method="post">
                            {{csrf_field()}}
                            <!-- row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="course_code">Course Code:</label>
                                        <input type="text" id="course_code" class="form-control " name="course_code"  placeholder="Subject Code">

                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="form-group">
                                        <label for="course_name">Course Name:</label>
                                        <input type="text" id="course_name" class="form-control " name="course_name" placeholder="Subject Name">

                                    </div>
                                </div>

                            </div>

                            <!-- /.row 1 end -->


                                <button type="reset" class="btn btn-danger">CLEAR</button>
                                <button type="submit" class="btn btn-primary">ADD SUBJECT</button>

                        </form>
                    </div>
                </div>
            </div>


            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 mt-2 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0  font-weight-bold text-primary">DataTables View</h5>
                    </div>
                    <div class="table-responsive p-3 mt-0">
                        <hr class="mt-0">
                        <form action="search_subject" method="post" class="mb-3 mt-0">
                            {{csrf_field()}}

                            <div class="input-group">
                                <input style="padding: 5px;" type="text" name="search" id="search" placeholder=" Search Here...">
                                <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                            </div>
                        </form>
                        <table class="table align-items-center table-flush bg-dark text-white" id="dataTableHover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Course_Code</th>
                                    <th>Course_name</th>
                                    <th><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sub_all as $sub)
                                    <tr>
                                        <td>{{$sub->id}}</td>
                                        <td>{{$sub->course_code}}</td>
                                        <td>{{$sub->course_name}}</td>
                                        <td><center>
                                            <a class="btn btn-danger deleteSubject">Delete</a>
                                        </center></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$sub_all->links()}}
                    </div>
                </div>
            </div>

        </div>
        <!--Row-->


    </div>
    <!---Container Fluid-->


    <!-- Delete Subject model button form -->
    <div class="modal fade" id="deleteSubjectModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteSubjects" >
                    {{csrf_field()}}
                    {{method_field('delete')}}

                    <div class="modal-body">

                        <input type="hidden" id="subject_id" name="subject_id">
                        <p>Are You Sure !! Delete this <input class="btn btn-danger btn-icon-split btn-sm" type="text" id="sub_code" name="sub_code" disabled> Student Details..?</p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End edit paper model button form -->


<!------------------------------------------- This page related script put here ------------------------------------->

    <!-- Ajax scripts link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--- Delete Modal ajax Script code --->
    <script>
        $('.deleteSubject').on('click', function () {
            $('#deleteSubjectModal').modal('show');
            $tr = $(this).closest('tr');
            var data =$tr.children("td").map( function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#subject_id').val(data[0]);
            $('#sub_code').val(data[1]);
        });

        $('#deleteSubjects').on('submit', function (e) {
            e.preventDefault();
            var id =$('#subject_id').val();
            $.ajax({
                type: "DELETE",
                url: "/delete_subject_record/"+id,
                data: $('#deleteSubjects').serialize(),
                success: function (response) {
                    console.log(response);
                    $('#deleteSubjectModal').modal('hide');
                    alert("Data Deleted");
                    location.reload();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    </script>
    <!--- /.End Delete Modal ajax Script code --->


    <!-- Page level plugins -->
    <script src="{{asset('adminTemp/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminTemp/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>


@endsection
