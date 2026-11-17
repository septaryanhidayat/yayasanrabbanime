<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DownloadSeeder extends Seeder
{
    public function run(): void
    {
        $downloads = [
            [
                'title' => 'Logo Resmi Yayasan Generasi Rabbani Muara Enim (Vector PNG Transparan)',
                'file_path' => '/uploads/logo-rabbani.png',
                'file_type' => 'PNG',
                'category_type' => 'Aset Visual',
                'download_count' => 640,
            ],
            [
                'title' => 'Flyer & Brosur SPMB SMA IT Rabbani Muara Enim TP 2025/2026',
                'file_path' => '/uploads/flyer-spmb-smait-rabbani.webp',
                'file_type' => 'WEBP',
                'category_type' => 'Brosur',
                'download_count' => 890,
            ],
            [
                'title' => 'Brosur SPMB SIT Rabbani Muara Enim (TK, SD, SMP, SMA)',
                'file_path' => '/uploads/flyer-spmb-sit-rabbani.webp',
                'file_type' => 'WEBP',
                'category_type' => 'Brosur',
                'download_count' => 720,
            ],
            [
                'title' => 'Panduan Kurikulum Tahfidz Al-Qur\'an SIT Rabbani Muara Enim',
                'file_path' => '/uploads/downloads/panduan-mutqin-tahfidz-rabbani.pdf',
                'file_type' => 'PDF',
                'category_type' => 'E-Book',
                'download_count' => 540,
            ],
            [
                'title' => 'Buku Saku Adab & Karakter Siswa Berstandar JSIT Indonesia',
                'file_path' => '/uploads/downloads/buku-saku-adab-karakter-siswa.pdf',
                'file_type' => 'PDF',
                'category_type' => 'E-Book',
                'download_count' => 460,
            ],
            [
                'title' => 'Modul Praktikum Laboratorium Sains & Komputer Siswa Rabbani',
                'file_path' => '/uploads/downloads/petunjuk-praktikum-sains-terpadu.pdf',
                'file_type' => 'PDF',
                'category_type' => 'E-Book',
                'download_count' => 380,
            ],
        ];

        DB::table('downloads')->truncate();

        foreach ($downloads as $dl) {
            DB::table('downloads')->insert([
                'title' => $dl['title'],
                'file_path' => $dl['file_path'],
                'file_type' => $dl['file_type'],
                'category_type' => $dl['category_type'],
                'download_count' => $dl['download_count'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
