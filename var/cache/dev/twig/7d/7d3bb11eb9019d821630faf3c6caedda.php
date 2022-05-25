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

/* @OroNavigation/Menu/_dots_tabs-content.html.twig */
class __TwigTemplate_e7f55f7a65362f4e08541c3b5ed377cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/_dots_tabs-content.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_dots_tabs-content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_dots_tabs-content.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/_dots_tabs-content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("root", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        $macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/_dots_tabs-content.html.twig", 4)->unwrap();
        // line 5
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/Menu/_dots_tabs-content.html.twig", 5)->unwrap();
        // line 6
        echo "
    <div class=\"tab-content\">
        ";
        // line 8
        $context["items"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })());
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            ";
            $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, true, false, 10), "show_non_authorized", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 10), "show_non_authorized", [], "any", false, false, false, 10));
            // line 11
            echo "            ";
            $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 11), "isAllowed", [], "any", false, false, false, 11) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 11, $this->source); })()));
            // line 12
            echo "            ";
            $context["componentAttrs"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, true, false, 12), "component_options", [], "any", true, true, false, 12)) ? (twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 12), "component_options", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext())) : (""));
            // line 13
            echo "            ";
            if ((isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "                <div class=\"tab-pane";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, true, false, 14), "active_if_first_is_empty", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, true, false, 14), "active_if_first_is_empty", [], "any", false, false, false, 14), false)) : (false))) {
                    echo " active";
                }
                echo "\"
                     id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 15), [" " => "_", "#" => "_"]))), "html", null, true);
                echo "-content\" ";
                echo twig_escape_filter($this->env, (isset($context["componentAttrs"]) || array_key_exists("componentAttrs", $context) ? $context["componentAttrs"] : (function () { throw new RuntimeError('Variable "componentAttrs" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "
                     role=\"tabpanel\"
                     aria-labelledby=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 17), [" " => "_", "#" => "_"]))), "html", null, true);
                echo "-tab\"
                     aria-orientation=\"vertical\"
                >
                    ";
                // line 20
                $context["options"] = ["tabTitle" => twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 20)];
                // line 21
                echo "                    ";
                $context["options"] = ["defaultUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_default")];
                // line 22
                echo "                    ";
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 22));
                // line 23
                echo "                    ";
                echo $this->extensions['Oro\Bundle\NavigationBundle\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 23), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })()));
                echo "
                </div>
            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        $context["item"] = (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })());
        // line 28
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/_dots_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 28,  147 => 27,  141 => 26,  134 => 23,  131 => 22,  128 => 21,  126 => 20,  120 => 17,  113 => 15,  106 => 14,  103 => 13,  100 => 12,  97 => 11,  94 => 10,  89 => 9,  87 => 8,  83 => 6,  80 => 5,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}

{% block root %}
    {% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"tab-content\">
        {% set items = item %}
        {% for item in items %}
            {% set showNonAuthorized = item.extras.show_non_authorized is defined and item.extras.show_non_authorized %}
            {% set displayable = item.extras.isAllowed or showNonAuthorized %}
            {% set componentAttrs = item.extras.component_options is defined ? UI.renderPageComponentAttributes(item.extras.component_options) : '' %}
            {% if displayable %}
                <div class=\"tab-pane{% if item.extras.active_if_first_is_empty|default(false) %} active{% endif %}\"
                     id=\"{{- item.name|replace({' ': '_', '#': '_'})|lower|trim -}}-content\" {{ componentAttrs }}
                     role=\"tabpanel\"
                     aria-labelledby=\"{{- item.name|replace({' ': '_', '#': '_'})|lower|trim -}}-tab\"
                     aria-orientation=\"vertical\"
                >
                    {% set options = {'tabTitle': item.label} %}
                    {% set options = {'defaultUrl': path(\"oro_default\")} %}
                    {% set options = options|merge(item.extras) %}
                    {{ oro_menu_render(item.name, options) }}
                </div>
            {% endif %}
        {% endfor %}
        {% set item = items %}
    </div>
{% endblock %}
", "@OroNavigation/Menu/_dots_tabs-content.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/_dots_tabs-content.html.twig");
    }
}
