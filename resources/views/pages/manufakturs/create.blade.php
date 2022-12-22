@extends('layouts.atlantis')
@section('title', 'Add Manufaktur')
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
                    <a href="{{ route('manufakturs.index') }}">Manufakturs</a>
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
                    <form action="{{ route('manufakturs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Add Manufakturs</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="made_in">Made In</label>
                                        <input type="text" name="made_in" class="form-control" id="made_in">
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
