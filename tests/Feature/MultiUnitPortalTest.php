<?php

use App\Models\Post;
use App\Models\User;

test('yayasan parent portal loads successfully with unit showcase cards and leadership', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Yayasan Generasi Rabbani', false);
    $response->assertSee('TKS Islam Terpadu Rabbani', false);
    $response->assertSee('SDS Islam Terpadu Rabbani', false);
    $response->assertSee('SMPS Islam Terpadu Rabbani', false);
    $response->assertSee('SMA Islam Terpadu Rabbani', false);
    $response->assertSee('Drs. H. Basuki Wiwoho', false);

    $yayasanRouteResponse = $this->get('/yayasan');
    $yayasanRouteResponse->assertStatus(200);
    $yayasanRouteResponse->assertSee('Yayasan Generasi Rabbani', false);
});

test('tks it rabbani unit homepage loads with unit identity', function () {
    $response = $this->get('/tk');
    $response->assertStatus(200);
    $response->assertSee('TKS IT RABBANI', false);
    $response->assertSee('10647514', false); // Real NPSN
});

test('sds it rabbani unit homepage loads with unit identity', function () {
    $response = $this->get('/sd');
    $response->assertStatus(200);
    $response->assertSee('SDS IT RABBANI', false);
    $response->assertSee('10648045', false); // Real NPSN
});

test('smps it rabbani unit homepage loads with unit identity', function () {
    $response = $this->get('/smp');
    $response->assertStatus(200);
    $response->assertSee('SMPS IT RABBANI', false);
    $response->assertSee('69920340', false); // Real NPSN
});

test('sma it rabbani unit homepage loads with unit identity', function () {
    $response = $this->get('/sma');
    $response->assertStatus(200);
    $response->assertSee('SMA IT RABBANI', false);
    $response->assertSee('70010515', false); // Real NPSN
});

test('unit specific subroutes load cleanly', function () {
    // Dewan guru with tabs
    $dewanResponse = $this->get('/dewan-guru');
    $dewanResponse->assertStatus(200);
    $dewanResponse->assertSee('Dewan Guru', false);
    $dewanResponse->assertSee('TKS IT Rabbani', false);
    $dewanResponse->assertSee('SDS IT Rabbani', false);
    $dewanResponse->assertSee('SMPS IT Rabbani', false);
    $dewanResponse->assertSee('SMA IT Rabbani', false);

    // Unit dewan guru
    $this->get('/tk/dewan-guru')->assertStatus(200);
    $this->get('/sd/dewan-guru')->assertStatus(200);
    $this->get('/smp/dewan-guru')->assertStatus(200);
    $this->get('/sma/dewan-guru')->assertStatus(200);

    // Visi Misi
    $visiResponse = $this->get('/visi-dan-misi');
    $visiResponse->assertStatus(200);
    $visiResponse->assertSee('Yayasan Generasi Rabbani', false);

    // Struktur Organisasi
    $strukturResponse = $this->get('/struktur-organisasi');
    $strukturResponse->assertStatus(200);
    $strukturResponse->assertSee('Yayasan Generasi Rabbani', false);

    // SPMB Info & Form
    $ppdbResponse = $this->get('/ppdb');
    $ppdbResponse->assertStatus(200);

    $formResponse = $this->get('/form_ppdb');
    $formResponse->assertStatus(200);
    $formResponse->assertSee('Formulir Pendaftaran', false);

    // Form alias redirect
    $this->get('/form-ppdb')->assertRedirect(route('spmb.form'));
    $formResponse->assertSee('Pilihan Jenjang / Unit Sekolah', false);
});

test('yayasan portal displays formal pimpinan yayasan and documentation', function () {
    Post::create([
        'title' => 'Kegiatan Santri SIT Rabbani',
        'slug' => 'kegiatan-santri-sit-rabbani-test',
        'type' => 'gallery',
        'status' => 'publish',
        'featured_image' => '/uploads/activities-sit-rabbani.webp',
        'content' => 'Dokumentasi kegiatan santri',
    ]);

    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Drs. H. Basuki Wiwoho', false);

    // Sambutan yayasan route
    $sambutanResponse = $this->get('/yayasan/sambutan');
    $sambutanResponse->assertStatus(200);
    $sambutanResponse->assertSee('Drs. H. Basuki Wiwoho', false);

    // Galeri displays authentic photos
    $galeriResponse = $this->get('/galeri');
    $galeriResponse->assertStatus(200);
    $galeriResponse->assertSee('activities-sit-rabbani.webp', false);
});

