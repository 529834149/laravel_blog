<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/default/picture/ico.ico">
    <title>bodys男孩儿</title>
    <meta name="keywords" content="Body,博客,Laravel,PHP,框架,教程,资源,学习,笔记,不忘初心,语言无限学精才是王道" />
    <meta name="description" content="Body博客致力于提供优质学习资源,分享个人笔记、视频教程。,php 爬虫 ">
    <meta name="author" content="陈宝金">
    <!-- Bootstrap core CSS -->
    <link href="/public/default/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/public/default/css/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <!--顶部导航 Logo image-->
        @include('new_blog_tpl.layouts.header')
        <!--轮播+2个item列表-->
        @yield('item_blande')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
            <!--左边列表内容-->
            @yield('article_contents')
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <!--关于我自己-->
             @include('new_blog_tpl.layouts.about')
          </div>

          <div class="p-3">
            <h4 class="font-italic">归档文件</h4>
            <!--归档日期-->
            @include('new_blog_tpl.layouts.file')
            
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
    @include('new_blog_tpl.layouts.footer')
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/public/default/js/jquery-slim.min.js"><\/script>')</script>
    <script src="/public/default/js/popper.min.js"></script>
    <script src="/public/default/js/bootstrap.min.js"></script>
    <script src="/public/default/js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
