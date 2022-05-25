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

/* @OroIntegration/Form/fields.html.twig */
class __TwigTemplate_1ab1652097bf91e65425c7cd695b0d95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_integration_channel_form_widget' => [$this, 'block_oro_integration_channel_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroIntegration/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Form/fields.html.twig"));

        // line 6
        $this->displayBlock('oro_integration_channel_form_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_oro_integration_channel_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_integration_channel_form_widget", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_integration_channel_form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_integration_channel_form_widget"));

        // line 7
        echo "
    ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "choices", [], "any", false, false, false, 8))) {
            // line 9
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), 'row', ["attr" => ["disabled" => true]]);
            echo "
    ";
        } else {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11), 'row');
            echo "
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'row');
        echo "

    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", true, true, false, 16)) {
            // line 17
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "organization", [], "any", false, false, false, 17), 'row');
            echo "
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "transportType", [], "any", false, false, false, 20), 'row');
        echo "

    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "transport", [], "any", true, true, false, 22)) {
            // line 23
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "transport", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "control-group-container"]]);
            echo "
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "synchronizationSettings", [], "any", true, true, false, 26) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "synchronizationSettings", [], "any", false, false, false, 26), "rendered", [], "any", false, false, false, 26))) {
            // line 27
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "synchronizationSettings", [], "any", false, false, false, 27), 'widget');
            echo "
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mappingSettings", [], "any", true, true, false, 30) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "mappingSettings", [], "any", false, false, false, 30), "rendered", [], "any", false, false, false, 30))) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "mappingSettings", [], "any", false, false, false, 31), 'widget');
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "connectors", [], "any", true, true, false, 34)) {
            // line 35
            echo "        <div class=\"control-group-container ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "connectors", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "choices", [], "any", false, false, false, 35))) {
                echo "hide";
            }
            echo "\">
            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "connectors", [], "any", false, false, false, 36), 'row');
            echo "
        </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'rest');
        echo "

    ";
        // line 42
        $macros["jsRenderer"] = $this->loadTemplate("@OroIntegration/Form/javascript.html.twig", "@OroIntegration/Form/fields.html.twig", 42)->unwrap();
        // line 43
        echo "    ";
        echo twig_call_macro($macros["jsRenderer"], "macro_renderIntegrationFormJS", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroIntegration/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  169 => 42,  164 => 40,  161 => 39,  155 => 36,  148 => 35,  146 => 34,  143 => 33,  137 => 31,  135 => 30,  132 => 29,  126 => 27,  124 => 26,  121 => 25,  115 => 23,  113 => 22,  108 => 20,  105 => 19,  99 => 17,  97 => 16,  92 => 14,  89 => 13,  83 => 11,  77 => 9,  75 => 8,  72 => 7,  47 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Edit channel form
    Custom renderer needed due to this form should be modified
    dynamically via ajax depends on type and transportType fields value
#}
{% block oro_integration_channel_form_widget %}

    {% if form.type.vars.choices is empty %}
        {{ form_row(form.type, {'attr': {'disabled':true} } ) }}
    {% else %}
        {{ form_row(form.type) }}
    {% endif %}

    {{ form_row(form.name) }}

    {% if (form.organization is defined) %}
        {{ form_row(form.organization) }}
    {% endif %}

    {{ form_row(form.transportType) }}

    {% if (form.transport is defined) %}
        {{ form_widget(form.transport, {'attr': {'class': 'control-group-container'}}) }}
    {% endif %}

    {% if (form.synchronizationSettings is defined and not form.synchronizationSettings.rendered) %}
        {{ form_widget(form.synchronizationSettings) }}
    {% endif %}

    {% if (form.mappingSettings is defined and not form.mappingSettings.rendered) %}
        {{ form_widget(form.mappingSettings) }}
    {% endif %}

    {% if (form.connectors is defined) %}
        <div class=\"control-group-container {% if form.connectors.vars.choices is empty %}{{ 'hide' }}{% endif %}\">
            {{ form_row(form.connectors) }}
        </div>
    {% endif %}

    {{ form_rest(form) }}

    {% import '@OroIntegration/Form/javascript.html.twig' as jsRenderer %}
    {{ jsRenderer.renderIntegrationFormJS(form) }}
{% endblock %}
", "@OroIntegration/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/IntegrationBundle/Resources/views/Form/fields.html.twig");
    }
}
