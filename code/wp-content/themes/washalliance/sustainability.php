<?php 
	/*
		Template Name: Sustainability portal Page
	*/
?>

<?php
    $header_image = get_field('header_image');
    $financial_page = get_field('financial_page');
  	$institutional_page = get_field('institutional_page');
    $environmental_page = get_field('environmental_page');
    $social_page = get_field('social_page');
    $technical_page = get_field('technical_page');
	
		
	
	
?>

<?php get_header();?>
	<div class="container" id="main-page-container">
		<div class="row">
			<div class="col-md-12">
				<?php if(have_posts()):?>
         			<?php while ( have_posts() ) : the_post();?>
         				<?php the_content();?>
            		<?php endwhile;?>
          		<?php endif;?>
          		
          		
          		
         	</div>
		</div>
	</div><!-- End of Main Body Content -->
<?php get_footer();?>	
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/wiel/qtip.min.css" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/wiel/qtip.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/wiel/raphael.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/wiel/<?php _e(get_field('current_page'));?>.js"></script>
<script type="text/javascript">
	 
	
	var links = {
		financial: '<?php echo $financial_page; ?>',
		institutional: '<?php echo $institutional_page; ?>',
		environmental: '<?php echo $environmental_page; ?>',
		technical: '<?php echo $technical_page; ?>',
		social: '<?php echo $social_page; ?>'
    };
    
    var $ = jQuery;
    $(function(){
    	for (var i = 0, len = rsrGroups.length; i < len; i++) {
            for (var j = 0, len2 = rsrGroups[i].length; j < len2; j++) {
                rsrGroups[i][j].glow({
                    width:7,
                    opacity:0.2
                });
            }

        }
        for (var i = 0, len = bollen.length; i < len; i++) {
        	var el = bollen[i];
        	var id=el.data('id');    
        
            el.mouseover(function() {
                
                this.attr({
                    cursor: 'pointer'
                });
                this.toFront();
                this.animate({
                    fill : '#FF6E01'
                }, 200);
                
            })
            .mouseout(function() {
                
                this.animate({
                    fill : '#ffffff'
                }, 200);
                
            })
            .mousedown(function(){
                document.location.href = links[this.data('id')];
            });
            addTip(el.node,id);

    	}
        function addTip(node, region){
            

            $(node).qtip({
                        content: {
                            text:region.charAt(0).toUpperCase() + region.slice(1)+' Sustainability'
                        },
                        position: {
                            viewport: $('.cDivSustainabilityHeader'),
                            my: 'top right',
                            at: 'bottom right'
                        },
                        style: {
                            classes: 'qtip-light qtipWiel',
                            tip: {
                                corner: true
                            }
                        }
                        ,
//                        style: {
//                            classes: 'ui-tooltip-custom',
//                            widget:false
//                        },
                        hide: {
                            fixed: true // Helps to prevent the tooltip from hiding ocassionally when tracking!
                        }
                    });

            }
    });
</script>
	
	