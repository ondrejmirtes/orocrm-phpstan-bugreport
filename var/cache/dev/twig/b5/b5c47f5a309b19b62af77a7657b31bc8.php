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

/* @OroWorkflow/Button/transitionButton.html.twig */
class __TwigTemplate_75ec3ab495a679eec9f81d3e2c897eaa extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Button/transitionButton.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Button/transitionButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Button/transitionButton.html.twig"));

        // line 1
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/Button/transitionButton.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 4
        $context["transitionMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 4, $this->source); })()), "transition", [], "any", false, false, false, 4), "message", [], "any", false, false, false, 4), [], twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 4, $this->source); })()), "translationDomain", [], "any", false, false, false, 4));
        // line 5
        if (((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 5, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 5, $this->source); })()), "transition", [], "any", false, false, false, 5), "message", [], "any", false, false, false, 5))) {
            // line 6
            echo "    ";
            // line 7
            echo "    ";
            $context["transitionMessage"] = "";
        }
        // line 9
        echo "
";
        // line 10
        $context["transitionData"] = ["message" => twig_nl2br(twig_escape_filter($this->env,         // line 11
(isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 11, $this->source); })()), "html", null, true)), "transition-condition-messages" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 12, $this->source); })()), "buttonContext", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12), "enabled" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 13, $this->source); })()), "buttonContext", [], "any", false, false, false, 13), "enabled", [], "any", false, false, false, 13), "transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 14
(isset($context["executionRoute"]) || array_key_exists("executionRoute", $context) ? $context["executionRoute"] : (function () { throw new RuntimeError('Variable "executionRoute" does not exist.', 14, $this->source); })()), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 14, $this->source); })()))];
        // line 16
        echo "
";
        // line 17
        $context["transitionData"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["frontendOptions"] ?? null), "data", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["frontendOptions"] ?? null), "data", [], "any", false, false, false, 17), [])) : ([])), (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 17, $this->source); })()));
        // line 18
        if ((isset($context["hasForm"]) || array_key_exists("hasForm", $context) ? $context["hasForm"] : (function () { throw new RuntimeError('Variable "hasForm" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "    ";
            if ((isset($context["showDialog"]) || array_key_exists("showDialog", $context) ? $context["showDialog"] : (function () { throw new RuntimeError('Variable "showDialog" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "        ";
                $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 20, $this->source); })()), ["dialog-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["dialogRoute"]) || array_key_exists("dialogRoute", $context) ? $context["dialogRoute"] : (function () { throw new RuntimeError('Variable "dialogRoute" does not exist.', 20, $this->source); })()), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 20, $this->source); })()))]);
                // line 21
                echo "    ";
            } else {
                // line 22
                echo "        ";
                $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 22, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["dialogRoute"]) || array_key_exists("dialogRoute", $context) ? $context["dialogRoute"] : (function () { throw new RuntimeError('Variable "dialogRoute" does not exist.', 22, $this->source); })()), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 22, $this->source); })()))]);
                // line 23
                echo "    ";
            }
        }
        // line 25
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 25, $this->source); })()), false)) : (false))) {
            echo "<div class=\"pull-left btn-group icons-holder\">";
        }
        // line 26
        echo "    ";
        echo twig_call_macro($macros["workflowMacros"], "macro_renderTransitionButton", [twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 27, $this->source); })()), "workflow", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 28, $this->source); })()), "transition", [], "any", false, false, false, 28), ((        // line 29
array_key_exists("workflowItem", $context)) ? (_twig_default_filter((isset($context["workflowItem"]) || array_key_exists("workflowItem", $context) ? $context["workflowItem"] : (function () { throw new RuntimeError('Variable "workflowItem" does not exist.', 29, $this->source); })()), null)) : (null)),         // line 30
(isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 30, $this->source); })()), ((        // line 31
array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 31, $this->source); })()), false)) : (false)), ((        // line 32
array_key_exists("noIcon", $context)) ? (_twig_default_filter((isset($context["noIcon"]) || array_key_exists("noIcon", $context) ? $context["noIcon"] : (function () { throw new RuntimeError('Variable "noIcon" does not exist.', 32, $this->source); })()), false)) : (false)), ((        // line 33
array_key_exists("noIconText", $context)) ? (_twig_default_filter((isset($context["noIconText"]) || array_key_exists("noIconText", $context) ? $context["noIconText"] : (function () { throw new RuntimeError('Variable "noIconText" does not exist.', 33, $this->source); })()), false)) : (false)), ((        // line 34
array_key_exists("aClass", $context)) ? (_twig_default_filter((isset($context["aClass"]) || array_key_exists("aClass", $context) ? $context["aClass"] : (function () { throw new RuntimeError('Variable "aClass" does not exist.', 34, $this->source); })()), "")) : (""))], 26, $context, $this->getSourceContext());
        // line 35
        echo "
";
        // line 36
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 36, $this->source); })()), false)) : (false))) {
            echo "</div>";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Button/transitionButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  108 => 35,  106 => 34,  105 => 33,  104 => 32,  103 => 31,  102 => 30,  101 => 29,  100 => 28,  99 => 27,  97 => 26,  93 => 25,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  75 => 18,  73 => 17,  70 => 16,  68 => 14,  67 => 13,  66 => 12,  65 => 11,  64 => 10,  61 => 9,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

{# Show button for start or transit workflow #}
{% set transitionMessage = button.transition.message|trans({}, button.translationDomain) %}
{% if transitionMessage == button.transition.message %}
    {# if no translation for message then do not show message #}
    {% set transitionMessage = '' %}
{% endif %}

{% set transitionData = {
    'message': transitionMessage|nl2br,
    'transition-condition-messages': button.buttonContext.errors,
    'enabled': button.buttonContext.enabled,
    'transition-url': path(executionRoute, routeParams),
} %}

{% set transitionData = frontendOptions.data|default({})|merge(transitionData) %}
{% if hasForm %}
    {% if showDialog %}
        {% set transitionData = transitionData|merge({'dialog-url': path(dialogRoute, routeParams) }) %}
    {% else %}
        {% set transitionData = transitionData|merge({'transition-url': path(dialogRoute, routeParams) }) %}
    {% endif %}
{% endif %}
{% if not onlyLink|default(false) %}<div class=\"pull-left btn-group icons-holder\">{% endif %}
    {{ workflowMacros.renderTransitionButton(
        button.workflow,
        button.transition,
        workflowItem|default(null),
        transitionData,
        onlyLink|default(false),
        noIcon|default(false),
        noIconText|default(false),
        aClass|default('')
    ) }}
{% if not onlyLink|default(false) %}</div>{% endif %}
", "@OroWorkflow/Button/transitionButton.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Button/transitionButton.html.twig");
    }
}
