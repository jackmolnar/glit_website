<?php
/**
 * Created by PhpStorm.
 * User: jmolnar
 * Date: 2/12/2015
 * Time: 3:41 PM
 */

namespace GLITwebsite\Repositories;
use GLITwebsite\Program;
use GLITwebsite\PageDetails;
use GLITwebsite\Testimonial;

class ProgramRepository {


    /**
     * Get all active programs
     * @return mixed
     */
    public function getActivePrograms()
    {
        $programs = Program::where('active', '=', 1)->get();
        return $programs;
    }

    /**
     * Get dropdown array for forms
     * @return mixed
     */
    public function getDropDownArray()
    {
        $program_array = [];
        $programs = Program::where('active', '=', 1)->get();
        foreach($programs as $key => $program)
        {
            $program_array[$program->name] = $program->name;
        }
        return $program_array;
    }

    /**
     * Get the programs data
     * @param $slug
     * @return mixed
     */
    public function getProgramData($slug)
    {
        $program_data = PageDetails::where('slug', '=', $slug)->first();
        return $program_data;
    }

    /**
     * Get the programs testimonials
     * @param $id
     * @return mixed
     */
    public function getProgramTestimonials($id)
    {
        $testimonial_data = Testimonial::where('page_id', '=', $id)->get();

        foreach($testimonial_data as $testimonial)
        {
            $imageDetails = $this->getImageThumbSize($testimonial->image);
            $testimonial->img_offset = $imageDetails['image_offset'];
            $testimonial->max_size_dimension = $imageDetails['max_size_dimension'];
        }

        return $testimonial_data;
    }

    /**
     * Get all testimonials
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllTestimonials()
    {
        $testimonial_data = Testimonial::all();

        foreach($testimonial_data as $testimonial)
        {
            $imageDetails = $this->getImageThumbSize($testimonial->image);
            $testimonial->img_offset = $imageDetails['image_offset'];
            $testimonial->max_size_dimension = $imageDetails['max_size_dimension'];
        }
        return $testimonial_data;
    }

    /**
     * Set the thumbnail image size and get offset amount
     * @param $image
     * @return array
     */
    public function getImageThumbSize($image)
    {
        $image_size = getimagesize(asset('/images/program_images/testimonials/'.$image));
        $image_width = $image_size[0];
        $image_height = $image_size[1];

        $max_size_dimension = 'max-height:125px;';

        if($image_width > $image_height){
            $resize_multiplier = 125 / $image_height;
            $max_size_dimension = 'max-height:125px;';
            $long_side = $resize_multiplier*$image_width;
            $offset_amount = 'margin-left:-'.(($long_side - 150)/2).'px;';
        } else if( $image_width < $image_height) {
            $resize_multiplier = 125 / $image_width;
            $max_size_dimension = 'max-width:125px;';
            $long_side = $resize_multiplier*$image_height;
            $offset_amount = 'margin-top:-'.(($long_side - 150)/2).'px;';
        }

        $image_array = [
            'image_offset' => $offset_amount,
            'max_size_dimension' => $max_size_dimension
        ];
        return $image_array;
    }
}