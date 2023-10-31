<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;

class ArticleResource extends Resource
{
	public static string $model = Article::class;

	public static string $title = 'Статьи';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('title'),
            Textarea::make('content'),
            BelongsTo::make('Категория', 'categories', 'title')
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
