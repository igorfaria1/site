<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        
        <!--Title-->
        <title>Igor Faria - Template 1</title>
        
        <!--Fonts and Icons-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        
        <!--CSS files-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/template1.css" rel="stylesheet" />
        
    </head>
    
    <body id="template1">
        <div class="container-fluid">
            <div class="row wrapper">
                <!--Header-->
                    <?php include_once('incs/header.php'); ?>
                <!--End Header-->
                
                <!--Section left-->
                    <?php include_once('incs/sections/section_left.php'); ?> 
                <!--End Section left-->
                
                <!--Section right-->
                    <?php include_once('incs/sections/section_right.php'); ?>
                <!--End Section right-->
            
            </div>
       
        
            <!--Footer-->
            <?php include_once('incs/footer.php'); ?>
            <!--End footer-->
         </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="assets/js/tawk.js"></script>
    </body>
    
</html>