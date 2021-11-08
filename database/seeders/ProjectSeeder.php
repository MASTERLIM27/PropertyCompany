<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'code' => 'PTC',
            'name' => 'Pakuwon Trade Center',
            'type' => 'Mall & Entertainment',
            'developer' => 'PWON',
            'videolink' => 'https://www.youtube.com/embed/jmGAdf-OL-E',
            'description' => 'Pakuwon Trade Center offers the best affordable shopping experience from a large variety of local and international products. The trade center promotes opportunities for small enterprises and domestic retailers to expand their business. Incorporated and adjacent to the large size Pakuwon Mall, the center can enhance customer traffics through the common share of car parking. Anchored by Ace Hardware and Informa, the center offers an one stop shopping concept for home makers.

            This trade center is well known for its exquisite local cuisines. Ranging from the famous fried duck to potatoes donuts. Other than food, people visit this center for local fashion, accessories, shoes, jewelry, timepieces, videos, gifts, souvenirs, books and electrical equipment.
            
            The most unique offering in the trade center is the pet center where an array of pet shops are located. You can find many irresistible little animals for sales here. They offer pet glooming services in the shop too and some have pet hotel services where you can leave your little love ones in comfort while travelling.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
        DB::table('projects')->insert([
            'code' => 'TP',
            'name' => 'Tunjungan Plaza',
            'type' => 'Mall & Entertainment',
            'developer' => 'PWON',
            'videolink' => 'https://www.youtube.com/embed/iFE1d-o2vqY',
            'description' => 'Tunjungan Plaza adalah sebuah pusat perbelanjaan terbesar kedua setelah Pakuwon Mall beserta PTC di Surabaya, sekaligus plaza yang paling populer di masyarakat kota Surabaya, didirikan pada tahun 1986, dan terakhir dibuka Tunjungan Plaza VI pada tahun 2017.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
        DB::table('projects')->insert([
            'code' => 'CTRS',
            'name' => 'Citraland Surabaya',
            'type' => 'Housing Area',
            'developer' => 'CTRA',
            'videolink' => 'https://www.youtube.com/embed/XzEAqGeOCaI',
            'description' => 'CitraLand Surabaya adalah sebuah kota mandiri yang bersih, rapi, dan tertata. Dengan kawasan yang luas, pengelolaan kebersihan dirancang secara khusus dari segi manajemen dan memakai alat-alat modern.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
        DB::table('projects')->insert([
            'code' => 'GRHF',
            'name' => 'Graha Family',
            'type' => 'Housing Area',
            'developer' => 'DILD',
            'videolink' => 'https://www.youtube.com/embed/Hu-uQRwWQFY',
            'description' => 'Graha Famili is a premium residential area in East Java, specifically in West Surabaya. This housing offers easy access to Satellite Toll gate as well as office center, shopping center, entertainment center, hospital, and national school.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
    }
}
