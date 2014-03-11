<!DOCTYPE html>
<html lang='pt'>
    @include('admin.shared._head')
    <body>
        @include('admin.shared._header')
        <div class="container">
            @yield('content')
        </div>
        @include('admin.shared._footer')
    </body>
</html>