@extends('layouts.atlantis')
@section('title', 'Dashboard')
@section('content')
    <div class="panel-header bg-dark-gradient">
        <div class="py-5 page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="pb-2 text-white fw-bold">Welcome back, {{ Auth::user()->name }}</h2>
                    <h5 class="mb-2 text-white op-7">Yesterday I was clever, so I wanted to change the
                        world. Today I am wise, so I am changing myself.</h5>
                </div>
                <div class="py-2 ml-md-auto py-md-0">
                    <a href="{{ route('asset.index') }}" class="mr-2 btn btn-white btn-border btn-round">Menage</a>
                    <a href="{{ route('asset.create') }}" class="btn btn-secondary btn-round">Add Asset</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="text-center icon-big">
                                    <i class="icon-screen-desktop"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Assets</p>
                                    <h4 class="card-title">{{ $assets->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-info card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="text-center icon-big">
                                    <i class="flaticon-layers"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Categories</p>
                                    <h4 class="card-title">{{ $categories->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-success card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="text-center icon-big">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Location</p>
                                    <h4 class="card-title">{{ $location->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-secondary card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="text-center icon-big">
                                    <i class="flaticon-user-1"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Users</p>
                                    <h4 class="card-title">{{ $users->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Assets</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Categori</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assets as $asset)
                                    <tr>
                                        <td></td>
                                        <td><img src="{{ asset('storage/' . $asset->photo) }}" alt="..."
                                                class="mr-2 rounded avatar avatar-img"></td>
                                        <td><a href="{{route('asset.show', $asset->id)}}" class="d-block">{{ $asset->name }}</a></td>
                                        <td>{{ $asset->category->name }}</td>
                                        <td>{{ $asset->location->name }}</td>
                                        <td>
                                            <div class="fw-light">{{ $asset->created_at }}</div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('asset.index') }}" rel="noopener noreferrer">View all Assets</a>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Categories</div>
                    </div>
                    <div class="pb-0 card-body">
                        
                        @foreach ($categories as $category)
                        
                            <div class="d-flex">
                                <div class="flex-1 pt-1 ml-2">
                                    <h6 class="mb-1 fw-bold">{{$category->name}}</h6>
                                    <small class="text-muted">{{$category->created_at}}</small>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <h3 class="text-info fw-bold">{{$category->assets->count()}}<small class="ml-2 text-muted">Asset</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="separator-dashed mt"></div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <a href="{{route('categories.index')}}" rel="noopener noreferrer">View all Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
