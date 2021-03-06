<?php

namespace AdditionApps\FlexiblePresenter\Tests\Support\Presenters;

use AdditionApps\FlexiblePresenter\FlexiblePresenter;

class PostPresenter extends FlexiblePresenter
{
    public function values(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'published_at' => $this->published_at->toDateString(),
            'comment_count' => $this->lazy($this->comments->count()),
        ];
    }

    public function presetSummary()
    {
        return $this->only('title', 'body');
    }
}
