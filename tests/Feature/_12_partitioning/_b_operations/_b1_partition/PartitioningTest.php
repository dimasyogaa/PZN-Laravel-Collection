<?php

namespace Tests\Feature\_12_partitioning\_b_operations\_b1_partition;

use Tests\TestCase;

// php artisan test --filter PartitioningTest
class PartitioningTest extends TestCase
{
    public function testPartition(): void
    {
        $collection = collect([
            "Yoga" => 100,
            "Dimas" => 80,
            "Pambudi" => 90
        ]);

        [$result1, $result2] = $collection->partition(function ($item, $key) {
            return $item >= 90;
        });

        self::assertEquals([
            "Yoga" => 100,
            "Pambudi" => 90,
        ], $result1->all());

        self::assertEquals([
            "Dimas" => 80
        ], $result2->all());
    }
}
