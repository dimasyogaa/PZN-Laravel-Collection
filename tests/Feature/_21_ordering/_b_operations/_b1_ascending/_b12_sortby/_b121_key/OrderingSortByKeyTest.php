<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b1_ascending\_b12_sortby\_b121_key;

use Tests\TestCase;

// php artisan test --filter OrderingSortByKeyTest
class OrderingSortByKeyTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara ascending berdasarkan key menggunakan sortBy(key).
     */
    public function testSortBy()
    {
        $collection = collect([
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'Doe', 'age' => 35],
        ]);

        // Memastikan collection diurutkan secara ascending berdasarkan key 'age'.
        $sortedCollection = $collection->sortBy('age');
        $this->assertEqualsCanonicalizing([
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'John', 'age' => 30],
            ['name' => 'Doe', 'age' => 35],
        ], $sortedCollection->toArray());
    }
}
