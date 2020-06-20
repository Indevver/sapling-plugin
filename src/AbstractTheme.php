<?php
namespace Sapling\Plugin;

use Timber\Menu;
use Timber\Timber;
use Twig\Environment;

abstract class AbstractTheme
{
    abstract public function blocks (array $blocks) :array;
    abstract public function colors () :array;
    abstract public function fonts () :array;
    abstract public function menus () :array;
    abstract public function sidebars () :array;
    abstract public function assets();
    abstract public function adminAssets();
    abstract public function editorAssets();
    abstract public function imageSizes();

    public function __construct()
    {
        add_filter('timber/context', [$this, 'context']);
        add_filter('timber/twig', [$this, 'twig']);
        add_filter('after_setup_theme', [$this, 'supports']);
        add_filter('after_setup_theme', [$this, 'registerMenus']);
        add_filter('after_setup_theme', [$this, 'imageSizes']);
        add_action('widgets_init', [$this, 'registerSidebars']);
        add_action('wp_enqueue_scripts', [$this, 'assets']);
        add_action('admin_enqueue_scripts', [$this, 'adminAssets']);
        add_action('enqueue_block_editor_assets', [$this, 'editorAssets']);
        add_filter('gutenblock_blocks', [$this, 'blocks']);
    }

    protected function getAsset($asset)
    {
        $dist = get_theme_file_uri().'/../dist/';
        $manifestPath = get_theme_file_path().'/../dist/manifest.json';
        $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];

        return isset($manifest["/$asset"]) ? $manifest["/$asset"] : "{$dist}{$asset}";
    }

    public function registerMenus()
    {
        register_nav_menus($this->menus());
    }

    public function registerSidebars()
    {
        foreach($this->sidebars() as $widget)
        {
            register_sidebar($widget);
        }
    }

    public function context(array $context)
    {
        $context['menu_logo'] = get_theme_mod('menu_logo', 0);

        foreach($this->sidebars() as $widget)
        {
            if($widget_id = $widget['id'])
            {
                $context[$widget_id] = Timber::get_widgets($widget_id);
            }
        }

        foreach($this->menus() as $menu => $description)
        {
            $context[$menu] = new Menu($menu);
        }

        return $context;
    }

    public function twig(Environment $twig)
    {
        return $twig;
    }

    public function supports()
    {
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds' );
        add_theme_support('disable-custom-colors' );
        add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_theme_support('title-tag');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('editor-color-palette', $this->colors());
        add_theme_support('__experimental-editor-gradient-presets', []);
        add_theme_support('disable-custom-font-sizes');
        add_theme_support( 'editor-font-sizes', $this->fonts());
    }
}
