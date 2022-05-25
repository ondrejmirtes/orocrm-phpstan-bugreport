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

/* @OroCalendar/templates.html.twig */
class __TwigTemplate_f64a0affa1c17a96cfbd5a1d5df625b6 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/templates.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/templates.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/templates.html.twig"));

        // line 124
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function macro_rawLink($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "rawLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "rawLink"));

            // line 27
            echo "        ";
            ob_start();
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), "path", [], "any", false, false, false, 28), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), "data", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                echo " data-";
                echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 28, $this->source); })()), "label", [], "any", false, false, false, 28)), "html", null, true);
            echo "</a>
        ";
            $___internal_parse_77_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            echo twig_spaceless($___internal_parse_77_);
            // line 30
            echo "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1
    public function macro_calendar_event_view_template($__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_view_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_view_template"));

            // line 2
            echo "
<script type=\"text/template\" id=\"activity-context-activity-list\">
    <div class=\"context-item\" style=\"border: none\" data-cid=\"<%- entity.cid %>\">
        <span data-id=\"<%- entity.get('targetId') %>\">
            <span class=\"context-icon <%- entity.get('icon') %>\" aria-hidden=\"true\"></span>

            <% if (entity.get('link')) { %>
                <a href=\"<%- entity.get('link') %>\">
                    <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                </a>
            <% } else { %>
                <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
            <% } %>
            <% if (editable) { %>
                <span class=\"fa-close\" aria-hidden=\"true\" data-role=\"delete-item\"></span>
            <% } %>
        </span>
    </div>
</script>

<script type=\"text/html\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\">
    ";
            // line 23
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/templates.html.twig", 23)->unwrap();
            // line 24
            echo "    ";
            $macros["invitations"] = $this->loadTemplate("@OroCalendar/invitations.html.twig", "@OroCalendar/templates.html.twig", 24)->unwrap();
            // line 25
            echo "    ";
            $macros["templates"] = $this;
            // line 26
            echo "    ";
            // line 31
            echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
            // line 34
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.title.label"), "<%= formatter.string(title) %>"], 34, $context, $this->getSourceContext());
            echo "
                ";
            // line 35
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.description.label"), "<div class=\"cms-content cms-content--no-scroll\"><%= formatter.html(description) %></div>"], 35, $context, $this->getSourceContext());
            echo "
                ";
            // line 36
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.start.label"), "<%= formatter.dateTime(start) %>"], 36, $context, $this->getSourceContext());
            echo "
                ";
            // line 37
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.end.label"), "<%= formatter.dateTime(end) %>"], 37, $context, $this->getSourceContext());
            echo "
                ";
            // line 38
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.all_day.label"), "<%= formatter.bool(allDay) %>"], 38, $context, $this->getSourceContext());
            echo "
                ";
            // line 39
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.organizer.label"), "<%= organizerHTML %>"], 39, $context, $this->getSourceContext());
            echo "
                <% if (recurrence) { %>
                    ";
            // line 41
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.label"), "<%= formatter.string(recurrencePattern) %>"], 41, $context, $this->getSourceContext());
            echo "
                <% } %>
                <% if (recurringEventId && recurrencePattern) { %>
                    ";
            // line 44
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.exception.label"), "<%= formatter.string(recurrencePattern) %>"], 44, $context, $this->getSourceContext());
            echo "
                <% } %>

                <% var attendeesView = _.map(attendees, function (attendee) {
                    var attendeeName = attendee.displayName;
                    if (attendee.fullName) {
                        attendeeName = attendee.fullName;
                    }

                    if (attendee.email) {
                        attendeeName = attendeeName ? attendeeName + ' (' + attendee.email + ')' : attendee.email;
                    }

                    return attendeeName;
                }); %>
                <% if (attendeesView.length > 0) { %>
                    ";
            // line 60
            echo twig_call_macro($macros["UI"], "macro_renderAttribute", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.attendees.label"), "<div class=\"calendar-event-attendees-widget\"><%- attendeesView.join(\", \") %></div>"], 60, $context, $this->getSourceContext());
            echo "
                <% } %>
                <% if (editableInvitationStatus) { %>
                    <% var properties = []; %>
                    ";
            // line 64
            $context["statuses"] = [0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")];
            // line 69
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 70
                echo "                        <% if (invitationStatus !== \"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\") { %>
                            <% var link='";
                // line 71
                echo twig_call_macro($macros["templates"], "macro_rawLink", [["label" => twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [                // line 73
$context["status"]], 73, $context, $this->getSourceContext()), "title" => twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [                // line 74
$context["status"]], 74, $context, $this->getSourceContext()), "path" => "%path%", "data" => ["page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => json_encode(["view" => "orocalendar/js/app/views/change-status-view", "triggerEventName" => "widget_success:attendee_status:change"])]]], 72, $context, $this->getSourceContext());
                // line 84
                echo "';
                                link = link.replace('%path%', invitationUrls[\"";
                // line 85
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\"]);
                                properties.push(link);
                            %>
                        <% } else { %>
                            <% properties.push('";
                // line 89
                echo twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [$context["status"]], 89, $context, $this->getSourceContext());
                echo "'); %>
                        <% } %>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    <div class=\"invitation-response\">
                        ";
            // line 93
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.action.going_status.label"), "<%= formatter.html(properties.join(\"&nbsp\")) %>"], 93, $context, $this->getSourceContext());
            echo "
                    </div>
                <% } %>

                <div class=\"activity-context-activity\">
                ";
            // line 98
            echo twig_call_macro($macros["UI"], "macro_renderAttribute", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.label"), "<div class=\"activity-context-activity-items\"></div>"], 98, $context, $this->getSourceContext());
            echo "
                </div>
                ";
            // line 100
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("calendar_event_widget_view_additional_properties", $context)) ? (_twig_default_filter((isset($context["calendar_event_widget_view_additional_properties"]) || array_key_exists("calendar_event_widget_view_additional_properties", $context) ? $context["calendar_event_widget_view_additional_properties"] : (function () { throw new RuntimeError('Variable "calendar_event_widget_view_additional_properties" does not exist.', 100, $this->source); })()), "calendar_event_widget_view_additional_properties")) : ("calendar_event_widget_view_additional_properties")), array());
            // line 101
            echo "            </div>
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <% if (id != null && removable) { %>
                ";
            // line 104
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.delete_event.confirmation"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.delete_event.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "data" => ["action-name" => "delete", "url" => "oro_calendar_event_delete"]]], 105, $context, $this->getSourceContext());
            // line 113
            echo "
                <% } %>
                <% if (id == null || (id != null && editable)) { %>
                <button class=\"btn\" type=\"button\" data-action-name=\"edit\">";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.edit"), "html", null, true);
            echo "</button>
                <% } %>
                ";
            // line 118
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("calendar_event_widget_view_actions_jstemplate", $context)) ? (_twig_default_filter((isset($context["calendar_event_widget_view_actions_jstemplate"]) || array_key_exists("calendar_event_widget_view_actions_jstemplate", $context) ? $context["calendar_event_widget_view_actions_jstemplate"] : (function () { throw new RuntimeError('Variable "calendar_event_widget_view_actions_jstemplate" does not exist.', 118, $this->source); })()), "calendar_event_widget_view_actions_jstemplate")) : ("calendar_event_widget_view_actions_jstemplate")), array());
            // line 119
            echo "            </div>
        </div>
    </div>
