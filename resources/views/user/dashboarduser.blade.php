<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Karyawan & Absen - Home</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
         body {
            padding-top: 70px;
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>
<body class="bg-[#ffffff]">
    <nav class="bg-white/70 backdrop-blur-lg shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center font-bold py-4">
            <div class="flex items-center ml-[60px]">
                <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px]">
                <div>
                    <h1 class="text-xl text-[#2D3250]">Sekretariat Daerah Sumedang</h1>
                    <h1 class="text-base text-[#000000]">Kab.Sumedang</h1>
                </div>
            </div>

            <div class="flex space-x-5  mr-[65px]">
                <a href="/homelogin" class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z" opacity="0.2"></path><path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"></path></svg>
                    <h1 class="text-md hidden md:block text-[#2D3250]">Home</h1>
                </a>

                <a href="/logout" class="flex space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2D3250" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>
                    <h1 class="text-md hidden md:block text-[#2D3250]">Log out</h1>
                </a>
            </div>
        </div>
    </nav>
    <div class="my-12 mx-[100px]">
        <div class="flex space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#2D3250" viewBox="0 0 256 256">
                <path d="M208,32H64a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V40A8,8,0,0,0,208,32ZM136,144a32,32,0,1,1,32-32A32,32,0,0,1,136,144Z" opacity="0.2"></path>
                <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2A8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
            </svg>
            <h1 class="text-[#2D3250] text-4xl font-bold">Pegawai</h1>
        </div>


        <div class="flex mt-5 space-x-4 flex-col md:flex-row items-center">
            <!-- Search Bar -->
            <div class="relative w-full md:w-80 mb-4 md:mb-0">
                <form action="{{ route('dashboard') }}" method="GET" id="searchForm">
                    <input
                        type="text"
                        name="search"
                        id="search"
                        value="{{ $search ?? '' }}"
                        oninput="searchKaryawan()"
                        class="w-full px-4 py-2 pr-10 text-sm text-gray-700 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#2D3250] focus:border-transparent"
                        placeholder="Search..."
                    />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg 
                            class="w-5 h-5 text-gray-500" 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke="currentColor">
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"
                                />
                        </svg>
                    </div>
                </form>
            </div>

            <script>
                function searchKaryawan() {
                    const searchInput = document.getElementById('search');
                    const form = document.getElementById('searchForm');
                    const searchValue = searchInput.value;
            
                    // Mengirim permintaan GET jika ada input
                    if (searchValue.length > 0) {
                        form.submit(); // Mengirim form secara otomatis
                    } else {
                        // Jika input kosong, reset ke semua data
                        window.location.href = "{{ route('dashboard') }}"; // Kembali ke route dashboard tanpa parameter
                    }
                }
            </script>
         

        <div class="p-3 mt-5 shadow-lg rounded-lg">
            <div class="overflow-y-auto">
                <table class="w-full p-3 bg-white text-center text-graydark">
                    <thead class="bg-gray text-black">
                        <tr>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">No</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Pangkat/Gol.Jabatan</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Unit Kerja</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-sm leading-4 font-medium tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawans as $index => $karyawan)
                            <tr>
                                <td class="px-6 py-4 text-sm">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->nama_lengkap }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->pangkat_golongan }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jabatan }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->unitkerja }}</td>
                                <td class="px-6 py-4 text-sm">{{ $karyawan->jenis_kelamin }}</td>
                                <td class="px-6 py-4 text-sm">

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" style="text-align: center;" class="p-3">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>