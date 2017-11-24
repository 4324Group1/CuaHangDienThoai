<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |cxcxcxcxc
        -------------------------->

<?php
if(!isset($_GET['page'])) $_GET['page']= "profile";
 include_once('content/'.$_GET['page'].'.php') ?>
    </section>