<?php

namespace Tests\Feature\_13_testing\_b_operations\_b2_hasany;

use Tests\TestCase;

// php artisan test --filter ExistHasAnyTest
class ExistHasAnyTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki salah satu key data menggunakan hasAny().
     */
    public function testHasAny()
    {
        $collection = collect(['name' => 'John', 'age' => 30]);

        // Memastikan collection memiliki setidaknya salah satu key yang diberikan.
        $this->assertTrue($collection->hasAny(['name', 'address']));
        $this->assertFalse($collection->hasAny(['address', 'gender']));
    }
}
