<?php

class GameOST implements JsonSerializable
{
//unique ID, name, video game name (the one to which it is related to), a release year, and track list consisting of songs

private int $ID;
private string $name;
private string $gamename;
private string $releaseyear;
private array $trackList;

    /**
     * @param int $ID
     * @param string $name
     * @param string $gamename
     * @param string $releaseyear
     * @param array $trackList
     */
    public function __construct(int $ID, string $name, string $gamename, string $releaseyear, array $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->gamename = $gamename;
        $this->releaseyear = $releaseyear;
        $this->trackList = $trackList;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGamename(): string
    {
        return $this->gamename;
    }

    /**
     * @return string
     */
    public function getReleaseyear(): string
    {
        return $this->releaseyear;
    }

    /**
     * @return array
     */
    public function getTrackList(): array
    {
        return $this->trackList;
    }

    public function __toString(): string{

        return "Titel: " . $this->name
            . "<br> Name des Spiels: " . $this->gamename
            . "<br> Jahr der Veröffentlichung: " . $this->releaseyear
            . "<br> Songs: " . implode(", ", $this->trackList) ;

    }

    public function jsonSerialize(): mixed
    {
        return array(
            "titel"     => $this->name,
            "gameName"  => $this->gamename,
            "songs"     => $this->trackList
        );

        /*return "Titel: " . $this->name
            . "<br> Name des Spiels: " . $this->gamename
            . "<br> Jahr der Veröffentlichung: " . $this->releaseyear
            . "<br> Songs: " . implode(", ", $this->trackList) ;*/

    }
}