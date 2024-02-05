<?php

namespace Tests\Feature\_06_manipulasi_collection;

use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertEqualsCanonicalizing;

// php artisan test --filter Manipulasi
// php artisan test --filter ManipulasiCollectionTestD
class ManipulasiCollectionTest extends TestCase
{

    public function testCrud()
    {
        $iniCollection = collect([]);
        $iniCollection->push(1,2,3);
        assertEqualsCanonicalizing([1,2,3], $iniCollection->all());

        $result = $iniCollection->pop();
        assertEquals(3, $result);
        assertEqualsCanonicalizing([1,2], $iniCollection->all());
    }

    /**
     * Test untuk menambah data ke paling belakang menggunakan push().
     */
    public function testPush()
    {
        $collection = collect([1, 2, 3]);
        $collection->push(4);

        // Memastikan data telah ditambahkan ke paling belakang.
        $this->assertEquals([1, 2, 3, 4], $collection->all());
    }

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

    /**
     * Test untuk menambah data ke paling depan menggunakan prepend().
     */
    public function testPrepend()
    {
        $collection = collect([1, 2, 3]);
        $collection->prepend(0);

        // Memastikan data telah ditambahkan ke paling depan.
        $this->assertEquals([0, 1, 2, 3], $collection->all());
    }

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
