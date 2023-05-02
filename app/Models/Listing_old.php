<?php 
    namespace App\Models;

    class Listing {
        public static function all(){
         return   [
                [
                    'id' => 1,
                    'title' => 'Listing one',
                    'description' => "Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quo sapiente voluptas cupiditate harum minima temporibus
                     adipisci praesentium autem. Illo, dicta! Illo sint iusto laborum omnis,
                      distinctio fugit autem ipsam similique."
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    'description' => "sadfafs sum dolor sit amet consectetur 
                    adipisicing elit.sdafasdtas cupiditate harum minima temporibus
                     adipisci praesentium autem. Illo, dicta! Illo sint iusto laborum omnis,
                      distinctio fugit autem ipsam similique."
                ]
            ];
        }

        public static function find($id){
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }
