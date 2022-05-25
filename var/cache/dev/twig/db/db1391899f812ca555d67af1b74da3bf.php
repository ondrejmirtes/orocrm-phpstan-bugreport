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

/* @OroEmail/Email/searchResult.html.twig */
class __TwigTemplate_56db9c7e532f5c0073a3f92530310479 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/searchResult.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/searchResult.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/searchResult.html.twig"));

        // line 8
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/searchResult.html.twig", 8)->unwrap();
        // line 9
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/searchResult.html.twig", 9)->unwrap();
        // line 11
        $context["iconType"] = "envelope";
        // line 13
        $context["recordUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 13, $this->source); })()), "recordUrl", [], "any", false, false, false, 13);
        // line 14
        $context["title"] = (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "subject", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 14, $this->source); })()), "recordTitle", [], "any", false, false, false, 14)));
        // line 16
        $context["entityType"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.entity_label");
        // line 18
        $context["entityInfo"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.sent_at.label"), "value" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "sentAt", [], "any", false, false, false, 19))], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.from_name.label"), "value" => twig_call_macro($macros["EA"], "macro_email_address", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "fromEmailAddress", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "fromName", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext())], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.to.label"), "value" => twig_call_macro($macros["EA"], "macro_recipient_email_addresses", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "recipients", [0 => "to"], "method", false, false, false, 21)], 21, $context, $this->getSourceContext())], 3 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailuser.owner.label"), "value" => twig_call_macro($macros["UI"], "macro_entityOwnerLink", [        // line 22
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), false], 22, $context, $this->getSourceContext())]];
        // line 6
        $this->parent = $this->loadTemplate("@OroSearch/Search/searchResultItem.html.twig", "@OroEmail/Email/searchResult.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  66 => 22,  65 => 21,  64 => 20,  63 => 19,  62 => 18,  60 => 16,  58 => 14,  56 => 13,  54 => 11,  52 => 9,  50 => 8,  34 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - email entity Oro\\Bundle\\EmailBundle\\Entity\\EmailUser
    * indexer_item - indexer item Oro\\Bundle\\SearchBundle\\Query\\Result\\Item
#}
{% extends '@OroSearch/Search/searchResultItem.html.twig' %}

{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEmail/macros.html.twig' as EA %}

{% set iconType = 'envelope' %}

{% set recordUrl = indexer_item.recordUrl %}
{% set title = entity ? entity.email.subject : indexer_item.recordTitle %}

{% set entityType = 'oro.email.entity_label'|trans %}

{% set entityInfo = [
    {'title': 'oro.email.sent_at.label'|trans, 'value': entity.email.sentAt|oro_format_datetime},
    {'title': 'oro.email.from_name.label'|trans, 'value': EA.email_address(entity.email.fromEmailAddress, entity.email.fromName)},
    {'title': 'oro.email.to.label'|trans, 'value': EA.recipient_email_addresses(entity.email.recipients('to'))},
    {'title': 'oro.email.emailuser.owner.label'|trans, 'value': UI.entityOwnerLink(entity, false)},
] %}
", "@OroEmail/Email/searchResult.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/searchResult.html.twig");
    }
}
