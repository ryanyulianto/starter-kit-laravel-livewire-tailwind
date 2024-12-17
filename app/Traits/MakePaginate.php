<?php
namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;


trait MakePaginate
{

    public function paginateFromArray($perPage, $data)
    {
        // Ubah data ke bentuk object menggunakan json_encode dan json_decode tanpa true, agar tetap menjadi object
        $data = json_decode(json_encode($data)); // Menjadi object, bukan array

        // Ubah ke Collection Laravel untuk memanfaatkan fitur Collection
        $items = collect($data);

        // Ambil halaman saat ini
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Slice data sesuai dengan halaman dan jumlah per halaman
        $slicedData = $items->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Hitung total item
        $total = $items->count();

        // Membuat LengthAwarePaginator
        $paginatedData = new LengthAwarePaginator(
            $slicedData, // Data yang telah di-slice untuk halaman ini
            $total,      // Total jumlah item
            $perPage,    // Jumlah item per halaman
            $currentPage, // Halaman saat ini
            ['path' => LengthAwarePaginator::resolveCurrentPath()] // URL path saat ini
        );

        return $paginatedData;
    }
}