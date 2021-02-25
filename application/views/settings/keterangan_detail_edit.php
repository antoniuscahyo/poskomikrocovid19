<?php
defined('BASEPATH') or exit('No direct script access allowed');
$result = $result[0];
?>
<!-- Breadcrumbs -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
  <li class="breadcrumb-item">Settings</li>
  <li class="breadcrumb-item"><a href="<?= base_url() ?>settings/keterangan">Keterangan</a></li>
  <li class="breadcrumb-item active">Edit Keterangan</li>
</ol>

<form method="POST" action="">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?= $result["id"] ?>">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
    <div class="col-10">
      <input class="form-control" type="text" value="<?= $result["ket"] ?>" placeholder="" name="ket">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Jumlah</label>
    <div class="col-1">
      <input class="form-control" type="number" value="<?= $result["jml"] ?>" placeholder="" name="jml">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-10">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </div>


</form>