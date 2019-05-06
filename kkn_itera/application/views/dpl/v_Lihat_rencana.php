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
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/dashboard/home"><i class="fa fa-power-off"></i> Logout</a>
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--default tab-->
        <div class="content mt-3">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tinjau Dokumen pendukung </strong>
                            </small>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-link btn-lg btn-block"><a href="<?php echo base_url('assets/assets/document/Buku-Pedoman-KKN.pdf') ?>">Rencana Kegiatan</a></button>
                            <button type="button" class="btn btn-link btn-lg btn-block"><a href="<?php echo base_url('assets/assets/document/PembekalanKKN.pptx') ?>">Laporan Harian</a></button>
                            <button type="button" class="btn btn-link btn-lg btn-block"><a href="<?php echo base_url('assets/assets/document/Logbook.xlsx') ?>">log Book</a></button>
                            <button type="button" class="btn btn-link btn-lg btn-block"><a href="<?php echo base_url('assets/assets/document/PembekalanKKN.pptx') ?>">Laporan Akhir</a></button>
                            <button type="button" class="btn btn-link btn-lg btn-block"><a href="<?php echo base_url('assets/assets/document/PembekalanKKN.pptx') ?>">Laporan Video</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->