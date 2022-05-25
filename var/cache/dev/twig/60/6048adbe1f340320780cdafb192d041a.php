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

/* @OroUI/tab_panel.html.twig */
class __TwigTemplate_d45c2ff7d53c5939654e175b4006ebd6 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/tab_panel.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/tab_panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/tab_panel.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/tab_panel.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["options"] = twig_array_merge(["useDropdown" => true, "verticalTabs" => false, "subtitle" => false, "subTabs" => false], ((        // line 8
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), [])) : ([])));
        // line 9
        echo "
";
        // line 10
        $context["containerAlias"] = "tab";
        // line 11
        $context["activeTabAlias"] = null;
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 13
            echo "    ";
            $context["containerAlias"] = (((isset($context["containerAlias"]) || array_key_exists("containerAlias", $context) ? $context["containerAlias"] : (function () { throw new RuntimeError('Variable "containerAlias" does not exist.', 13, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 13));
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "activeTabAlias", [], "any", true, true, false, 14) && (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), "activeTabAlias", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 14)))) {
                // line 15
                echo "        ";
                $context["activeTabAlias"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "activeTabAlias", [], "any", false, false, false, 15);
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div class=\"oro-tabs";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()), "verticalTabs", [], "any", false, false, false, 19)) ? (" oro-tabs__vertical") : (""));
        echo "\"
     data-page-component-responsive-tabs=\"";
        // line 20
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })())), "html", null, true);
        echo "\"
