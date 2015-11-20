<?php namespace GLITwebsite;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    protected $table = 'news';

    public $timestamps = false;

    protected $fillable = array('news_date', 'future_event', 'event_date', 'slug', 'title', 'description', 'image', 'image_alt_text', 'content');

}
