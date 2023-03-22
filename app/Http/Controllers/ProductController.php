<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use stdClass;

class ProductController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'himatif unimal shop, artikel himatif unimal, himatif unimal, himatif, unimal';
        $this->meta->author = 'IPTEK HIMATIF UNIMAL';
        $this->meta->description = 'Shop Himpunan Mahasiswa Teknik Informatika Universitas Malikussaleh.';
        $this->meta->url = 'https://himatif.unimal.ac.id/toko';
        $this->meta->type = 'toko';
        $this->meta->image = 'https://himatif.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('toko', [
            'title' => 'HIMATIF UNIMAL Shop',
            'meta' => $this->meta,
            'products' => Product::latest()->paginate(8)
        ]);
    }
}
