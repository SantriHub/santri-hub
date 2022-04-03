<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'country_name', 'active',
    ];

    protected $hidden = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('country_name', 'like', '%' .  $search . '%');
            // ->orWhere('active', 'like', '%' .  $search . '%');
        });
    }

    public function colleges()
    {
        return $this->hasMany(College::class);
    }
}
