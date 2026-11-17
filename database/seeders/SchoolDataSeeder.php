<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\AnggotaDewan;
use App\Models\Bidang;
use App\Models\Category;
use App\Models\Dpc;
use App\Models\Pengumuman;
use App\Models\Post;
use App\Models\PpdbTrack;
use App\Models\QuickMenu;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolDataSeeder extends Seeder
{
    public function run(): void
    {
        $dataFile = __DIR__.'/data/rabbani_data.json';
        $data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

        // 1. Settings Yayasan Generasi Rabbani Muara Enim & SIT Rabbani
        $settings = [
            'site_name' => 'Yayasan Generasi Rabbani Muara Enim',
            'site_tagline' => 'Membina Generasi Qur\'ani, Mandiri, Berakhlak Mulia & Berprestasi Global',
            'site_description' => 'Official Website Yayasan Generasi Rabbani Muara Enim & Sekolah Islam Terpadu (SIT) Rabbani: TKS IT, SDS IT, SMPS IT, dan SMA IT Boarding School di Muara Enim, Sumatera Selatan.',
            'contact_email' => 'yayasangerabbani@gmail.com',
            'contact_phone' => '0851-5929-3554',
            'contact_whatsapp' => '0851-5929-3554',
            'contact_phone_alt' => '0851-5929-3554',
            'contact_address' => 'Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kecamatan Muara Enim, Kabupaten Muara Enim, Sumatera Selatan 31311',
            'social_facebook' => 'https://web.facebook.com/YayasanGenerasiRabbaniMuaraEnim',
            'social_instagram' => 'https://www.instagram.com/smaitrabbanime/',
            'social_youtube' => 'https://www.youtube.com/@rabbanimuaraenim',
            'social_tiktok' => 'https://www.tiktok.com/@rabbanime',
            'google_maps_url' => 'https://maps.google.com/?q=Rabbani+Muara+Enim',
            'banner_daftar_url' => '/spmb',
            'banner_donasi_url' => '/donasi',
            'site_logo' => '/uploads/logo-rabbani.png',
            'site_logo_square' => '/uploads/logo-rabbani-square.webp',
            'og_title' => 'Yayasan Generasi Rabbani Muara Enim',
            'og_description' => 'Official Website Yayasan Generasi Rabbani Muara Enim & SIT Rabbani: TKS IT, SDS IT, SMPS IT, & SMA IT Rabbani. Informasi SPMB, Tahfidz, Prestasi, dan Profil Kampus.',
            'og_image' => '/uploads/banner-yayasan-rabbani.webp',
            'meta_keywords' => 'yayasan generasi rabbani muara enim, sit rabbani muara enim, tk it rabbani, sd it rabbani, smp it rabbani, sma it rabbani, boarding school muara enim, tahfidz muara enim, jsit muara enim',
            'npsn' => '70010515',
            'akreditasi' => 'B (Terakreditasi BAN-SM)',
            'no_sk_akreditasi' => 'BAN-SM/ME/2023',
            'sk_pendirian' => 'Yayasan Generasi Rabbani',
            'sk_izin' => 'Dinas Pendidikan & Kebudayaan Kab. Muara Enim',
            'kepala_sekolah' => 'Drs. H. Basuki Wiwoho',
            'spmb_promo_title' => 'SPMB TP 2025/2026 Gelombang 1',
            'spmb_promo_cashback' => 'Diskon Khusus Gelombang 1',
            'spmb_promo_quota' => 'Boarding & Full Day School',
            'spmb_promo_note' => '*Free Uang Pembangunan, Free Uang Kegiatan, Free Buku untuk 20 Orang Pertama',
            'spmb_banner_badge' => 'PENERIMAAN PESERTA DIDIK BARU SIT RABBANI MUARA ENIM',
            'spmb_banner_title' => 'SPMB TP 2025/2026 TKS IT, SDS IT, SMPS IT & SMA IT RABBANI',
            'spmb_banner_year' => '2025/2026',
            'spmb_banner_description' => 'Bergabunglah bersama keluarga besar SIT Rabbani Muara Enim. Memadukan kurikulum terpadu nasional dengan pembiasaan adab Qur\'ani, target tahfidz mutqin, serta bimbingan SNBT PTN Gratis.',
            'spmb_banner_card1_title' => 'SPP BULANAN',
            'spmb_banner_card1_desc' => 'Hanya Rp 200.000',
            'spmb_banner_card2_title' => 'REGISTRASI ULANG',
            'spmb_banner_card2_desc' => 'Rp 1.000.000 (Include Seragam)',
            'spmb_banner_card3_title' => 'BENEFIT KHUSUS',
            'spmb_banner_card3_desc' => 'Free Pembangunan & Kegiatan',
            'spmb_banner_flyer_image' => '/uploads/flyer-spmb-smait-rabbani.webp',
            'spmb_banner_flyer_label' => 'Brosur Resmi SPMB SMA IT Rabbani',
            'spmb_banner_btn_text' => 'Daftar SPMB Online',
            'spmb_banner_btn_url' => '/ppdb',
            'spmb_banner_contact_text' => 'Hotline SPMB: 0851-5929-3554',
            'spmb_banner_contact_phone' => '0851-5929-3554',
            'ppdb_image_1' => '/uploads/campus-sit-rabbani.webp',
            'ppdb_image_2' => '/uploads/tahfidz-sit-rabbani.webp',
            'ppdb_image_3' => '/uploads/kegiatan-pramuka-rabbani.webp',
            'donation_bank_1_name' => 'Bank Syariah Indonesia (BSI)',
            'donation_bank_1_code' => '451',
            'donation_bank_1_rekening' => '718-293-8401',
            'donation_bank_1_holder' => 'YAYASAN GENERASI RABBANI MUARA ENIM',
            'donation_bank_2_name' => 'Bank Sumsel Babel Syariah',
            'donation_bank_2_code' => '120',
            'donation_bank_2_rekening' => '801-09-00123',
            'donation_bank_2_holder' => 'SIT RABBANI MUARA ENIM',
            'donation_confirm_phone' => '0851-5929-3554',
            'donation_confirm_text' => "Assalamu'alaikum Bendahara Yayasan Generasi Rabbani, saya telah menyalurkan infaq pembangunan.",
            'donation_intro_text' => 'Salurkan infaq pembangunan sarana pendidikan, beasiswa tahfidz Al-Qur\'an, dan pengembangan kampus SIT Rabbani Muara Enim.',
            'hero_slides_yayasan' => json_encode([
                [
                    'active' => true,
                    'badge' => 'YAYASAN GENERASI RABBANI MUARA ENIM • SUMATERA SELATAN',
                    'title' => 'Mewujudkan Generasi Robbani yang Cerdas, Mandiri & Berakhlak Mulia',
                    'subtitle' => "Pendidikan Islam Terpadu Satu Atap Berbasis Al-Qur'an, As-Sunnah, Sains, dan Teknologi Modern (TK, SD, SMP, SMA).",
                    'image' => '/uploads/hero-slide-yayasan-1.webp',
                    'btn_text' => 'Pilih Unit Sekolah',
                    'btn_link' => '#unit-sekolah',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Daftar SPMB Online',
                    'btn2_link' => '/ppdb',
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => "TAHFIDZ QUR'AN MUTQIN & ADAB NABAWI",
                    'title' => "Pembinaan Karakter & Hafalan Al-Qur'an Berkesinambungan",
                    'subtitle' => 'Mulai dari tahfidz usia dini TKS IT, target juz mutqin di SDS IT, SMPS IT, hingga program Boarding School di SMA IT Rabbani.',
                    'image' => '/uploads/hero-slide-yayasan-2.webp',
                    'btn_text' => 'Profil Singkat Yayasan',
                    'btn_link' => '/yayasan/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Struktur Yayasan',
                    'btn2_link' => '/yayasan/struktur',
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'SUKSES TEMBUS PTN & BERDAYA SAING GLOBAL',
                    'title' => '88% Lulusan SMA IT Rabbani Hafal Qur\'an & Masuk PTN Favorit',
                    'subtitle' => 'Didukung program Bimbingan SNBT Gratis, Laboratorium Komputer Modern, Bahasa Asing, dan 8 Ekstrakurikuler Pilihan.',
                    'image' => '/uploads/hero-slide-yayasan-3.webp',
                    'btn_text' => 'Kunjungi SMA IT Rabbani',
                    'btn_link' => '/sma',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Kunjungi SMPS IT Rabbani',
                    'btn2_link' => '/smp',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides' => json_encode([
                [
                    'active' => true,
                    'badge' => 'SMPS IT RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Selamat Datang di Website Resmi',
                    'subtitle' => 'SMPS IT Rabbani Muara Enim',
                    'image' => '/uploads/campus-smpit-rabbani.webp',
                    'btn_text' => 'Sambutan Kepala Sekolah',
                    'btn_link' => '/smp/sambutan',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB',
                    'btn2_link' => '/smp/ppdb',
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'SMPS IT RABBANI MUARA ENIM • FULL DAY SCHOOL',
                    'title' => "Membina Generasi Qur'ani, Cerdas & Berakhlak Mulia",
                    'subtitle' => "Sekolah Menengah Pertama Islam Terpadu di Muara Enim dengan Kurikulum Terpadu JSIT, Tahfidz Al-Qur'an, dan Bina Pribadi Islam.",
                    'image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                    'btn_text' => 'Profil Singkat',
                    'btn_link' => '/smp/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Daftar SPMB',
                    'btn2_link' => '/smp/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides_tk' => json_encode([
                [
                    'active' => true,
                    'badge' => 'TKS IT RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Cilik Qur\'ani yang Kreatif, Cerdas, dan Mandiri',
                    'subtitle' => 'Pendidikan Anak Usia Dini berbasis fitrah keimanan, adab islami, tahfidz juz 30 cilik, dan pembelajaran sentra bermakna.',
                    'image' => '/uploads/campus-sit-rabbani.webp',
                    'btn_text' => 'Profil TKS IT',
                    'btn_link' => '/tk/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB TKS IT',
                    'btn2_link' => '/tk/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides_sd' => json_encode([
                [
                    'active' => true,
                    'badge' => 'SDS IT RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Berprestasi, Sholeh, Inovatif & Berakhlak Mulia',
                    'subtitle' => 'Sekolah Dasar Islam Terpadu unggulan di Muara Enim dengan target tahfidz mutqin, kurikulum terpadu JSIT, dan penguatan literasi numerasi.',
                    'image' => '/uploads/prestasi-sit-rabbani.webp',
                    'btn_text' => 'Profil SDS IT',
                    'btn_link' => '/sd/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB SDS IT',
                    'btn2_link' => '/sd/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides_sma' => json_encode([
                [
                    'active' => true,
                    'badge' => 'SMA IT RABBANI MUARA ENIM • BOARDING & FULL DAY',
                    'title' => 'Mencetak Pemimpin Masa Depan Berkarakter Qur\'ani & Berprestasi',
                    'subtitle' => '88% Lulusan Hafal Al-Qur\'an Minimal 1 Juz, 88% Lulusan Masuk PTN, dan Fasilitas Bimbingan SNBT Gratis.',
                    'image' => '/uploads/campus-smait-rabbani.webp',
                    'btn_text' => 'Profil SMA IT',
                    'btn_link' => '/sma/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Daftar SPMB SMA',
                    'btn2_link' => '/sma/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 2. Quick Menus (8 Menu Utama)
        $quickMenus = [
            ['name' => 'PPDB', 'url' => '/ppdb', 'icon' => 'fa-solid fa-graduation-cap', 'order' => 1],
            ['name' => 'Profil', 'url' => '/tentang-kami', 'icon' => 'fa-solid fa-school', 'order' => 2],
            ['name' => 'Guru', 'url' => '/dewan-guru', 'icon' => 'fa-solid fa-chalkboard-user', 'order' => 3],
            ['name' => 'Fasilitas', 'url' => '/fasilitas', 'icon' => 'fa-solid fa-layer-group', 'order' => 4],
            ['name' => 'Unggulan', 'url' => '/unggulan', 'icon' => 'fa-solid fa-award', 'order' => 5],
            ['name' => 'Prestasi', 'url' => '/prestasi', 'icon' => 'fa-solid fa-trophy', 'order' => 6],
            ['name' => 'Ekskul', 'url' => '/ekstrakurikuler', 'icon' => 'fa-solid fa-people-group', 'order' => 7],
            ['name' => 'Berita', 'url' => '/artikel', 'icon' => 'fa-solid fa-newspaper', 'order' => 8],
        ];

        QuickMenu::truncate();
        foreach ($quickMenus as $qm) {
            QuickMenu::create(array_merge($qm, ['is_active' => true]));
        }

        // 3. Dewan Guru & GTK
        AnggotaDewan::truncate();
        $gurus = $data['gurus'] ?? [];
        foreach ($gurus as $g) {
            AnggotaDewan::create($g);
        }

        // 4. Fasilitas Sekolah (Bidangs)
        Bidang::truncate();
        $facilities = $data['facilities'] ?? [];
        foreach ($facilities as $fac) {
            Bidang::create(array_merge($fac, [
                'address' => 'Kampus SIT Rabbani Muara Enim, Jl. Proklamasi No. 80 Air Lintang',
                'phone' => '0851-5929-3554',
                'email' => 'yayasangerabbani@gmail.com',
            ]));
        }

        // 5. Program Unggulan (Dpcs)
        $programs = [
            [
                'name' => 'Program Tahfidzul Qur\'an Mutqin & Bersanad',
                'slug' => 'program-tahfidz-quran-mutqin',
                'address' => 'Kurikulum Khusus Keislaman',
                'description' => 'Bimbingan intensif membaca Al-Qur\'an dengan tartil, tahsin bersanad, dan hafalan mutqin berkesinambungan dari jenjang TK hingga SMA IT.',
                'order' => 1,
            ],
            [
                'name' => 'Boarding School (Asrama Pesantren) SMA IT',
                'slug' => 'boarding-school-asrama-sma-it',
                'address' => 'Pembinaan Intensif 24 Jam',
                'description' => 'Asrama putra dan putri dengan pendampingan musyrif/ah 24 jam untuk pembiasaan sholat tahajud, halaqah Qur\'an, kajian kitab, dan kemandirian.',
                'order' => 2,
            ],
            [
                'name' => 'Bimbingan SNBT Masuk PTN Gratis',
                'slug' => 'bimbingan-snbt-ptn-gratis',
                'address' => 'Sukses Karir Masa Depan',
                'description' => 'Program pendampingan akademik intensif untuk persiapan seleksi nasional berbasis tes (SNBT), terbukti mengantarkan 88% lulusan masuk PTN.',
                'order' => 3,
            ],
            [
                'name' => 'Bina Pribadi Islam (BPI) & 10 Muwashofat JSIT',
                'slug' => 'bina-pribadi-islam-dan-karakter-jsit',
                'address' => 'Pembinaan Karakter Islami',
                'description' => 'Halaqah pekanan pembinaan akidah yang lurus, ibadah yang benar, dan akhlaqul karimah berstandar Jaringan Sekolah Islam Terpadu.',
                'order' => 4,
            ],
            [
                'name' => 'Sains Terpadu & Literasi Digital Abad 21',
                'slug' => 'sains-terpadu-literasi-digital',
                'address' => 'Pengembangan Nalar & Teknologi',
                'description' => 'Laboratorium komputer modern, bimbingan olimpiade sains (OSN), riset praktikum IPA, dan penguasaan bahasa asing (Arab & Inggris).',
                'order' => 5,
            ],
            [
                'name' => 'Kepanduan Pramuka SIT & Bela Diri Tapak Suci',
                'slug' => 'pramuka-sit-tapak-suci',
                'address' => 'Ketangkasan & Fisik Kuat (Qowiyyul Jismi)',
                'description' => 'Pembinaan kedisiplinan dan keberanian santri melalui kepanduan alam terbuka dan seni bela diri pencak silat berprestasi.',
                'order' => 6,
            ],
        ];

        Dpc::truncate();
        foreach ($programs as $prog) {
            Dpc::create($prog);
        }

        // 6. Categories & Tags
        DB::table('post_category')->delete();
        DB::table('post_tag')->delete();

        $categoriesMap = [
            'berita' => 'Berita',
            'prestasi-siswa' => 'Prestasi Siswa',
            'akademik-riset' => 'Akademik & Riset',
            'tahfidz-keislaman' => 'Tahfidz & Keislaman',
            'kesiswaan-ekskul' => 'Kesiswaan & Ekskul',
            'kabar-kampus' => 'Kabar Kampus',
            'opini' => 'Opini & Artikel',
        ];

        $categoryModels = [];
        foreach ($categoriesMap as $slug => $catName) {
            $categoryModels[$slug] = Category::updateOrCreate(
                ['slug' => $slug],
                ['name' => $catName, 'description' => 'Kategori '.$catName]
            );
        }

        $tagNames = [
            'ppdb' => 'PPDB',
            'tahfidz' => 'Tahfidz',
            'prestasi' => 'Prestasi',
            'juara' => 'Juara',
            'jsit' => 'JSIT',
            'boarding' => 'Boarding School',
            'ptn' => 'SNBT PTN',
            'muara-enim' => 'Muara Enim',
            'ekskul' => 'Ekskul',
            'rabbani' => 'Rabbani',
        ];

        $tagModels = [];
        foreach ($tagNames as $slug => $tName) {
            $tagModels[$slug] = Tag::updateOrCreate(
                ['slug' => $slug],
                ['name' => $tName]
            );
        }

        // 7. Video YouTube
        Video::truncate();
        $videos = $data['videos'] ?? [];
        foreach ($videos as $idx => $v) {
            Video::create(array_merge($v, [
                'created_at' => now()->subMinutes($idx * 5),
                'updated_at' => now()->subMinutes($idx * 5),
            ]));
        }

        // 8. Pengumuman
        Pengumuman::truncate();
        $pengumumen = $data['pengumumen'] ?? [];
        foreach ($pengumumen as $an) {
            Pengumuman::create($an);
        }

        // 9. Agenda Sekolah
        Agenda::truncate();
        $agendas = $data['agendas'] ?? [];
        foreach ($agendas as $ag) {
            Agenda::create($ag);
        }

        // 10. Testimonials
        Testimonial::truncate();
        $testimonials = $data['testimonials'] ?? [];
        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 11. Articles (Posts)
        Post::where('type', 'post')->delete();
        $articles = $data['articles'] ?? [];

        foreach ($articles as $postData) {
            $catSlug = $postData['category'] ?? 'kabar-kampus';
            unset($postData['category']);

            $post = Post::create(array_merge($postData, [
                'type' => 'post',
                'status' => 'publish',
            ]));

            if (isset($categoryModels[$catSlug])) {
                $post->categories()->sync([$categoryModels[$catSlug]->id]);
            }

            // Sync tags
            $selectedTags = collect($tagModels)->random(min(3, count($tagModels)))->pluck('id')->toArray();
            $post->tags()->sync($selectedTags);
        }

        // 12. Halaman Statis Resmi Sekolah
        $officialPages = [
            [
                'slug' => 'sambutan-kepala-sekolah',
                'title' => 'Sambutan Pimpinan Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Sambutan resmi Pimpinan Yayasan Generasi Rabbani Muara Enim, Drs. H. Basuki Wiwoho.',
                'featured_image' => '/uploads/dewan/ust-basuki-wiwoho.webp',
                'content' => <<<'HTML'
<p><strong>Bismillahirrohmanirrohim. Assalamu'alaikum Warahmatullahi Wabarakatuh.</strong></p>
<p>Segala puji dan syukur kita panjatkan ke hadirat Allah Subhanahu Wa Ta'ala atas segala limpahan rahmat, hidayah, dan inayah-Nya. Sholawat beriring salam senantiasa tercurah kepada uswah hasanah kita, Baginda Nabi Muhammad SAW, beserta keluarga, sahabat, dan pengikutnya yang istiqomah hingga akhir zaman.</p>
<p>Selamat datang di website resmi <strong>Yayasan Generasi Rabbani Muara Enim</strong> dan <strong>Sekolah Islam Terpadu (SIT) Rabbani</strong>. Di tengah era kemajuan teknologi informasi, portal ini hadir sebagai jembatan komunikasi, informasi, dan transparansi kegiatan pendidikan bagi seluruh orang tua, siswa, dan masyarakat luas.</p>
<p>Yayasan Generasi Rabbani Muara Enim menaungi empat jenjang pendidikan terpadu satu atap: <strong>TKS IT Rabbani</strong>, <strong>SDS IT Rabbani</strong>, <strong>SMPS IT Rabbani</strong>, dan <strong>SMA IT Rabbani</strong>. Kami berikhtiar sungguh-sungguh menghadirkan ekosistem pembelajaran islami yang holistik, memadukan kurikulum nasional, kurikulum khas Jaringan Sekolah Islam Terpadu (JSIT) Indonesia, pembinaan tahfidz Al-Qur'an mutqin, serta penguasaan sains dan teknologi.</p>
<p>Kami menyampaikan penghargaan setinggi-tingginya kepada seluruh asatidz dan asatidzah, staf kependidikan, serta para wali murid yang senantiasa berkolaborasi membersamai langkah kami. Semoga Allah SWT memberkahi setiap langkah perjuangan kita dalam mencetak generasi Qur'ani yang berkarakter Robbani.</p>
<p><em>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</em></p>
<p><strong>Ketua Yayasan Generasi Rabbani Muara Enim</strong><br>
<strong>Drs. H. Basuki Wiwoho</strong></p>
HTML,
            ],
            [
                'slug' => 'visi-dan-misi',
                'title' => 'Visi dan Misi Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan SIT Rabbani Muara Enim.',
                'featured_image' => '/uploads/logo-rabbani.png',
                'content' => <<<'HTML'
<h3>VISI YAYASAN & SEKOLAH</h3>
<blockquote class="text-xl font-bold text-school-primary my-4 p-4 border-l-4 border-school-primary bg-indigo-50/70 rounded-r-lg">
“MEWUJUDKAN GENERASI ROBBANI YANG CERDAS, BERAKHLAK MULIA, MANDIRI, BERPRESTASI, DAN BERWAWASAN GLOBAL BERLANDASKAN AL-QUR'AN DAN AS-SUNNAH”
</blockquote>

<h3>MISI YAYASAN</h3>
<ol class="list-decimal pl-6 space-y-2.5 text-gray-700">
    <li><strong>Aqidah & Akhlakul Karimah:</strong> Menanamkan aqidah yang lurus, ibadah yang benar, dan akhlak mulia dalam setiap aspek kehidupan siswa.</li>
    <li><strong>Tahfidzul Qur'an Mutqin:</strong> Menyelenggarakan pembelajaran Al-Qur'an tartil bersanad dan tahfidz dengan target hafalan mutqin di setiap jenjang pendidikan.</li>
    <li><strong>Keunggulan Akademik & SNBT PTN:</strong> Menghantarkan siswa meraih prestasi akademik unggul serta siap bersaing menembus Perguruan Tinggi Negeri favorit.</li>
    <li><strong>Pengembangan Karakter Mandiri & Kepemimpinan:</strong> Membina kemandirian, kedisiplinan, dan jiwa kepemimpinan melalui kepanduan Pramuka SIT, Asrama Boarding School, dan organisasi kesiswaan.</li>
    <li><strong>Sains, Teknologi & Bahasa:</strong> Membekali peserta didik dengan kecakapan literasi digital, eksperimen sains, serta kemampuan berbahasa asing (Arab dan Inggris).</li>
</ol>

<h3 class="mt-8">TUJUAN PENDIDIKAN</h3>
<ul class="list-disc pl-6 space-y-2 text-gray-700">
    <li>Mencetak santri/siswa yang tertib mendirikan sholat fardhu berjamaah dan membiasakan amalan sunnah.</li>
    <li>Mencapai target hafalan Al-Qur'an mutqin sesuai jenjang pendidikan.</li>
    <li>Membekali lulusan SMA IT Rabbani agar sukses menembus PTN impian (terbukti 88% lulusan tembus PTN).</li>
    <li>Membentuk pribadi pembelajar sepanjang hayat yang adaptif, inovatif, dan berjiwa sosial tinggi.</li>
</ul>
HTML,
            ],
            [
                'slug' => 'tentang-kami',
                'title' => 'Profil Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Profil resmi Yayasan Generasi Rabbani Muara Enim & Sekolah Islam Terpadu Rabbani.',
                'featured_image' => '/uploads/banner-yayasan-rabbani.webp',
                'content' => <<<'HTML'
<h3>Profil Singkat Lembaga</h3>
<p><strong>Yayasan Generasi Rabbani Muara Enim</strong> adalah lembaga yayasan pendidikan Islam yang menaungi <strong>Sekolah Islam Terpadu (SIT) Rabbani</strong> di Kabupaten Muara Enim, Sumatera Selatan. Menyelenggarakan pendidikan satu atap dari jenjang Anak Usia Dini hingga Sekolah Menengah Atas:</p>
<ul class="list-disc pl-6 space-y-1.5 my-3">
    <li><strong>TKS IT Rabbani Muara Enim</strong> (NPSN: 10647514) - Pembelajaran sentra usia dini & tahfidz cilik.</li>
    <li><strong>SDS IT Rabbani Muara Enim</strong> (NPSN: 10648045) - Sekolah Dasar terpadu dengan target tahfidz mutqin dan 10 Muwashofat JSIT.</li>
    <li><strong>SMPS IT Rabbani Muara Enim</strong> (NPSN: 69920340) - Sekolah Menengah Pertama Full Day School berkarakter Islami.</li>
    <li><strong>SMA IT Rabbani Muara Enim</strong> (NPSN: 70010515) - Boarding School & Full Day School dengan fasilitas Bimbingan SNBT Gratis (88% Lulusan Hafal Qur'an & Masuk PTN).</li>
</ul>

<h4 class="mt-6 font-bold text-gray-900">Identitas Lembaga</h4>
<table class="w-full text-left border-collapse my-4 text-sm">
    <tr class="border-b"><td class="py-2.5 font-semibold w-1/3 text-gray-800">Nama Yayasan</td><td class="py-2.5 text-gray-700">YAYASAN GENERASI RABBANI MUARA ENIM</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Satuan Pendidikan</td><td class="py-2.5 text-gray-700">TKS IT, SDS IT, SMPS IT, &amp; SMA IT Rabbani</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Ketua Yayasan</td><td class="py-2.5 text-gray-700">Drs. H. Basuki Wiwoho</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Alamat Kampus</td><td class="py-2.5 text-gray-700">Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumsel 31311</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Telepon / WhatsApp</td><td class="py-2.5 text-gray-700">0851-5929-3554</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Email Resmi</td><td class="py-2.5 text-gray-700">yayasangerabbani@gmail.com</td></tr>
</table>
HTML,
            ],
            [
                'slug' => 'sejarah',
                'title' => 'Sejarah Berdirinya Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Napak tilas perjalanan dan sejarah perjuangan pendidikan SIT Rabbani di Kabupaten Muara Enim.',
                'featured_image' => '/uploads/campus-sit-rabbani.webp',
                'content' => <<<'HTML'
<h3>Perjalanan & Latar Belakang Pendirian</h3>
<p><strong>Yayasan Generasi Rabbani Muara Enim</strong> berawal dari tekad para tokoh dan pendidik muslim di Kabupaten Muara Enim untuk menghadirkan institusi pendidikan yang mampu melahirkan generasi penghafal Al-Qur'an sekaligus unggul dalam sains dan teknologi.</p>
<p>Langkah awal diawali dengan hadirnya unit pendidikan anak usia dini dan sekolah dasar. Sambutan hangat masyarakat yang mendambakan kelanjutan pendidikan islami terpadu mendorong lahirnya jenjang SMPS IT Rabbani dan SMA IT Rabbani Boarding School.</p>
<p>Kini, dengan izin Allah SWT, SIT Rabbani Muara Enim telah berkembang pesat menjadi lembaga rujukan pendidikan Islam terpadu satu atap terkemuka di Kabupaten Muara Enim dengan ribuan alumni yang tersebar di berbagai perguruan tinggi negeri terkemuka di Indonesia.</p>
HTML,
            ],
            [
                'slug' => 'struktur-organisasi',
                'title' => 'Struktur Organisasi Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Bagan kepemimpinan yayasan dan para kepala satuan pendidikan SIT Rabbani.',
                'featured_image' => '/uploads/struktur-yayasan-rabbani.webp',
                'content' => <<<'HTML'
<h3>Bagan Manajemen Yayasan & Satuan Pendidikan</h3>
<ul class="space-y-3 text-gray-800">
    <li><strong>Ketua Yayasan Generasi Rabbani:</strong> Drs. H. Basuki Wiwoho</li>
    <li><strong>Kepala SMA IT Rabbani Muara Enim:</strong> Pimpinan Satuan SMA IT</li>
    <li><strong>Kepala SMPS IT Rabbani Muara Enim:</strong> Pimpinan Satuan SMPS IT</li>
    <li><strong>Kepala SDS IT Rabbani Muara Enim:</strong> Pimpinan Satuan SDS IT</li>
    <li><strong>Kepala TKS IT Rabbani Muara Enim:</strong> Pimpinan Satuan TKS IT</li>
    <li><strong>Dewan Asatidz & GTK:</strong> Para pendidik profesional dan musyrif asrama berpengalaman.</li>
</ul>
HTML,
            ],
            [
                'slug' => 'donasi',
                'title' => 'Infaq & Wakaf Pembangunan Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Muara Enim.',
                'featured_image' => '/uploads/campus-sit-rabbani.webp',
                'content' => <<<'HTML'
<h3>Investasi Akhirat Melalui Pendidikan Islam Terpadu</h3>
<p>Yayasan Generasi Rabbani Muara Enim membuka kesempatan seluas-luasnya bagi kaum muslimin dan para muhsinin untuk mengalirkan amal jariyah melalui pembangunan sarana ruang kelas, masjid kampus terpadu, asrama santri, laboratorium komputer, serta beasiswa pendidikan santri yatim dan dhuafa berprestasi.</p>
HTML,
            ],
            [
                'slug' => 'e-book',
                'title' => 'E-Library & Modul Pembelajaran SIT Rabbani Muara Enim',
                'excerpt' => 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library santri SIT Rabbani.',
                'featured_image' => '/uploads/campus-smait-rabbani.webp',
                'content' => <<<'HTML'
<h3>Pusat E-Library & Buku Digital Santri</h3>
<p>Daftar koleksi buku panduan kurikulum tahfidz mutqin, pedoman karakter 10 Muwashofat JSIT, serta modul praktikum yang dapat diunduh civitas akademika SIT Rabbani Muara Enim.</p>
HTML,
            ],
            [
                'slug' => 'hymne-mars',
                'title' => 'Mars & Hymne Jaringan Sekolah Islam Terpadu (JSIT)',
                'excerpt' => 'Lagu mars dan hymne kebanggaan Sekolah Islam Terpadu SIT Rabbani Muara Enim.',
                'featured_image' => '/uploads/logo-rabbani.png',
                'content' => <<<'HTML'
<h3>Mars JSIT Indonesia</h3>
<p class="italic text-gray-600">Membina tunas bangsa, beriman dan bertaqwa, cerdas berakhlak mulia...</p>
HTML,
            ],
            [
                'slug' => 'logo',
                'title' => 'Makna Filosofis Logo Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Makna lambang bintang bersegi delapan, lengkungan, dan nama Generasi Rabbani Muara Enim.',
                'featured_image' => '/uploads/logo-rabbani.png',
                'content' => <<<'HTML'
<h3>Filosofi Lambang Yayasan Generasi Rabbani Muara Enim</h3>
<p>Logo Yayasan Generasi Rabbani Muara Enim didesain dengan bentuk bintang segi delapan berlatar kuning cerah yang melambangkan cahaya Islam, keluhuran budi pekerti, dan kejayaan ilmu pengetahuan. Tulisan arab 'Robbani' di bagian tengah menegaskan komitmen mencetak generasi yang selalu terhubung dengan Allah SWT dan berpegang teguh pada Al-Qur'an dan As-Sunnah.</p>
HTML,
            ],
            [
                'slug' => 'hubungi',
                'title' => 'Kontak & Sekretariat Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Alamat dan kontak resmi sekretariat Yayasan Generasi Rabbani dan Panitia SPMB.',
                'featured_image' => '/uploads/banner-yayasan-rabbani.webp',
                'content' => <<<'HTML'
<h3>Sekretariat Yayasan & Panitia SPMB</h3>
<p>Kunjungi kampus kami atau hubungi panitia SPMB untuk informasi pendaftaran santri baru gelombang 1, program boarding school SMA IT, dan fasilitas beasiswa.</p>
<p><strong>Alamat Kampus:</strong> Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumatera Selatan 31311.<br>
<strong>WhatsApp / Hotline:</strong> 0851-5929-3554<br>
<strong>Email:</strong> yayasangerabbani@gmail.com</p>
HTML,
            ],
            [
                'slug' => 'privacy-policy',
                'title' => 'Kebijakan Privasi Yayasan Generasi Rabbani Muara Enim',
                'excerpt' => 'Kebijakan privasi dan perlindungan data pengguna website resmi Yayasan Generasi Rabbani.',
                'featured_image' => '/uploads/logo-rabbani.png',
                'content' => <<<'HTML'
<h3>Kebijakan Privasi Yayasan Generasi Rabbani Muara Enim</h3>
<p>Yayasan Generasi Rabbani Muara Enim berkomitmen melindungi privasi pengunjung dan calon peserta didik baru yang mengisi formulir SPMB melalui website resmi ini.</p>
HTML,
            ],
        ];

        foreach ($officialPages as $p) {
            Post::firstOrCreate(
                ['slug' => $p['slug']],
                array_merge($p, [
                    'type' => 'page',
                    'status' => 'publish',
                    'meta_title' => $p['title'],
                    'meta_description' => $p['excerpt'],
                ])
            );
        }

        // 13. Galeri Foto Dokumentasi Rabbani
        Post::where('type', 'gallery')->delete();
        $galleries = $data['galleries'] ?? [];
        foreach ($galleries as $idx => $g) {
            $slug = Str::slug($g['title']).'-'.($idx + 1);
            Post::create([
                'title' => $g['title'],
                'slug' => $slug,
                'type' => 'gallery',
                'status' => 'publish',
                'featured_image' => $g['url'],
                'content' => $g['title'],
                'author_id' => 1,
                'published_at' => now()->subHours(10 - $idx),
            ]);
        }

        // 14. Jalur Pendaftaran PPDB Dinamis (Sesuai Brosur Resmi Rabbani 2025/2026)
        PpdbTrack::truncate();
        $defaultTracks = [
            [
                'name' => 'Jalur Diskon Gelombang 1',
                'slug' => 'jalur-diskon-gelombang-1',
                'percentage' => '30%',
                'quota' => '20 Orang Pertama',
                'cashback_info' => 'Free Uang Pembangunan & Free Buku',
                'description' => "Diskon khusus Gelombang 1 (01 Oktober - 20 Desember 2024 / Periode Awal TP 2025/2026):\nSPP hanya Rp 200.000\nRegistrasi Ulang Rp 1.000.000 (Include Seragam Sekolah)\nBenefit: Free Uang Pembangunan, Free Uang Kegiatan, dan Free Buku untuk 20 orang pertama.",
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Boarding School (SMA IT Asrama)',
                'slug' => 'jalur-boarding-school-sma-it',
                'percentage' => '25%',
                'quota' => 'Asrama Putra & Putri',
                'cashback_info' => 'Bimbel SNBT Gratis & Tahfidz Asrama',
                'description' => "Program Asrama Boarding School SMA IT Rabbani. Pembinaan musyrif 24 jam, target hafalan Al-Qur'an minimal 1 juz (88% lulusan tercapai), bimbingan intensif SNBT PTN gratis, dan pembinaan karakter pemimpin Qur'ani.",
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Tahfidz Al-Qur\'an',
                'slug' => 'jalur-tahfidz-quran',
                'percentage' => '15%',
                'quota' => 'Hanya 15 Siswa',
                'cashback_info' => 'Beasiswa / Keringanan Biaya Pendidikan',
                'description' => "Jalur khusus bagi calon santri penghafal Al-Qur'an. Berhak mendapatkan potongan biaya dan beasiswa pembinaan tahfidz melalui uji tasmi' hafalan.",
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Prestasi Akademik & Non-Akademik',
                'slug' => 'jalur-prestasi-akademik-non-akademik',
                'percentage' => '15%',
                'quota' => 'Prioritas Penerimaan',
                'cashback_info' => 'Bebas Tes Akademik & Potongan Biaya',
                'description' => 'Bebas tes tulis akademik bagi peraih juara OSN, O2SN, FLS2N, MTQ, kejuaraan bela diri Tapak Suci, atau cabang olahraga lainnya di tingkat Kabupaten, Provinsi, maupun Nasional.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Alumni SIT Rabbani',
                'slug' => 'jalur-alumni-sit-rabbani',
                'percentage' => '10%',
                'quota' => 'Alumni SIT Rabbani',
                'cashback_info' => 'Prioritas Penerimaan & Potongan Masuk',
                'description' => 'Keringanan biaya uang masuk dan kemudahan administrasi bagi lulusan TKS IT ke SDS IT, SDS IT ke SMPS IT, atau SMPS IT ke SMA IT Rabbani Muara Enim.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Reguler (Full Day School)',
                'slug' => 'jalur-reguler-full-day',
                'percentage' => '5%',
                'quota' => 'Sesuai Kuota Rombel',
                'cashback_info' => 'Tes Masuk Sekolah',
                'description' => "Jalur seleksi reguler melalui tahapan wawancara komitmen orang tua, tes pemetaan minat dan potensi akademik, serta tes membaca Al-Qur'an.",
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($defaultTracks as $track) {
            PpdbTrack::create($track);
        }

        $trackNames = array_map(fn ($t) => "{$t['name']} ({$t['percentage']})", $defaultTracks);
        Setting::set('ppdb_form_tracks', implode("\n", $trackNames), 'ppdb');
    }
}
