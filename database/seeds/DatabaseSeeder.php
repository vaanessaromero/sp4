<?php

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
        DB::insert('insert into journals values(?,?,?,?,?,?,?,?,?,?)', [NULL,'title1','author1','2001-01-01','abstract1','RegionI','Horticulture','hahaha1',NULL,NULL]);
        DB::insert('insert into journals values(?,?,?,?,?,?,?,?,?,?)', [NULL,'title2','author2','2002-02-02','abstract2','RegionII','Business','hahaha2',NULL,NULL]);
        DB::insert('insert into journals values(?,?,?,?,?,?,?,?,?,?)', [NULL,'title3','author3','2003-03-03','abstract3','RegionIII','Aquaculture','hahaha3',NULL,NULL]);

        DB::insert('insert into users values(?,?,?,?,?,?,?,?,?,?)', [NULL,'Vanessa','Romero','vlromero@up.edu.ph','$2y$10$SLfUbQUlopMDrcSXcoNdkuF5ffLAGI3WcUHZ5fXGvSi04JrhCrWQ.',0,'NationalCapitalRegion',NULL,NULL,NULL]);

        DB::insert('insert into subjects values(?,?,?,?)', [NULL,'Horticulture',NULL,NULL]);
        DB::insert('insert into subjects values(?,?,?,?)', [NULL,'Business',NULL,NULL]);
        DB::insert('insert into subjects values(?,?,?,?)', [NULL,'Aquaculture',NULL,NULL]);

        DB::insert('insert into journal_subject values(?,?,?)', [NULL,1,1]);
        DB::insert('insert into journal_subject values(?,?,?)', [NULL,2,2]);
        DB::insert('insert into journal_subject values(?,?,?)', [NULL,3,3]);

    }
}
