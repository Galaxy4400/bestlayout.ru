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
			Block::make([
				ID::make()->sortable(),
				Text::make('Название', 'name'),
				Text::make('Описание', 'description'),
				Url::make('Основная ссылка', 'link'),
				Select::make('Тип', 'type')->options(config('works.types')),
				Image::make('Превью', 'thumbnail'),
				Json::make('Дополнительные ссылки', 'links')->fields([
					Text::make('Называние', 'name'),
					Url::make('Ссылка', 'link'),
				])->removable(),
			]),
		];
	}

	public function rules(Model $item): array
	{
		return [];
	}
}
