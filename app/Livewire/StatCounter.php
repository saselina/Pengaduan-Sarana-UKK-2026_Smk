<?php

namespace App\Livewire; 
use Livewire\Component;
use App\Models\Aspirasi; 
use App\Models\User;

class StatCounter extends Component
{
    public function render()
    {
        return view('livewire.stat-counter', [
            'totalLaporan' => \App\Models\Aspirasi::count(), 
            'totalUsers' => \App\Models\User::count(),
            'laporanSelesai' => \App\Models\Aspirasi::where('status', 'selesai')->count(),
        ]);
    }
}