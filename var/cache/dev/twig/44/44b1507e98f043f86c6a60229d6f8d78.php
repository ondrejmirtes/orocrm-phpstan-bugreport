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

/* @OroWorkflow/WorkflowDefinition/view.html.twig */
class __TwigTemplate_4817800b4dfa73bedcc5677ba7f8d45a extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/WorkflowDefinition/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/view.html.twig"));

        // line 2
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%workflow_definition.label%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4)]]);
        // line 6
        $context["isActive"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "isActive", [], "any", false, false, false, 6);
        // line 8
        $context["pageComponent"] = ["module" => "oroworkflow/js/app/components/workflow-viewer-component", "options" => ["entity" => ["configuration" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "configuration", [], "any", false, false, false, 12), "name" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "label" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "entity" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "relatedEntity", [], "any", false, false, false, 15), "entity_attribute" => ((twig_get_attribute($this->env, $this->source,         // line 16
($context["entity"] ?? null), "entityAttributeName", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "entityAttributeName", [], "any", false, false, false, 16), "entity")) : ("entity")), "startStep" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["entity"] ?? null), "startStep", [], "any", false, true, false, 17), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "startStep", [], "any", false, true, false, 17), "name", [], "any", false, false, false, 17), null)) : (null)), "stepsDisplayOrdered" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "stepsDisplayOrdered", [], "any", false, false, false, 18)], "chartOptions" => ["Endpoint" => [0 => "Blank", 1 => []]], "connectionOptions" => ["detachable" => false]]];
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 30));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 31
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 31)->unwrap();
        // line 32
        echo "
    ";
        // line 33
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 35
        if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "        ";
            $context["idButton"] = (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36) . "-workflow-deactivate-btn");
            // line 37
            echo "
        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 40
            echo twig_escape_filter($this->env, json_encode(["view" => "oroworkflow/js/app/views/workflow-deactivate-btn-view", "selectors" => ["button" => ("#" .             // line 43
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 43, $this->source); })()))]]), "html", null, true);
            // line 45
            echo "\">

            ";
            // line 47
            echo twig_call_macro($macros["UI"], "macro_button", [["aCss" => "no-hash btn-danger", "iCss" => "fa-close", "id" =>             // line 50
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 50, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.datagrid.deactivate"), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_deactivate", ["workflowDefinition" => twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.datagrid.deactivate"), "data" => ["name" => twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "label" => twig_get_attribute($this->env, $this->source,             // line 56
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "label", [], "any", false, false, false, 56)]]], 47, $context, $this->getSourceContext());
            // line 58
            echo "
        </span>
    ";
        } else {
            // line 61
            echo "        ";
            $context["idButton"] = (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61) . "-workflow-activate-btn");
            // line 62
            echo "
        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 65
            echo twig_escape_filter($this->env, json_encode(["view" => "oroworkflow/js/app/views/workflow-activate-btn-view", "selectors" => ["button" => ("#" .             // line 68
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 68, $this->source); })()))]]), "html", null, true);
            // line 70
            echo "\">

            ";
            // line 72
            echo twig_call_macro($macros["UI"], "macro_button", [["aCss" => "no-hash btn-success", "iCss" => "fa-check", "id" =>             // line 75
(isset($context["idButton"]) || array_key_exists("idButton", $context) ? $context["idButton"] : (function () { throw new RuntimeError('Variable "idButton" does not exist.', 75, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.datagrid.activate"), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_activate", ["workflowDefinition" => twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.datagrid.activate"), "data" => ["name" => twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), "label" => twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })()), "label", [], "any", false, false, false, 81)]]], 72, $context, $this->getSourceContext());
            // line 83
            echo "
        </span>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 87, $this->source); })()), "system", [], "any", false, false, false, 87)) {
            // line 88
            echo "        ";
            if (((isset($context["edit_allowed"]) || array_key_exists("edit_allowed", $context) ? $context["edit_allowed"] : (function () { throw new RuntimeError('Variable "edit_allowed" does not exist.', 88, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 88, $this->source); })())))) {
                // line 89
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_definition_update", ["name" => twig_get_attribute($this->env, $this->source,                 // line 90
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_label")]], 89, $context, $this->getSourceContext());
                // line 92
                echo "
        ";
            }
            // line 94
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 94, $this->source); })()))) {
                // line 95
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_definition_delete", ["workflowDefinition" => twig_get_attribute($this->env, $this->source,                 // line 96
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 96, $this->source); })()), "name", [], "any", false, false, false, 96)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_definition_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-workflow-definition", "dataId" => twig_get_attribute($this->env, $this->source,                 // line 100
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_label")]], 95, $context, $this->getSourceContext());
                // line 102
                echo "
        ";
            }
            // line 104
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 107
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 107));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 108
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })()), "updatedAt", [], "any", false, false, false, 109)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })()), "updatedAt", [], "any", false, false, false, 109)), "html", null, true))) : (print ("N/A")));
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 112
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 112));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 113
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 114
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 114, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_definition_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 117
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 117, $this->source); })()), "label", [], "any", false, false, false, 117)];
        // line 119
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 122
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 122));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 123
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 123)->unwrap();
        // line 124
        echo "
    ";
        // line 125
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "

    <span class=\"page-title__status\">
        ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 128, $this->source); })()), "system", [], "any", false, false, false, 128)) {
            // line 129
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.status.system.label"), "tentatively"], 129, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 131
        echo "        ";
        if ( !(isset($context["edit_allowed"]) || array_key_exists("edit_allowed", $context) ? $context["edit_allowed"] : (function () { throw new RuntimeError('Variable "edit_allowed" does not exist.', 131, $this->source); })())) {
            // line 132
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.status.readonly.label"), "tentatively"], 132, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 134
        echo "        ";
        if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 134, $this->source); })())) {
            // line 135
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "enabled"], 135, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 137
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive"), "disabled"], 137, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 139
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 201
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 201));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 202
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 202)->unwrap();
        // line 203
        echo "    ";
        $macros["workflowDefinitionView"] = $this;
        // line 204
        echo "
    ";
        // line 205
        ob_start();
        // line 206
        echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 209
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.label.label"), (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 209, $this->source); })()), "label", [], "any", false, false, false, 209)) . twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", [twig_get_attribute($this->env, $this->source, (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 209, $this->source); })()), "label", [], "any", false, false, false, 209)], 209, $context, $this->getSourceContext()))], 209, $context, $this->getSourceContext());
        echo "

                ";
        // line 211
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.related_entity.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(twig_get_attribute($this->env, $this->source,         // line 213
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 213, $this->source); })()), "relatedEntity", [], "any", false, false, false, 213), "label"))], 211, $context, $this->getSourceContext());
        // line 214
        echo "
                ";
        // line 215
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.workflow.default_step"), ((twig_get_attribute($this->env, $this->source,         // line 217
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 217, $this->source); })()), "startStep", [], "any", false, false, false, 217)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 217, $this->source); })()), "startStep", [], "any", false, false, false, 217), "label", [], "any", false, false, false, 217), [], "workflows")) : (""))], 215, $context, $this->getSourceContext());
        // line 218
        echo "
                ";
        // line 219
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.steps_display_ordered.label"), ((twig_get_attribute($this->env, $this->source,         // line 221
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 221, $this->source); })()), "stepsDisplayOrdered", [], "any", false, false, false, 221)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 219, $context, $this->getSourceContext());
        // line 222
        echo "
                ";
        // line 223
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.priority.label"), twig_get_attribute($this->env, $this->source,         // line 225
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 225, $this->source); })()), "priority", [], "any", false, false, false, 225)], 223, $context, $this->getSourceContext());
        // line 226
        echo "

                ";
        // line 228
        ob_start();
        // line 229
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 229, $this->source); })()), "applications", [], "any", false, false, false, 229))) {
            // line 230
            echo "                        ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 230, $this->source); })()), "applications", [], "any", false, false, false, 230)], 230, $context, $this->getSourceContext());
            echo "
                    ";
        } else {
            // line 232
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 234
        echo "                ";
        $context["applications"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        echo "
                ";
        // line 236
        ob_start();
        // line 237
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 237, $this->source); })()), "exclusiveActiveGroups", [], "any", false, false, false, 237))) {
            // line 238
            echo "                        ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 238, $this->source); })()), "exclusiveActiveGroups", [], "any", false, false, false, 238)], 238, $context, $this->getSourceContext());
            echo "
                    ";
        } else {
            // line 240
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 242
        echo "                ";
        $context["activeGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 243
        echo "
                ";
        // line 244
        ob_start();
        // line 245
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 245, $this->source); })()), "exclusiveRecordGroups", [], "any", false, false, false, 245))) {
            // line 246
            echo "                        ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 246, $this->source); })()), "exclusiveRecordGroups", [], "any", false, false, false, 246)], 246, $context, $this->getSourceContext());
            echo "
                    ";
        } else {
            // line 248
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "
                    ";
        }
        // line 250
        echo "                ";
        $context["recordGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        echo "
                ";
        // line 252
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.applications.label"), (isset($context["applications"]) || array_key_exists("applications", $context) ? $context["applications"] : (function () { throw new RuntimeError('Variable "applications" does not exist.', 252, $this->source); })())], 252, $context, $this->getSourceContext());
        echo "
                ";
        // line 253
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.exclusive_active_groups.label"), (isset($context["activeGroups"]) || array_key_exists("activeGroups", $context) ? $context["activeGroups"] : (function () { throw new RuntimeError('Variable "activeGroups" does not exist.', 253, $this->source); })())], 253, $context, $this->getSourceContext());
        echo "
                ";
        // line 254
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.exclusive_record_groups.label"), (isset($context["recordGroups"]) || array_key_exists("recordGroups", $context) ? $context["recordGroups"] : (function () { throw new RuntimeError('Variable "recordGroups" does not exist.', 254, $this->source); })())], 254, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
    ";
        $context["workflowDefinitionInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 259
        echo "
    ";
        // line 260
        ob_start();
        // line 261
        echo "        <div class=\"row-fluid clearfix\">
            <div class=\"workflow-table-container\">
                <div class=\"workflow-definition-steps-list-container clearfix\">
                    <div class=\"grid-container steps-list\">
                        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                            <thead>
                                <tr>
                                    <th class=\"label-column\"><span>";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Step"), "html", null, true);
        echo "</span></th>
                                    <th><span>";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transitions"), "html", null, true);
        echo "</span></th>
                                    <th>
                                        <span title=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.order.tooltip"), "html", null, true);
        echo "\">
                                            ";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position"), "html", null, true);
        echo "
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=\"item-container\">";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 278, $this->source); })()), "configuration", [], "any", false, false, false, 278), "steps", [], "any", false, false, false, 278));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["stepName"] => $context["stepData"]) {
            // line 283
            echo "                                ";
            $context["stepData"] = twig_array_merge($context["stepData"], ["name" => $context["stepName"]]);
            // line 284
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 284) && twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 284, $this->source); })()), "isSystem", [], "any", false, false, false, 284))) {
                // line 285
                echo "                                    ";
                echo twig_call_macro($macros["workflowDefinitionView"], "macro_view_start_step_row", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 285, $this->source); })())], 285, $context, $this->getSourceContext());
                echo "
                                ";
            }
            // line 287
            echo "
                                ";
            // line 288
            echo twig_call_macro($macros["workflowDefinitionView"], "macro_view_step_row", [$context["stepData"], (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 288, $this->source); })()), (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 288, $this->source); })())], 288, $context, $this->getSourceContext());
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 290
            echo twig_call_macro($macros["workflowDefinitionView"], "macro_view_start_step_row", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 290, $this->source); })())], 290, $context, $this->getSourceContext());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepName'], $context['stepData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
        $context["workflowStepsAndTransitions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        echo "
    ";
        // line 300
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.general_information"), "subblocks" => [0 => ["data" => [0 =>         // line 304
(isset($context["workflowDefinitionInfo"]) || array_key_exists("workflowDefinitionInfo", $context) ? $context["workflowDefinitionInfo"] : (function () { throw new RuntimeError('Variable "workflowDefinitionInfo" does not exist.', 304, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.steps_and_transitions"), "subblocks" => [0 => ["data" => [0 =>         // line 311
(isset($context["workflowStepsAndTransitions"]) || array_key_exists("workflowStepsAndTransitions", $context) ? $context["workflowStepsAndTransitions"] : (function () { throw new RuntimeError('Variable "workflowStepsAndTransitions" does not exist.', 311, $this->source); })())]]]]];
        // line 316
        echo "
    ";
        // line 317
        if ( !$this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 318
            echo "        ";
            ob_start();
            // line 319
            echo "            <div class=\"workflow-step-viewer\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroworkflow/js/app/views/flowchart/flowchart-container-view", "name" => "flowchart-container"]], 319, $context, $this->getSourceContext());
            // line 322
            echo "></div>
        ";
            $context["workflowDiagram"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 324
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 324, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.workflow_diagrams"), "subblocks" => [0 => ["data" => [0 =>             // line 329
(isset($context["workflowDiagram"]) || array_key_exists("workflowDiagram", $context) ? $context["workflowDiagram"] : (function () { throw new RuntimeError('Variable "workflowDiagram" does not exist.', 329, $this->source); })())]]]]]);
            // line 334
            echo "    ";
        }
        // line 335
        echo "
    ";
        // line 336
        if ((array_key_exists("variables", $context) && twig_length_filter($this->env, (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 336, $this->source); })())))) {
            // line 337
            echo "        ";
            ob_start();
            // line 338
            echo "            <div class=\"widget-content\">
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">
                        ";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 341, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 342
                echo "                            <div class=\"control-group\">
                                <label class=\"control-label\">
                                    ";
                // line 344
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variable"], "options", [], "any", false, true, false, 344), "form_options", [], "any", true, true, false, 344) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variable"], "options", [], "any", false, true, false, 344), "form_options", [], "any", false, true, false, 344), "tooltip", [], "any", true, true, false, 344))) {
                    // line 345
                    echo "                                        ";
                    echo twig_call_macro($macros["UI"], "macro_tooltip", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variable"], "options", [], "any", false, false, false, 345), "form_options", [], "any", false, false, false, 345), "tooltip", [], "any", false, false, false, 345)], 345, $context, $this->getSourceContext());
                    echo "
                                    ";
                }
                // line 347
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "label", [], "any", false, false, false, 347), "html", null, true);
                echo "
                                </label>
                                <div class=\"controls\">
                                    <div class=\"control-label\">
                                        ";
                // line 351
                echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Oro\Bundle\WorkflowBundle\Twig\WorkflowExtension']->formatWorkflowVariableValue($context["variable"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")), "html", null, true);
                echo "
                                        ";
                // line 352
                echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 352, $this->source); })()), "variable_definitions", [], "any", false, false, false, 352), "variables", [], "any", false, false, false, 352), twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 352), [], "array", false, false, false, 352)], 352, $context, $this->getSourceContext());
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "                    </div>
                </div>
            </div>
        ";
            $context["variablesInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 361
            echo "
        ";
            // line 362
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 362, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.configuration.label"), "subblocks" => [0 => ["data" => [0 =>             // line 365
(isset($context["variablesInfo"]) || array_key_exists("variablesInfo", $context) ? $context["variablesInfo"] : (function () { throw new RuntimeError('Variable "variablesInfo" does not exist.', 365, $this->source); })())]]]]]);
            // line 368
            echo "
    ";
        }
        // line 370
        echo "
    ";
        // line 371
        $context["id"] = "workflowDefinitionView";
        // line 372
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 372, $this->source); })())];
        // line 373
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 142
    public function macro_view_step_row($__stepData__ = null, $__entity__ = null, $__translateLinks__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "stepData" => $__stepData__,
            "entity" => $__entity__,
            "translateLinks" => $__translateLinks__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_step_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_step_row"));

            // line 143
            echo "    ";
            $macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/WorkflowDefinition/view.html.twig", 143)->unwrap();
            // line 144
            echo "    <tr>
        <td class=\"step-name workflow-translatable-label\">
            ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 146, $this->source); })()), "label", [], "any", false, false, false, 146), "html", null, true);
            echo "
            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 147, $this->source); })()), "is_final", [], "any", false, false, false, 147)) {
                // line 148
                echo "                <strong title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.is_final.tooltip"), "html", null, true);
                echo "\">
                    (";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final"), "html", null, true);
                echo ")
                </strong>
            ";
            }
            // line 152
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 152, $this->source); })()), "order", [], "any", false, false, false, 152) >= 0) && (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 152, $this->source); })()))) {
                // line 153
                echo "                ";
                echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 153, $this->source); })()), "steps", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "label", [], "any", false, false, false, 153)], 153, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 155
            echo "        </td>
        <td class=\"step-transitions\">
            ";
            // line 157
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 157, $this->source); })()), "allowed_transitions", [], "any", false, false, false, 157))) {
                // line 158
                echo "                <ul class=\"transitions-list-short\">
                    ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 159, $this->source); })()), "allowed_transitions", [], "any", false, false, false, 159));
                foreach ($context['_seq'] as $context["_key"] => $context["transitionName"]) {
                    // line 160
                    echo "                        ";
                    $context["currentTransition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 160, $this->source); })()), "configuration", [], "any", false, false, false, 160), "transitions", [], "any", false, false, false, 160), $context["transitionName"], [], "array", false, false, false, 160);
                    // line 161
                    echo "                        ";
                    $context["toStep"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 161, $this->source); })()), "configuration", [], "any", false, false, false, 161), "steps", [], "any", false, false, false, 161), twig_get_attribute($this->env, $this->source, (isset($context["currentTransition"]) || array_key_exists("currentTransition", $context) ? $context["currentTransition"] : (function () { throw new RuntimeError('Variable "currentTransition" does not exist.', 161, $this->source); })()), "step_to", [], "any", false, false, false, 161), [], "array", false, false, false, 161);
                    // line 162
                    echo "                        <li>
                            <span>";
                    // line 163
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["currentTransition"]) || array_key_exists("currentTransition", $context) ? $context["currentTransition"] : (function () { throw new RuntimeError('Variable "currentTransition" does not exist.', 163, $this->source); })()), "label", [], "any", false, false, false, 163), [], "workflows"), "html", null, true);
                    echo "</span>
                            ";
                    // line 164
                    if ((isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 164, $this->source); })())) {
                        // line 165
                        echo "                                ";
                        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 165, $this->source); })()), "transitions", [], "any", false, false, false, 165), $context["transitionName"], [], "array", false, false, false, 165), "label", [], "any", false, false, false, 165)], 165, $context, $this->getSourceContext());
                        echo "
                            ";
                    }
                    // line 167
                    echo "                            <i class=\"fa-long-arrow-right\"></i>
                            <span title=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["toStep"]) || array_key_exists("toStep", $context) ? $context["toStep"] : (function () { throw new RuntimeError('Variable "toStep" does not exist.', 168, $this->source); })()), "label", [], "any", false, false, false, 168), [], "workflows"), "html", null, true);
                    echo "</span>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transitionName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                </ul>
            ";
            }
            // line 173
            echo "        </td>
        <td>
            <span title=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.order.tooltip"), "html", null, true);
            echo "\">
                ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stepData"]) || array_key_exists("stepData", $context) ? $context["stepData"] : (function () { throw new RuntimeError('Variable "stepData" does not exist.', 176, $this->source); })()), "order", [], "any", false, false, false, 176), "html", null, true);
            echo "
            </span>
        </td>
    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 182
    public function macro_view_start_step_row($__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_start_step_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_start_step_row"));

            // line 183
            echo "    ";
            $macros["workflowDefinitionView"] = $this;
            // line 184
            echo "
    ";
            // line 185
            $context["startTransitionNames"] = [];
            // line 186
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 186, $this->source); })()), "configuration", [], "any", false, false, false, 186), "transitions", [], "any", false, false, false, 186));
            foreach ($context['_seq'] as $context["transitionName"] => $context["transitionConfig"]) {
                // line 187
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["transitionConfig"], "is_start", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "            ";
                    $context["startTransitionNames"] = twig_array_merge((isset($context["startTransitionNames"]) || array_key_exists("startTransitionNames", $context) ? $context["startTransitionNames"] : (function () { throw new RuntimeError('Variable "startTransitionNames" does not exist.', 188, $this->source); })()), [0 => $context["transitionName"]]);
                    // line 189
                    echo "        ";
                }
                // line 190
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['transitionName'], $context['transitionConfig'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo twig_call_macro($macros["workflowDefinitionView"], "macro_view_step_row", [["label" => (("(" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start")) . ")"), "order" =>  -1, "is_final" => false, "allowed_transitions" =>             // line 196
(isset($context["startTransitionNames"]) || array_key_exists("startTransitionNames", $context) ? $context["startTransitionNames"] : (function () { throw new RuntimeError('Variable "startTransitionNames" does not exist.', 196, $this->source); })())],             // line 197
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 197, $this->source); })())], 192, $context, $this->getSourceContext());
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/WorkflowDefinition/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 197,  890 => 196,  889 => 191,  883 => 190,  880 => 189,  877 => 188,  874 => 187,  869 => 186,  867 => 185,  864 => 184,  861 => 183,  842 => 182,  822 => 176,  818 => 175,  814 => 173,  810 => 171,  799 => 168,  796 => 167,  790 => 165,  788 => 164,  784 => 163,  781 => 162,  778 => 161,  775 => 160,  771 => 159,  768 => 158,  766 => 157,  762 => 155,  756 => 153,  753 => 152,  747 => 149,  742 => 148,  740 => 147,  736 => 146,  732 => 144,  729 => 143,  708 => 142,  692 => 373,  689 => 372,  687 => 371,  684 => 370,  680 => 368,  678 => 365,  677 => 362,  674 => 361,  668 => 357,  657 => 352,  653 => 351,  645 => 347,  639 => 345,  637 => 344,  633 => 342,  629 => 341,  624 => 338,  621 => 337,  619 => 336,  616 => 335,  613 => 334,  611 => 329,  609 => 324,  605 => 322,  602 => 319,  599 => 318,  597 => 317,  594 => 316,  592 => 311,  591 => 304,  590 => 300,  587 => 299,  578 => 292,  572 => 290,  559 => 288,  556 => 287,  550 => 285,  547 => 284,  544 => 283,  526 => 278,  518 => 272,  514 => 271,  509 => 269,  505 => 268,  496 => 261,  494 => 260,  491 => 259,  483 => 254,  479 => 253,  475 => 252,  472 => 251,  469 => 250,  463 => 248,  457 => 246,  454 => 245,  452 => 244,  449 => 243,  446 => 242,  440 => 240,  434 => 238,  431 => 237,  429 => 236,  426 => 235,  423 => 234,  417 => 232,  411 => 230,  408 => 229,  406 => 228,  402 => 226,  400 => 225,  399 => 223,  396 => 222,  394 => 221,  393 => 219,  390 => 218,  388 => 217,  387 => 215,  384 => 214,  382 => 213,  381 => 211,  376 => 209,  371 => 206,  369 => 205,  366 => 204,  363 => 203,  360 => 202,  347 => 201,  333 => 139,  327 => 137,  321 => 135,  318 => 134,  312 => 132,  309 => 131,  303 => 129,  301 => 128,  295 => 125,  292 => 124,  289 => 123,  276 => 122,  260 => 119,  258 => 117,  257 => 114,  255 => 113,  242 => 112,  225 => 109,  218 => 108,  205 => 107,  191 => 104,  187 => 102,  185 => 100,  184 => 96,  182 => 95,  179 => 94,  175 => 92,  173 => 90,  171 => 89,  168 => 88,  166 => 87,  163 => 86,  158 => 83,  156 => 81,  155 => 80,  154 => 77,  153 => 75,  152 => 72,  148 => 70,  146 => 68,  145 => 65,  140 => 62,  137 => 61,  132 => 58,  130 => 56,  129 => 55,  128 => 52,  127 => 50,  126 => 47,  122 => 45,  120 => 43,  119 => 40,  114 => 37,  111 => 36,  109 => 35,  104 => 33,  101 => 32,  98 => 31,  85 => 30,  71 => 1,  69 => 18,  68 => 17,  67 => 16,  66 => 15,  65 => 14,  64 => 13,  63 => 12,  62 => 8,  60 => 6,  58 => 4,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