</script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 125
    public function macro_calendar_event_form_template($__id__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_form_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_form_template"));

            // line 126
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 126, $this->source); })()), "html", null, true);
            echo "\">
    ";
            // line 127
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/templates.html.twig", 127)->unwrap();
            // line 128
            echo "    ";
            $macros["invitations"] = $this->loadTemplate("@OroCalendar/invitations.html.twig", "@OroCalendar/templates.html.twig", 128)->unwrap();
            // line 129
            echo "    ";
            $context["calendarEventDateRange"] = ["module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => ["nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()]];
            // line 136
            echo "    ";
            $context["calendarEventRecurrence"] = ["module" => "orocalendar/js/app/components/calendar-event-recurrence-component", "name" => "calendar-event-recurrence", "options" => ["inputNamePrefixes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 140
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "recurrence", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140), "full_name", [], "any", false, false, false, 140)]];
            // line 143
            echo "    ";
            ob_start();
            // line 144
            echo "        <div class=\"control-group-container\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["calendarEventDateRange"]) || array_key_exists("calendarEventDateRange", $context) ? $context["calendarEventDateRange"] : (function () { throw new RuntimeError('Variable "calendarEventDateRange" does not exist.', 144, $this->source); })())], 144, $context, $this->getSourceContext());
            echo ">
            ";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "start", [], "any", false, false, false, 145), 'row');
            echo "
            ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "end", [], "any", false, false, false, 146), 'row');
            echo "
            ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "allDay", [], "any", false, false, false, 147), 'row');
            echo "
        </div>
        <% if (editAsException || recurringEventId) { %>
            ";
            // line 150
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.exception.label"), "<%= recurrencePattern %>"], 150, $context, $this->getSourceContext());
            // line 153
            echo "
        <% } else { %>
            <div class=\"control-group-container\" ";
            // line 155
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["calendarEventRecurrence"]) || array_key_exists("calendarEventRecurrence", $context) ? $context["calendarEventRecurrence"] : (function () { throw new RuntimeError('Variable "calendarEventRecurrence" does not exist.', 155, $this->source); })())], 155, $context, $this->getSourceContext());
            echo "></div>
        <% } %>
    ";
            $context["rightColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 158
            echo "    ";
            ob_start();
            // line 159
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calendar", [], "any", true, true, false, 159)) {
                // line 160
                echo "            <% if (!id) { %>
                ";
                // line 161
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "calendar", [], "any", false, false, false, 161), 'row');
                echo "
            <% } %>
        ";
            }
            // line 164
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "title", [], "any", false, false, false, 164), 'row');
            echo "
        ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "description", [], "any", false, false, false, 165), 'row');
            echo "
        ";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "backgroundColor", [], "any", false, false, false, 166), 'row');
            echo "
        ";
            // line 167
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calendarUid", [], "any", true, true, false, 167)) {
                // line 168
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "calendarUid", [], "any", false, false, false, 168), 'row');
                echo "
        ";
            }
            // line 170
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "attendees", [], "any", false, false, false, 170), 'row');
            echo "
        <% if (!recurrence) { %>
            ";
            // line 172
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "reminders", [], "any", false, false, false, 172), 'row');
            echo "
        <% } %>
        ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "notifyAttendees", [], "any", false, false, false, 174), 'row');
            echo "
        ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "children", [], "any", false, false, false, 175));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 176
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 176), "extra_field", [], "any", true, true, false, 176) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 176), "extra_field", [], "any", false, false, false, 176))) {
                    // line 177
                    echo "                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                    echo "
            ";
                }
                // line 179
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "        ";
            echo twig_call_macro($macros["invitations"], "macro_notify_attendees_component", [], 180, $context, $this->getSourceContext());
            echo "
    ";
            $context["leftColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 182
            echo "
    <div class=\"widget-content\">
        <div class=\"alert alert-error\" role=\"alert\" style=\"display: none;\"></div>
        <div class=\"form-container\">
            <form id=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
            echo "\" action=\"#\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 189
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->prepareJsTemplateContent((isset($context["leftColumn"]) || array_key_exists("leftColumn", $context) ? $context["leftColumn"] : (function () { throw new RuntimeError('Variable "leftColumn" does not exist.', 189, $this->source); })()));
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 192
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->prepareJsTemplateContent((isset($context["rightColumn"]) || array_key_exists("rightColumn", $context) ? $context["rightColumn"] : (function () { throw new RuntimeError('Variable "rightColumn" does not exist.', 192, $this->source); })()));
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <% if (id != null && removable) { %>
                        ";
            // line 196
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.delete_event.confirmation"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.delete_event.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "data" => ["action-name" => "delete", "url" => "oro_calendar_event_delete"]]], 197, $context, $this->getSourceContext());
            // line 205
            echo "
                        <% } %>
                        <button class=\"btn\" type=\"reset\">";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <% if (id == null || (id != null && editable)) { %>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
            echo "</button>
                        <% } %>
                    </div>
                </fieldset>
            </form>
        </div>
        ";
            // line 215
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->prepareJsTemplateContent($this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })())));
            echo "
    </div>
