<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Sarana Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-blue-600">Layanan Pengaduan Siswa</h1>
        
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">{{ session('success') }}</div>
        @endif

        <form action="/kirim-aspirasi" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">NIS</label>
                <input type="number" name="nis" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Kategori</label>
                <select name="kategori_id" class="w-full border rounded p-2">
                    @foreach(\App\Models\Kategori::all() as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->ket_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Lokasi Kejadian</label>
                <input type="text" name="lokasi" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Isi Laporan</label>
                <textarea name="ket" class="w-full border rounded p-2" rows="4" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded hover:bg-blue-700">
                Kirim Laporan
            </button>
        </form>
    </div>
</body>
</html>