@extends('layouts.frontend')

@section('title', ($page?->meta_title ?: ($page?->title ?: 'Logo Resmi & Identitas Visual')) . ' - ' . ($siteSettings['site_name'] ?? 'SIT Rabbani Muara Enim'))
@section('meta_description', $page?->meta_description ?: ($page?->excerpt ?: 'Aset resmi logo Yayasan Generasi Rabbani & SIT Rabbani Muara Enim, panduan identitas visual, filosofi lambang sekolah, dan unduhan logo resolusi tinggi.'))

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center space-x-2">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <a href="{{ route('download.index') }}" class="hover:text-white transition">Download</a>
            <span>/</span>
            <span class="text-amber-300 font-semibold">{{ $page?->title ?? 'Logo' }}</span>
        </nav>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">{{ $page?->title ?? 'Logo Resmi Lembaga & Sekolah' }}</h1>
        <p class="text-sm text-indigo-100 mt-2 font-light max-w-2xl">
            {{ $page?->excerpt ?: 'Identitas visual, filosofi lambang lembaga, panduan palet warna, dan aset unduhan resmi Yayasan Generasi Rabbani & SIT Rabbani Muara Enim.' }}
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 space-y-12">
    
    {{-- CARD PREVIEW LOGO UTAMA --}}
    <article class="bg-white rounded-3xl p-8 sm:p-12 shadow-xl border border-gray-100 reveal-fade-up text-center space-y-8">
        <div class="max-w-2xl mx-auto">
            <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Identitas Visual Resmi</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                Logo &amp; Lambang Yayasan Generasi Rabbani Muara Enim
            </h2>
            <div class="w-16 h-1 bg-indigo-600 mx-auto rounded-full mt-3"></div>
        </div>

        {{-- DISPLAY EMBLEM LOGO --}}
        <div class="w-64 h-64 sm:w-80 sm:h-80 mx-auto rounded-3xl bg-indigo-50/50 p-8 shadow-inner border border-indigo-100 flex items-center justify-center relative group">
            <img src="/uploads/logo-rabbani-square.webp" alt="Logo Resmi Yayasan Generasi Rabbani Muara Enim" class="max-h-full max-w-full object-contain group-hover:scale-105 transition duration-500">
        </div>

        <div>
            <a href="/uploads/logo-rabbani-square.webp" download="logo-rabbani-square.webp" class="w-full sm:w-auto inline-flex items-center justify-center text-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 sm:px-8 py-3.5 rounded-2xl text-xs sm:text-sm font-bold shadow-lg hover:shadow-xl transition space-x-2 transform hover:scale-105">
                <i class="fa-solid fa-download text-sm"></i>
                <span>Download Lambang Emblem (Format WebP/PNG)</span>
            </a>
            <p class="text-[11px] text-gray-400 mt-2 font-medium">Format Asli Resolusi Tinggi &bull; Latar Belakang Transparan &bull; Siap Cetak &amp; Desain</p>
        </div>
    </article>

    {{-- FILOSOFI DAN WARNA RESMI --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        {{-- FILOSOFI MAKNA --}}
        <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 reveal-fade-up space-y-5">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-indigo-600 flex items-center justify-center font-bold text-base shadow-inner">
                    <i class="fa-solid fa-shapes"></i>
                </div>
                <h3 class="text-xl font-extrabold text-gray-900">Filosofi Lambang Sekolah</h3>
            </div>
            <div class="w-12 h-1 bg-indigo-600 rounded-full"></div>

            <ul class="space-y-4 text-xs sm:text-sm text-gray-600 leading-relaxed">
                <li class="flex items-start space-x-3">
                    <div class="w-6 h-6 rounded-full bg-emerald-100 text-indigo-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <strong class="text-gray-900 font-bold block">Perisai Segi Lima:</strong>
                        Melambangkan benteng keimanan yang kokoh, rukun Islam, serta kesetiaan pada dasar negara Pancasila.
                    </div>
                </li>
                <li class="flex items-start space-x-3">
                    <div class="w-6 h-6 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                        <i class="fa-solid fa-book-quran"></i>
                    </div>
                    <div>
                        <strong class="text-gray-900 font-bold block">Mushaf Al-Qur'an Terbuka:</strong>
                        Sumber mata air ilmu pengetahuan, pedoman adab, dan lentera pembimbing setiap langkah siswa.
                    </div>
                </li>
                <li class="flex items-start space-x-3">
                    <div class="w-6 h-6 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                        <i class="fa-solid fa-fire-flame-curved"></i>
                    </div>
                    <div>
                        <strong class="text-gray-900 font-bold block">Obor Sains & Inovasi:</strong>
                        Semangat pantang padam dalam mempelajari sains, matematika, teknologi modern, dan riset ilmiah.
                    </div>
                </li>
                <li class="flex items-start space-x-3">
                    <div class="w-6 h-6 rounded-full bg-yellow-100 text-yellow-700 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <strong class="text-gray-900 font-bold block">Bintang &amp; Kubah Rabbani:</strong>
                        Cita-cita prestasi puncak, kemuliaan budi pekerti, dan kepemimpinan generasi Qur'ani masa depan.
                    </div>
                </li>
            </ul>
        </div>

        {{-- PALET WARNA RESMI --}}
        <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 reveal-fade-up delay-1 space-y-5">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-gray-100 text-gray-800 flex items-center justify-center font-bold text-base shadow-inner">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3 class="text-xl font-extrabold text-gray-900">Palet Warna Resmi</h3>
            </div>
            <div class="w-12 h-1 bg-indigo-600 rounded-full"></div>

            <div class="space-y-4 text-xs sm:text-sm">
                {{-- Hijau Utama --}}
                <div class="p-4 rounded-2xl bg-indigo-50/60 border border-indigo-200 flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-600 shadow-md flex-shrink-0"></div>
                    <div>
                        <span class="font-extrabold text-gray-900 block text-sm">Hijau Rabbani (Dominan)</span>
                        <code class="text-xs text-indigo-600 font-mono font-bold">HEX: #059669</code>
                        <p class="text-[11px] text-gray-500 mt-0.5">Kedamaian spiritual, naungan Qur'ani, dan pertumbuhan karakter robbani.</p>
                    </div>
                </div>

                {{-- Kuning Emas --}}
                <div class="p-4 rounded-2xl bg-amber-50 border border-amber-200 flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-400 shadow-md flex-shrink-0"></div>
                    <div>
                        <span class="font-extrabold text-gray-900 block text-sm">Kuning Emas Keagungan</span>
                        <code class="text-xs text-amber-700 font-mono font-bold">HEX: #FACC15</code>
                        <p class="text-[11px] text-gray-500 mt-0.5">Semangat muda, optimisme, dan kemuliaan akhlak santri.</p>
                    </div>
                </div>

                {{-- Biru Navy --}}
                <div class="p-4 rounded-2xl bg-blue-50 border border-blue-200 flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-900 shadow-md flex-shrink-0"></div>
                    <div>
                        <span class="font-extrabold text-gray-900 block text-sm">Navy Integritas</span>
                        <code class="text-xs text-indigo-700 font-mono font-bold">HEX: #1E1B4B</code>
                        <p class="text-[11px] text-gray-500 mt-0.5">Keteguhan iman, profesionalisme manajemen, dan wawasan global.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- KARTU VARIAN UNDUHAN LAINNYA --}}
    <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-xl border border-gray-100 reveal-fade-up space-y-6">
        <div class="flex items-center justify-between flex-wrap gap-2">
            <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">Varian Logo Sekolah Lainnya</h3>
            <span class="text-xs bg-emerald-100 text-indigo-600 font-bold px-3 py-1 rounded-full">Format Vektor &amp; Raster</span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            {{-- Logo Header Horizontal --}}
            <div class="p-6 rounded-2xl bg-gray-50/80 border border-gray-200 flex flex-col justify-between gap-4">
                <div class="flex items-center space-x-4">
                    <div class="w-20 h-14 rounded-xl bg-white p-2 border border-gray-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                        <img src="/uploads/logo-rabbani.png" alt="Logo Horizontal" class="max-h-full max-w-full object-contain">
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-gray-900">Logo Horizontal (Header &amp; Surat)</h4>
                        <span class="text-[11px] text-gray-400">Format PNG Transparan Resolusi Tinggi</span>
                    </div>
                </div>
                <a href="/uploads/logo-rabbani.png" download="logo-rabbani-horizontal.png" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2.5 rounded-xl text-xs font-bold transition flex items-center justify-center space-x-1.5 shadow">
                    <i class="fa-solid fa-download text-[11px]"></i>
                    <span>Unduh Logo Horizontal</span>
                </a>
            </div>

            {{-- Emblem Lingkaran --}}
            <div class="p-6 rounded-2xl bg-gray-50/80 border border-gray-200 flex flex-col justify-between gap-4">
                <div class="flex items-center space-x-4">
                    <div class="w-20 h-14 rounded-xl bg-white p-2 border border-gray-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                        <img src="/uploads/logo-rabbani-square.webp" alt="Logo Emblem" class="max-h-full max-w-full object-contain">
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-gray-900">Emblem Persegi (Badge / Stempel)</h4>
                        <span class="text-[11px] text-gray-400">Format WebP Transparan</span>
                    </div>
                </div>
                <a href="/uploads/logo-rabbani-square.webp" download="logo-rabbani-square.webp" class="w-full text-center bg-orange-600 hover:bg-orange-700 text-white px-4 py-2.5 rounded-xl text-xs font-bold transition flex items-center justify-center space-x-1.5 shadow">
                    <i class="fa-solid fa-download text-[11px]"></i>
                    <span>Unduh Emblem Resmi</span>
                </a>
            </div>
        </div>
    </div>

    @if(!empty($page?->content) && strlen(trim(strip_tags($page?->content ?? ''))) > 10)
    <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="prose-content text-gray-700 text-sm sm:text-base leading-relaxed space-y-4">
            {!! $page?->content !!}
        </div>
    </div>
    @endif

</div>
@endsection
