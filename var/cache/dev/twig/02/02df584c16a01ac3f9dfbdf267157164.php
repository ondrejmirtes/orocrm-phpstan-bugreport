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

/* @OroUI/actions/index.html.twig */
class __TwigTemplate_9a5389f78a702e01ddda0055ee267f17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'before_content_addition' => [$this, 'block_before_content_addition'],
            'content' => [$this, 'block_content'],
            'pageActions' => [$this, 'block_pageActions'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_datagrid' => [$this, 'block_content_datagrid'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroUI/actions/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/actions/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/index.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/index.html.twig", 2)->unwrap();
        // line 3
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroUI/actions/index.html.twig", 3)->unwrap();
        // line 4
        $context["buttonsPlaceholderData"] = [];
        // line 5
        if (array_key_exists("entity_class", $context)) {
            // line 6
            $context["buttonsPlaceholderData"] = ["entity_class" => (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 6, $this->source); })())];
        } elseif (        // line 7
array_key_exists("entity", $context)) {
            // line 8
            $context["buttonsPlaceholderData"] = ["entity_class" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()))];
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_before_content_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("before_content_addition", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        // line 12
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_before_content_addition", $context)) ? (_twig_default_filter((isset($context["index_before_content_addition"]) || array_key_exists("index_before_content_addition", $context) ? $context["index_before_content_addition"] : (function () { throw new RuntimeError('Variable "index_before_content_addition" does not exist.', 12, $this->source); })()), "index_before_content_addition")) : ("index_before_content_addition")), array());
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"container-fluid page-title\">
        ";
        // line 17
        ob_start();
        // line 18
        $this->displayBlock('pageActions', $context, $blocks);
        $context["pageActionsBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">";
        // line 27
        ((array_key_exists("pageTitle", $context)) ? (print (twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 27, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</h1>
                    </div>
                </div>
                <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"";
        // line 32
        echo twig_escape_filter($this->env, json_encode(["view" => "oroui/js/app/views/hidden-initialization-view"]), "html", null, true);
        echo "\"
                         data-layout=\"separate\">
                    ";
        // line 34
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_before", $context)) ? (_twig_default_filter((isset($context["index_navButtons_before"]) || array_key_exists("index_navButtons_before", $context) ? $context["index_navButtons_before"] : (function () { throw new RuntimeError('Variable "index_navButtons_before" does not exist.', 34, $this->source); })()), "index_navButtons_before")) : ("index_navButtons_before")), (isset($context["buttonsPlaceholderData"]) || array_key_exists("buttonsPlaceholderData", $context) ? $context["buttonsPlaceholderData"] : (function () { throw new RuntimeError('Variable "buttonsPlaceholderData" does not exist.', 34, $this->source); })()));
        // line 35
        echo "                    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 36
        echo "                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_after", $context)) ? (_twig_default_filter((isset($context["index_navButtons_after"]) || array_key_exists("index_navButtons_after", $context) ? $context["index_navButtons_after"] : (function () { throw new RuntimeError('Variable "index_navButtons_after" does not exist.', 36, $this->source); })()), "index_navButtons_after")) : ("index_navButtons_after")), (isset($context["buttonsPlaceholderData"]) || array_key_exists("buttonsPlaceholderData", $context) ? $context["buttonsPlaceholderData"] : (function () { throw new RuntimeError('Variable "buttonsPlaceholderData" does not exist.', 36, $this->source); })()));
        // line 37
        echo "                </div>
                <div class=\"page-title-center\"
                     data-role=\"filters-state-view-container\"
                     data-page-component-module=\"oroui/js/app/components/view-component\"
                     data-page-component-options=\"";
        // line 41
        echo twig_escape_filter($this->env, json_encode(["view" => "oroui/js/app/views/page-center-title-view"]), "html", null, true);
        echo "\">
                </div>
            </div>
            ";
        // line 44
        if (twig_trim_filter((isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "            <div class=\"row inline-info\">
                <div class=\"pull-right\">
                    <div class=\"inline-decorate-container\">
                        <ul class=\"inline-decorate\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "
                        </ul>
                    </div>
                </div>
            </div>
            ";
        }
        // line 55
        echo "        </div>
    </div>
    ";
        // line 57
        $this->displayBlock('content_datagrid', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_pageActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageActions", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        // line 19
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_pageActions", $context)) ? (_twig_default_filter((isset($context["index_pageActions"]) || array_key_exists("index_pageActions", $context) ? $context["index_pageActions"] : (function () { throw new RuntimeError('Variable "index_pageActions" does not exist.', 19, $this->source); })()), "index_pageActions")) : ("index_pageActions")), (isset($context["buttonsPlaceholderData"]) || array_key_exists("buttonsPlaceholderData", $context) ? $context["buttonsPlaceholderData"] : (function () { throw new RuntimeError('Variable "buttonsPlaceholderData" does not exist.', 19, $this->source); })()));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_content_datagrid($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_datagrid", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        // line 58
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 59
            echo "            ";
            if (array_key_exists("gridScope", $context)) {
                // line 60
                echo "                ";
                $context["gridName"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName((isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 60, $this->source); })()), (isset($context["gridScope"]) || array_key_exists("gridScope", $context) ? $context["gridScope"] : (function () { throw new RuntimeError('Variable "gridScope" does not exist.', 60, $this->source); })()));
                // line 61
                echo "            ";
            }
            // line 62
            echo "            ";
            $context["renderParams"] = twig_array_merge(["enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true, "filtersStateElement" => "[data-role=\"filters-state-view-container\"]"], ((            // line 68
array_key_exists("renderParams", $context)) ? (_twig_default_filter((isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 68, $this->source); })()), [])) : ([])));
            // line 69
            echo "            ";
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 69, $this->source); })()), ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 69, $this->source); })()), [])) : ([])), (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 69, $this->source); })())], 69, $context, $this->getSourceContext());
            echo "

            ";
            // line 72
            echo "            ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/index.html.twig", 72)->unwrap();
            // line 73
            echo "
            <div ";
            // line 74
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => ["gridName" =>             // line 77
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 77, $this->source); })())]]], 74, $context, $this->getSourceContext());
            // line 79
            echo "></div>
        ";
        }
        // line 81
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/actions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 81,  299 => 79,  297 => 77,  296 => 74,  293 => 73,  290 => 72,  284 => 69,  282 => 68,  280 => 62,  277 => 61,  274 => 60,  271 => 59,  268 => 58,  255 => 57,  231 => 35,  218 => 19,  205 => 18,  192 => 57,  188 => 55,  179 => 49,  173 => 45,  171 => 44,  165 => 41,  159 => 37,  156 => 36,  153 => 35,  151 => 34,  146 => 32,  138 => 27,  131 => 22,  128 => 18,  126 => 17,  123 => 16,  110 => 15,  96 => 12,  83 => 11,  70 => 1,  67 => 8,  65 => 7,  63 => 6,  61 => 5,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% set buttonsPlaceholderData = {} %}
{% if entity_class is defined %}
    {% set buttonsPlaceholderData = {'entity_class': entity_class} %}
{% elseif entity is defined %}
    {% set buttonsPlaceholderData = {'entity_class': oro_class_name(entity)} %}
{% endif %}