test('unit quick menus on frontend link strictly to unit specific pages without cross contamination', function () {
    // TK Homepage quick menus
    $tkRes = $this->get('/tk');
    $tkRes->assertStatus(200);
    $tkRes->assertSee('/tk/spmb', false);
    $tkRes->assertSee('/tk/tentang-kami', false);
    $tkRes->assertSee('/tk/dewan-guru', false);
    $tkRes->assertSee('/tk/fasilitas', false);
    $tkRes->assertSee('/tk/visi-dan-misi', false);
    $tkRes->assertSee('/tk/prestasi', false);
    $tkRes->assertSee('/tk/galeri', false);
    $tkRes->assertSee('/tk/artikel', false);

    // SD Homepage quick menus
    $sdRes = $this->get('/sd');
    $sdRes->assertStatus(200);
    $sdRes->assertSee('/sd/spmb', false);
    $sdRes->assertSee('/sd/dewan-guru', false);
    $sdRes->assertSee('/sd/fasilitas', false);

    // SMP Homepage quick menus
    $smpRes = $this->get('/smp');
    $smpRes->assertStatus(200);
    $smpRes->assertSee('/smp/spmb', false);
    $smpRes->assertSee('/smp/dewan-guru', false);
    $smpRes->assertSee('/smp/fasilitas', false);

    // SMA Homepage quick menus
    $smaRes = $this->get('/sma');
    $smaRes->assertStatus(200);
    $smaRes->assertSee('/sma/spmb', false);
    $smaRes->assertSee('/sma/dewan-guru', false);
    $smaRes->assertSee('/sma/fasilitas', false);
});

test('dedicated unit subroutes load cleanly with unit branding', function () {
    $units = ['tk', 'sd', 'smp', 'sma'];
    foreach ($units as $u) {
        $this->get("/{$u}/artikel")->assertStatus(200);
        $this->get("/{$u}/prestasi")->assertStatus(200);
        $this->get("/{$u}/galeri")->assertStatus(200);
        $this->get("/{$u}/video")->assertStatus(200);
        $this->get("/{$u}/hubungi")->assertStatus(200);
        $this->get("/{$u}/dewan-guru")->assertStatus(200);
        $this->get("/{$u}/fasilitas")->assertStatus(200);
        $this->get("/{$u}/spmb")->assertStatus(200);
    }
});

test('admin dashboard and ppdb are scoped and isolated per unit', function () {
    $adminTk = User::firstOrCreate(
        ['email' => 'admin_tk@rabbanime.sch.id'],
        ['name' => 'Admin TKS IT Rabbani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'tk']
    );
    $adminSd = User::firstOrCreate(
        ['email' => 'admin_sd@rabbanime.sch.id'],
        ['name' => 'Admin SDS IT Rabbani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'sd']
    );
    $adminSmp = User::firstOrCreate(
        ['email' => 'admin_smp@rabbanime.sch.id'],
        ['name' => 'Admin SMPS IT Rabbani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'smp']
    );
    $adminSma = User::firstOrCreate(
        ['email' => 'admin_sma@rabbanime.sch.id'],
        ['name' => 'Admin SMA IT Rabbani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'sma']
    );
    $superAdmin = User::firstOrCreate(
        ['email' => 'admin@rabbanime.sch.id'],
        ['name' => 'Administrator Yayasan', 'password' => bcrypt('password'), 'role' => 'super_admin', 'unit' => 'yayasan']
    );

    // 1. Admin TK sees TK scope
    $tkDashboard = $this->actingAs($adminTk)->get('/admin');
    $tkDashboard->assertStatus(200);
    $tkDashboard->assertSee('ADMIN TKS IT RABBANI', false);
    $tkDashboard->assertSee('TKS IT Rabbani', false);

    $tkPpdb = $this->actingAs($adminTk)->get('/admin/ppdb');
    $tkPpdb->assertStatus(200);
    $tkPpdb->assertSee('TKS Islam Terpadu Rabbani', false);

    // 2. Admin SD sees SD scope
    $sdDashboard = $this->actingAs($adminSd)->get('/admin');
    $sdDashboard->assertStatus(200);
    $sdDashboard->assertSee('ADMIN SDS IT RABBANI', false);

    $sdPpdb = $this->actingAs($adminSd)->get('/admin/ppdb');
    $sdPpdb->assertStatus(200);
    $sdPpdb->assertSee('SDS Islam Terpadu Rabbani', false);

    // 3. Admin SMP sees SMP scope
    $smpDashboard = $this->actingAs($adminSmp)->get('/admin');
    $smpDashboard->assertStatus(200);
    $smpDashboard->assertSee('ADMIN SMPS IT RABBANI', false);

    // 4. Admin SMA sees SMA scope
    $smaDashboard = $this->actingAs($adminSma)->get('/admin');
    $smaDashboard->assertStatus(200);
    $smaDashboard->assertSee('ADMIN SMA IT RABBANI', false);

    // 5. Super Admin Yayasan sees Yayasan and switcher
    $yayasanDashboard = $this->actingAs($superAdmin)->get('/admin');
    $yayasanDashboard->assertStatus(200);
    $yayasanDashboard->assertSee('YAYASAN GENERASI RABBANI', false);

    $yayasanPpdb = $this->actingAs($superAdmin)->get('/admin/ppdb');
    $yayasanPpdb->assertStatus(200);
    $yayasanPpdb->assertSee('Filter Unit Sekolah:', false);
});
