<?php include_once('tpls/header.php'); ?>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header / Header Style One-->
      <?php include_once('tpls/topMenu.php'); ?>
    <!--End Main Header -->
    
    
    <!--Main Slider-->
       
        <?php include_once("tpls/".$page.".php"); ?>
    
    
    <!--Main Footer-->
        <?php include_once('tpls/footer.php'); ?>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/isotope.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/validate.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>


<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<!-- <script src="maps/map.js"></script> -->
<script src="js/map-script.js"></script>

</body>
</html>
    