{% block before_content_addition %}
    {% placeholder index_before_content_addition %}
{% endblock before_content_addition %}

{% block content %}
    <div class=\"container-fluid page-title\">
        {% set pageActionsBlock -%}
            {% block pageActions -%}
                {% placeholder index_pageActions with buttonsPlaceholderData %}
            {%- endblock pageActions %}
        {%- endset %}

        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">{{ pageTitle is defined ? pageTitle : '' }}</h1>
                    </div>
                </div>
                <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"{{ {'view': 'oroui/js/app/views/hidden-initialization-view'}|json_encode }}\"
                         data-layout=\"separate\">
                    {% placeholder index_navButtons_before with buttonsPlaceholderData %}
                    {% block navButtons %}{% endblock navButtons %}
                    {% placeholder index_navButtons_after with buttonsPlaceholderData %}
                </div>
                <div class=\"page-title-center\"
                     data-role=\"filters-state-view-container\"
                     data-page-component-module=\"oroui/js/app/components/view-component\"
                     data-page-component-options=\"{{ {'view': 'oroui/js/app/views/page-center-title-view'}|json_encode }}\">
                </div>
            </div>
            {% if pageActionsBlock|trim %}
            <div class=\"row inline-info\">
                <div class=\"pull-right\">
                    <div class=\"inline-decorate-container\">
                        <ul class=\"inline-decorate\">
                            {{ pageActionsBlock }}
                        </ul>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
    {% block content_datagrid %}
        {% if gridName is defined %}
            {% if gridScope is defined %}
                {% set gridName = oro_datagrid_build_fullname(gridName, gridScope) %}
            {% endif %}
            {% set renderParams = {
                'enableFullScreenLayout': true,
                'enableViews': true,
                'showViewsInNavbar': true,
                'filtersStateElement': '[data-role=\"filters-state-view-container\"]'
            }
            |merge(renderParams|default({})) %}
            {{ dataGrid.renderGrid(gridName, params|default({}), renderParams) }}

            {# Only grids on index pages will be tagged #}
            {% import '@OroUI/macros.html.twig' as UI %}

            <div {{ UI.renderPageComponentAttributes({
                module: 'orodatagrid/js/app/components/datagrid-allow-tracking-component',
                options: {
                    gridName: gridName
                }
            }) }}></div>
        {% endif %}
    {% endblock content_datagrid %}
{% endblock content %}
", "@OroUI/actions/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/actions/index.html.twig");
    }
}
