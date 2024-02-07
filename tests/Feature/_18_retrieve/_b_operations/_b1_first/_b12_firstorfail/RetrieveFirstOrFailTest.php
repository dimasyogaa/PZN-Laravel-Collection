<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b1_first\_b12_firstorfail;

use Illuminate\Support\ItemNotFoundException;
use Tests\TestCase;

// php artisan test --filter RetrieveFirstOrFailTest
class RetrieveFirstOrFailTest extends TestCase
{
    /**
     * Test untuk mengambil data pertama di collection atau melempar exception jika tidak ada menggunakan firstOrFail().
     */
    public function testFirstOrFail()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection mengembalikan data pertama jika ada.
        $this->assertEquals(1, $collection->firstOrFail());

        // Memastikan exception dilempar jika collection kosong.
        $this->expectException(ItemNotFoundException::class);
        collect([])->firstOrFail();



    }
}
