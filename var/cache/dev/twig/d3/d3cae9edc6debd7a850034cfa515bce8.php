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

/* @OroDashboard/macros.html.twig */
class __TwigTemplate_7433394b7972fb84d789d0a9409832c7 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderDateWidgeView($__form__ = null, $__valueType__ = null, $__className__ = null, $__viewType__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "valueType" => $__valueType__,
            "className" => $__className__,
            "viewType" => $__viewType__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDateWidgeView"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDateWidgeView"));

            // line 2
            echo "    <div class=\"datetime-range-filter filter-criteria ";
            echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "-range-filter-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
        <!-- datetime range filter placeholder -->
        <input type=\"hidden\" name=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "full_name", [], "any", false, false, false, 4), "html", null, true);
            echo "[part]\" value=\"value\"/>
    </div>

    ";
            // line 7
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/macros.html.twig", 7)->unwrap();
            // line 8
            echo "
    ";
            // line 9
            $context["options"] = ["_sourceElement" => "div.widget-configuration", "metadata" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "datetime_range_metadata", [], "any", false, false, false, 11), "formName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "formFullName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "full_name", [], "any", false, false, false, 13), "valueType" =>             // line 14
(isset($context["valueType"]) || array_key_exists("valueType", $context) ? $context["valueType"] : (function () { throw new RuntimeError('Variable "valueType" does not exist.', 14, $this->source); })())];
            // line 16
            echo "
    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17) != null)) {
                // line 18
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()), ["valueConfig" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 19
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)]);
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    <div ";
            // line 23
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" =>             // line 24
(isset($context["viewType"]) || array_key_exists("viewType", $context) ? $context["viewType"] : (function () { throw new RuntimeError('Variable "viewType" does not exist.', 24, $this->source); })()), "options" =>             // line 25
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 25, $this->source); })())]], 23, $context, $this->getSourceContext());
            // line 26
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
        return "@OroDashboard/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  121 => 25,  120 => 24,  119 => 23,  116 => 22,  113 => 21,  111 => 19,  109 => 18,  107 => 17,  104 => 16,  102 => 14,  101 => 13,  100 => 12,  99 => 11,  98 => 9,  95 => 8,  93 => 7,  87 => 4,  79 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderDateWidgeView(form, valueType, className, viewType) %}
    <div class=\"datetime-range-filter filter-criteria {{ className }}-range-filter-{{ form.vars.name }}\">
        <!-- datetime range filter placeholder -->
        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[part]\" value=\"value\"/>
    </div>

    {% import '@OroUI/macros.html.twig' as UI %}

    {% set options = {
        _sourceElement: 'div.widget-configuration',
        metadata: form.vars.datetime_range_metadata,
        formName: form.vars.name,
        formFullName: form.vars.full_name,
        valueType: valueType,
    } %}

    {% if form.vars.value.value != null %}
        {% set options = options|merge({
            valueConfig: form.vars.value.value
        }) %}
    {% endif %}

    <div {{ UI.renderPageComponentAttributes({
        view: viewType,
        options: options
    }) }}></div>
{% endmacro %}
", "@OroDashboard/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/macros.html.twig");
    }
}
