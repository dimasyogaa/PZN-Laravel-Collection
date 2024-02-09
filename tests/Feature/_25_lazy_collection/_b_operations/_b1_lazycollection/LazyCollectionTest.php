<?php

namespace Tests\Feature\_25_lazy_collection\_b_operations\_b1_lazycollection;

use Illuminate\Support\LazyCollection;
use Tests\TestCase;

// php artisan test --filter LazyCollectionTest
class LazyCollectionTest extends TestCase
{
    public function testLazyCollection()
    {

        $collection = LazyCollection::make(function () {
            $value = 0;

            while (true) {
                yield $value;
                $value++;
            }
        });

        $result = $collection->take(10);
        $this->assertEqualsCanonicalizing([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $result->all());

    }
}
