<?php include "fungsi/cek_login.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "fungsi/run_title.php" ?>
<?php include "fungsi/run_css.php" ?>
</head>
<body>
<div class="page-container"> 
<!-- top navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#3867d6">
<div class="container">
<div class="navbar-header">
	<a class="navbar-brand" href="#" style="color:#FFFFFF">SPK | PENERIMAAN GURU DENGAN METODE SAW (<i>Simple Additive Weighting</i>).</a>
</div>
</div>
</div>
<div class="container">
<div class="row row-offcanvas row-offcanvas-left"  style="background-color:#ecf0f1"> 
<!-- sidebar -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
	<ul class="nav">
		<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		<li><a href="data-calonguru.php"><span class="glyphicon glyphicon-user"></span> Calon Guru</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Kriteria</a></li>
		<li><a href="subkriteria-aspek.php"><span class="glyphicon glyphicon-menu-right"></span> Sub Kriteria</a></li>
		<li><a href="proses-penilaian.php"><span class="glyphicon glyphicon-pencil"></span> Proses Penilaian</a></li>   
		<li><a href="proses-penentuan.php"><span class="glyphicon glyphicon-sort"></span> Proses Perangkingan</a></li>
		<li><a href="nilailulus.php"><span class="glyphicon glyphicon-ok"></span> Pengaturan Nilai Lulus</a></li>
        <li><a href="periode.php"><span class="glyphicon glyphicon-time"></span> Pengaturan Periode Seleksi</a></li>
		<li><a href="akun.php"><span class="glyphicon glyphicon-user"></span> Pengaturan Akun</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
	</ul>
</div>
<!-- main area -->
<div class="col-xs-12 col-sm-9">
	<h3>TAMBAH KRITERIA DAN BOBOT</h3>
<div class="panel panel-default">
<div class="table-responsive">
	<table class="table table-striped">
		<tr><td>Nama Kriteria</td><td><textarea id="aspek_penilaian" rows="3" class="form-control"></textarea></td></tr>
        <tr><td>Kode Kriteria</td><td>
		<select id="kode" rows="3" class="form-control" onchange="tampilkan()">
		<option value="C1">C1</option>
		<option value="C2">C2</option>
		<option value="C3">C3</option>
        <option value="C4">C4</option> 	<option value="C5">C5</option>
		</select>
		</td></tr>
		<tr><td>Deskripsi</td><td>
		<select id="deskripsi" rows="3" class="form-control" onchange="tampilkan()">
		<option value="BENEFIT">BENEFIT</option>
		<option value="COST">COST</option>
		</select>
		</td></tr>
		<tr><td>Bobot</td><td><input type="text" size="3" id="bobot" value="" class="form-control"></td></tr>
		<tr><td></td><td><input type="button" size="3" id="btnSave" value="Simpan" class="btn btn-primary btn-sm"></td></tr>
</table>
</div>
</div>
</div><!-- /.col-xs-12 main -->
</div><!--/.row-->
</div><!--/.container-->
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="background-color:#3867d6">
<a class="navbar-brand" style="color:#FFFFFF"><?php include "fungsi/run_footer.php" ?></a>
</div>
</div>
<?php include "fungsi/run_js.php" ?>
<?php include "fungsi/run_js_aspek.php" ?>
</body>
</html>