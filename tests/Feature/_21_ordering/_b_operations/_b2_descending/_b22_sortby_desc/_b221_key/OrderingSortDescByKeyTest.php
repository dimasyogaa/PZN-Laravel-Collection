<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b2_descending\_b22_sortbydesc\_b221_key;

use Tests\TestCase;

// php artisan test --filter OrderingSortDescByKeyTest
class OrderingSortDescByKeyTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara descending berdasarkan key menggunakan sortByDesc(key).
     */
    public function testSortByDesc()
    {
        $collection = collect([
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'Doe', 'age' => 35],
        ]);

        // Memastikan collection diurutkan secara descending berdasarkan key 'age'.
        $sortedCollection = $collection->sortByDesc('age');
        $this->assertEqualsCanonicalizing([
            ['name' => 'Doe', 'age' => 35],
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
        ], $sortedCollection->toArray());
    }
}
