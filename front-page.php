<?php

/*
  * the main template file
*/

?>
 
 <?php get_header() ?>


    <!-- py-5 is bootstrap code p-padding y-top and bottom x-left and right "bootstrap>> utilities>> Notation for documentation" -->
    <div class="container-fluid text-center py-5">
      <div class="row">
        <!-- 6 columns for medium devices // offset makes it centered 3 on each side-->
        <div class="col-md-6 offset-md-3">
          <h3>Welcome to Tranquil Spa/h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25"> <!--bs documentation setting width to 25%-->
        </div> 
      </div>
      <div class="row mt-4 d-flex justify-content-around"> <!--margin top 4-->
        <div class="col-sm-3"> <!--columns 3 small screens and above-->
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/makeup.jpg" alt="makeup image" class="card-img-top rounded-circle"> <!--bs card image on top with into rounded circle shape-->
          <div class="card-body">
            <p class="card-text">Hair &amp; make up</p> <!--&amp; for &-->
          </div>
        </div> 
        <div class="col-sm-3"> <!--columns 3 small screens and above-->
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.jpg" alt="candles image" class="card-img-top rounded-circle"> <!--bs card image on top with into rounded circle shape-->
          <div class="card-body">
            <p class="card-text">Spa Facilities</p> <!--&amp; for &-->
          </div>
        </div> 
        <div class="col-sm-3"> <!--columns 3 small screens and above-->
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/retreat.jpg" alt="retreat image" class="card-img-top rounded-circle"> <!--bs card image on top with into rounded circle shape-->
          <div class="card-body">
            <p class="card-text">Take a Tour</p> <!--&amp; for &-->
          </div>
        </div> 
      </div>
    </div> 

    <!-- LATEST OFFERS -->

    <div class="container-fluid text-center bg-dark py-5"> <!-- py-5 is bootstrap code p-padding y-top and bottom x-left and right "bootstrap>> utilities>> Notation for documentation" -->
      <div class="row">
        <div class="col-md-6 offset-md-3"> <!-- 6 cols for md devices offset by 3 -->
          <h3 class="text-light">Latest Spa Offers</h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25"> <!--bs padding bottom 4 - setting width to 25%-->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <h4 class="card-header py-5"> <!--padding top and bottom-->
              Family swim package<span class="font-weight-bold">$60</span>
            </h4>
            <div class="card-body">
              <blockquote class="blockquote mb-0"> <!--blockquote with margin bottom of 0-->
                <p>Our most popular swim package, great value for families or groups up to 12 people </p>
              </blockquote>
            </div>
            <ul class="list-group">
              <li class="list-group-item font-italic">Up to 12 people</li>
              <li class="list-group-item font-italic">Private Sessions</li>
              <li class="list-group-item font-italic">Swim lessons also available</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <h4 class="card-header py-5"> <!--padding top and bottom-->
              For the bride<span class="font-weight-bold">$40</span>
            </h4>
            <div class="card-body">
              <blockquote class="blockquote mb-0"> <!--blockquote with margin bottom of 0-->
                <p>Our wedding packages are perfect for your big day. We can cater for groups large or small.</p>
              </blockquote>
            </div>
            <ul class="list-group">
              <li class="list-group-item font-italic">Hair &amp; make up</li>
              <li class="list-group-item font-italic">Groups of any size</li>
              <li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <h4 class="card-header py-5"> <!--padding top and bottom-->
              Weekend pass<span class="font-weight-bold">$60</span>
            </h4>
            <div class="card-body">
              <blockquote class="blockquote mb-0"> <!--blockquote with margin bottom of 0-->
                <p>Take full advantage of all of the facilities we have to offer with our unlimited weekend pass </p>
              </blockquote>
            </div>
            <ul class="list-group">
              <li class="list-group-item font-italic">Pool &amp; sauna</li>
              <li class="list-group-item font-italic">Full use of our gym</li>
              <li class="list-group-item font-italic">Includes 2 treatments per person</li>
            </ul>
          </div>
        </div>
      </div> <!-- closing row-->
    </div> <!-- closing container-->

    <!-- ABOUT US SECTION -->
    <div class="container-fluid py-5 text-center bg-light">
      <div class="row">
        <div class="col-sm-6 offset-sm-3">
          <h3>About Us</h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col"> <!-- if you just set to col instead of a value it'll just take up a equal set of space.  if you had 1 div it would tak up 12 columns if you had 3 div each one would be equally distributed-->
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id aliquam, recusandae cupiditate error ad inventore eius adipisci quam alias blanditiis sint aspernatur? Dolorem sint nam commodi reiciendis culpa sit.
            Voluptatem tempore omnis, consequuntur pariatur reiciendis fugiat numquam eveniet sunt nisi earum placeat consequatur! Consectetur, velit nihil reiciendis temporibus aperiam porro voluptate ab aspernatur amet inventore molestias magni repellat obcaecati!
            Fugiat provident alias tenetur doloremque eos magnam rem? Ratione numquam excepturi alias doloremque tempora? Perferendis nihil ad cumque accusantium modi non et quia reiciendis! Perferendis illum tenetur praesentium veniam error. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolores doloribus laborum, est maxime, reprehenderit omnis expedita eveniet natus eius totam dolor quas corrupti autem delectus modi ipsum facilis quo.
          </p>
        </div>
      </div>

    </div>

    <!-- PRICE LIST SECTION -->
    <div class="container-fluid py-5 bg-dark"> <!-- full screen - padding top & bottom - background dark -->
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <h3 class="text-light">Price List</h3>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25"> <!-- padding bottom 4 - width 25% -->
        </div>
      </div> 
      <div class="row my-4"> <!-- margin top & bottom 4 -->
        <div class="col-sm-8">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/massage.jpg" alt="massage picture">
        </div>
        <div class="col-sm-4">
          <h4 class="title text-center">Massages</h4>
          <ul class="list-group list-group-flush text-light"> <!-- list group flush will remove the left and right boarders just leaving the top and bottom line - looks cleaner -->
            <li class="list-group-item">Swedish Massage<em>$110.00</em></li>
            <li class="list-group-item">Duet Massage <em>$200.00</em></li>
            <li class="list-group-item">Hot Stone Massage <em>$158.00</em></li>
            <li class="list-group-item">Deep Tissue Massage<em>$138.00</em></li>
            <li class="list-group-item">Reflexology Foot Massage <em>$100.00</em></li>
          </ul>

        </div>
      </div>
      <div class="row my-4">
        <div class="col-sm-4">
          <h4 class="title text-center">Facials</h4>
          <ul class="list-group list-group-flush text-light"> <!-- list group flush will remove the left and right boarders just leaving the top and bottom line - looks cleaner -->
            <li class="list-group-item">Signature Facial <em>$164.00</em></li>
            <li class="list-group-item">Hydrafacial <em>$305.00</em></li>
            <li class="list-group-item">Pure Facial <em>$230.00</em></li>
            <li class="list-group-item">Skin Firm Facial <em>$190.00</em></li>
            <li class="list-group-item">Microderm <em>$190.00</em></li>
          </ul>
        </div>
        <div class="col-sm-8">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facial.jpg" alt="facial image" class="">
        </div>
      </div>

      <div class="row my-4"> <!-- margin top & bottom 4 -->
        <div class="col-sm-8">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cosmetics.jpg" alt="cosmetics picture">
        </div>
        <div class="col-sm-4">
          <h4 class="title text-center">Hair &amp; make up</h4>
          <ul class="list-group list-group-flush text-light"> <!-- list group flush will remove the left and right boarders just leaving the top and bottom line - looks cleaner -->
            <li class="list-group-item">Wash & Cut <em>$82.00</em></li>
            <li class="list-group-item">All Over Color <em>$120.00</em></li>
            <li class="list-group-item">Highlights <em>$90.00</em></li>
            <li class="list-group-item">Formal Up-Do<em>$75.00</em></li>
            <li class="list-group-item">Full Make-Up <em>$65.00</em></li>
          </ul>
        </div>
      </div>
    </div>  <!-- closing container -->
    
    <?php get_footer() ?>
   