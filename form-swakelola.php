<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pekan Riset Sawit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/perisai/logo-sawit.svg" rel="icon">
  <link href="assets/img/perisai/logo-sawit.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
        .header-form {
            background-color: #b8860b;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .form-check-label {
            font-size: 12px;
        }
        .btn-submit {
            background-color: #b8860b;
            color: white;
            width: 100%;
        }
        .upload-btn {
            background-color: #d3d3d3;
            color: black;
            width: 100%;
            margin-bottom: 10px;
        }
        .note {
            font-size: 12px;
            color: red;
            text-align: right;
        }
    </style>

</head>

<body>
  <div class="loginPage">

  <?php include("navbar-both.php"); ?>

     <!-- ======= Header ======= -->
  <!-- <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/perisai/logo-kementrian.svg" alt="" class="img-fluid"></a>
      
      <div class="order-last order-lg-0">
        <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/perisai/logo-sawit.svg" alt="" class="img-fluid"></a>
      </div>

    </div>
  </header>End Header -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="loginSection" class="loginSection">
      <div class="container" data-aos="fade-up">

      <div class="header-form">
            FORMULIR PENDAFTARAN INMRAS/WINPRO
        </div>
        <form id="registrationForm" action="submit_form.php" method="post" enctype="multipart/form-data">
            <label for="username" class="form-label">Username (KHU)</label>
            <input type="text" class="form-control" id="username" name="username">
            <!-- <div class="note">saat kolom KHU diisi, kolom referral akan terisi nama pemilik KHU</div> -->
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="referral" class="form-label">Nama Referral</label>
            <input type="text" class="form-control" id="referral" name="referral">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <label for="birthplace" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="birthplace" name="birthplace">
            <label for="birthdate" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
            <label for="religion" class="form-label">Agama</label>
            <input type="text" class="form-control" id="religion" name="religion">
            <label for="job" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="job" name="job">
            <label for="phone" class="form-label">No. HP/WA</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <label for="pilihan_program">Pilihan Program:</label><br>
            <select id="pilihan_program" name="pilihan_program" required>
                <option value="Inmars">Inmars</option>
                <option value="WinPro">WinPro</option>
            </select><br><br>
            
            <label for="kota_kab">Kota/Kab:</label><br>
            <select id="kota_kab" name="kota_kab" required>
                <option value="">Pilih Kota/Kab</option>
            </select><br><br>
            
            <label for="kecamatan">Kecamatan:</label><br>
            <select id="kecamatan" name="kecamatan" required>
                <option value="">Pilih Kecamatan</option>
            </select><br><br>
            
            <label for="kel_desa">Kel./Desa:</label><br>
            <select id="kel_desa" name="kel_desa" required>
                <option value="">Pilih Kel./Desa</option>
            </select><br><br>
            <label for="address" class="form-label">RT/RW/No</label>
            <input type="text" class="form-control" id="address" name="address">
            <label for="heir-name" class="form-label">Nama Ahli Waris</label>
            <input type="text" class="form-control" id="heir-name" name="heir-name">
            <label for="heir-nik" class="form-label">NIK Ahli Waris</label>
            <input type="text" class="form-control" id="heir-nik" name="heir-nik">
            <label for="heir-relation" class="form-label">Hubungan Ahli Waris</label>
            <input type="text" class="form-control" id="heir-relation" name="heir-relation">
            <label for="ktp" class="form-label">KTP</label>
            <input type="file" class="form-control" id="ktp" name="ktp">
            <label for="npwp" class="form-label">NPWP</label>
            <input type="file" class="form-control" id="npwp" name="npwp">
            <label for="photo" class="form-label">PHOTO</label>
            <input type="file" class="form-control" id="photo" name="photo">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agreement">
                <label class="form-check-label" for="agreement">
                    Telah menerima KIM (Komunikasi, Informasi, Motivasi) dari Pembina Program SWAKELOLA dan siap mengikuti BimTek
                </label>
            </div>
            <button type="submit" class="btn btn-submit mt-3">DAFTAR</button>
        </form>
    </div>

    <!-- Modal -->
    <div id="successModal" style="display:none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5);">
        <div style="background-color: white; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 30%;">
            <h2>Data berhasil disimpan!</h2>
            <button id="closeModal">Selesai</button>
        </div>
    </div>
        </div>

        
      </div>
    </section><!-- End About Section -->
    
  </main><!-- End #main -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
        // Fetch data kota/kab saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            fetch('server/get_kota_kab.php')
                .then(response => response.json())
                .then(data => {
                    console.log('Data Kota/Kab:', data); // Log data untuk memeriksa format
                    let kotaKabSelect = document.getElementById('kota_kab');
                    data.forEach(kotaKab => {
                        console.log('Kota/Kab Item:', kotaKab); // Log setiap item untuk memeriksa properti
                        let option = document.createElement('option');
                        option.value = kotaKab.id; // Sesuaikan dengan nama field dari data
                        option.textContent = kotaKab.nama_kota_kab; // Sesuaikan dengan nama field dari data
                        kotaKabSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching kota_kab:', error));
        });

        // Fetch kecamatan berdasarkan pilihan kota/kab
        document.getElementById('kota_kab').addEventListener('change', function() {
            let kotaKabId = this.value;
            console.log('Selected Kota/Kab ID:', kotaKabId); // Log ID yang dipilih
            if (kotaKabId) { // Periksa bahwa ID valid
                fetch('server/get_kecamatan.php?kota_kab_id=' + kotaKabId)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data Kecamatan:', data); // Log data untuk memeriksa format
                        let kecamatanSelect = document.getElementById('kecamatan');
                        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>'; // Reset options
                        data.forEach(kecamatan => {
                            console.log('Kecamatan Item:', kecamatan); // Log setiap item untuk memeriksa properti
                            let option = document.createElement('option');
                            option.value = kecamatan.id; // Sesuaikan dengan nama field dari data
                            option.textContent = kecamatan.nama_kecamatan; // Sesuaikan dengan nama field dari data
                            kecamatanSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching kecamatan:', error));
            }
        });
    
        // Fetch kelurahan/desa berdasarkan pilihan kecamatan
        document.getElementById('kecamatan').addEventListener('change', function() {
            let kecamatanId = this.value;
            console.log('Selected Kecamatan ID:', kecamatanId); // Log ID yang dipilih
            if (kecamatanId) { // Periksa bahwa ID valid
                fetch('server/get_kel_desa.php?kecamatan_id=' + kecamatanId)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Data Kelurahan/Desa:', data); // Log data untuk memeriksa format
                        let kelDesaSelect = document.getElementById('kel_desa');
                        kelDesaSelect.innerHTML = '<option value="">Pilih Kel./Desa</option>'; // Reset options
                        data.forEach(kelDesa => {
                            console.log('Kelurahan/Desa Item:', kelDesa); // Log setiap item untuk memeriksa properti
                            let option = document.createElement('option');
                            option.value = kelDesa.id; // Sesuaikan dengan nama field dari data
                            option.textContent = kelDesa.nama_kelurahan; // Sesuaikan dengan nama field dari data
                            kelDesaSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching kel_desa:', error));
            }
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     fetch('server/get_kota_kab.php')
        //         .then(response => response.json())
        //         .then(data => {
        //             let areaKerjaKotaKabSelect = document.getElementById('area_kerja_kota_kab');
        //             data.forEach(kotaKab => {
        //                 let option = document.createElement('option');
        //                 option.value = kotaKab.id_kota_kab;
        //                 option.textContent = kotaKab.nama_kota_kab;
        //                 areaKerjaKotaKabSelect.appendChild(option);
        //             });
        //         })
        //         .catch(error => console.error('Error fetching kota_kab for area kerja:', error));

        //     document.getElementById('area_kerja_kota_kab').addEventListener('change', function() {
        //         let kotaKabId = this.value;
        //         if (kotaKabId) {
        //             fetch('server/get_kecamatan.php?kota_kab_id=' + kotaKabId)
        //                 .then(response => response.json())
        //                 .then(data => {
        //                     let areaKerjaKecamatanSelect = document.getElementById('area_kerja_kecamatan');
        //                     areaKerjaKecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
        //                     data.forEach(kecamatan => {
        //                         let option = document.createElement('option');
        //                         option.value = kecamatan.id_kecamatan;
        //                         option.textContent = kecamatan.nama_kecamatan;
        //                         areaKerjaKecamatanSelect.appendChild(option);
        //                     });
        //                 })
        //                 .catch(error => console.error('Error fetching kecamatan for area kerja:', error));
        //         }
        //     });
        // });

        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah reload halaman

            let formData = new FormData(this);

            fetch('submit_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('successModal').style.display = 'block';
                } else {
                    alert(data.message); // Tampilkan pesan error jika ada
                }
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
            location.reload(); // Refresh halaman setelah modal ditutup
        });


    </script>
  </div>
</body>

</html>