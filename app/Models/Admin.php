<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','phone', 'status', 'type'];
    protected $hidden = ['password','remember_token',];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'string',
        'type' => 'string',
    ];
    public function profile(): HasOne {
        return $this->hasOne(related:AdminProfile::class, foreignKey:'admin_id');
    }
}
