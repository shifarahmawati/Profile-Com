<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai Setda</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="/swiper-bundle.min.css">
    <link rel="stylesheet" href="/styles.css">

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
<body class="bg-[#ebedf1] mt-[100px]">
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
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="contac">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="my-12 mx-[100px]">
        <div class="flex space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#2D3250" viewBox="0 0 256 256">
                <path d="M208,32H64a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V40A8,8,0,0,0,208,32ZM136,144a32,32,0,1,1,32-32A32,32,0,0,1,136,144Z" opacity="0.2"></path>
                <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2A8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
            </svg>
            <h1 class="text-[#000000] text-4xl font-bold">Pegawai Setda</h1>
        </div>

        <!-- Tabel Data Pegawai -->
        <table class="table table-bordered table-light mt-4">
            <thead class="table-secondary">
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $pegawai->nama_lengkap }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>{{ $pegawai->unitkerja }}</td>
                        <td>{{ $pegawai->jenis_kelamin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $pegawais->links() }} <!-- Pagination links -->
        </div>
    </div>
</body>
</html>
