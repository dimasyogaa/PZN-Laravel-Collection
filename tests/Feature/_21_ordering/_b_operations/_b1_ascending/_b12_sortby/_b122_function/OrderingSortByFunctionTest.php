<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b1_ascending\_b12_sortby\_b122_function;

use Tests\TestCase;

// php artisan test --filter OrderingSortByFunctionTest
class OrderingSortByFunctionTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara ascending berdasarkan hasil fungsi menggunakan sortBy(function).
     */
    public function testSortByFunction()
    {
        $collection = collect([
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'Doe', 'age' => 35],
        ]);

        // Mengurutkan secara ascending berdasarkan hasil fungsi 'age'.
        $sortedCollection = $collection->sortBy(function ($item) {
            return $item['age'];
        });

        $this->assertEqualsCanonicalizing([
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'John', 'age' => 30],
            ['name' => 'Doe', 'age' => 35],
        ], $sortedCollection->toArray());
    }
}
