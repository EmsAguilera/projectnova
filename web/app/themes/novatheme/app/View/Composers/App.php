<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with():array
    {
        return [
            'siteName' => $this->siteName(),
            'products' => collect(require get_theme_file_path('app/View/Composers/data/products.php')),
            'posts' => collect(require get_theme_file_path('app/View/Composers/data/posts.php')),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

}
