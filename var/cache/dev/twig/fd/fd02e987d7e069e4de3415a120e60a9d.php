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

/* @OroUser/macros.html.twig */
class __TwigTemplate_3dcd9b84756646e7e734f7f509e6cdc1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_collection_prototype($__widget__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_prototype"));

            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2)))) {
                // line 3
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "prototype", [], "any", false, false, false, 3);
                // line 4
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "prototype", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 6, $this->source); })());
                // line 7
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "full_name", [], "any", false, false, false, 7);
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"row-oro\">
            ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'errors');
            echo "
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
                ";
                // line 14
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'rest');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_user_business_unit_name($__user__ = null, $__addBrackets__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "addBrackets" => $__addBrackets__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_business_unit_name"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_business_unit_name"));

            // line 23
            ob_start();
            // line 24
            echo "        ";
            $context["businessUnit"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getEntityOwner((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()));
            // line 25
            echo "        ";
            if ( !(null === (isset($context["businessUnit"]) || array_key_exists("businessUnit", $context) ? $context["businessUnit"] : (function () { throw new RuntimeError('Variable "businessUnit" does not exist.', 25, $this->source); })()))) {
                // line 26
                echo "            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["businessUnit"]) || array_key_exists("businessUnit", $context) ? $context["businessUnit"] : (function () { throw new RuntimeError('Variable "businessUnit" does not exist.', 26, $this->source); })()))) {
                    // line 27
                    echo "                ";
                    $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/macros.html.twig", 27)->unwrap();
                    // line 28
                    echo "                ";
                    $context["buView"] = twig_call_macro($macros["UI"], "macro_renderUrl", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_business_unit_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["businessUnit"]) || array_key_exists("businessUnit", $context) ? $context["businessUnit"] : (function () { throw new RuntimeError('Variable "businessUnit" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), twig_get_attribute($this->env, $this->source, (isset($context["businessUnit"]) || array_key_exists("businessUnit", $context) ? $context["businessUnit"] : (function () { throw new RuntimeError('Variable "businessUnit" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["buView"] = twig_get_attribute($this->env, $this->source, (isset($context["businessUnit"]) || array_key_exists("businessUnit", $context) ? $context["businessUnit"] : (function () { throw new RuntimeError('Variable "businessUnit" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30);
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "            ";
                if ((isset($context["addBrackets"]) || array_key_exists("addBrackets", $context) ? $context["addBrackets"] : (function () { throw new RuntimeError('Variable "addBrackets" does not exist.', 32, $this->source); })())) {
                    // line 33
                    echo "                (";
                    echo twig_escape_filter($this->env, (isset($context["buView"]) || array_key_exists("buView", $context) ? $context["buView"] : (function () { throw new RuntimeError('Variable "buView" does not exist.', 33, $this->source); })()), "html", null, true);
                    echo ")
            ";
                } else {
                    // line 35
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["buView"]) || array_key_exists("buView", $context) ? $context["buView"] : (function () { throw new RuntimeError('Variable "buView" does not exist.', 35, $this->source); })()), "html", null, true);
                    echo "
            ";
                }
                // line 37
                echo "        ";
            }
            // line 38
            echo "    ";
            $___internal_parse_50_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo twig_spaceless($___internal_parse_50_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_render_user_name($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_user_name"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_user_name"));

            // line 42
            echo "    ";
            $context["userName"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()));
            // line 43
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/macros.html.twig", 44)->unwrap();
                // line 45
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_renderUrl", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 45, $this->source); })())], 45, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 47
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 47, $this->source); })()), "html", null, true);
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
        return "@OroUser/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 47,  258 => 45,  255 => 44,  252 => 43,  249 => 42,  230 => 41,  215 => 23,  212 => 38,  209 => 37,  203 => 35,  197 => 33,  194 => 32,  191 => 31,  188 => 30,  185 => 29,  182 => 28,  179 => 27,  176 => 26,  173 => 25,  170 => 24,  168 => 23,  148 => 22,  129 => 17,  124 => 16,  116 => 14,  111 => 13,  107 => 12,  103 => 11,  97 => 9,  94 => 8,  91 => 7,  88 => 6,  85 => 5,  82 => 4,  79 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro collection_prototype(widget) %}
    {% if 'prototype' in widget.vars|keys %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}
    <div data-content=\"{{ name }}\">
        <div class=\"row-oro\">
            {{ form_errors(form) }}
            {% for child in form %}
                {{ form_errors(child) }}
                {{ form_widget(child) }}
            {% endfor %}
            {{ form_rest(form) }}
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"{{ name }}\">×</button>
        </div>
    </div>
{% endmacro %}

{%- macro user_business_unit_name(user, addBrackets = true) -%}
    {% apply spaceless %}
        {% set businessUnit = oro_get_entity_owner(user) %}
        {% if businessUnit is not null %}
            {% if is_granted('VIEW', businessUnit) %}
                {% import '@OroUI/macros.html.twig' as UI %}
                {% set buView = UI.renderUrl(path('oro_business_unit_view', {'id': businessUnit.id}), businessUnit.name) %}
            {% else %}
                {% set buView = businessUnit.name %}
            {% endif %}
            {% if addBrackets %}
                ({{ buView }})
            {% else %}
                {{ buView }}
            {% endif %}
        {% endif %}
    {% endapply %}
{%- endmacro -%}

{% macro render_user_name(user) %}
    {% set userName = user|oro_format_name %}
    {% if is_granted('VIEW', user) %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {{ UI.renderUrl(path('oro_user_view', {'id': user.id}), userName) }}
    {% else %}
        {{ userName }}
    {% endif %}
{% endmacro %}
", "@OroUser/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/macros.html.twig");
    }
}
