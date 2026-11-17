<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Setting;
use App\Services\WebpService;
use Illuminate\Http\Request;

class AdminShowcaseController extends Controller
{
    public function __construct(protected WebpService $webpService) {}

    public static function getDefaultShowcaseCards(): array
    {
        return [
            'tk' => [
                'level_badge' => 'PAUD / TK ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Usia Dini • Karakter Rabbani',
                'title' => 'TKS Islam Terpadu Rabbani',
                'subtitle' => 'Pasar II, Muara Enim, Sumatera Selatan',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala TKS IT Rabbani',
                'leader_sub' => 'Instagram: @tkitrabbanim.e',
                'leader_photo' => '/uploads/units/logo-tk.webp',
                'slogan' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.',
                'features' => [
                    'Sentra Ibadah, Sholat Dhuha & Tahfidz Cilik Juz 30',
                    'Sentra Seni, Kreativitas & Jurnal Gambar',
                    'Market Day & Entrepreneurship Cilik',
                    'Manasik Haji Cilik, Outbound & Fun Swimming',
                    'Deep Learning (Berkesadaran & Menggembirakan)',
                ],
                'meta_left' => 'NPSN: 10647514',
                'meta_right' => 'Muara Enim',
                'btn_site_text' => 'Kunjungi Website TKS IT Rabbani',
                'btn_site_url' => '/tk',
                'btn_spmb_text' => 'SPMB TKS IT Online',
                'btn_spmb_url' => '/tk/ppdb',
            ],
            'sd' => [
                'level_badge' => 'SEKOLAH DASAR ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Sholeh • Cerdas • Mandiri',
                'title' => 'SDS Islam Terpadu Rabbani',
                'subtitle' => 'Talang Jawa / Air Lintang, Muara Enim',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SDS IT Rabbani',
                'leader_sub' => 'Instagram: @sditrabbani_me',
                'leader_photo' => '/uploads/units/logo-sd.webp',
                'slogan' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.',
                'features' => [
                    'Target Hafalan Al-Qur\'an Mutqin & Tartil',
                    'Hafalan Hadits Harian & Pembiasaan Adab Nabawi',
                    'Laboratorium Komputer Modern & Pembekalan ANBK',
                    'Bilingual Dasar: Bahasa Arab & Bahasa Inggris',
                    'Kurikulum Terpadu Nasional & Standar Mutu JSIT',
                ],
                'meta_left' => 'NPSN: 10648045',
                'meta_right' => 'Muara Enim',
                'btn_site_text' => 'Kunjungi Website SDS IT Rabbani',
                'btn_site_url' => '/sd',
                'btn_spmb_text' => 'SPMB SDS IT Online',
                'btn_spmb_url' => '/sd/ppdb',
            ],
            'smp' => [
                'level_badge' => 'SEKOLAH MENENGAH PERTAMA IT',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Full Day School • Karakter Qur\'ani',
                'title' => 'SMPS Islam Terpadu Rabbani',
                'subtitle' => 'Jl. Proklamasi No. 80, Air Lintang, Muara Enim',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SMPS IT Rabbani',
                'leader_sub' => 'Instagram: @smpitrabbanimuaraenim',
                'leader_photo' => '/uploads/units/logo-smp.webp',
                'slogan' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Berakhlak Mulia.',
                'features' => [
                    'Program Pembinaan Karakter & Tahfidz Al-Qur\'an (Full Day)',
                    'Talaqqi & Tasmi\' Al-Qur\'an Bersanad',
                    'Integrasi Kurikulum Merdeka & Kurikulum Khas JSIT',
                    'Bina Pribadi Islami (BPI) & Islamic Student Camp',
                    'Laboratorium Komputer, Riset Sains & Bahasa Asing',
                ],
                'meta_left' => 'NPSN: 69920340',
                'meta_right' => 'Air Lintang',
                'btn_site_text' => 'Kunjungi Website SMPS IT Rabbani',
                'btn_site_url' => '/smp',
                'btn_spmb_text' => 'SPMB SMPS IT Online',
                'btn_spmb_url' => '/smp/ppdb',
            ],
            'sma' => [
                'level_badge' => 'SEKOLAH MENENGAH ATAS IT',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Tersedia Boarding School • Asrama',
                'title' => 'SMA Islam Terpadu Rabbani',
                'subtitle' => 'Jl. Proklamasi No. 80, Air Lintang, Muara Enim',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Kepala SMA IT Rabbani',
                'leader_sub' => 'CP PPDB: 0851-5929-3554',
                'leader_photo' => '/uploads/units/logo-sma.webp',
                'slogan' => 'Mencetak Generasi Pemimpin Qur\'ani, Berkarakter Islami & Berprestasi Global.',
                'features' => [
                    '88% Lulusan Hafal Al-Qur\'an Minimal 1 Juz Mutqin',
                    '88% Lulusan Sukses Diterima di Perguruan Tinggi',
                    'Tersedia Program Asrama (Boarding School Putra & Putri)',
                    'Bimbingan Belajar SNBT Gratis Persiapan Tembus PTN',
                    '8 Ekstrakurikuler Unggulan: Pramuka, OSIS, Voli, PMR, Marawis, Multimedia, Tapak Suci, TPA',
                ],
                'meta_left' => 'NPSN: 70010515',
                'meta_right' => 'Air Lintang',
                'btn_site_text' => 'Kunjungi Website SMA IT Rabbani',
                'btn_site_url' => '/sma',
                'btn_spmb_text' => 'SPMB SMA IT Online',
                'btn_spmb_url' => '/sma/ppdb',
            ],
        ];
    }

