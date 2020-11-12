@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-body">
                @if (Auth()->user()->admin === 1)
                <h1 class="box-title">Selamat Datang!</h1>
                <p class="lead">Halo {{ Auth()->user()->name }}, kamu adalah seorang Admin dan kamu bisa melakukan management data</p>

                @else
                <h1 class="box-title">Selamat Datang!</h1>
                <p class="lead">Halo {{ Auth()->user()->name }}, kamu adalah seorang user</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
