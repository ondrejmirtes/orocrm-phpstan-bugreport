<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.yml
 */
class __Oro_Layout_Update_d7058c922e10ad9700d0d52950f0adbaf288409a3c5173316ea25f35a4c65059 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/layout.html.twig' );
        $layoutManipulator->add( 'head', 'root', 'head' );
        $layoutManipulator->add( 'title', 'head', 'title', array (
          'defaultValue' => '=data["title_provider"].getTitle(context["route_name"], params)',
          'value' => '=defaultValue',
          'params' =>
          array (
          ),
        ) );
        $layoutManipulator->add( 'meta_charset', 'head', 'meta', array (
          'charset' => 'utf-8',
        ) );
        $layoutManipulator->add( 'meta_viewport', 'head', 'meta', array (
          'name' => 'viewport',
          'content' => 'width=device-width, initial-scale=1',
        ) );
        $layoutManipulator->add( 'theme_icon', 'head', 'external_resource', array (
          'visible' => '=data["theme"].getIcon(context["theme"])!=null',
          'href' => '=data["asset"].getUrl(data["theme"].getIcon(context["theme"]))',
          'rel' => 'shortcut icon',
        ) );
        $layoutManipulator->add( 'styles', 'head', 'style', array (
          'src' => '=data["theme"].getStylesOutput(context["theme"])',
        ) );
        $layoutManipulator->add( 'print_styles', 'head', 'style', array (
          'src' => '=data["theme"].getStylesOutput(context["theme"], "print_styles")',
          'media' => 'print',
        ) );
        $layoutManipulator->add( 'body', 'root', 'body' );
        $layoutManipulator->add( 'wrapper', 'body', 'container' );
        $layoutManipulator->add( 'skip_to_content', 'wrapper', 'container' );
        $layoutManipulator->add( 'page_container', 'wrapper', 'container' );
        $layoutManipulator->add( 'page_main', 'page_container', 'container' );
        $layoutManipulator->add( 'page_main_content', 'page_main', 'container' );
        $layoutManipulator->add( 'page_main_header', 'page_main_content', 'container' );
        $layoutManipulator->add( 'page_sidebar', 'page_main_content', 'container' );
        $layoutManipulator->add( 'page_content', 'page_main_content', 'container' );
        $layoutManipulator->add( 'layout_js', 'body', 'container' );
        $layoutManipulator->add( 'layout_js_modules_config', 'layout_js', 'js_modules_config', array (
          'publicPath' => '="build/" ~ context["theme"] ~ "/"',
        ) );
        $layoutManipulator->add( 'layout_js_build_scripts', 'layout_js', 'js_build', array (
          'src' => '="build/" ~ context["theme"] ~ "/app.js"',
        ) );
    }
}
