
<!DOCTYPE html>
<html>
<head>
	<title>Operasi CRUD di CI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
		<div class="jumbotron">
			<h1 align="center">CRUD CI APP</h1>
		</div>
		<div class="container">
		<h1 align="center">Edit Karyawan</h1>

		<form action="<?php echo base_url(); ?>crud/update/<?php echo $singleKaryawan->id; ?>" method="post">
			<div class="form-group">
        	<label for="nama">Nama</label>
        	<input type="text" name="nama" placeholder="Input Nama Anda" class="form-control" value="<?php echo $singleKaryawan->nama; ?>"> 
        </div>
        <div class="form-group">
        	<label for="gender">Gender</label>
        	<input type="text" name="gender" placeholder="Input Jenis Kelamin Anda" class="form-control" value="<?php echo $singleKaryawan->gender; ?>">
        </div>
        <div class="form-group">
        	<label for="alamat">Alamat</label>
        	<input type="text" name="alamat" placeholder="Input Alamat Anda" class="form-control" value="<?php echo $singleKaryawan->alamat; ?>">
        </div>
        <div class="form-group">
        	<label for="jabatan">Jabatan</label>
        	<input type="text" name="jabatan" placeholder="Input Jabatan Anda" class="form-control" value="<?php echo $singleKaryawan->jabatan; ?>">
        </div>
        <div class="form-group">
        	<label for="telp">Telp</label>
        	<input type="text" name="telp" placeholder="Input Nomor Telp Anda" class="form-control" value="<?php echo $singleKaryawan->telp; ?>">
        </div>
			<br>
			<input type="submit" name="edit" value="Update" class="btn-primary ">
        </form>
        </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

