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

/* @OroHangoutsCall/Call/updateActions.html.twig */
class __TwigTemplate_a42900cd5b982d998a3f039ee47207b0 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/Call/updateActions.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/updateActions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/updateActions.html.twig"));

        // line 1
        $macros["HangoutsCall"] = $this->macros["HangoutsCall"] = $this->loadTemplate("@OroHangoutsCall/macros.html.twig", "@OroHangoutsCall/Call/updateActions.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("hangoutOptions", $context)) {
            // line 4
            echo "    ";
            $context["hangoutOptions"] = [];
        }
        // line 6
        if ((array_key_exists("entity", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "phoneNumber", [], "any", false, false, false, 6)))) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            if (preg_match("{^.+@.+..+\$}", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "phoneNumber", [], "any", false, false, false, 8))) {
                // line 9
                echo "        ";
                $context["hangoutOptions"] = twig_array_merge((isset($context["hangoutOptions"]) || array_key_exists("hangoutOptions", $context) ? $context["hangoutOptions"] : (function () { throw new RuntimeError('Variable "hangoutOptions" does not exist.', 9, $this->source); })()), ["invites" => [0 => ["id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "phoneNumber", [], "any", false, false, false, 11), "html"), "invite_type" => "EMAIL"]]]);
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["hangoutOptions"] = twig_array_merge((isset($context["hangoutOptions"]) || array_key_exists("hangoutOptions", $context) ? $context["hangoutOptions"] : (function () { throw new RuntimeError('Variable "hangoutOptions" does not exist.', 16, $this->source); })()), ["invites" => [0 => ["id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "phoneNumber", [], "any", false, false, false, 18), "html"), "invite_type" => "PHONE"]]]);
                // line 22
                echo "    ";
            }
        }
        // line 24
        echo "
";
        // line 25
        echo twig_call_macro($macros["HangoutsCall"], "macro_renderStartButton", [["class" => "action btn-group", "componentModule" => "orohangoutscall/js/app/components/log-call-component", "componentName" => "log-hangout-call-component", "dataAttributes" => ["action-name" => "hangout-call"], "hangoutOptions" =>         // line 32
(isset($context["hangoutOptions"]) || array_key_exists("hangoutOptions", $context) ? $context["hangoutOptions"] : (function () { throw new RuntimeError('Variable "hangoutOptions" does not exist.', 32, $this->source); })())]], 25, $context, $this->getSourceContext());
        // line 33
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/Call/updateActions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  83 => 32,  82 => 25,  79 => 24,  75 => 22,  73 => 18,  71 => 16,  68 => 15,  66 => 11,  64 => 9,  61 => 8,  59 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroHangoutsCall/macros.html.twig' as HangoutsCall %}

{% if hangoutOptions is not defined %}
    {% set hangoutOptions = {} %}
{% endif %}
{% if entity is defined and entity.phoneNumber is not empty %}
    {# simple check if a source of a call is an email (because it can be other than phone number) #}
    {% if entity.phoneNumber matches '{^.+\\@.+\\..+\$}' %}
        {% set hangoutOptions = hangoutOptions|merge({
            invites: [{
                id: entity.phoneNumber|escape('html'),
                invite_type: 'EMAIL'
            }]
        }) %}
    {% else %}
        {% set hangoutOptions = hangoutOptions|merge({
            invites: [{
                id: entity.phoneNumber|escape('html'),
                invite_type: 'PHONE'
            }]
        }) %}
    {% endif %}
{% endif %}

{{ HangoutsCall.renderStartButton({
    class: 'action btn-group',
    componentModule: 'orohangoutscall/js/app/components/log-call-component',
    componentName: 'log-hangout-call-component',
    dataAttributes: {
        'action-name': 'hangout-call'
    },
    hangoutOptions: hangoutOptions
}) }}
", "@OroHangoutsCall/Call/updateActions.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/Call/updateActions.html.twig");
    }
}
