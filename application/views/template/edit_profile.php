

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Profile</h1>
                   <div class="row">
                    <div class="col-md-3">
</div>
<div class="col-md-6">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Profile</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('karyawan/proses_edit_karyawan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Karyawan</label>
                                        <input type="hidden" class="form-control" name="id_karyawan" value="<?php echo $karyawan->id_karyawan ?>">
                                        <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $karyawan->nama_karyawan ?>">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $karyawan->tgl_lahir ?>">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No HP Aktif</label>
                                        <input type="text" class="form-control" name="no_hp" value="<?php echo $karyawan->no_hp ?>">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $karyawan->alamat ?>">

                                    </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" accept=".jpg,.jpeg,.png" class="form-control" name="foto">

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                </div>
                                <div class="col-md-2">
                                    <input type="reset" value="reset" class="btn btn-success">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="simpan" class="btn btn-primary">
                                </div>
                                

                            </div>

                            </form>
                            
                        </div>
                    </div>
</div>
</div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" karyawan-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" karyawan-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    