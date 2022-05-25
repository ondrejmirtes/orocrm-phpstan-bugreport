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

/* @OroTask/TaskCrud/view.html.twig */
class __TwigTemplate_be2917ebfeaa259647bb9f87ef0b4ecc extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/TaskCrud/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/TaskCrud/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/TaskCrud/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 2)->unwrap();
        // line 3
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 3)->unwrap();
        // line 4
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 4)->unwrap();
        // line 5
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 5)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.subject%" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["entity"] ?? null), "subject", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subject", [], "any", false, false, false, 7), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroTask/TaskCrud/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 10
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 10)->unwrap();
        // line 11
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 11)->unwrap();
        // line 12
        echo "
    ";
        // line 13
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter((isset($context["view_navButtons"]) || array_key_exists("view_navButtons", $context) ? $context["view_navButtons"] : (function () { throw new RuntimeError('Variable "view_navButtons" does not exist.', 13, $this->source); })()), "view_navButtons")) : ("view_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())]);
        // line 14
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        ";
            // line 16
            echo "        ";
            echo twig_call_macro($macros["AC"], "macro_addContextButton", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
            echo "
        ";
            // line 17
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_label")]], 17, $context, $this->getSourceContext());
            // line 20
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 24
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 24));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 25
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 25)->unwrap();
        // line 26
        echo "
    ";
        // line 28
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 29
        echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext());
        echo "
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 33
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 34
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 35
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "subject", [], "any", false, false, false, 38)];
        // line 40
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 43
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 43));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 44
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 44)->unwrap();
        // line 45
        echo "
    ";
        // line 46
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 48
        $context["status"] = ["open" => "enabled", "in_progress" => "tentatively", "closed" => "disabled"];
        // line 53
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53))) {
            // line 54
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), [], "array", false, false, false, 54)) ? (twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), [], "array", false, false, false, 54)) : ("disabled"))], 54, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 56
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 59
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 59));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 60
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/view.html.twig", 60)->unwrap();
        // line 62
        ob_start();
        // line 63
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 65
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.subject.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "subject", [], "any", false, false, false, 65)], 65, $context, $this->getSourceContext());
        echo "
                ";
        // line 66
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
                ";
        // line 67
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.due_date.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 67, $this->source); })()), "dueDate", [], "any", false, false, false, 67))], 67, $context, $this->getSourceContext());
        echo "
                ";
        // line 68
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.task_priority.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()), "taskPriority", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
        // line 70
        ob_start();
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "createdBy", [], "any", false, false, false, 71)) {
            // line 72
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "createdBy", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
        }
        $context["createdByData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.created_by.label"), (isset($context["createdByData"]) || array_key_exists("createdByData", $context) ? $context["createdByData"] : (function () { throw new RuntimeError('Variable "createdByData" does not exist.', 75, $this->source); })())], 75, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 78
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })())], 78, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["taskInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "subblocks" => [0 => ["data" => [0 =>         // line 87
(isset($context["taskInformation"]) || array_key_exists("taskInformation", $context) ? $context["taskInformation"] : (function () { throw new RuntimeError('Variable "taskInformation" does not exist.', 87, $this->source); })())]]]]];
        // line 91
        echo "
    ";
        // line 92
        $context["id"] = "taskView";
        // line 93
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 93, $this->source); })())];
        // line 94
        echo "
    ";
        // line 95
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTask/TaskCrud/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 95,  320 => 94,  317 => 93,  315 => 92,  312 => 91,  310 => 87,  309 => 83,  303 => 78,  297 => 75,  293 => 72,  291 => 71,  289 => 70,  287 => 68,  283 => 67,  279 => 66,  275 => 65,  271 => 63,  269 => 62,  266 => 60,  253 => 59,  239 => 56,  233 => 54,  230 => 53,  228 => 48,  223 => 46,  220 => 45,  217 => 44,  204 => 43,  188 => 40,  186 => 38,  185 => 35,  183 => 34,  170 => 33,  154 => 29,  151 => 28,  148 => 26,  145 => 25,  132 => 24,  117 => 20,  115 => 18,  114 => 17,  109 => 16,  107 => 15,  104 => 14,  102 => 13,  99 => 12,  96 => 11,  93 => 10,  80 => 9,  66 => 1,  64 => 7,  61 => 5,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import \"@OroActivity/macros.html.twig\" as AC %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroUser/macros.html.twig' as U %}

{% oro_title_set({params : {\"%entity.subject%\": entity.subject|default('N/A'|trans) }}) %}

{% block navButtons %}
    {% import '@OroActivity/macros.html.twig' as AC %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% placeholder view_navButtons with {entity: entity} %}
    {% if is_granted('EDIT', entity) %}
        {# Button for add context on the activity list item view page #}
        {{ AC.addContextButton(entity) }}
        {{ UI.editButton({
            'path' : path('oro_task_update', { id: entity.id }),
            'entity_label': 'oro.task.entity_label'|trans
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
        'entity': entity,
        'indexPath': path('oro_task_index'),
        'indexLabel': 'oro.task.entity_plural_label'|trans,
        'entityTitle': entity.subject
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <span class=\"page-title__status\">
        {% set status = {
            'open': 'enabled',
            'in_progress': 'tentatively',
            'closed': 'disabled'
        } %}
        {% if entity.status is not null %}
            {{ UI.badge(entity.status.name, status[entity.status.id] ? status[entity.status.id] : 'disabled') }}
        {% endif %}
    </span>
{% endblock breadcrumbs %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set taskInformation -%}
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.task.subject.label'|trans, entity.subject) }}
                {{ UI.renderSwitchableHtmlProperty('oro.task.description.label'|trans, entity.description) }}
                {{ UI.renderProperty('oro.task.due_date.label'|trans, entity.dueDate|oro_format_datetime) }}
                {{ UI.renderProperty('oro.task.task_priority.label'|trans, entity.taskPriority) }}

                {%- set createdByData -%}
                    {%- if entity.createdBy -%}
                        {{ U.render_user_name(entity.createdBy) }}
                    {%- endif -%}
                {%- endset -%}
                {{ UI.renderHtmlProperty('oro.task.created_by.label'|trans, createdByData) }}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(entity) }}
            </div>
        </div>
    {%- endset -%}

    {% set dataBlocks = [
        {
            'title': 'General Information'|trans,
            'subblocks': [
                {'data' : [taskInformation]}
            ]
        }
    ] %}

    {% set id = 'taskView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroTask/TaskCrud/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/TaskCrud/view.html.twig");
    }
}
