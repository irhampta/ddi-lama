<?php

use App\Controllers\Beranda;
use App\Controllers\Page;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// static routes
$routes->get('/', [Beranda::class, 'index']);
$routes->get('/sejarah-singkat', [Page::class, 'sejarahSingkat']);
$routes->get('/visi-misi',  [Page::class, 'visiMisi']);
$routes->get('/sarana-prasarana',  [Page::class, 'saranaPrasarana']);
$routes->get('/struktur-organisasi',  [Page::class, 'strukturOrganisasi']);
$routes->get('/akreditasi',  [Page::class, 'akreditasi']);
$routes->get('/direktori-guru',  [Page::class, 'direktoriGuru']);
$routes->get('/direktori-staf',  [Page::class, 'direktoriStaf']);
$routes->get('/blog',  [Page::class, 'blog']);
$routes->get('/galeri',  [Page::class, 'galeri']);
