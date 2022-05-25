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

/* @OroEmail/Email/Datagrid/Property/date.html.twig */
class __TwigTemplate_270f266e7a22f174df86e158ff2e85f2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Datagrid/Property/date.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/date.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/date.html.twig"));

        // line 1
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Datagrid/Property/date.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["date"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "receivedAt"], "method", false, false, false, 3);
        // line 4
        $context["isNew"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "is_new"], "method", false, false, false, 4);
        // line 5
        echo "
<span class=\"nowrap\">";
        // line 7
        if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 7, $this->source); })())) {
            echo "<strong>";
        }
        // line 8
        echo twig_call_macro($macros["EA"], "macro_date_smart_format", [(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
        // line 9
        if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 9, $this->source); })())) {
            echo "</strong>";
        }
        // line 10
        echo "</span>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Datagrid/Property/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  64 => 9,  62 => 8,  58 => 7,  55 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEmail/macros.html.twig' as EA %}

{% set date = record.getValue('receivedAt') %}
{% set isNew = record.getValue('is_new') %}

<span class=\"nowrap\">
    {%- if isNew %}<strong>{% endif -%}
    {{ EA.date_smart_format(date) }}
    {%- if isNew %}</strong>{% endif -%}
</span>
", "@OroEmail/Email/Datagrid/Property/date.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Datagrid/Property/date.html.twig");
    }
}
