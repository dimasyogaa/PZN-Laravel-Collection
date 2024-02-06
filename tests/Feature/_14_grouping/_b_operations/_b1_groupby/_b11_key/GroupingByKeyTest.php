<?php

namespace Tests\Feature\_14_grouping\_b_operations\_b1_groupby\_b11_key;

use Tests\TestCase;

// php artisan test --filter GroupingByKeyTest
class GroupingByKeyTest extends TestCase
{
    public function testGroupByKey()
    {
        $iniCollection = collect([
            [
                "name" => "Yoga",
                "department" => "IT"
            ],
            [
                "name" => "Dimas",
                "department" => "IT"
            ],
            [
                "name" => "Afrizal",
                "department" => "Kedokteran"
            ],
        ]);

        $result = $iniCollection->groupBy("department");

        self::assertEquals([
            "IT" => collect([
                [
                    "name" => "Yoga",
                    "department" => "IT"
                ],
                [
                    "name" => "Dimas",
                    "department" => "IT"
                ]]),
            "Kedokteran" => collect([
                [
                    "name" => "Afrizal",
                    "department" => "Kedokteran"
                ]])
        ], $result->all());


    }
}
