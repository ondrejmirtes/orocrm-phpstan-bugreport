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

/* @OroEntityConfig/Audit/data.html.twig */
class __TwigTemplate_71c3811f45e5565a2d4433611a3797f5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Audit/data.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Audit/data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Audit/data.html.twig"));

        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 3
            echo "    ";
            $context["items"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config_manager"]) || array_key_exists("config_manager", $context) ? $context["config_manager"] : (function () { throw new RuntimeError('Variable "config_manager" does not exist.', 3, $this->source); })()), "getProvider", [0 => twig_get_attribute($this->env, $this->source, $context["val"], "scope", [], "any", false, false, false, 3)], "method", false, false, false, 3), "getPropertyConfig", [], "method", false, false, false, 3), "getItems", [0 => (((isset($context["is_entity"]) || array_key_exists("is_entity", $context) ? $context["is_entity"] : (function () { throw new RuntimeError('Variable "is_entity" does not exist.', 3, $this->source); })())) ? ("entity") : ("type"))], "method", false, false, false, 3);
            // line 4
            echo "    ";
            $context["translatable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config_manager"]) || array_key_exists("config_manager", $context) ? $context["config_manager"] : (function () { throw new RuntimeError('Variable "config_manager" does not exist.', 4, $this->source); })()), "getProvider", [0 => twig_get_attribute($this->env, $this->source, $context["val"], "scope", [], "any", false, false, false, 4)], "method", false, false, false, 4), "getPropertyConfig", [], "method", false, false, false, 4), "getTranslatableValues", [0 => (((isset($context["is_entity"]) || array_key_exists("is_entity", $context) ? $context["is_entity"] : (function () { throw new RuntimeError('Variable "is_entity" does not exist.', 4, $this->source); })())) ? ("entity") : ("field"))], "method", false, false, false, 4);
            // line 5
            echo "
    ";
            // line 6
            if ((((isset($context["is_entity"]) || array_key_exists("is_entity", $context) ? $context["is_entity"] : (function () { throw new RuntimeError('Variable "is_entity" does not exist.', 6, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["val"], "fieldName", [], "method", false, false, false, 6) == null)) || (((isset($context["is_entity"]) || array_key_exists("is_entity", $context) ? $context["is_entity"] : (function () { throw new RuntimeError('Variable "is_entity" does not exist.', 6, $this->source); })()) == false) && (twig_get_attribute($this->env, $this->source, $context["val"], "fieldName", [], "method", false, false, false, 6) == (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 6, $this->source); })()))))) {
                // line 7
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["val"], "diff", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                    // line 8
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, true, false, 8), "form", [], "array", false, true, false, 8), "options", [], "array", false, true, false, 8), "label", [], "array", true, true, false, 8)) {
                        // line 9
                        echo "                ";
                        $context["label"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()), $context["key"], [], "array", false, false, false, 9), "form", [], "array", false, false, false, 9), "options", [], "array", false, false, false, 9), "label", [], "array", false, false, false, 9);
                        // line 10
                        echo "            ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, true, false, 10), "options", [], "array", false, true, false, 10), "label", [], "array", true, true, false, 10)) {
                        // line 11
                        echo "                ";
                        $context["label"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })()), $context["key"], [], "array", false, false, false, 11), "options", [], "array", false, false, false, 11), "label", [], "array", false, false, false, 11);
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["label"] = twig_replace_filter(twig_capitalize_string_filter($this->env, $context["key"]), ["_" => " "]);
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "
            ";
                    // line 16
                    if (!twig_in_filter((".entity_" . $context["key"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 16)))) {
                        // line 17
                        echo "            <li>
                ";
                        // line 18
                        $context["new"] = ((twig_in_filter($context["key"], (isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new RuntimeError('Variable "translatable" does not exist.', 18, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 18)));
                        // line 19
                        echo "                <b>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })())), "html", null, true);
                        echo "</b>: ";
                        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->renderValue((isset($context["new"]) || array_key_exists("new", $context) ? $context["new"] : (function () { throw new RuntimeError('Variable "new" does not exist.', 19, $this->source); })())), "html", null, true);
                        echo "
            </li>
            ";
                    }
                    // line 22
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Audit/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  115 => 23,  109 => 22,  100 => 19,  98 => 18,  95 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  72 => 9,  69 => 8,  64 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
{% for val in value %}
    {% set items = config_manager.getProvider(val.scope).getPropertyConfig().getItems(is_entity ? 'entity' : 'type') %}
    {% set translatable = config_manager.getProvider(val.scope).getPropertyConfig().getTranslatableValues(is_entity ? 'entity' : 'field') %}

    {% if (is_entity and val.fieldName() == null) or (is_entity == false and val.fieldName() == field_name) %}
        {% for key, data in val.diff %}
            {% if items[key]['form']['options']['label'] is defined %}
                {% set label = items[key]['form']['options']['label'] %}
            {% elseif items[key]['options']['label'] is defined %}
                {% set label = items[key]['options']['label'] %}
            {% else %}
                {% set label = key|capitalize|replace({'_':' '}) %}
            {% endif %}

            {% if ('.entity_'~key not in data[1]|trans) %}
            <li>
                {% set new = key in translatable ? data[1]|trans : data[1] %}
                <b>{{ label|trans }}</b>: {{ new|render_oro_entity_config_value }}
            </li>
            {% endif %}
        {% endfor %}
    {% endif %}
{% endfor %}
</ul>
", "@OroEntityConfig/Audit/data.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Audit/data.html.twig");
    }
}
