<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        $ekskulItems = [
            [
                'title' => 'Pramuka SIT (Sekolah Islam Terpadu)',
                'slug' => 'pramuka-sit',
                'excerpt' => 'Kepanduan berkarakter Islam melatih kemandirian, kepemimpinan, tali temali, dan kecintaan pada alam terbuka.',
                'featured_image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                'content' => '<p>Ekstrakurikuler Pramuka SIT (Satuan Komunitas Pramuka Sekolah Islam Terpadu) di SIT Rabbani Muara Enim merupakan wadah pembinaan karakter, kedisiplinan, kemandirian, dan kepemimpinan berlandaskan nilai-nilai Islam. Melalui kegiatan perkemahan, penjelajahan alam, tali temali, semaphore, dan bakti sosial, para santri dilatih untuk tangguh, siap menolong sesama, dan berjiwa ksatria.</p>',
            ],
            [
                'title' => 'OSIS Rabbani (Organisasi Siswa Intra Sekolah)',
                'slug' => 'osis-rabbani',
                'excerpt' => 'Wadah pembentukan karakter kepemimpinan, manajemen organisasi, dan kreasi kegiatan santri.',
                'featured_image' => '/uploads/prestasi-sit-rabbani.webp',
                'content' => '<p>OSIS Rabbani membina santri dalam tata kelola kepemimpinan, kepanitiaan acara, musyawarah, serta memfasilitasi aspirasi dan kreativitas siswa dalam berbagai event sekolah dan dakwah kepemudaan.</p>',
            ],
            [
                'title' => 'Bola Voli & Olahraga Prestasi',
                'slug' => 'bola-voli-dan-olahraga-prestasi',
                'excerpt' => 'Pembinaan kebugaran jasmani, sportivitas, dan keterampilan teknik olahraga bola voli beregu.',
                'featured_image' => '/uploads/campus-sit-rabbani.webp',
                'content' => '<p>Melatih fisik yang kuat (Qowiyyul Jismi), ketahanan tubuh, kekompakan tim, dan sportivitas melalui latihan teknik passing, smash, block, serta partisipasi dalam turnamen antarpelajar se-Kabupaten Muara Enim.</p>',
            ],
            [
                'title' => 'PMR (Palang Merah Remaja)',
                'slug' => 'pmr-palang-merah-remaja',
                'excerpt' => 'Keterampilan pertolongan pertama, kepedulian kemanusiaan, dan kesehatan lingkungan sekolah.',
                'featured_image' => '/uploads/campus-smait-rabbani.webp',
                'content' => '<p>Mendidik santri agar sigap dalam penanganan medis darurat, pertolongan pertama pada kecelakaan (P3K), donor darah, serta menumbuhkan jiwa kerelawanan dan kepedulian sosial tinggi.</p>',
            ],
            [
                'title' => 'Marawis, Hadroh & Nasyid Islami',
                'slug' => 'marawis-dan-hadroh-islami',
                'excerpt' => 'Seni musik perkusi islami, lantunan sholawat, dan pengasahan bakat seni religi santri.',
                'featured_image' => '/uploads/banner-yayasan-rabbani.webp',
                'content' => '<p>Wadah apresiasi seni budaya Islam yang melatih ketukan rebana hadroh/marawis, olah vokal sholawat, dan pembawaan nasyid untuk mengisi berbagai haflah dan perlombaan seni islami.</p>',
            ],
            [
                'title' => 'Multimedia & Jurnalistik',
                'slug' => 'multimedia-dan-jurnalistik',
                'excerpt' => 'Pelatihan desain grafis, fotografi, sinematografi, liputan berita, dan pengelolaan media digital.',
                'featured_image' => '/uploads/campus-smpit-rabbani.webp',
                'content' => '<p>Membekali santri keterampilan kreatif abad 21 meliputi teknik fotografi, pembuatan video konten dakwah edukatif, editing digital, penulisan berita, dan manajemen publikasi sekolah.</p>',
            ],
            [
                'title' => 'Tapak Suci Putera Muhammadiyah (Bela Diri)',
                'slug' => 'tapak-suci-bela-diri',
                'excerpt' => 'Seni bela diri pencak silat berakhlak mulia untuk kebugaran, pertahanan diri, dan prestasi kejuaraan.',
                'featured_image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                'content' => '<p>Seni bela diri pencak silat Tapak Suci menanamkan keimanan, akhlak terpuji, keberanian, disiplin, dan penguasaan jurus-jurus pencak silat prestasi untuk kejuaraan tingkat daerah hingga nasional.</p>',
            ],
            [
                'title' => 'TPA & Bimbingan Belajar SNBT Gratis',
                'slug' => 'tpa-dan-bimbel-snbt-gratis',
                'excerpt' => 'Pendalaman Al-Qur\'an dan bimbingan intensif persiapan tembus Perguruan Tinggi Negeri (PTN) favorit.',
                'featured_image' => '/uploads/tahfidz-sit-rabbani.webp',
                'content' => '<p>Program unggulan SMA IT Rabbani yang mengombinasikan pemantapan bacaan dan hafalan Al-Qur\'an bersama program Bimbel SNBT Gratis guna mengantarkan 88% lulusan sukses menembus PTN impian.</p>',
            ],
        ];

        foreach ($ekskulItems as $idx => $e) {
            Post::updateOrCreate(
                ['slug' => $e['slug'], 'type' => 'ekskul'],
                array_merge($e, [
                    'type' => 'ekskul',
                    'status' => 'publish',
                    'author_id' => 1,
                    'published_at' => now()->subDays(8 - $idx),
                ])
            );
        }
    }
}
