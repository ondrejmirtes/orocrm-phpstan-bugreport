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

/* @OroEmail/Email/Datagrid/Property/from.html.twig */
class __TwigTemplate_f56516210f8f625e2c1fa9ef877a8dea extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Datagrid/Property/from.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/from.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/from.html.twig"));

        // line 1
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Datagrid/Property/from.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["isNew"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "is_new"], "method", false, false, false, 3);
        // line 4
        $context["fromEmailAddressOwnerClass"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "fromEmailAddressOwnerClass"], "method", false, false, false, 4);
        // line 5
        $context["fromEmailAddressOwnerId"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "getValue", [0 => "fromEmailAddressOwnerId"], "method", false, false, false, 5);
        // line 6
        echo "
";
        // line 7
        if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 7, $this->source); })())) {
            echo "<strong>";
        }
        // line 8
        if ((isset($context["fromEmailAddressOwnerId"]) || array_key_exists("fromEmailAddressOwnerId", $context) ? $context["fromEmailAddressOwnerId"] : (function () { throw new RuntimeError('Variable "fromEmailAddressOwnerId" does not exist.', 8, $this->source); })())) {
            // line 9
            echo twig_call_macro($macros["EA"], "macro_renderEmailAddressLink", [(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 9, $this->source); })()), (isset($context["fromEmailAddressOwnerClass"]) || array_key_exists("fromEmailAddressOwnerClass", $context) ? $context["fromEmailAddressOwnerClass"] : (function () { throw new RuntimeError('Variable "fromEmailAddressOwnerClass" does not exist.', 9, $this->source); })()), (isset($context["fromEmailAddressOwnerId"]) || array_key_exists("fromEmailAddressOwnerId", $context) ? $context["fromEmailAddressOwnerId"] : (function () { throw new RuntimeError('Variable "fromEmailAddressOwnerId" does not exist.', 9, $this->source); })())], 9, $context, $this->getSourceContext());
        } else {
            // line 11
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 11, $this->source); })()), "html", null, true);
        }
        // line 13
        if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 13, $this->source); })())) {
            echo "</strong>";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Datagrid/Property/from.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  69 => 11,  66 => 9,  64 => 8,  60 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEmail/macros.html.twig' as EA %}

{% set isNew = record.getValue('is_new') %}
{% set fromEmailAddressOwnerClass = record.getValue('fromEmailAddressOwnerClass') %}
{% set fromEmailAddressOwnerId = record.getValue('fromEmailAddressOwnerId') %}

{% if isNew %}<strong>{% endif %}
{%- if fromEmailAddressOwnerId -%}
    {{ EA.renderEmailAddressLink(value, fromEmailAddressOwnerClass, fromEmailAddressOwnerId) }}
{%- else -%}
    {{ value }}
{%- endif -%}
{% if isNew %}</strong>{% endif %}
", "@OroEmail/Email/Datagrid/Property/from.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Datagrid/Property/from.html.twig");
    }
}
