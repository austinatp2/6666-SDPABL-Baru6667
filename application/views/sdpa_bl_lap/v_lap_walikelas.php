<h4 class="text-center">LAPORAN DATA WALI KELAS</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Tahun Ajar</th>
      <th>Data Wali Kelas</th>
      <th>Data Kelas</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['Tahun_ajar_wali']; ?></td>
          <?php
            foreach ($data_gur as $key_gur) {
              if ($key_gur['employee_id']==$key_lap['Employee_id']) {
                echo "<td>".$key_gur['employee_id']." - ".$key_gur['nama_guru']."</td>";
              }
            }
          ?>
          <td><?= $key_lap['Kd_kelas']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
