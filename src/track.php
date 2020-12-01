<?php


class track
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
}