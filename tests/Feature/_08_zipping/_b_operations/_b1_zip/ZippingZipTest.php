<?php

namespace Tests\Feature\_08_zipping\_b_operations\_b1_zip;

use Tests\TestCase;


// php artisan test --filter ZippingZipTest
class ZippingZipTest extends TestCase
{
    public function testZip()
    {

        $collection1 = collect([1, 2, 3]);
        $collection2 = collect([4, 5, 6]);
        $collection3 = $collection1->zip($collection2);

        self::assertEquals([
            collect([1, 4]),
            collect([2, 5]),
            collect([3, 6])
        ], $collection3->all());

    }

}
