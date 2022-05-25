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

/* @OroNavigation/Menu/_dots_tabs.html.twig */
class __TwigTemplate_8421b64701bbc8b258f2882b960680bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'item_renderer' => [$this, 'block_item_renderer'],
            'linkElement' => [$this, 'block_linkElement'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/_htabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/_dots_tabs.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_dots_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_dots_tabs.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/_htabs.html.twig", "@OroNavigation/Menu/_dots_tabs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 7
    public function block_item_renderer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item_renderer", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_renderer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_renderer"));

        // line 8
        echo "    ";
        $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 8), "show_non_authorized", [], "any", true, true, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "extras", [], "any", false, false, false, 8), "show_non_authorized", [], "any", false, false, false, 8));
        // line 9
        echo "    ";
        $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "extras", [], "any", false, false, false, 9), "isAllowed", [], "any", false, false, false, 9) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 9, $this->source); })()));
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "displayed", [], "any", false, false, false, 10) && (isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "        ";
            // line 12
            echo "        <li>
            ";
            // line 13
            $this->displayBlock("linkElement", $context, $blocks);
            echo "
        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("linkElement", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 19
        echo "    ";
        $macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/_dots_tabs.html.twig", 19)->unwrap();
        // line 20
        echo "    ";
        $context["class"] = [0 => ""];
        // line 21
        echo "    ";
        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "linkAttributes", [], "any", false, false, false, 21);
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 22), "active_if_first_is_empty", [], "any", true, true, false, 22) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "extras", [], "any", false, false, false, 22), "active_if_first_is_empty", [], "any", false, false, false, 22))) {
            // line 23
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 23, $this->source); })()), ["aria-selected" => "true"]);
            // line 26
            echo "        ";
            $context["class"] = twig_array_merge((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })()), [0 => "active"]);
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 28, $this->source); })()), ["aria-selected" => "false"]);
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 32, $this->source); })()), ["id" => (twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), [" " => "_", "#" => "_"]))) . "-tab"), "href" => (("#" . twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), [" " => "_", "#" => "_"])))) . "-content"), "class" => twig_join_filter(        // line 35
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 35, $this->source); })()), " "), "role" => "tab", "data-toggle" => "tab", "aria-controls" => (twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), [" " => "_", "#" => "_"]))) . "-content")]);
        // line 40
        echo "    <a ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/_dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 40,  184 => 38,  183 => 35,  182 => 34,  181 => 33,  179 => 32,  176 => 31,  173 => 28,  170 => 27,  167 => 26,  164 => 23,  161 => 22,  158 => 21,  155 => 20,  152 => 19,  139 => 18,  122 => 13,  119 => 12,  117 => 11,  114 => 10,  111 => 9,  108 => 8,  95 => 7,  79 => 4,  66 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/_htabs.html.twig' %}

{% block item %}
    {{ block('item_renderer') }}
{% endblock %}

{% block item_renderer %}
    {% set showNonAuthorized = item.extras.show_non_authorized is defined and item.extras.show_non_authorized %}
    {% set displayable = item.extras.isAllowed or showNonAuthorized %}
    {% if item.displayed and displayable %}
        {# displaying the item #}
        <li>
            {{ block('linkElement') }}
        </li>
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}
    {% set class = [''] %}
    {% set linkAttributes = item.linkAttributes %}
    {% if item.extras.active_if_first_is_empty is defined and item.extras.active_if_first_is_empty %}
        {% set linkAttributes = linkAttributes|merge({
            'aria-selected': 'true'
        }) %}
        {% set class = class|merge(['active']) %}
    {% else %}
        {% set linkAttributes = linkAttributes|merge({
            'aria-selected': 'false'
        }) %}
    {% endif %}
    {% set linkAttributes = linkAttributes|merge({
        'id': item.name|replace({' ': '_', '#': '_'})|lower|trim ~ '-tab',
        'href': '#' ~ item.name|replace({' ': '_', '#': '_'})|lower|trim ~ '-content',
        'class': class|join(' '),
        'role': 'tab',
        'data-toggle': 'tab',
        'aria-controls': item.name|replace({' ': '_', '#': '_'})|lower|trim ~ '-content'
    }) %}
    <a {{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>
{% endblock %}
", "@OroNavigation/Menu/_dots_tabs.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/_dots_tabs.html.twig");
    }
}
