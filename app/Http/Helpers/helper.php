<?php

function getProfileImg($name = null) {
    if (!auth()->check() && !$name) {
        return null;
    }
    $name = $name ?? auth()->user()->name;
    return "https://api.dicebear.com/9.x/initials/svg?seed=" . urlencode($name);
}

function getActiveLink($routeName){
    return request()->RouteIs($routeName) ? 'side-menu--active side-menu--open'  : '';
}


function breadcrumb(){
    $url = request()->url();
   $urlArray = str($url)->explode('backend/');
   $path = ucwords(str(isset($urlArray[1]))->replace('/', '-'));
   return $path;
}
