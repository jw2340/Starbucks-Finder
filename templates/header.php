<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>

        <!-- app's own CSS -->
        <link href="/css/styles.css" rel="stylesheet"/>

        <!-- https://developers.google.com/maps/documentation/javascript/ -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.9/ -->
        <script src="/js/markerwithlabel_packed.js"></script>

        <!-- http://jquery.com/ -->
        <script src="/js/jquery-1.11.1.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- http://underscorejs.org/ -->
        <script src="/js/underscore-min.js"></script>

        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/js/typeahead.jquery.js"></script>

        <!-- app's own JavaScript -->
        <script src="/js/scripts.js"></script>
        
        <!-- https://www.google.com/fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
        
        <style type="text/css">
        h1
        {
            font-family: 'Raleway', sans-serif;
        }
        
        div.title {
            width: 575px;
            height: 75px;
            padding: 10px 10px 10px 10px
        }
        
        #map-canvas {
        width: 800px;
        height: 400px;
        margin: auto;
        padding: 10px 10px 10px 10px;
        }
        
        #map-form {
        margin: auto;
        width: 800px;
        padding: 10px 0px 10px 0px
        }

        </style>
                
        <?php if (isset($title)): ?>
            <title>Coffee and Free WIFI Finder: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Coffee and Free WIFI Finder</title>
        <?php endif ?>

    </head>

    <body>

        <div class="container">
            <div id="top">
                <div class="row">
                    <div class="title">
                    <h1>Coffee and Free WIFI Finder
                    <img alt="Wifi" style="float: right;" src="/img/wifi.png" width=40 height=40/>
                    <img alt="Coffee" style="float: right;" src="/img/coffee.png" width=35 height=35/>
                    </h1>
                </div>
            </div>

            <div id="middle">
