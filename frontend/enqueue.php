<?php 
    function chatStylesScripts() {
        wp_register_style( 'form_style', plugins_url('/assets/css/style.css', __FILE__) );
        wp_register_script( 'form_chatUI', plugins_url('/assets/js/chatUI.js', __FILE__) );
        wp_register_script( 'form_message', plugins_url('/assets/js/messageFetch.js', __FILE__) );

        wp_enqueue_style('form_style');
        wp_enqueue_script('form_chatUI');
        wp_enqueue_script('form_message');

    }    
    add_action('wp_enqueue_scripts' , 'chatStylesScripts' );
?>  
