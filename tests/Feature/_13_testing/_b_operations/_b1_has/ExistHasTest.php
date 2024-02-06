<?php

namespace Tests\Feature\_13_testing\_b_operations\_b1_has;

use Tests\TestCase;

// php artisan test --filter ExistHasTest
class ExistHasTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki semua key data menggunakan has().
     */
    public function testHas()
    {
        $collection = collect(['name' => 'John', 'age' => 30]);

        // Memastikan collection memiliki semua key yang diberikan.
        $this->assertTrue($collection->has(['name', 'age']));
        $this->assertFalse($collection->has(['name', 'address']));
    }
}
