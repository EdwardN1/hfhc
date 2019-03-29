<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer blue-background" role="contentinfo">
					
					<div class="inner-footer grid-x" style="background: #5dcae3;">
						<div class="cell auto">&nbsp;</div>
						<div class="shrink cell">
							<nav class="white pad-top-10 pad-bottom-10" role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
                        <div class="cell auto">&nbsp;</div>
						<!--<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">&copy; <?php /*echo date('Y'); */?> <?php /*bloginfo('name'); */?>.</p>
						</div>-->
					
					</div> <!-- end #inner-footer -->

                    <div class="grid-container footer-columns pad-bottom-10">
                        <div class="grid-x pad-top-32">
                            <div class="large-3 medium-6 small-12 fontsize-18 lineheight-13">
                                <?php the_field('footer_column_1','option'); ?>
                            </div>
                            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-13">
                                <?php the_field('footer_column_2','option'); ?>
                            </div>
                            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-13">
                                <?php the_field('footer_column_3','option'); ?>
                            </div>
                            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-19">
                                <p>
                                    SOCIAL MEDIA:<br>
                                    <a href="<?php the_field('facebook','option')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png"></a>
                                    <a href="<?php the_field('linkedin','option')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.png"></a>
                                    <a href="<?php the_field('twitter','option')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png"></a>


                                </p>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Request-a-Call-Icon.png"> REQUEST A CALL
                                </div>
                            </div>
                        </div>
                    </div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->