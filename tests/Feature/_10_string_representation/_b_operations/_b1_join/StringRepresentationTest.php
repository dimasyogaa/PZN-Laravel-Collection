<?php

namespace Tests\Feature\_10_string_representation\_b_operations\_b1_join;

use Tests\TestCase;

// php artisan test --filter StringRepresentationTest
class StringRepresentationTest extends TestCase
{
    public function testJoin()
    {
        $collection = collect(["Yoga", "Dimas", "Pambudi"]);

        self::assertEquals("Yoga-Dimas-Pambudi", $collection->join("-"));
        self::assertEquals("Yoga-Dimas_Pambudi", $collection->join("-", "_"));
        self::assertEquals("Yoga, Dimas and Pambudi", $collection->join(", ", " and "));
    }
}
