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

/* @OroCalendar/CalendarEvent/update.html.twig */
class __TwigTemplate_eb38daa74b1d1d614f09b583e6ad0571 extends Template
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
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/update.html.twig"));

        // line 2
        $macros["invitations"] = $this->macros["invitations"] = $this->loadTemplate("@OroCalendar/invitations.html.twig", "@OroCalendar/CalendarEvent/update.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.title%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]]);
        // line 5
        $context["entityId"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroCalendar/CalendarEvent/update.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/update.html.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_calendar_event_view", "params" => ["id" => "\$id"]]], 10, $context, $this->getSourceContext());
        // line 14
        echo "
    ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_calendar_event_create")) {
            // line 16
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 16, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_calendar_event_create"]], 16, $context, $this->getSourceContext()));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_calendar_event_update")) {
            // line 22
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 22, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_calendar_event_update", "params" => ["id" => "\$id"]]], 22, $context, $this->getSourceContext()));
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 27, $this->source); })())]], 27, $context, $this->getSourceContext());
        echo "
    ";
        // line 28
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_index")], 28, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 31
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 31));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 32
        echo "    ";
        if ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 34
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37)];
            // line 39
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.entity_label")]);
            // line 42
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroCalendar/CalendarEvent/update.html.twig", 42)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 42, $this->source); })())]));
            // line 43
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 47
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/update.html.twig", 47)->unwrap();
        // line 48
        echo "
    ";
        // line 49
        $context["id"] = "calendarevent-form";
        // line 50
        echo "    ";
        $context["calendarEventDateRange"] = ["module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => ["nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()]];
        // line 57
        echo "
    ";
        // line 58
        $context["general_subblocks_data"] = [];
        // line 59
        echo "
    ";
        // line 60
        if (( !(isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 60, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calendar", [], "any", true, true, false, 60))) {
            // line 61
            echo "        ";
            $context["general_subblocks_data"] = twig_array_merge((isset($context["general_subblocks_data"]) || array_key_exists("general_subblocks_data", $context) ? $context["general_subblocks_data"] : (function () { throw new RuntimeError('Variable "general_subblocks_data" does not exist.', 61, $this->source); })()), [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "calendar", [], "any", false, false, false, 61), 'row')]);
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        $context["general_subblocks_data"] = twig_array_merge((isset($context["general_subblocks_data"]) || array_key_exists("general_subblocks_data", $context) ? $context["general_subblocks_data"] : (function () { throw new RuntimeError('Variable "general_subblocks_data" does not exist.', 64, $this->source); })()), [0 =>         // line 65
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "title", [], "any", false, false, false, 65), 'row'), 1 =>         // line 66
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'row'), 2 =>         // line 67
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "backgroundColor", [], "any", false, false, false, 67), 'row'), 3 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["form"] ?? null), "calendarUid", [], "any", true, true, false, 68)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "calendarUid", [], "any", false, false, false, 68), 'row')) : (null)), 4 =>         // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "attendees", [], "any", false, false, false, 69), 'row'), 5 => (((null === twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })()), "recurrence", [], "any", false, false, false, 70))) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "reminders", [], "any", false, false, false, 70), 'row')) : (null)), 6 =>         // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "notifyAttendees", [], "any", false, false, false, 71), 'row'), 7 => twig_call_macro($macros["invitations"], "macro_notify_attendees_component", [], 72, $context, $this->getSourceContext())]);
        // line 74
        echo "
    ";
        // line 76
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" =>         // line 82
(isset($context["general_subblocks_data"]) || array_key_exists("general_subblocks_data", $context) ? $context["general_subblocks_data"] : (function () { throw new RuntimeError('Variable "general_subblocks_data" does not exist.', 82, $this->source); })())], 1 => ["title" => "", "data" => [0 => (((((("<div " . twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [        // line 87
(isset($context["calendarEventDateRange"]) || array_key_exists("calendarEventDateRange", $context) ? $context["calendarEventDateRange"] : (function () { throw new RuntimeError('Variable "calendarEventDateRange" does not exist.', 87, $this->source); })())], 87, $context, $this->getSourceContext())) . ">") .         // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "start", [], "any", false, false, false, 88), 'row')) .         // line 89
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "end", [], "any", false, false, false, 89), 'row')) .         // line 90
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "allDay", [], "any", false, false, false, 90), 'row')) . "</div>"), 1 => ((twig_get_attribute($this->env, $this->source,         // line 92
($context["form"] ?? null), "recurrence", [], "any", true, true, false, 92)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "recurrence", [], "any", false, false, false, 92), 'row')) : (null))]]]]];
        // line 97
        echo "
    ";
        // line 98
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 98, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 99
        echo "
    ";
        // line 100
        $context["data"] = ["formErrors" => ((        // line 101
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 102
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 102, $this->source); })())];
        // line 104
        echo "
    ";
        // line 105
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/CalendarEvent/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 105,  260 => 104,  258 => 102,  257 => 101,  256 => 100,  253 => 99,  251 => 98,  248 => 97,  246 => 92,  245 => 90,  244 => 89,  243 => 88,  242 => 87,  241 => 82,  239 => 76,  236 => 74,  234 => 71,  233 => 70,  232 => 69,  231 => 68,  230 => 67,  229 => 66,  228 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  216 => 60,  213 => 59,  211 => 58,  208 => 57,  205 => 50,  203 => 49,  200 => 48,  197 => 47,  184 => 46,  170 => 43,  167 => 42,  164 => 41,  158 => 39,  156 => 37,  155 => 34,  153 => 33,  150 => 32,  137 => 31,  122 => 28,  117 => 27,  114 => 26,  111 => 22,  109 => 21,  106 => 20,  103 => 19,  100 => 16,  98 => 15,  95 => 14,  93 => 10,  90 => 9,  87 => 8,  74 => 7,  60 => 1,  58 => 5,  56 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroCalendar/invitations.html.twig' as invitations %}

