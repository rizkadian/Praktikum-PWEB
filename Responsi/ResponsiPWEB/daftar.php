<!DOCTYPE html>
<html>
    <head>
        <title>Responsi Pemrograman Web</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">
    </head>
    <body>
        <table border="0" width="100%" style="background: linear-gradient(30deg, #3498db, #1b2631);">
            <tr>
                <td><img src="zzz1.png" width="65px" height="70px" align="right"></td>
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
                    <table border="0" width="1200px"class="kotak" cellpadding="2" cellspacing="2" >
                        <tr class="tabell"><td colspan="10" align="center" height="40px"><b>SISWA YANG MENDAFTAR</b></td></tr>
                        <tr class="tabell" align=center><td><b>Nama</td><td><b> No HP </td><td><b> Tempat lahir</td><td><b> Tanggal lahir</td><td><b> Tinggi</td><td><b> Berat </td><td><b> Jenis Kelamin</td><td><b> Kelas</td><td><b> Alasan</td></tr>
                        <?php
                            $fp= fopen("daftar.txt", "r");
                            while ($isi = fgets($fp, 100)){
                               $pisah = explode("|", $isi);
                                echo "<br><tr align=center class='tabell'>
                                <td> $pisah[0] </td>
                                <td> $pisah[1] </td>
                                <td> $pisah[2] </td>
                                <td> $pisah[3] </td>
                                <td> $pisah[4] </td>
                                <td> $pisah[5] </td>
                                <td> $pisah[6] </td>
                                <td> $pisah[7] </td>
                                <td> $pisah[8] </td></tr>";
                            }
                        ?>                       
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