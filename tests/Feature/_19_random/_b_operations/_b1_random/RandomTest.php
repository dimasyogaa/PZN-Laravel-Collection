<?php

namespace Tests\Feature\_19_random\_b_operations\_b1_random;

use Tests\TestCase;

// php artisan test --filter RandomTest
class RandomTest extends TestCase
{
    public function testRandom()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $randomValue = $collection->random();

        echo "\n testRandom : $randomValue\n";

        // Memastikan collection mengembalikan satu data dengan posisi random.
        $this->assertTrue(in_array($randomValue, [1, 2, 3, 4, 5, 6, 7, 8, 9]));
        $this->assertContains($randomValue, $collection->toArray());

        // tidak bisa ditest menggunakan ini :
        // $result = $collection->random();
        // $this->assertEquals(1, $result->all());
    }
}
