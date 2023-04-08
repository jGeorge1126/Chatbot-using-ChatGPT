<?php
/**
 * Chatbot ChatGPT for WordPress - Shortcode Registration
 *
 * This file contains the code for registering the shortcode used
 * to display the Chatbot ChatGPT on the website.
 *
 * @package chatbot-chatgpt
 */

function chatbot_chatgpt_shortcode() {
    // Retrieve the bot name - Ver 1.1.0
    $bot_name = get_option('chatgpt_bot_name', 'ChatGPT');
    ob_start();
    ?>
    <div id="chatbot-chatgpt">
        <div id="chatbot-chatgpt-header">
            <div id="chatgptTitle" class="title"><?php echo $bot_name; ?></div>
        </div>
        <div id="chatbot-chatgpt-conversation"></div>
        <div id="chatbot-chatgpt-input">
            <input type="text" id="chatbot-chatgpt-message" placeholder="<?php echo esc_attr( 'Type your message...' ); ?>">
            <button id="chatbot-chatgpt-submit">Send</button>
        </div>
    </div>
    <button id="chatgpt-open-btn">
    <i class="dashicons dashicons-format-chat"></i>
    </button>
    <?php
    return ob_get_clean();
}
add_shortcode('chatbot_chatgpt', 'chatbot_chatgpt_shortcode');
