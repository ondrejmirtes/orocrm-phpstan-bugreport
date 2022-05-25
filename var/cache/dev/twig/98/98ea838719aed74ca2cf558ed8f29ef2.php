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

/* @OroHangoutsCall/macros.html.twig */
class __TwigTemplate_5716b9e01aeef95998e45c233b7cb27c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function macro_renderStartButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderStartButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderStartButton"));

            // line 14
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroHangoutsCall/macros.html.twig", 14)->unwrap();
            // line 15
            echo "    ";
            $context["pageComponent"] = ["module" => ((twig_get_attribute($this->env, $this->source,             // line 16
($context["parameters"] ?? null), "componentModule", [], "any", true, true, false, 16)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 16, $this->source); })()), "componentModule", [], "any", false, false, false, 16)) : ("oroui/js/app/components/view-component")), "options" => ["view" => "orohangoutscall/js/app/views/start-button-view", "autoRender" => true, "hangoutOptions" => ((twig_get_attribute($this->env, $this->source,             // line 20
($context["parameters"] ?? null), "hangoutOptions", [], "any", true, true, false, 20)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 20, $this->source); })()), "hangoutOptions", [], "any", false, false, false, 20)) : ([]))]];
            // line 23
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "componentName", [], "any", true, true, false, 23)) {
                // line 24
                echo "        ";
                $context["pageComponent"] = twig_array_merge((isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 24, $this->source); })()), ["name" => twig_get_attribute($this->env, $this->source,                 // line 25
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 25, $this->source); })()), "componentName", [], "any", false, false, false, 25)]);
                // line 27
                echo "    ";
            }
            // line 28
            echo "    <div class=\"start-hangout-button-placeholder";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", true, true, false, 28)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), "class", [], "any", false, false, false, 28), "html", null, true);
            }
            echo "\"
            ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataAttributes", [], "any", true, true, false, 29) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 29, $this->source); })()), "dataAttributes", [], "any", false, false, false, 29)))) {
                // line 30
                echo "                ";
                echo twig_call_macro($macros["UI"], "macro_renderAttributes", [twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 30, $this->source); })()), "dataAttributes", [], "any", false, false, false, 30)], 30, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 32
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 32, $this->source); })())], 32, $context, $this->getSourceContext());
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
        return "@OroHangoutsCall/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  104 => 30,  102 => 29,  94 => 28,  91 => 27,  89 => 25,  87 => 24,  84 => 23,  82 => 20,  81 => 16,  79 => 15,  76 => 14,  57 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Render \"Start a Hangout\" button

    Parameters - array:
        [
            'class'           - default class
            'componentModule' - page-component module name that initializes StartButtonView (by default it is 'oroui/js/app/components/view-component')
            'componentName'   - page-component name, alias for a component instance (by default is undefied)
            'hangoutOptions'  - options for Start a Hangout button
            'dataAttributes'  - additional data attributes
        ]
#}
{% macro renderStartButton(parameters) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set pageComponent = {
        module: parameters.componentModule is defined ? parameters.componentModule : 'oroui/js/app/components/view-component',
        options: {
            view: 'orohangoutscall/js/app/views/start-button-view',
            autoRender: true,
            hangoutOptions: parameters.hangoutOptions is defined ? parameters.hangoutOptions : {}
        }
    } %}
    {% if parameters.componentName is defined %}
        {% set pageComponent = pageComponent|merge({
            name: parameters.componentName
        }) %}
    {% endif %}
    <div class=\"start-hangout-button-placeholder{% if parameters.class is defined %} {{ parameters.class }}{% endif %}\"
            {% if parameters.dataAttributes is defined and parameters.dataAttributes|length %}
                {{ UI.renderAttributes(parameters.dataAttributes) }}
            {% endif %}
            {{ UI.renderPageComponentAttributes(pageComponent) }}></div>
{% endmacro %}
", "@OroHangoutsCall/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/macros.html.twig");
    }
}
