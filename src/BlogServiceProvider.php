<?php

declare(strict_types=1);

namespace DrewRoberts\Blog;

use DrewRoberts\Blog\Models\Page;
use DrewRoberts\Blog\Models\Post;
use DrewRoberts\Blog\Models\Series;
use DrewRoberts\Blog\Models\Topic;
use DrewRoberts\Blog\Policies\PagePolicy;
use DrewRoberts\Blog\Policies\PostPolicy;
use DrewRoberts\Blog\Policies\SeriesPolicy;
use DrewRoberts\Blog\Policies\TopicPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class BlogServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Page::class => PagePolicy::class,
                Post::class => PostPolicy::class,
                Series::class => SeriesPolicy::class,
                Topic::class => TopicPolicy::class,
            ])
            ->hasNovaResources([
                \DrewRoberts\Blog\Nova\Page::class,
                \DrewRoberts\Blog\Nova\Post::class,
                \DrewRoberts\Blog\Nova\Series::class,
                \DrewRoberts\Blog\Nova\Topic::class,
            ])
            ->name('blog');
    }
}
