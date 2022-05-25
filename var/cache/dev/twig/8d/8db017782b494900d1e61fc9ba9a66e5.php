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

/* @OroWorkflow/Workflow/transitionForm.html.twig */
class __TwigTemplate_4e16503db943f9f6ef30a77fa8100a4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pin_button' => [$this, 'block_pin_button'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'stats' => [$this, 'block_stats'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Workflow/transitionForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Workflow/transitionForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Workflow/transitionForm.html.twig"));

        // line 1
        $context["entity"] = null;
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/Workflow/transitionForm.html.twig", 3)->unwrap();
        // line 5
        $context["pageParams"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 5), "page", [], "any", true, true, false, 5)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 5, $this->source); })()), "frontendOptions", [], "any", false, false, false, 5), "page", [], "any", false, false, false, 5)) : (null));
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["pageParams"] ?? null), "title", [], "any", true, true, false, 6)) {
            // line 7
            $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pageParams"]) || array_key_exists("pageParams", $context) ? $context["pageParams"] : (function () { throw new RuntimeError('Variable "pageParams" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 9, $this->source); })()), "buttonLabel", [], "any", false, false, false, 9), [], "workflows");
            // line 10
            if ((twig_test_empty((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 10, $this->source); })())) || ((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 10, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 10, $this->source); })()), "buttonLabel", [], "any", false, false, false, 10)))) {
                // line 11
                $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), [], "workflows");
            }
        }
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["pageParams"] ?? null), "parent_label", [], "any", true, true, false, 15)) {
            // line 16
            $context["indexLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pageParams"]) || array_key_exists("pageParams", $context) ? $context["pageParams"] : (function () { throw new RuntimeError('Variable "pageParams" does not exist.', 16, $this->source); })()), "parent_label", [], "any", false, false, false, 16));
        } else {
            // line 18
            $context["indexLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["workflow"]) || array_key_exists("workflow", $context) ? $context["workflow"] : (function () { throw new RuntimeError('Variable "workflow" does not exist.', 18, $this->source); })()), "label", [], "any", false, false, false, 18), [], "workflows");
        }
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["pageParams"] ?? null), "parent_route", [], "any", true, true, false, 21)) {
            // line 22
            $context["indexPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pageParams"]) || array_key_exists("pageParams", $context) ? $context["pageParams"] : (function () { throw new RuntimeError('Variable "pageParams" does not exist.', 22, $this->source); })()), "parent_route", [], "any", false, false, false, 22), ((twig_get_attribute($this->env, $this->source, ($context["pageParams"] ?? null), "parent_route_parameters", [], "any", true, true, false, 22)) ? (twig_get_attribute($this->env, $this->source, (isset($context["pageParams"]) || array_key_exists("pageParams", $context) ? $context["pageParams"] : (function () { throw new RuntimeError('Variable "pageParams" does not exist.', 22, $this->source); })()), "parent_route_parameters", [], "any", false, false, false, 22)) : ([])));
        } else {
            // line 24
            $context["indexPath"] = urldecode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", [0 => "originalUrl"], "method", false, false, false, 24));
        }

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%workflow_title%" => ((        // line 27
(isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 27, $this->source); })()) . " - ") . (isset($context["indexLabel"]) || array_key_exists("indexLabel", $context) ? $context["indexLabel"] : (function () { throw new RuntimeError('Variable "indexLabel" does not exist.', 27, $this->source); })()))]]);
        // line 32
        $context["saveAndTransitButtonId"] = "save-and-transit";
        // line 2
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroWorkflow/Workflow/transitionForm.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_pin_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pin_button", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pin_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pin_button"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 35
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/Workflow/transitionForm.html.twig", 35)->unwrap();
        // line 36
        echo "
    ";
        // line 37
        if ((isset($context["indexPath"]) || array_key_exists("indexPath", $context) ? $context["indexPath"] : (function () { throw new RuntimeError('Variable "indexPath" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_cancelButton", [urldecode((isset($context["indexPath"]) || array_key_exists("indexPath", $context) ? $context["indexPath"] : (function () { throw new RuntimeError('Variable "indexPath" does not exist.', 38, $this->source); })()))], 38, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 40
        echo "
    <div class=\"btn-group\">
        <button
            type=\"button\"
            class=\"btn btn-success\"
            id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["saveAndTransitButtonId"]) || array_key_exists("saveAndTransitButtonId", $context) ? $context["saveAndTransitButtonId"] : (function () { throw new RuntimeError('Variable "saveAndTransitButtonId" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\"
            data-transition-url=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["transitionUrl"]) || array_key_exists("transitionUrl", $context) ? $context["transitionUrl"] : (function () { throw new RuntimeError('Variable "transitionUrl" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\"
        >";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 51
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 51));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 52
        echo "    ";
        $context["breadcrumbs"] = ["indexPath" => urldecode(        // line 53
(isset($context["indexPath"]) || array_key_exists("indexPath", $context) ? $context["indexPath"] : (function () { throw new RuntimeError('Variable "indexPath" does not exist.', 53, $this->source); })())), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 54
(isset($context["indexLabel"]) || array_key_exists("indexLabel", $context) ? $context["indexLabel"] : (function () { throw new RuntimeError('Variable "indexLabel" does not exist.', 54, $this->source); })())), "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 55
(isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 55, $this->source); })()))];
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('stats', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 63
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 63));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 64
        echo "    <ul class=\"breadcrumb\">
        <li>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["indexLabel"]) || array_key_exists("indexLabel", $context) ? $context["indexLabel"] : (function () { throw new RuntimeError('Variable "indexLabel" does not exist.', 65, $this->source); })())), "html", null, true);
        echo "</li>
    </ul>
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
        ob_start();
        // line 71
        echo "        ";
        $context["widgetAlias"] = "transition-form";
        // line 72
        echo "        ";
        $context["workflowFormWidgetViewOptions"] = ["view" => ["view" => "oroworkflow/js/app/views/workflow-form-widget-view", "widgetAlias" =>         // line 75
(isset($context["widgetAlias"]) || array_key_exists("widgetAlias", $context) ? $context["widgetAlias"] : (function () { throw new RuntimeError('Variable "widgetAlias" does not exist.', 75, $this->source); })()), "saveAndTransitButtonSelector" => ("#" .         // line 76
(isset($context["saveAndTransitButtonId"]) || array_key_exists("saveAndTransitButtonId", $context) ? $context["saveAndTransitButtonId"] : (function () { throw new RuntimeError('Variable "saveAndTransitButtonId" does not exist.', 76, $this->source); })()))]];
        // line 79
        echo "        <div class=\"form-container\" ";
        echo twig_call_macro($macros["macros"], "macro_renderPageComponentAttributes", [(isset($context["workflowFormWidgetViewOptions"]) || array_key_exists("workflowFormWidgetViewOptions", $context) ? $context["workflowFormWidgetViewOptions"] : (function () { throw new RuntimeError('Variable "workflowFormWidgetViewOptions" does not exist.', 79, $this->source); })())], 79, $context, $this->getSourceContext());
        echo ">
            ";
        // line 80
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" =>         // line 82
(isset($context["transitionFormUrl"]) || array_key_exists("transitionFormUrl", $context) ? $context["transitionFormUrl"] : (function () { throw new RuntimeError('Variable "transitionFormUrl" does not exist.', 82, $this->source); })()), "alias" =>         // line 83
(isset($context["widgetAlias"]) || array_key_exists("widgetAlias", $context) ? $context["widgetAlias"] : (function () { throw new RuntimeError('Variable "widgetAlias" does not exist.', 83, $this->source); })()), "loadingMaskEnabled" => false]);
        // line 85
        echo "
        </div>
    ";
        $context["transitionFormWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 88, $this->source); })()), "hasFormConfiguration", [], "method", false, false, false, 88)) {
            // line 89
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["transitionFormWidget"]) || array_key_exists("transitionFormWidget", $context) ? $context["transitionFormWidget"] : (function () { throw new RuntimeError('Variable "transitionFormWidget" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "
    ";
        } else {
            // line 91
            echo "        ";
            $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "subblocks" => [0 => ["data" => [0 =>             // line 94
(isset($context["transitionFormWidget"]) || array_key_exists("transitionFormWidget", $context) ? $context["transitionFormWidget"] : (function () { throw new RuntimeError('Variable "transitionFormWidget" does not exist.', 94, $this->source); })())]]]]];
            // line 97
            echo "
        ";
            // line 98
            $context["id"] = "transitionPage";
            // line 99
            echo "        ";
            $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 99, $this->source); })())];
            // line 100
            echo "        ";
            $this->displayParentBlock("content_data", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Workflow/transitionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 100,  346 => 99,  344 => 98,  341 => 97,  339 => 94,  337 => 91,  331 => 89,  328 => 88,  323 => 85,  321 => 83,  320 => 82,  319 => 80,  314 => 79,  312 => 76,  311 => 75,  309 => 72,  306 => 71,  303 => 70,  290 => 69,  274 => 65,  271 => 64,  258 => 63,  234 => 58,  219 => 60,  216 => 59,  214 => 58,  211 => 57,  209 => 55,  208 => 54,  207 => 53,  205 => 52,  192 => 51,  176 => 47,  172 => 46,  168 => 45,  161 => 40,  155 => 38,  153 => 37,  150 => 36,  147 => 35,  134 => 34,  110 => 29,  96 => 2,  94 => 32,  92 => 27,  88 => 24,  85 => 22,  83 => 21,  80 => 18,  77 => 16,  75 => 15,  71 => 11,  69 => 10,  67 => 9,  64 => 7,  62 => 6,  60 => 5,  58 => 3,  56 => 1,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% set entity = null %}
{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as macros %}

