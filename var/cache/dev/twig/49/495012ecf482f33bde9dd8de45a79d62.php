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

/* @OroWorkflow/ProcessDefinition/view.html.twig */
class __TwigTemplate_46cfc31a2d7f15003f5c871e2fafd2c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/ProcessDefinition/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/ProcessDefinition/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/ProcessDefinition/view.html.twig"));


        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%process_definition.label%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3)]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroWorkflow/ProcessDefinition/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 6
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/ProcessDefinition/view.html.twig", 6)->unwrap();
        // line 7
        echo "
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_process_definition_update")) {
            // line 9
            echo "        ";
            $context["idButton"] = (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) . "-process-deactivate-btn");
            // line 10
            echo "        ";
            $context["options"] = ["data" => ["role" => "status-toggle"]];
            // line 15
            echo "        <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroworkflow/js/app/views/process-status-toggle-btn-view"]], 15, $context, $this->getSourceContext());
            // line 17
            echo ">
            ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "enabled", [], "any", false, false, false, 18)) {
                // line 19
                echo "                ";
                echo twig_call_macro($macros["UI"], "macro_button", [twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()), ["aCss" => "no-hash btn-danger", "iCss" => "fa-close", "id" =>                 // line 22
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 22, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.action.process.deactivate"), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_process_deactivate", ["processDefinition" => twig_get_attribute($this->env, $this->source,                 // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.action.process.deactivate")])], 19, $context, $this->getSourceContext());
                // line 26
                echo "
            ";
            } else {
                // line 28
                echo "                ";
                echo twig_call_macro($macros["UI"], "macro_button", [twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 28, $this->source); })()), ["iCss" => "fa-check", "aCss" => "no-hash btn-success", "id" =>                 // line 31
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 31, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.action.process.activate"), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_process_activate", ["processDefinition" => twig_get_attribute($this->env, $this->source,                 // line 33
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.action.process.activate")])], 28, $context, $this->getSourceContext());
                // line 35
                echo "
            ";
            }
            // line 37
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 42
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/ProcessDefinition/view.html.twig", 42)->unwrap();
        // line 43
        echo "
    ";
        // line 44
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), "enabled", [], "any", false, false, false, 46)) {
            // line 47
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "enabled"], 47, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 49
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive"), "disabled"], 49, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 51
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 54
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 54));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 55
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "createdAt", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "createdAt", [], "any", false, false, false, 55)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "updatedAt", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "updatedAt", [], "any", false, false, false, 56)), "html", null, true))) : (print ("N/A")));
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 59
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 59));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 60
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 61
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_process_definition_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.processdefinition.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "label", [], "any", false, false, false, 64)];
        // line 66
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 69
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 69));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 70
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/ProcessDefinition/view.html.twig", 70)->unwrap();
        // line 72
        ob_start();
        // line 73
        $context["entityConfig"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfig(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "relatedEntity", [], "any", false, false, false, 73));
        // line 74
        echo "        ";
        $context["relatedEntityLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["entityConfig"] ?? null), "label", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entityConfig"] ?? null), "label", [], "any", false, false, false, 74), "")) : ("")));
        // line 76
        ob_start();
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trigger"]) {
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["trigger"], "event", [], "any", false, false, false, 78)) {
                // line 79
                echo "                    ";
                $context["event"] = ("oro.workflow.block.view.process.trigger.event." . twig_get_attribute($this->env, $this->source, $context["trigger"], "event", [], "any", false, false, false, 79));
                // line 80
                echo "                    ";
                $context["when"] = ((twig_get_attribute($this->env, $this->source, $context["trigger"], "queued", [], "any", false, false, false, 80)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDuration(twig_get_attribute($this->env, $this->source,                 // line 81
$context["trigger"], "timeShift", [], "any", false, false, false, 81))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.process.trigger.when.immediately")));
                // line 84
                echo "
                    ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["trigger"], "field", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                        ";
                    $context["field"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entityConfig"] ?? null), "trigger", [], "any", false, true, false, 86), "field", [], "any", false, true, false, 86), "lable", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entityConfig"] ?? null), "trigger", [], "any", false, true, false, 86), "field", [], "any", false, true, false, 86), "lable", [], "any", false, false, false, 86), twig_get_attribute($this->env, $this->source, $context["trigger"], "field", [], "any", false, false, false, 86))) : (twig_get_attribute($this->env, $this->source, $context["trigger"], "field", [], "any", false, false, false, 86)));
                    // line 87
                    echo "                        ";
                    $context["after"] = ((("<b>" . (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })())) . "</b> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.process.trigger.after.property"));
                    // line 88
                    echo "                    ";
                } else {
                    // line 89
                    echo "                        ";
                    $context["after"] = ((("<b>" . (isset($context["relatedEntityLabel"]) || array_key_exists("relatedEntityLabel", $context) ? $context["relatedEntityLabel"] : (function () { throw new RuntimeError('Variable "relatedEntityLabel" does not exist.', 89, $this->source); })())) . "</b> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.process.trigger.after.entity"));
                    // line 90
                    echo "                    ";
                }
                // line 91
                echo "
                    ";
                // line 92
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.process.trigger.description", ["%after%" =>                 // line 93
(isset($context["after"]) || array_key_exists("after", $context) ? $context["after"] : (function () { throw new RuntimeError('Variable "after" does not exist.', 93, $this->source); })()), "%event%" => (("<b>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 94
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()))) . "</b>"), "%when%" => (("<b>" .                 // line 95
(isset($context["when"]) || array_key_exists("when", $context) ? $context["when"] : (function () { throw new RuntimeError('Variable "when" does not exist.', 95, $this->source); })())) . "</b>")]);
                // line 97
                echo "
                    <br />
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 99
$context["trigger"], "cron", [], "any", false, false, false, 99)) {
                // line 100
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.process.trigger.cron.description", ["{{ cron }}" => (("<b>" . $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source,                 // line 101
$context["trigger"], "cron", [], "any", false, false, false, 101))) . "</b>")]);
                // line 102
                echo "
                    <br />
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trigger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["triggerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 110
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.processdefinition.label.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 110, $this->source); })()), "label", [], "any", false, false, false, 110)], 110, $context, $this->getSourceContext());
        echo "
                ";
        // line 111
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.processdefinition.related_entity.label"), (isset($context["relatedEntityLabel"]) || array_key_exists("relatedEntityLabel", $context) ? $context["relatedEntityLabel"] : (function () { throw new RuntimeError('Variable "relatedEntityLabel" does not exist.', 111, $this->source); })())], 111, $context, $this->getSourceContext());
        echo "
                ";
        // line 112
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.processdefinition.execution_order.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 112, $this->source); })()), "executionOrder", [], "any", false, false, false, 112)], 112, $context, $this->getSourceContext());
        echo "
                ";
        // line 113
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.processtrigger.entity_plural_label"), (isset($context["triggerData"]) || array_key_exists("triggerData", $context) ? $context["triggerData"] : (function () { throw new RuntimeError('Variable "triggerData" does not exist.', 113, $this->source); })())], 113, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["processDefinitionInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.process_info"), "subblocks" => [0 => ["data" => [0 =>         // line 122
(isset($context["processDefinitionInfo"]) || array_key_exists("processDefinitionInfo", $context) ? $context["processDefinitionInfo"] : (function () { throw new RuntimeError('Variable "processDefinitionInfo" does not exist.', 122, $this->source); })())]]]]];
        // line 126
        echo "
    ";
        // line 127
        $context["id"] = "processDefinitionView";
        // line 128
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 128, $this->source); })())];
        // line 129
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
        return "@OroWorkflow/ProcessDefinition/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 129,  379 => 128,  377 => 127,  374 => 126,  372 => 122,  371 => 118,  365 => 113,  361 => 112,  357 => 111,  353 => 110,  349 => 108,  339 => 102,  337 => 101,  335 => 100,  333 => 99,  329 => 97,  327 => 95,  326 => 94,  325 => 93,  324 => 92,  321 => 91,  318 => 90,  315 => 89,  312 => 88,  309 => 87,  306 => 86,  304 => 85,  301 => 84,  299 => 81,  297 => 80,  294 => 79,  292 => 78,  288 => 77,  286 => 76,  283 => 74,  281 => 73,  279 => 72,  276 => 70,  263 => 69,  247 => 66,  245 => 64,  244 => 61,  242 => 60,  229 => 59,  212 => 56,  205 => 55,  192 => 54,  178 => 51,  172 => 49,  166 => 47,  164 => 46,  159 => 44,  156 => 43,  153 => 42,  140 => 41,  125 => 37,  121 => 35,  119 => 33,  118 => 31,  116 => 28,  112 => 26,  110 => 24,  109 => 22,  107 => 19,  105 => 18,  102 => 17,  99 => 15,  96 => 10,  93 => 9,  91 => 8,  88 => 7,  85 => 6,  72 => 5,  58 => 1,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}

