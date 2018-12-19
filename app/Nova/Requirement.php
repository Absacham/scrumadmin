<?php

namespace App\Nova;

use App\User;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Requirement extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Requirement';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $users=User::role('Analyst')->pluck('name','id');

        return [
            Text::make('Nombre','name')->rules('required','max:255')->sortable(),
            Number::make('Impacto','impact')->max(10)->min(0)->rules('numeric','max:10','min:0')->sortable(),
            Number::make('Prioridad','priority')->max(10)->min(1)->rules('numeric','max:10','min:1')->sortable(),
            Number::make('Tiempo Estimado','estimated_time')->hideWhenUpdating()->hideWhenCreating(),
            Textarea::make('Detalles','details')->rules('max:900'),
            HasMany::make('Items','Items','App\Nova\Item'),
           // Select::make('Usuarios','user_id')->options($users)
           BelongsToMany::make('Usuarios','users','App\Nova\User')->hideWhenUpdating()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

}
