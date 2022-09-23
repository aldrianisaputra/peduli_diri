@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>

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
<div class="card profile-greeting">
    <div class="card-header">
        <div class="header-top">
            <div class="setting-list bg-primary position-unset">
                <ul class="list-unstyled setting-option">
                    <li>
                        <div class="setting-white"><i class="icon-settings"></i></div>
                    </li>
                    <li><i class="view-html fa fa-code font-white"></i></li>
                    <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                    <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                    <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                    <li><i class="icofont icofont-error close-card font-white"></i></li>
                </ul>
            </div>
        </div>
    </div>
    @if (auth()->user()->role == 'user')
                                
    <div class="card-body text-center p-t-0">
        <h3 class="font-light">Wellcome Back, {{auth()->user()->name}}!</h3>
        <p>Welcome to the SelfCare Family! we are glad that you are visite this dashboard. we will be happy to
            help about your trip.</p>
        <a href="/tambahdata" class="btn btn-light" style="">Isi Catatan
            Perjalanan</a>
    </div>
    <div class="confetti">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#profile-greeting" title="Copy"><i
                    class="icofont icofont-copy-alt"></i>Test</button>
        </div>
    </div>
    @endif
    @if (auth()->user()->role == 'admin')
                                
    <div class="card-body text-center p-t-0">
        <h3 class="font-light">Wellcome Back, {{auth()->user()->name}}!</h3>
        <p>Welcome to the SelfCare Family! we are glad that you are visite this dashboard. we will be happy to
            help about your trip.</p>
        <a href="/datauser" class="btn btn-light" style="">Lihat Data User</a>
    </div>
    <div class="confetti">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#profile-greeting" title="Copy"><i
                    class="icofont icofont-copy-alt"></i>Test</button>
        </div>
    </div>
    @endif
</div>
<div class="row">
    <div class="col-xl-12 col-md-6 box-col-6 des-xl-50">


        @endsection
