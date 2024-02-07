<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b2_last\_b21_last;

use Tests\TestCase;

// php artisan test --filter RetrieveLastTest
class RetrieveLastTest extends TestCase
{
    /**
     * Test untuk mengambil data terakhir di collection menggunakan last().
     */
    public function testLast()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection mengembalikan data terakhir atau null jika tidak ada.
        $this->assertEquals(5, $collection->last());

        $emptyCollection = collect([]);
        $this->assertNull($emptyCollection->last());
    }
}
