@extends('layouts.dashboard.app')

@section('content')
    {{-- Breadcrumbs --}}
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)"></a>Master</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">{{ $title }}</h5>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-md-6">
                    <label class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><b>Opening Hours</b></label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" value="" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label"><b>Phone</b></label>
                    <input type="number" class="form-control" value="" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label"><b>Location</b></label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label"><b>Headline</b></label>
                    <textarea class="form-control" rows="5" disabled></textarea>
                </div>
                <div class="col-md-8">
                    <label class="form-label"><b>About</b></label>
                    <textarea class="form-control" rows="5" disabled></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><b>Hero Image</b></label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><b>About Image</b></label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
            </div>
        </div>
    </div>
@endsection