<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah
{
    private static $content = '
        <p>Himpunan Mahasiswa Teknik Informatika (HIMATIF) merupakan sebuah organisai kampus di tingkat Program Studi Teknik Informatika.  HIMATIF didirikan pada hari selasa tanggal 2 Mei 2005. HIMATIF berkedudukan di Jurusan Teknik Informatika Universitas Malikussaleh, Lhokseumawe.</p>
            <p>HIMATIF didirikan dengan prinsip Disiplin, Keujangan, Kreatifitas, Keadilan, Kebersamaan, Kekeluargaan, Kerakyatan, Keilmuan dan Tolenransi.</p>
            <p><strong>Tujuan HIMATIF</strong> adalah menampung seluruh element mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe menuju kehidupan kampus kritis yang bertanggung jawab, dinamin, demokratis dan harmonis.</p>
            <h2 class="judul pt-4">
                Fungsi HIMATIF
            </h2>                      
            <ol>
                <li>Sebagai wadah dan sarana untuk menampung dan memperjuangkan aspirasi seluruh elemen mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe.</li>
                <li>Meningkatkan koordinasi dan kerjasama antara Organisasi Kemahasiswaan di lingkungan Universitas Malikussaleh, Lhokseumawe dan di luar Universitas Malikussaleh, Lhokseumawe.</li>
                <li>Sebagai wahana dalam melaksanakan kegiatan ekstrakurikuler yang bersifat penalaran dan keilmuan, pengembangan minat dan bakat, pengabdian kepada masyarakat serta berupaya untuk meningkatkan kesejahteraan mahasiswa dalam lingkup kegidupan kampus.</li>
                <li>Mejalin hubungan dengan Organisasi Sosial/Kemasyarakatan, Profesi/Fungsional, dan Perhimpunan untuk mengembangkan organisasi di dalam maupun di luar lingkungan Universitas Malikussaleh.</li>
                <li>Sebagai wadah untuk menumbuhkan dan meningkatkan profesionaisme mahasiswa Jurusan Teknik Informatika Fakultas Teknik Universitas Malikussaleh, Lhokseumawe dalam kehidupan ilmiah dan bermasyarakat.</li>
                <li>Sebagai wadah pengembangan pola pikir dan pola tindak terorganisir.</li><li>Turut mengangkat harkat dan mertabat almamater Universitas Malikussaleh, Lhokseumawe pada umumnya dan Jurusan Teknik Informatika pada khususnya.</li>
            </ol>
        ';

    public static function all()
    {
        return self::$content;
    }
}
