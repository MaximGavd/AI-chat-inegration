<?php 

    namespace User;

    class UserClass {
        public $userAvatar;
        public function __construct() {
            $this->userAvatar = $this->getAvatar();
        }
        public static function displayAvatar() {
            return is_user_logged_in() ? self::$userAvatar : plugins_url('../frontend/assets/img/chatgpt-logo.png' , __FILE__);            
        }       
        public function getAvatar() {
            return get_avatar_url(get_current_user_id(), 96);
        }
    }
?>