<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html class="" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, height=device-height" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />

    <meta name="description" content="Viking, Anglo-Saxon and Norman Reenactment"/>
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="https://www.vikingsna.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="Viking, Anglo-Saxon and Norman Reenactment" />
    <meta property="og:url" content="https://www.vikingsna.com/" />
    <meta property="og:site_name" content="Vikings NA" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Viking, Anglo-Saxon and Norman Reenactment" />
    <meta name="twitter:title" content="@yield('title')" />
    <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.vikingsna.com\/","name":"Vikings NA","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.vikingsna.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>

    <meta property="business:contact_data:email" content="admin@vikingsna.com">
    <meta property="og:email" content="admin@vikingsna.com">
    <link rel='shortlink' href='https://www.vikingsna.com/' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body > .container {
            padding: 60px 15px 0;
        }
        .footer > .container {
            padding-right: 15px;
            padding-left: 15px;
        }
        .container .text-muted {
            margin: 20px 0;
        }
        /* Sticky footer styles -------------------------------------------------- */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }
    </style>
    @stack('style')
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                @include('newmarkets\content::menu')
                @if (Auth::check())
                    <li><a href="/{{ Config::get('content.category_base') }}">CMS {{ Lang::choice('content::messages.category', 2) }}</a></li>
                    <li><a href="{{ URL::to('auth/logout') }}">Log out</a></li>
                @else
                    <li><a href="{{ URL::to('auth/login') }}">Log in</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <p class="small text-muted pull-right">powered by <a href="http://newmarket.solutions">NewMarket Solutions CMS</a></p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('script')

</body>
</html>
