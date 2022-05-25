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

/* @OroCalendar/SystemCalendarEvent/widget/info.html.twig */
class __TwigTemplate_c82a324901eea27f4f9e9d842194ce09 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/SystemCalendarEvent/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendarEvent/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/SystemCalendarEvent/widget/info.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        ";
        // line 7
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && (isset($context["renderContexts"]) || array_key_exists("renderContexts", $context) ? $context["renderContexts"] : (function () { throw new RuntimeError('Variable "renderContexts" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 9
            echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 9, $this->source); })()), true], 9, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 12
        echo "        ";
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "
        ";
        // line 13
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
        ";
        // line 14
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.start.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "start", [], "any", false, false, false, 14))], 14, $context, $this->getSourceContext());
        echo "
        ";
        // line 15
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.end.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "end", [], "any", false, false, false, 15))], 15, $context, $this->getSourceContext());
        echo "
        ";
        // line 16
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.all_day.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "allDay", [], "any", false, false, false, 16)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 16, $context, $this->getSourceContext());
        echo "
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "recurrence", [], "any", false, false, false, 17)) {
            // line 18
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.label"), $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "recurrence", [], "any", false, false, false, 18))], 18, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 20
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "recurringEvent", [], "any", false, false, false, 20)) {
            // line 21
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.exception.label"), $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "recurringEvent", [], "any", false, false, false, 21), "recurrence", [], "any", false, false, false, 21))], 21, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 23
        echo "    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/SystemCalendarEvent/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  99 => 21,  96 => 20,  90 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  67 => 12,  61 => 9,  58 => 8,  55 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroActivity/macros.html.twig' as AC %}

<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        {# Display contexts targets in the activity list item view #}
        {% if renderContexts is defined and renderContexts %}
            <div class=\"activity-context-activity-list\">
                {{ AC.activity_contexts(entity, target, true) }}
            </div>
        {% endif %}
        {{ UI.renderProperty('oro.calendar.calendarevent.title.label'|trans, entity.title) }}
        {{ UI.renderHtmlProperty('oro.calendar.calendarevent.description.label'|trans, entity.description) }}
        {{ UI.renderProperty('oro.calendar.calendarevent.start.label'|trans, entity.start|oro_format_datetime) }}
        {{ UI.renderProperty('oro.calendar.calendarevent.end.label'|trans, entity.end|oro_format_datetime) }}
        {{ UI.renderProperty('oro.calendar.calendarevent.all_day.label'|trans, entity.allDay ? 'Yes'|trans : 'No'|trans) }}
        {% if entity.recurrence %}
            {{ UI.renderProperty('oro.calendar.calendarevent.recurrence.label'|trans, get_recurrence_text_value(entity.recurrence)) }}
        {% endif %}
        {% if entity.recurringEvent %}
            {{ UI.renderProperty('oro.calendar.calendarevent.recurrence.exception.label'|trans, get_recurrence_text_value(entity.recurringEvent.recurrence)) }}
        {% endif %}
    </div>
</div>
", "@OroCalendar/SystemCalendarEvent/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/SystemCalendarEvent/widget/info.html.twig");
    }
}
