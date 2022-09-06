@extends('layouts.default')

@section('content')

<section class="px-4 py-5 text-center hero-section vh-80">
    <div class="fs-3 logotext py-5">Get anonymous messages <br/>from anyone online!</div>
    <a href="/register" class="btn btn-light btn-lg">Get started</a>
</section>
<section class="pt-5 explainer py-5">
    <p class="fs-5 text-center logotext">Why do you need this?</p>
    <div class="row px-4">
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <box-icon name='envelope' type='solid' ></box-icon>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <box-icon type='solid' name='hide'></box-icon>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <box-icon type='solid' name='bar-chart-alt-2'></box-icon>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <box-icon type='solid' name='like'></box-icon>
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="cta pt-5 py-5">
    <h1 class="fs-4 text-left logotext w-75 p-4">Discuss sensitive issues and provide more detailed and honest feedback</h1>
    <div class="ctalinks">

    </div>
</section>
@stop