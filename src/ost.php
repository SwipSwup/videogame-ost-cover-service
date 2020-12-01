<?php
class ost
{
    private string $id;
    private string $ostName;
    private string $videoGameName;
    private $releaseYear;
    private $tracks;

    public function __construct($id, $ostName, $videoGameName, $releaseYear, $tracks)
    {
        $this->id = $id;
        $this->ostName = $ostName;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracks = $tracks;
    }
}