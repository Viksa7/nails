<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$a = [
	    	[
		    	'title' => 'Маникюр',
		    	'description' => 'Description ',
		    	'thumbnail' => 'img/portfolio/thumbnails/1.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/1.jpg'
	    	],
	    	[
		    	'title' => 'Педикюр',
		    	'description' => 'Description',
		    	'thumbnail' => 'img/portfolio/thumbnails/2.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/2.jpg'
	    	],
	    	[
		    	'title' => 'Гельлак',
		    	'description' => 'Description',
		    	'thumbnail' => 'img/portfolio/thumbnails/3.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/3.jpg'
	    	],
	    	[
		    	'title' => 'Биогель',
		    	'description' => 'Description',
		    	'thumbnail' => 'img/portfolio/thumbnails/6.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/6.jpg'
	    	],
	    	[
		    	'title' => 'Наращивание',
		    	'description' => 'Description',
		    	'thumbnail' => 'img/portfolio/thumbnails/3.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/3.jpg'
	    	],
	    	[
		    	'title' => 'Дизайны',
		    	'description' => 'Description',
		    	'thumbnail' => 'img/portfolio/thumbnails/3.jpg',
		    	'fullsize' => 'img/portfolio/fullsize/3.jpg'
	    	],
    	];
    	DB::table('portfolios')->insert($a);
    }
}
