<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{

    protected $fillable = ['namarole'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
