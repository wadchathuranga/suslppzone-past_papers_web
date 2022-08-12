@extends('applied.applied_papers')

@section('content1')

    <div class="container-fluid">

    <table class="table table-dark">
        <thead class="thead-active">
            <td></td>
            <th>Course Code</th>
            <th>Course Name</th>
            <th><center>View & Download</center></th>
        </thead>
        <tbody>
            @foreach($result as $filter)
                <tr>
                    <td></td>
                    <td>{{$filter->course_code}}</td>
                    @foreach($course_table as $course)
                        @if($course->course_code==$filter->course_code)
                            <td>{{$course->course_name}}</td>
                        @endif
                    @endforeach
                    <td>
                        <center>
                            <a class="btn btn-primary" href="{{$filter->dwnld_link}}">{{$filter->paper_year}}</a>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>



    </table>
    </div>

@endsection
