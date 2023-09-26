<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array[] $array)
 * @method static find(int $int)
 * @method static findOrFail($id)
 */
class Posts extends Model
{
    use HasFactory;
    protected $guarded=[];
}
