<?php
include_once "ost.php";

class seeder
{
    public static function createOsts(): array{
        return [
            new ost(
                1,
                "Boneworks",
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
            )
        ];
    }
}