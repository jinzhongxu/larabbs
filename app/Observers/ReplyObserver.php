<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->user_content = clean($reply->user_content, 'user_topic_body');
    }

    public function updating(Reply $reply)
    {
        //
    }
}
