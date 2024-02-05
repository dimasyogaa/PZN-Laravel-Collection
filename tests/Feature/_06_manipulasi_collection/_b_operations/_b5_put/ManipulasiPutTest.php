<?php

namespace Tests\Feature\_06_manipulasi_collection\_b_operations\_b5_put;

use Tests\TestCase;

// php artisan test --filter ManipulasiPutTest
class ManipulasiPutTest extends TestCase
{
    /**
     * Test untuk mengubah data dengan key menggunakan put().
     */
    public function testPut()
    {
        $collection = collect(['name' => 'John', 'age' => 30]);
        $collection->put('name', 'Jane');

        // Memastikan data dengan key tersebut telah diubah.
        $this->assertEquals(['name' => 'Jane', 'age' => 30], $collection->all());
    }
}
