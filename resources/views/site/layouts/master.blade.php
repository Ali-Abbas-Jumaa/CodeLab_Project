<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <style>
        .test1{
            background-color: #0a6ebd;
        }
        .test2{
            background-color: #0b3251;
        }
        .test3{
            background-color: #00a5bb;
        }
        .test4{
            background-color: #761b18;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel='stylesheet' href='/Evie/css/style.min.css' />
    {{--<link rel="stylesheet" href="/css/material-kit.min.css">--}}
</head>
<body >
<!-- navbar -->
<div class="navbar navbar--extended">
    <nav class="nav__mobile"></nav>
    <div class="container">
        <div class="navbar__inner">
            <a href="#" class="navbar__logo">Logo</a>
            <nav class="navbar__menu">
                <ul>
                    <li><a href="#">Option</a></li>
                    <li><a href="#">Option 2</a></li>
                </ul>
            </nav>
            <div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
        </div>
    </div>
</div>
<!-- Hero unit -->
<div class="page__header">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="page__header__inner">
        <div class="container">
            <div class="page__header__content">
                <div class="page__header__content__inner" id='navConverter'>
                    <h1 class="page__header__title">Multi-purpose page</h1>
                    <p class="page__header__text">This is mostly a simple layout, rather than a complete page unlike the others. However this is a really useful starting point for anything you want to create.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container test1 w-75">
    @yield("content")


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src='/Evie/js/app.min.js'></script>

@yield("scripts")
</body>
</html>
