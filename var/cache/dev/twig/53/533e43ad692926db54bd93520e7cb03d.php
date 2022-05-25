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

/* @OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig */
class __TwigTemplate_78bf29f369d3ad949b16a73d58d489be extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig"));

        // line 1
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig", 2)->unwrap();
            // line 3
            echo "
    ";
            // line 4
            $context["eventId"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "id"], "method", false, false, false, 4);
            // line 5
            echo "    ";
            echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_widget_info", ["id" =>             // line 6
(isset($context["eventId"]) || array_key_exists("eventId", $context) ? $context["eventId"] : (function () { throw new RuntimeError('Variable "eventId" does not exist.', 6, $this->source); })())]), "aCss" => "no-hash", "label" =>             // line 8
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })()), "widget" => ["type" => "dialog", "multiple" => false, "options" => ["alias" => ("calendar_event_info_widget_" .             // line 13
(isset($context["eventId"]) || array_key_exists("eventId", $context) ? $context["eventId"] : (function () { throw new RuntimeError('Variable "eventId" does not exist.', 13, $this->source); })())), "dialogOptions" => ["title" =>             // line 15
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 15, $this->source); })()), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 600]]]]], 5, $context, $this->getSourceContext());
            // line 24
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 15,  60 => 13,  59 => 8,  58 => 6,  56 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if value %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set eventId = record.getValue('id') %}
    {{ UI.clientLink({
        'dataUrl': path('oro_calendar_event_widget_info', {id : eventId}),
        'aCss': 'no-hash',
        'label' : value,
        'widget' : {
            'type' : 'dialog',
            'multiple' : false,
            'options' : {
                'alias': 'calendar_event_info_widget_' ~ eventId,
                'dialogOptions' : {
                    'title' : value,
                    'allowMaximize': true,
                    'allowMinimize': true,
                    'dblclick': 'maximize',
                    'maximizedHeightDecreaseBy': 'minimize-bar',
                    'width': 600
                }
            }
        },
    }) }}
{% endif %}
", "@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/Datagrid/Property/title.html.twig");
    }
}
