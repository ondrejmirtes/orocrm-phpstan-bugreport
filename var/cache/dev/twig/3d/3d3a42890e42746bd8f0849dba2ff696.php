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

/* @OroEmail/Email/activityLink.html.twig */
class __TwigTemplate_329809693922da3743e3bdc6d7eeb88e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'action_controll' => [$this, 'block_action_controll'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/activityLink.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/activityLink.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/activityLink.html.twig"));

        // line 1
        $context["options"] = ["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_create", ["to" => ((        // line 4
array_key_exists("email", $context)) ? (twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 4, $this->source); })()), "html")) : ($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getFullNameEmail((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })())))), "entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "aCss" => "dropdown-item no-hash", "iCss" => "fa-envelope", "class" => ((        // line 10
array_key_exists("cssClass", $context)) ? ((isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 10, $this->source); })())) : ("")), "role" => ((        // line 11
array_key_exists("role", $context)) ? ((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 11, $this->source); })())) : ("")), "dataId" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "widget" => ["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "email-dialog", "method" => "POST", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]];
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('action_controll', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_action_controll($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("action_controll", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        // line 34
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/activityLink.html.twig", 34)->unwrap();
        // line 35
        echo "
    ";
        // line 36
        if ($this->extensions['Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension']->isFeatureEnabled("email")) {
            // line 37
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_clientLink", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/activityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  89 => 36,  86 => 35,  83 => 34,  58 => 33,  55 => 32,  53 => 12,  52 => 11,  51 => 10,  50 => 6,  49 => 5,  48 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set options = {
    'dataUrl': path(
        'oro_email_email_create', {
            to: email is defined ? email|escape('html') : oro_get_full_name_email(entity),
            entityClass: oro_class_name(entity, true),
            entityId: entity.id
    }),
    'aCss': 'dropdown-item no-hash',
    'iCss': 'fa-envelope',
    'class': cssClass is defined ? cssClass : '',
    'role': role is defined ? role : '',
    'dataId': entity.id,
    'label' : 'oro.email.send_email'|trans,
    'widget' : {
        'type' : 'dialog',
        'multiple' : true,
        'refresh-widget-alias': 'activity-list-widget',
        'options' : {
            'alias': 'email-dialog',
            'method': 'POST',
            'dialogOptions' : {
                'title' : 'oro.email.send_email'|trans,
                'allowMaximize': true,
                'allowMinimize': true,
                'dblclick': 'maximize',
                'maximizedHeightDecreaseBy': 'minimize-bar',
                'width': 1000
            }
        }
    }
} %}

{% block action_controll %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if feature_enabled('email') %}
        {{ UI.clientLink(options) }}
    {% endif %}
{% endblock %}
", "@OroEmail/Email/activityLink.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/activityLink.html.twig");
    }
}
