<!DOCTYPE html>
<html lang="en">
<head>
     <!-- ============ Bootstrap CDN Carousel =========== -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet">
     <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Karyawan</title>
    @vite('resources/css/app.css')
   
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/swiper-bundle.min.css">


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/styles.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            font-family: 'Raleway', sans-serif;
        }

        .carousel-inner {
            width: 275pt;
            overflow: hidden;
        }

        .carousel-item img{
            width: 275pt;
            height: 275pt;
            object-fit: cover;
        }

        .carousel-item img {
            width: 275pt;
            height: 275pt;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-[#ffffff] mt-[100px]">
    <nav class="bg-white/70 backdrop-blur-lg shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center font-bold py-4">
            <div class="flex items-center ml-[60px]">
                <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px]">
                <div>
                    <h1 class="text-xl text-[#2D3250]">Sekretariat Daerah</h1>
                    <h1 class="text-base text-[#000000]">Kab.Sumedang</h1>
                </div>
            </div>
            <div class="flex items-center mr-[50px]">
                <ul class="flex gap-6 text-[#000000] text-l font-bold">
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="{{ route('home') }}">Home</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="/about">About</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="contac">Contact</a></li>
                    <li>                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="px-[95px]">
        {{-- 1st content --}}
        <div class="flex justify-between">
            <div class="justify-start">
                <h1 class="text-4xl text-[#000000] font-bold">Welcome to Sekretariat Daerah Sumedang</h1>
                <div class="flex mb-[15px]">
                    <h1 class="text-4xl text-[#000000] font-bold pr-3">Tentang Website Ini</h1>
                    <h1 class="text-4xl text-[#2D3250] font-bold"></h1>
                </div>
                <div class="text-[#4A4A4A] text-[16px] mt-8 mb-8 leading-relaxed" style="text-align: justify; max-width: 800px; margin: auto;">
                   <p>Sekretariat Daerah Kabupaten Sumedang merupakan unsur pembantu pimpinan Pemerintah Kabupaten Sumedang yang dipimpin oleh Sekretaris Daerah, serta berada di bawah pimpinan Bupati Sumedang dan bertanggung jawab langsung kepada Bupati Sumedang.
                       Sekretariat Daerah bertugas membantu Bupati dalam melaksanakan tugas penyelenggaraan pemerintahan, administrasi, organisasi dan tata laksana, serta memberikan pelayanan administrasi kepada seluruh Perangkat Daerah Kabupaten Sumedang.
                       Sekretariat Daerah Kabupaten Sumedang dibantu oleh Asisten Pemerintahan Kesejahteraan Rakyat, Asisten Pembangunan dan Perekonomian, Asisten Administrasi, dan Staf Ahli.
                   </p>
                   <p>Situs web ini memberikan gambaran rinci tentang Sekretariat Daerah Sumedang, yang menampilkan halaman web sederhana. Salah satu fungsi inti situs web ini adalah berfungsi sebagai sistem penambahan/data karyawan. Fitur ini memungkinkan admin untuk mencatat karyawan baru, baik dengan masuk langsung melalui situs web.
                       Situs web ini merupakan langkah maju yang signifikan dalam transformasi digital Sekretariat Daerah Sumedang, memanfaatkan teknologi untuk meningkatkan efisiensi administrasi dan manajemen pegawai.
                   </p>
               </div>
               
                <div class="flex mb-[75px] my-[15px]">
                   <!-- Tombol Hubungi Kami dengan mailto -->
                   <a href="mailto:sekda@sumedangkab.go.id"">
                       <button class="bg-[#2D3250] text-white font-bold p-2 rounded-[10px] border-2 border-transparent hover:bg-[#ffffff] hover:text-[#2D3250] transition hover:border-[#2D3250] mr-8">Hubungi Kami</button>
                   </a>
              
                  <!-- SVG Play yang menuju video YouTube -->
                  <a href="https://www.youtube.com/@diskominfosanditikkab.sume6625" target="_blank">
                   <img src="/assets/play.svg" class="w-[50px] h-[50px] mr-2" alt="Play">
               </a>
              
               <div>
                   <h1 class="text-[16px] text-[#000000]">Tonton video</h1>
                   <h1 class="text-[16px] text-[#000000]">Profile Layanan SETDA</h1>
               </div>
               </div>                
            </div>
            <!-- Carousel -->
<div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Carousel Item Pertama (Active) -->
        <div class="carousel-item active">
            <img src="/assets/gedungsetda.jpg" class="carousel-img" alt="Gedung Setda">
        </div>
        
        <!-- Carousel Item Kedua -->
        <div class="carousel-item">
            <img src="/assets/setda2.jpg" class="carousel-img" alt="Setda 2">
        </div>
        
        <!-- Carousel Item Ketiga -->
        <div class="carousel-item">
            <img src="/assets/setda1.jpg" class="carousel-img" alt="Setda 1">
        </div>
        
        <!-- Carousel Item Keempat -->
        <div class="carousel-item">
            <img src="/assets/setda3.jpg" class="carousel-img" alt="Setda 3">
        </div>
    </div>

    <!-- Tombol Previous -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
    </button>
    
    <!-- Tombol Next -->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    </div>   

    <body class="bg-gray-100 text-gray-900">
        <div class="px-[89px] mt-6">
            <!-- Kotak Visi dan Misi dengan custom shadow -->
            <div class="bg-white p-8 rounded-lg shadow-lg custom-shadow mb-20 fade-in" id="visiMisi">
                <div class="text-center mt-[40px]">
                    <!-- Perbaikan di sini: Mengganti tanda yang tidak sesuai (<<) dengan tanda yang benar -->
                    <p class="text-1 text-[#2D3250] font-bold">Visi & Misi Sekretariat Daerah Kab. Sumedang</p>
                </div>
                <section class="mb-6">
                    <h2 class="text-2xl font-semibold text-[#000000]">Visi</h2>
                    <p class="text-[#4A4A4A] mt-4 leading-relaxed">
                        “Terwujudnya sekretariat daerah yang Profesional, transparan dan akuntabel dalam Kerangka reformasi birokrasi guna mewujudkan Sumedang yang sejahtera, nyunda, maju, mandiri dan agamis tahun 2018”
                    </p>
                </section>
                <section>
                    <h2 class="text-2xl font-semibold text-[#000000]">Misi</h2>
                    <ol class="list-decimal ml-6 text-[#4A4A4A] mt-4 leading-relaxed">
                        <li class="mb-2">Mewujudkan penyelenggaraan tata kelola pemerintahan yang efektif, transparan dan akuntabel.</li>
                        <li class="mb-2">Meningkatkan sinergitas dan kualitas perumusan kebijakan fasilitas, koordinasi, dan pengendalian pelaksanaan pembangunan daerah.</li>
                        <li>Mewujudkan dalam penyelenggaraan pemerintahan daerah.</li>
                    </ol>
                </section>
            </div>
            
            <!-- Tim atau Struktur -->
<div class="bg-[#ffffff] py-8">
    <h2 class="text-3xl text-center font-bold text-[#2D3250] mb-6">Struktur Organisasi</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-8">
        <div class="text-center">
            <img src="/assets/pns-1.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 1">
            <h3 class="text-lg font-bold text-[#000000]">Sekretaris Daerah</h3>
            <p class="text-[#4A4A4A]">Hj. Tuti Ruswati,S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-1.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Asisten Perekonomian dan Pembangunan</h3>
            <p class="text-[#4A4A4A]">Hj. Tuti Ruswati,S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-5.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 2">
            <h3 class="text-lg font-bold text-[#000000]">Asisten Pemerintahan dan Kesejahteraan Rakyat</h3>
            <p class="text-[#4A4A4A]">Asep Uus Ruspandi,S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-6.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Asisten Administrasi Umum</h3>
            <p class="text-[#4A4A4A]">Budi Rahman,S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-7.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Staf Ahli Bidang Pembangunan Ekonomi dan Keuangan</h3>
            <p class="text-[#4A4A4A]">Drs.H.Asep Sudrajat</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-8.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Staf Ahli Bidang Kemasyarakatan dan Sumber Daya Manusia</h3>
            <p class="text-[#4A4A4A]">Dikdik Syeh Rizki, S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-5.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Staf Ahli Bidang Pemerintahan,Hukum dan Politik</h3>
            <p class="text-[#4A4A4A]">H.Agus Suherman, S.Sos., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-6.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Tata Pemerintahan </h3>
            <p class="text-[#4A4A4A]">Ili, S.Sos</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-7.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Kesejahteraan Rakyat</h3>
            <p class="text-[#4A4A4A]">H. Saepul Amin, S.Ag., M.M.</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-2.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Hukum</h3>
            <p class="text-[#4A4A4A]">Hj. Lilis Komala, SH.,MH</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-8.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Kerjasama</h3>
            <p class="text-[#4A4A4A]">Dr.Asep Dadang Darmawan, S.Pd.,M.Pd</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-3.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Perekonomian dan Sumber Daya Alam</h3>
            <p class="text-[#4A4A4A]">Mulyani Toybah,SE.,M.E</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-9.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Sub Bagian Pendayagunaan Sumber Daya Alam dan Pertanian</h3>
            <p class="text-[#4A4A4A]">Denny Kuswaya. S.Hut</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-10.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Administrasi Pembangunan</h3>
            <p class="text-[#4A4A4A]">Budi Lesmana, S.Pi., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-4.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Pengadaan Barang/Jasa</h3>
            <p class="text-[#4A4A4A]">Elis Komalasari S.P,.MM</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-1.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Umum</h3>
            <p class="text-[#4A4A4A]">Widiyanti, S.H., M.I.L.</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-2.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Sub Bagian Tata Usaha Pimpinan dan Staf Ahli</h3>
            <p class="text-[#4A4A4A]">Reni Rosniar., SE., M.M</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-3.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Sub Bagian Rumah Tangga</h3>
            <p class="text-[#4A4A4A]">Mira Guniawantini, S.STP</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-4.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Organisasi</h3>
            <p class="text-[#4A4A4A]">Dra.Fitriyani, M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-10.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Protokol dan Komunikasi Pimpinan</h3>
            <p class="text-[#4A4A4A]">M.Yusup Sahrulloh, S.STP., M.Si</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-5.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Sub Bagian Protokol</h3>
            <p class="text-[#4A4A4A]">Yadi Budianto, S.STP</p>
        </div>
        <div class="text-center">
            <img src="/assets/pns-2.png" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Person 3">
            <h3 class="text-lg font-bold text-[#000000]">Kepala Bagian Perencanaan dan Keuangan</h3>
            <p class="text-[#4A4A4A]">Hj. Idah Khoeriyah, S.Sos., M.Si</p>
        </div>
    </div>
</div>



     <div class="text-center mt-[40px]">
        <p class="text-1 text-[#2D3250] font-bold">Apa Yang Kami Sajikan</p>
        <p class="text-[40px] font-bold text-[#000000]">Layanan Informasi</p>
        <p class="text-[#4A4A4A]">
            Demi Kepuasan dan Kesejahteraan Masyarakat, Kami Hadir untuk Membantu Permasalahan Anda.
        </p>
        <p class="text-[#4A4A4A]">
            Kami membangun sistem yang mendukung efisiensi administrasi di Sekretariat Daerah Sumedang, termasuk pengelolaan data karyawan.
        </p>
    </div>
    
    <div class="w-full flex justify-center">
        <div class="bg-[#656785] w-[1200px] h-auto text-white flex justify-between items-start my-[60px] rounded-tl-[30px] rounded-tr-[30px] p-[20px]">
            <!-- Pelayanan LPSE -->
            <div class="group relative flex flex-col items-center text-center w-[250px] h-auto p-[10px]">
                <a href="https://lpse.sumedangkab.go.id/eproc4/publik/tentangkami" 
                   class="w-full flex flex-col items-center justify-center bg-transparent rounded-tl-[30px] rounded-tr-[30px] transition-all duration-300 hover:bg-[#2D3250]">
                    <img src="/assets/lps.jpg" alt="Pelayanan LPSE" class="w-[70px] h-[70px] object-contain">
                    <h1 class="text-[18px] font-bold mt-2">Layanan LPSE</h1>
                </a>
                <p class="text-[14px] mt-3 px-4 leading-relaxed">
                    Layanan Pengadaan Secara Elektronik (LPSE) Kabupaten Sumedang adalah unit kerja yang melayani proses pengadaan barang dan jasa secara elektronik.
                </p>
            </div>
    
            <!-- Pelayanan SIKP -->
            <div class="group relative flex flex-col items-center text-center w-[250px] h-auto p-[10px]">
                <a href="https://sikp.kemenkeu.go.id/login" 
                   class="w-full flex flex-col items-center justify-center bg-transparent rounded-tl-[30px] rounded-tr-[30px] transition-all duration-300 hover:bg-[#2D3250]">
                    <img src="/assets/sikp.png" alt="Pelayanan SIKP" class="w-[70px] h-[70px] object-contain">
                    <h1 class="text-[18px] font-bold mt-2">Layanan SIKP</h1>
                </a>
                <p class="text-[14px] mt-3 px-4 leading-relaxed">
                    Sistem Informasi Kredit Program (SIKP) merupakan suatu sistem aplikasi yang dibangun untuk mempermudah pelaksanaan Kredit Program khususnya Kredit Usaha Rakyat (KUR).
                </p>
            </div>
    
            <!-- Pelayanan Informasi -->
            <div class="group relative flex flex-col items-center text-center w-[250px] h-auto p-[10px]">
                <a href="https://sumedangkab.go.id/login" 
                   class="w-full flex flex-col items-center justify-center bg-transparent rounded-tl-[30px] rounded-tr-[30px] transition-all duration-300 hover:bg-[#2D3250]">
                    <img src="/assets/skm.png" alt="Pelayanan Informasi" class="w-[70px] h-[70px] object-contain">
                    <h1 class="text-[18px] font-bold mt-2">Layanan SKM</h1>
                </a>
                <p class="text-[14px] mt-3 px-4 leading-relaxed">
                    Survey Kepuasan Masyarakat (SKM) merupakan informasi tentang tingkat kepuasan masyarakat.
                </p>
            </div>
    
            <!-- Pelayanan Pemkab Sumedang -->
            <div class="group relative flex flex-col items-center text-center w-[250px] h-auto p-[10px]">
                <a href="https://e-office.sumedangkab.go.id/" 
                   class="w-full flex flex-col items-center justify-center bg-transparent rounded-tl-[30px] rounded-tr-[30px] transition-all duration-300 hover:bg-[#2D3250]">
                    <img src="/assets/eoffice.jpg" alt="Pelayanan Pemkab Sumedang" class="w-[70px] h-[70px] object-contain">
                    <h1 class="text-[18px] font-bold mt-2">Layanan E-Office</h1>
                </a>
                <p class="text-[14px] mt-3 px-4 leading-relaxed">
                    E-Office adalah aplikasi mobile yang diperuntukan untuk ASN/PNS di lingkup Pemerintahan Kabupaten Sumedang.
                </p>
            </div>
        </div>
    </div>
    
     
     <!--=============== SWIPER JS ===============-->
     <script src="/swiper-bundle.min.js"></script>

     <!--=============== MAIN JS ===============-->
     <script src="/main.js"></script>  
    </div>  
    {{-- 4th content --}}
  <div class="text-center mt-[60px]">
    <div class="flex justify-center">
        <p class="text-[40px] font-bold text-[#2D3250] mr-2">Mitra</p>
        <p class="text-[40px] font-bold text-[#000000]">Kerja</p>
    </div>
    <p class="text-[#4A4A4A]">Kami bekerja sama dengan berbagai pihak untuk mendukung pelayanan publik di Kabupaten Sumedang.</p>
</div>        
<div class="flex justify-center gap-6 mt-8 mb-[110px]">
    <img src="/assets/baznas.png" class="h-[50px] mr-[15px]">
    <img src="/assets/bpjs kesehatan.png" class="h-[50px] mr-[15px]">
    <img src="/assets/bpjs ketenagakerjaan.png" class="h-[50px] mr-[15px]">
    <img src="/assets/taspen.png" class="h-[50px] mr-[15px]">
        </div>
          {{-- 5th content --}}
          <footer class="bg-[#b6b3c5] text-[#2D3250] rounded-tl-[30px] rounded-tr-[30px] py-8">
            <div class="container mx-auto grid grid-cols-4 gap-4">
       
                <!-- Kolom Pertama -->
                <div class="flex items-start ml-[60px]">
                    <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px] rounded-lg" alt="Logo PT Hexagon">
                    <div>
                        <h1 class="text-xl font-bold">Sekretariat Daerah</h1>
                        <h1 class="text-base font-semibold">Kab.Sumedang</h1>
                        <p class="text-sm mt-3 font-semibold">Didirikan dengan nama sekretariat daerah kabupaten sumedang.
                            Tugas utama Sekretariat Daerah Kabupaten Sumedang adalah membantu Bupati dalam penyusunan kebijakan,
                            pengoordinasian administratif, dan pelayanan administratif.
                        </p>
                    </div>
                </div>
       
                <!-- Kolom Kedua -->
                <div class="ml-[90px]">
                    <p class="text-lg font-bold mb-4">Layanan</p>
                    <a href="/tentang-kami" class="text-md font-semibold mb-4 block">Tentang Kami</a>
                    <a href="/karir" class="text-md font-semibold mb-4 block">Karir</a>
                    <a href="/hubungi-kami" class="text-md font-semibold mb-4 block">Hubungi Kami</a>
                    <a href="https://lpse.sumedangkab.go.id/eproc4/publik/tentangkami" class="text-md font-semibold mb-4 block">Layanan LPSE</a>
                    <a href="https://sikp.kemenkeu.go.id/" class="text-md font-semibold mb-4 block">Layanan SIKP</a>
                    <a href="https://sumedangkab.go.id/login" class="text-md font-semibold mb-4 block">Layanan Darurat</a>
                    <a href="https://e-office.sumedangkab.go.id/" class="text-md font-semibold mb-4 block">Layanan E-Office</a>
                </div>
       
                <!-- Kolom Ketiga -->
                <div>
                    <p class="text-lg font-bold mb-4">Privasi & Kebijakan</p>
                    <a href="/syarat-ketentuan" class="text-md font-semibold mb-4 block">Syarat & Ketentuan</a>
                    <a href="/blog" class="text-md font-semibold mb-4 block">Blog</a>
                    <a href="/bantuan" class="text-md font-semibold mb-4 block">Bantuan</a>
                    <a href="/" class="text-md font-semibold mb-4 block">Telp +6281122202220 </a>
