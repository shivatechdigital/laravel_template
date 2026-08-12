<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MembershipPlan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'discount_type',
        'discount_value',
        'final_price',
        'expiry_days',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'discount_value' => 'decimal:2',
            'final_price' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    public function userMemberships(): HasMany
    {
        return $this->hasMany(UserMembership::class);
    }
}
