<!DOCTYPE html>
<html>
<head>
  <title>Lab Room Management</title>
  
   <!-- Link ke file CSS Bootstrap -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
  <div class="wrapper">
    <!-- As a heading -->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">SELAMAT DATANG ADMIN | LAB PSTE</a>
        <a href="#"><i class="fa-solid fa-address-card"></i></a>
      </div>
    </nav>
    <!-- last heading -->
    <!-- sidebar -->
     <div class="row no-gutters">
         <div class="col-md-2 ">
          <div class="sidebar">
              <header> <img src="img/siiforin.png" alt="logo" width="40px">
                        <span class='description'>SIFORIN</span>
              </header>
              <div class="list-item">
                <a href="http://127.0.0.1:8000/v_ruanglab">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span>Manage User</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                   <i class="fa-solid fa-boxes-packing"></i>
                    <span>Manage Suplier</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-box"></i>
                    <span>Manage Item</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-building"></i>
                    <span>Labroom</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-brands fa-dropbox"></i>
                    <span>Penempatan</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                    <span>Pengadaan</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-right-left"></i>
                    <span>Mutasi</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Barang Inventaris</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                    <i class="fa-solid fa-box-archive"></i>
                    <span>Peminjaman</span>
                </a>
              </div>
              <div class="list-item">
                <a href="#">
                  <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log out</span>
                </a>
              </div>
          </div>
          
         </div>

         <div class="col-md-10 p-5 pt-2">
          <h3>  <i class="fa-solid fa-square-plus"></i> Tambah Suplier</h3>
          <div class="cards shadow-lg ">
            <div class="card-body">
            <form>
                    <div class="mb-3">
                        <label for="exampleInputNama" class="form-label">Kode Suplier</label>
                        <input type="name" class="form-control" id="exampleInputName" >
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAlamat" class="form-label">Alamat Suplier</label>
                        <input type="alamatsuplier" class="form-control" id="exampleInputAlamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNotelp" class="form-label">No Telepon</label>
                        <input type="alamatsuplier" class="form-control" id="exampleInputAlamat">
                    </div>
                    <button type="submit" class="btn ">Simpan</button>
            </form>
            </div>
            </div>
        
   

    
     
  </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>