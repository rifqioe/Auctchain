<!DOCTYPE html>
<head>
  <title>404 Not Found</title>
  <link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/error404.css') }}" />
</head>
<body>
  <div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <h1>404</h1>
      </div>
      <h2>Oops! Nothing was found</h2>
      <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
      <div class="notfound-social">
        <a href="{{ Route('landingPage') }}">Back</a>
      </div>
    </div>
  </div>
</body>
</html>
