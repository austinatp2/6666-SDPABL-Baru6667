<?php
    foreach ($isi3 as $key9) {}
?> 
    
<div class="x_title">
  <h2>Daftar Rapor || Kelas : <?= $key9['nm_kelas']; ?> (<?= $key9['kd_kelas']; ?>)</h2>
  <div class="clearfix"></div>
</div>

<table id="example" class="table table-bordered responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <!-- <th>
                <input type="checkbox" class="tableflat">
            </th> -->

            <th style="text-align:center">No. </th>
            <th style="text-align:center">NIS </th>
            <th style="text-align:center">Nama </th>
            <th style="text-align:center">Jenis Kelamin </th>
            <th style="text-align:center">Agama </th>

            <th class="no-link last" style='text-align:center;'>
                <span class="nobr">Action</span>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php
            $no = 1;
            foreach ($isi3 as $key) { 
        ?>  

        <tr class="even pointer">
            <!-- <td class="a-center ">
                <input type="checkbox" class="tableflat">
            </td> -->

            <td style="text-align:center"><?= $no++ ?></td>
            <td style="text-align:center"><?= $key['NIS']; ?></td>
            <td ><?= $key['Nama']; ?></td>
            <td style="text-align:center"><?= $key['Jenis_kelamin']; ?></td>
            <td style="text-align:center"><?= $key['Agama']; ?></td>

            <td align="center" style="padding: 6px;">
                <a href="<?=base_url(); ?>dashboard/cetak_nilai_rapor/<?=$key['NIS']; echo '/';print_r($sms); echo '/';print_r($thun_ajr); ?>" type="button" class="btn btn-primary btn-sm" target="_blank">
                  <i class="fa fa-search"></i> Lihat Rapor
                </a>
            </td>
        </tr>
    <?php   
        } 
    ?>
    </tbody>
</table>
<?php 
// echo "<pre>";
//     print_r($isi3);
// echo "</pre>";
// print_r($thun_ajr);
 ?>