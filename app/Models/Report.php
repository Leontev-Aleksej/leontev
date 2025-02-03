<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\softDeletes;

class Report extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(): BelongsTo{
        return $this->BelongsTo(User::class);
    }

    public function status(): BelongsTo{
        return $this->BelongsTo(Service::class);
    }
}
