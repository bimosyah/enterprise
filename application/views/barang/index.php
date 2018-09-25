<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Barang
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
  	<div class="nav-tabs-custom" style="padding: 20px;">
      <button class="btn btn-primary" style="margin-bottom: 15px ">Tambah</button>
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga Satuan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($get as $value): ?>
              <td>
                <?php echo $value->nama;?>
              </td>
              <td>
                <?php echo $value->stok;?>
              </td>
              <td>
                <?php echo $value->harga_satuan;?>
              </td>
              <td>
                <button class="btn btn-warning"><a style="color: white;" href="<?php echo base_url('Barang/Edit/').$value->id ?>">Edit</a></button>
                <button class="btn btn-danger"><a style="color: white;" href="<?php echo base_url('Barang/Delete/').$value->id ?>">Delete</a></button>
              </td>
            <?php endforeach ?>    
          </tr>
          
        </tbody>
      </table>
    </div>
    
    <div class="nav-tabs-custom" style="padding: 20px;margin-top: 20px">
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="email" class="form-control" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="email" class="form-control" placeholder="Stok">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga Satuan</label>
            <input type="email" class="form-control" placeholder="Harga Satuan">
          </div>          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
