<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    CONST ROLE_ADMIN = 1;
    CONST ROLE_USER = 2;

    private static $arrRoleName = array(
        self::ROLE_ADMIN    =>  'Admin',
        self::ROLE_USER     =>  'User'
    );

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isAdmin() {
        $user = Auth::user();

        return $user && $user->role == User::ROLE_ADMIN;
    }

    public static function getRoleName() {
        $user = Auth::user();

        return self::$arrRoleName[$user->role];
    }

    public function getUserRoleName() {
        return self::$arrRoleName[$this->role];
    }

    public function highMemes()
    {
        return $this->hasMany(HighMeme::class);
    }

    public function normalMemes()
    {
        return $this->hasMany(NormalMeme::class);
    }
}
