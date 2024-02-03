<?php

namespace Tests\Feature\_04_membuat_collection;

use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertEqualsCanonicalizing;

// php artisan test --filter MembuatCollectionTest
class MembuatCollectionTest extends TestCase
{
    public function testCreateCollection()
    {
        // collect([1, 2, 3]) -- konversi array ke collection
        $iniCollection = collect([1, 2, 3]);

        // $iniCollection->all() -- mengembalikan array
        assertEquals([1, 2, 3], $iniCollection->all()); // urutan index-nya harus sama

        assertEqualsCanonicalizing([2, 1, 3], $iniCollection->all());  // tidak perlu memperhatikan urutan index-nya
    }
}
