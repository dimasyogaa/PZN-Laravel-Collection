<?php

namespace Tests\Feature\_06_manipulasi_collection\_b_operations\_b2_pop;

use Tests\TestCase;

// php artisan test --filter ManipulasiPopTest
class ManipulasiPopTest extends TestCase
{
    /**
     * Test untuk menghapus dan mengambil data paling terakhir menggunakan pop().
     */
    public function testPop()
    {
        $collection = collect([1, 2, 3]);
        $poppedValue = $collection->pop();

        // Memastikan nilai yang diambil adalah nilai paling terakhir.
        $this->assertEquals(3, $poppedValue);

        // Memastikan data paling terakhir telah dihapus.
        $this->assertEquals([1, 2], $collection->all());
    }

}