{% oro_title_set({params : {\"%process_definition.label%\": entity.label} }) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_process_definition_update') %}
        {% set idButton = entity.name ~ '-process-deactivate-btn' %}
        {% set options = {
            'data': {
                'role': 'status-toggle'
            }
        } %}
        <div {{ UI.renderPageComponentAttributes({
            view: 'oroworkflow/js/app/views/process-status-toggle-btn-view'
        }) }}>
            {% if entity.enabled %}
                {{ UI.button(options|merge({
                    'aCss':  'no-hash btn-danger',
                    'iCss':  'fa-close',
                    'id':    idButton,
                    'label': 'oro.workflow.action.process.deactivate'|trans,
                    'path':  path('oro_api_process_deactivate', {'processDefinition': entity.name}),
                    'title': 'oro.workflow.action.process.deactivate'|trans,
                })) }}
            {% else %}
                {{ UI.button(options|merge({
                    'iCss':  'fa-check',
                    'aCss':  'no-hash btn-success',
                    'id':    idButton,
                    'label': 'oro.workflow.action.process.activate'|trans,
                    'path':  path('oro_api_process_activate', {'processDefinition': entity.name}),
                    'title': 'oro.workflow.action.process.activate'|trans,
                })) }}
            {% endif %}
        </div>
    {% endif %}
{% endblock navButtons %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <span class=\"page-title__status\">
        {% if entity.enabled %}
            {{ UI.badge('Active'|trans, 'enabled') }}
        {% else %}
            {{ UI.badge('Inactive'|trans, 'disabled') }}
        {% endif %}
    </span>
{% endblock breadcrumbs %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A' }}</li>
{% endblock stats %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_process_definition_index'),
        'indexLabel': 'oro.workflow.processdefinition.entity_plural_label'|trans,
        'entityTitle': entity.label
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set processDefinitionInfo -%}
        {% set entityConfig = oro_entity_config(entity.relatedEntity) %}
        {% set relatedEntityLabel = entityConfig.label|default('')|trans %}

        {%- set triggerData -%}
            {%- for trigger in triggers -%}
                {% if trigger.event %}
                    {% set event = 'oro.workflow.block.view.process.trigger.event.' ~ trigger.event  %}
                    {% set when = trigger.queued ?
                        trigger.timeShift|oro_format_duration :
                        'oro.workflow.block.view.process.trigger.when.immediately'|trans
                    %}

                    {% if trigger.field %}
                        {% set field = entityConfig.trigger.field.lable|default(trigger.field) %}
                        {% set after = '<b>' ~ field ~ '</b> ' ~ 'oro.workflow.block.view.process.trigger.after.property'|trans %}
                    {% else %}
                        {% set after = '<b>' ~ relatedEntityLabel ~ '</b> ' ~ 'oro.workflow.block.view.process.trigger.after.entity'|trans %}
                    {% endif %}

                    {{ 'oro.workflow.block.view.process.trigger.description'|trans({
                            '%after%': after,
                            '%event%': '<b>' ~ event|trans ~ '</b>',
                            '%when%':  '<b>' ~ when ~ '</b>'
                        })|raw
                    }}
                    <br />
                {% elseif trigger.cron %}
                    {{ 'oro.workflow.block.view.process.trigger.cron.description'|trans({
                        '{{ cron }}': '<b>' ~ trigger.cron|oro_html_sanitize ~ '</b>'
                    })|raw }}
                    <br />
                {% endif %}
            {%- endfor -%}
        {%- endset -%}

        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.workflow.processdefinition.label.label'|trans, entity.label) }}
                {{ UI.renderProperty('oro.workflow.processdefinition.related_entity.label'|trans, relatedEntityLabel) }}
                {{ UI.renderProperty('oro.workflow.processdefinition.execution_order.label'|trans, entity.executionOrder) }}
                {{ UI.renderHtmlProperty('oro.workflow.processtrigger.entity_plural_label'|trans, triggerData) }}
            </div>
        </div>
    {%- endset -%}

    {% set dataBlocks = [
        {
            'title': 'oro.workflow.block.title.process_info'|trans,
            'subblocks': [
                {'data' : [processDefinitionInfo] },
            ]
        }
    ] %}

    {% set id = 'processDefinitionView' %}
    {% set data = {'dataBlocks': dataBlocks} %}
    {{ parent() }}
{% endblock content_data %}
", "@OroWorkflow/ProcessDefinition/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/ProcessDefinition/view.html.twig");
    }
}
