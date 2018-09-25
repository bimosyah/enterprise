<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Jabatan
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
  	<div class="nav-tabs-custom" style="padding: 20px;">
      <button class="btn btn-primary" style="margin-bottom: 10px ">Tambah</button>
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Posisi</th>
            <th>Nip</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($get as $value): ?>
            <tr>
              <td>
                <?php echo $value->posisi;?>
              </td>
              <td>
                <?php echo $value->nip;?>
              </td>
              <td>
                <button class="btn btn-warning"><a style="color: white;" href="<?php echo base_url('Jabatan/Edit/').$value->id ?>">Edit</a></button>
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Jabatan/Hapus/').$value->id ?>">Delete</a></button>
              </td>
            </tr>
          <?php endforeach ?>   
        </tbody>
      </table>
    </div>
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Jabatan/insert'); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Posisi</label>
          <input type="text" name="posisi" class="form-control" placeholder="Posisi">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nip</label>
          <input type="text" name="nip" class="form-control" placeholder="Nip">
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
