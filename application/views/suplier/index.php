<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Suplier
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
  	<div class="nav-tabs-custom" style="padding: 20px;">
      <button class="btn btn-primary" style="margin-bottom: 10px ">Tambah</button>
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Nama Perusahaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($get as $value): ?>
            <tr>
              <td>
                <?php echo $value->nama;?>
              </td>
              <td>
                <?php echo $value->nomer_hp;?>
              </td>
              <td>
                <?php echo $value->nama_perusahaan;?>
              </td>
              <td>
                <button class="btn btn-warning"><a style="color: white;" href="<?php echo base_url('Suplier/Edit/').$value->id ?>">Edit</a></button>
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Suplier/Hapus/').$value->id ?>">Delete</a></button>
              </td>
            </tr>
          <?php endforeach ?>              
        </tbody>
      </table>
    </div>
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Suplier/insert'); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No Hp</label>
          <input type="text" class="form-control" placeholder="Nomer Hp" name="nomer_hp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perusahaan</label>
          <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan">
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
