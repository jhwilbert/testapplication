<!DOCTYPE html>
<html lang='pt'>
    @include('admin.shared._head')
    <body>
        @include('admin.shared._header')
        <div class="container">

            <!-- Success-Messages -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{{ $message }}}
                </div>
            @elseif ($message = $errors->first())
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{{ $message }}}
                </div>
            @endif
                    	
            @yield('content')
        </div>
        @include('admin.shared._footer')
    </body>
</html>