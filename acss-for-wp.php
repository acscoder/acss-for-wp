<?php
/*
Plugin Name: Atomic Css
Plugin URI: https://rustvietnam.com/
Description: Atomic Css for wordpress
Author: acscoder
Version: 1.0
Author URI: https://rustvietnam.com/
*/
add_action('wp_head',function(){
   echo '<script type="module" src="'.plugin_dir_url(__FILE__).'/acss.js" defer></script>'; 
   echo '<style type="text/css">@keyframes loadingio {
     0% { transform: rotate(0) }
     100% { transform: rotate(360deg) }}</style>';
   echo '<div class="D(n)!" style="position: fixed;width: 100%;height: 100%;background-color: #ffffff;z-index: 999;text-align: center;display: flex;justify-content: center;align-items: center;"><img style="animation: loadingio 1s infinite;"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAANlBMVEX///+ForbC0duNqLvh6O2jucj3+fqUrr/o7fHS3OSctMTw8/ayxdG6ytazxdHJ19/Z4uirv83FAaZLAAABu0lEQVR42u3aW3KkMAyFYR1fsfu+/81OVwaaDsnLMJUq5PzfClCZIxsZAwAAAAAAAAAAAAAAAAAAAAAAAAD8jNJCyLlL+WZ+TaFrFcynEqo+M5dC1NbJ/GlVGqCQ0xwN769WinrxHPamrzy236s+iedbSv7SsamjXpI59V5HdJeKVXsvo5hbSS91Mr+mqEV3vBxmXYuzedYGqaNUzbq5FjSrrvNhJWrmuV89BbeHw40lIdH3i2XTKAsSlqSbc8tmeDHfTpq5PbdvdvVozoUhDidPYZCeZXlvRO45Kh8oWHsLuR+tRdSd08SsD9mOYu808XDNLu58oMONUx/68LB/Mx3uUyztC23S0TJi0znnx2T+C/nl++h5lEKi/mrmW9LM+eexXQ7Xff/zYOPuNmsjDDIJK3GQgcUoI71JY4z0ShxkQbrGSMhVGmFXL1cNcStUuhbR418R77e/A+yFJUgjBCREPXmf3adLleT6GntKKVyjJM/r0bJePOej6TvRX7+q+kZ3uH/oq+rutVoLGeDXurpZDbe/1jWt+s1fxlf3LPWcQ2he1wIAAAAAAAAAAAAAAAAAAAAAAAAADu8PWf0ITaRXSWUAAAAASUVORK5CYII="></div>';  
});
add_action('admin_head', function(){
  echo '<script type="module" src="'.plugin_dir_url(__FILE__).'/acss-backend.js" defer></script>'; 
});