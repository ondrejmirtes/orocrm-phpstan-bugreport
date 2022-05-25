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

/* @OroUI/actions/view.html.twig */
class __TwigTemplate_134d05dd55fb913d8820accc83cdbe79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'before_content_addition' => [$this, 'block_before_content_addition'],
            'ownerLink' => [$this, 'block_ownerLink'],
            'content' => [$this, 'block_content'],
            'workflowStepListContainer' => [$this, 'block_workflowStepListContainer'],
            'navButtonContainer' => [$this, 'block_navButtonContainer'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageActions' => [$this, 'block_pageActions'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'pageTitleIcon' => [$this, 'block_pageTitleIcon'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'after_breadcrumbs' => [$this, 'block_after_breadcrumbs'],
            'breadcrumbMessage' => [$this, 'block_breadcrumbMessage'],
            'stats' => [$this, 'block_stats'],
            'content_data' => [$this, 'block_content_data'],
            'sync_content_tags' => [$this, 'block_sync_content_tags'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroUI/actions/view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/actions/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/view.html.twig"));

        // line 2
        $macros["syncMacro"] = $this->macros["syncMacro"] = $this->loadTemplate("@OroSync/Include/contentTags.html.twig", "@OroUI/actions/view.html.twig", 2)->unwrap();
        // line 3
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/view.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_before_content_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("before_content_addition", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        // line 6
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_before_content_addition", $context)) ? (_twig_default_filter((isset($context["view_before_content_addition"]) || array_key_exists("view_before_content_addition", $context) ? $context["view_before_content_addition"] : (function () { throw new RuntimeError('Variable "view_before_content_addition" does not exist.', 6, $this->source); })()), "view_before_content_addition")) : ("view_before_content_addition")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 9
    public function block_ownerLink($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("ownerLink", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ownerLink"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ownerLink"));

        // line 10
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/view.html.twig", 10)->unwrap();
        // line 11
        echo "
    ";
        // line 12
        if ( !(null === (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "        ";
            ob_start();
            // line 14
            echo twig_call_macro($macros["UI"], "macro_entityOwnerLink", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("additional_owner_info", $context)) ? (_twig_default_filter((isset($context["additional_owner_info"]) || array_key_exists("additional_owner_info", $context) ? $context["additional_owner_info"] : (function () { throw new RuntimeError('Variable "additional_owner_info" does not exist.', 14, $this->source); })()), "additional_owner_info")) : ("additional_owner_info")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })())]);
            $context["ownerLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter((isset($context["ownerLink"]) || array_key_exists("ownerLink", $context) ? $context["ownerLink"] : (function () { throw new RuntimeError('Variable "ownerLink" does not exist.', 16, $this->source); })())))) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["ownerLink"]) || array_key_exists("ownerLink", $context) ? $context["ownerLink"] : (function () { throw new RuntimeError('Variable "ownerLink" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "</li>
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/view.html.twig", 23)->unwrap();
        // line 24
        echo "
<div class=\"layout-content\"
        ";
        // line 26
        if (array_key_exists("pageComponent", $context)) {
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
        }
        // line 27
        echo "        >
    <div class=\"container-fluid page-title\">
        ";
        // line 29
        $this->displayBlock('workflowStepListContainer', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        ob_start();
        // line 34
        echo "            ";
        $this->displayBlock('navButtonContainer', $context, $blocks);
        // line 39
        echo "        ";
        $context["titleButtonsBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
        ";
        // line 41
        ob_start();
        // line 42
        echo "            ";
        $this->displayBlock('pageActions', $context, $blocks);
        // line 63
        echo "        ";
        $context["pageActionsBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
        <div class=\"navigation navbar-extra navbar-extra-right\">
            ";
        // line 66
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 145
        echo "        </div>
        ";
        // line 146
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("page_title_after", $context)) ? (_twig_default_filter((isset($context["page_title_after"]) || array_key_exists("page_title_after", $context) ? $context["page_title_after"] : (function () { throw new RuntimeError('Variable "page_title_after" does not exist.', 146, $this->source); })()), "page_title_after")) : ("page_title_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 146, $this->source); })())]);
        // line 147
        echo "    </div>

    <div class=\"layout-content scrollable-container\">
        ";
        // line 150
        $this->displayBlock('content_data', $context, $blocks);
        // line 244
        echo "    </div>

    ";
        // line 246
        $this->displayBlock('sync_content_tags', $context, $blocks);
        // line 251
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_workflowStepListContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("workflowStepListContainer", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "workflowStepListContainer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "workflowStepListContainer"));

        // line 30
        echo "            ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("page_title_before", $context)) ? (_twig_default_filter((isset($context["page_title_before"]) || array_key_exists("page_title_before", $context) ? $context["page_title_before"] : (function () { throw new RuntimeError('Variable "page_title_before" does not exist.', 30, $this->source); })()), "page_title_before")) : ("page_title_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })())]);
        // line 31
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_navButtonContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtonContainer", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtonContainer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtonContainer"));

        // line 35
        echo "                ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons_before", $context)) ? (_twig_default_filter((isset($context["view_navButtons_before"]) || array_key_exists("view_navButtons_before", $context) ? $context["view_navButtons_before"] : (function () { throw new RuntimeError('Variable "view_navButtons_before" does not exist.', 35, $this->source); })()), "view_navButtons_before")) : ("view_navButtons_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })())]);
        // line 36
        echo "                ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 37
        echo "                ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons_after", $context)) ? (_twig_default_filter((isset($context["view_navButtons_after"]) || array_key_exists("view_navButtons_after", $context) ? $context["view_navButtons_after"] : (function () { throw new RuntimeError('Variable "view_navButtons_after" does not exist.', 37, $this->source); })()), "view_navButtons_after")) : ("view_navButtons_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })())]);
        // line 38
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 36
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 36));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter((isset($context["view_navButtons"]) || array_key_exists("view_navButtons", $context) ? $context["view_navButtons"] : (function () { throw new RuntimeError('Variable "view_navButtons" does not exist.', 36, $this->source); })()), "view_navButtons")) : ("view_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block_pageActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageActions", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        // line 43
        echo "                ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_pageActions_before", $context)) ? (_twig_default_filter((isset($context["view_pageActions_before"]) || array_key_exists("view_pageActions_before", $context) ? $context["view_pageActions_before"] : (function () { throw new RuntimeError('Variable "view_pageActions_before" does not exist.', 43, $this->source); })()), "view_pageActions_before")) : ("view_pageActions_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })())]);
        // line 44
        echo "
                ";
        // line 45
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 46
            echo "                    ";
            $this->displayBlock("ownerLink", $context, $blocks);
            echo "
                ";
        }
        // line 48
        echo "
                ";
        // line 49
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? ((isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 49, $this->source); })())) : (((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", false, false, false, 49))) : (""))));
        // line 50
        echo "                ";
        if ((isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                    ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("change_history_block", $context)) ? (_twig_default_filter((isset($context["change_history_block"]) || array_key_exists("change_history_block", $context) ? $context["change_history_block"] : (function () { throw new RuntimeError('Variable "change_history_block" does not exist.', 51, $this->source); })()), "change_history_block")) : ("change_history_block")), ["entity" =>             // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "entity_class" => ((            // line 53
array_key_exists("audit_entity_class", $context)) ? (_twig_default_filter((isset($context["audit_entity_class"]) || array_key_exists("audit_entity_class", $context) ? $context["audit_entity_class"] : (function () { throw new RuntimeError('Variable "audit_entity_class" does not exist.', 53, $this->source); })()), null)) : (null)), "id" =>             // line 54
(isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 54, $this->source); })()), "title" => ((            // line 55
array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) || array_key_exists("audit_title", $context) ? $context["audit_title"] : (function () { throw new RuntimeError('Variable "audit_title" does not exist.', 55, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "__toString", [], "any", true, true, false, 55)) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "__toString", [], "any", false, false, false, 55)) : (null)))) : (((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "__toString", [], "any", true, true, false, 55)) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "__toString", [], "any", false, false, false, 55)) : (null)))), "audit_path" => ((            // line 56
array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) || array_key_exists("audit_path", $context) ? $context["audit_path"] : (function () { throw new RuntimeError('Variable "audit_path" does not exist.', 56, $this->source); })()), "oro_dataaudit_history")) : ("oro_dataaudit_history")), "audit_show_change_history" => ((            // line 57
array_key_exists("audit_show_change_history", $context)) ? (_twig_default_filter((isset($context["audit_show_change_history"]) || array_key_exists("audit_show_change_history", $context) ? $context["audit_show_change_history"] : (function () { throw new RuntimeError('Variable "audit_show_change_history" does not exist.', 57, $this->source); })()), false)) : (false))]);
            // line 59
            echo "                ";
        }
        // line 60
        echo "
                ";
        // line 61
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_pageActions_after", $context)) ? (_twig_default_filter((isset($context["view_pageActions_after"]) || array_key_exists("view_pageActions_after", $context) ? $context["view_pageActions_after"] : (function () { throw new RuntimeError('Variable "view_pageActions_after" does not exist.', 61, $this->source); })()), "view_pageActions_after")) : ("view_pageActions_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })())]);
        // line 62
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 66
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 66));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 67
        echo "                <div class=\"row\">
                    <div class=\"pull-left-extra\">
                        ";
        // line 69
        $this->displayBlock('pageTitleIcon', $context, $blocks);
        // line 70
        echo "
                        <div class=\"page-title__path\">
                            <div class=\"top-row\">
                                ";
        // line 73
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 108
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 111
        ob_start();
        // line 112
        echo "                        <div class=\"pull-right title-buttons-container\">
                            ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["titleButtonsBlock"]) || array_key_exists("titleButtonsBlock", $context) ? $context["titleButtonsBlock"] : (function () { throw new RuntimeError('Variable "titleButtonsBlock" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "
                        </div>
                    ";
        $___internal_parse_23_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo twig_spaceless($___internal_parse_23_);
        // line 116
        echo "                </div>
                <div class=\"row inline-info\">
                    <div class=\"pull-left-extra\">
                        <ul class=\"inline\">
                            ";
        // line 120
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("page_header_stats_before", $context)) ? (_twig_default_filter((isset($context["page_header_stats_before"]) || array_key_exists("page_header_stats_before", $context) ? $context["page_header_stats_before"] : (function () { throw new RuntimeError('Variable "page_header_stats_before" does not exist.', 120, $this->source); })()), "page_header_stats_before")) : ("page_header_stats_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })())]);
        // line 121
        echo "                            ";
        $this->displayBlock('stats', $context, $blocks);
        // line 129
        echo "                            ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("page_header_stats_after", $context)) ? (_twig_default_filter((isset($context["page_header_stats_after"]) || array_key_exists("page_header_stats_after", $context) ? $context["page_header_stats_after"] : (function () { throw new RuntimeError('Variable "page_header_stats_after" does not exist.', 129, $this->source); })()), "page_header_stats_after")) : ("page_header_stats_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 129, $this->source); })())]);
        // line 130
        echo "
                            ";
        // line 131
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 132
            echo "                                ";
            $this->displayBlock("ownerLink", $context, $blocks);
            echo "
                            ";
        }
        // line 134
        echo "                        </ul>
                    </div>
                    <div class=\"pull-right page-title__entity-info-state\">
                        <div class=\"inline-decorate-container\">
                            <ul class=\"inline-decorate\">
                                ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 69
    public function block_pageTitleIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageTitleIcon", $this->getTemplateName(), 69));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 73
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 73));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 74
        echo "                                    ";
        if (array_key_exists("breadcrumbs", $context)) {
            // line 75
            echo "                                        <div class=\"page-title__entity-title-wrapper\">
                                            ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "indexLabel", [], "any", true, true, false, 76)) {
                // line 77
                echo "                                                <div class=\"sub-title\">";
                // line 78
                if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "indexPath", [], "any", true, true, false, 78)) {
                    // line 79
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->addUrlQuery(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 79, $this->source); })()), "indexPath", [], "any", false, false, false, 79)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 79, $this->source); })()), "indexLabel", [], "any", false, false, false, 79), "html", null, true);
                    echo "</a>";
                } else {
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 81, $this->source); })()), "indexLabel", [], "any", false, false, false, 81), "html", null, true);
                }
                // line 83
                echo "</div>
                                                <span class=\"separator\">/</span>
                                            ";
            }
            // line 86
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "additional", [], "any", true, true, false, 86)) {
                // line 87
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 87, $this->source); })()), "additional", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 88
                    echo "                                                    <div class=\"sub-title\">";
                    // line 89
                    if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", true, true, false, 89)) {
                        // line 90
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", false, false, false, 90), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 90), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 92
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 92), "html", null, true);
                    }
                    // line 94
                    echo "</div>
                                                    <span class=\"separator\">/</span>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                                            ";
            }
            // line 98
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "rawEntityTitle", [], "any", true, true, false, 98) && twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 98, $this->source); })()), "rawEntityTitle", [], "any", false, false, false, 98))) {
                // line 99
                echo "                                                <h1 class=\"page-title__entity-title\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 99, $this->source); })()), "entityTitle", [], "any", false, false, false, 99);
                echo "</h1>
                                            ";
            } else {
                // line 101
                echo "                                                <h1 class=\"page-title__entity-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 101, $this->source); })()), "entityTitle", [], "any", false, false, false, 101), "html", null, true);
                echo "</h1>
                                            ";
            }
            // line 103
            echo "                                        </div>
                                        ";
            // line 104
            $this->displayBlock('after_breadcrumbs', $context, $blocks);
            // line 105
            echo "                                    ";
        }
        // line 106
        echo "                                    ";
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 107
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 104
    public function block_after_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("after_breadcrumbs", $this->getTemplateName(), 104));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_breadcrumbs"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 106
    public function block_breadcrumbMessage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbMessage", $this->getTemplateName(), 106));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 121
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 121));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 122
        echo "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 122, $this->source); })()), "createdAt")) {
            // line 123
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "entity", [], "any", false, true, false, 123), "createdAt", [], "any", true, true, false, 123) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 123, $this->source); })()), "entity", [], "any", false, false, false, 123), "createdAt", [], "any", false, false, false, 123))) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 123, $this->source); })()), "entity", [], "any", false, false, false, 123), "createdAt", [], "any", false, false, false, 123)), "html", null, true))) : (print ("N/A")));
            echo "</li>
                                ";
        }
        // line 125
        echo "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 125, $this->source); })()), "updatedAt")) {
            // line 126
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "entity", [], "any", false, true, false, 126), "updatedAt", [], "any", true, true, false, 126) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 126, $this->source); })()), "entity", [], "any", false, false, false, 126), "updatedAt", [], "any", false, false, false, 126))) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 126, $this->source); })()), "entity", [], "any", false, false, false, 126), "updatedAt", [], "any", false, false, false, 126)), "html", null, true))) : (print ("N/A")));
            echo "</li>
                                ";
        }
        // line 128
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 150
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 150));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 151
        echo "            ";
        if ((array_key_exists("data", $context) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "dataBlocks", [], "any", true, true, false, 151))) {
            // line 152
            echo "                ";
            $context["data"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processView($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 152, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 152, $this->source); })()));
            // line 153
            echo "                ";
            $context["dataBlocks"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 153, $this->source); })()), "dataBlocks", [], "any", false, false, false, 153);
            // line 155
            ob_start();
            // line 156
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_activities", $context)) ? (_twig_default_filter((isset($context["view_content_data_activities"]) || array_key_exists("view_content_data_activities", $context) ? $context["view_content_data_activities"] : (function () { throw new RuntimeError('Variable "view_content_data_activities" does not exist.', 156, $this->source); })()), "view_content_data_activities")) : ("view_content_data_activities")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 156, $this->source); })())]);
            $context["activitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 159
            if ( !twig_test_empty((isset($context["activitiesData"]) || array_key_exists("activitiesData", $context) ? $context["activitiesData"] : (function () { throw new RuntimeError('Variable "activitiesData" does not exist.', 159, $this->source); })()))) {
                // line 160
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 160, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.sections.activities"), "priority" => 1000, "subblocks" => [0 => ["spanClass" => "empty activities-container", "data" => [0 =>                 // line 166
(isset($context["activitiesData"]) || array_key_exists("activitiesData", $context) ? $context["activitiesData"] : (function () { throw new RuntimeError('Variable "activitiesData" does not exist.', 166, $this->source); })())]]]]]);
                // line 170
                echo "                ";
            }
            // line 172
            ob_start();
            // line 173
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities", $context)) ? (_twig_default_filter((isset($context["view_content_data_marketing_activities"]) || array_key_exists("view_content_data_marketing_activities", $context) ? $context["view_content_data_marketing_activities"] : (function () { throw new RuntimeError('Variable "view_content_data_marketing_activities" does not exist.', 173, $this->source); })()), "view_content_data_marketing_activities")) : ("view_content_data_marketing_activities")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 173, $this->source); })())]);
            $context["marketingActivitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 176
            if ( !twig_test_empty((isset($context["marketingActivitiesData"]) || array_key_exists("marketingActivitiesData", $context) ? $context["marketingActivitiesData"] : (function () { throw new RuntimeError('Variable "marketingActivitiesData" does not exist.', 176, $this->source); })()))) {
                // line 177
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 177, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.sections.marketingactivities"), "priority" => 1050, "subblocks" => [0 => ["spanClass" => "empty marketing-activities-container", "data" => [0 =>                 // line 183
(isset($context["marketingActivitiesData"]) || array_key_exists("marketingActivitiesData", $context) ? $context["marketingActivitiesData"] : (function () { throw new RuntimeError('Variable "marketingActivitiesData" does not exist.', 183, $this->source); })())]]]]]);
                // line 187
                echo "                ";
            }
            // line 189
            ob_start();
            // line 190
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_communications", $context)) ? (_twig_default_filter((isset($context["view_content_data_communications"]) || array_key_exists("view_content_data_communications", $context) ? $context["view_content_data_communications"] : (function () { throw new RuntimeError('Variable "view_content_data_communications" does not exist.', 190, $this->source); })()), "view_content_data_communications")) : ("view_content_data_communications")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })())]);
            $context["communicationsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 193
            if ( !twig_test_empty((isset($context["communicationsData"]) || array_key_exists("communicationsData", $context) ? $context["communicationsData"] : (function () { throw new RuntimeError('Variable "communicationsData" does not exist.', 193, $this->source); })()))) {
                // line 194
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 194, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communications"), "priority" => 1100, "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>                 // line 200
(isset($context["communicationsData"]) || array_key_exists("communicationsData", $context) ? $context["communicationsData"] : (function () { throw new RuntimeError('Variable "communicationsData" does not exist.', 200, $this->source); })())]]]]]);
                // line 204
                echo "                ";
            }
            // line 206
            ob_start();
            // line 207
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_additional_information", $context)) ? (_twig_default_filter((isset($context["view_content_data_additional_information"]) || array_key_exists("view_content_data_additional_information", $context) ? $context["view_content_data_additional_information"] : (function () { throw new RuntimeError('Variable "view_content_data_additional_information" does not exist.', 207, $this->source); })()), "view_content_data_additional_information")) : ("view_content_data_additional_information")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 207, $this->source); })())]);
            $context["additionalInformationData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            if ( !twig_test_empty((isset($context["additionalInformationData"]) || array_key_exists("additionalInformationData", $context) ? $context["additionalInformationData"] : (function () { throw new RuntimeError('Variable "additionalInformationData" does not exist.', 210, $this->source); })()))) {
                // line 211
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 211, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional Information"), "priority" => 1200, "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>                 // line 217
(isset($context["additionalInformationData"]) || array_key_exists("additionalInformationData", $context) ? $context["additionalInformationData"] : (function () { throw new RuntimeError('Variable "additionalInformationData" does not exist.', 217, $this->source); })())]]]]]);
                // line 221
                echo "                ";
            }
            // line 223
            ob_start();
            // line 224
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_comments", $context)) ? (_twig_default_filter((isset($context["view_content_data_comments"]) || array_key_exists("view_content_data_comments", $context) ? $context["view_content_data_comments"] : (function () { throw new RuntimeError('Variable "view_content_data_comments" does not exist.', 224, $this->source); })()), "view_content_data_comments")) : ("view_content_data_comments")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 224, $this->source); })())]);
            $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 227
            if ( !twig_test_empty((isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 227, $this->source); })()))) {
                // line 228
                echo "                    ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 228, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.comment.entity_plural_label"), "priority" => 1300, "subblocks" => [0 => ["spanClass" => "responsive-cell activity-list-widget", "data" => [0 =>                 // line 234
(isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 234, $this->source); })())]]]]]);
                // line 238
                echo "                ";
            }
            // line 239
            echo "
                ";
            // line 240
            $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 240, $this->source); })()), ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 240, $this->source); })())]);
            // line 241
            echo "            ";
        }
        // line 242
        echo "            ";
        echo twig_call_macro($macros["UI"], "macro_scrollData", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 242, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 242, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 242, $this->source); })())], 242, $context, $this->getSourceContext());
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 246
    public function block_sync_content_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sync_content_tags", $this->getTemplateName(), 246));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sync_content_tags"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sync_content_tags"));

        // line 247
        echo "        ";
        // line 248
        echo "        ";
        echo twig_call_macro($macros["syncMacro"], "macro_syncContentTags", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 248, $this->source); })())], 248, $context, $this->getSourceContext());
        echo "
        ";
        // line 249
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_entity_sync_content_tags", $context)) ? (_twig_default_filter((isset($context["view_entity_sync_content_tags"]) || array_key_exists("view_entity_sync_content_tags", $context) ? $context["view_entity_sync_content_tags"] : (function () { throw new RuntimeError('Variable "view_entity_sync_content_tags" does not exist.', 249, $this->source); })()), "view_entity_sync_content_tags")) : ("view_entity_sync_content_tags")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 249, $this->source); })())]);
        // line 250
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/actions/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  868 => 250,  866 => 249,  861 => 248,  859 => 247,  846 => 246,  830 => 242,  827 => 241,  825 => 240,  822 => 239,  819 => 238,  817 => 234,  815 => 228,  813 => 227,  810 => 224,  808 => 223,  805 => 221,  803 => 217,  801 => 211,  799 => 210,  796 => 207,  794 => 206,  791 => 204,  789 => 200,  787 => 194,  785 => 193,  782 => 190,  780 => 189,  777 => 187,  775 => 183,  773 => 177,  771 => 176,  768 => 173,  766 => 172,  763 => 170,  761 => 166,  759 => 160,  757 => 159,  754 => 156,  752 => 155,  749 => 153,  746 => 152,  743 => 151,  730 => 150,  717 => 128,  709 => 126,  706 => 125,  698 => 123,  695 => 122,  682 => 121,  658 => 106,  634 => 104,  621 => 107,  618 => 106,  615 => 105,  613 => 104,  610 => 103,  604 => 101,  598 => 99,  595 => 98,  592 => 97,  584 => 94,  581 => 92,  574 => 90,  572 => 89,  570 => 88,  565 => 87,  562 => 86,  557 => 83,  554 => 81,  547 => 79,  545 => 78,  543 => 77,  541 => 76,  538 => 75,  535 => 74,  522 => 73,  498 => 69,  479 => 139,  472 => 134,  466 => 132,  464 => 131,  461 => 130,  458 => 129,  455 => 121,  453 => 120,  447 => 116,  445 => 111,  439 => 113,  436 => 112,  434 => 111,  429 => 108,  427 => 73,  422 => 70,  420 => 69,  416 => 67,  403 => 66,  390 => 62,  388 => 61,  385 => 60,  382 => 59,  380 => 57,  379 => 56,  378 => 55,  377 => 54,  376 => 53,  375 => 52,  373 => 51,  370 => 50,  368 => 49,  365 => 48,  359 => 46,  357 => 45,  354 => 44,  351 => 43,  338 => 42,  313 => 36,  300 => 38,  297 => 37,  294 => 36,  291 => 35,  278 => 34,  265 => 31,  262 => 30,  249 => 29,  235 => 251,  233 => 246,  229 => 244,  227 => 150,  222 => 147,  220 => 146,  217 => 145,  215 => 66,  211 => 64,  208 => 63,  205 => 42,  203 => 41,  200 => 40,  197 => 39,  194 => 34,  192 => 33,  189 => 32,  187 => 29,  183 => 27,  179 => 26,  175 => 24,  173 => 23,  160 => 22,  146 => 19,  140 => 17,  137 => 16,  133 => 14,  130 => 13,  128 => 12,  125 => 11,  122 => 10,  109 => 9,  95 => 6,  82 => 5,  69 => 1,  67 => 3,  65 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroSync/Include/contentTags.html.twig' as syncMacro %}
{% import '@OroUI/macros.html.twig' as UI %}

