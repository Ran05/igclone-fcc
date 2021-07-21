@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/logo.png" class="w-100 rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex align-items-center pb-4">
                <h1>Developer Mode</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>127k</strong>post</div>
                <div class="pr-5"><strong>24k</strong>followers</div>
                <div class="pr-5"><strong>300</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">Developer Mode</div>
            <div> This is a sample description</div>
            <div> <a href="#">developermode.com</a></div>
        </div>
    </div>
    <!-- Here is another row -->
    <div class="row">
        <div class="col-4">
            <img src="/img/post-1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post-2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/post-3.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
