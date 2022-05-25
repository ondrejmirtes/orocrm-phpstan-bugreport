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

/* @OroContact/Contact/searchResult.html.twig */
class __TwigTemplate_f926d844afcadd8d6986e6c8d2ed43f7 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroContact/Contact/searchResult.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/searchResult.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/searchResult.html.twig"));

        // line 8
        $context["recordUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 8, $this->source); })()), "recordUrl", [], "any", false, false, false, 8);
        // line 9
        $context["title"] = ((twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 9, $this->source); })()), "recordTitle", [], "any", false, false, false, 9)) ? (twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 9, $this->source); })()), "recordTitle", [], "any", false, false, false, 9)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")));
        // line 10
        $context["entityType"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.entity_label");
        // line 11
        $context["showImage"] = true;
        // line 12
        $context["image"] = (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "picture", [], "any", false, false, false, 12)) : (null));
        // line 13
        $context["entityInfo"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "value" => ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "value" => ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "updatedAt", [], "any", false, false, false, 15)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "updatedAt", [], "any", false, false, false, 15))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))]];
        // line 6
        $this->parent = $this->loadTemplate("@OroSearch/Search/searchResultItem.html.twig", "@OroContact/Contact/searchResult.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroContact/Contact/searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  62 => 15,  61 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  34 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - user entity Oro\\Bundle\\ContactBundle\\Entity\\Contact or null
    * indexer_item - indexer item Oro\\Bundle\\SearchBundle\\Query\\Result\\Item
#}
{% extends '@OroSearch/Search/searchResultItem.html.twig' %}

{% set recordUrl = indexer_item.recordUrl %}
{% set title = indexer_item.recordTitle ?: 'N/A'|trans %}
{% set entityType = 'oro.contact.entity_label'|trans %}
{% set showImage = true %}
{% set image = entity ? entity.picture : null %}
{% set entityInfo = [
    {'title': 'oro.ui.created_at'|trans, 'value': entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A'|trans},
    {'title': 'oro.ui.updated_at'|trans, 'value': entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A'|trans},
] %}
", "@OroContact/Contact/searchResult.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactBundle/Resources/views/Contact/searchResult.html.twig");
    }
}
