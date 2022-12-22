@extends('layouts.atlantis')
@section('title', 'Edit Status')
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
                    <a href="#">Edit</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="card">
                     <form action="{{ route('status.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Edit Status</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter name status" value="{{$item->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" id="description" value="{{$item->description}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="mr-2 btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
