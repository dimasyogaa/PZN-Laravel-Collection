<?php

namespace Tests\Feature\_08_zipping\_b_operations\_b2_concat;

use Tests\TestCase;

// php artisan test --filter ZippingConcatTest
class ZippingConcatTest extends TestCase
{
    public function testConcat()
    {
        $collection1 = collect([1, 2, 3]);
        $collection2 = collect([4, 5, 6]);
        $collection3 = $collection1->concat($collection2);

        self::assertEquals([1, 2, 3, 4, 5, 6], $collection3->all());
    }
}
