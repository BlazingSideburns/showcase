<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #f2f2f2;
            font-family: "Lucida Console", Monaco, monospace;
            width: 100%;
            height: 100%;
        }
        .banner {
            width: 100%;
            height: 75px;
            background-color: #abd6c5;
        }
        .content {
            padding: 10px;
            width: 100%;
            height: 100%;
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
<div class="banner">
</div>
<div class="navi">
    <ul>
        <li><a href="#" onclick="display('main')">MAIN</a></li>
        <li><a href="#" onclick="display('work')">WORK</a></li>
        <li><a href="#" onclick="display('threedee')">3D</a></li>
        <li><a href="#" onclick="display('homework')">HOMEWORK</a></li>
        <li><a href="#" onclick="display('dva')">CV</a></li>
    </ul>
</div>
<div class="content">
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="hax.js"></script>
<script>
    $(document).ready(function () {
        display('main');
    });

    function display(page) {
        $.ajax({
            'url' : page + '.php'
        }).done(function (data) {
            $('.content').html(data);
        })
    }
</script>
</body>
</html>
