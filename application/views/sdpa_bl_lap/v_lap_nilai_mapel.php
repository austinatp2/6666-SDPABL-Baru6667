<?php
$last = end($this->uri->segments);
$sem = $this->uri->segment(3);
$kel = $this->uri->segment(4);
 ?>
<h4 class="text-center">LAPORAN DATA NILAI</h4>
<!-- <div class="row">
  <div class="col-md-9"> -->
    <table width="100%">
      <tr>
        <td>Nama Guru</td>
        <td>&nbsp; : &nbsp;</td>
        <td width="60%">
          <?php
            foreach ($data_guru as $key_guru) {
              echo $key_guru['nama_guru'];
            }
          ?>
        </td>
        <td>Kelas</td>
        <td>&nbsp; : &nbsp;</td>
        <td>
          <?php
            foreach ($data_jadwal as $key_jadwal) {
              foreach ($data_kelas as $key_kelas) {
                if ($key_kelas['kd_kelas']==$key_jadwal['kd_kelas']) {
                  echo $key_kelas['nm_kelas'];
                }
              }
            }
          ?>
        </td>
      </tr>
      <tr>
        <td>Mata Pelajaran</td>
        <td>&nbsp; : &nbsp;</td>
        <td>
          <?php
          foreach ($data_jadwal as $key_jadwal) {
            foreach ($data_mapel as $key_mapel) {
              if ($key_mapel['kd_mapel']==$key_jadwal['kd_mapel']) {
                echo $key_mapel['nm_mapel'];
              }
            }
          }
          ?>
        </td>
        <td>Tahun Ajaran</td>
        <td>&nbsp; : &nbsp;</td>
        <td>
          <?php
          foreach ($data_jadwal as $key_jadwal) {
              echo $key_jadwal['semester']." - ".$key_jadwal['thn_ajar'];
          }
          ?>
        </td>
      </tr>
    </table>
  <!-- </div> -->
  <!-- <div class="col-md-3">
    <table>
      <tr>
        <td>Kelas</td>
        <td>&nbsp; : &nbsp;</td>
        <td>
          <?php
            foreach ($data_jadwal as $key_jadwal) {
              foreach ($data_kelas as $key_kelas) {
                if ($key_kelas['kd_kelas']==$key_jadwal['kd_kelas']) {
                  echo $key_kelas['nm_kelas'];
                }
              }
            }
          ?>
        </td>
      </tr>
      <tr>
        <td>Tahun Ajaran</td>
        <td>&nbsp; : &nbsp;</td>
        <td>
          <?php
          foreach ($data_jadwal as $key_jadwal) {
              echo $key_jadwal['semester']." - ".$key_jadwal['thn_ajar'];
          }
          ?>
        </td>
      </tr>
    </table> -->
  <!-- </div> -->
