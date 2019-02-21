<?php

use Illuminate\Database\Seeder;

class DienstenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $diensten = [
          [
            'name' => 'Haar knippen',
            'city' => 'enschede',
            'gender' => 'men female kids pets',
            'category' => 'kappers',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'kapper haar knippen',
            'src_img' => 'https://media.libelle.nl/m/y3d8vyaitxcw_home_landscape_top_article_630x325.jpg',
          ],
          [
            'name' => 'Haar verven',
            'city' => 'enschede hengelo',
            'gender' => 'men female',
            'category' => 'kappers',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'haar verven',
            'src_img' => 'https://cdn.indicium.nu/source/grazia/uploads/2016/03/verf-0P1CK6jJ-thumb.jpg?w=950&h=500&fit=crop',
          ],
          [
            'name' => 'Pedicure',
            'city' => 'enschede hengelo oldenzaal',
            'gender' => 'men female pets',
            'category' => 'pedicures',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'pedicures nagels verzorging voeten',
            'src_img' => 'https://www.hand-en-voet.nl/images/posts/pedicure.jpg',
          ],
          [
            'name' => 'Manicures',
            'city' => 'enschede hengelo haaksbergen',
            'gender' => 'men female pets',
            'category' => 'manicures',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'manicures nagels verzorging handen',
            'src_img' => 'https://cdn1.treatwell.net/images/view/v2.i784919.w1472.h981.x19481829.jpg',
          ],
          [
            'name' => 'Voeten massage',
            'city' => 'enschede oldenzaal hengelo haaksbergen',
            'gender' => 'men female',
            'category' => 'massage',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'voeten massage verzorging',
            'src_img' => 'https://www.health.nl/wp-content/uploads/2014/09/voeten-702x336.jpg',
          ],
          [
            'name' => 'Lichaam massage',
            'city' => 'enschede oldenzaal hengelo haaksbergen',
            'gender' => 'men female',
            'category' => 'massage',
            'description' => '<h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident deserunt.',
            'tags' => 'lichaam massage verzorging',
            'src_img' => 'https://www.eurekasprings.org/wp-content/uploads/2017/02/Touch-massage-1320x564.jpg',
          ],
      ];

      DB::table('products')->insert($diensten);
    }
}
