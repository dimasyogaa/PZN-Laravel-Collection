<?php

namespace Tests\Feature\_07_mapping\_b_operations\_b2_map_into;

use App\Data\_07_mapping\Person;
use Tests\TestCase;

// php artisan test --filter MappingMapIntoTest
class MappingMapIntoTest extends TestCase
{
    public function testMapInto()
    {
        $iniCollection = collect(["Yoga"]);

        $result = $iniCollection->mapInto(Person::class);

        $this->assertEquals([new Person("Yoga")], $result->all());
    }
}
