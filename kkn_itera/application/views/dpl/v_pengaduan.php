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
                        <li class="active">Pengaduan</li>
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
                        <h4>Laporan Pengaduan</h4>
                    </div>


                    <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          <th>Photo</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Laporan Pengaduan</th>
                    <th>Keterangan</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach ($data->result_array() as $i) :
                       $nim=$i['nim'];
                       $nama=$i['nama'];
                       $laporan_pengaduan=$i['laporan_pengaduan'];
                       $keterangan=$i['keterangan'];
                       $aksi=$i['aksi'];
                    ?>

                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $pnim;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" href="<?php echo base_url().'dpl/laporan_pengaduan/'.$laporan_pengaduan;?>"><span class="fa fa-arrow-down"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $nim;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
        <?php endforeach;?>
                </tbody>
              </table>
            </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
</div><!-- /#right-panel -->