<!DOCTYPE html>
<html>
   <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" type="text/css" media="all"/>
     <link rel="stylesheet" href="{{asset('/css/all.css')}}" type="text/css" media="all"/>
     <title>DevApp网站</title>
   </head>
   <body>
      <div class="container">
       <section class="content">
          <div class="pad group">
             @yield('content')
          </div>
       </section>
      </div>
   </body>
</html>
