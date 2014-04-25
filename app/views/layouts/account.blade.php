<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blog Account</title>

      {{ stylesheet_link_tag('application') }}

      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
        <div class="navbar">
            <div class="container">
                <ul class="nav nav-pills">
                    <li>{{ Link_to('account', 'Administrador') }}</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Messages</a></li>
                    <div class="pull-right">
                        <ul class="nav">
                            <li class="active">{{ Link_to('logout', 'Cerrar Sesión') }} </li>
                        </ul>                    
                    </div>                    
                </ul> 

            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>

        {{ javascript_include_tag('application') }}

    </body>
</html>







