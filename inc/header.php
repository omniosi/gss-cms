
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
     <span>Practice Areas &amp; Theraputic Expertise</span>
    </div>
    
    <span class="sign-post">
     <ul>
      <li>
       preclinical
      </li><a href="../clinical/one.html" data-transition="slide"><li class="righty">
       clinical
      </li></a>
     </ul>
     <span class="spinner"></span>
    </span>
   </div>
  </div>