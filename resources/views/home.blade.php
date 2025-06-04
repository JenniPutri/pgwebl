@extends('layout.template')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #fff0f5;
            overflow: hidden;
        }

        .center-wrapper {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-card {
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(240, 98, 146, 0.2);
            width: auto;
            max-width: 90vw;
            background-color: #fbf6f6;
        }

        .custom-header {
            background: linear-gradient(90deg, #f48fb1, #ec407a);
            color: white;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .custom-header h5 {
            margin: 0;
            font-weight: 600;
        }

        .custom-table th {
            background-color: #fce4ec;
            color: #ad1457;
            width: 35%;
            font-weight: 600;
        }

        .custom-table td {
            background-color: #fff;
            color: #444;
        }

        .custom-table tr:hover td {
            background-color: #f3607d;
        }
    </style>

    <div class="center-wrapper">
        <div class="card custom-card">
            <div class="custom-header">
                <h5>PEMOGRAMAN GEOSPATIAL WEB LANJUT</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered custom-table mb-0">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>Jenni Putri Ardani</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>23/515612/SV/22586</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>PGWEBL A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
