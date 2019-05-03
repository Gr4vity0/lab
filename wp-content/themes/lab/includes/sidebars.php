<?php
class MgWidgetRegister
{
    public static function register()
    {
        register_sidebar(array(
            'name' => __('Sidebars-Widget'),
            'id' => 'sidebar',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
    }
}
add_action('widgets_init', [MgWidgetRegister::class, 'register']);