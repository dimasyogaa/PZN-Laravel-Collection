<?php

namespace Tests\Feature\_07_mapping\_b_operations\_b4_map_to_group;

use Tests\TestCase;

// php artisan test --filter MappingMapToGroupTest
class MappingMapToGroupTest extends TestCase
{

    public function testMapToGroups(): void
    {
        $iniCollection = collect([
            [
                "name" => "Yoga",
                "department" => "IT"
            ],
            [
                "name" => "Dimas",
                "department" => "IT"
            ],
            [
                "name" => "Afrizal",
                "department" => "Kedokteran"
            ],
        ]);


        $result = $iniCollection->mapToGroups(function ($item) {

            // harus return key-value
            return [$item["department"] => $item["name"]];
        });


        self::assertEquals([
            "IT" => collect(["Yoga", "Dimas"]),
            "Kedokteran" => collect(["Afrizal"])
        ], $result->all());
    }

}
