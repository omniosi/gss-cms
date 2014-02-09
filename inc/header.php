
  <div class="container" data-role="content">
   <div class="menu">

    <?php
      if( $current_page === 'p-one' || $current_page === 'c-one' ){
        echo '<li>Areas &amp; Expertise</li>';
      }else{
        echo '<li><a href="one.php">Areas &amp; Expertise</a></li>';
      }
      if( $current_page === 'p-two' || $current_page === 'c-two' ){
        echo '<li>About</li>';
      }else{
        echo '<li><a href="two.php">About</a></li>';
      }
      if( $current_page === 'p-three' || $current_page === 'c-three' ){
        echo '<li>Projects &amp; Testimonials</li>';
      }else{
        echo '<li><a href="three.php">Projects &amp; Testimonials</a></li>';
      }
      if( $current_page === 'p-four' || $current_page === 'c-four' ){
        echo '<li>Contact &amp; Resources</li>';
      }else{
        echo '<li><a href="four.php">Contact &amp; Resources</a></li>';
      }
    ?>
    <li><a href="../../" data-transition="slidedown">Home</a></li>
   </div>
  </div>

  <div class="titlebar">
   <div class="sec-nav">
    <a href="../../" data-transition="slidedown" class="home-btn"></a>
    <div class="title">
     Preclinical & Product Development<br>
     <?php if( $current_page === 'p-one' || 
               $current_page === 'c-one' ){
      echo '<span>Practice Areas &amp; Theraputic Expertise</span>';
     }else if($current_page === 'p-two' || 
              $current_page === 'c-two' ){
      echo '<span>About Us</span>';
     }else if($current_page === 'p-three' || 
              $current_page === 'c-three' ){
      echo '<span>Recent Projects &amp; Testimonials</span>';
     }else if($current_page === 'p-four' || 
              $current_page === 'c-four' ){
      echo '<span>Contact &amp; Candidate Resources</span>';
     } ?>

    </div>
    
    <span class="sign-post">
     <ul>
      <?php if( $current_page === 'p-one' || 
                $current_page === 'p-two' || 
              $current_page === 'p-three' || 
               $current_page === 'p-four' ){
      echo '<li>preclinical</li><a href="../clinical/one.html" data-transition="slide"><li class="righty">clinical</li></a>';
      }else if( $current_page === 'c-one' || 
                $current_page === 'c-two' || 
              $current_page === 'c-three' || 
               $current_page === 'c-four' ){
       echo '<a href="../preclinical/one.html" data-transition="slide" data-direction="reverse"><li class="lefty">preclinical</li></a><li>clinical</li>';
      } ?>

     </ul>
     <span class="spinner"></span>
    </span>
   </div>
  </div>