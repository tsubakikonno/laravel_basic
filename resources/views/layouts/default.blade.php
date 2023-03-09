<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      background-color:#423880;
      font-size:16px;
      margin:left;
    }
    
    td {
      background-color: #ffffff;
      color: Black;
      font-size: 20px;
      
    }

    h1 {
      color: Black;
      font-size: 20px;
    }

    h2 {
      color: Black;
      font-size: 20px;
    }

    h3 {
      color: Black;
      font-size: 20px;

    }



    button {
      border-radius:5px;
      width: 5em;
  height:3em;
  padding:3px;
    }

    
    

    

  </style>
</head>
<body><table>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div></table>
</body>
</html>