<?php
if(!function_exists('admin_guard')){
    function admin_guard() {
        return auth('admin');
    }
}

if(!function_exists('teacher_guard')){
    function teacher_guard() {
        return auth('teacher');
    }
}

if(!function_exists('academic_guard')){
    function academic_guard() {
        return auth('academic');
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

if (!function_exists('require_dashboard_routes')) {
    function require_dashboard_routes()
    {
        $files = glob(base_path('routes/routes_group/*.php'));
        foreach ($files as $file) {
            require_once $file;
        }
    }
}
