@extends('layouts.admin_layout')

@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Papers</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Data Adding Form</li>
                <li class="breadcrumb-item active" aria-current="page">Add Papers</li>
            </ol>
        </div>

        <!-- tags -->
        <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Papers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">ALL: {{$data['pp_all']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Papers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">PST: {{$data['pp_pst']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-heart fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Papers</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">CIS: {{$data['pp_cis']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-laptop fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1"> Papers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">SPORT: {{$data['pp_sport']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span>Since yesterday</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-running fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Papers</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">NR: {{$data['pp_nr']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                    <span>Since last month</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tree fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Papers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">FOOD: {{$data['pp_food']}}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span>Since yesterday</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-brain fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--/.tags-->

        <!-- Row -->
        <div class="row">
            <!-- Add Papers -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add Papers</h6>
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

                        <form action="add" method="post">
                            {{csrf_field()}}
                            <!-- row 1 -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Code:</label>
                                        <input type="text" class="form-control" name="course_code"  placeholder="Subject Code">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Paper Attended Year:</label>
                                        <input type="text" class="form-control" name="paper_year" placeholder="Year">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Paper Attended Year & Semester:</label>
                                        <select name="std_year_sem" class="form-control mb-3">
                                            <option hidden disabled selected>Choose...</option>
                                            <option value="1/1">1st Year 1st Semester</option>
                                            <option value="1/2">1st Year 2nd Semester</option>
                                            <option value="2/1">2st Year 1st Semester</option>
                                            <option value="2/2">2nd Year 2nd Semester</option>
                                            <option value="3/1">3st Year 1st Semester</option>
                                            <option value="3/2">3rd Year 2nd Semester</option>
                                            <option value="4/1">4st Year 1st Semester</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Department:</label>
                                        <select name="dept" class="form-control mb-3">
                                            <option hidden disabled selected>Choose...</option>
                                            <option value="CIS">CIS</option>
                                            <option value="FOOD">FOOD</option>
                                            <option value="NR">NR</option>
                                            <option value="PST">PST</option>
                                            <option value="SPORT">SPORT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row 1 end -->

                            <!-- row 2 -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Download Link:</label>
                                        <input type="text" class="form-control" name="dwnld_link" placeholder="Download Link">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row 2 end -->

                                <button type="reset" class="btn btn-danger">CLEAR</button>
                                <button type="submit" class="btn btn-primary">ADD PAPER</button>
                        </form>
                    </div>
                </div>
            </div>


            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header mt-3 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 mt-0 mb-0 font-weight-bold text-primary">Paper View</h5>
                    </div>
                    <div class="table-responsive p-3 mt-0">
                        <hr class="mt-0">
                        <form action="paper_search" method="post" class="mb-3 mt-0">
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
                                    <th>Paper_Year</th>
                                    <th>Allocated_Student_Year</th>
                                    <th>Department</th>
                                    <th><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($add_all as $add)
                                    <tr>
                                        <td>{{$add->id}}</td>
                                        <td>{{$add->course_code}}</td>
                                        <td>{{$add->paper_year}}</td>
                                        <td>{{$add->std_year_sem}}</td>
                                        <td>{{$add->dept}}</td>
                                        <td><center>
                                            <a class="btn btn-primary" href="{{$add->dwnld_link}}">View & Download</a>
                                            <a class="btn btn-danger deletePaper">Delete</a>
                                        </center></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$add_all->links()}}
                    </div>
                </div>
            </div>

        </div>
        <!--Row-->


    </div>
    <!---Container Fluid-->


    <!-- Delete paper model button form -->
    <div class="modal fade" id="deletePaperModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Paper</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deletePapers" >
                    {{csrf_field()}}
                    {{method_field('delete')}}

                    <div class="modal-body">

                        <input type="hidden" id="paper_id" name="paper_id">
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
        $('.deletePaper').on('click', function () {
            $('#deletePaperModal').modal('show');
            $tr = $(this).closest('tr');
            var data =$tr.children("td").map( function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#paper_id').val(data[0]);
            $('#sub_code').val(data[1]);
        });

        $('#deletePapers').on('submit', function (e) {
            e.preventDefault();
            var id =$('#paper_id').val();
            $.ajax({
                type: "DELETE",
                url: "/delete_paper_record/"+id,
                data: $('#deletePapers').serialize(),
                success: function (response) {
                    console.log(response);
                    $('#deletePaperModal').modal('hide');
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
