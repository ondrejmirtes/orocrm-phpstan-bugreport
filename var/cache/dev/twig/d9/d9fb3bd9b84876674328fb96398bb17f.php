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

/* @OroUser/Configuration/userConfig.html.twig */
class __TwigTemplate_8845002c148d7c97fcd1fb2b47443454 extends Template
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
        return "@OroConfig/configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Configuration/userConfig.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Configuration/userConfig.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Configuration/userConfig.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Configuration/userConfig.html.twig", 2)->unwrap();
        // line 3
        $context["fullname"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })())), "N/A");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 4
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 4, $this->source); })())]]);
        // line 6
        $context["pageTitle"] = [0 => twig_call_macro($macros["UI"], "macro_link", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label")]], 7, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["UI"], "macro_link", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "label" =>         // line 13
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 13, $this->source); })())]], 11, $context, $this->getSourceContext()), 2 => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.user_configuration.label") . ((        // line 15
(isset($context["scopeInfo"]) || array_key_exists("scopeInfo", $context) ? $context["scopeInfo"] : (function () { throw new RuntimeError('Variable "scopeInfo" does not exist.', 15, $this->source); })())) ? (twig_call_macro($macros["UI"], "macro_tooltip", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["scopeInfo"]) || array_key_exists("scopeInfo", $context) ? $context["scopeInfo"] : (function () { throw new RuntimeError('Variable "scopeInfo" does not exist.', 15, $this->source); })()))], 15, $context, $this->getSourceContext())) : ("")))];
        // line 19
        $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 20
(isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 20, $this->source); })()), twig_array_merge(        // line 21
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 21, $this->source); })()), ["activeGroup" => (isset($context["activeGroup"]) || array_key_exists("activeGroup", $context) ? $context["activeGroup"] : (function () { throw new RuntimeError('Variable "activeGroup" does not exist.', 21, $this->source); })()), "activeSubGroup" => (isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 21, $this->source); })())]));
        // line 24
        $context["routeName"] = (isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 24, $this->source); })());
        // line 25
        $context["routeParameters"] = (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 25, $this->source); })());
        // line 1
        $this->parent = $this->loadTemplate("@OroConfig/configPage.html.twig", "@OroUser/Configuration/userConfig.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/Configuration/userConfig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 1,  68 => 25,  66 => 24,  64 => 21,  63 => 20,  62 => 19,  60 => 15,  59 => 13,  58 => 12,  57 => 6,  55 => 4,  52 => 3,  50 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroConfig/configPage.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% set fullname = entity|oro_format_name|default('N/A') %}
{% oro_title_set({params : {\"%username%\": fullname }}) %}

{% set pageTitle = [
        UI.link({
            'path': path('oro_user_index'),
            'label': 'oro.user.entity_plural_label'|trans
        }),
        UI.link({
            'path': path('oro_user_view', {id: entity.id}),
            'label': fullname
        }),
        'oro.user.user_configuration.label'|trans ~ (scopeInfo ? UI.tooltip(scopeInfo|trans) : '')
    ]
%}

{% set formAction    = path(
        routeName,
        routeParameters|merge({activeGroup: activeGroup, activeSubGroup: activeSubGroup})
    )
%}
{% set routeName = routeName %}
{% set routeParameters = routeParameters %}
", "@OroUser/Configuration/userConfig.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Configuration/userConfig.html.twig");
    }
}