    public static function getShowcaseCards(): array
    {
        $raw = Setting::get('unit_showcase_cards');
        if ($raw) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded) && ! empty($decoded)) {
                return array_replace_recursive(self::getDefaultShowcaseCards(), $decoded);
            }
        }

        return self::getDefaultShowcaseCards();
    }

    public function index()
    {
        $cards = self::getShowcaseCards();

        return view('admin.showcase.index', compact('cards'));
    }

    public function update(Request $request)
    {
        $units = ['tk', 'sd', 'smp', 'sma'];
        $currentCards = self::getShowcaseCards();
        $updatedCards = [];

        foreach ($units as $u) {
            $input = $request->input("cards.{$u}", []);
            $photo = $input['existing_photo'] ?? ($currentCards[$u]['leader_photo'] ?? '');

            if ($request->hasFile("cards.{$u}.photo_file")) {
                $converted = $this->webpService->processUploadedFile(
                    $request->file("cards.{$u}.photo_file"),
                    'dewan',
                    85,
                    800
                );
                if ($converted['success']) {
                    $photo = $converted['url'];
                }
            } elseif (! empty($input['leader_photo'])) {
                $photo = trim($input['leader_photo']);
            }

            // Parse features list from textarea (one per line)
            $features = [];
            if (! empty($input['features_raw'])) {
                $lines = explode("\n", str_replace("\r", '', $input['features_raw']));
                foreach ($lines as $line) {
                    $trimmed = trim($line);
                    if ($trimmed !== '') {
                        $features[] = $trimmed;
                    }
                }
            }
            if (empty($features)) {
                $features = $currentCards[$u]['features'] ?? [];
            }

            $updatedCards[$u] = [
                'level_badge' => trim($input['level_badge'] ?? $currentCards[$u]['level_badge']),
                'accreditation' => trim($input['accreditation'] ?? $currentCards[$u]['accreditation']),
                'info_badge' => trim($input['info_badge'] ?? $currentCards[$u]['info_badge']),
                'title' => trim($input['title'] ?? $currentCards[$u]['title']),
                'subtitle' => trim($input['subtitle'] ?? $currentCards[$u]['subtitle']),
                'leader_title' => trim($input['leader_title'] ?? $currentCards[$u]['leader_title']),
                'leader_name' => trim($input['leader_name'] ?? $currentCards[$u]['leader_name']),
                'leader_sub' => trim($input['leader_sub'] ?? $currentCards[$u]['leader_sub']),
                'leader_photo' => $photo,
                'slogan' => trim($input['slogan'] ?? $currentCards[$u]['slogan']),
                'features' => $features,
                'meta_left' => trim($input['meta_left'] ?? $currentCards[$u]['meta_left']),
                'meta_right' => trim($input['meta_right'] ?? $currentCards[$u]['meta_right']),
                'btn_site_text' => trim($input['btn_site_text'] ?? $currentCards[$u]['btn_site_text']),
                'btn_site_url' => trim($input['btn_site_url'] ?? $currentCards[$u]['btn_site_url']),
                'btn_spmb_text' => trim($input['btn_spmb_text'] ?? $currentCards[$u]['btn_spmb_text']),
                'btn_spmb_url' => trim($input['btn_spmb_url'] ?? $currentCards[$u]['btn_spmb_url']),
            ];
        }

        Setting::set(
            'unit_showcase_cards',
            json_encode($updatedCards, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'showcase'
        );

        ActivityLog::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->name ?? 'Admin',
            'action' => 'showcase_cards_update',
            'description' => 'Memperbarui data 3 Kartu Showcase Unit Sekolah di Beranda Yayasan',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 'info',
        ]);

        return redirect()->route('admin.showcase.index')->with('success', '3 Kartu Showcase Unit Pendidikan (TK • SD • SMP) berhasil disimpan dan diperbarui!');
    }
}
