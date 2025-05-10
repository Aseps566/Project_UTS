<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Puskesmas Prima</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <style>
    .brand-link, .brand-link:hover {
      text-decoration: none;
    }
    .patient-card {
      transition: all 0.3s ease;
    }
    .patient-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .status-badge {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
    }
    .status-aktif {
      background-color: #28a745;
      color: white;
    }
    .status-selesai {
      background-color: #6c757d;
      color: white;
    }
    .status-menunggu {
      background-color: #ffc107;
      color: #212529;
    }
    .sidebar-menu > li > a {
      transition: all 0.3s;
    }
    .sidebar-menu > li > a:hover {
      padding-left: 15px;
    }
    .chart-container {
      height: 250px;
    }
    .info-box-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right animate__animated animate__fadeIn">
          <span class="dropdown-header">3 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-md mr-2"></i> 2 new appointments
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-pills mr-2"></i> Medicine stock low
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file-medical mr-2"></i> Report ready
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right animate__animated animate__fadeIn">
          <div class="dropdown-item text-center py-2">
            <img src="andi.jpeg" class="img-circle elevation-2" alt="User Image" width="60">
            <p class="mb-0 mt-2">Dr. Bambang S.</p>
            <small>{Psikiater}</small>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link text-center">
      <span class="brand-text font-weight-bold">Puskesmas Prima</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="andi.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dr. Bambang S.</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#daftarPasien" class="nav-link">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>Daftar Pasien</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#jadwal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Jadwal Praktek</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#rekamMedis" class="nav-link">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>Rekam Medis</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#obat" class="nav-link">
              <i class="nav-icon fas fa-pills"></i>
              <p>Manajemen Obat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#laporan" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#pengaturan" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Pengaturan</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Puskesmas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container-fluid">
        <!-- Info Boxes -->
        <div class="row animate__animated animate__fadeIn">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>24</h3>
                <p>Pasien Hari Ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-injured"></i>
              </div>
              <a href="#daftarPasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>18</h3>
                <p>Sudah Dilayani</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <a href="#daftarPasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>6</h3>
                <p>Menunggu</p>
              </div>
              <div class="icon">
                <i class="fas fa-clock"></i>
              </div>
              <a href="#daftarPasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3</h3>
                <p>Emergency</p>
              </div>
              <div class="icon">
                <i class="fas fa-ambulance"></i>
              </div>
              <a href="#daftarPasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Main Row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Daftar Pasien -->
            <div class="card animate__animated animate__fadeInLeft" id="daftarPasien">
              <div class="card-header">
                <h3 class="card-title">Daftar Pasien Hari Ini</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table id="pasienTable" class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ahmad Susanto</td>
                        <td>35</td>
                        <td>Laki-laki</td>
                        <td><span class="status-badge status-selesai">Selesai</span></td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Siti Rahayu</td>
                        <td>28</td>
                        <td>Perempuan</td>
                        <td><span class="status-badge status-aktif">Sedang Diperiksa</span></td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Budi Santoso</td>
                        <td>45</td>
                        <td>Laki-laki</td>
                        <td><span class="status-badge status-menunggu">Menunggu</span></td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Dewi Lestari</td>
                        <td>32</td>
                        <td>Perempuan</td>
                        <td><span class="status-badge status-menunggu">Menunggu</span></td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer clearfix">
                <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#tambahPasienModal">
                  <i class="fas fa-plus"></i> Tambah Pasien Baru
                </button>
              </div>
            </div>

            <!-- Jadwal Praktek -->
            <div class="card animate__animated animate__fadeInLeft" id="jadwal">
              <div class="card-header">
                <h3 class="card-title">Jadwal Praktek Hari Ini</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Waktu</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Layanan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>08:00 - 08:30</td>
                        <td>Ahmad Susanto</td>
                        <td>Kontrol Rutin</td>
                        <td><span class="badge badge-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>08:30 - 09:00</td>
                        <td>Siti Rahayu</td>
                        <td>Pemeriksaan Umum</td>
                        <td><span class="badge badge-info">Sedang Berlangsung</span></td>
                      </tr>
                      <tr>
                        <td>09:00 - 09:30</td>
                        <td>Budi Santoso</td>
                        <td>Konsultasi</td>
                        <td><span class="badge badge-warning">Menunggu</span></td>
                      </tr>
                      <tr>
                        <td>09:30 - 10:00</td>
                        <td>Dewi Lestari</td>
                        <td>Imunisasi</td>
                        <td><span class="badge badge-warning">Menunggu</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>

          <!-- Right col -->
          <section class="col-lg-5 connectedSortable">
            <!-- Grafik Kunjungan -->
            <div class="card animate__animated animate__fadeInRight">
              <div class="card-header">
                <h3 class="card-title">Grafik Kunjungan 7 Hari Terakhir</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <canvas id="visitsChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
            </div>

            <!-- Pasien Baru -->
            <div class="card animate__animated animate__fadeInRight" id="pasienBaru">
              <div class="card-header">
                <h3 class="card-title">Pasien Baru Bulan Ini</h3>
                <div class="card-tools">
                  <span class="badge badge-danger">5 Pasien Baru</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <li class="patient-card">
                    <img src="amad.jpeg" alt="User Image">
                    <a class="users-list-name" href="#">Ahmad</a>
                    <span class="users-list-date">Hari Ini</span>
                  </li>
                  <li class="patient-card">
                    <img src="siti.jpeg" alt="User Image">
                    <a class="users-list-name" href="#">Siti</a>
                    <span class="users-list-date">Kemarin</span>
                  </li>
                  <li class="patient-card">
                    <img src="wld.jpeg" alt="User Image">
                    <a class="users-list-name" href="#">Budi</a>
                    <span class="users-list-date">2 Hari Lalu</span>
                  </li>
                  <li class="patient-card">
                    <img src="images.jpeg" alt="User Image">
                    <a class="users-list-name" href="#">Dewi</a>
                    <span class="users-list-date">3 Hari Lalu</span>
                  </li>
                </ul>
              </div>
              <div class="card-footer text-center">
                <a href="#daftarPasien" class="btn btn-sm btn-secondary">Lihat Semua Pasien</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2025 <a href="#">Puskesmas Prima</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>

