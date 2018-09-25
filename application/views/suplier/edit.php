<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Suplier
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
  	
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Suplier/update/'.$this->uri->segment(3)); ?>
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" placeholder="Nip" name="nama" value="<?php echo $get[0]->nama ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Hp</label>
            <input type="text" class="form-control" placeholder="Nama" name="nomer_hp" value="<?php echo $get[0]->nomer_hp ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Perusahaan</label>
            <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?php echo $get[0]->nama_perusahaan ?>">
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
