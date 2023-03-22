<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Post;
use stdClass;

class HomeController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'himatif unimal, himatif, unimal';
        $this->meta->author = 'IPTEK HIMATIF UNIMAL';
        $this->meta->description = 'HIMATIF adalah sebuah organisasi mahasiswa Teknik Informatika di Universitas Malikussaleh. Bersekretariat di Jalan Batam, Lantai II Gedung Teknik Informatika, Lhokseumawe, Aceh. Phone : +628 23 7060 1327 E-mail : himatif@unimal.ac.id';
        $this->meta->url = 'https://himatif.unimal.ac.id';
        $this->meta->type = 'website';
        $this->meta->image = 'https://himatif.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('home', [
            'title' => 'Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh',
            'meta' => $this->meta,
            'divisi' => Divisi::find2(),
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
