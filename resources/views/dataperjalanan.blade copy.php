@extends('layout.main')

@section('content')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="admin, dashboard">
<meta name="author" content="DexignZone">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Dompet : Payment Admin Template">
<meta property="og:title" content="Dompet : Payment Admin Template">
<meta property="og:description" content="Dompet : Payment Admin Template">
<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
<meta name="format-detection" content="telephone=no">

<!-- PAGE TITLE HERE -->
<title>Dompet : Payment Admin Template</title>

<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<!-- Datatable -->
<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Custom Stylesheet -->
<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Catatan Perjalanan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Catatan Perjalanan</li>

                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $row->tanggal}}</td>
                                <td>{{ $row->waktu}}</td>
                                <td>{{ $row->lokasi}}</td>
                                <td>{{ $row->suhu}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>

<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
@endsection
