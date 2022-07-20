<?php
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $nohp= $_POST['nohp'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];
    $alasan= $_POST['alasan'];
    $fp=fopen("daftar.txt", "a");
    fwrite($fp, "$nama | $nohp | $tempat | $tanggal | $tinggi | $berat | $jk | $kelas | $alasan\n");
    fclose($fp);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Responsi Pemrograman Web</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">
    </head>
    <body>
        <table border="0" width="100%" style="background: linear-gradient(30deg, #3498db, #1b2631);">
            <tr>
                <td><img src="zzz1.png" width=65px" height="70px" align="right"></td>
                <td width="800px"><h2 align="center"><font face="ms reference sans serif" color="white">PASKIBRA PRATIYODHA PARAMITHA SMA NEGERI 1 KLATEN</h2></td>
                <td width="200px"></td>
            </tr>
        </table>
        <table border="0" class="garis" width="100%" height="50px">
            <tr>
                <td width="400px"></td>
                <td width="150px"><a href="index.html" class="tombol"><font face="ms reference sans serif"><p align="center">HOME</p></a></td>
                <td width="400px"></td>
            </tr>
        </table>
        <table border="0" width="100%" bgcolor="#f8f9f9" align="center">
            <tr>
                <td width="800px" align="center">
                    <table border="0" width="1100px" class="kotak" cellpadding="15" cellspacing="15">
                        <tr>
                            <td>
                            <table border="0" cellpadding="15" cellspacing="15">
                                <tr><td colspan="3" align="center"><b>Data anda telah ditambahkan</b></td></tr>
                                <tr>
                                    <td width="400px"></td>
                                    <td width="300px" align="center" class="kotakpen"><a href="index.html" class="tombolpen"><b>KEMBALI KE MENU HOME</b></a></td>
                                    <td width="400px"></td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table border="0" height="60px" width="100%">
            <tr>
                <td align="center" style="background: linear-gradient(30deg, #1b2631, #3498db) !important;"><font face="ms reference sans serif">Responsi Praktikum Pemrograman Web - Rizka Dianrani (2100018286)</td>
            </tr>
        </table>
    </body>
</html>