<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Edit Data Pegawai</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('pegawai/update/'.$data->id); ?>

    <?php echo form_hidden('id', $data->id) ?>
    <div class="form-group">
      <label for="Alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
        value="<?php echo $data->alamat ?>">
    </div>

    <?php echo form_hidden('id', $data->id) ?>
    <div class="form-group">
      <label for="Lantai">Lantai</label>
      <input type="text" class="form-control" id="lantai" name="lantai" placeholder="Masukkan Lantai"
        value="<?php echo $data->lantai ?>">
    </div>

    <?php echo form_hidden('id', $data->id) ?>
    <div class="form-group">
      <label for="Harga">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga"
        value="<?php echo $data->harga ?>">
    </div>

