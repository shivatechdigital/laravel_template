<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class UserMembership extends Model
{
    protected $fillable = [
        'user_id',
        'membership_plan_id',
        'base_price',
        'discount_type',
        'discount_value',
        'final_price',
        'starts_at',
        'expires_at',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'base_price' => 'decimal:2',
            'discount_value' => 'decimal:2',
            'final_price' => 'decimal:2',
            'starts_at' => 'datetime',
            'expires_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function membershipPlan(): BelongsTo
    {
        return $this->belongsTo(MembershipPlan::class);
    }

    public function getResolvedStatusAttribute(): string
    {
        if ($this->status === 'cancelled') {
            return 'cancelled';
        }

        return $this->expires_at instanceof Carbon && $this->expires_at->isPast()
            ? 'expired'
            : 'active';
    }
}
