<?php namespace GLITwebsite;

use Illuminate\Database\Eloquent\Model;

class PageDetails extends Model {

    protected $table = 'pages_details';

    public $timestamps = false;

    protected $fillable = array('slug', 'title', 'description', 'h1', 'h2', 'length', 'degree', 'vtour', 'subtext', 'primary_img', 'primary_text', 'new_program', 'testing');


}