{% oro_title_set({params : {\"%workflow_definition.label%\": entity.label} }) %}

{% set isActive = entity.isActive %}

{% set pageComponent = {
        module: 'oroworkflow/js/app/components/workflow-viewer-component',
        options: {
            entity: {
                configuration: entity.configuration,
                name: entity.name,
                label: entity.label,
                entity: entity.relatedEntity,
                entity_attribute: entity.entityAttributeName | default('entity'),
                startStep: entity.startStep.name | default(null),
                stepsDisplayOrdered: entity.stepsDisplayOrdered,
            },
            chartOptions: {
                Endpoint: ['Blank', {}]
            },
            connectionOptions: {
                detachable: false
            }
        }
    }
%}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}

    {% if isActive %}
        {% set idButton = entity.name ~ '-workflow-deactivate-btn' %}

        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"{{ {
                view: 'oroworkflow/js/app/views/workflow-deactivate-btn-view',
                selectors: {
                    button: '#' ~ idButton
                }
            }|json_encode }}\">

            {{ UI.button({
                'aCss':  'no-hash btn-danger',
                'iCss':  'fa-close',
                'id':    idButton,
                'label': 'oro.workflow.workflowdefinition.datagrid.deactivate'|trans,
                'path':  path('oro_api_workflow_deactivate', {'workflowDefinition': entity.name}),
                'title': 'oro.workflow.workflowdefinition.datagrid.deactivate'|trans,
                'data': {
                    'name': entity.name,
                    'label': entity.label
                }
            }) }}
        </span>
    {% else %}
        {% set idButton = entity.name ~ '-workflow-activate-btn' %}

        <span
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"{{ {
                view: 'oroworkflow/js/app/views/workflow-activate-btn-view',
                selectors: {
                    button: '#' ~ idButton
                }
            }|json_encode }}\">

            {{ UI.button({
                'aCss': 'no-hash btn-success',
                'iCss': 'fa-check',
                'id': idButton,
                'label': 'oro.workflow.workflowdefinition.datagrid.activate'|trans,
                'path': path('oro_api_workflow_activate', {'workflowDefinition': entity.name}),
                'title': 'oro.workflow.workflowdefinition.datagrid.activate'|trans,
                'data': {
                    'name': entity.name,
                    'label': entity.label
                }
            }) }}
        </span>
    {% endif %}

    {% if not entity.system %}
        {% if edit_allowed and is_granted('EDIT', entity) %}
            {{ UI.editButton({
                'path' : path('oro_workflow_definition_update', { 'name': entity.name }),
                'entity_label': 'oro.workflow.workflowdefinition.entity_label'|trans
            }) }}
        {% endif %}
        {% if is_granted('DELETE', entity) %}
            {{ UI.deleteButton({
                'dataUrl': path('oro_api_workflow_definition_delete', {'workflowDefinition': entity.name}),
                'dataRedirect': path('oro_workflow_definition_index'),
                'aCss': 'no-hash remove-button',
                'id': 'btn-remove-workflow-definition',
                'dataId': entity.name,
                'entity_label': 'oro.workflow.workflowdefinition.entity_label'|trans
            }) }}
        {% endif %}
    {% endif %}
{% endblock navButtons %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A' }}</li>
{% endblock stats %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_workflow_definition_index'),
        'indexLabel': 'oro.workflow.workflowdefinition.entity_plural_label'|trans,
        'entityTitle': entity.label
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}

    <span class=\"page-title__status\">
        {% if entity.system %}
            {{ UI.badge('oro.workflow.status.system.label'|trans, 'tentatively') }}
        {% endif %}
        {% if not edit_allowed %}
            {{ UI.badge('oro.workflow.status.readonly.label'|trans, 'tentatively') }}
        {% endif %}
        {% if isActive %}
            {{ UI.badge('Active'|trans, 'enabled') }}
        {% else %}
            {{ UI.badge('Inactive'|trans, 'disabled') }}
        {% endif %}
    </span>
{% endblock breadcrumbs %}

{% macro view_step_row(stepData, entity, translateLinks) %}
    {% import '@OroWorkflow/macros.html.twig' as workflowMacros %}
    <tr>
        <td class=\"step-name workflow-translatable-label\">
            {{ stepData.label }}
            {% if stepData.is_final %}
                <strong title=\"{{ \"oro.workflow.workflowdefinition.step.is_final.tooltip\"|trans }}\">
                    ({{ \"Final\"|trans }})
                </strong>
            {% endif %}
            {% if stepData.order >= 0 and translateLinks %}
                {{ workflowMacros.renderGoToTranslationsIconByLink(translateLinks.steps[stepData.name].label) }}
            {% endif %}
        </td>
        <td class=\"step-transitions\">
            {% if stepData.allowed_transitions is not empty %}
                <ul class=\"transitions-list-short\">
                    {% for transitionName in stepData.allowed_transitions %}
                        {% set currentTransition = entity.configuration.transitions[transitionName] %}
                        {% set toStep = entity.configuration.steps[currentTransition.step_to] %}
                        <li>
                            <span>{{ currentTransition.label|trans({},'workflows') }}</span>
                            {% if (translateLinks) %}
                                {{ workflowMacros.renderGoToTranslationsIconByLink(translateLinks.transitions[transitionName].label) }}
                            {% endif %}
                            <i class=\"fa-long-arrow-right\"></i>
                            <span title=\"{{ \"oro.workflow.workflowdefinition.transition.step_to.tooltip\"|trans }}\">{{ toStep.label|trans({},'workflows') }}</span>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </td>
        <td>
            <span title=\"{{ \"oro.workflow.workflowdefinition.step.order.tooltip\"|trans }}\">
                {{ stepData.order }}
            </span>
        </td>
    </tr>
{% endmacro %}

{% macro view_start_step_row(entity) %}
    {% import _self as workflowDefinitionView %}

    {% set startTransitionNames = [] %}
    {% for transitionName, transitionConfig in entity.configuration.transitions %}
        {% if transitionConfig.is_start %}
            {% set startTransitionNames = startTransitionNames|merge([transitionName]) %}
        {% endif %}
    {% endfor %}
    {{-
        workflowDefinitionView.view_step_row({
            'label': '(' ~ 'Start'|trans ~ ')',
            'order': -1,
            'is_final': false,
            'allowed_transitions': startTransitionNames
        }, entity)
    -}}
{% endmacro %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as workflowDefinitionView %}

    {% set workflowDefinitionInfo %}
    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.label.label'|trans, entity.label|e ~ workflowMacros.renderGoToTranslationsIconByLink(translateLinks.label) ) }}

                {{ UI.renderProperty(
                    'oro.workflow.workflowdefinition.related_entity.label'|trans,
                    oro_entity_config_value(entity.relatedEntity, 'label')|trans
                ) }}
                {{ UI.renderProperty(
                    'oro.workflow.block.view.workflow.default_step'|trans,
                    entity.startStep ? entity.startStep.label|trans({},'workflows') : ''
                ) }}
                {{ UI.renderProperty(
                    'oro.workflow.workflowdefinition.steps_display_ordered.label'|trans,
                    entity.stepsDisplayOrdered ? 'Yes'|trans : 'No'|trans
                ) }}
                {{ UI.renderProperty(
                    'oro.workflow.workflowdefinition.priority.label'|trans,
                    entity.priority
                ) }}

                {% set applications %}
                    {% if entity.applications is not empty %}
                        {{ UI.renderList(entity.applications) }}
                    {% else %}
                        {{ 'N/A'|trans }}
                    {% endif %}
                {% endset %}

                {% set activeGroups %}
                    {% if entity.exclusiveActiveGroups is not empty %}
                        {{ UI.renderList(entity.exclusiveActiveGroups) }}
                    {% else %}
                        {{ 'N/A'|trans }}
                    {% endif %}
                {% endset %}

                {% set recordGroups %}
                    {% if entity.exclusiveRecordGroups is not empty %}
                        {{ UI.renderList(entity.exclusiveRecordGroups) }}
                    {% else %}
                        {{ 'N/A'|trans }}
                    {% endif %}
                {% endset %}

                {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.applications.label'|trans, applications) }}
                {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.exclusive_active_groups.label'|trans, activeGroups) }}
                {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.exclusive_record_groups.label'|trans, recordGroups) }}
            </div>
        </div>
    </div>
    {% endset %}

    {% set workflowStepsAndTransitions %}
        <div class=\"row-fluid clearfix\">
            <div class=\"workflow-table-container\">
                <div class=\"workflow-definition-steps-list-container clearfix\">
                    <div class=\"grid-container steps-list\">
                        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                            <thead>
                                <tr>
                                    <th class=\"label-column\"><span>{{ \"Step\"|trans }}</span></th>
                                    <th><span>{{ \"Transitions\"|trans }}</span></th>
                                    <th>
                                        <span title=\"{{ \"oro.workflow.workflowdefinition.step.order.tooltip\"|trans }}\">
                                            {{ \"Position\"|trans }}
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=\"item-container\">
                            {%- for stepName, stepData in entity.configuration.steps -%}
                                {#
                                    System workflows wont have (Start) step stored into database.
                                    So we need to force show it for UI.
                                #}
                                {% set stepData = stepData|merge({'name': stepName}) %}
                                {% if loop.first and entity.isSystem %}
                                    {{ workflowDefinitionView.view_start_step_row(entity) }}
                                {% endif %}

                                {{ workflowDefinitionView.view_step_row(stepData, entity, translateLinks) }}
                            {%- else -%}
                                {{ workflowDefinitionView.view_start_step_row(entity) }}
                            {%- endfor -%}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.workflow.block.title.general_information'|trans,
            'subblocks': [
                {'data' : [workflowDefinitionInfo] },
            ]
        },
        {
            'title': 'oro.workflow.block.title.steps_and_transitions'|trans,
            'subblocks': [
                {
                    'data':  [workflowStepsAndTransitions]
                },
            ]
        },
    ] %}

    {% if not isMobileVersion() %}
        {% set workflowDiagram %}
            <div class=\"workflow-step-viewer\" {{ UI.renderPageComponentAttributes({
                'view': 'oroworkflow/js/app/views/flowchart/flowchart-container-view',
                'name': 'flowchart-container'
            }) }}></div>
        {% endset %}
        {% set dataBlocks = dataBlocks|merge([
            {
                'title': 'oro.workflow.block.title.workflow_diagrams'|trans,
                'subblocks': [
                    {
                        'data':  [workflowDiagram]
                    },
                ]
            },
        ])%}
    {% endif %}

    {% if variables is defined and variables|length %}
        {% set variablesInfo %}
            <div class=\"widget-content\">
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">
                        {% for variable in variables %}
                            <div class=\"control-group\">
                                <label class=\"control-label\">
                                    {% if variable.options.form_options is defined and variable.options.form_options.tooltip is defined %}
                                        {{ UI.tooltip(variable.options.form_options.tooltip) }}
                                    {% endif %}
                                    {{ variable.label }}
                                </label>
                                <div class=\"controls\">
                                    <div class=\"control-label\">
                                        {{ variable|oro_format_workflow_variable_value|default('N/A'|trans) }}
                                        {{ workflowMacros.renderGoToTranslationsIconByLink(translateLinks.variable_definitions.variables[variable.name]) }}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% endset %}

        {% set dataBlocks = dataBlocks|merge([{
            'title': 'oro.workflow.workflowdefinition.configuration.label'|trans,
            'subblocks': [
                {'data':  [variablesInfo]},
            ]
        }]) %}

    {% endif %}

    {% set id = 'workflowDefinitionView' %}
    {% set data = {'dataBlocks': dataBlocks} %}
    {{ parent() }}
{% endblock content_data %}
", "@OroWorkflow/WorkflowDefinition/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/WorkflowDefinition/view.html.twig");
    }
}
