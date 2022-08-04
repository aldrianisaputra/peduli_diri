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


<div class="container1">
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="card-title" style="text-align: center">Isi Data</h4>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="needs-validation" action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Tanggal
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" id="validationCustom01"  name="tanggal" required >
                                            <div class="invalid-feedback">
                                                Tolong isi tanggal.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Jam
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="time" class="form-control" id="validationCustom01"  name="waktu" required>
                                            <div class="invalid-feedback">
                                                Tolong isi dahulu.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Lokasi yang dikunjungi
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom01"  name="lokasi" required>
                                            <div class="invalid-feedback">
                                                Tolong isi dahulu.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-4 col-form-label" for="validationCustom01">Suhu Tubuh
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="validationCustom01"name="suhu" required>
                                            <div class="invalid-feedback">
                                                Tolong isi dahulu.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-lg-8 ms-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
