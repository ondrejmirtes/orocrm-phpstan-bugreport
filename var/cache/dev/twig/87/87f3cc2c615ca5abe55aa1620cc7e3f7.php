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

/* @OroNavigation/Menu/dots_menu.html.twig */
class __TwigTemplate_ac3655c3b759c4e2f27df8f88f522bb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/dots_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/dots_menu.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/dots_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/dots_menu.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/dots_tabs.html.twig", "@OroNavigation/Menu/dots_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("root", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        if (((($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", [], "any", false, false, false, 4)) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "depth", [], "any", false, false, false, 4) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "displayChildren", [], "any", false, false, false, 4))) {
            // line 5
            echo "    ";
            $context["togglerId"] = uniqid("dropdown-");
            // line 6
            echo "    <li class=\"dot-menu dropdown\">
        <a href=\"#\" role=\"button\" id=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" class=\"dropdown-toggle dropdown-toggle--no-caret\"
           data-prevent-close-on-menu-click=\"true\"
           title=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.recent_pages.label"), "html", null, true);
            echo "\"
           aria-label=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.recent_pages.label"), "html", null, true);
            echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"fa-bars\" aria-hidden=\"true\"></span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"  tabindex=\"0\">
            <div class=\"tabbable tabs-left\">
                ";
            // line 15
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
                ";
            // line 16
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
            </div>
        </div>
    </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/dots_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 16,  106 => 15,  101 => 13,  95 => 10,  91 => 9,  86 => 7,  83 => 6,  80 => 5,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/dots_tabs.html.twig' %}

{% block root %}
    {% if isDesktopVersion() and item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% set togglerId = 'dropdown-'|uniqid %}
    <li class=\"dot-menu dropdown\">
        <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" data-toggle=\"dropdown\" class=\"dropdown-toggle dropdown-toggle--no-caret\"
           data-prevent-close-on-menu-click=\"true\"
           title=\"{{ 'oro.navigation.menu.recent_pages.label'|trans }}\"
           aria-label=\"{{ 'oro.navigation.menu.recent_pages.label'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"fa-bars\" aria-hidden=\"true\"></span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"{{ togglerId }}\"  tabindex=\"0\">
            <div class=\"tabbable tabs-left\">
                {{ block('navbar_tabs') }}
                {{ block('navbar_tabs_content') }}
            </div>
        </div>
    </li>
    {% endif %}
{% endblock %}
", "@OroNavigation/Menu/dots_menu.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/dots_menu.html.twig");
    }
}
