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

/* @OroCalendar/SystemCalendar/view.html.twig */
class __TwigTemplate_b94caeb433a36e0527e9c29b250b454a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/SystemCalendar/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendar/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendar/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendar/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCalendar/SystemCalendar/view.html.twig", 3)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.title%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCalendar/SystemCalendar/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 8
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendar/view.html.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        if ((isset($context["canAddEvent"]) || array_key_exists("canAddEvent", $context) ? $context["canAddEvent"] : (function () { throw new RuntimeError('Variable "canAddEvent" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <div class=\"btn-group\">
            ";
            // line 12
            echo twig_call_macro($macros["UI"], "macro_addButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_event_create", ["id" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]], 12, $context, $this->getSourceContext());
            // line 15
            echo "
        </div>
    ";
        }
        // line 18
        echo "    ";
        if ((isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.entity_label")]], 19, $context, $this->getSourceContext());
            // line 22
            echo "
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_systemcalendar", ["id" => twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.entity_label")]], 25, $context, $this->getSourceContext());
            // line 31
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 36
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40)];
        // line 42
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 45
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 45));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 46
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendar/view.html.twig", 46)->unwrap();
        // line 47
        echo "
    ";
        // line 48
        ob_start();
        // line 49
        echo "        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 51
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
        echo "
                ";
        // line 52
        echo twig_call_macro($macros["UI"], "macro_renderColorProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.background_color.label"), twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "backgroundColor", [], "any", false, false, false, 54), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.no_color")], 52, $context, $this->getSourceContext());
        // line 55
        echo "
                ";
        // line 56
        if ((isset($context["showScope"]) || array_key_exists("showScope", $context) ? $context["showScope"] : (function () { throw new RuntimeError('Variable "showScope" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.public.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), "public", [], "any", false, false, false, 57)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.scope.system")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.scope.organization")))], 57, $context, $this->getSourceContext());
            // line 59
            echo "
                ";
        }
        // line 61
        echo "            </div>
            <div class=\"responsive-block\">
                ";
        // line 63
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })())], 63, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    ";
        $context["systemCalendarInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "
    ";
        // line 68
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 72
(isset($context["systemCalendarInformation"]) || array_key_exists("systemCalendarInformation", $context) ? $context["systemCalendarInformation"] : (function () { throw new RuntimeError('Variable "systemCalendarInformation" does not exist.', 72, $this->source); })())]]]]];
        // line 75
        echo "
    ";
        // line 76
        ob_start();
        // line 77
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_widget_events", ["id" => twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)])]);
        // line 80
        echo "
    ";
        $context["systemCalendarEventsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "
    ";
        // line 83
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 83, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_plural_label"), "subblocks" => [0 => ["data" => [0 =>         // line 86
(isset($context["systemCalendarEventsWidget"]) || array_key_exists("systemCalendarEventsWidget", $context) ? $context["systemCalendarEventsWidget"] : (function () { throw new RuntimeError('Variable "systemCalendarEventsWidget" does not exist.', 86, $this->source); })())]]]]]);
        // line 89
        echo "
    ";
        // line 90
        $context["id"] = "systemCalendarView";
        // line 91
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 91, $this->source); })())];
        // line 92
        echo "
    ";
        // line 93
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/SystemCalendar/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 93,  262 => 92,  259 => 91,  257 => 90,  254 => 89,  252 => 86,  251 => 83,  248 => 82,  244 => 80,  242 => 79,  240 => 77,  238 => 76,  235 => 75,  233 => 72,  232 => 68,  229 => 67,  222 => 63,  218 => 61,  214 => 59,  211 => 57,  209 => 56,  206 => 55,  204 => 54,  203 => 52,  199 => 51,  195 => 49,  193 => 48,  190 => 47,  187 => 46,  174 => 45,  158 => 42,  156 => 40,  155 => 37,  153 => 36,  140 => 35,  125 => 31,  123 => 29,  122 => 26,  120 => 25,  117 => 24,  113 => 22,  111 => 20,  109 => 19,  106 => 18,  101 => 15,  99 => 13,  98 => 12,  95 => 11,  93 => 10,  90 => 9,  87 => 8,  74 => 7,  60 => 1,  58 => 5,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

{% oro_title_set({params : {\"%entity.title%\": entity.name }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if canAddEvent %}
        <div class=\"btn-group\">
            {{ UI.addButton({
                'path' : path('oro_system_calendar_event_create', {'id': entity.id }),
                'entity_label': 'oro.calendar.calendarevent.entity_label'|trans
            }) }}
        </div>
    {% endif %}
    {% if editable %}
        {{ UI.editButton({
            'path' :        path('oro_system_calendar_update', { id: entity.id }),
            'entity_label': 'oro.calendar.systemcalendar.entity_label'|trans
        }) }}
    {% endif %}
    {% if removable %}
        {{ UI.deleteButton({
            'dataUrl':      path('oro_api_delete_systemcalendar', {'id': entity.id}),
            'dataRedirect': path('oro_system_calendar_index'),
            'aCss':         'no-hash remove-button',
            'dataId':       entity.id,
            'entity_label': 'oro.calendar.systemcalendar.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_system_calendar_index'),
        'indexLabel':  'oro.calendar.systemcalendar.entity_plural_label'|trans,
        'entityTitle': entity.name,
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set systemCalendarInformation %}
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.calendar.systemcalendar.name.label'|trans, entity.name) }}
                {{ UI.renderColorProperty(
                    'oro.calendar.systemcalendar.background_color.label'|trans,
                    entity.backgroundColor,
                    'oro.calendar.systemcalendar.no_color'|trans) }}
                {% if showScope %}
                    {{ UI.renderProperty('oro.calendar.systemcalendar.public.label'|trans, entity.public
                        ? 'oro.calendar.systemcalendar.scope.system'|trans
                        : 'oro.calendar.systemcalendar.scope.organization'|trans) }}
                {% endif %}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(entity) }}
            </div>
        </div>
    {% endset %}

    {% set dataBlocks = [{
        'title': 'General Information'|trans,
        'class': 'active',
        'subblocks': [
            {'data' : [systemCalendarInformation]}
        ]
    }] %}

    {% set systemCalendarEventsWidget %}
    {{ oro_widget_render({
        'widgetType':   'block',
        'url':          path('oro_system_calendar_widget_events', {id: entity.id})
    }) }}
    {% endset %}

    {% set dataBlocks = dataBlocks|merge([{
        'title': 'oro.calendar.calendarevent.entity_plural_label'|trans,
        'subblocks': [
            {'data' : [systemCalendarEventsWidget]}
        ]
    }]) %}

    {% set id = 'systemCalendarView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroCalendar/SystemCalendar/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/SystemCalendar/view.html.twig");
    }
}
