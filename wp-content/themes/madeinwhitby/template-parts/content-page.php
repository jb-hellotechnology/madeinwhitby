<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hellotechnology
 */

?>

		<?php
		global $post;
		$post_slug = $post->post_name;
		
		if ( $post_slug == 'contact' ) :
			echo '
	            <div class="content hero">
	            	<div class="restrict">
		            	<div class="textarea flow bg-no-background">
		            		<h1>Contact Made in Whitby</h1>
		            	</div>
		            </div>
	            </div>
	            <div class="content form bg-no-background">
	            	<div class="restrict">
		            	<div class="textarea flow form">
						'; echo do_shortcode( '[contact-form-7 id="68f9a98" title="Contact Form"]' ); echo '
						</div>
	            	</div>
	            </div>';
		endif;

		// Check value exists.
		if( have_rows('page_content') ):
		
		    // Loop through rows.
		    while ( have_rows('page_content') ) : the_row();
		
		        // Case: Hero.
		        if( get_row_layout() == 'hero' ):
		        	$hero = get_sub_field('hero');
		            echo '
		            <div class="content hero">
		            	<div class="restrict">
							<img src="'.$hero['sizes']['1536x1536'].'" alt="'.$hero['alt'].'" />
			            </div>
		            </div>';
		            
		        // Case: Textarea.
		        elseif( get_row_layout() == 'textarea' ):
		        	$textarea = get_sub_field('textarea');
		            echo '
		            <div class="content bg-no-background">
		            	<div class="restrict">
			            	<div class="textarea flow">
			            		'.$textarea.'
			            	</div>
			            </div>
		            </div>';
					
				// Case: CTA.
				elseif( get_row_layout() == 'cta' ):
					$heading = get_sub_field('heading');
					$subheading = get_sub_field('subheading');
					$url = get_sub_field('url');
					echo '
					<div class="content bg-pink">
						<div class="restrict">
							<div class="textarea no-margin flow">
								<p class="alert">Important News</p>
								<h2>'.$heading.'</h2>
								<h3>'.$subheading.'</h3>
								<p><a href="'.$url.'">Find Out More &rarr;</a></p>
							</div>
						</div>
					</div>';
				
				// Case: Video.
				elseif( get_row_layout() == 'video' ):
					$heading = get_sub_field('heading');
					$oembed = get_sub_field('youtube_video');
					echo '
					<div class="content bg-pink">
						<div class="restrict">
							<div class="textarea video flow">
								<h2>'.$heading.'</h2>
								'.$oembed.'
							</div>
						</div>
					</div>';
				
				// Case: Gallery.
				elseif( get_row_layout() == 'gallery' ):
					if( have_rows('images') ):
						$items = get_sub_field('images');
						echo '
						<div class="content bg-no-background">
							<div class="restrict">
								<div class="gallery">';
								while( have_rows('images') ) : the_row();
									$image = get_sub_field('image');
									echo '<a href="'.$image['sizes']['large'].'" data-src="'.$image['sizes']['large'].'" data-fancybox="gallery"><img src="'.$image['sizes']['medium'].'" alt="" /></a>';
								endwhile;
								echo '
								</div>
							</div>
						</div>';
					else:
						
					endif;
		            
		        // Case: Grid.
		        elseif( get_row_layout() == 'grid' ):
					$heading = get_sub_field('heading');
					echo '
						<div class="content bg-no-background">
							<div class="restrict">
								<div class="textarea no-margin flow">
									<h2>'.$heading.'</h2>
								</div>
							</div>
						</div>';
					// Check rows exists.
					if( have_rows('items') ):
						echo '
					<div class="content bg-no-background">
						<div class="restrict grid">';
					    // Loop through rows.
					    while( have_rows('items') ) : the_row();
					
					        // Load sub field value.
					        $heading = get_sub_field('heading');
					        $image = get_sub_field('image');
							$description = get_sub_field('description');
							$url = get_sub_field('url');
					        echo '
					        <div class="item">
					        	<div class="text flow bg-pink '; if($image){ echo 'image'; } echo '">
					        		<h2>'.$heading.'</h2>
					        	</div>';
					        	if($image){
									echo '
					        	<div class="image">
					        		<img src="'.$image['sizes']['medium_large'].'" alt="" />';
									echo '
					        	</div>';
					        	}
								echo '<p>'.$description.'</p>';
								if($url){
									echo '
								<p><a href="'.$url.'">More Details &rarr;</a></p>';
								}
					        echo '
					        </div>';
					
					    // End loop.
					    endwhile;
						echo '
						</div>
					</div>';

					else:

					endif;
				
				// Case: Grid.
				elseif( get_row_layout() == 'map' ):
					echo '
						<div class="content bg-no-background">
							<div class="restrict">
								<div class="textarea no-margin flow">
									<h2>Map of Makers</h2>
								</div>
								<div id="map" style="width:100%;height:700px;"></div>
								<div class="textarea flow">
									<h3>Directory</h3>
								</div>
								<div class="makers">';
								// Check rows exists.
								if( have_rows('makers') ):
									// Loop through rows.
									$i = 1;
									while( have_rows('makers') ) : the_row();
								
										// Load sub field value.
										$name = get_sub_field('name');
										$description = get_sub_field('description');
										$url = get_sub_field('url');
										$lat = get_sub_field('lat');
										$lng = get_sub_field('lng');
										echo '<div class="flow"><h3>'.$name.'</h3><p>'.$description.'</p><p><a href="'.$url.'">Find out more &rarr;</a></p></div>';
										$i++;
									// End loop.
									endwhile;
								
								// No value.
								else :
									// Do something...
								endif;
								echo '
								</div>
								<script type="text/javascript">
									var locations = [
										';
									// Check rows exists.
									if( have_rows('makers') ):
										// Loop through rows.
										$i = 1;
										while( have_rows('makers') ) : the_row();
									
											// Load sub field value.
											$name = get_sub_field('name');
											$description = get_sub_field('description');
											$url = get_sub_field('url');
											$lat = get_sub_field('lat');
											$lng = get_sub_field('lng');
											if($lng<>''){
												echo "[\"".$name."\", \"".$description."\", \"".$url."\", ".$lat.", ".$lng.", $i],";
											}
											$i++;
										// End loop.
										endwhile;
									
									// No value.
									else :
										// Do something...
									endif;
									echo '
									];
									
									var map = new google.maps.Map(document.getElementById("map"), {
									  zoom: 14,
									  center: new google.maps.LatLng(54.485080, -0.617070),
									  mapTypeId: google.maps.MapTypeId.ROADMAP
									});
									
									var infowindow = new google.maps.InfoWindow();
								
									var marker, i;
									
									var styles = [
									  {
										featureType: "poi",
										elementType: "business",
										stylers: [
										  { visibility: "off" }
										]
									  }
									];
									
									map.setOptions({styles: styles});
									
									const image = {
										url: "https://madeinwhitby.com/wp-content/themes/madeinwhitby/marker_86.png",
										scaledSize: new google.maps.Size(42, 42), // scaled size
									}

									for (i = 0; i < locations.length; i++) {  
									  marker = new google.maps.Marker({
										position: new google.maps.LatLng(locations[i][3], locations[i][4]),
										icon: image,
										map: map
									  });
									  
									  google.maps.event.addListener(marker, "click", (function(marker, i) {
										return function() {
										  infowindow.setContent("<p><strong>" + locations[i][0] + "</strong></p><p>" + locations[i][1] + "</p><p><a href=\"" + locations[i][2] + "\">Find out more &rarr;</a></p>");
										  infowindow.open(map, marker);
										}
									  })(marker, i));
									}
								  </script>
							</div>
						</div>';
				
				endif;
		
		    // End loop.
		    endwhile;
		
		// No value.
		else :
		    // Do something...
		endif;
		?>