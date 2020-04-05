<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('urun')->truncate();
        DB::table('urun')->insert(['urun_adi' => 'Ülker Gofret','isletme_id'=> 2, 'slug' => 'ülker-gofret', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Eti Gofret', 'isletme_id'=> 2,'slug' => 'eti-gofret', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çokonat', 'isletme_id'=> 2,'slug' => 'cokonat', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido', 'isletme_id'=> 2,'slug' => 'dido', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çokonat', 'isletme_id'=> 2,'slug' => 'cokonat', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido', 'isletme_id'=> 2,'slug' => 'dido', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido Frambuaz','isletme_id'=> 2, 'slug' => 'dido-frambuaz', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido Trio','isletme_id'=> 2, 'slug' => 'dido-trio', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Maximus','isletme_id'=> 2, 'slug' => 'maximus', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Crunch','isletme_id'=> 2, 'slug' => 'crunch', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Snickers','isletme_id'=> 2, 'slug' => 'snickers', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Browni İntence','isletme_id'=> 2, 'slug' => 'browni-intence', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Karam','isletme_id'=> 2, 'slug' => 'karam', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Coco Star','isletme_id'=> 2, 'slug' => 'coco-star', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çokomilk','isletme_id'=> 2, 'slug' => 'coko-milk', 'fiyat'=> 1, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Albeni','isletme_id'=> 2, 'slug' => 'albeni', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Metro','isletme_id'=> 2, 'slug' => 'metro', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tadelle','isletme_id'=> 2, 'slug' => 'tadelle', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tadelle King Size','isletme_id'=> 2, 'slug' => 'tadelle-king-size', 'fiyat'=> 4, 'aciklama'=>'50 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Canga','isletme_id'=> 2, 'slug' => 'canga', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Canga Gofret','isletme_id'=> 2, 'slug' => 'canga-gofret', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Raffaello','isletme_id'=> 2, 'slug' => 'raffaello', 'fiyat'=> 5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Caramio','isletme_id'=> 2, 'slug' => 'caramio', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Laviva','isletme_id'=> 2, 'slug' => 'laviva', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Nestle Gofret','isletme_id'=> 2, 'slug' => 'nestle-gofret', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Nestle 1927','isletme_id'=> 2, 'slug' => 'nestle-1927', 'fiyat'=> 5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Baton Fındık','isletme_id'=> 2, 'slug' => 'ulker-baton-findik', 'fiyat'=> 3, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Kare Fındık','isletme_id'=> 2, 'slug' => 'ulker-kare-findik', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Sütlü Baton','isletme_id'=> 2, 'slug' => 'ulker-sutlu-baton', 'fiyat'=> 3, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Sütlü Kare','isletme_id'=> 2, 'slug' => 'ulker-sutlu-kare', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Napoliten','isletme_id'=> 2, 'slug' => 'napoliten', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Antepli Baton','isletme_id'=> 2, 'slug' => 'ulker-antepli-baton', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ülker Antepli Kare','isletme_id'=> 2, 'slug' => 'ulker-antepli-kare', 'fiyat'=> 7, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Damak Baton','isletme_id'=> 2, 'slug' => 'damak-baton', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Damak Kare','isletme_id'=> 2, 'slug' => 'damak-kare', 'fiyat'=> 7, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Damak İnci','isletme_id'=> 2, 'slug' => 'damak-inci', 'fiyat'=> 7, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Damak Bitter','isletme_id'=> 2, 'slug' => 'damak-biter', 'fiyat'=> 7, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Kinder Bueno','isletme_id'=> 2, 'slug' => 'kinder-bueno', 'fiyat'=> 6, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Nutella Go','isletme_id'=> 2, 'slug' => 'nutella-go', 'fiyat'=> 6, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Kinder Sürpriz','isletme_id'=> 2, 'slug' => 'kinder-surpriz', 'fiyat'=> 6.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Halley Karadut','isletme_id'=> 2, 'slug' => 'halley-karadut', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Halley Atıştırmalık','isletme_id'=> 2, 'slug' => 'halley-atistirmalik', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Biskrem','isletme_id'=> 2, 'slug' => 'biskrem', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Saklıköy','isletme_id'=> 2, 'slug' => 'saklikoy', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Saklıköy Çikolatalı','isletme_id'=> 2, 'slug' => 'saklikoy-cikolatali', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Saklıköy Yuvarlak','isletme_id'=> 2, 'slug' => 'saklikoy-yuvarlak', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Canpare','isletme_id'=> 2, 'slug' => 'canpare', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Hanımeller','isletme_id'=> 2, 'slug' => 'hanimeller', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Albeni Atıştırmalık','isletme_id'=> 2, 'slug' => 'albeni-atistirmalik', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dore','isletme_id'=> 2, 'slug' => 'dore', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tutku','isletme_id'=> 2, 'slug' => 'tutku', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tutku Mayhoş','isletme_id'=> 2, 'slug' => 'tutku-mayhos', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Benimo','isletme_id'=> 2, 'slug' => 'benimo', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Benimo Muzlu','isletme_id'=> 2, 'slug' => 'benimo-muzlu', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Benimo Çilekli','isletme_id'=> 2, 'slug' => 'benimo-cilekli', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Probis','isletme_id'=> 2, 'slug' => 'probis', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Negro','isletme_id'=> 2, 'slug' => 'negro', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Eti Cin','isletme_id'=> 2, 'slug' => 'eti-cin', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Burçak Sütlü Kremalı','isletme_id'=> 2, 'slug' => 'burcak-sutlu-kremali', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Burçak Sütlü Kakaolu','isletme_id'=> 2, 'slug' => 'burcak-sutlu-kakaolu', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Burçak Sütlü Çikolatalı','isletme_id'=> 2, 'slug' => 'burcak-sutlu-cikolatali', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Browni','isletme_id'=> 2, 'slug' => 'browni', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dankek','isletme_id'=> 2, 'slug' => 'dankek', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Popkek','isletme_id'=> 2, 'slug' => 'popkek', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Topkek','isletme_id'=> 2, 'slug' => 'topkek', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çubuk Kraker','isletme_id'=> 2, 'slug' => 'cubuk-kraker', 'fiyat'=> 1, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Crax','isletme_id'=> 2, 'slug' => 'crax', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Susamlı Çubuk Kraker','isletme_id'=> 2, 'slug' => 'susamli-cubuk-kraker', 'fiyat'=> 1, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Haribo Warms','isletme_id'=> 2, 'slug' => 'haribo-warms', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Haribo Star Mix','isletme_id'=> 2, 'slug' => 'haribo-star-mix', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Haribo Twin Snakes','isletme_id'=> 2, 'slug' => 'haribo-twin-snakes', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Haribo Cola','isletme_id'=> 2, 'slug' => 'haribo-cola', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Haribo Goldbears','isletme_id'=> 2, 'slug' => 'haribo-gold-bears', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Pringles','isletme_id'=> 2, 'slug' => 'pringles', 'fiyat'=> 12.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Lays','isletme_id'=> 2, 'slug' => 'lays', 'fiyat'=> 4.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Ruffles','isletme_id'=> 2, 'slug' => 'Ruffles', 'fiyat'=> 4.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Doritos','isletme_id'=> 2, 'slug' => 'doritos', 'fiyat'=> 4.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çerezza','isletme_id'=> 2, 'slug' => 'cerezza', 'fiyat'=> 4.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Badem İçi','isletme_id'=> 2, 'slug' => 'badem-ici', 'fiyat'=> 12, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Badem İçi 45 gr.','isletme_id'=> 2, 'slug' => 'badem-ici-45-gr', 'fiyat'=> 6, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Festival','isletme_id'=> 2, 'slug' => 'festival', 'fiyat'=> 9, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Kokteyl','isletme_id'=> 2, 'slug' => 'kokteyl', 'fiyat'=> 6, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Antep Fıstığı Büyük','isletme_id'=> 2, 'slug' => 'antep-fistigi-buyuk', 'fiyat'=> 14, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Antep Fıstığı Küçük','isletme_id'=> 2, 'slug' => 'antep-fistigi-kucuk', 'fiyat'=> 6.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Fındık Büyük','isletme_id'=> 2, 'slug' => 'findik-buyuk', 'fiyat'=> 9, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Fındık Küçük','isletme_id'=> 2, 'slug' => 'findik-kucuk', 'fiyat'=> 4.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Favori','isletme_id'=> 2, 'slug' => 'favori', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'İşlenmiş Fıstık','isletme_id'=> 2, 'slug' => 'islenmis-fistik', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tuzlu Fıstık Büyük','isletme_id'=> 2, 'slug' => 'tuzlu-fistik-buyuk', 'fiyat'=> 5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tuzlu Fıstık Küçük','isletme_id'=> 2, 'slug' => 'tuzlu-fistik-kucuk', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tadım Klasik','isletme_id'=> 2, 'slug' => 'tadim-klasik', 'fiyat'=> 6, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Acı Soslu Fıstık','isletme_id'=> 2, 'slug' => 'aci-soslu-fistik', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Barbekü Soslu Fıstık','isletme_id'=> 2, 'slug' => 'barbeku-soslu-fistik', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çift Sarı Leblebi','isletme_id'=> 2, 'slug' => 'cift-sari-leblebi', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Tuzlu Sarı Leblebi','isletme_id'=> 2, 'slug' => 'tuzlu-sari-leblebi', 'fiyat'=> 4, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Kabak Çekirdeği Büyük','isletme_id'=> 2, 'slug' => 'kabak-cekirdegi-buyuk', 'fiyat'=> 5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Kabak Çekirdeği Küçük','isletme_id'=> 2, 'slug' => 'kabak-cekirdegi-kucuk', 'fiyat'=> 2.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Beyaz Leblebi','isletme_id'=> 2, 'slug' => 'beyaz-leblebi', 'fiyat'=> 3.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => '200 gr. Çekirdek','isletme_id'=> 2, 'slug' => '200-gr-cekirdek', 'fiyat'=> 7.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => '200 gr. Bol Tuzlu Çekirdek','isletme_id'=> 2, 'slug' => '200-gr-bol-tuzlu-cekirdek', 'fiyat'=> 7.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çekirdek 1','isletme_id'=> 2, 'slug' => 'cekirdek-1', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çekirdek 2','isletme_id'=> 2, 'slug' => 'cekirdek-2', 'fiyat'=> 3, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola Zero 330 ml.','isletme_id'=> 2, 'slug' => 'coca-cola-zero-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola Zero 1L.','isletme_id'=> 2, 'slug' => 'coca-cola-zero-1-l', 'fiyat'=> 4, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Şalgam Büyük','isletme_id'=> 2, 'slug' => 'salgam-buyuk', 'fiyat'=> 5, 'aciklama'=>'B']);
        DB::table('urun')->insert(['urun_adi' => 'Şalgam Küçük','isletme_id'=> 2, 'slug' => 'salgam-kucuk', 'fiyat'=> 3, 'aciklama'=>'K']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 2.5 L.','isletme_id'=> 2, 'slug' => 'coca-cola-25-l', 'fiyat'=> 6.5, 'aciklama'=>'2.5 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 2 L.','isletme_id'=> 2, 'slug' => 'coca-cola-2-l', 'fiyat'=> 5.5, 'aciklama'=>'2 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 1.5 L.','isletme_id'=> 2, 'slug' => 'coca-cola-15-l', 'fiyat'=> 5, 'aciklama'=>'1.5 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 1 L.','isletme_id'=> 2, 'slug' => 'coca-cola-1-l', 'fiyat'=> 4, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 330 ml.','isletme_id'=> 2, 'slug' => 'coca-cola-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Coca Cola 200 ml.','isletme_id'=> 2, 'slug' => 'coca-cola-200-ml', 'fiyat'=> 2, 'aciklama'=>'200 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Fanta 2.5 L.','isletme_id'=> 2, 'slug' => 'fanta-25-l', 'fiyat'=> 5.5, 'aciklama'=>'2.5 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Fanta 2 L.','isletme_id'=> 2, 'slug' => 'fanta-2-l', 'fiyat'=> 5, 'aciklama'=>'2 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Fanta 1 L.','isletme_id'=> 2, 'slug' => 'fanta-1-l', 'fiyat'=> 4, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'İce Tea 2 L.','isletme_id'=> 2, 'slug' => 'ice-tea-2-l', 'fiyat'=> 5.5, 'aciklama'=>'2 L.']);
        DB::table('urun')->insert(['urun_adi' => 'İce Tea 1 L.','isletme_id'=> 2, 'slug' => 'ice-tea-1-l', 'fiyat'=> 4, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'İce Tea 330 ml.','isletme_id'=> 2, 'slug' => 'ice-tea-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Sprite 1 L.','isletme_id'=> 2, 'slug' => 'sprite-1-l', 'fiyat'=> 3, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Sprite 330 ml.','isletme_id'=> 2, 'slug' => 'sprite-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => '7up','isletme_id'=> 2, 'slug' => '7up', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Fuse Tea 330 ml.','isletme_id'=> 2, 'slug' => 'fuse-tea-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Dimes Meyve Suyu','isletme_id'=> 2, 'slug' => 'dimes-meyve-suyu', 'fiyat'=> 5, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Uludağ Limonata 1 L.','isletme_id'=> 2, 'slug' => 'uludag-limonata-1-l', 'fiyat'=> 5, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Uludağ Limonata 330 ml.','isletme_id'=> 2, 'slug' => 'uludag-limonata-330-ml', 'fiyat'=> 3, 'aciklama'=>'330 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Uludağ Gazoz','isletme_id'=> 2, 'slug' => 'uludag-gazoz', 'fiyat'=> 2.5, 'aciklama'=>'200 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Uludağ Gazoz 1 L.','isletme_id'=> 2, 'slug' => 'uludag-gazoz-1-l', 'fiyat'=> 3.5, 'aciklama'=>'1 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Uludağ Gazoz 2.5 L.','isletme_id'=> 2, 'slug' => 'uludag-gazoz-25-l', 'fiyat'=> 4.5, 'aciklama'=>'2.5 L.']);
        DB::table('urun')->insert(['urun_adi' => 'Nescafe Express','isletme_id'=> 2, 'slug' => 'nescafe-express', 'fiyat'=> 7, 'aciklama'=>'200 ml.']);
        DB::table('urun')->insert(['urun_adi' => 'Redbull Büyük','isletme_id'=> 2, 'slug' => 'redbull-buyuk', 'fiyat'=> 10, 'aciklama'=>'B']);
        DB::table('urun')->insert(['urun_adi' => 'Redbull Orta','isletme_id'=> 2, 'slug' => 'redbull-buyuk', 'fiyat'=> 8, 'aciklama'=>'O']);
        DB::table('urun')->insert(['urun_adi' => 'Redbull Küçük','isletme_id'=> 2, 'slug' => 'redbull-kucuk', 'fiyat'=> 6, 'aciklama'=>'K']);
        DB::table('urun')->insert(['urun_adi' => 'Burn','isletme_id'=> 2, 'slug' => 'burn', 'fiyat'=> 5, 'aciklama'=>'O']);
        DB::table('urun')->insert(['urun_adi' => 'Monster','isletme_id'=> 2, 'slug' => 'monster', 'fiyat'=> 6, 'aciklama'=>'O']);


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