<!-- </div><br> -->
<table class="table table-bordered table-hover table-compact">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <?php
        $urut = 1;
        foreach ($data_latihan as $key_data_latihan) {
          $cek_isi_lat = isset($key_data_latihan['kd_lat']) ? $key_data_latihan['kd_lat'] : '';
          $kode = "LT000";
          $kodeurut = $kode.$urut;

          if($key_data_latihan['kd_lat']==$kodeurut AND $last==$key_data_latihan['kd_jadwal']) {
            echo "<th>Lt. ".$urut++."</th>";
          }
        }

        $urut2 = 1;
        foreach ($data_kuis as $key_data_kuis) {
          $cek_isi_kuis = isset($key_data_kuis['kd_kuis']) ? $key_data_kuis['kd_kuis'] : '';
          $kode2 = "QZ000";
          $kodeurut2 = $kode2.$urut2;

          if($key_data_kuis['kd_kuis']==$kodeurut2 AND $last==$key_data_kuis['kd_jadwal']) {
            echo "<th>Qz. ".$urut2++."</th>";
          }
        }

        $urut5 = 1;
        foreach ($data_term as $key_data_term) {
          $cek_isi_term = isset($key_data_term['kd_term']) ? $key_data_term['kd_term'] : '';
          $kode5 = "TR000";
          $kodeurut5 = $kode5.$urut5;

          $ket_term = $key_data_term['ket'];
          if($key_data_term['kd_term']==$kodeurut5 AND $last==$key_data_term['kd_jadwal']) {
            echo "<th>Tr. ".$urut5++."</th>";
          }
        }

        $urut4 = 1;
        foreach ($data_uts as $key_data_uts) {
          $cek_isi_uts = isset($key_data_uts['kd_uts']) ? $key_data_uts['kd_uts'] : '';
          $kode4 = "UT000";
          $kodeurut4 = $kode4.$urut4;
          if($key_data_uts['kd_uts']==$kodeurut4 AND $last==$key_data_uts['kd_jadwal']) {
            echo "<th>UTS</th>";  $urut4++;
          }
        }

        $urut3 = 1;
        foreach ($data_uas as $key_data_uas) {
          $cek_isi_uas = isset($key_data_uas['kd_uas']) ? $key_data_uas['kd_uas'] : '';
          $kode3 = "UA000";
          $kodeurut3 = $kode3.$urut3;
          if($key_data_uas['kd_uas']==$kodeurut3 AND $last==$key_data_uas['kd_jadwal']) {
            echo "<th>UAS</th>"; $urut3++;
          }
        }

       ?>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($isi_peserta as $key_peserta) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $key_peserta['nis'] ?></td>
        <?php
        foreach ($isi_siswa as $key_siswa) {
          if ($key_peserta['nis']==$key_siswa['NIS']) {
            echo "<td>".$key_siswa['Nama']."</td>";
          }
        }

        $urut = 1;
        foreach ($data_latihan as $key_data_latihan) {
          $kode = "LT000";
          $kodeurut = $kode.$urut;
          if($key_data_latihan['kd_lat']==$kodeurut AND $key_peserta['nis']==$key_data_latihan['nis'] AND $key_data_latihan['kd_jadwal']==$last) {
            $rol = isset($key_data_latihan['nilai']) ? $key_data_latihan['nilai'] : '0';
            echo "<td>".$rol."</td>";
            $urut++;
          }
        }

        $urut2 = 1;
        foreach ($data_kuis as $key_data_kuis) {
          $kode2 = "QZ000";
          $kodeurut2 = $kode2.$urut2;
          if($key_data_kuis['kd_kuis']==$kodeurut2 AND $key_peserta['nis']==$key_data_kuis['nis'] AND $key_data_kuis['kd_jadwal']==$last) {
            $rol2 = isset($key_data_kuis['nilai']) ? $key_data_kuis['nilai'] : '0';
            echo "<td>".$rol2."</td>";
            $urut2++;
          }
        }

        $urut5 = 1;
        foreach ($data_term as $key_data_term) {
          $kode5 = "TR000";
          $kodeurut5 = $kode5.$urut5;
          if($key_data_term['kd_term']==$kodeurut5 AND $key_peserta['nis']==$key_data_term['nis'] AND $key_data_term['kd_jadwal']==$last) {
            $rol5 = isset($key_data_term['nilai']) ? $key_data_term['nilai'] : '0';
            echo "<td>".$rol5."</td>";
            $urut5++;
          }
        }

        $urut4 = 1;
        foreach ($data_uts as $key_data_uts) {
          $kode4 = "UT000";
          $kodeurut4 = $kode4.$urut4;
          if($key_data_uts['kd_uts']==$kodeurut4 AND $key_peserta['nis']==$key_data_uts['nis'] AND $key_data_uts['kd_jadwal']==$last) {
            $rol4 = isset($key_data_uts['nilai']) ? $key_data_uts['nilai'] : '0';
            echo "<td>".$rol4."</td>";
            $urut4++;
          }
        }

        $urut3 = 1;
        foreach ($data_uas as $key_data_uas) {
          $kode3 = "UA000";
          $kodeurut3 = $kode3.$urut3;
          if($key_data_uas['kd_uas']==$kodeurut3 AND $key_peserta['nis']==$key_data_uas['nis'] AND $key_data_uas['kd_jadwal']==$last) {
            $rol3 = isset($key_data_uas['nilai']) ? $key_data_uas['nilai'] : '0';
            echo "<td>".$rol3."</td>";
            $urut3++;
          }
        }
        ?>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
<?php
  $nokuis = 1;
  $nolat = 1;
  $noterm = 1;

  foreach ($data_ket_latihan as $key_data_ket_latihan) {
    if($key_data_ket_latihan['kd_jadwal']==$last) {
        echo "Latihan ".$nolat." : ".$key_data_ket_latihan['keterangan_latihan']."<br/>";
        $nolat++;
    }
  }

  foreach ($data_ket_kuis as $key_data_ket_kuis) {
    if($key_data_ket_kuis['kd_jadwal']==$last) {
        echo "Kuis ".$nokuis." : ".$key_data_ket_kuis['keterangan_kuis']."<br/>";
        $nokuis++;
    }
  }

  foreach ($term_distinct as $key_term) {
    // if ($key_term['kd_jadwal']==$last) {
      echo "Term ".$noterm." : ".$key_term['ket']."<br/>";
      $noterm++;
    // }
  }
?>
