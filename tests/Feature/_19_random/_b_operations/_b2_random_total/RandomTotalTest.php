<?php

namespace Tests\Feature\_19_random\_b_operations\_b2_random_total;

use Tests\TestCase;

// php artisan test --filter RandomTotalTest
class RandomTotalTest extends TestCase
{
    public function testRandomTotal()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $randomValues = $collection->random(5);

        echo "\n testRandomTotal : $randomValues\n";

        // Memastikan collection mengembalikan sejumlah total data dengan posisi random.
        // Memastikan jumlah data yang dikembalikan sesuai dengan total yang diminta.
        $this->assertCount(5, $randomValues);

        // Memastikan semua data yang dikembalikan ada di dalam collection.
        foreach ($randomValues as $value) {
            $this->assertContains($value, $collection->toArray());
            $this->assertTrue(in_array($value, [1, 2, 3, 4, 5, 6, 7, 8, 9]));
        }
        
        // tidak bisa ditest menggunakan ini :
        // $result = $collection->random(5);
        // $this->assertEqualsCanonicalizing([1,2,3,4,5], $result->all());
    }
}
