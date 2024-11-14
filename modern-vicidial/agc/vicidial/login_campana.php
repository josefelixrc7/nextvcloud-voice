
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agentes: Registro de campa&ntilde;a - ModernVici</title>
    <link rel="icon" type="image/x-icon" href="/modern-vicidial/images/logo.png">

    <!-- CSS files -->
        <link rel="stylesheet" href="/modern-vicidial/css/libraries/fontawesome-v5.9.0.min.css">
        <link href="/modern-vicidial/css/libraries/bootstrap-v5.1.1/bootstrap.min.css" rel="stylesheet">
        <link href="/modern-vicidial/css/main.css" rel="stylesheet">
    <!-- /CSS files -->

    </head>
    <body class="position-relative"  onresize="browser_dimensions();"  onload="browser_dimensions();">

        <div class="row">
            <section class="col-12 col-md-6 p-5">
                <div class="p-2 p-md-5">

                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <img width="50px;" src="/modern-vicidial/images/logo.png" alt="Logo">
                        <h2 class="ms-4">Panel de Agentes: Registro de campa&ntilde;a</h2>
                    </div>
                    <p class="p">Bienvenido al registro de campa&ntilde;a</p>

                    <div class="notificaciones"></div>

                    <script>
                        function mensaje(texto)
                        {
                            $('.notificaciones').append($(`
                                <div class="alert alert-danger" role="alert">
                                    ${texto}
                                </div>";
                            `))
                        }
                    </script>

                    <form name="vicidial_form" id="vicidial_form" action="<?=$agcPAGE?>" method="post">
                        
                        <input type="hidden" name="DB" value="<?=$DB?>">
                        <input type="hidden" name="JS_browser_height" id="JS_browser_height" value="">
                        <input type="hidden" name="JS_browser_width" id="JS_browser_width" value="">
                        <input type="hidden" name="phone_login" value="<?=$phone_login?>">
                        <input type="hidden" name="phone_pass" value="<?=$phone_pass?>">
                        <input type="hidden" name="LOGINvarONE" id="LOGINvarONE" value="<?=$LOGINvarONE?>">
                        <input type="hidden" name="LOGINvarTWO" id="LOGINvarTWO" value="<?=$LOGINvarTWO?>">
                        <input type="hidden" name="LOGINvarTHREE" id="LOGINvarTHREE" value="<?=$LOGINvarTHREE?>">
                        <input type="hidden" name="LOGINvarFOUR" id="LOGINvarFOUR" value="<?=$LOGINvarFOUR?>">
                        <input type="hidden" name="LOGINvarFIVE" id="LOGINvarFIVE" value="<?=$LOGINvarFIVE?>">
                        <input type="hidden" name="hide_relogin_fields" id="hide_relogin_fields" value="<?=$hide_relogin_fields?>">
                        
                        <section class="mt-2">
                            <div class="mb-3">
                                <span class="text-muted">Usuario</span>
                            </div>
                            <div class="mb-3">
                            <input class="form-control" type="text" name="VD_login" size="20" maxlength="20" value="<?=$VD_login?>"/>
                            </div>
                        </section>
                        <section class="mt-2">
                            <div class="mb-3">
                                <span class="text-muted">Contrase&ntilde;a</span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="password" name="VD_pass" size="20" maxlength="100" value="<?=$VD_pass?>" />
                            </div>
                        </section>
                        <section class="mt-2">
                            <div class="mb-3">
                                <span class="text-muted">Campa&ntilde;a</span>
                            </div>
                            <div class="mb-3">
                            <span id="LogiNCamPaigns"><?=$camp_form_code?></span>
                            </div>
                        </section>
                        <section class="mt-2">
                            <button class="btn btn-primary" type="submit" name="SUBMIT">Enviar</button>
                            <span id="LogiNReseT"></span>
                        </section>
                        <div class="mb-3">
                            <a href="/" class="">Ir a inicio</a>
                        </div>
                    </form>

                </div>
            </section>
            <section class="d-none d-md-block col-12 col-md-6">
                <img class="w-100 h-100" src="/modern-vicidial/images/image1.png">
            </section>
        </div>

        <!-- Javascript -->
            <!-- Libraries -->
            <script src="/modern-vicidial/js/libraries/jquery.min-v3.4.1.js"></script>
            <script src="/modern-vicidial/js/libraries/bootstrap-v5.1.1/bootstrap.bundle.min.js"></script>
        <!-- Javascript -->
    </body>
</html>