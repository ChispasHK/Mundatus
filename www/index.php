<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mundatus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mundatus">
    <meta property="og:url" content="https://mundatus.cybernotrum.com/">
    <meta property="og:image" content="https://github.com/ChispasHK/Mundatus/blob/main/README_img/logo-github.png">
    <meta property="og:description" content="Delete all the metadata of a file simple, fast and secure.">

    <!-- Open Graph Meta Tags Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mundatus">
    <meta property="twitter:domain" content="mundatus.cybernotrum.com">
    <meta name="twitter:site" content="@cybernotrum">
    <meta property="twitter:url" content="https://mundatus.cybernotrum.com/">
    <meta name="twitter:description" content="Delete all the metadata of a file simple, fast and secure.">
    <meta name="twitter:image" content="https://github.com/ChispasHK/Mundatus/blob/main/README_img/logo-github.png">
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon/favicon.ico">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand mb-0 h1 Montserrat" href=" ">Mundatus</a>
        <a class="navbar-brand" href="https://github.com/ChispasHK/Mundatus"><i class="bi bi-github"></i> </a>
      </div>
    </nav>

    <div class="container info-text">
      <h1 class="text-center">Mundatus</h1>
      <p class="text-center">Delete all the metadata of a file simple, fast and secure.</p>
    </div>

    <div class="upload-container text-center" >
      <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input class="file" type="file" name="uploaded_file"type="hidden" name="max_file_size" value="512000000" title="Browse files or Drag & Drop">  </input> <br>
        <input type="submit" value="Send" <button type="button" class="btn btn-dark"> </button></input>
      </form>
    </div>

    <div class="box-info">
      <div class="text-center">
        <i class="bi bi-info-circle"></i> Have limited experience (single file, <?php echo ini_get('upload_max_filesize') . "B"; ?>) 
      </div>
    </div>

    <footer class="footer mt-auto">
      <div class="text-center">
        Built and developed by  <a href="https://www.cybernotrum.com/"> Cyber Notrum </a>
      </div>
    </footer>

  </body>
</html>
