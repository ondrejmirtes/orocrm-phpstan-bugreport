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

/* @OroEntitySerializedFields/Datagrid/Property/serialized.html.twig */
class __TwigTemplate_312a978f1b99fdd8ba92dd7529589d4a extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig"));

        // line 1
        if (((array_key_exists("field_name", $context) && array_key_exists("field_type", $context)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getValue", [0 => (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 1, $this->source); })())], "method", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig", 2)->unwrap();
            // line 3
            echo "
    ";
            // line 4
            echo twig_call_macro($macros["ui"], "macro_formatDynamicFieldValue", [null, null, (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 4, $this->source); })()), ["value" => twig_get_attribute($this->env, $this->source,             // line 5
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "getValue", [0 => (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 5, $this->source); })())], "method", false, false, false, 5), "type" =>             // line 6
(isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 6, $this->source); })())]], 4, $context, $this->getSourceContext());
            // line 7
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  56 => 6,  55 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if field_name is defined and field_type is defined and record.getValue(field_name) is not null%}
    {% import '@OroEntityConfig/macros.html.twig' as ui %}

    {{ ui.formatDynamicFieldValue(null, null, field_name, {
        value: record.getValue(field_name),
        type: field_type
    }) }}
{% endif %}
", "@OroEntitySerializedFields/Datagrid/Property/serialized.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform-serialised-fields/Resources/views/Datagrid/Property/serialized.html.twig");
    }
}
