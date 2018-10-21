<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'phone_number', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeGetUserByRole($query, $role){
        $query = DB::table('users')
            ->select('*')
            ->where('users.role', '=', $role)
            ->get();
        return $query;
    }

    public function isAdmin()
    {
        return $this->role == 'Admin';
    }

    public function scopeSelectCountTotallyAgency($query) {
        $query = DB::table('users')->where('users.role', '=', Role::AGENCY)->count();
        return $query;
    }
}
