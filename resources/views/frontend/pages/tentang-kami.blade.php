@extends('layouts.frontend')

@php
    $activeKey = in_array($currentUnitKey, ['yayasan', 'tk', 'sd', 'smp', 'sma']) ? $currentUnitKey : 'yayasan';
    $profileMap = [
        'yayasan' => [
            'key' => 'yayasan',
            'title' => 'Profil Yayasan Generasi Rabbani Muara Enim',
            'sub' => 'Lembaga Penyelenggara Pendidikan Islam Terpadu Satu Atap (TKS IT • SDS IT • SMPS IT • SMA IT)',
            'leader_title' => 'Ketua Yayasan',
            'leader_name' => 'Drs. H. Basuki Wiwoho',
            'leader_photo' => '/uploads/dewan/ust-basuki-wiwoho.webp',
            'heading_sambutan' => 'Mewujudkan Ekosistem Pendidikan Islam Terpadu Satu Atap di Kabupaten Muara Enim',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Yayasan Generasi Rabbani Muara Enim hadir dengan komitmen kokoh menyelenggarakan pendidikan Islam terpadu satu atap yang berkesinambungan mulai dari jenjang TKS IT Rabbani, SDS IT Rabbani, SMPS IT Rabbani, hingga SMA IT Rabbani Boarding School. Kami memadukan keluhuran nilai Al-Qur'an dan as-Sunnah dengan keunggulan sains teknologi, bahasa global, dan adab islami untuk melahirkan generasi robbani yang cerdas, mandiri, dan berakhlak mulia.",
            'sambutan_url' => route('page.sambutan.yayasan'),
            'sejarah_title' => 'Sejarah Berdirinya Yayasan Generasi Rabbani Muara Enim',
            'sejarah_sub' => 'Membangun Peradaban Pendidikan Islam di Kabupaten Muara Enim',
            'sejarah_text1' => 'Yayasan Generasi Rabbani didirikan di Muara Enim atas inisiatif para alim ulama dan tokoh pendidikan Islam di Kabupaten Muara Enim yang mendambakan hadirnya institusi pendidikan Islam terpadu yang bermutu tinggi, berwawasan global, namun tetap berakar kuat pada nilai-nilai tradisi keislaman.',
            'sejarah_text2' => 'Secara bertahap, Yayasan Generasi Rabbani merintis satuan pendidikan terpadu: diawali dengan TKS IT Rabbani, SDS IT Rabbani, SMPS IT Rabbani, hingga SMA IT Rabbani Boarding School. Kini, dalam naungan kampus terpadu SIT Rabbani di Muara Enim, seluruh unit bersinergi mewujudkan pendidikan Islam modern, berkarakter robbani, dan berprestasi unggul.',
            'sejarah_url' => route('page.sejarah.yayasan'),
            'campus_photo' => '/uploads/campus-sit-rabbani.webp',
            'badge' => 'YAYASAN GENERASI RABBANI',
            'fasilitas_url' => route('bidang.index'),
            'dewan_url' => route('page.struktur.yayasan'),
            'visi' => 'Menjadi Yayasan Pendidikan Islam Terkemuka yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berakhlak Mulia, dan Unggul Menghadapi Era Global.',
            'misi' => [
                'Menyelenggarakan pendidikan Islam terpadu yang berkualitas dari jenjang PAUD/TK, SD, SMP, hingga SMA.',
                'Menyediakan sarana dan prasarana pendidikan yang modern, representatif, islami, dan asri.',
                'Meningkatkan kompetensi, profesionalitas, dan kesejahteraan seluruh tenaga pendidik dan kependidikan.',
                'Membangun sinergi kokoh dengan orang tua, masyarakat, pemerintah, dan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia.',
            ],
        ],
        'tk' => [
            'key' => 'tk',
            'title' => 'Profil TKS Islam Terpadu Rabbani Muara Enim',
            'sub' => 'PAUD / TK Islam Terpadu (NPSN: 10647514 • Terakreditasi B)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Kepala TKS IT Rabbani',
            'leader_photo' => '/uploads/dewan/avatar-default.svg',
            'heading_sambutan' => 'Mendidik dengan Sepenuh Kasih Membentuk Generasi Kreatif & Mandiri',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di TKS IT Rabbani Muara Enim. Kami mendidik ananda usia emas (golden age) dengan pendekatan sentra dan Joyful Learning yang berkesadaran, bermakna, dan menggembirakan. Melalui sentra bermain peran, ibadah harian, tahfidz cilik Juz 30, serta bimbingan penuh kasih sayang dari para bunda ustadzah, kami memfasilitasi setiap ananda agar tumbuh percaya diri, ceria, dan beradab islami sejak dini.",
            'sambutan_url' => route('unit.sambutan', 'tk'),
            'sejarah_title' => 'Sejarah Berdirinya TKS Islam Terpadu Rabbani',
            'sejarah_sub' => 'Merintis Pendidikan Anak Usia Dini Berkarakter Islami di Muara Enim',
            'sejarah_text1' => 'TKS IT Rabbani didirikan di bawah naungan Yayasan Generasi Rabbani Muara Enim (NPSN: 10647514). Berdiri di atas komitmen menghadirkan wadah PAUD/TK berkualitas tinggi yang berlandaskan nilai-nilai keislaman dan pembiasaan adab nabawi sejak usia keemasan.',
            'sejarah_text2' => 'Dengan kurikulum sentra dan pendekatan joyful learning, TKS IT Rabbani telah terakreditasi B dan menjadi pilihan utama orang tua di Muara Enim dalam meletakkan fondasi akhlak, kemandirian, dan kecintaan pada Al-Qur\'an bagi buah hati tercinta.',
            'sejarah_url' => route('unit.sejarah', 'tk'),
            'campus_photo' => '/uploads/prestasi-sit-rabbani.webp',
            'badge' => 'PAUD / TK ISLAM TERPADU',
            'fasilitas_url' => route('unit.fasilitas', 'tk'),
            'dewan_url' => route('unit.dewan', 'tk'),
            'visi' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.',
            'misi' => [
                'Membiasakan ibadah harian: Sholat Dhuha, Doa harian, Muroja\'ah hafalan surat pendek, hadits, dan infaq Jumat.',
                'Membentuk karakter yang berakhlak karimah melalui kegiatan sosial dan kepedulian berbagi.',
                'Mengembangkan daya imajinasi melalui bermain peran, sentra seni, kreativitas, dan eksplorasi lingkungan.',
                'Menumbuhkan rasa percaya diri, kemandirian, dan kebiasaan hidup bersih sehat dan gembira.',
            ],
        ],
        'sd' => [
            'key' => 'sd',
            'title' => 'Profil SDS Islam Terpadu Rabbani Muara Enim',
            'sub' => 'Sekolah Dasar Islam Terpadu (NPSN: 10648045 • Terakreditasi B)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Kepala SDS IT Rabbani',
            'leader_photo' => '/uploads/dewan/avatar-default.svg',
            'heading_sambutan' => 'Membentuk Generasi Rabbani Berprestasi, Sholeh, Inovatif dan Mandiri',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di SDS IT Rabbani Muara Enim. Kami memadukan Kurikulum Nasional dengan kurikulum kekhasan JSIT untuk menumbuhkan kecintaan pada Al-Qur'an dengan target mutqin, penguasaan hadits adab, pembekalan sains dan komputer sejak dini, serta pembiasaan sholat berjamaah yang membekas sepanjang hayat.",
            'sambutan_url' => route('unit.sambutan', 'sd'),
            'sejarah_title' => 'Sejarah Berdirinya SDS Islam Terpadu Rabbani',
            'sejarah_sub' => 'Pilar Pendidikan Dasar Satuan Pendidikan SIT Rabbani',
            'sejarah_text1' => 'SDS IT Rabbani didirikan (NPSN: 10648045) sebagai unit sekolah dasar di bawah Yayasan Generasi Rabbani Muara Enim. Bermula dari kelas rintisan yang didorong oleh antusiasme masyarakat akan pendidikan dasar bernuansa islami.',
            'sejarah_text2' => 'Kini SDS IT Rabbani telah berkembang pesat menjadi sekolah dasar unggulan di Kabupaten Muara Enim dengan tenaga pendidik profesional terakreditasi B BAN-SM, mencatatkan berbagai prestasi di olimpiade sains, tahfidz Qur\'an, dan kepanduan.',
            'sejarah_url' => route('unit.sejarah', 'sd'),
            'campus_photo' => '/uploads/campus-sit-rabbani.webp',
            'badge' => 'SEKOLAH DASAR ISLAM TERPADU',
            'fasilitas_url' => route('unit.fasilitas', 'sd'),
            'dewan_url' => route('unit.dewan', 'sd'),
            'visi' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.',
            'misi' => [
                'Membangun atmosfer belajar yang islami dan menyenangkan bagi seluruh siswa.',
                'Menumbuhkan hafalan Al-Qur\'an mutqin bersanad dan hadits adab.',
                'Membangun kepercayaan diri, kreativitas, dan daya nalar ilmiah siswa.',
                'Mengembangkan budaya belajar untuk belajar dan menguasai dasar-dasar TIK modern.',
            ],
        ],
        'smp' => [
            'key' => 'smp',
            'title' => 'Profil SMPS Islam Terpadu Rabbani Muara Enim',
            'sub' => 'Sekolah Menengah Pertama Islam Terpadu (NPSN: 69920340 • Full Day School)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Kepala SMPS IT Rabbani',
            'leader_photo' => '/uploads/dewan/avatar-default.svg',
            'heading_sambutan' => 'Mendidik Generasi Qur\'ani yang Cerdas, Mandiri, Inovatif & Visioner',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di portal resmi SMPS IT Rabbani Muara Enim. Menjawab tantangan global dan era digital, kami menyajikan pendidikan menengah pertama Full Day School yang memadukan hafalan Al-Qur'an bersanad, pembinaan adab melalui Bina Pribadi Islam (BPI), sains teknologi modern, serta dwibahasa (Arab dan Inggris). Setiap siswa dipersiapkan menjadi pemimpin masa depan yang berwawasan luas dan berakhlakul karimah.",
            'sambutan_url' => route('unit.sambutan', 'smp'),
            'sejarah_title' => 'Sejarah Berdirinya SMPS Islam Terpadu Rabbani',
            'sejarah_sub' => 'Melanjutkan Estafet Pendidikan Islam Terpadu Berkualitas di Muara Enim',
            'sejarah_text1' => 'SMPS IT Rabbani didirikan (NPSN: 69920340) guna menjawab kebutuhan alumni SDIT dan masyarakat Kabupaten Muara Enim akan kelanjutan jenjang sekolah menengah pertama Islam terpadu yang bermutu tinggi.',
            'sejarah_text2' => 'Menerapkan Kurikulum Nasional terintegrasi JSIT dengan program Full Day School, SMPS IT Rabbani berfokus pada kematangan spiritual, laboratorium sains modern, literasi digital, dan pembinaan karakter remaja Qur\'ani.',
            'sejarah_url' => route('unit.sejarah', 'smp'),
            'campus_photo' => '/uploads/campus-smpit-rabbani.webp',
            'badge' => 'SEKOLAH MENENGAH PERTAMA IT',
            'fasilitas_url' => route('unit.fasilitas', 'smp'),
            'dewan_url' => route('unit.dewan', 'smp'),
            'visi' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Moderat Berbekal Ilmu Pengetahuan dan Teknologi.',
            'misi' => [
                'Membangun atmosfer belajar yang islami, ilmiah, dan berdaya saing global.',
                'Melahirkan penghafal Al-Qur\'an yang mutqin, tartil, dan memahami maknanya.',
                'Terdepan dalam penguasaan Bahasa Arab, Bahasa Inggris, Matematika, dan Sains.',
                'Membina kepemimpinan pemuda islam yang tangguh, amanah, dan moderat.',
            ],
        ],
        'sma' => [
            'key' => 'sma',
            'title' => 'Profil SMA Islam Terpadu Rabbani Muara Enim',
            'sub' => 'SMA IT Boarding School (NPSN: 70010515 • Terakreditasi B • Bimbel SNBT Gratis)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Kepala SMA IT Rabbani',
            'leader_photo' => '/uploads/dewan/avatar-default.svg',
            'heading_sambutan' => 'Mencetak Pemimpin Masa Depan Berkarakter Qur\'ani & Berdaya Saing Global',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di portal resmi SMA IT Rabbani Muara Enim. Kami menyelenggarakan pendidikan menengah atas terpadu berbasis Boarding School (Asrama Pesantren) dan Full Day School. Didukung fasilitas asrama modern, bimbingan SNBT PTN gratis, target hafalan Al-Qur'an mutqin (88% lulusan tercapai), dan 8 pilihan ekstrakurikuler prestasi, kami berkomitmen menghantarkan santri menuju gerbang kesuksesan dunia dan akhirat.",
            'sambutan_url' => route('unit.sambutan', 'sma'),
            'sejarah_title' => 'Sejarah Berdirinya SMA Islam Terpadu Rabbani',
            'sejarah_sub' => 'Menghadirkan Pesantren Modern & Keunggulan Akademik Masuk PTN',
            'sejarah_text1' => 'SMA IT Rabbani Muara Enim (NPSN: 70010515) didirikan di bawah naungan Yayasan Generasi Rabbani Muara Enim untuk menjawab kebutuhan masyarakat akan jenjang lanjutan setingkat SMA yang memadukan keunggulan tahfidz asrama dan keberhasilan masuk PTN.',
            'sejarah_text2' => 'Dengan pembinaan musyrif 24 jam, kurikulum nasional terintegrasi JSIT, dan bimbingan belajar SNBT intensif, SMA IT Rabbani terbukti mencatatkan 88% lulusannya diterima di berbagai Perguruan Tinggi Negeri terkemuka.',
            'sejarah_url' => route('unit.sejarah', 'sma'),
            'campus_photo' => '/uploads/campus-smait-rabbani.webp',
            'badge' => 'SMA IT BOARDING SCHOOL',
            'fasilitas_url' => route('unit.fasilitas', 'sma'),
            'dewan_url' => route('unit.dewan', 'sma'),
            'visi' => 'Mewujudkan Generasi Pemimpin Masa Depan yang Berkarakter Qur\'ani, Berprestasi Global, dan Sukses Masuk PTN.',
            'misi' => [
                'Membina hafalan Al-Qur\'an minimal 1 juz mutqin bersanad bagi seluruh santri.',
                'Menyelenggarakan program Bimbingan Belajar SNBT Gratis untuk menembus PTN favorit.',
                'Membentuk kultur asrama pesantren yang disiplin, mandiri, dan berakhlakul karimah.',
                'Mengembangkan potensi kepemimpinan dan minat bakat melalui 8 ekstrakurikuler pilihan.',
            ],
        ],
    ];
    $info = $profileMap[$activeKey] ?? $profileMap['yayasan'];
@endphp

@section('title', $info['title'] . ' - SIT Rabbani')
@section('meta_description', $info['sub'])

@section('content')
{{-- HERO HEADER & BREADCRUMB --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">{{ $info['leader_title'] }} &amp; Profil</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $info['title'] }}</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light">
            {{ $info['sub'] }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-10 sm:space-y-14">

    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('page.tentang.yayasan') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan Generasi Rabbani
        </a>
        <a href="{{ route('unit.tentang-kami', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Rabbani
        </a>
        <a href="{{ route('unit.tentang-kami', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Rabbani
        </a>
        <a href="{{ route('unit.tentang-kami', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Rabbani
        </a>
        <a href="{{ route('unit.tentang-kami', 'sma') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sma' ? 'bg-purple-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-purple-50' }}">
            <i class="fa-solid fa-user-graduate text-purple-500 mr-1.5"></i> SMA IT Rabbani
        </a>
    </div>

    {{-- SEKSI UTAMA: PROFIL SEKOLAH / YAYASAN DARI DASHBOARD ADMIN JIKA ADA --}}
    @if(!empty($page?->content) && strlen(trim(strip_tags($page?->content ?? ''))) > 20 && !str_contains($page?->title, 'SMPS IT Rabbani Muara Enim'))
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="border-b border-gray-100 pb-5 mb-8">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Identitas &amp; Profil Resmi</span>
            <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                {{ $page?->title ?? $info['title'] }}
            </h2>
            <div class="w-16 h-1 bg-emerald-600 rounded-full mt-3"></div>
        </div>

        <div class="prose-content text-gray-700 text-sm sm:text-base leading-relaxed space-y-6">
            {!! $page?->content !!}
        </div>
    </section>
    @endif

    {{-- SEKSI 1: SAMBUTAN PIMPINAN --}}
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 items-center">
            <div class="lg:col-span-4 flex justify-center">
                <div class="w-48 h-64 sm:w-60 sm:h-76 rounded-2xl overflow-hidden shadow-xl border-4 border-white ring-4 ring-indigo-100 bg-indigo-50 relative group">
                    <img src="{{ $info['leader_photo'] }}" alt="{{ $info['leader_name'] }} - {{ $info['leader_title'] }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white text-center sm:text-left">
                        <span class="block text-xs sm:text-sm font-extrabold">{{ $info['leader_name'] }}</span>
                        <span class="block text-[11px] text-amber-300">{{ $info['leader_title'] }}</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 space-y-4 text-center lg:text-left">
                <div class="inline-flex items-center space-x-2 bg-indigo-100 text-indigo-800 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-user-tie text-indigo-600"></i>
                    <span>Sambutan {{ $info['leader_title'] }}</span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    {{ $info['heading_sambutan'] }}
                </h2>
                <div class="w-16 h-1 bg-indigo-600 rounded-full mx-auto lg:mx-0"></div>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['text_sambutan'] }}
                </p>
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="{{ $info['sambutan_url'] }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl text-xs font-bold shadow-md hover:shadow-lg transition">
                        <span>Baca Sambutan Lengkap</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-[11px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 2: SEJARAH & JEJAK LANGKAH --}}
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 items-center">
            <div class="lg:col-span-7 space-y-4 order-2 lg:order-1 text-center lg:text-left">
                <div class="inline-flex items-center space-x-2 bg-amber-100 text-amber-900 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-landmark"></i>
                    <span>Jejak Langkah &amp; Sejarah</span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    {{ $info['sejarah_title'] }}
                </h2>
                <span class="block text-xs sm:text-sm font-semibold text-emerald-600">{{ $info['sejarah_sub'] }}</span>
                <div class="w-16 h-1 bg-emerald-600 rounded-full mx-auto lg:mx-0"></div>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['sejarah_text1'] }}
                </p>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['sejarah_text2'] }}
                </p>
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="{{ $info['sejarah_url'] }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-gray-900 hover:bg-black text-white px-6 py-3 rounded-xl text-xs font-bold shadow-md hover:shadow-lg transition">
                        <span>Baca Sejarah Lengkap</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-[11px]"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center">
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 max-h-80 bg-gray-50 w-full">
                    <img src="{{ $info['campus_photo'] }}" alt="{{ $info['title'] }}" class="w-full h-full object-cover object-center" onerror="this.onerror=null; this.src='/uploads/campus-sit-rabbani.webp'">
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 3: QUICK CARDS FASILITAS, AGENDA & DEWAN GURU --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        {{-- Card 1: Fasilitas --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Sarana &amp; Prasarana</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">Fasilitas Belajar Modern</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Ruang kelas representatif ber-AC, laboratorium komputer multimedia, laboratorium IPA, perpustakaan terpadu, sarana olahraga, dan masjid kampus.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ $info['fasilitas_url'] }}" class="inline-flex items-center text-xs font-bold text-indigo-600 hover:text-emerald-600">
                    <span>Lihat Fasilitas Lengkap</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 2: Agenda --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up delay-1">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block">Kalender Pendidikan</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">Agenda &amp; Kegiatan</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Jadwal SPMB, wisuda akbar khotmil Qur'an, kemah kepanduan Pramuka SIT, olimpiade sains, dan kegiatan belajar mengajar aktif.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ route('agenda.index') }}" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-800">
                    <span>Lihat Agenda Sekolah</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 3: Dewan Guru / Tata Kelola --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up delay-2">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider block">Tenaga Pendidik &amp; GTK</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">{{ $activeKey === 'yayasan' ? 'Struktur Kepengurusan' : 'Dewan Guru & GTK' }}</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Para asatidz dan pendidik profesional berkualifikasi sarjana & magister yang berdedikasi membimbing kecerdasan dan akhlak santri.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ $info['dewan_url'] }}" class="inline-flex items-center text-xs font-bold text-emerald-700 hover:text-indigo-800">
                    <span>Lihat Struktur &amp; Guru</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- SEKSI 4: VISI DAN MISI --}}
    <section class="bg-white rounded-3xl p-6 sm:p-10 md:p-12 shadow-xl border border-gray-100 reveal-fade-up space-y-8">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Pedoman Pendidikan &amp; Haluan Mulia</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                Visi dan Misi {{ $info['title'] }}
            </h2>
            <div class="w-16 h-1 bg-emerald-600 mx-auto rounded-full mt-3"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {{-- Card Visi --}}
            <div class="bg-gradient-to-br from-indigo-50/70 to-blue-50/70 p-6 sm:p-8 rounded-3xl border border-indigo-100 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-base shadow">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900">Visi Utama</h3>
                    </div>
                    <blockquote class="text-sm sm:text-base text-gray-800 italic leading-relaxed border-l-4 border-indigo-600 pl-4 font-serif">
                        "{{ $info['visi'] }}"
                    </blockquote>
                </div>
                <div class="pt-2">
                    <a href="{{ $activeKey === 'yayasan' ? route('page.visi-misi.yayasan') : route('unit.visi-misi', $activeKey) }}" class="inline-flex items-center text-xs font-bold text-indigo-600 hover:underline">
                        <span>Rincian Visi &amp; Misi</span>
                        <i class="fa-solid fa-arrow-right ml-1.5 text-[10px]"></i>
                    </a>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 sm:p-8 rounded-3xl border border-gray-200 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-gray-900 text-white flex items-center justify-center font-bold text-base shadow">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900">Misi Lembaga</h3>
                    </div>
                    <ol class="text-xs sm:text-sm text-gray-700 space-y-2 list-decimal list-inside leading-relaxed">
                        @foreach($info['misi'] as $m)
                            <li>{{ $m }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="pt-2">
                    <a href="{{ $activeKey === 'yayasan' ? route('page.visi-misi.yayasan') : route('unit.visi-misi', $activeKey) }}" class="inline-flex items-center text-xs font-bold text-gray-900 hover:text-indigo-600 transition">
                        <span>Pelajari Selengkapnya</span>
                        <i class="fa-solid fa-arrow-right ml-1.5 text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 5: TESTIMONIAL ALUMNI & WALI MURID --}}
    @if(isset($testimonials) && $testimonials->isNotEmpty())
    <section class="space-y-8 reveal-fade-up">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Aspirasi &amp; Testimoni</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                Komentar Alumni &amp; Orang Tua
            </h2>
            <p class="text-xs sm:text-sm text-gray-500 font-semibold mt-1">Pengalaman berharga belajar dan bertumbuh di lingkungan SIT Rabbani Muara Enim</p>
            <div class="w-16 h-1 bg-emerald-600 mx-auto rounded-full mt-3"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials->take(3) as $testi)
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between space-y-4 hover:shadow-lg transition">
                    <div class="space-y-2">
                        <i class="fa-solid fa-quote-left text-2xl text-indigo-200"></i>
                        <p class="text-xs sm:text-sm text-gray-700 italic leading-relaxed">
                            "{!! strip_tags($testi->content) !!}"
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 pt-3 border-t border-gray-100">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-indigo-50 border border-indigo-100 flex-shrink-0">
                            <img src="{{ $testi->photo ?? '/uploads/dewan/avatar-default.svg' }}" alt="{{ $testi->name }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                        </div>
                        <div>
                            <h4 class="text-xs sm:text-sm font-extrabold text-gray-900 leading-tight">{{ $testi->name }}</h4>
                            <span class="text-[11px] text-indigo-600 font-semibold">{{ $testi->profession }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

</div>
@endsection
