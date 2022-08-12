@extends('layouts.std_navbar')

@section('content')

        <div class="container-fluid p-3 my-1 bg-primary text-white" align="center">
            <h1>Faculty of Applied Sciences</h1>
        </div>

        @include('layouts.slide_show')

        <div class="container p-1 my-3 ">

            @if(\Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ \Session::get('error') }}
                </div>
            @endif

                @if(count($errors)>0)
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif

            <form action="deptYear" method="POST">
                {{csrf_field()}}
               <div class="row">
                    <div class="col-md-6">
                        <label>Department You Want:</label>
                        <select name="dept" class="form-control mb-3">
                            <option hidden disabled selected>Choose...</option>
                            <option value="CIS">Department of Computing & Information System</option>
                            <option value="FOOD">Department of Food Sciences & Technology</option>
                            <option value="NR">Department of Natural Resources</option>
                            <option value="PST">Department of Physical Sciences & Technology</option>
                            <option value="SPORT">Department of Sport Science Management & Physical Education</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Year & Semester You Want:</label>
                            <select name="std_year_sem" class="form-control mb-3" required>
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

                   <div class="col-md-2">
                       <div class="form-group">
                           <label>Which Year You Want:</label>
                           <input type="text" class="form-control md-3" name="paper_year" aria-describedby="lHelp" placeholder="Year">
                           <small id="emailHelp" class="form-text text-muted">Last 5 years only available!</small>
                       </div>
                   </div>
               </div>
                <div class="col-md-0">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                </div>
            </form>
        </div>



        {{--department pages linka hire according to data user search--}}
        @yield('content1')




@endsection
