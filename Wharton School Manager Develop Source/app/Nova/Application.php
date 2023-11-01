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

class Application extends Resource
{
    public static $group = "2. REQUEST";

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Application::class;

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
            Text::make(__("Student first name"), "student_first_name")->rules("required", "string", "max:255"),
            Text::make(__("Student last name"), "student_last_name")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student birthdate"), "student_birthdate")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student sex"), "student_sex")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student country"), "student_country")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student street"), "student_street")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student city"), "student_city")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student state"), "student_state")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student postal code"), "student_postal_code")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Student grade"), "student_grade")->rules("required", "string", "max:255"),
            Text::make(__("Guardian first name"), "guardian_first_name")->rules("required", "string", "max:255"),
            Text::make(__("Guardian last name"), "guardian_last_name")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Guardian email"), "guardian_email")->rules("required", "string", "max:255"),
            Text::make(__("Guardian phone"), "guardian_phone")->rules("required", "string", "max:255"),
            Text::make(__("Session"), "session")->rules("required", "string", "max:255")->hideFromIndex(),
            Text::make(__("Relationship to student"), "relationship_to_student")->rules("required", "string", "max:255")->hideFromIndex(),
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
