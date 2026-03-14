<?php

use App\Models\Classes;
use App\Models\Staff;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->withoutMiddleware(ValidateCsrfToken::class);
});

test('it requires at least one period when storing a class', function () {
    $staff = Staff::factory()->create();

    $response = $this->post(route('class.store'), [
        'name' => 'Turma A',
        'morning' => '',
        'afternoon' => '',
        'full_time' => '',
        'staff_ids' => [$staff->id],
    ]);

    $response
        ->assertSessionHasErrors(['periods'])
        ->assertRedirect();

    expect(Classes::query()->count())->toBe(0);
});

test('it stores a class when at least one period is informed', function () {
    $staff = Staff::factory()->create();

    $response = $this->post(route('class.store'), [
        'name' => 'Turma B',
        'morning' => 25,
        'afternoon' => '',
        'full_time' => '',
        'staff_ids' => [$staff->id],
    ]);

    $response
        ->assertRedirect(route('class.index'))
        ->assertSessionHasNoErrors();

    $this->assertDatabaseHas('classes', [
        'name' => 'Turma B',
        'morning' => 25,
        'afternoon' => 0,
        'full_time' => 0,
    ]);

    $class = Classes::query()->where('name', 'Turma B')->firstOrFail();

    $this->assertDatabaseHas('class_staff', [
        'class_id' => $class->id,
        'staff_id' => $staff->id,
    ]);
});
