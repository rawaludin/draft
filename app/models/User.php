<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface 
{
	use ConfideUser;
	use HasRole;

	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));
    		return "http://www.gravatar.com/avatar/$hash";
	}
}
