<?php

namespace Tests\Feature\_09_flattening\_b_operations\_b2_flatmap;

use Tests\TestCase;

// php artisan test --filter FlatteningFlatMapTest
class FlatteningFlatMapTest extends TestCase
{
    public function testFlatMap()
    {
        $collection = collect([
            [
                "name" => "Yoga",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Dimas",
                "hobbies" => ["Reading", "Writing"]
            ]
        ]);

        $hobbies = $collection->flatMap(function ($item) {

            // harus mengembalikan array/collection
            return $item["hobbies"];
        });

        self::assertEquals(["Coding", "Gaming", "Reading", "Writing"], $hobbies->all());
    }
}
