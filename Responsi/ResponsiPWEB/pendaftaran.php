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
							<div class="judul2"><font face="ms reference sans serif"><h3>PENDAFTARAN</h3></div>
							<table border="0" bgcolor="#f4f6f7" width="800px" cellpadding="10" cellspacing="5" align="center" ><br>
								<form name="form1" method="post" action="proses.php">
								<tr align="center"><td colspan="2"><b><font face="corbel">FORMULIR PENDAFTARAN</font><br></b></td></tr>
								<tr>
									<td valign="top" width="200px">
										<label for="nama" class="nama">Nama Lengkap</label>
        								<input class="bodyinput" type="text" name="nama" id="nama" required="" placeholder="nama lengkap">
									</td>
									<td valign="top" width="200px">
										<label for="nohp" class="nama">Nomor Handphone</label>
        								<input class="bodyinput" type="text" name="nohp" id="nohp" required="" placeholder="nomor handphone">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<label for="tempat" class="nama">Tempat Lahir</label>
        								<input class="bodyinput" type="text" name="tempat" id="tempat" required="" placeholder="tempat lahir">
									</td>
									<td valign="top">
										<label for="lahir" class="nama">Tanggal Lahir</label>
        								<input class="bodyinput" type="date" name="tanggal" id="tanggal" required="" data-data-format="MMM DD YYY">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<label for="tinggi" class="nama"> Tinggi Badan</label>
        								<input class="bodyinput" type="text" name="tinggi" id="tinggi" required="" placeholder="tinggi badan">
									</td>
									<td valign="top">
										<label for="berat" class="nama">Berat Badan</label>
        								<input class="bodyinput" type="text" name="berat" id="berat" required="" placeholder="berat badan">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<label for="kelamin" class="nama">Jenis Kelamin</label><br>
       									<p><input type="radio" required="" name="jk" id="jk" value="Laki-laki"><font class="nama">Laki-laki</font></input>
       									<input type="radio" required="" name="jk" id="jk" value="Perempuan"><font class="nama">Perempuan</font></input>
									</td> 
									<td valign="top">     		
										<label for="kelas" class="nama">Kelas</label><br>
        								<select class="bodyinput" name="kelas" id="kelas" required="" >
            								<option value=""></option>
            								<option value="X IPA 1">X IPA 1</option>
           						 			<option value="X IPA 2">X IPA 2</option>
            								<option value="X IPA 3">X IPA 3</option>
            								<option value="X IPA 4">X IPA 4</option> 
        								</select>
									</td>
								</tr>
								<tr>
									<td valign="top">
										<label for="alasan" class="nama">Alasan Mendaftar</label>
        								<textarea class="bodyinput" type="checkbox" name="alasan" id="alasan" required="" placeholder="alasan"></textarea>
									</td>
								</tr>
								<tr>
									<td valign="top" colspan="4" align="center">
										<button action="submit" class="daftar" name="daftar" id="daftar">DAFTAR</button>
									</td>
								</tr>
								</form>
							</table><br>
							<table border="0" cellpadding="15" cellspacing="15">
								<div class="judul2"><font face="ms reference sans serif"><h3>ADMIN</h3></div>
								<tr>
									<td width="400px"></td>
									<td width="200px" align="center" class="kotakpen"><a href="login.html" class="tombolpen"><b>LIHAT DAFTAR</b></a></td>
									<td width="400px"></td>
								</tr>
								<tr><td colspan="3">*hanya admin yang dapat melihat</td></tr>
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