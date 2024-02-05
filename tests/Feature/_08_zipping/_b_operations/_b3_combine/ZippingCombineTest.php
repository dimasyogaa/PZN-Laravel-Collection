<?php

namespace Tests\Feature\_08_zipping\_b_operations\_b3_combine;

use Tests\TestCase;

// php artisan test --filter ZippingCombineTest
class ZippingCombineTest extends TestCase
{
    public function testZip()
    {

        $collection1 = collect(["name", "country"]);
        $collection2 = collect(["Yoga", "Indonesia"]);
        $collection3 = $collection1->combine($collection2);

        self::assertEquals([
            "name" => "Yoga",
            "country" => "Indonesia"
        ], $collection3->all());

    }
}
