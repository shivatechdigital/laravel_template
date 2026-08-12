<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = [
        'platform',
        'label',
        'url',
        'icon_class',
        'css_class',
        'open_new_tab',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'open_new_tab' => 'boolean',
            'is_active' => 'boolean',
        ];
    }
}
