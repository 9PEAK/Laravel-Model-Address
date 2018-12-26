<?php

namespace Peak\Laravel\Model\Address;

class Core
{

	const TABLE = '9peak_address';

	protected $table = self::TABLE;

	public $timestamps = false;

	protected $fillable = [
		'province' => 'province',
		'city' => 'city',
		'area' => 'area',
		'address' => 'address',
		'name' => 'name',
		'phone' => 'phone',
		'tel' => 'tel',
		'status' => 'status',
		'user_id' => 'user_id',
	];

	protected $casts = [
		'status' => 'boolean'
	];




}
