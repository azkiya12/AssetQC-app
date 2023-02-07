@extends('layouts.atlantis')
@section('title', 'Assets')
@push('addon-style')

@endpush
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
                    <a href="#">Index</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left card-title">Asset</div>
                    
                    <a href="{{ route('asset.create') }}" class="float-right btn btn-primary">+ Tambah Asset</a>
                    <a href="{{ route('asset.create') }}" class="float-right btn btn-outline-success mr-2">Export Excel</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Asset Taq</th>
                                    <th scope="col">No. Model/Type</th>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Manufaktur</th>
                                    <th scope="col">Create at</th>
                                    <th scope="col">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="#" target="_blank" rel="noopener noreferrer"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('addon-script')
    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript">
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{ data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false  },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'photo',
                    name: 'photo'
                },
                {
                    data: 'asset_taq',
                    name: 'asset_taq'
                },
                {
                    data: 'model',
                    name: 'model'
                },
                {
                    data: 'serial',
                    name: 'serial'
                },
                {
                    data: 'category.name',
                    name: 'category.name'
                },
                {
                    data: 'location.name',
                    name: 'location.name'
                },
                {
                    data: 'manufaktur.name',
                    name: 'manufaktur.name'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    printable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush
