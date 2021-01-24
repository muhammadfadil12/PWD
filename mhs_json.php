<?php
include "koneksi.php";
$sql="select * from mahasiswa order by NIM";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
$response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
$h['NIM'] = $r['NIM'];
$h['Nama'] = $r['Nama'];
$h['JK'] = $r['JK'];
$h['Alamat'] = $r['Alamat'];
$h['TL'] = $r['TL'];
array_push($response["data"], $h);
}
echo json_encode($response);
}else {
$response["message"]="tidak ada data";
echo json_encode($response);
}
?>