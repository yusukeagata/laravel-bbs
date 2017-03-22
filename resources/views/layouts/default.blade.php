<!DOCTYPE HTML>
 <head>
  
 
 <!-- bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
 <link href="{{{asset('//phpworks-yusukeagata.c9users.io/assets/css/style.css')}}}" rel="stylesheet">
 </head>

 <title>Laravel5の掲示板</title>
 <h2 class= "top-title">Laravel5の掲示板</h2>
 <nav class="navbar navbar-default"> 
    <div class="container">
        <!--<div class="navbar-header">-->
        <!--    <a class="navbar-brand"></a>-->
        <!--</div>-->
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