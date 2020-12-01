<?php
include_once "ost.php";

class seeder
{
    public static function createOsts(): array
    {
        return [
            new ost(
                1,
                "Boneworks_OST",
                "Boneworks",
                "2019",
                [
                    new track(
                        1,
                        "Bone Theme",
                        "Michael Wyckoff",
                        288
                    ),
                    new track(
                        2,
                        "Bone Rhapsody",
                        "Michael Wyckoff",
                        128
                    ),
                    new track(
                        3,
                        "Existence",
                        "Michael Wyckoff",
                        267
                    ),
                    new track(
                        4,
                        "Who am I",
                        "Michael Wyckoff",
                        294
                    ),
                ]
            ),
            new ost(
                2,
                "Spider-Man_Miles_Morales_OST",
                "Marvel's Spider-Man: Miles Morales",
                "2020",
                [
                    new track(
                        1,
                        "Don't Give Up",
                        "John Paesano",
                        284
                    ),
                    new track(
                        2,
                        "Rhino Rampage",
                        "John Paesano",
                        279
                    ),
                    new track(
                        3,
                        "New York's Only Spider-Man",
                        "John Paesano",
                        207
                    ),
                    new track(
                        4,
                        "Spider-Training",
                        "John Paesano",
                        210
                    )
                ]
            ),
            new ost(
                3,
                "Titanfall_2_OST",
                "Titanfall 2",
                "2016",
                [
                    new track(
                        1,
                        "BT-7274",
                        "Stephen Barton",
                        337
                    ),
                    new track(
                        2,
                        "Rifleman Cooper",
                        "Stephen Barton",
                        159
                    ),
                    new track(
                        3,
                        "Apex Predators",
                        "Stephen Barton",
                        345
                    ),
                    new track(
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