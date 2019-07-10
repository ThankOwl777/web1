<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB1 - Welcome</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="colors.js"></script>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <div id="grid">
      <ol>
        <input type="button" value="night" onclick="nightDayHandler(this);">
        <?php
          $list = scandir('./data');
          $i = 0;
          while($i < count($list)) {
            if(($list[$i] != '.') && ($list[$i] != '..')) {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
            $i = $i + 1;
          }
         ?>
        <!-- <li><a href="1.html">HTML</a></li>
        <li><a href="2.html">CSS</a></li>
        <li><a href="3.html">JavaScript</a></li>
        <li><a href="4.html">PHP</a></li> -->
      </ol>
      <div id="article">
        <h2>
          <?php
            if(isset($_GET['id'])) {
              echo $_GET['id'];
            } else {
              echo "WEB";
            }
          ?>
        </h2>
          <?php
            if(isset($_GET['id'])) {
              echo file_get_contents("data/".$_GET['id']);
            } else {
              echo "The World Wide Web (abbreviated WWW or the Web) is an information space where documents and other web resources are identified by Uniform Resource Locators (URLs), interlinked by hypertext links, and can be accessed via the Internet.[1] English scientist Tim Berners-Lee invented the World Wide Web in 1989. He wrote the first web browser computer program in 1990 while employed at CERN in Switzerland.[2][3] The Web browser was released outside of CERN in 1991, first to other research institutions starting in January 1991 and to the general public on the Internet in August 1991.";
            }
          ?>
      </div>
    </div>
  </body>
</html>
