<div class="container" style="padding-top:60px;">
  <div class="row">
    <div class="dash-unit" style="height:540px">
      <dtitle>Tambah Petugas</dtitle>
      <hr>
      <form action = "<?php echo base_url(). 'index.php/c_petugas/p_tambah_petugas'; ?>" method="post" enctype="multipart/form-data">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Kode Petugas :</label><br>
          <input type="text" name="kode" class="form-control" value="<?php echo $kode_petugas; ?>" readonly="readonly">
        </div>

        <div class="form-group">
          <label>Nama :</label><br>
          <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"><?php echo form_error('nama'); ?>
        </div>

        <div class="form-group">
          <label>Tanggal Lahir :</label><br>
          <input type="text" name="tanggal_lahir" id="datepicker" class="form-control" value="<?php echo $tanggal_lahir; ?>"><?php echo form_error('tanggal_lahir'); ?>
        </div>

        <div class="form-group" style="padding-top:6px">
          <div class="radio-buttons-1">
            <label style="">Jenis Kelamin :</label><br>
            <div class="col-sm-6">
              <label class="radio-inline" style="padding-top:8px">
              <input type="radio" name="jk" value="L"> Laki-laki
            </div>
            </label>
            <label class="radio-inline" style="padding-top:6px">
            <input type="radio" name="jk" value="P"> Perempuan
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <label style="float:center">Alamat :</label><br>
          <textarea name="alamat" class="form-control" style="height:120px;resize:none"><?php echo $alamat; ?></textarea><?php echo form_error('alamat'); ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label>Username :</label><br>
          <input type="text" name="username" class="form-control" value="<?php echo $username; ?>"><?php echo form_error('username'); ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label>Password :</label><br>
          <input type="text" name="password" class="form-control" value="<?php echo $password; ?>"><?php echo form_error('password'); ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
        <label>Telepon :</label><br>
        <input type="text" name="telepon" class="form-control" value="<?php echo $telepon; ?>"><?php echo form_error('telepon'); ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
        <label>Foto :</label><br>
        <input type="file" name="image" class="form-control" >
        </div>
      </div>

      <div class="col-sm-12">
      <br>
      <br>
      <br>
      <br>
      <hr>
      <button type="submit" class="btn" style="float:right">Kirim</button>
      </div>

      </form>
    </div>
  </div>
</div>
