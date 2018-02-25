<?php
include('database_connection.php');
session_start();
$a=$_POST['imageview'];
echo "<div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>

            </div>";

         
            $thumbs = glob('../campaignpics/'.$a.'/*.{jpg,png,gif}', GLOB_BRACE); 

           echo "<div class='modal-body'>
                <div id='carousel-example-generic' class='carousel ' style='width: 500px;height:400px; margin: 0 auto'>
                      <div class='carousel-inner'>";
                     $n=0;
                       if(count($thumbs)) {
                       foreach($thumbs as $thumb) {$n++; 
                      $name = explode('/', $thumb);
                  $cap1 = $name[3];
                  $cap1 = explode('$', $cap1);
                  $cap=$cap1[0];
                      echo "<div class='item";if($n==1) echo "  active";echo  "' style='text-align:center'>
                        <img  src=".$thumb."";echo " max-width='100%' max-height='100%'>";
                        echo "<div class='carousel-caption' style='top:-50px;text-align:center;vertical-align:middle;'>
                             <p class='capp'>".$cap."</p>
                             </div>";
                      echo "</div>";

                     
                        }} else {
                        echo 'Sorry, no images to display!';
                        }
                      
                      echo "</div>";
                      if (count($thumbs)>1)
              echo  " <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>
                  <span class='icon-prev'></span>
                 </a>
                <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>
                  <span class='icon-next'></span>
                </a>";
            echo "  </div>
          </div>
        </div>
    </div>
";
?>