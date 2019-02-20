<?php

use Illuminate\Database\Seeder;

class DatainfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $datainfos = [
          [
            'title' => 'Geregistreerde zaken',
            'totaal' => '0',
            'fas' => 'fas fa-building',
          ],
          [
            'title' => 'Specialisten te boeken',
            'totaal' => '8',
            'fas' => 'fas fa-users',
          ],
          [
            'title' => 'Diensten te boeken',
            'totaal' => '6',
            'fas' => 'fas fa-wrench',
          ],
          [
            'title' => 'Betrouwbare reviews',
            'totaal' => '0',
            'fas' => 'fas fa-comments',
          ],
          [
            'title' => 'Afspraken gemaakt',
            'totaal' => '0',
            'fas' => 'fas fa-calendar-alt',
          ],
      ];

      DB::table('data_infos')->insert($datainfos);
    }
}
