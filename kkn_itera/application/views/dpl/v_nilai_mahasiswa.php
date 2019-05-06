<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?php echo base_url('assets/images/admin.jpg') ?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
                <div class="informasi">
                    <p>SISTEM INFORMASI KKN ITERA</p>
                </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Nilai Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--default tab-->
    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="animated">

                    <div class="card">
                        <div class="card-header">
                            <i class="mr-2 fa fa-align-justify"></i>
                            <strong class="card-title" v-if="headerText">Nilai Mahasiswa</strong>
                        </div>
                        <div class="card-body">
                            <!-- Main content -->
                            <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil"></span> Unggah Nilai Mahasiswa</a>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table id="example1" class="table table-striped" style="font-size:13px;">
                                                    <thead>
                                                        <tr>
                                                            <th>NIM</th>
                                                            <th>Nama</th>
                                                            <th>Nilai</th>
                                                            <th>Keterangan</th>
                                                            <th style="text-align:center;">Aksi</th>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                            <!-- /.content -->
                        </div>
                        <!-- /.content-wrapper -->
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->