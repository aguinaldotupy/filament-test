<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Patient extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'date_of_birth',
        'name',
        'owner_id',
        'type',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
 
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
