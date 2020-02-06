<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Users extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table="users";

    public function users(){
        return $this->hasOne('App\Clock');
    }
   
   
}
