<!DOCTYPE html>
<html lang="en">
<head>
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

    <!-- Footer Atas -->
<footer class="bg-[#b6b3c5] text-[#2D3250] rounded-tl-md rounded-tr-md py-12 w-full mb-12"> <!-- Tambahkan margin-bottom -->
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold mb-8">Hubungi Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
            <!-- Get In Touch Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold">Get In Touch</h3>
                <p>
                    <i class="ri-map-pin-line text-[#2D3250]"></i> 
                    Jl. Prabu Gajah Agung,<br>
                    Sumedang 45323 - Jawa Barat
                </p>
                <p>
                    <i class="ri-mail-line text-[#2D3250]"></i> 
                    setda@sumedangkab.go.id
                </p>
                <p class="text-xl font-bold">
                    <i class="ri-phone-line text-[#2D3250]"></i> 
                    +62-8112-2202-220
                </p>
                <div class="flex gap-4 mt-4">
                    <a href="https://www.facebook.com/setdasumedangkab/" class="text-[#2D3250] hover:text-[#ffffff]">
                        <i class="ri-facebook-circle-line text-3xl"></i>
                    </a>
                    <a href="https://www.youtube.com" class="text-[#2D3250] hover:text-[#ffffff]">
                        <i class="ri-youtube-line text-3xl"></i>
                    </a>
                    <a href="https://www.instagram.com/setdasumedang/" class="text-[#2D3250] hover:text-[#ffffff]">
                        <i class="ri-instagram-line text-3xl"></i>
                    </a>
                </div>
            </div>
            <!-- Formulir Kontak Section -->
            @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif
            <div>
                <h3 class="text-xl font-bold mb-4">Formulir Kontak</h3>
                <p class="mb-4">Silakan hubungi kami melalui alamat berikut atau dengan mengisi formulir kontak yang tersedia.</p>
                <form action="{{ route('contac.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="first_name" placeholder="First Name" required class="border rounded-lg p-3 w-full">
                        <input type="text" name="last_name" placeholder="Last Name" required class="border rounded-lg p-3 w-full">
                    </div>
                    <input type="email" name="email" placeholder="Email" required class="border rounded-lg p-3 w-full">
                    <textarea name="message" rows="5" placeholder="Your Message" required class="border rounded-lg p-3 w-full"></textarea>
                    <button type="submit" class="bg-[#2D3250] text-white px-5 py-3 rounded-lg hover:bg-[#ffffff] hover:text-[#2D3250] border border-[#2D3250] transition">
                        Submit
                    </button>
                </form>
                
                
            </div>
        </div>
    </div>
</footer>

<!-- Footer Bawah -->
<footer class="bg-[#b6b3c5] text-[#2D3250] rounded-tl-[30px] rounded-tr-[30px] py-8">
    <div class="container mx-auto grid grid-cols-4 gap-8">

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
</footer>
</body>
</html>


