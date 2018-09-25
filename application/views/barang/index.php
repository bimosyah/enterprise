<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Barang
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
          
          <tr>
            <?php foreach ($get as $value): ?>
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
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Pegawai/Delete/').$value->id ?>">Delete</a></button>
              </td>
            <?php endforeach ?>    
          </tr>
          
      </tbody>
    </table>
  </div>
</section>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
