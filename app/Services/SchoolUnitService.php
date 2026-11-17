<?php

namespace App\Services;

class SchoolUnitService
{
    /**
     * Get all available units and yayasan.
     */
    public static function getUnits(): array
    {
        return [
            'yayasan' => [
                'key' => 'yayasan',
                'name' => 'Yayasan Generasi Rabbani Muara Enim',
                'short_name' => 'Yayasan Generasi Rabbani',
                'level' => 'Lembaga Penyelenggara',
                'tagline' => 'Menaungi TK, SD, SMP, dan SMA Sekolah Islam Terpadu Rabbani Muara Enim',
                'route' => route('home'),
                'icon' => 'fa-solid fa-landmark-flag',
                'color' => 'emerald',
                'leader_title' => 'Ketua Yayasan',
                'leader_name' => 'Drs. H. Basuki Wiwoho',
                'leader_photo' => '/uploads/dewan/ust-basuki-wiwoho.webp',
                'address' => 'Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumatera Selatan 31315',
                'phone' => '0851-5929-3554',
                'email' => 'yayasangerabbani@gmail.com',
            ],
            'tk' => [
                'key' => 'tk',
                'name' => 'TKS Islam Terpadu Rabbani Muara Enim',
                'short_name' => 'TK IT Rabbani',
                'level' => 'PAUD / TK Islam Terpadu',
                'tagline' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri',
                'route' => route('unit.home', 'tk'),
                'ppdb_route' => route('unit.ppdb', 'tk'),
                'npsn' => '10647514',
                'akreditasi' => 'B',
                'year_founded' => '2014',
                'icon' => 'fa-solid fa-shapes',
                'color' => 'amber',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala TKS IT Rabbani',
                'leader_photo' => '/uploads/units/logo-tk.webp',
                'address' => 'Jl. Pramuka IV Gang Damai, Kelurahan Pasar II, Kec. Muara Enim, Kab. Muara Enim 31315',
                'phone' => '0851-5929-3554',
                'email' => 'tkitrabbanim.e@gmail.com',
                'badge' => 'PAUD / TK ISLAM TERPADU',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '10647514'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-PAUD)'],
                    ['label' => 'Instagram', 'val' => '@tkitrabbanim.e'],
                    ['label' => 'Model Belajar', 'val' => 'Sentra & Adab Islami'],
                ],
            ],
            'sd' => [
                'key' => 'sd',
                'name' => 'SDS Islam Terpadu Rabbani Muara Enim',
                'short_name' => 'SD IT Rabbani',
                'level' => 'Sekolah Dasar Islam Terpadu',
                'tagline' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri',
                'route' => route('unit.home', 'sd'),
                'ppdb_route' => route('unit.ppdb', 'sd'),
                'npsn' => '10648045',
                'akreditasi' => 'B',
                'year_founded' => '2013',
                'icon' => 'fa-solid fa-book-open-reader',
                'color' => 'emerald',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SDS IT Rabbani',
                'leader_photo' => '/uploads/units/logo-sd.webp',
                'address' => 'Talang Jawa / Air Lintang, Kec. Muara Enim, Kab. Muara Enim, Sumatera Selatan',
                'phone' => '0851-5929-3554',
                'email' => 'sditrabbani_me@gmail.com',
                'badge' => 'SEKOLAH DASAR ISLAM TERPADU',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '10648045'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-SM)'],
                    ['label' => 'Instagram', 'val' => '@sditrabbani_me'],
                    ['label' => 'Kurikulum', 'val' => 'Kurikulum Merdeka & JSIT'],
                ],
            ],
            'smp' => [
                'key' => 'smp',
                'name' => 'SMPS Islam Terpadu Rabbani Muara Enim',
                'short_name' => 'SMP IT Rabbani',
                'level' => 'Sekolah Menengah Pertama Islam Terpadu',
                'tagline' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner & Berakhlak Mulia',
                'route' => route('unit.home', 'smp'),
                'ppdb_route' => route('unit.ppdb', 'smp'),
                'npsn' => '69920340',
                'akreditasi' => 'B (Terakreditasi BAN-SM)',
                'year_founded' => '2019',
                'icon' => 'fa-solid fa-graduation-cap',
                'color' => 'indigo',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SMPS IT Rabbani',
                'leader_photo' => '/uploads/units/logo-smp.webp',
                'address' => 'Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim 31315',
                'phone' => '0851-5929-3554',
                'email' => 'smpitrabbanime@gmail.com',
                'badge' => 'SEKOLAH MENENGAH PERTAMA IT',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '69920340'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-SM)'],
                    ['label' => 'Sistem Belajar', 'val' => 'Full Day School'],
                    ['label' => 'Instagram', 'val' => '@smpitrabbanimuaraenim'],
                ],
            ],
            'sma' => [
                'key' => 'sma',
                'name' => 'SMA Islam Terpadu Rabbani Muara Enim',
                'short_name' => 'SMA IT Rabbani',
                'level' => 'Sekolah Menengah Atas Islam Terpadu',
                'tagline' => 'Tersedia Boarding School • Mencetak Generasi Pemimpin Qur\'ani & Berprestasi Global',
                'route' => route('unit.home', 'sma'),
                'ppdb_route' => route('unit.ppdb', 'sma'),
                'npsn' => '70010515',
                'akreditasi' => 'B (Terakreditasi BAN-SM)',
                'year_founded' => '2021',
                'icon' => 'fa-solid fa-award',
                'color' => 'sky',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SMA IT Rabbani',
                'leader_photo' => '/uploads/units/logo-sma.webp',
                'address' => 'Jl. Proklamasi No. 80, Kelurahan Air Lintang, Kec. Muara Enim, Kab. Muara Enim 31315',
                'phone' => '0851-5929-3554',
                'email' => 'smaitrabbanime@gmail.com',
                'badge' => 'SEKOLAH MENENGAH ATAS IT',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '70010515'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-SM)'],
                    ['label' => 'Boarding School', 'val' => 'Tersedia Asrama'],
                    ['label' => 'Lulusan PTN', 'val' => '88% Diterima PTN'],
                ],
            ],
        ];
    }

    /**
     * Get details of a single unit.
     */
    public static function getUnit(string $key): ?array
    {
        $units = self::getUnits();
        if (! isset($units[$key])) {
            return null;
        }

        $data = $units[$key];

        if ($key === 'tk') {
            $data['visi'] = 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.';
            $data['misi'] = [
                'Membiasakan Ibadah Harian: Sholat Dhuha, Doa harian, Muroja\'ah hafalan surat pendek, hadits pilihan, dan infaq berkah.',
                'Membentuk Karakter yang Berakhlak Karimah melalui keteladanan para asatidz dan pembiasaan adab islami.',
                'Mengembangkan Daya Imajinasi & Kreativitas melalui pembelajaran sentra dan bermain peran yang menyenangkan.',
                'Menyelenggarakan Proses Belajar Menyenangkan & Inovatif dengan pendekatan Deep Learning.',
                'Melatih Keterampilan Dasar Motorik, Bahasa, Kognitif, dan Kemandirian Anak Usia Dini.',
            ];
            $data['tujuan'] = [
                'Anak mampu membaca Iqro\' dan melafalkan doa-doa harian dengan lancar.',
                'Hafalan surat-surat pendek Juz 30 dan hadits-hadits pilihan anak.',
                'Membiasakan sholat dhuha dan adab sopan santun kepada guru dan orang tua.',
                'Kemandirian makan, berpakaian, dan bersosialisasi secara riang gembira.',
            ];
            $data['gurus'] = [
                ['name' => 'Kepala TKS IT Rabbani', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan TKS IT', 'photo' => '/uploads/units/logo-tk.webp', 'education' => 'S1 PAUD / Kependidikan', 'order' => 1],
                ['name' => 'Ustadzah Pembina Sentra', 'position' => 'Guru Sentra Ibadah', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-ustadzah.svg', 'education' => 'S1 Kependidikan', 'order' => 2],
                ['name' => 'Ustadzah Guru Sentra Seni', 'position' => 'Guru Sentra Seni & Kreativitas', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-ustadzah.svg', 'education' => 'S1 Kependidikan', 'order' => 3],
            ];
            $data['programs'] = [
                ['name' => 'Sentra Ibadah & Muroja\'ah Harian', 'desc' => 'Sholat dhuha bersama, pembiasaan hafalan surat pendek juz 30, doa harian, dan tahsin Iqro\'.', 'icon' => 'fa-solid fa-mosque'],
                ['name' => 'Sentra Seni, Kreativitas & Jurnal Gambar', 'desc' => 'Mengeksplorasi imajinasi anak melalui jurnal lukis, mewarnai, kerajinan tangan, dan kreasi seni.', 'icon' => 'fa-solid fa-palette'],
                ['name' => 'Market Day & Entrepreneurship Cilik', 'desc' => 'Melatih kemandirian, komunikasi, interaksi sosial, serta pengenalan dasar berhitung melalui bermain jual-beli.', 'icon' => 'fa-solid fa-store'],
                ['name' => 'Manasik Haji Cilik & Outbound Edukatif', 'desc' => 'Pengenalan rukun Islam kelima sejak usia dini serta pelatihan motorik dan ketangkasan fisik.', 'icon' => 'fa-solid fa-kaaba'],
                ['name' => 'Fun Swimming & Motoric Exercise', 'desc' => 'Olahraga renang terpandu dan stimulasi motorik kasar untuk kesehatan dan kebugaran ananda.', 'icon' => 'fa-solid fa-person-swimming'],
            ];
            $data['facilities'] = [
                ['name' => 'Ruang Sentra Belajar Ber-AC', 'desc' => 'Ruang kelas tematik sentra yang nyaman, sejuk, dan aman dengan mainan edukatif terstandar.', 'icon' => 'fa-solid fa-door-open'],
                ['name' => 'Arena Bermain Edukatif Indoor & Outdoor', 'desc' => 'Wahana permainan ketangkasan luar dan dalam ruangan yang aman dan merangsang motorik.', 'icon' => 'fa-solid fa-gamepad'],
                ['name' => 'Pojok Baca & Literasi Cerita Bergambar', 'desc' => 'Koleksi buku dongeng islami, kisah para nabi, dan ensiklopedia anak yang memikat.', 'icon' => 'fa-solid fa-book-open'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'TKS ISLAM TERPADU RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Rabbani yang Kreatif & Mandiri',
                    'subtitle' => 'Pendidikan Anak Usia Dini Berbasis Karakter Islami, Sentra Pembelajaran Menyenangkan & Tahfidz Cilik.',
                    'image' => '/uploads/hero-slide-yayasan-1.webp',
                    'btn_text' => 'Profil TKS IT Rabbani',
                    'btn_link' => route('unit.page', ['unit' => 'tk', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB TK',
                    'btn2_link' => route('unit.ppdb', 'tk'),
                ],
            ];
        } elseif ($key === 'sd') {
            $data['visi'] = 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.';
            $data['misi'] = [
                'Membangun Atmosfer Belajar yang Islami berbasis Al-Qur\'an dan As-Sunnah.',
                'Menumbuhkan Budaya Disiplin, Percaya Diri, dan Akhlak Mulia pada Seluruh Santri.',
                'Menyelenggarakan Kurikulum Terpadu yang Mengintegrasikan Kurikulum Nasional dan Standar Mutu JSIT.',
                'Mengembangkan Logika Numerasi, Literasi Sains, Bahasa Bilingual, dan Keterampilan Digital.',
            ];
            $data['tujuan'] = [
                'Anak mampu membaca Al-Qur\'an secara tartil, tertib mendirikan sholat 5 waktu berjamaah, dan menghafal doa sehari-hari.',
                'Target hafalan Al-Qur\'an mutqin bersanad serta hafalan hadits pilihan harian.',
                'Kecakapan dasar berhitung, sains, bahasa asing (Arab & Inggris), serta literasi komputer.',
                'Sehat jasmani, cekatan, dan mandiri melalui olahraga, kepanduan Pramuka SIT, dan outbound.',
            ];
            $data['gurus'] = [
                ['name' => 'Kepala SDS IT Rabbani', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan SDS IT', 'photo' => '/uploads/units/logo-sd.webp', 'education' => 'S1 Kependidikan, Gr', 'order' => 1],
                ['name' => 'Dewan Guru Kelas & Tematik', 'position' => 'Guru Kelas & Kurikulum', 'fraction' => 'Tenaga Pendidik', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'education' => 'S1 Kependidikan', 'order' => 2],
                ['name' => 'Dewan Guru TTQ & Tahfidz', 'position' => 'Koordinator Tahfidz Al-Qur\'an', 'fraction' => 'Tahfidz & Diniyah', 'photo' => '/uploads/dewan/avatar-ustadzah.svg', 'education' => 'Sarjana Al-Qur\'an', 'order' => 3],
            ];
            $data['programs'] = [
                ['name' => 'Tahfidz Al-Qur\'an Intensif', 'desc' => 'Bimbingan intensif hafalan Al-Qur\'an dengan talaqqi tartil, tasmi\', dan munaqosah bersertifikat.', 'icon' => 'fa-solid fa-quran'],
                ['name' => 'Pembiasaan Adab & Hadits Pilihan', 'desc' => 'Internalisasi nilai-nilai islami, hadits adab, sholat dhuha dan sholat berjamaah harian.', 'icon' => 'fa-solid fa-hands-praying'],
                ['name' => 'Laboratorium Komputer & ANBK', 'desc' => 'Pengenalan teknologi informasi, literasi digital, dan pembekalan Asesmen Nasional.', 'icon' => 'fa-solid fa-computer'],
                ['name' => 'Kepanduan Pramuka SIT & Outbound', 'desc' => 'Membentuk kemandirian, jiwa kepemimpinan, kepedulian sosial, dan cinta tanah air.', 'icon' => 'fa-solid fa-campground'],
            ];
            $data['facilities'] = [
                ['name' => 'Ruang Belajar Nyaman & Ber-AC', 'desc' => 'Ruang kelas bersih, proyektor multimedia, dan tata letak ergonomis untuk proses belajar interaktif.', 'icon' => 'fa-solid fa-school'],
                ['name' => 'Laboratorium Komputer Siswa', 'desc' => 'Perangkat PC modern lengkap dengan koneksi internet untuk literasi digital dan ANBK.', 'icon' => 'fa-solid fa-desktop'],
                ['name' => 'Perpustakaan & Sarana Ibadah', 'desc' => 'Koleksi buku berkualitas dan musholla sekolah untuk sholat berjamaah.', 'icon' => 'fa-solid fa-book'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'SDS ISLAM TERPADU RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Mencetak Generasi Rabbani Berprestasi & Sholeh',
                    'subtitle' => 'Kurikulum Terpadu JSIT & Kurikulum Merdeka, Target Tahfidz Mutqin & Pembentukan Karakter Islami.',
                    'image' => '/uploads/hero-slide-yayasan-1.webp',
                    'btn_text' => 'Profil SDS IT Rabbani',
                    'btn_link' => route('unit.page', ['unit' => 'sd', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB SD',
                    'btn2_link' => route('unit.ppdb', 'sd'),
                ],
            ];
        } elseif ($key === 'smp') {
            $data['visi'] = 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Berakhlak Mulia Berbekal Ilmu Pengetahuan dan Teknologi.';
            $data['misi'] = [
                'Membangun Atmosfer Belajar Yang Islami, Cerdas, dan Kondusif bagi Tumbuh Kembang Remaja.',
                'Menjadi Lembaga Pendidikan Islam Terpadu yang Melahirkan Generasi Berjiwa Kepemimpinan dan Berwawasan Luas.',
                'Terdepan dalam Penguasaan Bahasa Arab, Bahasa Inggris, Matematika, Sains, dan Tahfidzul Qur\'an.',
                'Mengembangkan Nilai-nilai Kemandirian, Kepedulian Sosial, dan Tanggung Jawab Kebangsaan.',
            ];
            $data['tujuan'] = [
                'Terwujudnya penghafal Al-Qur\'an yang mutqin, tartil, dan memahami nilai-nilai kalamullah.',
                'Pencapaian prestasi akademik gemilang dalam kompetisi sains (OSN) dan bidang riset remaja.',
                'Kecakapan berkomunikasi aktif dalam Bahasa Inggris dan Bahasa Arab.',
                'Karakter mandiri, kepemimpinan visioner, dan kesiapan melanjutkan ke jenjang SMA/MA unggulan.',
            ];
            $data['gurus'] = [
                ['name' => 'Kepala SMPS IT Rabbani', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan SMPS IT', 'photo' => '/uploads/units/logo-smp.webp', 'education' => 'S1 / S2 Kependidikan, Gr', 'order' => 1],
                ['name' => 'Dewan Guru Mata Pelajaran', 'position' => 'Waka Kurikulum & Guru Mapel', 'fraction' => 'Kurikulum & Sains', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'education' => 'S1 Kependidikan', 'order' => 2],
                ['name' => 'Dewan Guru TTQ & BPI', 'position' => 'Koordinator Tahfidz & Kesiswaan', 'fraction' => 'Tahfidz & Pembinaan', 'photo' => '/uploads/dewan/avatar-ustadzah.svg', 'education' => 'S1 Agama Islam', 'order' => 3],
            ];
            $data['programs'] = [
                ['name' => 'Tahfidz Al-Qur\'an & Talaqqi Bersanad', 'desc' => 'Program hafalan Al-Qur\'an intensif Full Day School dibimbing dewan asatidz berpengalaman.', 'icon' => 'fa-solid fa-quran'],
                ['name' => 'Bina Pribadi Islami (BPI) & Mentoring', 'desc' => 'Pembinaan adab, kepribadian islam, serta kepekaan sosial dalam kelompok kecil halaqah.', 'icon' => 'fa-solid fa-user-group'],
                ['name' => 'Laboratorium Komputer & Digital Literacy', 'desc' => 'Pembelajaran teknologi informasi, coding dasar, aplikasi perkantoran, dan ANBK.', 'icon' => 'fa-solid fa-laptop-code'],
                ['name' => 'Bilingual Environment (Arabic & English)', 'desc' => 'Pembiasaan percakapan harian untuk membangun rasa percaya diri berkomunikasi internasional.', 'icon' => 'fa-solid fa-comments'],
            ];
            $data['facilities'] = [
                ['name' => 'Laboratorium Komputer & Multimedia', 'desc' => 'Fasilitas komputer PC modern terhubung jaringan cepat untuk ANBK dan literasi digital.', 'icon' => 'fa-solid fa-desktop'],
                ['name' => 'Ruang Belajar Ber-AC & Proyektor', 'desc' => 'Ruang kelas representatif yang mendukung pembelajaran interaktif dan menyenangkan.', 'icon' => 'fa-solid fa-chalkboard-user'],
                ['name' => 'Lapangan Olahraga & Arena Kegiatan', 'desc' => 'Fasilitas voli, futsal, bulutangkis, dan arena pembinaan kepramukaan.', 'icon' => 'fa-solid fa-futbol'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'SMPS IT RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia',
                    'subtitle' => 'Sekolah Menengah Pertama Islam Terpadu di Muara Enim dengan Kurikulum Nasional Terintegrasi JSIT dan Program Full Day School.',
                    'image' => '/uploads/hero-slide-yayasan-1.webp',
                    'btn_text' => 'Profil SMPS IT Rabbani',
                    'btn_link' => route('unit.page', ['unit' => 'smp', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB SMP',
                    'btn2_link' => route('unit.ppdb', 'smp'),
                ],
            ];
        } elseif ($key === 'sma') {
            $data['visi'] = 'Menjadi Sekolah Menengah Atas Islam Terpadu Unggulan yang Membentuk Generasi Pemimpin Berkarakter Qur\'ani, Berprestasi Global, Mandiri, dan Sukses Menembus Perguruan Tinggi Terbaik.';
            $data['misi'] = [
                'Menyelenggarakan Pendidikan Menengah Atas Berbasis Boarding School dan Full Day School yang Mengintegrasikan Kurikulum Nasional & JSIT.',
                'Membina Santri Berakhlak Mulia dengan Target Hafalan Al-Qur\'an Mutqin Bersanad (88% Lulusan Hafal Minimal 1 Juz).',
                'Memberikan Pendampingan dan Bimbingan Belajar SNBT Gratis untuk Mengantarkan 88% Lulusan Diterima di Perguruan Tinggi Negeri Terkemuka.',
                'Menumbuhkembangkan Potensi Kepemimpinan, Bakat Riset Sains, Teknologi Digital, dan Kemandirian Santri.',
                'Mengasah Keterampilan dan Jiwa Sosial Santri melalui 8 Ekstrakurikuler Unggulan Terpadu.',
            ];
            $data['tujuan'] = [
                '88% Lulusan SMA IT Rabbani hafal Al-Qur\'an minimal 1 Juz mutqin bersanad.',
                '88% Lulusan SMA IT Rabbani sukses diterima di Perguruan Tinggi Negeri (PTN) dan kedinasan.',
                'Karakter mandiri, tangguh, dan berakhlakul karimah melalui pembinaan asrama Boarding School.',
                'Penguasaan sains, teknologi multimedia, dan komunikasi aktif bahasa internasional.',
            ];
            $data['gurus'] = [
                ['name' => 'Kepala SMA IT Rabbani', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan SMA IT', 'photo' => '/uploads/units/logo-sma.webp', 'education' => 'S1 / S2 Kependidikan, Gr', 'order' => 1],
                ['name' => 'Dewan Guru Sains & SNBT', 'position' => 'Koordinator Akademik & Bimbel SNBT', 'fraction' => 'Akademik & UTBK', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'education' => 'S1 / S2 Sains & Matematika', 'order' => 2],
                ['name' => 'Dewan Asatidz Boarding School', 'position' => 'Musyrif Asrama & Tahfidz', 'fraction' => 'Asrama & Tahfidz', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'education' => 'Sarjana Al-Qur\'an & Hadits', 'order' => 3],
            ];
            $data['programs'] = [
                ['name' => 'Program Asrama (Boarding School)', 'desc' => 'Pembinaan intensif 24 jam dengan pembiasaan qiyamul lail, tahfidz, kajian kitab, dan kemandirian hidup.', 'icon' => 'fa-solid fa-hotel'],
                ['name' => 'Bimbel SNBT Gratis Masuk PTN', 'desc' => 'Pendampingan belajar intensif dan tryout berkala persiapan Seleksi Nasional Berdasarkan Tes (88% Lulus PTN).', 'icon' => 'fa-solid fa-graduation-cap'],
                ['name' => 'Tahfidz Al-Qur\'an Target Bersertifikat', 'desc' => 'Bimbingan hafalan tartil mutqin dibimbing asatidz bersanad dengan target minimal 1 juz hingga 30 juz.', 'icon' => 'fa-solid fa-quran'],
                ['name' => '8 Ekstrakurikuler Unggulan', 'desc' => 'Pramuka, OSIS, Bola Voli, PMR, Marawis, Multimedia, Tapak Suci, dan TPA Bimbel SNBT Gratis.', 'icon' => 'fa-solid fa-award'],
                ['name' => 'Laboratorium Komputer & Multimedia', 'desc' => 'Praktik desain grafis, editing video, literasi kecerdasan buatan, dan keterampilan masa depan.', 'icon' => 'fa-solid fa-laptop-code'],
            ];
            $data['facilities'] = [
                ['name' => 'Asrama Boarding School Putra & Putri', 'desc' => 'Gedung asrama santri yang bersih, nyaman, aman dengan bimbingan musyrif/musyrifah 24 jam.', 'icon' => 'fa-solid fa-bed'],
                ['name' => 'Laboratorium Komputer & Internet Cepat', 'desc' => 'Fasilitas PC modern untuk latihan UTBK-SNBT, literasi digital, dan multimedia.', 'icon' => 'fa-solid fa-desktop'],
                ['name' => 'Ruang Kelas Multimedia Ber-AC', 'desc' => 'Ruang belajar interaktif berpendingin udara dilengkapi perangkat proyektor modern.', 'icon' => 'fa-solid fa-chalkboard-user'],
                ['name' => 'Lapangan Olahraga Multifungsi', 'desc' => 'Sarana bola voli, futsal, bulutangkis, dan arena latihan Tapak Suci serta kepramukaan.', 'icon' => 'fa-solid fa-volleyball'],
                ['name' => 'Masjid Kampus & Aula Pertemuan', 'desc' => 'Pusat ibadah santri berjamaah, halaqah Qur\'an, dan kajian keislaman terpadu.', 'icon' => 'fa-solid fa-mosque'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'SMA IT RABBANI MUARA ENIM • TERAKREDITASI B',
                    'title' => 'Penerimaan Peserta Didik Baru (PPDB)',
                    'subtitle' => 'Tersedia Boarding School • 88% Lulusan Hafal Al-Qur\'an • 88% Diterima di Perguruan Tinggi Negeri.',
                    'image' => '/uploads/flyer-spmb-smait-rabbani.jpg',
                    'btn_text' => 'Profil SMA IT Rabbani',
                    'btn_link' => route('unit.page', ['unit' => 'sma', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB SMA Online',
                    'btn2_link' => route('unit.ppdb', 'sma'),
                ],
            ];
        } elseif ($key === 'yayasan') {
            $data['visi'] = 'Menjadi Yayasan Pendidikan Islam Terkemuka di Kabupaten Muara Enim yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berkarakter Qur\'ani, dan Berprestasi Menghadapi Era Global.';
            $data['misi'] = [
                'Menyelenggarakan Pendidikan Islam Terpadu Satu Atap yang Berkualitas dari Jenjang PAUD/TK, SD, SMP, hingga SMA.',
                'Menyediakan Sarana dan Prasarana Pendidikan yang Modern, Representatif, Boarding School Islami, dan Asri.',
                'Meningkatkan Kompetensi, Profesionalitas, dan Kesejahteraan Seluruh Tenaga Pendidik dan Kependidikan.',
                'Membangun Sinergi Kokoh dengan Orang Tua, Masyarakat, Pemerintah Daerah Kabupaten Muara Enim, dan JSIT Indonesia.',
            ];
            $data['tujuan'] = [
                'Mewujudkan Ekosistem Pendidikan Islam Terintegrasi Satu Atap di Kabupaten Muara Enim.',
                'Melahirkan Generasi Penghafal Al-Qur\'an yang Tangguh, Berwawasan Sains Teknologi, dan Sukses di Perguruan Tinggi.',
            ];
            $data['pengurus'] = [
                ['name' => 'Drs. H. Basuki Wiwoho', 'position' => 'Ketua Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/ust-basuki-wiwoho.webp', 'desc' => 'Memimpin dan mengayomi arah kebijakan strategis pengembangan seluruh unit pendidikan SIT Rabbani Muara Enim.'],
                ['name' => 'Sekretaris Yayasan', 'position' => 'Sekretaris Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'desc' => 'Mengelola tata kelola administrasi kelembagaan, regulasi, dan legalitas Yayasan Generasi Rabbani.'],
                ['name' => 'Bendahara Yayasan', 'position' => 'Bendahara Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/avatar-ustadzah.svg', 'desc' => 'Mengawasi perbendaharaan, transparansi finansial, dan tata kelola anggaran pembangunan yayasan.'],
                ['name' => 'Direktur Pendidikan & Penjamin Mutu', 'position' => 'Direktur Pendidikan', 'fraction' => 'Direktorat Yayasan', 'photo' => '/uploads/dewan/avatar-ustadz.svg', 'desc' => 'Mengoordinasikan kurikulum terpadu, standar mutu JSIT, dan pembinaan guru seluruh unit TK, SD, SMP, dan SMA.'],
            ];
            $data['pembina'] = [
                'Dewan Pembina Yayasan Generasi Rabbani Muara Enim',
                'Tokoh Pendidikan & Ulama Kabupaten Muara Enim',
            ];
            $data['pengawas'] = [
                'Dewan Pengawas Yayasan Generasi Rabbani Muara Enim',
            ];
        }

        return $data;
    }
}
