const vars = {
    messageBlock: document.querySelector('.ai_chat_block'),
    greeting: document.querySelector('.ai_chat_text'),   
    buttons: document.querySelectorAll('.ai_message_btn'),
    reject_btn: document.querySelector('.ai_message_reject'),
    agree_btn: document.querySelector('.ai_message_agree'),
    ai_chat_icon: document.querySelector('.ai_chat_icon'),
    ai_chat_expand: document.querySelector('.ai_chat_expand'),
    ai_chat_load: document.querySelector('.ai_chat_load')
}
const conversation = {
    convAppears() {        
        localStorage.getItem('closed') == 'false' ? 
        (window.scrollY > 300 &&  vars.messageBlock.classList.add('message_open')) :
        vars.messageBlock.classList.remove('message_open')

        localStorage.getItem('closed') == null && vars.messageBlock.classList.add('message_open')
    },   
    charAppears() {  
        let text = "Hello! I'm AI assistant! May i help you?";
        let i = 0;    
        let showButtons = () => {
            vars.buttons.forEach(item => {
                item.classList.remove('ai_buttons_hide');
            });
        }    
        let intervalChat = setInterval(() => {     
             vars.messageBlock.classList.contains('message_open') && 
            (i !== text.length ? 
                (i++ , vars.greeting.innerText = text.substr(0 , i) ) : 
                (clearInterval(intervalChat) , showButtons() )
            );                                
        }, 55);
        intervalChat();
    }, 
    rejectConv() {
        localStorage.setItem('closed' , true);
        vars.messageBlock.classList.remove('message_open')
    },
    iconClick() {
        localStorage.setItem('closed' , false);
        vars.messageBlock.classList.add('message_open');
    },
    acceptConv() {
        vars.ai_chat_expand.classList.add('chat_expend_visible');
        vars.ai_chat_load.classList.add('ai_chat_load_hide');
        vars.messageBlock.classList.add('chat_started');
        localStorage.setItem('started' , true);
        localStorage.setItem('closed' , false);   
        vars.messageBlock.classList.add('chat_agreed');
    },
    checkingConverstion() {
        if(localStorage.getItem('started') == 'true') {
            vars.ai_chat_expand.classList.add('chat_expend_visible');
            vars.messageBlock.classList.add('chat_started');
            vars.ai_chat_load.classList.add('ai_chat_load_hide');
        }            
    }
}

document.addEventListener('DOMContentLoaded' , function() {
    document.addEventListener('scroll' , function() { 
        conversation.convAppears();        
    })
    vars.reject_btn.addEventListener('click' , function() {
        conversation.rejectConv();
    })
    vars.agree_btn.addEventListener('click' , function() {
        conversation.acceptConv();
    })
    vars.ai_chat_icon.addEventListener('click' , function() {
        conversation.iconClick();
    })
    conversation.charAppears();
})

conversation.checkingConverstion();