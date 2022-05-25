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

/* @OroTag/Search/result.html.twig */
class __TwigTemplate_2e6f2298798e6c79ef2e044b244746ce extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTag/Search/result.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Search/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Search/result.html.twig"));

        // line 8
        $context["showImage"] = false;
        // line 10
        if ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })())) {
            // line 11
            $context["recordUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 11, $this->source); })()), "recordUrl", [], "any", false, false, false, 11);
        }
        // line 14
        $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 14), "N/A")) : ("N/A"));
        // line 15
        $context["entityType"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 15, $this->source); })()), "entityName", [], "any", false, false, false, 15), "label"));
        // line 17
        $context["entityInfo"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "value" => ((twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "created", [], "any", false, false, false, 18)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "created", [], "any", false, false, false, 18))) : ("N/A"))], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "value" => ((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "updated", [], "any", false, false, false, 19)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "updated", [], "any", false, false, false, 19))) : ("N/A"))]];
        // line 6
        $this->parent = $this->loadTemplate("@OroSearch/Search/searchResultItem.html.twig", "@OroTag/Search/result.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTag/Search/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  63 => 19,  62 => 18,  61 => 17,  59 => 15,  57 => 14,  54 => 11,  52 => 10,  50 => 8,  34 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - user entity Oro\\Bundle\\TagBundle\\Entity\\Tag
    * indexer_item - indexer item Oro\\Bundle\\SearchBundle\\Query\\Result\\Item
#}
{% extends '@OroSearch/Search/searchResultItem.html.twig' %}

{% set showImage = false %}

{% if entity %}
    {% set recordUrl = indexer_item.recordUrl %}
{% endif %}

{% set title = entity.name|default('N/A') %}
{% set entityType = oro_entity_config_value(indexer_item.entityName, 'label')|trans %}

{% set entityInfo = [
    {'title': 'oro.ui.created_at'|trans, 'value': entity.created ? entity.created|oro_format_datetime : 'N/A'},
    {'title': 'oro.ui.updated_at'|trans, 'value': entity.updated ? entity.updated|oro_format_datetime : 'N/A'},
] %}
", "@OroTag/Search/result.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TagBundle/Resources/views/Search/result.html.twig");
    }
}
