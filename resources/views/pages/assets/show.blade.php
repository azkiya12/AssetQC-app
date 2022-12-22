@extends('layouts.atlantis')
@section('title', 'Show Asset')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">{{ $item->name }}</h2>
                    <h5 class="text-white op-7 mb-2">{{ $item->asset_taq }}</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{route('asset.edit', $item->id)}}" class="btn btn-white btn-border btn-round mr-2">Edit</a>
                    <a href="#" class="btn btn-secondary btn-round">Export PDF</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner">
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <nav class="mb-4">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-info-tab" data-toggle="tab" data-target="#nav-info"
                                type="button" role="tab" aria-controls="nav-info" aria-selected="true">Info</button>
                            <button class="nav-link" id="nav-document-tab" data-toggle="tab" data-target="#nav-document"
                                type="button" role="tab" aria-controls="nav-document"
                                aria-selected="false">Document</button>
                            <button class="nav-link" id="nav-history-tab" data-toggle="tab" data-target="#nav-history"
                                type="button" role="tab" aria-controls="nav-history"
                                aria-selected="false">History</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-info" role="tabpanel"
                            aria-labelledby="nav-info-tab">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card card-pricing">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <ul class="specification-list">
                                                        <li>
                                                            <span class="name-specification">Status</span>
                                                            <span
                                                                class="status-specification">{{ $item->status->name }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Category</span>
                                                            <span
                                                                class="status-specification">{{ $item->category->name }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Model/Type</span>
                                                            <span class="status-specification">{{ $item->model }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Serial No.</span>
                                                            <span class="status-specification">{{ $item->serial }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Manufaktur</span>
                                                            <span
                                                                class="status-specification">{{ $item->manufaktur->name }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Location</span>
                                                            <span
                                                                class="status-specification">{{ $item->location->name }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Created at</span>
                                                            <span
                                                                class="status-specification">{{ $item->created_at }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Updated at</span>
                                                            <span
                                                                class="status-specification">{{ $item->updated_at }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <ul class="specification-list">
                                                        <li>
                                                            <span class="name-specification">Order No</span>
                                                            <span class="status-specification">{{ $item->order_no }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Purchase Date</span>
                                                            <span
                                                                class="status-specification">{{ $item->purchase_date }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Purchase Cost</span>
                                                            <span
                                                                class="status-specification">{{ $item->purchase_cost }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Suppliers</span>
                                                            <span
                                                                class="status-specification">{{ $item->supplier->name }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Receipt At</span>
                                                            <span
                                                                class="status-specification">{{ $item->receipt_date }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="name-specification">Warranty</span>
                                                            <span class="status-specification">{{ $item->warranty_months }}
                                                                month</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-post card-round">
                                        <img class="card-img-top" src="{{asset('storage/'.$item->photo)}}" alt="Card image cap">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Type File</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Note</th>
                                        <th scope="col">File size</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Create at</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                            history
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
