<!doctype html>
<html lang="en">
	<!-- META INFO! -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-orange.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
	
	<!-- Description and title -->
    <meta name="description" content="Example entry for 1509 Online">
    <title>Example Entry</title>
    <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >
	
  </head>
  <body>
	  
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
          <div style="position: fixed" class="demo-back">
              <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
                  <i class="material-icons" role="presentation">arrow_back</i>
              </a>
          </div>
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
		    <h3 id="title">Getting title...</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo"><img src="https://avatars2.githubusercontent.com/u/23385474?v=3&s=460" width="45"></div>
              <div>
                <strong id="user">Getting user...</strong>
                <span id="date">Getting date...</span>
              </div>
              <div class="section-spacer"></div>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
		    <p id="body">Getting text...</p>
            </div>
            <script src="https://apis.google.com/js/plusone.js">
            </script>
            <div style="margin-left:auto;margin-right:auto;text-align:center">
            	<div class="g-comments"
    							data-href="hhttps://1509-online.github.io/entry.html"
    							data-width="642"
    							data-first_party_property="BLOGGER"
    							data-view_type="FILTERED_POSTMOD">
							</div>
            </div>
        <footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <!-- <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button> -->
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
	      
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/3.5.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.5.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.5.2/firebase-database.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyChG9cMyAkkZSXCZp1OmfpxbJYnJvh3XnQ",
        authDomain: "online-eff31.firebaseapp.com",
        databaseURL: "https://online-eff31.firebaseio.com",
        storageBucket: "online-eff31.appspot.com",
        messagingSenderId: "655714895872"
      };
      firebase.initializeApp(config);
      var database = firebase.database();
      var name="<?php echo $_GET['name']; ?>";
	var titleRef = database.ref('entries/' + name);
titleRef.on('value', function(snapshot) {
  document.getElementById("title").innerHTML = snapshot.getKey();
});
	    var bodyRef = database.ref('entries/'+ name + '/body');
bodyRef.on('value', function(snapshot) {
  document.getElementById("body").innerHTML = snapshot.val();
});
	    var userRef = database.ref('entries/'+ name + '/user');
userRef.on('value', function(snapshot) {
  document.getElementById("user").innerHTML = snapshot.val();
});
	    var dateRef = database.ref('entries/'+ name + '/date');
dateRef.on('value', function(snapshot) {
  document.getElementById("date").innerHTML = snapshot.val();
});
</script>
  </body>
</html>
