@extends('laravel-statistics-panel-adminlte-boxes::month_interval', [
    'statBoxId'                     =>  isset($statBoxId) ? $statBoxId : null,
    'statBoxClass'                  =>  isset($statBoxClass) ? $statBoxClass : null,
    'statBoxTitle'                  =>  isset($statBoxTitle) ? $statBoxTitle : null,
    'statBoxActualMonthDateFrom'    =>  isset($statBoxActualMonthDateFrom) ? $statBoxActualMonthDateFrom : null,
    'statBoxActualMonthDateTo'      =>  isset($statBoxActualMonthDateTo) ? $statBoxActualMonthDateTo : null,
])

@section('statistics_box_content')

    <div class="row">
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::line_chart', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.visitors_and_page_views_for_period'),
                'id'        =>  'visitors_and_page_views_for_period',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'line_chart',
                                    'data-stat-id'   =>  'visitors_and_page_views_for_period',
                                ]
            ])
        </div>
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::line_chart', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.bounce_rate'),
                'id'        =>  'bounce_rate',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'line_chart',
                                    'data-stat-id'   =>  'bounce_rate',
                                ]
            ])
        </div>
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::line_chart', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.time_spent_visit'),
                'id'        =>  'time_spent_visit',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'line_chart',
                                    'data-stat-id'   =>  'time_spent_visit',
                                ]
            ])
        </div>
    </div>

@overwrite