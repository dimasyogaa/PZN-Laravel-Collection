<?php

namespace Tests\Feature\_07_mapping\_b_operations\_b1_map;

use Tests\TestCase;

// php artisan test --filter MappingMapTest
class MappingMapTest extends TestCase
{
    public function testMap()
    {
        $iniCollection = collect([1, 2, 3]);

        $result = $iniCollection->map(function ($item) {
            return $item * 2;
        });

        $this->assertEquals([2, 4, 6], $result->all());
    }
}
