<?php
$conn = mysqli_connect("localhost","root","","paspor");

// PROSES DAFTAR
if(isset($_POST['daftar'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];

    $hari = date('l', strtotime($tanggal));
    $jam = date('H:i:s');

    $cek = mysqli_query($conn,"SELECT COUNT(*) as total FROM daftar WHERE tanggal='$tanggal'");
    $data = mysqli_fetch_assoc($cek);

    if($data['total'] >= 5){
        echo "<script>alert('Kuota penuh!');</script>";
    }else{
        mysqli_query($conn,"INSERT INTO daftar VALUES('','$no','$nama','$tanggal','$hari','$jam')");
        echo "<script>alert('Berhasil daftar');</script>";
    }
}

// PROSES DAFTAR ULANG
if(isset($_POST['ulang'])){
    $nama = $_POST['nama'];
    $ktp = $_POST['ktp'];
    $kk = $_POST['kk'];
    $ijazah = $_POST['ijazah'];

    if($ktp=='ada' && $kk=='ada' && $ijazah=='ada'){
        $ket = "OK";
        $q = mysqli_query($conn,"SELECT MAX(no_antrian) as max FROM daftar_ulang");
        $d = mysqli_fetch_assoc($q);
        $antrian = $d['max'] + 1;
    }else{
        $ket = "tidak";
        $antrian = 0;
    }

    mysqli_query($conn,"INSERT INTO daftar_ulang VALUES('','$nama','$ktp','$kk','$ijazah','$ket','$antrian')");
    echo "<script>alert('Daftar ulang selesai');</script>";
}

// PROSES PENGURUSAN
if(isset($_POST['urus'])){
    $antrian = $_POST['antrian'];
    $nama = $_POST['nama'];
    $berkas = $_POST['berkas'];

    if($berkas=='lengkap'){
        $status = "diterima";
        $bayar = 355000;
    }else{
        $status = "ditolak";
        $bayar = 0;
    }

    mysqli_query($conn,"INSERT INTO pengurusan VALUES('','$antrian','$nama','$berkas','$status','$bayar')");
    echo "<script>alert('Pengurusan selesai');</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=index, initial-scale=1.0">
    <title>Sistem Pengajuan Paspor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-2px);
        }
        .card-header {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            font-weight: 600;
        }
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-passport me-2"></i> E-PASPOR APP</a>
    </div>
</nav>

<div class="container mb-5">
    
    <div class="row g-4 mb-5">
        
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white text-center py-3">
                    <i class="fa-solid fa-user-plus me-2"></i> 1. Pendaftaran Berkas
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label font-monospace fw-bold">Nomor Daftar</label>
                            <input type="text" class="form-control" name="no" placeholder="Contoh: REG-01" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Rencana</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <button type="submit" name="daftar" class="btn btn-primary w-100 mt-2">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Simpan Pendaftaran
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-success text-white text-center py-3">
                    <i class="fa-solid fa-file-signature me-2"></i> 2. Daftar Ulang (Cek Berkas)
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Pemohon</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Dokumen KTP</label>
                            <select class="form-select" name="ktp">
                                <option value="ada">Ada / Lengkap</option>
                                <option value="tidak">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kartu Keluarga (KK)</label>
                            <select class="form-select" name="kk">
                                <option value="ada">Ada / Lengkap</option>
                                <option value="tidak">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ijazah / Akta</label>
                            <select class="form-select" name="ijazah">
                                <option value="ada">Ada / Lengkap</option>
                                <option value="tidak">Tidak Ada</option>
                            </select>
                        </div>
                        <button type="submit" name="ulang" class="btn btn-success w-100 mt-2">
                            <i class="fa-solid fa-gear me-1"></i> Proses Verifikasi
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-warning text-dark text-center py-3">
                    <i class="fa-solid fa-receipt me-2"></i> 3. Tahap Pengurusan
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">No Antrian</label>
                            <input type="number" class="form-control" name="antrian" placeholder="Contoh: 1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Pemohon</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status Akhir Berkas</label>
                            <select class="form-select" name="berkas">
                                <option value="lengkap">Lengkap & Valid</option>
                                <option value="tidak">Tidak Lengkap</option>
                            </select>
                        </div>
                        <button type="submit" name="urus" class="btn btn-warning w-100 mt-4 text-dark fw-bold">
                            <i class="fa-solid fa-circle-check me-1"></i> Selesaikan Pengurusan
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0"><i class="fa-solid fa-table me-2"></i> Live Data Antrian Pendaftaran</h5>
            <span class="badge bg-primary">Realtime</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0 align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th class="ps-4">No Pendaftaran</th>
                            <th>Nama Pemohon</th>
                            <th>Tanggal Rencana</th>
                            <th>Hari</th>
                            <th class="pe-4">Jam Input</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($conn,"SELECT * FROM daftar");
                        if(mysqli_num_rows($data) > 0) {
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td class="ps-4 fw-mono text-secondary"><?= htmlspecialchars($d['no_daftar']) ?></td>
                            <td class="fw-bold text-dark"><?= htmlspecialchars($d['nama']) ?></td>
                            <td><i class="fa-regular fa-calendar me-2 text-primary"></i><?= htmlspecialchars($d['tanggal']) ?></td>
                            <td><span class="badge bg-light text-dark border"><?= htmlspecialchars($d['hari']) ?></span></td>
                            <td class="pe-4 text-muted"><i class="fa-regular fa-clock me-1"></i><?= htmlspecialchars($d['jam']) ?></td>
                        </tr>
                        <?php 
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center py-4 text-muted'>Belum ada data pendaftaran hari ini.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>