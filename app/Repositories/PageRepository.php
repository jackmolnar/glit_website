<?php
/**
 * Created by PhpStorm.
 * User: jmolnar
 * Date: 2/18/2015
 * Time: 3:35 PM
 */

namespace GLITwebsite\Repositories;
use GLITwebsite\PageDetails;

class PageRepository {

    /**
     * Get page data
     * @param $slug
     * @return mixed
     */
    public function getPageData($slug)
    {
        $page_data = PageDetails::where('slug', '=', $slug)->first();
        return $page_data;
    }
} 