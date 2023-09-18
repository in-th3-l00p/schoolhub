<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "description", "organization_id"
    ];

    public function users() {
        return $this->hasManyThrough(User::class, SchoolClassUser::class);
    }
}
