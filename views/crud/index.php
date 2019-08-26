<?php
require_once('config/koneksi.php');

$query = "SELECT * FROM profile";
$urlcrud = "index.php?page=crud/";
?>
<div class="row">
	<div class="col-lg-12">
		<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#createModal"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				<th width="50px">No</th>
				<!-- <th width="150px">Foto</th> -->
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Gol. Darah</th>
				<th>Alamat</th>
				<th>RT/RW</th>
				<th>Kelurahan/Desa</th>
				<th>Kecamatan</th>
				<th>Agama</th>
				<th>Status Perkawinan</th>
				<th>Pekerjaan</th>
				<th>Kewarganegaraan</th>
				<th>Berlaku Hingga</th>

				<th style="text-align: center;">Actions</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					$birthdate = new DateTime($obj->tgLahir);
					$expdate = new DateTime($obj->exp);
					?>
					<tr>
						<td><?= $a ?></td>
						<!-- <td><img src="<?= $obj->foto ?>" alt="photo user <?= $obj->nama ?>" ></td> -->
						<td><?= $obj->nama ?></td>
						<td><?= $obj->tmpLahir ?></td>
						<td><?= date_format($birthdate,"d M Y") ?></td>
						<td><?= $obj->gender?></td>
						<td><?= $obj->goldar ?></td>
						<td><?= $obj->alamat ?></td>
						<td><?= $obj->rtrw ?></td>
						<td><?= $obj->keldes ?></td>
						<td><?= $obj->kec ?></td>
						<td><?= $obj->agama ?></td>
						<td><?= $obj->mariage ?></td>
						<td><?= $obj->job ?></td>
						<td><?= $obj->nation ?></td>
						<td><?= date_format($expdate,"d-m-Y")?></td>
						<td style="text-align: center;">
						<button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#editModal"></span></button>
						<button data-url="<?= 'process/delete.php?id='.$obj->id?>" class="removeItem btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
						<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  	<div class="modal-dialog" role="document">
						    	<div class="modal-content">
							      	<div class="modal-header">
							        	<h5 class="modal-title" id="exampleModalLabel"><b>Edit Data</b></h5>
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          		<span aria-hidden="true">&times;</span>
							        	</button>
							      	</div>
						      		<div class="modal-body">
						    			<?= include('edit.php');?>
						      		</div>
						      		<div class="modal-footer">
							        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        	<button type="submit" class="btn btn-primary">Save Changes</button>
						      		</div>
						      		</form>
						    	</div>
						  	</div>
						</div>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
	<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel"><b>Create Data</b></h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
	      		<div class="modal-body">
	    			<?= include('create.php');?>
	      		</div>
	      		<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        	<button type="submit" class="btn btn-primary">Save changes</button>
	      		</div>
	      		</form>
	    	</div>
	  	</div>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>