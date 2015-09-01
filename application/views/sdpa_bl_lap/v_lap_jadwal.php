<h4 class="text-center">LAPORAN DATA JADWAL</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Kode Jadwal</th>
      <th>Tahun Ajar</th>
      <th>Semester</th>
      <th>Mata Pelajaran</th>
      <th>Guru</th>
      <th>Kelas</th>
      <th>Hari</th>
      <th>Ruang</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['kd_jadwal']; ?></td>
          <td><?= $key_lap['thn_ajar']; ?></td>
          <td><?= $key_lap['semester']; ?></td>
          <?php
            foreach ($data_map as $key_map) {
              if ($key_map['kd_mapel']==$key_lap['kd_mapel']) {
                echo "<td>".$key_map['kd_mapel']." - ".$key_map['nm_mapel']."</td>";
              }
            }
            foreach ($data_gur as $key_gur) {
              if ($key_gur['employee_id']==$key_lap['employee_id']) {
                echo "<td>".$key_gur['employee_id']." - ".$key_gur['nama_guru']."</td>";
              }
            }
           ?>
          <td><?= $key_lap['kd_kelas']; ?></td>
          <td><?= $key_lap['hari']; ?></td>
          <td><?= $key_lap['ruang']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
