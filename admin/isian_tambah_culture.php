<?php
include "../admin/header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!-- ... (Your existing content-header code) ... -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Display data from the destination table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Menambahkan Data Culture</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="proses_tambah_culture.php" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul" name="judul">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="isi" class="col-sm-2 col-form-label">kutipan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kutipan" name="kutipan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="isi" class="col-sm-2 col-form-label">isi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="isi" name="isi">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tgl_isi" name="tgl_isi" required="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="gambar" class="col-sm-2 col-form-label">gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="gambar" name="gambar" required="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <input type="submit" name="simpan" value="Simpan Data"
                                            class="btn btn-primary" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->