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

/* @OroCalendar/Dashboard/myCalendar.html.twig */
class __TwigTemplate_70eb5bf2a905b2175e1a3b9c1f84799f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroDashboard/Dashboard/widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Dashboard/myCalendar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Dashboard/myCalendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Dashboard/myCalendar.html.twig"));

        // line 2
        $macros["calendarMacros"] = $this->macros["calendarMacros"] = $this->loadTemplate("@OroCalendar/macros.html.twig", "@OroCalendar/Dashboard/myCalendar.html.twig", 2)->unwrap();
        // line 3
        $macros["calendarTemplates"] = $this->macros["calendarTemplates"] = $this->loadTemplate("@OroCalendar/templates.html.twig", "@OroCalendar/Dashboard/myCalendar.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@OroDashboard/Dashboard/widget.html.twig", "@OroCalendar/Dashboard/myCalendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $context["dashboardCalendarOptions"] = ["widgetId" =>         // line 7
(isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 7, $this->source); })()), "calendar" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "aspectRatio" => 2, "calendarOptions" =>         // line 10
(isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })()), "eventsItemsJson" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_calendarevents", ["calendar" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "start" => twig_date_format_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 11, $this->source); })()), "c"), "end" => twig_date_format_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 11, $this->source); })()), "c"), "subordinate" => true])), "connectionsItemsJson" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_calendar_connections", ["id" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)])), "eventsOptions" => ["defaultDate" => twig_date_format_filter($this->env, "now", "c", $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => ("#template-view-calendar-event-" .         // line 16
(isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 16, $this->source); })())), "itemFormTemplateSelector" => ("#template-calendar-event-" .         // line 17
(isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 17, $this->source); })())), "defaultView" => "agendaDay", "firstHour" =>         // line 19
(isset($context["firstHour"]) || array_key_exists("firstHour", $context) ? $context["firstHour"] : (function () { throw new RuntimeError('Variable "firstHour" does not exist.', 19, $this->source); })()), "aspectRatio" => 2, "recoverView" => false, "allDayHtml" => twig_call_macro($macros["calendarMacros"], "macro_briefDateCell", ["now"], 22, $context, $this->getSourceContext()), "enableAttendeesInvitations" => $this->extensions['Oro\Bundle\CalendarBundle\Twig\AttendeesExtension']->isAttendeesInvitationEnabled()], "connectionsOptions" => [], "colorManagerOptions" => ["colors" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_calendar.calendar_colors")], "invitationStatuses" => [0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")]];
        // line 36
        echo "    <div class=\"calendar-dashboard-widget\" data-page-component-module=\"orocalendar/js/app/components/dashboard-calendar-component\"
         data-page-component-options=\"";
        // line 37
        echo twig_escape_filter($this->env, json_encode((isset($context["dashboardCalendarOptions"]) || array_key_exists("dashboardCalendarOptions", $context) ? $context["dashboardCalendarOptions"] : (function () { throw new RuntimeError('Variable "dashboardCalendarOptions" does not exist.', 37, $this->source); })())), "html", null, true);
        echo "\">
        <div class=\"calendar-events\"></div>
    </div>
    ";
        // line 40
        echo twig_call_macro($macros["calendarTemplates"], "macro_calendar_event_view_template", [("template-view-calendar-event-" . (isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 40, $this->source); })()))], 40, $context, $this->getSourceContext());
        echo "
    ";
        // line 41
        echo twig_call_macro($macros["calendarTemplates"], "macro_calendar_event_form_template", [("template-calendar-event-" . (isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 41, $this->source); })())), (isset($context["event_form"]) || array_key_exists("event_form", $context) ? $context["event_form"] : (function () { throw new RuntimeError('Variable "event_form" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("actions", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 45
        echo "    ";
        $context["actions"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.calendar.new_event"), "data" => ["action-name" => "new-event"]], 1 => ["type" => "link", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.calendar.view_calendar"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_view_default")]];
        // line 56
        echo "
    ";
        // line 57
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Dashboard/myCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  138 => 56,  135 => 45,  122 => 44,  107 => 41,  103 => 40,  97 => 37,  94 => 36,  92 => 19,  91 => 17,  90 => 16,  89 => 12,  88 => 11,  87 => 10,  86 => 8,  85 => 7,  83 => 6,  70 => 5,  56 => 1,  54 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroDashboard/Dashboard/widget.html.twig' %}
{% import '@OroCalendar/macros.html.twig' as calendarMacros %}
{% import '@OroCalendar/templates.html.twig' as calendarTemplates %}

{% block content %}
    {%  set dashboardCalendarOptions = {
            widgetId: widgetId,
            calendar: entity.id,
            aspectRatio: 2,
            calendarOptions: calendar,
            eventsItemsJson: render(path('oro_api_get_calendarevents', {calendar: entity.id, start: startDate|date('c'), end: endDate|date('c'), subordinate: true})),
            connectionsItemsJson: render(path('oro_api_get_calendar_connections', {id: entity.id})),
            eventsOptions: {
                'defaultDate': 'now'|date('c', oro_timezone()),
                'containerSelector': '.calendar-events',
                'itemViewTemplateSelector': '#template-view-calendar-event-' ~ widgetId,
                'itemFormTemplateSelector': '#template-calendar-event-' ~ widgetId,
                'defaultView': 'agendaDay',
                'firstHour': firstHour,
                'aspectRatio': 2,
                'recoverView': false,
                'allDayHtml': calendarMacros.briefDateCell('now'),
                'enableAttendeesInvitations': is_attendees_invitation_enabled()
            },
            connectionsOptions: {},
            colorManagerOptions: {
                colors: oro_config_value('oro_calendar.calendar_colors')
            },
            invitationStatuses: [
                constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_ACCEPTED'),
                constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_TENTATIVE'),
                constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED'),
            ]
        }
    %}
    <div class=\"calendar-dashboard-widget\" data-page-component-module=\"orocalendar/js/app/components/dashboard-calendar-component\"
         data-page-component-options=\"{{ dashboardCalendarOptions | json_encode }}\">
        <div class=\"calendar-events\"></div>
    </div>
    {{ calendarTemplates.calendar_event_view_template('template-view-calendar-event-' ~ widgetId) }}
    {{ calendarTemplates.calendar_event_form_template('template-calendar-event-' ~ widgetId, event_form) }}
{% endblock %}

{% block actions %}
    {% set actions = [
        {
            'label': 'oro.dashboard.calendar.new_event'|trans,
            'data': {'action-name': 'new-event'}
        },
        {
            'type': 'link',
            'label': 'oro.dashboard.calendar.view_calendar'|trans,
            'url': path('oro_calendar_view_default')
        }
    ] %}

    {{ parent() }}
{% endblock %}
", "@OroCalendar/Dashboard/myCalendar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Dashboard/myCalendar.html.twig");
    }
}
