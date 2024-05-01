<?php

namespace App\Controllers;

use App\Models\PageModel;

class Page extends BaseController
{

    public $pageModel;

    public function __construct()
    {
        $this->pageModel = new PageModel();
    }

    public function index($name, $title, $subtitle)
    {

        $wp_page = $this->pageModel->getPage('mis-' . $name);

        $data = array(
            'title' => $title,
            'subtitle' => $subtitle,
            'wp_page' => $wp_page
        );

        return view('templates/header', $data)
            . view('templates/page')
            . view('templates/footer');
    }

    public function sejarahSingkat()
    {
        return $this->index('sejarah-singkat', 'Sejarah Singkat', 'Selayang Pandang Tentang Sejarah MIS Al-Falah DDI Angkona');
    }

    public function visiMisi()
    {
        return $this->index('visi-misi', 'Visi & Misi', 'Sebuah Impian, cita-cita, nilai, masa depan MIS Al-Falah DDI Angkona');
    }

    public function saranaPrasarana()
    {
        return $this->index('sarana-prasarana', 'Sarana & Prasarana', 'MIS Al-Falah DDI Angkona');
    }

    public function strukturOrganisasi()
    {
        return $this->index('struktur-organisasi', 'Struktur Organisasi', 'MIS Al-Falah DDI Angkona');
    }

    public function akreditasi()
    {
        return $this->index('akreditasi', 'Akreditasi', 'MIS Al-Falah DDI Angkona');
    }

    public function direktoriGuru()
    {
        return $this->index('direktori-guru', 'Direktori Guru', 'Daftar nama guru');
    }

    public function direktoriStaf()
    {
        return $this->index('direktori-staf', 'Direktori Staf', 'Daftar nama staf');
    }

    public function galeri()
    {
        return $this->index('galeri', 'Galeri', 'Kumpulan Photo dan Video');
    }

    public function blog()
    {
        return $this->index('blog', 'Blog', 'Kumpulan Berita dan Kegiatan');
    }
}
