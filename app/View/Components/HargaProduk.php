<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HargaProduk extends Component
{
    // Menerima data nilai dan diskon saat komponen dipanggil
    public function __construct(public int $nilai, public bool $diskon = false) {}

    // Logika untuk memformat angka jadi Rupiah (jika diskon true, dikali 0.9)
    public function format(): string
    {
        $hargaAkhir = $this->diskon ? $this->nilai * 0.9 : $this->nilai;
        return 'Rp ' . number_format($hargaAkhir, 0, ',', '.');
    }

    public function render()
    {
        return view('components.harga-produk');
    }
}
