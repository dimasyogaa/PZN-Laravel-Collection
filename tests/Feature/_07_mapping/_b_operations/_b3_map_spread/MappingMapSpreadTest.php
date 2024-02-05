<?php

namespace Tests\Feature\_07_mapping\_b_operations\_b3_map_spread;

use App\Data\_07_mapping\Person;
use Tests\TestCase;

// php artisan test --filter MappingMapSpreadTest
class MappingMapSpreadTest extends TestCase
{
    public function testMapSpread()
    {
        $iniCollection = collect([["Yoga", "Dimas"], ["Afrizal", "Bambang"]]);

        $result = $iniCollection->mapSpread(function ($firstName, $lastName) {
            $fullname = $firstName . " " . $lastName;
            return new Person($fullname);
        });

        $this->assertEquals([
            new Person("Yoga Dimas"),
            new Person("Afrizal Bambang")
        ], $result->all());
    }
}
