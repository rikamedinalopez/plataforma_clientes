<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alcon Supermarket</title>

    <?php
        $url = Routes::getRoute();
    ?>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/css/plugins/animate.css">
    

    <!-- SweetAlert-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>views/bower_components/sweetAlert2/sweetalert2.min.css" />
    <script src="<?php echo $url;?>views/bower_components/sweetAlert2/sweetalert2.all.min.js"></script>


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!--LightGallery-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>views/bower_components/lightGallery/dist/css/lightgallery.css" /> 

    <!--jQuery-File-Upload-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>views/css/plugins/fileupload/jquery.fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $url;?>views/css/plugins/fileupload/jquery.fileupload-ui.css" />
    
    <!-- PLUGINS JAVASCRIPT -->

    <script src="<?php echo $url;?>views/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $url;?>views/dist/js/adminlte.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="<?php echo $url;?>views/bower_components/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script>
    
    <!-- Light Gallery -->
    <script src="<?php echo $url;?>views/bower_components/lightGallery/dist/js/lightgallery.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/lightGallery/modules/lg-thumbnail.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/lightGallery/modules/lg-fullscreen.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/lightGallery/modules/lg-zoom.min.js"></script>
    <script src="<?php echo $url;?>views/bower_components/lightGallery/modules/lg-video.min.js"></script>

    <!-- jQuery-File-Upload -->    
    <script src="<?php echo $url;?>views/js/plugins/fileupload/tmpl.min.js"></script>    
    <script src="<?php echo $url;?>views/js/plugins/fileupload/load-image.all.min.js"></script>    
    <script src="<?php echo $url;?>views/js/plugins/fileupload/canvas-to-blob.min.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/jquery.ui.widget.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.iframe-transport.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-process.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-audio.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-image.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-video.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-validate.js"></script>
    <script src="<?php echo $url;?>views/js/plugins/fileupload/jquery.fileupload-ui.js"></script>    

    <!--Boostrap Select-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css">
    
    <script src="<?php echo $url;?>views/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    
    <!--jQuery TimePicker-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/jquery-timepicker/jquery.timepicker.css">
    
    <script src="<?php echo $url;?>views/bower_components/jquery-timepicker/jquery.timepicker.js"></script>

    <!--Boostrap Select-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/select2/dist/css/select2.min.css">
    
    <script src="<?php echo $url;?>views/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!--DatePicker-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
    
    <script src="<?php echo $url;?>views/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

    <script src="<?php echo $url;?>views/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
    
    <!--Data Table-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/datatables-bs/datatables.css">
    
    <script src="<?php echo $url;?>views/bower_components/datatables-bs/datatables.js"></script>

    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/datatables-bs/responsive.dataTables.css">
    
    <script src="<?php echo $url;?>views/bower_components/datatables-bs/dataTables.responsive.js"></script>

    <!--Typehead-->
    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/jquery-typeahead/src/jquery.typeahead.css">
    
    <script src="<?php echo $url;?>views/bower_components/jquery-typeahead/src/jquery.typeahead.js"></script>

    <!--DateRangePicker-->

    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <script src="<?php echo $url;?>views/bower_components/bootstrap-daterangepicker/moment.min.js"></script>

    <script src="<?php echo $url;?>views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!--DateTimePicker-->
    <script src="<?php echo $url;?>views/bower_components/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="<?php echo $url;?>views/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <!--Alert-->
    <script src="<?php echo $url;?>views/js/alerts.js"></script>

    <!--Toastr-->
    <script src="<?php echo $url;?>node_modules/toastr/toastr.js"></script>

    <!--jQuery Validation-->
    <script src="<?php echo $url;?>node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Template style-->
    <link rel="stylesheet" href="<?php echo $url;?>views/css/template.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/css/profile_contact.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/css/addContact.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/css/addBusiness.css">
    <link rel="stylesheet" href="<?php echo $url;?>views/css/employees.css">


