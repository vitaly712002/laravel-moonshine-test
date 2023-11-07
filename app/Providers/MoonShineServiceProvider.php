<?php

namespace App\Providers;

use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\CategoryResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\TagResource;
use App\MoonShine\Resources\CommentResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),
            MenuGroup::make('Посты',[
                MenuItem::make('Посты', new PostResource())
                    ->icon('heroicons.document-text')
            ]),
            MenuGroup::make('Статьи',[
                MenuItem::make('Статьи', new ArticleResource())
                    ->icon('heroicons.document-text')->badge(fn() => 12121)
            ]),
            MenuGroup::make('Категории',[
                MenuItem::make('Категории', new CategoryResource())
                    ->icon('heroicons.document-text')->badge(fn() => 12121)
            ]),
            MenuGroup::make('Теги',[
                MenuItem::make('Теги', new TagResource())
                    ->icon('heroicons.document-text')->badge(fn() => 12121)
            ]),
            MenuGroup::make('Комменты',[
                MenuItem::make('Комменты', new CommentResource())
                    ->icon('heroicons.document-text')->badge(fn() => 12121)
            ])
        ]);
    }
}
