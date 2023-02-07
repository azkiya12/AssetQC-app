@extends('layouts.atlantis')
@section('title', 'Add Asset')
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
                    <a href="{{ route('asset.index') }}">Asset</a>
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
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Asset</div>
                    </div>
                    <form action="{{ route('asset.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="asset_taq">Asset Taq</label>
                                        <input name="asset_taq" type="text" class="form-control input-square"
                                            id="asset_taq" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" class="form-control" id="category_id">
                                            <option selected value="">select...</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="manufactur_id">Manufaktur</label>
                                        <select name="manufaktur_id" class="form-control" id="manufactur_id">
                                            <option selected value="">select...</option>
                                            @foreach ($manufakturs as $manufaktur)
                                                <option value="{{ $manufaktur->id }}">{{ $manufaktur->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model/Type</label>
                                        <input name="model" type="text" class="form-control" id="model"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="serial">Serial</label>
                                        <input name="serial" type="text" class="form-control" id="serial" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_id">Status</label>
                                        <select name="status_id" class="form-control" id="status_id">
                                            <option selected value="">select...</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-7">
                                        <label for="exampleFormControlFile1">Upload Photo</label>
                                        <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                                        <small>Accepted filetypes are *.jpg, *.webp, *.png, *.gif, *.svg</small>
                                    </div>

                                </div>


                                <div class="col-lg-6">
                                    <div class="accordion accordion-info">
                                        <div class="card">
                                            <div class="card-header collapsed" id="headingOne" data-toggle="collapse"
                                                data-target="#optionInfo" aria-expanded="true" aria-controls="optionInfo">

                                                <div class="span-title">
                                                    Optional Information
                                                </div>
                                                <div class="span-mode"></div>
                                            </div>

                                            <div id="optionInfo" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label for="warranty_months">Warranty Months</label>
                                                        <div class="mb-3 input-group">
                                                            <input name="warranty_months" type="number" class="form-control"
                                                                aria-describedby="warranty_months" min="0"
                                                                max="200">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    id="warranty_months">Months</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location_id">Location Asset</label>
                                                        <select class="form-control" name="location_id" id="location_id">
                                                            <option selected value="">select...</option>
                                                            @foreach ($locations as $location)
                                                                <option value="{{ $location->id }}">{{ $location->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion accordion-info">
                                        <div class="card">
                                            <div class="card-header collapsed" id="headingOne" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <div class="span-title">
                                                    Order Related Information
                                                </div>
                                                <div class="span-mode"></div>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="bg-transparent card-body">
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="receipt_date">Receipt At</label>
                                                        <input type="date" name="receipt_date" value="" class="form-control" min="2000-05-01" max="2030-12-31" />
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="purchase_date">Purchase Date</label>
                                                        <input type="date" name="purchase_date" value="" class="form-control" min="2000-05-01" max="2030-12-31" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="purchase_cost">Purchase Cost</label>
                                                        <div class="mb-3 input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="supplier_id">Supplier</label>
                                                        <select class="form-control" name="supplier_id" id="supplier_id">
                                                            <option selected value="">select...</option>
                                                            @foreach ($suppliers as $supplier)
                                                                <option value="{{ $supplier->id }}">{{ $supplier->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="order_no">Order No</label>
                                                        <input type="text" class="form-control" id="order_no"
                                                            placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="condition">Condition</label>
                                                        <input type="text" class="form-control" id="condition"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="mr-2 btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
