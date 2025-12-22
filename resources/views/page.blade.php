@include('common.header')

<h1>Welcome to Easy Tech</h1>
@include('common.data', ['title' => 'Learn Laravel the Easy Way'])

<!-- If Exist then Include -->
@includeIf('common.common')

@include('common.footer')