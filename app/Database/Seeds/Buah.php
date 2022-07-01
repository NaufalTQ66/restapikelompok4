<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class Buah extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
        'namabuah' => 'rambutan',
        'tutorialbuah' => 'masih kosong',
        'manfaatbuah' => 
        '• Memelihara Kesehatan Sistem Pencernaan\n• Meningkatkan Daya Tahan Tubuh\n• Memelihara Kesehatan Jantung\n• Menurunkan Berat Badan\n• Memelihara Kesehatan Tulang\n• Mencegah Kanker dan Batu Ginjal',
    ],
    [
        'namabuah' => 'mangga',
        'tutorialbuah' => '
            •Ambil Ketilodon dari Pericarp
                Ketilodon ini akan menjadi bibit mangga yang nantinya akan ditanam. Namun pastikan ketilodon diambil dari mangga yang sehat, kualitasnya bagus, dan tidak memiliki penyakit.
            •Siapkan Tempat untuk Menyemaikan Ketilodon
                Untuk menyemaikan ketilodon, siapkan pot atau wadah berukuran 100 cm x 50 cm dan isi pot dengan media tanam berupa campuran tanah dengan pupuk kandang, yang perbandingannya adalah 3:1.
            •Siram Bibit Mangga secara Rutin
                Dalam proses menyemai bibit mangga, maka bibit dan media tanam tidak boleh dalam keadaan yang terlalu kering dan kekurangan air. Biasanya, bibit buah mangga yang kita tanam mulai mengeluarkan kecambah jika sudah berusia dua minggu.
            •Pindahkan Pohon Mangga ke Wadah yang Lebih Besar
                Namun sebelum memindahkan pohon mangga ke polybag yang lebih besar atau lahan tanam, diamkan media tanam atau lahan selama 1,5 minggu sampai 2 minggu sebelum memindahkan pohon mangga.
            •Proses Pemanenan
                Biasanya, buah mangga dari pohon baru bisa dipanen setelah 5 - 6 tahun dari penanaman bibit.',
        'manfaatbuah' => '
            •Menjaga kesehatan mata
            •Melindungi dari kanker
            •Menurunkan risiko diabetes
            •Menjaga kesehatan kulit dan rambut
            •Kaya antioksidan
            •Meningkatkan kekebalan tubuh
            •Menjaga kesehatan jantung',
    ],
    [
        'namabuah' => 'jeruk',
        'tutorialbuah' => '
            •Persiapan Bibit
                Ambil biji jeruk manis yang matang dari dalam daging jeruk manis. Usahakan agar biji jeruk tetap dalam keadaan utuh dan sehat. Jumlah biji yang digunakan dapat Anda sesuaikan dengan jumlah pot yang akan digunakan. Sebaiknya, dalam satu pot hanya diisi dengan dua biji jeruk manis.
            •Persiapan Media Tanam
                Siapkan tanah yang telah digemburkan dengan cara dicangkul-cangkul. Ayak tanah tersebut hingga tersisa butiran-butiran kecil saja. Pastikan tanah tetap kering dan tidak menggumpal. Karena tanah yang padat dan membentuk bongkahan akan lebih susah ditembus akar dan susah untuk diaduk dengan bahan lain.
            •Penanaman Bibit
                Buat lubang kurang lebih dengan kedalaman 5 cm di masing-masing pot.
                Dalam satu lubang, maksimal jumlah biji yang dapat Anda masukkan adalah 2.
                Setelah biji dimasukkan, tutup kembali lubang tanam menggunakan media tanam yang telah dibuat.
                Beri siraman air secukupnya.
            •Perawatan dan Pemeliharaan
                Tabulampot jeruk manis membutuhkan sinar matahari yang cukup. Dalam satu hari, paling tidak tabulampot jeruk manis berada di bawah sinar matahari langsung selama kurang lebih 5 jam. Oleh karena itu, letakkan tabulampot jeruk manis di tempat terbuka dan terkena paparan matahari langsung. Jangan lupa juga untuk rutin melakukan penyiraman, setidaknya di pagi hari dan sore hari.',
        'manfaatbuah' => '
            •Mengatur Tekanan Darah Tinggi
            •Mencegah Kanker
            •Mencegah Penyakit Jantung
            •Meningkatkan Kekebalan Tubuh
            •Memurnikan Darah
            •Memperkuat Tulang
            •Memperkuat Gigi',
    ],
    [
        'namabuah' => 'salak',
        'tutorialbuah' => '
            •Memilih Bibit Salak Pondoh
                Pastikan usia bibit salak pondoh di polybag sudah lebih dari 3 bulan
                Selama di polybag, bibit salak sudah tumbuh tunas daun baru
                Bibit dalam kondisi hijau segar yang menandakan tidak kekurangan air
                Pilih bibit yang tidak terlalu besar agar mudah diangkut
                Bibit sudah cukup tumbuh akar baru
            •Menyiapkan Media Tanam
                Apabila sudah menentukan lahan penanaman, buatlah lubang tanam dengan sistem
            memilih sistem monokultur atau polikultur. Ukuran lubang monokultur 50 x 50 x 50 cm
            dengan jarak tanam 2 x 2 m sampai 2,5 x 2,5 m.
            •Pemupukan
                Setelah menyiapkan lubang tanam, langkah selanjutnya adalah melakukan pemupukan menggunakan pupuk kandang atau pupuk organik yang cocok untuk salak pondoh. Masing-masing lubang tanam diberi pupuk kandang sebanyak 10 kg.
            •Penyulaman Bibit
                Ketika sudah melalui masa tanam, lakukan penyulaman setiap awal musim hujan. Penyulaman ini dilakukan dengan cara memeriksa produktivitas tanaman setelah 2-3 minggu penanaman bibit. Selain itu, kamu juga bisa mengganti bibit pohon salak pondoh yang sudah mati, tidak berkembang, dan tidak berproduksi dengan baik.
            •Perawatan Tanaman
                Perawatannya pun sangat sederhana, mulailah dengan rajin membersihkan lahan seperti memberantas rumput liar dan membuang kotoran yang mengganggu.',
        'manfaatbuah' => '
            •Menjaga Kesehatan Pencernaan
            •Menurunkan Berat Badan
            •Menjaga Kadar Gula Darah
            •Baik untuk Daya Tahan Tubuh
            •Mencerahkan Kulit
            •Mendukung Kesehatan Mata
            •Menambah Stamina',
    ]
    ];
    // insert semua data ke tabel
    $this->db->table('buah')->insertBatch($data);
    //singgle insert
    //->insert($data);
    //multiple insert
    //->insertBatch($data);

    }
    }
}