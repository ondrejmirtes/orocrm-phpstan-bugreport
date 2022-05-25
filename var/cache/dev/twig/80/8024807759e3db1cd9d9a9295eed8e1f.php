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

/* @OroSidebar/sidebar.html.twig */
class __TwigTemplate_50ecb2939f352e9ddc1f0d1d7868db50 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSidebar/sidebar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSidebar/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSidebar/sidebar.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSidebar/sidebar.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("sidebarsGetURL", $context)) {
            // line 4
            echo "    ";
            $context["sidebarsGetURL"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_sidebars", ["position" => ("SIDEBAR_" . twig_upper_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 4, $this->source); })())))]);
        }
        // line 6
        echo "
";
        // line 7
        if ( !array_key_exists("sidebarPostURL", $context)) {
            // line 8
            echo "    ";
            $context["sidebarPostURL"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_post_sidebars");
        }
        // line 10
        echo "
";
        // line 11
        if ( !array_key_exists("widgetsGetURL", $context)) {
            // line 12
            echo "    ";
            $context["widgetsGetURL"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_sidebarwidgets", ["placement" => (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 12, $this->source); })())]);
        }
        // line 14
        echo "
";
        // line 15
        if ( !array_key_exists("widgetPostURL", $context)) {
            // line 16
            echo "    ";
            $context["widgetPostURL"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_post_sidebarwidgets");
        }
        // line 18
        echo "
";
        // line 19
        if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() && ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue((("oro_sidebar.sidebar_" . (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 19, $this->source); })())) . "_active")) == true))) {
            // line 20
            echo "    ";
            $context["pageComponentOptions"] = ["sidebarData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(            // line 21
(isset($context["sidebarsGetURL"]) || array_key_exists("sidebarsGetURL", $context) ? $context["sidebarsGetURL"] : (function () { throw new RuntimeError('Variable "sidebarsGetURL" does not exist.', 21, $this->source); })())), "widgetsData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(            // line 22
(isset($context["widgetsGetURL"]) || array_key_exists("widgetsGetURL", $context) ? $context["widgetsGetURL"] : (function () { throw new RuntimeError('Variable "widgetsGetURL" does not exist.', 22, $this->source); })())), "availableWidgets" => $this->extensions['Oro\Bundle\SidebarBundle\Twig\SidebarExtension']->getWidgetDefinitions(            // line 23
(isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 23, $this->source); })())), "urlRoot" =>             // line 24
(isset($context["sidebarPostURL"]) || array_key_exists("sidebarPostURL", $context) ? $context["sidebarPostURL"] : (function () { throw new RuntimeError('Variable "sidebarPostURL" does not exist.', 24, $this->source); })()), "url" =>             // line 25
(isset($context["widgetPostURL"]) || array_key_exists("widgetPostURL", $context) ? $context["widgetPostURL"] : (function () { throw new RuntimeError('Variable "widgetPostURL" does not exist.', 25, $this->source); })())];
            // line 27
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pageComponentOptions"]) || array_key_exists("pageComponentOptions", $context) ? $context["pageComponentOptions"] : (function () { throw new RuntimeError('Variable "pageComponentOptions" does not exist.', 27, $this->source); })()), "sidebarData", [], "any", false, false, false, 27))) {
                // line 28
                echo "        ";
                $context["pageComponentOptions"] = twig_array_merge((isset($context["pageComponentOptions"]) || array_key_exists("pageComponentOptions", $context) ? $context["pageComponentOptions"] : (function () { throw new RuntimeError('Variable "pageComponentOptions" does not exist.', 28, $this->source); })()), ["sidebarData" => json_encode(["position" => ("SIDEBAR_" . twig_upper_filter($this->env,                 // line 29
(isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 29, $this->source); })())))])]);
                // line 31
                echo "    ";
            }
            // line 32
            echo "
<div id=\"sidebar-";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\" class=\"sidebar sidebar-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\"
    ";
            // line 34
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orosidebar/js/app/components/sidebar-component", "options" =>             // line 36
(isset($context["pageComponentOptions"]) || array_key_exists("pageComponentOptions", $context) ? $context["pageComponentOptions"] : (function () { throw new RuntimeError('Variable "pageComponentOptions" does not exist.', 36, $this->source); })())]], 34, $context, $this->getSourceContext());
            // line 37
            echo "></div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSidebar/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  117 => 36,  116 => 34,  110 => 33,  107 => 32,  104 => 31,  102 => 29,  100 => 28,  97 => 27,  95 => 25,  94 => 24,  93 => 23,  92 => 22,  91 => 21,  89 => 20,  87 => 19,  84 => 18,  80 => 16,  78 => 15,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  62 => 8,  60 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% if sidebarsGetURL is not defined %}
    {% set sidebarsGetURL = path('oro_api_get_sidebars', {'position': 'SIDEBAR_' ~ placement|upper}) %}
{% endif %}

{% if sidebarPostURL is not defined %}
    {% set sidebarPostURL = path('oro_api_post_sidebars') %}
{% endif %}

{% if widgetsGetURL is not defined %}
    {% set widgetsGetURL = path('oro_api_get_sidebarwidgets', {'placement': placement}) %}
{% endif %}

{% if widgetPostURL is not defined %}
    {% set widgetPostURL = path('oro_api_post_sidebarwidgets') %}
{% endif %}

{% if isDesktopVersion() and oro_config_value('oro_sidebar.sidebar_' ~ placement ~ '_active') == true %}
    {% set pageComponentOptions = {
        sidebarData: render(sidebarsGetURL),
        widgetsData: render(widgetsGetURL),
        availableWidgets: oro_sidebar_get_available_widgets(placement),
        urlRoot: sidebarPostURL,
        url: widgetPostURL
    } %}
    {% if pageComponentOptions.sidebarData is empty %}
        {% set pageComponentOptions = pageComponentOptions|merge({
            sidebarData: {position: 'SIDEBAR_' ~ placement|upper}|json_encode
        }) %}
    {% endif %}

<div id=\"sidebar-{{ placement }}\" class=\"sidebar sidebar-{{ placement }}\"
    {{  UI.renderPageComponentAttributes({
        module: 'orosidebar/js/app/components/sidebar-component',
        options: pageComponentOptions
    }) }}></div>
{% endif %}
", "@OroSidebar/sidebar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SidebarBundle/Resources/views/sidebar.html.twig");
    }
}
