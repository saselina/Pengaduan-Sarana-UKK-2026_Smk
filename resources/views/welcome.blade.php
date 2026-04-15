<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pengaduan Siswa | UKK 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        .hero-gradient { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold">P</div>
                <span class="font-bold text-xl tracking-tight">Pengaduan Siswa</span>
            </div>
            <div class="hidden md:flex items-center gap-8 font-medium text-gray-600">
                <a href="#" class="hover:text-blue-600">Beranda</a>
                <a href="#lapor" class="hover:text-blue-600">Lapor</a>
                <a href="/admin" class="px-5 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">Login Guru</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center pt-20 hero-gradient overflow-hidden">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 leading-tight">
                    Aplikasi <br><span class="text-blue-600">E-Pengaduan</span> Siswa
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                    Platform resmi untuk menyampaikan keluhan dan saran terkait fasilitas sekolah secara cepat dan transparan.
                </p>
                <div class="flex gap-4">
                    <a href="#lapor" class="px-8 py-4 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-1 transition-all">
                        Lapor Sekarang
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR7M0pU56r3NHlpA5KW6K4yytEJ4jT9KjjejY6kvxdBmNbLynENET1TRkwUQRqR" 
                     alt="Hero Image" 
                     class="w-full max-w-[500px] mx-auto drop-shadow-2xl">
            </div>
        </div>
    </section>

    <section id="lapor" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto grid md:grid-cols-5 shadow-2xl rounded-[2.5rem] overflow-hidden border">
                
                <div class="md:col-span-2 bg-blue-600 p-10 text-white flex flex-col justify-center">
                    <h3 class="font-bold text-3xl mb-6">Kenapa Harus Lapor?</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <span class="bg-blue-500 p-1 rounded-full text-[10px]">✔</span>
                            <p class="text-sm">Menjaga kenyamanan belajar di sekolah.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="bg-blue-500 p-1 rounded-full text-[10px]">✔</span>
                            <p class="text-sm">Respon cepat dari admin sekolah.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="bg-blue-500 p-1 rounded-full text-[10px]">✔</span>
                            <p class="text-sm">Identitas aman & rahasia.</p>
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-3 p-10 bg-white">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 text-green-700 border-l-4 border-green-500 rounded-r-xl text-sm font-bold">
                            Berhasil! Laporan Terkirim.
                        </div>
                    @endif

                    <form action="/kirim-aspirasi" method="POST" class="space-y-5">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">NIS (10 Digit)</label>
                                <input type="text" name="nis" maxlength="10" required 
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition-all text-sm" 
                                    placeholder="Input NIS...">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">Nama Kamu</label>
                                <input type="text" name="nama" required 
                                    class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm" 
                                    placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">Kelas</label>
                                <input type="text" name="kelas" required 
                                    class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm" 
                                    placeholder="Kelas (Contoh: XII RPL 1)">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">Kategori</label>
                                <select name="kategori_id" required class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm cursor-pointer">
                                    <option value="" disabled selected>Pilih Kategori...</option>
                                    @foreach(\App\Models\Kategori::all() as $kat)
                                        <option value="{{ $kat->id }}">{{ $kat->ket_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">Lokasi Kejadian</label>
                            <input type="text" name="lokasi" required 
                                class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm" 
                                placeholder="Contoh: Lab Komputer, Kantin, Gedung B">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1 ml-1">Detail Laporan</label>
                            <textarea name="ket" rows="3" required 
                                class="w-full px-5 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none text-sm" 
                                placeholder="Ceritakan masalah selengkap mungkin..."></textarea>
                        </div>

                        <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg transition-all active:scale-[0.98] mt-2">
                            Kirim Laporan Sekarang 🚀
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <footer class="py-12 bg-gray-50 text-center border-t">
        <p class="text-gray-400 text-xs tracking-widest uppercase font-semibold">
            &copy; 2026 UKK Project - SMK Bisa!
        </p>
    </footer>

</body>
</html>