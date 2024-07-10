<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('users.*');

        if(!empty(Request::get('id'))) {
            $return = $return->where('users.id', '=', Request::get('id'));
        }
        if(!empty(Request::get('name'))) {
            $return = $return->where('users.name', 'like', '%' .Request::get('name').'%');
        }

        if(!empty(Request::get('email'))) {
            $return = $return->where('users.email', 'like', '%' .Request::get('email').'%');
        }

        if(!empty(Request::get('created_at'))) {
            $return = $return->where('users.created_at', 'like', '%' .Request::get('created_at').'%');
        }

        $return = $return->where('is_delete', '=', 0);
        $return = $return->orderBy('id', 'desc');
        $return = $return->paginate(7);
        return $return;
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('users.*');
        if(!empty(Request::get('id'))) {
            $return = $return->where('users.id', '=', Request::get('id'));
        }
        if(!empty(Request::get('name'))) {
            $return = $return->where('users.name', 'like', '%' .Request::get('name').'%');
        }

        if(!empty(Request::get('email'))) {
            $return = $return->where('users.email', 'like', '%' .Request::get('email').'%');
        }

        if(!empty(Request::get('created_at'))) {
            $return = $return->where('users.created_at', 'like', '%' .Request::get('created_at').'%');
        }
        $return = $return->where('is_delete', '=', 1);
        $return = $return->orderBy('id', 'desc');
        $return = $return->paginate(7);
        return $return;
    }

}
