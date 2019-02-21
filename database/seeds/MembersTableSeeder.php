<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $memberslist = [
          [
            'name' => 'Leslie',
            'surname' => 'Terry',
            'gender' => 'male',
            'birthday' => '7/6/1978',
            'email' => 'leslie.terry53@example.com',
            'password' => 'leng123',
            'profile_img' => 'https://randomuser.me/api/portraits/men/42.jpg',
            'telephone_number' => '0648946512',
            'profession' => 'kapper',
            'address' => 'oldenzaalsestraat 20',
            'city' => 'enschede',
            'postel_code' => '7511DP',
            'country' => 'Netherlands',
            'work_location' => 'enschede hengelo oldenzaal',
            'digit' => '7',
            'likes' => '58',
            'comments' => '24',
            'ip_address' => '127.0.0.1',
            'remember_token' => null,
            'created_at' => new DateTime,
            'updated_at' => null,
          ],
          [
            'name' => 'Felecia',
            'surname' => 'Kuhn',
            'gender' => 'female',
            'birthday' => '2/1/1985',
            'email' => 'felecia.kuhn42@example.com',
            'password' => 'veronika',
            'profile_img' => 'https://randomuser.me/api/portraits/women/95.jpg',
            'telephone_number' => '(251)-484-3672',
            'profession' => 'massage',
            'address' => 'Zandhorstlaan 54',
            'city' => 'Oldenzaal',
            'postel_code' => '7577VB',
            'country' => 'Netherlands',
            'work_location' => 'Oldenzaal',
            'digit' => '8',
            'likes' => '124',
            'comments' => '64',
            'ip_address' => '127.0.0.1',
            'remember_token' => null,
            'created_at' => new DateTime,
            'updated_at' => null,
          ],
          [
            'name' => 'Bessie',
            'surname' => 'Weaver',
            'gender' => 'female',
            'birthday' => '4/1/1973',
            'email' => 'bessie.weaver86@example.com',
            'password' => 'elmo123',
            'profile_img' => 'https://randomuser.me/api/portraits/women/48.jpg',
            'telephone_number' => '(788)-239-1239',
            'profession' => 'pedicure',
            'address' => 'huislaan 4',
            'city' => 'Hengelo',
            'postel_code' => '7544HK',
            'country' => 'Netherlands',
            'work_location' => 'hengelo enschede',
            'digit' => '6',
            'likes' => '357',
            'comments' => '149',
            'ip_address' => '127.0.0.1',
            'remember_token' => null,
            'created_at' => new DateTime,
            'updated_at' => null,
          ],
          [
            'name' => 'Virgil',
            'surname' => 'Hart',
            'gender' => 'male',
            'birthday' => '7/3/1976',
            'email' => 'virgil.hart78@example.com',
            'password' => 'asimov',
            'profile_img' => 'https://randomuser.me/api/portraits/men/1.jpg',
            'telephone_number' => '(991)-267-2948',
            'profession' => 'kapper',
            'address' => 'haaksbergestraat 98',
            'city' => 'enschede',
            'postel_code' => '7511KP',
            'country' => 'Netherlands',
            'work_location' => 'enschede haaksbergen hengelo',
            'digit' => '6',
            'likes' => '48',
            'comments' => '12',
            'ip_address' => '127.0.0.1',
            'remember_token' => null,
            'created_at' => new DateTime,
            'updated_at' => null,
          ],
      ];

      DB::table('members')->insert($memberslist);
    }
}
