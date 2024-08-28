<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockedUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'ip'
    ];

    public function scopeEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    public function scopeIp($query, $ip)
    {
        return $query->where('ip', $ip);
    }

    public function scopeCheck($query, $email, $ip)
    {
        return $query->where('email', $email)->orWhere('ip', $ip);
    }
}
