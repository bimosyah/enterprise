<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Jabatan
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Jabatan/update/'.$this->uri->segment(3)); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Posisi</label>
          <input type="text" name="posisi" class="form-control" placeholder="Posisi" value="<?php echo $get[0]->posisi ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nip</label>
          <input type="text" name="nip" class="form-control" placeholder="Nip" value="<?php echo $get[0]->nip ?>">
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
