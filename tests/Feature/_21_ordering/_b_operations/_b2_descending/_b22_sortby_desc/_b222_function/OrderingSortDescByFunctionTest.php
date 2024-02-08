<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b2_descending\_b22_sortbydesc\_b222_function;

use Tests\TestCase;

// php artisan test --filter OrderingSortDescByFunctionTest
class OrderingSortDescByFunctionTest extends TestCase
{

    /**
     * Test untuk mengurutkan secara descending berdasarkan hasil fungsi menggunakan sortByDesc(function).
     */
    public function testSortByDescFunction()
    {
        $collection = collect([
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
            ['name' => 'Doe', 'age' => 35],
        ]);

        // Mengurutkan secara descending berdasarkan hasil fungsi 'age'.
        $sortedCollection = $collection->sortByDesc(function ($item) {
            return $item['age'];
        });

        $this->assertEqualsCanonicalizing([
            ['name' => 'Doe', 'age' => 35],
            ['name' => 'John', 'age' => 30],
            ['name' => 'Jane', 'age' => 25],
        ], $sortedCollection->toArray());
    }
}
