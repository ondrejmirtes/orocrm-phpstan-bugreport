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

/* @OroWorkflow/Widget/widget/transitionForm.html.twig */
class __TwigTemplate_84f87e3b784312e74817f1ce23c43770 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'transition_widget_class' => [$this, 'block_transition_widget_class'],
            'transition_widget' => [$this, 'block_transition_widget'],
            'transition_form' => [$this, 'block_transition_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/transitionForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionForm.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/Widget/widget/transitionForm.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["trigger" => [0 => ["eventBroker" => "widget", "name" => "formSave", "args" => [0 => ((            // line 9
array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), null)) : (null))]]]]];
            // line 13
            echo "
    ";
            // line 14
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 14, $this->source); })()));
            echo "
";
        } else {
            // line 16
            echo "    <div class=\"";
            $this->displayBlock('transition_widget_class', $context, $blocks);
            echo "\">
        ";
            // line 17
            $this->displayBlock('transition_widget', $context, $blocks);
            // line 54
            echo "    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_transition_widget_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("transition_widget_class", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_widget_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_widget_class"));

        echo "widget-content";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 17
    public function block_transition_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("transition_widget", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_widget"));

        // line 18
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18)) > 0)) {
            // line 19
            echo "                <div class=\"alert alert-error\" role=\"alert\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroworkflow/js/app/views/transition/transition-error-view", "options" => ["wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", [0 => "_wid"], "method", false, false, false, 22)]]], 19, $context, $this->getSourceContext());
            // line 24
            echo ">
                    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('transition_form', $context, $blocks);
        // line 53
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_transition_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("transition_form", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "transition_form"));

        // line 30
        echo "                ";
        $context["frontendMessage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 30, $this->source); })()), "frontendOptions", [], "any", false, false, false, 30), "message", [], "any", false, false, false, 30);
        // line 31
        echo "                ";
        $context["transitionMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 31, $this->source); })()), "message_parameters", [], "any", false, false, false, 31), "workflows");
        // line 32
        echo "                ";
        if (((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 32, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32))) {
            // line 33
            echo "                    ";
            // line 34
            echo "                    ";
            $context["transitionMessage"] = "";
            // line 35
            echo "                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "                    <div class=\"alert\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 40
        echo "                <form method=\"post\"
                      data-nohash=\"true\"
                      data-disable-autofocus=\"true\"
                      ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 43, $this->source); })()), "displayType", [], "any", false, false, false, 43) != "dialog")) {
            echo "data-collect=\"true\"";
        }
        // line 44
        echo "                      id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
                      name=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
                      action=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "uri", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
                      class=\"form-dialog oro-workflow-transition-form\"
                      ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 48), "pageComponent", [], "any", true, true, false, 48)) {
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 48, $this->source); })()), "frontendOptions", [], "any", false, false, false, 48), "pageComponent", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
        }
        echo ">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'row');
        echo "
                </form>
                ";
        // line 51
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()));
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/transitionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 51,  232 => 49,  226 => 48,  221 => 46,  217 => 45,  212 => 44,  208 => 43,  203 => 40,  197 => 38,  195 => 37,  192 => 36,  189 => 35,  186 => 34,  184 => 33,  181 => 32,  178 => 31,  175 => 30,  162 => 29,  149 => 53,  147 => 29,  144 => 28,  138 => 25,  135 => 24,  133 => 22,  131 => 19,  128 => 18,  115 => 17,  90 => 16,  75 => 54,  73 => 17,  68 => 16,  63 => 14,  60 => 13,  58 => 9,  56 => 4,  54 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% if saved %}
    {% set widgetResponse = {
        widget: {
            trigger: [{
                eventBroker: 'widget',
                name: 'formSave',
                args: [data|default(null)],
            }],
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"{% block transition_widget_class %}widget-content{% endblock %}\">
        {% block transition_widget %}
            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-error\" role=\"alert\" {{  UI.renderPageComponentAttributes({
                    view: 'oroworkflow/js/app/views/transition/transition-error-view',
                    options: {
                        wid: app.request.get('_wid')
                    }
                }) }}>
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% block transition_form %}
                {% set frontendMessage = transition.frontendOptions.message %}
                {% set transitionMessage = frontendMessage.content|trans(frontendMessage.message_parameters, 'workflows') %}
                {% if transitionMessage == frontendMessage.content %}
                    {# if no translation for message then do not show message #}
                    {% set transitionMessage = '' %}
                {% endif %}

                {% if transitionMessage %}
                    <div class=\"alert\" role=\"alert\">{{ transitionMessage }}</div>
                {% endif %}
                <form method=\"post\"
                      data-nohash=\"true\"
                      data-disable-autofocus=\"true\"
                      {% if transition.displayType != 'dialog' %}data-collect=\"true\"{% endif %}
                      id=\"{{ form.vars.id }}\"
                      name=\"{{ form.vars.name }}\"
                      action=\"{{ app.request.uri }}\"
                      class=\"form-dialog oro-workflow-transition-form\"
                      {% if transition.frontendOptions.pageComponent is defined %}{{ UI.renderPageComponentAttributes(transition.frontendOptions.pageComponent) }}{% endif %}>
                    {{ form_row(form) }}
                </form>
                {{ oro_form_js_validation(form) }}
            {% endblock transition_form %}
        {% endblock transition_widget %}
    </div>
{% endif %}
", "@OroWorkflow/Widget/widget/transitionForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/transitionForm.html.twig");
    }
}
