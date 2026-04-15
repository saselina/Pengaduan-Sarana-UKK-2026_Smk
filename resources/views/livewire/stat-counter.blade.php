<div wire:poll.5s class="flex flex-wrap justify-center gap-10 py-12 bg-white">
    <div class="text-center">
        <div class="flex justify-center mb-2">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-800">{{ $totalLaporan }}</h3>
        <p class="text-gray-500 font-medium">Laporan Publik</p>
    </div>

    <div class="text-center">
        <div class="flex justify-center mb-2">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-800">{{ $totalUsers }}</h3>
        <p class="text-gray-500 font-medium">Total Users</p>
    </div>

    <div class="text-center">
        <div class="flex justify-center mb-2">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-800">{{ $laporanSelesai }}</h3>
        <p class="text-gray-500 font-medium">Laporan Selesai</p>
    </div>
</div>