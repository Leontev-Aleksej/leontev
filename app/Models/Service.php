<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function reports(): HasMany{
        return $this->hasMany(Report::class, 'status_id', 'id');
    }
}
