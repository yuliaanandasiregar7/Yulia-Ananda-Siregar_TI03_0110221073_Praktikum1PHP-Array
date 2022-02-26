<?php
    $ns1 = ['id'=>1,'nim'=>'0110221073','uts'=>90,'uas'=>94,'tugas'=>98];
    $ns2 = ['id'=>2,'nim'=>'0110221080','uts'=>85,'uas'=>90,'tugas'=>88];
    $ns3 = ['id'=>3,'nim'=>'0110222075','uts'=>80,'uas'=>80,'tugas'=>86];
    $ns4 = ['id'=>4,'nim'=>'0110221081','uts'=>90,'uas'=>91,'tugas'=>92];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

    <h3>Daftar Nilai Mahaiswa</h3>
    <table border="1" width="100%">
  <thead>
  <tr bgcolor="cadetblue">
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
  </tr>
  </thead>
 <tbody>
 <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
    $warna =($nomor%2 == 0)?"bluesky":"olivedrab";
    echo '<tr bgcolor="'.$warna.'" align="center"><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
 }
 ?>
 </tbody>
     </table>