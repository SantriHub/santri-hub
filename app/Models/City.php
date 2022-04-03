<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'city_name', 'active',
    ];

    protected $hidden = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('city_name', 'like', '%' .  $search . '%');
            // ->orWhere('active', 'like', '%' .  $search . '%');
        });
    }

    public function colleges()
    {
        return $this->hasMany(College::class);
    }
}
