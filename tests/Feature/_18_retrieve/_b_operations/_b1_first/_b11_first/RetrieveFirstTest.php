<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b1_first\_b11_first;

use Tests\TestCase;

// php artisan test --filter RetrieveFirstTest
class RetrieveFirstTest extends TestCase
{
    /**
     * Test untuk mengambil data pertama di collection menggunakan first().
     */
    public function testFirst()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection mengembalikan data pertama atau null jika tidak ada.
        $this->assertEquals(1, $collection->first());

        $emptyCollection = collect([]);
        $this->assertNull($emptyCollection->first());
    }
}
