<h4 class="text-center">LAPORAN DATA SISWA</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tempat, Tgl Lahir</th>
      <th>Agama</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['NIS']; ?></td>
          <td><?= $key_lap['Nama']; ?></td>
          <td><?= $key_lap['Jenis_kelamin']; ?></td>
          <td><?= $key_lap['Tempat_lahir'].", ".$key_lap['Tanggal_lahir']; ?></td>
          <td><?= $key_lap['Agama']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
