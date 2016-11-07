<?php namespace App;

// use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Flyers extends Model {

	/**
	 * Fillable fields for a flyer
	 */

	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zipcode',
		'price',
		'description'
	];

	public function scopeLocatedAt($query, $zipcode, $street)
	{
		$street = str_replace('-', ' ', $street);

		return $query->where(compact('zipcode','street'));
	}

	public function getPriceAttribute($price)
	{
		return '$'. number_format($price);
	}

	public function photos()
	{
		return $this->hasMany('App\Photo');
	}

}
