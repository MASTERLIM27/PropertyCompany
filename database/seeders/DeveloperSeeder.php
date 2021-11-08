<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            'name'=> 'Pakuwon Group',
            'code'=> 'PWON',
            'videolink'=> "https://www.youtube.com/embed/qScuwY7pht8",
            'description'=>"Established in 1982 and listed on both the Jakarta and Surabaya Stock exchanges since 1989, Pakuwon Group is a diversified real estate developer focused in Jakarta and Surabaya. The Company's portfolio of prime properties includes retail, residential, commercial and hospitality developments. The Company is vertically integrated across the full real estate value chain from land acquisition, property development, marketing and operational management.

            Pakuwon Group is the pioneer of the Superblock concept in Indonesia, a large-scale integrated mixed-use development of retail shopping mall, office, condominium and hotel. Its successfull track record and reputation within the property industry has secured strong long-term relationship with tenants and buyers, which provides a stable platform for rapid business expansion.",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
        DB::table('developers')->insert([
            'name'=> 'Ciputra Group',
            'code'=> 'CTRA',
            'videolink'=> "https://www.youtube.com/embed/nQKDUTX8PeA",
            'description'=>"Ciputra Group, which was established by Dr. Hc. Ir. Ciputra and his family in 1981, is now one of the leading diversified property developers in Indonesia. The group went public in 1994, and is now the holding company of PT Ciputra Development Tbk. The group has become the most diversified property company, in term of product, location and market segment.

            Ciputra Business Group pioneered large scale developments in Indonesia. From the outset, founder Dr. Hc. Ir. Ciputra demonstrated an entrepreneurial spirit that has led to the company’s success. The Group’s first project was CitraGarden City Jakarta (1981). Today CitraGarden City has expanded and transformed from a rural housing complex to a modern sustainable living space. This project offers comprehensive commercial, recreational, and public facilities, including a Family Club, sports facilities, meeting halls, a water treatment plant, and traditional and modern marketplaces, and schools, and health facilities. The Group was the first developer to anticipate the new Jakarta airport and build Ciputra Mall and Hotel near the airport.
            
            Over the past three decades, Ciputra Business Group has successfully developed more than 100 projects in 44 cities in Indonesia. The Group still has many projects in preparation and negotiation. The Group makes its name known and keeps leading position in the industry by choosing strategic locations for the development of self-contained urban communities which combine residential areas with shopping centers and commercial and industrial zones, and complete with transportation and communication infrastructures, and public services and facilities to support the necessary for people living, working, schooling, exercising and relaxing. Through partnerships, the group has quick grown into Vietnam, Cambodia, Indian and China.
            
            Starting in the early 1990’s, from its core business of housing development, Ciputra Group has diversified into 11 industries, including Township, Office Building, Shopping Center, Hotel, Apartment, Recreational Center, Sport Facility, Telecommunication, Healthcare, Brokerage, Media and Commerce. Ciputra Business Group is committed to cultivating future generations of true entrepreneurs. Ciputra University is the first academic institution focusing on entrepreneurial education in Indonesia. Ciputra Schools and University offer a complete entrepreneurship curriculum to the students. Spreading out the entrepreneurial spirit has become the group’s CSR focused, as well as supporting art in Indonesia by providing Ciputra Artpreneur.",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
        DB::table('developers')->insert([
            'name'=> 'Intiland Group',
            'code'=> 'DILD',
            'videolink'=> "https://www.youtube.com/embed/3rMZmkglDQA",
            'description'=>"Intiland is ready to serve Indonesia’s needs by providing residential, office building, retail, industrial estate, and many more. Intiland has developed some iconic buildings, such as Intiland Tower designed by renowned architect Paul Rudolph, as well as the seafront condominium Regatta and the integrated office South Quarter, both which were designed by Tom Wright, the architect of Burj Al Arab. Intiland has also built some prestigious and eco-friendly residential areas in big cities like Jakarta and Surabaya for those who love the comfort of luxury living.",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' =>\Carbon\Carbon::now()
        ]);
    }
}
