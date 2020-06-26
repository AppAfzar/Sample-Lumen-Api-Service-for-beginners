<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, SoftDeletes;

    protected $fillable = [
        'name', 'mobile', 'block', 'active', 'gender', 'birthday', 'country_id', 'state_id', 'city_id',
        'passcode', 'expire_passcode', 'timezone', 'locale', 'image_url'
    ];

    protected $hidden = [
        'mobile', 'block', 'active', 'gender', 'birthday', 'country_id', 'state_id', 'city_id',
        'passcode', 'expire_passcode', 'timezone', 'locale', 'created_at', 'updated_at', 'deleted_at'
    ];


    public function logoutThisDevice($deviceId)
    {
        return $this->hasMany(Authenticate::class)->where('pid', $deviceId)->delete();
    }

    public function logoutOtherDevice($deviceId)
    {
        return $this->hasMany(Authenticate::class)->where('pid', '!=', $deviceId)->delete();
    }

    public function logoutAllDevice()
    {
        return $this->hasMany(Authenticate::class)->delete();
    }

    public function getUser()
    {
        return Auth::user();
    }



}
