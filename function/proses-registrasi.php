<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        include 'koneksi.php';

        $nim_nik = $_POST['nim_nik'];
        $username = $_POST['username'];
        $nama_lengkap = $_POST['namaLengkap'];
        $email = $_POST['email'];
        $no_handphone = $_POST['phone'];
        $alamat = $_POST['alamat'];
        $id_prodi = $_POST['prodi'];
        $password = $_POST['password'];
        $role = "Mahasiswa";

        $password_hashed = password_hash($password, PASSWORD_BCRYPT);

        $sql_check = "SELECT nim_nik, username FROM users WHERE nim_nik = ? OR username = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("ss", $nim_nik, $username);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            // If the NIM/NIK or Username already exists, show an error message
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'NIM/NIK atau Username sudah terdaftar!',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.history.back();
                    });
                </script>";
            exit();
        }

        $sql = "INSERT INTO users (nim_nik, username, nama_lengkap, email, no_handphone, alamat, id_prodi, password, role) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $nim_nik, $username, $nama_lengkap, $email, $no_handphone, $alamat, $id_prodi, $password_hashed, $role);

        if ($stmt->execute()) {
            // If registration is successful, show a success message
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Registrasi berhasil!',
                        text: 'Anda akan diarahkan ke halaman login.',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.location.href = 'login.php';
                    });
                </script>";
        } else {
            // If there's an error during registration, show an error message
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan',
                        text: 'Terjadi kesalahan saat registrasi. Silakan coba lagi!',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.history.back();
                    });
                </script>";
        }

        $stmt_check->close();
        $stmt->close();
        $conn->close();
    }
    ?>