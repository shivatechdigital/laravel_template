<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'description',
        'sub_service_prices',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'sub_service_prices' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
