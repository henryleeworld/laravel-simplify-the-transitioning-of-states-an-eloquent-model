<?php

namespace App\Models;

use App\StateMachines\SalesOrders\StatusStateMachine;
use Asantibanez\LaravelEloquentStateMachines\Traits\HasStateMachines;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasStateMachines;

    public $stateMachines = [
        'status' => StatusStateMachine::class,
    ];
}
