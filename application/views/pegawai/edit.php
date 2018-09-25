<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Jabatan
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
     <?php echo form_open('Pegawai/update/'.$this->uri->segment(3)); ?>
     <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="text" class="form-control" placeholder="Nip" name="nip" value="<?php echo $get[0]->nip ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $get[0]->nama ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <input type="text" class="form-control" placeholder="Jenkel" name="jenis_kelamin" value="<?php echo $get[0]->jenis_kelamin ?>" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tempat Lahir</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $get[0]->tempat_lahir ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tgl Lahir</label>
        <input type="date" class="form-control" placeholder="Tgl Lahir" name="tgl_lahir" value="<?php echo $get[0]->tgl_lahir ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $get[0]->alamat ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">No Hp</label>
        <input type="text" class="form-control" placeholder="Alamat" name="no_hp" value="<?php echo $get[0]->no_hp ?>">
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php echo form_close(); ?>
  </div>
</section>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
