<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b2_descending\_b23_sortkeys_desc;

use Tests\TestCase;

// php artisan test --filter OrderingSortKeysDescTest
class OrderingSortKeysDescTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara descending berdasarkan keys menggunakan sortKeysDesc().
     */
    public function testSortKeysDesc()
    {
        $collection = collect([
            'z' => 3,
            'a' => 1,
            'b' => 4,
            'c' => 2,
        ]);

        // Memastikan collection diurutkan secara descending berdasarkan keys.
        $sortedCollection = $collection->sortKeysDesc();
        $this->assertEqualsCanonicalizing([
            'z' => 3,
            'c' => 2,
            'b' => 4,
            'a' => 1,
        ], $sortedCollection->toArray());
    }
}
