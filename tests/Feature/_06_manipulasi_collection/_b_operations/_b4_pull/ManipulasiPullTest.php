<?php

namespace Tests\Feature\_06_manipulasi_collection\_b_operations\_b4_pull;

use Tests\TestCase;

// php artisan test --filter ManipulasiPullTest
class ManipulasiPullTest extends TestCase
{
    /**
     * Test untuk menghapus dan mengambil data sesuai dengan key menggunakan pull().
     */
    public function testPull()
    {
        $collection = collect(['name' => 'John', 'age' => 30]);
        $pulledValue = $collection->pull('name');

        // Memastikan nilai yang diambil sesuai dengan key.
        $this->assertEquals('John', $pulledValue);

        // Memastikan data dengan key tersebut telah dihapus.
        $this->assertEquals(['age' => 30], $collection->all());
    }

}
