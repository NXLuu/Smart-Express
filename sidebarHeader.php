 <header class="header-main-content d-flex justify-content-end">
     <section class="help mr-5">
         <a href="">
             <i class="fas fa-question"></i>
             <span>Trợ giúp</span>
         </a>
     </section>
     <section class="account d-flex align-items-center mr-5">
         <img src="asset/images/avatar.jpg" alt="" class="w-100">
         <?php
            echo  '<span class="ml-2">'.$_SESSION["user"]["tenDn"].'</span>';
         ?>

     </section>
 </header>