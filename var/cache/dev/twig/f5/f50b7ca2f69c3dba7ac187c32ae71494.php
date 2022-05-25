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

/* @OroNavigation/Menu/_tabs-content.html.twig */
class __TwigTemplate_c956067d6d7a506c0c8edf19fc672fc6 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/_tabs-content.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_tabs-content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/_tabs-content.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/_tabs-content.html.twig", 1);
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
        $macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/_tabs-content.html.twig", 4)->unwrap();
        // line 5
        echo "
    ";
        // line 6
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 6);
        // line 7
        echo "    ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 7, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 7, $this->source); })()), "class", [0 => "nav", 1 => "nav-pills"]], 7, $context, $this->getSourceContext())]);
        // line 8
        echo "
    <div class=\"tab-content\">
        ";
        // line 10
        $context["items"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })());
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            ";
            $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, true, false, 12), "show_non_authorized", [], "any", true, true, false, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 12), "show_non_authorized", [], "any", false, false, false, 12));
            // line 13
            echo "            ";
            $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extras", [], "any", false, false, false, 13), "isAllowed", [], "any", false, false, false, 13) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 13, $this->source); })()));
            // line 14
            echo "            ";
            if ((((isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 14, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 14)) && twig_get_attribute($this->env, $this->source, $context["item"], "displayChildren", [], "any", false, false, false, 14))) {
                // line 15
                echo "                ";
                $context["tabClasses"] = [0 => "tab-pane"];
                // line 16
                echo "                ";
                $context["tabClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 16, $this->source); })()), "isAncestor", [0 => $context["item"], 1 => 2], "method", false, false, false, 16)) ? (twig_array_merge((isset($context["tabClasses"]) || array_key_exists("tabClasses", $context) ? $context["tabClasses"] : (function () { throw new RuntimeError('Variable "tabClasses" does not exist.', 16, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), "ancestorClass", [], "any", false, false, false, 16)])) : ((isset($context["tabClasses"]) || array_key_exists("tabClasses", $context) ? $context["tabClasses"] : (function () { throw new RuntimeError('Variable "tabClasses" does not exist.', 16, $this->source); })())));
                // line 17
                echo "                ";
                $context["tabClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 17, $this->source); })()), "isCurrent", [0 => $context["item"]], "method", false, false, false, 17)) ? (twig_array_merge((isset($context["tabClasses"]) || array_key_exists("tabClasses", $context) ? $context["tabClasses"] : (function () { throw new RuntimeError('Variable "tabClasses" does not exist.', 17, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 17, $this->source); })()), "currentClass", [], "any", false, false, false, 17)])) : ((isset($context["tabClasses"]) || array_key_exists("tabClasses", $context) ? $context["tabClasses"] : (function () { throw new RuntimeError('Variable "tabClasses" does not exist.', 17, $this->source); })())));
                // line 18
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["tabClasses"]) || array_key_exists("tabClasses", $context) ? $context["tabClasses"] : (function () { throw new RuntimeError('Variable "tabClasses" does not exist.', 18, $this->source); })()), " "), "html", null, true);
                echo "\"
                     id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_trim_filter(twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 19), [" " => "_", "#" => "_"]))), "html", null, true);
                echo "\">
                    ";
                // line 20
                $this->displayBlock("list", $context, $blocks);
                // line 21
                echo "</div>
            ";
            }
            // line 23
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context["item"] = (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })());
        // line 25
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 25,  159 => 24,  145 => 23,  141 => 21,  139 => 20,  135 => 19,  130 => 18,  127 => 17,  124 => 16,  121 => 15,  118 => 14,  115 => 13,  112 => 12,  94 => 11,  92 => 10,  88 => 8,  85 => 7,  83 => 6,  80 => 5,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}

{% block root %}
    {% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

    {% set listAttributes = item.childrenAttributes %}
    {% set listAttributes = listAttributes|merge({'class': oro_menu.add_attribute_values(listAttributes, 'class', ['nav', 'nav-pills'])}) %}

    <div class=\"tab-content\">
        {% set items = item %}
        {% for item in items %}
            {% set showNonAuthorized = item.extras.show_non_authorized is defined and item.extras.show_non_authorized %}
            {% set displayable = item.extras.isAllowed or showNonAuthorized %}
            {% if displayable and item.hasChildren and item.displayChildren %}
                {% set tabClasses = ['tab-pane'] %}
                {% set tabClasses = matcher.isAncestor(item, 2) ? tabClasses|merge([options.ancestorClass]) : tabClasses %}
                {% set tabClasses = matcher.isCurrent(item) ? tabClasses|merge([options.currentClass]) : tabClasses %}
                <div class=\"{{ tabClasses|join(' ')  }}\"
                     id=\"{{- item.name|replace({' ': '_', '#': '_'})|lower|trim -}}\">
                    {{ block('list') -}}
                </div>
            {% endif %}
        {% endfor %}
        {% set item = items %}
    </div>
{% endblock %}
", "@OroNavigation/Menu/_tabs-content.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/_tabs-content.html.twig");
    }
}
