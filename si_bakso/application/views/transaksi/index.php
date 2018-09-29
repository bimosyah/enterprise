<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Transaksi
      <small>Control panel</small>
    </h1>
  </section>
  <section class="content">
    <div class="nav-tabs-custom" style="padding: 20px;">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>No Order</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Pegawai</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($getAll as $value): ?>
            <tr>
               <td>
                <?php echo $value->no_order;?>
              </td>
              <td>
                <?php echo $value->tanggal;?>
              </td>
              <td>
                <?php echo $value->waktu;?>
              </td>
              <td>
                <?php echo $value->nip;?>
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
