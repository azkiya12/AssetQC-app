@extends('layouts.atlantis')
@section('title', 'Add Status')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('status.index') }}">Status</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Add New</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <form action="{{ route('status.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Add Status</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" id="description">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Color</label>
                                        <div class="row gutters-xs">
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Dark">
                                                    <input name="warna" type="radio" value="dark" class="colorinput-input">
                                                    <span class="colorinput-color bg-dark"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Primary">
                                                    <input name="warna" type="radio" value="primary" class="colorinput-input">
                                                    <span class="colorinput-color bg-primary"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Secondary">
                                                    <input name="warna" type="radio" value="secondary" class="colorinput-input">
                                                    <span class="colorinput-color bg-secondary"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Success">
                                                    <input name="warna" type="radio" value="success" class="colorinput-input">
                                                    <span class="colorinput-color bg-success"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Danger">
                                                    <input name="warna" type="radio" value="danger" class="colorinput-input">
                                                    <span class="colorinput-color bg-danger"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Warning">
                                                    <input name="warna" type="radio" value="warning" class="colorinput-input">
                                                    <span class="colorinput-color bg-warning"></span>
                                                </label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="colorinput" data-toggle="tooltip" data-placement="bottom" title="Info">
                                                    <input name="warna" type="radio" value="info" class="colorinput-input">
                                                    <span class="colorinput-color bg-info"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="mr-2 btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
