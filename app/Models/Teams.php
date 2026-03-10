<?php

namespace App\Models;

use Database\Factories\TeamsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    /** @use HasFactory<TeamsFactory> */
    use HasFactory;
}
