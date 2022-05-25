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

/* @OroCalendar/Calendar/view.html.twig */
class __TwigTemplate_6fd3dca580e27c0f709611c5b38296d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'stats' => [$this, 'block_stats'],
            'calendar_connections' => [$this, 'block_calendar_connections'],
            'calendar_events' => [$this, 'block_calendar_events'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Calendar/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/view.html.twig"));

        // line 2
        $macros["calendarTemplates"] = $this->macros["calendarTemplates"] = $this->loadTemplate("@OroCalendar/templates.html.twig", "@OroCalendar/Calendar/view.html.twig", 2)->unwrap();
        // line 4
        $context["name"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "owner", [], "any", false, false, false, 4)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"));

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 5
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()), "%calendarname%" => ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()))) : ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })())))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCalendar/Calendar/view.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/Calendar/view.html.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_calendar_event_view")) {
            // line 11
            echo "        <div class=\"btn-group\">
            ";
            // line 12
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_calendar_event_index"), "iCss" => "fa-clock-o", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.view_events"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.view_events")]], 12, $context, $this->getSourceContext());
            // line 17
            echo "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 23
        echo "    ";
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 24
            echo "        ";
            $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.entity_label")]];
            // line 25
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25))) {
                // line 26
                echo "            ";
                $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 26, $this->source); })()), [0 => ["label" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26)]]);
                // line 27
                echo "        ";
            }
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $this->loadTemplate("@OroNavigation/Menu/breadcrumbs.html.twig", "@OroCalendar/Calendar/view.html.twig", 29)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 33
        echo "    <div class=\"calendar-title-wrapper navbar-extra\">
        ";
        // line 34
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 35
            echo "            ";
            $context["breadcrumbs"] = ["entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.entity_label")];
            // line 36
            echo "        ";
        }
        // line 37
        $this->displayParentBlock("pageHeader", $context, $blocks);
        // line 38
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 43
    public function block_calendar_connections($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("calendar_connections", $this->getTemplateName(), 43));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar_connections"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar_connections"));

        // line 44
        echo "    <div class=\"calendars\">
        <form action=\"#\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["user_select_form"]) || array_key_exists("user_select_form", $context) ? $context["user_select_form"] : (function () { throw new RuntimeError('Variable "user_select_form" does not exist.', 46, $this->source); })()), 'row');
        echo "
        </form>
        <div class=\"calendar-connections\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_calendar_events($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("calendar_events", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar_events"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar_events"));

        // line 53
        echo "    <div class=\"calendar-events\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 56
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 56));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 57
        echo "    ";
        $context["calendarOptions"] = ["calendar" => twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "calendarOptions" =>         // line 59
(isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 59, $this->source); })()), "eventsItemsJson" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_calendarevents", ["calendar" => twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "start" => twig_date_format_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 60, $this->source); })()), "c"), "end" => twig_date_format_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 60, $this->source); })()), "c"), "subordinate" => true])), "connectionsItemsJson" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_calendar_connections", ["id" => twig_get_attribute($this->env, $this->source,         // line 61
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)])), "eventsOptions" => ["defaultDate" => twig_date_format_filter($this->env, "now", "c", $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => "#template-view-calendar-event", "itemFormTemplateSelector" => "#template-calendar-event", "leftHeader" => "prev,next today", "centerHeader" => "title", "rightHeader" => "month,agendaWeek,agendaDay", "enableAttendeesInvitations" => $this->extensions['Oro\Bundle\CalendarBundle\Twig\AttendeesExtension']->isAttendeesInvitationEnabled()], "connectionsOptions" => ["modalContentTemplateId" => (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) ? ("connections-modal-content-template") : (null)), "containerSelector" => ".calendar-connections", "containerTemplateSelector" => "#template-calendar-connections", "itemTemplateSelector" => "#template-calendar-connection-item"], "colorManagerOptions" => ["colors" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_calendar.calendar_colors")], "invitationStatuses" => [0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")]];
        // line 88
        echo "
    <div class=\"sidebar-container\">
        <div id=\"calendar\" ";
        // line 90
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            echo " class=\"content-with-sidebar--container\"";
        }
        // line 91
        echo "             data-page-component-module=\"orocalendar/js/app/components/calendar-component\"
             data-page-component-options=\"";
        // line 92
        echo twig_escape_filter($this->env, json_encode((isset($context["calendarOptions"]) || array_key_exists("calendarOptions", $context) ? $context["calendarOptions"] : (function () { throw new RuntimeError('Variable "calendarOptions" does not exist.', 92, $this->source); })())), "html", null, true);
        echo "\"
        >
        ";
        // line 94
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 95
            echo "            <div class=\"calendar-connections-header\">
                <div class=\"dropdown\">
                    <button data-role=\"show-connections-modal\" class=\"btn btn-large\">
                        <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.select"), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
            ";
            // line 103
            $this->displayBlock("calendar_events", $context, $blocks);
            echo "
            <script id=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["calendarOptions"]) || array_key_exists("calendarOptions", $context) ? $context["calendarOptions"] : (function () { throw new RuntimeError('Variable "calendarOptions" does not exist.', 104, $this->source); })()), "connectionsOptions", [], "any", false, false, false, 104), "modalContentTemplateId", [], "any", false, false, false, 104), "html", null, true);
            echo "\" type=\"text/template\">
                <div data-layout=\"separate\">";
            // line 105
            $this->displayBlock("calendar_connections", $context, $blocks);
            echo "</div>
            </script>
        ";
        } else {
            // line 108
            echo "            <div class=\"content-with-sidebar--sidebar calendar-sidebar\" data-role=\"calendar-sidebar\">
                ";
            // line 109
            $this->displayBlock("calendar_connections", $context, $blocks);
            echo "
            </div>
            <div class=\"content-with-sidebar--content\">
                <div class=\"category-data\">
                    ";
            // line 113
            $this->displayBlock("calendar_events", $context, $blocks);
            echo "
                </div>
            </div>
        ";
        }
        // line 117
        echo "        </div>
    </div>
    <script type=\"text/template\" id=\"template-calendar-menu\">
        ";
        // line 120
        echo $this->extensions['Oro\Bundle\NavigationBundle\Twig\MenuExtension']->render((($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) ? ("calendar_menu_mobile") : ("calendar_menu")));
        echo "
    </script>

    <script type=\"text/template\" id=\"template-calendar-connections\">
        <ul class=\"connection-container\">
        </ul>
    </script>

    <script type=\"text/template\" id=\"template-calendar-connection-item\">
        ";
        // line 129
        ob_start();
        // line 130
        echo "        <li class=\"connection-item<% if (visible) { %> active<% } %>\">
            <span class=\"connection-item-label\" data-role=\"connection-label\">
                <span class=\"calendar-color\">
                    <% className = 'calendar-color__storage shift-checkbox' + (visible ? ' is-colored' : '')  %>
                    <span class=\"<%- className %>\" data-role=\"calendar-color-storage\"
                        <% if (!_.isEmpty(backgroundColor)) { %>
                            style=\"background-color: <%- backgroundColor %>; border-color: <%- backgroundColor %>; color: <%- backgroundColor %>;\"
                        <% } %>
                    >
                        <input data-role=\"color-checkbox\" type=\"checkbox\" <% if (visible) { %> checked <% } %>>
                    </span>
                </span>
                <span class=\"user-calendar\" title=\"<%- calendarName %>\"><%- calendarName %></span>
            </span>
            <div class=\"connection-menu-container dropdown\">
                ";
        // line 145
        $context["connectionTogglerId"] = uniqid("connection-dropdown-");
        // line 146
        echo "                <button id=\"";
        echo twig_escape_filter($this->env, (isset($context["connectionTogglerId"]) || array_key_exists("connectionTogglerId", $context) ? $context["connectionTogglerId"] : (function () { throw new RuntimeError('Variable "connectionTogglerId" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "\"
                        class=\"btn btn-square-light context-menu-button\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\"
                        data-target=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["connectionTogglerId"]) || array_key_exists("connectionTogglerId", $context) ? $context["connectionTogglerId"] : (function () { throw new RuntimeError('Variable "connectionTogglerId" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "\"
                        data-placement=\"bottom-end\"
                >
                    <span class=\"fa-ellipsis-h fa-offset-none\" aria-hidden=\"true\"></span>
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["connectionTogglerId"]) || array_key_exists("connectionTogglerId", $context) ? $context["connectionTogglerId"] : (function () { throw new RuntimeError('Variable "connectionTogglerId" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "\">
                    <div data-role=\"connection-menu-content\"></div>
                </div>
            </div>
        </li>
        ";
        $___internal_parse_78_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        echo twig_spaceless($___internal_parse_78_);
        // line 161
        echo "    </script>

    ";
        // line 163
        echo twig_call_macro($macros["calendarTemplates"], "macro_calendar_event_view_template", ["template-view-calendar-event"], 163, $context, $this->getSourceContext());
        echo "
    ";
        // line 164
        echo twig_call_macro($macros["calendarTemplates"], "macro_calendar_event_form_template", ["template-calendar-event", (isset($context["event_form"]) || array_key_exists("event_form", $context) ? $context["event_form"] : (function () { throw new RuntimeError('Variable "event_form" does not exist.', 164, $this->source); })())], 164, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Calendar/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 164,  442 => 163,  438 => 161,  436 => 129,  427 => 155,  419 => 150,  411 => 146,  409 => 145,  392 => 130,  390 => 129,  378 => 120,  373 => 117,  366 => 113,  359 => 109,  356 => 108,  350 => 105,  346 => 104,  342 => 103,  335 => 99,  329 => 95,  327 => 94,  322 => 92,  319 => 91,  315 => 90,  311 => 88,  309 => 61,  308 => 60,  307 => 59,  306 => 58,  304 => 57,  291 => 56,  277 => 53,  264 => 52,  246 => 46,  242 => 44,  229 => 43,  205 => 41,  191 => 38,  189 => 37,  186 => 36,  183 => 35,  181 => 34,  178 => 33,  165 => 32,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  139 => 25,  136 => 24,  133 => 23,  120 => 22,  104 => 17,  102 => 12,  99 => 11,  97 => 10,  94 => 9,  91 => 8,  78 => 7,  64 => 1,  62 => 5,  59 => 4,  57 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroCalendar/templates.html.twig' as calendarTemplates %}

{% set name = entity.owner|oro_format_name|default('N/A'|trans) %}
{% oro_title_set({params : {\"%username%\": name, \"%calendarname%\": entity.name|default(name) }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_calendar_event_view') %}
        <div class=\"btn-group\">
            {{ UI.button({
                'path' : path('oro_calendar_event_index'),
                'iCss': 'fa-clock-o',
                'label': 'oro.calendar.view_events'|trans,
                'title': 'oro.calendar.view_events'|trans
            }) }}
        </div>
    {% endif %}
{% endblock navButtons %}

{% block breadcrumb %}
    {% if breadcrumbs is not defined %}
        {% set breadcrumbs = [{'label': 'oro.calendar.entity_label'|trans }] %}
        {% if entity.name is not empty %}
            {% set breadcrumbs = breadcrumbs|merge([{'label': entity.name}]) %}
        {% endif %}
    {% endif %}
    {% include '@OroNavigation/Menu/breadcrumbs.html.twig' %}
{% endblock breadcrumb %}

{% block pageHeader %}
    <div class=\"calendar-title-wrapper navbar-extra\">
        {% if breadcrumbs is not defined %}
            {% set breadcrumbs = {'entityTitle': 'oro.calendar.entity_label'|trans } %}
        {% endif %}
        {{- parent() -}}
    </div>
{% endblock pageHeader %}

{% block stats %}{% endblock stats %}

{% block calendar_connections %}
    <div class=\"calendars\">
        <form action=\"#\">
            {{ form_row(user_select_form) }}
        </form>
        <div class=\"calendar-connections\"></div>
    </div>
{% endblock calendar_connections %}

{% block calendar_events %}
    <div class=\"calendar-events\"></div>
{% endblock calendar_events %}

{% block content_data %}
    {% set calendarOptions = {
            calendar: entity.id,
            calendarOptions: calendar,
            eventsItemsJson: render(path('oro_api_get_calendarevents', {calendar: entity.id, start: startDate|date('c'), end: endDate|date('c'), subordinate: true})),
            connectionsItemsJson: render(path('oro_api_get_calendar_connections', {id: entity.id})),
            eventsOptions: {
                defaultDate: 'now'|date('c', oro_timezone()),
                'containerSelector': '.calendar-events',
                'itemViewTemplateSelector': '#template-view-calendar-event',
                'itemFormTemplateSelector': '#template-calendar-event',
                'leftHeader': 'prev,next today',
                'centerHeader': 'title',
                'rightHeader': 'month,agendaWeek,agendaDay',
                'enableAttendeesInvitations': is_attendees_invitation_enabled()
            },
            connectionsOptions: {
                'modalContentTemplateId': isMobileVersion() ? 'connections-modal-content-template' : null,
                'containerSelector': '.calendar-connections',
                'containerTemplateSelector': '#template-calendar-connections',
                'itemTemplateSelector': '#template-calendar-connection-item',
            },
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

    <div class=\"sidebar-container\">
        <div id=\"calendar\" {% if isDesktopVersion() %} class=\"content-with-sidebar--container\"{% endif %}
             data-page-component-module=\"orocalendar/js/app/components/calendar-component\"
             data-page-component-options=\"{{ calendarOptions | json_encode }}\"
        >
        {% if isMobileVersion() %}
            <div class=\"calendar-connections-header\">
                <div class=\"dropdown\">
                    <button data-role=\"show-connections-modal\" class=\"btn btn-large\">
                        <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                        {{ 'oro.calendar.select'|trans }}
                    </button>
                </div>
            </div>
            {{ block('calendar_events') }}
            <script id=\"{{ calendarOptions.connectionsOptions.modalContentTemplateId }}\" type=\"text/template\">
                <div data-layout=\"separate\">{{ block('calendar_connections') }}</div>
            </script>
        {% else %}
            <div class=\"content-with-sidebar--sidebar calendar-sidebar\" data-role=\"calendar-sidebar\">
                {{ block('calendar_connections') }}
            </div>
            <div class=\"content-with-sidebar--content\">
                <div class=\"category-data\">
                    {{ block('calendar_events') }}
                </div>
            </div>
        {% endif %}
        </div>
    </div>
    <script type=\"text/template\" id=\"template-calendar-menu\">
        {{ oro_menu_render(isMobileVersion() ? 'calendar_menu_mobile' : 'calendar_menu') }}
    </script>

    <script type=\"text/template\" id=\"template-calendar-connections\">
        <ul class=\"connection-container\">
        </ul>
    </script>

    <script type=\"text/template\" id=\"template-calendar-connection-item\">
        {% apply spaceless %}
        <li class=\"connection-item<% if (visible) { %> active<% } %>\">
            <span class=\"connection-item-label\" data-role=\"connection-label\">
                <span class=\"calendar-color\">
                    <% className = 'calendar-color__storage shift-checkbox' + (visible ? ' is-colored' : '')  %>
                    <span class=\"<%- className %>\" data-role=\"calendar-color-storage\"
                        <% if (!_.isEmpty(backgroundColor)) { %>
                            style=\"background-color: <%- backgroundColor %>; border-color: <%- backgroundColor %>; color: <%- backgroundColor %>;\"
                        <% } %>
                    >
                        <input data-role=\"color-checkbox\" type=\"checkbox\" <% if (visible) { %> checked <% } %>>
                    </span>
                </span>
                <span class=\"user-calendar\" title=\"<%- calendarName %>\"><%- calendarName %></span>
            </span>
            <div class=\"connection-menu-container dropdown\">
                {% set connectionTogglerId = 'connection-dropdown-'|uniqid %}
                <button id=\"{{ connectionTogglerId }}\"
                        class=\"btn btn-square-light context-menu-button\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\"
                        data-target=\"{{ connectionTogglerId }}\"
                        data-placement=\"bottom-end\"
                >
                    <span class=\"fa-ellipsis-h fa-offset-none\" aria-hidden=\"true\"></span>
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"{{ connectionTogglerId }}\">
                    <div data-role=\"connection-menu-content\"></div>
                </div>
            </div>
        </li>
        {% endapply %}
    </script>

    {{ calendarTemplates.calendar_event_view_template('template-view-calendar-event') }}
    {{ calendarTemplates.calendar_event_form_template('template-calendar-event', event_form) }}
{% endblock content_data %}
", "@OroCalendar/Calendar/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Calendar/view.html.twig");
    }
}