{% oro_title_set({params : {\"%entity.title%\": entity.title, \"%entityName%\": 'oro.calendar.calendarevent.entity_label'|trans } }) %}
{% set entityId = entity.id %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set html = UI.saveAndCloseButton({
        'route': 'oro_calendar_event_view',
        'params': {'id': '\$id'}
    }) %}

    {% if is_granted('oro_calendar_event_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_calendar_event_create'
        }) %}
    {% endif %}

    {% if is_granted('oro_calendar_event_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_calendar_event_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
    {{ UI.cancelButton(path('oro_calendar_event_index')) }}
{% endblock %}

{% block pageHeader %}
    {% if entityId %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   path('oro_calendar_event_index'),
            'indexLabel':  'oro.calendar.calendarevent.entity_plural_label'|trans,
            'entityTitle': entity.title
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.calendar.calendarevent.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'calendarevent-form' %}
    {% set calendarEventDateRange = {
        module: 'orocalendar/js/app/components/calendar-event-date-range-component',
        name: 'calendar-event-date-range',
        options: {
            nativeMode: isMobileVersion()
        }
    } %}

    {% set general_subblocks_data = [] %}

    {% if not entityId and form.calendar is defined %}
        {% set general_subblocks_data = general_subblocks_data|merge([form_row(form.calendar)]) %}
    {% endif %}

    {% set general_subblocks_data = general_subblocks_data|merge([
        form_row(form.title),
        form_row(form.description),
        form_row(form.backgroundColor),
        form.calendarUid is defined ? form_row(form.calendarUid) : null,
        form_row(form.attendees),
        entity.recurrence is null ? form_row(form.reminders) : null,
        form_row(form.notifyAttendees),
        invitations.notify_attendees_component()
    ]) %}

    {# @todo Verify the condition in the code of the last element in data (notifyGuestsComponent) is correct #}
    {% set dataBlocks = [{
        'title': 'General Information'|trans,
        'class': 'active',
        'subblocks': [
            {
                'title': '',
                'data': general_subblocks_data
            },
            {
                'title': '',
                'data':  [
                    '<div ' ~ UI.renderPageComponentAttributes(calendarEventDateRange) ~ '>' ~
                        form_row(form.start) ~
                        form_row(form.end) ~
                        form_row(form.allDay) ~
                    '</div>',
                    form.recurrence is defined ? form_row(form.recurrence) : null
                ]
            }
        ]
    }] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks
    } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroCalendar/CalendarEvent/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/update.html.twig");
    }
}
