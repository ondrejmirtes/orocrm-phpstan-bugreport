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

/* @OroDashboard/Dashboard/tabbedWidget.html.twig */
class __TwigTemplate_b6c4831bf5aed84a7de9a046101b222e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'tab_content' => [$this, 'block_tab_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroDashboard/Dashboard/widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Dashboard/tabbedWidget.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/tabbedWidget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/tabbedWidget.html.twig"));

        $this->parent = $this->loadTemplate("@OroDashboard/Dashboard/widget.html.twig", "@OroDashboard/Dashboard/tabbedWidget.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Dashboard/tabbedWidget.html.twig", 4)->unwrap();
        // line 5
        echo "    <div class=\"tab-container\"
        ";
        // line 6
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/tabs-component"]], 6, $context, $this->getSourceContext());
        // line 8
        echo "
    >
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            ";
        // line 11
        $context["tabTabId"] = uniqid("tab-");
        // line 12
        echo "            ";
        $context["tabContentId"] = uniqid("tab-content-");
        // line 13
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 13, $this->source); })()));
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
            // line 14
            echo "                <li class=\"nav-item tab\">
                    <a id=\"";
            // line 15
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15) == 0)) ? ((isset($context["tabTabId"]) || array_key_exists("tabTabId", $context) ? $context["tabTabId"] : (function () { throw new RuntimeError('Variable "tabTabId" does not exist.', 15, $this->source); })())) : (((isset($context["tabTabId"]) || array_key_exists("tabTabId", $context) ? $context["tabTabId"] : (function () { throw new RuntimeError('Variable "tabTabId" does not exist.', 15, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15)))), "html", null, true);
            echo "\"
                       href=\"#";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["tabContentId"]) || array_key_exists("tabContentId", $context) ? $context["tabContentId"] : (function () { throw new RuntimeError('Variable "tabContentId" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\"
                       role=\"tab\"
                       class=\"no-hash tab-button nav-link ";
            // line 18
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 18, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 18))) {
                echo " active";
            }
            echo "\"
                       data-name=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                       data-url=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "url", [], "any", false, false, false, 20), "html", null, true);
            echo "\"
                       data-toggle=\"tab\"
                       aria-controls=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["tabContentId"]) || array_key_exists("tabContentId", $context) ? $context["tabContentId"] : (function () { throw new RuntimeError('Variable "tabContentId" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"
                       aria-selected=\"";
            // line 23
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 23, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 23))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
                    >
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "afterHtml", [], "any", true, true, false, 26)) {
                // line 27
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "afterHtml", [], "any", false, false, false, 27);
                echo "
                        ";
            }
            // line 29
            echo "                    </a>
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
        // line 32
        echo "        </ul>
        <div class=\"tab-content\" role=\"tabpanel\" aria-labelledby=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["tabTabId"]) || array_key_exists("tabTabId", $context) ? $context["tabTabId"] : (function () { throw new RuntimeError('Variable "tabTabId" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"content\">
                ";
        // line 35
        $this->displayBlock('tab_content', $context, $blocks);
        // line 38
        echo "            </div>
        </div>
    </div>

    ";
        // line 42
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Dashboard/tabbedWidget.html.twig", 42)->unwrap();
        // line 43
        echo "
    <div ";
        // line 44
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/app/views/widget-tabs-view", "options" => ["_sourceElement" => ("#" .         // line 47
(isset($context["widgetContentId"]) || array_key_exists("widgetContentId", $context) ? $context["widgetContentId"] : (function () { throw new RuntimeError('Variable "widgetContentId" does not exist.', 47, $this->source); })()))]]], 44, $context, $this->getSourceContext());
        // line 49
        echo "></div>

    ";
        // line 51
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_tab_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("tab_content", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_content"));

        // line 36
        echo "                    ";
        echo (isset($context["activeTabContent"]) || array_key_exists("activeTabContent", $context) ? $context["activeTabContent"] : (function () { throw new RuntimeError('Variable "activeTabContent" does not exist.', 36, $this->source); })());
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Dashboard/tabbedWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 36,  225 => 35,  210 => 51,  206 => 49,  204 => 47,  203 => 44,  200 => 43,  198 => 42,  192 => 38,  190 => 35,  185 => 33,  182 => 32,  166 => 29,  160 => 27,  158 => 26,  154 => 25,  145 => 23,  141 => 22,  136 => 20,  132 => 19,  126 => 18,  121 => 16,  117 => 15,  114 => 14,  96 => 13,  93 => 12,  91 => 11,  86 => 8,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroDashboard/Dashboard/widget.html.twig' %}

{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <div class=\"tab-container\"
        {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/tabs-component'
        }) }}
    >
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            {% set tabTabId = 'tab-'|uniqid %}
            {% set tabContentId = 'tab-content-'|uniqid %}
            {% for tab in tabs %}
                <li class=\"nav-item tab\">
                    <a id=\"{{ (loop.index == 0) ? tabTabId : tabTabId ~ loop.index }}\"
                       href=\"#{{ tabContentId }}\"
                       role=\"tab\"
                       class=\"no-hash tab-button nav-link {% if activeTab == tab.name %} active{% endif %}\"
                       data-name=\"{{ tab.name }}\"
                       data-url=\"{{ tab.url }}\"
                       data-toggle=\"tab\"
                       aria-controls=\"{{ tabContentId }}\"
                       aria-selected=\"{% if activeTab == tab.name %}true{% else %}false{% endif %}\"
                    >
                        {{ tab.label }}
                        {% if tab.afterHtml is defined %}
                            {{ tab.afterHtml|raw }}
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
        <div class=\"tab-content\" role=\"tabpanel\" aria-labelledby=\"{{ tabTabId }}\">
            <div class=\"content\">
                {% block tab_content %}
                    {{ activeTabContent|raw }}
                {% endblock %}
            </div>
        </div>
    </div>

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        view: 'orodashboard/js/app/views/widget-tabs-view',
        options: {
            _sourceElement: '#' ~ widgetContentId
        }
    }) }}></div>

    {{ parent() }}
{% endblock %}
", "@OroDashboard/Dashboard/tabbedWidget.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/tabbedWidget.html.twig");
    }
}
