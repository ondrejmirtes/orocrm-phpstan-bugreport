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

/* @OroEntity/Datagrid/Property/entityFallbackValue.html.twig */
class __TwigTemplate_21bb4c62d8e4efc953120ca0a457cd08 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntity/Datagrid/Property/entityFallbackValue.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Datagrid/Property/entityFallbackValue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Datagrid/Property/entityFallbackValue.html.twig"));

        // line 1
        $context["entity"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityReference((isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getValue", [0 => "id"], "method", false, false, false, 1));
        // line 2
        $context["fallbackType"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getFallbackType((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 2, $this->source); })()));
        // line 3
        $context["fallbackValue"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getFallbackValue((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 3, $this->source); })()));
        // line 4
        echo "
";
        // line 5
        if (((isset($context["fallbackType"]) || array_key_exists("fallbackType", $context) ? $context["fallbackType"] : (function () { throw new RuntimeError('Variable "fallbackType" does not exist.', 5, $this->source); })()) == "boolean")) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (((isset($context["fallbackValue"]) || array_key_exists("fallbackValue", $context) ? $context["fallbackValue"] : (function () { throw new RuntimeError('Variable "fallbackValue" does not exist.', 6, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"))), "html", null, true);
            echo "
";
        } elseif ((        // line 7
(isset($context["fallbackType"]) || array_key_exists("fallbackType", $context) ? $context["fallbackType"] : (function () { throw new RuntimeError('Variable "fallbackType" does not exist.', 7, $this->source); })()) == "array")) {
            // line 8
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntity/Datagrid/Property/entityFallbackValue.html.twig", 8)->unwrap();
            // line 9
            echo "    ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [(isset($context["fallbackValue"]) || array_key_exists("fallbackValue", $context) ? $context["fallbackValue"] : (function () { throw new RuntimeError('Variable "fallbackValue" does not exist.', 9, $this->source); })())], 9, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, ((array_key_exists("fallbackValue", $context)) ? (_twig_default_filter((isset($context["fallbackValue"]) || array_key_exists("fallbackValue", $context) ? $context["fallbackValue"] : (function () { throw new RuntimeError('Variable "fallbackValue" does not exist.', 11, $this->source); })()), "")) : ("")), "html", null, true);
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntity/Datagrid/Property/entityFallbackValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  55 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set entity = oro_entity_reference(entityClassName, record.getValue('id')) %}
{% set fallbackType = oro_entity_fallback_type(entity, fieldName) %}
{% set fallbackValue = oro_entity_fallback_value(entity, fieldName) %}

{% if fallbackType == 'boolean' %}
    {{ fallbackValue ? 'Yes'|trans : 'No'|trans }}
{% elseif fallbackType == 'array' %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {{ UI.renderList(fallbackValue) }}
{% else %}
    {{ fallbackValue|default('') }}
{% endif %}
", "@OroEntity/Datagrid/Property/entityFallbackValue.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Datagrid/Property/entityFallbackValue.html.twig");
    }
}
