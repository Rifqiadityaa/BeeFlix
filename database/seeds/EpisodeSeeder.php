<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'MovieID' => '1',
            'Episode' => '1',
            'Title' => 'Bohemian Rhapsody'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '2',
            'Episode' => '1',
            'Title' => 'The Godfather'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '3',
            'Episode' => '1',
            'Title' => '8 Mile'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '4',
            'Episode' => '1',
            'Title' => 'Full Metal Jacket'
        ]);

        
        //Adventure Time Episodes
        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '1',
            'Title' => 'Slumber Party Panic'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '2',
            'Title' => 'Trouble in Lumpy Space'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '3',
            'Title' => 'Prisoners of Love'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '4',
            'Title' => 'Tree Trunks'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '5',
            'Title' => 'The Enchiridion!'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '5',
            'Episode' => '6',
            'Title' => 'The Jiggler'
        ]);
        

        //Phineas and Ferb Episodes
        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '1',
            'Title' => 'Rollercoaster'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '2',
            'Title' => 'Lawn Gnome Beach Party of Terror'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '3',
            'Title' => 'Flop Starz'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '4',
            'Title' => 'The Fast and the Phineas'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '5',
            'Title' => 'Lights, Candace, Action!'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '6',
            'Episode' => '6',
            'Title' => 'Raging Bully'
        ]);

        
        //Gravity Falls Episodes
        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '1',
            'Title' => 'Tourist Trapped'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '2',
            'Title' => 'The Legend of the Gobblewonker'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '3',
            'Title' => 'Headhunters'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '4',
            'Title' => 'The Hands That Rocks the Mabel'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '5',
            'Title' => 'The Inconveniencing'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '7',
            'Episode' => '6',
            'Title' => 'Dipper vs. Manliness'
        ]);


        //Spongebob Episodes
        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '1',
            'Title' => 'Help Wanted'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '2',
            'Title' => 'Reef Blower'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '3',
            'Title' => 'Bubblestand'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '4',
            'Title' => 'Ripped Pants'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '5',
            'Title' => "Plankton!"
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '8',
            'Episode' => '6',
            'Title' => 'Boating School'
        ]);

        
        //Bones Episodes
        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '1',
            'Title' => 'Pilot'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '2',
            'Title' => 'The Man in the S.U.V'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '3',
            'Title' => 'A Boy in a Tree'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '4',
            'Title' => 'The man in the Bear'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '5',
            'Title' => 'A Boy in a Bush'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '9',
            'Episode' => '6',
            'Title' => 'The Man in the Wall'
        ]);


        //NCIS Episodes
        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '1',
            'Title' => 'Yankee White'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '2',
            'Title' => 'Hung Out to Dry'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '3',
            'Title' => 'Seadog'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '4',
            'Title' => 'The Immortals'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '5',
            'Title' => 'The Curse'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '10',
            'Episode' => '6',
            'Title' => 'High Seas'
        ]);


        //Friends Episodes
        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '1',
            'Title' => 'The Pilot'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '2',
            'Title' => 'The One with the Sonogram at the End'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '3',
            'Title' => 'The One with the Thumb'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '4',
            'Title' => 'The One with George Stephanopoulos'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '5',
            'Title' => 'The One with the East German Laundry Detergent'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '11',
            'Episode' => '6',
            'Title' => 'The One with the Butt'
        ]);


        //Breaking Bad Episodes
        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '1',
            'Title' => 'Pilot'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '2',
            'Title' => 'Cats in the Bag...'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '3',
            'Title' => '...And the bags in the River'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '4',
            'Title' => 'Cancer Man'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '5',
            'Title' => 'Gray Matter'
        ]);

        DB::table('episodes')->insert([
            'MovieID' => '12',
            'Episode' => '6',
            'Title' => 'Crazy Handful of Nothin'
        ]);
    }
}
