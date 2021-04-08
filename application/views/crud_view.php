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
			<div class="clear-fix">
				<h3 style="float: left">Daftar Karyawan</h3>
				<a href="#" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#exampleModal">Tambah Karyawan</a>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Nama</th>
						<th>Gender</th>
						<th>Alamat</th>
						<th>Jabatan</th>
						<th>Telp</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($karyawan_details as $tb_karyawan): ?>

						<tr>
							<td>
								<?php echo $tb_karyawan->nama; ?>
							</td>
							<td>
								<?php echo $tb_karyawan->gender; ?>
							</td>
							<td>
								<?php echo $tb_karyawan->alamat; ?>
							</td>
							<td>
								<?php echo $tb_karyawan->jabatan; ?>
							</td>
							<td>
								<?php echo $tb_karyawan->telp; ?>
							</td>
							<td>
								<a href="<?php echo base_url();?>crud/editKaryawan/<?php echo $tb_karyawan->id; ?>" class="btn btn-success" >Edit</a>
								<a class="btn btn-danger" href="<?php echo base_url();?>crud/deleteKaryawan/<?php echo $tb_karyawan->id; ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>	
				</tbody>
			</table>

		</div>
</div>

	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>crud/addKaryawan" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label for="nama">Nama</label>
        	<input type="text" name="nama" placeholder="Input Nama Anda" class="form-control">
        </div>
        <div class="form-group">
        	<label for="gender">Gender</label>
        	<input type="text" name="gender" placeholder="Input Jenis Kelamin Anda" class="form-control">
        </div>
        <div class="form-group">
        	<label for="alamat">Alamat</label>
        	<input type="text" name="alamat" placeholder="Input Alamat Anda" class="form-control">
        </div>
        <div class="form-group">
        	<label for="jabatan">Jabatan</label>
        	<input type="text" name="jabatan" placeholder="Input Jabatan Anda" class="form-control">
        </div>
        <div class="form-group">
        	<label for="telp">Telp</label>
        	<input type="text" name="telp" placeholder="Input Nomor Telp Anda" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Karyawan" class="btn btn-info">
      </div>
      </form>
    </div>
  </div>
</div>	

<?php if($this->session->flashdata('error')): ?>

	<div align="center" style="color: #fff" class="bg-danger">
		<?php echo $this->session->flashdata('error'); ?>
	</div>

<?php endif; ?>

<?php if($this->session->flashdata('inserted')): ?>

	<div align="center" style="color: #fff" class="bg-success">
		<?php echo $this->session->flashdata('inserted'); ?>
	</div>

<?php endif; ?>

<?php if($this->session->flashdata('updated')): ?>

	<div align="center" style="color: #fff" class="bg-success">
		<?php echo $this->session->flashdata('updated'); ?>
	</div>

<?php endif; ?>

<?php if($this->session->flashdata('deleted')): ?>

	<div align="center" style="color: #fff" class="bg-success">
		<?php echo $this->session->flashdata('updated'); ?>
	</div>

<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>