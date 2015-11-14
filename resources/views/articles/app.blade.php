<!DOCTYPE html>
<html>
   <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" type="text/css" media="all"/>
     <link rel="stylesheet" href="{{asset('/css/all.css')}}" type="text/css" media="all"/>
     <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
     <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
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
