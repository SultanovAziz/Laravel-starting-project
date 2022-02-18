<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Posts
 * @package App\Models
 * @mixin Builder
 */

class Posts extends Model
{
    use HasFactory;
//    protected $table = 'posts';
//    protected $primaryKey = 'posts_id';
    protected $attributes = [
        'content' => 'Lorem ipsum...',
    ];
    protected $fillable = ['title','content'];


    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

}
