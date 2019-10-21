<?php

use Illuminate\Database\Seeder;

use Carbon\carbon;

class vid_collection_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vid_collections')->insert([
        	'title' => 'Will & Grace',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 7.3,
        	'synopsis' => 'Emmy Award Winning Movie',
            'plot' =>'Will and Grace live together in an apartment in 
            New York City. He\'s a gay lawyer, she\'s a straight 
            interior designer. Their best friends are Jack, a gleeful
            but proud gay man, and Karen, a charismatic, filthy rich, 
            amoral socialite.',
            'image' =>'willandgrace',
            'length' => 22,
            'director' =>'James Burrows',
            'num_of_season' => 10,
            'release_date' => '1998-09-21 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'Silicon Valley',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.5,
        	'synopsis' => 'Silicon Valley Culture Comedy',
            'plot' =>'Follows the struggle of Richard Hendricks,
              a Silicon Valley engineer trying to build his own 
              company called Pied Piper.',
            'image' =>'siliconvalley',
            'length' => 28,
            'director' =>'John Altschuler',
            'num_of_season' => 5,
            'release_date' => '2014-04-06 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'The Daily Show',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.2,
        	'synopsis' => 'Trevor Noah takes on the very tall 
        	task of replacing longtime host Jon Stewart on Comedy Central',
            'plot' =>'Providing comedy/news in the tradition of 
            TV Nation and SNL\'s Weekend Update, Comedy Central\'s
            Daily Show reports on the foibles and of the real world 
            with a satirical edge.',
            'image' =>'dailyshow',
            'length' => 22,
            'director' =>'Paul Pennolino',
            'num_of_season' => 24,
            'release_date' => '1995-10-08 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vid_collections')->insert([
        	'title' => 'How to Get Away with Murder',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.2,
        	'synopsis' => 'Law & order in Philedelphia',
            'plot' =>'A group of ambitious law students and their brilliant criminal defense 
            professor become involved in a twisted murder plot that promises to change 
            the course of their lives.',
            'image' =>'howtogetawaywithmurder',
            'length' => 43,
            'director' =>'Peter Nowalk',
            'num_of_season' => 24,
            'release_date' => '2014-09-25 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



        DB::table('vid_collections')->insert([
        	'title' => 'Suits',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.5,
        	'synopsis' => 'Big-time Manhattan corporate lawyer Harvey Specter and his team',
            'plot' =>'On the run from a drug deal gone bad, Mike Ross, a brilliant college dropout,
             finds himself a job working with Harvey Specter, one of New York City\'s best lawyers.',
            'image' =>'suits',
            'length' => 44,
            'director' =>'Aaron Korsh',
            'num_of_season' => 8,
            'release_date' => '2011-06-23 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('vid_collections')->insert([
        	'title' => 'Stranger Things',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.9,
        	'synopsis' => 'This thrilling Netflix original drama',
            'plot' => 'This thrilling Netflix original drama ,  When a young boy disappears, 
        	his mother, a police chief, and his friends must confront terrifying supernatural 
        	forces in order to get him back.',
            'image' =>'strangerthings',
            'length' => 51,
            'director' =>'Matt Duffer',
            'num_of_season' => 3,
            'release_date' => '2016-07-15 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'Stranger Things',
        	'video_type' => 'TVSHOW',
        	'language' => 'english',
        	'rating' => 8.9,
        	'synopsis' => 'This thrilling Netflix original drama',
            'plot' =>'This thrilling Netflix original drama',
            'image' =>'strangerthings',
            'length' => 51,
            'director' =>'Matt Duffer',
            'num_of_season' => 3,
            'release_date' => '2016-07-15 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'Narcos',
        	'video_type' => 'TVSHOW',
        	'language' => 'spanish',
        	'rating' => 8.8,
        	'synopsis' => ' the rise of the cocaine trade in Colombia',
            'plot' =>'A chronicled look at the criminal exploits of Colombian drug lord
             Pablo Escobar, as well as the many other drug kingpins who plagued the
              country through the years.',
            'image' =>'narcos',
            'length' => 49,
            'director' =>'Carlo Bernard',
            'num_of_season' => 3,
            'release_date' => '2015-08-28 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'Avengers Endgame',
        	'video_type' => 'MOVIES',
        	'language' => 'ENGLISH',
        	'rating' => 8.7,
        	'synopsis' => 'Avengers Endgame',
            'plot' =>'After the devastating events of Avengers: Infinity War (2018), 
            the universe is in ruins. With the help of remaining allies, the 
            Avengers assemble once more in order to reverse Thanos\' actions 
            and restore balance to the universe.',
            'image' =>'narcos',
            'length' => 181,
            'director' =>'Anthony Russo',
            'num_of_season' => 0,
            'release_date' => '2019-04-26 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('vid_collections')->insert([
        	'title' => 'Spider-Man: Far From Home',
        	'video_type' => 'MOVIES',
        	'language' => 'ENGLISH',
        	'rating' => 7.9,
        	'synopsis' => 'Following the events of Avengers, Spider-Man must step 
        	up to take on new threats in a world that has changed forever',
            'plot' =>'After the devastating events of Avengers: Infinity War (2018), 
            the universe is in ruins. With the help of remaining allies, the 
            Avengers assemble once more in order to reverse Thanos\' actions 
            and restore balance to the universe.',
            'image' =>'spidermanfarfromhome',
            'length' => 129,
            'director' =>'John Watts',
            'num_of_season' => 0,
            'release_date' => '2019-07-02 00:00:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}

