<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b1_first\_b14_firstwhere_keyvalue;

use Tests\TestCase;

// php artisan test --filter RetrieveFirstWhereTest
class RetrieveFirstWhereTest extends TestCase
{
    /**
     * Test untuk mengambil data pertama di collection dimana key sama dengan value menggunakan firstWhere(key, value).
     */
    public function testFirstWhere()
    {
        $collection = collect([
            ['id' => 1, 'name' => 'John'],
            ['id' => 2, 'name' => 'Jane'],
            ['id' => 3, 'name' => 'Doe'],
        ]);

        // Memastikan collection mengembalikan data pertama dimana key sama dengan value.
        $result = $collection->firstWhere('id', value: 2);
        $this->assertEquals(['id' => 2, 'name' => 'Jane'], $result);
    }
}
