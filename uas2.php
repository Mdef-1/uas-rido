<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form action="control.php" method="post">
        <center><img src="img/yayasan assalaam.png" alt="" class="mt-3"></center>
        <h3 align="center" class="">PENGGAJIHAN</h3>
        <h3 align="center" class="">GURU/KARYAWAN YAYASAN ASSALAAM</h3>
        <div class="container mt-5 mb-5 " >
            
            <div class="card shadow">
                
                <div class="card-header">
                    Data Penggajihan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">No</label>
                        <input type="number" name="no" id="nama_lengkap" class="form-control" placeholder="Masukkan No" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama</label>
                        <input type="text" name="nama" id="nama_lengkap" class="form-control" placeholder="Masukkan nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Unit Pendidikan</label>
                        <select name="unit_pendidikan" id="jurusan" class="form-control" required>
                            <option value="">Pilih unit</option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="MTS">MTS</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Gaji</label>
                        <input type="date" name="tanggal_gaji" id="" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h3 align="center">Gaji</h3>
                            <div class="form-group">
                                <label for="jurusan">Jabatan</label>
                                <select name="jabatan" id="jurusan" class="form-control" required>
                                    <option value="">Pilih Jabatan</option>
                                    <option value="kepala sekolah">kepala sekolah</option>
                                    <option value="wakasek">wakasek</option>
                                    <option value="guru">guru</option>
                                    <option value="karyawan">karyawan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Lama Kerja</label>
                                <input type="text" name="lama_kerja" id="nama_lengkap" class="form-control" placeholder="Lama kerja" required>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Status Kerja</label>
                                <select name="status_kerja" id="jurusan" class="form-control" required>
                                    <option value="">Pilih Status Kerja</option>
                                    <option value="tetap">Tetap</option>
                                    <option value="kontrak">Kontrak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <h3 align="center">Potongan</h3>
                            <div class="form-group">
                                <label for="nama_lengkap">BPJS</label>
                                <input type="number" name="bpjs" id="nama_lengkap" class="form-control" placeholder="bpjs" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">pinjaman</label>
                                <input type="number" name="pinjaman" id="nama_lengkap" class="form-control" placeholder="pinjaman" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">cicilan</label>
                                <input type="number" name="cicilan" id="nama_lengkap" class="form-control" placeholder="tabungan" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">infaq</label>
                                <input type="number" name="infaq" id="nama_lengkap" class="form-control" placeholder="lainya" required>
                            </div>
                            
                        </div>
                        
                    </div>
                        <div class="text-center" align="center">
                            <button type="submit" class="btn btn-primary" name="proses">Proses</button>
                        </div>
                </div>
            </div>

        </div>
    </form>
</body>