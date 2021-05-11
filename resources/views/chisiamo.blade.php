<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>chi saimo</title>
  <style media="screen">
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    header{
      height: 100px;
      background-color: #5d00ff;
      display: flex;
      align-items: center;
    }
    .container{
      margin: 0 auto;
      width: 80%;
    }
    nav.navbar{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    ul{
      display: flex;
      list-style-type: none;
    }
    a{
      text-decoration: none;
      color: #fff;
      padding: 0 20px;
      font-size: 18px;
    }
    h1{
      font-size: 40px;
      color: #fff;
    }
    p.main-p{
      margin-top: 200px;
      font-size: 30px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar container">
      <h1>Chi siamo</h1>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/team">Il nostro team</a></li>
        <li><a href="/info">Info</a></li>
        <li><a href="/dove">Dove ci troviamo</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <p class="main-p">chi siamo: pippo, pluto e topolino</p>
  </main>

</body>
</html>
