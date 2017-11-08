<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUI Landing Page Example</title>
    <link href="//cdn.muicss.com/mui-0.9.28/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.9.28/js/mui.min.js"></script>
    <style>
     /**
 * Body CSS
 */
html,
body {
  height: 100%;
}

html,
body,
input,
textarea,
buttons {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}


/**
 * Header CSS
 */
header {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 2;
}

header ul.mui-list--inline {
  margin-bottom: 0;
}

header a {
  color: white;
}

header table {
  width: 100%;
}


/**
 * Content CSS
 */
#content-wrapper {
  min-height: 100%;

  /* sticky footer */
  box-sizing: border-box;
  margin-bottom: -100px;
  padding-bottom: 100px;
}


/**
 * Footer CSS
 */
footer {
  box-sizing: border-box;
  height: 100px;
  background-color: white;
  border-top: 1px solid #e0e0e0;
  padding-top: 35px;
}


    </style>
  </head>
  <body>
  <header class="mui-appbar mui--z1">
  <div class="mui-container">
  <div class="mui-dropdown">
  <button class="mui-btn mui-btn--primary" data-mui-toggle="dropdown">
    Dropdown
    <span class="mui-caret"></span>
  </button>
  <ul class="mui-dropdown__menu">
    <li><a href="#">Option 1</a></li>
    <li><a href="#">Option 2</a></li>
    <li><a href="#">Option 3</a></li>
    <li><a href="#">Option 4</a></li>
  </ul>
</div>
  <table>
    <tr class="mui--appbar-height">
      <td class="mui--text-title">Bank accounts</td>
      <td class="mui--text-right">
        <ul class="mui-list--inline mui--text-body2">
          <li><a href="#">Signup</a></li>
        </ul>
      </td>
    </tr>
  </table>
</div>


</header>
<div id="content-wrapper" class="mui--text-center">
<div class="mui--appbar-height"></div>
<br>
<br>
<div class="mui--text-display3">Bank accounts</div>
<br>
<br>
<button class="mui-btn mui-btn--raised">Transaction details</button>
  
</div>
<footer>
  <div class="mui-container mui--text-center">
    Made with ♥ by <a href="">Marien Delahaye</a>
  </div>
</footer>
  </body>
</html>
