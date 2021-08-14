@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Naruto Vs Onepiece</div>
                <img src="{{ url('/images/animes/narutovsonepiece.jpg') }}" class="img-fluid ">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Jokowi Vs Prabowo</div>

                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Barcelona Vs RealMadrid</div>

                <div class="card-body">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
