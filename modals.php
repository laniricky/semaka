		<!--MODAL SECTION F-->
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Roofing Solutions</h2>
                                    <p class="item-intro text-muted">Long lasing roofing solutions just for you.</p>
                                    
									<div class="container">
									<div class="row">
              <?php
              // Define the directory you want to scan
              $directory = 'assets/img/Roofing'; // Replace with the path to your directory

              // Check if the directory exists
              if ( is_dir( $directory ) ) {
                // Get an array of filenames in the directory
                $files = scandir( $directory );

                // Filter out the special entries '.' and '..'
                $files = array_diff( $files, array( '.', '..' ) );

                // Display the files
                if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                    // Get the filename with extension
                    $filenameWithExtension = htmlspecialchars( $file );

                    // Get the filename without extension
                    $fileParts = pathinfo( $file );
                    $filenameWithoutExtension = htmlspecialchars( $fileParts[ 'filename' ] );
                    ?>
										
			<div class="col-lg-3 col-md-6 col-sm-12 image_height">
			<img class="img-fluid d-block mx-auto" src="assets/img/Roofing/<?php echo $filenameWithExtension;?>" alt="..." />
									<p><?php echo $filenameWithoutExtension;?></p>
										</div>
									
			<!--							
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm product-img"> <img src="assets/img/Others/<?php //echo $filenameWithExtension;?>" class="card-img-top" alt="<?php //echo $filenameWithoutExtension;?>">
                  <div class="card-body">
                    <p class="card-text small text-black-50 modal-content-p"> <?php //echo $filenameWithoutExtension;?></p>
                  </div>
                </div>
              </div> -->
              <?php
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>No products here.</p>";
              }
              } else {
                echo "<p class='card-text small text-black-50 modal-content-p'>Directory does not exist.</p>";
              }
              ?>
            </div>
										
			    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            General
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Roofing
                                        </li>
                                    </ul>
										
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	