</script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroCalendar/templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 215,  515 => 209,  510 => 207,  506 => 205,  504 => 196,  497 => 192,  491 => 189,  483 => 186,  477 => 182,  471 => 180,  465 => 179,  459 => 177,  456 => 176,  452 => 175,  448 => 174,  443 => 172,  437 => 170,  431 => 168,  429 => 167,  425 => 166,  421 => 165,  416 => 164,  410 => 161,  407 => 160,  404 => 159,  401 => 158,  395 => 155,  391 => 153,  389 => 150,  383 => 147,  379 => 146,  375 => 145,  370 => 144,  367 => 143,  365 => 140,  363 => 136,  360 => 129,  357 => 128,  355 => 127,  350 => 126,  330 => 125,  311 => 119,  309 => 118,  304 => 116,  299 => 113,  297 => 104,  292 => 101,  290 => 100,  285 => 98,  277 => 93,  274 => 92,  265 => 89,  258 => 85,  255 => 84,  253 => 74,  252 => 73,  251 => 71,  246 => 70,  241 => 69,  239 => 64,  232 => 60,  213 => 44,  207 => 41,  202 => 39,  198 => 38,  194 => 37,  190 => 36,  186 => 35,  182 => 34,  177 => 31,  175 => 26,  172 => 25,  169 => 24,  167 => 23,  163 => 22,  141 => 2,  122 => 1,  107 => 30,  105 => 27,  82 => 28,  79 => 27,  60 => 26,  46 => 124,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro calendar_event_view_template(id) %}

