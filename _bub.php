<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            background-color: #f2f2f2;
            font-family: "Lucida Console", Monaco, monospace;
        }
        .banner {
            width: 100%;
            height: 75px;
            background-color: #abd6c5;
        }
        .navi {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .navi ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #444444;
        }
        .navi li {
            float: left;
        }
        .navi li a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }
        .navi li a:hover {
            background-color: #222222;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
<div id="banner" class="banner">
</div>
<div id="navi" class="navi">
    <ul>
        <li><a href="#" onclick="display('main')">Main</a></li>
        <li><a href="#" onclick="display('3d')">3D</a></li>
        <li><a href="#" onclick="display('php')">PHP</a></li>
        <li><a href="#" onclick="display('android')">Android</a></li>
        <li><a href="#" onclick="display('other')">Other</a></li>
    </ul>
</div>
<div id="content" class="content">
</div>

<script>
    function display(page) {
        var element = '#' + page;

        $.ajax({
            'url' : 'get_' + page + '.php'
        }).done(function (data) {
            if (data) {
                $(element).html(data);
            }
        });
    }
</script>

</body>
</html>