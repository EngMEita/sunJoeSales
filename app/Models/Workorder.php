<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function productions()
    {
        return $this->hasMany(Production::class);
    }
}
