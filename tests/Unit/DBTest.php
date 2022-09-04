<?php

namespace Tests\Unit;

use App\Models\Position;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class DBTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_colums_in_users_is_correct()
    {
        $user = new User;

        $expected = [
            'position_id',
            'first_name',
            'last_name',
            'cpf',
            'status',
            'email',
            'password',
        ];

        $arryCompare = array_diff($expected, $user->getFillable());
        $this->assertEquals(1, $this->count($arryCompare));
    }

    public function test_check_colums_in_positions_is_correct()
    {
        $position = new Position;

        $expected = [
            'name',
            'status'
        ];

        $arryCompare = array_diff($expected, $position->getFillable());
        $this->assertEquals(1, $this->count($arryCompare));
    }
}
