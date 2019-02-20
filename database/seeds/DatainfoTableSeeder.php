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
            'totaal' => '5468',
            'fas' => 'fas fa-building',
          ],
          [
            'title' => 'Specialisten te boeken',
            'totaal' => '12939',
            'fas' => 'fas fa-users',
          ],
          [
            'title' => 'Diensten te boeken',
            'totaal' => '1532',
            'fas' => 'fas fa-wrench',
          ],
          [
            'title' => 'Betrouwbare reviews',
            'totaal' => '412368',
            'fas' => 'fas fa-comments',
          ],
          [
            'title' => 'Afspraken gemaakt',
            'totaal' => '45646512',
            'fas' => 'fas fa-calendar-alt',
          ],
      ];

      DB::table('data_infos')->insert($datainfos);
    }
}
