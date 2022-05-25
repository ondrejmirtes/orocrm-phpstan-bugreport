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

/* @OroForm/layouts/blank/layout.html.twig */
class __TwigTemplate_4d3635cdd7307a3c7894b346f3daa722 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_end_widget' => [$this, 'block_form_end_widget'],
            'input_widget' => [$this, 'block_input_widget'],
            'button_widget' => [$this, 'block_button_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroLayout/Layout/div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroForm/layouts/blank/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroForm/layouts/blank/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroForm/layouts/blank/layout.html.twig"));

        $this->parent = $this->loadTemplate("@OroLayout/Layout/div_layout.html.twig", "@OroForm/layouts/blank/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_form_end_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_end_widget", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end_widget"));

        // line 4
        echo "    ";
        $this->displayParentBlock("form_end_widget", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ((array_key_exists("js_validation_options", $context)) ? (_twig_default_filter((isset($context["js_validation_options"]) || array_key_exists("js_validation_options", $context) ? $context["js_validation_options"] : (function () { throw new RuntimeError('Variable "js_validation_options" does not exist.', 5, $this->source); })()), [])) : ([])));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 8
    public function block_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("input_widget", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_widget"));

        // line 9
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 9, $this->source); })()) == "checkbox")) {
            // line 10
            echo "        ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), ["~class" => " custom-checkbox__input"]);
            // line 13
            echo "
        <label ";
            // line 14
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
                echo "\" ";
            }
            echo " class=\"custom-checkbox\">
            ";
            // line 15
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
            <span class=\"custom-checkbox__icon\"></span>
            <span class=\"custom-checkbox__text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 17, $this->source); })())), "html", null, true);
            echo " </span>
        </label>
    ";
        } else {
            // line 20
            echo "        ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })()), ["~class" => " input"]);
            // line 23
            echo "
        ";
            // line 24
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 28
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button_widget", $this->getTemplateName(), 28));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 29
        echo "    ";
        if ((((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 29, $this->source); })()), "")) : ("")) == "auto")) {
            // line 30
            echo "        ";
            if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 30, $this->source); })()) == "submit")) {
                // line 31
                echo "            ";
                $context["style"] = "btn--info";
                // line 32
                echo "        ";
            } else {
                // line 33
                echo "            ";
                $context["style"] = ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 33, $this->source); })()) == "reset")) ? ("btn--action") : (""));
                // line 34
                echo "        ";
            }
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        if ( !array_key_exists("style", $context)) {
            // line 37
            echo "        ";
            $context["add_class"] = "";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["add_class"] = (" btn " . (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 39, $this->source); })()));
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 42
($context["attr"] ?? null), "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 42), "")) : ("")) . (isset($context["add_class"]) || array_key_exists("add_class", $context) ? $context["add_class"] : (function () { throw new RuntimeError('Variable "add_class" does not exist.', 42, $this->source); })()))]);
        // line 44
        echo "    ";
        $this->displayParentBlock("button_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroForm/layouts/blank/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 44,  213 => 42,  211 => 41,  208 => 40,  205 => 39,  202 => 38,  199 => 37,  196 => 36,  193 => 35,  190 => 34,  187 => 33,  184 => 32,  181 => 31,  178 => 30,  175 => 29,  162 => 28,  146 => 24,  143 => 23,  140 => 20,  134 => 17,  129 => 15,  121 => 14,  118 => 13,  115 => 10,  112 => 9,  99 => 8,  84 => 5,  79 => 4,  66 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@OroLayout/Layout/div_layout.html.twig\" %}

{% block form_end_widget %}
    {{ parent() }}
    {{ oro_form_js_validation(form, js_validation_options|default({})) }}
{% endblock %}

{% block input_widget %}
    {% if type == 'checkbox' %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' custom-checkbox__input'
        }) %}

        <label {% if attr.id is not empty %} for=\"{{ attr.id }}\" {% endif %} class=\"custom-checkbox\">
            {{ parent() }}
            <span class=\"custom-checkbox__icon\"></span>
            <span class=\"custom-checkbox__text\">{{ label|block_text(translation_domain) }} </span>
        </label>
    {% else %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' input'
        }) %}

        {{ parent() }}
    {% endif %}
{% endblock %}

{% block button_widget %}
    {% if style|default('') == 'auto' %}
        {% if action == 'submit' %}
            {% set style = 'btn--info' %}
        {% else %}
            {% set style = action == 'reset' ? 'btn--action' : '' %}
        {% endif %}
    {% endif %}
    {% if style is not defined %}
        {% set add_class = '' %}
    {% else %}
        {% set add_class = ' btn ' ~ style %}
    {% endif %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ add_class
    }) %}
    {{ parent() }}
{% endblock %}
", "@OroForm/layouts/blank/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
