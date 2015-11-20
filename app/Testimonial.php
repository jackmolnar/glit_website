<?php namespace GLITwebsite;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

    protected $table = 'testimonial';

    public $timestamps = false;

    protected $fillable = array('position_title', 'company', 'testimonial', 'image', 'image_alt', 'name');

}
