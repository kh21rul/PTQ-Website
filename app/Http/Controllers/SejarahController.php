<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use stdClass;

class SejarahController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'sejarah himatif unimal';
        $this->meta->author = 'IPTEK HIMATIF UNIMAL';
        $this->meta->description = 'Himpunan Mahasiswa Teknik Informatika (HIMATIF) merupakan sebuah organisai kampus di tingkat Program Studi Teknik Informatika. HIMATIF didirikan pada hari selasa tanggal 2 Mei 2005. HIMATIF berkedudukan di Jurusan Teknik Informatika Universitas Malikussaleh, Lhokseumawe.';
        $this->meta->url = 'https://himatif.unimal.ac.id/sejarah';
        $this->meta->type = 'website';
        $this->meta->image = 'https://himatif.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('sejarah', [
            'title' => 'Sejarah Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh',
            'meta' => $this->meta,
            'content' => Sejarah::all()
        ]);
    }
}
