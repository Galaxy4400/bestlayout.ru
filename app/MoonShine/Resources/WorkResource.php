<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Work;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Json;
use MoonShine\Fields\Select;
use MoonShine\Fields\Url;

/**
 * @extends ModelResource<Work>
 */
class WorkResource extends ModelResource
{
	protected string $model = Work::class;

	protected string $title = 'Мои работы';

	public function fields(): array
	{
		return [
			Grid::make([
				Column::make([
					Block::make([
						ID::make()->sortable(),
						Text::make('Название', 'name'),
						Text::make('Описание', 'description'),
						Url::make('Основная ссылка', 'link'),
						Select::make('Тип', 'type')->options(config('works.types')),
						Image::make('Превью', 'thumbnail')->dir('images/works'),
					]),
				])->columnSpan(6),
				Column::make([
					Block::make([
						Json::make('Дополнительные ссылки', 'links')->fields([
							Text::make('Называние', 'name'),
							Url::make('Ссылка', 'link'),
						])->removable(),
					]),
				])->columnSpan(6),
			]),
		];
	}


	public function indexFields(): array
	{
			return [
				ID::make()->sortable(),
				Image::make('Превью', 'thumbnail')->dir('images/works'),
				Text::make('Название', 'name'),
			];
	}


	public function rules(Model $item): array
	{
		return [];
	}
}
