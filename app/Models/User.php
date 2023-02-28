<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'email', 
        'password', 
        'name', 
        'address', 
        'remember_token',
        'rate'
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function scopeAdmin($query)
    {
        return $query->where('is_admin', true);
    }

    public function bills(): HasMany{
        return $this->hasMany(Bill::class);
    }
}