</head>

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
  

    <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == true){

            echo '<div class="wrapper">';
            /*=============================================
            HEADER
            =============================================*/
            include 'modules/header.php';
            /*=============================================
            SIDEBAR
            =============================================*/
            include 'modules/sidebar.php';

            /*=============================================
            CONTENIDO
            =============================================*/

            $views = array();
            $value1 = null;
            $value2 = null;


            if(isset($_GET['view'])){

                $views = explode("/", $_GET["view"]);

                $value1 = $views[0];

                if(isset($views[1])){
                    $value2 = $views[1];
                }

                /* SECCION DE CONTACTOS Y AGREGAR CONTACTO */
                if($value1=="contactos" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')){
                    $value3 = explode("-", $value2);

                    if($value3[0] == "pagina") {                    
                        $pagination = $value3[1];
                        include "modules/contacts.php";              
                    } else if($value1=="contactos" && $value2=="buscar"){
                        
                        include "modules/searchContact.php";

                    } elseif(!empty($value2)) {

                        $id = ContactController::controllerprofileContact($value2);

                        if($id['id_contact'] == $value2){
                            include "modules/profile_contact.php";
                        } else {
                            include "modules/404.php";
                        }                    

                    } elseif($value1=="contactos") {

                        include "modules/contacts.php";

                    } else {
                        
                        include "modules/404.php";  
                    }

                } 
                
                elseif($value1=="agregarContacto" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')) {

                    include "modules/addContact.php";
                    
                } 
                
                
                /* SECCION DE NEGOCIOS Y AGREGAR NEGOCIOS */
                elseif($value1=="negocios" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')) {

                    $value3 = explode("-", $value2);

                    if($value3[0] == "pagina") {                    
                        $pagination = $value3[1];
                        include "modules/businesses.php";              
                    } else if($value1=="negocios" && $value2=="buscar"){
                        
                        include "modules/searchBusiness.php";

                    } else if(!empty($value2)) {

                        $id = BusinessController::controllerprofileBusiness($value2);

                        if($id['id_business'] == $value2){

                            include "modules/profile_business.php";

                        } else {
                            include "modules/404.php";
                        }                    

                    } elseif($value1=="negocios") {

                        include "modules/businesses.php";

                    } else {
                        
                        include "modules/404.php";  
                    }
                } 
                
                
                elseif($value1=="agregarNegocio" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')) {

                    include "modules/addBusiness.php";
                    
                }
                
                
                
                /* SECCION DE DUEÑOS Y AGREGAR DUEÑOS */
                elseif($value1=="duenos" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')) {

                    $value3 = explode("-", $value2);

                    if($value3[0] == "pagina") {                    
                        $pagination = $value3[1];
                        include "modules/owners.php";
                    } else if($value1=="duenos" && $value2=="buscar"){

                        include "modules/searchOwner.php";

                    } else if(!empty($value2)) {

                        $id = OwnerController::controllerShowProfile($value2);

                        if($id['id_owner'] == $value2){

                            include "modules/profile_owner.php";

                        } else {
                            include "modules/404.php";
                        }                    

                    } elseif($value1=="duenos") {

                        include "modules/owners.php";

                    } else {
                        
                        include "modules/404.php";  
                    }
                } 

                elseif($value1=="agregarDueno" && ($_SESSION['type_user'] == 'Monitoreo' || $_SESSION['type_user'] == 'Administrador')) {

                    include "modules/addOwner.php";
                    
                }

                
                elseif($value1=="usuarios" && $_SESSION['type_user'] == 'Administrador') {

                    include "modules/users.php";
                    
                }
                

                elseif($value1=="productos" && $_SESSION['type_user'] == 'Administrador') {

                    include "modules/products.php";
                    
                }

                elseif($value1=="empleados" && $_SESSION['type_user'] == 'Administrador' || $_SESSION['type_user'] == 'Recursos Humanos') {

                    $value3 = explode("-", $value2);
                    if($value3[0] == "descargar"){

                        $file = $value3[1]; 
                        $idEmployeePDF =  $value3[2];
                        
                        include "modules/employee_pdf.php";
                        
                    } else {
                        include "modules/employees.php";
                    }
                    
                    
                }
                
                elseif($value1=="salir") {

                    include "modules/log_out.php";

                }
                
                elseif($value1=="inicio") {

                    include "modules/home.php";

                } else {

                    include "modules/404.php";  
                    
                }
                

                
            

            } else {
                include "modules/home.php";
            }
            

            include 'modules/footer.php';


            
        } else {

            include 'modules/login.php';

        }?>

</div>



<!-- Template -->
<script src="<?php echo $url;?>views/js/template.js"></script>
<script src="<?php echo $url;?>views/js/profileContact.js"></script>
<script src="<?php echo $url;?>views/js/addContact.js"></script>
<script src="<?php echo $url;?>views/js/contacts.js"></script>
<script src="<?php echo $url;?>views/js/addBusiness.js"></script>
<script src="<?php echo $url;?>views/js/profileBusiness.js"></script>
<script src="<?php echo $url;?>views/js/business.js"></script>
<script src="<?php echo $url;?>views/js/profileOwner.js"></script>
<script src="<?php echo $url;?>views/js/users.js"></script>
<script src="<?php echo $url;?>views/js/employees.js"></script>
<script src="<?php echo $url;?>views/js/owners.js"></script>



</body>
</html>

<?php
ob_end_flush();
?>