>
    <div class=\"oro-tabs__head\">
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })()), "subtitle", [], "any", false, false, false, 23)) {
            // line 24
            echo "            <div class=\"tabs-subtitle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()), "subtitle", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        $context["extraClasses"] = "";
        // line 28
        echo "
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "verticalTabs", [], "any", false, false, false, 29)) {
            // line 30
            echo "            ";
            $context["extraClasses"] = ((isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 30, $this->source); })()) . " flex-column");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()), "useDropdown", [], "any", false, false, false, 33)) {
            // line 34
            echo "            ";
            $context["extraClasses"] = ((isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 34, $this->source); })()) . " nav-tabs-dropdown");
            // line 35
            echo "        ";
        }
        // line 36
        echo "
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })()), "subTabs", [], "any", false, false, false, 37)) {
            // line 38
            echo "            ";
            $context["extraClasses"] = ((isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 38, $this->source); })()) . " sub-tabs");
            // line 39
            echo "        ";
        }
        // line 40
        echo "
        <ul class=\"nav nav-tabs ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" role=\"tablist\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 42, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 43
            echo "                ";
            $context["isActiveTab"] = (((isset($context["activeTabAlias"]) || array_key_exists("activeTabAlias", $context) ? $context["activeTabAlias"] : (function () { throw new RuntimeError('Variable "activeTabAlias" does not exist.', 43, $this->source); })())) ? (((isset($context["activeTabAlias"]) || array_key_exists("activeTabAlias", $context) ? $context["activeTabAlias"] : (function () { throw new RuntimeError('Variable "activeTabAlias" does not exist.', 43, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 43))) : ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43) == 1)));
            // line 44
            echo "                <li class=\"nav-item\">
                    ";
            // line 45
            $context["widgetOptions"] = ["type" => ((twig_get_attribute($this->env, $this->source,             // line 46
$context["tab"], "widgetType", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "widgetType", [], "any", false, false, false, 46), "block")) : ("block")), "event" => "shown.bs.tab", "multiple" => false, "options" => ["container" => ("#" . twig_get_attribute($this->env, $this->source,             // line 50
$context["tab"], "alias", [], "any", false, false, false, 50)), "loadingElement" => ("#" .             // line 51
(isset($context["containerAlias"]) || array_key_exists("containerAlias", $context) ? $context["containerAlias"] : (function () { throw new RuntimeError('Variable "containerAlias" does not exist.', 51, $this->source); })())), "alias" => twig_get_attribute($this->env, $this->source,             // line 52
$context["tab"], "alias", [], "any", false, false, false, 52)]];
            // line 55
            echo "
                    ";
            // line 56
            $context["dataAttributes"] = ["target" => ("#" . twig_get_attribute($this->env, $this->source,             // line 57
$context["tab"], "alias", [], "any", false, false, false, 57)), "toggle" => "tab", "url" => twig_get_attribute($this->env, $this->source,             // line 59
$context["tab"], "url", [], "any", false, false, false, 59)];
            // line 61
            echo "
                    ";
            // line 62
            if ((((twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 62), "")) : ("")) || (isset($context["isActiveTab"]) || array_key_exists("isActiveTab", $context) ? $context["isActiveTab"] : (function () { throw new RuntimeError('Variable "isActiveTab" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "                        ";
                $context["widgetOptions"] = twig_array_merge((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 63, $this->source); })()), ["initialized" => true]);
                // line 64
                echo "                    ";
            }
            // line 65
            echo "
                    ";
            // line 66
            if ((isset($context["isActiveTab"]) || array_key_exists("isActiveTab", $context) ? $context["isActiveTab"] : (function () { throw new RuntimeError('Variable "isActiveTab" does not exist.', 66, $this->source); })())) {
                // line 67
                echo "                        ";
                $context["className"] = "nav-link active";
                // line 68
                echo "                        ";
                $context["ariaSelectted"] = "true";
                // line 69
                echo "                    ";
            } else {
                // line 70
                echo "                        ";
                $context["className"] = "nav-link";
                // line 71
                echo "                        ";
                $context["ariaSelectted"] = "false";
                // line 72
                echo "                    ";
            }
            // line 73
            echo "
                    ";
            // line 74
            $context["tabOptions"] = twig_array_merge($context["tab"], ["id" => (twig_get_attribute($this->env, $this->source,             // line 75
$context["tab"], "alias", [], "any", false, false, false, 75) . "-tab"), "widget" =>             // line 76
(isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 76, $this->source); })()), "dataAttributes" =>             // line 77
(isset($context["dataAttributes"]) || array_key_exists("dataAttributes", $context) ? $context["dataAttributes"] : (function () { throw new RuntimeError('Variable "dataAttributes" does not exist.', 77, $this->source); })()), "label" => twig_get_attribute($this->env, $this->source,             // line 78
$context["tab"], "label", [], "any", false, false, false, 78), "class" =>             // line 79
(isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 79, $this->source); })()), "role" => "tab", "ariaSelected" =>             // line 81
(isset($context["ariaSelectted"]) || array_key_exists("ariaSelectted", $context) ? $context["ariaSelectted"] : (function () { throw new RuntimeError('Variable "ariaSelectted" does not exist.', 81, $this->source); })()), "ariaControls" => twig_get_attribute($this->env, $this->source,             // line 82
$context["tab"], "alias", [], "any", false, false, false, 82)]);
            // line 84
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_clientLink", [(isset($context["tabOptions"]) || array_key_exists("tabOptions", $context) ? $context["tabOptions"] : (function () { throw new RuntimeError('Variable "tabOptions" does not exist.', 84, $this->source); })())], 84, $context, $this->getSourceContext());
            echo "
                </li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </ul>
    </div>
    <div class=\"oro-tabs__content\">
        <div class=\"tab-content\" id=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["containerAlias"]) || array_key_exists("containerAlias", $context) ? $context["containerAlias"] : (function () { throw new RuntimeError('Variable "containerAlias" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 92
            echo "                ";
            $context["isActiveTab"] = (((isset($context["activeTabAlias"]) || array_key_exists("activeTabAlias", $context) ? $context["activeTabAlias"] : (function () { throw new RuntimeError('Variable "activeTabAlias" does not exist.', 92, $this->source); })())) ? (((isset($context["activeTabAlias"]) || array_key_exists("activeTabAlias", $context) ? $context["activeTabAlias"] : (function () { throw new RuntimeError('Variable "activeTabAlias" does not exist.', 92, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 92))) : ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92) == 1)));
            // line 93
            echo "                <div class=\"tab-pane";
            if ((isset($context["isActiveTab"]) || array_key_exists("isActiveTab", $context) ? $context["isActiveTab"] : (function () { throw new RuntimeError('Variable "isActiveTab" does not exist.', 93, $this->source); })())) {
                echo " active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 93), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["tab"], "alias", [], "any", false, false, false, 93) . "-tab"), "html", null, true);
            echo "\">
                    ";
            // line 94
            if (((twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 94), "")) : (""))) {
                // line 95
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 95);
                echo "
                    ";
            } elseif (            // line 96
(isset($context["isActiveTab"]) || array_key_exists("isActiveTab", $context) ? $context["isActiveTab"] : (function () { throw new RuntimeError('Variable "isActiveTab" does not exist.', 96, $this->source); })())) {
                // line 97
                echo "                        ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, $context["tab"]);
                echo "
                    ";
            }
            // line 99
            echo "                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/tab_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 101,  302 => 99,  296 => 97,  294 => 96,  289 => 95,  287 => 94,  276 => 93,  273 => 92,  256 => 91,  252 => 90,  247 => 87,  229 => 84,  227 => 82,  226 => 81,  225 => 79,  224 => 78,  223 => 77,  222 => 76,  221 => 75,  220 => 74,  217 => 73,  214 => 72,  211 => 71,  208 => 70,  205 => 69,  202 => 68,  199 => 67,  197 => 66,  194 => 65,  191 => 64,  188 => 63,  186 => 62,  183 => 61,  181 => 59,  180 => 57,  179 => 56,  176 => 55,  174 => 52,  173 => 51,  172 => 50,  171 => 46,  170 => 45,  167 => 44,  164 => 43,  147 => 42,  143 => 41,  140 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  126 => 35,  123 => 34,  121 => 33,  118 => 32,  115 => 31,  112 => 30,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  96 => 24,  94 => 23,  88 => 20,  84 => 19,  81 => 18,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  61 => 12,  59 => 11,  57 => 10,  54 => 9,  52 => 8,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set options = {
    useDropdown: true,
    verticalTabs: false,
    subtitle: false,
    subTabs: false
}|merge(options|default({})) %}

