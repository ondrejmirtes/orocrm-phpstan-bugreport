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

/* @OroNavigation/GlobalMenu/view.html.twig */
class __TwigTemplate_84c8b8d219b5496e790975c971d4d7fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/menuUpdate/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/GlobalMenu/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/GlobalMenu/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/GlobalMenu/view.html.twig"));

        // line 3
        $context["routePrefix"] = "oro_navigation_global_menu_";

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%title%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]]);
        // line 6
        $context["breadcrumbs"] = ["entity" =>         // line 7
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_navigation_global_menu_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.roots_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10)];
        // line 1
        $this->parent = $this->loadTemplate("@OroNavigation/menuUpdate/view.html.twig", "@OroNavigation/GlobalMenu/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/GlobalMenu/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 1,  57 => 10,  56 => 7,  55 => 6,  53 => 5,  50 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/menuUpdate/view.html.twig' %}

{% set routePrefix = 'oro_navigation_global_menu_' %}

{% oro_title_set({params : {\"%title%\": entity.name}}) %}
{% set breadcrumbs = {
    'entity': entity,
    'indexPath': path('oro_navigation_global_menu_index'),
    'indexLabel': 'oro.navigation.menuupdate.roots_plural_label'|trans,
    'entityTitle': entity.name
} %}
", "@OroNavigation/GlobalMenu/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/GlobalMenu/view.html.twig");
    }
}
