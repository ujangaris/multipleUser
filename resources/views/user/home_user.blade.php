@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-body">
                <h1 class="box-title">Selamat Datang!</h1>
                <p class="lead">Halo {{ Auth()->user()->name }}, kamu adalah seorang user</p>
            </div>
        </div>
    </div>
</div>
@endsection
