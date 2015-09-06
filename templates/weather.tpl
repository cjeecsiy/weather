<html>
<head>
    <link rel="stylesheet" id="main" href="/weather/css/weather.css" type="text/css" media="all">
    <script type="text/javascript">
        function post() {
            weather.submit();
        }
    </script>
</head>
<body>
<h1>Today weather</h1>
<form name="weather">
    <div class="custom">
        <select name="area" onchange="post()">
          {html_options options=$locations selected=$location}
        </select>
    </div>
</form>
<img src={$image_path} weight="20%" height="20%">
<p>Location: {$location_name}</p>
<p>Weather: {$weather}</p>
<p>Temperature: {$temp}度</p>

