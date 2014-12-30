<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Episode extends Eloquent {
	protected $table = 'episode';
	protected $softDelete = true;
	protected $fillable = array('name', 'url', 'participants','description',"keywords","image","length");

}
