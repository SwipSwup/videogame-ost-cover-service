<?php


class ost
{
    private int $id;
    private array $tracks;

    private string $ostName;
    private string $videoGameName;
    private string $releaseYear;

    public function __construct(int $id, string $ostName, string $videoGameName, string $releaseYear, array $tracks)
    {
        $this->id = $id;
        $this->ostName = $ostName;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracks = $tracks;
    }
}