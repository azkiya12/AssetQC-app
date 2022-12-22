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
                    <a href="#" class="mr-2 btn btn-white btn-border btn-round">Manage</a>
                    <a href="#" class="btn btn-secondary btn-round">Add Asset</a>
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
                                    <h4 class="card-title">1,294</h4>
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
                                    <h4 class="card-title">1303</h4>
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
                                    <h4 class="card-title">1,345</h4>
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
                                    <h4 class="card-title">576</h4>
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
                        <table class="table table-hover table-responsive-md">
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
                                <tr>
                                    <td>1</td>
                                    <td><img src="assets/img/productimg/product1.jpeg" alt="..."
                                            class="mr-2 rounded avatar avatar-img"></td>
                                    <td><a href="" class="d-block">asdas</a></td>
                                    <td>Otto</td>
                                    <td>Location1</td>
                                    <td>
                                        <div class="fw-light">21 Apr 2017</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="assets/img/productimg/product2.jpeg" alt="..."
                                            class="mr-2 rounded avatar avatar-img"></td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Location1</td>
                                    <td>
                                        <div class="fw-light">21 Apr 2017</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="assets/img/productimg/product3.jpeg" alt="..."
                                            class="mr-2 rounded avatar avatar-img"></td>
                                    <td>Larry the Bird</td>
                                    <td>Thornton</td>
                                    <td>Location1</td>
                                    <td>
                                        <div class="fw-light">21 Apr 2017</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="#" target="_blank" rel="noopener noreferrer">View all Assets</a>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Categories</div>
                    </div>
                    <div class="pb-0 card-body">
                        <div class="d-flex">
                            <div class="flex-1 pt-1 ml-2">
                                <h6 class="mb-1 fw-bold">Timbangan Digital</h6>
                                <small class="text-muted">The Best Donuts</small>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <h3 class="text-info fw-bold">17<small class="ml-2 text-muted">Asset</small>
                                </h3>
                            </div>
                        </div>
                        <div class="separator-dashed mt"></div>

                        <div class="d-flex">
                            <div class="flex-1 pt-1 ml-2">
                                <h6 class="mb-1 fw-bold">Oven</h6>
                                <small class="text-muted">The Best Donuts</small>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <h3 class="text-info fw-bold">17<small class="ml-2 text-muted">Asset</small>
                                </h3>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>

                        <div class="d-flex">
                            <div class="flex-1 pt-1 ml-2">
                                <h6 class="mb-1 fw-bold">Grinder</h6>
                                <small class="text-muted">The Best Donuts</small>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <h3 class="text-info fw-bold">4<small class="ml-2 text-muted">Asset</small>
                                </h3>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>
                    </div>
                    <div class="card-footer">
                        <a href="#" rel="noopener noreferrer">View all Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
