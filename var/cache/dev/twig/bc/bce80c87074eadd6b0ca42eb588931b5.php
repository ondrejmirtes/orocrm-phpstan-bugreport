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

/* @OroTask/TaskCrud/update.html.twig */
class __TwigTemplate_89f9b05e1d93ac4368478bf028ad3c5c extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/TaskCrud/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/TaskCrud/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/TaskCrud/update.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/update.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.subject%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "subject", [], "any", false, false, false, 4), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_label")]]);
        // line 5
        $context["entityId"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroTask/TaskCrud/update.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/update.html.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_task_view", "params" => ["id" => "\$id"]]], 10, $context, $this->getSourceContext());
        // line 14
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_task_create")) {
            // line 15
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 15, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_task_create"]], 15, $context, $this->getSourceContext()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_task_update")) {
            // line 20
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 20, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_task_update", "params" => ["id" => "\$id"]]], 20, $context, $this->getSourceContext()));
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 25, $this->source); })())]], 25, $context, $this->getSourceContext());
        echo "
    ";
        // line 26
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_index")], 26, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 30
        echo "    ";
        if ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 32
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "subject", [], "any", false, false, false, 35)];
            // line 37
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 39
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_label")]);
            // line 40
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroTask/TaskCrud/update.html.twig", 40)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 40, $this->source); })())]));
            // line 41
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 45
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/TaskCrud/update.html.twig", 45)->unwrap();
        // line 46
        echo "
    ";
        // line 47
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 49
        $context["status"] = ["open" => "enabled", "in_progress" => "tentatively", "closed" => "disabled"];
        // line 54
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55)) ? (twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55)) : ("disabled"))], 55, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 57
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 61
        echo "    ";
        $context["id"] = "task-form";
        // line 62
        echo "
    ";
        // line 63
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "subject", [], "any", false, false, false, 69), 'row'), 1 =>         // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'row'), 2 =>         // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "dueDate", [], "any", false, false, false, 71), 'row'), 3 =>         // line 72
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72), 'row'), 4 =>         // line 73
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "taskPriority", [], "any", false, false, false, 73), 'row'), 5 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["form"] ?? null), "owner", [], "any", true, true, false, 74)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "owner", [], "any", false, false, false, 74), 'row')) : ("")), 6 =>         // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "reminders", [], "any", false, false, false, 75), 'row')]]]]];
        // line 80
        echo "
    ";
        // line 81
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 81, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 82
        echo "
    ";
        // line 83
        $context["data"] = ["formErrors" => ((        // line 84
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 85
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 85, $this->source); })())];
        // line 87
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTask/TaskCrud/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 87,  268 => 85,  267 => 84,  266 => 83,  263 => 82,  261 => 81,  258 => 80,  256 => 75,  255 => 74,  254 => 73,  253 => 72,  252 => 71,  251 => 70,  250 => 69,  249 => 63,  246 => 62,  243 => 61,  230 => 60,  216 => 57,  210 => 55,  207 => 54,  205 => 49,  200 => 47,  197 => 46,  194 => 45,  181 => 44,  167 => 41,  164 => 40,  161 => 39,  155 => 37,  153 => 35,  152 => 32,  150 => 31,  147 => 30,  134 => 29,  119 => 26,  114 => 25,  111 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 15,  96 => 14,  94 => 10,  91 => 9,  88 => 8,  75 => 7,  61 => 1,  59 => 5,  57 => 4,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% oro_title_set({params : {\"%entity.subject%\": entity.subject, \"%entityName%\": 'oro.task.entity_label'|trans }}) %}
{% set entityId = entity.id %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set html = UI.saveAndCloseButton({
        'route': 'oro_task_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_task_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_task_create'
        }) %}
    {% endif %}
    {% if is_granted('oro_task_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_task_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
    {{ UI.cancelButton(path('oro_task_index')) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if entityId %}
        {% set breadcrumbs = {
            'entity': entity,
            'indexPath': path('oro_task_index'),
            'indexLabel': 'oro.task.entity_plural_label'|trans,
            'entityTitle': entity.subject
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.task.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
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
    {% set id = 'task-form' %}

    {% set dataBlocks = [{
        'title': 'General Information'|trans,
        'subblocks': [
            {
                'title': '',
                'data': [
                    form_row(form.subject),
                    form_row(form.description),
                    form_row(form.dueDate),
                    form_row(form.status),
                    form_row(form.taskPriority),
                    form.owner is defined ? form_row(form.owner) : '',
                    form_row(form.reminders)
                ]
            }
        ]
    }] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroTask/TaskCrud/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/TaskCrud/update.html.twig");
    }
}
