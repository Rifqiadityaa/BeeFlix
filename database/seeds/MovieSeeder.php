<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Drama
        DB::table('Movies')->insert([
            'GenreID' => '1',
            'Title' => 'Bohemian Rhapsody',
            'Photo' => 'Bohemian.jpg',
            'Description' => "Freddie Mercury, the lead singer of Queen, defies stereotypes and convention to 
                            become one of history's most beloved entertainers. The bands revolutionary sound 
                            and popular songs lead to Queen's meteoric rise in the 1970s. After leaving the 
                            group to pursue a solo career, Mercury reunites with Queen for the benefit concert 
                            Live Aid, resulting in one of the greatest performances in rock 'n' roll history.",
            'Rating' => '4'
        ]);
        
        DB::table('movies')->insert([
            'GenreID' => '1',
            'Title' => 'The Godfather',
            'Photo' => 'the godfather.jpg',
            'Description' => "this mob drama, based on Mario Puzo's novel of the same name, focuses on the powerful 
                            Italian-American crime family of Don Vito Corleone (Marlon Brando). When the don's 
                            youngest son, Michael (Al Pacino), reluctantly joins the Mafia, he becomes involved 
                            in the inevitable cycle of violence and betrayal. Although Michael tries to maintain 
                            a normal relationship with his wife, Kay (Diane Keaton), he is drawn deeper into the 
                            family business.",
            'Rating' => '5'
        ]);

        DB::table('movies')->insert([
            'GenreID' => '1',
            'Title' => '8 Mile',
            'Photo' => '8 Mile.jpg',
            'Description' => "The people of Detroit know 8 Mile as the city limit, a border, a boundary. It is also 
                            a psychological dividing line that separates Jimmy Smith Jr. (Eminem) from where and who he wants to be. 
                            A provocative fictional examination of a critical week in Jimmy's life.",
            'Rating' => '4'
        ]);

        DB::table('movies')->insert([
            'GenreID' => '1',
            'Title' => 'Full Metal Jacket',
            'Photo' => 'fmj.jpg',
            'Description' => "Stanley Kubrick's take on the Vietnam War follows smart-aleck Private Davis 
                            (Matthew Modine), quickly christened 'Joker' by his foul-mouthed drill sergeant 
                            (R. Lee Ermey), and pudgy Private Lawrence (Vincent D'Onofrio), nicknamed 'Gomer Pyle', 
                            as they endure the rigors of basic training. Though Pyle takes a frightening detour, Joker
                            graduates to the Marine Corps and is sent to Vietnam as a journalist, covering and 
                            eventually participating in the bloody Battle of Hué.",
            'Rating' => '5'
        ]);
        

        //Kids
        DB::table('Movies')->insert([
            'GenreID' => '2',
            'Title' => 'Adventure Time',
            'Photo' => 'adventure time.jpg',
            'Description' => "Adventure Time follows the adventures of a boy named Finn the Human 
                            (voiced by Jeremy Shada), and his best friend and adoptive brother Jake the Dog 
                            (John DiMaggio), who has magical powers to change shape and size at will. Pendleton 
                            Ward, the series' creator, describes Finn as a 'fiery little kid with strong morals'.",
            'Rating' => '4'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '2',
            'Title' => 'Phineas and Ferb',
            'Photo' => 'pnf.jpg',
            'Description' => "The show follows the adventures of stepbrothers Phineas Flynn (Vincent Martella) and 
                            Ferb Fletcher (Thomas Sangster), who live in the fictional city of Danville, in a 
                            (never specified) tri-state area, as they seek ways to occupy their time during their 
                            summer vacation.",
            'Rating' => '5'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '2',
            'Title' => 'Gravity Falls',
            'Photo' => 'gravity falls.jpg',
            'Description' => "The series follows the adventures of Dipper Pines (voiced by Jason Ritter) and his 
                            twin sister Mabel (voiced by Kristen Schaal) who are sent to spend the summer with 
                            their great-uncle (or 'Grunkle') Stan (voiced by Hirsch) in Gravity Falls, Oregon, a 
                            mysterious town full of paranormal forces and supernatural creature",
            'Rating' => '4'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '2',
            'Title' => 'Spongebob Squarepants',
            'Photo' => 'spongebob.jpg',
            'Description' => "SpongeBob SquarePants is an energetic and optimistic sea sponge who lives in a submerged 
                            pineapple with his pet snail Gary, who meows like a cat. SpongeBob has a childlike 
                            enthusiasm for life, which carries over to his job as a fry cook at a fast food 
                            restaurant called the Krusty Krab.",
            'Rating' => '4'
        ]);

        
        //TV Show
        DB::table('Movies')->insert([
            'GenreID' => '3',
            'Title' => 'Bones',
            'Photo' => 'bones.jpg',
            'Description' => "The premise of the show is an alliance between forensic anthropologist Dr. Temperance 
                            'Bones' Brennan and FBI Special Agent Seeley Booth. Brennan is the central character 
                            and team leader of the fictional Jeffersonian Institute Medico-Legal Lab, a federal 
                            institution that collaborates with the FBI. This reflects the historical relationship 
                            between the FBI and scientists of the Smithsonian Institution. Set in Washington, D.C., 
                            the show revolves around solving Federal legal cases by examining the human remains of 
                            possible murder victims.",
            'Rating' => '4'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '3',
            'Title' => 'NCIS',
            'Photo' => 'ncis.jpg',
            'Description' => "NCIS is an American action police procedural television series, revolving around a 
                            fictional team of special agents from the Naval Criminal Investigative Service.",
            'Rating' => '5'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '3',
            'Title' => 'Friends',
            'Photo' => 'friends.jpg',
            'Description' => "Friends is a 90's Comedy TV show, based in Manhattan, about 6 friends who go through 
                            just about every life experience imaginable together; love, marriage, divorce, children, 
                            heartbreaks, fights, new jobs and job losses and all sorts of drama.",
            'Rating' => '4'
        ]);

        DB::table('Movies')->insert([
            'GenreID' => '3',
            'Title' => 'Breaking Bad',
            'Photo' => 'bb.jpg',
            'Description' => "Set in Albuquerque, New Mexico, between 2008 and 2010, Breaking Bad follows 
                            Walter White, a meek high school chemistry teacher who transforms into a ruthless player 
                            in the local methamphetamine drug trade, driven by a desire to provide for his family 
                            after being diagnosed with terminal lung cancer.",
            'Rating' => '5'
        ]);
    }
}
