<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use stdClass;

class GaleryController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'galery himatif unimal, berita himatif unimal, himatif unimal, himatif, unimal';
        $this->meta->author = 'IPTEK HIMATIF UNIMAL';
        $this->meta->description = 'Galery foto berita dan artikel mengenai Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh.';
        $this->meta->url = 'https://himatif.unimal.ac.id/galery';
        $this->meta->type = 'galery';
        $this->meta->image = 'https://himatif.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        $posts = Post::latest()->get();
        $images = [];

        foreach ($posts as $post) {
            $images[] = [
                'title' => $post->title,
                'image' => $post->image,
            ];
        }

        return view('galeri', [
            'title' => 'Galery Foto Berita',
            'meta' => $this->meta,
            'images' => $images
        ]);
    }
}
