<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
	protected $table = 'weather';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'temperature', 'wind',
	];
}
