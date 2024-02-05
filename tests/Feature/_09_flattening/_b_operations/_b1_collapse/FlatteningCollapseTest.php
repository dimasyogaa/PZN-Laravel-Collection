<?php

namespace Tests\Feature\_09_flattening\_b_operations\_b1_collapse;

use Tests\TestCase;

// php artisan test --filter FlatteningCollapseTest
class FlatteningCollapseTest extends TestCase
{
    public function testCollapse()
    {
        $collection = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]);
        $result = $collection->collapse();
        self::assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], $result->all());
    }
}