{% set containerAlias = 'tab' %}
{% set activeTabAlias = null %}
{% for tab in tabs %}
    {% set containerAlias = containerAlias ~ '-' ~ tab.alias %}
    {% if (options.activeTabAlias is defined and options.activeTabAlias == tab.alias) %}
        {% set activeTabAlias = options.activeTabAlias %}
    {% endif %}
{% endfor %}

<div class=\"oro-tabs{{ options.verticalTabs ? ' oro-tabs__vertical' }}\"
     data-page-component-responsive-tabs=\"{{ options|json_encode }}\"
>
    <div class=\"oro-tabs__head\">
        {% if (options.subtitle) %}
            <div class=\"tabs-subtitle\">{{ options.subtitle }}</div>
        {% endif %}

        {% set extraClasses = '' %}

        {% if (options.verticalTabs) %}
            {% set extraClasses =  extraClasses ~ ' flex-column' %}
        {% endif %}

        {% if (options.useDropdown) %}
            {% set extraClasses =  extraClasses ~ ' nav-tabs-dropdown' %}
        {% endif %}

        {% if (options.subTabs) %}
            {% set extraClasses = extraClasses ~ ' sub-tabs' %}
        {% endif %}

        <ul class=\"nav nav-tabs {{ extraClasses }}\" role=\"tablist\">
            {% for tab in tabs %}
                {% set isActiveTab = activeTabAlias ? activeTabAlias == tab.alias : loop.index == 1 %}
                <li class=\"nav-item\">
                    {% set widgetOptions = {
                        'type': tab.widgetType|default('block'),
                        'event': 'shown.bs.tab',
                        'multiple': false,
                        'options': {
                            'container': '#' ~ tab.alias,
                            'loadingElement': '#' ~ containerAlias,
                            'alias': tab.alias,
                        }
                    } %}

                    {% set dataAttributes = {
                        'target': '#' ~ tab.alias,
                        'toggle': 'tab',
                        'url': tab.url
                    } %}

                    {% if tab.content|default('') or isActiveTab %}
                        {% set widgetOptions = widgetOptions|merge({'initialized': true}) %}
                    {% endif %}

                    {% if isActiveTab %}
                        {% set className = 'nav-link active' %}
                        {% set ariaSelectted = 'true' %}
                    {% else %}
                        {% set className = 'nav-link' %}
                        {% set ariaSelectted = 'false' %}
                    {% endif %}

                    {% set tabOptions = tab|merge({
                        'id': tab.alias ~ '-tab',
                        'widget': widgetOptions,
                        'dataAttributes': dataAttributes,
                        'label': tab.label,
                        'class': className,
                        'role': 'tab',
                        'ariaSelected': ariaSelectted,
                        'ariaControls': tab.alias
                    }) %}
                    {{ UI.clientLink(tabOptions) }}
                </li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"oro-tabs__content\">
        <div class=\"tab-content\" id=\"{{ containerAlias }}\">
            {% for tab in tabs %}
                {% set isActiveTab = activeTabAlias ? activeTabAlias == tab.alias : loop.index == 1 %}
                <div class=\"tab-pane{% if isActiveTab %} active{% endif %}\" id=\"{{ tab.alias }}\" role=\"tabpanel\" aria-labelledby=\"{{ tab.alias ~ '-tab' }}\">
                    {% if tab.content|default('') %}
                        {{ tab.content|raw }}
                    {% elseif isActiveTab %}
                        {{ oro_widget_render(tab) }}
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "@OroUI/tab_panel.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/tab_panel.html.twig");
    }
}
