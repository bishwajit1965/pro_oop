<?php
/**
 * Category Model
 */
class CategoryModel
{
    public function __construct()
    {
        // echo "Category model....";
    }

    public function category()
    {
        return [
            'catOne' => 'Education',
            'catTwo' => 'Health',
            'catThree' => 'National',
            'catFour' => 'Sports',
        ];
    }
}
