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

/* @OroChart/macros.html.twig */
class __TwigTemplate_c04697b6bf29f3b90ce39045b8a4b0a1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChart/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChart/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChart/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function macro_renderChart($__data__ = null, $__options__ = null, $__config__ = null, $__isMobileVersion__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "options" => $__options__,
            "config" => $__config__,
            "isMobileVersion" => $__isMobileVersion__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChart"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChart"));

            // line 11
            echo "    ";
            $context["name"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), ["_chart" => ""]);
            // line 12
            echo "    ";
            $context["params"] = ["ratio" => ((            // line 13
(isset($context["isMobileVersion"]) || array_key_exists("isMobileVersion", $context) ? $context["isMobileVersion"] : (function () { throw new RuntimeError('Variable "isMobileVersion" does not exist.', 13, $this->source); })())) ? ("0.8") : ("0.35")), "data" =>             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "options" =>             // line 15
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "config" =>             // line 16
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "date" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
($context["options"] ?? null), "settings", [], "any", false, true, false, 17), "quarterDate", [], "any", true, true, false, 17)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 17, $this->source); })()), "settings", [], "any", false, false, false, 17), "quarterDate", [], "any", false, false, false, 17), ["timeZone" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()])) : (""))];
            // line 19
            echo "

    <div data-page-component-module=\"orochart/js/app/components/";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "-chart-component\"
         data-page-component-options=\"";
            // line 22
            echo twig_escape_filter($this->env, json_encode((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 22, $this->source); })())), "html", null, true);
            echo "\"></div>
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
        return "@OroChart/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 21,  90 => 19,  88 => 17,  87 => 16,  86 => 15,  85 => 14,  84 => 13,  82 => 12,  79 => 11,  57 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Renders chart

    parameters:
        name: chart name
        options: options for chart
        config: config for chart
        isMobileVersion: render for mobile
#}
{% macro renderChart(data, options, config, isMobileVersion) %}
    {% set name = options.name|replace({'_chart': ''}) %}
    {% set params = {
        ratio: isMobileVersion ? '0.8' : '0.35',
        data: data,
        options: options,
        config: config,
        date: (options.settings.quarterDate is defined) ? options.settings.quarterDate|oro_format_date({timeZone: oro_timezone()}) : ''
    } %}


    <div data-page-component-module=\"orochart/js/app/components/{{ name }}-chart-component\"
         data-page-component-options=\"{{ params|json_encode }}\"></div>
{% endmacro %}
", "@OroChart/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ChartBundle/Resources/views/macros.html.twig");
    }
}
