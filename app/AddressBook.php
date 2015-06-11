<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model {

	//MassAssign

protected $fillable=['building','street','postcode','state','city','phoneNo'
,'email'];


    public function client(){

        return $this->belongsTo('App\Client');
    }
}
