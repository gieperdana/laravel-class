<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div>
            @yield('testview', View::make('component.header',['test'=>$name]))
        </div>
        <div>
            @yield('testview', View::make('component.content',['test'=>$name]))
        </div>
        <div>
            @yield('testview', View::make('component.footer',['test'=>$name]))
        </div>
    </body>
</html>