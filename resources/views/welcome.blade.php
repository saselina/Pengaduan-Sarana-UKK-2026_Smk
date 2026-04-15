<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Aspirasi Siswa - UKK 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        /* Efek kaca transparan (Glassmorphism) */
        .glass-card { 
            background: rgba(255, 255, 255, 0.9); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-600 to-indigo-800 min-h-screen px-4 py-12">

    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-16 text-white">
            <h1 class="text-4xl font-bold mb-3 drop-shadow-lg">Halo, Sobat Siswa! 👋</h1>
            <p class="text-blue-100 text-lg">Punya keluhan fasilitas sekolah? Curhatin aja di sini!</p>
        </div>

        <div class="grid md:grid-cols-5 gap-10 items-start">
            
            <div class="md:col-span-2 space-y-6">
                <div class="glass-card p-8 rounded-3xl text-gray-800 shadow-2xl">
                    <h3 class="font-bold text-2xl mb-4 text-blue-600">Kenapa Harus Lapor?</h3>
                    <ul class="space-y-4 text-sm font-medium">
                        <li class="flex items-center gap-3">✔ Menjaga kenyamanan sekolah</li>
                        <li class="flex items-center gap-3">✔ Agar masalah yang ada bisa terselesaikan</li>
                        <li class="flex items-center gap-3">✔ Identitas aman & rahasia</li>
                    </ul>
                </div>
                
                <a href="/admin" class="group block text-center py-4 bg-white/10 hover:bg-white/20 border border-white/50 rounded-2xl transition-all font-semibold italic shadow-lg">
                    <span class="group-hover:mr-3 transition-all">Login Admin (Guru)</span> →
                </a>
            </div>

            <div class="md:col-span-3 glass-card rounded-[2rem] shadow-2xl overflow-hidden">
                <div class="bg-white/80 p-8">
                    
                    {{-- Alert Notifikasi Sukses yang sudah jalan tadi --}}
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-500 text-white rounded-2xl shadow-lg text-center font-bold animate-pulse">
                            {{ session('success') }} 🎉
                        </div>
                    @endif

                    <form action="/kirim-aspirasi" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">NIS Kamu</label>
                            <input type="text" name="nis" maxlength="10" required 
                                   oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                   class="w-full px-5 py-3 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none" 
                                   placeholder="Masukkan 10 digit NIS...">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Pilih Kategori</label>
                            <select name="kategori_id" required class="w-full px-5 py-3 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 outline-none cursor-pointer">
                                @foreach(\App\Models\Kategori::all() as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->ket_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Dimana Kejadiannya?</label>
                            <input type="text" name="lokasi" required 
                                   class="w-full px-5 py-3 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 outline-none" 
                                   placeholder="Contoh: Kamar Mandi Lt. 2 atau Ruang Lab">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Apa Yang Mau Dilaporin?</label>
                            <textarea name="ket" rows="4" required 
                                      class="w-full px-5 py-3 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-500 outline-none" 
                                      placeholder="Jelasin sedetail mungkin ya..."></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 rounded-2xl shadow-xl transform active:scale-95 transition-all duration-200">
                            Kirim Laporan Sekarang! 🚀
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <p class="text-center text-blue-200/50 mt-16 text-sm uppercase tracking-widest font-semibold">
            &copy; 2026 UKK - Vocational Project
        </p>
    </div>

</body>
</html>