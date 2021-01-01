<?php


class ost implements JsonSerializable
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

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "ostName" => $this->ostName,
            "videoGameName" => $this->videoGameName,
            "releaseYear" => $this->releaseYear,
            "tracks" => $this->tracks
        ];
    }
}