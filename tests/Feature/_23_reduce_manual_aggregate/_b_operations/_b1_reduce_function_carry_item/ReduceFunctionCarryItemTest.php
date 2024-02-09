<?php

namespace Tests\Feature\_23_reduce\_b_operations\_b1_reduce_function_carry_item;

use Tests\TestCase;


// php artisan test --filter ReduceFunctionCarryItemTest
class ReduceFunctionCarryItemTest extends TestCase
{
    public function testReduce()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $result = $collection->reduce(function ($carry, $item) {
            return $carry + $item;
        });
        $this->assertEquals(45, $result);

        // reduce(1,2) = 3
        // reduce(3,3) = 6
        // reduce(6,4) = 10
        // reduce(10,5) = 15
        // reduce(15,6) = 21
        // reduce(21,7) = 28
        // reduce(28,8) = 36
        // reduce(36,9) = 45

    }

}
