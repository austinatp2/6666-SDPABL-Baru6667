<h4 class="text-center">LAPORAN DATA MATA PELAJARAN</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Kd. Mata Pelajaran</th>
      <th>Nama Mata Pelajaran</th>
      <th>Standar Nilai</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['kd_mapel']; ?></td>
          <td><?= $key_lap['nm_mapel']; ?></td>
          <td><?= $key_lap['kkm']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
