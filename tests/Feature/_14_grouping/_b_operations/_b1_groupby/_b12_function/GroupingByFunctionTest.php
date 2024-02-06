<?php

namespace Tests\Feature\_14_grouping\_b_operations\_b1_groupby\_b12_function;

use Tests\TestCase;

// php artisan test --filter GroupingByFunctionTest
class GroupingByFunctionTest extends TestCase
{
    public function testGroupByFunction()
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

        $result = $iniCollection->groupBy(function ($value, $key) {
            return strtolower($value["department"]);
        });

        self::assertEquals([
            "it" => collect([
                [
                    "name" => "Yoga",
                    "department" => "IT"
                ],
                [
                    "name" => "Dimas",
                    "department" => "IT"
                ]]),
            "kedokteran" => collect([
                [
                    "name" => "Afrizal",
                    "department" => "Kedokteran"
                ]])
        ], $result->all());


    }
}
