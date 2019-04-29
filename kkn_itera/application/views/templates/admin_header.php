<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KKN ITERA</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url('apple-icon.png') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/itera.ico') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/selectFX/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/jqvmap/dist/jqvmap.min.css') ?>">


    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">KKN ITERA</a>
                <a class="navbar-brand hidden">KKN</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('Admin'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">ADMIN</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti ti-user"></i>Tinjau Profil</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url('Admin/profilDPL'); ?>">Data Diri DPL </a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url('Admin/profilMHS'); ?>">Data Diri Mahasiswa</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="<?php echo base_url('Admin/wali'); ?>">Tinjau Wali Penanggung</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/desa'); ?>"> <i class="menu-icon fa fa-building-o"></i>Profil desa</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Unggah Nilai</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th-list"></i><a href="<?php echo base_url('Admin/nilai'); ?>">Unggah Nilai Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti ti-announcement"></i>Lihat Pengaduan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-themify-logo"></i><a href="<?php echo base_url('Admin/aduan'); ?>">Lihat Aduan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Admin/kuesioner'); ?>"> <i class="menu-icon fa fa-question"></i>Lihat Kuesioner </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>