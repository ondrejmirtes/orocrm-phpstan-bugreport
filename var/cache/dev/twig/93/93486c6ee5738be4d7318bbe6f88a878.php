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

/* @OroNavigation/Menu/pin_tabs_list.html.twig */
class __TwigTemplate_8ba4f10b26a73374e3d6f7e148a0b2c9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/pin_tabs_list.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/pin_tabs_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/pin_tabs_list.html.twig"));

        // line 1
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 2
            $context["pinHelpTogglerId"] = uniqid("pin-help-dropdown-");
            // line 3
            $context["showMoreTogglerId"] = uniqid("show-more-dropdown-");
            // line 4
            echo "<div class=\"list-bar-wrapper\" id=\"pinbar\">
    <div class=\"pin-bar-empty dropdown\">
        <a href=\"#\" id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["pinHelpTogglerId"]) || array_key_exists("pinHelpTogglerId", $context) ? $context["pinHelpTogglerId"] : (function () { throw new RuntimeError('Variable "pinHelpTogglerId" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" role=\"button\"
           title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.how_to_use_pinbar"), "html", null, true);
            echo "\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\"
        >";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.how_to_use_pinbar"), "html", null, true);
            echo "</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["pinHelpTogglerId"]) || array_key_exists("pinHelpTogglerId", $context) ? $context["pinHelpTogglerId"] : (function () { throw new RuntimeError('Variable "pinHelpTogglerId" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\">
            <button class=\"btn-link btn-close fa-close\" data-role=\"close\" aria-hidden=\"true\"></button>
            <div class=\"dropdown-content\">";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.pins.help_message", ["%pinIcon%" => "<span class=\"fa-thumb-tack\"></span>"]);
            echo "</div>
            <button class=\"btn btn-success no-hash\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ok, got it"), "html", null, true);
            echo "\" ><span class=\"fa-check\"></span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ok, got it"), "html", null, true);
            echo "
            </button>
        </div>
    </div>
    <div class=\"list-bar\">
        <ul></ul>
    </div>
    <div class=\"show-more dropdown\"><span role=\"button\" id=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["showMoreTogglerId"]) || array_key_exists("showMoreTogglerId", $context) ? $context["showMoreTogglerId"] : (function () { throw new RuntimeError('Variable "showMoreTogglerId" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\"
                                          aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.pins.more_tabs.label"), "html", null, true);
            echo "\"
        ><span class=\"fa-ellipsis-v\" aria-hidden=\"true\"></span></span><div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["showMoreTogglerId"]) || array_key_exists("showMoreTogglerId", $context) ? $context["showMoreTogglerId"] : (function () { throw new RuntimeError('Variable "showMoreTogglerId" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"
        ><ul class=\"dropdown-menu-items\" data-role=\"pin-bar-dropdown-items\"></ul></div></div>
</div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/pin_tabs_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  95 => 22,  91 => 21,  79 => 14,  75 => 13,  70 => 11,  66 => 10,  60 => 7,  56 => 6,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isDesktopVersion() %}
{% set pinHelpTogglerId = 'pin-help-dropdown-'|uniqid %}
{% set showMoreTogglerId = 'show-more-dropdown-'|uniqid %}
<div class=\"list-bar-wrapper\" id=\"pinbar\">
    <div class=\"pin-bar-empty dropdown\">
        <a href=\"#\" id=\"{{ pinHelpTogglerId }}\" role=\"button\"
           title=\"{{ 'oro.navigation.menu.how_to_use_pinbar'|trans }}\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\"
        >{{ 'oro.navigation.menu.how_to_use_pinbar'|trans }}</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"{{ pinHelpTogglerId }}\">
            <button class=\"btn-link btn-close fa-close\" data-role=\"close\" aria-hidden=\"true\"></button>
            <div class=\"dropdown-content\">{{ 'oro.navigation.pins.help_message'|trans({'%pinIcon%': '<span class=\"fa-thumb-tack\"></span>'})|raw }}</div>
            <button class=\"btn btn-success no-hash\" title=\"{{ 'Ok, got it'|trans }}\" ><span class=\"fa-check\"></span>{{ 'Ok, got it'|trans }}
            </button>
        </div>
    </div>
    <div class=\"list-bar\">
        <ul></ul>
    </div>
    <div class=\"show-more dropdown\"><span role=\"button\" id=\"{{ showMoreTogglerId }}\" class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\"
                                          aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'oro.navigation.pins.more_tabs.label'|trans }}\"
        ><span class=\"fa-ellipsis-v\" aria-hidden=\"true\"></span></span><div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ showMoreTogglerId }}\"
        ><ul class=\"dropdown-menu-items\" data-role=\"pin-bar-dropdown-items\"></ul></div></div>
</div>
{% endif %}
", "@OroNavigation/Menu/pin_tabs_list.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/pin_tabs_list.html.twig");
    }
}
