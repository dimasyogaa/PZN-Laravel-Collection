<?php

namespace Tests\Feature\_05_for_each;

use Tests\TestCase;

// php artisan test --filter ForEachTest
class ForEachTest extends TestCase
{
    public function testForEach()
    {
        $iniCollection = collect([1,2,3,4,5,6,7,8,9]);
        foreach ($iniCollection as $key => $value) {
            self::assertEquals($key + 1, $value);
        }
    }
}
