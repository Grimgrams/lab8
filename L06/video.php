<!DOCTYPE html>
<html>
  <head>
	<title>Julian's Personal Website</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/video.css">
    <script src="js/video.js" defer></script>
 </head>
 <body>
	<header>
	<img src="images/HumberLogoBG.jpg" class="profile-img">
		<nav>
            <ul>
              <li><a href="index.html">Home</a></li>
				      <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
				      <li><a href="calculator.html">Calculator</a></li>
				      <li><a href="#">Media</a>
                    <ul>
                        <li><a href="audio.html">Audio</a></li>	
                        <li><a href="./gallery/gallery.html">Gallery</a></li>
                        <li><a href="./video.php">Videos</a></li>
                    </ul>
                 </li>
                <li><a href="#">Effects</a>
                    <!-- First Tier Drop Down -->
					  <ul>
						<li><a href="./ripple/ripple.html">Ripple</a></li>
					</ul>        
				</li>				
			</ul>
        </nav>
	</header>
    <main>
    <!-- (A) CLOSE FULLSCREEN VIDEO -->
    <div id="vClose" onclick="vplay.toggle(false)">X</div>

    <!-- (B) VIDEO GALLERY -->
    <div class="gallery"><?php
      // (B1) GET VIDEO FILES FROM VIDEOS FOLDER
      $dir = __DIR__ . DIRECTORY_SEPARATOR . "videos" . DIRECTORY_SEPARATOR;
      $vid = glob("$dir*.{webm,mp4,ogg}", GLOB_BRACE);

      // (B2) OUTPUT VIDEOS
      if (count($vid) > 0) { foreach ($vid as $v) {
        $file = basename($v);
        $caption = substr($file, 0, strrpos($file, "."));        
        printf("<div class='vWrap'>
          <video src='videos/%s'></video>
          <div class='vCaption'>%s</div>
        </div>", rawurlencode($file), $caption);
      }}
    ?></div>
    </main>
  </body>
</html>