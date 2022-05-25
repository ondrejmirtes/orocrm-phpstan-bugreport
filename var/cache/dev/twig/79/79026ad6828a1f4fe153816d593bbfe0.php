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

/* @OroAction/Operation/button.html.twig */
class __TwigTemplate_8df25ca2686e5b55a2c461c3b29a79bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'button' => [$this, 'block_button'],
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAction/Operation/button.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Operation/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Operation/button.html.twig"));

        // line 1
        $context["linkTitle"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "frontendOptions", [], "any", false, true, false, 1), "title", [], "any", true, true, false, 1)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 1, $this->source); })()), "frontendOptions", [], "any", false, false, false, 1), "title", [], "any", false, false, false, 1))) : (""));
        // line 2
        $context["linkLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 2, $this->source); })()), "label", [], "any", false, false, false, 2));
        // line 3
        $context["linkAriaLabel"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "frontendOptions", [], "any", false, true, false, 3), "options", [], "any", false, true, false, 3), "ariaLabel", [], "any", true, true, false, 3)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 3, $this->source); })()), "frontendOptions", [], "any", false, false, false, 3), "options", [], "any", false, false, false, 3), "ariaLabel", [], "any", false, false, false, 3))) : (""));
        // line 4
        $context["isAjax"] = false;
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('button', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        // line 7
        echo "    ";
        $context["options"] = $this->extensions['Oro\Bundle\ActionBundle\Twig\OperationExtension']->getFrontendOptions((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 7, $this->source); })()));
        // line 8
        echo "    ";
        $context["buttonOptions"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), "options", [], "any", false, false, false, 8);
        // line 9
        echo "    ";
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 9, $this->source); })()), false)) : (false))) {
            echo "<div class=\"pull-left btn-group icons-holder\">";
        }
        // line 10
        echo "    ";
        $this->displayBlock('link', $context, $blocks);
        // line 40
        echo "    ";
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 40, $this->source); })()), false)) : (false))) {
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 10
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("link", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 11
        echo "        <a ";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", true, true, false, 11)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\"";
        }
        // line 12
        echo "           href=\"#\"
           class=\"icons-holder-text operation-button ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 13), "class", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 13), "class", [], "any", false, false, false, 13), "")) : ("")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("aClass", $context)) ? (_twig_default_filter((isset($context["aClass"]) || array_key_exists("aClass", $context) ? $context["aClass"] : (function () { throw new RuntimeError('Variable "aClass" does not exist.', 13, $this->source); })()), "")) : ("")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 13), "aCss", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 13), "aCss", [], "any", false, false, false, 13), "")) : ("")), "html", null, true);
        echo "\"
           ";
        // line 14
        if ( !twig_test_empty((isset($context["linkTitle"]) || array_key_exists("linkTitle", $context) ? $context["linkTitle"] : (function () { throw new RuntimeError('Variable "linkTitle" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "               title=\"";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) || array_key_exists("linkTitle", $context) ? $context["linkTitle"] : (function () { throw new RuntimeError('Variable "linkTitle" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"
           ";
        }
        // line 17
        echo "           ";
        if ( !twig_test_empty((isset($context["linkAriaLabel"]) || array_key_exists("linkAriaLabel", $context) ? $context["linkAriaLabel"] : (function () { throw new RuntimeError('Variable "linkAriaLabel" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "               aria-label=\"";
            echo twig_escape_filter($this->env, (isset($context["linkAriaLabel"]) || array_key_exists("linkAriaLabel", $context) ? $context["linkAriaLabel"] : (function () { throw new RuntimeError('Variable "linkAriaLabel" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"
           ";
        }
        // line 20
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 21
            echo "               data-";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, ((twig_test_iterable($context["value"])) ? (json_encode($context["value"])) : ($context["value"])), "html", null, true);
            echo "\"
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "           data-operation-url=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["buttonOptions"]) || array_key_exists("buttonOptions", $context) ? $context["buttonOptions"] : (function () { throw new RuntimeError('Variable "buttonOptions" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), "html", null, true);
        echo "\"
           data-options=\"";
        // line 24
        echo twig_escape_filter($this->env, json_encode((isset($context["buttonOptions"]) || array_key_exists("buttonOptions", $context) ? $context["buttonOptions"] : (function () { throw new RuntimeError('Variable "buttonOptions" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "\"
           ";
        // line 26
        echo "           ";
        if (!twig_in_filter("page-component-module", twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "data", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "data", [], "any", false, false, false, 26), [])) : ([]))))) {
            // line 27
            echo "               data-page-component-module=\"oroaction/js/app/components/button-component\"
           ";
        }
        // line 29
        echo "           role=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("linkRole", $context)) ? (_twig_default_filter((isset($context["linkRole"]) || array_key_exists("linkRole", $context) ? $context["linkRole"] : (function () { throw new RuntimeError('Variable "linkRole" does not exist.', 29, $this->source); })()), "button")) : ("button")), "html", null, true);
        echo "\"
           ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 30, $this->source); })()), "buttonContext", [], "any", false, false, false, 30), "enabled", [], "any", false, false, false, 30)) {
            // line 31
            echo "               disabled=\"disabled\"
           ";
        }
        // line 33
        echo "        >
            ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 34), "icon", [], "any", true, true, false, 34) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 34), "iCss", [], "any", true, true, false, 34))) {
            // line 35
            echo "                <span class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 35), "icon", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 35), "icon", [], "any", false, false, false, 35), "")) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 35), "iCss", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "buttonOptions", [], "any", false, true, false, 35), "iCss", [], "any", false, false, false, 35), "")) : ("")), "html", null, true);
            echo " hide-text\" aria-hidden=\"true\"></span>
            ";
        }
        // line 37
        echo "            ";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["linkLabel"]) || array_key_exists("linkLabel", $context) ? $context["linkLabel"] : (function () { throw new RuntimeError('Variable "linkLabel" does not exist.', 37, $this->source); })())), "html", null, true);
        echo "
        </a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroAction/Operation/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 37,  210 => 35,  208 => 34,  205 => 33,  201 => 31,  199 => 30,  194 => 29,  190 => 27,  187 => 26,  183 => 24,  178 => 23,  167 => 21,  162 => 20,  156 => 18,  153 => 17,  147 => 15,  145 => 14,  137 => 13,  134 => 12,  127 => 11,  114 => 10,  98 => 40,  95 => 10,  90 => 9,  87 => 8,  84 => 7,  59 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set linkTitle = params.frontendOptions.title is defined ? params.frontendOptions.title|trans : '' %}
{% set linkLabel = params.label|trans %}
{% set linkAriaLabel = params.frontendOptions.options.ariaLabel is defined ? params.frontendOptions.options.ariaLabel|trans : '' %}
{% set isAjax = false %}

