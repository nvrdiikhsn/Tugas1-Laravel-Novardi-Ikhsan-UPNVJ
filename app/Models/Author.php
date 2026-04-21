<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['id' => 1, 'name' => 'Tere Liye'],
        ['id' => 2, 'name' => 'Mark Manson'],
        ['id' => 3, 'name' => 'Masashi Kishimoto'],
        ['id' => 4, 'name' => 'James Clear'],
        ['id' => 5, 'name' => 'Andrea Hirata'],
        ['id' => 6, 'name' => 'Raditya Dika'],
        ['id' => 7, 'name' => 'Pramoedya Ananta Toer'],
        ['id' => 8, 'name' => 'Habiburrahman El Shirazy']
    ];

    public function getAuthors(){
        return $this->authors;
    }
}