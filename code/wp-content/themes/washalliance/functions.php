<?php
	function sustainability_header($atts){
		$header_image = get_field('header_image');
		
		return '<div id="rsr" style="background-image:url(\''.$header_image.'\')"></div>';
	
	}
	add_shortcode('sustainability_header', 'sustainability_header');
	
	
	function sustainability_menu($atts){
		$financial_page = get_field('financial_page');
  		$institutional_page = get_field('institutional_page');
   		$environmental_page = get_field('environmental_page');
 	  	$social_page = get_field('social_page');
		$technical_page = get_field('technical_page');
		$list_arr = array(
			array(
				'link' => $financial_page,
				'image_src' => '/images/financial_inactive.png',
				'text' => 'Financial'
			),
			array(
				'link' => $institutional_page,
				'image_src' => '/images/institutional_inactive.png',
				'text' => 'Institutional'
			),
			array(
				'link' => $environmental_page,
				'image_src' => '/images/environmental_inactive.png',
				'text' => 'Environmental'
			),
			array(
				'link' => $technical_page,
				'image_src' => '/images/technical_inactive.png',
				'text' => 'Technological'
			),
			array(
				'link' => $social_page,
				'image_src' => '/images/social_inactive.png',
				'text' => 'Social'
			)
		);
		
		$html = '<ul id="menu">';
		
		
		foreach($list_arr as $list){
			$html .= '<li>';
			$html .= '<a href="'.$list['link'].'">';
			$html .= '<p><img src="'.get_stylesheet_directory_uri(). $list['image_src'].'" /></p>';
			$html .= '<p>'.$list['text'].'</p>';
			$html .= '</a>';
			$html .= '</li>';
			
		}
		
		
		$html .= '</ul>';		
		
		return $html;
	}
	add_shortcode('sustainability_menu', 'sustainability_menu');
	
	
          			