<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b1_ascending\_b13_sortkeys;

use Tests\TestCase;

// php artisan test --filter OrderingSortKeysTest
class OrderingSortKeysTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara ascending berdasarkan keys menggunakan sortKeys().
     */
    public function testSortKeys()
    {
        $collection = collect([
            'z' => 3,
            'a' => 1,
            'b' => 4,
            'c' => 2,
        ]);

        // Memastikan collection diurutkan secara ascending berdasarkan keys.
        $sortedCollection = $collection->sortKeys();
        $this->assertEqualsCanonicalizing([
            'a' => 1,
            'b' => 4,
            'c' => 2,
            'z' => 3,
        ], $sortedCollection->toArray());
    }
}
