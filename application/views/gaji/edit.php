<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pegawai
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
    
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Gaji/update/'.$this->uri->segment(3)); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Id Jabatan</label>
          <input type="text" name="id_jabatan" class="form-control" placeholder="Id Jabatan" value="<?php echo $get[0]->id_jabatan ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Nip</label>
          <input type="text" name="nip" class="form-control" placeholder="Nip" value="<?php echo $get[0]->nip ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Gaji</label>
          <input type="text" name="gaji" class="form-control" placeholder="Nip" value="<?php echo $get[0]->gaji ?>">
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
