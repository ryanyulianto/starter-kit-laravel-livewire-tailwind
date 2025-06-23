<?php

namespace App\Livewire\Admin\Table;

use Livewire\Component;
use App\Traits\ToObject;
use App\Traits\MakePaginate;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Table')]
class TableIndex extends Component
{
    use ToObject, MakePaginate, WithPagination;
    public function render()
    {
        return view('livewire.admin.table.table-index');
    }
    public function getDatasProperty()
    {
        return $this->paginateFromArray(15, $this->toObject($this->generateFakeKaryawan()));
    }
    private function generateFakeKaryawan()
    {
        $employees = [];
        $jabatans = [
            'Manager',
            'Staff',
            'Supervisor',
            'Kepala Divisi',
            'Wakil Direktur',
            'Admin',
            'Koordinator',
            'Konsultan',
            'Analis',
            'Koordinator Lapangan',
            'Sekretaris',
            'Manajer Keuangan',
            'Manajer SDM',
            'Koordinator Proyek',
            'Spesialis IT',
            'Manajer Operasional',
            'Koordinator Marketing',
            'Pengawas Produksi',
            'Ahli Strategi',
            'Kepala Cabang'
        ];

        $divisis = [
            'Keuangan',
            'Sumber Daya Manusia',
            'Operasional',
            'Marketing',
            'Produksi',
            'IT',
            'Penelitian dan Pengembangan',
            'Logistik',
            'Pelayanan Pelanggan',
            'Pengembangan Bisnis',
            'Administrasi',
            'Hukum',
            'Keamanan',
            'Pemeliharaan',
            'Pengadaan',
            'Pelatihan',
            'Hubungan Pelanggan',
            'Riset Pasar',
            'Manajemen Proyek',
            'Inovasi'
        ];

        $educations = [
            'SMA',
            'D3',
            'S1',
            'S2',
            'S3',
            'Sarjana',
            'Magister',
            'Doktor'
        ];

        $status_pernikahans = [
            'Belum Menikah',
            'Menikah',
            'Cerai Hidup',
            'Cerai Mati'
        ];

        $jenkel = ['Laki-laki', 'Perempuan'];

        for ($i = 0; $i < 100; $i++) {
            $gender = $jenkel[array_rand($jenkel)];
            $firstName = $this->generateRandomName($gender);

            $employees[] = [
                'name' => $firstName,
                'email' => strtolower(str_replace(' ', '.', $firstName)) . '@perusahaan.com',
                'jabatan' => $jabatans[array_rand($jabatans)],
                'divisi' => $divisis[array_rand($divisis)],
                'no_telpn' => $this->generateRandomPhoneNumber(),
                'no_ktp' => $this->generateRandomKTP(),
                'tempat_lahir' => $this->generateRandomCity(),
                'tanggal_lahir' => $this->generateRandomBirthdate(),
                'jenis_kelamin' => $gender,
                'alamat' => $this->generateRandomAddress(),
                'pendidikan_terakhir' => $educations[array_rand($educations)],
                'status_pernikahan' => $status_pernikahans[array_rand($status_pernikahans)],
                'tahun_masuk' => rand(2010, 2024),
                'gaji' => rand(3_000_000, 50_000_000),
                'status_karyawan' => ['Tetap', 'Kontrak', 'Magang'][array_rand(['Tetap', 'Kontrak', 'Magang'])],
                'no_rekening' => $this->generateRandomBankAccount(),
                'bank' => ['BCA', 'Mandiri', 'BRI', 'BNI', 'Danamon'][array_rand(['BCA', 'Mandiri', 'BRI', 'BNI', 'Danamon'])]
            ];
        }

        return $employees;
    }

    private function generateRandomName($gender = null)
    {
        $maleFirstNames = [
            'Ahmad',
            'Budi',
            'Chandra',
            'Dedi',
            'Eko',
            'Fajar',
            'Gunawan',
            'Hadi',
            'Indra',
            'Joko',
            'Kurniawan',
            'Lukman',
            'Muhammad',
            'Nurdin',
            'Oki',
            'Putra',
            'Rama',
            'Satria',
            'Taufik',
            'Wawan'
        ];

        $femaleFirstNames = [
            'Aisyah',
            'Bella',
            'Citra',
            'Dewi',
            'Eka',
            'Fitri',
            'Gita',
            'Hana',
            'Indah',
            'Julia',
            'Kartika',
            'Lestari',
            'Maya',
            'Nadia',
            'Oktavia',
            'Putri',
            'Ratna',
            'Sari',
            'Tuti',
            'Wulan'
        ];

        $lastNames = [
            'Santoso',
            'Wijaya',
            'Pratama',
            'Kusuma',
            'Nugroho',
            'Setiawan',
            'Handayani',
            'Susanto',
            'Prabowo',
            'Wibowo',
            'Yulianto',
            'Kurniawan',
            'Rahmawati',
            'Oktavia',
            'Saputra',
            'Maulana',
            'Permana',
            'Hidayat',
            'Wahyudi',
            'Suryono'
        ];

        if ($gender === 'Laki-laki') {
            $firstName = $maleFirstNames[array_rand($maleFirstNames)];
        } elseif ($gender === 'Perempuan') {
            $firstName = $femaleFirstNames[array_rand($femaleFirstNames)];
        } else {
            $firstName = rand(0, 1) ?
                $maleFirstNames[array_rand($maleFirstNames)] :
                $femaleFirstNames[array_rand($femaleFirstNames)];
        }

        return $firstName . ' ' . $lastNames[array_rand($lastNames)];
    }

    private function generateRandomPhoneNumber()
    {
        return '08' . str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
    }

    private function generateRandomKTP()
    {
        return str_pad(rand(0, 9999999999), 16, '0', STR_PAD_LEFT);
    }

    private function generateRandomCity()
    {
        $cities = [
            'Jakarta',
            'Surabaya',
            'Bandung',
            'Medan',
            'Semarang',
            'Makassar',
            'Palembang',
            'Yogyakarta',
            'Depok',
            'Tangerang',
            'Bekasi',
            'Malang',
            'Padang',
            'Banjarmasin',
            'Bogor',
            'Pekanbaru',
            'Batam',
            'Denpasar'
        ];
        return $cities[array_rand($cities)];
    }

    private function generateRandomBirthdate()
    {
        $start = strtotime("-50 years");
        $end = strtotime("-20 years");
        return date('Y-m-d', rand($start, $end));
    }

    private function generateRandomAddress()
    {
        $streets = [
            'Jalan Merdeka',
            'Jalan Sudirman',
            'Jalan Gatot Subroto',
            'Jalan Ahmad Yani',
            'Jalan Diponegoro',
            'Jalan Kartini',
            'Jalan Imam Bonjol',
            'Jalan Hayam Wuruk'
        ];

        return $streets[array_rand($streets)] . ' No. ' . rand(1, 200) .
            ', ' . $this->generateRandomCity() .
            ' ' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
    }

    private function generateRandomBankAccount()
    {
        return str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
    }
}
