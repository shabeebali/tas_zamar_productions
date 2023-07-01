<?php

namespace App\Shortcodes;

use Illuminate\Support\Facades\URL;

class MenuLinkShortCode
{
    public function register($shortcode, $content, $compiler, $name, $viewData): string
    {
        $baseClass = 'menu-item menu-item-type-post_type menu-item-object-page';
        if(URL::current() == URL::to($shortcode->to)) {
            $baseClass.= ' jet-nav__item current_page_item current-menu-item';
        }
        $str = '<div class="'.$baseClass.'">';
        $str .= '<a href="'.url($shortcode->to).'" class="menu-item-link menu-item-link-depth-0 menu-item-link-top">';
        $str .= '<span class="jet-nav-link-text">'.$content.'</span></a></div>';
        return $str;
    }
}
