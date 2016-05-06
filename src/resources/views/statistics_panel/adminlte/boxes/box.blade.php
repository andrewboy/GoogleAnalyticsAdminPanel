<div id="{{ $id or '' }}" class="box box-solid {{ $class or '' }}">
    <div class="box-header with-border">
        @yield('header')
    </div>
    <div class="box-body">
        @yield('content')
    </div>
</div>