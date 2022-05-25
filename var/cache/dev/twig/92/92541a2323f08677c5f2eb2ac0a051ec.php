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

/* @OroCall/Call/activityLink.html.twig */
class __TwigTemplate_842c092069bc276e53f2d3d516d1746e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCall/Call/activityLink.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/activityLink.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/activityLink.html.twig"));

        // line 1
        $context["options"] = ["dataUrl" => (((        // line 2
array_key_exists("entity", $context) &&  !(null === (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })())))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_create", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "phone" => ((        // line 7
array_key_exists("phone", $context)) ? (twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 7, $this->source); })()), "html")) : (null))])) : (null)), "class" => ((        // line 10
array_key_exists("cssClass", $context)) ? ((isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 10, $this->source); })())) : ("")), "role" => ((        // line 11
array_key_exists("role", $context)) ? ((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 11, $this->source); })())) : ("")), "aCss" => "dropdown-item no-hash", "iCss" => "fa-phone-square", "dataId" => (( !twig_test_empty(        // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)) : (null)), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.log_call"), "widget" => ["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "call-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.log_call"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]];
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('action_controll', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_action_controll($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("action_controll", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        // line 35
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCall/Call/activityLink.html.twig", 35)->unwrap();
        // line 36
        echo "
    ";
        // line 37
        echo twig_call_macro($macros["UI"], "macro_clientLink", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCall/Call/activityLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  87 => 36,  84 => 35,  59 => 34,  56 => 33,  54 => 14,  53 => 11,  52 => 10,  51 => 7,  50 => 6,  49 => 5,  48 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set options = {
    'dataUrl': entity is defined and entity is not null
        ? path(
            'oro_call_create', {
            entityClass: oro_class_name(entity, true),
            entityId: entity.id,
            phone: phone is defined ? phone|escape('html') : null
        })
        : null,
    'class': cssClass is defined ? cssClass : '',
    'role': role is defined ? role : '',
    'aCss': 'dropdown-item no-hash',
    'iCss': 'fa-phone-square',
    'dataId': entity is not empty ? entity.id : null,
    'label' : 'oro.call.log_call'|trans,
    'widget' : {
        'type' : 'dialog',
        'multiple' : true,
        'refresh-widget-alias': 'activity-list-widget',
        'options' : {
            'alias': 'call-dialog',
            'dialogOptions' : {
                'title' : 'oro.call.log_call'|trans,
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

    {{ UI.clientLink(options) }}
{% endblock %}
", "@OroCall/Call/activityLink.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-call-bundle/Resources/views/Call/activityLink.html.twig");
    }
}
