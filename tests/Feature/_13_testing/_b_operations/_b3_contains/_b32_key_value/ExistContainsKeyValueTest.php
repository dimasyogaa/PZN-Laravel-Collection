<?php

namespace Tests\Feature\_13_testing\_b_operations\_b3_contains\_b32_key_value;

use Tests\TestCase;

// php artisan test --filter ExistContainsKeyValueTest
class ExistContainsKeyValueTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki data key dengan value menggunakan contains(key, value).
     */
    public function testContainsKeyAndValue()
    {

        // data harus dalam bentuk bisa diiterasi
        $collection = collect([
            ['name' => 'John', 'age' => 30]
        ]);

        // Memastikan collection memiliki data key dengan value yang diberikan.
        $this->assertTrue($collection->contains('name', value:'John'));
        $this->assertFalse($collection->contains('name', value: 'Jane'));
    }
}
