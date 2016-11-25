<?PHP
include('koneksi.php');
$nim=$_POST['NIM'];
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jk=$_POST['JK'];
$sk=$_POST['SK'];
$sql="insert into karyawan Values
		('','$nim','$nama','$alamat','$jk','$sk')";
		$input=mysql_query($sql);
		if($input)
		{
		
?>
<script type="text/javascript">
alert('Data berhasil ditambahkan');
location.href="view_karyawan.php";
</script>
<?php
} else
{
?>
<script type="text/javascript">
alert('Data gagal ditambahkan');
location.href="view_karyawan.php";
</script>
<?php
}
?>