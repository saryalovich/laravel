<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/materialize.css">
</head>
<body>
	<nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Artyom's blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @yield("link")
      </ul>
    </div>
  </nav>
  <div class="container">
  	@yield("body")
  </div>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Have a nice day!</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Связаться</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://vk.com/saryalovich">vk</a></li>
  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
          
            <a class="grey-text text-lighten-4 right" href="#!">Якутск 2018</a>
            </div>
          </div>
        </footer>
</body>
</html>