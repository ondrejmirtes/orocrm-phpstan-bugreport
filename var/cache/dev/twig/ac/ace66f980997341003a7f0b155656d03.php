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

/* @OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig */
class __TwigTemplate_8e42a538dd7794b5ee90639f9648ff5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activityDetails' => [$this, 'block_activityDetails'],
            'activityActions' => [$this, 'block_activityActions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig"));

        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig", 2)->unwrap();
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent";
        // line 5
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 5, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
    <% if (owner || owner_url) { %>
        <% var template = (verb == 'create')
            ? ";
        // line 11
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.added_by"));
        echo "
            : ";
        // line 12
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.updated_by"));
        echo "; %>
        <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
                user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
                date: '<i class=\"date\">' + createdAt + '</i>',
                editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
                editor_date: '<i class=\"date\">' + updatedAt + '</i>'
            }) %>
    <% } %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 23
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig", 23)->unwrap();
        // line 24
        echo "
    ";
        // line 25
        ob_start();
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_calendar_event_update")) {
            // line 28
            echo "            ";
            echo twig_call_macro($macros["AC"], "macro_activity_context_link", [], 28, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 30
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "    ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })())];
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <a href=\"<%- routing.generate(routes.itemViewLink, {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.view_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.view_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.view_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 38, $this->source); })())]), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 41, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })())]);
        // line 42
        echo "
    ";
        // line 43
        ob_start();
        // line 44
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.update_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 47
        echo twig_escape_filter($this->env, json_encode(["dialogOptions" => ["width" => 1000]]), "html", null, true);
        echo "\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.update_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.update_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 49, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 53, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 53, $this->source); })())]);
        // line 54
        echo "
    ";
        // line 55
        ob_start();
        // line 56
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.delete_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 58, $this->source); })())]), "html", null, true);
        echo "\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.delete_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 59, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.delete_event", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 60, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 64, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 64, $this->source); })())]);
        // line 65
        echo "
    ";
        // line 66
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 66,  240 => 65,  237 => 64,  230 => 60,  226 => 59,  222 => 58,  218 => 56,  216 => 55,  213 => 54,  210 => 53,  203 => 49,  199 => 48,  195 => 47,  191 => 46,  187 => 44,  185 => 43,  182 => 42,  179 => 41,  173 => 38,  169 => 37,  165 => 36,  161 => 34,  159 => 33,  156 => 32,  153 => 31,  150 => 30,  144 => 28,  141 => 27,  139 => 26,  137 => 25,  134 => 24,  131 => 23,  118 => 22,  96 => 12,  92 => 11,  85 => 8,  72 => 7,  58 => 1,  56 => 5,  54 => 4,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% set entityClass = 'Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\CalendarEvent' %}
{% set entityName  = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityDetails %}
    {{ entityName }}
    <% if (owner || owner_url) { %>
        <% var template = (verb == 'create')
            ? {{ 'oro.calendar.calendarevent.added_by'|trans|json_encode|raw }}
            : {{ 'oro.calendar.calendarevent.updated_by'|trans|json_encode|raw }}; %>
        <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
                user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
                date: '<i class=\"date\">' + createdAt + '</i>',
                editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
                editor_date: '<i class=\"date\">' + updatedAt + '</i>'
            }) %>
    <% } %>
{% endblock %}

{% block activityActions %}
    {% import '@OroActivity/macros.html.twig' as AC %}

    {% set action %}
        {# Add button for add context in the activity list item #}
        {% if is_granted('oro_calendar_event_update') %}
            {{ AC.activity_context_link() }}
        {% endif %}
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        <a href=\"<%- routing.generate(routes.itemViewLink, {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"{{ 'oro.calendar.calendarevent.view_event'|trans({'{{ entity }}': entityName}) }}\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">{{ 'oro.calendar.calendarevent.view_event'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.calendar.calendarevent.view_event'|trans({'{{ entity }}': entityName}) }}
        </a>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"{{ 'oro.calendar.calendarevent.update_event'|trans({'{{ entity }}': entityName}) }}\"
           data-action-extra-options=\"{{ {dialogOptions: {width: 1000}}|json_encode }}\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">{{ 'oro.calendar.calendarevent.update_event'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.calendar.calendarevent.update_event'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"{{ 'oro.calendar.calendarevent.delete_event'|trans({'{{ entity }}': entityName}) }}\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">{{ 'oro.calendar.calendarevent.delete_event'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.calendar.calendarevent.delete_event'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}
", "@OroCalendar/CalendarEvent/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/js/activityItemTemplate.html.twig");
    }
}
