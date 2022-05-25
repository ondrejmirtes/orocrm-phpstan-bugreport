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

/* @OroNavigation/Menu/favorites.html.twig */
class __TwigTemplate_258bf9b363c1386200825ea02f94069e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/favorites.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/favorites.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/favorites.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list", $this->getTemplateName(), 13));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 14
        echo "    ";
        $context["favorites"] = [];
        // line 15
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "hasChildren", [], "any", false, false, false, 15) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "depth", [], "any", false, false, false, 15) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "displayChildren", [], "any", false, false, false, 15))) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "children", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["favoritesItem"]) {
                // line 17
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "extras", [], "any", false, false, false, 17), "isAllowed", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                ";
                    $context["favorites"] = twig_array_merge((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 18, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "extras", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "title" => twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "label", [], "any", false, false, false, 18), "title_rendered" => $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->render(twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "label", [], "any", false, false, false, 18)), "url" => twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "uri", [], "any", false, false, false, 18), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favoritesItem"], "extras", [], "any", false, false, false, 18), "type", [], "any", false, false, false, 18)]]);
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoritesItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $macros["navigation"] = $this;
        // line 23
        echo "    ";
        $context["frontendOptions"] = [0 => "el", 1 => "tabTitle", 2 => "tabIcon"];
        // line 24
        echo "    <div data-data=\"";
        echo twig_escape_filter($this->env, json_encode((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "\" data-options=\"";
        echo twig_call_macro($macros["navigation"], "macro_get_options", [(isset($context["frontendOptions"]) || array_key_exists("frontendOptions", $context) ? $context["frontendOptions"] : (function () { throw new RuntimeError('Variable "frontendOptions" does not exist.', 24, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
        echo "\"></div>
    <ul class=\"extra-list\"></ul>
    <div class=\"no-data\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.messages.no_items"), "html", null, true);
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 3
    public function macro_get_options($__attributes__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_options"));

            // line 4
            $context["options"] = [];
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), $context["attribute"], [], "array", true, true, false, 6)) {
                    // line 7
                    $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), [$context["attribute"] => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), $context["attribute"], [], "array", false, false, false, 7)]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })())), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 10,  163 => 7,  161 => 6,  157 => 5,  155 => 4,  135 => 3,  120 => 26,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  83 => 16,  80 => 15,  77 => 14,  64 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}

{% macro get_options(attributes, data) %}
    {%- set options = {} %}
    {%- for attribute in attributes %}
        {%- if data[attribute] is defined %}
            {%- set options = options|merge({(attribute): data[attribute]}) %}
        {%- endif %}
    {%- endfor %}
    {{- options|json_encode -}}
{% endmacro %}

{% block list %}
    {% set favorites = [] %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        {% for favoritesItem in item.children %}
            {% if favoritesItem.extras.isAllowed %}
                {% set favorites = favorites|merge([{'id': favoritesItem.extras.id, 'title': favoritesItem.label, 'title_rendered': oro_title_render(favoritesItem.label),  'url': favoritesItem.uri, 'type': favoritesItem.extras.type}]) %}
            {% endif %}
        {% endfor %}
    {% endif %}
    {% import _self as navigation %}
    {% set frontendOptions = ['el', 'tabTitle', 'tabIcon'] %}
    <div data-data=\"{{ favorites|json_encode }}\" data-options=\"{{- navigation.get_options(frontendOptions, options) -}}\"></div>
    <ul class=\"extra-list\"></ul>
    <div class=\"no-data\">{{ 'oro.navigation.messages.no_items'|trans }}</div>
{% endblock %}
", "@OroNavigation/Menu/favorites.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/favorites.html.twig");
    }
}
