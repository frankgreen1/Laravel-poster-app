<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
        protected $fillable = [
            'user_id',
            'body',

        ];
    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id',$user->id);
    }

      public function user()
      {
          return $this->BelongsTo(User::class);
      }


      public function likes()
      {
          return $this->hasMany(Like::class);
      }
}
