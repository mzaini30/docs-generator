<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;

class Konten extends Model
{
    use HasFactory;
    use ModelTree;

    protected $fillable = ["parent_id", "title", "order", "content"];

    protected $table = 'konten';
}