{% block button %}
    {% set options = oro_action_frontend_options(button) %}
    {% set buttonOptions = options.options %}
    {% if not onlyLink|default(false) %}<div class=\"pull-left btn-group icons-holder\">{% endif %}
    {% block link %}
        <a {% if (params.id is defined) %}id=\"{{ params.id }}\"{% endif %}
           href=\"#\"
           class=\"icons-holder-text operation-button {{ params.buttonOptions.class|default('') }} {{ aClass|default('') }} {{ params.buttonOptions.aCss|default('') }}\"
           {% if linkTitle is not empty %}
               title=\"{{ linkTitle }}\"
           {% endif %}
           {% if linkAriaLabel is not empty %}
               aria-label=\"{{ linkAriaLabel }}\"
           {% endif %}
           {% for name,value in options.data %}
               data-{{ name }}=\"{{ value is iterable ? value|json_encode : value}}\"
           {% endfor %}
           data-operation-url=\"{{ buttonOptions.url }}\"
           data-options=\"{{ buttonOptions|json_encode }}\"
           {# Use the default component if the custom one is not defined in options. #}
           {% if 'page-component-module' not in options.data|default({})|keys %}
               data-page-component-module=\"oroaction/js/app/components/button-component\"
           {% endif %}
           role=\"{{ linkRole|default(\"button\") }}\"
           {% if not button.buttonContext.enabled %}
               disabled=\"disabled\"
           {% endif %}
        >
            {% if params.buttonOptions.icon is defined or params.buttonOptions.iCss is defined %}
                <span class=\"{{ params.buttonOptions.icon|default('') }} {{ params.buttonOptions.iCss|default('') }} hide-text\" aria-hidden=\"true\"></span>
            {% endif %}
            {{ linkLabel|trim }}
        </a>
    {% endblock %}
    {% if not onlyLink|default(false) %}</div>{% endif %}
{% endblock %}
", "@OroAction/Operation/button.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActionBundle/Resources/views/Operation/button.html.twig");
    }
}
