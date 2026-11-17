<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $defaultSlides = [
            [
                'active' => true,
                'badge' => 'SIT Unggulan Kabupaten Muara Enim • Terakreditasi',
                'title' => 'Selamat Datang di Website Resmi',
                'subtitle' => 'Yayasan Generasi Rabbani Muara Enim',
                'image' => '/uploads/banner-yayasan-rabbani.webp',
                'btn_text' => 'Sambutan Pimpinan',
                'btn_link' => '/sambutan-kepala-sekolah',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Info SPMB',
                'btn2_link' => '/ppdb',
                'btn2_target' => '_self',
            ],
            [
                'active' => true,
                'badge' => 'Pendidikan Islam Terpadu Berjenjang (TKIT - SDIT - SMPIT - SMAIT)',
                'title' => 'Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia',
                'subtitle' => 'Sekolah Islam Terpadu berakreditasi di Muara Enim dengan Kurikulum Terpadu & Tahfidz Al-Qur\'an.',
                'image' => '/uploads/campus-sit-rabbani.webp',
                'btn_text' => 'Profil Singkat Sekolah',
                'btn_link' => '/tentang-kami',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Info SPMB',
                'btn2_link' => '/ppdb',
                'btn2_target' => '_self',
            ],
            [
                'active' => true,
                'badge' => 'SMA IT Rabbani Boarding School • Terakreditasi B',
                'title' => 'Penerimaan Peserta Didik Baru (PPDB)',
                'subtitle' => 'Membentuk generasi pemimpin berkarakter Qur\'ani, hafizh Al-Qur\'an, dan sukses perguruan tinggi.',
                'image' => '/uploads/flyer-spmb-smait-rabbani.webp',
                'btn_text' => 'Daftar SPMB Online',
                'btn_link' => '/ppdb',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Info SPMB',
                'btn2_link' => '/ppdb',
                'btn2_target' => '_self',
            ],
        ];

        DB::table('settings')->updateOrInsert(
            ['key' => 'hero_slides'],
            [
                'value' => json_encode($defaultSlides, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                'group' => 'hero',
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('settings')->where('key', 'hero_slides')->delete();
    }
};
