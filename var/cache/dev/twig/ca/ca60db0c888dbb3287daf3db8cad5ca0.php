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

/* @OroCall/Call/widget/info.html.twig */
class __TwigTemplate_7ddd1dfdbb9ddc5d58dfd624fba4e7ca extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCall/Call/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCall/Call/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCall/Call/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/widget/info.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content\">
    <div class=\"responsive-block\">
        ";
        // line 8
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && (isset($context["renderContexts"]) || array_key_exists("renderContexts", $context) ? $context["renderContexts"] : (function () { throw new RuntimeError('Variable "renderContexts" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 10
            echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })())], 10, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 13
        echo "        ";
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.subject.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "subject", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
        ";
        // line 15
        echo "        ";
        echo twig_call_macro($macros["ui"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.notes.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "notes", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
        ";
        // line 16
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.call_date_time.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "callDateTime", [], "any", false, false, false, 16))], 16, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"responsive-block\">
        ";
        // line 19
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.phone_number.label"), twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "phoneNumber", [], "any", false, false, false, 19), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext())], 19, $context, $this->getSourceContext());
        echo "
        ";
        // line 20
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.direction.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "direction", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "direction", [], "any", false, false, false, 20), "label", [], "any", false, false, false, 20)) : (null))], 20, $context, $this->getSourceContext());
        echo "
        ";
        // line 22
        echo "        ";
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.duration.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDuration(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "duration", [], "any", false, false, false, 22), ["default" => true])], 22, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"responsive-block\">
        ";
        // line 25
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCall/Call/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  93 => 22,  89 => 20,  85 => 19,  79 => 16,  74 => 15,  69 => 13,  63 => 10,  60 => 9,  57 => 8,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroActivity/macros.html.twig' as AC %}

<div class=\"widget-content form-horizontal box-content\">
    <div class=\"responsive-block\">
        {# Display contexts targets in the activity list item view #}
        {% if renderContexts is defined and renderContexts %}
            <div class=\"activity-context-activity-list\">
                {{ AC.activity_contexts(entity) }}
            </div>
        {% endif %}
        {{ ui.renderProperty('oro.call.subject.label'|trans, entity.subject) }}
        {#{{ ui.renderProperty('oro.call.call_status.label'|trans, entity.callStatus ? entity.callStatus.label : null) }}#}
        {{ ui.renderSwitchableHtmlProperty('oro.call.notes.label'|trans, entity.notes) }}
        {{ ui.renderProperty('oro.call.call_date_time.label'|trans, entity.callDateTime|oro_format_datetime) }}
    </div>
    <div class=\"responsive-block\">
        {{ ui.renderHtmlProperty('oro.call.phone_number.label'|trans, ui.renderPhoneWithActions(entity.phoneNumber, entity)) }}
        {{ ui.renderProperty('oro.call.direction.label'|trans, entity.direction ? entity.direction.label : null) }}
        {# Don't use time formatting here because it's a time interval #}
        {{ ui.renderProperty('oro.call.duration.label'|trans, entity.duration|oro_format_duration({default: true})) }}
    </div>
    <div class=\"responsive-block\">
        {{ entityConfig.renderDynamicFields(entity) }}
    </div>
</div>
", "@OroCall/Call/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-call-bundle/Resources/views/Call/widget/info.html.twig");
    }
}
