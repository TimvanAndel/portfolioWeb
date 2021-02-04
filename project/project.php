<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="favicon" type="image/png" href="assets/img/favicon.png/" />
    <link rel="apple-touch-icon" type="image/png" href="assets/img/favicon.png/" />
    <title>Tim van Andel - Mijn Werk</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .fotoTim{       
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border-radius: 5%;
            border: 2px solid #ffe900;
        }
        .information{
            margin-top: 50px;
        }
    </style>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GHC4E2BWY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GHC4E2BWY2');
</script>

<body>
    <div id="container">

        <nav class="row">
            <div class=" col-12 col-md-2 col-sm-2">
                <a href="../index.html"><img src="assets/img/logo1.png" alt="" srcset="" class="logo" style="margin: auto; display: block;"></a>
            </div>

            <div class="col-md-10 col-sm-10 col-12">
                <ul>
                    <li ><a href="../" class="left">Home</a></li>
                    <li ><a href="../overmij/index.php" class="left">Over Mij</a></li>
                    <li><a href="index.php" class="left">Mijn werk</a></li>
                    <li><a href="../contact/index.php" class="left">Contact</a></li>
                </ul>
            </div>
        </nav>
    

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Project Titel</h1>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="assets/img/placeholder.png" alt="project plaatje" style="width: 100%;">
            </div>
            
            <div class="col-md-4"></div>
        </div>

        <div class="row information">
            <div class="col-md-3"></div>
        <div class="col-md-6" >
                <p> omschrijving van project 1, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
              
            </div>
            <div class="col-md-3"></div>
        </div>


        

    


        <footer class="row">
            <div class="col-md-12">
                <span class="copyright">&copy;<?= date("Y"); ?> Tim van Andel</span>
            </div>
        </footer>



    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>