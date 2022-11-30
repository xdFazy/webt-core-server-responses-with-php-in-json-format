<?php
require_once 'GameOST.php';
require_once 'Song.php';
class Seeder
{
    public static function createMockData() :array {

        $OSTs = [];

        $OST1songs = [];

        $OST1songs[0] = new Song(1, "America", "Logic",1,172);
        $OST1songs[1] = new Song(2, "Confess", "Logic",2,92);
        $OST1songs[2] = new Song(3, "Killing Spree", "Logic & Ansel Elgort",3,222);
        $OST1songs[3] = new Song(4, "Take It Back", "Logic",4,312);

        $OSTs[0] = new GameOST(1, "Everybody", "by Logic", 2017, $OST1songs);

        $OST2songs = [];

        $OST2songs[0] = new Song(1, "Glimpse of Us", "Joji",1,72);
        $OST2songs[1] = new Song(2, "Feeling like the End", "Joji",2,72);
        $OST2songs[2] = new Song(3, "Die For You", "Joji",3,72);
        $OST2songs[3] = new Song(4, "Before the Day is Over", "Joji",4,72);

        $OSTs[1] = new GameOST(1, "SMITHEREENS", "by Joji", 2022, $OST2songs);


        $OST3songs = [];

        $OST3songs[0] = new Song(1, "Starboy", "The Weeknd & Daft Punk",1,72);
        $OST3songs[1] = new Song(2, "Party Monster", "The Weeknd",2,72);
        $OST3songs[2] = new Song(3, "False Alarm", "The Weeknd",3,72);
        $OST3songs[3] = new Song(4, "Reminder", "The Weeknd",4,72);

        $OSTs[2] = new GameOST(1, "Starboy", "by The Weeknd", 2016, $OST3songs);

        return $OSTs;
    }
}