<div class="text-center text-sm text-gray-800  my-3">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    <br>

    @php
        $ty = Illuminate\Foundation\Application::class;
        var_dump(Route::has('register'));
    @endphp

</div>