<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class Tanamanlain extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
        'namatanamanlain' => 'lidah buaya',
        'tutorialtanamanlain' => '
            1. Siapkan pot dan media tanam yang sesuai
                Langkah pertama dalam cara menanam lidah buaya adalah menyiapkan potnya terlebih dahulu. Anda bisa menggunakan pot terakota yang terbuat dari tanah liat karena pot jenis ini dianggap lebih ramah bagi tanaman dan lingkungan. Pastikan pot yang Anda beli memiliki banyak lubang drainase.
            2. Tanam bibit lidah buaya
                Siapkan bibit lidah buaya yang ingin Anda tanam.
                Galilah sedikit media tanam yang sudah disiapkan sebelumnya, lalu masukkan bibit lidah buaya. Sebaiknya Anda jangan gali terlalu dalam karena lidah buaya memiliki 	akar yang relatif pendek dan menyebar di sekitar area yang mendekati permukaan 	tanah.
            3. Siram lidah buaya sekali saja setiap 2-3 minggu
                Salah satu faktor penting yang perlu Anda perhatikan dalam cara menanam lidah buaya adalah menyiramnya dengan benar. Siram tanaman lidah buaya sekali saja setiap 2-3 minggu. Pastikan media tanam lidah buaya benar-benar kering sebelum disiram air lagi.
            4. Pastikan lidah buaya mendapatkan cukup sinar matahari
                Sinar matahari memiliki peran penting dalam kesehatan tanaman lidah buaya. Oleh karena itu, pastikan lidah buaya mendapatkan cukup sinar matahari. Anda bisa membiarkan tanaman ini terpapar sinar matahari secara langsung sekitar 6-8 jam.
            5. Berikan pupuk setahun sekali saja
                Lidah buaya umumnya tidak membutuhkan pupuk untuk bertahan hidup. Meski demikian,pupuk tetap bisa memberikan manfaat jika diberikan dalam porsi yang tepat.',
        'manfaattanamanlain' => '
            1. Meningkatkan daya tahan tubuh 
            2. Batuk
            3. Plak gigi
            4. Menyembuhkan luka bakar 
            5. Mengobati sariawan
            6. Mengobati tekanan darah tinggi
            7. Mengobati sembelit',
    ],
    [
        'namatanamanlain' => 'aglaonema',
        'tutorialtanamanlain' => '
            1. Media Tanam Aglaonema
                Media tanam tanaman hias aglaonema sebaiknya mempunyai tingkat keasaman (pH) netral antara 6-7. Kamu bisa menggunakan campuran antara humus daun dan pasir sebagai 	media tanam dengan perbandingan 3:1.
            2. Penyiraman Aglaonema
                Penyiraman bisa dilakukan satu hari sekali dengan takaran air yang disesuaikan 	dengan kelembaban media tanam itu sendiri. Ingat, aglaonema ialah tanaman yang 	menyenangi area tidak kering namun tak terlalu basah. Jangan memakai air kaporit pada dalam merawat dan menyiram tanaman Aglaonema.
            3. Pemupukan Tanaman Aglaonema
                Pemupukan perlu dilakukan dalam tiga bulan sekali denganmemakaipupuk yang memang dirkomendasikan oleh para ahli. Kamu dapat bertanya kepada tukang taman yang kamu 	percaya untuk merk atau jenis pupuk apa yang cocok bagi aglaonema beserta takarannya. Untuk pupuk alami dapat menggunakan air cucian beras. Siram ke media tanam, bukan di daun/batang.',
        'manfaattanamanlain' => 
        '1. Membuat ruangan lembab
        2. Membersihkan udara
        3. Menyerap racun
        4. Meredakan stres',
    ],
    [
        'namatanamanlain' => 'sereh',
        'tutorialtanamanlain' => '
            1. Kamu bisa membeli biji serai yang membutuhkan waktu sekitar 21 hari untuk berkecambah. Taburkan benih dengan kedalaman 5cm dan dengan jarak 50cm. 
            2. Kamu bisa memperbanyak serai dari memotongnya dan menanam di tanah. 
            3. Kamu dapat membeli serai dan menggunakannya sesuai keinginan. Ingatlah bahwa kamu harus mencabut batang dari tanah untuk digunakan dalam memasak, jadi jangan gunakan semuanya sekaligus.',
        'manfaattanamanlain' => '
            1. Mengobati infeksi mulut dan gigi berlubang
            2. Mengobati penyakit kulit
            3. Kaya Antioksidan
            4. Mengurangi peradangan
            5. Mengurangi diare
            6. Mencegah mual dan sakit perut',
    ],
    ];
    // insert semua data ke tabel
    $this->db->table('tanamanlain')->insertBatch($data);
    //singgle insert
    //->insert($data);
    //multiple insert
    //->insertBatch($data);

    }
    }
}