<!DOCTYPE HTML>
 <head>
  
 
 <!-- bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
 <link href="{{{asset('/assets/css/style.css')}}}" rel="stylesheet">
 </head>

 <title>Laravel5の掲示板</title>
 <nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <h2>Laravel5の掲示板</h2>
        </ul>
        <!-- 3.リストの配置 -->
        <ul class="nav navbar-nav">
            <li>{!! link_to("/bbc", 'トップページ') !!}</li>
            <li>{!! link_to("/bbc/create", 'スレッド新規作成') !!}</li>
        </ul>
        
    </div>
</nav>

 @yield('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 </body>
 </html>