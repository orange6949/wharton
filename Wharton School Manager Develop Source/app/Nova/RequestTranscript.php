<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class RequestTranscript extends Resource
{
    public static $group = "2. REQUEST";

    public static function label()
    {
        return "Transcript";
    }

    public static $model = \App\Models\RequestTranscript::class;

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
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__("Request date"), "request_date")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Birth date"), "birth_date")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("First name"), "first_name")->rules("required", "string", "max:255"),
            Text::make(__("Last name"), "last_name")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Course"), "course")->rules("required", "string", "max:255"),
            Text::make(__("Address"), "address")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Phone"), "phone")->rules("required", "string", "max:255"),
            Text::make(__("Email"), "email")->rules("required", "string", "max:255"),
            Text::make(__("Address"), "address")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Send transcript to"), "send_transcript_to")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Requested number"), "requested_number")->rules("required", "string", "max:255")->hideFromIndex(),
            Files::make(__("Student ID"), "file")->rules("required")->singleMediaRules("max:4000000")->hideFromIndex(), // 4000MB
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
