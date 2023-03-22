<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Khairul Aqram",
            "jabatan" => "Ketua Umum",
            "foto" => "aqram.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Akbar Gultom",
            "jabatan" => "Wakil Ketua Umum",
            "foto" => "akbar.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Maulana Muhammad Sandy",
            "jabatan" => "Sekretaris",
            "foto" => "lana.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Fatia Rezi",
            "jabatan" => "Bendahara",
            "foto" => "fatia.gif",
            "divisi" => "teras",
        ],

        // Kesekretariatan
        [
            "nama" => "Maya Ulfa",
            "jabatan" => "Ketua",
            "foto" => "maya.gif",
            "divisi" => "kesekretariatan",
        ],
        [
            "nama" => "Ulfa nafarisi",
            "jabatan" => "Wakil Ketua",
            "foto" => "ulfa.gif",
            "divisi" => "kesekretariatan",
        ],
        [
            "nama" => "Rahayu Fitriani",
            "jabatan" => "Anggota",
            "foto" => "rahayu.gif",
            "divisi" => "kesekretariatan",
        ],

        // Kaderisasi dan Pengembangan
        [
            "nama" => "Tresnawan Maulana",
            "jabatan" => "Ketua",
            "foto" => "tresna.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Asni Damayanti",
            "jabatan" => "Wakil Ketua",
            "foto" => "asni.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Naylis Sa'adah",
            "jabatan" => "Anggota",
            "foto" => "naylis.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Syaifuddin Yusuf Harahap",
            "jabatan" => "Anggota",
            "foto" => "syaif.gif",
            "divisi" => "kaderisasi",
        ],

        // Pendidikan dan Latihan
        [
            "nama" => "Atikah Maharani",
            "jabatan" => "Ketua",
            "foto" => "atikah.gif",
            "divisi" => "pendidikan",
        ],
        [
            "nama" => "Nurul fitri",
            "jabatan" => "Wakil Ketua",
            "foto" => "nurul.gif",
            "divisi" => "pendidikan",
        ],
        [
            "nama" => "Ummi Suaibah Pulungan ",
            "jabatan" => "Anggota",
            "foto" => "ummi.gif",
            "divisi" => "pendidikan",
        ],
        [
            "nama" => "Fitria Andini",
            "jabatan" => "Anggota",
            "foto" => "fitria.gif",
            "divisi" => "pendidikan",
        ],

        // Media & Jaringan
        [
            "nama" => "Elisa Fitri",
            "jabatan" => "Ketua",
            "foto" => "elisa.gif",
            "divisi" => "media",
        ],
        [
            "nama" => "Yesi Widiawani",
            "jabatan" => "Wakil Ketua",
            "foto" => "yesi.gif",
            "divisi" => "media",
        ],
        [
            "nama" => "Yulia Fatimah",
            "jabatan" => "Anggota",
            "foto" => "yulia.gif",
            "divisi" => "media",
        ],
        [
            "nama" => "Muhammad Rizky",
            "jabatan" => "Anggota",
            "foto" => "rizky.gif",
            "divisi" => "media",
        ],

        // Keagamaan dan Sosial
        [
            "nama" => "Amellia Gustina",
            "jabatan" => "Ketua",
            "foto" => "amel.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Nurul Azizi",
            "jabatan" => "Wakil Ketua",
            "foto" => "nurul.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Nauril Aini Nemah Tuah",
            "jabatan" => "Anggota",
            "foto" => "nauril.gif",
            "divisi" => "agama",
        ],

        // HUMAS
        [
            "nama" => "Yulisma Safitri",
            "jabatan" => "Ketua",
            "foto" => "yulisma.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Nyi Safitri",
            "jabatan" => "Wakil Ketua",
            "foto" => "nyi.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Muhammad Hafiz Suratmin",
            "jabatan" => "Anggota",
            "foto" => "hafiz.gif",
            "divisi" => "humas",
        ],

        // Keorganisasian
        [
            "nama" => "Muhammad Haikal Bripou",
            "jabatan" => "Anggota",
            "foto" => "haikal.gif",
            "divisi" => "organisasi",
        ],
        [
            "nama" => "Anthala insyra azra",
            "jabatan" => "Wakil Ketua",
            "foto" => "aan.gif",
            "divisi" => "organisasi",
        ],
        [
            "nama" => "Olivia Shinta Rahayu",
            "jabatan" => "Anggota",
            "foto" => "olivia.gif",
            "divisi" => "organisasi",
        ],

        // Kewirausahaan
        [
            "nama" => "Ade Lucky Setiawan ",
            "jabatan" => "Ketua",
            "foto" => "lucky.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Muhammad Basir ",
            "jabatan" => "Wakil Ketua",
            "foto" => "basir.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Afrida Wati ",
            "jabatan" => "Anggota",
            "foto" => "afrida.gif",
            "divisi" => "kwh",
        ],
    ];

    public static function all()
    {
        return collect(self::$pengurus);
    }

    public static function find($divisi)
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', $divisi);
    }

    public static function find2()
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', 'teras');
    }
}
