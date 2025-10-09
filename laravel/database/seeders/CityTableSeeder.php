<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aba',
                'county_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Abádszalók',
                'county_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Abaliget',
                'county_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Abasár',
                'county_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Abaújalpár',
                'county_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Abaújkér',
                'county_id' => 5,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Abaújlak',
                'county_id' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Abaújszántó',
                'county_id' => 5,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Abaújszolnok',
                'county_id' => 5,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Abaújvár',
                'county_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Abda',
                'county_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Abod',
                'county_id' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Abony',
                'county_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ábrahámhegy',
                'county_id' => 8,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Ács',
                'county_id' => 9,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Acsa',
                'county_id' => 7,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Acsád',
                'county_id' => 10,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Acsalag',
                'county_id' => 6,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Ácsteszér',
                'county_id' => 9,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Adács',
                'county_id' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Ádánd',
                'county_id' => 11,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Adásztevel',
                'county_id' => 8,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Adony',
                'county_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Adorjánháza',
                'county_id' => 8,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Adorjás',
                'county_id' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Ág',
                'county_id' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ágasegyháza',
                'county_id' => 12,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ágfalva',
                'county_id' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Aggtelek',
                'county_id' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Agyagosszergény',
                'county_id' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Ajak',
                'county_id' => 13,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Ajka',
                'county_id' => 8,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Aka',
                'county_id' => 9,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Akasztó',
                'county_id' => 12,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Alacska',
                'county_id' => 5,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Alap',
                'county_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Alattyán',
                'county_id' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Albertirsa',
                'county_id' => 7,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Alcsútdoboz',
                'county_id' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Aldebrő',
                'county_id' => 4,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Algyő',
                'county_id' => 14,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Alibánfa',
                'county_id' => 15,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Almamellék',
                'county_id' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Almásfüzitő',
                'county_id' => 9,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Almásháza',
                'county_id' => 15,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Almáskamarás',
                'county_id' => 16,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Almáskeresztúr',
                'county_id' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Álmosd',
                'county_id' => 17,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Alsóberecki',
                'county_id' => 5,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Alsóbogát',
                'county_id' => 11,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Alsódobsza',
                'county_id' => 5,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Alsógagy',
                'county_id' => 5,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Alsómocsolád',
                'county_id' => 3,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Alsónána',
                'county_id' => 18,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Alsónémedi',
                'county_id' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Alsónemesapáti',
                'county_id' => 15,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Alsónyék',
                'county_id' => 18,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Alsóörs',
                'county_id' => 8,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Alsópáhok',
                'county_id' => 15,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Alsópetény',
                'county_id' => 19,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Alsórajk',
                'county_id' => 15,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Alsóregmec',
                'county_id' => 5,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Alsószenterzsébet',
                'county_id' => 15,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Alsószentiván',
                'county_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Alsószentmárton',
                'county_id' => 3,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Alsószölnök',
                'county_id' => 10,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Alsószuha',
                'county_id' => 5,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Alsótelekes',
                'county_id' => 5,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Alsótold',
                'county_id' => 19,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Alsóújlak',
                'county_id' => 10,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Alsóvadász',
                'county_id' => 5,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Alsózsolca',
                'county_id' => 5,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Ambrózfalva',
                'county_id' => 14,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Anarcs',
                'county_id' => 13,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Andocs',
                'county_id' => 11,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Andornaktálya',
                'county_id' => 4,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Andrásfa',
                'county_id' => 10,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Annavölgy',
                'county_id' => 9,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Apácatorna',
                'county_id' => 8,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Apagy',
                'county_id' => 13,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Apaj',
                'county_id' => 7,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Aparhant',
                'county_id' => 18,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Apátfalva',
                'county_id' => 14,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Apátistvánfalva',
                'county_id' => 10,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Apátvarasd',
                'county_id' => 3,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Apc',
                'county_id' => 4,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Áporka',
                'county_id' => 7,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Apostag',
                'county_id' => 12,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Aranyosapáti',
                'county_id' => 13,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Aranyosgadány',
                'county_id' => 3,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Arka',
                'county_id' => 5,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Arló',
                'county_id' => 5,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Arnót',
                'county_id' => 5,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Ároktő',
                'county_id' => 5,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Árpádhalom',
                'county_id' => 14,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Árpás',
                'county_id' => 6,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Ártánd',
                'county_id' => 17,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Ásotthalom',
                'county_id' => 14,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Ásványráró',
                'county_id' => 6,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Aszaló',
                'county_id' => 5,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Aszód',
                'county_id' => 7,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Aszófő',
                'county_id' => 8,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Áta',
                'county_id' => 3,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Átány',
                'county_id' => 4,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Atkár',
                'county_id' => 4,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Attala',
                'county_id' => 18,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Babarc',
                'county_id' => 3,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Babarcszőlős',
                'county_id' => 3,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Babócsa',
                'county_id' => 11,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Bábolna',
                'county_id' => 9,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Bábonymegyer',
                'county_id' => 11,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Babosdöbréte',
                'county_id' => 15,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Babót',
                'county_id' => 6,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Bácsalmás',
                'county_id' => 12,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Bácsbokod',
                'county_id' => 12,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Bácsborsód',
                'county_id' => 12,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Bácsszentgyörgy',
                'county_id' => 12,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Bácsszőlős',
                'county_id' => 12,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Badacsonytomaj',
                'county_id' => 8,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Badacsonytördemic',
                'county_id' => 8,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Bag',
                'county_id' => 7,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Bagamér',
                'county_id' => 17,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Baglad',
                'county_id' => 15,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Bagod',
                'county_id' => 15,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Bágyogszovát',
                'county_id' => 6,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Baj',
                'county_id' => 9,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Baja',
                'county_id' => 12,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Bajánsenye',
                'county_id' => 10,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Bajna',
                'county_id' => 9,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Bajót',
                'county_id' => 9,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Bak',
                'county_id' => 15,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Bakháza',
                'county_id' => 11,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Bakóca',
                'county_id' => 3,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Bakonszeg',
                'county_id' => 17,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Bakonya',
                'county_id' => 3,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Bakonybánk',
                'county_id' => 9,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Bakonybél',
                'county_id' => 8,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Bakonycsernye',
                'county_id' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Bakonygyirót',
                'county_id' => 8,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Bakonyjákó',
                'county_id' => 8,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Bakonykoppány',
                'county_id' => 8,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Bakonykúti',
                'county_id' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Bakonynána',
                'county_id' => 8,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Bakonyoszlop',
                'county_id' => 8,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Bakonypéterd',
                'county_id' => 6,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Bakonypölöske',
                'county_id' => 8,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Bakonyság',
                'county_id' => 8,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Bakonysárkány',
                'county_id' => 9,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Bakonyszentiván',
                'county_id' => 8,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Bakonyszentkirály',
                'county_id' => 8,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Bakonyszentlászló',
                'county_id' => 8,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Bakonyszombathely',
                'county_id' => 9,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Bakonyszücs',
                'county_id' => 8,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Bakonytamási',
                'county_id' => 8,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Baks',
                'county_id' => 14,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Baksa',
                'county_id' => 3,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Baktakék',
                'county_id' => 5,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Baktalórántháza',
                'county_id' => 13,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Baktüttös',
                'county_id' => 15,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Balajt',
                'county_id' => 5,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Balassagyarmat',
                'county_id' => 19,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Balástya',
                'county_id' => 14,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Balaton',
                'county_id' => 4,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Balatonakali',
                'county_id' => 8,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Balatonalmádi',
                'county_id' => 8,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Balatonberény',
                'county_id' => 11,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Balatonboglár',
                'county_id' => 11,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Balatoncsicsó',
                'county_id' => 8,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Balatonederics',
                'county_id' => 8,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Balatonendréd',
                'county_id' => 11,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Balatonfenyves',
                'county_id' => 11,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Balatonfőkajár',
                'county_id' => 8,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Balatonföldvár',
                'county_id' => 11,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Balatonfüred',
                'county_id' => 8,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Balatonfűzfő',
                'county_id' => 8,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Balatongyörök',
                'county_id' => 15,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Balatonhenye',
                'county_id' => 8,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Balatonkenese',
                'county_id' => 8,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Balatonkeresztúr',
                'county_id' => 11,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Balatonlelle',
                'county_id' => 11,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Balatonmagyaród',
                'county_id' => 15,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Balatonmáriafürdő',
                'county_id' => 11,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Balatonőszöd',
                'county_id' => 11,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Balatonrendes',
                'county_id' => 8,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Balatonszabadi',
                'county_id' => 11,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Balatonszárszó',
                'county_id' => 11,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Balatonszemes',
                'county_id' => 11,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Balatonszentgyörgy',
                'county_id' => 11,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Balatonszepezd',
                'county_id' => 8,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Balatonszőlős',
                'county_id' => 8,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Balatonudvari',
                'county_id' => 8,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Balatonújlak',
                'county_id' => 11,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Balatonvilágos',
                'county_id' => 8,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Balinka',
                'county_id' => 1,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Balkány',
                'county_id' => 13,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Ballószög',
                'county_id' => 12,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Balmazújváros',
                'county_id' => 17,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Balogunyom',
                'county_id' => 10,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Balotaszállás',
                'county_id' => 12,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Balsa',
                'county_id' => 13,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Bálványos',
                'county_id' => 11,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Bana',
                'county_id' => 9,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Bánd',
                'county_id' => 8,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Bánfa',
                'county_id' => 3,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Bánhorváti',
                'county_id' => 5,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Bánk',
                'county_id' => 19,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Bánokszentgyörgy',
                'county_id' => 15,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Bánréve',
                'county_id' => 5,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Bár',
                'county_id' => 3,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Barabás',
                'county_id' => 13,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Baracs',
                'county_id' => 1,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Baracska',
                'county_id' => 1,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Báránd',
                'county_id' => 17,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Baranyahidvég',
                'county_id' => 3,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Baranyajenő',
                'county_id' => 3,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Baranyaszentgyörgy',
                'county_id' => 3,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Barbacs',
                'county_id' => 6,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Barcs',
                'county_id' => 11,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Bárdudvarnok',
                'county_id' => 11,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Barlahida',
                'county_id' => 15,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Bárna',
                'county_id' => 19,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Barnag',
                'county_id' => 8,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Bársonyos',
                'county_id' => 9,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Basal',
                'county_id' => 3,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Baskó',
                'county_id' => 5,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Báta',
                'county_id' => 18,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Bátaapáti',
                'county_id' => 18,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Bátaszék',
                'county_id' => 18,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Baté',
                'county_id' => 11,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Bátmonostor',
                'county_id' => 12,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Bátonyterenye',
                'county_id' => 19,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Bátor',
                'county_id' => 4,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Bátorliget',
                'county_id' => 13,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Battonya',
                'county_id' => 16,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Bátya',
                'county_id' => 12,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Batyk',
                'county_id' => 15,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Bázakerettye',
                'county_id' => 15,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Bazsi',
                'county_id' => 8,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Béb',
                'county_id' => 8,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Becsehely',
                'county_id' => 15,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Becske',
                'county_id' => 19,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Becskeháza',
                'county_id' => 5,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Becsvölgye',
                'county_id' => 15,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Bedegkér',
                'county_id' => 11,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Bedő',
                'county_id' => 17,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Bejcgyertyános',
                'county_id' => 10,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Békás',
                'county_id' => 8,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Bekecs',
                'county_id' => 5,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Békés',
                'county_id' => 16,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Békéscsaba',
                'county_id' => 16,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Békéssámson',
                'county_id' => 16,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Békésszentandrás',
                'county_id' => 16,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Bekölce',
                'county_id' => 4,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Bélapátfalva',
                'county_id' => 4,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Bélavár',
                'county_id' => 11,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Belecska',
                'county_id' => 18,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Beled',
                'county_id' => 6,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Beleg',
                'county_id' => 11,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Belezna',
                'county_id' => 15,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Bélmegyer',
                'county_id' => 16,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Beloiannisz',
                'county_id' => 1,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Belsősárd',
                'county_id' => 15,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Belvárdgyula',
                'county_id' => 3,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Benk',
                'county_id' => 13,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Bénye',
                'county_id' => 7,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Bér',
                'county_id' => 19,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Bérbaltavár',
                'county_id' => 10,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Bercel',
                'county_id' => 19,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Beregdaróc',
                'county_id' => 13,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Beregsurány',
                'county_id' => 13,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Berekböszörmény',
                'county_id' => 17,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Berekfürdő',
                'county_id' => 2,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Beremend',
                'county_id' => 3,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Berente',
                'county_id' => 5,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Beret',
                'county_id' => 5,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Berettyóújfalu',
                'county_id' => 17,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Berhida',
                'county_id' => 8,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Berkenye',
                'county_id' => 19,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Berkesd',
                'county_id' => 3,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Berkesz',
                'county_id' => 13,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Bernecebaráti',
                'county_id' => 7,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Berzék',
                'county_id' => 5,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Berzence',
                'county_id' => 11,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Besence',
                'county_id' => 3,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Besenyőd',
                'county_id' => 13,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Besenyőtelek',
                'county_id' => 4,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Besenyszög',
                'county_id' => 2,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Besnyő',
                'county_id' => 1,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Beszterec',
                'county_id' => 13,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Bezedek',
                'county_id' => 3,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Bezenye',
                'county_id' => 6,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Bezeréd',
                'county_id' => 15,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Bezi',
                'county_id' => 6,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Biatorbágy',
                'county_id' => 7,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Bicsérd',
                'county_id' => 3,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Bicske',
                'county_id' => 1,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Bihardancsháza',
                'county_id' => 17,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Biharkeresztes',
                'county_id' => 17,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Biharnagybajom',
                'county_id' => 17,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Bihartorda',
                'county_id' => 17,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Biharugra',
                'county_id' => 16,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Bikács',
                'county_id' => 18,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Bikal',
                'county_id' => 3,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Biri',
                'county_id' => 13,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Birján',
                'county_id' => 3,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Bisse',
                'county_id' => 3,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Bő',
                'county_id' => 10,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Boba',
                'county_id' => 15,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Bocfölde',
                'county_id' => 4,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Boconád',
                'county_id' => 12,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Bőcs',
                'county_id' => 15,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Bócsa',
                'county_id' => 17,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Bocska',
                'county_id' => 3,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Bocskaikert',
                'county_id' => 1,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Boda',
                'county_id' => 1,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Bodajk',
                'county_id' => 3,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Böde',
                'county_id' => 6,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Bödeháza',
                'county_id' => 4,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Bodmér',
                'county_id' => 8,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Bodolyabér',
                'county_id' => 11,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Bodonhely',
                'county_id' => 5,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Bodony',
                'county_id' => 5,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Bodorfa',
                'county_id' => 5,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Bodrog',
                'county_id' => 5,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Bodroghalom',
                'county_id' => 5,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Bodrogkeresztúr',
                'county_id' => 5,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Bodrogkisfalud',
                'county_id' => 5,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Bodrogolaszi',
                'county_id' => 5,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Bódvalenke',
                'county_id' => 3,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Bódvarákó',
                'county_id' => 3,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Bódvaszilas',
                'county_id' => 3,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Bogács',
                'county_id' => 18,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Bogád',
                'county_id' => 6,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Bogádmindszent',
                'county_id' => 17,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Bogdása',
                'county_id' => 15,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Bögöt',
                'county_id' => 9,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Bögöte',
                'county_id' => 19,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Bogyiszló',
                'county_id' => 4,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Bogyoszló',
                'county_id' => 3,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Böhönye',
                'county_id' => 5,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Bojt',
                'county_id' => 5,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Bókaháza',
                'county_id' => 5,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Bokod',
                'county_id' => 11,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Bököny',
                'county_id' => 11,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Bokor',
                'county_id' => 3,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Bölcske',
                'county_id' => 15,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Boldog',
                'county_id' => 11,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Boldogasszonyfa',
                'county_id' => 18,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Boldogkőújfalu',
                'county_id' => 18,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Boldogkőváralja',
                'county_id' => 18,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Boldva',
                'county_id' => 14,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Bolhás',
                'county_id' => 10,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Bolhó',
                'county_id' => 3,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Bóly',
                'county_id' => 12,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Boncodfölde',
                'county_id' => 15,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Bonnya',
                'county_id' => 5,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Bőny',
                'county_id' => 5,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Bonyhád',
                'county_id' => 5,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Bonyhádvarasd',
                'county_id' => 5,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Börcs',
                'county_id' => 5,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Bordány',
                'county_id' => 5,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Borgáta',
                'county_id' => 19,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Borjád',
                'county_id' => 8,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Borota',
                'county_id' => 8,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Borsfa',
                'county_id' => 3,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Borsodbóta',
                'county_id' => 13,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Borsodgeszt',
                'county_id' => 3,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Borsodivánka',
                'county_id' => 10,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Borsodnádasd',
                'county_id' => 10,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Borsodnádasd',
                'county_id' => 5,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Borsodszentgyörgy',
                'county_id' => 10,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Borsodszirák',
                'county_id' => 5,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Borsosberény',
                'county_id' => 15,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Borszörcsök',
                'county_id' => 15,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Borzavár',
                'county_id' => 10,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Börzönce',
                'county_id' => 10,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Bősárkány',
                'county_id' => 11,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Bosta',
                'county_id' => 13,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Bőszénfa',
                'county_id' => 18,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Botpalád',
                'county_id' => 6,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Botykapeterd',
                'county_id' => 6,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Bozsok',
                'county_id' => 15,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Bózsva',
                'county_id' => 6,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Bozzai',
                'county_id' => 11,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Bucsa',
                'county_id' => 16,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Bucsu',
                'county_id' => 10,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Bucsuszentlászló',
                'county_id' => 15,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Bucsuta',
                'county_id' => 15,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Budajenő',
                'county_id' => 7,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Budakalász',
                'county_id' => 7,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Budakeszi',
                'county_id' => 7,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Budaörs',
                'county_id' => 7,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Bugac',
                'county_id' => 12,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Bugacpusztaháza',
                'county_id' => 12,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Bugyi',
                'county_id' => 7,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Buj',
                'county_id' => 13,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Buják',
                'county_id' => 19,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Bük',
                'county_id' => 11,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Bük',
                'county_id' => 10,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Bükkábrány',
                'county_id' => 10,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Bükkaranyos',
                'county_id' => 5,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Bükkmogyorósd',
                'county_id' => 5,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Bükkösd',
                'county_id' => 5,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Bükkszék',
                'county_id' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Bükkszenterzsébet',
                'county_id' => 4,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Bükkszentkereszt',
                'county_id' => 4,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Bükkszentmárton',
                'county_id' => 5,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Bükkzsérc',
                'county_id' => 4,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Bürüs',
                'county_id' => 5,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Büssü',
                'county_id' => 3,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Büttös',
                'county_id' => 11,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Buzsák',
                'county_id' => 5,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Cák',
                'county_id' => 10,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Cakóháza',
                'county_id' => 6,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Cece',
                'county_id' => 1,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Cégénydányád',
                'county_id' => 13,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Cegléd',
                'county_id' => 7,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Ceglédbercel',
                'county_id' => 7,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Celldömölk',
                'county_id' => 10,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Cered',
                'county_id' => 19,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Chernelházadamonya',
                'county_id' => 10,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Cibakháza',
                'county_id' => 2,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Cigánd',
                'county_id' => 5,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Cikó',
                'county_id' => 18,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Cirák',
                'county_id' => 6,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Csabacsűd',
                'county_id' => 16,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Csabaszabadi',
                'county_id' => 16,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Csabdi',
                'county_id' => 1,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Csabrendek',
                'county_id' => 8,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Csáfordjánosfa',
                'county_id' => 6,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Csaholc',
                'county_id' => 13,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Csajág',
                'county_id' => 8,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Csákány',
                'county_id' => 11,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Csákánydoroszló',
                'county_id' => 10,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Csákberény',
                'county_id' => 1,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Csákvár',
                'county_id' => 1,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Csanádalberti',
                'county_id' => 14,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Csanádapáca',
                'county_id' => 16,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Csanádpalota',
                'county_id' => 14,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Csánig',
                'county_id' => 10,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Csány',
                'county_id' => 4,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Csányoszró',
                'county_id' => 3,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Csanytelek',
                'county_id' => 14,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Csapi',
                'county_id' => 15,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Csapod',
                'county_id' => 6,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Csárdaszállás',
                'county_id' => 16,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Csarnóta',
                'county_id' => 3,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Csaroda',
                'county_id' => 13,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Császár',
                'county_id' => 9,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Császártöltés',
                'county_id' => 12,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Császló',
                'county_id' => 13,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Csátalja',
                'county_id' => 12,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Csatár',
                'county_id' => 15,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Csataszög',
                'county_id' => 2,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Csatka',
                'county_id' => 9,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Csávoly',
                'county_id' => 12,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Csebény',
                'county_id' => 3,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Csécse',
                'county_id' => 19,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Csegöld',
                'county_id' => 13,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Csehbánya',
                'county_id' => 8,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Csehi',
                'county_id' => 10,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Csehimindszent',
                'county_id' => 10,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Csém',
                'county_id' => 9,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Csemő',
                'county_id' => 7,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Csempeszkopács',
                'county_id' => 10,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Csengele',
                'county_id' => 14,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Csenger',
                'county_id' => 13,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Csengersima',
                'county_id' => 13,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Csengerújfalu',
                'county_id' => 13,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Csengőd',
                'county_id' => 12,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Csénye',
                'county_id' => 10,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Csenyéte',
                'county_id' => 5,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Csép',
                'county_id' => 9,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Csépa',
                'county_id' => 2,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Csepreg',
                'county_id' => 10,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Csér',
                'county_id' => 6,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Cserdi',
                'county_id' => 3,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Cserénfa',
                'county_id' => 11,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Cserépfalu',
                'county_id' => 5,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Cserépváralja',
                'county_id' => 5,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Cserháthaláp',
                'county_id' => 19,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Cserhátsurány',
                'county_id' => 19,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Cserhátszentiván',
                'county_id' => 19,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Cserkeszőlő',
                'county_id' => 2,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Cserkút',
                'county_id' => 3,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Csernely',
                'county_id' => 5,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Cserszegtomaj',
                'county_id' => 15,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Csertalakos',
                'county_id' => 15,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Csertő',
                'county_id' => 3,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Csesznek',
                'county_id' => 8,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Csesztreg',
                'county_id' => 15,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Csesztve',
                'county_id' => 19,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Csetény',
                'county_id' => 8,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Csévharaszt',
                'county_id' => 7,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Csibrák',
                'county_id' => 18,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Csikéria',
                'county_id' => 12,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Csikóstőttős',
                'county_id' => 18,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Csikvánd',
                'county_id' => 6,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Csincse',
                'county_id' => 5,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Csipkerek',
                'county_id' => 10,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Csitár',
                'county_id' => 19,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Csobád',
                'county_id' => 5,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Csobaj',
                'county_id' => 5,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Csobánka',
                'county_id' => 7,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Csöde',
                'county_id' => 1,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Csögle',
                'county_id' => 11,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Csókakő',
                'county_id' => 5,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Csökmő',
                'county_id' => 9,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Csököly',
                'county_id' => 12,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Csokonyavisonta',
                'county_id' => 11,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Csokvaomány',
                'county_id' => 7,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Csolnok',
                'county_id' => 11,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Csólyospálos',
                'county_id' => 14,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Csoma',
                'county_id' => 14,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Csomád',
                'county_id' => 15,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Csombárd',
                'county_id' => 3,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Csömend',
                'county_id' => 8,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Csömödér',
                'county_id' => 1,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Csömör',
                'county_id' => 6,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'Csönge',
                'county_id' => 16,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Csongrád',
                'county_id' => 8,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Csongrád',
                'county_id' => 15,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Csonkahegyhát',
                'county_id' => 8,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Csonkamindszent',
                'county_id' => 17,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Csopak',
                'county_id' => 11,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Csór',
                'county_id' => 11,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Csorna',
                'county_id' => 15,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Csörnyeföld',
                'county_id' => 7,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Csörötnek',
                'county_id' => 10,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Csorvás',
                'county_id' => 15,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Csősz',
                'county_id' => 10,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Csót',
                'county_id' => 1,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Csővár',
                'county_id' => 7,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Csurgó',
                'county_id' => 11,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Csurgónagymarton',
                'county_id' => 11,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Cún',
                'county_id' => 3,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Dabas',
                'county_id' => 7,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Dabronc',
                'county_id' => 8,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Dabrony',
                'county_id' => 8,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Dad',
                'county_id' => 9,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Dág',
                'county_id' => 9,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Dáka',
                'county_id' => 8,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Dalmand',
                'county_id' => 18,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Damak',
                'county_id' => 5,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Dámóc',
                'county_id' => 5,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Dánszentmiklós',
                'county_id' => 7,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Dány',
                'county_id' => 7,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Daraboshegy',
                'county_id' => 10,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Darány',
                'county_id' => 11,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Darnó',
                'county_id' => 13,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Darnózseli',
                'county_id' => 6,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Darvas',
                'county_id' => 17,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Dávod',
                'county_id' => 12,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Debercsény',
                'county_id' => 19,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Debrecen',
                'county_id' => 17,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Debréte',
                'county_id' => 5,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Decs',
                'county_id' => 18,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Dédestapolcsány',
                'county_id' => 5,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Dég',
                'county_id' => 1,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Dejtár',
                'county_id' => 19,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Délegyháza',
                'county_id' => 7,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Demecser',
                'county_id' => 13,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Demjén',
                'county_id' => 4,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Dencsháza',
                'county_id' => 3,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Dénesfa',
                'county_id' => 6,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Derecske',
                'county_id' => 17,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Derekegyház',
                'county_id' => 14,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Deszk',
                'county_id' => 14,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Detek',
                'county_id' => 5,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Detk',
                'county_id' => 4,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Dévaványa',
                'county_id' => 16,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Devecser',
                'county_id' => 8,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Dinnyeberki',
                'county_id' => 3,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Diósberény',
                'county_id' => 18,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Diósd',
                'county_id' => 7,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Diósjenő',
                'county_id' => 19,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Dióskál',
                'county_id' => 15,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Diósviszló',
                'county_id' => 3,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Doba',
                'county_id' => 8,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Döbörhegy',
                'county_id' => 16,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'Doboz',
                'county_id' => 15,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Dobri',
                'county_id' => 15,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Döbröce',
                'county_id' => 14,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Döbrököz',
                'county_id' => 5,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Dobronhegy',
                'county_id' => 14,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Döbrönte',
                'county_id' => 16,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Dóc',
                'county_id' => 16,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Döge',
                'county_id' => 18,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Domaháza',
                'county_id' => 13,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Domaszék',
                'county_id' => 7,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'Dombegyház',
                'county_id' => 4,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'Dombiratos',
                'county_id' => 4,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Dombóvár',
                'county_id' => 9,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Dombrád',
                'county_id' => 19,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Domony',
                'county_id' => 10,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'Dömös',
                'county_id' => 10,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'Domoszló',
                'county_id' => 15,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Dömsöd',
                'county_id' => 18,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Dör',
                'county_id' => 8,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Dörgicse',
                'county_id' => 13,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Dormánd',
                'county_id' => 9,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Dorog',
                'county_id' => 7,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Dorogháza',
                'county_id' => 6,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Döröske',
                'county_id' => 8,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Dötk',
                'county_id' => 10,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Dövény',
                'county_id' => 15,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'Dozmat',
                'county_id' => 5,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Drágszél',
                'county_id' => 12,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Drávacsehi',
                'county_id' => 3,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Drávacsepely',
                'county_id' => 3,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'Drávafok',
                'county_id' => 3,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Drávagárdony',
                'county_id' => 11,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Drávaiványi',
                'county_id' => 3,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Drávakeresztúr',
                'county_id' => 3,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Drávapalkonya',
                'county_id' => 3,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Drávapiski',
                'county_id' => 3,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Drávaszabolcs',
                'county_id' => 3,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Drávaszerdahely',
                'county_id' => 3,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Drávasztára',
                'county_id' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Drávatamási',
                'county_id' => 11,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Drégelypalánk',
                'county_id' => 19,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'Dubicsány',
                'county_id' => 5,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Dudar',
                'county_id' => 8,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Duka',
                'county_id' => 10,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Dunaalmás',
                'county_id' => 9,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Dunabogdány',
                'county_id' => 7,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Dunaegyháza',
                'county_id' => 12,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Dunafalva',
                'county_id' => 12,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Dunaföldvár',
                'county_id' => 18,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Dunaharaszti',
                'county_id' => 7,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Dunakeszi',
                'county_id' => 7,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'Dunakiliti',
                'county_id' => 6,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Dunapataj',
                'county_id' => 12,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Dunaremete',
                'county_id' => 6,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Dunaszeg',
                'county_id' => 6,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Dunaszekcső',
                'county_id' => 3,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Dunaszentbenedek',
                'county_id' => 12,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Dunaszentgyörgy',
                'county_id' => 18,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Dunaszentmiklós',
                'county_id' => 9,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Dunaszentpál',
                'county_id' => 6,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Dunasziget',
                'county_id' => 6,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Dunatetétlen',
                'county_id' => 12,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Dunaújváros',
                'county_id' => 1,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Dunavarsány',
                'county_id' => 7,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Dunavecse',
                'county_id' => 12,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'Dusnok',
                'county_id' => 12,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Dúzs',
                'county_id' => 18,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Ebergőc',
                'county_id' => 6,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Ebes',
                'county_id' => 17,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Écs',
                'county_id' => 6,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Ecséd',
                'county_id' => 4,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Ecseg',
                'county_id' => 19,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Ecsegfalva',
                'county_id' => 16,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Ecseny',
                'county_id' => 11,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Ecser',
                'county_id' => 7,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Edde',
                'county_id' => 11,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Edelény',
                'county_id' => 5,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Edve',
                'county_id' => 6,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Eger',
                'county_id' => 4,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Egerág',
                'county_id' => 3,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Egeralja',
                'county_id' => 8,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Egeraracsa',
                'county_id' => 15,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Egerbakta',
                'county_id' => 4,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Egerbocs',
                'county_id' => 4,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Egercsehi',
                'county_id' => 4,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Egerfarmos',
                'county_id' => 4,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Egerlövő',
                'county_id' => 5,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'Egerszalók',
                'county_id' => 4,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Égerszög',
                'county_id' => 4,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Egerszólát',
                'county_id' => 5,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Egervár',
                'county_id' => 15,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Egervölgy',
                'county_id' => 10,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Egyed',
                'county_id' => 6,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Egyek',
                'county_id' => 17,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Egyházasdengeleg',
                'county_id' => 19,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Egyházasfalu',
                'county_id' => 6,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Egyházasgerge',
                'county_id' => 19,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Egyházasharaszti',
                'county_id' => 3,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'Egyházashetye',
                'county_id' => 10,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Egyházashollós',
                'county_id' => 10,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Egyházaskesző',
                'county_id' => 8,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Egyházaskozár',
                'county_id' => 3,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Egyházasrádóc',
                'county_id' => 10,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Elek',
                'county_id' => 16,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Ellend',
                'county_id' => 3,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Előszállás',
                'county_id' => 1,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Emőd',
                'county_id' => 5,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Encs',
                'county_id' => 5,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'Encsencs',
                'county_id' => 13,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Endrefalva',
                'county_id' => 19,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Endrőc',
                'county_id' => 3,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Enese',
                'county_id' => 6,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Enying',
                'county_id' => 1,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Eperjes',
                'county_id' => 14,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Eperjeske',
                'county_id' => 13,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Eplény',
                'county_id' => 8,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Epöl',
                'county_id' => 9,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Ercsi',
                'county_id' => 1,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Érd',
                'county_id' => 7,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Erdőbénye',
                'county_id' => 5,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Erdőhorváti',
                'county_id' => 5,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Erdőkertes',
                'county_id' => 7,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Erdőkövesd',
                'county_id' => 4,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Erdőkürt',
                'county_id' => 19,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Erdősmárok',
                'county_id' => 3,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Erdősmecske',
                'county_id' => 3,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Erdőtarcsa',
                'county_id' => 19,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Erdőtelek',
                'county_id' => 4,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Erk',
                'county_id' => 4,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Érpatak',
                'county_id' => 13,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Érsekcsanád',
                'county_id' => 12,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Érsekhalma',
                'county_id' => 12,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Érsekvadkert',
                'county_id' => 19,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Értény',
                'county_id' => 18,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Erzsébet',
                'county_id' => 3,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Esztár',
                'county_id' => 17,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Eszteregnye',
                'county_id' => 15,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Esztergályhorváti',
                'county_id' => 15,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Esztergom',
                'county_id' => 9,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Ete',
                'county_id' => 9,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Etes',
                'county_id' => 19,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Etyek',
                'county_id' => 1,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Fábiánháza',
                'county_id' => 13,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Fábiánsebestyén',
                'county_id' => 14,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Fácánkert',
                'county_id' => 18,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Fadd',
                'county_id' => 18,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Fáj',
                'county_id' => 5,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'Fajsz',
                'county_id' => 12,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Fancsal',
                'county_id' => 5,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Farád',
                'county_id' => 6,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Farkasgyepű',
                'county_id' => 8,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Farkaslyuk',
                'county_id' => 5,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Farmos',
                'county_id' => 7,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Fazekasboda',
                'county_id' => 3,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Fedémes',
                'county_id' => 4,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Fegyvernek',
                'county_id' => 2,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Fehérgyarmat',
                'county_id' => 13,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Fehértó',
                'county_id' => 6,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Fehérvárcsurgó',
                'county_id' => 1,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Feked',
                'county_id' => 3,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Feketeerdő',
                'county_id' => 6,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Felcsút',
                'county_id' => 1,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Feldebrő',
                'county_id' => 4,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Felgyő',
                'county_id' => 14,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Felpéc',
                'county_id' => 6,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Felsőberecki',
                'county_id' => 5,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Felsőcsatár',
                'county_id' => 10,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Felsődobsza',
                'county_id' => 5,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Felsőegerszeg',
                'county_id' => 3,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Felsőgagy',
                'county_id' => 5,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Felsőjánosfa',
                'county_id' => 10,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Felsőkelecsény',
                'county_id' => 5,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Felsőlajos',
                'county_id' => 12,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Felsőmarác',
                'county_id' => 10,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Felsőmocsolád',
                'county_id' => 11,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'Felsőnána',
                'county_id' => 18,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Felsőnyárád',
                'county_id' => 5,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Felsőnyék',
                'county_id' => 18,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Felsőörs',
                'county_id' => 8,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Felsőpáhok',
                'county_id' => 15,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'Felsőpakony',
                'county_id' => 7,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Felsőpetény',
                'county_id' => 19,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Felsőrajk',
                'county_id' => 15,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'Felsőregmec',
                'county_id' => 5,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Felsőszenterzsébet',
                'county_id' => 15,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Felsőszentiván',
                'county_id' => 12,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Felsőszentmárton',
                'county_id' => 3,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Felsőszölnök',
                'county_id' => 10,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Felsőtárkány',
                'county_id' => 4,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Felsőtelekes',
                'county_id' => 5,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Felsőtold',
                'county_id' => 19,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Felsővadász',
                'county_id' => 5,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Felsőzsolca',
                'county_id' => 5,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Fényeslitke',
                'county_id' => 13,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Fenyőfő',
                'county_id' => 8,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Ferencszállás',
                'county_id' => 14,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'Fertőboz',
                'county_id' => 6,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'Fertőd',
                'county_id' => 6,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Fertőendréd',
                'county_id' => 6,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'Fertőhomok',
                'county_id' => 6,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Fertőrákos',
                'county_id' => 6,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Fertőszentmiklós',
                'county_id' => 6,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'Fertőszéplak',
                'county_id' => 6,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Fiad',
                'county_id' => 11,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Filkeháza',
                'county_id' => 5,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Fityeház',
                'county_id' => 15,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Foktő',
                'county_id' => 12,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Földeák',
                'county_id' => 17,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Földes',
                'county_id' => 11,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Folyás',
                'county_id' => 5,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Fonó',
                'county_id' => 11,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Fony',
                'county_id' => 11,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'Főnyed',
                'county_id' => 14,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Fonyód',
                'county_id' => 5,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Fonyód',
                'county_id' => 7,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Forráskút',
                'county_id' => 14,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Forró',
                'county_id' => 17,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'Fót',
                'county_id' => 11,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'Füle',
                'county_id' => 5,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'Fülesd',
                'county_id' => 17,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'Fulókércs',
                'county_id' => 1,
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'Fülöp',
                'county_id' => 13,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Fülöpháza',
                'county_id' => 17,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Fülöpjakab',
                'county_id' => 12,
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'Fülöpszállás',
                'county_id' => 12,
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'Fülpösdaróc',
                'county_id' => 12,
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'Fürged',
                'county_id' => 13,
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'Furta',
                'county_id' => 18,
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'Füzér',
                'county_id' => 5,
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'Füzérkajata',
                'county_id' => 5,
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'Füzérkomlós',
                'county_id' => 5,
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'Füzérradvány',
                'county_id' => 5,
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'Füzesabony',
                'county_id' => 4,
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'Füzesgyarmat',
                'county_id' => 16,
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'Füzvölgy',
                'county_id' => 15,
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'Gáborján',
                'county_id' => 17,
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'Gáborjánháza',
                'county_id' => 15,
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'Gacsály',
                'county_id' => 13,
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'Gadács',
                'county_id' => 11,
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'Gadány',
                'county_id' => 11,
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'Gadna',
                'county_id' => 5,
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'Gádoros',
                'county_id' => 16,
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'Gagyapáti',
                'county_id' => 5,
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'Gagybátor',
                'county_id' => 5,
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'Gagyvendégi',
                'county_id' => 5,
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'Galambok',
                'county_id' => 15,
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'Galgaguta',
                'county_id' => 19,
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'Galgagyörk',
                'county_id' => 7,
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'Galgahévíz',
                'county_id' => 7,
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'Galgamácsa',
                'county_id' => 7,
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'Gálosfa',
                'county_id' => 11,
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'Galvács',
                'county_id' => 5,
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'Gamás',
                'county_id' => 11,
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'Ganna',
                'county_id' => 8,
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'Gánt',
                'county_id' => 1,
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'Gara',
                'county_id' => 12,
            ),
            336 => 
            array (
                'id' => 837,
                'name' => 'Garáb',
                'county_id' => 19,
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'Garabonc',
                'county_id' => 15,
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'Garadna',
                'county_id' => 5,
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'Garbolc',
                'county_id' => 13,
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'Gárdony',
                'county_id' => 1,
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'Garé',
                'county_id' => 3,
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'Gasztony',
                'county_id' => 10,
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'Gátér',
                'county_id' => 12,
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'Gávavencsellő',
                'county_id' => 13,
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'Géberjén',
                'county_id' => 13,
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'Gecse',
                'county_id' => 8,
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'Géderlak',
                'county_id' => 12,
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'Gégény',
                'county_id' => 13,
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'Gelej',
                'county_id' => 5,
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'Gelénes',
                'county_id' => 13,
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'Gellénháza',
                'county_id' => 15,
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'Gelse',
                'county_id' => 15,
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'Gelsesziget',
                'county_id' => 15,
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'Gemzse',
                'county_id' => 13,
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'Gencsapáti',
                'county_id' => 10,
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'Gérce',
                'county_id' => 10,
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'Gerde',
                'county_id' => 3,
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'Gerendás',
                'county_id' => 16,
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'Gerényes',
                'county_id' => 3,
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'Geresdlak',
                'county_id' => 3,
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'Gerjen',
                'county_id' => 18,
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'Gersekarát',
                'county_id' => 10,
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'Geszt',
                'county_id' => 16,
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'Gesztely',
                'county_id' => 5,
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'Geszteréd',
                'county_id' => 13,
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'Gétye',
                'county_id' => 15,
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'Gic',
                'county_id' => 8,
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'Gige',
                'county_id' => 11,
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'Gilvánfa',
                'county_id' => 3,
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'Girincs',
                'county_id' => 5,
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'Göd',
                'county_id' => 8,
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'Göd',
                'county_id' => 5,
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'Gödöllő',
                'county_id' => 7,
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'Gödre',
                'county_id' => 15,
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'Gödre',
                'county_id' => 10,
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'Gógánfa',
                'county_id' => 3,
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'Gölle',
                'county_id' => 15,
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'Golop',
                'county_id' => 7,
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'Gomba',
                'county_id' => 7,
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'Gombosszeg',
                'county_id' => 7,
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'Gömörszőlős',
                'county_id' => 3,
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'Gönc',
                'county_id' => 3,
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'Göncruszka',
                'county_id' => 11,
            ),
            384 => 
            array (
                'id' => 885,
                'name' => 'Gönyű',
                'county_id' => 5,
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'Gór',
                'county_id' => 5,
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'Görbeháza',
                'county_id' => 5,
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'Görcsöny',
                'county_id' => 6,
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'Görcsönydoboka',
                'county_id' => 17,
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'Gordisa',
                'county_id' => 3,
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'Görgeteg',
                'county_id' => 3,
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'Gősfa',
                'county_id' => 11,
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'Gosztola',
                'county_id' => 15,
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'Grábóc',
                'county_id' => 18,
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'Gulács',
                'county_id' => 13,
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'Gutorfölde',
                'county_id' => 15,
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'Gyál',
                'county_id' => 7,
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'Gyalóka',
                'county_id' => 6,
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'Gyanógeregye',
                'county_id' => 10,
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'Gyarmat',
                'county_id' => 6,
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'Gyékényes',
                'county_id' => 11,
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'Gyenesdiás',
                'county_id' => 15,
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'Gyepükaján',
                'county_id' => 8,
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'Gyermely',
                'county_id' => 9,
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'Gyód',
                'county_id' => 3,
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'Gyomaendrőd',
                'county_id' => 16,
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'Gyömöre',
                'county_id' => 6,
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'Gyömrő',
                'county_id' => 6,
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'Gyöngyfa',
                'county_id' => 7,
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'Gyöngyös',
                'county_id' => 3,
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'Gyöngyös',
                'county_id' => 4,
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'Gyöngyösfalu',
                'county_id' => 4,
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'Gyöngyöshalász',
                'county_id' => 10,
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'Gyöngyösmellék',
                'county_id' => 4,
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'Gyöngyösoroszi',
                'county_id' => 3,
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'Gyöngyöspata',
                'county_id' => 4,
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'Gyöngyössolymos',
                'county_id' => 4,
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'Gyöngyöstarján',
                'county_id' => 4,
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'Gyönk',
                'county_id' => 4,
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'Győr',
                'county_id' => 18,
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'Győr',
                'county_id' => 6,
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'Győrasszonyfa',
                'county_id' => 6,
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'Györe',
                'county_id' => 6,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'Györgytarló',
                'county_id' => 18,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'Györköny',
                'county_id' => 5,
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'Győrladamér',
                'county_id' => 18,
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'Gyóró',
                'county_id' => 6,
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'Győröcske',
                'county_id' => 13,
            ),
            428 => 
            array (
                'id' => 929,
                'name' => 'Győrság',
                'county_id' => 6,
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'Győrsövényház',
                'county_id' => 6,
            ),
            430 => 
            array (
                'id' => 931,
                'name' => 'Győrszemere',
                'county_id' => 6,
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'Győrtelek',
                'county_id' => 13,
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'Győrújbarát',
                'county_id' => 6,
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'Győrújfalu',
                'county_id' => 6,
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'Győrvár',
                'county_id' => 10,
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'Győrzámoly',
                'county_id' => 6,
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'Gyugy',
                'county_id' => 11,
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'Gyügye',
                'county_id' => 16,
            ),
            438 => 
            array (
                'id' => 939,
                'name' => 'Gyula',
                'county_id' => 16,
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'Gyula',
                'county_id' => 13,
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'Gyulaháza',
                'county_id' => 18,
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'Gyulaj',
                'county_id' => 8,
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'Gyulakeszi',
                'county_id' => 1,
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'Gyüre',
                'county_id' => 13,
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'Gyúró',
                'county_id' => 13,
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'Gyűrűs',
                'county_id' => 15,
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'Hács',
                'county_id' => 11,
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'Hagyárosbörönd',
                'county_id' => 15,
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'Hahót',
                'county_id' => 15,
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'Hajdúbagos',
                'county_id' => 17,
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'Hajdúböszörmény',
                'county_id' => 17,
            ),
            451 => 
            array (
                'id' => 952,
                'name' => 'Hajdúdorog',
                'county_id' => 17,
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'Hajdúhadház',
                'county_id' => 17,
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'Hajdúnánás',
                'county_id' => 17,
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'Hajdúsámson',
                'county_id' => 17,
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'Hajdúszoboszló',
                'county_id' => 17,
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'Hajdúszovát',
                'county_id' => 17,
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'Hajmás',
                'county_id' => 11,
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'Hajmáskér',
                'county_id' => 8,
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'Hajós',
                'county_id' => 12,
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'Halastó',
                'county_id' => 10,
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'Halászi',
                'county_id' => 6,
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'Halásztelek',
                'county_id' => 7,
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'Halimba',
                'county_id' => 8,
            ),
            464 => 
            array (
                'id' => 965,
                'name' => 'Halmaj',
                'county_id' => 5,
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'Halmajugra',
                'county_id' => 4,
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'Halogy',
                'county_id' => 10,
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'Hangács',
                'county_id' => 5,
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'Hangony',
                'county_id' => 5,
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'Hantos',
                'county_id' => 1,
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'Harasztifalu',
                'county_id' => 10,
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'Harc',
                'county_id' => 18,
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'Harka',
                'county_id' => 6,
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'Harkakötöny',
                'county_id' => 12,
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'Harkány',
                'county_id' => 3,
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'Háromfa',
                'county_id' => 11,
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'Háromhuta',
                'county_id' => 5,
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'Harsány',
                'county_id' => 5,
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'Hárskút',
                'county_id' => 8,
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'Harta',
                'county_id' => 12,
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'Hásságy',
                'county_id' => 3,
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'Hatvan',
                'county_id' => 4,
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'Hédervár',
                'county_id' => 6,
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'Hedrehely',
                'county_id' => 11,
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'Hegyesd',
                'county_id' => 8,
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'Hegyeshalom',
                'county_id' => 6,
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'Hegyfalu',
                'county_id' => 10,
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'Hegyháthodász',
                'county_id' => 10,
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'Hegyhátmaróc',
                'county_id' => 3,
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'Hegyhátsál',
                'county_id' => 10,
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'Hegyhátszentjakab',
                'county_id' => 10,
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'Hegyhátszentmárton',
                'county_id' => 10,
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'Hegyhátszentpéter',
                'county_id' => 10,
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'Hegykő',
                'county_id' => 6,
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'Hegymagas',
                'county_id' => 8,
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'Hegymeg',
                'county_id' => 5,
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'Hegyszentmárton',
                'county_id' => 3,
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'Héhalom',
                'county_id' => 19,
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'Hejce',
                'county_id' => 5,
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'Hejőbába',
                'county_id' => 5,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'Hejőkeresztúr',
                'county_id' => 5,
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'Hejőkürt',
                'county_id' => 5,
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'Hejőpapi',
                'county_id' => 5,
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'Hejőszalonta',
                'county_id' => 5,
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'Helesfa',
                'county_id' => 3,
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'Helvécia',
                'county_id' => 12,
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'Hencida',
                'county_id' => 17,
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'Hencse',
                'county_id' => 11,
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'Herceghalom',
                'county_id' => 7,
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'Hercegkút',
                'county_id' => 5,
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'Hercegszántó',
                'county_id' => 12,
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'Heréd',
                'county_id' => 4,
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'Héreg',
                'county_id' => 9,
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'Herencsény',
                'county_id' => 19,
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'Herend',
                'county_id' => 8,
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'Heresznye',
                'county_id' => 11,
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'Hermánszeg',
                'county_id' => 13,
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => 'Hernád',
                'county_id' => 7,
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => 'Hernádbűd',
                'county_id' => 5,
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => 'Hernádcéce',
                'county_id' => 5,
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => 'Hernádkak',
                'county_id' => 5,
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => 'Hernádkércs',
                'county_id' => 5,
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => 'Hernádnémeti',
                'county_id' => 5,
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => 'Hernádpetri',
                'county_id' => 5,
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => 'Hernádszentandrás',
                'county_id' => 5,
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => 'Hernádszurdok',
                'county_id' => 5,
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => 'Hernádvécse',
                'county_id' => 5,
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => 'Hernyék',
                'county_id' => 15,
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => 'Hét',
                'county_id' => 5,
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => 'Hetefejércse',
                'county_id' => 13,
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => 'Hetes',
                'county_id' => 11,
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => 'Hetvehely',
                'county_id' => 3,
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => 'Hetyefő',
                'county_id' => 8,
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => 'Heves',
                'county_id' => 4,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => 'Hevesaranyos',
                'county_id' => 4,
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => 'Hevesvezekény',
                'county_id' => 4,
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => 'Hévíz',
                'county_id' => 15,
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => 'Hévízgyörk',
                'county_id' => 7,
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => 'Hidas',
                'county_id' => 3,
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => 'Hidasnémeti',
                'county_id' => 5,
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => 'Hidegkút',
                'county_id' => 8,
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => 'Hidegség',
                'county_id' => 6,
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => 'Hidvégardó',
                'county_id' => 5,
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => 'Himesháza',
                'county_id' => 3,
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => 'Himod',
                'county_id' => 6,
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => 'Hirics',
                'county_id' => 3,
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => 'Hobol',
                'county_id' => 3,
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => 'Hodász',
                'county_id' => 13,
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => 'Hódmezővásárhely',
                'county_id' => 14,
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => 'Hőgyész',
                'county_id' => 11,
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => 'Hollád',
                'county_id' => 5,
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => 'Hollóháza',
                'county_id' => 19,
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => 'Hollókő',
                'county_id' => 8,
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => 'Homokbödöge',
                'county_id' => 15,
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => 'Homokkomárom',
                'county_id' => 12,
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => 'Homokmégy',
                'county_id' => 11,
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => 'Homokszentgyörgy',
                'county_id' => 3,
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => 'Homorúd',
                'county_id' => 5,
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => 'Homrogd',
                'county_id' => 19,
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => 'Hont',
                'county_id' => 19,
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => 'Horpács',
                'county_id' => 4,
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => 'Hort',
                'county_id' => 17,
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => 'Hortobágy',
                'county_id' => 3,
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => 'Horváthertelend',
                'county_id' => 10,
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => 'Horvátlövő',
                'county_id' => 10,
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => 'Horvátzsidány',
                'county_id' => 3,
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => 'Hosszúhetény',
                'county_id' => 17,
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => 'Hosszúpályi',
                'county_id' => 10,
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => 'Hosszúpereszteg',
                'county_id' => 11,
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => 'Hosszúvíz',
                'county_id' => 15,
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => 'Hosszúvölgy',
                'county_id' => 8,
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => 'Hosztót',
                'county_id' => 15,
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => 'Hottó',
                'county_id' => 18,
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => 'Hövej',
                'county_id' => 6,
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => 'Hugyag',
                'county_id' => 19,
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => 'Hunya',
                'county_id' => 16,
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => 'Hunyadfalva',
                'county_id' => 2,
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => 'Husztót',
                'county_id' => 3,
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => 'Ibafa',
                'county_id' => 3,
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => 'Iborfia',
                'county_id' => 15,
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => 'Ibrány',
                'county_id' => 13,
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => 'Igal',
                'county_id' => 11,
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => 'Igar',
                'county_id' => 1,
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => 'Igrici',
                'county_id' => 5,
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => 'Iharos',
                'county_id' => 11,
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => 'Iharosberény',
                'county_id' => 11,
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => 'Ikervár',
                'county_id' => 10,
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => 'Iklad',
                'county_id' => 7,
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => 'Iklanberény',
                'county_id' => 10,
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => 'Iklódbördőce',
                'county_id' => 15,
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => 'Ikrény',
                'county_id' => 6,
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => 'Iliny',
                'county_id' => 19,
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => 'Ilk',
                'county_id' => 13,
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => 'Illocska',
                'county_id' => 3,
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => 'Imola',
                'county_id' => 5,
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => 'Imrehegy',
                'county_id' => 12,
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => 'Ináncs',
                'county_id' => 5,
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => 'Inárcs',
                'county_id' => 7,
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => 'Inke',
                'county_id' => 11,
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => 'Ipacsfa',
                'county_id' => 3,
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => 'Ipolydamásd',
                'county_id' => 7,
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => 'Ipolytarnóc',
                'county_id' => 19,
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => 'Ipolytölgyes',
                'county_id' => 7,
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => 'Ipolyvece',
                'county_id' => 19,
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => 'Iregszemcse',
                'county_id' => 18,
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => 'Irota',
                'county_id' => 5,
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => 'Isaszeg',
                'county_id' => 7,
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => 'Ispánk',
                'county_id' => 10,
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => 'Istenmezeje',
                'county_id' => 4,
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => 'Istvándi',
                'county_id' => 11,
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => 'Iszkaszentgyörgy',
                'county_id' => 1,
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => 'Iszkáz',
                'county_id' => 8,
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => 'Isztimér',
                'county_id' => 1,
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => 'Ivád',
                'county_id' => 4,
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => 'Iván',
                'county_id' => 6,
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => 'Ivánbattyán',
                'county_id' => 3,
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => 'Ivánc',
                'county_id' => 10,
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => 'Iváncsa',
                'county_id' => 1,
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => 'Ivándárda',
                'county_id' => 3,
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => 'Izmény',
                'county_id' => 18,
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => 'Izsák',
                'county_id' => 12,
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => 'Izsófalva',
                'county_id' => 5,
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => 'Jágónak',
                'county_id' => 18,
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => 'Ják',
                'county_id' => 10,
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => 'Jakabszállás',
                'county_id' => 12,
            ),
            125 => 
            array (
                'id' => 1126,
                'name' => 'Jákfa',
                'county_id' => 10,
            ),
            126 => 
            array (
                'id' => 1127,
                'name' => 'Jákfalva',
                'county_id' => 5,
            ),
            127 => 
            array (
                'id' => 1128,
                'name' => 'Jákó',
                'county_id' => 11,
            ),
            128 => 
            array (
                'id' => 1129,
                'name' => 'Jánd',
                'county_id' => 13,
            ),
            129 => 
            array (
                'id' => 1130,
                'name' => 'Jánkmajtis',
                'county_id' => 13,
            ),
            130 => 
            array (
                'id' => 1131,
                'name' => 'Jánoshalma',
                'county_id' => 12,
            ),
            131 => 
            array (
                'id' => 1132,
                'name' => 'Jánosháza',
                'county_id' => 10,
            ),
            132 => 
            array (
                'id' => 1133,
                'name' => 'Jánoshida',
                'county_id' => 2,
            ),
            133 => 
            array (
                'id' => 1134,
                'name' => 'Jánossomorja',
                'county_id' => 6,
            ),
            134 => 
            array (
                'id' => 1135,
                'name' => 'Járdánháza',
                'county_id' => 5,
            ),
            135 => 
            array (
                'id' => 1136,
                'name' => 'Jármi',
                'county_id' => 13,
            ),
            136 => 
            array (
                'id' => 1137,
                'name' => 'Jásd',
                'county_id' => 8,
            ),
            137 => 
            array (
                'id' => 1138,
                'name' => 'Jászágó',
                'county_id' => 2,
            ),
            138 => 
            array (
                'id' => 1139,
                'name' => 'Jászalsószentgyörgy',
                'county_id' => 2,
            ),
            139 => 
            array (
                'id' => 1140,
                'name' => 'Jászapáti',
                'county_id' => 2,
            ),
            140 => 
            array (
                'id' => 1141,
                'name' => 'Jászárokszállás',
                'county_id' => 2,
            ),
            141 => 
            array (
                'id' => 1142,
                'name' => 'Jászberény',
                'county_id' => 2,
            ),
            142 => 
            array (
                'id' => 1143,
                'name' => 'Jászboldogháza',
                'county_id' => 2,
            ),
            143 => 
            array (
                'id' => 1144,
                'name' => 'Jászdózsa',
                'county_id' => 2,
            ),
            144 => 
            array (
                'id' => 1145,
                'name' => 'Jászfelsőszentgyörgy',
                'county_id' => 2,
            ),
            145 => 
            array (
                'id' => 1146,
                'name' => 'Jászfényszaru',
                'county_id' => 2,
            ),
            146 => 
            array (
                'id' => 1147,
                'name' => 'Jászivány',
                'county_id' => 2,
            ),
            147 => 
            array (
                'id' => 1148,
                'name' => 'Jászjákóhalma',
                'county_id' => 2,
            ),
            148 => 
            array (
                'id' => 1149,
                'name' => 'Jászkarajenő',
                'county_id' => 7,
            ),
            149 => 
            array (
                'id' => 1150,
                'name' => 'Jászkisér',
                'county_id' => 2,
            ),
            150 => 
            array (
                'id' => 1151,
                'name' => 'Jászladány',
                'county_id' => 2,
            ),
            151 => 
            array (
                'id' => 1152,
                'name' => 'Jászszentandrás',
                'county_id' => 2,
            ),
            152 => 
            array (
                'id' => 1153,
                'name' => 'Jászszentlászló',
                'county_id' => 12,
            ),
            153 => 
            array (
                'id' => 1154,
                'name' => 'Jásztelek',
                'county_id' => 2,
            ),
            154 => 
            array (
                'id' => 1155,
                'name' => 'Jéke',
                'county_id' => 13,
            ),
            155 => 
            array (
                'id' => 1156,
                'name' => 'Jenő',
                'county_id' => 1,
            ),
            156 => 
            array (
                'id' => 1157,
                'name' => 'Jobaháza',
                'county_id' => 6,
            ),
            157 => 
            array (
                'id' => 1158,
                'name' => 'Jobbágyi',
                'county_id' => 19,
            ),
            158 => 
            array (
                'id' => 1159,
                'name' => 'Jósvafő',
                'county_id' => 5,
            ),
            159 => 
            array (
                'id' => 1160,
                'name' => 'Juta',
                'county_id' => 11,
            ),
            160 => 
            array (
                'id' => 1161,
                'name' => 'Kaba',
                'county_id' => 17,
            ),
            161 => 
            array (
                'id' => 1162,
                'name' => 'Kacorlak',
                'county_id' => 15,
            ),
            162 => 
            array (
                'id' => 1163,
                'name' => 'Kács',
                'county_id' => 5,
            ),
            163 => 
            array (
                'id' => 1164,
                'name' => 'Kacsóta',
                'county_id' => 3,
            ),
            164 => 
            array (
                'id' => 1165,
                'name' => 'Kadarkút',
                'county_id' => 11,
            ),
            165 => 
            array (
                'id' => 1166,
                'name' => 'Kajárpéc',
                'county_id' => 6,
            ),
            166 => 
            array (
                'id' => 1167,
                'name' => 'Kajászó',
                'county_id' => 1,
            ),
            167 => 
            array (
                'id' => 1168,
                'name' => 'Kajdacs',
                'county_id' => 18,
            ),
            168 => 
            array (
                'id' => 1169,
                'name' => 'Kakasd',
                'county_id' => 18,
            ),
            169 => 
            array (
                'id' => 1170,
                'name' => 'Kákics',
                'county_id' => 3,
            ),
            170 => 
            array (
                'id' => 1171,
                'name' => 'Kakucs',
                'county_id' => 7,
            ),
            171 => 
            array (
                'id' => 1172,
                'name' => 'Kál',
                'county_id' => 4,
            ),
            172 => 
            array (
                'id' => 1173,
                'name' => 'Kalaznó',
                'county_id' => 18,
            ),
            173 => 
            array (
                'id' => 1174,
                'name' => 'Káld',
                'county_id' => 10,
            ),
            174 => 
            array (
                'id' => 1175,
                'name' => 'Kálló',
                'county_id' => 19,
            ),
            175 => 
            array (
                'id' => 1176,
                'name' => 'Kallósd',
                'county_id' => 15,
            ),
            176 => 
            array (
                'id' => 1177,
                'name' => 'Kállósemjén',
                'county_id' => 13,
            ),
            177 => 
            array (
                'id' => 1178,
                'name' => 'Kálmáncsa',
                'county_id' => 11,
            ),
            178 => 
            array (
                'id' => 1179,
                'name' => 'Kálmánháza',
                'county_id' => 13,
            ),
            179 => 
            array (
                'id' => 1180,
                'name' => 'Kálócfa',
                'county_id' => 15,
            ),
            180 => 
            array (
                'id' => 1181,
                'name' => 'Kalocsa',
                'county_id' => 12,
            ),
            181 => 
            array (
                'id' => 1182,
                'name' => 'Káloz',
                'county_id' => 1,
            ),
            182 => 
            array (
                'id' => 1183,
                'name' => 'Kám',
                'county_id' => 10,
            ),
            183 => 
            array (
                'id' => 1184,
                'name' => 'Kamond',
                'county_id' => 8,
            ),
            184 => 
            array (
                'id' => 1185,
                'name' => 'Kamut',
                'county_id' => 16,
            ),
            185 => 
            array (
                'id' => 1186,
                'name' => 'Kánó',
                'county_id' => 5,
            ),
            186 => 
            array (
                'id' => 1187,
                'name' => 'Kántorjánosi',
                'county_id' => 13,
            ),
            187 => 
            array (
                'id' => 1188,
                'name' => 'Kány',
                'county_id' => 5,
            ),
            188 => 
            array (
                'id' => 1189,
                'name' => 'Kánya',
                'county_id' => 11,
            ),
            189 => 
            array (
                'id' => 1190,
                'name' => 'Kányavár',
                'county_id' => 15,
            ),
            190 => 
            array (
                'id' => 1191,
                'name' => 'Kapolcs',
                'county_id' => 8,
            ),
            191 => 
            array (
                'id' => 1192,
                'name' => 'Kápolna',
                'county_id' => 4,
            ),
            192 => 
            array (
                'id' => 1193,
                'name' => 'Kápolnásnyék',
                'county_id' => 1,
            ),
            193 => 
            array (
                'id' => 1194,
                'name' => 'Kapoly',
                'county_id' => 11,
            ),
            194 => 
            array (
                'id' => 1195,
                'name' => 'Kaposfő',
                'county_id' => 11,
            ),
            195 => 
            array (
                'id' => 1196,
                'name' => 'Kaposgyarmat',
                'county_id' => 11,
            ),
            196 => 
            array (
                'id' => 1197,
                'name' => 'Kaposhomok',
                'county_id' => 11,
            ),
            197 => 
            array (
                'id' => 1198,
                'name' => 'Kaposkeresztúr',
                'county_id' => 11,
            ),
            198 => 
            array (
                'id' => 1199,
                'name' => 'Kaposmérő',
                'county_id' => 11,
            ),
            199 => 
            array (
                'id' => 1200,
                'name' => 'Kapospula',
                'county_id' => 18,
            ),
            200 => 
            array (
                'id' => 1201,
                'name' => 'Kaposszekcső',
                'county_id' => 18,
            ),
            201 => 
            array (
                'id' => 1202,
                'name' => 'Kaposszerdahely',
                'county_id' => 11,
            ),
            202 => 
            array (
                'id' => 1203,
                'name' => 'Kaposújlak',
                'county_id' => 11,
            ),
            203 => 
            array (
                'id' => 1204,
                'name' => 'Kaposvár',
                'county_id' => 11,
            ),
            204 => 
            array (
                'id' => 1205,
                'name' => 'Káptalanfa',
                'county_id' => 8,
            ),
            205 => 
            array (
                'id' => 1206,
                'name' => 'Káptalantóti',
                'county_id' => 8,
            ),
            206 => 
            array (
                'id' => 1207,
                'name' => 'Kapuvár',
                'county_id' => 6,
            ),
            207 => 
            array (
                'id' => 1208,
                'name' => 'Kára',
                'county_id' => 11,
            ),
            208 => 
            array (
                'id' => 1209,
                'name' => 'Karácsond',
                'county_id' => 4,
            ),
            209 => 
            array (
                'id' => 1210,
                'name' => 'Karád',
                'county_id' => 11,
            ),
            210 => 
            array (
                'id' => 1211,
                'name' => 'Karakó',
                'county_id' => 10,
            ),
            211 => 
            array (
                'id' => 1212,
                'name' => 'Karakószörcsök',
                'county_id' => 8,
            ),
            212 => 
            array (
                'id' => 1213,
                'name' => 'Karancsalja',
                'county_id' => 19,
            ),
            213 => 
            array (
                'id' => 1214,
                'name' => 'Karancsberény',
                'county_id' => 19,
            ),
            214 => 
            array (
                'id' => 1215,
                'name' => 'Karancskeszi',
                'county_id' => 19,
            ),
            215 => 
            array (
                'id' => 1216,
                'name' => 'Karancslapujtő',
                'county_id' => 19,
            ),
            216 => 
            array (
                'id' => 1217,
                'name' => 'Karancsság',
                'county_id' => 19,
            ),
            217 => 
            array (
                'id' => 1218,
                'name' => 'Kárász',
                'county_id' => 3,
            ),
            218 => 
            array (
                'id' => 1219,
                'name' => 'Karcag',
                'county_id' => 2,
            ),
            219 => 
            array (
                'id' => 1220,
                'name' => 'Karcsa',
                'county_id' => 5,
            ),
            220 => 
            array (
                'id' => 1221,
                'name' => 'Kardos',
                'county_id' => 16,
            ),
            221 => 
            array (
                'id' => 1222,
                'name' => 'Kardoskút',
                'county_id' => 16,
            ),
            222 => 
            array (
                'id' => 1223,
                'name' => 'Karmacs',
                'county_id' => 15,
            ),
            223 => 
            array (
                'id' => 1224,
                'name' => 'Karos',
                'county_id' => 5,
            ),
            224 => 
            array (
                'id' => 1225,
                'name' => 'Kartal',
                'county_id' => 7,
            ),
            225 => 
            array (
                'id' => 1226,
                'name' => 'Kásád',
                'county_id' => 3,
            ),
            226 => 
            array (
                'id' => 1227,
                'name' => 'Kaskantyú',
                'county_id' => 12,
            ),
            227 => 
            array (
                'id' => 1228,
                'name' => 'Kastélyosdombó',
                'county_id' => 11,
            ),
            228 => 
            array (
                'id' => 1229,
                'name' => 'Kaszaper',
                'county_id' => 16,
            ),
            229 => 
            array (
                'id' => 1230,
                'name' => 'Kaszó',
                'county_id' => 11,
            ),
            230 => 
            array (
                'id' => 1231,
                'name' => 'Katádfa',
                'county_id' => 3,
            ),
            231 => 
            array (
                'id' => 1232,
                'name' => 'Katafa',
                'county_id' => 10,
            ),
            232 => 
            array (
                'id' => 1233,
                'name' => 'Kátoly',
                'county_id' => 3,
            ),
            233 => 
            array (
                'id' => 1234,
                'name' => 'Katymár',
                'county_id' => 12,
            ),
            234 => 
            array (
                'id' => 1235,
                'name' => 'Káva',
                'county_id' => 7,
            ),
            235 => 
            array (
                'id' => 1236,
                'name' => 'Kávás',
                'county_id' => 15,
            ),
            236 => 
            array (
                'id' => 1237,
                'name' => 'Kazár',
                'county_id' => 19,
            ),
            237 => 
            array (
                'id' => 1238,
                'name' => 'Kazincbarcika',
                'county_id' => 5,
            ),
            238 => 
            array (
                'id' => 1239,
                'name' => 'Kázsmárk',
                'county_id' => 5,
            ),
            239 => 
            array (
                'id' => 1240,
                'name' => 'Kazsok',
                'county_id' => 11,
            ),
            240 => 
            array (
                'id' => 1241,
                'name' => 'Kecel',
                'county_id' => 12,
            ),
            241 => 
            array (
                'id' => 1242,
                'name' => 'Kecskéd',
                'county_id' => 9,
            ),
            242 => 
            array (
                'id' => 1243,
                'name' => 'Kecskemét',
                'county_id' => 12,
            ),
            243 => 
            array (
                'id' => 1244,
                'name' => 'Kehidakustány',
                'county_id' => 15,
            ),
            244 => 
            array (
                'id' => 1245,
                'name' => 'Kék',
                'county_id' => 13,
            ),
            245 => 
            array (
                'id' => 1246,
                'name' => 'Kékcse',
                'county_id' => 13,
            ),
            246 => 
            array (
                'id' => 1247,
                'name' => 'Kéked',
                'county_id' => 5,
            ),
            247 => 
            array (
                'id' => 1248,
                'name' => 'Kékesd',
                'county_id' => 3,
            ),
            248 => 
            array (
                'id' => 1249,
                'name' => 'Kékkút',
                'county_id' => 8,
            ),
            249 => 
            array (
                'id' => 1250,
                'name' => 'Kelebia',
                'county_id' => 12,
            ),
            250 => 
            array (
                'id' => 1251,
                'name' => 'Keléd',
                'county_id' => 10,
            ),
            251 => 
            array (
                'id' => 1252,
                'name' => 'Kelemér',
                'county_id' => 5,
            ),
            252 => 
            array (
                'id' => 1253,
                'name' => 'Kéleshalom',
                'county_id' => 12,
            ),
            253 => 
            array (
                'id' => 1254,
                'name' => 'Kelevíz',
                'county_id' => 11,
            ),
            254 => 
            array (
                'id' => 1255,
                'name' => 'Kemecse',
                'county_id' => 13,
            ),
            255 => 
            array (
                'id' => 1256,
                'name' => 'Kemence',
                'county_id' => 7,
            ),
            256 => 
            array (
                'id' => 1257,
                'name' => 'Kemendollár',
                'county_id' => 15,
            ),
            257 => 
            array (
                'id' => 1258,
                'name' => 'Kemeneshőgyész',
                'county_id' => 8,
            ),
            258 => 
            array (
                'id' => 1259,
                'name' => 'Kemeneskápolna',
                'county_id' => 10,
            ),
            259 => 
            array (
                'id' => 1260,
                'name' => 'Kemenesmagasi',
                'county_id' => 10,
            ),
            260 => 
            array (
                'id' => 1261,
                'name' => 'Kemenesmihályfa',
                'county_id' => 10,
            ),
            261 => 
            array (
                'id' => 1262,
                'name' => 'Kemenespálfa',
                'county_id' => 10,
            ),
            262 => 
            array (
                'id' => 1263,
                'name' => 'Kemenessömjén',
                'county_id' => 10,
            ),
            263 => 
            array (
                'id' => 1264,
                'name' => 'Kemenesszentmárton',
                'county_id' => 10,
            ),
            264 => 
            array (
                'id' => 1265,
                'name' => 'Kemenesszentpéter',
                'county_id' => 8,
            ),
            265 => 
            array (
                'id' => 1266,
                'name' => 'Keménfa',
                'county_id' => 15,
            ),
            266 => 
            array (
                'id' => 1267,
                'name' => 'Kémes',
                'county_id' => 3,
            ),
            267 => 
            array (
                'id' => 1268,
                'name' => 'Kemestaródfa',
                'county_id' => 10,
            ),
            268 => 
            array (
                'id' => 1269,
                'name' => 'Kemse',
                'county_id' => 3,
            ),
            269 => 
            array (
                'id' => 1270,
                'name' => 'Kenderes',
                'county_id' => 2,
            ),
            270 => 
            array (
                'id' => 1271,
                'name' => 'Kenéz',
                'county_id' => 10,
            ),
            271 => 
            array (
                'id' => 1272,
                'name' => 'Kenézlő',
                'county_id' => 5,
            ),
            272 => 
            array (
                'id' => 1273,
                'name' => 'Kengyel',
                'county_id' => 2,
            ),
            273 => 
            array (
                'id' => 1274,
                'name' => 'Kenyeri',
                'county_id' => 10,
            ),
            274 => 
            array (
                'id' => 1275,
                'name' => 'Kercaszomor',
                'county_id' => 10,
            ),
            275 => 
            array (
                'id' => 1276,
                'name' => 'Kercseliget',
                'county_id' => 11,
            ),
            276 => 
            array (
                'id' => 1277,
                'name' => 'Kerecsend',
                'county_id' => 4,
            ),
            277 => 
            array (
                'id' => 1278,
                'name' => 'Kerecseny',
                'county_id' => 15,
            ),
            278 => 
            array (
                'id' => 1279,
                'name' => 'Kerekegyháza',
                'county_id' => 12,
            ),
            279 => 
            array (
                'id' => 1280,
                'name' => 'Kereki',
                'county_id' => 11,
            ),
            280 => 
            array (
                'id' => 1281,
                'name' => 'Kerékteleki',
                'county_id' => 9,
            ),
            281 => 
            array (
                'id' => 1282,
                'name' => 'Kerepes',
                'county_id' => 7,
            ),
            282 => 
            array (
                'id' => 1283,
                'name' => 'Keresztéte',
                'county_id' => 5,
            ),
            283 => 
            array (
                'id' => 1284,
                'name' => 'Kerkabarabás',
                'county_id' => 15,
            ),
            284 => 
            array (
                'id' => 1285,
                'name' => 'Kerkafalva',
                'county_id' => 15,
            ),
            285 => 
            array (
                'id' => 1286,
                'name' => 'Kerkakutas',
                'county_id' => 15,
            ),
            286 => 
            array (
                'id' => 1287,
                'name' => 'Kerkáskápolna',
                'county_id' => 10,
            ),
            287 => 
            array (
                'id' => 1288,
                'name' => 'Kerkaszentkirály',
                'county_id' => 15,
            ),
            288 => 
            array (
                'id' => 1289,
                'name' => 'Kerkateskánd',
                'county_id' => 15,
            ),
            289 => 
            array (
                'id' => 1290,
                'name' => 'Kérsemjén',
                'county_id' => 13,
            ),
            290 => 
            array (
                'id' => 1291,
                'name' => 'Kerta',
                'county_id' => 8,
            ),
            291 => 
            array (
                'id' => 1292,
                'name' => 'Kertészsziget',
                'county_id' => 16,
            ),
            292 => 
            array (
                'id' => 1293,
                'name' => 'Keszeg',
                'county_id' => 19,
            ),
            293 => 
            array (
                'id' => 1294,
                'name' => 'Kesznyéten',
                'county_id' => 5,
            ),
            294 => 
            array (
                'id' => 1295,
                'name' => 'Keszőhidegkút',
                'county_id' => 18,
            ),
            295 => 
            array (
                'id' => 1296,
                'name' => 'Keszthely',
                'county_id' => 15,
            ),
            296 => 
            array (
                'id' => 1297,
                'name' => 'Kesztölc',
                'county_id' => 9,
            ),
            297 => 
            array (
                'id' => 1298,
                'name' => 'Keszü',
                'county_id' => 3,
            ),
            298 => 
            array (
                'id' => 1299,
                'name' => 'Kétbodony',
                'county_id' => 19,
            ),
            299 => 
            array (
                'id' => 1300,
                'name' => 'Kétegyháza',
                'county_id' => 16,
            ),
            300 => 
            array (
                'id' => 1301,
                'name' => 'Kéthely',
                'county_id' => 11,
            ),
            301 => 
            array (
                'id' => 1302,
                'name' => 'Kétpó',
                'county_id' => 2,
            ),
            302 => 
            array (
                'id' => 1303,
                'name' => 'Kétsoprony',
                'county_id' => 16,
            ),
            303 => 
            array (
                'id' => 1304,
                'name' => 'Kétújfalu',
                'county_id' => 3,
            ),
            304 => 
            array (
                'id' => 1305,
                'name' => 'Kétvölgy',
                'county_id' => 10,
            ),
            305 => 
            array (
                'id' => 1306,
                'name' => 'Kéty',
                'county_id' => 18,
            ),
            306 => 
            array (
                'id' => 1307,
                'name' => 'Kevermes',
                'county_id' => 16,
            ),
            307 => 
            array (
                'id' => 1308,
                'name' => 'Kilimán',
                'county_id' => 15,
            ),
            308 => 
            array (
                'id' => 1309,
                'name' => 'Kimle',
                'county_id' => 6,
            ),
            309 => 
            array (
                'id' => 1310,
                'name' => 'Kincsesbánya',
                'county_id' => 1,
            ),
            310 => 
            array (
                'id' => 1311,
                'name' => 'Királd',
                'county_id' => 5,
            ),
            311 => 
            array (
                'id' => 1312,
                'name' => 'Királyegyháza',
                'county_id' => 3,
            ),
            312 => 
            array (
                'id' => 1313,
                'name' => 'Királyhegyes',
                'county_id' => 14,
            ),
            313 => 
            array (
                'id' => 1314,
                'name' => 'Királyszentistván',
                'county_id' => 8,
            ),
            314 => 
            array (
                'id' => 1315,
                'name' => 'Kisapáti',
                'county_id' => 8,
            ),
            315 => 
            array (
                'id' => 1316,
                'name' => 'Kisapostag',
                'county_id' => 1,
            ),
            316 => 
            array (
                'id' => 1317,
                'name' => 'Kisar',
                'county_id' => 13,
            ),
            317 => 
            array (
                'id' => 1318,
                'name' => 'Kisasszond',
                'county_id' => 11,
            ),
            318 => 
            array (
                'id' => 1319,
                'name' => 'Kisasszonyfa',
                'county_id' => 3,
            ),
            319 => 
            array (
                'id' => 1320,
                'name' => 'Kisbabot',
                'county_id' => 6,
            ),
            320 => 
            array (
                'id' => 1321,
                'name' => 'Kisbágyon',
                'county_id' => 19,
            ),
            321 => 
            array (
                'id' => 1322,
                'name' => 'Kisbajcs',
                'county_id' => 6,
            ),
            322 => 
            array (
                'id' => 1323,
                'name' => 'Kisbajom',
                'county_id' => 11,
            ),
            323 => 
            array (
                'id' => 1324,
                'name' => 'Kisbárapáti',
                'county_id' => 11,
            ),
            324 => 
            array (
                'id' => 1325,
                'name' => 'Kisbárkány',
                'county_id' => 19,
            ),
            325 => 
            array (
                'id' => 1326,
                'name' => 'Kisbér',
                'county_id' => 9,
            ),
            326 => 
            array (
                'id' => 1327,
                'name' => 'Kisberény',
                'county_id' => 11,
            ),
            327 => 
            array (
                'id' => 1328,
                'name' => 'Kisberzseny',
                'county_id' => 8,
            ),
            328 => 
            array (
                'id' => 1329,
                'name' => 'Kisbeszterce',
                'county_id' => 3,
            ),
            329 => 
            array (
                'id' => 1330,
                'name' => 'Kisbodak',
                'county_id' => 6,
            ),
            330 => 
            array (
                'id' => 1331,
                'name' => 'Kisbucsa',
                'county_id' => 15,
            ),
            331 => 
            array (
                'id' => 1332,
                'name' => 'Kisbudmér',
                'county_id' => 3,
            ),
            332 => 
            array (
                'id' => 1333,
                'name' => 'Kiscsécs',
                'county_id' => 5,
            ),
            333 => 
            array (
                'id' => 1334,
                'name' => 'Kiscsehi',
                'county_id' => 15,
            ),
            334 => 
            array (
                'id' => 1335,
                'name' => 'Kiscsősz',
                'county_id' => 8,
            ),
            335 => 
            array (
                'id' => 1336,
                'name' => 'Kisdér',
                'county_id' => 3,
            ),
            336 => 
            array (
                'id' => 1337,
                'name' => 'Kisdobsza',
                'county_id' => 3,
            ),
            337 => 
            array (
                'id' => 1338,
                'name' => 'Kisdombegyház',
                'county_id' => 16,
            ),
            338 => 
            array (
                'id' => 1339,
                'name' => 'Kisdorog',
                'county_id' => 18,
            ),
            339 => 
            array (
                'id' => 1340,
                'name' => 'Kisecset',
                'county_id' => 19,
            ),
            340 => 
            array (
                'id' => 1341,
                'name' => 'Kisfalud',
                'county_id' => 6,
            ),
            341 => 
            array (
                'id' => 1342,
                'name' => 'Kisfüzes',
                'county_id' => 4,
            ),
            342 => 
            array (
                'id' => 1343,
                'name' => 'Kisgörbő',
                'county_id' => 15,
            ),
            343 => 
            array (
                'id' => 1344,
                'name' => 'Kisgyalán',
                'county_id' => 11,
            ),
            344 => 
            array (
                'id' => 1345,
                'name' => 'Kisgyőr',
                'county_id' => 5,
            ),
            345 => 
            array (
                'id' => 1346,
                'name' => 'Kishajmás',
                'county_id' => 3,
            ),
            346 => 
            array (
                'id' => 1347,
                'name' => 'Kisharsány',
                'county_id' => 3,
            ),
            347 => 
            array (
                'id' => 1348,
                'name' => 'Kishartyán',
                'county_id' => 19,
            ),
            348 => 
            array (
                'id' => 1349,
                'name' => 'Kisherend',
                'county_id' => 3,
            ),
            349 => 
            array (
                'id' => 1350,
                'name' => 'Kishódos',
                'county_id' => 13,
            ),
            350 => 
            array (
                'id' => 1351,
                'name' => 'Kishuta',
                'county_id' => 5,
            ),
            351 => 
            array (
                'id' => 1352,
                'name' => 'Kisigmánd',
                'county_id' => 9,
            ),
            352 => 
            array (
                'id' => 1353,
                'name' => 'Kisjakabfalva',
                'county_id' => 3,
            ),
            353 => 
            array (
                'id' => 1354,
                'name' => 'Kiskassa',
                'county_id' => 3,
            ),
            354 => 
            array (
                'id' => 1355,
                'name' => 'Kiskinizs',
                'county_id' => 5,
            ),
            355 => 
            array (
                'id' => 1356,
                'name' => 'Kisköre',
                'county_id' => 11,
            ),
            356 => 
            array (
                'id' => 1357,
                'name' => 'Kiskőrös',
                'county_id' => 4,
            ),
            357 => 
            array (
                'id' => 1358,
                'name' => 'Kiskorpád',
                'county_id' => 12,
            ),
            358 => 
            array (
                'id' => 1359,
                'name' => 'Kiskunfélegyháza',
                'county_id' => 12,
            ),
            359 => 
            array (
                'id' => 1360,
                'name' => 'Kiskunhalas',
                'county_id' => 12,
            ),
            360 => 
            array (
                'id' => 1361,
                'name' => 'Kiskunlacháza',
                'county_id' => 7,
            ),
            361 => 
            array (
                'id' => 1362,
                'name' => 'Kiskunmajsa',
                'county_id' => 12,
            ),
            362 => 
            array (
                'id' => 1363,
                'name' => 'Kiskutas',
                'county_id' => 15,
            ),
            363 => 
            array (
                'id' => 1364,
                'name' => 'Kisláng',
                'county_id' => 1,
            ),
            364 => 
            array (
                'id' => 1365,
                'name' => 'Kisléta',
                'county_id' => 13,
            ),
            365 => 
            array (
                'id' => 1366,
                'name' => 'Kislippó',
                'county_id' => 3,
            ),
            366 => 
            array (
                'id' => 1367,
                'name' => 'Kislőd',
                'county_id' => 8,
            ),
            367 => 
            array (
                'id' => 1368,
                'name' => 'Kismányok',
                'county_id' => 18,
            ),
            368 => 
            array (
                'id' => 1369,
                'name' => 'Kismarja',
                'county_id' => 17,
            ),
            369 => 
            array (
                'id' => 1370,
                'name' => 'Kismaros',
                'county_id' => 7,
            ),
            370 => 
            array (
                'id' => 1371,
                'name' => 'Kisnamény',
                'county_id' => 13,
            ),
            371 => 
            array (
                'id' => 1372,
                'name' => 'Kisnána',
                'county_id' => 4,
            ),
            372 => 
            array (
                'id' => 1373,
                'name' => 'Kisnémedi',
                'county_id' => 7,
            ),
            373 => 
            array (
                'id' => 1374,
                'name' => 'Kisnyárád',
                'county_id' => 3,
            ),
            374 => 
            array (
                'id' => 1375,
                'name' => 'Kisoroszi',
                'county_id' => 7,
            ),
            375 => 
            array (
                'id' => 1376,
                'name' => 'Kispalád',
                'county_id' => 13,
            ),
            376 => 
            array (
                'id' => 1377,
                'name' => 'Kispáli',
                'county_id' => 15,
            ),
            377 => 
            array (
                'id' => 1378,
                'name' => 'Kispirit',
                'county_id' => 8,
            ),
            378 => 
            array (
                'id' => 1379,
                'name' => 'Kisrákos',
                'county_id' => 10,
            ),
            379 => 
            array (
                'id' => 1380,
                'name' => 'Kisrécse',
                'county_id' => 15,
            ),
            380 => 
            array (
                'id' => 1381,
                'name' => 'Kisrozvágy',
                'county_id' => 5,
            ),
            381 => 
            array (
                'id' => 1382,
                'name' => 'Kissikátor',
                'county_id' => 5,
            ),
            382 => 
            array (
                'id' => 1383,
                'name' => 'Kissomlyó',
                'county_id' => 10,
            ),
            383 => 
            array (
                'id' => 1384,
                'name' => 'Kisszállás',
                'county_id' => 12,
            ),
            384 => 
            array (
                'id' => 1385,
                'name' => 'Kisszékely',
                'county_id' => 18,
            ),
            385 => 
            array (
                'id' => 1386,
                'name' => 'Kisszekeres',
                'county_id' => 13,
            ),
            386 => 
            array (
                'id' => 1387,
                'name' => 'Kisszentmárton',
                'county_id' => 3,
            ),
            387 => 
            array (
                'id' => 1388,
                'name' => 'Kissziget',
                'county_id' => 15,
            ),
            388 => 
            array (
                'id' => 1389,
                'name' => 'Kisszőlős',
                'county_id' => 8,
            ),
            389 => 
            array (
                'id' => 1390,
                'name' => 'Kistamási',
                'county_id' => 3,
            ),
            390 => 
            array (
                'id' => 1391,
                'name' => 'Kistapolca',
                'county_id' => 3,
            ),
            391 => 
            array (
                'id' => 1392,
                'name' => 'Kistarcsa',
                'county_id' => 7,
            ),
            392 => 
            array (
                'id' => 1393,
                'name' => 'Kistelek',
                'county_id' => 14,
            ),
            393 => 
            array (
                'id' => 1394,
                'name' => 'Kistokaj',
                'county_id' => 5,
            ),
            394 => 
            array (
                'id' => 1395,
                'name' => 'Kistolmács',
                'county_id' => 15,
            ),
            395 => 
            array (
                'id' => 1396,
                'name' => 'Kistormás',
                'county_id' => 18,
            ),
            396 => 
            array (
                'id' => 1397,
                'name' => 'Kistótfalu',
                'county_id' => 3,
            ),
            397 => 
            array (
                'id' => 1398,
                'name' => 'Kisújszállás',
                'county_id' => 2,
            ),
            398 => 
            array (
                'id' => 1399,
                'name' => 'Kisunyom',
                'county_id' => 10,
            ),
            399 => 
            array (
                'id' => 1400,
                'name' => 'Kisvárda',
                'county_id' => 13,
            ),
            400 => 
            array (
                'id' => 1401,
                'name' => 'Kisvarsány',
                'county_id' => 13,
            ),
            401 => 
            array (
                'id' => 1402,
                'name' => 'Kisvásárhely',
                'county_id' => 15,
            ),
            402 => 
            array (
                'id' => 1403,
                'name' => 'Kisvaszar',
                'county_id' => 3,
            ),
            403 => 
            array (
                'id' => 1404,
                'name' => 'Kisvejke',
                'county_id' => 18,
            ),
            404 => 
            array (
                'id' => 1405,
                'name' => 'Kiszombor',
                'county_id' => 14,
            ),
            405 => 
            array (
                'id' => 1406,
                'name' => 'Kiszsidány',
                'county_id' => 10,
            ),
            406 => 
            array (
                'id' => 1407,
                'name' => 'Klárafalva',
                'county_id' => 14,
            ),
            407 => 
            array (
                'id' => 1408,
                'name' => 'Köblény',
                'county_id' => 9,
            ),
            408 => 
            array (
                'id' => 1409,
                'name' => 'Kocs',
                'county_id' => 7,
            ),
            409 => 
            array (
                'id' => 1410,
                'name' => 'Kocsér',
                'county_id' => 18,
            ),
            410 => 
            array (
                'id' => 1411,
                'name' => 'Köcsk',
                'county_id' => 13,
            ),
            411 => 
            array (
                'id' => 1412,
                'name' => 'Kocsola',
                'county_id' => 7,
            ),
            412 => 
            array (
                'id' => 1413,
                'name' => 'Kocsord',
                'county_id' => 17,
            ),
            413 => 
            array (
                'id' => 1414,
                'name' => 'Kóka',
                'county_id' => 8,
            ),
            414 => 
            array (
                'id' => 1415,
                'name' => 'Kokad',
                'county_id' => 17,
            ),
            415 => 
            array (
                'id' => 1416,
                'name' => 'Kökény',
                'county_id' => 9,
            ),
            416 => 
            array (
                'id' => 1417,
                'name' => 'Kőkút',
                'county_id' => 9,
            ),
            417 => 
            array (
                'id' => 1418,
                'name' => 'Kölcse',
                'county_id' => 9,
            ),
            418 => 
            array (
                'id' => 1419,
                'name' => 'Kölesd',
                'county_id' => 5,
            ),
            419 => 
            array (
                'id' => 1420,
                'name' => 'Kölked',
                'county_id' => 3,
            ),
            420 => 
            array (
                'id' => 1421,
                'name' => 'Kolontár',
                'county_id' => 3,
            ),
            421 => 
            array (
                'id' => 1422,
                'name' => 'Komádi',
                'county_id' => 13,
            ),
            422 => 
            array (
                'id' => 1423,
                'name' => 'Komárom',
                'county_id' => 11,
            ),
            423 => 
            array (
                'id' => 1424,
                'name' => 'Komárom',
                'county_id' => 5,
            ),
            424 => 
            array (
                'id' => 1425,
                'name' => 'Komárom',
                'county_id' => 13,
            ),
            425 => 
            array (
                'id' => 1426,
                'name' => 'Komjáti',
                'county_id' => 4,
            ),
            426 => 
            array (
                'id' => 1427,
                'name' => 'Komló',
                'county_id' => 5,
            ),
            427 => 
            array (
                'id' => 1428,
                'name' => 'Komló',
                'county_id' => 10,
            ),
            428 => 
            array (
                'id' => 1429,
                'name' => 'Kömlő',
                'county_id' => 16,
            ),
            429 => 
            array (
                'id' => 1430,
                'name' => 'Kömlőd',
                'county_id' => 6,
            ),
            430 => 
            array (
                'id' => 1431,
                'name' => 'Komlódtótfalu',
                'county_id' => 17,
            ),
            431 => 
            array (
                'id' => 1432,
                'name' => 'Komlósd',
                'county_id' => 6,
            ),
            432 => 
            array (
                'id' => 1433,
                'name' => 'Komlóska',
                'county_id' => 18,
            ),
            433 => 
            array (
                'id' => 1434,
                'name' => 'Komoró',
                'county_id' => 5,
            ),
            434 => 
            array (
                'id' => 1435,
                'name' => 'Kömörő',
                'county_id' => 6,
            ),
            435 => 
            array (
                'id' => 1436,
                'name' => 'Kömpöc',
                'county_id' => 3,
            ),
            436 => 
            array (
                'id' => 1437,
                'name' => 'Kompolt',
                'county_id' => 7,
            ),
            437 => 
            array (
                'id' => 1438,
                'name' => 'Kondó',
                'county_id' => 7,
            ),
            438 => 
            array (
                'id' => 1439,
                'name' => 'Kondorfa',
                'county_id' => 13,
            ),
            439 => 
            array (
                'id' => 1440,
                'name' => 'Kondoros',
                'county_id' => 3,
            ),
            440 => 
            array (
                'id' => 1441,
                'name' => 'Kóny',
                'county_id' => 3,
            ),
            441 => 
            array (
                'id' => 1442,
                'name' => 'Konyár',
                'county_id' => 5,
            ),
            442 => 
            array (
                'id' => 1443,
                'name' => 'Kópháza',
                'county_id' => 19,
            ),
            443 => 
            array (
                'id' => 1444,
                'name' => 'Koppányszántó',
                'county_id' => 3,
            ),
            444 => 
            array (
                'id' => 1445,
                'name' => 'Korlát',
                'county_id' => 15,
            ),
            445 => 
            array (
                'id' => 1446,
                'name' => 'Körmend',
                'county_id' => 3,
            ),
            446 => 
            array (
                'id' => 1447,
                'name' => 'Körmend',
                'county_id' => 10,
            ),
            447 => 
            array (
                'id' => 1448,
                'name' => 'Környe',
                'county_id' => 3,
            ),
            448 => 
            array (
                'id' => 1449,
                'name' => 'Köröm',
                'county_id' => 11,
            ),
            449 => 
            array (
                'id' => 1450,
                'name' => 'Koroncó',
                'county_id' => 13,
            ),
            450 => 
            array (
                'id' => 1451,
                'name' => 'Kórós',
                'county_id' => 18,
            ),
            451 => 
            array (
                'id' => 1452,
                'name' => 'Kőröshegy',
                'county_id' => 3,
            ),
            452 => 
            array (
                'id' => 1453,
                'name' => 'Körösladány',
                'county_id' => 4,
            ),
            453 => 
            array (
                'id' => 1454,
                'name' => 'Körösnagyharsány',
                'county_id' => 9,
            ),
            454 => 
            array (
                'id' => 1455,
                'name' => 'Körösszakál',
                'county_id' => 13,
            ),
            455 => 
            array (
                'id' => 1456,
                'name' => 'Körösszegapáti',
                'county_id' => 12,
            ),
            456 => 
            array (
                'id' => 1457,
                'name' => 'Köröstarcsa',
                'county_id' => 10,
            ),
            457 => 
            array (
                'id' => 1458,
                'name' => 'Kőröstetétlen',
                'county_id' => 10,
            ),
            458 => 
            array (
                'id' => 1459,
                'name' => 'Körösújfalu',
                'county_id' => 9,
            ),
            459 => 
            array (
                'id' => 1460,
                'name' => 'Kosd',
                'county_id' => 5,
            ),
            460 => 
            array (
                'id' => 1461,
                'name' => 'Kóspallag',
                'county_id' => 11,
            ),
            461 => 
            array (
                'id' => 1462,
                'name' => 'Kőszárhegy',
                'county_id' => 16,
            ),
            462 => 
            array (
                'id' => 1463,
                'name' => 'Kőszeg',
                'county_id' => 16,
            ),
            463 => 
            array (
                'id' => 1464,
                'name' => 'Kőszegdoroszló',
                'county_id' => 16,
            ),
            464 => 
            array (
                'id' => 1465,
                'name' => 'Kőszegpaty',
                'county_id' => 7,
            ),
            465 => 
            array (
                'id' => 1466,
                'name' => 'Kőszegszerdahely',
                'county_id' => 16,
            ),
            466 => 
            array (
                'id' => 1467,
                'name' => 'Kótaj',
                'county_id' => 17,
            ),
            467 => 
            array (
                'id' => 1468,
                'name' => 'Kötcse',
                'county_id' => 17,
            ),
            468 => 
            array (
                'id' => 1469,
                'name' => 'Kötegyán',
                'county_id' => 1,
            ),
            469 => 
            array (
                'id' => 1470,
                'name' => 'Kőtelek',
                'county_id' => 10,
            ),
            470 => 
            array (
                'id' => 1471,
                'name' => 'Kovácshida',
                'county_id' => 10,
            ),
            471 => 
            array (
                'id' => 1472,
                'name' => 'Kovácsszénája',
                'county_id' => 10,
            ),
            472 => 
            array (
                'id' => 1473,
                'name' => 'Kovácsvágás',
                'county_id' => 10,
            ),
            473 => 
            array (
                'id' => 1474,
                'name' => 'Kővágóörs',
                'county_id' => 11,
            ),
            474 => 
            array (
                'id' => 1475,
                'name' => 'Kővágószőlős',
                'county_id' => 16,
            ),
            475 => 
            array (
                'id' => 1476,
                'name' => 'Kővágótőttős',
                'county_id' => 2,
            ),
            476 => 
            array (
                'id' => 1477,
                'name' => 'Kövegy',
                'county_id' => 8,
            ),
            477 => 
            array (
                'id' => 1478,
                'name' => 'Köveskál',
                'county_id' => 3,
            ),
            478 => 
            array (
                'id' => 1479,
                'name' => 'Kozárd',
                'county_id' => 3,
            ),
            479 => 
            array (
                'id' => 1480,
                'name' => 'Kozármisleny',
                'county_id' => 14,
            ),
            480 => 
            array (
                'id' => 1481,
                'name' => 'Kozmadombja',
                'county_id' => 8,
            ),
            481 => 
            array (
                'id' => 1482,
                'name' => 'Krasznokvajda',
                'county_id' => 5,
            ),
            482 => 
            array (
                'id' => 1483,
                'name' => 'Kübekháza',
                'county_id' => 1,
            ),
            483 => 
            array (
                'id' => 1484,
                'name' => 'Kulcs',
                'county_id' => 12,
            ),
            484 => 
            array (
                'id' => 1485,
                'name' => 'Külsősárd',
                'county_id' => 16,
            ),
            485 => 
            array (
                'id' => 1486,
                'name' => 'Külsővat',
                'county_id' => 12,
            ),
            486 => 
            array (
                'id' => 1487,
                'name' => 'Kunadacs',
                'county_id' => 12,
            ),
            487 => 
            array (
                'id' => 1488,
                'name' => 'Kunágota',
                'county_id' => 2,
            ),
            488 => 
            array (
                'id' => 1489,
                'name' => 'Kunbaja',
                'county_id' => 12,
            ),
            489 => 
            array (
                'id' => 1490,
                'name' => 'Kunbaracs',
                'county_id' => 2,
            ),
            490 => 
            array (
                'id' => 1491,
                'name' => 'Kuncsorba',
                'county_id' => 2,
            ),
            491 => 
            array (
                'id' => 1492,
                'name' => 'Kunfehértó',
                'county_id' => 12,
            ),
            492 => 
            array (
                'id' => 1493,
                'name' => 'Küngös',
                'county_id' => 12,
            ),
            493 => 
            array (
                'id' => 1494,
                'name' => 'Kunhegyes',
                'county_id' => 2,
            ),
            494 => 
            array (
                'id' => 1495,
                'name' => 'Kunmadaras',
                'county_id' => 2,
            ),
            495 => 
            array (
                'id' => 1496,
                'name' => 'Kunpeszér',
                'county_id' => 12,
            ),
            496 => 
            array (
                'id' => 1497,
                'name' => 'Kunszállás',
                'county_id' => 6,
            ),
            497 => 
            array (
                'id' => 1498,
                'name' => 'Kunszentmárton',
                'county_id' => 8,
            ),
            498 => 
            array (
                'id' => 1499,
                'name' => 'Kunszentmárton',
                'county_id' => 5,
            ),
            499 => 
            array (
                'id' => 1500,
                'name' => 'Kunszentmiklós',
                'county_id' => 18,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'name' => 'Kunsziget',
                'county_id' => 5,
            ),
            1 => 
            array (
                'id' => 1502,
                'name' => 'Kup',
                'county_id' => 15,
            ),
            2 => 
            array (
                'id' => 1503,
                'name' => 'Kupa',
                'county_id' => 11,
            ),
            3 => 
            array (
                'id' => 1504,
                'name' => 'Kurd',
                'county_id' => 19,
            ),
            4 => 
            array (
                'id' => 1505,
                'name' => 'Kurityán',
                'county_id' => 14,
            ),
            5 => 
            array (
                'id' => 1506,
                'name' => 'Kustánszeg',
                'county_id' => 15,
            ),
            6 => 
            array (
                'id' => 1507,
                'name' => 'Kutas',
                'county_id' => 8,
            ),
            7 => 
            array (
                'id' => 1508,
                'name' => 'Kutasó',
                'county_id' => 8,
            ),
            8 => 
            array (
                'id' => 1509,
                'name' => 'Lábatlan',
                'county_id' => 9,
            ),
            9 => 
            array (
                'id' => 1510,
                'name' => 'Lábod',
                'county_id' => 11,
            ),
            10 => 
            array (
                'id' => 1511,
                'name' => 'Lácacséke',
                'county_id' => 5,
            ),
            11 => 
            array (
                'id' => 1512,
                'name' => 'Lad',
                'county_id' => 11,
            ),
            12 => 
            array (
                'id' => 1513,
                'name' => 'Ladánybene',
                'county_id' => 12,
            ),
            13 => 
            array (
                'id' => 1514,
                'name' => 'Ládbesenyő',
                'county_id' => 5,
            ),
            14 => 
            array (
                'id' => 1515,
                'name' => 'Lajoskomárom',
                'county_id' => 1,
            ),
            15 => 
            array (
                'id' => 1516,
                'name' => 'Lajosmizse',
                'county_id' => 12,
            ),
            16 => 
            array (
                'id' => 1517,
                'name' => 'Lak',
                'county_id' => 5,
            ),
            17 => 
            array (
                'id' => 1518,
                'name' => 'Lakhegy',
                'county_id' => 15,
            ),
            18 => 
            array (
                'id' => 1519,
                'name' => 'Lakitelek',
                'county_id' => 12,
            ),
            19 => 
            array (
                'id' => 1520,
                'name' => 'Lakócsa',
                'county_id' => 11,
            ),
            20 => 
            array (
                'id' => 1521,
                'name' => 'Lánycsók',
                'county_id' => 3,
            ),
            21 => 
            array (
                'id' => 1522,
                'name' => 'Lápafő',
                'county_id' => 18,
            ),
            22 => 
            array (
                'id' => 1523,
                'name' => 'Lapáncsa',
                'county_id' => 3,
            ),
            23 => 
            array (
                'id' => 1524,
                'name' => 'Laskod',
                'county_id' => 13,
            ),
            24 => 
            array (
                'id' => 1525,
                'name' => 'Lasztonya',
                'county_id' => 15,
            ),
            25 => 
            array (
                'id' => 1526,
                'name' => 'Látrány',
                'county_id' => 11,
            ),
            26 => 
            array (
                'id' => 1527,
                'name' => 'Lázi',
                'county_id' => 6,
            ),
            27 => 
            array (
                'id' => 1528,
                'name' => 'Leányfalu',
                'county_id' => 7,
            ),
            28 => 
            array (
                'id' => 1529,
                'name' => 'Leányvár',
                'county_id' => 9,
            ),
            29 => 
            array (
                'id' => 1530,
                'name' => 'Lébény',
                'county_id' => 6,
            ),
            30 => 
            array (
                'id' => 1531,
                'name' => 'Legénd',
                'county_id' => 19,
            ),
            31 => 
            array (
                'id' => 1532,
                'name' => 'Legyesbénye',
                'county_id' => 5,
            ),
            32 => 
            array (
                'id' => 1533,
                'name' => 'Léh',
                'county_id' => 5,
            ),
            33 => 
            array (
                'id' => 1534,
                'name' => 'Lénárddaróc',
                'county_id' => 5,
            ),
            34 => 
            array (
                'id' => 1535,
                'name' => 'Lendvadedes',
                'county_id' => 15,
            ),
            35 => 
            array (
                'id' => 1536,
                'name' => 'Lendvajakabfa',
                'county_id' => 15,
            ),
            36 => 
            array (
                'id' => 1537,
                'name' => 'Lengyel',
                'county_id' => 18,
            ),
            37 => 
            array (
                'id' => 1538,
                'name' => 'Lengyeltóti',
                'county_id' => 11,
            ),
            38 => 
            array (
                'id' => 1539,
                'name' => 'Lenti',
                'county_id' => 15,
            ),
            39 => 
            array (
                'id' => 1540,
                'name' => 'Lepsény',
                'county_id' => 1,
            ),
            40 => 
            array (
                'id' => 1541,
                'name' => 'Lesencefalu',
                'county_id' => 8,
            ),
            41 => 
            array (
                'id' => 1542,
                'name' => 'Lesenceistvánd',
                'county_id' => 8,
            ),
            42 => 
            array (
                'id' => 1543,
                'name' => 'Lesencetomaj',
                'county_id' => 8,
            ),
            43 => 
            array (
                'id' => 1544,
                'name' => 'Létavértes',
                'county_id' => 17,
            ),
            44 => 
            array (
                'id' => 1545,
                'name' => 'Letenye',
                'county_id' => 15,
            ),
            45 => 
            array (
                'id' => 1546,
                'name' => 'Letkés',
                'county_id' => 7,
            ),
            46 => 
            array (
                'id' => 1547,
                'name' => 'Levél',
                'county_id' => 6,
            ),
            47 => 
            array (
                'id' => 1548,
                'name' => 'Levelek',
                'county_id' => 13,
            ),
            48 => 
            array (
                'id' => 1549,
                'name' => 'Libickozma',
                'county_id' => 11,
            ),
            49 => 
            array (
                'id' => 1550,
                'name' => 'Lickóvadamos',
                'county_id' => 15,
            ),
            50 => 
            array (
                'id' => 1551,
                'name' => 'Liget',
                'county_id' => 3,
            ),
            51 => 
            array (
                'id' => 1552,
                'name' => 'Ligetfalva',
                'county_id' => 15,
            ),
            52 => 
            array (
                'id' => 1553,
                'name' => 'Lipót',
                'county_id' => 6,
            ),
            53 => 
            array (
                'id' => 1554,
                'name' => 'Lippó',
                'county_id' => 3,
            ),
            54 => 
            array (
                'id' => 1555,
                'name' => 'Liptód',
                'county_id' => 3,
            ),
            55 => 
            array (
                'id' => 1556,
                'name' => 'Lispeszentadorján',
                'county_id' => 15,
            ),
            56 => 
            array (
                'id' => 1557,
                'name' => 'Liszó',
                'county_id' => 15,
            ),
            57 => 
            array (
                'id' => 1558,
                'name' => 'Litér',
                'county_id' => 8,
            ),
            58 => 
            array (
                'id' => 1559,
                'name' => 'Litka',
                'county_id' => 5,
            ),
            59 => 
            array (
                'id' => 1560,
                'name' => 'Litke',
                'county_id' => 19,
            ),
            60 => 
            array (
                'id' => 1561,
                'name' => 'Lócs',
                'county_id' => 10,
            ),
            61 => 
            array (
                'id' => 1562,
                'name' => 'Lőkösháza',
                'county_id' => 8,
            ),
            62 => 
            array (
                'id' => 1563,
                'name' => 'Lókút',
                'county_id' => 13,
            ),
            63 => 
            array (
                'id' => 1564,
                'name' => 'Lónya',
                'county_id' => 7,
            ),
            64 => 
            array (
                'id' => 1565,
                'name' => 'Lórév',
                'county_id' => 3,
            ),
            65 => 
            array (
                'id' => 1566,
                'name' => 'Lőrinci',
                'county_id' => 8,
            ),
            66 => 
            array (
                'id' => 1567,
                'name' => 'Lőrinci',
                'county_id' => 1,
            ),
            67 => 
            array (
                'id' => 1568,
                'name' => 'Lőrinci',
                'county_id' => 3,
            ),
            68 => 
            array (
                'id' => 1569,
                'name' => 'Lothárd',
                'county_id' => 15,
            ),
            69 => 
            array (
                'id' => 1570,
                'name' => 'Lovas',
                'county_id' => 8,
            ),
            70 => 
            array (
                'id' => 1571,
                'name' => 'Lovasberény',
                'county_id' => 16,
            ),
            71 => 
            array (
                'id' => 1572,
                'name' => 'Lovászhetény',
                'county_id' => 4,
            ),
            72 => 
            array (
                'id' => 1573,
                'name' => 'Lovászi',
                'county_id' => 4,
            ),
            73 => 
            array (
                'id' => 1574,
                'name' => 'Lovászpatona',
                'county_id' => 4,
            ),
            74 => 
            array (
                'id' => 1575,
                'name' => 'Lövő',
                'county_id' => 6,
            ),
            75 => 
            array (
                'id' => 1576,
                'name' => 'Lövőpetri',
                'county_id' => 13,
            ),
            76 => 
            array (
                'id' => 1577,
                'name' => 'Lucfalva',
                'county_id' => 19,
            ),
            77 => 
            array (
                'id' => 1578,
                'name' => 'Ludányhalászi',
                'county_id' => 19,
            ),
            78 => 
            array (
                'id' => 1579,
                'name' => 'Ludas',
                'county_id' => 4,
            ),
            79 => 
            array (
                'id' => 1580,
                'name' => 'Lukácsháza',
                'county_id' => 10,
            ),
            80 => 
            array (
                'id' => 1581,
                'name' => 'Lulla',
                'county_id' => 11,
            ),
            81 => 
            array (
                'id' => 1582,
                'name' => 'Lúzsok',
                'county_id' => 3,
            ),
            82 => 
            array (
                'id' => 1583,
                'name' => 'Mád',
                'county_id' => 5,
            ),
            83 => 
            array (
                'id' => 1584,
                'name' => 'Madaras',
                'county_id' => 12,
            ),
            84 => 
            array (
                'id' => 1585,
                'name' => 'Madocsa',
                'county_id' => 18,
            ),
            85 => 
            array (
                'id' => 1586,
                'name' => 'Maglóca',
                'county_id' => 6,
            ),
            86 => 
            array (
                'id' => 1587,
                'name' => 'Maglód',
                'county_id' => 7,
            ),
            87 => 
            array (
                'id' => 1588,
                'name' => 'Mágocs',
                'county_id' => 3,
            ),
            88 => 
            array (
                'id' => 1589,
                'name' => 'Magosliget',
                'county_id' => 13,
            ),
            89 => 
            array (
                'id' => 1590,
                'name' => 'Magy',
                'county_id' => 13,
            ),
            90 => 
            array (
                'id' => 1591,
                'name' => 'Magyaralmás',
                'county_id' => 1,
            ),
            91 => 
            array (
                'id' => 1592,
                'name' => 'Magyaratád',
                'county_id' => 11,
            ),
            92 => 
            array (
                'id' => 1593,
                'name' => 'Magyarbánhegyes',
                'county_id' => 16,
            ),
            93 => 
            array (
                'id' => 1594,
                'name' => 'Magyarbóly',
                'county_id' => 3,
            ),
            94 => 
            array (
                'id' => 1595,
                'name' => 'Magyarcsanád',
                'county_id' => 14,
            ),
            95 => 
            array (
                'id' => 1596,
                'name' => 'Magyardombegyház',
                'county_id' => 16,
            ),
            96 => 
            array (
                'id' => 1597,
                'name' => 'Magyaregregy',
                'county_id' => 3,
            ),
            97 => 
            array (
                'id' => 1598,
                'name' => 'Magyaregres',
                'county_id' => 11,
            ),
            98 => 
            array (
                'id' => 1599,
                'name' => 'Magyarföld',
                'county_id' => 15,
            ),
            99 => 
            array (
                'id' => 1600,
                'name' => 'Magyargéc',
                'county_id' => 19,
            ),
            100 => 
            array (
                'id' => 1601,
                'name' => 'Magyargencs',
                'county_id' => 8,
            ),
            101 => 
            array (
                'id' => 1602,
                'name' => 'Magyarhertelend',
                'county_id' => 3,
            ),
            102 => 
            array (
                'id' => 1603,
                'name' => 'Magyarhomorog',
                'county_id' => 17,
            ),
            103 => 
            array (
                'id' => 1604,
                'name' => 'Magyarkeresztúr',
                'county_id' => 6,
            ),
            104 => 
            array (
                'id' => 1605,
                'name' => 'Magyarkeszi',
                'county_id' => 18,
            ),
            105 => 
            array (
                'id' => 1606,
                'name' => 'Magyarlak',
                'county_id' => 10,
            ),
            106 => 
            array (
                'id' => 1607,
                'name' => 'Magyarlukafa',
                'county_id' => 3,
            ),
            107 => 
            array (
                'id' => 1608,
                'name' => 'Magyarmecske',
                'county_id' => 3,
            ),
            108 => 
            array (
                'id' => 1609,
                'name' => 'Magyarnádalja',
                'county_id' => 10,
            ),
            109 => 
            array (
                'id' => 1610,
                'name' => 'Magyarnándor',
                'county_id' => 19,
            ),
            110 => 
            array (
                'id' => 1611,
                'name' => 'Magyarpolány',
                'county_id' => 8,
            ),
            111 => 
            array (
                'id' => 1612,
                'name' => 'Magyarsarlós',
                'county_id' => 3,
            ),
            112 => 
            array (
                'id' => 1613,
                'name' => 'Magyarszecsőd',
                'county_id' => 10,
            ),
            113 => 
            array (
                'id' => 1614,
                'name' => 'Magyarszék',
                'county_id' => 3,
            ),
            114 => 
            array (
                'id' => 1615,
                'name' => 'Magyarszentmiklós',
                'county_id' => 15,
            ),
            115 => 
            array (
                'id' => 1616,
                'name' => 'Magyarszerdahely',
                'county_id' => 15,
            ),
            116 => 
            array (
                'id' => 1617,
                'name' => 'Magyarszombatfa',
                'county_id' => 10,
            ),
            117 => 
            array (
                'id' => 1618,
                'name' => 'Magyartelek',
                'county_id' => 3,
            ),
            118 => 
            array (
                'id' => 1619,
                'name' => 'Majosháza',
                'county_id' => 7,
            ),
            119 => 
            array (
                'id' => 1620,
                'name' => 'Majs',
                'county_id' => 3,
            ),
            120 => 
            array (
                'id' => 1621,
                'name' => 'Makád',
                'county_id' => 7,
            ),
            121 => 
            array (
                'id' => 1622,
                'name' => 'Makkoshotyka',
                'county_id' => 5,
            ),
            122 => 
            array (
                'id' => 1623,
                'name' => 'Maklár',
                'county_id' => 4,
            ),
            123 => 
            array (
                'id' => 1624,
                'name' => 'Makó',
                'county_id' => 14,
            ),
            124 => 
            array (
                'id' => 1625,
                'name' => 'Malomsok',
                'county_id' => 8,
            ),
            125 => 
            array (
                'id' => 1626,
                'name' => 'Mályi',
                'county_id' => 5,
            ),
            126 => 
            array (
                'id' => 1627,
                'name' => 'Mályinka',
                'county_id' => 5,
            ),
            127 => 
            array (
                'id' => 1628,
                'name' => 'Mánd',
                'county_id' => 13,
            ),
            128 => 
            array (
                'id' => 1629,
                'name' => 'Mándok',
                'county_id' => 13,
            ),
            129 => 
            array (
                'id' => 1630,
                'name' => 'Mánfa',
                'county_id' => 3,
            ),
            130 => 
            array (
                'id' => 1631,
                'name' => 'Mány',
                'county_id' => 1,
            ),
            131 => 
            array (
                'id' => 1632,
                'name' => 'Maráza',
                'county_id' => 3,
            ),
            132 => 
            array (
                'id' => 1633,
                'name' => 'Marcalgergelyi',
                'county_id' => 8,
            ),
            133 => 
            array (
                'id' => 1634,
                'name' => 'Marcali',
                'county_id' => 11,
            ),
            134 => 
            array (
                'id' => 1635,
                'name' => 'Marcaltő',
                'county_id' => 8,
            ),
            135 => 
            array (
                'id' => 1636,
                'name' => 'Márfa',
                'county_id' => 3,
            ),
            136 => 
            array (
                'id' => 1637,
                'name' => 'Máriahalom',
                'county_id' => 9,
            ),
            137 => 
            array (
                'id' => 1638,
                'name' => 'Máriakálnok',
                'county_id' => 6,
            ),
            138 => 
            array (
                'id' => 1639,
                'name' => 'Máriakéménd',
                'county_id' => 3,
            ),
            139 => 
            array (
                'id' => 1640,
                'name' => 'Márianosztra',
                'county_id' => 7,
            ),
            140 => 
            array (
                'id' => 1641,
                'name' => 'Máriapócs',
                'county_id' => 13,
            ),
            141 => 
            array (
                'id' => 1642,
                'name' => 'Markaz',
                'county_id' => 4,
            ),
            142 => 
            array (
                'id' => 1643,
                'name' => 'Márkháza',
                'county_id' => 19,
            ),
            143 => 
            array (
                'id' => 1644,
                'name' => 'Márkó',
                'county_id' => 8,
            ),
            144 => 
            array (
                'id' => 1645,
                'name' => 'Markóc',
                'county_id' => 3,
            ),
            145 => 
            array (
                'id' => 1646,
                'name' => 'Markotabödöge',
                'county_id' => 6,
            ),
            146 => 
            array (
                'id' => 1647,
                'name' => 'Maróc',
                'county_id' => 15,
            ),
            147 => 
            array (
                'id' => 1648,
                'name' => 'Marócsa',
                'county_id' => 3,
            ),
            148 => 
            array (
                'id' => 1649,
                'name' => 'Márok',
                'county_id' => 3,
            ),
            149 => 
            array (
                'id' => 1650,
                'name' => 'Márokföld',
                'county_id' => 15,
            ),
            150 => 
            array (
                'id' => 1651,
                'name' => 'Márokpapi',
                'county_id' => 13,
            ),
            151 => 
            array (
                'id' => 1652,
                'name' => 'Maroslele',
                'county_id' => 14,
            ),
            152 => 
            array (
                'id' => 1653,
                'name' => 'Mártély',
                'county_id' => 14,
            ),
            153 => 
            array (
                'id' => 1654,
                'name' => 'Martfű',
                'county_id' => 2,
            ),
            154 => 
            array (
                'id' => 1655,
                'name' => 'Martonfa',
                'county_id' => 3,
            ),
            155 => 
            array (
                'id' => 1656,
                'name' => 'Martonvásár',
                'county_id' => 1,
            ),
            156 => 
            array (
                'id' => 1657,
                'name' => 'Martonyi',
                'county_id' => 5,
            ),
            157 => 
            array (
                'id' => 1658,
                'name' => 'Mátészalka',
                'county_id' => 13,
            ),
            158 => 
            array (
                'id' => 1659,
                'name' => 'Mátételke',
                'county_id' => 12,
            ),
            159 => 
            array (
                'id' => 1660,
                'name' => 'Mátraballa',
                'county_id' => 4,
            ),
            160 => 
            array (
                'id' => 1661,
                'name' => 'Mátraderecske',
                'county_id' => 4,
            ),
            161 => 
            array (
                'id' => 1662,
                'name' => 'Mátramindszent',
                'county_id' => 19,
            ),
            162 => 
            array (
                'id' => 1663,
                'name' => 'Mátranovák',
                'county_id' => 19,
            ),
            163 => 
            array (
                'id' => 1664,
                'name' => 'Mátraszele',
                'county_id' => 19,
            ),
            164 => 
            array (
                'id' => 1665,
                'name' => 'Mátraszentimre',
                'county_id' => 4,
            ),
            165 => 
            array (
                'id' => 1666,
                'name' => 'Mátraszőlős',
                'county_id' => 19,
            ),
            166 => 
            array (
                'id' => 1667,
                'name' => 'Mátraterenye',
                'county_id' => 19,
            ),
            167 => 
            array (
                'id' => 1668,
                'name' => 'Mátraverebély',
                'county_id' => 19,
            ),
            168 => 
            array (
                'id' => 1669,
                'name' => 'Matty',
                'county_id' => 1,
            ),
            169 => 
            array (
                'id' => 1670,
                'name' => 'Mátyásdomb',
                'county_id' => 3,
            ),
            170 => 
            array (
                'id' => 1671,
                'name' => 'Mátyus',
                'county_id' => 13,
            ),
            171 => 
            array (
                'id' => 1672,
                'name' => 'Máza',
                'county_id' => 3,
            ),
            172 => 
            array (
                'id' => 1673,
                'name' => 'Mecseknádasd',
                'county_id' => 3,
            ),
            173 => 
            array (
                'id' => 1674,
                'name' => 'Mecsekpölöske',
                'county_id' => 3,
            ),
            174 => 
            array (
                'id' => 1675,
                'name' => 'Mecsér',
                'county_id' => 6,
            ),
            175 => 
            array (
                'id' => 1676,
                'name' => 'Medgyesbodzás',
                'county_id' => 16,
            ),
            176 => 
            array (
                'id' => 1677,
                'name' => 'Medgyesegyháza',
                'county_id' => 16,
            ),
            177 => 
            array (
                'id' => 1678,
                'name' => 'Medina',
                'county_id' => 18,
            ),
            178 => 
            array (
                'id' => 1679,
                'name' => 'Meggyeskovácsi',
                'county_id' => 10,
            ),
            179 => 
            array (
                'id' => 1680,
                'name' => 'Megyaszó',
                'county_id' => 5,
            ),
            180 => 
            array (
                'id' => 1681,
                'name' => 'Megyehid',
                'county_id' => 10,
            ),
            181 => 
            array (
                'id' => 1682,
                'name' => 'Megyer',
                'county_id' => 8,
            ),
            182 => 
            array (
                'id' => 1683,
                'name' => 'Méhkerék',
                'county_id' => 16,
            ),
            183 => 
            array (
                'id' => 1684,
                'name' => 'Méhtelek',
                'county_id' => 13,
            ),
            184 => 
            array (
                'id' => 1685,
                'name' => 'Mekényes',
                'county_id' => 3,
            ),
            185 => 
            array (
                'id' => 1686,
                'name' => 'Mélykút',
                'county_id' => 12,
            ),
            186 => 
            array (
                'id' => 1687,
                'name' => 'Mencshely',
                'county_id' => 8,
            ),
            187 => 
            array (
                'id' => 1688,
                'name' => 'Mende',
                'county_id' => 7,
            ),
            188 => 
            array (
                'id' => 1689,
                'name' => 'Méra',
                'county_id' => 5,
            ),
            189 => 
            array (
                'id' => 1690,
                'name' => 'Merenye',
                'county_id' => 3,
            ),
            190 => 
            array (
                'id' => 1691,
                'name' => 'Mérges',
                'county_id' => 6,
            ),
            191 => 
            array (
                'id' => 1692,
                'name' => 'Mérk',
                'county_id' => 13,
            ),
            192 => 
            array (
                'id' => 1693,
                'name' => 'Mernye',
                'county_id' => 11,
            ),
            193 => 
            array (
                'id' => 1694,
                'name' => 'Mersevát',
                'county_id' => 10,
            ),
            194 => 
            array (
                'id' => 1695,
                'name' => 'Mesterháza',
                'county_id' => 10,
            ),
            195 => 
            array (
                'id' => 1696,
                'name' => 'Mesteri',
                'county_id' => 10,
            ),
            196 => 
            array (
                'id' => 1697,
                'name' => 'Mesterszállás',
                'county_id' => 2,
            ),
            197 => 
            array (
                'id' => 1698,
                'name' => 'Meszes',
                'county_id' => 5,
            ),
            198 => 
            array (
                'id' => 1699,
                'name' => 'Meszlen',
                'county_id' => 10,
            ),
            199 => 
            array (
                'id' => 1700,
                'name' => 'Mesztegnyő',
                'county_id' => 11,
            ),
            200 => 
            array (
                'id' => 1701,
                'name' => 'Mezőberény',
                'county_id' => 16,
            ),
            201 => 
            array (
                'id' => 1702,
                'name' => 'Mezőcsát',
                'county_id' => 5,
            ),
            202 => 
            array (
                'id' => 1703,
                'name' => 'Mezőcsokonya',
                'county_id' => 11,
            ),
            203 => 
            array (
                'id' => 1704,
                'name' => 'Meződ',
                'county_id' => 3,
            ),
            204 => 
            array (
                'id' => 1705,
                'name' => 'Mezőfalva',
                'county_id' => 1,
            ),
            205 => 
            array (
                'id' => 1706,
                'name' => 'Mezőgyán',
                'county_id' => 16,
            ),
            206 => 
            array (
                'id' => 1707,
                'name' => 'Mezőhegyes',
                'county_id' => 16,
            ),
            207 => 
            array (
                'id' => 1708,
                'name' => 'Mezőhék',
                'county_id' => 2,
            ),
            208 => 
            array (
                'id' => 1709,
                'name' => 'Mezőkeresztes',
                'county_id' => 5,
            ),
            209 => 
            array (
                'id' => 1710,
                'name' => 'Mezőkomárom',
                'county_id' => 1,
            ),
            210 => 
            array (
                'id' => 1711,
                'name' => 'Mezőkovácsháza',
                'county_id' => 16,
            ),
            211 => 
            array (
                'id' => 1712,
                'name' => 'Mezőkövesd',
                'county_id' => 5,
            ),
            212 => 
            array (
                'id' => 1713,
                'name' => 'Mezőladány',
                'county_id' => 13,
            ),
            213 => 
            array (
                'id' => 1714,
                'name' => 'Mezőlak',
                'county_id' => 8,
            ),
            214 => 
            array (
                'id' => 1715,
                'name' => 'Mezőnagymihály',
                'county_id' => 5,
            ),
            215 => 
            array (
                'id' => 1716,
                'name' => 'Mezőnyárád',
                'county_id' => 5,
            ),
            216 => 
            array (
                'id' => 1717,
                'name' => 'Mezőörs',
                'county_id' => 6,
            ),
            217 => 
            array (
                'id' => 1718,
                'name' => 'Mezőpeterd',
                'county_id' => 17,
            ),
            218 => 
            array (
                'id' => 1719,
                'name' => 'Mezősas',
                'county_id' => 17,
            ),
            219 => 
            array (
                'id' => 1720,
                'name' => 'Mezőszemere',
                'county_id' => 4,
            ),
            220 => 
            array (
                'id' => 1721,
                'name' => 'Mezőszentgyörgy',
                'county_id' => 1,
            ),
            221 => 
            array (
                'id' => 1722,
                'name' => 'Mezőszilas',
                'county_id' => 1,
            ),
            222 => 
            array (
                'id' => 1723,
                'name' => 'Mezőtárkány',
                'county_id' => 4,
            ),
            223 => 
            array (
                'id' => 1724,
                'name' => 'Mezőtúr',
                'county_id' => 2,
            ),
            224 => 
            array (
                'id' => 1725,
                'name' => 'Mezőzombor',
                'county_id' => 5,
            ),
            225 => 
            array (
                'id' => 1726,
                'name' => 'Miháld',
                'county_id' => 15,
            ),
            226 => 
            array (
                'id' => 1727,
                'name' => 'Mihályfa',
                'county_id' => 15,
            ),
            227 => 
            array (
                'id' => 1728,
                'name' => 'Mihálygerge',
                'county_id' => 19,
            ),
            228 => 
            array (
                'id' => 1729,
                'name' => 'Mihályháza',
                'county_id' => 8,
            ),
            229 => 
            array (
                'id' => 1730,
                'name' => 'Mihályi',
                'county_id' => 6,
            ),
            230 => 
            array (
                'id' => 1731,
                'name' => 'Mike',
                'county_id' => 11,
            ),
            231 => 
            array (
                'id' => 1732,
                'name' => 'Mikebuda',
                'county_id' => 7,
            ),
            232 => 
            array (
                'id' => 1733,
                'name' => 'Mikekarácsonyfa',
                'county_id' => 15,
            ),
            233 => 
            array (
                'id' => 1734,
                'name' => 'Mikepércs',
                'county_id' => 17,
            ),
            234 => 
            array (
                'id' => 1735,
                'name' => 'Miklósi',
                'county_id' => 11,
            ),
            235 => 
            array (
                'id' => 1736,
                'name' => 'Mikófalva',
                'county_id' => 4,
            ),
            236 => 
            array (
                'id' => 1737,
                'name' => 'Mikóháza',
                'county_id' => 5,
            ),
            237 => 
            array (
                'id' => 1738,
                'name' => 'Mikosszéplak',
                'county_id' => 10,
            ),
            238 => 
            array (
                'id' => 1739,
                'name' => 'Milejszeg',
                'county_id' => 15,
            ),
            239 => 
            array (
                'id' => 1740,
                'name' => 'Milota',
                'county_id' => 13,
            ),
            240 => 
            array (
                'id' => 1741,
                'name' => 'Mindszent',
                'county_id' => 14,
            ),
            241 => 
            array (
                'id' => 1742,
                'name' => 'Mindszentgodisa',
                'county_id' => 3,
            ),
            242 => 
            array (
                'id' => 1743,
                'name' => 'Mindszentkálla',
                'county_id' => 8,
            ),
            243 => 
            array (
                'id' => 1744,
                'name' => 'Misefa',
                'county_id' => 15,
            ),
            244 => 
            array (
                'id' => 1745,
                'name' => 'Miske',
                'county_id' => 12,
            ),
            245 => 
            array (
                'id' => 1746,
                'name' => 'Miskolc',
                'county_id' => 5,
            ),
            246 => 
            array (
                'id' => 1747,
                'name' => 'Miszla',
                'county_id' => 18,
            ),
            247 => 
            array (
                'id' => 1748,
                'name' => 'Mocsa',
                'county_id' => 9,
            ),
            248 => 
            array (
                'id' => 1749,
                'name' => 'Mőcsény',
                'county_id' => 7,
            ),
            249 => 
            array (
                'id' => 1750,
                'name' => 'Mogyoród',
                'county_id' => 9,
            ),
            250 => 
            array (
                'id' => 1751,
                'name' => 'Mogyorósbánya',
                'county_id' => 5,
            ),
            251 => 
            array (
                'id' => 1752,
                'name' => 'Mogyoróska',
                'county_id' => 1,
            ),
            252 => 
            array (
                'id' => 1753,
                'name' => 'Moha',
                'county_id' => 3,
            ),
            253 => 
            array (
                'id' => 1754,
                'name' => 'Mohács',
                'county_id' => 3,
            ),
            254 => 
            array (
                'id' => 1755,
                'name' => 'Mohács',
                'county_id' => 19,
            ),
            255 => 
            array (
                'id' => 1756,
                'name' => 'Mohora',
                'county_id' => 15,
            ),
            256 => 
            array (
                'id' => 1757,
                'name' => 'Molnári',
                'county_id' => 10,
            ),
            257 => 
            array (
                'id' => 1758,
                'name' => 'Molnaszecsőd',
                'county_id' => 3,
            ),
            258 => 
            array (
                'id' => 1759,
                'name' => 'Molvány',
                'county_id' => 5,
            ),
            259 => 
            array (
                'id' => 1760,
                'name' => 'Monaj',
                'county_id' => 5,
            ),
            260 => 
            array (
                'id' => 1761,
                'name' => 'Monok',
                'county_id' => 7,
            ),
            261 => 
            array (
                'id' => 1762,
                'name' => 'Monor',
                'county_id' => 7,
            ),
            262 => 
            array (
                'id' => 1763,
                'name' => 'Monor',
                'county_id' => 4,
            ),
            263 => 
            array (
                'id' => 1764,
                'name' => 'Mónosbél',
                'county_id' => 8,
            ),
            264 => 
            array (
                'id' => 1765,
                'name' => 'Monostorapáti',
                'county_id' => 17,
            ),
            265 => 
            array (
                'id' => 1766,
                'name' => 'Monostorpályi',
                'county_id' => 8,
            ),
            266 => 
            array (
                'id' => 1767,
                'name' => 'Monoszló',
                'county_id' => 3,
            ),
            267 => 
            array (
                'id' => 1768,
                'name' => 'Monyoród',
                'county_id' => 1,
            ),
            268 => 
            array (
                'id' => 1769,
                'name' => 'Mór',
                'county_id' => 18,
            ),
            269 => 
            array (
                'id' => 1770,
                'name' => 'Mórágy',
                'county_id' => 14,
            ),
            270 => 
            array (
                'id' => 1771,
                'name' => 'Mórahalom',
                'county_id' => 12,
            ),
            271 => 
            array (
                'id' => 1772,
                'name' => 'Móricgát',
                'county_id' => 6,
            ),
            272 => 
            array (
                'id' => 1773,
                'name' => 'Mórichida',
                'county_id' => 11,
            ),
            273 => 
            array (
                'id' => 1774,
                'name' => 'Mosdós',
                'county_id' => 6,
            ),
            274 => 
            array (
                'id' => 1775,
                'name' => 'Mosonmagyaróvár',
                'county_id' => 6,
            ),
            275 => 
            array (
                'id' => 1776,
                'name' => 'Mosonszentmiklós',
                'county_id' => 6,
            ),
            276 => 
            array (
                'id' => 1777,
                'name' => 'Mosonszolnok',
                'county_id' => 3,
            ),
            277 => 
            array (
                'id' => 1778,
                'name' => 'Mozsgó',
                'county_id' => 18,
            ),
            278 => 
            array (
                'id' => 1779,
                'name' => 'Mucsfa',
                'county_id' => 18,
            ),
            279 => 
            array (
                'id' => 1780,
                'name' => 'Mucsi',
                'county_id' => 18,
            ),
            280 => 
            array (
                'id' => 1781,
                'name' => 'Múcsony',
                'county_id' => 5,
            ),
            281 => 
            array (
                'id' => 1782,
                'name' => 'Muhi',
                'county_id' => 5,
            ),
            282 => 
            array (
                'id' => 1783,
                'name' => 'Murakeresztúr',
                'county_id' => 15,
            ),
            283 => 
            array (
                'id' => 1784,
                'name' => 'Murarátka',
                'county_id' => 15,
            ),
            284 => 
            array (
                'id' => 1785,
                'name' => 'Muraszemenye',
                'county_id' => 15,
            ),
            285 => 
            array (
                'id' => 1786,
                'name' => 'Murga',
                'county_id' => 18,
            ),
            286 => 
            array (
                'id' => 1787,
                'name' => 'Murony',
                'county_id' => 16,
            ),
            287 => 
            array (
                'id' => 1788,
                'name' => 'Nábrád',
                'county_id' => 13,
            ),
            288 => 
            array (
                'id' => 1789,
                'name' => 'Nadap',
                'county_id' => 1,
            ),
            289 => 
            array (
                'id' => 1790,
                'name' => 'Nádasd',
                'county_id' => 10,
            ),
            290 => 
            array (
                'id' => 1791,
                'name' => 'Nádasdladány',
                'county_id' => 1,
            ),
            291 => 
            array (
                'id' => 1792,
                'name' => 'Nádudvar',
                'county_id' => 17,
            ),
            292 => 
            array (
                'id' => 1793,
                'name' => 'Nágocs',
                'county_id' => 11,
            ),
            293 => 
            array (
                'id' => 1794,
                'name' => 'Nagyacsád',
                'county_id' => 8,
            ),
            294 => 
            array (
                'id' => 1795,
                'name' => 'Nagyalásony',
                'county_id' => 8,
            ),
            295 => 
            array (
                'id' => 1796,
                'name' => 'Nagyar',
                'county_id' => 13,
            ),
            296 => 
            array (
                'id' => 1797,
                'name' => 'Nagyatád',
                'county_id' => 11,
            ),
            297 => 
            array (
                'id' => 1798,
                'name' => 'Nagybajcs',
                'county_id' => 6,
            ),
            298 => 
            array (
                'id' => 1799,
                'name' => 'Nagybajom',
                'county_id' => 11,
            ),
            299 => 
            array (
                'id' => 1800,
                'name' => 'Nagybakónak',
                'county_id' => 15,
            ),
            300 => 
            array (
                'id' => 1801,
                'name' => 'Nagybánhegyes',
                'county_id' => 16,
            ),
            301 => 
            array (
                'id' => 1802,
                'name' => 'Nagybaracska',
                'county_id' => 12,
            ),
            302 => 
            array (
                'id' => 1803,
                'name' => 'Nagybarca',
                'county_id' => 5,
            ),
            303 => 
            array (
                'id' => 1804,
                'name' => 'Nagybárkány',
                'county_id' => 19,
            ),
            304 => 
            array (
                'id' => 1805,
                'name' => 'Nagyberény',
                'county_id' => 11,
            ),
            305 => 
            array (
                'id' => 1806,
                'name' => 'Nagyberki',
                'county_id' => 11,
            ),
            306 => 
            array (
                'id' => 1807,
                'name' => 'Nagybörzsöny',
                'county_id' => 7,
            ),
            307 => 
            array (
                'id' => 1808,
                'name' => 'Nagybudmér',
                'county_id' => 3,
            ),
            308 => 
            array (
                'id' => 1809,
                'name' => 'Nagycenk',
                'county_id' => 6,
            ),
            309 => 
            array (
                'id' => 1810,
                'name' => 'Nagycsány',
                'county_id' => 3,
            ),
            310 => 
            array (
                'id' => 1811,
                'name' => 'Nagycsécs',
                'county_id' => 5,
            ),
            311 => 
            array (
                'id' => 1812,
                'name' => 'Nagycsepely',
                'county_id' => 11,
            ),
            312 => 
            array (
                'id' => 1813,
                'name' => 'Nagycserkesz',
                'county_id' => 13,
            ),
            313 => 
            array (
                'id' => 1814,
                'name' => 'Nagydém',
                'county_id' => 8,
            ),
            314 => 
            array (
                'id' => 1815,
                'name' => 'Nagydobos',
                'county_id' => 13,
            ),
            315 => 
            array (
                'id' => 1816,
                'name' => 'Nagydobsza',
                'county_id' => 3,
            ),
            316 => 
            array (
                'id' => 1817,
                'name' => 'Nagydorog',
                'county_id' => 18,
            ),
            317 => 
            array (
                'id' => 1818,
                'name' => 'Nagyecsed',
                'county_id' => 13,
            ),
            318 => 
            array (
                'id' => 1819,
                'name' => 'Nagyér',
                'county_id' => 14,
            ),
            319 => 
            array (
                'id' => 1820,
                'name' => 'Nagyesztergár',
                'county_id' => 8,
            ),
            320 => 
            array (
                'id' => 1821,
                'name' => 'Nagyfüged',
                'county_id' => 4,
            ),
            321 => 
            array (
                'id' => 1822,
                'name' => 'Nagygeresd',
                'county_id' => 10,
            ),
            322 => 
            array (
                'id' => 1823,
                'name' => 'Nagygörbő',
                'county_id' => 15,
            ),
            323 => 
            array (
                'id' => 1824,
                'name' => 'Nagygyimót',
                'county_id' => 8,
            ),
            324 => 
            array (
                'id' => 1825,
                'name' => 'Nagyhajmás',
                'county_id' => 3,
            ),
            325 => 
            array (
                'id' => 1826,
                'name' => 'Nagyhalász',
                'county_id' => 13,
            ),
            326 => 
            array (
                'id' => 1827,
                'name' => 'Nagyharsány',
                'county_id' => 3,
            ),
            327 => 
            array (
                'id' => 1828,
                'name' => 'Nagyhegyes',
                'county_id' => 17,
            ),
            328 => 
            array (
                'id' => 1829,
                'name' => 'Nagyhódos',
                'county_id' => 13,
            ),
            329 => 
            array (
                'id' => 1830,
                'name' => 'Nagyhuta',
                'county_id' => 5,
            ),
            330 => 
            array (
                'id' => 1831,
                'name' => 'Nagyigmánd',
                'county_id' => 9,
            ),
            331 => 
            array (
                'id' => 1832,
                'name' => 'Nagyiván',
                'county_id' => 2,
            ),
            332 => 
            array (
                'id' => 1833,
                'name' => 'Nagykálló',
                'county_id' => 13,
            ),
            333 => 
            array (
                'id' => 1834,
                'name' => 'Nagykamarás',
                'county_id' => 16,
            ),
            334 => 
            array (
                'id' => 1835,
                'name' => 'Nagykanizsa',
                'county_id' => 15,
            ),
            335 => 
            array (
                'id' => 1836,
                'name' => 'Nagykapornak',
                'county_id' => 15,
            ),
            336 => 
            array (
                'id' => 1837,
                'name' => 'Nagykarácsony',
                'county_id' => 1,
            ),
            337 => 
            array (
                'id' => 1838,
                'name' => 'Nagykáta',
                'county_id' => 7,
            ),
            338 => 
            array (
                'id' => 1839,
                'name' => 'Nagykereki',
                'county_id' => 17,
            ),
            339 => 
            array (
                'id' => 1840,
                'name' => 'Nagykeresztúr',
                'county_id' => 19,
            ),
            340 => 
            array (
                'id' => 1841,
                'name' => 'Nagykinizs',
                'county_id' => 5,
            ),
            341 => 
            array (
                'id' => 1842,
                'name' => 'Nagykökényes',
                'county_id' => 18,
            ),
            342 => 
            array (
                'id' => 1843,
                'name' => 'Nagykölked',
                'county_id' => 11,
            ),
            343 => 
            array (
                'id' => 1844,
                'name' => 'Nagykónyi',
                'county_id' => 7,
            ),
            344 => 
            array (
                'id' => 1845,
                'name' => 'Nagykőrös',
                'county_id' => 3,
            ),
            345 => 
            array (
                'id' => 1846,
                'name' => 'Nagykorpád',
                'county_id' => 4,
            ),
            346 => 
            array (
                'id' => 1847,
                'name' => 'Nagykörű',
                'county_id' => 10,
            ),
            347 => 
            array (
                'id' => 1848,
                'name' => 'Nagykovácsi',
                'county_id' => 7,
            ),
            348 => 
            array (
                'id' => 1849,
                'name' => 'Nagykozár',
                'county_id' => 2,
            ),
            349 => 
            array (
                'id' => 1850,
                'name' => 'Nagykutas',
                'county_id' => 15,
            ),
            350 => 
            array (
                'id' => 1851,
                'name' => 'Nagylak',
                'county_id' => 14,
            ),
            351 => 
            array (
                'id' => 1852,
                'name' => 'Nagylengyel',
                'county_id' => 15,
            ),
            352 => 
            array (
                'id' => 1853,
                'name' => 'Nagylóc',
                'county_id' => 19,
            ),
            353 => 
            array (
                'id' => 1854,
                'name' => 'Nagylók',
                'county_id' => 1,
            ),
            354 => 
            array (
                'id' => 1855,
                'name' => 'Nagylózs',
                'county_id' => 6,
            ),
            355 => 
            array (
                'id' => 1856,
                'name' => 'Nagymágocs',
                'county_id' => 14,
            ),
            356 => 
            array (
                'id' => 1857,
                'name' => 'Nagymányok',
                'county_id' => 18,
            ),
            357 => 
            array (
                'id' => 1858,
                'name' => 'Nagymaros',
                'county_id' => 7,
            ),
            358 => 
            array (
                'id' => 1859,
                'name' => 'Nagymizdó',
                'county_id' => 10,
            ),
            359 => 
            array (
                'id' => 1860,
                'name' => 'Nagynyárád',
                'county_id' => 3,
            ),
            360 => 
            array (
                'id' => 1861,
                'name' => 'Nagyoroszi',
                'county_id' => 19,
            ),
            361 => 
            array (
                'id' => 1862,
                'name' => 'Nagypáli',
                'county_id' => 15,
            ),
            362 => 
            array (
                'id' => 1863,
                'name' => 'Nagypall',
                'county_id' => 3,
            ),
            363 => 
            array (
                'id' => 1864,
                'name' => 'Nagypeterd',
                'county_id' => 3,
            ),
            364 => 
            array (
                'id' => 1865,
                'name' => 'Nagypirit',
                'county_id' => 8,
            ),
            365 => 
            array (
                'id' => 1866,
                'name' => 'Nagyrábé',
                'county_id' => 17,
            ),
            366 => 
            array (
                'id' => 1867,
                'name' => 'Nagyrada',
                'county_id' => 15,
            ),
            367 => 
            array (
                'id' => 1868,
                'name' => 'Nagyrákos',
                'county_id' => 10,
            ),
            368 => 
            array (
                'id' => 1869,
                'name' => 'Nagyrécse',
                'county_id' => 15,
            ),
            369 => 
            array (
                'id' => 1870,
                'name' => 'Nagyréde',
                'county_id' => 4,
            ),
            370 => 
            array (
                'id' => 1871,
                'name' => 'Nagyrév',
                'county_id' => 2,
            ),
            371 => 
            array (
                'id' => 1872,
                'name' => 'Nagyrozvágy',
                'county_id' => 5,
            ),
            372 => 
            array (
                'id' => 1873,
                'name' => 'Nagysáp',
                'county_id' => 9,
            ),
            373 => 
            array (
                'id' => 1874,
                'name' => 'Nagysimonyi',
                'county_id' => 10,
            ),
            374 => 
            array (
                'id' => 1875,
                'name' => 'Nagyszakácsi',
                'county_id' => 11,
            ),
            375 => 
            array (
                'id' => 1876,
                'name' => 'Nagyszékely',
                'county_id' => 18,
            ),
            376 => 
            array (
                'id' => 1877,
                'name' => 'Nagyszekeres',
                'county_id' => 13,
            ),
            377 => 
            array (
                'id' => 1878,
                'name' => 'Nagyszénás',
                'county_id' => 16,
            ),
            378 => 
            array (
                'id' => 1879,
                'name' => 'Nagyszentjános',
                'county_id' => 6,
            ),
            379 => 
            array (
                'id' => 1880,
                'name' => 'Nagyszokoly',
                'county_id' => 18,
            ),
            380 => 
            array (
                'id' => 1881,
                'name' => 'Nagytálya',
                'county_id' => 4,
            ),
            381 => 
            array (
                'id' => 1882,
                'name' => 'Nagytarcsa',
                'county_id' => 7,
            ),
            382 => 
            array (
                'id' => 1883,
                'name' => 'Nagytevel',
                'county_id' => 8,
            ),
            383 => 
            array (
                'id' => 1884,
                'name' => 'Nagytilaj',
                'county_id' => 10,
            ),
            384 => 
            array (
                'id' => 1885,
                'name' => 'Nagytőke',
                'county_id' => 3,
            ),
            385 => 
            array (
                'id' => 1886,
                'name' => 'Nagytótfalu',
                'county_id' => 14,
            ),
            386 => 
            array (
                'id' => 1887,
                'name' => 'Nagyút',
                'county_id' => 4,
            ),
            387 => 
            array (
                'id' => 1888,
                'name' => 'Nagyvarsány',
                'county_id' => 13,
            ),
            388 => 
            array (
                'id' => 1889,
                'name' => 'Nagyváty',
                'county_id' => 3,
            ),
            389 => 
            array (
                'id' => 1890,
                'name' => 'Nagyvázsony',
                'county_id' => 8,
            ),
            390 => 
            array (
                'id' => 1891,
                'name' => 'Nagyvejke',
                'county_id' => 18,
            ),
            391 => 
            array (
                'id' => 1892,
                'name' => 'Nagyveleg',
                'county_id' => 1,
            ),
            392 => 
            array (
                'id' => 1893,
                'name' => 'Nagyvenyim',
                'county_id' => 1,
            ),
            393 => 
            array (
                'id' => 1894,
                'name' => 'Nagyvisnyó',
                'county_id' => 4,
            ),
            394 => 
            array (
                'id' => 1895,
                'name' => 'Nak',
                'county_id' => 18,
            ),
            395 => 
            array (
                'id' => 1896,
                'name' => 'Napkor',
                'county_id' => 13,
            ),
            396 => 
            array (
                'id' => 1897,
                'name' => 'Nárai',
                'county_id' => 10,
            ),
            397 => 
            array (
                'id' => 1898,
                'name' => 'Narda',
                'county_id' => 10,
            ),
            398 => 
            array (
                'id' => 1899,
                'name' => 'Naszály',
                'county_id' => 9,
            ),
            399 => 
            array (
                'id' => 1900,
                'name' => 'Négyes',
                'county_id' => 5,
            ),
            400 => 
            array (
                'id' => 1901,
                'name' => 'Nekézseny',
                'county_id' => 5,
            ),
            401 => 
            array (
                'id' => 1902,
                'name' => 'Nemesapáti',
                'county_id' => 15,
            ),
            402 => 
            array (
                'id' => 1903,
                'name' => 'Nemesbikk',
                'county_id' => 5,
            ),
            403 => 
            array (
                'id' => 1904,
                'name' => 'Nemesbőd',
                'county_id' => 13,
            ),
            404 => 
            array (
                'id' => 1905,
                'name' => 'Nemesborzova',
                'county_id' => 10,
            ),
            405 => 
            array (
                'id' => 1906,
                'name' => 'Nemesbük',
                'county_id' => 15,
            ),
            406 => 
            array (
                'id' => 1907,
                'name' => 'Nemescsó',
                'county_id' => 10,
            ),
            407 => 
            array (
                'id' => 1908,
                'name' => 'Nemesdéd',
                'county_id' => 11,
            ),
            408 => 
            array (
                'id' => 1909,
                'name' => 'Nemesgörzsöny',
                'county_id' => 8,
            ),
            409 => 
            array (
                'id' => 1910,
                'name' => 'Nemesgulács',
                'county_id' => 8,
            ),
            410 => 
            array (
                'id' => 1911,
                'name' => 'Nemeshany',
                'county_id' => 8,
            ),
            411 => 
            array (
                'id' => 1912,
                'name' => 'Nemeshetés',
                'county_id' => 15,
            ),
            412 => 
            array (
                'id' => 1913,
                'name' => 'Nemeske',
                'county_id' => 3,
            ),
            413 => 
            array (
                'id' => 1914,
                'name' => 'Nemeskér',
                'county_id' => 6,
            ),
            414 => 
            array (
                'id' => 1915,
                'name' => 'Nemeskeresztúr',
                'county_id' => 10,
            ),
            415 => 
            array (
                'id' => 1916,
                'name' => 'Nemeskisfalud',
                'county_id' => 11,
            ),
            416 => 
            array (
                'id' => 1917,
                'name' => 'Nemeskocs',
                'county_id' => 10,
            ),
            417 => 
            array (
                'id' => 1918,
                'name' => 'Nemeskolta',
                'county_id' => 10,
            ),
            418 => 
            array (
                'id' => 1919,
                'name' => 'Nemesládony',
                'county_id' => 10,
            ),
            419 => 
            array (
                'id' => 1920,
                'name' => 'Nemesmedves',
                'county_id' => 10,
            ),
            420 => 
            array (
                'id' => 1921,
                'name' => 'Nemesnádudvar',
                'county_id' => 12,
            ),
            421 => 
            array (
                'id' => 1922,
                'name' => 'Nemesnép',
                'county_id' => 15,
            ),
            422 => 
            array (
                'id' => 1923,
                'name' => 'Nemespátró',
                'county_id' => 15,
            ),
            423 => 
            array (
                'id' => 1924,
                'name' => 'Nemesrádó',
                'county_id' => 15,
            ),
            424 => 
            array (
                'id' => 1925,
                'name' => 'Nemesrempehollós',
                'county_id' => 10,
            ),
            425 => 
            array (
                'id' => 1926,
                'name' => 'Nemessándorháza',
                'county_id' => 15,
            ),
            426 => 
            array (
                'id' => 1927,
                'name' => 'Nemesszalók',
                'county_id' => 8,
            ),
            427 => 
            array (
                'id' => 1928,
                'name' => 'Nemesszentandrás',
                'county_id' => 15,
            ),
            428 => 
            array (
                'id' => 1929,
                'name' => 'Nemesvámos',
                'county_id' => 8,
            ),
            429 => 
            array (
                'id' => 1930,
                'name' => 'Nemesvid',
                'county_id' => 11,
            ),
            430 => 
            array (
                'id' => 1931,
                'name' => 'Nemesvita',
                'county_id' => 8,
            ),
            431 => 
            array (
                'id' => 1932,
                'name' => 'Németbánya',
                'county_id' => 8,
            ),
            432 => 
            array (
                'id' => 1933,
                'name' => 'Németfalu',
                'county_id' => 15,
            ),
            433 => 
            array (
                'id' => 1934,
                'name' => 'Németkér',
                'county_id' => 18,
            ),
            434 => 
            array (
                'id' => 1935,
                'name' => 'Nemti',
                'county_id' => 19,
            ),
            435 => 
            array (
                'id' => 1936,
                'name' => 'Neszmély',
                'county_id' => 9,
            ),
            436 => 
            array (
                'id' => 1937,
                'name' => 'Nézsa',
                'county_id' => 19,
            ),
            437 => 
            array (
                'id' => 1938,
                'name' => 'Nick',
                'county_id' => 10,
            ),
            438 => 
            array (
                'id' => 1939,
                'name' => 'Nikla',
                'county_id' => 11,
            ),
            439 => 
            array (
                'id' => 1940,
                'name' => 'Nógrád',
                'county_id' => 19,
            ),
            440 => 
            array (
                'id' => 1941,
                'name' => 'Nógrádkövesd',
                'county_id' => 19,
            ),
            441 => 
            array (
                'id' => 1942,
                'name' => 'Nógrádmarcal',
                'county_id' => 19,
            ),
            442 => 
            array (
                'id' => 1943,
                'name' => 'Nógrádmegyer',
                'county_id' => 19,
            ),
            443 => 
            array (
                'id' => 1944,
                'name' => 'Nógrádsáp',
                'county_id' => 19,
            ),
            444 => 
            array (
                'id' => 1945,
                'name' => 'Nógrádsipek',
                'county_id' => 19,
            ),
            445 => 
            array (
                'id' => 1946,
                'name' => 'Nógrádszakál',
                'county_id' => 19,
            ),
            446 => 
            array (
                'id' => 1947,
                'name' => 'Nóráp',
                'county_id' => 8,
            ),
            447 => 
            array (
                'id' => 1948,
                'name' => 'Noszlop',
                'county_id' => 8,
            ),
            448 => 
            array (
                'id' => 1949,
                'name' => 'Noszvaj',
                'county_id' => 4,
            ),
            449 => 
            array (
                'id' => 1950,
                'name' => 'Nőtincs',
                'county_id' => 15,
            ),
            450 => 
            array (
                'id' => 1951,
                'name' => 'Nova',
                'county_id' => 4,
            ),
            451 => 
            array (
                'id' => 1952,
                'name' => 'Novaj',
                'county_id' => 5,
            ),
            452 => 
            array (
                'id' => 1953,
                'name' => 'Novajidrány',
                'county_id' => 19,
            ),
            453 => 
            array (
                'id' => 1954,
                'name' => 'Nyalka',
                'county_id' => 6,
            ),
            454 => 
            array (
                'id' => 1955,
                'name' => 'Nyárád',
                'county_id' => 8,
            ),
            455 => 
            array (
                'id' => 1956,
                'name' => 'Nyáregyháza',
                'county_id' => 7,
            ),
            456 => 
            array (
                'id' => 1957,
                'name' => 'Nyárlőrinc',
                'county_id' => 12,
            ),
            457 => 
            array (
                'id' => 1958,
                'name' => 'Nyársapát',
                'county_id' => 7,
            ),
            458 => 
            array (
                'id' => 1959,
                'name' => 'Nyékládháza',
                'county_id' => 5,
            ),
            459 => 
            array (
                'id' => 1960,
                'name' => 'Nyergesújfalu',
                'county_id' => 9,
            ),
            460 => 
            array (
                'id' => 1961,
                'name' => 'Nyésta',
                'county_id' => 5,
            ),
            461 => 
            array (
                'id' => 1962,
                'name' => 'Nyim',
                'county_id' => 11,
            ),
            462 => 
            array (
                'id' => 1963,
                'name' => 'Nyírábrány',
                'county_id' => 17,
            ),
            463 => 
            array (
                'id' => 1964,
                'name' => 'Nyíracsád',
                'county_id' => 17,
            ),
            464 => 
            array (
                'id' => 1965,
                'name' => 'Nyirád',
                'county_id' => 8,
            ),
            465 => 
            array (
                'id' => 1966,
                'name' => 'Nyíradony',
                'county_id' => 17,
            ),
            466 => 
            array (
                'id' => 1967,
                'name' => 'Nyírbátor',
                'county_id' => 13,
            ),
            467 => 
            array (
                'id' => 1968,
                'name' => 'Nyírbéltek',
                'county_id' => 13,
            ),
            468 => 
            array (
                'id' => 1969,
                'name' => 'Nyírbogát',
                'county_id' => 13,
            ),
            469 => 
            array (
                'id' => 1970,
                'name' => 'Nyírbogdány',
                'county_id' => 13,
            ),
            470 => 
            array (
                'id' => 1971,
                'name' => 'Nyírcsaholy',
                'county_id' => 13,
            ),
            471 => 
            array (
                'id' => 1972,
                'name' => 'Nyírcsászári',
                'county_id' => 13,
            ),
            472 => 
            array (
                'id' => 1973,
                'name' => 'Nyírderzs',
                'county_id' => 13,
            ),
            473 => 
            array (
                'id' => 1974,
                'name' => 'Nyíregyháza',
                'county_id' => 13,
            ),
            474 => 
            array (
                'id' => 1975,
                'name' => 'Nyírgelse',
                'county_id' => 13,
            ),
            475 => 
            array (
                'id' => 1976,
                'name' => 'Nyírgyulaj',
                'county_id' => 13,
            ),
            476 => 
            array (
                'id' => 1977,
                'name' => 'Nyíri',
                'county_id' => 5,
            ),
            477 => 
            array (
                'id' => 1978,
                'name' => 'Nyíribrony',
                'county_id' => 13,
            ),
            478 => 
            array (
                'id' => 1979,
                'name' => 'Nyírjákó',
                'county_id' => 13,
            ),
            479 => 
            array (
                'id' => 1980,
                'name' => 'Nyírkarász',
                'county_id' => 13,
            ),
            480 => 
            array (
                'id' => 1981,
                'name' => 'Nyírkáta',
                'county_id' => 13,
            ),
            481 => 
            array (
                'id' => 1982,
                'name' => 'Nyírkércs',
                'county_id' => 13,
            ),
            482 => 
            array (
                'id' => 1983,
                'name' => 'Nyírlövő',
                'county_id' => 13,
            ),
            483 => 
            array (
                'id' => 1984,
                'name' => 'Nyírlugos',
                'county_id' => 13,
            ),
            484 => 
            array (
                'id' => 1985,
                'name' => 'Nyírmada',
                'county_id' => 13,
            ),
            485 => 
            array (
                'id' => 1986,
                'name' => 'Nyírmártonfalva',
                'county_id' => 17,
            ),
            486 => 
            array (
                'id' => 1987,
                'name' => 'Nyírmeggyes',
                'county_id' => 13,
            ),
            487 => 
            array (
                'id' => 1988,
                'name' => 'Nyírmihálydi',
                'county_id' => 13,
            ),
            488 => 
            array (
                'id' => 1989,
                'name' => 'Nyírparasznya',
                'county_id' => 13,
            ),
            489 => 
            array (
                'id' => 1990,
                'name' => 'Nyírpazony',
                'county_id' => 13,
            ),
            490 => 
            array (
                'id' => 1991,
                'name' => 'Nyírpilis',
                'county_id' => 13,
            ),
            491 => 
            array (
                'id' => 1992,
                'name' => 'Nyírtass',
                'county_id' => 13,
            ),
            492 => 
            array (
                'id' => 1993,
                'name' => 'Nyírtelek',
                'county_id' => 13,
            ),
            493 => 
            array (
                'id' => 1994,
                'name' => 'Nyírtét',
                'county_id' => 13,
            ),
            494 => 
            array (
                'id' => 1995,
                'name' => 'Nyírtura',
                'county_id' => 13,
            ),
            495 => 
            array (
                'id' => 1996,
                'name' => 'Nyírvasvári',
                'county_id' => 13,
            ),
            496 => 
            array (
                'id' => 1997,
                'name' => 'Nyőgér',
                'county_id' => 5,
            ),
            497 => 
            array (
                'id' => 1998,
                'name' => 'Nyomár',
                'county_id' => 10,
            ),
            498 => 
            array (
                'id' => 1999,
                'name' => 'Nyugotszenterzsébet',
                'county_id' => 3,
            ),
            499 => 
            array (
                'id' => 2000,
                'name' => 'Nyúl',
                'county_id' => 6,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'name' => 'Óbánya',
                'county_id' => 3,
            ),
            1 => 
            array (
                'id' => 2002,
                'name' => 'Óbarok',
                'county_id' => 1,
            ),
            2 => 
            array (
                'id' => 2003,
                'name' => 'Óbudavár',
                'county_id' => 8,
            ),
            3 => 
            array (
                'id' => 2004,
                'name' => 'Öcs',
                'county_id' => 7,
            ),
            4 => 
            array (
                'id' => 2005,
                'name' => 'Ócsa',
                'county_id' => 3,
            ),
            5 => 
            array (
                'id' => 2006,
                'name' => 'Ócsárd',
                'county_id' => 3,
            ),
            6 => 
            array (
                'id' => 2007,
                'name' => 'Őcsény',
                'county_id' => 13,
            ),
            7 => 
            array (
                'id' => 2008,
                'name' => 'Öcsöd',
                'county_id' => 14,
            ),
            8 => 
            array (
                'id' => 2009,
                'name' => 'Ófalu',
                'county_id' => 15,
            ),
            9 => 
            array (
                'id' => 2010,
                'name' => 'Ófehértó',
                'county_id' => 16,
            ),
            10 => 
            array (
                'id' => 2011,
                'name' => 'Óföldeák',
                'county_id' => 3,
            ),
            11 => 
            array (
                'id' => 2012,
                'name' => 'Óhid',
                'county_id' => 3,
            ),
            12 => 
            array (
                'id' => 2013,
                'name' => 'Okány',
                'county_id' => 3,
            ),
            13 => 
            array (
                'id' => 2014,
                'name' => 'Okorág',
                'county_id' => 10,
            ),
            14 => 
            array (
                'id' => 2015,
                'name' => 'Ököritófülpös',
                'county_id' => 8,
            ),
            15 => 
            array (
                'id' => 2016,
                'name' => 'Okorvölgy',
                'county_id' => 5,
            ),
            16 => 
            array (
                'id' => 2017,
                'name' => 'Olasz',
                'county_id' => 13,
            ),
            17 => 
            array (
                'id' => 2018,
                'name' => 'Olaszfa',
                'county_id' => 13,
            ),
            18 => 
            array (
                'id' => 2019,
                'name' => 'Olaszfalu',
                'county_id' => 3,
            ),
            19 => 
            array (
                'id' => 2020,
                'name' => 'Olaszliszka',
                'county_id' => 10,
            ),
            20 => 
            array (
                'id' => 2021,
                'name' => 'Ölbő',
                'county_id' => 15,
            ),
            21 => 
            array (
                'id' => 2022,
                'name' => 'Olcsva',
                'county_id' => 5,
            ),
            22 => 
            array (
                'id' => 2023,
                'name' => 'Olcsvaapáti',
                'county_id' => 5,
            ),
            23 => 
            array (
                'id' => 2024,
                'name' => 'Old',
                'county_id' => 13,
            ),
            24 => 
            array (
                'id' => 2025,
                'name' => 'Ólmod',
                'county_id' => 14,
            ),
            25 => 
            array (
                'id' => 2026,
                'name' => 'Oltárc',
                'county_id' => 15,
            ),
            26 => 
            array (
                'id' => 2027,
                'name' => 'Ömböly',
                'county_id' => 11,
            ),
            27 => 
            array (
                'id' => 2028,
                'name' => 'Onga',
                'county_id' => 11,
            ),
            28 => 
            array (
                'id' => 2029,
                'name' => 'Ónod',
                'county_id' => 12,
            ),
            29 => 
            array (
                'id' => 2030,
                'name' => 'Ópályi',
                'county_id' => 10,
            ),
            30 => 
            array (
                'id' => 2031,
                'name' => 'Ópusztaszer',
                'county_id' => 3,
            ),
            31 => 
            array (
                'id' => 2032,
                'name' => 'Őr',
                'county_id' => 12,
            ),
            32 => 
            array (
                'id' => 2033,
                'name' => 'Orbányosfa',
                'county_id' => 15,
            ),
            33 => 
            array (
                'id' => 2034,
                'name' => 'Őrbottyán',
                'county_id' => 5,
            ),
            34 => 
            array (
                'id' => 2035,
                'name' => 'Orci',
                'county_id' => 16,
            ),
            35 => 
            array (
                'id' => 2036,
                'name' => 'Ordacsehi',
                'county_id' => 16,
            ),
            36 => 
            array (
                'id' => 2037,
                'name' => 'Ordas',
                'county_id' => 16,
            ),
            37 => 
            array (
                'id' => 2038,
                'name' => 'Öregcsertő',
                'county_id' => 16,
            ),
            38 => 
            array (
                'id' => 2039,
                'name' => 'Öreglak',
                'county_id' => 8,
            ),
            39 => 
            array (
                'id' => 2040,
                'name' => 'Orfalu',
                'county_id' => 9,
            ),
            40 => 
            array (
                'id' => 2041,
                'name' => 'Orfű',
                'county_id' => 3,
            ),
            41 => 
            array (
                'id' => 2042,
                'name' => 'Orgovány',
                'county_id' => 15,
            ),
            42 => 
            array (
                'id' => 2043,
                'name' => 'Őrhalom',
                'county_id' => 15,
            ),
            43 => 
            array (
                'id' => 2044,
                'name' => 'Őrimagyarósd',
                'county_id' => 6,
            ),
            44 => 
            array (
                'id' => 2045,
                'name' => 'Őriszentpéter',
                'county_id' => 10,
            ),
            45 => 
            array (
                'id' => 2046,
                'name' => 'Örkény',
                'county_id' => 4,
            ),
            46 => 
            array (
                'id' => 2047,
                'name' => 'Ormándlak',
                'county_id' => 10,
            ),
            47 => 
            array (
                'id' => 2048,
                'name' => 'Örményes',
                'county_id' => 5,
            ),
            48 => 
            array (
                'id' => 2049,
                'name' => 'Örménykút',
                'county_id' => 11,
            ),
            49 => 
            array (
                'id' => 2050,
                'name' => 'Ormosbánya',
                'county_id' => 5,
            ),
            50 => 
            array (
                'id' => 2051,
                'name' => 'Orosháza',
                'county_id' => 5,
            ),
            51 => 
            array (
                'id' => 2052,
                'name' => 'Oroszi',
                'county_id' => 5,
            ),
            52 => 
            array (
                'id' => 2053,
                'name' => 'Oroszlány',
                'county_id' => 5,
            ),
            53 => 
            array (
                'id' => 2054,
                'name' => 'Oroszló',
                'county_id' => 5,
            ),
            54 => 
            array (
                'id' => 2055,
                'name' => 'Orosztony',
                'county_id' => 3,
            ),
            55 => 
            array (
                'id' => 2056,
                'name' => 'Ortaháza',
                'county_id' => 15,
            ),
            56 => 
            array (
                'id' => 2057,
                'name' => 'Őrtilos',
                'county_id' => 18,
            ),
            57 => 
            array (
                'id' => 2058,
                'name' => 'Örvényes',
                'county_id' => 8,
            ),
            58 => 
            array (
                'id' => 2059,
                'name' => 'Ősagárd',
                'county_id' => 18,
            ),
            59 => 
            array (
                'id' => 2060,
                'name' => 'Ősi',
                'county_id' => 2,
            ),
            60 => 
            array (
                'id' => 2061,
                'name' => 'Öskü',
                'county_id' => 13,
            ),
            61 => 
            array (
                'id' => 2062,
                'name' => 'Osli',
                'county_id' => 10,
            ),
            62 => 
            array (
                'id' => 2063,
                'name' => 'Ostffyasszonyfa',
                'county_id' => 13,
            ),
            63 => 
            array (
                'id' => 2064,
                'name' => 'Ostoros',
                'county_id' => 13,
            ),
            64 => 
            array (
                'id' => 2065,
                'name' => 'Oszkó',
                'county_id' => 7,
            ),
            65 => 
            array (
                'id' => 2066,
                'name' => 'Oszlár',
                'county_id' => 12,
            ),
            66 => 
            array (
                'id' => 2067,
                'name' => 'Osztopán',
                'county_id' => 11,
            ),
            67 => 
            array (
                'id' => 2068,
                'name' => 'Öttevény',
                'county_id' => 19,
            ),
            68 => 
            array (
                'id' => 2069,
                'name' => 'Öttömös',
                'county_id' => 10,
            ),
            69 => 
            array (
                'id' => 2070,
                'name' => 'Ötvöskónyi',
                'county_id' => 10,
            ),
            70 => 
            array (
                'id' => 2071,
                'name' => 'Ózd',
                'county_id' => 7,
            ),
            71 => 
            array (
                'id' => 2072,
                'name' => 'Ózd',
                'county_id' => 2,
            ),
            72 => 
            array (
                'id' => 2073,
                'name' => 'Ózd',
                'county_id' => 16,
            ),
            73 => 
            array (
                'id' => 2074,
                'name' => 'Ózd',
                'county_id' => 11,
            ),
            74 => 
            array (
                'id' => 2075,
                'name' => 'Ózd',
                'county_id' => 8,
            ),
            75 => 
            array (
                'id' => 2076,
                'name' => 'Ózd',
                'county_id' => 19,
            ),
            76 => 
            array (
                'id' => 2077,
                'name' => 'Ózdfalu',
                'county_id' => 6,
            ),
            77 => 
            array (
                'id' => 2078,
                'name' => 'Ozmánbük',
                'county_id' => 14,
            ),
            78 => 
            array (
                'id' => 2079,
                'name' => 'Ozora',
                'county_id' => 11,
            ),
            79 => 
            array (
                'id' => 2080,
                'name' => 'Pácin',
                'county_id' => 5,
            ),
            80 => 
            array (
                'id' => 2081,
                'name' => 'Pacsa',
                'county_id' => 15,
            ),
            81 => 
            array (
                'id' => 2082,
                'name' => 'Pácsony',
                'county_id' => 10,
            ),
            82 => 
            array (
                'id' => 2083,
                'name' => 'Padár',
                'county_id' => 15,
            ),
            83 => 
            array (
                'id' => 2084,
                'name' => 'Páhi',
                'county_id' => 12,
            ),
            84 => 
            array (
                'id' => 2085,
                'name' => 'Páka',
                'county_id' => 15,
            ),
            85 => 
            array (
                'id' => 2086,
                'name' => 'Pakod',
                'county_id' => 15,
            ),
            86 => 
            array (
                'id' => 2087,
                'name' => 'Pákozd',
                'county_id' => 1,
            ),
            87 => 
            array (
                'id' => 2088,
                'name' => 'Paks',
                'county_id' => 18,
            ),
            88 => 
            array (
                'id' => 2089,
                'name' => 'Palé',
                'county_id' => 3,
            ),
            89 => 
            array (
                'id' => 2090,
                'name' => 'Pálfa',
                'county_id' => 18,
            ),
            90 => 
            array (
                'id' => 2091,
                'name' => 'Pálfiszeg',
                'county_id' => 15,
            ),
            91 => 
            array (
                'id' => 2092,
                'name' => 'Pálháza',
                'county_id' => 5,
            ),
            92 => 
            array (
                'id' => 2093,
                'name' => 'Páli',
                'county_id' => 6,
            ),
            93 => 
            array (
                'id' => 2094,
                'name' => 'Palkonya',
                'county_id' => 3,
            ),
            94 => 
            array (
                'id' => 2095,
                'name' => 'Pálmajor',
                'county_id' => 11,
            ),
            95 => 
            array (
                'id' => 2096,
                'name' => 'Pálmonostora',
                'county_id' => 12,
            ),
            96 => 
            array (
                'id' => 2097,
                'name' => 'Palotabozsok',
                'county_id' => 3,
            ),
            97 => 
            array (
                'id' => 2098,
                'name' => 'Palotás',
                'county_id' => 19,
            ),
            98 => 
            array (
                'id' => 2099,
                'name' => 'Paloznak',
                'county_id' => 8,
            ),
            99 => 
            array (
                'id' => 2100,
                'name' => 'Pamlény',
                'county_id' => 5,
            ),
            100 => 
            array (
                'id' => 2101,
                'name' => 'Pamuk',
                'county_id' => 11,
            ),
            101 => 
            array (
                'id' => 2102,
                'name' => 'Pánd',
                'county_id' => 7,
            ),
            102 => 
            array (
                'id' => 2103,
                'name' => 'Pankasz',
                'county_id' => 10,
            ),
            103 => 
            array (
                'id' => 2104,
                'name' => 'Pannonhalma',
                'county_id' => 6,
            ),
            104 => 
            array (
                'id' => 2105,
                'name' => 'Pányok',
                'county_id' => 5,
            ),
            105 => 
            array (
                'id' => 2106,
                'name' => 'Panyola',
                'county_id' => 13,
            ),
            106 => 
            array (
                'id' => 2107,
                'name' => 'Pap',
                'county_id' => 13,
            ),
            107 => 
            array (
                'id' => 2108,
                'name' => 'Pápa',
                'county_id' => 8,
            ),
            108 => 
            array (
                'id' => 2109,
                'name' => 'Pápadereske',
                'county_id' => 8,
            ),
            109 => 
            array (
                'id' => 2110,
                'name' => 'Pápakovácsi',
                'county_id' => 8,
            ),
            110 => 
            array (
                'id' => 2111,
                'name' => 'Pápasalamon',
                'county_id' => 8,
            ),
            111 => 
            array (
                'id' => 2112,
                'name' => 'Pápateszér',
                'county_id' => 8,
            ),
            112 => 
            array (
                'id' => 2113,
                'name' => 'Papkeszi',
                'county_id' => 8,
            ),
            113 => 
            array (
                'id' => 2114,
                'name' => 'Pápoc',
                'county_id' => 10,
            ),
            114 => 
            array (
                'id' => 2115,
                'name' => 'Papos',
                'county_id' => 13,
            ),
            115 => 
            array (
                'id' => 2116,
                'name' => 'Páprád',
                'county_id' => 3,
            ),
            116 => 
            array (
                'id' => 2117,
                'name' => 'Parád',
                'county_id' => 4,
            ),
            117 => 
            array (
                'id' => 2118,
                'name' => 'Parádsasvár',
                'county_id' => 4,
            ),
            118 => 
            array (
                'id' => 2119,
                'name' => 'Parasznya',
                'county_id' => 5,
            ),
            119 => 
            array (
                'id' => 2120,
                'name' => 'Paszab',
                'county_id' => 13,
            ),
            120 => 
            array (
                'id' => 2121,
                'name' => 'Pásztó',
                'county_id' => 19,
            ),
            121 => 
            array (
                'id' => 2122,
                'name' => 'Pásztori',
                'county_id' => 6,
            ),
            122 => 
            array (
                'id' => 2123,
                'name' => 'Pat',
                'county_id' => 15,
            ),
            123 => 
            array (
                'id' => 2124,
                'name' => 'Patak',
                'county_id' => 19,
            ),
            124 => 
            array (
                'id' => 2125,
                'name' => 'Patalom',
                'county_id' => 11,
            ),
            125 => 
            array (
                'id' => 2126,
                'name' => 'Patapoklosi',
                'county_id' => 3,
            ),
            126 => 
            array (
                'id' => 2127,
                'name' => 'Patca',
                'county_id' => 11,
            ),
            127 => 
            array (
                'id' => 2128,
                'name' => 'Pátka',
                'county_id' => 1,
            ),
            128 => 
            array (
                'id' => 2129,
                'name' => 'Patosfa',
                'county_id' => 11,
            ),
            129 => 
            array (
                'id' => 2130,
                'name' => 'Pátroha',
                'county_id' => 13,
            ),
            130 => 
            array (
                'id' => 2131,
                'name' => 'Patvarc',
                'county_id' => 19,
            ),
            131 => 
            array (
                'id' => 2132,
                'name' => 'Páty',
                'county_id' => 7,
            ),
            132 => 
            array (
                'id' => 2133,
                'name' => 'Pátyod',
                'county_id' => 13,
            ),
            133 => 
            array (
                'id' => 2134,
                'name' => 'Pázmánd',
                'county_id' => 1,
            ),
            134 => 
            array (
                'id' => 2135,
                'name' => 'Pázmándfalu',
                'county_id' => 6,
            ),
            135 => 
            array (
                'id' => 2136,
                'name' => 'Pécel',
                'county_id' => 7,
            ),
            136 => 
            array (
                'id' => 2137,
                'name' => 'Pecöl',
                'county_id' => 10,
            ),
            137 => 
            array (
                'id' => 2138,
                'name' => 'Pécs',
                'county_id' => 3,
            ),
            138 => 
            array (
                'id' => 2139,
                'name' => 'Pécsbagota',
                'county_id' => 3,
            ),
            139 => 
            array (
                'id' => 2140,
                'name' => 'Pécsdevecser',
                'county_id' => 3,
            ),
            140 => 
            array (
                'id' => 2141,
                'name' => 'Pécsely',
                'county_id' => 8,
            ),
            141 => 
            array (
                'id' => 2142,
                'name' => 'Pécsudvard',
                'county_id' => 3,
            ),
            142 => 
            array (
                'id' => 2143,
                'name' => 'Pécsvárad',
                'county_id' => 3,
            ),
            143 => 
            array (
                'id' => 2144,
                'name' => 'Pellérd',
                'county_id' => 3,
            ),
            144 => 
            array (
                'id' => 2145,
                'name' => 'Pély',
                'county_id' => 4,
            ),
            145 => 
            array (
                'id' => 2146,
                'name' => 'Penc',
                'county_id' => 7,
            ),
            146 => 
            array (
                'id' => 2147,
                'name' => 'Penészlek',
                'county_id' => 13,
            ),
            147 => 
            array (
                'id' => 2148,
                'name' => 'Penyige',
                'county_id' => 8,
            ),
            148 => 
            array (
                'id' => 2149,
                'name' => 'Pénzesgyőr',
                'county_id' => 13,
            ),
            149 => 
            array (
                'id' => 2150,
                'name' => 'Pér',
                'county_id' => 6,
            ),
            150 => 
            array (
                'id' => 2151,
                'name' => 'Perbál',
                'county_id' => 7,
            ),
            151 => 
            array (
                'id' => 2152,
                'name' => 'Pere',
                'county_id' => 5,
            ),
            152 => 
            array (
                'id' => 2153,
                'name' => 'Perecse',
                'county_id' => 5,
            ),
            153 => 
            array (
                'id' => 2154,
                'name' => 'Pereked',
                'county_id' => 3,
            ),
            154 => 
            array (
                'id' => 2155,
                'name' => 'Perenye',
                'county_id' => 10,
            ),
            155 => 
            array (
                'id' => 2156,
                'name' => 'Peresznye',
                'county_id' => 10,
            ),
            156 => 
            array (
                'id' => 2157,
                'name' => 'Pereszteg',
                'county_id' => 6,
            ),
            157 => 
            array (
                'id' => 2158,
                'name' => 'Perkáta',
                'county_id' => 1,
            ),
            158 => 
            array (
                'id' => 2159,
                'name' => 'Perkupa',
                'county_id' => 5,
            ),
            159 => 
            array (
                'id' => 2160,
                'name' => 'Perőcsény',
                'county_id' => 7,
            ),
            160 => 
            array (
                'id' => 2161,
                'name' => 'Peterd',
                'county_id' => 3,
            ),
            161 => 
            array (
                'id' => 2162,
                'name' => 'Péterhida',
                'county_id' => 11,
            ),
            162 => 
            array (
                'id' => 2163,
                'name' => 'Péteri',
                'county_id' => 7,
            ),
            163 => 
            array (
                'id' => 2164,
                'name' => 'Pétervására',
                'county_id' => 4,
            ),
            164 => 
            array (
                'id' => 2165,
                'name' => 'Pétfürdő',
                'county_id' => 8,
            ),
            165 => 
            array (
                'id' => 2166,
                'name' => 'Pethőhenye',
                'county_id' => 15,
            ),
            166 => 
            array (
                'id' => 2167,
                'name' => 'Petneháza',
                'county_id' => 13,
            ),
            167 => 
            array (
                'id' => 2168,
                'name' => 'Petőfibánya',
                'county_id' => 4,
            ),
            168 => 
            array (
                'id' => 2169,
                'name' => 'Petőfiszállás',
                'county_id' => 12,
            ),
            169 => 
            array (
                'id' => 2170,
                'name' => 'Petőháza',
                'county_id' => 6,
            ),
            170 => 
            array (
                'id' => 2171,
                'name' => 'Petőmihályfa',
                'county_id' => 10,
            ),
            171 => 
            array (
                'id' => 2172,
                'name' => 'Petrikeresztúr',
                'county_id' => 15,
            ),
            172 => 
            array (
                'id' => 2173,
                'name' => 'Petrivente',
                'county_id' => 15,
            ),
            173 => 
            array (
                'id' => 2174,
                'name' => 'Pettend',
                'county_id' => 3,
            ),
            174 => 
            array (
                'id' => 2175,
                'name' => 'Piliny',
                'county_id' => 19,
            ),
            175 => 
            array (
                'id' => 2176,
                'name' => 'Pilis',
                'county_id' => 7,
            ),
            176 => 
            array (
                'id' => 2177,
                'name' => 'Pilisborosjenő',
                'county_id' => 7,
            ),
            177 => 
            array (
                'id' => 2178,
                'name' => 'Piliscsaba',
                'county_id' => 7,
            ),
            178 => 
            array (
                'id' => 2179,
                'name' => 'Piliscsév',
                'county_id' => 9,
            ),
            179 => 
            array (
                'id' => 2180,
                'name' => 'Pilisjászfalu',
                'county_id' => 7,
            ),
            180 => 
            array (
                'id' => 2181,
                'name' => 'Pilismarót',
                'county_id' => 9,
            ),
            181 => 
            array (
                'id' => 2182,
                'name' => 'Pilisszántó',
                'county_id' => 7,
            ),
            182 => 
            array (
                'id' => 2183,
                'name' => 'Pilisszentiván',
                'county_id' => 7,
            ),
            183 => 
            array (
                'id' => 2184,
                'name' => 'Pilisszentkereszt',
                'county_id' => 7,
            ),
            184 => 
            array (
                'id' => 2185,
                'name' => 'Pilisszentlászló',
                'county_id' => 7,
            ),
            185 => 
            array (
                'id' => 2186,
                'name' => 'Pilisvörösvár',
                'county_id' => 7,
            ),
            186 => 
            array (
                'id' => 2187,
                'name' => 'Pincehely',
                'county_id' => 18,
            ),
            187 => 
            array (
                'id' => 2188,
                'name' => 'Pinkamindszent',
                'county_id' => 10,
            ),
            188 => 
            array (
                'id' => 2189,
                'name' => 'Pinnye',
                'county_id' => 6,
            ),
            189 => 
            array (
                'id' => 2190,
                'name' => 'Piricse',
                'county_id' => 13,
            ),
            190 => 
            array (
                'id' => 2191,
                'name' => 'Pirtó',
                'county_id' => 12,
            ),
            191 => 
            array (
                'id' => 2192,
                'name' => 'Piskó',
                'county_id' => 3,
            ),
            192 => 
            array (
                'id' => 2193,
                'name' => 'Pitvaros',
                'county_id' => 14,
            ),
            193 => 
            array (
                'id' => 2194,
                'name' => 'Pócsa',
                'county_id' => 3,
            ),
            194 => 
            array (
                'id' => 2195,
                'name' => 'Pocsaj',
                'county_id' => 17,
            ),
            195 => 
            array (
                'id' => 2196,
                'name' => 'Pócsmegyer',
                'county_id' => 7,
            ),
            196 => 
            array (
                'id' => 2197,
                'name' => 'Pócspetri',
                'county_id' => 13,
            ),
            197 => 
            array (
                'id' => 2198,
                'name' => 'Pogány',
                'county_id' => 3,
            ),
            198 => 
            array (
                'id' => 2199,
                'name' => 'Pogányszentpéter',
                'county_id' => 11,
            ),
            199 => 
            array (
                'id' => 2200,
                'name' => 'Pókaszepetk',
                'county_id' => 15,
            ),
            200 => 
            array (
                'id' => 2201,
                'name' => 'Polány',
                'county_id' => 11,
            ),
            201 => 
            array (
                'id' => 2202,
                'name' => 'Polgár',
                'county_id' => 17,
            ),
            202 => 
            array (
                'id' => 2203,
                'name' => 'Polgárdi',
                'county_id' => 1,
            ),
            203 => 
            array (
                'id' => 2204,
                'name' => 'Pölöske',
                'county_id' => 7,
            ),
            204 => 
            array (
                'id' => 2205,
                'name' => 'Pölöskefő',
                'county_id' => 13,
            ),
            205 => 
            array (
                'id' => 2206,
                'name' => 'Pomáz',
                'county_id' => 10,
            ),
            206 => 
            array (
                'id' => 2207,
                'name' => 'Pörböly',
                'county_id' => 4,
            ),
            207 => 
            array (
                'id' => 2208,
                'name' => 'Porcsalma',
                'county_id' => 10,
            ),
            208 => 
            array (
                'id' => 2209,
                'name' => 'Pördefölde',
                'county_id' => 11,
            ),
            209 => 
            array (
                'id' => 2210,
                'name' => 'Pornóapáti',
                'county_id' => 11,
            ),
            210 => 
            array (
                'id' => 2211,
                'name' => 'Poroszló',
                'county_id' => 11,
            ),
            211 => 
            array (
                'id' => 2212,
                'name' => 'Porpác',
                'county_id' => 15,
            ),
            212 => 
            array (
                'id' => 2213,
                'name' => 'Porrog',
                'county_id' => 8,
            ),
            213 => 
            array (
                'id' => 2214,
                'name' => 'Porrogszentkirály',
                'county_id' => 10,
            ),
            214 => 
            array (
                'id' => 2215,
                'name' => 'Porrogszentpál',
                'county_id' => 11,
            ),
            215 => 
            array (
                'id' => 2216,
                'name' => 'Pórszombat',
                'county_id' => 6,
            ),
            216 => 
            array (
                'id' => 2217,
                'name' => 'Porva',
                'county_id' => 15,
            ),
            217 => 
            array (
                'id' => 2218,
                'name' => 'Pósfa',
                'county_id' => 15,
            ),
            218 => 
            array (
                'id' => 2219,
                'name' => 'Potony',
                'county_id' => 18,
            ),
            219 => 
            array (
                'id' => 2220,
                'name' => 'Pötréte',
                'county_id' => 15,
            ),
            220 => 
            array (
                'id' => 2221,
                'name' => 'Potyond',
                'county_id' => 15,
            ),
            221 => 
            array (
                'id' => 2222,
                'name' => 'Prügy',
                'county_id' => 5,
            ),
            222 => 
            array (
                'id' => 2223,
                'name' => 'Pula',
                'county_id' => 8,
            ),
            223 => 
            array (
                'id' => 2224,
                'name' => 'Püski',
                'county_id' => 15,
            ),
            224 => 
            array (
                'id' => 2225,
                'name' => 'Püspökhatvan',
                'county_id' => 19,
            ),
            225 => 
            array (
                'id' => 2226,
                'name' => 'Püspökladány',
                'county_id' => 6,
            ),
            226 => 
            array (
                'id' => 2227,
                'name' => 'Püspökmolnári',
                'county_id' => 10,
            ),
            227 => 
            array (
                'id' => 2228,
                'name' => 'Püspökszilágy',
                'county_id' => 13,
            ),
            228 => 
            array (
                'id' => 2229,
                'name' => 'Pusztaapáti',
                'county_id' => 15,
            ),
            229 => 
            array (
                'id' => 2230,
                'name' => 'Pusztaberki',
                'county_id' => 5,
            ),
            230 => 
            array (
                'id' => 2231,
                'name' => 'Pusztacsalád',
                'county_id' => 16,
            ),
            231 => 
            array (
                'id' => 2232,
                'name' => 'Pusztacsó',
                'county_id' => 18,
            ),
            232 => 
            array (
                'id' => 2233,
                'name' => 'Pusztadobos',
                'county_id' => 11,
            ),
            233 => 
            array (
                'id' => 2234,
                'name' => 'Pusztaederics',
                'county_id' => 15,
            ),
            234 => 
            array (
                'id' => 2235,
                'name' => 'Pusztafalu',
                'county_id' => 14,
            ),
            235 => 
            array (
                'id' => 2236,
                'name' => 'Pusztaföldvár',
                'county_id' => 8,
            ),
            236 => 
            array (
                'id' => 2237,
                'name' => 'Pusztahencse',
                'county_id' => 2,
            ),
            237 => 
            array (
                'id' => 2238,
                'name' => 'Pusztakovácsi',
                'county_id' => 16,
            ),
            238 => 
            array (
                'id' => 2239,
                'name' => 'Pusztamagyaród',
                'county_id' => 5,
            ),
            239 => 
            array (
                'id' => 2240,
                'name' => 'Pusztamérges',
                'county_id' => 1,
            ),
            240 => 
            array (
                'id' => 2241,
                'name' => 'Pusztamiske',
                'county_id' => 11,
            ),
            241 => 
            array (
                'id' => 2242,
                'name' => 'Pusztamonostor',
                'county_id' => 15,
            ),
            242 => 
            array (
                'id' => 2243,
                'name' => 'Pusztaottlaka',
                'county_id' => 14,
            ),
            243 => 
            array (
                'id' => 2244,
                'name' => 'Pusztaradvány',
                'county_id' => 7,
            ),
            244 => 
            array (
                'id' => 2245,
                'name' => 'Pusztaszabolcs',
                'county_id' => 1,
            ),
            245 => 
            array (
                'id' => 2246,
                'name' => 'Pusztaszemes',
                'county_id' => 7,
            ),
            246 => 
            array (
                'id' => 2247,
                'name' => 'Pusztaszentlászló',
                'county_id' => 5,
            ),
            247 => 
            array (
                'id' => 2248,
                'name' => 'Pusztaszer',
                'county_id' => 6,
            ),
            248 => 
            array (
                'id' => 2249,
                'name' => 'Pusztavacs',
                'county_id' => 7,
            ),
            249 => 
            array (
                'id' => 2250,
                'name' => 'Pusztavám',
                'county_id' => 17,
            ),
            250 => 
            array (
                'id' => 2251,
                'name' => 'Pusztazámor',
                'county_id' => 10,
            ),
            251 => 
            array (
                'id' => 2252,
                'name' => 'Putnok',
                'county_id' => 7,
            ),
            252 => 
            array (
                'id' => 2253,
                'name' => 'Rábacsanak',
                'county_id' => 6,
            ),
            253 => 
            array (
                'id' => 2254,
                'name' => 'Rábacsécsény',
                'county_id' => 6,
            ),
            254 => 
            array (
                'id' => 2255,
                'name' => 'Rábagyarmat',
                'county_id' => 10,
            ),
            255 => 
            array (
                'id' => 2256,
                'name' => 'Rábahidvég',
                'county_id' => 10,
            ),
            256 => 
            array (
                'id' => 2257,
                'name' => 'Rábakecöl',
                'county_id' => 6,
            ),
            257 => 
            array (
                'id' => 2258,
                'name' => 'Rábapatona',
                'county_id' => 6,
            ),
            258 => 
            array (
                'id' => 2259,
                'name' => 'Rábapaty',
                'county_id' => 10,
            ),
            259 => 
            array (
                'id' => 2260,
                'name' => 'Rábapordány',
                'county_id' => 6,
            ),
            260 => 
            array (
                'id' => 2261,
                'name' => 'Rábasebes',
                'county_id' => 6,
            ),
            261 => 
            array (
                'id' => 2262,
                'name' => 'Rábaszentandrás',
                'county_id' => 6,
            ),
            262 => 
            array (
                'id' => 2263,
                'name' => 'Rábaszentmihály',
                'county_id' => 6,
            ),
            263 => 
            array (
                'id' => 2264,
                'name' => 'Rábaszentmiklós',
                'county_id' => 6,
            ),
            264 => 
            array (
                'id' => 2265,
                'name' => 'Rábatamási',
                'county_id' => 6,
            ),
            265 => 
            array (
                'id' => 2266,
                'name' => 'Rábatöttös',
                'county_id' => 10,
            ),
            266 => 
            array (
                'id' => 2267,
                'name' => 'Rábcakapi',
                'county_id' => 6,
            ),
            267 => 
            array (
                'id' => 2268,
                'name' => 'Rácalmás',
                'county_id' => 1,
            ),
            268 => 
            array (
                'id' => 2269,
                'name' => 'Ráckeresztúr',
                'county_id' => 1,
            ),
            269 => 
            array (
                'id' => 2270,
                'name' => 'Ráckeve',
                'county_id' => 7,
            ),
            270 => 
            array (
                'id' => 2271,
                'name' => 'Rád',
                'county_id' => 7,
            ),
            271 => 
            array (
                'id' => 2272,
                'name' => 'Rádfalva',
                'county_id' => 3,
            ),
            272 => 
            array (
                'id' => 2273,
                'name' => 'Rádóckölked',
                'county_id' => 10,
            ),
            273 => 
            array (
                'id' => 2274,
                'name' => 'Radostyán',
                'county_id' => 5,
            ),
            274 => 
            array (
                'id' => 2275,
                'name' => 'Ragály',
                'county_id' => 5,
            ),
            275 => 
            array (
                'id' => 2276,
                'name' => 'Rajka',
                'county_id' => 6,
            ),
            276 => 
            array (
                'id' => 2277,
                'name' => 'Rakaca',
                'county_id' => 5,
            ),
            277 => 
            array (
                'id' => 2278,
                'name' => 'Rakacaszend',
                'county_id' => 5,
            ),
            278 => 
            array (
                'id' => 2279,
                'name' => 'Rakamaz',
                'county_id' => 13,
            ),
            279 => 
            array (
                'id' => 2280,
                'name' => 'Rákóczifalva',
                'county_id' => 2,
            ),
            280 => 
            array (
                'id' => 2281,
                'name' => 'Rákócziújfalu',
                'county_id' => 2,
            ),
            281 => 
            array (
                'id' => 2282,
                'name' => 'Ráksi',
                'county_id' => 11,
            ),
            282 => 
            array (
                'id' => 2283,
                'name' => 'Ramocsa',
                'county_id' => 15,
            ),
            283 => 
            array (
                'id' => 2284,
                'name' => 'Ramocsaháza',
                'county_id' => 13,
            ),
            284 => 
            array (
                'id' => 2285,
                'name' => 'Rápolt',
                'county_id' => 13,
            ),
            285 => 
            array (
                'id' => 2286,
                'name' => 'Raposka',
                'county_id' => 8,
            ),
            286 => 
            array (
                'id' => 2287,
                'name' => 'Rásonysápberencs',
                'county_id' => 5,
            ),
            287 => 
            array (
                'id' => 2288,
                'name' => 'Rátka',
                'county_id' => 5,
            ),
            288 => 
            array (
                'id' => 2289,
                'name' => 'Rátót',
                'county_id' => 10,
            ),
            289 => 
            array (
                'id' => 2290,
                'name' => 'Ravazd',
                'county_id' => 6,
            ),
            290 => 
            array (
                'id' => 2291,
                'name' => 'Recsk',
                'county_id' => 4,
            ),
            291 => 
            array (
                'id' => 2292,
                'name' => 'Réde',
                'county_id' => 9,
            ),
            292 => 
            array (
                'id' => 2293,
                'name' => 'Rédics',
                'county_id' => 15,
            ),
            293 => 
            array (
                'id' => 2294,
                'name' => 'Regéc',
                'county_id' => 5,
            ),
            294 => 
            array (
                'id' => 2295,
                'name' => 'Regenye',
                'county_id' => 3,
            ),
            295 => 
            array (
                'id' => 2296,
                'name' => 'Regöly',
                'county_id' => 18,
            ),
            296 => 
            array (
                'id' => 2297,
                'name' => 'Rém',
                'county_id' => 12,
            ),
            297 => 
            array (
                'id' => 2298,
                'name' => 'Remeteszőlős',
                'county_id' => 7,
            ),
            298 => 
            array (
                'id' => 2299,
                'name' => 'Répáshuta',
                'county_id' => 5,
            ),
            299 => 
            array (
                'id' => 2300,
                'name' => 'Répcelak',
                'county_id' => 10,
            ),
            300 => 
            array (
                'id' => 2301,
                'name' => 'Répceszemere',
                'county_id' => 6,
            ),
            301 => 
            array (
                'id' => 2302,
                'name' => 'Répceszentgyörgy',
                'county_id' => 10,
            ),
            302 => 
            array (
                'id' => 2303,
                'name' => 'Répcevis',
                'county_id' => 6,
            ),
            303 => 
            array (
                'id' => 2304,
                'name' => 'Resznek',
                'county_id' => 15,
            ),
            304 => 
            array (
                'id' => 2305,
                'name' => 'Rétalap',
                'county_id' => 6,
            ),
            305 => 
            array (
                'id' => 2306,
                'name' => 'Rétközberencs',
                'county_id' => 13,
            ),
            306 => 
            array (
                'id' => 2307,
                'name' => 'Rétság',
                'county_id' => 19,
            ),
            307 => 
            array (
                'id' => 2308,
                'name' => 'Révfülöp',
                'county_id' => 8,
            ),
            308 => 
            array (
                'id' => 2309,
                'name' => 'Révleányvár',
                'county_id' => 5,
            ),
            309 => 
            array (
                'id' => 2310,
                'name' => 'Rezi',
                'county_id' => 15,
            ),
            310 => 
            array (
                'id' => 2311,
                'name' => 'Ricse',
                'county_id' => 5,
            ),
            311 => 
            array (
                'id' => 2312,
                'name' => 'Rigács',
                'county_id' => 8,
            ),
            312 => 
            array (
                'id' => 2313,
                'name' => 'Rigyác',
                'county_id' => 15,
            ),
            313 => 
            array (
                'id' => 2314,
                'name' => 'Rimóc',
                'county_id' => 19,
            ),
            314 => 
            array (
                'id' => 2315,
                'name' => 'Rinyabesenyő',
                'county_id' => 11,
            ),
            315 => 
            array (
                'id' => 2316,
                'name' => 'Rinyakovácsi',
                'county_id' => 11,
            ),
            316 => 
            array (
                'id' => 2317,
                'name' => 'Rinyaszentkirály',
                'county_id' => 11,
            ),
            317 => 
            array (
                'id' => 2318,
                'name' => 'Rinyaújlak',
                'county_id' => 11,
            ),
            318 => 
            array (
                'id' => 2319,
                'name' => 'Rinyaújnép',
                'county_id' => 11,
            ),
            319 => 
            array (
                'id' => 2320,
                'name' => 'Rohod',
                'county_id' => 13,
            ),
            320 => 
            array (
                'id' => 2321,
                'name' => 'Röjtökmuzsaj',
                'county_id' => 8,
            ),
            321 => 
            array (
                'id' => 2322,
                'name' => 'Románd',
                'county_id' => 19,
            ),
            322 => 
            array (
                'id' => 2323,
                'name' => 'Romhány',
                'county_id' => 3,
            ),
            323 => 
            array (
                'id' => 2324,
                'name' => 'Romonya',
                'county_id' => 3,
            ),
            324 => 
            array (
                'id' => 2325,
                'name' => 'Rönök',
                'county_id' => 13,
            ),
            325 => 
            array (
                'id' => 2326,
                'name' => 'Röszke',
                'county_id' => 4,
            ),
            326 => 
            array (
                'id' => 2327,
                'name' => 'Rózsafa',
                'county_id' => 6,
            ),
            327 => 
            array (
                'id' => 2328,
                'name' => 'Rozsály',
                'county_id' => 10,
            ),
            328 => 
            array (
                'id' => 2329,
                'name' => 'Rózsaszentmárton',
                'county_id' => 14,
            ),
            329 => 
            array (
                'id' => 2330,
                'name' => 'Rudabánya',
                'county_id' => 5,
            ),
            330 => 
            array (
                'id' => 2331,
                'name' => 'Rudolftelep',
                'county_id' => 5,
            ),
            331 => 
            array (
                'id' => 2332,
                'name' => 'Rum',
                'county_id' => 10,
            ),
            332 => 
            array (
                'id' => 2333,
                'name' => 'Ruzsa',
                'county_id' => 14,
            ),
            333 => 
            array (
                'id' => 2334,
                'name' => 'Ságújfalu',
                'county_id' => 19,
            ),
            334 => 
            array (
                'id' => 2335,
                'name' => 'Ságvár',
                'county_id' => 11,
            ),
            335 => 
            array (
                'id' => 2336,
                'name' => 'Sajóbábony',
                'county_id' => 5,
            ),
            336 => 
            array (
                'id' => 2337,
                'name' => 'Sajóecseg',
                'county_id' => 5,
            ),
            337 => 
            array (
                'id' => 2338,
                'name' => 'Sajógalgóc',
                'county_id' => 5,
            ),
            338 => 
            array (
                'id' => 2339,
                'name' => 'Sajóhidvég',
                'county_id' => 5,
            ),
            339 => 
            array (
                'id' => 2340,
                'name' => 'Sajóivánka',
                'county_id' => 5,
            ),
            340 => 
            array (
                'id' => 2341,
                'name' => 'Sajókápolna',
                'county_id' => 5,
            ),
            341 => 
            array (
                'id' => 2342,
                'name' => 'Sajókaza',
                'county_id' => 5,
            ),
            342 => 
            array (
                'id' => 2343,
                'name' => 'Sajókeresztúr',
                'county_id' => 5,
            ),
            343 => 
            array (
                'id' => 2344,
                'name' => 'Sajólád',
                'county_id' => 5,
            ),
            344 => 
            array (
                'id' => 2345,
                'name' => 'Sajólászlófalva',
                'county_id' => 5,
            ),
            345 => 
            array (
                'id' => 2346,
                'name' => 'Sajómercse',
                'county_id' => 5,
            ),
            346 => 
            array (
                'id' => 2347,
                'name' => 'Sajónémeti',
                'county_id' => 5,
            ),
            347 => 
            array (
                'id' => 2348,
                'name' => 'Sajóörös',
                'county_id' => 5,
            ),
            348 => 
            array (
                'id' => 2349,
                'name' => 'Sajópálfala',
                'county_id' => 5,
            ),
            349 => 
            array (
                'id' => 2350,
                'name' => 'Sajópetri',
                'county_id' => 5,
            ),
            350 => 
            array (
                'id' => 2351,
                'name' => 'Sajópüspöki',
                'county_id' => 5,
            ),
            351 => 
            array (
                'id' => 2352,
                'name' => 'Sajósenye',
                'county_id' => 5,
            ),
            352 => 
            array (
                'id' => 2353,
                'name' => 'Sajószentpéter',
                'county_id' => 5,
            ),
            353 => 
            array (
                'id' => 2354,
                'name' => 'Sajószöged',
                'county_id' => 5,
            ),
            354 => 
            array (
                'id' => 2355,
                'name' => 'Sajóvámos',
                'county_id' => 5,
            ),
            355 => 
            array (
                'id' => 2356,
                'name' => 'Sajóvelezd',
                'county_id' => 5,
            ),
            356 => 
            array (
                'id' => 2357,
                'name' => 'Sajtoskál',
                'county_id' => 10,
            ),
            357 => 
            array (
                'id' => 2358,
                'name' => 'Salföld',
                'county_id' => 8,
            ),
            358 => 
            array (
                'id' => 2359,
                'name' => 'Salgótarján',
                'county_id' => 19,
            ),
            359 => 
            array (
                'id' => 2360,
                'name' => 'Salköveskút',
                'county_id' => 10,
            ),
            360 => 
            array (
                'id' => 2361,
                'name' => 'Salomvár',
                'county_id' => 15,
            ),
            361 => 
            array (
                'id' => 2362,
                'name' => 'Sály',
                'county_id' => 5,
            ),
            362 => 
            array (
                'id' => 2363,
                'name' => 'Sámod',
                'county_id' => 3,
            ),
            363 => 
            array (
                'id' => 2364,
                'name' => 'Sámsonháza',
                'county_id' => 19,
            ),
            364 => 
            array (
                'id' => 2365,
                'name' => 'Sand',
                'county_id' => 15,
            ),
            365 => 
            array (
                'id' => 2366,
                'name' => 'Sándorfalva',
                'county_id' => 14,
            ),
            366 => 
            array (
                'id' => 2367,
                'name' => 'Sántos',
                'county_id' => 11,
            ),
            367 => 
            array (
                'id' => 2368,
                'name' => 'Sáp',
                'county_id' => 17,
            ),
            368 => 
            array (
                'id' => 2369,
                'name' => 'Sáránd',
                'county_id' => 17,
            ),
            369 => 
            array (
                'id' => 2370,
                'name' => 'Sárazsadány',
                'county_id' => 5,
            ),
            370 => 
            array (
                'id' => 2371,
                'name' => 'Sárbogárd',
                'county_id' => 1,
            ),
            371 => 
            array (
                'id' => 2372,
                'name' => 'Sáregres',
                'county_id' => 1,
            ),
            372 => 
            array (
                'id' => 2373,
                'name' => 'Sárfimizdó',
                'county_id' => 10,
            ),
            373 => 
            array (
                'id' => 2374,
                'name' => 'Sárhida',
                'county_id' => 15,
            ),
            374 => 
            array (
                'id' => 2375,
                'name' => 'Sárisáp',
                'county_id' => 9,
            ),
            375 => 
            array (
                'id' => 2376,
                'name' => 'Sarkad',
                'county_id' => 16,
            ),
            376 => 
            array (
                'id' => 2377,
                'name' => 'Sarkadkeresztúr',
                'county_id' => 16,
            ),
            377 => 
            array (
                'id' => 2378,
                'name' => 'Sárkeresztes',
                'county_id' => 1,
            ),
            378 => 
            array (
                'id' => 2379,
                'name' => 'Sárkeresztúr',
                'county_id' => 1,
            ),
            379 => 
            array (
                'id' => 2380,
                'name' => 'Sárkeszi',
                'county_id' => 1,
            ),
            380 => 
            array (
                'id' => 2381,
                'name' => 'Sármellék',
                'county_id' => 15,
            ),
            381 => 
            array (
                'id' => 2382,
                'name' => 'Sárok',
                'county_id' => 3,
            ),
            382 => 
            array (
                'id' => 2383,
                'name' => 'Sárosd',
                'county_id' => 1,
            ),
            383 => 
            array (
                'id' => 2384,
                'name' => 'Sárospatak',
                'county_id' => 5,
            ),
            384 => 
            array (
                'id' => 2385,
                'name' => 'Sárpilis',
                'county_id' => 18,
            ),
            385 => 
            array (
                'id' => 2386,
                'name' => 'Sárrétudvari',
                'county_id' => 17,
            ),
            386 => 
            array (
                'id' => 2387,
                'name' => 'Sarród',
                'county_id' => 6,
            ),
            387 => 
            array (
                'id' => 2388,
                'name' => 'Sárszentágota',
                'county_id' => 1,
            ),
            388 => 
            array (
                'id' => 2389,
                'name' => 'Sárszentlőrinc',
                'county_id' => 18,
            ),
            389 => 
            array (
                'id' => 2390,
                'name' => 'Sárszentmihály',
                'county_id' => 1,
            ),
            390 => 
            array (
                'id' => 2391,
                'name' => 'Sarud',
                'county_id' => 4,
            ),
            391 => 
            array (
                'id' => 2392,
                'name' => 'Sárvár',
                'county_id' => 10,
            ),
            392 => 
            array (
                'id' => 2393,
                'name' => 'Sásd',
                'county_id' => 3,
            ),
            393 => 
            array (
                'id' => 2394,
                'name' => 'Sáska',
                'county_id' => 8,
            ),
            394 => 
            array (
                'id' => 2395,
                'name' => 'Sáta',
                'county_id' => 5,
            ),
            395 => 
            array (
                'id' => 2396,
                'name' => 'Sátoraljaújhely',
                'county_id' => 5,
            ),
            396 => 
            array (
                'id' => 2397,
                'name' => 'Sátorhely',
                'county_id' => 3,
            ),
            397 => 
            array (
                'id' => 2398,
                'name' => 'Sávoly',
                'county_id' => 11,
            ),
            398 => 
            array (
                'id' => 2399,
                'name' => 'Sé',
                'county_id' => 10,
            ),
            399 => 
            array (
                'id' => 2400,
                'name' => 'Segesd',
                'county_id' => 11,
            ),
            400 => 
            array (
                'id' => 2401,
                'name' => 'Sellye',
                'county_id' => 3,
            ),
            401 => 
            array (
                'id' => 2402,
                'name' => 'Selyeb',
                'county_id' => 5,
            ),
            402 => 
            array (
                'id' => 2403,
                'name' => 'Semjén',
                'county_id' => 5,
            ),
            403 => 
            array (
                'id' => 2404,
                'name' => 'Semjénháza',
                'county_id' => 15,
            ),
            404 => 
            array (
                'id' => 2405,
                'name' => 'Sénye',
                'county_id' => 15,
            ),
            405 => 
            array (
                'id' => 2406,
                'name' => 'Sényő',
                'county_id' => 13,
            ),
            406 => 
            array (
                'id' => 2407,
                'name' => 'Seregélyes',
                'county_id' => 1,
            ),
            407 => 
            array (
                'id' => 2408,
                'name' => 'Serényfalva',
                'county_id' => 5,
            ),
            408 => 
            array (
                'id' => 2409,
                'name' => 'Sérsekszőlős',
                'county_id' => 11,
            ),
            409 => 
            array (
                'id' => 2410,
                'name' => 'Sikátor',
                'county_id' => 8,
            ),
            410 => 
            array (
                'id' => 2411,
                'name' => 'Siklós',
                'county_id' => 3,
            ),
            411 => 
            array (
                'id' => 2412,
                'name' => 'Siklósbodony',
                'county_id' => 3,
            ),
            412 => 
            array (
                'id' => 2413,
                'name' => 'Siklósnagyfalu',
                'county_id' => 3,
            ),
            413 => 
            array (
                'id' => 2414,
                'name' => 'Sima',
                'county_id' => 5,
            ),
            414 => 
            array (
                'id' => 2415,
                'name' => 'Simaság',
                'county_id' => 10,
            ),
            415 => 
            array (
                'id' => 2416,
                'name' => 'Simonfa',
                'county_id' => 11,
            ),
            416 => 
            array (
                'id' => 2417,
                'name' => 'Simontornya',
                'county_id' => 18,
            ),
            417 => 
            array (
                'id' => 2418,
                'name' => 'Sióagárd',
                'county_id' => 18,
            ),
            418 => 
            array (
                'id' => 2419,
                'name' => 'Siófok',
                'county_id' => 11,
            ),
            419 => 
            array (
                'id' => 2420,
                'name' => 'Siójut',
                'county_id' => 11,
            ),
            420 => 
            array (
                'id' => 2421,
                'name' => 'Sirok',
                'county_id' => 4,
            ),
            421 => 
            array (
                'id' => 2422,
                'name' => 'Sitke',
                'county_id' => 10,
            ),
            422 => 
            array (
                'id' => 2423,
                'name' => 'Sobor',
                'county_id' => 6,
            ),
            423 => 
            array (
                'id' => 2424,
                'name' => 'Söjtör',
                'county_id' => 6,
            ),
            424 => 
            array (
                'id' => 2425,
                'name' => 'Sokorópátka',
                'county_id' => 12,
            ),
            425 => 
            array (
                'id' => 2426,
                'name' => 'Solt',
                'county_id' => 12,
            ),
            426 => 
            array (
                'id' => 2427,
                'name' => 'Soltszentimre',
                'county_id' => 12,
            ),
            427 => 
            array (
                'id' => 2428,
                'name' => 'Soltvadkert',
                'county_id' => 8,
            ),
            428 => 
            array (
                'id' => 2429,
                'name' => 'Sóly',
                'county_id' => 7,
            ),
            429 => 
            array (
                'id' => 2430,
                'name' => 'Solymár',
                'county_id' => 11,
            ),
            430 => 
            array (
                'id' => 2431,
                'name' => 'Som',
                'county_id' => 3,
            ),
            431 => 
            array (
                'id' => 2432,
                'name' => 'Somberek',
                'county_id' => 8,
            ),
            432 => 
            array (
                'id' => 2433,
                'name' => 'Somlójenő',
                'county_id' => 8,
            ),
            433 => 
            array (
                'id' => 2434,
                'name' => 'Somlószőlős',
                'county_id' => 8,
            ),
            434 => 
            array (
                'id' => 2435,
                'name' => 'Somlóvásárhely',
                'county_id' => 8,
            ),
            435 => 
            array (
                'id' => 2436,
                'name' => 'Somlóvecse',
                'county_id' => 11,
            ),
            436 => 
            array (
                'id' => 2437,
                'name' => 'Somodor',
                'county_id' => 11,
            ),
            437 => 
            array (
                'id' => 2438,
                'name' => 'Somogyacsa',
                'county_id' => 3,
            ),
            438 => 
            array (
                'id' => 2439,
                'name' => 'Somogyapáti',
                'county_id' => 11,
            ),
            439 => 
            array (
                'id' => 2440,
                'name' => 'Somogyaracs',
                'county_id' => 11,
            ),
            440 => 
            array (
                'id' => 2441,
                'name' => 'Somogyaszaló',
                'county_id' => 11,
            ),
            441 => 
            array (
                'id' => 2442,
                'name' => 'Somogybabod',
                'county_id' => 11,
            ),
            442 => 
            array (
                'id' => 2443,
                'name' => 'Somogybükkösd',
                'county_id' => 11,
            ),
            443 => 
            array (
                'id' => 2444,
                'name' => 'Somogycsicsó',
                'county_id' => 11,
            ),
            444 => 
            array (
                'id' => 2445,
                'name' => 'Somogydöröcske',
                'county_id' => 11,
            ),
            445 => 
            array (
                'id' => 2446,
                'name' => 'Somogyegres',
                'county_id' => 11,
            ),
            446 => 
            array (
                'id' => 2447,
                'name' => 'Somogyfajsz',
                'county_id' => 11,
            ),
            447 => 
            array (
                'id' => 2448,
                'name' => 'Somogygeszti',
                'county_id' => 3,
            ),
            448 => 
            array (
                'id' => 2449,
                'name' => 'Somogyhárságy',
                'county_id' => 3,
            ),
            449 => 
            array (
                'id' => 2450,
                'name' => 'Somogyhatvan',
                'county_id' => 11,
            ),
            450 => 
            array (
                'id' => 2451,
                'name' => 'Somogyjád',
                'county_id' => 11,
            ),
            451 => 
            array (
                'id' => 2452,
                'name' => 'Somogymeggyes',
                'county_id' => 11,
            ),
            452 => 
            array (
                'id' => 2453,
                'name' => 'Somogysámson',
                'county_id' => 11,
            ),
            453 => 
            array (
                'id' => 2454,
                'name' => 'Somogysárd',
                'county_id' => 11,
            ),
            454 => 
            array (
                'id' => 2455,
                'name' => 'Somogysimonyi',
                'county_id' => 11,
            ),
            455 => 
            array (
                'id' => 2456,
                'name' => 'Somogyszentpál',
                'county_id' => 11,
            ),
            456 => 
            array (
                'id' => 2457,
                'name' => 'Somogyszil',
                'county_id' => 11,
            ),
            457 => 
            array (
                'id' => 2458,
                'name' => 'Somogyszob',
                'county_id' => 11,
            ),
            458 => 
            array (
                'id' => 2459,
                'name' => 'Somogytúr',
                'county_id' => 11,
            ),
            459 => 
            array (
                'id' => 2460,
                'name' => 'Somogyudvarhely',
                'county_id' => 11,
            ),
            460 => 
            array (
                'id' => 2461,
                'name' => 'Somogyvámos',
                'county_id' => 11,
            ),
            461 => 
            array (
                'id' => 2462,
                'name' => 'Somogyvár',
                'county_id' => 3,
            ),
            462 => 
            array (
                'id' => 2463,
                'name' => 'Somogyviszló',
                'county_id' => 11,
            ),
            463 => 
            array (
                'id' => 2464,
                'name' => 'Somogyzsitfa',
                'county_id' => 13,
            ),
            464 => 
            array (
                'id' => 2465,
                'name' => 'Sonkád',
                'county_id' => 1,
            ),
            465 => 
            array (
                'id' => 2466,
                'name' => 'Soponya',
                'county_id' => 6,
            ),
            466 => 
            array (
                'id' => 2467,
                'name' => 'Sopron',
                'county_id' => 6,
            ),
            467 => 
            array (
                'id' => 2468,
                'name' => 'Sopronhorpács',
                'county_id' => 6,
            ),
            468 => 
            array (
                'id' => 2469,
                'name' => 'Sopronkövesd',
                'county_id' => 6,
            ),
            469 => 
            array (
                'id' => 2470,
                'name' => 'Sopronnémeti',
                'county_id' => 10,
            ),
            470 => 
            array (
                'id' => 2471,
                'name' => 'Söpte',
                'county_id' => 10,
            ),
            471 => 
            array (
                'id' => 2472,
                'name' => 'Söréd',
                'county_id' => 15,
            ),
            472 => 
            array (
                'id' => 2473,
                'name' => 'Sorkifalud',
                'county_id' => 10,
            ),
            473 => 
            array (
                'id' => 2474,
                'name' => 'Sorkikápolna',
                'county_id' => 19,
            ),
            474 => 
            array (
                'id' => 2475,
                'name' => 'Sormás',
                'county_id' => 7,
            ),
            475 => 
            array (
                'id' => 2476,
                'name' => 'Sorokpolány',
                'county_id' => 5,
            ),
            476 => 
            array (
                'id' => 2477,
                'name' => 'Sóshartyán',
                'county_id' => 3,
            ),
            477 => 
            array (
                'id' => 2478,
                'name' => 'Sóskút',
                'county_id' => 10,
            ),
            478 => 
            array (
                'id' => 2479,
                'name' => 'Sóstófalva',
                'county_id' => 15,
            ),
            479 => 
            array (
                'id' => 2480,
                'name' => 'Sósvertike',
                'county_id' => 10,
            ),
            480 => 
            array (
                'id' => 2481,
                'name' => 'Sótony',
                'county_id' => 1,
            ),
            481 => 
            array (
                'id' => 2482,
                'name' => 'Sukoró',
                'county_id' => 1,
            ),
            482 => 
            array (
                'id' => 2483,
                'name' => 'Sükösd',
                'county_id' => 3,
            ),
            483 => 
            array (
                'id' => 2484,
                'name' => 'Sülysáp',
                'county_id' => 9,
            ),
            484 => 
            array (
                'id' => 2485,
                'name' => 'Sülysáp',
                'county_id' => 15,
            ),
            485 => 
            array (
                'id' => 2486,
                'name' => 'Sümeg',
                'county_id' => 12,
            ),
            486 => 
            array (
                'id' => 2487,
                'name' => 'Sümegcsehi',
                'county_id' => 7,
            ),
            487 => 
            array (
                'id' => 2488,
                'name' => 'Sümegprága',
                'county_id' => 7,
            ),
            488 => 
            array (
                'id' => 2489,
                'name' => 'Sumony',
                'county_id' => 8,
            ),
            489 => 
            array (
                'id' => 2490,
                'name' => 'Súr',
                'county_id' => 15,
            ),
            490 => 
            array (
                'id' => 2491,
                'name' => 'Surd',
                'county_id' => 8,
            ),
            491 => 
            array (
                'id' => 2492,
                'name' => 'Süttő',
                'county_id' => 9,
            ),
            492 => 
            array (
                'id' => 2493,
                'name' => 'Szabadbattyán',
                'county_id' => 1,
            ),
            493 => 
            array (
                'id' => 2494,
                'name' => 'Szabadegyháza',
                'county_id' => 1,
            ),
            494 => 
            array (
                'id' => 2495,
                'name' => 'Szabadhidvég',
                'county_id' => 1,
            ),
            495 => 
            array (
                'id' => 2496,
                'name' => 'Szabadi',
                'county_id' => 11,
            ),
            496 => 
            array (
                'id' => 2497,
                'name' => 'Szabadkígyós',
                'county_id' => 16,
            ),
            497 => 
            array (
                'id' => 2498,
                'name' => 'Szabadszállás',
                'county_id' => 12,
            ),
            498 => 
            array (
                'id' => 2499,
                'name' => 'Szabadszentkirály',
                'county_id' => 3,
            ),
            499 => 
            array (
                'id' => 2500,
                'name' => 'Szabás',
                'county_id' => 11,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'name' => 'Szabolcs',
                'county_id' => 13,
            ),
            1 => 
            array (
                'id' => 2502,
                'name' => 'Szabolcsbáka',
                'county_id' => 13,
            ),
            2 => 
            array (
                'id' => 2503,
                'name' => 'Szabolcsveresmart',
                'county_id' => 13,
            ),
            3 => 
            array (
                'id' => 2504,
                'name' => 'Szada',
                'county_id' => 7,
            ),
            4 => 
            array (
                'id' => 2505,
                'name' => 'Szágy',
                'county_id' => 3,
            ),
            5 => 
            array (
                'id' => 2506,
                'name' => 'Szajk',
                'county_id' => 3,
            ),
            6 => 
            array (
                'id' => 2507,
                'name' => 'Szajla',
                'county_id' => 4,
            ),
            7 => 
            array (
                'id' => 2508,
                'name' => 'Szajol',
                'county_id' => 2,
            ),
            8 => 
            array (
                'id' => 2509,
                'name' => 'Szakácsi',
                'county_id' => 5,
            ),
            9 => 
            array (
                'id' => 2510,
                'name' => 'Szakadát',
                'county_id' => 18,
            ),
            10 => 
            array (
                'id' => 2511,
                'name' => 'Szakáld',
                'county_id' => 5,
            ),
            11 => 
            array (
                'id' => 2512,
                'name' => 'Szakály',
                'county_id' => 18,
            ),
            12 => 
            array (
                'id' => 2513,
                'name' => 'Szakcs',
                'county_id' => 18,
            ),
            13 => 
            array (
                'id' => 2514,
                'name' => 'Szakmár',
                'county_id' => 12,
            ),
            14 => 
            array (
                'id' => 2515,
                'name' => 'Szaknyér',
                'county_id' => 10,
            ),
            15 => 
            array (
                'id' => 2516,
                'name' => 'Szakoly',
                'county_id' => 13,
            ),
            16 => 
            array (
                'id' => 2517,
                'name' => 'Szakony',
                'county_id' => 6,
            ),
            17 => 
            array (
                'id' => 2518,
                'name' => 'Szakonyfalu',
                'county_id' => 10,
            ),
            18 => 
            array (
                'id' => 2519,
                'name' => 'Szákszend',
                'county_id' => 9,
            ),
            19 => 
            array (
                'id' => 2520,
                'name' => 'Szalafő',
                'county_id' => 10,
            ),
            20 => 
            array (
                'id' => 2521,
                'name' => 'Szalánta',
                'county_id' => 3,
            ),
            21 => 
            array (
                'id' => 2522,
                'name' => 'Szalapa',
                'county_id' => 15,
            ),
            22 => 
            array (
                'id' => 2523,
                'name' => 'Szalaszend',
                'county_id' => 5,
            ),
            23 => 
            array (
                'id' => 2524,
                'name' => 'Szalatnak',
                'county_id' => 3,
            ),
            24 => 
            array (
                'id' => 2525,
                'name' => 'Szálka',
                'county_id' => 18,
            ),
            25 => 
            array (
                'id' => 2526,
                'name' => 'Szalkszentmárton',
                'county_id' => 12,
            ),
            26 => 
            array (
                'id' => 2527,
                'name' => 'Szalmatercs',
                'county_id' => 19,
            ),
            27 => 
            array (
                'id' => 2528,
                'name' => 'Szalonna',
                'county_id' => 5,
            ),
            28 => 
            array (
                'id' => 2529,
                'name' => 'Szamosangyalos',
                'county_id' => 13,
            ),
            29 => 
            array (
                'id' => 2530,
                'name' => 'Szamosbecs',
                'county_id' => 13,
            ),
            30 => 
            array (
                'id' => 2531,
                'name' => 'Szamoskér',
                'county_id' => 13,
            ),
            31 => 
            array (
                'id' => 2532,
                'name' => 'Szamossályi',
                'county_id' => 13,
            ),
            32 => 
            array (
                'id' => 2533,
                'name' => 'Szamosszeg',
                'county_id' => 13,
            ),
            33 => 
            array (
                'id' => 2534,
                'name' => 'Szamostatárfalva',
                'county_id' => 13,
            ),
            34 => 
            array (
                'id' => 2535,
                'name' => 'Szamosújlak',
                'county_id' => 13,
            ),
            35 => 
            array (
                'id' => 2536,
                'name' => 'Szanda',
                'county_id' => 19,
            ),
            36 => 
            array (
                'id' => 2537,
                'name' => 'Szank',
                'county_id' => 12,
            ),
            37 => 
            array (
                'id' => 2538,
                'name' => 'Szántód',
                'county_id' => 11,
            ),
            38 => 
            array (
                'id' => 2539,
                'name' => 'Szany',
                'county_id' => 6,
            ),
            39 => 
            array (
                'id' => 2540,
                'name' => 'Szápár',
                'county_id' => 8,
            ),
            40 => 
            array (
                'id' => 2541,
                'name' => 'Szaporca',
                'county_id' => 3,
            ),
            41 => 
            array (
                'id' => 2542,
                'name' => 'Szár',
                'county_id' => 1,
            ),
            42 => 
            array (
                'id' => 2543,
                'name' => 'Szárász',
                'county_id' => 3,
            ),
            43 => 
            array (
                'id' => 2544,
                'name' => 'Szárazd',
                'county_id' => 18,
            ),
            44 => 
            array (
                'id' => 2545,
                'name' => 'Szárföld',
                'county_id' => 6,
            ),
            45 => 
            array (
                'id' => 2546,
                'name' => 'Szárliget',
                'county_id' => 9,
            ),
            46 => 
            array (
                'id' => 2547,
                'name' => 'Szarvas',
                'county_id' => 16,
            ),
            47 => 
            array (
                'id' => 2548,
                'name' => 'Szarvasgede',
                'county_id' => 19,
            ),
            48 => 
            array (
                'id' => 2549,
                'name' => 'Szarvaskend',
                'county_id' => 10,
            ),
            49 => 
            array (
                'id' => 2550,
                'name' => 'Szászberek',
                'county_id' => 2,
            ),
            50 => 
            array (
                'id' => 2551,
                'name' => 'Szászfa',
                'county_id' => 5,
            ),
            51 => 
            array (
                'id' => 2552,
                'name' => 'Szászvár',
                'county_id' => 3,
            ),
            52 => 
            array (
                'id' => 2553,
                'name' => 'Szatmárcseke',
                'county_id' => 13,
            ),
            53 => 
            array (
                'id' => 2554,
                'name' => 'Szátok',
                'county_id' => 19,
            ),
            54 => 
            array (
                'id' => 2555,
                'name' => 'Szatta',
                'county_id' => 10,
            ),
            55 => 
            array (
                'id' => 2556,
                'name' => 'Szatymaz',
                'county_id' => 14,
            ),
            56 => 
            array (
                'id' => 2557,
                'name' => 'Szava',
                'county_id' => 3,
            ),
            57 => 
            array (
                'id' => 2558,
                'name' => 'Százhalombatta',
                'county_id' => 7,
            ),
            58 => 
            array (
                'id' => 2559,
                'name' => 'Szebény',
                'county_id' => 3,
            ),
            59 => 
            array (
                'id' => 2560,
                'name' => 'Szécsénke',
                'county_id' => 19,
            ),
            60 => 
            array (
                'id' => 2561,
                'name' => 'Szécsény',
                'county_id' => 19,
            ),
            61 => 
            array (
                'id' => 2562,
                'name' => 'Szécsényfelfalu',
                'county_id' => 19,
            ),
            62 => 
            array (
                'id' => 2563,
                'name' => 'Szécsisziget',
                'county_id' => 15,
            ),
            63 => 
            array (
                'id' => 2564,
                'name' => 'Szederkény',
                'county_id' => 3,
            ),
            64 => 
            array (
                'id' => 2565,
                'name' => 'Szedres',
                'county_id' => 18,
            ),
            65 => 
            array (
                'id' => 2566,
                'name' => 'Szeged',
                'county_id' => 14,
            ),
            66 => 
            array (
                'id' => 2567,
                'name' => 'Szegerdő',
                'county_id' => 11,
            ),
            67 => 
            array (
                'id' => 2568,
                'name' => 'Szeghalom',
                'county_id' => 16,
            ),
            68 => 
            array (
                'id' => 2569,
                'name' => 'Szegi',
                'county_id' => 5,
            ),
            69 => 
            array (
                'id' => 2570,
                'name' => 'Szegilong',
                'county_id' => 5,
            ),
            70 => 
            array (
                'id' => 2571,
                'name' => 'Szegvár',
                'county_id' => 14,
            ),
            71 => 
            array (
                'id' => 2572,
                'name' => 'Székely',
                'county_id' => 13,
            ),
            72 => 
            array (
                'id' => 2573,
                'name' => 'Székelyszabar',
                'county_id' => 3,
            ),
            73 => 
            array (
                'id' => 2574,
                'name' => 'Székesfehérvár',
                'county_id' => 1,
            ),
            74 => 
            array (
                'id' => 2575,
                'name' => 'Székkutas',
                'county_id' => 14,
            ),
            75 => 
            array (
                'id' => 2576,
                'name' => 'Szekszárd',
                'county_id' => 18,
            ),
            76 => 
            array (
                'id' => 2577,
                'name' => 'Szeleste',
                'county_id' => 10,
            ),
            77 => 
            array (
                'id' => 2578,
                'name' => 'Szelevény',
                'county_id' => 2,
            ),
            78 => 
            array (
                'id' => 2579,
                'name' => 'Szellő',
                'county_id' => 3,
            ),
            79 => 
            array (
                'id' => 2580,
                'name' => 'Szemely',
                'county_id' => 3,
            ),
            80 => 
            array (
                'id' => 2581,
                'name' => 'Szemenye',
                'county_id' => 10,
            ),
            81 => 
            array (
                'id' => 2582,
                'name' => 'Szemere',
                'county_id' => 5,
            ),
            82 => 
            array (
                'id' => 2583,
                'name' => 'Szendehely',
                'county_id' => 19,
            ),
            83 => 
            array (
                'id' => 2584,
                'name' => 'Szendrő',
                'county_id' => 5,
            ),
            84 => 
            array (
                'id' => 2585,
                'name' => 'Szendrőlád',
                'county_id' => 5,
            ),
            85 => 
            array (
                'id' => 2586,
                'name' => 'Szenna',
                'county_id' => 11,
            ),
            86 => 
            array (
                'id' => 2587,
                'name' => 'Szenta',
                'county_id' => 11,
            ),
            87 => 
            array (
                'id' => 2588,
                'name' => 'Szentantalfa',
                'county_id' => 8,
            ),
            88 => 
            array (
                'id' => 2589,
                'name' => 'Szentbalázs',
                'county_id' => 11,
            ),
            89 => 
            array (
                'id' => 2590,
                'name' => 'Szentbékkálla',
                'county_id' => 8,
            ),
            90 => 
            array (
                'id' => 2591,
                'name' => 'Szentborbás',
                'county_id' => 11,
            ),
            91 => 
            array (
                'id' => 2592,
                'name' => 'Szentdénes',
                'county_id' => 3,
            ),
            92 => 
            array (
                'id' => 2593,
                'name' => 'Szentdomonkos',
                'county_id' => 4,
            ),
            93 => 
            array (
                'id' => 2594,
                'name' => 'Szente',
                'county_id' => 19,
            ),
            94 => 
            array (
                'id' => 2595,
                'name' => 'Szentegát',
                'county_id' => 3,
            ),
            95 => 
            array (
                'id' => 2596,
                'name' => 'Szentendre',
                'county_id' => 7,
            ),
            96 => 
            array (
                'id' => 2597,
                'name' => 'Szentes',
                'county_id' => 14,
            ),
            97 => 
            array (
                'id' => 2598,
                'name' => 'Szentgál',
                'county_id' => 8,
            ),
            98 => 
            array (
                'id' => 2599,
                'name' => 'Szentgáloskér',
                'county_id' => 11,
            ),
            99 => 
            array (
                'id' => 2600,
                'name' => 'Szentgotthárd',
                'county_id' => 10,
            ),
            100 => 
            array (
                'id' => 2601,
                'name' => 'Szentgyörgyvár',
                'county_id' => 15,
            ),
            101 => 
            array (
                'id' => 2602,
                'name' => 'Szentgyörgyvölgy',
                'county_id' => 15,
            ),
            102 => 
            array (
                'id' => 2603,
                'name' => 'Szentimrefalva',
                'county_id' => 8,
            ),
            103 => 
            array (
                'id' => 2604,
                'name' => 'Szentistván',
                'county_id' => 5,
            ),
            104 => 
            array (
                'id' => 2605,
                'name' => 'Szentistvánbaksa',
                'county_id' => 5,
            ),
            105 => 
            array (
                'id' => 2606,
                'name' => 'Szentjakabfa',
                'county_id' => 8,
            ),
            106 => 
            array (
                'id' => 2607,
                'name' => 'Szentkatalin',
                'county_id' => 3,
            ),
            107 => 
            array (
                'id' => 2608,
                'name' => 'Szentkirály',
                'county_id' => 12,
            ),
            108 => 
            array (
                'id' => 2609,
                'name' => 'Szentkirályszabadja',
                'county_id' => 8,
            ),
            109 => 
            array (
                'id' => 2610,
                'name' => 'Szentkozmadombja',
                'county_id' => 15,
            ),
            110 => 
            array (
                'id' => 2611,
                'name' => 'Szentlászló',
                'county_id' => 3,
            ),
            111 => 
            array (
                'id' => 2612,
                'name' => 'Szentliszló',
                'county_id' => 15,
            ),
            112 => 
            array (
                'id' => 2613,
                'name' => 'Szentlőrinc',
                'county_id' => 3,
            ),
            113 => 
            array (
                'id' => 2614,
                'name' => 'Szentlőrinckáta',
                'county_id' => 7,
            ),
            114 => 
            array (
                'id' => 2615,
                'name' => 'Szentmargitfalva',
                'county_id' => 15,
            ),
            115 => 
            array (
                'id' => 2616,
                'name' => 'Szentmártonkáta',
                'county_id' => 7,
            ),
            116 => 
            array (
                'id' => 2617,
                'name' => 'Szentpéterfa',
                'county_id' => 10,
            ),
            117 => 
            array (
                'id' => 2618,
                'name' => 'Szentpéterfölde',
                'county_id' => 15,
            ),
            118 => 
            array (
                'id' => 2619,
                'name' => 'Szentpéterszeg',
                'county_id' => 17,
            ),
            119 => 
            array (
                'id' => 2620,
                'name' => 'Szentpéterúr',
                'county_id' => 15,
            ),
            120 => 
            array (
                'id' => 2621,
                'name' => 'Szenyér',
                'county_id' => 11,
            ),
            121 => 
            array (
                'id' => 2622,
                'name' => 'Szepetnek',
                'county_id' => 15,
            ),
            122 => 
            array (
                'id' => 2623,
                'name' => 'Szerecseny',
                'county_id' => 6,
            ),
            123 => 
            array (
                'id' => 2624,
                'name' => 'Szeremle',
                'county_id' => 12,
            ),
            124 => 
            array (
                'id' => 2625,
                'name' => 'Szerencs',
                'county_id' => 5,
            ),
            125 => 
            array (
                'id' => 2626,
                'name' => 'Szerep',
                'county_id' => 17,
            ),
            126 => 
            array (
                'id' => 2627,
                'name' => 'Szergény',
                'county_id' => 10,
            ),
            127 => 
            array (
                'id' => 2628,
                'name' => 'Szigetbecse',
                'county_id' => 7,
            ),
            128 => 
            array (
                'id' => 2629,
                'name' => 'Szigetcsép',
                'county_id' => 7,
            ),
            129 => 
            array (
                'id' => 2630,
                'name' => 'Szigethalom',
                'county_id' => 7,
            ),
            130 => 
            array (
                'id' => 2631,
                'name' => 'Szigetmonostor',
                'county_id' => 7,
            ),
            131 => 
            array (
                'id' => 2632,
                'name' => 'Szigetszentmárton',
                'county_id' => 7,
            ),
            132 => 
            array (
                'id' => 2633,
                'name' => 'Szigetszentmiklós',
                'county_id' => 7,
            ),
            133 => 
            array (
                'id' => 2634,
                'name' => 'Szigetújfalu',
                'county_id' => 7,
            ),
            134 => 
            array (
                'id' => 2635,
                'name' => 'Szigetvár',
                'county_id' => 3,
            ),
            135 => 
            array (
                'id' => 2636,
                'name' => 'Szigliget',
                'county_id' => 8,
            ),
            136 => 
            array (
                'id' => 2637,
                'name' => 'Szihalom',
                'county_id' => 4,
            ),
            137 => 
            array (
                'id' => 2638,
                'name' => 'Szijártóháza',
                'county_id' => 15,
            ),
            138 => 
            array (
                'id' => 2639,
                'name' => 'Szikszó',
                'county_id' => 5,
            ),
            139 => 
            array (
                'id' => 2640,
                'name' => 'Szil',
                'county_id' => 6,
            ),
            140 => 
            array (
                'id' => 2641,
                'name' => 'Szilágy',
                'county_id' => 3,
            ),
            141 => 
            array (
                'id' => 2642,
                'name' => 'Szilaspogony',
                'county_id' => 19,
            ),
            142 => 
            array (
                'id' => 2643,
                'name' => 'Szilsárkány',
                'county_id' => 6,
            ),
            143 => 
            array (
                'id' => 2644,
                'name' => 'Szilvágy',
                'county_id' => 15,
            ),
            144 => 
            array (
                'id' => 2645,
                'name' => 'Szilvás',
                'county_id' => 3,
            ),
            145 => 
            array (
                'id' => 2646,
                'name' => 'Szilvásszentmárton',
                'county_id' => 4,
            ),
            146 => 
            array (
                'id' => 2647,
                'name' => 'Szilvásvárad',
                'county_id' => 11,
            ),
            147 => 
            array (
                'id' => 2648,
                'name' => 'Szin',
                'county_id' => 5,
            ),
            148 => 
            array (
                'id' => 2649,
                'name' => 'Szinpetri',
                'county_id' => 5,
            ),
            149 => 
            array (
                'id' => 2650,
                'name' => 'Szirák',
                'county_id' => 19,
            ),
            150 => 
            array (
                'id' => 2651,
                'name' => 'Szirmabesenyő',
                'county_id' => 5,
            ),
            151 => 
            array (
                'id' => 2652,
                'name' => 'Szob',
                'county_id' => 7,
            ),
            152 => 
            array (
                'id' => 2653,
                'name' => 'Szőc',
                'county_id' => 7,
            ),
            153 => 
            array (
                'id' => 2654,
                'name' => 'Szőce',
                'county_id' => 11,
            ),
            154 => 
            array (
                'id' => 2655,
                'name' => 'Sződ',
                'county_id' => 2,
            ),
            155 => 
            array (
                'id' => 2656,
                'name' => 'Sződliget',
                'county_id' => 2,
            ),
            156 => 
            array (
                'id' => 2657,
                'name' => 'Szögliget',
                'county_id' => 10,
            ),
            157 => 
            array (
                'id' => 2658,
                'name' => 'Szőke',
                'county_id' => 10,
            ),
            158 => 
            array (
                'id' => 2659,
                'name' => 'Szőkéd',
                'county_id' => 10,
            ),
            159 => 
            array (
                'id' => 2660,
                'name' => 'Szőkedencs',
                'county_id' => 9,
            ),
            160 => 
            array (
                'id' => 2661,
                'name' => 'Szokolya',
                'county_id' => 5,
            ),
            161 => 
            array (
                'id' => 2662,
                'name' => 'Szólád',
                'county_id' => 9,
            ),
            162 => 
            array (
                'id' => 2663,
                'name' => 'Szolnok',
                'county_id' => 11,
            ),
            163 => 
            array (
                'id' => 2664,
                'name' => 'Szolnok',
                'county_id' => 8,
            ),
            164 => 
            array (
                'id' => 2665,
                'name' => 'Szőlősardó',
                'county_id' => 10,
            ),
            165 => 
            array (
                'id' => 2666,
                'name' => 'Szőlősgyörök',
                'county_id' => 7,
            ),
            166 => 
            array (
                'id' => 2667,
                'name' => 'Szombathely',
                'county_id' => 7,
            ),
            167 => 
            array (
                'id' => 2668,
                'name' => 'Szombathely',
                'county_id' => 5,
            ),
            168 => 
            array (
                'id' => 2669,
                'name' => 'Szombathely',
                'county_id' => 3,
            ),
            169 => 
            array (
                'id' => 2670,
                'name' => 'Szomód',
                'county_id' => 3,
            ),
            170 => 
            array (
                'id' => 2671,
                'name' => 'Szomolya',
                'county_id' => 11,
            ),
            171 => 
            array (
                'id' => 2672,
                'name' => 'Szomor',
                'county_id' => 5,
            ),
            172 => 
            array (
                'id' => 2673,
                'name' => 'Szörény',
                'county_id' => 11,
            ),
            173 => 
            array (
                'id' => 2674,
                'name' => 'Szorosad',
                'county_id' => 3,
            ),
            174 => 
            array (
                'id' => 2675,
                'name' => 'Szúcs',
                'county_id' => 4,
            ),
            175 => 
            array (
                'id' => 2676,
                'name' => 'Szűcsi',
                'county_id' => 19,
            ),
            176 => 
            array (
                'id' => 2677,
                'name' => 'Szügy',
                'county_id' => 5,
            ),
            177 => 
            array (
                'id' => 2678,
                'name' => 'Szuha',
                'county_id' => 5,
            ),
            178 => 
            array (
                'id' => 2679,
                'name' => 'Szuhafő',
                'county_id' => 5,
            ),
            179 => 
            array (
                'id' => 2680,
                'name' => 'Szuhakálló',
                'county_id' => 3,
            ),
            180 => 
            array (
                'id' => 2681,
                'name' => 'Szuhogy',
                'county_id' => 11,
            ),
            181 => 
            array (
                'id' => 2682,
                'name' => 'Szulimán',
                'county_id' => 19,
            ),
            182 => 
            array (
                'id' => 2683,
                'name' => 'Szulok',
                'county_id' => 4,
            ),
            183 => 
            array (
                'id' => 2684,
                'name' => 'Szűr',
                'county_id' => 19,
            ),
            184 => 
            array (
                'id' => 2685,
                'name' => 'Szurdokpüspöki',
                'county_id' => 3,
            ),
            185 => 
            array (
                'id' => 2686,
                'name' => 'Tab',
                'county_id' => 11,
            ),
            186 => 
            array (
                'id' => 2687,
                'name' => 'Tabajd',
                'county_id' => 1,
            ),
            187 => 
            array (
                'id' => 2688,
                'name' => 'Tabdi',
                'county_id' => 12,
            ),
            188 => 
            array (
                'id' => 2689,
                'name' => 'Táborfalva',
                'county_id' => 7,
            ),
            189 => 
            array (
                'id' => 2690,
                'name' => 'Tác',
                'county_id' => 1,
            ),
            190 => 
            array (
                'id' => 2691,
                'name' => 'Tagyon',
                'county_id' => 8,
            ),
            191 => 
            array (
                'id' => 2692,
                'name' => 'Tahitótfalu',
                'county_id' => 7,
            ),
            192 => 
            array (
                'id' => 2693,
                'name' => 'Takácsi',
                'county_id' => 8,
            ),
            193 => 
            array (
                'id' => 2694,
                'name' => 'Tákos',
                'county_id' => 13,
            ),
            194 => 
            array (
                'id' => 2695,
                'name' => 'Taksony',
                'county_id' => 7,
            ),
            195 => 
            array (
                'id' => 2696,
                'name' => 'Taktabáj',
                'county_id' => 5,
            ),
            196 => 
            array (
                'id' => 2697,
                'name' => 'Taktaharkány',
                'county_id' => 5,
            ),
            197 => 
            array (
                'id' => 2698,
                'name' => 'Taktakenéz',
                'county_id' => 5,
            ),
            198 => 
            array (
                'id' => 2699,
                'name' => 'Taktaszada',
                'county_id' => 5,
            ),
            199 => 
            array (
                'id' => 2700,
                'name' => 'Taliándörögd',
                'county_id' => 8,
            ),
            200 => 
            array (
                'id' => 2701,
                'name' => 'Tállya',
                'county_id' => 5,
            ),
            201 => 
            array (
                'id' => 2702,
                'name' => 'Tamási',
                'county_id' => 18,
            ),
            202 => 
            array (
                'id' => 2703,
                'name' => 'Tanakajd',
                'county_id' => 10,
            ),
            203 => 
            array (
                'id' => 2704,
                'name' => 'Táp',
                'county_id' => 6,
            ),
            204 => 
            array (
                'id' => 2705,
                'name' => 'Tápióbicske',
                'county_id' => 7,
            ),
            205 => 
            array (
                'id' => 2706,
                'name' => 'Tápiógyörgye',
                'county_id' => 7,
            ),
            206 => 
            array (
                'id' => 2707,
                'name' => 'Tápióság',
                'county_id' => 7,
            ),
            207 => 
            array (
                'id' => 2708,
                'name' => 'Tápiószecső',
                'county_id' => 7,
            ),
            208 => 
            array (
                'id' => 2709,
                'name' => 'Tápiószele',
                'county_id' => 7,
            ),
            209 => 
            array (
                'id' => 2710,
                'name' => 'Tápiószentmárton',
                'county_id' => 7,
            ),
            210 => 
            array (
                'id' => 2711,
                'name' => 'Tápiószőlős',
                'county_id' => 7,
            ),
            211 => 
            array (
                'id' => 2712,
                'name' => 'Táplánszentkereszt',
                'county_id' => 10,
            ),
            212 => 
            array (
                'id' => 2713,
                'name' => 'Tapolca',
                'county_id' => 8,
            ),
            213 => 
            array (
                'id' => 2714,
                'name' => 'Tapsony',
                'county_id' => 11,
            ),
            214 => 
            array (
                'id' => 2715,
                'name' => 'Tápszentmiklós',
                'county_id' => 6,
            ),
            215 => 
            array (
                'id' => 2716,
                'name' => 'Tar',
                'county_id' => 19,
            ),
            216 => 
            array (
                'id' => 2717,
                'name' => 'Tarany',
                'county_id' => 11,
            ),
            217 => 
            array (
                'id' => 2718,
                'name' => 'Tarcal',
                'county_id' => 5,
            ),
            218 => 
            array (
                'id' => 2719,
                'name' => 'Tard',
                'county_id' => 5,
            ),
            219 => 
            array (
                'id' => 2720,
                'name' => 'Tardona',
                'county_id' => 5,
            ),
            220 => 
            array (
                'id' => 2721,
                'name' => 'Tardos',
                'county_id' => 9,
            ),
            221 => 
            array (
                'id' => 2722,
                'name' => 'Tarhos',
                'county_id' => 16,
            ),
            222 => 
            array (
                'id' => 2723,
                'name' => 'Tarján',
                'county_id' => 9,
            ),
            223 => 
            array (
                'id' => 2724,
                'name' => 'Tarjánpuszta',
                'county_id' => 6,
            ),
            224 => 
            array (
                'id' => 2725,
                'name' => 'Tárkány',
                'county_id' => 9,
            ),
            225 => 
            array (
                'id' => 2726,
                'name' => 'Tarnabod',
                'county_id' => 4,
            ),
            226 => 
            array (
                'id' => 2727,
                'name' => 'Tarnalelesz',
                'county_id' => 4,
            ),
            227 => 
            array (
                'id' => 2728,
                'name' => 'Tarnaméra',
                'county_id' => 4,
            ),
            228 => 
            array (
                'id' => 2729,
                'name' => 'Tarnaörs',
                'county_id' => 4,
            ),
            229 => 
            array (
                'id' => 2730,
                'name' => 'Tarnaszentmária',
                'county_id' => 4,
            ),
            230 => 
            array (
                'id' => 2731,
                'name' => 'Tarnaszentmiklós',
                'county_id' => 4,
            ),
            231 => 
            array (
                'id' => 2732,
                'name' => 'Tarnazsadány',
                'county_id' => 4,
            ),
            232 => 
            array (
                'id' => 2733,
                'name' => 'Tárnok',
                'county_id' => 7,
            ),
            233 => 
            array (
                'id' => 2734,
                'name' => 'Tárnokréti',
                'county_id' => 6,
            ),
            234 => 
            array (
                'id' => 2735,
                'name' => 'Tarpa',
                'county_id' => 13,
            ),
            235 => 
            array (
                'id' => 2736,
                'name' => 'Tarrós',
                'county_id' => 3,
            ),
            236 => 
            array (
                'id' => 2737,
                'name' => 'Táska',
                'county_id' => 11,
            ),
            237 => 
            array (
                'id' => 2738,
                'name' => 'Tass',
                'county_id' => 12,
            ),
            238 => 
            array (
                'id' => 2739,
                'name' => 'Taszár',
                'county_id' => 11,
            ),
            239 => 
            array (
                'id' => 2740,
                'name' => 'Tát',
                'county_id' => 9,
            ),
            240 => 
            array (
                'id' => 2741,
                'name' => 'Tata',
                'county_id' => 9,
            ),
            241 => 
            array (
                'id' => 2742,
                'name' => 'Tatabánya',
                'county_id' => 9,
            ),
            242 => 
            array (
                'id' => 2743,
                'name' => 'Tataháza',
                'county_id' => 12,
            ),
            243 => 
            array (
                'id' => 2744,
                'name' => 'Tatárszentgyörgy',
                'county_id' => 7,
            ),
            244 => 
            array (
                'id' => 2745,
                'name' => 'Tázlár',
                'county_id' => 12,
            ),
            245 => 
            array (
                'id' => 2746,
                'name' => 'Téglás',
                'county_id' => 17,
            ),
            246 => 
            array (
                'id' => 2747,
                'name' => 'Tékes',
                'county_id' => 3,
            ),
            247 => 
            array (
                'id' => 2748,
                'name' => 'Teklafalu',
                'county_id' => 3,
            ),
            248 => 
            array (
                'id' => 2749,
                'name' => 'Telekes',
                'county_id' => 10,
            ),
            249 => 
            array (
                'id' => 2750,
                'name' => 'Telekgerendás',
                'county_id' => 16,
            ),
            250 => 
            array (
                'id' => 2751,
                'name' => 'Teleki',
                'county_id' => 11,
            ),
            251 => 
            array (
                'id' => 2752,
                'name' => 'Telki',
                'county_id' => 7,
            ),
            252 => 
            array (
                'id' => 2753,
                'name' => 'Telkibánya',
                'county_id' => 5,
            ),
            253 => 
            array (
                'id' => 2754,
                'name' => 'Tengelic',
                'county_id' => 18,
            ),
            254 => 
            array (
                'id' => 2755,
                'name' => 'Tengeri',
                'county_id' => 3,
            ),
            255 => 
            array (
                'id' => 2756,
                'name' => 'Tengőd',
                'county_id' => 11,
            ),
            256 => 
            array (
                'id' => 2757,
                'name' => 'Tenk',
                'county_id' => 4,
            ),
            257 => 
            array (
                'id' => 2758,
                'name' => 'Tényő',
                'county_id' => 6,
            ),
            258 => 
            array (
                'id' => 2759,
                'name' => 'Tépe',
                'county_id' => 17,
            ),
            259 => 
            array (
                'id' => 2760,
                'name' => 'Terem',
                'county_id' => 13,
            ),
            260 => 
            array (
                'id' => 2761,
                'name' => 'Terény',
                'county_id' => 19,
            ),
            261 => 
            array (
                'id' => 2762,
                'name' => 'Tereske',
                'county_id' => 19,
            ),
            262 => 
            array (
                'id' => 2763,
                'name' => 'Teresztenye',
                'county_id' => 5,
            ),
            263 => 
            array (
                'id' => 2764,
                'name' => 'Terpes',
                'county_id' => 4,
            ),
            264 => 
            array (
                'id' => 2765,
                'name' => 'Tés',
                'county_id' => 8,
            ),
            265 => 
            array (
                'id' => 2766,
                'name' => 'Tésa',
                'county_id' => 7,
            ),
            266 => 
            array (
                'id' => 2767,
                'name' => 'Tésenfa',
                'county_id' => 3,
            ),
            267 => 
            array (
                'id' => 2768,
                'name' => 'Téseny',
                'county_id' => 3,
            ),
            268 => 
            array (
                'id' => 2769,
                'name' => 'Teskánd',
                'county_id' => 15,
            ),
            269 => 
            array (
                'id' => 2770,
                'name' => 'Tét',
                'county_id' => 6,
            ),
            270 => 
            array (
                'id' => 2771,
                'name' => 'Tetétlen',
                'county_id' => 17,
            ),
            271 => 
            array (
                'id' => 2772,
                'name' => 'Tevel',
                'county_id' => 18,
            ),
            272 => 
            array (
                'id' => 2773,
                'name' => 'Tibolddaróc',
                'county_id' => 5,
            ),
            273 => 
            array (
                'id' => 2774,
                'name' => 'Tiborszállás',
                'county_id' => 13,
            ),
            274 => 
            array (
                'id' => 2775,
                'name' => 'Tihany',
                'county_id' => 8,
            ),
            275 => 
            array (
                'id' => 2776,
                'name' => 'Tikos',
                'county_id' => 11,
            ),
            276 => 
            array (
                'id' => 2777,
                'name' => 'Tilaj',
                'county_id' => 15,
            ),
            277 => 
            array (
                'id' => 2778,
                'name' => 'Timár',
                'county_id' => 13,
            ),
            278 => 
            array (
                'id' => 2779,
                'name' => 'Tinnye',
                'county_id' => 7,
            ),
            279 => 
            array (
                'id' => 2780,
                'name' => 'Tiszaadony',
                'county_id' => 13,
            ),
            280 => 
            array (
                'id' => 2781,
                'name' => 'Tiszaalpár',
                'county_id' => 12,
            ),
            281 => 
            array (
                'id' => 2782,
                'name' => 'Tiszabábolna',
                'county_id' => 5,
            ),
            282 => 
            array (
                'id' => 2783,
                'name' => 'Tiszabecs',
                'county_id' => 13,
            ),
            283 => 
            array (
                'id' => 2784,
                'name' => 'Tiszabercel',
                'county_id' => 13,
            ),
            284 => 
            array (
                'id' => 2785,
                'name' => 'Tiszabezdéd',
                'county_id' => 13,
            ),
            285 => 
            array (
                'id' => 2786,
                'name' => 'Tiszabő',
                'county_id' => 2,
            ),
            286 => 
            array (
                'id' => 2787,
                'name' => 'Tiszabura',
                'county_id' => 2,
            ),
            287 => 
            array (
                'id' => 2788,
                'name' => 'Tiszacsécse',
                'county_id' => 13,
            ),
            288 => 
            array (
                'id' => 2789,
                'name' => 'Tiszacsege',
                'county_id' => 17,
            ),
            289 => 
            array (
                'id' => 2790,
                'name' => 'Tiszacsermely',
                'county_id' => 5,
            ),
            290 => 
            array (
                'id' => 2791,
                'name' => 'Tiszadada',
                'county_id' => 13,
            ),
            291 => 
            array (
                'id' => 2792,
                'name' => 'Tiszaderzs',
                'county_id' => 2,
            ),
            292 => 
            array (
                'id' => 2793,
                'name' => 'Tiszadob',
                'county_id' => 13,
            ),
            293 => 
            array (
                'id' => 2794,
                'name' => 'Tiszadorogma',
                'county_id' => 5,
            ),
            294 => 
            array (
                'id' => 2795,
                'name' => 'Tiszaeszlár',
                'county_id' => 13,
            ),
            295 => 
            array (
                'id' => 2796,
                'name' => 'Tiszaföldvár',
                'county_id' => 2,
            ),
            296 => 
            array (
                'id' => 2797,
                'name' => 'Tiszafüred',
                'county_id' => 2,
            ),
            297 => 
            array (
                'id' => 2798,
                'name' => 'Tiszagyenda',
                'county_id' => 2,
            ),
            298 => 
            array (
                'id' => 2799,
                'name' => 'Tiszagyulaháza',
                'county_id' => 17,
            ),
            299 => 
            array (
                'id' => 2800,
                'name' => 'Tiszaigar',
                'county_id' => 2,
            ),
            300 => 
            array (
                'id' => 2801,
                'name' => 'Tiszainoka',
                'county_id' => 2,
            ),
            301 => 
            array (
                'id' => 2802,
                'name' => 'Tiszajenő',
                'county_id' => 2,
            ),
            302 => 
            array (
                'id' => 2803,
                'name' => 'Tiszakanyár',
                'county_id' => 13,
            ),
            303 => 
            array (
                'id' => 2804,
                'name' => 'Tiszakarád',
                'county_id' => 5,
            ),
            304 => 
            array (
                'id' => 2805,
                'name' => 'Tiszakécske',
                'county_id' => 12,
            ),
            305 => 
            array (
                'id' => 2806,
                'name' => 'Tiszakerecseny',
                'county_id' => 13,
            ),
            306 => 
            array (
                'id' => 2807,
                'name' => 'Tiszakeszi',
                'county_id' => 5,
            ),
            307 => 
            array (
                'id' => 2808,
                'name' => 'Tiszakóród',
                'county_id' => 13,
            ),
            308 => 
            array (
                'id' => 2809,
                'name' => 'Tiszakürt',
                'county_id' => 2,
            ),
            309 => 
            array (
                'id' => 2810,
                'name' => 'Tiszaladány',
                'county_id' => 5,
            ),
            310 => 
            array (
                'id' => 2811,
                'name' => 'Tiszalök',
                'county_id' => 13,
            ),
            311 => 
            array (
                'id' => 2812,
                'name' => 'Tiszalúc',
                'county_id' => 5,
            ),
            312 => 
            array (
                'id' => 2813,
                'name' => 'Tiszamogyorós',
                'county_id' => 13,
            ),
            313 => 
            array (
                'id' => 2814,
                'name' => 'Tiszanagyfalu',
                'county_id' => 13,
            ),
            314 => 
            array (
                'id' => 2815,
                'name' => 'Tiszanána',
                'county_id' => 4,
            ),
            315 => 
            array (
                'id' => 2816,
                'name' => 'Tiszaörs',
                'county_id' => 2,
            ),
            316 => 
            array (
                'id' => 2817,
                'name' => 'Tiszapalkonya',
                'county_id' => 5,
            ),
            317 => 
            array (
                'id' => 2818,
                'name' => 'Tiszapüspöki',
                'county_id' => 2,
            ),
            318 => 
            array (
                'id' => 2819,
                'name' => 'Tiszarád',
                'county_id' => 13,
            ),
            319 => 
            array (
                'id' => 2820,
                'name' => 'Tiszaroff',
                'county_id' => 2,
            ),
            320 => 
            array (
                'id' => 2821,
                'name' => 'Tiszasas',
                'county_id' => 2,
            ),
            321 => 
            array (
                'id' => 2822,
                'name' => 'Tiszasüly',
                'county_id' => 2,
            ),
            322 => 
            array (
                'id' => 2823,
                'name' => 'Tiszaszalka',
                'county_id' => 13,
            ),
            323 => 
            array (
                'id' => 2824,
                'name' => 'Tiszaszentimre',
                'county_id' => 2,
            ),
            324 => 
            array (
                'id' => 2825,
                'name' => 'Tiszaszentmárton',
                'county_id' => 13,
            ),
            325 => 
            array (
                'id' => 2826,
                'name' => 'Tiszasziget',
                'county_id' => 14,
            ),
            326 => 
            array (
                'id' => 2827,
                'name' => 'Tiszatardos',
                'county_id' => 5,
            ),
            327 => 
            array (
                'id' => 2828,
                'name' => 'Tiszatarján',
                'county_id' => 5,
            ),
            328 => 
            array (
                'id' => 2829,
                'name' => 'Tiszatelek',
                'county_id' => 13,
            ),
            329 => 
            array (
                'id' => 2830,
                'name' => 'Tiszatenyő',
                'county_id' => 2,
            ),
            330 => 
            array (
                'id' => 2831,
                'name' => 'Tiszaug',
                'county_id' => 12,
            ),
            331 => 
            array (
                'id' => 2832,
                'name' => 'Tiszaújváros',
                'county_id' => 5,
            ),
            332 => 
            array (
                'id' => 2833,
                'name' => 'Tiszavalk',
                'county_id' => 5,
            ),
            333 => 
            array (
                'id' => 2834,
                'name' => 'Tiszavárkony',
                'county_id' => 2,
            ),
            334 => 
            array (
                'id' => 2835,
                'name' => 'Tiszavasvári',
                'county_id' => 13,
            ),
            335 => 
            array (
                'id' => 2836,
                'name' => 'Tiszavid',
                'county_id' => 13,
            ),
            336 => 
            array (
                'id' => 2837,
                'name' => 'Tisztaberek',
                'county_id' => 13,
            ),
            337 => 
            array (
                'id' => 2838,
                'name' => 'Tivadar',
                'county_id' => 13,
            ),
            338 => 
            array (
                'id' => 2839,
                'name' => 'Tóalmás',
                'county_id' => 7,
            ),
            339 => 
            array (
                'id' => 2840,
                'name' => 'Tófalu',
                'county_id' => 4,
            ),
            340 => 
            array (
                'id' => 2841,
                'name' => 'Tófej',
                'county_id' => 15,
            ),
            341 => 
            array (
                'id' => 2842,
                'name' => 'Tófű',
                'county_id' => 3,
            ),
            342 => 
            array (
                'id' => 2843,
                'name' => 'Tök',
                'county_id' => 5,
            ),
            343 => 
            array (
                'id' => 2844,
                'name' => 'Tokaj',
                'county_id' => 9,
            ),
            344 => 
            array (
                'id' => 2845,
                'name' => 'Tokod',
                'county_id' => 9,
            ),
            345 => 
            array (
                'id' => 2846,
                'name' => 'Tokodaltáró',
                'county_id' => 10,
            ),
            346 => 
            array (
                'id' => 2847,
                'name' => 'Tököl',
                'county_id' => 5,
            ),
            347 => 
            array (
                'id' => 2848,
                'name' => 'Tokorcs',
                'county_id' => 17,
            ),
            348 => 
            array (
                'id' => 2849,
                'name' => 'Tolcsva',
                'county_id' => 19,
            ),
            349 => 
            array (
                'id' => 2850,
                'name' => 'Told',
                'county_id' => 18,
            ),
            350 => 
            array (
                'id' => 2851,
                'name' => 'Tolmács',
                'county_id' => 18,
            ),
            351 => 
            array (
                'id' => 2852,
                'name' => 'Tolna',
                'county_id' => 18,
            ),
            352 => 
            array (
                'id' => 2853,
                'name' => 'Tolna',
                'county_id' => 2,
            ),
            353 => 
            array (
                'id' => 2854,
                'name' => 'Tolnanémedi',
                'county_id' => 5,
            ),
            354 => 
            array (
                'id' => 2855,
                'name' => 'Töltéstava',
                'county_id' => 12,
            ),
            355 => 
            array (
                'id' => 2856,
                'name' => 'Tomajmonostora',
                'county_id' => 10,
            ),
            356 => 
            array (
                'id' => 2857,
                'name' => 'Tomor',
                'county_id' => 1,
            ),
            357 => 
            array (
                'id' => 2858,
                'name' => 'Tömörd',
                'county_id' => 15,
            ),
            358 => 
            array (
                'id' => 2859,
                'name' => 'Tömörkény',
                'county_id' => 3,
            ),
            359 => 
            array (
                'id' => 2860,
                'name' => 'Tompa',
                'county_id' => 10,
            ),
            360 => 
            array (
                'id' => 2861,
                'name' => 'Tompaládony',
                'county_id' => 5,
            ),
            361 => 
            array (
                'id' => 2862,
                'name' => 'Tordas',
                'county_id' => 5,
            ),
            362 => 
            array (
                'id' => 2863,
                'name' => 'Tormafölde',
                'county_id' => 5,
            ),
            363 => 
            array (
                'id' => 2864,
                'name' => 'Tormás',
                'county_id' => 5,
            ),
            364 => 
            array (
                'id' => 2865,
                'name' => 'Tormásliget',
                'county_id' => 5,
            ),
            365 => 
            array (
                'id' => 2866,
                'name' => 'Tornabarakony',
                'county_id' => 15,
            ),
            366 => 
            array (
                'id' => 2867,
                'name' => 'Tornakápolna',
                'county_id' => 5,
            ),
            367 => 
            array (
                'id' => 2868,
                'name' => 'Tornanádaska',
                'county_id' => 13,
            ),
            368 => 
            array (
                'id' => 2869,
                'name' => 'Tornaszentandrás',
                'county_id' => 10,
            ),
            369 => 
            array (
                'id' => 2870,
                'name' => 'Tornaszentjakab',
                'county_id' => 11,
            ),
            370 => 
            array (
                'id' => 2871,
                'name' => 'Tornyiszentmiklós',
                'county_id' => 2,
            ),
            371 => 
            array (
                'id' => 2872,
                'name' => 'Tornyosnémeti',
                'county_id' => 16,
            ),
            372 => 
            array (
                'id' => 2873,
                'name' => 'Tornyospálca',
                'county_id' => 3,
            ),
            373 => 
            array (
                'id' => 2874,
                'name' => 'Törökbálint',
                'county_id' => 15,
            ),
            374 => 
            array (
                'id' => 2875,
                'name' => 'Törökkoppány',
                'county_id' => 15,
            ),
            375 => 
            array (
                'id' => 2876,
                'name' => 'Törökszentmiklós',
                'county_id' => 11,
            ),
            376 => 
            array (
                'id' => 2877,
                'name' => 'Törökszentmiklós',
                'county_id' => 8,
            ),
            377 => 
            array (
                'id' => 2878,
                'name' => 'Torony',
                'county_id' => 7,
            ),
            378 => 
            array (
                'id' => 2879,
                'name' => 'Törtel',
                'county_id' => 7,
            ),
            379 => 
            array (
                'id' => 2880,
                'name' => 'Torvaj',
                'county_id' => 6,
            ),
            380 => 
            array (
                'id' => 2881,
                'name' => 'Tószeg',
                'county_id' => 10,
            ),
            381 => 
            array (
                'id' => 2882,
                'name' => 'Tótkomlós',
                'county_id' => 14,
            ),
            382 => 
            array (
                'id' => 2883,
                'name' => 'Tótszentgyörgy',
                'county_id' => 7,
            ),
            383 => 
            array (
                'id' => 2884,
                'name' => 'Tótszentmárton',
                'county_id' => 11,
            ),
            384 => 
            array (
                'id' => 2885,
                'name' => 'Tótszerdahely',
                'county_id' => 2,
            ),
            385 => 
            array (
                'id' => 2886,
                'name' => 'Töttös',
                'county_id' => 2,
            ),
            386 => 
            array (
                'id' => 2887,
                'name' => 'Tótújfalu',
                'county_id' => 7,
            ),
            387 => 
            array (
                'id' => 2888,
                'name' => 'Tótvázsony',
                'county_id' => 3,
            ),
            388 => 
            array (
                'id' => 2889,
                'name' => 'Trizs',
                'county_id' => 5,
            ),
            389 => 
            array (
                'id' => 2890,
                'name' => 'Tunyogmatolcs',
                'county_id' => 13,
            ),
            390 => 
            array (
                'id' => 2891,
                'name' => 'Tura',
                'county_id' => 7,
            ),
            391 => 
            array (
                'id' => 2892,
                'name' => 'Túristvándi',
                'county_id' => 13,
            ),
            392 => 
            array (
                'id' => 2893,
                'name' => 'Türje',
                'county_id' => 2,
            ),
            393 => 
            array (
                'id' => 2894,
                'name' => 'Túrkeve',
                'county_id' => 3,
            ),
            394 => 
            array (
                'id' => 2895,
                'name' => 'Túrony',
                'county_id' => 13,
            ),
            395 => 
            array (
                'id' => 2896,
                'name' => 'Túrricse',
                'county_id' => 13,
            ),
            396 => 
            array (
                'id' => 2897,
                'name' => 'Tüskevár',
                'county_id' => 15,
            ),
            397 => 
            array (
                'id' => 2898,
                'name' => 'Tuzsér',
                'county_id' => 8,
            ),
            398 => 
            array (
                'id' => 2899,
                'name' => 'Tyukod',
                'county_id' => 13,
            ),
            399 => 
            array (
                'id' => 2900,
                'name' => 'Udvar',
                'county_id' => 3,
            ),
            400 => 
            array (
                'id' => 2901,
                'name' => 'Udvari',
                'county_id' => 18,
            ),
            401 => 
            array (
                'id' => 2902,
                'name' => 'Ugod',
                'county_id' => 8,
            ),
            402 => 
            array (
                'id' => 2903,
                'name' => 'Újbarok',
                'county_id' => 1,
            ),
            403 => 
            array (
                'id' => 2904,
                'name' => 'Újcsanálos',
                'county_id' => 5,
            ),
            404 => 
            array (
                'id' => 2905,
                'name' => 'Újdombrád',
                'county_id' => 13,
            ),
            405 => 
            array (
                'id' => 2906,
                'name' => 'Újfehértó',
                'county_id' => 13,
            ),
            406 => 
            array (
                'id' => 2907,
                'name' => 'Újhartyán',
                'county_id' => 7,
            ),
            407 => 
            array (
                'id' => 2908,
                'name' => 'Újiráz',
                'county_id' => 17,
            ),
            408 => 
            array (
                'id' => 2909,
                'name' => 'Újireg',
                'county_id' => 18,
            ),
            409 => 
            array (
                'id' => 2910,
                'name' => 'Újkenéz',
                'county_id' => 13,
            ),
            410 => 
            array (
                'id' => 2911,
                'name' => 'Újkér',
                'county_id' => 6,
            ),
            411 => 
            array (
                'id' => 2912,
                'name' => 'Újkígyós',
                'county_id' => 16,
            ),
            412 => 
            array (
                'id' => 2913,
                'name' => 'Újlengyel',
                'county_id' => 7,
            ),
            413 => 
            array (
                'id' => 2914,
                'name' => 'Újléta',
                'county_id' => 17,
            ),
            414 => 
            array (
                'id' => 2915,
                'name' => 'Újlőrincfalva',
                'county_id' => 4,
            ),
            415 => 
            array (
                'id' => 2916,
                'name' => 'Újpetre',
                'county_id' => 3,
            ),
            416 => 
            array (
                'id' => 2917,
                'name' => 'Újrónafő',
                'county_id' => 6,
            ),
            417 => 
            array (
                'id' => 2918,
                'name' => 'Újsolt',
                'county_id' => 12,
            ),
            418 => 
            array (
                'id' => 2919,
                'name' => 'Újszalonta',
                'county_id' => 16,
            ),
            419 => 
            array (
                'id' => 2920,
                'name' => 'Újszász',
                'county_id' => 2,
            ),
            420 => 
            array (
                'id' => 2921,
                'name' => 'Újszentiván',
                'county_id' => 14,
            ),
            421 => 
            array (
                'id' => 2922,
                'name' => 'Újszentmargita',
                'county_id' => 17,
            ),
            422 => 
            array (
                'id' => 2923,
                'name' => 'Újszilvás',
                'county_id' => 7,
            ),
            423 => 
            array (
                'id' => 2924,
                'name' => 'Újtelek',
                'county_id' => 12,
            ),
            424 => 
            array (
                'id' => 2925,
                'name' => 'Újtikos',
                'county_id' => 17,
            ),
            425 => 
            array (
                'id' => 2926,
                'name' => 'Újudvar',
                'county_id' => 15,
            ),
            426 => 
            array (
                'id' => 2927,
                'name' => 'Újvárfalva',
                'county_id' => 11,
            ),
            427 => 
            array (
                'id' => 2928,
                'name' => 'Ukk',
                'county_id' => 8,
            ),
            428 => 
            array (
                'id' => 2929,
                'name' => 'Üllés',
                'county_id' => 6,
            ),
            429 => 
            array (
                'id' => 2930,
                'name' => 'Üllő',
                'county_id' => 9,
            ),
            430 => 
            array (
                'id' => 2931,
                'name' => 'Und',
                'county_id' => 5,
            ),
            431 => 
            array (
                'id' => 2932,
                'name' => 'Úny',
                'county_id' => 13,
            ),
            432 => 
            array (
                'id' => 2933,
                'name' => 'Uppony',
                'county_id' => 10,
            ),
            433 => 
            array (
                'id' => 2934,
                'name' => 'Ura',
                'county_id' => 1,
            ),
            434 => 
            array (
                'id' => 2935,
                'name' => 'Uraiújfalu',
                'county_id' => 7,
            ),
            435 => 
            array (
                'id' => 2936,
                'name' => 'Úrhida',
                'county_id' => 8,
            ),
            436 => 
            array (
                'id' => 2937,
                'name' => 'Úri',
                'county_id' => 13,
            ),
            437 => 
            array (
                'id' => 2938,
                'name' => 'Úrkút',
                'county_id' => 12,
            ),
            438 => 
            array (
                'id' => 2939,
                'name' => 'Üröm',
                'county_id' => 8,
            ),
            439 => 
            array (
                'id' => 2940,
                'name' => 'Uszka',
                'county_id' => 14,
            ),
            440 => 
            array (
                'id' => 2941,
                'name' => 'Uszód',
                'county_id' => 7,
            ),
            441 => 
            array (
                'id' => 2942,
                'name' => 'Uzsa',
                'county_id' => 7,
            ),
            442 => 
            array (
                'id' => 2943,
                'name' => 'Vác',
                'county_id' => 7,
            ),
            443 => 
            array (
                'id' => 2944,
                'name' => 'Vácduka',
                'county_id' => 7,
            ),
            444 => 
            array (
                'id' => 2945,
                'name' => 'Vácegres',
                'county_id' => 7,
            ),
            445 => 
            array (
                'id' => 2946,
                'name' => 'Váchartyán',
                'county_id' => 7,
            ),
            446 => 
            array (
                'id' => 2947,
                'name' => 'Váckisújfalu',
                'county_id' => 7,
            ),
            447 => 
            array (
                'id' => 2948,
                'name' => 'Vácrátót',
                'county_id' => 7,
            ),
            448 => 
            array (
                'id' => 2949,
                'name' => 'Vácszentlászló',
                'county_id' => 7,
            ),
            449 => 
            array (
                'id' => 2950,
                'name' => 'Vadna',
                'county_id' => 5,
            ),
            450 => 
            array (
                'id' => 2951,
                'name' => 'Vadosfa',
                'county_id' => 6,
            ),
            451 => 
            array (
                'id' => 2952,
                'name' => 'Vág',
                'county_id' => 6,
            ),
            452 => 
            array (
                'id' => 2953,
                'name' => 'Vágáshuta',
                'county_id' => 5,
            ),
            453 => 
            array (
                'id' => 2954,
                'name' => 'Vaja',
                'county_id' => 13,
            ),
            454 => 
            array (
                'id' => 2955,
                'name' => 'Vajdácska',
                'county_id' => 5,
            ),
            455 => 
            array (
                'id' => 2956,
                'name' => 'Vajszló',
                'county_id' => 3,
            ),
            456 => 
            array (
                'id' => 2957,
                'name' => 'Vajta',
                'county_id' => 1,
            ),
            457 => 
            array (
                'id' => 2958,
                'name' => 'Vál',
                'county_id' => 1,
            ),
            458 => 
            array (
                'id' => 2959,
                'name' => 'Valkó',
                'county_id' => 7,
            ),
            459 => 
            array (
                'id' => 2960,
                'name' => 'Valkonya',
                'county_id' => 15,
            ),
            460 => 
            array (
                'id' => 2961,
                'name' => 'Vállaj',
                'county_id' => 13,
            ),
            461 => 
            array (
                'id' => 2962,
                'name' => 'Vállus',
                'county_id' => 15,
            ),
            462 => 
            array (
                'id' => 2963,
                'name' => 'Vámosatya',
                'county_id' => 13,
            ),
            463 => 
            array (
                'id' => 2964,
                'name' => 'Vámoscsalád',
                'county_id' => 10,
            ),
            464 => 
            array (
                'id' => 2965,
                'name' => 'Vámosgyörk',
                'county_id' => 4,
            ),
            465 => 
            array (
                'id' => 2966,
                'name' => 'Vámosmikola',
                'county_id' => 7,
            ),
            466 => 
            array (
                'id' => 2967,
                'name' => 'Vámosoroszi',
                'county_id' => 13,
            ),
            467 => 
            array (
                'id' => 2968,
                'name' => 'Vámospércs',
                'county_id' => 17,
            ),
            468 => 
            array (
                'id' => 2969,
                'name' => 'Vámosszabadi',
                'county_id' => 5,
            ),
            469 => 
            array (
                'id' => 2970,
                'name' => 'Vámosújfalu',
                'county_id' => 6,
            ),
            470 => 
            array (
                'id' => 2971,
                'name' => 'Váncsod',
                'county_id' => 17,
            ),
            471 => 
            array (
                'id' => 2972,
                'name' => 'Vanyarc',
                'county_id' => 19,
            ),
            472 => 
            array (
                'id' => 2973,
                'name' => 'Vanyola',
                'county_id' => 8,
            ),
            473 => 
            array (
                'id' => 2974,
                'name' => 'Várad',
                'county_id' => 3,
            ),
            474 => 
            array (
                'id' => 2975,
                'name' => 'Váralja',
                'county_id' => 18,
            ),
            475 => 
            array (
                'id' => 2976,
                'name' => 'Varászló',
                'county_id' => 11,
            ),
            476 => 
            array (
                'id' => 2977,
                'name' => 'Váraszó',
                'county_id' => 4,
            ),
            477 => 
            array (
                'id' => 2978,
                'name' => 'Várbalog',
                'county_id' => 6,
            ),
            478 => 
            array (
                'id' => 2979,
                'name' => 'Varbó',
                'county_id' => 5,
            ),
            479 => 
            array (
                'id' => 2980,
                'name' => 'Varbóc',
                'county_id' => 5,
            ),
            480 => 
            array (
                'id' => 2981,
                'name' => 'Várda',
                'county_id' => 11,
            ),
            481 => 
            array (
                'id' => 2982,
                'name' => 'Várdomb',
                'county_id' => 18,
            ),
            482 => 
            array (
                'id' => 2983,
                'name' => 'Várfölde',
                'county_id' => 15,
            ),
            483 => 
            array (
                'id' => 2984,
                'name' => 'Varga',
                'county_id' => 3,
            ),
            484 => 
            array (
                'id' => 2985,
                'name' => 'Várgesztes',
                'county_id' => 9,
            ),
            485 => 
            array (
                'id' => 2986,
                'name' => 'Várkesző',
                'county_id' => 8,
            ),
            486 => 
            array (
                'id' => 2987,
                'name' => 'Várong',
                'county_id' => 18,
            ),
            487 => 
            array (
                'id' => 2988,
                'name' => 'Városföld',
                'county_id' => 12,
            ),
            488 => 
            array (
                'id' => 2989,
                'name' => 'Városlőd',
                'county_id' => 8,
            ),
            489 => 
            array (
                'id' => 2990,
                'name' => 'Várpalota',
                'county_id' => 8,
            ),
            490 => 
            array (
                'id' => 2991,
                'name' => 'Varsád',
                'county_id' => 18,
            ),
            491 => 
            array (
                'id' => 2992,
                'name' => 'Varsány',
                'county_id' => 19,
            ),
            492 => 
            array (
                'id' => 2993,
                'name' => 'Várvölgy',
                'county_id' => 15,
            ),
            493 => 
            array (
                'id' => 2994,
                'name' => 'Vasad',
                'county_id' => 7,
            ),
            494 => 
            array (
                'id' => 2995,
                'name' => 'Vasalja',
                'county_id' => 10,
            ),
            495 => 
            array (
                'id' => 2996,
                'name' => 'Vásárosbéc',
                'county_id' => 3,
            ),
            496 => 
            array (
                'id' => 2997,
                'name' => 'Vásárosdombó',
                'county_id' => 3,
            ),
            497 => 
            array (
                'id' => 2998,
                'name' => 'Vásárosfalu',
                'county_id' => 6,
            ),
            498 => 
            array (
                'id' => 2999,
                'name' => 'Vásárosmiske',
                'county_id' => 10,
            ),
            499 => 
            array (
                'id' => 3000,
                'name' => 'Vásárosnamény',
                'county_id' => 13,
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'name' => 'Vasasszonyfa',
                'county_id' => 10,
            ),
            1 => 
            array (
                'id' => 3002,
                'name' => 'Vasboldogasszony',
                'county_id' => 15,
            ),
            2 => 
            array (
                'id' => 3003,
                'name' => 'Vasegerszeg',
                'county_id' => 10,
            ),
            3 => 
            array (
                'id' => 3004,
                'name' => 'Vashosszúfalu',
                'county_id' => 10,
            ),
            4 => 
            array (
                'id' => 3005,
                'name' => 'Vaskeresztes',
                'county_id' => 10,
            ),
            5 => 
            array (
                'id' => 3006,
                'name' => 'Vaskút',
                'county_id' => 12,
            ),
            6 => 
            array (
                'id' => 3007,
                'name' => 'Vasmegyer',
                'county_id' => 13,
            ),
            7 => 
            array (
                'id' => 3008,
                'name' => 'Vaspör',
                'county_id' => 15,
            ),
            8 => 
            array (
                'id' => 3009,
                'name' => 'Vassurány',
                'county_id' => 10,
            ),
            9 => 
            array (
                'id' => 3010,
                'name' => 'Vászoly',
                'county_id' => 8,
            ),
            10 => 
            array (
                'id' => 3011,
                'name' => 'Vasszécseny',
                'county_id' => 10,
            ),
            11 => 
            array (
                'id' => 3012,
                'name' => 'Vasszentmihály',
                'county_id' => 10,
            ),
            12 => 
            array (
                'id' => 3013,
                'name' => 'Vasszilvágy',
                'county_id' => 10,
            ),
            13 => 
            array (
                'id' => 3014,
                'name' => 'Vasvár',
                'county_id' => 10,
            ),
            14 => 
            array (
                'id' => 3015,
                'name' => 'Vaszar',
                'county_id' => 8,
            ),
            15 => 
            array (
                'id' => 3016,
                'name' => 'Vát',
                'county_id' => 10,
            ),
            16 => 
            array (
                'id' => 3017,
                'name' => 'Vatta',
                'county_id' => 5,
            ),
            17 => 
            array (
                'id' => 3018,
                'name' => 'Vázsnok',
                'county_id' => 3,
            ),
            18 => 
            array (
                'id' => 3019,
                'name' => 'Vécs',
                'county_id' => 4,
            ),
            19 => 
            array (
                'id' => 3020,
                'name' => 'Vecsés',
                'county_id' => 7,
            ),
            20 => 
            array (
                'id' => 3021,
                'name' => 'Végegyháza',
                'county_id' => 16,
            ),
            21 => 
            array (
                'id' => 3022,
                'name' => 'Vejti',
                'county_id' => 3,
            ),
            22 => 
            array (
                'id' => 3023,
                'name' => 'Vékény',
                'county_id' => 3,
            ),
            23 => 
            array (
                'id' => 3024,
                'name' => 'Vekerd',
                'county_id' => 17,
            ),
            24 => 
            array (
                'id' => 3025,
                'name' => 'Velem',
                'county_id' => 10,
            ),
            25 => 
            array (
                'id' => 3026,
                'name' => 'Velemér',
                'county_id' => 10,
            ),
            26 => 
            array (
                'id' => 3027,
                'name' => 'Velence',
                'county_id' => 1,
            ),
            27 => 
            array (
                'id' => 3028,
                'name' => 'Velény',
                'county_id' => 3,
            ),
            28 => 
            array (
                'id' => 3029,
                'name' => 'Véménd',
                'county_id' => 3,
            ),
            29 => 
            array (
                'id' => 3030,
                'name' => 'Vének',
                'county_id' => 6,
            ),
            30 => 
            array (
                'id' => 3031,
                'name' => 'Vép',
                'county_id' => 10,
            ),
            31 => 
            array (
                'id' => 3032,
                'name' => 'Vereb',
                'county_id' => 1,
            ),
            32 => 
            array (
                'id' => 3033,
                'name' => 'Veresegyház',
                'county_id' => 7,
            ),
            33 => 
            array (
                'id' => 3034,
                'name' => 'Verőce',
                'county_id' => 7,
            ),
            34 => 
            array (
                'id' => 3035,
                'name' => 'Verpelét',
                'county_id' => 4,
            ),
            35 => 
            array (
                'id' => 3036,
                'name' => 'Verseg',
                'county_id' => 7,
            ),
            36 => 
            array (
                'id' => 3037,
                'name' => 'Versend',
                'county_id' => 3,
            ),
            37 => 
            array (
                'id' => 3038,
                'name' => 'Vértesacsa',
                'county_id' => 1,
            ),
            38 => 
            array (
                'id' => 3039,
                'name' => 'Vértesboglár',
                'county_id' => 1,
            ),
            39 => 
            array (
                'id' => 3040,
                'name' => 'Vérteskethely',
                'county_id' => 9,
            ),
            40 => 
            array (
                'id' => 3041,
                'name' => 'Vértessomló',
                'county_id' => 9,
            ),
            41 => 
            array (
                'id' => 3042,
                'name' => 'Vértestolna',
                'county_id' => 9,
            ),
            42 => 
            array (
                'id' => 3043,
                'name' => 'Vértesszőlős',
                'county_id' => 9,
            ),
            43 => 
            array (
                'id' => 3044,
                'name' => 'Vése',
                'county_id' => 11,
            ),
            44 => 
            array (
                'id' => 3045,
                'name' => 'Veszkény',
                'county_id' => 6,
            ),
            45 => 
            array (
                'id' => 3046,
                'name' => 'Veszprém',
                'county_id' => 8,
            ),
            46 => 
            array (
                'id' => 3047,
                'name' => 'Veszprémfajsz',
                'county_id' => 8,
            ),
            47 => 
            array (
                'id' => 3048,
                'name' => 'Veszprémgalsa',
                'county_id' => 8,
            ),
            48 => 
            array (
                'id' => 3049,
                'name' => 'Veszprémvarsány',
                'county_id' => 8,
            ),
            49 => 
            array (
                'id' => 3050,
                'name' => 'Vésztő',
                'county_id' => 16,
            ),
            50 => 
            array (
                'id' => 3051,
                'name' => 'Vezseny',
                'county_id' => 2,
            ),
            51 => 
            array (
                'id' => 3052,
                'name' => 'Vid',
                'county_id' => 8,
            ),
            52 => 
            array (
                'id' => 3053,
                'name' => 'Vigántpetend',
                'county_id' => 8,
            ),
            53 => 
            array (
                'id' => 3054,
                'name' => 'Villány',
                'county_id' => 3,
            ),
            54 => 
            array (
                'id' => 3055,
                'name' => 'Villánykövesd',
                'county_id' => 3,
            ),
            55 => 
            array (
                'id' => 3056,
                'name' => 'Vilmány',
                'county_id' => 5,
            ),
            56 => 
            array (
                'id' => 3057,
                'name' => 'Vilonya',
                'county_id' => 8,
            ),
            57 => 
            array (
                'id' => 3058,
                'name' => 'Vilyvitány',
                'county_id' => 5,
            ),
            58 => 
            array (
                'id' => 3059,
                'name' => 'Vinár',
                'county_id' => 8,
            ),
            59 => 
            array (
                'id' => 3060,
                'name' => 'Vindornyafok',
                'county_id' => 15,
            ),
            60 => 
            array (
                'id' => 3061,
                'name' => 'Vindornyalak',
                'county_id' => 15,
            ),
            61 => 
            array (
                'id' => 3062,
                'name' => 'Vindornyaszőlős',
                'county_id' => 15,
            ),
            62 => 
            array (
                'id' => 3063,
                'name' => 'Visegrád',
                'county_id' => 7,
            ),
            63 => 
            array (
                'id' => 3064,
                'name' => 'Visnye',
                'county_id' => 11,
            ),
            64 => 
            array (
                'id' => 3065,
                'name' => 'Visonta',
                'county_id' => 4,
            ),
            65 => 
            array (
                'id' => 3066,
                'name' => 'Viss',
                'county_id' => 5,
            ),
            66 => 
            array (
                'id' => 3067,
                'name' => 'Visz',
                'county_id' => 11,
            ),
            67 => 
            array (
                'id' => 3068,
                'name' => 'Viszák',
                'county_id' => 10,
            ),
            68 => 
            array (
                'id' => 3069,
                'name' => 'Viszló',
                'county_id' => 5,
            ),
            69 => 
            array (
                'id' => 3070,
                'name' => 'Visznek',
                'county_id' => 4,
            ),
            70 => 
            array (
                'id' => 3071,
                'name' => 'Vitnyéd',
                'county_id' => 6,
            ),
            71 => 
            array (
                'id' => 3072,
                'name' => 'Vízvár',
                'county_id' => 11,
            ),
            72 => 
            array (
                'id' => 3073,
                'name' => 'Vizslás',
                'county_id' => 19,
            ),
            73 => 
            array (
                'id' => 3074,
                'name' => 'Vizsoly',
                'county_id' => 5,
            ),
            74 => 
            array (
                'id' => 3075,
                'name' => 'Vokány',
                'county_id' => 3,
            ),
            75 => 
            array (
                'id' => 3076,
                'name' => 'Vonyarcvashegy',
                'county_id' => 15,
            ),
            76 => 
            array (
                'id' => 3077,
                'name' => 'Vöckönd',
                'county_id' => 15,
            ),
            77 => 
            array (
                'id' => 3078,
                'name' => 'Völcsej',
                'county_id' => 6,
            ),
            78 => 
            array (
                'id' => 3079,
                'name' => 'Vönöck',
                'county_id' => 10,
            ),
            79 => 
            array (
                'id' => 3080,
                'name' => 'Vöröstó',
                'county_id' => 8,
            ),
            80 => 
            array (
                'id' => 3081,
                'name' => 'Vörs',
                'county_id' => 11,
            ),
            81 => 
            array (
                'id' => 3082,
                'name' => 'Zabar',
                'county_id' => 19,
            ),
            82 => 
            array (
                'id' => 3083,
                'name' => 'Zádor',
                'county_id' => 3,
            ),
            83 => 
            array (
                'id' => 3084,
                'name' => 'Zádorfalva',
                'county_id' => 5,
            ),
            84 => 
            array (
                'id' => 3085,
                'name' => 'Zagyvarékas',
                'county_id' => 2,
            ),
            85 => 
            array (
                'id' => 3086,
                'name' => 'Zagyvaszántó',
                'county_id' => 4,
            ),
            86 => 
            array (
                'id' => 3087,
                'name' => 'Záhony',
                'county_id' => 13,
            ),
            87 => 
            array (
                'id' => 3088,
                'name' => 'Zajk',
                'county_id' => 15,
            ),
            88 => 
            array (
                'id' => 3089,
                'name' => 'Zajta',
                'county_id' => 13,
            ),
            89 => 
            array (
                'id' => 3090,
                'name' => 'Zákány',
                'county_id' => 11,
            ),
            90 => 
            array (
                'id' => 3091,
                'name' => 'Zákányszék',
                'county_id' => 14,
            ),
            91 => 
            array (
                'id' => 3092,
                'name' => 'Zala',
                'county_id' => 11,
            ),
            92 => 
            array (
                'id' => 3093,
                'name' => 'Zalaapáti',
                'county_id' => 15,
            ),
            93 => 
            array (
                'id' => 3094,
                'name' => 'Zalabaksa',
                'county_id' => 15,
            ),
            94 => 
            array (
                'id' => 3095,
                'name' => 'Zalabér',
                'county_id' => 15,
            ),
            95 => 
            array (
                'id' => 3096,
                'name' => 'Zalaboldogfa',
                'county_id' => 15,
            ),
            96 => 
            array (
                'id' => 3097,
                'name' => 'Zalacsány',
                'county_id' => 15,
            ),
            97 => 
            array (
                'id' => 3098,
                'name' => 'Zalacséb',
                'county_id' => 15,
            ),
            98 => 
            array (
                'id' => 3099,
                'name' => 'Zalaegerszeg',
                'county_id' => 15,
            ),
            99 => 
            array (
                'id' => 3100,
                'name' => 'Zalaerdőd',
                'county_id' => 8,
            ),
            100 => 
            array (
                'id' => 3101,
                'name' => 'Zalagyömörő',
                'county_id' => 8,
            ),
            101 => 
            array (
                'id' => 3102,
                'name' => 'Zalahaláp',
                'county_id' => 8,
            ),
            102 => 
            array (
                'id' => 3103,
                'name' => 'Zalaháshágy',
                'county_id' => 15,
            ),
            103 => 
            array (
                'id' => 3104,
                'name' => 'Zalaigrice',
                'county_id' => 15,
            ),
            104 => 
            array (
                'id' => 3105,
                'name' => 'Zalaistvánd',
                'county_id' => 15,
            ),
            105 => 
            array (
                'id' => 3106,
                'name' => 'Zalakaros',
                'county_id' => 15,
            ),
            106 => 
            array (
                'id' => 3107,
                'name' => 'Zalakomár',
                'county_id' => 15,
            ),
            107 => 
            array (
                'id' => 3108,
                'name' => 'Zalaköveskút',
                'county_id' => 15,
            ),
            108 => 
            array (
                'id' => 3109,
                'name' => 'Zalalövő',
                'county_id' => 15,
            ),
            109 => 
            array (
                'id' => 3110,
                'name' => 'Zalameggyes',
                'county_id' => 8,
            ),
            110 => 
            array (
                'id' => 3111,
                'name' => 'Zalamerenye',
                'county_id' => 15,
            ),
            111 => 
            array (
                'id' => 3112,
                'name' => 'Zalasárszeg',
                'county_id' => 15,
            ),
            112 => 
            array (
                'id' => 3113,
                'name' => 'Zalaszabar',
                'county_id' => 15,
            ),
            113 => 
            array (
                'id' => 3114,
                'name' => 'Zalaszántó',
                'county_id' => 15,
            ),
            114 => 
            array (
                'id' => 3115,
                'name' => 'Zalaszegvár',
                'county_id' => 8,
            ),
            115 => 
            array (
                'id' => 3116,
                'name' => 'Zalaszentbalázs',
                'county_id' => 15,
            ),
            116 => 
            array (
                'id' => 3117,
                'name' => 'Zalaszentgrót',
                'county_id' => 15,
            ),
            117 => 
            array (
                'id' => 3118,
                'name' => 'Zalaszentgyörgy',
                'county_id' => 15,
            ),
            118 => 
            array (
                'id' => 3119,
                'name' => 'Zalaszentiván',
                'county_id' => 15,
            ),
            119 => 
            array (
                'id' => 3120,
                'name' => 'Zalaszentjakab',
                'county_id' => 15,
            ),
            120 => 
            array (
                'id' => 3121,
                'name' => 'Zalaszentlászló',
                'county_id' => 15,
            ),
            121 => 
            array (
                'id' => 3122,
                'name' => 'Zalaszentlőrinc',
                'county_id' => 15,
            ),
            122 => 
            array (
                'id' => 3123,
                'name' => 'Zalaszentmárton',
                'county_id' => 15,
            ),
            123 => 
            array (
                'id' => 3124,
                'name' => 'Zalaszentmihály',
                'county_id' => 15,
            ),
            124 => 
            array (
                'id' => 3125,
                'name' => 'Zalaszombatfa',
                'county_id' => 15,
            ),
            125 => 
            array (
                'id' => 3126,
                'name' => 'Zaláta',
                'county_id' => 3,
            ),
            126 => 
            array (
                'id' => 3127,
                'name' => 'Zalatárnok',
                'county_id' => 15,
            ),
            127 => 
            array (
                'id' => 3128,
                'name' => 'Zalaújlak',
                'county_id' => 15,
            ),
            128 => 
            array (
                'id' => 3129,
                'name' => 'Zalavár',
                'county_id' => 15,
            ),
            129 => 
            array (
                'id' => 3130,
                'name' => 'Zalavég',
                'county_id' => 15,
            ),
            130 => 
            array (
                'id' => 3131,
                'name' => 'Zalkod',
                'county_id' => 5,
            ),
            131 => 
            array (
                'id' => 3132,
                'name' => 'Zamárdi',
                'county_id' => 11,
            ),
            132 => 
            array (
                'id' => 3133,
                'name' => 'Zámoly',
                'county_id' => 1,
            ),
            133 => 
            array (
                'id' => 3134,
                'name' => 'Zánka',
                'county_id' => 8,
            ),
            134 => 
            array (
                'id' => 3135,
                'name' => 'Zaránk',
                'county_id' => 4,
            ),
            135 => 
            array (
                'id' => 3136,
                'name' => 'Závod',
                'county_id' => 18,
            ),
            136 => 
            array (
                'id' => 3137,
                'name' => 'Zebecke',
                'county_id' => 15,
            ),
            137 => 
            array (
                'id' => 3138,
                'name' => 'Zebegény',
                'county_id' => 7,
            ),
            138 => 
            array (
                'id' => 3139,
                'name' => 'Zemplénagárd',
                'county_id' => 5,
            ),
            139 => 
            array (
                'id' => 3140,
                'name' => 'Zengővárkony',
                'county_id' => 3,
            ),
            140 => 
            array (
                'id' => 3141,
                'name' => 'Zichyújfalu',
                'county_id' => 1,
            ),
            141 => 
            array (
                'id' => 3142,
                'name' => 'Zics',
                'county_id' => 11,
            ),
            142 => 
            array (
                'id' => 3143,
                'name' => 'Ziliz',
                'county_id' => 5,
            ),
            143 => 
            array (
                'id' => 3144,
                'name' => 'Zimány',
                'county_id' => 11,
            ),
            144 => 
            array (
                'id' => 3145,
                'name' => 'Zirc',
                'county_id' => 8,
            ),
            145 => 
            array (
                'id' => 3146,
                'name' => 'Zók',
                'county_id' => 3,
            ),
            146 => 
            array (
                'id' => 3147,
                'name' => 'Zomba',
                'county_id' => 18,
            ),
            147 => 
            array (
                'id' => 3148,
                'name' => 'Zsadány',
                'county_id' => 16,
            ),
            148 => 
            array (
                'id' => 3149,
                'name' => 'Zsáka',
                'county_id' => 17,
            ),
            149 => 
            array (
                'id' => 3150,
                'name' => 'Zsámbék',
                'county_id' => 7,
            ),
            150 => 
            array (
                'id' => 3151,
                'name' => 'Zsámbok',
                'county_id' => 7,
            ),
            151 => 
            array (
                'id' => 3152,
                'name' => 'Zsana',
                'county_id' => 12,
            ),
            152 => 
            array (
                'id' => 3153,
                'name' => 'Zsarolyán',
                'county_id' => 13,
            ),
            153 => 
            array (
                'id' => 3154,
                'name' => 'Zsebeháza',
                'county_id' => 6,
            ),
            154 => 
            array (
                'id' => 3155,
                'name' => 'Zsédeny',
                'county_id' => 10,
            ),
            155 => 
            array (
                'id' => 3156,
                'name' => 'Zselickisfalud',
                'county_id' => 11,
            ),
            156 => 
            array (
                'id' => 3157,
                'name' => 'Zselickislak',
                'county_id' => 11,
            ),
            157 => 
            array (
                'id' => 3158,
                'name' => 'Zselicszentpál',
                'county_id' => 11,
            ),
            158 => 
            array (
                'id' => 3159,
                'name' => 'Zsennye',
                'county_id' => 10,
            ),
            159 => 
            array (
                'id' => 3160,
                'name' => 'Zsira',
                'county_id' => 6,
            ),
            160 => 
            array (
                'id' => 3161,
                'name' => 'Zsombó',
                'county_id' => 14,
            ),
            161 => 
            array (
                'id' => 3162,
                'name' => 'Zsujta',
                'county_id' => 5,
            ),
            162 => 
            array (
                'id' => 3163,
                'name' => 'Zsurk',
                'county_id' => 13,
            ),
            163 => 
            array (
                'id' => 3164,
                'name' => 'Zubogy',
                'county_id' => 5,
            ),
        ));
        
        
    }
}