<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'username',
        'email',
        'password',
        'forename',
        'surname',
        'date_of_birth',
        'address',
        'phone_no',
        'postcode',
        'role',
        'status',
        // Add more fields as needed
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public static function checkRole($role){
        $parent = Auth::user();
        if($parent->role != $role){

            if($parent->role == 'admin'){
                return Redirect::route('dashboard');
            }else if($parent->role == 'coach'){
                return Redirect::route('coach');
            }else{
                return Redirect::route('login');
            }
        }
    }

}
