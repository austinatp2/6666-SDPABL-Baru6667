<h4 class="text-center">LAPORAN DATA KELAS</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Kd. Kelas</th>
      <th>Nama Kelas</th>
      <th>Kapasitas</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['kd_kelas']; ?></td>
          <td><?= $key_lap['nm_kelas']; ?></td>
          <td><?= $key_lap['kapasitas']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
