<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{

  public function index()
  {
    $data['title'] = 'Yayasan DDI Al-Falah Angkona';

    return view('templates/header', $data)
      . view('pages/beranda')
      . view('templates/footer');
  }

  public function view($page = 'beranda')
  {
    if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new PageNotFoundException($page);
    }

    $data['title'] = 'Yayasan DDI Al-Falah Angkona';

    switch ($page) {
      case 'beranda':
        $data['title'] = 'Yayasan DDI Al-Falah Angkona';
        break;
      case 'sejarah_singkat':
        $data['title'] = 'Sejarah Singkat';
        break;
      case 'visi_misi':
        $data['title'] = 'Visi dan Misi';
        break;
      case 'sarana_prasarana':
        $data['title'] = 'Sarana & Prasarana';
        break;
      case 'struktur_organisasi':
        $data['title'] = 'Struktur Organisasi';
        break;
      case 'akreditasi':
        $data['title'] = 'Akreditasi';
        break;

      case 'direktori_guru':
        $data['title'] = 'Direktori Guru';
        break;
      case 'direktori_staf':
        $data['title'] = 'Direktori Staf';
        break;

      case 'galeri':
        $data['title'] = 'Galeri';
        break;

      case 'berita':
        $data['title'] = 'Berita';
        break;

      case 'kontak':
        $data['title'] = 'Kontak';
        break;

      default:
        $data['title'] = 'Yayasan DDI Al-Falah Angkona';
    }

    return view('templates/header', $data)
      . view('pages/' . $page)
      . view('templates/footer');
  }
}
