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

/* @OroMessageQueue/macros.html.twig */
class __TwigTemplate_7e8a1fc392ea1bae3952f2a40cd41fd1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMessageQueue/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMessageQueue/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMessageQueue/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_getJobStatusClass($__job__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "job" => $__job__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getJobStatusClass"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getJobStatusClass"));

            // line 2
            ob_start();
            // line 3
            echo "    ";
            $context["status"] = twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 3, $this->source); })()), "status", [], "any", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 5, $this->source); })()) === constant(get_class((isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 5, $this->source); })()))."::"."STATUS_RUNNING"))) {
                // line 6
                echo "        ";
                $context["class"] = "info";
                // line 7
                echo "    ";
            } elseif (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 7, $this->source); })()) === constant(get_class((isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 7, $this->source); })()))."::"."STATUS_SUCCESS"))) {
                // line 8
                echo "        ";
                $context["class"] = "success";
                // line 9
                echo "    ";
            } elseif (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 9, $this->source); })()) === constant(get_class((isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 9, $this->source); })()))."::"."STATUS_FAILED"))) {
                // line 10
                echo "        ";
                $context["class"] = "warning";
                // line 11
                echo "    ";
            } elseif (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 11, $this->source); })()) === constant(get_class((isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 11, $this->source); })()))."::"."STATUS_FAILED_REDELIVERED"))) {
                // line 12
                echo "        ";
                $context["class"] = "warning";
                // line 13
                echo "    ";
            } elseif (twig_in_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 13, $this->source); })()), [0 => twig_constant("STATUS_CANCELLED", (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 13, $this->source); })())), 1 => twig_constant("STATUS_STALE", (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 13, $this->source); })()))])) {
                // line 14
                echo "        ";
                $context["class"] = "inverse";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["class"] = "";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
";
            $___internal_parse_44_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 2
            echo twig_spaceless($___internal_parse_44_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroMessageQueue/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 2,  125 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  107 => 13,  104 => 12,  101 => 11,  98 => 10,  95 => 9,  92 => 8,  89 => 7,  86 => 6,  84 => 5,  81 => 4,  78 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro getJobStatusClass(job) %}
{% apply spaceless %}
    {% set status = job.status %}

    {% if status is constant('STATUS_RUNNING', job) %}
        {% set class = 'info' %}
    {% elseif status is constant('STATUS_SUCCESS', job) %}
        {% set class = 'success' %}
    {% elseif status is constant('STATUS_FAILED', job) %}
        {% set class = 'warning' %}
    {% elseif status is constant('STATUS_FAILED_REDELIVERED', job) %}
        {% set class = 'warning' %}
    {% elseif status in [constant('STATUS_CANCELLED', job), constant('STATUS_STALE', job)] %}
        {% set class = 'inverse' %}
    {% else %}
        {% set class = '' %}
    {% endif %}

    {{ class }}
{% endapply %}
{% endmacro %}
", "@OroMessageQueue/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/MessageQueueBundle/Resources/views/macros.html.twig");
    }
}
