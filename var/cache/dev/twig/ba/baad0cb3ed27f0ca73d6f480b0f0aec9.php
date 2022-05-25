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

/* @OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig */
class __TwigTemplate_f84ecaf6ecc821f4cb28e4391d1dcd02 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig"));

        // line 1
        $context["originalEvent"] = ((twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getValue", [0 => "parent"], "method", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getValue", [0 => "parent"], "method", false, false, false, 1)) : (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getRootEntity", [], "method", false, false, false, 1)));
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["originalEvent"]) || array_key_exists("originalEvent", $context) ? $context["originalEvent"] : (function () { throw new RuntimeError('Variable "originalEvent" does not exist.', 2, $this->source); })()), "recurringEvent", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["originalEvent"]) || array_key_exists("originalEvent", $context) ? $context["originalEvent"] : (function () { throw new RuntimeError('Variable "originalEvent" does not exist.', 3, $this->source); })()), "recurringEvent", [], "any", false, false, false, 3), "recurrence", [], "any", false, false, false, 3)), "html", null, true);
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(twig_get_attribute($this->env, $this->source, (isset($context["originalEvent"]) || array_key_exists("originalEvent", $context) ? $context["originalEvent"] : (function () { throw new RuntimeError('Variable "originalEvent" does not exist.', 5, $this->source); })()), "recurrence", [], "any", false, false, false, 5)), "html", null, true);
            echo "
";
        }
        // line 7
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  56 => 5,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set originalEvent = record.getValue('parent') ? record.getValue('parent') : record.getRootEntity() %}
{% if originalEvent.recurringEvent  %}
    {{ get_recurrence_text_value(originalEvent.recurringEvent.recurrence) }}
{% else %}
    {{ get_recurrence_text_value(originalEvent.recurrence) }}
{% endif %}

", "@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/Datagrid/Property/recurrence.html.twig");
    }
}
