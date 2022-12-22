@extends('layouts.atlantis')
@section('title', 'Edit Asset')
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
                    <a href="#">Edit</a>
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
                        <div class="card-title">Edit Asset</div>
                    </div>
                    <form action="{{ route('asset.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="asset_taq">Asset Taq</label>
                                        <input name="asset_taq" type="text" class="form-control input-square"
                                            id="asset_taq" placeholder="" value="{{$item->asset_taq}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="" value="{{ $item->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" class="form-control" id="category_id">
                                            <option value="" {{$item->category_id ?? 'selected'}}>select category...
                                            </option>
                                            @foreach ($categories as $category)
                                                <option 
                                                    value="{{ $category->id }}" 
                                                    {{$item->category_id == $category->id ? 'selected' : ''}}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="manufactur_id">Manufaktur</label>
                                        <select name="manufaktur_id" class="form-control" id="manufactur_id">
                                            <option value="" {{$item->manufaktur_id ?? 'selected'}}>select manufaktur...
                                            </option>
                                            @foreach ($manufakturs as $manufaktur)
                                                <option value="{{ $manufaktur->id }}" 
                                                    {{$item->manufaktur_id == $manufaktur->id ? 'selected' : ''}}>
                                                    {{ $manufaktur->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model/Type</label>
                                        <input value="{{ $item->model }}" name="model" type="text"
                                            class="form-control" id="model" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="serial">Serial</label>
                                        <input value="{{ $item->serial }}" name="serial" type="text"
                                            class="form-control" id="serial" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_id">Status</label>
                                        <select name="status_id" class="form-control" id="status_id">
                                            <option value="" {{$item->status_id ?? 'selected'}}>select status...
                                            </option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}" {{$item->status_id == $status->id ? 'selected' : ''}}>{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-7">
                                        <label for="exampleFormControlFile1">Upload Photo</label>
                                        <br>
                                        @if ($item->photo)
                                            <div class="avatar avatar-xxl">
                                                <img src="{{ asset('storage/' . $item->photo) }}" class="rounded avatar-img">
                                            </div>
                                            <div class="caption">Current photo</div>
                                            <br><br>
                                        @else
                                            No avatar
                                        @endif
                                        <input name="photo" type="file" class="form-control-file"
                                            id="exampleFormControlFile1">
                                        <small>Accepted filetypes are *.jpg, *.webp, *.png, *.gif, *.svg</small>
                                        <small class="text-muted">Kosongkan jika tidak ingin mengubah photo</small>
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
                                                                max="200" value="{{$item->warranty_months}}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    id="warranty_months">Months</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location_id">Location Asset</label>
                                                        <select class="form-control" id="location_id">
                                                            <option value="{{$item->location_id}}" {{$item->location_id ?? 'selected'}}>
                                                                select location...</option>
                                                            @foreach ($locations as $location)
                                                                <option value="{{ $location->id }}" 
                                                                {{$item->location_id == $location->id ? 'selected' : ''}}>
                                                                    {{ $location->name }}
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
                                                        <input type="date" name="receipt_date" value="{{$item->receipt_date}}" class="form-control" min="2000-05-01" max="2030-12-31" />
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="purchase_date">Purchase Date</label>
                                                        <input type="date" name="purchase_date" value="{{$item->purchase_date}}" class="form-control" min="2000-05-01" max="2030-12-31" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="purchase_cost">Purchase Cost</label>
                                                        <div class="mb-3 input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input name="purchase_cost" value="{{number_format($item->purchase_cost)}}" type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="supplier_id">supplier_id</label>
                                                        <select class="form-control" id="supplier_id">
                                                            <option selected>select...</option>
                                                            <option>supplier_id 1</option>
                                                            <option>supplier_id 2</option>
                                                            <option>supplier_id 3</option>
                                                            <option>supplier_id 4</option>
                                                            <option>supplier_id 5</option>
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
