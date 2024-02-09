<?php

namespace Tests\Feature\_25_lazy_collection\_b_operations\_b2_gemini_bard_ai_google;

use Illuminate\Support\LazyCollection;
use Tests\TestCase;


// php artisan test --filter LazyCollectionGeminiBardAiGoogleTest
class LazyCollectionGeminiBardAiGoogleTest extends TestCase
{

    /**
     * Membuat lazy collection
     */
    public function test_lazy_collection_can_be_created()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5]);

        $this->assertInstanceOf(LazyCollection::class, $collection);
        $this->assertEquals([1, 2, 3, 4, 5], $collection->all());
    }

    /**
     * Memfilter lazy collection
     */
    public function test_lazy_collection_can_be_filtered()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5])
            ->filter(fn ($item) => $item % 2 === 0);

        $this->assertEqualsCanonicalizing([2, 4], $collection->all());
    }

    /**
     * Memetakan lazy collection
     */
    public function test_lazy_collection_can_be_mapped()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5])
            ->map(fn ($item) => $item * 2);

        $this->assertEquals([2, 4, 6, 8, 10], $collection->all());
    }

    /**
     * Mengurangi lazy collection
     */
    public function test_lazy_collection_can_be_reduced()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5])
            ->reduce(fn ($carry, $item) => $carry + $item);

        $this->assertEquals(15, $collection);
    }

    /**
     * Menghitung jumlah item dalam lazy collection
     */
    public function test_lazy_collection_can_be_counted()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5]);

        $this->assertEquals(5, $collection->count());
    }

    /**
     * Mengiterasi lazy collection
     */
    public function test_lazy_collection_can_be_iterated()
    {
        $collection = LazyCollection::make([1, 2, 3, 4, 5]);

        $items = [];
        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertEquals([1, 2, 3, 4, 5], $items);
    }

    /**
     * Mengiterasi lazy collection dengan generator
     */
    public function test_lazy_collection_can_be_iterated_with_generator()
    {
        $collection = LazyCollection::make(function () {
            $item = 0;

            while (true) {
                yield $item;
                $item++;
            }
        });

        $result = $collection->take(10);
        $this->assertEqualsCanonicalizing([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $result->all());
    }
}
