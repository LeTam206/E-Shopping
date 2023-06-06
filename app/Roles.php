<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'name'
    ];
    protected $primaryKey = 'roles';
 	protected $table = 'users';

 	public function admin(){
 		return $this->belongsToMany('App\Admin');
 	}
}
