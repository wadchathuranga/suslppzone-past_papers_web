@extends('layouts.std_navbar')

@section('content')
    @include('applied.applied_slide_show')
    <div class="content">
        <!-- Hotel request card -->
        <div class="card text-center text-white bg-secondary">
            <div class="h3 card-header">
                Papers Available Faculties
            </div>
            <div class="card-body mt-3">
                <h4 class="card-title">Sabaragamuwa University of Sri Lanka Past Papers Zone </h4>
                <p class="h5 card-text">This suslppzone flat form provide for students download and view past papers without going library.</p>
                <p class="card-text text-warning">In addition to that we are working now for e-library system and GPA calculating function.
                    They will be added to the this flat form near future. </p>
            </div>
            <div class="container-fluid mt-4 mb-4 text-white">
                <a class="btn btn-primary btn-lg">APPLIED</a>
                <a class="btn btn-primary btn-lg disabled">SOCIAL</a>
                <a class="btn btn-primary btn-lg disabled">GEOMATIC</a>
                <a class="btn btn-primary btn-lg disabled">MANAGEMENT</a>
                <a class="btn btn-primary btn-lg disabled">AGRI</a>
                <a class="btn btn-primary btn-lg disabled">TECH</a>
            </div>

            <br>
            <br>


        </div>
        <!-- /.hotel request card end -->




    </div>
    @endsection
