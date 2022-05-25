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

/* @OroNavigation/UserMenu/index.html.twig */
class __TwigTemplate_af6a8f952735f1edad9e4d96a356a229 extends Template
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
        return "@OroNavigation/menuUpdate/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/UserMenu/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/UserMenu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/UserMenu/index.html.twig"));

        // line 3
        $context["fullname"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)), "N/A");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 4
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 4, $this->source); })())]]);
        // line 5
        $context["breadcrumbs"] = ["indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label"), "additional" => [0 => ["indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_profile_view"), "indexLabel" =>         // line 11
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 11, $this->source); })())]], "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.roots_plural_label")];
        // line 16
        $context["gridName"] = "menu-by-scope-grid";
        // line 17
        $context["params"] = ["viewLinkRoute" => "oro_navigation_user_menu_view"];
        // line 1
        $this->parent = $this->loadTemplate("@OroNavigation/menuUpdate/index.html.twig", "@OroNavigation/UserMenu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/UserMenu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  60 => 17,  58 => 16,  56 => 11,  55 => 5,  53 => 4,  50 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/menuUpdate/index.html.twig' %}

{% set fullname = app.user|oro_format_name|default('N/A') %}
{% oro_title_set({params : {\"%username%\": fullname}}) %}
{% set breadcrumbs = {
    'indexPath': path('oro_user_index'),
    'indexLabel': 'oro.user.entity_plural_label'|trans,
    'additional': [
        {
            'indexPath': path('oro_user_profile_view'),
            'indexLabel': fullname
        }
    ],
    'entityTitle': 'oro.navigation.menuupdate.roots_plural_label'|trans
} %}
{% set gridName = 'menu-by-scope-grid' %}
{% set params = {'viewLinkRoute': 'oro_navigation_user_menu_view'} %}
", "@OroNavigation/UserMenu/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/UserMenu/index.html.twig");
    }
}
