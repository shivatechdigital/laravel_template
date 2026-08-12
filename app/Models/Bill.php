<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    protected $fillable = [
        'bill_number',
        'user_id',
        'billed_by',
        'membership_plan_id',
        'membership_amount',
        'services_amount',
        'total_amount',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'membership_amount' => 'decimal:2',
            'services_amount' => 'decimal:2',
            'total_amount' => 'decimal:2',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function billedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'billed_by');
    }

    public function membershipPlan(): BelongsTo
    {
        return $this->belongsTo(MembershipPlan::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(BillItem::class);
    }
}
