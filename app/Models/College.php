<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class College extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "country_id",
        "state_id",
        "city_id",
        "college_name",
        "short_description",
        "description",
        "college_status",
        "active"
    ];

    protected $hidden = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('college_name', 'like', '%' .  $search . '%');
            // ->orWhere('active', 'like', '%' .  $search . '%');
        });
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
