<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function products()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'Shari',
                'image' => 'img/1.jpg',
                'price' => '200',
                'description' => 'T-Shirt Description'
            ],


            1 => [
                'id' => 2,
                'name' => 'Jins Pank',
                'image' => 'img/3.jpg',
                'price' => '500',
                'description' => 'Jins Pank Description'
            ],

            2 => [
                'id' => 3,
                'name' => 'New-shari',
                'image' => 'img/5.jpg',
                'price' => '800',
                'description' => 'New Shari Description'
            ],

        ];
    }
}