<script type=\"text/template\" id=\"activity-context-activity-list\">
    <div class=\"context-item\" style=\"border: none\" data-cid=\"<%- entity.cid %>\">
        <span data-id=\"<%- entity.get('targetId') %>\">
            <span class=\"context-icon <%- entity.get('icon') %>\" aria-hidden=\"true\"></span>

            <% if (entity.get('link')) { %>
                <a href=\"<%- entity.get('link') %>\">
                    <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                </a>
            <% } else { %>
                <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
            <% } %>
            <% if (editable) { %>
                <span class=\"fa-close\" aria-hidden=\"true\" data-role=\"delete-item\"></span>
            <% } %>
        </span>
    </div>
</script>

<script type=\"text/html\" id=\"{{ id }}\">
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import '@OroCalendar/invitations.html.twig' as invitations %}
    {% import _self as templates %}
    {% macro rawLink(parameters) %}
        {% apply spaceless %}
            <a href=\"{{ parameters.path }}\" {% for dataItemName,dataItemValue in parameters.data %} data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"{% endfor %} title=\"{{ parameters.title }}\">{{ parameters.label|trim }}</a>
        {% endapply %}
    {% endmacro %}
    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.title.label'|trans, '<%= formatter.string(title) %>') }}
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.description.label'|trans, '<div class=\"cms-content cms-content--no-scroll\"><%= formatter.html(description) %></div>') }}
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.start.label'|trans, '<%= formatter.dateTime(start) %>') }}
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.end.label'|trans, '<%= formatter.dateTime(end) %>') }}
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.all_day.label'|trans, '<%= formatter.bool(allDay) %>') }}
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.organizer.label'|trans, '<%= organizerHTML %>') }}
                <% if (recurrence) { %>
                    {{ UI.renderHtmlProperty('oro.calendar.calendarevent.recurrence.label'|trans, '<%= formatter.string(recurrencePattern) %>') }}
                <% } %>
                <% if (recurringEventId && recurrencePattern) { %>
                    {{ UI.renderHtmlProperty('oro.calendar.calendarevent.recurrence.exception.label'|trans, '<%= formatter.string(recurrencePattern) %>') }}
                <% } %>

                <% var attendeesView = _.map(attendees, function (attendee) {
                    var attendeeName = attendee.displayName;
                    if (attendee.fullName) {
                        attendeeName = attendee.fullName;
                    }

                    if (attendee.email) {
                        attendeeName = attendeeName ? attendeeName + ' (' + attendee.email + ')' : attendee.email;
                    }

                    return attendeeName;
                }); %>
                <% if (attendeesView.length > 0) { %>
                    {{ UI.renderAttribute('oro.calendar.calendarevent.attendees.label'|trans, '<div class=\"calendar-event-attendees-widget\"><%- attendeesView.join(\", \") %></div>') }}
                <% } %>
                <% if (editableInvitationStatus) { %>
                    <% var properties = []; %>
                    {% set statuses=[
                        constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_ACCEPTED'),
                        constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_TENTATIVE'),
                        constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED'),
                    ] %}
                    {% for status in statuses %}
                        <% if (invitationStatus !== \"{{ status }}\") { %>
                            <% var link='{{
                                    templates.rawLink({
                                        'label': invitations.calendar_event_invitation_going_status(status),
                                        'title': invitations.calendar_event_invitation_going_status(status),
                                        'path': '%path%',
                                        'data':  {
                                            'page-component-module': 'oroui/js/app/components/view-component',
                                            'page-component-options': {
                                                'view':'orocalendar/js/app/views/change-status-view',
                                                'triggerEventName': 'widget_success:attendee_status:change'
                                            }|json_encode
                                        }
                                    })
                                }}';
                                link = link.replace('%path%', invitationUrls[\"{{ status }}\"]);
                                properties.push(link);
                            %>
                        <% } else { %>
                            <% properties.push('{{ invitations.calendar_event_invitation_going_status(status) }}'); %>
                        <% } %>
                    {% endfor %}
                    <div class=\"invitation-response\">
                        {{ UI.renderHtmlProperty('oro.calendar.calendarevent.action.going_status.label'|trans, '<%= formatter.html(properties.join(\"&nbsp\")) %>') }}
                    </div>
                <% } %>

                <div class=\"activity-context-activity\">
                {{ UI.renderAttribute('oro.activity.contexts.label'|trans, '<div class=\"activity-context-activity-items\"></div>') }}
                </div>
                {% placeholder calendar_event_widget_view_additional_properties %}
            </div>
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <% if (id != null && removable) { %>
                {{
                    UI.deleteButton({
                        'aCss': 'no-hash',
                        'id': 'btn-remove-calendarevent',
                        'dataMessage': 'oro.calendar.delete_event.confirmation'|trans,
                        'title': 'oro.calendar.delete_event.title'|trans,
                        'label': 'Delete'|trans,
                        'data': {'action-name': 'delete', 'url': 'oro_calendar_event_delete'}
                    })
                }}
                <% } %>
                <% if (id == null || (id != null && editable)) { %>
                <button class=\"btn\" type=\"button\" data-action-name=\"edit\">{{ 'oro.ui.edit'|trans }}</button>
                <% } %>
                {% placeholder calendar_event_widget_view_actions_jstemplate %}
            </div>
        </div>
    </div>
