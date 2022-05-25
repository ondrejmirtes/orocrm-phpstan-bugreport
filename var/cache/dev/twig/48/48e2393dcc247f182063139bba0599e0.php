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

/* @OroUI/actions/update.html.twig */
class __TwigTemplate_9c773aef78140f87ba513e87e5e52c26 extends Template
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
            'widget_context' => [$this, 'block_widget_context'],
            'page_widget_actions' => [$this, 'block_page_widget_actions'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageActions' => [$this, 'block_pageActions'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'pageTitleIcon' => [$this, 'block_pageTitleIcon'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumbMessage' => [$this, 'block_breadcrumbMessage'],
            'stats' => [$this, 'block_stats'],
            'content_data' => [$this, 'block_content_data'],
            'sync_content_tags' => [$this, 'block_sync_content_tags'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate((((isset($context["isWidgetContext"]) || array_key_exists("isWidgetContext", $context) ? $context["isWidgetContext"] : (function () { throw new RuntimeError('Variable "isWidgetContext" does not exist.', 2, $this->source); })())) ? ("@OroForm/Layout/widgetForm.html.twig") : (twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 2, $this->source); })()), "layout", [], "any", false, false, false, 2))), "@OroUI/actions/update.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/actions/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/update.html.twig"));

        // line 1
        $context["isWidgetContext"] = ((array_key_exists("isWidgetContext", $context)) ? ((isset($context["isWidgetContext"]) || array_key_exists("isWidgetContext", $context) ? $context["isWidgetContext"] : (function () { throw new RuntimeError('Variable "isWidgetContext" does not exist.', 1, $this->source); })())) : (false));
        // line 4
        $macros["syncMacro"] = $this->macros["syncMacro"] = $this->loadTemplate("@OroSync/Include/contentTags.html.twig", "@OroUI/actions/update.html.twig", 4)->unwrap();
        // line 5
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/update.html.twig", 5)->unwrap();
        // line 7
        $context["entity"] = ((array_key_exists("entity", $context)) ? ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })())) : (null));
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_before_content_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("before_content_addition", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        // line 10
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_before_content_addition", $context)) ? (_twig_default_filter((isset($context["update_before_content_addition"]) || array_key_exists("update_before_content_addition", $context) ? $context["update_before_content_addition"] : (function () { throw new RuntimeError('Variable "update_before_content_addition" does not exist.', 10, $this->source); })()), "update_before_content_addition")) : ("update_before_content_addition")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 13));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/actions/update.html.twig", 14)->unwrap();
        // line 15
        echo "
    ";
        // line 16
        if ((((isset($context["isWidgetContext"]) || array_key_exists("isWidgetContext", $context) ? $context["isWidgetContext"] : (function () { throw new RuntimeError('Variable "isWidgetContext" does not exist.', 16, $this->source); })()) && array_key_exists("savedId", $context)) && (isset($context["savedId"]) || array_key_exists("savedId", $context) ? $context["savedId"] : (function () { throw new RuntimeError('Variable "savedId" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        ";
            $this->displayBlock('widget_context', $context, $blocks);
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            $context["formAction"] = ((array_key_exists("formAction", $context)) ? (_twig_default_filter((isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 27, $this->source); })()))) : (""));
            // line 28
            echo "    ";
            if (( !array_key_exists("addQueryParameters", $context) || ((isset($context["addQueryParameters"]) || array_key_exists("addQueryParameters", $context) ? $context["addQueryParameters"] : (function () { throw new RuntimeError('Variable "addQueryParameters" does not exist.', 28, $this->source); })()) == true))) {
                // line 29
                echo "        ";
                $context["formAction"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->addUrlQuery((isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 29, $this->source); })()));
                // line 30
                echo "    ";
            }
            // line 31
            echo "    ";
            $context["formAttr"] = twig_array_merge(((array_key_exists("formAttr", $context)) ? (_twig_default_filter((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 31, $this->source); })()), [])) : ([])), ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "data-collect" => "true"]);
            // line 35
            echo "
    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 37
                echo "        ";
                if (twig_test_iterable($context["value"])) {
                    // line 38
                    echo "            ";
                    $context["formAttr"] = twig_array_merge((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 38, $this->source); })()), [$context["key"] => json_encode($context["value"])]);
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            if (array_key_exists("pageComponent", $context)) {
                // line 43
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 43, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 44
                    echo "            ";
                    if (($context["key"] == "layout")) {
                        // line 45
                        echo "                ";
                        $context["formAttr"] = twig_array_merge((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 45, $this->source); })()), ["data-layout" => twig_get_attribute($this->env, $this->source, (isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 45, $this->source); })()), "layout", [], "any", false, false, false, 45)]);
                        // line 46
                        echo "            ";
                    } elseif (twig_test_iterable($context["value"])) {
                        // line 47
                        echo "                ";
                        $context["formAttr"] = twig_array_merge((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 47, $this->source); })()), [("data-page-component-" . $context["key"]) => json_encode($context["value"])]);
                        // line 48
                        echo "            ";
                    } else {
                        // line 49
                        echo "                ";
                        $context["formAttr"] = twig_array_merge((isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 49, $this->source); })()), [("data-page-component-" . $context["key"]) => $context["value"]]);
                        // line 50
                        echo "            ";
                    }
                    // line 51
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            }
            // line 53
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start', ["action" => (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 53, $this->source); })()), "attr" => (isset($context["formAttr"]) || array_key_exists("formAttr", $context) ? $context["formAttr"] : (function () { throw new RuntimeError('Variable "formAttr" does not exist.', 53, $this->source); })())]);
            echo "
        ";
            // line 54
            if ((isset($context["isWidgetContext"]) || array_key_exists("isWidgetContext", $context) ? $context["isWidgetContext"] : (function () { throw new RuntimeError('Variable "isWidgetContext" does not exist.', 54, $this->source); })())) {
                // line 55
                echo "            ";
                $this->displayBlock('page_widget_actions', $context, $blocks);
                // line 61
                echo "        ";
            } else {
                // line 62
                echo "        <div class=\"container-fluid page-title\">
            ";
                // line 63
                ob_start();
                // line 64
                echo "                ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons_before", $context)) ? (_twig_default_filter((isset($context["update_navButtons_before"]) || array_key_exists("update_navButtons_before", $context) ? $context["update_navButtons_before"] : (function () { throw new RuntimeError('Variable "update_navButtons_before" does not exist.', 64, $this->source); })()), "update_navButtons_before")) : ("update_navButtons_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })())]);
                // line 65
                echo "                ";
                $this->displayBlock('navButtons', $context, $blocks);
                // line 66
                echo "                ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons_after", $context)) ? (_twig_default_filter((isset($context["update_navButtons_after"]) || array_key_exists("update_navButtons_after", $context) ? $context["update_navButtons_after"] : (function () { throw new RuntimeError('Variable "update_navButtons_after" does not exist.', 66, $this->source); })()), "update_navButtons_after")) : ("update_navButtons_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })())]);
                // line 67
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "method", [], "any", false, false, false, 67) != "GET")) {
                    // line 68
                    echo "                    ";
                    $context["inputAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 68), "default_input_action", [], "any", true, true, false, 68)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "default_input_action", [], "any", false, false, false, 69)) : (twig_constant("Oro\\Bundle\\UIBundle\\Route\\Router::ACTION_SAVE_CLOSE")));
                    // line 72
                    echo "                    <input
                            type=\"hidden\"
                            name=\"input_action\"
                            value=\"";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["inputAction"]) || array_key_exists("inputAction", $context) ? $context["inputAction"] : (function () { throw new RuntimeError('Variable "inputAction" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "\"
                            data-form-id=\"";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\"
                    />
                ";
                }
                // line 79
                echo "            ";
                $context["titleButtonsBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                echo "
            ";
                // line 81
                ob_start();
                // line 82
                echo "                ";
                $this->displayBlock('pageActions', $context, $blocks);
                // line 99
                echo "            ";
                $context["pageActionsBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 100
                echo "
            <div class=\"navigation navbar-extra navbar-extra-right\">
                ";
                // line 102
                $this->displayBlock('pageHeader', $context, $blocks);
                // line 174
                echo "            </div>
        </div>
        ";
            }
            // line 177
            echo "        <div class=\"layout-content\">
            ";
            // line 178
            $this->displayBlock('content_data', $context, $blocks);
            // line 252
            echo "        </div>
        ";
            // line 253
            $this->displayBlock('sync_content_tags', $context, $blocks);
            // line 257
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
    ";
            // line 258
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()));
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 17
    public function block_widget_context($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_context", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        // line 18
        echo "            <div ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/widget-form-component", "options" => ["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "_wid"], "method", false, false, false, 21), "data" => ((        // line 22
array_key_exists("savedId", $context)) ? (_twig_default_filter((isset($context["savedId"]) || array_key_exists("savedId", $context) ? $context["savedId"] : (function () { throw new RuntimeError('Variable "savedId" does not exist.', 22, $this->source); })()), null)) : (null))]]], 18, $context, $this->getSourceContext());
        // line 24
        echo "></div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 55
    public function block_page_widget_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_widget_actions", $this->getTemplateName(), 55));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_widget_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_widget_actions"));

        // line 56
        echo "            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "</button>
            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 65
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 65));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter((isset($context["update_navButtons"]) || array_key_exists("update_navButtons", $context) ? $context["update_navButtons"] : (function () { throw new RuntimeError('Variable "update_navButtons" does not exist.', 65, $this->source); })()), "update_navButtons")) : ("update_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 82
    public function block_pageActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageActions", $this->getTemplateName(), 82));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageActions"));

        // line 83
        echo "                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_pageActions_before", $context)) ? (_twig_default_filter((isset($context["update_pageActions_before"]) || array_key_exists("update_pageActions_before", $context) ? $context["update_pageActions_before"] : (function () { throw new RuntimeError('Variable "update_pageActions_before" does not exist.', 83, $this->source); })()), "update_pageActions_before")) : ("update_pageActions_before")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })())]);
        // line 84
        echo "
                    ";
        // line 85
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? ((isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 85, $this->source); })())) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 85), "value", [], "any", false, true, false, 85), "id", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 85), "value", [], "any", false, true, false, 85), "id", [], "any", false, false, false, 85))) : (""))));
        // line 86
        echo "                    ";
        if ((isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 86, $this->source); })())) {
            // line 87
            echo "                        ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("change_history_block", $context)) ? (_twig_default_filter((isset($context["change_history_block"]) || array_key_exists("change_history_block", $context) ? $context["change_history_block"] : (function () { throw new RuntimeError('Variable "change_history_block" does not exist.', 87, $this->source); })()), "change_history_block")) : ("change_history_block")), ["entity" => ((            // line 88
array_key_exists("entity", $context)) ? (_twig_default_filter((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 88, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88))), "entity_class" => ((            // line 89
array_key_exists("audit_entity_class", $context)) ? (_twig_default_filter((isset($context["audit_entity_class"]) || array_key_exists("audit_entity_class", $context) ? $context["audit_entity_class"] : (function () { throw new RuntimeError('Variable "audit_entity_class" does not exist.', 89, $this->source); })()), null)) : (null)), "id" =>             // line 90
(isset($context["audit_entity_id"]) || array_key_exists("audit_entity_id", $context) ? $context["audit_entity_id"] : (function () { throw new RuntimeError('Variable "audit_entity_id" does not exist.', 90, $this->source); })()), "title" => ((            // line 91
array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) || array_key_exists("audit_title", $context) ? $context["audit_title"] : (function () { throw new RuntimeError('Variable "audit_title" does not exist.', 91, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 91), "value", [], "any", false, true, false, 91), "__toString", [], "any", true, true, false, 91)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "__toString", [], "any", false, false, false, 91)) : (null)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 91), "value", [], "any", false, true, false, 91), "__toString", [], "any", true, true, false, 91)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "__toString", [], "any", false, false, false, 91)) : (null)))), "audit_path" => ((            // line 92
array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) || array_key_exists("audit_path", $context) ? $context["audit_path"] : (function () { throw new RuntimeError('Variable "audit_path" does not exist.', 92, $this->source); })()), "oro_dataaudit_history")) : ("oro_dataaudit_history")), "audit_show_change_history" => ((            // line 93
array_key_exists("audit_show_change_history", $context)) ? (_twig_default_filter((isset($context["audit_show_change_history"]) || array_key_exists("audit_show_change_history", $context) ? $context["audit_show_change_history"] : (function () { throw new RuntimeError('Variable "audit_show_change_history" does not exist.', 93, $this->source); })()), false)) : (false))]);
            // line 95
            echo "                    ";
        }
        // line 96
        echo "
                    ";
        // line 97
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_pageActions_after", $context)) ? (_twig_default_filter((isset($context["update_pageActions_after"]) || array_key_exists("update_pageActions_after", $context) ? $context["update_pageActions_after"] : (function () { throw new RuntimeError('Variable "update_pageActions_after" does not exist.', 97, $this->source); })()), "update_pageActions_after")) : ("update_pageActions_after")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })())]);
        // line 98
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 102
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 102));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 103
        echo "                    <div class=\"row\">
                        <div class=\"pull-left pull-left-extra\">
                            ";
        // line 105
        $this->displayBlock('pageTitleIcon', $context, $blocks);
        // line 106
        echo "
                            <div class=\"page-title__path\">
                                <div class=\"top-row\">
                                    ";
        // line 109
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 141
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"pull-right title-buttons-container\">
                            ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["titleButtonsBlock"]) || array_key_exists("titleButtonsBlock", $context) ? $context["titleButtonsBlock"] : (function () { throw new RuntimeError('Variable "titleButtonsBlock" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "
                        </div>
                    </div>
                    <div class=\"row inline-info\">
                        <div class=\"pull-left-extra\">
                            <div class=\"clearfix\">
                                <ul class=\"inline\">
                                    ";
        // line 152
        $this->displayBlock('stats', $context, $blocks);
        // line 162
        echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"pull-right page-title__entity-info-state\">
                            <div class=\"inline-decorate-container\">
                                <ul class=\"inline-decorate\">
                                    ";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 168, $this->source); })()), "html", null, true);
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

    // line 105
    public function block_pageTitleIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageTitleIcon", $this->getTemplateName(), 105));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 109
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 109));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 110
        echo "                                        ";
        if (array_key_exists("breadcrumbs", $context)) {
            // line 111
            echo "                                            <div class=\"page-title__entity-title-wrapper\">
                                                <div class=\"sub-title\">";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "indexPath", [], "any", true, true, false, 113)) {
                // line 114
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->addUrlQuery(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 114, $this->source); })()), "indexPath", [], "any", false, false, false, 114)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 114, $this->source); })()), "indexLabel", [], "any", false, false, false, 114), "html", null, true);
                echo "</a>";
            } else {
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 116, $this->source); })()), "indexLabel", [], "any", false, false, false, 116), "html", null, true);
            }
            // line 118
            echo "</div>
                                                <span class=\"separator\">/</span>
                                                ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "additional", [], "any", true, true, false, 120)) {
                // line 121
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 121, $this->source); })()), "additional", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 122
                    echo "                                                        <div class=\"sub-title\">";
                    // line 123
                    if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", true, true, false, 123)) {
                        // line 124
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", false, false, false, 124), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 124), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 126), "html", null, true);
                    }
                    // line 128
                    echo "</div>
                                                        <span class=\"separator\">/</span>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                ";
            }
            // line 132
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "rawEntityTitle", [], "any", true, true, false, 132) && twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 132, $this->source); })()), "rawEntityTitle", [], "any", false, false, false, 132))) {
                // line 133
                echo "                                                    <h1 class=\"page-title__entity-title\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 133, $this->source); })()), "entityTitle", [], "any", false, false, false, 133);
                echo "</h1>
                                                ";
            } else {
                // line 135
                echo "                                                    <h1 class=\"page-title__entity-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 135, $this->source); })()), "entityTitle", [], "any", false, false, false, 135), "html", null, true);
                echo "</h1>
                                                ";
            }
            // line 137
            echo "                                            </div>
                                        ";
        }
        // line 139
        echo "                                        ";
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 140
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 139
    public function block_breadcrumbMessage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbMessage", $this->getTemplateName(), 139));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 152
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 152));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 153
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "entity", [], "any", false, true, false, 153), "createdAt", [], "any", true, true, false, 153) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "entity", [], "any", false, true, false, 153), "updatedAt", [], "any", true, true, false, 153))) {
            // line 154
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 154, $this->source); })()), "entity", [], "any", false, false, false, 154), "createdAt")) {
                // line 155
                echo "                                                <li>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 155, $this->source); })()), "entity", [], "any", false, false, false, 155), "createdAt", [], "any", false, false, false, 155)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 155, $this->source); })()), "entity", [], "any", false, false, false, 155), "createdAt", [], "any", false, false, false, 155))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))), "html", null, true);
                echo "</li>
                                            ";
            }
            // line 157
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 157, $this->source); })()), "entity", [], "any", false, false, false, 157), "updatedAt")) {
                // line 158
                echo "                                                <li>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 158, $this->source); })()), "entity", [], "any", false, false, false, 158), "updatedAt", [], "any", false, false, false, 158)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 158, $this->source); })()), "entity", [], "any", false, false, false, 158), "updatedAt", [], "any", false, false, false, 158))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))), "html", null, true);
                echo "</li>
                                            ";
            }
            // line 160
            echo "                                        ";
        }
        // line 161
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 178
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 178));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 179
        echo "                ";
        $context["data"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processForm($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 179, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 179, $this->source); })()));
        // line 180
        echo "
                ";
        // line 181
        if ((((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()) && array_key_exists("data", $context)) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "dataBlocks", [], "any", true, true, false, 181))) {
            // line 182
            echo "                    ";
            $context["dataBlocks"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 182, $this->source); })()), "dataBlocks", [], "any", false, false, false, 182);
            // line 184
            ob_start();
            // line 185
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_content_data_activities", $context)) ? (_twig_default_filter((isset($context["update_content_data_activities"]) || array_key_exists("update_content_data_activities", $context) ? $context["update_content_data_activities"] : (function () { throw new RuntimeError('Variable "update_content_data_activities" does not exist.', 185, $this->source); })()), "update_content_data_activities")) : ("update_content_data_activities")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 185, $this->source); })())]);
            $context["activitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            if ( !twig_test_empty((isset($context["activitiesData"]) || array_key_exists("activitiesData", $context) ? $context["activitiesData"] : (function () { throw new RuntimeError('Variable "activitiesData" does not exist.', 188, $this->source); })()))) {
                // line 189
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 189, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.sections.activities"), "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>                 // line 194
(isset($context["activitiesData"]) || array_key_exists("activitiesData", $context) ? $context["activitiesData"] : (function () { throw new RuntimeError('Variable "activitiesData" does not exist.', 194, $this->source); })())]]]]]);
                // line 198
                echo "                    ";
            }
            // line 200
            ob_start();
            // line 201
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_content_data_communications", $context)) ? (_twig_default_filter((isset($context["update_content_data_communications"]) || array_key_exists("update_content_data_communications", $context) ? $context["update_content_data_communications"] : (function () { throw new RuntimeError('Variable "update_content_data_communications" does not exist.', 201, $this->source); })()), "update_content_data_communications")) : ("update_content_data_communications")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 201, $this->source); })())]);
            $context["communicationsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            if ( !twig_test_empty((isset($context["communicationsData"]) || array_key_exists("communicationsData", $context) ? $context["communicationsData"] : (function () { throw new RuntimeError('Variable "communicationsData" does not exist.', 204, $this->source); })()))) {
                // line 205
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 205, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Communications"), "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>                 // line 210
(isset($context["communicationsData"]) || array_key_exists("communicationsData", $context) ? $context["communicationsData"] : (function () { throw new RuntimeError('Variable "communicationsData" does not exist.', 210, $this->source); })())]]]]]);
                // line 214
                echo "                    ";
            }
            // line 216
            ob_start();
            // line 217
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_content_data_additional_information", $context)) ? (_twig_default_filter((isset($context["update_content_data_additional_information"]) || array_key_exists("update_content_data_additional_information", $context) ? $context["update_content_data_additional_information"] : (function () { throw new RuntimeError('Variable "update_content_data_additional_information" does not exist.', 217, $this->source); })()), "update_content_data_additional_information")) : ("update_content_data_additional_information")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 217, $this->source); })())]);
            $context["additionalInformationData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            if ( !twig_test_empty((isset($context["additionalInformationData"]) || array_key_exists("additionalInformationData", $context) ? $context["additionalInformationData"] : (function () { throw new RuntimeError('Variable "additionalInformationData" does not exist.', 220, $this->source); })()))) {
                // line 221
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 221, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional Information"), "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>                 // line 226
(isset($context["additionalInformationData"]) || array_key_exists("additionalInformationData", $context) ? $context["additionalInformationData"] : (function () { throw new RuntimeError('Variable "additionalInformationData" does not exist.', 226, $this->source); })())]]]]]);
                // line 230
                echo "                    ";
            }
            // line 232
            ob_start();
            // line 233
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_content_data_comments", $context)) ? (_twig_default_filter((isset($context["update_content_data_comments"]) || array_key_exists("update_content_data_comments", $context) ? $context["update_content_data_comments"] : (function () { throw new RuntimeError('Variable "update_content_data_comments" does not exist.', 233, $this->source); })()), "update_content_data_comments")) : ("update_content_data_comments")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 233, $this->source); })())]);
            $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 236
            if ( !twig_test_empty((isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 236, $this->source); })()))) {
                // line 237
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 237, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.comment.entity_plural_label"), "subblocks" => [0 => ["spanClass" => "responsive-cell activity-list-widget", "data" => [0 =>                 // line 242
(isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 242, $this->source); })())]]]]]);
                // line 246
                echo "                    ";
            }
            // line 247
            echo "
                    ";
            // line 248
            $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 248, $this->source); })()), ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 248, $this->source); })())]);
            // line 249
            echo "                ";
        }
        // line 250
        echo "                ";
        echo twig_call_macro($macros["UI"], "macro_scrollData", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 250, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 250, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 250, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })())], 250, $context, $this->getSourceContext());
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 253
    public function block_sync_content_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sync_content_tags", $this->getTemplateName(), 253));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sync_content_tags"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sync_content_tags"));

        // line 254
        echo "            ";
        // line 255
        echo "            ";
        echo twig_call_macro($macros["syncMacro"], "macro_syncContentTags", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "vars", [], "any", false, false, false, 255), "value", [], "any", false, false, false, 255)], 255, $context, $this->getSourceContext());
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/actions/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 255,  860 => 254,  847 => 253,  831 => 250,  828 => 249,  826 => 248,  823 => 247,  820 => 246,  818 => 242,  816 => 237,  814 => 236,  811 => 233,  809 => 232,  806 => 230,  804 => 226,  802 => 221,  800 => 220,  797 => 217,  795 => 216,  792 => 214,  790 => 210,  788 => 205,  786 => 204,  783 => 201,  781 => 200,  778 => 198,  776 => 194,  774 => 189,  772 => 188,  769 => 185,  767 => 184,  764 => 182,  762 => 181,  759 => 180,  756 => 179,  743 => 178,  730 => 161,  727 => 160,  719 => 158,  716 => 157,  708 => 155,  705 => 154,  702 => 153,  689 => 152,  665 => 139,  652 => 140,  649 => 139,  645 => 137,  639 => 135,  633 => 133,  630 => 132,  627 => 131,  619 => 128,  616 => 126,  609 => 124,  607 => 123,  605 => 122,  600 => 121,  598 => 120,  594 => 118,  591 => 116,  584 => 114,  582 => 113,  579 => 111,  576 => 110,  563 => 109,  539 => 105,  520 => 168,  512 => 162,  510 => 152,  500 => 145,  494 => 141,  492 => 109,  487 => 106,  485 => 105,  481 => 103,  468 => 102,  455 => 98,  453 => 97,  450 => 96,  447 => 95,  445 => 93,  444 => 92,  443 => 91,  442 => 90,  441 => 89,  440 => 88,  438 => 87,  435 => 86,  433 => 85,  430 => 84,  427 => 83,  414 => 82,  389 => 65,  373 => 58,  369 => 57,  366 => 56,  353 => 55,  339 => 24,  337 => 22,  336 => 21,  334 => 18,  321 => 17,  305 => 258,  300 => 257,  298 => 253,  295 => 252,  293 => 178,  290 => 177,  285 => 174,  283 => 102,  279 => 100,  276 => 99,  273 => 82,  271 => 81,  268 => 80,  265 => 79,  259 => 76,  255 => 75,  250 => 72,  248 => 69,  246 => 68,  243 => 67,  240 => 66,  237 => 65,  234 => 64,  232 => 63,  229 => 62,  226 => 61,  223 => 55,  221 => 54,  216 => 53,  213 => 52,  207 => 51,  204 => 50,  201 => 49,  198 => 48,  195 => 47,  192 => 46,  189 => 45,  186 => 44,  181 => 43,  179 => 42,  176 => 41,  170 => 40,  167 => 39,  164 => 38,  161 => 37,  157 => 36,  154 => 35,  152 => 32,  150 => 31,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  132 => 17,  130 => 16,  127 => 15,  124 => 14,  111 => 13,  97 => 10,  84 => 9,  71 => 2,  69 => 7,  67 => 5,  65 => 4,  63 => 1,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isWidgetContext = isWidgetContext is defined ? isWidgetContext : false %}
{% extends isWidgetContext ? '@OroForm/Layout/widgetForm.html.twig' : bap.layout %}

