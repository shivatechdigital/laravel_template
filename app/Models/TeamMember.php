<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'bio',
        'image_path',
        'show_on_home',
        'home_priority',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'show_on_home' => 'boolean',
            'is_active' => 'boolean',
        ];
    }
}
