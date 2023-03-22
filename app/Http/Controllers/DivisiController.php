<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use stdClass;

class DivisiController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'divisi ukm ptq unimal,  himatif unimal, himatif, unimal';
        $this->meta->author = 'IPTEK HIMATIF UNIMAL';
        $this->meta->description = 'Semua Divisi Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh.';
        $this->meta->url = 'https://himatif.unimal.ac.id';
        $this->meta->type = 'divisi';
        $this->meta->image = 'https://himatif.unimal.ac.id/img/logo.png';
    }

    public function show($divisi)
    {
        $nama_divisi = $divisi;
        if ($nama_divisi == 'teras') {
            $nama_divisi = 'Pengurus Teras';
        } else if ($nama_divisi == 'kesekretariatan') {
            $nama_divisi = 'Divisi Kesekretariatan';
        } else if ($nama_divisi == 'kaderisasi') {
            $nama_divisi = 'Divisi Kaderisasi dan Pengembangan';
        } else if ($nama_divisi == 'pendidikan') {
            $nama_divisi = 'Divisi Pendidikan dan Pelatihan';
        } else if ($nama_divisi == 'media') {
            $nama_divisi = 'Divisi Media dan Jaringan';
        } else if ($nama_divisi == 'agama') {
            $nama_divisi = 'Divisi Keagamaan dan Sosial';
        } else if ($nama_divisi == 'humas') {
            $nama_divisi = 'Divisi Hubungan Masyarakat';
        } else if ($nama_divisi == 'organisasi') {
            $nama_divisi = 'Divisi Keorganisasian';
        } else {
            $nama_divisi = 'Kewirausahaan';
        }

        $this->meta->keywords = 'divisi ' . $nama_divisi . ' himatif unimal, divisi himatif unimal, himatif unimal, himatif, unimal';
        $this->meta->description = 'Divisi ' . $nama_divisi . ' Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh.';
        $this->meta->url = 'https://himatif.unimal.ac.id/divisi/' . $nama_divisi;

        return view('divisi', [
            'title' => $nama_divisi,
            'meta' => $this->meta,
            'active' => 'profile',
            'nama_divisi' => $nama_divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