{% block before_content_addition %}
    {% placeholder view_before_content_addition with {entity: entity} %}
{% endblock before_content_addition %}

{% block ownerLink %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity is not null %}
        {% set ownerLink -%}
            {{ UI.entityOwnerLink(entity) }}{% placeholder additional_owner_info with {entity: entity} %}
        {%- endset %}
        {% if ownerLink|trim is not empty %}
            <li>{{ ownerLink }}</li>
        {% endif %}
    {% endif %}
{% endblock ownerLink %}

{% block content %}
{% import '@OroUI/macros.html.twig' as UI %}

<div class=\"layout-content\"
        {% if pageComponent is defined %}{{ UI.renderPageComponentAttributes(pageComponent) }}{% endif %}
        >
    <div class=\"container-fluid page-title\">
        {% block workflowStepListContainer %}
            {% placeholder page_title_before with {entity: entity} %}
        {% endblock  %}

        {% set titleButtonsBlock %}
            {% block navButtonContainer %}
                {% placeholder view_navButtons_before with {entity: entity} %}
                {% block navButtons %}{% placeholder view_navButtons with {entity: entity} %}{% endblock navButtons %}
                {% placeholder view_navButtons_after with {entity: entity} %}
            {% endblock navButtonContainer%}
        {% endset %}

        {% set pageActionsBlock %}
            {% block pageActions %}
                {% placeholder view_pageActions_before with {entity: entity} %}

                {% if isDesktopVersion() %}
                    {{ block('ownerLink') }}
                {% endif %}

                {% set audit_entity_id = audit_entity_id is defined ? audit_entity_id : entity.id|default %}
                {% if audit_entity_id %}
                    {% placeholder change_history_block with {
                        'entity': entity,
                        'entity_class': audit_entity_class|default(null),
                        'id': audit_entity_id,
                        'title': audit_title|default(entity.__toString is defined ? entity.__toString : null),
                        'audit_path': audit_path|default('oro_dataaudit_history'),
                        'audit_show_change_history': audit_show_change_history|default(false)
                    } %}
                {% endif %}

                {% placeholder view_pageActions_after with {entity: entity} %}
            {% endblock pageActions %}
        {% endset %}

        <div class=\"navigation navbar-extra navbar-extra-right\">
            {% block pageHeader %}
                <div class=\"row\">
                    <div class=\"pull-left-extra\">
                        {% block pageTitleIcon %}{% endblock %}

                        <div class=\"page-title__path\">
                            <div class=\"top-row\">
                                {% block breadcrumbs %}
                                    {% if breadcrumbs is defined %}
                                        <div class=\"page-title__entity-title-wrapper\">
                                            {% if breadcrumbs.indexLabel is defined %}
                                                <div class=\"sub-title\">
                                                    {%- if breadcrumbs.indexPath is defined -%}
                                                        <a href=\"{{ oro_url_add_query(breadcrumbs.indexPath) }}\">{{ breadcrumbs.indexLabel }}</a>
                                                    {%- else -%}
                                                        {{ breadcrumbs.indexLabel }}
                                                    {%- endif -%}
                                                </div>
                                                <span class=\"separator\">/</span>
                                            {% endif %}
                                            {% if breadcrumbs.additional is defined %}
                                                {% for breadcrumb in breadcrumbs.additional %}
                                                    <div class=\"sub-title\">
                                                        {%- if breadcrumb.indexPath is defined -%}
                                                            <a href=\"{{ breadcrumb.indexPath }}\">{{ breadcrumb.indexLabel }}</a>
                                                        {%- else -%}
                                                            {{ breadcrumb.indexLabel }}
                                                        {%- endif -%}
                                                    </div>
                                                    <span class=\"separator\">/</span>
                                                {% endfor %}
                                            {% endif %}
                                            {% if breadcrumbs.rawEntityTitle is defined and breadcrumbs.rawEntityTitle %}
                                                <h1 class=\"page-title__entity-title\">{{ breadcrumbs.entityTitle|raw }}</h1>
                                            {% else %}
                                                <h1 class=\"page-title__entity-title\">{{ breadcrumbs.entityTitle }}</h1>
                                            {% endif %}
                                        </div>
                                        {% block after_breadcrumbs %}{% endblock %}
                                    {% endif %}
                                    {% block breadcrumbMessage %}{% endblock breadcrumbMessage %}
                                {% endblock breadcrumbs %}
                            </div>
                        </div>
                    </div>
                    {% apply spaceless %}
                        <div class=\"pull-right title-buttons-container\">
                            {{ titleButtonsBlock }}
                        </div>
                    {% endapply %}
                </div>
                <div class=\"row inline-info\">
                    <div class=\"pull-left-extra\">
                        <ul class=\"inline\">
                            {% placeholder page_header_stats_before with {entity: entity} %}
                            {% block stats %}
                                {% if  is_granted('VIEW', entity, 'createdAt') %}
                                    <li>{{ 'oro.ui.created_at'|trans }}: {{ breadcrumbs.entity.createdAt is defined and breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>
                                {% endif %}
                                {% if  is_granted('VIEW', entity, 'updatedAt') %}
                                    <li>{{ 'oro.ui.updated_at'|trans }}: {{ breadcrumbs.entity.updatedAt is defined and breadcrumbs.entity.updatedAt ? breadcrumbs.entity.updatedAt|oro_format_datetime : 'N/A' }}</li>
                                {% endif %}
                            {% endblock stats %}
                            {% placeholder page_header_stats_after with {entity: entity} %}

                            {% if isMobileVersion() %}
                                {{ block('ownerLink') }}
                            {% endif %}
                        </ul>
                    </div>
                    <div class=\"pull-right page-title__entity-info-state\">
                        <div class=\"inline-decorate-container\">
                            <ul class=\"inline-decorate\">
                                {{ pageActionsBlock }}
                            </ul>
                        </div>
                    </div>
                </div>
            {% endblock pageHeader %}
        </div>
        {% placeholder page_title_after with {entity: entity} %}
    </div>

    <div class=\"layout-content scrollable-container\">
        {% block content_data %}
            {% if data is defined and data.dataBlocks is defined %}
                {% set data = oro_view_process(data, entity) %}
                {% set dataBlocks = data.dataBlocks %}

                {%- set activitiesData -%}
                    {% placeholder view_content_data_activities with {entity: entity} %}
                {%- endset -%}

                {% if activitiesData is not empty %}
                    {% set dataBlocks = dataBlocks|merge([{
                        'title': 'oro.activity.sections.activities'|trans,
                        'priority' : 1000,
                        'subblocks': [
                            {
                                'spanClass': 'empty activities-container',
                                'data': [activitiesData]
                            }
                        ]
                    }]) %}
                {% endif %}

                {%- set marketingActivitiesData -%}
                    {% placeholder view_content_data_marketing_activities with {entity: entity} %}
                {%- endset -%}

                {% if marketingActivitiesData is not empty %}
                    {% set dataBlocks = dataBlocks|merge([{
                        'title': 'oro.marketingactivity.sections.marketingactivities'|trans,
                        'priority' : 1050,
                        'subblocks': [
                            {
                                'spanClass': 'empty marketing-activities-container',
                                'data': [marketingActivitiesData]
                            }
                        ]
                    }]) %}
                {% endif %}

                {%- set communicationsData -%}
                    {% placeholder view_content_data_communications with {entity: entity} %}
                {%- endset -%}

                {% if communicationsData is not empty %}
                    {% set dataBlocks = dataBlocks|merge([{
                        'title': 'Communications'|trans,
                        'priority' : 1100,
                        'subblocks': [
                            {
                                'spanClass': 'empty',
                                'data': [communicationsData]
                            }
                        ]
                    }]) %}
                {% endif %}

                {%- set additionalInformationData -%}
                    {% placeholder view_content_data_additional_information with {entity: entity} %}
                {%- endset -%}

                {% if additionalInformationData is not empty %}
                    {% set dataBlocks = dataBlocks|merge([{
                        'title': 'Additional Information'|trans,
                        'priority' : 1200,
                        'subblocks': [
                            {
                                'spanClass': 'empty',
                                'data': [additionalInformationData]
                            }
                        ]
                    }]) %}
                {% endif %}

                {%- set commentsData  -%}
                    {% placeholder view_content_data_comments with {entity: entity} %}
                {%- endset -%}

                {% if commentsData is not empty %}
                    {% set dataBlocks = dataBlocks|merge([{
                        'title': 'oro.comment.entity_plural_label'|trans,
                        'priority' : 1300,
                        'subblocks': [
                            {
                                'spanClass': 'responsive-cell activity-list-widget',
                                'data': [commentsData]
                            }
                        ]
                    }]) %}
                {% endif  %}

                {% set data = data|merge({'dataBlocks': dataBlocks}) %}
            {% endif %}
            {{ UI.scrollData(id, data, entity) }}
        {% endblock content_data %}
    </div>

    {% block sync_content_tags %}
        {# block added just for possibility to disable it in child templates if needed #}
        {{ syncMacro.syncContentTags(entity) }}
        {% placeholder view_entity_sync_content_tags with {entity: entity} %}
    {% endblock %}
</div>
{% endblock content %}
", "@OroUI/actions/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/actions/view.html.twig");
    }
}
