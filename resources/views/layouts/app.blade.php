<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('inc.header')
</head>

<body id="app-layout">
<div id="content-wrap">

    @include('inc.top')

    <div class="container-fluid">

        <div class="row">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success">
                        <ul>
                            {!! session('success') !!}
                        </ul>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            @yield('content')
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

</div><!-- /#content-wrap -->

<script type="text/javascript">
    var baseUrl = '{{ url('/') }}';
</script>

@include('inc.footer')

@yield('after_footer')

</body>
</html>