<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="favicon" type="image/png" href="assets/img/favicon.png/" />
    <link rel="apple-touch-icon" type="image/png" href="assets/img/favicon.png/" />
    <title>Tim van Andel - Contact</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                    <li><a href="../project/index.php" class="left">Mijn werk</a></li>
                    <li><a href="" class="left active">Contact</a></li>
                </ul>
            </div>
        </nav>

        <?php
        session_start();
        if(isset($_SESSION['send'])){
            
        ?>
            <div class="row popup">
                <div class="col-md-2 col-2"></div>

                <?php if($_SESSION['send'] == "true"){ ?>
                    <div class="col-md-8 col-8 sendTrue">E-mail verzonden!</div> 
                <?php 
                // unset($_SESSION['send']);
                } else {?>
                    <div class="col-md-8 col-8 sendFailed">Er heeft een fout opgetreden, probeer het opnieuw.</div> 
                <?php unset($_SESSION['send']); session_destroy();}?>

               <div class="col-md-2 col-2"></div> 
            </div>

        <?php }?>

        <div class="row contactForm">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Contact formulier</h2>
                <h5>U kunt via dit formulier contact opnemen:</h4>
                <form id="contactForm" method="POST" action="contact.php">
                    <div class="row">
                        <div class="col">
                            <label for="inputVoorNaam">Voornaam:<span>*</span></label>
                            <input type="text" class="form-control" placeholder="Voornaam" id="inputVoorNaam"  name="inputVoorNaam" required>
                        </div>
                        <div class="col">
                            <label for="inputAchterNaam">Achternaam:<span>*</span></label>
                            <input type="text" class="form-control" placeholder="Achternaam" id="inputAchterNaam"  name="inputAchterNaam" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="inputEmail">Email:<span>*</span></label>
                            <input type="email" class="form-control" placeholder="Email" id="inputEmail"  name="inputEmail" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="inputOnderwerp">Onderwerp:<span>*</span></label>
                            <input type="text" class="form-control" placeholder="Onderwerp" id="inputOnderwerp" name="inputOnderwerp" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="inputTextErea">Bericht:<span>*</span></label>
                            <textarea name="inputTextErea" id="inputTextErea" cols="30" rows="10" class="form-control" placeholder="Bericht" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfROQ8aAAAAAGIzVNv0zfS_Ro8K7xaa7331z7eK" required></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h6 id="requiredFields"><span>*</span>Verplichten velden</h6>
                            <input type="submit" value="Versturen" id="submitForm" name="submitForm" class="btn btn-warning">
                        </div>
                    </div>
                  </form>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row information">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Contact Gegevens:</h2>
                <h5>Tim van Andel</h5>
                <h5>info@timvanandel.nl</h5>
                <h5>Ameide - Utrecht - Nederland</h5>
                
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row location">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Locatie:</h2>
                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=nl&amp;q=Ameide+(Locatie)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>  
            <div class="col-md-2"></div>
        </div>

        <footer class="row">
            <div class="col-md-12">
                <span class="copyright">&copy;2020 Tim van Andel</span>
            </div>
        </footer>



    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>