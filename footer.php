<?php
/*
  * the template for displaying the footer
*/
?>



<footer class="container-fluid py-5">
     <div class="row">
       <div class="col-sm-4">
         <h5 class="">Stay Connected:</h5>
         <form class="">
           <div class="form-row form-group">
             <div class="col-md-8">
              <input type="email" class="form-control" placeholder="Email Address">
             </div>
             <div class="col-md-4">
              <button type="submit" class="btn btn-primary">
                Sign up!
              <i class="fas fa-angle-double-right"></i> <!--fas - font awesome solid -->
              </button>
             </div>
           </div>
         </form>
         <!-- social media icons -->
         <i class="fab fa-facebook-square fa-2x"></i> <!--fab - font awesome black -->
         <i class="fab fa-twitter-square fa-2x"></i>
         <i class="fab fa-instagram fa-2x"></i>
         <i class="fab fa-pinterest-square fa-2x"></i>
       </div>
       <div class="col-sm-4">
         <h5>Out Setting:</h5>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aperiam ducimus aliquid ratione tenetur consequuntur doloremque, quos quo labore commodi id culpa harum sequi. Quaerat, nulla. Non possimus sequi soluta?Enim praesentium nobis similique mollitia, minus quae tempore incidunt non dolorem neque quidem corrupti iure minima sint beatae ipsam odit consequuntur nemo debitis obcaecati molestias adipisci, dolore explicabo harum! Illum?</p>
       </div>
       <div class="col-sm-4">
         <h5>Navigation</h5>
         <ul class="list-group">
           <li class="list-group-item"><a href="blog.html">Blog</a></li>
           <li class="list-group-item"><a href="contact.html">Contact Us!</a></li>
           <li class="list-group-item"><a href="">Privacy Policy</a></li>
          
         </ul>
       </div>
     </div>
   </footer>

   
  <?php wp_footer(); ?>
  </body>
</html>