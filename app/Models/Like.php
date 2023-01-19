<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
    public function forum_topic()
    {
        return $this->belongsTo(ForumTopic::class);
    }
    public function topic_message()
    {
        return $this->belongsTo(TopicMessage::class);
    }
}
