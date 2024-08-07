<?php
if(!function_exists('admin_guard')){
    function admin_guard() {
        return auth('admin');
    }
}

if(!function_exists('get_user_data')) {
    function get_user_data() {
        $guards = ['admin', 'teacher', 'academic'];
        foreach($guards as $guard){
            if(auth($guard)->check()){
                return auth($guard)->user();
            }
        }
        return null;
    }
}
