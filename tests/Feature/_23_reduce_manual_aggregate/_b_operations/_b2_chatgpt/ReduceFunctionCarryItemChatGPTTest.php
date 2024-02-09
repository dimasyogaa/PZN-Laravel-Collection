<?php

namespace Tests\Feature\_23_reduce\_b_operations\_b2_chatgpt;

use Tests\TestCase;

// php artisan test --filter ReduceFunctionCarryItemChatGPTTest
class ReduceFunctionCarryItemChatGPTTest extends TestCase
{
    /**
     * Test untuk menguji fungsi reduce() pada koleksi.
     */
    public function testReduceChatGPT()
    {
        // Contoh penggunaan reduce untuk menghitung jumlah seluruh elemen dalam koleksi.
        $collection = collect([1, 2, 3, 4, 5]);
        $sum = $collection->reduce(function ($carry, $item) {
            return $carry + $item;
        });

        $this->assertEquals(15, $sum);

        // Contoh penggunaan reduce untuk menggabungkan semua string dalam koleksi.
        $stringCollection = collect(['Hello', ' ', 'World', '!']);
        $concatenatedString = $stringCollection->reduce(function ($carry, $item) {
            return $carry . $item;
        });

        $this->assertEquals('Hello World!', $concatenatedString);
    }
}
