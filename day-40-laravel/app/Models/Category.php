<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function allCategory(){
        return [
            0 => [
                'id' => 1,
                'name' => 'Electronics',
            ],
            1 => [
                'id' => 2,
                'name' => 'Man Fashion',
            ],
            2 => [
                'id' => 3,
                'name' => 'Woman Fashion',
            ],
            3 => [
                'id' => 4,
                'name' => 'Kids Fashion',
            ]
        ];
    }

}
