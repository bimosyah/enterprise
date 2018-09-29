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
            <th>No Faktur</th>
            <th>Barang</th>
            <th>Total Masuk</th>
            <th>Total Keluar</th>
            <th>Tanggal</th>
            <th>Suplier</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($getAll as $value): ?>
            <tr>
               <td>
                <?php echo $value->no_faktur;?>
              </td>
              <td>
                <?php echo $value->barang;?>
              </td>
              <td>
                <?php echo $value->total_masuk;?>
              </td>
              <td>
                <?php echo $value->total_keluar;?>
              </td>
              <td>
                <?php echo $value->tanggal;?>
              </td>
              <td>
                <?php echo $value->suplier;?>
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
