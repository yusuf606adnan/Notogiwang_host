<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <p class="mb-0">Selamat datang
                            </p>
                            <p class="mb-0">
                                Ini adalah website tentang
                                <code>Sistem Informasi Surat Masuk & Keluar</code>
                            </p><br>
                            <p>SISMAKAR adalah sistem informasi surat masuk dan keluar memudahkan proses pengelolaan surat dengan cara yang lebih efisien dan terorganisir. Pengguna dapat dengan mudah mencatat, memantau, dan mengarsipkan surat masuk serta keluar secara digital, memastikan semua data tersimpan dengan rapi dan dapat diakses kapan saja. Sistem ini dirancang untuk mempercepat alur kerja, meminimalkan kesalahan, dan meningkatkan efisiensi dalam pengelolaan administrasi surat.</p>
                            <br>
                            <!-- main content -->
                        </div>
                    </div>
                </div>


<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Surat Masuk</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-envelope"></i>
              </div>
              <a href="<?= base_url('suratmasuk'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Undangan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-file-alt"></i>
              </div>
              <a href="<?= base_url('undangan'); ?>" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Surat Keluar</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-file-export"></i>
              </div>
              <a href="<?= base_url('suratkeluar'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
    <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <p>Saran </p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-comments"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#kritikSaranModal">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
          </div>

      
<!-- Sisa kode view Anda -->


<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="kritikSaranModal" tabindex="-1" aria-labelledby="kritikSaranLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kritikSaranLabel">Kritik & Saran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('saran/kirim'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="saran">Kritik & Saran</label>
                        <textarea class="form-control" id="saran" name="saran" rows="4" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Notifikasi Modal -->
<?php if (session()->getFlashdata('success')): ?>
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifModalLabel">Notifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= session()->getFlashdata('success'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifModalLabel">Notifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= session()->getFlashdata('error'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        <?php if (session()->getFlashdata('success') || session()->getFlashdata('error')): ?>
            $('#notifModal').modal('show');
        <?php endif; ?>
    });
</script>




          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    

<?= $this->endSection(); ?>