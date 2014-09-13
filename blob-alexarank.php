<?php
/*
Plugin Name: AlexaRank Widget
Plugin URI: http://github.com/blobaugh/alexarank-widget
Description: Displays the Alexa traffic ranking in the sidebar of your blog via widget
Version: 0.6
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
*/


class BlobAlexaRank extends WP_Widget {

	public function __construct() {
		parent::__construct( 'blob-alexarank', 'AlexaRank', array( 'description' => 'Shows your AlexaRank' ) );
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		
		echo $args['before_title'];
		echo 'AlexaRank';
		echo $args['after_title'];

		echo '<center><script type="text/javascript" src="http://xslt.alexa.com/site_stats/js/t/a?url=' . get_bloginfo( 'siteurl' ) . '"></script></center>';

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		echo 'No Configuration';
	}
} // end class

add_action( 'widgets_init', function() { register_widget( 'BlobAlexaRank' ); } );