{% import '@OroSync/Include/contentTags.html.twig' as syncMacro %}
{% import '@OroUI/macros.html.twig' as UI %}

{% set entity = entity is defined ? entity : null %}

{% block before_content_addition %}
    {% placeholder update_before_content_addition with {entity: entity} %}
{% endblock before_content_addition %}

{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if isWidgetContext and savedId is defined and savedId %}
        {% block widget_context %}
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/widget-form-component',
                options: {
                    _wid: app.request.get('_wid'),
                    data: savedId|default(null)
                }
            }) }}></div>
        {% endblock widget_context %}
    {% else %}
    {% set formAction = formAction|default() %}
    {% if addQueryParameters is not defined or addQueryParameters == true %}
        {% set formAction = oro_url_add_query(formAction) %}
    {% endif %}
    {% set formAttr = formAttr|default({})|merge({
        'id': form.vars.id,
        'data-collect': 'true'
    }) %}

    {% for key,value in formAttr %}
        {% if value is iterable %}
            {% set formAttr = formAttr|merge({(key): value|json_encode}) %}
        {% endif %}
    {% endfor %}

    {% if pageComponent is defined %}
        {% for key,value in pageComponent %}
            {% if key == 'layout' %}
                {% set formAttr = formAttr|merge({'data-layout': pageComponent.layout}) %}
            {% elseif value is iterable %}
                {% set formAttr = formAttr|merge({('data-page-component-' ~ key): value|json_encode}) %}
            {% else %}
                {% set formAttr = formAttr|merge({('data-page-component-' ~ key): value}) %}
            {% endif %}
        {% endfor %}
    {% endif %}
    {{ form_start(form, {'action': formAction, 'attr': formAttr}) }}
        {% if isWidgetContext %}
            {% block page_widget_actions %}
            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
                <button type=\"submit\" class=\"btn btn-success\">{{ 'Save'|trans }}</button>
            </div>
            {% endblock page_widget_actions %}
        {% else %}
        <div class=\"container-fluid page-title\">
            {% set titleButtonsBlock %}
                {% placeholder update_navButtons_before with {entity: entity} %}
                {% block navButtons %}{% placeholder update_navButtons with {entity: entity} %}{% endblock navButtons %}
                {% placeholder update_navButtons_after with {entity: entity} %}
                {% if form.vars.method != 'GET' %}
                    {% set inputAction  = form.vars.default_input_action is defined
                        ? form.vars.default_input_action
                        : constant('Oro\\\\Bundle\\\\UIBundle\\\\Route\\\\Router::ACTION_SAVE_CLOSE')
                    %}
                    <input
                            type=\"hidden\"
                            name=\"input_action\"
                            value=\"{{ inputAction }}\"
                            data-form-id=\"{{ form.vars.id }}\"
                    />
                {% endif %}
            {% endset %}

            {% set pageActionsBlock %}
                {% block pageActions %}
                    {% placeholder update_pageActions_before with {entity: entity} %}

                    {% set audit_entity_id = audit_entity_id is defined ? audit_entity_id : form.vars.value.id|default %}
                    {% if audit_entity_id %}
                        {% placeholder change_history_block with {
                            'entity': entity|default(form.vars.value),
                            'entity_class': audit_entity_class|default(null),
                            'id': audit_entity_id,
                            'title': audit_title|default(form.vars.value.__toString is defined ? form.vars.value.__toString : null),
                            'audit_path': audit_path|default('oro_dataaudit_history'),
                            'audit_show_change_history': audit_show_change_history|default(false)
                        } %}
                    {% endif %}

                    {% placeholder update_pageActions_after with {entity: entity} %}
                {% endblock pageActions %}
            {% endset %}

            <div class=\"navigation navbar-extra navbar-extra-right\">
                {% block pageHeader %}
                    <div class=\"row\">
                        <div class=\"pull-left pull-left-extra\">
                            {% block pageTitleIcon %}{% endblock %}

                            <div class=\"page-title__path\">
                                <div class=\"top-row\">
                                    {% block breadcrumbs %}
                                        {% if breadcrumbs is defined %}
                                            <div class=\"page-title__entity-title-wrapper\">
                                                <div class=\"sub-title\">
                                                    {%- if breadcrumbs.indexPath is defined -%}
                                                        <a href=\"{{ oro_url_add_query(breadcrumbs.indexPath) }}\">{{ breadcrumbs.indexLabel }}</a>
                                                    {%- else -%}
                                                        {{ breadcrumbs.indexLabel }}
                                                    {%- endif -%}
                                                </div>
                                                <span class=\"separator\">/</span>
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
                                        {% endif %}
                                        {% block breadcrumbMessage %}{% endblock breadcrumbMessage %}
                                    {% endblock breadcrumbs %}
                                </div>
                            </div>
                        </div>
                        <div class=\"pull-right title-buttons-container\">
                            {{ titleButtonsBlock }}
                        </div>
                    </div>
                    <div class=\"row inline-info\">
                        <div class=\"pull-left-extra\">
                            <div class=\"clearfix\">
                                <ul class=\"inline\">
                                    {% block stats %}
                                        {% if breadcrumbs.entity.createdAt is defined and breadcrumbs.entity.updatedAt is defined %}
                                            {% if is_granted('VIEW', breadcrumbs.entity, 'createdAt') %}
                                                <li>{{ 'oro.ui.created_at'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime :  'oro.ui.empty'|trans }}</li>
                                            {% endif %}
                                            {% if is_granted('VIEW', breadcrumbs.entity, 'updatedAt') %}
                                                <li>{{ 'oro.ui.updated_at'|trans }}: {{ breadcrumbs.entity.updatedAt ? breadcrumbs.entity.updatedAt|oro_format_datetime :  'oro.ui.empty'|trans }}</li>
                                            {% endif %}
                                        {% endif %}
                                    {% endblock stats %}
                                </ul>
                            </div>
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
        </div>
        {% endif %}
        <div class=\"layout-content\">
            {% block content_data %}
                {% set data = oro_form_process(data, form, entity) %}

                {% if entity and data is defined and data.dataBlocks is defined %}
                    {% set dataBlocks = data.dataBlocks %}

                    {%- set activitiesData -%}
                        {% placeholder update_content_data_activities with {entity: entity} %}
                    {%- endset -%}

                    {% if activitiesData is not empty %}
                        {% set dataBlocks = dataBlocks|merge([{
                            'title': 'oro.activity.sections.activities'|trans,
                            'subblocks': [
                                {
                                    'spanClass': 'empty',
                                    'data': [activitiesData]
                                }
                            ]
                        }]) %}
                    {% endif %}

                    {%- set communicationsData -%}
                        {% placeholder update_content_data_communications with {entity: entity} %}
                    {%- endset -%}

                    {% if communicationsData is not empty %}
                        {% set dataBlocks = dataBlocks|merge([{
                            'title': 'Communications'|trans,
                            'subblocks': [
                                {
                                    'spanClass': 'empty',
                                    'data': [communicationsData]
                                }
                            ]
                        }]) %}
                    {% endif %}

                    {%- set additionalInformationData -%}
                        {% placeholder update_content_data_additional_information with {entity: entity} %}
                    {%- endset -%}

                    {% if additionalInformationData is not empty %}
                        {% set dataBlocks = dataBlocks|merge([{
                            'title': 'Additional Information'|trans,
                            'subblocks': [
                                {
                                    'spanClass': 'empty',
                                    'data': [additionalInformationData]
                                }
                            ]
                        }]) %}
                    {% endif %}

                    {%- set commentsData -%}
                        {% placeholder update_content_data_comments with {entity: entity} %}
                    {%- endset -%}

                    {% if commentsData is not empty %}
                        {% set dataBlocks = dataBlocks|merge([{
                            'title': 'oro.comment.entity_plural_label'|trans,
                            'subblocks': [
                                {
                                    'spanClass': 'responsive-cell activity-list-widget',
                                    'data': [commentsData]
                                }
                            ]
                        }]) %}
                    {% endif  %}

                    {% set data = data|merge({'dataBlocks': dataBlocks}) %}
                {% endif  %}
                {{ UI.scrollData(id, data, entity, form) }}
            {% endblock content_data %}
        </div>
        {% block sync_content_tags %}
            {# block added just for possibility to disable it in child templates if needed #}
            {{ syncMacro.syncContentTags(form.vars.value) }}
        {% endblock %}
    {{ form_end(form, {'render_rest': false}) }}
    {{ oro_form_js_validation(form) }}
    {% endif %}
{% endblock content %}
", "@OroUI/actions/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/actions/update.html.twig");
    }
}
