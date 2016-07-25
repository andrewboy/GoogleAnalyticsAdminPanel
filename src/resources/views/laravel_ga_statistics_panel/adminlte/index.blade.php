@include('google-analytics-statistics-adminlte-boxes::monthly', [
    'statBoxId'                 =>  'ga_statistics_monthly',
    'statBoxClass'              =>  'box-orange box-solid',
    'statBoxTitle'              =>  trans('google-analytics-statistics::ga-statistics.title_index'),
    'statBoxActualMonthDate'    =>  (new \DateTime())->format('Y/m'),
])

@include('google-analytics-statistics-adminlte-boxes::month_interval', [
    'statBoxId'                     =>  'ga_statistics_month_interval',
    'statBoxClass'                  =>  'box-orange box-solid',
    'statBoxTitle'                  =>  trans('google-analytics-statistics::ga-statistics.title_index'),
    'statBoxActualMonthDateFrom'    =>  (new \DateTime('last year'))->format('Y/m'),
    'statBoxActualMonthDateTo'      =>  (new \DateTime())->format('Y/m'),
])