<!-- Modal Tambah Pasien -->
<div class="modal fade" id="tambahPasienModal" tabindex="-1" role="dialog" aria-labelledby="tambahPasienModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahPasienModalLabel">Tambah Pasien Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTambahPasien">
          <div class="form-group">
            <label for="namaPasien">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaPasien" placeholder="Masukkan nama pasien" required>
          </div>
          <div class="form-group">
            <label for="tanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggalLahir" required>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="L" checked>
              <label class="form-check-label" for="lakiLaki">Laki-laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
          </div>
          <div class="form-group">
            <label for="noTelepon">Nomor Telepon</label>
            <input type="tel" class="form-control" id="noTelepon" placeholder="Masukkan nomor telepon">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="simpanPasien">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  $(document).ready(function() {
    // Initialize DataTable
    $('#pasienTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/id.json"
      }
    });

    // Initialize chart
    var ctx = document.getElementById('visitsChart').getContext('2d');
    var visitsChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
        datasets: [{
          label: 'Jumlah Kunjungan',
          data: [12, 19, 15, 22, 18, 10, 5],
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: 5,
          pointBackgroundColor: '#3b8bba',
          pointBorderColor: 'rgba(255,255,255,0.8)',
          pointHoverRadius: 7,
          pointHoverBackgroundColor: '#3b8bba',
          pointHitRadius: 10,
          pointBorderWidth: 2,
          fill: true,
          tension: 0.3
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            backgroundColor: 'rgba(0,0,0,0.8)',
            titleFont: {
              size: 14
            },
            bodyFont: {
              size: 12
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 5
            }
          }
        },
        animation: {
          duration: 2000,
          easing: 'easeInOutQuart'
        }
      }
    });

    // Simpan pasien baru
    $('#simpanPasien').click(function() {
      // Validasi form
      if ($('#namaPasien').val() === '') {
        alert('Nama pasien harus diisi!');
        return;
      }
      
      // Tampilkan notifikasi
      var toast = $(`
        <div class="toast animate__animated animate__fadeInRight" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" style="position: fixed; bottom: 20px; right: 20px; min-width: 250px;">
          <div class="toast-header bg-success text-white">
            <strong class="mr-auto">Sukses</strong>
            <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Data pasien berhasil disimpan!
          </div>
        </div>
      `);
      
      $('body').append(toast);
      toast.toast('show');
      
      // Sembunyikan toast setelah 3 detik
      setTimeout(function() {
        toast.addClass('animate__fadeOutRight');
        setTimeout(function() {
          toast.remove();
        }, 500);
      }, 3000);
      
      // Tutup modal
      $('#tambahPasienModal').modal('hide');
      
      // Reset form
      $('#formTambahPasien')[0].reset();
    });

    // Animasi saat sidebar item diklik
    $('.nav-link').click(function() {
      var target = $(this).attr('href');
      if (target !== '#' && $(target).length) {
        $(target).addClass('animate__animated animate__fadeIn');
        setTimeout(function() {
          $(target).removeClass('animate__animated animate__fadeIn');
        }, 1000);
      }
    });

    // Animasi hover pada card
    $('.card').hover(
      function() {
        $(this).addClass('animate__animated animate__pulse');
      },
      function() {
        $(this).removeClass('animate__animated animate__pulse');
      }
    );
  });
</script>
</body>
</html>