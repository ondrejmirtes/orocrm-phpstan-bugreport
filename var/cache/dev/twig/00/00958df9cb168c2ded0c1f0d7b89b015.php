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

/* @OroWorkflow/Widget/widget/transitionCustomForm.html.twig */
class __TwigTemplate_ae139803dcba7ab834120a03c95091f5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", 1)->unwrap();
        // line 2
        $context["isWidgetContext"] = true;
        // line 3
        $context["formAction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "uri", [], "any", false, false, false, 3);
        // line 4
        $this->loadTemplate("@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", 4, "2037570238")->display(twig_array_merge($context, ["formAction" => (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 4, $this->source); })())]));
        // line 36
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 36,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set isWidgetContext=true %}
{% set formAction = app.request.uri  %}
{% embed transition.getFormTemplate() with {'formAction': formAction}%}
    {% block widget_context %}
    {% endblock widget_context %}
    {% block content %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {% if saved %}
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/widget-form-component',
                options: {
                    _wid: app.request.get('_wid'),
                    data: data|default(null)
                }
            }) }}></div>
        {% elseif formErrors|length > 0 %}
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/widget-form-component',
                options: {
                    _wid: app.request.get('_wid'),
                    formError: true,
                    preventRemove: true,
                    reloadLayout: true
                }
            }) }}></div>
            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-error\" role=\"alert\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}
        {% endif %}
        {{ parent() }}
    {% endblock content %}
{% endembed %}

", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/transitionCustomForm.html.twig");
    }
}


/* @OroWorkflow/Widget/widget/transitionCustomForm.html.twig */
class __TwigTemplate_ae139803dcba7ab834120a03c95091f5___2037570238 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_context' => [$this, 'block_widget_context'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 4, $this->source); })()), "getFormTemplate", [], "method", false, false, false, 4), "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_widget_context($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_context", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        // line 6
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", 8)->unwrap();
        // line 9
        echo "        ";
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "            <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/widget-form-component", "options" => ["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "_wid"], "method", false, false, false, 13), "data" => ((            // line 14
array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), null)) : (null))]]], 10, $context, $this->getSourceContext());
            // line 16
            echo "></div>
        ";
        } elseif ((twig_length_filter($this->env,         // line 17
(isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 17, $this->source); })())) > 0)) {
            // line 18
            echo "            <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/widget-form-component", "options" => ["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "_wid"], "method", false, false, false, 21), "formError" => true, "preventRemove" => true, "reloadLayout" => true]]], 18, $context, $this->getSourceContext());
            // line 26
            echo "></div>
            ";
            // line 27
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
                // line 28
                echo "                <div class=\"alert alert-error\" role=\"alert\">
                    ";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'errors');
                echo "
                </div>
            ";
            }
            // line 32
            echo "        ";
        }
        // line 33
        echo "        ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 33,  247 => 32,  241 => 29,  238 => 28,  236 => 27,  233 => 26,  231 => 21,  229 => 18,  227 => 17,  224 => 16,  222 => 14,  221 => 13,  219 => 10,  216 => 9,  213 => 8,  200 => 7,  187 => 6,  174 => 5,  146 => 4,  54 => 36,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set isWidgetContext=true %}
{% set formAction = app.request.uri  %}
{% embed transition.getFormTemplate() with {'formAction': formAction}%}
    {% block widget_context %}
    {% endblock widget_context %}
    {% block content %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {% if saved %}
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/widget-form-component',
                options: {
                    _wid: app.request.get('_wid'),
                    data: data|default(null)
                }
            }) }}></div>
        {% elseif formErrors|length > 0 %}
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/widget-form-component',
                options: {
                    _wid: app.request.get('_wid'),
                    formError: true,
                    preventRemove: true,
                    reloadLayout: true
                }
            }) }}></div>
            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-error\" role=\"alert\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}
        {% endif %}
        {{ parent() }}
    {% endblock content %}
{% endembed %}

", "@OroWorkflow/Widget/widget/transitionCustomForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/transitionCustomForm.html.twig");
    }
}
