        <?php
        include 'vars.php';
         ?>
            <!DOCTYPE html>
            <html lang="en" dir="ltr">
              <head>
                <meta charset="utf-8">
                <script src="https://kit.fontawesome.com/e23757acf7.js" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <link rel="stylesheet" href="style.css">
                <title></title>
              </head>
              <body>
                <header>
                  <div class="menu_left">
                    <i class="fas fa-bars"></i>
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
                    <h3>Termini & Privacy</h3>
                  </div>
                </header>
                <main>
                  <div class="faq-wrapper">
                    <?php foreach ($google_faq as $key => $value) {?>
                            <?php echo $key; ?>
                            <?php echo $value; ?>
                        <?php } ?>

                  </div>
                </main>

              </body>
            </html>
