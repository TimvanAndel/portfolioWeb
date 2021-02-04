<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="favicon" type="image/png" href="assets/img/favicon.png/" />
    <link rel="apple-touch-icon" type="image/png" href="assets/img/favicon.png/" />
    <title>Tim van Andel - Over Mij</title>
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
                    <li ><a href="../index.html" class="left">Home</a></li>
                    <li ><a href="" class="left active">Over Mij</a></li>
                    <li><a href="../project/index.php" class="left">Mijn werk</a></li>
                    <li><a href="../contact/index.php" class="left">Contact</a></li>
                </ul>
            </div>
        </nav>
    

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Over mij</h1>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-4">

                
                <h2>Tim van Andel</h2>
                <p>Ik ben Tim van Andel, 16 jaar en woon in Ameide. Op de middelbare school deed ik vmbo-tl volgen en ik doe momenteel de mbo opleiding <a href="https://www.glu.nl/opleiding/mediadeveloper/" target="_blank" style="color: #ffe900">Webdeveloper op het Grafisch Lyceum</a> in Utrecht.</p>

            </div>
            <div class="col-md-4">
                <img src="assets/img/tim.jpeg" alt="Tim van Andel" class="fotoTim">
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h2>Waar ik nu mee bezig ben</h2>
                <p>Ik ben CEO van <a href="https://prijs-direct.nl/" target="_blank" style="color: #ffe900">PrijsDirect</a>, PrijsDirect is een prijsvergelijkingssite waarop mensen gemakkelijk de prijs van diverse webshops kunnen vereglijken en een gemakkelijke keuzen maken waar ze het product willen kopen. </p>
                <p>Ook ben ik bezig met een webshop, <a href="https://yourcollection.nl/" target="_blank" style="color: #ffe900">Your Collection</a> is een webshop in sieraden en accessoires voor dames en heren. Your Collection biedt een groot assortiment aan de laatste trends in sieraden en accessoires.</p>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Hard Skills</h2>
                    <ul>
                        <li>Wordpress</li>
                        <li>HTML</li>
                        <li>Responsive Design</li>
                        <li>PHP</li>
                    </ul>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Soft Skills</h2>
                    <ul>
                        <li>Perfectionist</li>
                        <li>Samenwerken</li>
                        <li>geduldig</li>
                        <li>Problemen oplossen</li>
                    </ul>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Mijn Documenten</h2>
                <p>Als u mijn cv wilt bekijken kan dat door op deze link te klikken: <a href="pdfpath" style="color: #ffe900">CV</a>.</p>
            </div>
            <div class="col-md-2"></div>
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