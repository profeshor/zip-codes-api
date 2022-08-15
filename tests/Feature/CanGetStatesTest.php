<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\State;
use Illuminate\Support\Str;
use Database\Seeders\StatesSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanGetStatesTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_states_list() {
        // $this->withoutExceptionHandling();
        $states = State::factory()->count(4)->create();
        return $this->getJson('/api/states')
            ->assertOk()
            ->assertJsonCount(4);
    }

    public function states_data_provider() {
        return [
            'Test Mexico DF' => [9, 'CIUDAD DE MEXICO', null],
            'Test Michoacan' => [17, 'MICHOACAN', 'MH']
        ];
    }

    /**
     * @dataProvider states_data_provider
     */
    public function test_can_retrieve_states_correct_format($id, $state_name, $state_code) {
        $this->seed(StatesSeeder::class);
        return $this->getJson('/api/states')
            ->assertOk()
            ->assertJsonFragment([
                'key' => $id,
                'name' => strtoupper(Str::ascii($state_name)),
                'code' => $state_code,
            ]);
    }
}
