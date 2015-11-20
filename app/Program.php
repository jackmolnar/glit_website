<?php namespace GLITwebsite;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

	protected $table = 'programs';

    public $timestamps = false;

    protected $fillable = array('name', 'active');
}
