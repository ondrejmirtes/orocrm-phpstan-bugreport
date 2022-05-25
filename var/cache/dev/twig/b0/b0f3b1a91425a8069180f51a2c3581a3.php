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

/* @OroHangoutsCall/Call/action/inviteHangoutButton.html.twig */
class __TwigTemplate_5958cb4787f04c5c18c06ba6a322c1a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action_controll' => [$this, 'block_action_controll'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroCall/Call/activityLink.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig"));

        $this->parent = $this->loadTemplate("@OroCall/Call/activityLink.html.twig", "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_action_controll($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("action_controll", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        // line 4
        echo "    ";
        $context["cssClass"] = "btn icons-holder-text";
        // line 5
        echo "
    ";
        // line 6
        if (array_key_exists("phone", $context)) {
            // line 7
            echo "        ";
            $context["hangoutOptions"] = ["invites" => [0 => ["name" => (( !twig_test_empty(            // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()))) ? (twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "html")) : ("")), "id" => (( !twig_test_empty(            // line 10
(isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 10, $this->source); })()))) ? (twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 10, $this->source); })()), "html")) : ("")), "invite_type" => "PHONE"]]];
            // line 14
            echo "    ";
        } elseif (array_key_exists("email", $context)) {
            // line 15
            echo "        ";
            $context["hangoutOptions"] = ["invites" => [0 => ["name" => (( !twig_test_empty(            // line 17
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()))) ? (twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "html")) : ("")), "id" => (( !twig_test_empty(            // line 18
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 18, $this->source); })()))) ? (twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 18, $this->source); })()), "html")) : ("")), "invite_type" => "EMAIL"]]];
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ((array_key_exists("entity", $context) && $this->extensions['Oro\Bundle\CallBundle\Twig\OroCallExtension']->isCallLogApplicable((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })())))) {
            // line 25
            echo "        ";
            $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_create", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(            // line 26
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "phone" => ((            // line 28
array_key_exists("phone", $context)) ? (twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 28, $this->source); })()), "html")) : (((array_key_exists("email", $context)) ? (twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 28, $this->source); })()), "html")) : (null))))]);
            // line 30
            echo "
        ";
            // line 32
            echo "        ";
            $context["extraComponentOptions"] = ["onAppStartOptions" => ["widgetComponentOptions" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 34, $this->source); })()), "widget", [], "any", false, false, false, 34), ["options" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 35, $this->source); })()), "widget", [], "any", false, false, false, 35), "options", [], "any", false, false, false, 35), ["url" =>             // line 36
(isset($context["dataUrl"]) || array_key_exists("dataUrl", $context) ? $context["dataUrl"] : (function () { throw new RuntimeError('Variable "dataUrl" does not exist.', 36, $this->source); })())])]), "targetComponentName" => "log-hangout-call-component"]];
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->loadTemplate("@OroHangoutsCall/inviteHangoutLink.html.twig", "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig", 44)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  124 => 43,  121 => 42,  119 => 36,  118 => 35,  117 => 34,  115 => 32,  112 => 30,  110 => 28,  109 => 27,  108 => 26,  106 => 25,  104 => 24,  101 => 23,  98 => 22,  96 => 18,  95 => 17,  93 => 15,  90 => 14,  88 => 10,  87 => 9,  85 => 7,  83 => 6,  80 => 5,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@OroCall/Call/activityLink.html.twig\" %}

{% block action_controll %}
    {% set cssClass = 'btn icons-holder-text' %}

    {% if phone is defined %}
        {% set hangoutOptions = {
            invites: [{
                name: entity is not empty ? entity|escape('html') : '',
                id: phone is not empty ? phone|escape('html') : '',
                invite_type: 'PHONE'
            }]
        } %}
    {% elseif email is defined %}
        {% set hangoutOptions = {
            invites: [{
                name: entity is not empty ? entity|escape('html') : '',
                id: email is not empty ? email|escape('html') : '',
                invite_type: 'EMAIL',
            }]
        } %}
    {% endif %}

    {% if entity is defined and isCallLogApplicable(entity) %}
        {% set dataUrl = path('oro_call_create', {
            entityClass: oro_class_name(entity, true),
            entityId: entity.id,
            phone: phone is defined ? phone|escape('html') : (email is defined ? email|escape('html') : null)
        }) %}

        {# options -- are configuration for log-call button #}
        {% set extraComponentOptions = {
            onAppStartOptions: {
                widgetComponentOptions: options.widget|merge({
                    options: options.widget.options|merge({
                        url: dataUrl
                    })
                }),
                targetComponentName: 'log-hangout-call-component'
            }
        } %}
    {% endif %}

    {% include \"@OroHangoutsCall/inviteHangoutLink.html.twig\" %}
{% endblock %}
", "@OroHangoutsCall/Call/action/inviteHangoutButton.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/Call/action/inviteHangoutButton.html.twig");
    }
}
