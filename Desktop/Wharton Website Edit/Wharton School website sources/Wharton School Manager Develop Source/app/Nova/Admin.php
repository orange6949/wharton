<?php

namespace App\Nova;

use App\Nova\Actions\AcceptAdmin;
use App\Nova\Actions\AcceptCompany;
use App\Nova\Actions\GivePoint;
use App\Nova\Actions\TakePoint;
use App\Nova\Filters\AdminAdmin;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Admin extends Resource
{
    public static $group = "1. OTHER";

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Admin::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        "name", "email", "contact"
    ];

    public static function label()
    {
        return __("Admins");
    }


    public static function singularLabel()
    {
        return __("Admin");
    }

    public static $priority = 1;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            /*ID::make(__('ID'), 'id')->sortable(),*/
            Text::make(__('name'), 'name')->rules("required"),
            Text::make(__('email'), 'email')
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),
            Password::make(__("password"), 'password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),
            Text::make(__('contact'), 'contact')->rules("required"),
            Boolean::make(__('accepted'), 'accepted'),
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
        return [
        ];
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
        return [
            (new AcceptAdmin())->canSee(function(Request $request){
                return $request->user()->accepted;
            })->canRun(function(Request  $request){
                return $request->user()->accepted;
            })
        ];
    }
}
