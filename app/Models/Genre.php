<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['id' => 1, 'name' => 'Fiksi'],
        ['id' => 2, 'name' => 'Non-Fiksi'],
        ['id' => 3, 'name' => 'Komik'],
        ['id' => 4, 'name' => 'Romantis'],
        ['id' => 5, 'name' => 'Horor'],
        ['id' => 6, 'name' => 'Petualangan'],
        ['id' => 7, 'name' => 'Sejarah'],
        ['id' => 8, 'name' => 'Motivasi']
    ];

    public function getGenres(){
        return $this->genres;
    }
}