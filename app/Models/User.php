<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['$id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            // check if the value is already a hash (Regex: String begins with '$2y$##$' followed by at least 50 characters)
            if (preg_match('/^\$2y\$[0-9]*\$.{50,}$/', $value)) {
                // if it is so, set the attribute without hashing again
                $this->attributes['password'] = $value;
            } else {
                // else hash the password and set as attribute
                $this->attributes['password'] = Hash::make($value);
            }
            return true;
        }
        return false;
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class, 'user_id');
    }

    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_id');
    }
}
