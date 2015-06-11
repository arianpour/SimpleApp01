<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	//
    protected $fillable=['firstName','lastName','idNumber','nationality'
    ,'client_role'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function AddressBook(){

        return $this->hasOne('App\AddressBook');
    }

}
