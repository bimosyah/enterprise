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
            <th>Nip</th>
            <th>Jam Masuk</th>
            <th>Jam Pulang</th>
            <th>Terlambat</th>
            <th>tanggal</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($getAll as $value): ?>
            <tr>
               <td>
                <?php echo $value->nip;?>
              </td>
              <td>
                <?php echo $value->jam_masuk;?>
              </td>
              <td>
                <?php echo $value->jam_pulang;?>
              </td>
              <td>
                <?php echo $value->terlambat;?>
              </td>
              <td>
                <?php echo $value->tanggal;?>
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
