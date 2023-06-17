<?php
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
            [
            'id' => 1,
            'title' => 'Listing One',
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet unde ea molestiae sed, quis dolore officiis ipsam eos quo, fugit, pariatur debitis fugiat nostrum blanditiis modi est quidem quos repudiandae! In ad assumenda odio iure facere nulla amet maiores nisi!"
            ],
            [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet unde ea molestiae sed, quis dolore officiis ipsam eos quo, fugit, pariatur debitis fugiat nostrum blanditiis modi est quidem quos repudiandae! In ad assumenda odio iure facere nulla amet maiores nisi!"
            ],
          ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach($listings as $listing) {
        if($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }