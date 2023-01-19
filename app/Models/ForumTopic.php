<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    use HasFactory;

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function topic_messages()
    {
        return $this->hasMany(TopicMessage::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
