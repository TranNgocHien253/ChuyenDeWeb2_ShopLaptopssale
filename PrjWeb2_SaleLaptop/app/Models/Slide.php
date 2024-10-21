<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    // Khai báo bảng tương ứng với model
    protected $table = 'slides';

    // Khai báo các thuộc tính có thể gán
    protected $fillable = [
        'link',
        'image',
    ];
>>>>>>> Hien_branch_dev
}
