<?php
if ($_GET['notif'] == 'berhasil-add') { ?>
  <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
    Data <strong>BERHASIL</strong> ditambah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-add') { ?>
  <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
    Data <strong>GAGAL</strong> ditambah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'berhasil-edit') { ?>
  <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
    Data <strong>BERHASIL</strong> diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-edit') { ?>
  <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
    Data <strong>GAGAL</strong> diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'warning-size') { ?>
  <div class="alert alert-warning" role="alert">
    <i class="fa fa-warning"></i> Ukuran File terlalu besar
  </div>
<?php
} elseif ($_GET['notif'] == 'warning-eks') { ?>
  <div class="alert alert-warning" role="alert">
    <i class="fa fa-warning"></i> Ekstensi file tidak sesuai hanya diperbolehkan jpg, jpeg dan png
  </div>
<?php
} elseif ($_GET['notif'] == 'berhasil-delete') { ?>
  <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
    Data <strong>BERHASIL</strong> dihapus
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-delete') { ?>
  <div class="alert alert-danger" role="alert">
    <i class="fa fa-warning"></i> Data GAGAL dihapus
  </div>
<?php
} elseif ($_GET['notif'] == 'berhasil-upload') { ?>
  <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
    <i class="fa fa-check"></i> Data <strong>BERHASIL</strong> diUpload
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-upload') { ?>
  <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
    <i class="fa fa-warning"></i> Data <strong>GAGAL</strong> diUpload
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
} elseif ($_GET['notif'] == 'koneksi') { ?>
  <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
    <i class="fa fa-warning"></i> Koneksi ke Mesin Bermasalah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
}
