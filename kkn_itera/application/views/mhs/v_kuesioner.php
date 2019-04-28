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
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--default tab-->
    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Kuesioner KKN</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kuesioner keupasan mahasiswa</label></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Periode</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Pilih Periode</option>
                                        <option value="1">Juli</option>
                                        <option value="2">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Tahun</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Pilih Tahun</option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                        <option value="4">2022</option>
                                        <option value="5">2023</option>
                                        <option value="6">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIM</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Masukan NIM" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">NAMA</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Masukan Nama" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Kabupaten</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Pilih Kabupaten</option>
                                        <option value="1">lampung barat</option>
                                        <option value="2">lampung selatan</option>
                                        <option value="3">lampung timur</option>
                                        <option value="4">lampung utara</option>
                                        <option value="5">lampung tengah</option>
                                        <option value="6">bandar lamupng</option>
                                        <option value="7">mesuji</option>
                                        <option value="8">pesawaran</option>
                                        <option value="9">pringsewu</option>
                                        <option value="10">tanggamus</option>
                                        <option value="11">tulang bawang</option>
                                        <option value="12">tulang bawang barat</option>
                                        <option value="13">way kanan</option>
                                        <option value="14">pesisir barat</option>
                                        <option value="15">metro</option>
                                        <option value="16">ogan illir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Masukan Kecamatan" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Desa</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Masukan Desa" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Kepuasan</label></div>
                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Masukan Kepuasan anda" class="form-control"></textarea></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->