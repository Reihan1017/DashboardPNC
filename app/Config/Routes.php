<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->get('/', 'Login::index');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->post('artikel/upload-image', 'Artikel::uploadImage');



// Halaman utama Tentang Pengadilan
$routes->get('/tentangpengadilan', 'Tentangpengadilan::index');

// Submenu langsung di Tentang Pengadilan
$routes->get('/tentangpengadilan/pengantarketua', 'Tentangpengadilan::pengantarketua');

// Profil Pengadilan (halaman utama profil)
$routes->get('/tentangpengadilan/profil', 'Tentangpengadilan::profil');

// Submenu di bawah Profil
$routes->get('/tentangpengadilan/sejarah', 'Tentangpengadilan::sejarah');
$routes->get('/tentangpengadilan/wilayah', 'Tentangpengadilan::wilayah');
$routes->get('/tentangpengadilan/struktur', 'Tentangpengadilan::struktur');

// Profil Hakim dan Pegawai (halaman utama profil)
$routes->get('/tentangpengadilan/hakimdanpegawai', 'Tentangpengadilan::hakimdanpegawai');

// Submenu di bawah Profil
$routes->get('/tentangpengadilan/profilhakim', 'Tentangpengadilan::hakim');
$routes->get('/tentangpengadilan/profilkepaniteraan', 'Tentangpengadilan::kepaniteraan');
$routes->get('/tentangpengadilan/profilkesekretariatan', 'Tentangpengadilan::kesekretariatan');
$routes->get('/tentangpengadilan/profilpppk', 'Tentangpengadilan::pppk');

// Profil Role Model dan Agen Perubahan (halaman utama profil)
$routes->get('/tentangpengadilan/profilperubahan', 'Tentangpengadilan::profilperubahan');

// Submenu di bawah 
$routes->get('/tentangpengadilan/profilperubahan', 'Tentangpengadilan::perubahan');
$routes->get('/tentangpengadilan/profilperubahan', 'Tentangpengadilan::rolemodel');

// Kepaniteraan (halaman utama profil)
$routes->get('/tentangpengadilan/kepaniteraan', 'Tentangpengadilan::slidekepaniteraan');

// Submenu di bawah Kepaniteraan
$routes->get('/tentangpengadilan/kepaniteraanpidana', 'Tentangpengadilan::kepaniteraanpidana');
$routes->get('/tentangpengadilan/kepaniteraanperdata', 'Tentangpengadilan::kepaniteraanperdata');
$routes->get('/tentangpengadilan/kepaniteraanhukum', 'Tentangpengadilan::kepaniteraanhukum');


// Sistem Pengelolaan Pengadilan (halaman utama profil)
$routes->get('/tentangpengadilan/pengelolaan', 'Tentangpengadilan::pengelolaan');

// Submenu di bawah Kepaniteraan
$routes->get('/tentangpengadilan/elearning', 'Tentangpengadilan::elearning');
$routes->get('/tentangpengadilan/jdihpnciamis', 'Tentangpengadilan::jdihpnciamis');
$routes->get('/tentangpengadilan/kebijakan', 'Tentangpengadilan::kebijakan');
$routes->get('/tentangpengadilan/kodeetikhakim', 'Tentangpengadilan::kodeetikhakim');
$routes->get('/tentangpengadilan/rencanakerja', 'Tentangpengadilan::rencanakerja');
$routes->get('/tentangpengadilan/rencanastrategis', 'Tentangpengadilan::rencanastrategis');


// Route Khusus Layanan Publik

// Route Khusus ptsp
$routes->get('/layananpublik/index', 'Layananpublik::index');
$routes->get('/layananpublik/ptsp', 'Layananpublik::ptsp');
$routes->get('/layananpublik/jenislayanan', 'Layananpublik::jenislayanan');
$routes->get('/layananpublik/standarpelayanan', 'Layananpublik::standarpelayanan');

// Route Khusus Layanan Penyandang Disabilitas
$routes->get('/layananpublik/strukturpenyandangdisabilitas', 'Layananpublik::penyandangdisabilitas');
$routes->get('/layananpublik/saranaprasaranadisabilitas', 'Layananpublik::saranaprasaranadisabilitas');

// Route Khusus Laporan
$routes->get('/layananpublik/akuntabilitas', 'Layananpublik::akuntabilitas');
$routes->get('/layananpublik/hasilpenelitian', 'Layananpublik::hasilpenelitian');
$routes->get('/layananpublik/laporankeuangan', 'Layananpublik::laporankeuangan');
$routes->get('/layananpublik/laporanpelayananpublik', 'Layananpublik::laporanpelayananpublik');
$routes->get('/layananpublik/laporansurvey', 'Layananpublik::laporansurvey');
$routes->get('/laporan/laporantahunan', 'Laporan::laporantahunan');
$routes->get('/layananpublik/lhkpn', 'Layananpublik::lhkpn');
$routes->get('/layananpublik/ringkasandaftaraset', 'Layananpublik::ringkasandaftaraset');
$routes->get('/layananpublik/ringkasanlaporan', 'Layananpublik::ringkasanlaporan');
$routes->get('/layananpublik/sakip', 'Layananpublik::sakip');
/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
/* $routes->get('/', 'Home::index');
$routes->setTranslateURIDashes(true);
 */
 
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
