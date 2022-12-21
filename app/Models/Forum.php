<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }

    public function forum_topics()
    {
        return $this->hasMany(ForumTopic::class);
    }
    public function topic_messages()
    {
        return $this->hasMany(TopicMessage::class);
    }
}
