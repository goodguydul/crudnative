		<form method="POST" class="form-data-ktp" enctype="multipart/form-data" >
			<!-- <div class="form-group">
				<label>Foto</label>
				<input type="file" class="form-control" name="foto" required="true" multiple accept='image/*'>
			</div> -->
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" required="true">
			</div>
			<hr>
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input type="text" class="form-control" name="tmpLahir" required="true">
			</div>
			<hr>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" class="form-control" name="tgLahir" required="true">
			</div>
			<hr>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select class="form-control" name="gender" required="true">
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
			<hr>
			<div class="form-group">
				<label>Gol. Darah</label>
				<select class="form-control" name="goldar" required="true">
					<option value="o">O</option>
					<option value="a">A</option>
					<option value="ab">AB</option>
					<option value="-">-</option>
				</select>
			</div>
			<hr>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text"  class="form-control" name="alamat" required="true">
			</div>
			<div class="form-group form-inline">				
				<label>RT/RW</label>
				<input type="text"  class="form-control" name="rtrw" required="true" placeholder="000/000">
				<label>Kelurahan/Desa</label>
				<input type="text"  class="form-control" name="keldes" required="true">
				<label>Kecamatan</label>
				<input type="text"  class="form-control" name="kec" required="true">
			</div>
			<hr>			
			<div class="form-group">
				<label>Agama</label>
				<select class="form-control" name="agama" required="true">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="budha">Budha</option>
					<option value="kristen">Kristen</option>
					<option value="konghucu">Kong Hu Cu</option>
				</select>
			</div>
			<div class="form-group">
				<label>Status erkawinan</label>
				<select class="form-control" name="mariage" required="true">
					<option value="belum kawin">Belum kawin</option>
					<option value="kawin">Kawin</option>
					<option value="cerai">Cerai</option>
				</select>
			</div>
			<div class="form-group">
				<label>Pekerjaan</label>
				<select class="form-control" name="job" required="true">
					<option value="belum/tidak bekerja">Belum/Tidak Bekerja</option>
					<option value="mengurus rumah tangga">Mengurus Rumah Tangga</option>
					<option value="pelajar/mahasiswa">Pelajar/Mahasiswa</option>
					<option value="pensiunan">Pensiunan</option>
					<option value="pegawai negeri sipil">Pegawai Negeri Sipil</option>
					<option value="tentara nasional indonesia">Tentara Nasional Indonesia</option>
					<option value="kepolisian ri">Kepolisian Ri</option>
					<option value="perdagangan">Perdagangan</option>
					<option value="petani/pekebun">Petani/Pekebun</option>
					<option value="peternak">Peternak</option>
					<option value="nelayan/perikanan">Nelayan/Perikanan</option>
					<option value="industri">Industri</option>
					<option value="konstruksi">Konstruksi</option>
					<option value="transportasi">Transportasi</option>
					<option value="karyawan swasta">Karyawan Swasta</option>
					<option value="karyawan bumn">Karyawan Bumn</option>
					<option value="karyawan bumd">Karyawan Bumd</option>
					<option value="karyawan honorer">Karyawan Honorer</option>
					<option value="buruh harian lepas">Buruh Harian Lepas</option>
					<option value="buruh tani/perkebunan">Buruh Tani/Perkebunan</option>
					<option value="buruh nelayan/perikanan">Buruh Nelayan/Perikanan</option>
					<option value="buruh peternakan">Buruh Peternakan</option>
					<option value="pembantu rumah tangga">Pembantu Rumah Tangga</option>
					<option value="tukang cukur">Tukang Cukur</option>
					<option value="tukang listrik">Tukang Listrik</option>
					<option value="tukang batu">Tukang Batu</option>
					<option value="tukang kayu">Tukang Kayu</option>
					<option value="tukang sol sepatu">Tukang Sol Sepatu</option>
					<option value="tukang las/pandai besi">Tukang Las/Pandai Besi</option>
					<option value="tukang jahit">Tukang Jahit</option>
					<option value="tukang gigi">Tukang Gigi</option>
					<option value="penata rias">Penata Rias</option>
					<option value="penata busana">Penata Busana</option>
					<option value="penata rambut">Penata Rambut</option>
					<option value="mekanik">Mekanik</option>
					<option value="seniman">Seniman</option>
					<option value="tabib">Tabib</option>
					<option value="paraji">Paraji</option>
					<option value="perancang busana">Perancang Busana</option>
					<option value="penterjemah">Penterjemah</option>
					<option value="imam mesjid">Imam Mesjid</option>
					<option value="pendeta">Pendeta</option>
					<option value="pastor">Pastor</option>
					<option value="wartawan">Wartawan</option>
					<option value="ustadz/mubaligh">Ustadz/Mubaligh</option>
					<option value="juru masak">Juru Masak</option>
					<option value="promotor acara">Promotor Acara</option>
					<option value="anggota dpr-ri">Anggota Dpr-Ri</option>
					<option value="anggota dpd">Anggota Dpd</option>
					<option value="anggota bpk">Anggota Bpk</option>
					<option value="presiden">Presiden</option>
					<option value="wakil presiden">Wakil Presiden</option>
					<option value="anggota mahkamah konstitusi">Anggota Mahkamah Konstitusi</option>
					<option value="anggota kabinet/kementerian">Anggota Kabinet/Kementerian</option>
					<option value="duta besar">Duta Besar</option>
					<option value="gubernur">Gubernur</option>
					<option value="wakil gubernur">Wakil Gubernur</option>
					<option value="bupati">Bupati</option>
					<option value="wakil bupati">Wakil Bupati</option>
					<option value="walikota">Walikota</option>
					<option value="wakil walikota">Wakil Walikota</option>
					<option value="anggota dprd provinsi">Anggota Dprd Provinsi</option>
					<option value="anggota dprd kabupaten/kota">Anggota Dprd Kabupaten/Kota</option>
					<option value="dosen">Dosen</option>
					<option value="guru">Guru</option>
					<option value="pilot">Pilot</option>
					<option value="pengacara">Pengacara</option>
					<option value="notaris">Notaris</option>
					<option value="arsitek">Arsitek</option>
					<option value="akuntan">Akuntan</option>
					<option value="konsultan">Konsultan</option>
					<option value="dokter">Dokter</option>
					<option value="bidan">Bidan</option>
					<option value="perawat">Perawat</option>
					<option value="apoteker">Apoteker</option>
					<option value="psikiater/psikolog">Psikiater/Psikolog</option>
					<option value="penyiar televisi">Penyiar Televisi</option>
					<option value="penyiar radio">Penyiar Radio</option>
					<option value="pelaut">Pelaut</option>
					<option value="peneliti">Peneliti</option>
					<option value="sopir">Sopir</option>
					<option value="pialang">Pialang</option>
					<option value="paranormal">Paranormal</option>
					<option value="pedagang">Pedagang</option>
					<option value="perangkat desa">Perangkat Desa</option>
					<option value="kepala desa">Kepala Desa</option>
					<option value="biarawati">Biarawati</option>
					<option value="wiraswasta">Wiraswasta</option>
					<option value="lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label>Kewarganegaraan</label>
				<input type="text"  class="form-control" name="nation" required="true">
			</div>
			<div class="form-group">
				<label>Berlaku Hingga</label>
				<input type="date"  class="form-control" name="exp" required="true">
			</div>