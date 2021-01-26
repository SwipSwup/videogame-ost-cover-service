<?php
include_once "Ost.php";
include_once "Track.php";

class Seeder
{
    public static function createOsts(): array
    {
        return [
            new Ost(
                1,
                "Boneworks_OST",
                "Boneworks",
                "2019",
                [
                    new Track(
                        1,
                        "Bone Theme",
                        "Michael Wyckoff",
                        288
                    ),
                    new Track(
                        2,
                        "Bone Rhapsody",
                        "Michael Wyckoff",
                        128
                    ),
                    new Track(
                        3,
                        "Existence",
                        "Michael Wyckoff",
                        267
                    ),
                    new Track(
                        4,
                        "Who am I",
                        "Michael Wyckoff",
                        294
                    ),
                ]
            ),
            new Ost(
                2,
                "Spider-Man_Miles_Morales_OST",
                "Marvel's Spider-Man: Miles Morales",
                "2020",
                [
                    new Track(
                        1,
                        "Don't Give Up",
                        "John Paesano",
                        284
                    ),
                    new Track(
                        2,
                        "Rhino Rampage",
                        "John Paesano",
                        279
                    ),
                    new Track(
                        3,
                        "New York's Only Spider-Man",
                        "John Paesano",
                        207
                    ),
                    new Track(
                        4,
                        "Spider-Training",
                        "John Paesano",
                        210
                    )
                ]
            ),
            new Ost(
                3,
                "Titanfall_2_OST",
                "Titanfall 2",
                "2016",
                [
                    new Track(
                        1,
                        "BT-7274",
                        "Stephen Barton",
                        337
                    ),
                    new Track(
                        2,
                        "Rifleman Cooper",
                        "Stephen Barton",
                        159
                    ),
                    new Track(
                        3,
                        "Apex Predators",
                        "Stephen Barton",
                        345
                    ),
                    new Track(
                        4,
                        "Link to Pilot",
                        "Stephen Barton",
                        144
                    )
                ]
            )
        ];
    }
}