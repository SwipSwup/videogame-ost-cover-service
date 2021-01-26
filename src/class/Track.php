<?php

class Track implements JsonSerializable
{
    private int $id;
    private int $length;
    private int $trackNumber;

    private string $trackName;
    private string $artist;

    public function __construct(int $id, string $trackName, string $artist, int $length)
    {
        $this->id = $id;
        $this->trackNumber = $id;
        $this->length = $length;
        $this->trackName = $trackName;
        $this->artist = $artist;
    }

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "length" => $this->length,
            "trackNumber" => $this->trackNumber,
            "trackName" => $this->trackName,
            "artist" => $this->artist
        ];
    }
}