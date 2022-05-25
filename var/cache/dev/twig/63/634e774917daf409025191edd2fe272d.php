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

/* @OroIntegration/Integration/Datagrid/type.html.twig */
class __TwigTemplate_c6ae8a86546005aa01e35fa04ed8b4d5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroIntegration/Integration/Datagrid/type.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Integration/Datagrid/type.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Integration/Datagrid/type.html.twig"));

        // line 1
        $context["types"] = twig_get_attribute($this->env, $this->source, (isset($context["registry"]) || array_key_exists("registry", $context) ? $context["registry"] : (function () { throw new RuntimeError('Variable "registry" does not exist.', 1, $this->source); })()), "getRegisteredChannelTypes", [], "method", false, false, false, 1);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["choiceLabel"] => $context["choiceValue"]) {
            // line 3
            echo "    ";
            if (($context["choiceValue"] == (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), [], "array", true, true, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["types"] ?? null), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), [], "array", false, true, false, 4), "icon", [], "any", true, true, false, 4))) {
                    // line 5
                    echo "            <span class=\"integration-icon\" style=\"background: url(";
                    echo twig_escape_filter($this->env, json_encode($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 5, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), "icon", [], "any", false, false, false, 5))), "html", null, true);
                    echo ") 0 0 no-repeat\" ></span>
        ";
                }
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"]), "html", null, true);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choiceLabel'], $context['choiceValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroIntegration/Integration/Datagrid/type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  58 => 5,  55 => 4,  52 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set types = registry.getRegisteredChannelTypes() %}
{% for choiceLabel, choiceValue in choices %}
    {% if choiceValue == value %}
        {% if types[value] is defined and types[value].icon is defined %}
            <span class=\"integration-icon\" style=\"background: url({{ asset(types[value].icon)|json_encode }}) 0 0 no-repeat\" ></span>
        {% endif %}
        {{ choiceLabel|trans }}
    {% endif %}
{% endfor %}
", "@OroIntegration/Integration/Datagrid/type.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/IntegrationBundle/Resources/views/Integration/Datagrid/type.html.twig");
    }
}
