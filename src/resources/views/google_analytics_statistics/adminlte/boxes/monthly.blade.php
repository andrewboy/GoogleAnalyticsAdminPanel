@extends('laravel-statistics-panel-adminlte-boxes::monthly', [
    'statBoxId'                 =>  isset($statBoxId) ? $statBoxId : null,
    'statBoxClass'              =>  isset($statBoxClass) ? $statBoxClass : null,
    'statBoxTitle'              =>  isset($statBoxTitle) ? $statBoxTitle : null,
    'statBoxActualMonthDate'    =>  isset($statBoxActualMonthDate) ? $statBoxActualMonthDate : null,
])

@section('statistics_box_content')

    <div class="row">
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::grid', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.most_visited_pages_for_period'),
                'id'        =>  'most_visited_pages_for_period',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'toplist',
                                    'data-stat-id'   =>  'most_visited_pages_for_period',
                                ]
            ])

        </div>
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::grid', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.top_keywords_for_period'),
                'id'        =>  'top_keywords_for_period',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'grid',
                                    'data-stat-id'   =>  'top_keywords_for_period',
                                ]
            ])
        </div>
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::grid', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.top_referrers_for_period'),
                'id'        =>  'top_referrers_for_period',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'grid',
                                    'data-stat-id'   =>  'top_referrers_for_period',
                                ]
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::pie_chart', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.browsers_usage'),
                'id'        =>  'browsers_usage',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'doughnut_chart',
                                    'data-stat-id'   =>  'browsers_usage',
                                ]
            ])
        </div>
        <div class="col-md-4">
            @include('laravel-statistics-panel-adminlte-widgets::pie_chart', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.mobile_device_types'),
                'id'        =>  'mobile_device_types',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'doughnut_chart',
                                    'data-stat-id'   =>  'mobile_device_types',
                                ]
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('laravel-statistics-panel-adminlte-widgets::map_toplist', [
                'title'     =>  trans('google-analytics-statistics::ga-statistics.cities_report'),
                'id'        =>  'cities_report',
                'class'     =>  'box-warning stat-widget',
                'attributes'=>  [
                                    'data-type'      =>  'map_toplist',
                                    'data-stat-id'   =>  'cities_report',
                                ]
            ])
        </div>
    </div>

@overwrite