<?php

namespace Tests\Feature\_06_manipulasi_collection\_b_operations\_b1_push;

use Tests\TestCase;

// php artisan test --filter ManipulasiPushTest
class ManipulasiPushTest extends TestCase
{
    /**
     * Test untuk menambah data ke paling belakang menggunakan push().
     */
    public function testPush()
    {
        $collection = collect([1, 2, 3]);
        $collection->push(4);

        // Memastikan data telah ditambahkan ke paling belakang.
        $this->assertEquals([1, 2, 3, 4], $collection->all());
    }

}
