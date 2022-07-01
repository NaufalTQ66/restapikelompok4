<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class Sayur extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
        'namasayur' => 'sawi',
        'tutorialsayur' => '
            1. Pilih Benih yang Baik
                Berikut ini adalah ciri-ciri bibit sawi yang bagus dan unggul:
                Memiliki bentuk bulat seperti bola dan memiliki ukuran yang kecil
                Kulit dari bibit memiliki warna coklat yang cenderung gelap kehitam-hitaman
                Jika menyentuhnya dan menekannya, maka ia harus memiliki tekstur yang agak keras.
                Permukaan pada luar bibit sawi harus licin dan mengilap
                Jika membeli bibit jadi, maka bibit harus dalam kondisi utuh dan kemasan berbahan dasar alumunium foil
            2. Menyemai Benih
                Pertama, perlu merendam bibit dalam waktu 12 jam. Benih yang tidak mengapung lantas dikeringkan dan dimasukkan ke dalam polybag sebagai media tanam. Pastikan juga Moms telah mengisi polybag dengan humus dan pupuk dengan menggunakan perbandingan 1:3.
            3. Menanam Tunas Sawi di Polybag
                Dalam cara menanam sawi di polybag, maka tanah di dalam polybag harus merupakan tanah yang gembur. Kedalaman lubang lahan yang dibutuhkan untuk penanaman sawi adalah sekitar 40 cm, jadi membutuhkan polybag dengan ukuran yang sesuai.
            4. Merawat Tanaman Sawi di Polybag
                Pastikan sawi mendapatkan paparan sinar matahari yang tidak melebihi 8 jam. Tanaman juga perlu disiram dua kali dalam sehari, tapi saat musim hujan bisa dikurangi.
            5. Mengendalikan Hama hingga Panen
                Saat panen, bisa gunakan cara mencabut hingga akar atau hingga bagian batangnya saja. Kemudian simpan sawi dengan keadaan berdiri dan tambahkan percikan air agar tetap terlihat segar.',
        'manfaatsayur' => '
            1. Mengurangi risiko penyakit jantung
            2. Menjaga tubuh dari inflamasi
            3. Menjaga kesehatan dan kekuatan tulang
            4. Membantu menurunkan tekanan darah
            5. Menjaga kesehatan saluran pencernaan
            6. Mengatur kadar gula dalam darah
            7. Mencegah anemia',
    ],
    [
        'namasayur' => 'wortel',
        'tutorialsayur' => '
            1. Pilih wortel yang berkualitas.
            2. Potong 1/3 ujung umbi wortel.
            3. Pangkas daun dan sisakan 10 cm saja.
            4. Persiapkan bedeng.
            5. Pada permukaan wortel berikan pupuk Trichoderma, air, dan ZPT organik satu kali setiap 2 minggu.
            6. Siram tanaman pada waktu sore.
            7. Bunga biasanya muncul dalam 1 bulan.',
        'manfaatsayur' => '
            1. Menjaga kesehatan mata
            2. Mengurangi risiko kanker
            3. Menjaga kadar gula darah tetap normal
            4. Menurunkan risiko penyakit jantung
            5. Menyehatkan dan melancarkan pencernaan
            6. Mencegah obesitas
            7. Meningkatkan sistem kekebalan tubuh',
    ],
    [
        'namasayur' => 'sawi',
        'tutorialsayur' => '
            1. Mempersiapkan Bibit & Media Tanam
                Siapkan tanah gembur, pupuk kandang atau pupuk kompos, dan sekam padi
                Campurkan ketiganya dengan perbandingan 2:1:1 dan aduk rata
                Persiapkan pot atau polybag yang sudah berlubang di bagian bawah
                Penuhi ¾ bagian pot atau polybag dengan campuran media tanam
            2. Cara Menyemai Benih Selada
                Buat lubang di bagian tengah media tanam sedalam 2 cm
                Letakkan dua benih atau biji selada di lubang
                Timbun biji dengan campuran tanah dan pupuk kompos
                Padatkan tanah dengan menepuk-nepuk secara perlahan
                Siram dengan air secukupnya, gunakan spray agar tidak melukai biji di dalam tanah
                Letakkan di tempat teduh yang tetap terkena sinar matahari
            3. Proses Panen Selada
                Lakukan pemanenan selada di pagi hari
                Cabutlah selada sampai ke akarnya
                Pilah selada dengan daun yang masih segar
                Jika daun selada sudah layu atau kering, buanglah
                Cuci selada dengan air mengalir hingga bersih
                Kelompokkan selada berdasarkan besar daun yang sama
                Kumpulkan dalam satu keranjang bersih',
        'manfaatsayur' => '
                1. Mencegah dehidrasi
                2. Menangkal radikal bebas
                3. Menjaga kesehatan mata
                4. Menjaga kesehatan tulang
                5. Menurunkan berat badan
                6. Membantu menurunkan tekanan darah',
    ],
    
    ];
    // insert semua data ke tabel
    $this->db->table('sayur')->insertBatch($data);
    //singgle insert
    //->insert($data);
    //multiple insert
    //->insertBatch($data);

    }
    }
}