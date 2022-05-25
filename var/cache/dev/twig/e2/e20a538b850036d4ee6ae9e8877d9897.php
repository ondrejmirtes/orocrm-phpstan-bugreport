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

/* @OroCalendar/CalendarEvent/invitationControl.html.twig */
class __TwigTemplate_139ce139a721ca1d7b32122ad3256369 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/invitationControl.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/invitationControl.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/invitationControl.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/invitationControl.html.twig", 1)->unwrap();
        // line 2
        $macros["invitations"] = $this->macros["invitations"] = $this->loadTemplate("@OroCalendar/invitations.html.twig", "@OroCalendar/CalendarEvent/invitationControl.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["statuses"] = [0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")];
        // line 9
        $context["properties"] = [];
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 11
            echo "    ";
            if (($context["status"] != twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "invitationStatus", [], "any", false, false, false, 11))) {
                // line 12
                echo "        ";
                $context["properties"] = twig_array_merge((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 12, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_link", [["label" => twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [                // line 14
$context["status"]], 14, $context, $this->getSourceContext()), "title" => twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [                // line 15
$context["status"]], 15, $context, $this->getSourceContext()), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(("oro_calendar_event_" .                 // line 16
$context["status"]), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "data" => ["page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => json_encode(["view" => "orocalendar/js/app/views/change-status-view", "triggerEventName" =>                 // line 21
(isset($context["triggerEventName"]) || array_key_exists("triggerEventName", $context) ? $context["triggerEventName"] : (function () { throw new RuntimeError('Variable "triggerEventName" does not exist.', 21, $this->source); })())])]]], 13, $context, $this->getSourceContext())]);
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "        ";
                $context["properties"] = twig_array_merge((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 27, $this->source); })()), [0 => twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_going_status", [                // line 28
$context["status"]], 28, $context, $this->getSourceContext())]);
                // line 30
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 33
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.action.going_status.label"), twig_join_filter(        // line 35
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 35, $this->source); })()), "&nbsp;")], 33, $context, $this->getSourceContext());
        // line 36
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/invitationControl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  89 => 35,  88 => 33,  85 => 32,  78 => 30,  76 => 28,  74 => 27,  71 => 26,  69 => 21,  68 => 16,  67 => 15,  66 => 14,  64 => 12,  61 => 11,  57 => 10,  55 => 9,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroCalendar/invitations.html.twig' as invitations %}

{% set statuses=[
    constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_ACCEPTED'),
    constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_TENTATIVE'),
    constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED'),
] %}
{% set properties = [] %}
{% for status in statuses %}
    {% if status != entity.invitationStatus %}
        {% set properties = properties|merge([
            UI.link({
                'label': invitations.calendar_event_invitation_going_status(status),
                'title': invitations.calendar_event_invitation_going_status(status),
                'path': path('oro_calendar_event_' ~ status, {'id': entity.id}),
                'data':  {
                    'page-component-module': 'oroui/js/app/components/view-component',
                    'page-component-options': {
                        'view':'orocalendar/js/app/views/change-status-view',
                        'triggerEventName': triggerEventName
                    }|json_encode
                }
            })
        ]) %}
    {% else %}
        {% set properties = properties|merge([
            invitations.calendar_event_invitation_going_status(status)
        ]) %}
    {% endif %}
{% endfor %}

{{ UI.renderHtmlProperty(
    'oro.calendar.calendarevent.action.going_status.label'|trans,
    properties|join('&nbsp;')
) }}
", "@OroCalendar/CalendarEvent/invitationControl.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/invitationControl.html.twig");
    }
}
