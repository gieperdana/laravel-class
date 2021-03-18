<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div>
            @yield('testview', View::make('component.header'))
        </div>
        <div>
            @yield('testview', View::make('component.content',['content'=>$content,'data'=>$data]))
        </div>
        <div>
            @yield('testview', View::make('component.footer'))
        </div>
    </body>
</html>