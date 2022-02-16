<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Models
 * @mixin Builder
 */

class Tag extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsToMany(Posts::class);
    }
}
