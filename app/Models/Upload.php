<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'upload';
    public function getWordCount() {
       echo storage_path() . "\uploads\\". $this->filename; 
    }
}
