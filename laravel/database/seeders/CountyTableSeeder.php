<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('county')->delete();

        \DB::table('county')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Fejér',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Jász-Nagykun-Szolnok',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Baranya',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Heves',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Borsod-Abaúj-Zemplén',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Győr-Moson-Sopron',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Pest',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Veszprém',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Komárom-Esztergom',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Vas',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Somogy',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Bács-Kiskun',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Szabolcs-Szatmár-Bereg',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Csongrád',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Zala',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Békés',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Hajdú-Bihar',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Tolna',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Nógrád',
            ),
        ));


    }
}
