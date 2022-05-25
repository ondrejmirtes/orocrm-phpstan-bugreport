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

/* @OroAccount/Account/searchResult.html.twig */
class __TwigTemplate_86b6fdbc268560b92aadc8e2111a15e6 extends Template
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
        // line 6
        return "@OroSearch/Search/searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAccount/Account/searchResult.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/searchResult.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/searchResult.html.twig"));

        // line 8
        $context["showImage"] = false;
        // line 10
        $context["recordUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 10, $this->source); })()), "recordUrl", [], "any", false, false, false, 10);
        // line 11
        $context["entityType"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.entity_label");
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "name")) {
            // line 14
            $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 14, $this->source); })()), "recordTitle", [], "any", false, false, false, 14);
        } else {
            // line 16
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view %entityName%", ["%entityName%" => (isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 16, $this->source); })())]);
        }
        // line 19
        $context["entityInfo"] = [];
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "createdAt")) {
            // line 21
            $context["entityInfo"] = twig_array_merge((isset($context["entityInfo"]) || array_key_exists("entityInfo", $context) ? $context["entityInfo"] : (function () { throw new RuntimeError('Variable "entityInfo" does not exist.', 21, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21))) : ("N/A"))]]);
        }
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "updatedAt")) {
            // line 24
            $context["entityInfo"] = twig_array_merge((isset($context["entityInfo"]) || array_key_exists("entityInfo", $context) ? $context["entityInfo"] : (function () { throw new RuntimeError('Variable "entityInfo" does not exist.', 24, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "value" => ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "updatedAt", [], "any", false, false, false, 24)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "updatedAt", [], "any", false, false, false, 24))) : ("N/A"))]]);
        }
        // line 6
        $this->parent = $this->loadTemplate("@OroSearch/Search/searchResultItem.html.twig", "@OroAccount/Account/searchResult.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAccount/Account/searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  73 => 24,  71 => 23,  68 => 21,  66 => 20,  64 => 19,  61 => 16,  58 => 14,  56 => 13,  54 => 11,  52 => 10,  50 => 8,  34 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - user entity Oro\\Bundle\\AccountBundle\\Entity\\Account or null
    * indexer_item - indexer item Oro\\Bundle\\SearchBundle\\Query\\Result\\Item
#}
{% extends '@OroSearch/Search/searchResultItem.html.twig' %}

{% set showImage = false %}

{% set recordUrl = indexer_item.recordUrl %}
{% set entityType = 'oro.account.entity_label'|trans %}

{% if is_granted('VIEW', entity, 'name') %}
    {% set title = indexer_item.recordTitle %}
{% else %}
    {% set title = 'view %entityName%'|trans({'%entityName%' : entityType}) %}
{% endif %}

{% set entityInfo = [] %}
{% if is_granted('VIEW', entity, 'createdAt') %}
    {% set entityInfo = entityInfo|merge([{'title': 'oro.ui.created_at'|trans, 'value': entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A'}]) %}
{% endif %}
{% if is_granted('VIEW', entity, 'updatedAt') %}
    {% set entityInfo = entityInfo|merge([{'title': 'oro.ui.updated_at'|trans, 'value': entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A'}]) %}
{% endif %}
", "@OroAccount/Account/searchResult.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AccountBundle/Resources/views/Account/searchResult.html.twig");
    }
}
