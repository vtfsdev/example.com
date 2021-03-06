<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">
      <title>Victor Tung Website</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="<?php echo $meta['description']; ?>">
      <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
      <link rel="apple-touch-icon" sizes="180x180" href="/android-chrome-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
  </head>

    <main>
        <body>
            <header>
                <span class="logo">My WebSite</span>
                <a id="toggleMenu">Menu</a>
                
                <nav class="top-nav">
                    <ul role="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    </ul>
                </nav>
            </header>
            
            <div class="row">
                <div id="Content">
                    <?php echo $content; ?>
                </div>
            </div>

            <script>
                var toggleMenu = document.getElementById('toggleMenu');
                var nav = document.querySelector('nav');
                toggleMenu.addEventListener(
                    'click',
                    function(){
                    if(nav.style.display=='block'){
                        nav.style.display='none';
                    }else{
                        nav.style.display='block';
                    }
                    }
                );
            </script>

            <div id="Footer" class="clearfix">
                <small>&copy; 2017 - MyAwesomeSite.com</small>
                <ul role="navigation">
                    <li><a href="terms.html">Terms</a></li>
                    <li><a href="privacy.html">Privacy</a></li>
                </ul>
            </div>
        </body>
    </main>

</html>