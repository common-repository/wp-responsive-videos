<?php 

class WPRV_Widget extends WP_Widget{
	
	function __construct() {
		parent::__construct(
			'wprv_widget', // Base ID
			__('WP-Responsive Video', 'wp-responsive-videos-domain'), // Name
			array( 'description' => __( 'Inserts responsive videos from any source', 'wp-responsive-videos-domain' ), ) // Args
		);
	}
	public function form( $instance ) {			
		if ( isset( $instance[ 'id' ] ) ) {
			$id = $instance[ 'id' ];
		}
		else {
			$id = __( 'Enter your video`s ID here', 'wp-responsive-videos-domain' );
		}		
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'source' ); ?>"><?php _e( 'Source:','wp-responsive-videos-domain' ); ?></label> 
        <select id="<?php echo $this->get_field_id( 'source' ); ?>" name="<?php echo $this->get_field_name( 'source' ); ?>"?>">
            <option value="youtube" <?php if($instance['source']=='youtube'){?>selected<?php }?>>Youtube</option>
            <option value="vimeo" <?php if($instance['source']=='vimeo'){?>selected<?php }?>>Vimeo</option>
            <option value="vube" <?php if($instance['source']=='vube'){?>selected<?php }?>>Vube</option>
            <option value="dailymotion" <?php if($instance['source']=='dailymotion'){?>selected<?php }?>>Daily Motion</option>
            <option value="archieve" <?php if($instance['source']=='archieve'){?>selected<?php }?>>Archieve</option>            
            <option value="blip" <?php if($instance['source']=='blip'){?>selected<?php }?>>Blip</option>            
            <option value="collegehumor" <?php if($instance['source']=='collegehumor'){?>selected<?php }?>>College Humor</option>
            <option value="fod" <?php if($instance['source']=='fod'){?>selected<?php }?>>Funny or Die</option>
            <option value="gametrailers" <?php if($instance['source']=='gametrailers'){?>selected<?php }?>>Game Trailers</option>
            <option value="ign" <?php if($instance['source']=='ign'){?>selected<?php }?>>IGN</option>  
            </select><br><br>
        <label for="<?php echo $this->get_field_id( 'id' ); ?>"><?php _e( 'Video Id:','wp-responsive-videos-domain' ); ?></label>
        <input  id="<?php echo $this->get_field_id( 'id' ); ?>" name="<?php echo $this->get_field_name( 'id' ); ?>" type="text" value="<?php echo esc_attr( $id ); ?>">        
        
		</p>
		<?php 
	}
	
	public function widget( $args, $instance ) {
		echo do_shortcode('[wp-respnsive-video source="'.$instance['source'].'" id="'.$instance['id'].'"]');
	}


public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['source'] = ( ! empty( $new_instance['source'] ) ) ? strip_tags( $new_instance['source'] ) : '';
		$instance['id'] = ( ! empty( $new_instance['id'] ) ) ? strip_tags( $new_instance['id'] ) : '';
		
		return $instance;
	}
}
	
	// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'WPRV_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );