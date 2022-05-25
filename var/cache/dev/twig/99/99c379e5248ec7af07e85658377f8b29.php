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

/* @OroCalendar/SystemCalendarEvent/view.html.twig */
class __TwigTemplate_5d608cb1d425e1d119c714b3fff0ebf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'stats' => [$this, 'block_stats'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/SystemCalendarEvent/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 3)->unwrap();
        // line 4
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.title%" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["entity"] ?? null), "title", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 7), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "%parent.name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "systemCalendar", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8)]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 12
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 12)->unwrap();
        // line 13
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 13)->unwrap();
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        ";
            // line 17
            echo "        ";
            echo twig_call_macro($macros["AC"], "macro_addContextButton", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
            echo "
        ";
            // line 18
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_event_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]], 18, $context, $this->getSourceContext());
            // line 21
            echo "
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "systemCalendar", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]], 24, $context, $this->getSourceContext());
            // line 30
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 35
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 35)->unwrap();
        // line 36
        echo "
    ";
        // line 38
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 39
        echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })())], 39, $context, $this->getSourceContext());
        echo "
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 43
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 43));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 44
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 45
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 48
($context["entity"] ?? null), "title", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 48), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "additional" => [0 => ["indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_system_calendar_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "systemCalendar", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "indexLabel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "systemCalendar", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51)]]];
        // line 54
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 58
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendarEvent/view.html.twig", 58)->unwrap();
        // line 60
        ob_start();
        // line 61
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 63
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "title", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
        echo "
                ";
        // line 64
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                ";
        // line 65
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.start.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "start", [], "any", false, false, false, 65))], 65, $context, $this->getSourceContext());
        echo "
                ";
        // line 66
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.end.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "end", [], "any", false, false, false, 66))], 66, $context, $this->getSourceContext());
        echo "
                ";
        // line 67
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.all_day.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 67, $this->source); })()), "allDay", [], "any", false, false, false, 67)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 67, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 70
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })())], 70, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["calendarEventInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 80
(isset($context["calendarEventInformation"]) || array_key_exists("calendarEventInformation", $context) ? $context["calendarEventInformation"] : (function () { throw new RuntimeError('Variable "calendarEventInformation" does not exist.', 80, $this->source); })())]]]]];
        // line 84
        echo "
    ";
        // line 85
        $context["id"] = "calendarEventView";
        // line 86
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 86, $this->source); })())];
        // line 87
        echo "
    ";
        // line 88
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/SystemCalendarEvent/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 88,  275 => 87,  272 => 86,  270 => 85,  267 => 84,  265 => 80,  264 => 75,  258 => 70,  252 => 67,  248 => 66,  244 => 65,  240 => 64,  236 => 63,  232 => 61,  230 => 60,  227 => 58,  214 => 57,  198 => 54,  196 => 51,  195 => 50,  194 => 48,  193 => 45,  191 => 44,  178 => 43,  162 => 39,  159 => 38,  156 => 36,  153 => 35,  140 => 34,  125 => 30,  123 => 28,  122 => 26,  121 => 25,  119 => 24,  116 => 23,  112 => 21,  110 => 19,  109 => 18,  104 => 17,  102 => 16,  100 => 15,  97 => 14,  94 => 13,  91 => 12,  78 => 11,  64 => 1,  62 => 8,  61 => 7,  58 => 4,  56 => 3,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% oro_title_set({params : {
    \"%entity.title%\": entity.title|default('N/A'|trans),
    \"%parent.name%\": entity.systemCalendar.name
}}) %}

{% block navButtons %}
    {% import '@OroActivity/macros.html.twig' as AC %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if editable %}
        {# Button for add context on the activity list item view page #}
        {{ AC.addContextButton(entity) }}
        {{ UI.editButton({
            'path' : path('oro_system_calendar_event_update', { id: entity.id }),
            'entity_label': 'oro.calendar.calendarevent.entity_label'|trans
        })  }}
    {% endif %}
    {% if removable %}
        {{ UI.deleteButton({
            'dataUrl':      path('oro_calendar_event_delete', {'id': entity.id}),
            'dataRedirect': path('oro_system_calendar_view', {'id': entity.systemCalendar.id}),
            'aCss':         'no-hash remove-button',
            'dataId':       entity.id,
            'entity_label': 'oro.calendar.calendarevent.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block stats %}
    {% import '@OroActivity/macros.html.twig' as AC %}

    {# Display contexts targets in the activity view page #}
    <li class=\"context-data activity-context-activity-block\">
        {{ AC.activity_contexts(entity) }}
    </li>
{% endblock %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_system_calendar_index'),
        'indexLabel':  'oro.calendar.systemcalendar.entity_plural_label'|trans,
        'entityTitle': entity.title|default('N/A'|trans),
        'additional': [{
            'indexPath':   path('oro_system_calendar_view', {'id': entity.systemCalendar.id}),
            'indexLabel':  entity.systemCalendar.name,
        }]
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set calendarEventInformation -%}
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.calendar.calendarevent.title.label'|trans, entity.title) }}
                {{ UI.renderSwitchableHtmlProperty('oro.calendar.calendarevent.description.label'|trans, entity.description) }}
                {{ UI.renderProperty('oro.calendar.calendarevent.start.label'|trans, entity.start|oro_format_datetime) }}
                {{ UI.renderProperty('oro.calendar.calendarevent.end.label'|trans, entity.end|oro_format_datetime) }}
                {{ UI.renderProperty('oro.calendar.calendarevent.all_day.label'|trans, entity.allDay ? 'Yes'|trans : 'No'|trans) }}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(entity) }}
            </div>
        </div>
    {%- endset -%}

    {% set dataBlocks = [
        {
            'title': 'General Information'|trans,
            'class': 'active',
            'subblocks': [
                {'data' : [calendarEventInformation]}
            ]
        }
    ] %}

    {% set id = 'calendarEventView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroCalendar/SystemCalendarEvent/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/SystemCalendarEvent/view.html.twig");
    }
}
