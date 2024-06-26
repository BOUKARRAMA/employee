@extends('adminlte::page')

@section('title')
Home
@endsection
@section('content_header')
<h1>Dashboard</h1>
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Employee::count()}}</h3>
                    <p>Employes</p>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/employes')}}" class="small-box-footer">
                        More Info<i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection