<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pegawai
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
  	<div class="nav-tabs-custom" style="padding: 20px;">
      <button class="btn btn-primary" style="margin-bottom: 10px ">Tambah</button>
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id Jabatan</th>
            <th>Nip</th>
            <th>Gaji</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($get as $value): ?>
            <tr>
              <td>
                <?php echo $value->id_jabatan;?>
              </td>
              <td>
                <?php echo $value->nip;?>
              </td>
              <td>
                <?php echo $value->gaji;?>
              </td>
              <td>
                <button class="btn btn-warning"><a style="color: white;" href="<?php echo base_url('Gaji/Edit/').$value->id ?>">Edit</a></button>
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Gaji/Hapus/').$value->id ?>">Delete</a></button>
              </td>
              
            </tr>
          <?php endforeach ?>   
        </tbody>
      </table>
    </div>
    
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Gaji/insert'); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Id Jabatan</label>
          <input type="text" name="id_jabatan" class="form-control" placeholder="Id Jabatan">
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Nip</label>
          <input type="text" name="nip" class="form-control" placeholder="Nip">
        </div>
        <div class="form-group">
          <label for="exampleInputtext1">Gaji</label>
          <input type="text" name="gaji" class="form-control" placeholder="Gaji">
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
