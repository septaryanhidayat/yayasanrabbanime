<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class UnitNewsPrestasiSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Kategori Berita & Prestasi per Unit
        $categoryData = [
            ['name' => 'Berita TKS IT Rabbani', 'slug' => 'berita-tk', 'description' => 'Kabar kegiatan, pembelajaran sentra, dan aktivitas anak TKS IT Rabbani Muara Enim.'],
            ['name' => 'Berita SDS IT Rabbani', 'slug' => 'berita-sd', 'description' => 'Kabar kegiatan, kurikulum terpadu, dan aktivitas siswa SDS IT Rabbani Muara Enim.'],
            ['name' => 'Berita SMPS IT Rabbani', 'slug' => 'berita-smp', 'description' => 'Kabar kegiatan, tahfidz, sains, dan aktivitas santri SMPS IT Rabbani Muara Enim.'],
            ['name' => 'Berita SMA IT Rabbani', 'slug' => 'berita-sma', 'description' => 'Kabar kegiatan, boarding school, bimbel SNBT, dan prestasi santri SMA IT Rabbani Muara Enim.'],
            ['name' => 'Kabar Yayasan Generasi Rabbani', 'slug' => 'kabar-yayasan', 'description' => 'Warta resmi perkembangan kampus terpadu dan kebijakan Yayasan Generasi Rabbani Muara Enim.'],
            ['name' => 'Prestasi TKS IT', 'slug' => 'prestasi-tk', 'description' => 'Capaian dan prestasi anak didik TKS IT Rabbani Muara Enim.'],
            ['name' => 'Prestasi SDS IT', 'slug' => 'prestasi-sd', 'description' => 'Capaian dan prestasi siswa SDS IT Rabbani Muara Enim.'],
            ['name' => 'Prestasi SMPS IT', 'slug' => 'prestasi-smp', 'description' => 'Capaian dan kejuaraan santri SMPS IT Rabbani Muara Enim.'],
            ['name' => 'Prestasi SMA IT', 'slug' => 'prestasi-sma', 'description' => 'Capaian kelulusan PTN, tahfidz, dan kejuaraan santri SMA IT Rabbani Muara Enim.'],
        ];

        $categories = [];
        foreach ($categoryData as $cat) {
            $categories[$cat['slug']] = Category::firstOrCreate(
                ['slug' => $cat['slug']],
                ['name' => $cat['name'], 'description' => $cat['description']]
            );
        }

        // 2. Berita & Artikel Spesifik TKS IT Rabbani
        $tkPosts = [
            [
                'title' => 'Keseruan Sentra Seni & Eksplorasi Motorik Anak TKS IT Rabbani Muara Enim',
                'slug' => 'keseruan-sentra-seni-dan-eksplorasi-motorik-tks-it-rabbani',
                'excerpt' => 'Anak-anak kelompok bermain TKS IT Rabbani antusias mengekspresikan imajinasi melalui jurnal gambar dan eksplorasi warna di sentra kreativitas.',
                'content' => '<p>Suasana riang gembira mewarnai aktivitas belajar di TKS Islam Terpadu Rabbani Muara Enim pada Sentra Seni dan Kreativitas. Didampingi para bunda pendidik yang ramah, anak-anak diajak menuangkan ide cerita melalui media gambar dan aneka teknik kreasi.</p><p>Pendekatan sentra usia dini memberikan ruang seluas-luasnya bagi anak untuk bereksplorasi secara merdeka, mengasah motorik halus, sekaligus menumbuhkan rasa percaya diri dan adab islami.</p>',
                'featured_image' => '/uploads/campus-sit-rabbani.webp',
                'category_slugs' => ['berita-tk'],
            ],
            [
                'title' => 'Pentas Ekspresi & Manasik Haji Cilik TKS IT Rabbani: Mengenal Rukun Islam Sejak Dini',
                'slug' => 'pentas-ekspresi-dan-manasik-haji-cilik-tks-it-rabbani',
                'excerpt' => 'Mengenalkan rukun Islam kelima dan adab tawaf sejak usia dini dalam peragaan Manasik Haji Cilik TKS IT Rabbani Muara Enim.',
                'content' => '<p>Ratusan ananda sholeh dan sholehah TKS IT Rabbani Muara Enim mengenakan pakaian ihram putih mengikuti peragaan <strong>Manasik Haji Cilik</strong> di halaman kampus terpadu Rabbani.</p><p>Kegiatan edukatif ini bertujuan mengenalkan tata cara ibadah haji, melatih kesabaran, serta menanamkan rasa cinta kepada baitullah sejak masa usia keemasan (golden age).</p>',
                'featured_image' => '/uploads/prestasi-sit-rabbani.webp',
                'category_slugs' => ['berita-tk'],
            ],
        ];

        // 3. Berita & Artikel Spesifik SDS IT Rabbani
        $sdPosts = [
            [
                'title' => 'Pelaksanaan ANBK SDS IT Rabbani di Laboratorium Komputer Berlangsung Tertib & Lancar',
                'slug' => 'pelaksanaan-anbk-sds-it-rabbani-berlangsung-sukses',
                'excerpt' => 'Siswa kelas 5 SDS IT Rabbani Muara Enim sukses menyelesaikan Asesmen Nasional Berbasis Komputer (ANBK) dengan fasilitas laboratorium komputer modern.',
                'content' => '<p>Pelaksanaan Asesmen Nasional Berbasis Komputer (ANBK) di SDS Islam Terpadu Rabbani Muara Enim berjalan tertib, aman, dan tanpa kendala teknis. Siswa kelas 5 mengikuti seluruh sesi literasi membaca dan numerasi di ruang laboratorium komputer sekolah.</p><p>Dengan fasilitas komputer modern dan jaringan internet yang memadai, para siswa dapat mengerjakan instrumen asesmen dengan tenang dan penuh rasa percaya diri.</p>',
                'featured_image' => '/uploads/prestasi-sit-rabbani.webp',
                'category_slugs' => ['berita-sd'],
            ],
            [
                'title' => 'Program Munaqosah Tahfidz 2 Juz Mutqin SDS IT Rabbani Cetak Generasi Penjaga Al-Qur\'an',
                'slug' => 'program-munaqosah-tahfidz-2-juz-mutqin-sds-it-rabbani',
                'excerpt' => 'Uji publik hafalan Al-Qur\'an Juz 30 dan 29 mutqin bersanad bagi siswa sekolah dasar di SDS IT Rabbani Muara Enim.',
                'content' => '<p>SDS IT Rabbani menyelenggarakan agenda tahunan <strong>Munaqosah dan Uji Publik Tahfidz Al-Qur\'an</strong>. Di hadapan dewan penguji dan orang tua wali, puluhan santri cilik membuktikan kelancaran hafalan juz 30 dan 29 dengan bacaan tartil sesuai kaidah tajwid.</p>',
                'featured_image' => '/uploads/tahfidz-sit-rabbani.webp',
                'category_slugs' => ['berita-sd'],
            ],
        ];

        // 4. Berita & Artikel Spesifik SMPS IT Rabbani
        $smpPosts = [
            [
                'title' => 'Peringatan Hari Pramuka & Kemah Bakti Santri SMPS IT Rabbani Muara Enim',
                'slug' => 'peringatan-hari-pramuka-dan-kemah-bakti-santri-smps-it-rabbani',
                'excerpt' => 'Membangun karakter tangguh, disiplin, dan persaudaraan islami melalui perkemahan kepanduan SIT SMPS IT Rabbani Muara Enim.',
                'content' => '<p>Gugus Depan Satuan Komunitas Pramuka Sekolah Islam Terpadu SMPS IT Rabbani Muara Enim sukses menggelar Perkemahan Karakter dan Lomba Kepanduan. Santri dilatih keterampilan pioneering, navigasi kompas, sandi morse, serta pengabdian masyarakat sekitar kampus.</p>',
                'featured_image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                'category_slugs' => ['berita-smp'],
            ],
            [
                'title' => 'Eksplorasi Sains & Praktikum Laboratorium IPA Terpadu Santri SMPS IT Rabbani',
                'slug' => 'eksplorasi-sains-dan-praktikum-laboratorium-ipa-smps-it-rabbani',
                'excerpt' => 'Mengasah nalar kritis dan kecintaan sains melalui kegiatan eksperimen mikroskopi dan reaksi kimia ramah lingkungan.',
                'content' => '<p>Santri SMPS IT Rabbani secara antusias mempraktikkan pengamatan sel biologi dan pengukuran fisika di laboratorium terpadu. Pembelajaran berbasis inkuiri sains melatih siswa memecahkan masalah berbasis pembuktian empiris yang selaras dengan tadabbur alam semesta ciptaan Allah SWT.</p>',
                'featured_image' => '/uploads/campus-smpit-rabbani.webp',
                'category_slugs' => ['berita-smp'],
            ],
        ];

        // 5. Berita & Artikel Spesifik SMA IT Rabbani
        $smaPosts = [
            [
                'title' => 'Bangga! 88% Lulusan SMA IT Rabbani Sukses Menembus Perguruan Tinggi Negeri Favorit',
                'slug' => 'bangga-88-persen-lulusan-sma-it-rabbani-tembus-ptn-favorit',
                'excerpt' => 'Melalui bimbingan SNBT gratis dan pembinaan akademik intensif, mayoritas alumni angkatan SMA IT Rabbani diterima di berbagai PTN unggulan.',
                'content' => '<p>Kabar membanggakan datang dari SMA IT Rabbani Muara Enim. Sebanyak <strong>88% alumni lulusan berhasil lolos seleksi masuk Perguruan Tinggi Negeri (PTN)</strong> favorit melalui berbagai jalur (SNBP, SNBT, dan Jalur Prestasi Mandiri).</p><p>Keberhasilan ini membuktikan efektivitas program Bimbingan Belajar SNBT Gratis yang terintegrasi langsung dalam kurikulum pembelajaran SMA IT Rabbani bersama program penguatan tahfidz Al-Qur\'an minimal 1 juz mutqin.</p>',
                'featured_image' => '/uploads/flyer-spmb-smait-rabbani.webp',
                'category_slugs' => ['berita-sma'],
            ],
            [
                'title' => 'Kultur Asrama Boarding School SMA IT Rabbani: Bentuk Kemandirian, Disiplin, & Ukhuwah',
                'slug' => 'kultur-asrama-boarding-school-sma-it-rabbani-muara-enim',
                'excerpt' => 'Mengenal keseharian santri asrama SMA IT Rabbani dari sholat tahajud, halaqah Qur\'an, hingga literasi digital modern.',
                'content' => '<p>Kehidupan asrama di SMA IT Rabbani Muara Enim dirancang untuk mencetak generasi pemimpin masa depan yang kokoh imannya dan luas wawasannya. Di bawah bimbingan musyrif dan musyrifah 24 jam, santri membiasakan sholat berjamaah 5 waktu, qiyamul lail, dzikir pagi-petang, serta pendalaman kitab dan bahasa internasional.</p>',
                'featured_image' => '/uploads/campus-smait-rabbani.webp',
                'category_slugs' => ['berita-sma'],
            ],
        ];

        $allUnitPosts = array_merge($tkPosts, $sdPosts, $smpPosts, $smaPosts);
        foreach ($allUnitPosts as $pData) {
            $catSlugs = $pData['category_slugs'];
            $post = Post::updateOrCreate(
                ['slug' => $pData['slug']],
                [
                    'title' => $pData['title'],
                    'excerpt' => $pData['excerpt'],
                    'content' => $pData['content'],
                    'featured_image' => $pData['featured_image'],
                    'status' => 'publish',
                    'type' => 'post',
                    'views_count' => rand(250, 950),
                    'published_at' => now()->subDays(rand(1, 14)),
                ]
            );

            $syncIds = [];
            foreach ($catSlugs as $cSlug) {
                if (isset($categories[$cSlug])) {
                    $syncIds[] = $categories[$cSlug]->id;
                }
            }
            if (! empty($syncIds)) {
                $post->categories()->sync($syncIds);
            }
        }

        // 6. GENERATE DATA PRESTASI SANTRI / SISWA (TK, SD, SMP, SMA)
        $prestasiItems = [
            // TK
            [
                'title' => 'Juara 1 Lomba Mewarnai Tingkat PAUD/TK se-Kabupaten Muara Enim',
                'slug' => 'juara-1-lomba-mewarnai-paud-tk-kabupaten-muara-enim',
                'excerpt' => 'Ananda Aisyah Humaira dari TKS IT Rabbani berhasil meraih Juara 1 dalam Lomba Mewarnai Tingkat Kabupaten Muara Enim.',
                'content' => '<p>Prestasi membanggakan ditorehkan oleh ananda <strong>Aisyah Humaira</strong>, siswi kelompok TK B TKS Islam Terpadu Rabbani Muara Enim yang sukses meraih <strong>Juara 1 Lomba Mewarnai</strong> pada Gebyar PAUD tingkat Kabupaten Muara Enim.</p>',
                'featured_image' => '/uploads/campus-sit-rabbani.webp',
                'category_slug' => 'prestasi-tk',
                'unit' => 'tk',
            ],
            [
                'title' => 'Juara 1 Lomba Tahfidz Cilik Surat Pendek Festival Anak Sholeh Muara Enim',
                'slug' => 'juara-1-lomba-tahfidz-cilik-festival-anak-sholeh-muara-enim',
                'excerpt' => 'M. Fatih Al-Farabi mengharumkan nama TKS IT Rabbani dengan meraih Juara 1 Tahfidz Cilik Juz 30.',
                'content' => '<p>Ananda <strong>M. Fatih Al-Farabi</strong> dari TKS IT Rabbani Muara Enim berhasil meraih <strong>Juara 1 Lomba Tahfidz Cilik</strong> dalam ajang Festival Anak Sholeh Kabupaten Muara Enim dengan kelancaran hafalan dan makhraj yang fasih.</p>',
                'featured_image' => '/uploads/tahfidz-sit-rabbani.webp',
                'category_slug' => 'prestasi-tk',
                'unit' => 'tk',
            ],

            // SD
            [
                'title' => 'Juara 1 Olimpiade Sains Nasional (OSN) Bidang IPA SD se-Kabupaten Muara Enim',
                'slug' => 'juara-1-olimpiade-sains-nasional-ipa-sd-kabupaten-muara-enim',
                'excerpt' => 'Siswa SDS IT Rabbani Muara Enim sukses menorehkan prestasi puncak sebagai Juara 1 OSN IPA Tingkat Kabupaten.',
                'content' => '<p>Prestasi gemilang kembali diraih oleh keluarga besar SDS Islam Terpadu Rabbani Muara Enim. Siswa atas nama <strong>Muhammad Rayhan</strong> sukses menyabet gelar <strong>Juara 1 Olimpiade Sains Nasional (OSN)</strong> bidang IPA tingkat Kabupaten Muara Enim.</p>',
                'featured_image' => '/uploads/prestasi-sit-rabbani.webp',
                'category_slug' => 'prestasi-sd',
                'unit' => 'sd',
            ],
            [
                'title' => 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 2 Juz Tingkat Pelajar Muara Enim',
                'slug' => 'juara-1-mhq-2-juz-tingkat-pelajar-muara-enim',
                'excerpt' => 'Khadijah Azzahra membuktikan kualitas hafalan Qur\'an SDS IT Rabbani dengan meraih Juara 1 MHQ 2 Juz.',
                'content' => '<p>Santriwati SDS IT Rabbani Muara Enim, <strong>Khadijah Azzahra</strong>, sukses meraih predikat <strong>Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) Cabang 2 Juz</strong> pada kejuaraan pelajar Kabupaten Muara Enim.</p>',
                'featured_image' => '/uploads/tahfidz-sit-rabbani.webp',
                'category_slug' => 'prestasi-sd',
                'unit' => 'sd',
            ],

            // SMP
            [
                'title' => 'Juara 1 English Speech & Story Telling Tingkat SMP se-Kabupaten Muara Enim',
                'slug' => 'juara-1-english-speech-story-telling-smp-muara-enim',
                'excerpt' => 'Santri SMPS IT Rabbani Muara Enim meraih Juara 1 Lomba Pidato Bahasa Inggris bergengsi tingkat kabupaten.',
                'content' => '<p>Kemampuan berbahasa asing santri SMPS IT Rabbani kembali diakui. Santri SMPS IT Rabbani berhasil meraih <strong>Juara 1 English Speech Competition</strong> pada Festival Bahasa Pelajar Kabupaten Muara Enim.</p>',
                'featured_image' => '/uploads/campus-smpit-rabbani.webp',
                'category_slug' => 'prestasi-smp',
                'unit' => 'smp',
            ],
            [
                'title' => 'Juara Umum Perkemahan Pramuka SIT se-Kabupaten Muara Enim',
                'slug' => 'juara-umum-perkemahan-pramuka-sit-muara-enim',
                'excerpt' => 'Regu Pramuka SIT SMPS IT Rabbani memborong piala dan meraih trofi Juara Umum Kepanduan.',
                'content' => '<p>Regu Pandu SIT SMPS IT Rabbani Muara Enim berhasil mengukir sejarah dengan dinobatkan sebagai <strong>Juara Umum</strong> dalam Perkemahan Sekolah Islam Terpadu se-Kabupaten Muara Enim.</p>',
                'featured_image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                'category_slug' => 'prestasi-smp',
                'unit' => 'smp',
            ],

            // SMA
            [
                'title' => 'Pencapaian Gemilang: 88% Lulusan SMA IT Rabbani Diterima di PTN & Kampus Unggulan',
                'slug' => 'pencapaian-gemilang-88-persen-lulusan-sma-it-rabbani-diterima-ptn',
                'excerpt' => 'Sebanyak 88% santri SMA IT Rabbani Muara Enim berhasil lolos menembus perguruan tinggi negeri favorit di Indonesia.',
                'content' => '<p>Sebuah kebanggaan besar bagi civitas akademika SMA IT Rabbani Muara Enim karena <strong>88% lulusan angkatan terbukti sukses menembus Perguruan Tinggi Negeri (PTN)</strong> favorit, didukung program Bimbel SNBT gratis dan pembinaan karir siswa.</p>',
                'featured_image' => '/uploads/flyer-spmb-smait-rabbani.webp',
                'category_slug' => 'prestasi-sma',
                'unit' => 'sma',
            ],
            [
                'title' => 'Juara 1 Kejuaraan Pencak Silat Tapak Suci Pelajar Tingkat Kabupaten Muara Enim',
                'slug' => 'juara-1-kejuaraan-pencak-silat-tapak-suci-pelajar-muara-enim',
                'excerpt' => 'Santri SMA IT Rabbani menorehkan prestasi gemilang dengan menyabet Medali Emas Tapak Suci.',
                'content' => '<p>Santri SMA IT Rabbani Muara Enim sukses memboyong <strong>Medali Emas Juara 1</strong> pada Kejuaraan Pencak Silat Tapak Suci antarpelajar se-Kabupaten Muara Enim pada kategori tanding putra.</p>',
                'featured_image' => '/uploads/kegiatan-pramuka-rabbani.webp',
                'category_slug' => 'prestasi-sma',
                'unit' => 'sma',
            ],
            [
                'title' => 'Juara 1 Turnamen Bola Voli Antar SMA/SMK se-Kabupaten Muara Enim',
                'slug' => 'juara-1-turnamen-bola-voli-antar-sma-muara-enim',
                'excerpt' => 'Tim Voli SMA IT Rabbani keluar sebagai Juara Pertama dalam turnamen olahraga pelajar tahunan.',
                'content' => '<p>Kekompakan tim bola voli SMA IT Rabbani Muara Enim membuahkan hasil membanggakan dengan merebut gelar <strong>Juara 1</strong> setelah melalui babak final sengit di hadapan ratusan penonton.</p>',
                'featured_image' => '/uploads/campus-smait-rabbani.webp',
                'category_slug' => 'prestasi-sma',
                'unit' => 'sma',
            ],
        ];

        foreach ($prestasiItems as $item) {
            $post = Post::updateOrCreate(
                ['slug' => $item['slug']],
                [
                    'title' => $item['title'],
                    'excerpt' => $item['excerpt'],
                    'content' => $item['content'],
                    'featured_image' => $item['featured_image'],
                    'status' => 'publish',
                    'type' => 'prestasi',
                    'views_count' => rand(300, 1500),
                    'published_at' => now()->subDays(rand(2, 45)),
                ]
            );

            if (isset($categories[$item['category_slug']])) {
                $post->categories()->sync([$categories[$item['category_slug']]->id]);
            }
        }

        // 7. PPDB Settings
        Setting::set('ppdb_youtube_id', 'ULMekhqxvqU');
        Setting::set('ppdb_video_title', 'Video Profil SIT Rabbani Muara Enim');
        Setting::set('ppdb_video_desc', 'Saksikan profil resmi, haflah akbar, dan aktivitas belajar santri SIT Rabbani Muara Enim.');

        Setting::set('ppdb_boarding', 'Tersedia Program Boarding School (Asrama Pesantren) untuk SMA IT Rabbani dan Full Day School untuk seluruh jenjang: TK IT, SD IT, SMP IT, dan SMA IT Rabbani Muara Enim dengan integrasi kurikulum nasional, kurikulum khas JSIT, sholat berjamaah, tahfidz bersanad, dan bimbingan SNBT Gratis.');
        Setting::set('ppdb_form_programs', "Boarding School (Asrama Pesantren)\nFull Day School (Sekolah Terpadu)\nReguler");
    }
}
