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

/* @OroCalendar/CalendarEvent/view.html.twig */
class __TwigTemplate_bf5bece755b59a903c207791dd7fb537 extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 2)->unwrap();
        // line 3
        $macros["CalendarUI"] = $this->macros["CalendarUI"] = $this->loadTemplate("@OroCalendar/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 3)->unwrap();
        // line 4
        $macros["invitations"] = $this->macros["invitations"] = $this->loadTemplate("@OroCalendar/invitations.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 4)->unwrap();
        // line 5
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 5)->unwrap();
        // line 6
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 6)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.title%" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["entity"] ?? null), "title", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 8), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 11
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 11)->unwrap();
        // line 12
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 12)->unwrap();
        // line 13
        echo "
    ";
        // line 14
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })())))) {
            // line 15
            echo "        ";
            // line 16
            echo "        ";
            echo twig_call_macro($macros["AC"], "macro_addContextButton", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
            echo "
        ";
            // line 17
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]], 17, $context, $this->getSourceContext());
            // line 20
            echo "
    ";
        }
        // line 22
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "notifyAttendees" => "all"]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]], 23, $context, $this->getSourceContext());
            // line 29
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 33
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 34
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 34)->unwrap();
        // line 35
        echo "
    ";
        // line 37
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 38
        echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })())], 38, $context, $this->getSourceContext());
        echo "
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 43
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 44
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 47
($context["entity"] ?? null), "title", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, false, 47), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))];
        // line 49
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 53
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 55
        $context["statusCode"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "invitationStatus", [], "any", false, false, false, 55);
        // line 56
        echo "        ";
        $context["invitationClass"] = twig_call_macro($macros["invitations"], "macro_get_invitatition_badge_class", [(isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 56, $this->source); })())], 56, $context, $this->getSourceContext());
        // line 57
        echo "        ";
        if ((isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "            <div class=\"invitation-status badge badge-";
            echo twig_escape_filter($this->env, (isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " status-";
            echo twig_escape_filter($this->env, (isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "\">
                <i class=\"icon-status-";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 59, $this->source); })()), "html", null, true);
            echo " fa-circle\"></i>
                ";
            // line 60
            echo twig_call_macro($macros["invitations"], "macro_calendar_event_invitation_status", [(isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 60, $this->source); })())], 60, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 66
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 66));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 67
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 67)->unwrap();
        // line 69
        ob_start();
        // line 70
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 72
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "title", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
        echo "
                ";
        // line 73
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
        echo "
                ";
        // line 74
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.start.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "start", [], "any", false, false, false, 74))], 74, $context, $this->getSourceContext());
        echo "
                ";
        // line 75
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.end.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 75, $this->source); })()), "end", [], "any", false, false, false, 75))], 75, $context, $this->getSourceContext());
        echo "
                ";
        // line 76
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.all_day.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 76, $this->source); })()), "allDay", [], "any", false, false, false, 76)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 76, $context, $this->getSourceContext());
        echo "
                ";
        // line 77
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.organizer.label"), twig_call_macro($macros["CalendarUI"], "macro_renderOrganizer", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 77, $this->source); })())], 77, $context, $this->getSourceContext())], 77, $context, $this->getSourceContext());
        echo "
                ";
        // line 78
        $context["invitationEvent"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "parent", [], "any", false, false, false, 78)) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "parent", [], "any", false, false, false, 78)) : ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })())));
        // line 79
        echo "                ";
        if (((isset($context["invitationEvent"]) || array_key_exists("invitationEvent", $context) ? $context["invitationEvent"] : (function () { throw new RuntimeError('Variable "invitationEvent" does not exist.', 79, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["invitationEvent"]) || array_key_exists("invitationEvent", $context) ? $context["invitationEvent"] : (function () { throw new RuntimeError('Variable "invitationEvent" does not exist.', 79, $this->source); })()), "attendees", [], "any", false, false, false, 79)))) {
            // line 80
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.attendees.label"), twig_call_macro($macros["invitations"], "macro_calendar_event_invitation", [(isset($context["invitationEvent"]) || array_key_exists("invitationEvent", $context) ? $context["invitationEvent"] : (function () { throw new RuntimeError('Variable "invitationEvent" does not exist.', 80, $this->source); })())], 80, $context, $this->getSourceContext())], 80, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 82
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 82, $this->source); })()), "recurrence", [], "any", false, false, false, 82)) {
            // line 83
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.label"), $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "recurrence", [], "any", false, false, false, 83))], 83, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 85
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "recurringEvent", [], "any", false, false, false, 85)) {
            // line 86
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.recurrence.exception.label"), $this->extensions['Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension']->getRecurrenceTextValue(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "recurringEvent", [], "any", false, false, false, 86), "recurrence", [], "any", false, false, false, 86)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "recurringEvent", [], "any", false, false, false, 86), "recurrence", [], "any", false, false, false, 86)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "parent", [], "any", false, false, false, 86), "recurringEvent", [], "any", false, false, false, 86), "recurrence", [], "any", false, false, false, 86))))], 86, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 88
        echo "                ";
        if ((array_key_exists("canChangeInvitationStatus", $context) && (isset($context["canChangeInvitationStatus"]) || array_key_exists("canChangeInvitationStatus", $context) ? $context["canChangeInvitationStatus"] : (function () { throw new RuntimeError('Variable "canChangeInvitationStatus" does not exist.', 88, $this->source); })()))) {
            // line 89
            echo "                    ";
            $this->loadTemplate("@OroCalendar/CalendarEvent/invitationControl.html.twig", "@OroCalendar/CalendarEvent/view.html.twig", 89)->display(twig_array_merge($context, ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })()), "triggerEventName" => ""]));
            // line 90
            echo "                ";
        }
        // line 91
        echo "            </div>
            <div class=\"responsive-block\">
                ";
        // line 93
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 93, $this->source); })())], 93, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["calendarEventInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 103
(isset($context["calendarEventInformation"]) || array_key_exists("calendarEventInformation", $context) ? $context["calendarEventInformation"] : (function () { throw new RuntimeError('Variable "calendarEventInformation" does not exist.', 103, $this->source); })())]]]]];
        // line 107
        echo "
    ";
        // line 108
        $context["id"] = "calendarEventView";
        // line 109
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 109, $this->source); })())];
        // line 110
        echo "
    ";
        // line 111
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 111,  378 => 110,  375 => 109,  373 => 108,  370 => 107,  368 => 103,  367 => 98,  361 => 93,  357 => 91,  354 => 90,  351 => 89,  348 => 88,  342 => 86,  339 => 85,  333 => 83,  330 => 82,  324 => 80,  321 => 79,  319 => 78,  315 => 77,  311 => 76,  307 => 75,  303 => 74,  299 => 73,  295 => 72,  291 => 70,  289 => 69,  286 => 67,  273 => 66,  259 => 63,  253 => 60,  249 => 59,  242 => 58,  239 => 57,  236 => 56,  234 => 55,  228 => 53,  215 => 52,  199 => 49,  197 => 47,  196 => 44,  194 => 43,  181 => 42,  165 => 38,  162 => 37,  159 => 35,  156 => 34,  143 => 33,  128 => 29,  126 => 27,  125 => 24,  123 => 23,  120 => 22,  116 => 20,  114 => 18,  113 => 17,  108 => 16,  106 => 15,  104 => 14,  101 => 13,  98 => 12,  95 => 11,  82 => 10,  68 => 1,  66 => 8,  63 => 6,  61 => 5,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroCalendar/macros.html.twig' as CalendarUI %}
{% import '@OroCalendar/invitations.html.twig' as invitations %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% oro_title_set({params : {\"%entity.title%\": entity.title|default('N/A'|trans) }}) %}

{% block navButtons %}
    {% import '@OroActivity/macros.html.twig' as AC %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.parent is empty and is_granted('EDIT', entity) %}
        {# Button for add context on the activity list item view page #}
        {{ AC.addContextButton(entity) }}
        {{ UI.editButton({
            'path' : path('oro_calendar_event_update', { id: entity.id }),
            'entity_label': 'oro.calendar.calendarevent.entity_label'|trans
        })  }}
    {% endif %}
    {% if is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl':      path('oro_calendar_event_delete', {'id': entity.id, 'notifyAttendees': 'all'}),
            'dataRedirect': path('oro_calendar_event_index'),
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
        'indexPath':   path('oro_calendar_event_index'),
        'indexLabel':  'oro.calendar.calendarevent.entity_plural_label'|trans,
        'entityTitle': entity.title|default('N/A'|trans),
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumbs %}
    {{ parent() }}
    <div class=\"pull-left\">
        {% set statusCode = entity.invitationStatus %}
        {% set invitationClass = invitations.get_invitatition_badge_class(statusCode) %}
        {% if invitationClass %}
            <div class=\"invitation-status badge badge-{{ invitationClass }} status-{{ invitationClass }}\">
                <i class=\"icon-status-{{ invitationClass }} fa-circle\"></i>
                {{ invitations.calendar_event_invitation_status(statusCode) }}
            </div>
        {% endif %}
    </div>
{% endblock breadcrumbs %}

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
                {{ UI.renderHtmlProperty('oro.calendar.calendarevent.organizer.label'|trans, CalendarUI.renderOrganizer(entity)) }}
                {% set invitationEvent = entity.parent ?: entity %}
                {% if invitationEvent and invitationEvent.attendees is not empty %}
                    {{ UI.renderHtmlProperty('oro.calendar.calendarevent.attendees.label'|trans, invitations.calendar_event_invitation(invitationEvent)) }}
                {% endif %}
                {% if entity.recurrence %}
                    {{ UI.renderProperty('oro.calendar.calendarevent.recurrence.label'|trans, get_recurrence_text_value(entity.recurrence)) }}
                {% endif %}
                {% if entity.recurringEvent %}
                    {{ UI.renderProperty('oro.calendar.calendarevent.recurrence.exception.label'|trans, get_recurrence_text_value(entity.recurringEvent.recurrence ? : entity.parent.recurringEvent.recurrence)) }}
                {% endif %}
                {% if canChangeInvitationStatus is defined and canChangeInvitationStatus %}
                    {% include '@OroCalendar/CalendarEvent/invitationControl.html.twig' with {'entity': entity, 'triggerEventName': ''} %}
                {% endif %}
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
", "@OroCalendar/CalendarEvent/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/view.html.twig");
    }
}
