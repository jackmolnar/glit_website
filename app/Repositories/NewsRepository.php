<?php
/**
 * Created by PhpStorm.
 * User: jmolnar
 * Date: 2/24/2015
 * Time: 2:51 PM
 */

namespace GLITwebsite\Repositories;

use GLITwebsite\News;

class NewsRepository {

    /**
     * Get all news
     * @param null $thumb
     * @param string $order
     * @param string $sort
     * @param bool $paginate
     * @return array|\Illuminate\Contracts\Pagination\LengthAwarePaginator|static[]
     */
    public function getAllNews($thumb = null, $order = 'asc', $sort = 'id', $paginate = false)
    {
        if($paginate == true)
        {
            $news = \DB::table("news")->orderBy($sort, $order)->paginate(15);
        } else {
            $news = \DB::table("news")->orderBy($sort, $order)->get();
        }

        if ($thumb == 'thumb')
        {
            foreach($news as $key => $newsItem)
            {
                if($newsItem->image != '')
                {
                    $imageDetails = $this->getImageThumbSize($newsItem->image);
                    $newsItem->img_offset = $imageDetails['image_offset'];
                    $newsItem->max_size_dimension = $imageDetails['max_size_dimension'];
                }
            }
        }

        return $news;
    }

    /**
     * Set the thumbnail image size and get offset amount
     * @param $image
     * @return array
     */
    public function getImageThumbSize($image)
    {
        $image_size = getimagesize(asset('/images/news_images/'.$image));
        $image_width = $image_size[0];
        $image_height = $image_size[1];

        $max_width = 115;
        $max_height = 150;
        $frame_ratio = $max_width / $max_height;


        if($image_width < $image_height){
            $image_ratio = $image_width / $image_height;

            if($image_ratio > $frame_ratio)
            {
                // base on max height
                $max_size_dimension = 'max-height:'.$max_height.'px;';
                $resize_multiplier = $max_width / $image_width;
                $long_side = $resize_multiplier*$image_height;
                $offset_amount = 'margin-left:-'.(($long_side - $max_width)/2).'px;';
            } else{
                //base on max width
                $max_size_dimension = 'max-width:'.$max_width.'px;';
                $resize_multiplier = $max_height / $image_height;
                $long_side = $resize_multiplier*$image_width;
                $offset_amount = 'margin-top:-'.(($long_side - $max_height)/2).'px;';
            }
        } else {
            $image_ratio = $image_height / $image_width;

            if($image_ratio < $frame_ratio)
            {
                // base on max height
                $max_size_dimension = 'max-height:'.$max_height.'px;';
                $resize_multiplier = $max_width / $image_width;
                $long_side = $resize_multiplier*$image_height;
                $offset_amount = 'margin-left:-'.(($long_side - $max_width)/2).'px;';
            } else{
                //base on max width
                $max_size_dimension = 'max-width:'.$max_width.'px;';
                $resize_multiplier = $max_height / $image_height;
                $long_side = $resize_multiplier*$image_width;
                $offset_amount = 'margin-top:-'.(($long_side - $max_height)/2).'px;';
            }
        }



//        if($image_width > $image_height){
//            $resize_multiplier = $max_width / $image_height;
//            $max_size_dimension = 'max-height:'.$max_height.'px;';
//            $long_side = $resize_multiplier*$image_width;
//            $offset_amount = 'margin-left:-'.(($long_side - 125)/2).'px;';
//        } else if( $image_width < $image_height) {
//            $resize_multiplier = $max_height / $image_width;
//            $max_size_dimension = 'max-width:'.$max_width.'px;';
//            $long_side = $resize_multiplier*$image_height;
//            $offset_amount = 'margin-top:-'.(($long_side - 160)/2).'px;';
//        }

        $image_array = [
            'image_offset' => $offset_amount,
            'max_size_dimension' => $max_size_dimension
        ];
        return $image_array;
    }

    public function getNewsItem($slug)
    {
        $newsItem = News::where('slug', '=', $slug)->first();
        return $newsItem;
    }

    public function getRecentNews()
    {
        $recentNews = \DB::table("news")->orderBy('id', 'desc')->take(3)->get();

        foreach($recentNews as $newsItem)
        {
            if($newsItem->image != '')
            {
                $imageDetails = $this->getImageThumbSize($newsItem->image);
                $newsItem->img_offset = $imageDetails['image_offset'];
                $newsItem->max_size_dimension = $imageDetails['max_size_dimension'];
            }
        }

        return $recentNews;
    }
} 