</div>
       
                <!-- Kolom Keempat (Follow Us) -->
                <div>
                    <p class="text-lg font-bold mb-4 ml-[30px]">Follow Us</p>
                    <div class="flex p-3">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/setdasumedang/" target="_blank">
                            <img src="/assets/instagram.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Instagram">
                        </a>
                        
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/setdasumedangkab/" target="_blank">
                            <img src="/assets/facebook.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Facebook">
                        </a>
                        
                        <!-- YouTube -->
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="/assets/youtube.svg" class="h-[30px] w-[30px] mr-[15px]" alt="YouTube">
                        </a>
                        
                        <!-- Gmail -->
                        <a href="setda@sumedangkab.go.id" target="_blank">
                            <img src="/assets/gmail.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Gmail">
                        </a>
                        
                        <!-- WhatsApp -->
                        <a href="https://wa.me/081122202220" target="_blank">
                            <img src="/assets/whatsapp.svg" class="h-[30px] w-[30px] mr-[15px]" alt="WhatsApp">
                        </a>
                        <!-- Location -->
                        <a href="https://g.co/kgs/uqA1iU1" target="_blank">
                            <img src="/assets/location-1.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Location">
                        </a>
                    </div>  
                </div>
            </div>
        </footer>        
    </div>
</body>
</html>


