@extends('layout.template')

@section('content')
    <div class="container mt-4 mb-4">
        {{-- ================== POINTS TABLE ================== --}}
        <div class="card shadow">
            <div class="card-header bg-pink text-white">
                <h4 class="mb-0">Points Table</h4>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover table-pink mb-0" id="pointstable">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th style="width:20%">Description</th>
                            <th style="width:25%">Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($points as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td style="font-size:0.85rem; max-width:200px;">
                                    {{ $p->description }}
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }} image" width="220" class="img-thumbnail img-large" title="{{ $p->image }}">
                                </td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- ================== POLYLINES TABLE ================== --}}
        <div class="card shadow mt-4">
            <div class="card-header bg-pink text-white">
                <h4 class="mb-0">Polyline Table</h4>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover table-pink mb-0" id="polylinestable">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th style="width:20%">Description</th>
                            <th style="width:25%">Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($polylines as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td style="font-size:0.85rem; max-width:200px;">
                                    {{ $p->description }}
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }} image" width="220" class="img-thumbnail img-large" title="{{ $p->image }}">
                                </td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- ================== POLYGONS TABLE ================== --}}
        <div class="card shadow mt-4">
            <div class="card-header bg-pink text-white">
                <h4 class="mb-0">Polygon Table</h4>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover table-pink mb-0" id="polygonstable">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th style="width:20%">Description</th>
                            <th style="width:25%">Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($polygons as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td style="font-size:0.85rem; max-width:200px;">
                                    {{ $p->description }}
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }} image" width="220" class="img-thumbnail img-large" title="{{ $p->image }}">
                                </td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">

    <style>
        /* ---------- Global ---------- */
        body {
            background-color: #fff0f5; /* pink muda lembut */
        }

        .container {
            background-color: #e280a2;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(233, 30, 99, 0.1); /* bayangan pink tipis */
        }

        .card {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card-header {
            padding: 1rem 1.25rem;
        }

        .bg-pink {
            background-color: #e31459 !important;
        }

        /* ---------- Table ---------- */
        .table-pink thead th {
            vertical-align: middle;
            text-align: center;
            background-color: #fc80a9;
            color: #390320;
        }

        .table-pink tbody tr:hover {
            background-color: #cf0f52 !important;
        }

        /* ---------- Images ---------- */
        .img-thumbnail {
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(242, 18, 138, 0.25);
        }

        .img-large {
            max-height: 150px;
            object-fit: cover;
        }
    </style>
@endsection

@section('scripts')
    {{-- jQuery & DataTables JS --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>

    <script>
        new DataTable('#pointstable');
        new DataTable('#polylinestable');
        new DataTable('#polygonstable');
    </script>
@endsection
