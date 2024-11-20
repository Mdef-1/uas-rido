<?php
if (isset($_POST['proses'])) {
    $nomor = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tgl_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    
     
    class Penggajihan{
        public $gaji_bersih;
            public function data($nomor,$nama,$unit_pendidikan,$tgl_gaji,$jabatan,$lama_kerja,$status_kerja,$bpjs,$pinjaman,$cicilan,$infaq){
                if ($jabatan == "kepala sekolah") {
                    $gaji = 10000000;
                }elseif ($jabatan == "wakasek") {
                    $gaji = 7000000;
                }elseif ($jabatan == "guru") {
                    $gaji = 5000000;
                }elseif ($jabatan == "karyawan") {
                    $gaji = 2500000;
                }else {
                    $gaji = 0;
                }
                if ($status_kerja = "tetap") {
                    $bonus = 1000000;
                }   
            $this->gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $cicilan - $infaq;
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>DATA PENGGAJIHAN</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <style>
                    body {
                        background-color: #f8f9fa;
                    }
                    .receipt {
                        max-width: 400px;
                        margin: 20px auto;
                        padding: 20px;
                        border: 1px solid #000;
                        background-color: #fff;
                        box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    }
                    .receipt h2 {
                        text-align: center;
                    }
                    .receipt p {
                        margin: 0;
                        line-height: 1.5;
                    }
                    .receipt .border-top {
                        border-top: 1px solid #000;
                        margin: 10px 0;
                        padding-top: 10px;
                    }
                </style>
            </head>
            <body>
                <div class="receipt">
                    <h2>STRUK GAJI</h2>
                    <p><strong>Data Diri</strong></p>
                    <p><strong>No:</strong> <?php echo $nomor ?></p>
                    <p><strong>nama:</strong> <?php echo $nama ?></p>
                    <p><strong>unit pendidikan:</strong> <?php echo $unit_pendidikan ?></p>
                    <p><strong>tanggal gaji:</strong> <?php echo "$tgl_gaji" ?></p>
                    <p><strong>jabatan:</strong> <?php echo "$jabatan" ?></p>
                    <p><strong>gaji:</strong> <?php echo "$gaji" ?></p>
                    <p><strong>lama kerja:</strong> <?php echo "$lama_kerja" ?></p>
                    <p><strong>status kerja:</strong> <?php echo "$status_kerja" ?></p>
                    <p><strong>bonus:</strong> <?php echo "$bonus" ?></p>
                    <p><strong>BPJS:</strong> <?php echo "$bpjs" ?></p>
                    <p><strong>pinjaman:</strong> <?php echo "$pinjaman" ?></p>
                    <p><strong>cicilan:</strong> <?php echo "$cicilan" ?></p>
                    <p><strong>infaq:</strong> <?php echo "$infaq" ?></p>
                    <p><strong>gaji bersih:</strong> <?php echo $this->gaji_bersih ?></p>
                </div>
            </body>
            </html>
            <?php
        }  
    }
    $cetak = new penggajihan();
    echo $cetak->data($nomor,$nama,$unit_pendidikan,$tgl_gaji,$jabatan,$lama_kerja,$status_kerja,$bpjs,$pinjaman,$cicilan,$infaq);
}
