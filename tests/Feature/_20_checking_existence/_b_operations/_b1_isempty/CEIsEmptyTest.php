<?php

namespace Tests\Feature\_20_checking_existence\_b_operations\_b1_isempty;

use Tests\TestCase;

class CEIsEmptyTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection kosong menggunakan isEmpty().
     */
    public function testIsEmpty()
    {
        $emptyCollection = collect([]);
        $nonEmptyCollection = collect([1, 2, 3]);

        // Memastikan collection kosong atau tidak sesuai dengan metodenya.
        $this->assertTrue($emptyCollection->isEmpty());
        $this->assertFalse($nonEmptyCollection->isEmpty());
    }
}
