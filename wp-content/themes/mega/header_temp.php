<div id="scroll-header" >
				<div id="scroll-header-content">
					<div class="wrap" >
						<div class="left-header">
							<div class="site-logo">
								<?php if(trim($wope_main_option['logo_url']) != ''){?>
									<?php if(is_front_page()){?>
										<h1>
											<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<?php if( trim($wope_main_option['logo_retina_url']) != ''){?>
													<img class="logo-normal" alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_url']);?>" />
													<img class="logo-retina"   alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_retina_url']);?>" />
												<?php }else{?>
													<img alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_url']);?>" />
												<?php }?>
											</a>
										</h1>
									<?php }else{?>
										<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php if( trim($wope_main_option['logo_retina_url']) != ''){?>
												<img class="logo-normal" alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_url']);?>" />
												<img class="logo-retina" alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_retina_url']);?>" />
											<?php }else{?>
												<img alt="<?php bloginfo('name');?>" src="<?php echo esc_url($wope_main_option['logo_url']);?>" />
											<?php }?>
										</a>
									<?php }?>
								<?php }else{?>
									<?php if(is_front_page()){?>
										<h1>
											<a class="logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<?php bloginfo('name');?>
											</a>
										</h1>
									<?php }else{?>
										<a class="logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php bloginfo('name');?>
										</a>
									<?php }?>
								<?php }?>
							</div>
						</div>
						<div class="right-header">

							<div class="main-menu">
								<?php 
								if ( has_nav_menu('main-menu')){
									wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
								}else{
								?>
									<ul>
										<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a></li>
									</ul>
								<?php } ?> 
							</div><!-- End Main Menu -->
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div>