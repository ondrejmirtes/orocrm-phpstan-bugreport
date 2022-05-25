<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroNavigation/ApplicationMenu/pinButton.html.twig */
class __TwigTemplate_fd80b39913e34efc6e6ebe920ccc5470 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/ApplicationMenu/pinButton.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/ApplicationMenu/pinButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/ApplicationMenu/pinButton.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/ApplicationMenu/pinButton.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 4
            echo "
";
            // line 5
            $context["contentProviderContent"] = twig_first($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->getContent(null, [0 => "navigationElements"]));
            // line 6
            echo "<div id=\"bookmark-buttons\">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            ";
            // line 9
            ob_start();
            // line 10
            echo "            <button class=\"btn btn-icon btn-light-custom favorite-button";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["contentProviderContent"]) || array_key_exists("contentProviderContent", $context) ? $context["contentProviderContent"] : (function () { throw new RuntimeError('Variable "contentProviderContent" does not exist.', 10, $this->source); })()), "favoriteButton", [], "array", false, false, false, 10) == false)) {
                echo " hide";
            }
            echo "\"
                    data-title=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->renderSerialized(), "html", null, true);
            echo "\"
                    data-title-rendered=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->render(), "html", null, true);
            echo "\"
                    data-title-rendered-short=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->renderShort(), "html", null, true);
            echo "\"
                    title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.favorites.button.title"), "html", null, true);
            echo "\"
                    ";
            // line 15
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oronavigation/js/app/components/favorite-component", "options" => ["dataSource" => "#favorite-content [data-data]", "buttonOptions" => ["navigationElementType" => "favoriteButton"], "tabOptions" => ["el" => "#favorite-content", "listSelector" => ".extra-list", "fallbackSelector" => ".no-data"]]]], 15, $context, $this->getSourceContext());
            // line 28
            echo ">
                        <span class=\"fa-star-o\"></span>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.favorites.button"), "html", null, true);
            // line 31
            echo "</button>
            <button class=\"btn btn-icon btn-light-custom minimize-button";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, (isset($context["contentProviderContent"]) || array_key_exists("contentProviderContent", $context) ? $context["contentProviderContent"] : (function () { throw new RuntimeError('Variable "contentProviderContent" does not exist.', 32, $this->source); })()), "pinButton", [], "array", false, false, false, 32) == false)) {
                echo " hide";
            }
            echo "\"
                    data-title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->renderSerialized(), "html", null, true);
            echo "\"
                    data-title-rendered=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->render(), "html", null, true);
            echo "\"
                    data-title-rendered-short=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->renderShort(), "html", null, true);
            echo "\"
                    title=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.pins.button.title"), "html", null, true);
            echo "\"
                    ";
            // line 37
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oronavigation/js/app/components/pin-component", "options" => ["dataSource" => "#pinbar [data-data]", "buttonOptions" => ["navigationElementType" => "pinButton"], "dropdownOptions" => ["el" => "#pinbar .show-more", "listSelector" => "[data-role=\"pin-bar-dropdown-items\"]"], "barOptions" => ["el" => "#pinbar", "listSelector" => ".list-bar ul", "fallbackSelector" => ".pin-bar-empty"]]]], 37, $context, $this->getSourceContext());
            // line 54
            echo ">
                        <span class=\"fa-thumb-tack\"></span>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.pins.button"), "html", null, true);
            // line 57
            echo "</button>
            ";
            $___internal_parse_81_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo twig_spaceless($___internal_parse_81_);
            // line 59
            echo "        </div>
    </div>
</div>

";
        }
        // line 64
        echo "<script ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oronavigation/js/app/views/page-state-view", "name" => "page-state-component", "options" => ["el" => "#container", "keepElement" => true]]], 64, $context, $this->getSourceContext());
        // line 71
        echo "></script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/ApplicationMenu/pinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 71,  140 => 64,  133 => 59,  131 => 9,  127 => 57,  125 => 56,  122 => 54,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  98 => 32,  95 => 31,  93 => 30,  90 => 28,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  65 => 10,  63 => 9,  58 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% if isDesktopVersion() %}

{% set contentProviderContent = oro_get_content(null, ['navigationElements'])|first %}
<div id=\"bookmark-buttons\">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            {% apply spaceless %}
            <button class=\"btn btn-icon btn-light-custom favorite-button{% if contentProviderContent['favoriteButton'] == false %} hide{% endif %}\"
                    data-title=\"{{ oro_title_render_serialized() }}\"
                    data-title-rendered=\"{{ oro_title_render() }}\"
                    data-title-rendered-short=\"{{ oro_title_render_short() }}\"
                    title=\"{{ 'oro.navigation.favorites.button.title'|trans }}\"
                    {{ UI.renderPageComponentAttributes({
                        module: 'oronavigation/js/app/components/favorite-component',
                        options: {
                            dataSource: '#favorite-content [data-data]',
                            buttonOptions: {
                                navigationElementType: 'favoriteButton'
                            },
                            tabOptions: {
                                el: '#favorite-content',
                                listSelector: '.extra-list',
                                fallbackSelector: '.no-data'
                            }
                        }
                    }) }}>
                        <span class=\"fa-star-o\"></span>
                        {{- 'oro.navigation.favorites.button'|trans -}}
            </button>
            <button class=\"btn btn-icon btn-light-custom minimize-button{% if contentProviderContent['pinButton'] == false %} hide{% endif %}\"
                    data-title=\"{{ oro_title_render_serialized() }}\"
                    data-title-rendered=\"{{ oro_title_render() }}\"
                    data-title-rendered-short=\"{{ oro_title_render_short() }}\"
                    title=\"{{ 'oro.navigation.pins.button.title'|trans }}\"
                    {{ UI.renderPageComponentAttributes({
                        module: 'oronavigation/js/app/components/pin-component',
                        options: {
                            dataSource: '#pinbar [data-data]',
                            buttonOptions: {
                                navigationElementType: 'pinButton'
                            },
                            dropdownOptions: {
                                el: '#pinbar .show-more',
                                listSelector: '[data-role=\"pin-bar-dropdown-items\"]'
                            },
                            barOptions: {
                                el: '#pinbar',
                                listSelector: '.list-bar ul',
                                fallbackSelector: '.pin-bar-empty'
                            }
                        }
                    }) }}>
                        <span class=\"fa-thumb-tack\"></span>
                        {{- 'oro.navigation.pins.button'|trans -}}
            </button>
            {% endapply %}
        </div>
    </div>
</div>

{% endif %}
<script {{ UI.renderPageComponentAttributes({
    view: 'oronavigation/js/app/views/page-state-view',
    name: 'page-state-component',
    options: {
        el: '#container',
        keepElement: true
    }
}) }}></script>
", "@OroNavigation/ApplicationMenu/pinButton.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/ApplicationMenu/pinButton.html.twig");
    }
}
