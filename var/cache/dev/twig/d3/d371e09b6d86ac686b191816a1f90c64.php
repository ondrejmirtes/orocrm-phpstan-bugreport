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

/* @OroWorkflow/WorkflowDefinition/update.html.twig */
class __TwigTemplate_6c0ebb6844b92df2d6d3eb64c9418e2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_script' => [$this, 'block_head_script'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'stats' => [$this, 'block_stats'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/WorkflowDefinition/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/update.html.twig"));

        // line 2
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 2)->unwrap();
        // line 3
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 3)->unwrap();
        // line 5
        $context["pageComponent"] = ["module" => "oroworkflow/js/app/components/workflow-editor-component", "options" => ["entity" => ["configuration" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "configuration", [], "any", false, false, false, 9), "translateLinks" => ((        // line 10
array_key_exists("translateLinks", $context)) ? (_twig_default_filter((isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 10, $this->source); })()), [])) : ([])), "name" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "label" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "entity" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "relatedEntity", [], "any", false, false, false, 13), "entity_attribute" => ((twig_get_attribute($this->env, $this->source,         // line 14
($context["entity"] ?? null), "entityAttributeName", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "entityAttributeName", [], "any", false, false, false, 14), "entity")) : ("entity")), "startStep" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["entity"] ?? null), "startStep", [], "any", false, true, false, 15), "name", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "startStep", [], "any", false, true, false, 15), "name", [], "any", false, false, false, 15), null)) : (null)), "stepsDisplayOrdered" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "stepsDisplayOrdered", [], "any", false, false, false, 16), "priority" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "priority", [], "any", false, false, false, 17), "exclusive_active_groups" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "exclusiveActiveGroups", [], "any", false, false, false, 18), "exclusive_record_groups" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "exclusiveRecordGroups", [], "any", false, false, false, 19), "applications" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "applications", [], "any", false, false, false, 20)], "availableDestinations" =>         // line 22
(isset($context["availableDestinations"]) || array_key_exists("availableDestinations", $context) ? $context["availableDestinations"] : (function () { throw new RuntimeError('Variable "availableDestinations" does not exist.', 22, $this->source); })()), "chartOptions" => [], "connectionOptions" => ["detachable" => true]]];

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%workflow_definition.label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 42, $this->source); })()), "label", [], "any", false, false, false, 42), [], "workflows")]]);
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44)) {
            // line 45
            $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_definition_post", ["workflowDefinition" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45)]);
        } else {
            // line 47
            $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_definition_post");
        }
        // line 58
        $context["gridUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_definition_index");
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_head_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_script", $this->getTemplateName(), 50));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        // line 51
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 53
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stylesheets", $this->getTemplateName(), 53));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'stylesheet');
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 61
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 61)->unwrap();
        // line 62
        echo "
    ";
        // line 63
        if (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63) && (isset($context["delete_allowed"]) || array_key_exists("delete_allowed", $context) ? $context["delete_allowed"] : (function () { throw new RuntimeError('Variable "delete_allowed" does not exist.', 63, $this->source); })())) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })())))) {
            // line 64
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_definition_delete", ["workflowDefinition" => twig_get_attribute($this->env, $this->source,             // line 65
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65)]), "dataRedirect" =>             // line 66
(isset($context["gridUrl"]) || array_key_exists("gridUrl", $context) ? $context["gridUrl"] : (function () { throw new RuntimeError('Variable "gridUrl" does not exist.', 66, $this->source); })()), "aCss" => "no-hash remove-button", "id" => "btn-remove-workflow", "dataId" => twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_label")]], 64, $context, $this->getSourceContext());
            // line 71
            echo "
        ";
            // line 72
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 72, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 74
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [(isset($context["gridUrl"]) || array_key_exists("gridUrl", $context) ? $context["gridUrl"] : (function () { throw new RuntimeError('Variable "gridUrl" does not exist.', 74, $this->source); })())], 74, $context, $this->getSourceContext());
        echo "

    ";
        // line 76
        $context["html"] = (twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [], 76, $context, $this->getSourceContext()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [], 76, $context, $this->getSourceContext()));
        // line 77
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 77, $this->source); })())]], 77, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 80
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 80));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 81
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81)) {
            // line 82
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 83
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "indexPath" =>             // line 84
(isset($context["gridUrl"]) || array_key_exists("gridUrl", $context) ? $context["gridUrl"] : (function () { throw new RuntimeError('Variable "gridUrl" does not exist.', 84, $this->source); })()), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 86
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "label", [], "any", false, false, false, 86)];
            // line 88
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 90
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.entity_label")]);
            // line 91
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 91)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 91, $this->source); })())]));
            // line 92
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 95
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 95));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 96
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 96, $this->source); })()), "createdAt", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 96, $this->source); })()), "createdAt", [], "any", false, false, false, 96)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), "updatedAt", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), "updatedAt", [], "any", false, false, false, 97)), "html", null, true))) : (print ("N/A")));
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 100
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 100));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 101
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 101)->unwrap();
        // line 102
        echo "    ";
        $macros["workflowDefinitionUpdate"] = $this;
        // line 103
        echo "
    ";
        // line 104
        echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", ["entity-column-chain-template"], 104, $context, $this->getSourceContext());
        echo "

    ";
        // line 106
        $context["requiredConstraint"] = ["NotBlank" => null];
        // line 109
        echo "
    <script type=\"text/template\" id=\"workflow-translate-link-template\">
        <% if (translateLink) { %>";
        // line 111
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLink %>", true], 111, $context, $this->getSourceContext());
        echo "<% } %>
    </script>

    <script type=\"text/template\" id=\"transition-form-template\">
        <div class=\"oro-tabs\">
            <div class=\"oro-tabs__head\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\"><a href=\"#transition-form\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Info"), "html", null, true);
        echo "</a></li>
                    <li class=\"nav-item\"><a href=\"#transition-attributes\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attributes"), "html", null, true);
        echo "</a></li>
                </ul>
            </div>
            <div class=\"oro-tabs__content\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"transition-form\">
                        <div class=\"tab-data\">
                            <div class=\"form-container\">
                                <form action=\"#\" class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        ";
        // line 129
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.name.label"), true, "oro.workflow.workflowdefinition.transition.name.tooltip"], 129, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"";
        // line 131
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 131, $this->source); })())), "html", null, true);
        echo "\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                                ";
        // line 133
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.label %>", true], 133, $context, $this->getSourceContext());
        echo "
                                            <% } %>
                                        </div>
                                    </div>

                                    <% if(!stepFrom || stepFrom.get('name')) {
                                    var stepFromName = stepFrom ? stepFrom.get('name') : '';
                                    %>
                                    <div class=\"control-group\">
                                        ";
        // line 142
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.from_step.label"), true, "oro.workflow.workflowdefinition.transition.step_from.tooltip"], 142, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <select name=\"step_from\" data-validation=\"";
        // line 144
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 144, $this->source); })())), "html", null, true);
        echo "\"
                                            <% if (name && !_is_clone) { %>disabled=\"disabled\"<% } %>
                                            >
                                            <option value=\"\"></option>
                                            <% _.each(allowedStepsFrom, function (step) { %>
                                            <option
                                                value=\"<%- step.get('name') %>\"
                                                <% if (step.get('name') == stepFromName) { %>selected=\"selected\"<% } %>
                                            >
                                                <%- step.get('label') %>
                                            </option>
                                            <% }); %>
                                            </select>
                                        </div>
                                    </div>
                                    <% } %>
                                    <div class=\"control-group\">
                                        ";
        // line 161
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.to_step.label"), true, "oro.workflow.workflowdefinition.transition.step_to.tooltip"], 161, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <select name=\"step_to\" data-validation=\"";
        // line 163
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 163, $this->source); })())), "html", null, true);
        echo "\">
                                                <option value=\"\"></option>
                                                    <% _.each(allowedStepsTo, function (step) { %>
                                                <option
                                                    value=\"<%- step.get('name') %>\"
                                                    <% if (step.get('name') == step_to) { %>selected=\"selected\"<% } %>
                                                >
                                                    <%- step.get('label') %>
                                                </option>
                                                <% }); %>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        ";
        // line 178
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.view_form.label"), true, "oro.workflow.workflowdefinition.transition.display_type.tooltip"], 178, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <select name=\"display_type\" data-validation=\"";
        // line 180
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 180, $this->source); })())), "html", null, true);
        echo "\">
                                                <option value=\"dialog\" <% if (display_type == 'dialog') { %>selected=\"selected\"<% } %>>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popup window"), "html", null, true);
        echo "</value>
                                                <option value=\"page\" <% if (display_type == 'page') { %>selected=\"selected\"<% } %>>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Separate page"), "html", null, true);
        echo "</value>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group destination-page-controls\">
                                        ";
        // line 188
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.destination_page.label"), false], 188, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <select name=\"destination_page\">
                                                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableDestinations"]) || array_key_exists("availableDestinations", $context) ? $context["availableDestinations"] : (function () { throw new RuntimeError('Variable "availableDestinations" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 192
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["destination"], "html", null, true);
            echo "\" <% if (destination_page == '";
            echo twig_escape_filter($this->env, $context["destination"], "html", null, true);
            echo "') { %>selected=\"selected\"<% } %>>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("oro.workflow.workflowdefinition.transition.destination_page." . ((array_key_exists("destination", $context)) ? (_twig_default_filter($context["destination"], "default")) : ("default"))) . ".label")), "html", null, true);
            echo "</value>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        ";
        // line 199
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.warning_message.label"), false, "oro.workflow.workflowdefinition.transition.message.tooltip"], 199, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <textarea name=\"message\"><%= message %></textarea>
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.message) { %>
                                                ";
        // line 203
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.message %>", true], 203, $context, $this->getSourceContext());
        echo "
                                            <% } %>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        ";
        // line 209
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.button_label.label"), false, "oro.workflow.workflowdefinition.transition.button_label.tooltip"], 209, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"button_label\" value=\"<%- button_label %>\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_label) { %>
                                                ";
        // line 213
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.button_label %>", true], 213, $context, $this->getSourceContext());
        echo "
                                            <% } %>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        ";
        // line 218
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.button_title.label"), false, "oro.workflow.workflowdefinition.transition.button_title.tooltip"], 218, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"button_title\" value=\"<%- button_title %>\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_title) { %>
                                                ";
        // line 222
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.button_title %>", true], 222, $context, $this->getSourceContext());
        echo "
                                            <% } %>
                                        </div>
                                    </div>

                                    ";
        // line 227
        echo twig_call_macro($macros["UI"], "macro_getApplicableForUnderscore", [$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "transition_prototype_icon", [], "any", false, false, false, 227), 'row')], 227, $context, $this->getSourceContext());
        echo "
                                    <% print('<sc' + 'ript>'); %>
                                    loadModules(['jquery'], function(\$) {
                                    \$('#";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "transition_prototype_icon", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
        echo "').inputWidget('val', '<%- buttonIcon %>');
                                    });
                                    <% print('</sc' + 'ript>'); %>

                                    <div class=\"control-group\">
                                        ";
        // line 235
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.button_style.label"), false, "oro.workflow.workflowdefinition.transition.button_color.tooltip"], 235, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <select name=\"button_color\">
                                                <% _.each(allowedButtonStyles, function (style) { %>
                                                <option value=\"<%- style.name %>\"
                                                <% if (buttonStyle == style.name) { %>selected=\"selected\"<% } %>
                                                ><%- style.label %></option>
                                                <% }); %>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group transition-example-container\">
                                        ";
        // line 248
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.button_preview.label"), false, "oro.workflow.workflowdefinition.transition.button_preview.tooltip"], 248, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <div class=\"transition-btn-example\"></div>
                                        </div>
                                    </div>

                                    <div class=\"widget-actions\">
                                        <button type=\"reset\" class=\"btn\">";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                                        <button type=\"submit\" class=\"btn btn-success\">";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply"), "html", null, true);
        echo "</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transition-attributes\">
                        <div class=\"tab-data\">
                            <div class=\"transition-attributes-form-container form-container\"></div>
                            <div class=\"transition-attributes-list-container\" style=\"margin-top: 10px\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-form-template\">
        ";
        // line 275
        $context["orderConstraints"] = twig_array_merge((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 275, $this->source); })()), ["Range" => ["minMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This value should be {{ limit }} or more."), "maxMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This value should be {{ limit }} or less."), "invalidMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This value should be a valid number."), "min" => 0, "max" => null]]);
        // line 284
        echo "        <div class=\"form-container\">
            <div class=\"oro-tabs\">
                <div class=\"oro-tabs__head\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a href=\"#step-form\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Info"), "html", null, true);
        echo "</a></li>
                        <% if (transitionsAllowed) { %>
                        <li class=\"nav-item\"><a href=\"#step-transitions\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transitions"), "html", null, true);
        echo "</a></li>
                        <% } %>
                    </ul>
                </div>
                <div class=\"oro-tabs__content\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"step-form\">
                            <div class=\"tab-data\">
                                <form action=\"#\" class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        ";
        // line 300
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.name.label"), true, "oro.workflow.workflowdefinition.step.name.tooltip"], 300, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"";
        // line 302
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 302, $this->source); })())), "html", null, true);
        echo "\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                                ";
        // line 304
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.label %>", true], 304, $context, $this->getSourceContext());
        echo "
                                            <% } %>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        ";
        // line 310
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.position.label"), false, "oro.workflow.workflowdefinition.step.order.tooltip"], 310, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"order\" value=\"<%- order %>\" data-validation=\"";
        // line 312
        echo twig_escape_filter($this->env, json_encode((isset($context["orderConstraints"]) || array_key_exists("orderConstraints", $context) ? $context["orderConstraints"] : (function () { throw new RuntimeError('Variable "orderConstraints" does not exist.', 312, $this->source); })())), "html", null, true);
        echo "\">
                                        </div>
                                    </div>

                                    <div class=\"control-group control-group-checkbox\">
                                        ";
        // line 317
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.final.label"), false, "oro.workflow.workflowdefinition.step.is_final.tooltip"], 317, $context, $this->getSourceContext());
        echo "
                                        <div class=\"controls\">
                                            <input type=\"checkbox\" name=\"is_final\" <% if (is_final) { %>checked=\"checked\"<% } %>>
                                        </div>
                                    </div>

                                    <div class=\"widget-actions\">
                                        <button type=\"reset\" class=\"btn\">";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                                        <button type=\"submit\" class=\"btn btn-success\">";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply"), "html", null, true);
        echo "</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <% if (transitionsAllowed) { %>
                        <div class=\"tab-pane\" id=\"step-transitions\">
                            <div class=\"tab-data\">
                                <div class=\"transitions-list-container\"></div>
                            </div>
                        </div>
                        <% } %>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-list-template\">
        <div class=\"grid-container steps-list\">
            <input name=\"oro_workflow_definition_form[steps]\" type=\"hidden\" value=''>
            <input name=\"oro_workflow_definition_form[transitions]\" type=\"hidden\" value=''>
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th class=\"label-column\"><span>";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Step"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transitions"), "html", null, true);
        echo "</span></th>
                        <th><span title=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.order.tooltip", [], "tooltips"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-row-template\">
        <td class=\"step-name workflow-translatable-label\">
            <% if (_is_start) { %>
            <%- label %>
            <% } else { %>
            <a href=\"#\" class=\"edit-step\" title=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update this step"), "html", null, true);
        echo "\"><%- label %></a>
            <% if (is_final) { %>&nbsp;<strong title=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.is_final.tooltip", [], "tooltips"), "html", null, true);
        echo "\">(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final"), "html", null, true);
        echo ")</strong><% } %>
                <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                    ";
        // line 370
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.label %>"], 370, $context, $this->getSourceContext());
        echo "
                <% } %>
            <% } %>
        </td>
        <td class=\"step-transitions\"></td>
        <td><span title=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.step.order.tooltip", [], "tooltips"), "html", null, true);
        echo "\"><%- order %></span></td>
        <td class=\"step-actions\">
            <div class=\"btn-group pull-right\">
                <a href=\"#\" class=\"btn btn-icon btn-lighter add-step-transition action\" title=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add transition to this step"), "html", null, true);
        echo "\"><i class=\"fa-plus-circle hide-text\"></i></a>
                <% if (!_is_start) { %>
                <a href=\"#\" class=\"btn btn-icon btn-lighter edit-step action\" title=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update this step"), "html", null, true);
        echo "\"><i class=\"fa-pencil-square-o hide-text\"></i></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter clone-step action\" title=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clone this step"), "html", null, true);
        echo "\"><i class=\"fa-files-o hide-text\"></i></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter delete-step action\" title=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete this step"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"></i></a>
                <% } %>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-row-short-template\">
        <a href=\"#\" class=\"edit-transition\" title=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update this transition"), "html", null, true);
        echo "\"><%- label %></a>
            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                ";
        // line 391
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.label %>"], 391, $context, $this->getSourceContext());
        echo "
            <% } %>
        <a href=\"#\" class=\"clone-transition action\" title=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clone this transition"), "html", null, true);
        echo "\"><i class=\"fa-files-o hide-text\"></i></a>
        <a href=\"#\" class=\"delete-transition action\" title=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete this transition"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"></i></a>
        <i class=\"fa-long-arrow-right\"></i>
        <span title=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\"><%- stepToLabel %></span>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-edit-template\">
        <form action=\"#\">
            <div class=\"form-horizontal\" style=\"width: 436px;\">
                <input type=\"hidden\" name=\"itemId\" value=\"\">
                <div class=\"control-group\">
                    ";
        // line 404
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.entity_field.label"), true, "oro.workflow.workflowdefinition.attribute.property_path.tooltip"], 404, $context, $this->getSourceContext());
        echo "
                    <div class=\"controls\">
                        <input type=\"hidden\" name=\"property_path\" data-validation=\"";
        // line 406
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredConstraint"]) || array_key_exists("requiredConstraint", $context) ? $context["requiredConstraint"] : (function () { throw new RuntimeError('Variable "requiredConstraint" does not exist.', 406, $this->source); })())), "html", null, true);
        echo "\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    ";
        // line 411
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.label.label"), false, "oro.workflow.workflowdefinition.attribute.label.tooltip"], 411, $context, $this->getSourceContext());
        echo "
                    <div class=\"controls\">
                        <input type=\"text\" name=\"label\" value=\"<%- label %>\" placeholder=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Leave empty for system value"), "html", null, true);
        echo "\"/>
                    </div>
                </div>

                <div class=\"control-group control-group-checkbox\">
                    ";
        // line 418
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.form.required.label"), false, "oro.workflow.workflowdefinition.attribute.required.tooltip"], 418, $context, $this->getSourceContext());
        echo "
                    <div class=\"controls\">
                        <input type=\"checkbox\" name=\"required\" <% if (required) { %>checked=\"checked\"<% } %>/>
                    </div>
                </div>

                <div class=\"clearfix\">
                    <div class=\"pull-right\">
                        <button type=\"reset\" class=\"btn hide\"><i class=\"fa-undo\"></i> ";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa-plus\"></i> ";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-list-template\">
        <div class=\"grid-container form-options-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span>";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Entity field"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-row-template\">
        <td>
            <%= entityField %>
            <% if (!is_entity_attribute) { %>
            <span class=\"muted\">(";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("System"), "html", null, true);
        echo ")</span>
            <% } %>
        </td>
        <td>
            <%- label %>
            <% if (isSystemLabel) { %><span class=\"muted\">(";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("System"), "html", null, true);
        echo ")</span><% } %>
            <% if (typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                ";
        // line 461
        echo twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", ["<%- translateLinks.label %>"], 461, $context, $this->getSourceContext());
        echo "
            <% } %>
        </td>
        <td>
            <% if (required) { %>
                ";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true);
        echo "
            <% } else { %>
                ";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true);
        echo "
            <% } %>
        </td>
        <td class=\"step-actions\">
            <div class=\"pull-right\">
                <% if (is_entity_attribute) { %>
                <a href=\"#\" class=\"edit-form-option action\" title=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update field"), "html", null, true);
        echo "\"><i class=\"fa-pencil-square-o hide-text\"></i></a>
                <% } %>
                <a href=\"#\" class=\"delete-form-option action\" title=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete field"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"></i></a>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-list-template\">
        <div class=\"grid-container transition-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span title=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.name.tooltip", [], "tooltips"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transition name"), "html", null, true);
        echo "</span></th>
                        <th><span title=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To step"), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\">
                <tr class=\"no-rows-message\">
                    <td colspan=\"3\">
                        <div style=\"padding: 10px 0;text-align: center\">
                            ";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are no transitions yet."), "html", null, true);
        echo "
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"transition-row-template\">
        <td class=\"transition-name\">
            <span title=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.name.tooltip", [], "tooltips"), "html", null, true);
        echo "\"><%- label %></span>
        </td>
        <td><span title=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.transition.step_to.tooltip"), "html", null, true);
        echo "\"><%- stepToLabel %></span></td>
        <td class=\"transition-actions\">
            <div class=\"pull-right\">
                <a href=\"#\" class=\"delete-transition action\" title=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete this transition"), "html", null, true);
        echo "\"><i class=\"fa-trash-o hide-text\"></i></a>
            </div>
        </td>
    </script>

    ";
        // line 516
        ob_start();
        // line 517
        echo "        ";
        $context["startStep"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 517, $this->source); })()), "startStep", [], "any", false, false, false, 517)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 517, $this->source); })()), "startStep", [], "any", false, false, false, 517), "name", [], "any", false, false, false, 517)) : (""));
        // line 518
        echo "        <div class=\"control-group\">
            ";
        // line 519
        echo twig_call_macro($macros["workflowDefinitionUpdate"], "macro_render_label", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.start_step.label"), false, "oro.workflow.workflowdefinition.start_step.tooltip"], 519, $context, $this->getSourceContext());
        echo "
            <div class=\"controls\">
                <input type=\"hidden\" name=\"start_step\" value=\"";
        // line 521
        echo twig_escape_filter($this->env, (isset($context["startStep"]) || array_key_exists("startStep", $context) ? $context["startStep"] : (function () { throw new RuntimeError('Variable "startStep" does not exist.', 521, $this->source); })()), "html", null, true);
        echo "\"/>
            </div>
        </div>
    ";
        $context["startStepSelector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 525
        echo "
    ";
        // line 526
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["data" => [0 =>         // line 531
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 531, $this->source); })()), "label", [], "any", false, false, false, 531), 'row'), 1 =>         // line 532
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 532, $this->source); })()), "related_entity", [], "any", false, false, false, 532), 'row'), 2 =>         // line 533
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "exclusive_active_groups", [], "any", false, false, false, 533), 'row'), 3 =>         // line 534
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "exclusive_record_groups", [], "any", false, false, false, 534), 'row'), 4 =>         // line 535
(isset($context["startStepSelector"]) || array_key_exists("startStepSelector", $context) ? $context["startStepSelector"] : (function () { throw new RuntimeError('Variable "startStepSelector" does not exist.', 535, $this->source); })()), 5 =>         // line 536
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "steps_display_ordered", [], "any", false, false, false, 536), 'row')]]]]];
        // line 541
        echo "
    ";
        // line 542
        ob_start();
        // line 543
        echo "    <div class=\"workflow-definition-buttons\">
        <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-primary add-transition-btn\">";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add transition"), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-primary add-step-btn\">";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add step"), "html", null, true);
        echo "</button>
        </div>
    </div>
    <div class=\"row-fluid clearfix\">
        <div class=\"workflow-table-container\">
            <div class=\"workflow-definition-steps-list-container clearfix\"></div>
        </div>
    </div>
    ";
        $context["stepsListWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 555
        echo "
    ";
        // line 556
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 556, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.steps_and_transitions"), "subblocks" => [0 => ["data" => [0 =>         // line 561
(isset($context["stepsListWidget"]) || array_key_exists("stepsListWidget", $context) ? $context["stepsListWidget"] : (function () { throw new RuntimeError('Variable "stepsListWidget" does not exist.', 561, $this->source); })())]]]]]);
        // line 566
        echo "
    ";
        // line 567
        if ( !$this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 568
            echo "        ";
            ob_start();
            // line 569
            echo "            <div class=\"workflow-definition-buttons\">
                <div class=\"workflow-history-container pull-left\"></div>
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"btn btn-secondary refresh-btn\">
                        <span class=\"fa-refresh\" aria-hidden=\"true\"></span>
                        ";
            // line 574
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Auto sort"), "html", null, true);
            echo "
                    </button>
                </div>
                <div class=\"pull-right\">
                    <button type=\"button\" class=\"btn btn-primary add-transition-btn\">";
            // line 578
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add transition"), "html", null, true);
            echo "</button>
                    <button type=\"button\" class=\"btn btn-primary add-step-btn\">";
            // line 579
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add step"), "html", null, true);
            echo "</button>
                </div>
            </div>
            <div class=\"workflow-step-editor\" ";
            // line 582
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroworkflow/js/app/views/flowchart/flowchart-container-view", "name" => "flowchart-container"]], 582, $context, $this->getSourceContext());
            // line 585
            echo "></div>
        ";
            $context["workflowDiagram"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 587
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 587, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.title.workflow_diagrams"), "subblocks" => [0 => ["data" => [0 =>             // line 592
(isset($context["workflowDiagram"]) || array_key_exists("workflowDiagram", $context) ? $context["workflowDiagram"] : (function () { throw new RuntimeError('Variable "workflowDiagram" does not exist.', 592, $this->source); })())]]]]]);
            // line 597
            echo "    ";
        }
        // line 598
        echo "
    ";
        // line 599
        $context["id"] = "workflow-designer";
        // line 600
        echo "    ";
        $context["data"] = ["dataBlocks" =>         // line 601
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 601, $this->source); })())];
        // line 603
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 31
    public function macro_render_label($__label__ = null, $__required__ = null, $__tooltip__ = null, $__tooltip_placement__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "required" => $__required__,
            "tooltip" => $__tooltip__,
            "tooltip_placement" => $__tooltip_placement__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_label"));

            // line 32
            echo "    <label class=\"control-label ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 32, $this->source); })())) {
                echo "required";
            }
            echo "\">
        ";
            // line 33
            if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "            ";
                $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/update.html.twig", 34)->unwrap();
                // line 35
                echo "            ";
                echo twig_call_macro($macros["ui"], "macro_tooltip", [(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 35, $this->source); })()), [], (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 38, $this->source); })()), "html", null, true);
            echo " ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 38, $this->source); })())) {
                echo "<em>*</em>";
            }
            // line 39
            echo "    </label>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/WorkflowDefinition/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1181 => 39,  1175 => 38,  1172 => 37,  1166 => 35,  1163 => 34,  1161 => 33,  1154 => 32,  1132 => 31,  1116 => 603,  1114 => 601,  1112 => 600,  1110 => 599,  1107 => 598,  1104 => 597,  1102 => 592,  1100 => 587,  1096 => 585,  1094 => 582,  1088 => 579,  1084 => 578,  1077 => 574,  1070 => 569,  1067 => 568,  1065 => 567,  1062 => 566,  1060 => 561,  1059 => 556,  1056 => 555,  1044 => 546,  1040 => 545,  1036 => 543,  1034 => 542,  1031 => 541,  1029 => 536,  1028 => 535,  1027 => 534,  1026 => 533,  1025 => 532,  1024 => 531,  1023 => 526,  1020 => 525,  1013 => 521,  1008 => 519,  1005 => 518,  1002 => 517,  1000 => 516,  992 => 511,  986 => 508,  981 => 506,  967 => 495,  957 => 488,  951 => 487,  945 => 486,  932 => 476,  927 => 474,  918 => 468,  913 => 466,  905 => 461,  900 => 459,  892 => 454,  877 => 442,  873 => 441,  869 => 440,  865 => 439,  850 => 427,  846 => 426,  835 => 418,  827 => 413,  822 => 411,  814 => 406,  809 => 404,  798 => 396,  793 => 394,  789 => 393,  784 => 391,  779 => 389,  769 => 382,  765 => 381,  761 => 380,  756 => 378,  750 => 375,  742 => 370,  735 => 368,  731 => 367,  715 => 354,  709 => 353,  705 => 352,  701 => 351,  672 => 325,  668 => 324,  658 => 317,  650 => 312,  645 => 310,  636 => 304,  631 => 302,  626 => 300,  613 => 290,  608 => 288,  602 => 284,  600 => 275,  578 => 256,  574 => 255,  564 => 248,  548 => 235,  540 => 230,  534 => 227,  526 => 222,  519 => 218,  511 => 213,  504 => 209,  495 => 203,  488 => 199,  481 => 194,  468 => 192,  464 => 191,  458 => 188,  449 => 182,  445 => 181,  441 => 180,  436 => 178,  418 => 163,  413 => 161,  393 => 144,  388 => 142,  376 => 133,  371 => 131,  366 => 129,  353 => 119,  349 => 118,  339 => 111,  335 => 109,  333 => 106,  328 => 104,  325 => 103,  322 => 102,  319 => 101,  306 => 100,  289 => 97,  282 => 96,  269 => 95,  255 => 92,  252 => 91,  249 => 90,  243 => 88,  241 => 86,  240 => 84,  239 => 83,  237 => 82,  234 => 81,  221 => 80,  205 => 77,  203 => 76,  197 => 74,  192 => 72,  189 => 71,  187 => 69,  186 => 66,  185 => 65,  183 => 64,  181 => 63,  178 => 62,  175 => 61,  162 => 60,  146 => 54,  121 => 53,  115 => 51,  102 => 50,  88 => 1,  86 => 58,  83 => 47,  80 => 45,  78 => 44,  76 => 42,  73 => 22,  72 => 20,  71 => 19,  70 => 18,  69 => 17,  68 => 16,  67 => 15,  66 => 14,  65 => 13,  64 => 12,  63 => 11,  62 => 10,  61 => 9,  60 => 5,  58 => 3,  56 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}
{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

    {% set pageComponent = {
            module: 'oroworkflow/js/app/components/workflow-editor-component',
            options: {
                entity: {
                    configuration: entity.configuration,
                    translateLinks: translateLinks|default([]),
                    name: entity.name,
                    label: entity.label,
                    entity: entity.relatedEntity,
                    entity_attribute: entity.entityAttributeName | default('entity'),
                    startStep: entity.startStep.name | default(null),
                    stepsDisplayOrdered: entity.stepsDisplayOrdered,
                    priority: entity.priority,
                    exclusive_active_groups: entity.exclusiveActiveGroups,
                    exclusive_record_groups: entity.exclusiveRecordGroups,
                    applications: entity.applications
                },
                availableDestinations: availableDestinations,
                chartOptions: {},
                connectionOptions: {
                    detachable: true
                }
            }
        }
    %}

{% macro render_label(label, required, tooltip, tooltip_placement) %}
    <label class=\"control-label {% if required %}required{% endif %}\">
        {% if tooltip is defined and tooltip %}
            {% import '@OroUI/macros.html.twig' as ui %}
            {{ ui.tooltip(tooltip, {}, tooltip_placement) }}
        {% endif %}

        {{ label }} {% if required %}<em>*</em>{% endif %}
    </label>
{% endmacro %}

{% oro_title_set({params : {\"%workflow_definition.label%\": entity.label|trans({},'workflows')} }) %}
{# API REST route for POST used both for create and update #}
{% if entity.name %}
    {% set formAction = path('oro_api_workflow_definition_post', {workflowDefinition: entity.name}) %}
{% else %}
    {% set formAction = path('oro_api_workflow_definition_post') %}
{% endif %}

{% block head_script %}
    {{ parent() }}

    {% block stylesheets %}
        {{ form_stylesheet(form) }}
    {% endblock %}
{% endblock %}

{% set gridUrl = path('oro_workflow_definition_index') %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.name and delete_allowed and is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_workflow_definition_delete', {'workflowDefinition': entity.name}),
            'dataRedirect': gridUrl,
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-workflow',
            'dataId': entity.name,
            'entity_label': 'oro.workflow.workflowdefinition.entity_label'|trans
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(gridUrl) }}

    {% set html = UI.saveAndCloseButton() ~ UI.saveAndStayButton() %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if entity.name %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   gridUrl,
            'indexLabel': 'oro.workflow.workflowdefinition.entity_plural_label'|trans,
            'entityTitle': entity.label
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.workflow.workflowdefinition.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A' }}</li>
{% endblock stats %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as workflowDefinitionUpdate %}

    {{ QD.query_designer_column_chain_template('entity-column-chain-template') }}

    {% set requiredConstraint = {
        \"NotBlank\": null
    } %}

    <script type=\"text/template\" id=\"workflow-translate-link-template\">
        <% if (translateLink) { %>{{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLink %>', true) }}<% } %>
    </script>

    <script type=\"text/template\" id=\"transition-form-template\">
        <div class=\"oro-tabs\">
            <div class=\"oro-tabs__head\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\"><a href=\"#transition-form\" class=\"nav-link active\" data-toggle=\"tab\">{{ 'Info'|trans }}</a></li>
                    <li class=\"nav-item\"><a href=\"#transition-attributes\" class=\"nav-link\" data-toggle=\"tab\">{{ 'Attributes'|trans }}</a></li>
                </ul>
            </div>
            <div class=\"oro-tabs__content\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"transition-form\">
                        <div class=\"tab-data\">
                            <div class=\"form-container\">
                                <form action=\"#\" class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.name.label\"|trans, true, \"oro.workflow.workflowdefinition.transition.name.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"{{ requiredConstraint|json_encode }}\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.label %>', true) }}
                                            <% } %>
                                        </div>
                                    </div>

                                    <% if(!stepFrom || stepFrom.get('name')) {
                                    var stepFromName = stepFrom ? stepFrom.get('name') : '';
                                    %>
                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.from_step.label\"|trans, true, \"oro.workflow.workflowdefinition.transition.step_from.tooltip\") }}
                                        <div class=\"controls\">
                                            <select name=\"step_from\" data-validation=\"{{ requiredConstraint|json_encode }}\"
                                            <% if (name && !_is_clone) { %>disabled=\"disabled\"<% } %>
                                            >
                                            <option value=\"\"></option>
                                            <% _.each(allowedStepsFrom, function (step) { %>
                                            <option
                                                value=\"<%- step.get('name') %>\"
                                                <% if (step.get('name') == stepFromName) { %>selected=\"selected\"<% } %>
                                            >
                                                <%- step.get('label') %>
                                            </option>
                                            <% }); %>
                                            </select>
                                        </div>
                                    </div>
                                    <% } %>
                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.to_step.label\"|trans, true, \"oro.workflow.workflowdefinition.transition.step_to.tooltip\") }}
                                        <div class=\"controls\">
                                            <select name=\"step_to\" data-validation=\"{{ requiredConstraint|json_encode }}\">
                                                <option value=\"\"></option>
                                                    <% _.each(allowedStepsTo, function (step) { %>
                                                <option
                                                    value=\"<%- step.get('name') %>\"
                                                    <% if (step.get('name') == step_to) { %>selected=\"selected\"<% } %>
                                                >
                                                    <%- step.get('label') %>
                                                </option>
                                                <% }); %>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.view_form.label\"|trans, true, \"oro.workflow.workflowdefinition.transition.display_type.tooltip\") }}
                                        <div class=\"controls\">
                                            <select name=\"display_type\" data-validation=\"{{ requiredConstraint|json_encode }}\">
                                                <option value=\"dialog\" <% if (display_type == 'dialog') { %>selected=\"selected\"<% } %>>{{ \"Popup window\"|trans }}</value>
                                                <option value=\"page\" <% if (display_type == 'page') { %>selected=\"selected\"<% } %>>{{ \"Separate page\"|trans }}</value>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group destination-page-controls\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.destination_page.label\"|trans, false) }}
                                        <div class=\"controls\">
                                            <select name=\"destination_page\">
                                                {% for destination in availableDestinations %}
                                                    <option value=\"{{ destination }}\" <% if (destination_page == '{{ destination }}') { %>selected=\"selected\"<% } %>>{{ ('oro.workflow.workflowdefinition.transition.destination_page.' ~ (destination|default('default')) ~ '.label')|trans }}</value>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.warning_message.label\"|trans, false, \"oro.workflow.workflowdefinition.transition.message.tooltip\") }}
                                        <div class=\"controls\">
                                            <textarea name=\"message\"><%= message %></textarea>
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.message) { %>
                                                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.message %>', true) }}
                                            <% } %>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.button_label.label\"|trans, false, \"oro.workflow.workflowdefinition.transition.button_label.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"button_label\" value=\"<%- button_label %>\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_label) { %>
                                                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.button_label %>', true) }}
                                            <% } %>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.button_title.label\"|trans, false, \"oro.workflow.workflowdefinition.transition.button_title.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"button_title\" value=\"<%- button_title %>\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.button_title) { %>
                                                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.button_title %>', true) }}
                                            <% } %>
                                        </div>
                                    </div>

                                    {{ UI.getApplicableForUnderscore(form_row(form.transition_prototype_icon))|raw }}
                                    <% print('<sc' + 'ript>'); %>
                                    loadModules(['jquery'], function(\$) {
                                    \$('#{{ form.transition_prototype_icon.vars.id }}').inputWidget('val', '<%- buttonIcon %>');
                                    });
                                    <% print('</sc' + 'ript>'); %>

                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.button_style.label\"|trans, false, \"oro.workflow.workflowdefinition.transition.button_color.tooltip\") }}
                                        <div class=\"controls\">
                                            <select name=\"button_color\">
                                                <% _.each(allowedButtonStyles, function (style) { %>
                                                <option value=\"<%- style.name %>\"
                                                <% if (buttonStyle == style.name) { %>selected=\"selected\"<% } %>
                                                ><%- style.label %></option>
                                                <% }); %>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"control-group transition-example-container\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.button_preview.label\"|trans, false, \"oro.workflow.workflowdefinition.transition.button_preview.tooltip\") }}
                                        <div class=\"controls\">
                                            <div class=\"transition-btn-example\"></div>
                                        </div>
                                    </div>

                                    <div class=\"widget-actions\">
                                        <button type=\"reset\" class=\"btn\">{{ \"Cancel\"|trans }}</button>
                                        <button type=\"submit\" class=\"btn btn-success\">{{ \"Apply\"|trans }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transition-attributes\">
                        <div class=\"tab-data\">
                            <div class=\"transition-attributes-form-container form-container\"></div>
                            <div class=\"transition-attributes-list-container\" style=\"margin-top: 10px\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-form-template\">
        {% set orderConstraints = requiredConstraint|merge({
            \"Range\": {
                \"minMessage\": \"This value should be {{ limit }} or more.\"|trans,
                \"maxMessage\": \"This value should be {{ limit }} or less.\"|trans,
                \"invalidMessage\": \"This value should be a valid number.\"|trans,
                \"min\": 0,
                \"max\": null
            }
        }) %}
        <div class=\"form-container\">
            <div class=\"oro-tabs\">
                <div class=\"oro-tabs__head\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a href=\"#step-form\" class=\"nav-link active\" data-toggle=\"tab\">{{ 'Info'|trans }}</a></li>
                        <% if (transitionsAllowed) { %>
                        <li class=\"nav-item\"><a href=\"#step-transitions\" class=\"nav-link\" data-toggle=\"tab\">{{ 'Transitions'|trans }}</a></li>
                        <% } %>
                    </ul>
                </div>
                <div class=\"oro-tabs__content\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"step-form\">
                            <div class=\"tab-data\">
                                <form action=\"#\" class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.name.label\"|trans, true, \"oro.workflow.workflowdefinition.step.name.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"label\" value=\"<%- label %>\" data-validation=\"{{ requiredConstraint|json_encode }}\">
                                            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                                                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.label %>', true) }}
                                            <% } %>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.position.label\"|trans, false, \"oro.workflow.workflowdefinition.step.order.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"text\" name=\"order\" value=\"<%- order %>\" data-validation=\"{{ orderConstraints|json_encode }}\">
                                        </div>
                                    </div>

                                    <div class=\"control-group control-group-checkbox\">
                                        {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.final.label\"|trans, false, \"oro.workflow.workflowdefinition.step.is_final.tooltip\") }}
                                        <div class=\"controls\">
                                            <input type=\"checkbox\" name=\"is_final\" <% if (is_final) { %>checked=\"checked\"<% } %>>
                                        </div>
                                    </div>

                                    <div class=\"widget-actions\">
                                        <button type=\"reset\" class=\"btn\">{{ \"Cancel\"|trans }}</button>
                                        <button type=\"submit\" class=\"btn btn-success\">{{ \"Apply\"|trans }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <% if (transitionsAllowed) { %>
                        <div class=\"tab-pane\" id=\"step-transitions\">
                            <div class=\"tab-data\">
                                <div class=\"transitions-list-container\"></div>
                            </div>
                        </div>
                        <% } %>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-list-template\">
        <div class=\"grid-container steps-list\">
            <input name=\"oro_workflow_definition_form[steps]\" type=\"hidden\" value=''>
            <input name=\"oro_workflow_definition_form[transitions]\" type=\"hidden\" value=''>
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th class=\"label-column\"><span>{{ \"Step\"|trans }}</span></th>
                        <th><span>{{ \"Transitions\"|trans }}</span></th>
                        <th><span title=\"{{ \"oro.workflow.workflowdefinition.step.order.tooltip\"|trans({}, \"tooltips\") }}\">{{ \"Position\"|trans }}</span></th>
                        <th class=\"action-column\"><span>{{ \"Actions\"|trans }}</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"step-row-template\">
        <td class=\"step-name workflow-translatable-label\">
            <% if (_is_start) { %>
            <%- label %>
            <% } else { %>
            <a href=\"#\" class=\"edit-step\" title=\"{{ 'Update this step'|trans}}\"><%- label %></a>
            <% if (is_final) { %>&nbsp;<strong title=\"{{ \"oro.workflow.workflowdefinition.step.is_final.tooltip\"|trans({}, \"tooltips\") }}\">({{ \"Final\"|trans }})</strong><% } %>
                <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                    {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.label %>') }}
                <% } %>
            <% } %>
        </td>
        <td class=\"step-transitions\"></td>
        <td><span title=\"{{ \"oro.workflow.workflowdefinition.step.order.tooltip\"|trans({}, \"tooltips\") }}\"><%- order %></span></td>
        <td class=\"step-actions\">
            <div class=\"btn-group pull-right\">
                <a href=\"#\" class=\"btn btn-icon btn-lighter add-step-transition action\" title=\"{{ 'Add transition to this step'|trans}}\"><i class=\"fa-plus-circle hide-text\"></i></a>
                <% if (!_is_start) { %>
                <a href=\"#\" class=\"btn btn-icon btn-lighter edit-step action\" title=\"{{ 'Update this step'|trans}}\"><i class=\"fa-pencil-square-o hide-text\"></i></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter clone-step action\" title=\"{{ 'Clone this step'|trans}}\"><i class=\"fa-files-o hide-text\"></i></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter delete-step action\" title=\"{{ 'Delete this step'|trans}}\"><i class=\"fa-trash-o hide-text\"></i></a>
                <% } %>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-row-short-template\">
        <a href=\"#\" class=\"edit-transition\" title=\"{{ 'Update this transition'|trans }}\"><%- label %></a>
            <% if (name && !_is_clone && typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.label %>') }}
            <% } %>
        <a href=\"#\" class=\"clone-transition action\" title=\"{{ 'Clone this transition'|trans }}\"><i class=\"fa-files-o hide-text\"></i></a>
        <a href=\"#\" class=\"delete-transition action\" title=\"{{ 'Delete this transition'|trans }}\"><i class=\"fa-trash-o hide-text\"></i></a>
        <i class=\"fa-long-arrow-right\"></i>
        <span title=\"{{ \"oro.workflow.workflowdefinition.transition.step_to.tooltip\"|trans }}\"><%- stepToLabel %></span>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-edit-template\">
        <form action=\"#\">
            <div class=\"form-horizontal\" style=\"width: 436px;\">
                <input type=\"hidden\" name=\"itemId\" value=\"\">
                <div class=\"control-group\">
                    {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.entity_field.label\"|trans, true, \"oro.workflow.workflowdefinition.attribute.property_path.tooltip\") }}
                    <div class=\"controls\">
                        <input type=\"hidden\" name=\"property_path\" data-validation=\"{{ requiredConstraint|json_encode }}\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.label.label\"|trans, false, \"oro.workflow.workflowdefinition.attribute.label.tooltip\") }}
                    <div class=\"controls\">
                        <input type=\"text\" name=\"label\" value=\"<%- label %>\" placeholder=\"{{ 'Leave empty for system value'|trans }}\"/>
                    </div>
                </div>

                <div class=\"control-group control-group-checkbox\">
                    {{ workflowDefinitionUpdate.render_label(\"oro.workflow.form.required.label\"|trans, false, \"oro.workflow.workflowdefinition.attribute.required.tooltip\") }}
                    <div class=\"controls\">
                        <input type=\"checkbox\" name=\"required\" <% if (required) { %>checked=\"checked\"<% } %>/>
                    </div>
                </div>

                <div class=\"clearfix\">
                    <div class=\"pull-right\">
                        <button type=\"reset\" class=\"btn hide\"><i class=\"fa-undo\"></i> {{ 'Reset'|trans }}</button>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa-plus\"></i> {{ 'Add'|trans }}</button>
                    </div>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-list-template\">
        <div class=\"grid-container form-options-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span>{{ \"Entity field\"|trans }}</span></th>
                        <th><span>{{ \"Label\"|trans }}</span></th>
                        <th><span>{{ \"Required\"|trans }}</span></th>
                        <th class=\"action-column\"><span>{{ \"Actions\"|trans }}</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"attribute-form-option-row-template\">
        <td>
            <%= entityField %>
            <% if (!is_entity_attribute) { %>
            <span class=\"muted\">({{ 'System'|trans }})</span>
            <% } %>
        </td>
        <td>
            <%- label %>
            <% if (isSystemLabel) { %><span class=\"muted\">({{ 'System'|trans }})</span><% } %>
            <% if (typeof translateLinks !== 'undefined' && translateLinks.label) { %>
                {{ workflowMacros.renderGoToTranslationsIconByLink('<%- translateLinks.label %>') }}
            <% } %>
        </td>
        <td>
            <% if (required) { %>
                {{ \"Yes\"|trans }}
            <% } else { %>
                {{ 'No'|trans }}
            <% } %>
        </td>
        <td class=\"step-actions\">
            <div class=\"pull-right\">
                <% if (is_entity_attribute) { %>
                <a href=\"#\" class=\"edit-form-option action\" title=\"{{ 'Update field'|trans }}\"><i class=\"fa-pencil-square-o hide-text\"></i></a>
                <% } %>
                <a href=\"#\" class=\"delete-form-option action\" title=\"{{ 'Delete field'|trans }}\"><i class=\"fa-trash-o hide-text\"></i></a>
            </div>
        </td>
    </script>

    <script type=\"text/template\" id=\"transition-list-template\">
        <div class=\"grid-container transition-list\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                <thead>
                    <tr>
                        <th><span title=\"{{ \"oro.workflow.workflowdefinition.transition.name.tooltip\"|trans({}, \"tooltips\") }}\">{{ \"Transition name\"|trans }}</span></th>
                        <th><span title=\"{{ \"oro.workflow.workflowdefinition.transition.step_to.tooltip\"|trans }}\">{{ \"To step\"|trans }}</span></th>
                        <th class=\"action-column\"><span>{{ \"Actions\"|trans }}</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\">
                <tr class=\"no-rows-message\">
                    <td colspan=\"3\">
                        <div style=\"padding: 10px 0;text-align: center\">
                            {{ 'There are no transitions yet.'|trans }}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </script>

    <script type=\"text/template\" id=\"transition-row-template\">
        <td class=\"transition-name\">
            <span title=\"{{ \"oro.workflow.workflowdefinition.transition.name.tooltip\"|trans({}, \"tooltips\") }}\"><%- label %></span>
        </td>
        <td><span title=\"{{ \"oro.workflow.workflowdefinition.transition.step_to.tooltip\"|trans }}\"><%- stepToLabel %></span></td>
        <td class=\"transition-actions\">
            <div class=\"pull-right\">
                <a href=\"#\" class=\"delete-transition action\" title=\"{{ 'Delete this transition'|trans }}\"><i class=\"fa-trash-o hide-text\"></i></a>
            </div>
        </td>
    </script>

    {% set startStepSelector %}
        {% set startStep = entity.startStep ? entity.startStep.name : '' %}
        <div class=\"control-group\">
            {{ workflowDefinitionUpdate.render_label(\"oro.workflow.workflowdefinition.start_step.label\"|trans, false, \"oro.workflow.workflowdefinition.start_step.tooltip\") }}
            <div class=\"controls\">
                <input type=\"hidden\" name=\"start_step\" value=\"{{ startStep }}\"/>
            </div>
        </div>
    {% endset %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'subblocks': [
            {
                'data': [
                    form_row(form.label),
                    form_row(form.related_entity),
                    form_row(form.exclusive_active_groups),
                    form_row(form.exclusive_record_groups),
                    startStepSelector,
                    form_row(form.steps_display_ordered)
                ]
            }
        ]
    }] %}

    {% set stepsListWidget %}
    <div class=\"workflow-definition-buttons\">
        <div class=\"pull-right\">
            <button type=\"button\" class=\"btn btn-primary add-transition-btn\">{{ 'Add transition'|trans }}</button>
            <button type=\"button\" class=\"btn btn-primary add-step-btn\">{{ 'Add step'|trans }}</button>
        </div>
    </div>
    <div class=\"row-fluid clearfix\">
        <div class=\"workflow-table-container\">
            <div class=\"workflow-definition-steps-list-container clearfix\"></div>
        </div>
    </div>
    {% endset %}

    {% set dataBlocks = dataBlocks|merge([
        {
            'title': 'oro.workflow.block.title.steps_and_transitions'|trans,
            'subblocks': [
                {
                    'data':  [stepsListWidget]
                },
            ]
        },
    ]) %}

    {% if not isMobileVersion() %}
        {% set workflowDiagram %}
            <div class=\"workflow-definition-buttons\">
                <div class=\"workflow-history-container pull-left\"></div>
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"btn btn-secondary refresh-btn\">
                        <span class=\"fa-refresh\" aria-hidden=\"true\"></span>
                        {{ 'Auto sort'|trans }}
                    </button>
                </div>
                <div class=\"pull-right\">
                    <button type=\"button\" class=\"btn btn-primary add-transition-btn\">{{ 'Add transition'|trans }}</button>
                    <button type=\"button\" class=\"btn btn-primary add-step-btn\">{{ 'Add step'|trans }}</button>
                </div>
            </div>
            <div class=\"workflow-step-editor\" {{ UI.renderPageComponentAttributes({
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

    {% set id = 'workflow-designer' %}
    {% set data = {
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroWorkflow/WorkflowDefinition/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/WorkflowDefinition/update.html.twig");
    }
}