</script>
{% endmacro %}

{% macro calendar_event_form_template(id, form) %}
<script type=\"text/html\" id=\"{{ id }}\">
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import '@OroCalendar/invitations.html.twig' as invitations %}
    {% set calendarEventDateRange = {
        module: 'orocalendar/js/app/components/calendar-event-date-range-component',
        name: 'calendar-event-date-range',
        options: {
            nativeMode: isMobileVersion()
        }
    } %}
    {% set calendarEventRecurrence = {
        module: 'orocalendar/js/app/components/calendar-event-recurrence-component',
        name: 'calendar-event-recurrence',
        options: {
            inputNamePrefixes: form.recurrence.vars.full_name
        }
    } %}
    {% set rightColumn %}
        <div class=\"control-group-container\" {{ UI.renderPageComponentAttributes(calendarEventDateRange) }}>
            {{ form_row(form.start) }}
            {{ form_row(form.end) }}
            {{ form_row(form.allDay) }}
        </div>
        <% if (editAsException || recurringEventId) { %>
            {{ UI.renderHtmlProperty(
                'oro.calendar.calendarevent.recurrence.exception.label'|trans,
                '<%= recurrencePattern %>'
            ) }}
        <% } else { %>
            <div class=\"control-group-container\" {{ UI.renderPageComponentAttributes(calendarEventRecurrence) }}></div>
        <% } %>
    {% endset %}
    {% set leftColumn %}
        {% if form.calendar is defined %}
            <% if (!id) { %>
                {{ form_row(form.calendar) }}
            <% } %>
        {% endif %}
        {{ form_row(form.title) }}
        {{ form_row(form.description) }}
        {{ form_row(form.backgroundColor) }}
        {% if form.calendarUid is defined %}
            {{ form_row(form.calendarUid) }}
        {% endif %}
        {{ form_row(form.attendees) }}
        <% if (!recurrence) { %>
            {{ form_row(form.reminders) }}
        <% } %>
        {{ form_row(form.notifyAttendees) }}
        {% for child in form.children %}
            {% if child.vars.extra_field is defined and child.vars.extra_field %}
                {{ form_row(child) }}
            {% endif %}
        {% endfor %}
        {{ invitations.notify_attendees_component() }}
    {% endset %}

    <div class=\"widget-content\">
        <div class=\"alert alert-error\" role=\"alert\" style=\"display: none;\"></div>
        <div class=\"form-container\">
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"#\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        {{ leftColumn|oro_js_template_content|raw }}
                    </div>
                    <div class=\"span6\">
                        {{ rightColumn|oro_js_template_content|raw }}
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <% if (id != null && removable) { %>
                        {{
                            UI.deleteButton({
                                'aCss': 'no-hash',
                                'id': 'btn-remove-calendarevent',
                                'dataMessage': 'oro.calendar.delete_event.confirmation'|trans,
                                'title': 'oro.calendar.delete_event.title'|trans,
                                'label': 'Delete'|trans,
                                'data': {'action-name': 'delete', 'url': 'oro_calendar_event_delete'}
                            })
                        }}
                        <% } %>
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <% if (id == null || (id != null && editable)) { %>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
                        <% } %>
                    </div>
                </fieldset>
            </form>
        </div>
        {{ oro_form_js_validation(form)|oro_js_template_content|raw }}
    </div>
</script>
{% endmacro %}
", "@OroCalendar/templates.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/templates.html.twig");
    }
}
