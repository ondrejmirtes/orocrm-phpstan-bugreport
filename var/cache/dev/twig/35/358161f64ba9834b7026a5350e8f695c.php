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

/* @OroEntityMerge/Form/mergeValue.html.twig */
class __TwigTemplate_322856c44c5fa9d2352e236870013b84 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityMerge/Form/mergeValue.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityMerge/Form/mergeValue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityMerge/Form/mergeValue.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 10
        ob_start();
        // line 11
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        $context["escapeStrategy"] = ((twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 14, $this->source); })()), "has", [0 => "autoescape"], "method", false, false, false, 14)) ? (twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 14, $this->source); })()), "get", [0 => "autoescape"], "method", false, false, false, 14)) : (true));
        // line 15
        echo "
";
        // line 16
        if (twig_length_filter($this->env, (isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    ";
            if ((isset($context["isListValue"]) || array_key_exists("isListValue", $context) ? $context["isListValue"] : (function () { throw new RuntimeError('Variable "isListValue" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "    ";
                $context["hasVisibleValues"] = false;
                // line 19
                echo "    <ul>
        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 21
                    echo "            ";
                    if (twig_length_filter($this->env, $context["value"])) {
                        // line 22
                        echo "                ";
                        $context["hasVisibleValues"] = true;
                        // line 23
                        echo "                <li>
                    ";
                        // line 24
                        echo twig_call_macro($macros["macros"], "macro_escape", [$context["value"], (isset($context["escapeStrategy"]) || array_key_exists("escapeStrategy", $context) ? $context["escapeStrategy"] : (function () { throw new RuntimeError('Variable "escapeStrategy" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
                        echo "
                </li>
            ";
                    }
                    // line 27
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
        ";
                // line 29
                if ( !(isset($context["hasVisibleValues"]) || array_key_exists("hasVisibleValues", $context) ? $context["hasVisibleValues"] : (function () { throw new RuntimeError('Variable "hasVisibleValues" does not exist.', 29, $this->source); })())) {
                    // line 30
                    echo "            <li>";
                    echo twig_escape_filter($this->env, (isset($context["empty_cell"]) || array_key_exists("empty_cell", $context) ? $context["empty_cell"] : (function () { throw new RuntimeError('Variable "empty_cell" does not exist.', 30, $this->source); })()), "html", null, true);
                    echo "</li>
        ";
                }
                // line 32
                echo "    </ul>
    ";
            } else {
                // line 34
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_escape", [(isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 34, $this->source); })()), (isset($context["escapeStrategy"]) || array_key_exists("escapeStrategy", $context) ? $context["escapeStrategy"] : (function () { throw new RuntimeError('Variable "escapeStrategy" does not exist.', 34, $this->source); })())], 34, $context, $this->getSourceContext());
                echo "
    ";
            }
        } else {
            // line 37
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["empty_cell"]) || array_key_exists("empty_cell", $context) ? $context["empty_cell"] : (function () { throw new RuntimeError('Variable "empty_cell" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "
";
        }
        // line 39
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function macro_escape($__value__ = null, $__escapeStrategy__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "escapeStrategy" => $__escapeStrategy__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "escape"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "escape"));

            // line 41
            echo "    ";
            if ((isset($context["escapeStrategy"]) || array_key_exists("escapeStrategy", $context) ? $context["escapeStrategy"] : (function () { throw new RuntimeError('Variable "escapeStrategy" does not exist.', 41, $this->source); })())) {
                // line 42
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 42, $this->source); })()), (isset($context["escapeStrategy"]) || array_key_exists("escapeStrategy", $context) ? $context["escapeStrategy"] : (function () { throw new RuntimeError('Variable "escapeStrategy" does not exist.', 42, $this->source); })()));
                echo "
    ";
            } else {
                // line 44
                echo "        ";
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroEntityMerge/Form/mergeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 44,  165 => 42,  162 => 41,  142 => 40,  128 => 39,  122 => 37,  115 => 34,  111 => 32,  105 => 30,  103 => 29,  100 => 28,  94 => 27,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  64 => 16,  61 => 15,  59 => 14,  56 => 13,  50 => 11,  48 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as macros %}
{#
    Available variables:

    Metadata metadata     - metadata of merge
    mixed convertedValue  - value converted to string
    mixed value           - original value
    boolean isListValue   - is value represents list
#}
{% set empty_cell %}
    <span class=\"empty\">-- {{ 'oro.entity_merge.form.empty'|trans }} --</span>
{% endset %}

{% set escapeStrategy = metadata.has('autoescape') ? metadata.get('autoescape') : true %}

{% if convertedValue|length %}
    {% if isListValue %}
    {% set hasVisibleValues = false %}
    <ul>
        {% for value in convertedValue %}
            {% if value|length %}
                {% set hasVisibleValues = true %}
                <li>
                    {{ macros.escape(value, escapeStrategy) }}
                </li>
            {% endif %}
        {% endfor %}

        {% if not hasVisibleValues %}
            <li>{{ empty_cell }}</li>
        {% endif %}
    </ul>
    {% else %}
        {{ macros.escape(convertedValue, escapeStrategy) }}
    {% endif %}
{% else %}
    {{ empty_cell }}
{% endif %}

{% macro escape(value, escapeStrategy = true) %}
    {% if escapeStrategy %}
        {{ value|e(escapeStrategy)|raw }}
    {% else %}
        {{ value|raw }}
    {% endif %}
{% endmacro %}
", "@OroEntityMerge/Form/mergeValue.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityMergeBundle/Resources/views/Form/mergeValue.html.twig");
    }
}