{% set pageParams = transition.frontendOptions.page is defined ? transition.frontendOptions.page : null  %}
{% if pageParams.title is defined %}
    {% set pageTitle = pageParams.title|trans %}
{% else %}
    {% set pageTitle = transition.buttonLabel|trans({},'workflows') %}
    {% if pageTitle is empty or pageTitle == transition.buttonLabel %}
        {% set pageTitle = transition.label|trans({},'workflows') %}
    {% endif %}
{% endif %}

{% if pageParams.parent_label is defined %}
    {% set indexLabel = pageParams.parent_label|trans %}
{% else %}
    {% set indexLabel = workflow.label|trans({},'workflows') %}
{% endif %}

{% if pageParams.parent_route is defined %}
    {% set indexPath = path(pageParams.parent_route, pageParams.parent_route_parameters is defined ? pageParams.parent_route_parameters : []) %}
{% else %}
    {% set indexPath = app.request.query.get('originalUrl')|url_decode %}
{% endif %}

{% oro_title_set({params : {\"%workflow_title%\": pageTitle ~ ' - ' ~ indexLabel} }) %}

{% block pin_button %}
{% endblock pin_button %}

{% set saveAndTransitButtonId = 'save-and-transit' %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if indexPath %}
        {{ UI.cancelButton(indexPath|url_decode) }}
    {% endif %}

    <div class=\"btn-group\">
        <button
            type=\"button\"
            class=\"btn btn-success\"
            id=\"{{ saveAndTransitButtonId }}\"
            data-transition-url=\"{{ transitionUrl }}\"
        >{{ 'Submit'|trans }}</button>
    </div>
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'indexPath': indexPath|url_decode,
        'indexLabel': indexLabel|trans,
        'entityTitle': pageTitle|trans
    } %}

    {% block stats %}{% endblock %}

    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumb %}
    <ul class=\"breadcrumb\">
        <li>{{ indexLabel|trans }}</li>
    </ul>
{% endblock %}

{% block content_data %}
    {% set transitionFormWidget %}
        {% set widgetAlias = 'transition-form' %}
        {% set workflowFormWidgetViewOptions = {
            view: {
                view: 'oroworkflow/js/app/views/workflow-form-widget-view',
                widgetAlias: widgetAlias,
                saveAndTransitButtonSelector: '#' ~ saveAndTransitButtonId
            }
        } %}
        <div class=\"form-container\" {{ macros.renderPageComponentAttributes(workflowFormWidgetViewOptions) }}>
            {{ oro_widget_render({
                'widgetType': 'block',
                'url': transitionFormUrl,
                'alias': widgetAlias,
                'loadingMaskEnabled': false
            }) }}
        </div>
    {% endset %}
    {% if transition.hasFormConfiguration() %}
        {{ transitionFormWidget }}
    {% else %}
        {% set dataBlocks = [
            {
                'title': 'General Information'|trans,
                'subblocks': [{'data' : [transitionFormWidget] }]
            }
        ] %}

        {% set id = 'transitionPage' %}
        {% set data = {'dataBlocks': dataBlocks} %}
        {{ parent() }}
    {% endif %}
{% endblock content_data %}
", "@OroWorkflow/Workflow/transitionForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Workflow/transitionForm.html.twig");
    }
}
