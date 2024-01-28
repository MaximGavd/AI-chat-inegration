<?php     
    use User\UserClass;
    function insertForm() {        
        $userAvatar = UserClass::displayAvatar();
        ?>        
        <div id="ai_chat_wrapper" class="ai_chat_wrapper">
            <div class="ai_chat_block">
                <div class="ai_chat_load">
                    <div id="ai_chat_message" class="ai_chat_message">
                        <div class="ai_chat_logo"><img src="<?php echo plugins_url( '/assets/img/chatgpt-logo.png' , __FILE__ );  ?>" /> </div>
                        <div class="ai_chat_text"></div>
                    </div>
                    <div class="ai_message_buttons">
                        <div id="ai_message_agree" class="ai_buttons_hide ai_message_btn ai_message_agree">Yes</div>
                        <div id="ai_message_reject" class="ai_buttons_hide ai_message_btn ai_message_reject">No</div>
                    </div>  
                </div> 
                <div class="ai_chat_expand">
                    <div class="ai_chat_full_window">
                        <img src="<?php echo plugins_url('/assets/img/full_window.png' , __FILE__); ?>" />
                    </div>
                    <div id="ai_chat_message ai_message_sent" class="ai_chat_message">
                        <div class="ai_chat_logo"><img src="<?php echo plugins_url( '/assets/img/chatgpt-logo.png' , __FILE__ );  ?>" /> </div>
                        <div class="ai_chat_text ai_chat_conv_start">You can chose one of the messages below or write down your question!</div>
                    </div>
                    <div id="ai_chat_message user_message_sent" class="ai_chat_message user_message_sent">
                        <div class="ai_chat_logo"><img src="<?php echo $userAvatar; ?>" /></div>
                        <div class="ai_chat_text">New product</div>
<<<<<<< HEAD
                    </div> -->

                    </div>
                    <div id="ai_chat_quick_chat" class="ai_chat_quick_chat">
                        <form action="/" method="post">                            
                            <button class="ai_chat_quick--button">New products</button>
                            <button class="ai_chat_quick--button">Sale products</button>
                            <button class="ai_chat_quick--button">Coupons</button>
                            <button class="ai_chat_quick--button">Popular products</button>
                        </form>
                    </div>
                    <div id="ai_chat_input" class="ai_chat_input">
                        <form action="/" method="POST">
                            <textarea rows="5" class="ai_chat_chating" type="text" placeholder="Start chating..."></textarea>
                            <input class="ai_chat_sent_message" type="submit" value="↗" />
                        </form>
=======
>>>>>>> parent of 4819e23 (front almost done)
                    </div>
                </div>                 
            </div>            
            <div class="ai_chat_icon">
                <img src="<?php echo plugins_url( '/assets/img/chatgpt-logo.png' , __FILE__ );  ?>" />
            </div>
        </div>
    <?php
}
    add_action('init' , 'insertForm');