<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b3_reverse;

use Tests\TestCase;

// php artisan test --filter OrderingReverseTest
class OrderingReverseTest extends TestCase
{
    /**
     * Test untuk membalikkan urutan collection menggunakan reverse().
     */
    public function testReverse()
    {
        $collection = collect([1, 8, 6, 4, 5]);

        // Memastikan collection dibalikkan urutannya.
        $reversedCollection = $collection->reverse();

        // Menggunakan assertEqualsCanonicalizing untuk membandingkan array tanpa memperhatikan urutan index.
        $this->assertEqualsCanonicalizing([5, 4, 6, 8, 1], $reversedCollection->toArray());
    }
}
