<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Textarea;

class PostResource extends Resource
{
	public static string $model = Post::class;

	public static string $title = 'Посты';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('title'),
            Textarea::make('content'),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
