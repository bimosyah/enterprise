<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Absen
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
    <div class="nav-tabs-custom" style="padding: 20px;">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Kode Produk</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga Satuan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($getAll as $value): ?>
            <tr>
               <td>
                <?php echo $value->kode_produk;?>
              </td>
              <td>
                <?php echo $value->nama;?>
              </td>
              <td>
                <?php echo $value->stok;?>
              </td>
              <td>
                <?php echo $value->harga_satuan;?>
              </td>
            </tr>
          <?php endforeach ?>   
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
