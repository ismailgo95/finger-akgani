<?php
if ($_GET['notif'] == 'berhasil-add') { ?>
  <div class="alert alert-success" role="alert">
    <i class="fa fa-check"></i> Data BERHASIL ditambah
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-add') { ?>
  <div class="alert alert-danger" role="alert">
    <i class="fa fa-warning"></i> Data GAGAL ditambah
  </div>
<?php
} elseif ($_GET['notif'] == 'berhasil-edit') { ?>
  <div class="alert alert-success" role="alert">
    <i class="fa fa-check"></i> Data BERHASIL diubah
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-edit') { ?>
  <div class="alert alert-danger" role="alert">
    <i class="fa fa-warning"></i> Data GAGAL diubah
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
  <div class="alert alert-success" role="alert">
    <i class="fa fa-check"></i> Data BERHASIL dihapus
  </div>
<?php
} elseif ($_GET['notif'] == 'gagal-delete') { ?>
  <div class="alert alert-danger" role="alert">
    <i class="fa fa-warning"></i> Data GAGAL dihapus
  </div>
<?php
}
