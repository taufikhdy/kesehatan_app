<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class csvImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filepath = storage_path('app/csv/tb_kelas.csv');

        if (!file_exists($filepath)) {
            $this->command->error("file .csv tidak ditemukan di path");
            return;
        }

        $handle = fopen($filepath, 'r');
        if ($handle === false) {
            $this->command->error("gagal membuka file .csv dari path");
            return;
        }

        // lewati baris pertama as header csv
        fgetcsv($handle);

        // membaca setiap baris csv dan menyimpan ke db

        while(($row = fgetcsv($handle, 1000, ";")) !== false) {
            // inputkan ke db
            Kelas::create([
                'kelas' => $row[0],
                'wali_kelas' => $row[1],
                'keterangan' => $row[2]
            ]);
        }

        fclose($handle);

        $this->command->info('Data berhasil diimpor!');
    }
}
