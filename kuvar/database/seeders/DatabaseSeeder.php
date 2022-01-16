<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Vrsta::truncate();
      \App\Models\User::truncate();
       \App\Models\Zemlja::truncate();
       \App\Models\Recept::truncate();
        
        $user=\App\Models\User::factory(1)->create();
      
        $v1=\App\Models\Vrsta::create(['name'=>'Predjelo','slug'=>'predjelo']);
        $v2=\App\Models\Vrsta::create(['name'=>'Glavno jelo','slug'=>'glavno jelo']);
        $v3=\App\Models\Vrsta::create(['name'=>'Dezert','slug'=>'dezert']);
        
        $z1=\App\Models\Zemlja::create(['name'=>'Srbija','slug'=>'Serbia']);
        $z2=\App\Models\Zemlja::create(['name'=>'BIH','slug'=>'BIH']);
        $z3=\App\Models\Zemlja::create(['name'=>'Russia','slug'=>'Russia']);
       


        $recept1=\App\Models\Recept::create([
            'title'=>'Plazma torta',
            'slug'=>'Slatko',
            'body'=>'Penasto umutiti margarin sa šećerom u prahu.Dodati keks i sok pa rukama dobro sve sjediniti.',
            'vrsta_id'=>$v3->id,
            'zemlja_id'=>$z2->id,
            'user_id'=>'1'
        ]);

        $recept2=\App\Models\Recept::create([
            'title'=>'Sarma',
            'slug'=>'Domaca kuhinja',
            'body'=>'Sa manjih glavica kiselog kupusa skidati jedan po jedan list, nožem odseći deblja rebra sa njih i dobro ih oprati u hladnoj vodi.',
            'vrsta_id'=>$v2->id,
            'zemlja_id'=>$z1->id,
            'user_id'=>'1'
        ]);


        $recept3=\App\Models\Recept::create([
            'title'=>'Kajmak',
            'slug'=>'Hladno predjelo',
            'body'=>'Ukajmačeno mleko treba da stoji na temperaturi od 40 stepeni, bar pet-šest časova, a onda sledi branje.',
            'vrsta_id'=>$v1->id,
            'zemlja_id'=>$z1->id,
            'user_id'=>'1'
        ]);

    }
}
