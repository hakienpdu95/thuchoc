<?php

namespace App\PostTypes;

class JobsPostType extends BasePostType
{
    protected function getPostTypeKey(): string { return 'jobs'; }
    protected function getSingular(): string    { return 'Việc làm'; }
    protected function getPlural(): string      { return 'Việc làm'; }

    protected function getArgs(): array
    {
        return array_merge(parent::getArgs(), [
            'menu_icon'     => 'dashicons-megaphone',
            'menu_position' => 5,
            'supports'      => ['title', 'editor', 'thumbnail'],
        ]);
    }

    protected function useDefaultCategory(): bool
    {
        return false; 
    }
}