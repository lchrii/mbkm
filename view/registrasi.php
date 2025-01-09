<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../assets/css/style-registrasi.css">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <div class="form-container">
        <!-- Logo Kampus Merdeka -->
        <img src="../assets/img/Logo MBKM.png" alt="logo mbkm.jpeg" class="logo">

        <!-- Form Registrasi -->
        <form action="" method="POST" onsubmit="return validatePasswords();">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" name="nim_nik" id="nim" placeholder="Masukkan NIM" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap :</label>
                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">No. Handphone</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Masukkan No. Handphone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="2" placeholder="Masukkan Alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi :</label>
                <select class="form-select" name="prodi" id="prodi" required>
                    <option selected disabled>Pilih Program Studi</option>
                    <?php
                    include '../function/koneksi.php';
                    $query_prodi = "SELECT id_prodi, nama_prodi FROM prodi";
                    $result_prodi = mysqli_query($conn, $query_prodi);

                    if (mysqli_num_rows($result_prodi) > 0) {
                        while ($row = mysqli_fetch_assoc($result_prodi)) {
                            echo '<option value="' . $row['id_prodi'] . '">' . $row['nama_prodi'] . '</option>';
                        }
                    } else {
                        echo '<option disabled>Tidak ada data prodi</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                    <span class="input-group-text eye-icon" onclick="togglePassword('password', this)">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi Password" required>
                    <span class="input-group-text eye-icon" onclick="togglePassword('confirm-password', this)">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>
            <div id="password-error" class="text-danger mb-3" style="display: none;">
                Password dan Konfirmasi Password tidak sesuai.
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
    </div>

    <script>
        function togglePassword(fieldId, icon) {
            const field = document.getElementById(fieldId);
            const isPassword = field.type === 'password';
            field.type = isPassword ? 'text' : 'password';
            icon.querySelector('i').classList.toggle('bi-eye');
            icon.querySelector('i').classList.toggle('bi-eye-slash');
        }

        function validatePasswords() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const errorDiv = document.getElementById('password-error');

            if (password !== confirmPassword) {
                errorDiv.style.display = 'block';
                return false;
            }

            errorDiv.style.display = 'none';
            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.js"></script>

    <?php
    include '../function/proses-registrasi.php';
    ?>
</body>

</html>