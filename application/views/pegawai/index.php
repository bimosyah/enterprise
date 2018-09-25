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
            <th>NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($get as $value): ?>
            <tr>

              <td>
                <?php echo $value->nip;?>
              </td>
              <td>
                <?php echo $value->nip;?>
              </td>
              <td>
                <?php echo $value->jenis_kelamin;?>
              </td>
              <td>
                <?php echo $value->tempat_lahir;?>
              </td>
              <td>
                <?php echo $value->tgl_lahir;?>
              </td>
              <td>
                <?php echo $value->alamat;?>
              </td>
              <td>
                <?php echo $value->no_hp;?>
              </td>
              <td>
                <button class="btn btn-warning"><a style="color: white;" href="<?php echo base_url('Pegawai/Edit/').$value->id ?>">Edit</a></button>
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Pegawai/Hapus/').$value->id ?>">Delete</a></button>
              </td>

            </tr>
          <?php endforeach ?>    
        </tbody>
      </table>
    </div>
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <?php echo form_open('Pegawai/insert'); ?>
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP</label>
          <input type="text" class="form-control" placeholder="Nip" name="nip">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <input type="text" class="form-control" placeholder="Jenkel" name="jenis_kelamin" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tempat Lahir</label>
          <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tgl Lahir</label>
          <input type="date" class="form-control" placeholder="Tgl Lahir" name="tgl_lahir">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" placeholder="Alamat" name="alamat">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No Hp</label>
          <input type="text" class="form-control" placeholder="Alamat" name="no_hp">
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
