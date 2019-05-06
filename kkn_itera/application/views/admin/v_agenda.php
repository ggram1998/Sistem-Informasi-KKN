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
    
   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Tambah Agenda</a>
            </div>
    <!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Agenda</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/simpan_pengguna'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul Agenda</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Judul Agenda" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Kegiatan</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="xemail" class="form-control" id="inputEmail3" placeholder="Kegiatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Tanggal" required>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

             <!-- /.box-header -->
             <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Judul agenda</th>
                    <th>kegiatan</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
</div><!-- /#right-panel -->