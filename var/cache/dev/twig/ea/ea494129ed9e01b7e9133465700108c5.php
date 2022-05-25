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

/* @OroIntegration/Form/javascript.html.twig */
class __TwigTemplate_d0c3e18dc0d6bb546357284e932153df extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroIntegration/Form/javascript.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Form/javascript.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Form/javascript.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function macro_renderIntegrationFormJS($__form__ = null, $__formSelector__ = null, $__csrfTokenFieldFillName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "formSelector" => $__formSelector__,
            "csrfTokenFieldFillName" => $__csrfTokenFieldFillName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderIntegrationFormJS"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderIntegrationFormJS"));

            // line 9
            echo "    ";
            $context["fieldsToSendOnTypeChange"] = [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "full_name", [], "any", false, false, false, 10), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "full_name", [], "any", false, false, false, 11)];
            // line 13
            echo "    ";
            if ((array_key_exists("csrfTokenFieldFillName", $context) && (isset($context["csrfTokenFieldFillName"]) || array_key_exists("csrfTokenFieldFillName", $context) ? $context["csrfTokenFieldFillName"] : (function () { throw new RuntimeError('Variable "csrfTokenFieldFillName" does not exist.', 13, $this->source); })()))) {
                // line 14
                echo "        ";
                $context["fieldsToSendOnTypeChange"] = twig_array_merge((isset($context["fieldsToSendOnTypeChange"]) || array_key_exists("fieldsToSendOnTypeChange", $context) ? $context["fieldsToSendOnTypeChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnTypeChange" does not exist.', 14, $this->source); })()), [0 => (isset($context["csrfTokenFieldFillName"]) || array_key_exists("csrfTokenFieldFillName", $context) ? $context["csrfTokenFieldFillName"] : (function () { throw new RuntimeError('Variable "csrfTokenFieldFillName" does not exist.', 14, $this->source); })())]);
                // line 15
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "_token", [], "any", false, false, false, 15))) {
                // line 16
                echo "        ";
                $context["fieldsToSendOnTypeChange"] = twig_array_merge((isset($context["fieldsToSendOnTypeChange"]) || array_key_exists("fieldsToSendOnTypeChange", $context) ? $context["fieldsToSendOnTypeChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnTypeChange" does not exist.', 16, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "_token", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "full_name", [], "any", false, false, false, 16)]);
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            $context["fieldsToSendOnTransportTypeChange"] = twig_array_merge((isset($context["fieldsToSendOnTypeChange"]) || array_key_exists("fieldsToSendOnTypeChange", $context) ? $context["fieldsToSendOnTypeChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnTypeChange" does not exist.', 19, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "transportType", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "full_name", [], "any", false, false, false, 19)]);
            // line 20
            echo "
    ";
            // line 21
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroIntegration/Form/javascript.html.twig", 21)->unwrap();
            // line 22
            echo "
    <div ";
            // line 23
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orointegration/js/channel-view", "options" => ["formSelector" => ("#" . ((            // line 26
array_key_exists("formSelector", $context)) ? (_twig_default_filter((isset($context["formSelector"]) || array_key_exists("formSelector", $context) ? $context["formSelector"] : (function () { throw new RuntimeError('Variable "formSelector" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)))), "typeSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)), "transportTypeSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "transportType", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)), "fieldsSets" => ["type" =>             // line 30
(isset($context["fieldsToSendOnTypeChange"]) || array_key_exists("fieldsToSendOnTypeChange", $context) ? $context["fieldsToSendOnTypeChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnTypeChange" does not exist.', 30, $this->source); })()), "transportType" =>             // line 31
(isset($context["fieldsToSendOnTransportTypeChange"]) || array_key_exists("fieldsToSendOnTransportTypeChange", $context) ? $context["fieldsToSendOnTransportTypeChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnTransportTypeChange" does not exist.', 31, $this->source); })())]]]], 23, $context, $this->getSourceContext());
            // line 34
            echo "></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroIntegration/Form/javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  116 => 31,  115 => 30,  114 => 28,  113 => 27,  112 => 26,  111 => 23,  108 => 22,  106 => 21,  103 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  81 => 11,  80 => 10,  78 => 9,  57 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Renders javascript for integration form
    params:
        form - Symfony\\Component\\Form\\FormView object
        formSelector - jQuery selector of main form needed in order to replace form during ajax reload
        csrfTokenSelector - Field full name of CSRF token needed to send if form is secured
#}
{% macro renderIntegrationFormJS(form, formSelector, csrfTokenFieldFillName) %}
    {% set fieldsToSendOnTypeChange = [
        form.type.vars.full_name,
        form.name.vars.full_name
    ] %}
    {% if csrfTokenFieldFillName is defined and csrfTokenFieldFillName %}
        {% set fieldsToSendOnTypeChange = fieldsToSendOnTypeChange|merge([csrfTokenFieldFillName]) %}
    {% elseif form._token is defined and form._token %}
        {% set fieldsToSendOnTypeChange = fieldsToSendOnTypeChange|merge([form._token.vars.full_name]) %}
    {% endif %}

    {% set fieldsToSendOnTransportTypeChange = fieldsToSendOnTypeChange|merge([form.transportType.vars.full_name]) %}

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        view: 'orointegration/js/channel-view',
        options: {
            formSelector: '#' ~ formSelector|default(form.vars.id),
            typeSelector: '#' ~ form.type.vars.id,
            transportTypeSelector: '#' ~ form.transportType.vars.id,
            fieldsSets: {
                type: fieldsToSendOnTypeChange,
                transportType: fieldsToSendOnTransportTypeChange
            }
        }
    }) }}></div>
{% endmacro %}
", "@OroIntegration/Form/javascript.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/IntegrationBundle/Resources/views/Form/javascript.html.twig");
    }
}
