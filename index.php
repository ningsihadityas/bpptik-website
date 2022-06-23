<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/e1444b6af3.js"
      crossorigin="anonymous"
    ></script>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Website BPPTIK</title>
  </head>
  <body>
    <div class="sidebar">
      <ul>
        <li><a href="https://www.facebook.com/bpptik"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/bpptik"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://t.me/bpptik"><i class="fab fa-telegram"></i></a></li>
        <li><a href="https://plus.google.com/+bpptikkemkominfo"><i class="fab fa-google-plus"></i></a></li>
        <li><a href="https://www.youtube.com/c/BPPTIKKementerianKominfo"><i class="fab fa-youtube"></i></a></li>
        <br>
        <li><a href="https://bpptik.kominfo.go.id/lokasi/"><i class="fas fa-map-marker-alt"></i></a></li>
        <li><a href="https://bpptik.kominfo.go.id/faq/"><i class="fas fa-question-circle"></i></a></li>
       
      </ul>
    </div>

    <!-- main container -->
    <div class="main">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container" >
          <a class="navbar-brand" href="#">
            <img src="assets/logo.png" alt="" width="190" height="80" />
          </a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Profil
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li><a class="dropdown-item" href="https://bpptik.kominfo.go.id/profil-singkat/">Profil Singkat</a></li>
                  <li><a class="dropdown-item" href="https://bpptik.kominfo.go.id/sejarah/">Sejarah</a></li>
                  <li>
                    <a class="dropdown-item" href="https://bpptik.kominfo.go.id/tugas-dan-fungsi/">Tugas dan Fungsi</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/pelatihan/">Pelatihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/sertifikasi/">Sertifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/jadwal-2/">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/fasilitas/gedung-utama/">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/category/berita/">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/category/artikel/">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/category/galeri-foto/">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/skkni/">Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bpptik.kominfo.go.id/lsp-bpptik/visi-dan-misi-lsp-bpptpik/">LSP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://sidatik.kominfo.go.id">Sidatik</a>
              </li>
             
              
            </ul>
          </div>
        </div>
      </nav>
  
      <!-- Carousel -->
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner" style="height: 500px">
          <div class="carousel-item active">
            <img
              src="assets/carousel/carousel1.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="assets/carousel/carousel2.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="assets/carousel/carousel3.jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  
      <!-- main container after button panel -->
      <div class="container">
        <!-- button panel container -->
        <div class="row justify-content-center">
          <div class="col-sm-7 button-panel">
            <div class="d-flex justify-content-between">
              <!-- row 1 -->
              <div class="row box1">
                <div class="col">
                  <!-- skema icon -->
                  <i class="fas icon-btn-pnl fa-user-graduate"> Skema</i>
  
                  <!-- form control -->
                  <select name="" class="form-control">
                    <option value="">Pilih Skema Pelatihan</option>
                    <option value="">Pelatihan Junior Graphid Designer</option>
                    <option value="">Pelatihan Junior Web Developer</option>
                    <option value="">Pelatihan Junior Office Operator</option>
                  </select>
                </div>
  
                <div class="col">
                  <!-- location icon -->
                  <i class="fas icon-btn-pnl fa-map-marker-alt"> Pilih Gelombang</i>
  
                  <!-- form control -->
                  <select name="" class="form-control">
                    <option value="">Pilih Gelombang</option>
                    <option value="">Gelombang ke-6</option>
                    <option value="">Gelombang ke-7</option>
                    <option value="">Gelombang ke-8</option>
                  </select>
                </div>
              </div>
              <!-- row 1 -->
              <div class="row box3">
                <button type="button" class="btn btn-sm">
                  <i class="fa-2x fas fa-search text-white"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
  
        <!-- About BPPTIK -->
        <br />
        <div class="d-flex bd-highlight">
  
  
          <!-- left container -->
          <div class="p-2 left-con bd-highlight align-self-start">
            <p class="title">Konten Terbaru</p>
            <br />
            <!-- first container news -->
            <div class="news-container" style="width: 230px">
              <a href="https://bpptik.kominfo.go.id/2021/09/15/9164/pengumuman-tentang-hasil-seleksi-calon-peserta-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-secara-online-tahun-2021-gelombang-ke-8/"
                ><img
                  src="assets/news/news1.png"
                  style="height: 125px"
                  class="card-img"
                  alt="..."/>
              </a>
              <a href="https://bpptik.kominfo.go.id/2021/09/15/9164/pengumuman-tentang-hasil-seleksi-calon-peserta-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-secara-online-tahun-2021-gelombang-ke-8/" class="news-link" 
                >Pengumuman Tentang Hasil Seleksi Calon Peserta Pelatihan dan
                Sertifikasi Kompetensi Bidang TIK Berbasis SKKNI Secara Online
                Tahun 2021 Gelombang Ke-8</a>
              <p class="date">15 September 2021</p>
            </div>
  
            <br />
  
            <!-- second container news -->
            <div class="news-container" style="width: 230px">
              <a href="https://bpptik.kominfo.go.id/2021/09/07/9156/dibuka-pendaftaran-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-online-tahun-2021-gelombang-ke-8/"
                ><img
                  src="assets/news/news2.png"
                  style="height: 125px"
                  class="card-img"
                  alt="..."/>
              </a>
              <a href="https://bpptik.kominfo.go.id/2021/09/07/9156/dibuka-pendaftaran-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-online-tahun-2021-gelombang-ke-8/" class="news-link" 
                >Dibuka, Pendaftaran Pelatihan dan Sertifikasi Kompetensi Bidang
                TIK Berbasis SKKNI Online Tahun 2021 Gelombang ke-8</a
              >
              <p class="date">7 September 2021</p>
            </div>
  
            <br />
  
            <!-- third container news -->
            <div class="news-container" style="width: 230px">
              <a href="https://bpptik.kominfo.go.id/2021/08/30/9136/bpptik-selenggarakan-tasyakuran-sekaligus-perpisahan-pegawai-yang-memasuki-masa-purna-tugas/"
                ><img
                  src="assets/news/news3.jpg"
                  style="height: 125px"
                  class="card-img"
                  alt="..."
              /></a>
              <a href="https://bpptik.kominfo.go.id/2021/08/30/9136/bpptik-selenggarakan-tasyakuran-sekaligus-perpisahan-pegawai-yang-memasuki-masa-purna-tugas/" class="news-link" 
                >BPPTIK Selenggarakan Tasyakuran sekaligus Perpisahan Pegawai yang
                Memasuki Masa Purna Tugas</a
              >
              <p class="date">30 Agustus 2021</p>
            </div>
          </div>
  
  
          <!-- center container -->
          <div class="p-2 w-100 bd-highlight">
            
            <div>
            <!-- News Carousel -->
            <div
              id="carouselCardControls"
              class="carousel slide"
              data-bs-ride="carouselCard"
            >
              <div class="carousel-inner" style="height: max-content">
  
                <!-- slide 1 -->
                <div class="carousel-item active">
                  <img 
                    src="assets/news/news4.jpg"
                    class="d-block w-100"
                    style="height: 300px"
                    alt="..."
                  />
                  <div class="carousel-text">
                    <a href="https://bpptik.kominfo.go.id/2021/08/25/9134/pembukaan-kegiatan-pelatihan-teknis-bidang-tik-bagi-asn-angkatan-v-tahun-2021-di-bpptik-kominfo-secara-daring/" class="carousel-title">
                      <p >
                        Pembukaan Kegiatan Pelatihan Teknis Bidang TIK bagi ASN
                        Angkatan V Tahun 2021 di BPPTIK Kominfo secara Daring
                      </p>
                    </a>
                    <p>
                      BPPTIK – Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK) menyelenggarakan Pelatihan Teknis Bidang[...]
                    </p>
                  </div>
                </div>
  
                <!-- slide 2 -->
                <div class="carousel-item">
                  <img 
                    src="assets/news/news5.png"
                    class="d-block w-100"
                    style="height: 300px"
                    alt="..."
                  />
                  <div class="carousel-text">
                    <a href="https://bpptik.kominfo.go.id/2021/08/27/9143/sinergi-pengembangan-talenta-digital-peluncuran-program-digital-talent-scholarship-dts-2021/" class="carousel-title">
                      <p>
                        Sinergi Pengembangan Talenta Digital: Peluncuran Program Digital Talent Scholarship (DTS) 2021
                      </p>
                    </a>
                    <p>
                      BPPTIK – Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BBPTIK) di bawah koordinasi Badan Penelitian dan Pengembangan Sumber[...]
                    </p>
                  </div>
                </div>
  
                 <!-- slide 3 -->
                 <div class="carousel-item">
                  <img 
                    src="assets/news/news3.jpg"
                    class="d-block w-100"
                    style="height: 300px"
                    alt="..."
                  />
                  <div class="carousel-text">
                    <a href="https://bpptik.kominfo.go.id/2021/08/30/9136/bpptik-selenggarakan-tasyakuran-sekaligus-perpisahan-pegawai-yang-memasuki-masa-purna-tugas/" class="carousel-title">
                      <p >
                        BPPTIK Selenggarakan Tasyakuran sekaligus Perpisahan Pegawai yang Memasuki Masa Purna Tugas
                      </p>
                    </a>
                    <p>
                      BPPTIK – Jumat (27/08/2021), Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK) Kementerian Komunikasi dan Informa[...]
                    </p>
                  </div>
                </div>
            </div>
  
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselCardControls"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselCardControls"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
            <!-- / Carousel -->
  
            <!-- Container Berita 2 -->
            <br>
            <div class="yellowline-con w-100">
              
              <div class="row">
                <div class="col">
                  <p class="title">Berita</p>
                </div>
                <div class="col">
                  <a href="https://bpptik.kominfo.go.id/category/berita/" style="text-decoration: none;"><p class="news-link" style="text-align: end; margin: 10px;">view more posts</p></a>
                </div>
              </div>
           
  
              <div class="row" style="margin: 2px;">
                <div class="col-sm-6" style="text-align: start;">
                  <p class="date" style="text-align: start;">15 September 2021</p>
                  <a href="https://bpptik.kominfo.go.id/2021/10/01/9243/penundaan-pelaksanaan-pelatihan-teknis-bidang-tik-bagi-penyuluh-agama-angkatan-iii-dan-pelatihan-gta-data-science-fundamental-angkatan-iii-di-bpptik-tahun-2021/" class="carousel-title">Penundaan Pelaksanaan Pelatihan GTA di BPPTIK Bulan Oktober Tahun 2021</a>
                  <br>
                  <br>
                  <p class="con2-text"> 
                    PENGUMUMAN Nomor : 983/ /BPPTIK.32./UM.01.01/10/2021 PENUNDAAN PELAKSANAAN PELATIHAN TEKNIS BIDANG TIK BAGIPENYULUH AGAMA ANGKATAN[…]
                  </p>
                </div>
                <div class="col-sm-6" style="text-align: start;">
                  <a href="https://bpptik.kominfo.go.id/2021/09/15/9164/pengumuman-tentang-hasil-seleksi-calon-peserta-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-secara-online-tahun-2021-gelombang-ke-8/" class="carousel-title">Pengumuman Tentang Hasil Seleksi Calon Peserta Pelatihan dan Sertifikasi Kompetensi Bidang TIK Berbasis SKKNI Secara Online Tahun 2021 Gelombang Ke-8</a>
                  <br>
                  <br>
                  <p class="con2-text"> 
                    PENGUMUMAN Nomor: 885/BPPTIK.32/UM.01.01/09/2021 TENTANG HASIL SELEKSI CALON PESERTA PELATIHAN DAN SERTIFIKASI KOMPETENSI BIDANG TIK BERBASIS[…]
                  </p>
                </div>
              </div>
  
              <div class="row" style="margin: 2px;">
                <div class="col-md-6 offset-md-6" style="text-align: start;">
                  <a href="https://bpptik.kominfo.go.id/2021/09/07/9156/dibuka-pendaftaran-pelatihan-dan-sertifikasi-kompetensi-bidang-tik-berbasis-skkni-online-tahun-2021-gelombang-ke-8/" class="carousel-title">Dibuka, Pendaftaran Pelatihan dan Sertifikasi Kompetensi Bidang TIK Berbasis SKKNI Online Tahun 2021 Gelombang ke-8</a>
                  <br>
                  <br>
                  <p class="con2-text"> 
                    BPPTIK – BPPTIK Kementerian Komunikasi dan Informatika (Kominfo) membuka Pendaftaran Pelatihan dan Sertifikasi Kompetensi Bidang TIK…]
                  </p>
                </div>
             
              </div>
            </div>
             <!-- /Container Berita 2 -->
  
             <!-- Container Artikel3 -->
            <br>
            <div class="w-100" style="background-color: white; padding: 10px;">
              
              <div class="row">
                <div class="col">
                  <p class="title" style="color: #1c4266;">Artikel</p>
                </div>
                <div class="col">
                  <a href="https://bpptik.kominfo.go.id/category/artikel/" style="text-decoration: none;"> <p class="news-link" style="text-align: end; margin: 10px; color: #d3b452; font-weight: bold;">view more posts</p></a>
                </div>
              </div>
  
              <div class="row" style="margin: 2px;">
                <div class="col-sm-6" style="text-align: start;">
  
                  <a href="https://bpptik.kominfo.go.id/2021/07/23/9088/pola-konsumsi-masyarakat-dalam-mengakses-berita-saat-pandemi/"><img src="assets/news/news7.jpg" alt=""></a>
                  <p class="date" style="text-align: start;">23 Juli 2021</p>
                  <a href="https://bpptik.kominfo.go.id/2021/07/23/9088/pola-konsumsi-masyarakat-dalam-mengakses-berita-saat-pandemi/" class="carousel-title" style="color: #1c4266;">Pola Konsumsi Masyarakat Dalam Mengakses Berita Saat Pandemi</a>
                  <p class="con2-text" style="color: rgb(94, 93, 93);"> 
                    (BPPTIK) Pandemi Covid-19 yang melanda dunia dan khususnya Indonesia telah mengubah cara masyarakat beraktivitas dalam […]
                  </p>
                </div>
                <div class="col-sm-6" style="text-align: start;">
                  <a href="https://bpptik.kominfo.go.id/2021/06/22/8970/mengenal-teknologi-revolusi-industri-4-0-lewat-drama-korea-start-up/" class="carousel-title " style="color: #1c4266;">Mengenal Teknologi Revolusi Industri 4.0 Lewat Drama Korea ‘Start-Up’</a>
                  <p class="con2-text" style="color: rgb(94, 93, 93);"> 
                    BPPTIK– Hai Sobat BPPTIK! Belajar mengenai teknologi tidak hanya dapat kita lakukan melalui buku, mengikuti[…]
                  </p>
                  <hr>
                  <a href="https://bpptik.kominfo.go.id/2021/06/21/8958/apa-itu-doxxing-dan-dampaknya-pada-privasi-online/" class="carousel-title" style="color: #1c4266;">Apa itu Doxxing dan Dampaknya pada Privasi Online</a>
                  <p class="con2-text" style="color: rgb(94, 93, 93);"> 
                    BPPTIK- Hai sobat BPPTIK! Apa kalian pernah mendengar istilah doxxing? Istilah ini mulai diperbincangkan kembali[…]
                  </p>
                </div>
              </div>
             
            </div>
             <!-- /Container Artikel 3 -->
          
          </div>
        </div>
  
  
    
  
        <!-- right container -->
        <div class="right-con p-2 flex-grow bd-highlight">
          <!-- first image con -->
          <div class="base-right-con">
            <a href="https://bpptik.kominfo.go.id/jadwal-2/"
              ><img src="assets/right-con/PelatihanTIK.png" class="imge"
            /></a>
          </div>
  
          <br />
  
          <!-- second image con -->
          <div class="base-right-con">
            <a href="http://202.89.117.140"
              ><img src="assets/right-con/pelatihanSKKNI.png" class="imge"
            /></a>
          </div>
  
          <br />
  
          <!-- newsletter con -->
          <div class="yellowline-con">
            <p class="title">Newsletter</p>
            <br />
            <!-- <p
              style="
                font-size: 12px;
                color: aliceblue;
                margin-left: 10px;
                margin-right: 10px;
              "
            >
              Daftarkan e-mail Anda ke Newsletter BPPTIK untuk mendapatkan update
              dari kami:
            </p> -->

            <form action="" method="POST"> 
              <input class="input" type="email" name="email"/><br><br>
              <div class="g-recaptcha" data-sitekey="6LcNzrIcAAAAAAH15R9kF5xFeEzzhdg0QPphMDZR"></div>
              <input type="submit" name="submit" value="submit">
              
              <!-- <button
              type="button"
              class="btn btn-light btn-sm"
              style="border-radius: 10px; font-size: 12px" >
              Daftar
              </button> -->
            </form>
            <br />
            <p
              style="
                font-size: 12px;
                color: aliceblue;
                text-align: start;
                margin-left: 10px;
                margin-right: 10px;
              "
            >
              Setelah mendaftar Newsletter, jangan lupa segera buka e-mail Anda
              untuk mengaktivasikan Newsletternya. (Catatan: jika e-mail dari kami
              tidak ada di inbox e-mail Anda, mohon periksa pada folder bulk/spam
              e-mail Anda)
            </p>
          </div>
          <br />
  
          <!-- link terkait -->
          <div class="yellowline-con">
            <p class="title">Link Terkait</p>
            <a href="https://lan.go.id"
              ><img
                style="height: 30px; width: 40px"
                src="assets/linkterkait/link1.png"
                alt=""
            /></a>
            <a href="https://kominfo.go.id"
              ><img
                style="height: 50px; width: 60px"
                src="assets/linkterkait/link2.png"
                alt=""
            /></a>
            <a href="https://bnsp.go.id"
              ><img
                style="height: 30px; width: 50px"
                src="assets/linkterkait/link3.png"
                alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /MAIN -->

     <!-- Footer -->
     <footer >
      <div class="footer">
        <div class="row justify-content-center" >
          <div class="col-sm-5">
            <p class="footer-text" style="color: white;">Info Lainnya</p>
            <p class="footer-text"><a href="https://bpptik.kominfo.go.id/hiburan/">Lokasi Hiburan</a></p>
            <p class="footer-text"><a href="https://statistik.kominfo.go.id">Statistik Kominfo</a></p>
          </div>
        
        </div>
        
      </div>
    </footer>
    <!-- /Footer -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
