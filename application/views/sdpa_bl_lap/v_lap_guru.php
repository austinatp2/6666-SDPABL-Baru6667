<h4 class="text-center">LAPORAN DATA GURU</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Emp. ID</th>
      <th>Nama</th>
      <th>Tempat, Tgl Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['employee_id']; ?></td>
          <td><?= $key_lap['nama_guru']; ?></td>
          <td><?= $key_lap['tempat_lahir'].", ".$key_lap['tanggal_lahir']; ?></td>
          <td><?= $key_lap['jenis_kelamin']; ?></td>
          <td><?= $key_lap['agama']; ?></td>
          <td><?= $key_lap['email']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
