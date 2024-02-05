<?php

namespace Tests\Feature\_11_filtering\_b_operations\_b1_filter;

use Tests\TestCase;

// php artisan test --filter FilteringTest
class FilteringTest extends TestCase
{

    public function testFilter(): void
    {
        $collection = collect([
            "Yoga" => 100,
            "Dimas" => 80,
            "Pambudi" => 90
        ]);

        $result = $collection->filter(function ($item, $key) {
            return $item >= 90;
        });

        self::assertEquals([
            "Yoga" => 100,
            "Pambudi" => 90,
        ], $result->all());
    }

    public function testFilterIndex()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $result = $collection->filter(function ($value, $key) {
            return $value % 2 == 0;
        });

        $this->assertEqualsCanonicalizing([2, 4, 6, 8, 10], $result->all());


        $this->assertNotEquals([2, 4, 6, 8, 10], $result->all());

    }
}
