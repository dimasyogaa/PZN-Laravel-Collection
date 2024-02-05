<?php

namespace Tests\Feature\_06_manipulasi_collection\_b_operations\_b3_prepend;

use Tests\TestCase;

// php artisan test --filter ManipulasiPrependTest
class ManipulasiPrependTest extends TestCase
{
    /**
     * Test untuk menambah data ke paling depan menggunakan prepend().
     */
    public function testPrepend()
    {
        $collection = collect([1, 2, 3]);
        $collection->prepend(0);

        // Memastikan data telah ditambahkan ke paling depan.
        $this->assertEquals([0, 1, 2, 3], $collection->all());
    }
}
