<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Foo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thud',
        'wombat',
        'post_id'
    ];

    /**
     * creates the business calculation function
     * @return float|mixed
     *
     */
    public function kazaam()
    {
        if ($this->wombat)
        {
            return $this->wombat;
        }
        else {
            $thud = is_numeric($this->thud) ? (float) $this->thud : 0;
            return $thud * 3.141592;
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::Class);
    }
}
