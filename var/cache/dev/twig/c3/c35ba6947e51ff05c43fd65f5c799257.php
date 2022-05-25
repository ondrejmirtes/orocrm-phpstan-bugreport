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

/* @OroEntityConfig/Attribute/attributeCollapsibleView.html.twig */
class __TwigTemplate_c81a96fd4597e2579c6d6ef938035bb9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig"));

        // line 1
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig", 1)->unwrap();
        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["dynamicField"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\DynamicFieldsExtensionAttributeDecorator']->getField((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()));
        // line 5
        if ((isset($context["dynamicField"]) || array_key_exists("dynamicField", $context) ? $context["dynamicField"] : (function () { throw new RuntimeError('Variable "dynamicField" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    ";
            echo twig_call_macro($macros["entityConfig"], "macro_formatDynamicFieldValue", [            // line 7
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "entity", [], "any", false, false, false, 8), "className", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "fieldName", [], "any", false, false, false, 9),             // line 10
(isset($context["dynamicField"]) || array_key_exists("dynamicField", $context) ? $context["dynamicField"] : (function () { throw new RuntimeError('Variable "dynamicField" does not exist.', 10, $this->source); })())], 6, $context, $this->getSourceContext());
            // line 11
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  62 => 10,  61 => 9,  60 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroUI/macros.html.twig' as UI %}

{% set dynamicField = oro_get_dynamic_field(entity, field) %}
{% if dynamicField %}
    {{ entityConfig.formatDynamicFieldValue(
        entity,
        field.entity.className,
        field.fieldName,
        dynamicField
    ) }}
{% endif %}
", "@OroEntityConfig/Attribute/attributeCollapsibleView.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Attribute/attributeCollapsibleView.html.twig");
    }
}
