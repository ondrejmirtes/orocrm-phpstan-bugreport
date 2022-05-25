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

/* @OroLayout/Collector/layout.html.twig */
class __TwigTemplate_19bbc810322dbafbcfe9f06e2e343d19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Collector/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroLayout/Collector/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Collector/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Collector/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Collector/form.html.twig", "@OroLayout/Collector/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("toolbar", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "views", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "not_applied_actions_count", [], "any", false, false, false, 5)) ? ("yellow") : (""));
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            <span class=\"icon\">
                ";
            // line 8
            echo twig_include($this->env, $context, "@OroLayout/Collector/layout-icon.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 11
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "not_applied_actions_count", [], "any", false, false, false, 11)) {
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "data", [], "any", false, false, false, 12), "not_applied_actions_count", [], "any", false, false, false, 12), "html", null, true);
            }
            // line 14
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
        ";
            // line 17
            ob_start();
            // line 18
            echo "            <div class=\"sf-toolbar-info-group\" id=\"collector-content\" style=\"width: 480px;\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Number of blocks</b>
                    <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "data", [], "any", false, false, false, 21), "count", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                </div>
                ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23), "not_applied_actions_count", [], "any", false, false, false, 23)) {
                // line 24
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Not applied actions</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">
                        ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "data", [], "any", false, false, false, 27), "not_applied_actions_count", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    </span>
                    </div>
                ";
            }
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "data", [], "any", false, false, false, 31), "context", [], "any", false, false, false, 31), "items", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 32
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b class=\"oro-layout-toolbar-info-piece-title\">";
                // line 33
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</b>
                        <span class=\"sf-toolbar-info-class oro-layout-toolbar-info-piece-value\">
                            ";
                // line 35
                if ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->isString($context["value"])) {
                    echo "\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                } else {
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                }
                // line 36
                echo "                    </span>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            echo "        <style>
            .oro-layout-toolbar-info-piece-value pre.sf-dump {
                background-color: transparent;
                padding: 0;
            }
        </style>

        ";
            // line 48
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 48, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 48, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("menu", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        echo "    <span class=\"label
                ";
        // line 54
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "data", [], "any", false, false, false, 54), "not_applied_actions_count", [], "any", false, false, false, 54)) ? ("label-status-error") : (""));
        echo "
                ";
        // line 55
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "data", [], "any", false, false, false, 55), "views", [], "any", false, false, false, 55))) ? ("disabled") : (""));
        echo "\"
    >
        <span class=\"icon\">
            ";
        // line 58
        echo twig_include($this->env, $context, "@OroLayout/Collector/layout-icon.svg");
        echo "
        </span>
        <strong>Layouts</strong>
        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "data", [], "any", false, false, false, 61), "not_applied_actions_count", [], "any", false, false, false, 61)) {
            // line 62
            echo "            <span class=\"count\">
                <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "data", [], "any", false, false, false, 63), "not_applied_actions_count", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 66
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 69
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head", $this->getTemplateName(), 69));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 70
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        .container {
            max-width: none;
        }

        #tree-menu {
            width: calc(100% - 770px);
            position: relative;
        }

        #tree-menu:after {
            content: \"\";
            position: absolute;
            right: 10px;
            top: 0;
            width: 30px;
            min-height: 100%;
            height: 100%;
            background: linear-gradient(to left, rgba(249, 249, 249, 1) 0%, rgba(249, 249, 249, 0) 100%);
        }

        .tree-menu-wrapper {
            overflow: auto;
        }

        #tree-details-container {
            margin-left: calc(100% - 750px);
            padding: 0;
            border: none;
            width: 750px;
        }

        #tree-details-container.fixed {
            position: fixed;
            top: 5px;
            right: 15px;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
        }

        #tree-menu ul {
            margin-left: 20px;
        }

        .tree ul .tree-inner {
            padding-left: 0 !important;
            white-space: nowrap;
            line-height: 1.5;
        }

        .expand-all {
            position: relative;
            text-align: right;
            z-index: 1;
        }

        .expand-all a {
            text-decoration: none;
            color: #999;
        }

        .expand-all a:hover {
            border-bottom: 1px dashed;
        }

        .tree-inner.underline {
            text-decoration: line-through;
        }

        @media screen and (max-width: 1100px) {
            #tree-menu {
                width: 100%;
            }

            #tree-details-container {
                clear: both;
                width: 100%;
                margin-left: 0;
                padding-top: 20px;
            }

            #tree-details-container.fixed {
                position: static;
                overflow: visible;
                max-height: inherit;
            }
        }

        .tree-details {
            overflow: auto;
        }

        .block-option-value code {
            background: lightyellow;
            padding: 3px 8px 4px;
            border: 1px solid lightgray;
        }

        .dumped-string {
            color: #629755;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 177
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("panel", $this->getTemplateName(), 177));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 178
        echo "    ";
        $macros["tree"] = $this;
        // line 179
        echo "
    <h2>Layouts</h2>
    ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 181), "context", [], "any", false, true, false, 181), "items", [], "any", false, true, false, 181), "theme", [], "any", true, true, false, 181)) {
            // line 182
            echo "        <h4>Layout updates in the
            <strong>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 183, $this->source); })()), "data", [], "any", false, false, false, 183), "context", [], "any", false, false, false, 183), "items", [], "any", false, false, false, 183), "theme", [], "any", false, false, false, 183), "html", null, true);
            echo "</strong> theme can be added to:</h4>
        <table>
            ";
            // line 185
            $context["widgetContainer"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 185), "context", [], "any", false, true, false, 185), "items", [], "any", false, true, false, 185), "widget_container", [], "any", false, true, false, 185), "getValue", [], "method", true, true, false, 185)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 185), "context", [], "any", false, true, false, 185), "items", [], "any", false, true, false, 185), "widget_container", [], "any", false, true, false, 185), "getValue", [], "method", false, false, false, 185), "page")) : ("page"));
            // line 186
            echo "            <tr>
                <td>
                    <span>Resources/views/layouts/";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 188, $this->source); })()), "data", [], "any", false, false, false, 188), "context", [], "any", false, false, false, 188), "items", [], "any", false, false, false, 188), "theme", [], "any", false, false, false, 188), "html", null, true);
            echo "/<b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 188, $this->source); })()), "data", [], "any", false, false, false, 188), "context", [], "any", false, false, false, 188), "items", [], "any", false, false, false, 188), "route_name", [], "any", false, false, false, 188), "html", null, true);
            echo "</b></span>
                </td>
                <td>for the <b>Current Route</b></td> ";
            // line 191
            echo "            </tr>
            ";
            // line 192
            if (((isset($context["widgetContainer"]) || array_key_exists("widgetContainer", $context) ? $context["widgetContainer"] : (function () { throw new RuntimeError('Variable "widgetContainer" does not exist.', 192, $this->source); })()) != "page")) {
                // line 193
                echo "                <tr>
                    <td>
                        <span>Resources/views/layouts/";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 195, $this->source); })()), "data", [], "any", false, false, false, 195), "context", [], "any", false, false, false, 195), "items", [], "any", false, false, false, 195), "theme", [], "any", false, false, false, 195), "html", null, true);
                echo "/<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 195, $this->source); })()), "data", [], "any", false, false, false, 195), "context", [], "any", false, false, false, 195), "items", [], "any", false, false, false, 195), "route_name", [], "any", false, false, false, 195), "html", null, true);
                echo "</b>/";
                echo twig_escape_filter($this->env, (isset($context["widgetContainer"]) || array_key_exists("widgetContainer", $context) ? $context["widgetContainer"] : (function () { throw new RuntimeError('Variable "widgetContainer" does not exist.', 195, $this->source); })()), "html", null, true);
                echo "</span>
                    </td>
                    <td>for the <b>Current ";
                // line 197
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["widgetContainer"]) || array_key_exists("widgetContainer", $context) ? $context["widgetContainer"] : (function () { throw new RuntimeError('Variable "widgetContainer" does not exist.', 197, $this->source); })())), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            // line 200
            echo "            <tr>
                <td><span>Resources/views/layouts/";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "data", [], "any", false, false, false, 201), "context", [], "any", false, false, false, 201), "items", [], "any", false, false, false, 201), "theme", [], "any", false, false, false, 201), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["widgetContainer"]) || array_key_exists("widgetContainer", $context) ? $context["widgetContainer"] : (function () { throw new RuntimeError('Variable "widgetContainer" does not exist.', 201, $this->source); })()), "html", null, true);
            echo "</span>
                </td>
                <td>for <b>All ";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('pluralize')->getCallable(), [$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["widgetContainer"]) || array_key_exists("widgetContainer", $context) ? $context["widgetContainer"] : (function () { throw new RuntimeError('Variable "widgetContainer" does not exist.', 203, $this->source); })()))]), "html", null, true);
            echo "</b></td>
            </tr>
        </table>
    ";
        }
        // line 207
        echo "    <div id=\"layout-profiler\" class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Layout Tree
                <span class=\"badge\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 211, $this->source); })()), "data", [], "any", false, false, false, 211), "count", [], "any", false, false, false, 211), "html", null, true);
        echo " blocks</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 214
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 214, $this->source); })()), "data", [], "any", false, false, false, 214), "views", [], "any", false, false, false, 214))) {
            // line 215
            echo "                    <div id=\"tree-menu\" class=\"tree\">
                        <div class=\"tree-menu-wrapper\">
                            <div class=\"expand-all\">
                                <a id=\"expand-all\" href=\"#\" data-collapsed-title=\"Collapse All\">Expand All</a>
                            </div>
                            <ul>
                                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 221, $this->source); })()), "data", [], "any", false, false, false, 221), "views", [], "any", false, false, false, 221));
            foreach ($context['_seq'] as $context["viewId"] => $context["viewData"]) {
                // line 222
                echo "                                    ";
                echo twig_call_macro($macros["tree"], "macro_view_tree_entry", [$context["viewId"], $context["viewData"], true], 222, $context, $this->getSourceContext());
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewId'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                            </ul>
                        </div>
                    </div>
                    <div id=\"tree-details-container\">
                        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "data", [], "any", false, false, false, 228), "views", [], "any", false, false, false, 228));
            foreach ($context['_seq'] as $context["viewId"] => $context["viewData"]) {
                // line 229
                echo "                            ";
                echo twig_call_macro($macros["tree"], "macro_view_tree_details", [$context["viewId"], $context["viewData"]], 229, $context, $this->getSourceContext());
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewId'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                    </div>
                ";
        } else {
            // line 233
            echo "                    <div class=\"empty\">
                        <p>No views were found for this request.</p>
                    </div>
                ";
        }
        // line 237
        echo "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Not Applied Actions
                <span class=\"badge\">";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 242, $this->source); })()), "data", [], "any", false, false, false, 242), "not_applied_actions_count", [], "any", false, false, false, 242), "html", null, true);
        echo "</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 245
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 245, $this->source); })()), "data", [], "any", false, false, false, 245), "not_applied_actions_count", [], "any", false, false, false, 245) > 0)) {
            // line 246
            echo "                    ";
            echo twig_call_macro($macros["tree"], "macro_not_applied_actions_tab", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 246, $this->source); })()), "data", [], "any", false, false, false, 246), "not_applied_actions", [], "any", false, false, false, 246)], 246, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 248
        echo "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Context</h3>
            <div class=\"tab-content\">
                <div class=\"tree-details\">
                    ";
        // line 254
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 254, $this->source); })()), "data", [], "any", false, false, false, 254), "context", [], "any", false, false, false, 254), "items", [], "any", false, false, false, 254))) {
            // line 255
            echo "                        ";
            echo twig_call_macro($macros["tree"], "macro_view_block_details", ["context", "Context", ["Items" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 255, $this->source); })()), "data", [], "any", false, false, false, 255), "context", [], "any", false, false, false, 255), "items", [], "any", false, false, false, 255)]], 255, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 257
        echo "
                    ";
        // line 258
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 258, $this->source); })()), "data", [], "any", false, false, false, 258), "context", [], "any", false, false, false, 258), "data", [], "any", false, false, false, 258))) {
            // line 259
            echo "                        ";
            echo twig_call_macro($macros["tree"], "macro_view_block_details", ["context-data", "Context Data", ["Items" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "data", [], "any", false, false, false, 259), "context", [], "any", false, false, false, 259), "data", [], "any", false, false, false, 259)], true], 259, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 261
        echo "                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            function Toggler(storage) {
                \"use strict\";

                var STORAGE_KEY = 'sf_toggle_data';
                var states = {};

                var isCollapsed = function (button) {
                    return Sfjs.hasClass(button, 'closed');
                };

                var isExpanded = function (button) {
                    return !isCollapsed(button);
                };

                var expand = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isCollapsed(button)) {
                        Sfjs.removeClass(button, 'closed');
                        Sfjs.removeClass(target, 'hidden');

                        states[targetId] = 1;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var collapse = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isExpanded(button)) {
                        Sfjs.addClass(button, 'closed');
                        Sfjs.addClass(target, 'hidden');

                        states[targetId] = 0;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var toggle = function (button) {
                    if (Sfjs.hasClass(button, 'closed')) {
                        expand(button);
                    } else {
                        collapse(button);
                    }
                };

                var initButtons = function (buttons) {
                    states = storage.getItem(STORAGE_KEY, {});

                    // must be an object, not an array or anything else
                    // `typeof` returns \"object\" also for arrays, so the following
                    // check must be done
                    // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                    if ('[object Object]' !== Object.prototype.toString.call(states)) {
                        states = {};
                    }

                    for (var i = 0, l = buttons.length; i < l; ++i) {
                        var targetId = buttons[i].dataset.toggleTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Toggle target \" + targetId + \" does not exist\";
                        }

                        // correct the initial state of the button
                        if (Sfjs.hasClass(target, 'hidden')) {
                            Sfjs.addClass(buttons[i], 'closed');
                        }

                        // attach listener for expanding/collapsing the target
                        clickHandler(buttons[i], toggle);

                        if (states.hasOwnProperty(targetId)) {
                            // open or collapse based on stored data
                            if (0 === states[targetId]) {
                                collapse(buttons[i]);
                            } else {
                                expand(buttons[i]);
                            }
                        }
                    }
                };

                return {
                    initButtons: initButtons,
                    toggle: toggle,
                    isExpanded: isExpanded,
                    isCollapsed: isCollapsed,
                    expand: expand,
                    collapse: collapse,
                };
            }

            function JsonStorage(storage) {
                var setItem = function (key, data) {
                    storage.setItem(key, JSON.stringify(data));
                };

                var getItem = function (key, defaultValue) {
                    var data = storage.getItem(key);

                    if (null !== data) {
                        try {
                            return JSON.parse(data);
                        } catch (e) {
                        }
                    }

                    return defaultValue;
                };

                return {
                    setItem: setItem,
                    getItem: getItem
                };
            }

            function TabView() {
                \"use strict\";

                var activeTab = null;
                var activeTarget = null;

                var select = function (tab) {
                    var targetId = tab.dataset.tabTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    if (activeTab) {
                        Sfjs.removeClass(activeTab, 'active');
                    }

                    if (activeTarget) {
                        Sfjs.addClass(activeTarget, 'hidden');
                    }

                    Sfjs.addClass(tab, 'active');
                    Sfjs.removeClass(target, 'hidden');

                    activeTab = tab;
                    activeTarget = target;
                };

                var initTabs = function (tabs) {
                    for (var i = 0, l = tabs.length; i < l; ++i) {
                        var targetId = tabs[i].dataset.tabTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Tab target \" + targetId + \" does not exist\";
                        }

                        clickHandler(tabs[i], select);

                        Sfjs.addClass(target, 'hidden');
                    }

                    select(tabs[0]);
                };

                return {
                    initTabs: initTabs,
                    select: select
                };
            }

            var tabTarget = new TabView();
            var storage = new JsonStorage(sessionStorage);
            var toggler = new Toggler(storage);
            var clickHandler = function (element, callback) {
                Sfjs.addEventListener(element, 'click', function (e) {
                    if (!e) {
                        e = window.event;
                    }

                    callback(this);

                    if (e.preventDefault) {
                        e.preventDefault();
                    } else {
                        e.returnValue = false;
                    }

                    e.stopPropagation();

                    return false;
                });
            };

            tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
            toggler.initButtons(document.querySelectorAll('a.toggle-button'));

            (function () {
                var STORAGE_KEY = 'sf_toggle_all_data';
                var buttons = document.querySelectorAll('.tree-inner a.toggle-button');
                var target = document.getElementById('expand-all');
                var isExpanded = storage.getItem(STORAGE_KEY, false);

                var changeTitle = function (target) {
                    var title = target.getAttribute('data-collapsed-title');
                    target.setAttribute('data-collapsed-title', target.text);
                    target.text = title;
                };

                if (isExpanded) {
                    changeTitle(target);
                }

                var toggleAll = function () {
                    var isExpanded = storage.getItem(STORAGE_KEY, false);
                    for (var i = 0; i < buttons.length; i++) {
                        if (isExpanded) {
                            toggler.collapse(buttons[i]);
                        } else {
                            toggler.expand(buttons[i]);
                        }
                    }
                    changeTitle(target);
                    storage.setItem(STORAGE_KEY, isExpanded ? false : true);
                };

                clickHandler(target, toggleAll);
            })();

            function fitDetailsContainer() {
                var container = document.getElementById('tree-details-container');

                if (window.scrollY > 375) {
                    Sfjs.addClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = window.innerHeight - container.offsetTop + 'px';
                } else {
                    Sfjs.removeClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = '';
                }
            }

            window.onscroll = fitDetailsContainer;
            fitDetailsContainer();
        }());
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 524
    public function macro_view_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_tree_entry"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_tree_entry"));

            // line 525
            echo "    ";
            $macros["tree"] = $this;
            // line 526
            echo "    <li>
        <div class=\"tree-inner";
            // line 527
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 527, $this->source); })()), "visible", [], "any", false, false, false, 527) == false)) {
                echo " underline";
            }
            echo "\"
             data-tab-target-id=\"";
            // line 528
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528), "html", null, true);
            echo "-details\">
            ";
            // line 529
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 529, $this->source); })()), "children", [], "any", false, false, false, 529))) {
                // line 530
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 530, $this->source); })()), "id", [], "any", false, false, false, 530), "html", null, true);
                echo "-children\" href=\"#\"><span
                            class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 533
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 535
            echo "
            ";
            // line 536
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 536, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type", [], "any", true, true, false, 536)) {
                echo "[<abbr
                    title=\"Block Type\">";
                // line 537
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 537, $this->source); })()), "type", [], "any", false, false, false, 537), "\\")), "html", null, true);
                echo "</abbr>]";
            }
            // line 538
            echo "        </div>

        ";
            // line 540
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 540, $this->source); })()), "children", [], "any", false, false, false, 540))) {
                // line 541
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 541, $this->source); })()), "id", [], "any", false, false, false, 541), "html", null, true);
                echo "-children\" ";
                if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 541, $this->source); })())) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 542
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 542, $this->source); })()), "children", [], "any", false, false, false, 542));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 543
                    echo "                    ";
                    echo twig_call_macro($macros["tree"], "macro_view_tree_entry", [$context["childName"], $context["childData"], false], 543, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 545
                echo "            </ul>
        ";
            }
            // line 547
            echo "    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 550
    public function macro_view_tree_details($__name__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_tree_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_tree_details"));

            // line 551
            echo "    ";
            $macros["tree"] = $this;
            // line 552
            echo "    <div class=\"tree-details\"";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 552)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 552, $this->source); })()), "id", [], "any", false, false, false, 552), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 554
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 554, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 555
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 555) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type", [], "any", true, true, false, 555))) {
                // line 556
                echo "                <span class=\"form-type\">[<abbr title=\"Block Type\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 556, $this->source); })()), "type", [], "any", false, false, false, 556), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 558
            echo "        </h2>

        <h3>Customize the following blocks in twig templates:</h3>
        <div>
            <table>
                ";
            // line 563
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 563, $this->source); })()), "block_prefixes", [], "any", false, false, false, 563)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockPrefix"]) {
                // line 564
                echo "                    <tr>
                        <td>
                            ";
                // line 566
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 566), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 569
                echo "{% block ";
                echo "
                            <strong>";
                // line 570
                echo twig_escape_filter($this->env, $context["blockPrefix"], "html", null, true);
                echo "_widget</strong>
                            ";
                // line 571
                echo " %}";
                echo "
                        </td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockPrefix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 575
            echo "            </table>
        </div>

        ";
            // line 578
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 578)) {
                // line 579
                echo "            ";
                echo twig_call_macro($macros["tree"], "macro_view_block_details", [(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 579, $this->source); })()), "id", [], "any", false, false, false, 579) . "-vars"), "Variables", ["Variables" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 579, $this->source); })()), "view_vars", [], "any", false, false, false, 579)]], 579, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 581
            echo "    </div>

    ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 583, $this->source); })()), "children", [], "any", false, false, false, 583));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 584
                echo "        ";
                echo twig_call_macro($macros["tree"], "macro_view_tree_details", [$context["childName"], $context["childData"]], 584, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 588
    public function macro_view_block_details($__id__ = null, $__title__ = null, $__groups__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "title" => $__title__,
            "groups" => $__groups__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_block_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "view_block_details"));

            // line 589
            echo "    <h3>
        <a class=\"toggle-button\" data-toggle-target-id=\"";
            // line 590
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 590, $this->source); })()), "html", null, true);
            echo "-details\" href=\"#\">
            ";
            // line 591
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 591, $this->source); })()), "html", null, true);
            echo " <span class=\"toggle-icon\"></span>
        </a>
    </h3>
    <div id=\"";
            // line 594
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 594, $this->source); })()), "html", null, true);
            echo "-details\"";
            if ((isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 594, $this->source); })())) {
                echo " class=\"hidden\"";
            }
            echo ">
        ";
            // line 595
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 595, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                // line 596
                echo "            ";
                if ($context["options"]) {
                    // line 597
                    echo "                <table>
                    <thead>
                    <tr>
                        <th width=\"180\">Key</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 605
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["options"]);
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 606
                        echo "                        <tr class=\"block-option-value\">
                            <th scope=\"row\">";
                        // line 607
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                            <td>
                                ";
                        // line 609
                        if ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->isString($context["value"])) {
                            // line 610
                            echo "                                    <span class=\"dumped-string\">\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"</span>
                                ";
                        } elseif ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->isExpression(                        // line 611
$context["value"])) {
                            // line 612
                            echo "                                    <span title=\"Layout Expression\">";
                            echo $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->highlightString($context["value"]);
                            echo "</span>
                                ";
                        } else {
                            // line 614
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                            echo "
                                ";
                        }
                        // line 616
                        echo "                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 619
                    echo "                    </tbody>
                </table>
            ";
                }
                // line 622
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 623
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 626
    public function macro_not_applied_actions_tab($__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "not_applied_actions_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "not_applied_actions_tab"));

            // line 627
            echo "    ";
            $macros["tree"] = $this;
            // line 628
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Action name</th>
            <th>Arguments</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 636
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 636, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 637
                echo "            <tr>
                <td>
                    <strong>
                        @";
                // line 640
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 640), "html", null, true);
                echo "
                    </strong>
                </td>
                <td>
                    ";
                // line 644
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "args", [], "any", false, false, false, 644));
                foreach ($context['_seq'] as $context["argName"] => $context["argValue"]) {
                    // line 645
                    echo "                        <div>
                            <strong>";
                    // line 646
                    echo twig_escape_filter($this->env, $context["argName"], "html", null, true);
                    echo ":</strong>
                            ";
                    // line 647
                    if (($context["argName"] == "options")) {
                        // line 648
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["argValue"]);
                        foreach ($context['_seq'] as $context["name"] => $context["option"]) {
                            // line 649
                            echo "                                    ";
                            echo twig_call_macro($macros["tree"], "macro_option", [$context["name"], $context["option"], 0], 649, $context, $this->getSourceContext());
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 651
                        echo "                            ";
                    } else {
                        // line 652
                        echo "                                <span class=\"dumped-string\">\"";
                        echo twig_escape_filter($this->env, $context["argValue"], "html", null, true);
                        echo "\"</span>
                            ";
                    }
                    // line 654
                    echo "                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['argName'], $context['argValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 659
            echo "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 663
    public function macro_option($__name__ = null, $__value__ = null, $__offset__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "offset" => $__offset__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "option"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "option"));

            // line 664
            echo "    ";
            $macros["tree"] = $this;
            // line 665
            echo "    <div>
        <strong>";
            // line 666
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 666, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 666, $this->source); })()), "html", null, true);
            echo ":</strong>
        ";
            // line 667
            if ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->isString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 667, $this->source); })()))) {
                // line 668
                echo "            <span class=\"dumped-string\">\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 668, $this->source); })()), "html", null, true);
                echo "\"</span>
        ";
            } elseif ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->isExpression(            // line 669
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 669, $this->source); })()))) {
                // line 670
                echo "            <span title=\"Layout Expression\">";
                echo $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->highlightString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 670, $this->source); })()));
                echo "</span>
        ";
            } elseif (twig_test_iterable(            // line 671
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 671, $this->source); })()))) {
                // line 672
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 672, $this->source); })()));
                foreach ($context['_seq'] as $context["childOptionName"] => $context["childOptionValue"]) {
                    // line 673
                    echo "                ";
                    echo twig_call_macro($macros["tree"], "macro_option", [$context["childOptionName"], $context["childOptionValue"], ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 673, $this->source); })()) + 4)], 673, $context, $this->getSourceContext());
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childOptionName'], $context['childOptionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 675
                echo "        ";
            } else {
                // line 676
                echo "            ";
                echo $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->highlightString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 676, $this->source); })()));
                echo "
        ";
            }
            // line 678
            echo "    </div>
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
        return "@OroLayout/Collector/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1434 => 678,  1428 => 676,  1425 => 675,  1416 => 673,  1411 => 672,  1409 => 671,  1404 => 670,  1402 => 669,  1397 => 668,  1395 => 667,  1383 => 666,  1380 => 665,  1377 => 664,  1356 => 663,  1339 => 659,  1331 => 656,  1324 => 654,  1318 => 652,  1315 => 651,  1306 => 649,  1301 => 648,  1299 => 647,  1295 => 646,  1292 => 645,  1288 => 644,  1281 => 640,  1276 => 637,  1272 => 636,  1262 => 628,  1259 => 627,  1240 => 626,  1224 => 623,  1218 => 622,  1213 => 619,  1205 => 616,  1199 => 614,  1193 => 612,  1191 => 611,  1186 => 610,  1184 => 609,  1179 => 607,  1176 => 606,  1172 => 605,  1162 => 597,  1159 => 596,  1155 => 595,  1147 => 594,  1141 => 591,  1137 => 590,  1134 => 589,  1112 => 588,  1090 => 584,  1086 => 583,  1082 => 581,  1076 => 579,  1074 => 578,  1069 => 575,  1051 => 571,  1047 => 570,  1043 => 569,  1037 => 566,  1033 => 564,  1016 => 563,  1009 => 558,  1003 => 556,  1001 => 555,  997 => 554,  987 => 552,  984 => 551,  964 => 550,  948 => 547,  944 => 545,  935 => 543,  931 => 542,  922 => 541,  920 => 540,  916 => 538,  912 => 537,  906 => 536,  903 => 535,  899 => 533,  892 => 530,  890 => 529,  886 => 528,  880 => 527,  877 => 526,  874 => 525,  853 => 524,  579 => 261,  573 => 259,  571 => 258,  568 => 257,  562 => 255,  560 => 254,  552 => 248,  546 => 246,  544 => 245,  538 => 242,  531 => 237,  525 => 233,  521 => 231,  512 => 229,  508 => 228,  502 => 224,  493 => 222,  489 => 221,  481 => 215,  479 => 214,  473 => 211,  467 => 207,  460 => 203,  453 => 201,  450 => 200,  444 => 197,  435 => 195,  431 => 193,  429 => 192,  426 => 191,  419 => 188,  415 => 186,  413 => 185,  408 => 183,  405 => 182,  403 => 181,  399 => 179,  396 => 178,  383 => 177,  263 => 70,  250 => 69,  236 => 66,  230 => 63,  227 => 62,  225 => 61,  219 => 58,  213 => 55,  209 => 54,  206 => 53,  193 => 52,  177 => 48,  168 => 41,  164 => 39,  156 => 36,  148 => 35,  143 => 33,  140 => 32,  135 => 31,  128 => 27,  123 => 24,  121 => 23,  116 => 21,  111 => 18,  109 => 17,  106 => 16,  102 => 14,  99 => 12,  97 => 11,  92 => 8,  89 => 7,  86 => 6,  83 => 5,  80 => 4,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Collector/form.html.twig' %}

{% block toolbar %}
    {% if collector.data.views|length %}
        {% set status_color = collector.data.not_applied_actions_count ? 'yellow' : '' %}
        {% set icon %}
            <span class=\"icon\">
                {{ include('@OroLayout/Collector/layout-icon.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">
            {%- if collector.data.not_applied_actions_count %}
                {{- collector.data.not_applied_actions_count -}}
            {% endif -%}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\" id=\"collector-content\" style=\"width: 480px;\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Number of blocks</b>
                    <span class=\"sf-toolbar-status\">{{ collector.data.count }}</span>
                </div>
                {% if collector.data.not_applied_actions_count %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Not applied actions</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">
                        {{ collector.data.not_applied_actions_count }}
                    </span>
                    </div>
                {% endif %}
                {% for key, value in collector.data.context.items %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b class=\"oro-layout-toolbar-info-piece-title\">{{ key }}</b>
                        <span class=\"sf-toolbar-info-class oro-layout-toolbar-info-piece-value\">
                            {% if value is string %}\"{{ value }}\"{% else %}{{ profiler_dump(value) }}{% endif %}
                    </span>
                    </div>
                {% endfor %}
            </div>
        {% endset %}
        <style>
            .oro-layout-toolbar-info-piece-value pre.sf-dump {
                background-color: transparent;
                padding: 0;
            }
        </style>

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label
                {{ collector.data.not_applied_actions_count ? 'label-status-error' : '' }}
                {{ collector.data.views is empty ? 'disabled' }}\"
    >
        <span class=\"icon\">
            {{ include('@OroLayout/Collector/layout-icon.svg') }}
        </span>
        <strong>Layouts</strong>
        {% if collector.data.not_applied_actions_count %}
            <span class=\"count\">
                <span>{{ collector.data.not_applied_actions_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}

    <style>
        .container {
            max-width: none;
        }

        #tree-menu {
            width: calc(100% - 770px);
            position: relative;
        }

        #tree-menu:after {
            content: \"\";
            position: absolute;
            right: 10px;
            top: 0;
            width: 30px;
            min-height: 100%;
            height: 100%;
            background: linear-gradient(to left, rgba(249, 249, 249, 1) 0%, rgba(249, 249, 249, 0) 100%);
        }

        .tree-menu-wrapper {
            overflow: auto;
        }

        #tree-details-container {
            margin-left: calc(100% - 750px);
            padding: 0;
            border: none;
            width: 750px;
        }

        #tree-details-container.fixed {
            position: fixed;
            top: 5px;
            right: 15px;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
        }

        #tree-menu ul {
            margin-left: 20px;
        }

        .tree ul .tree-inner {
            padding-left: 0 !important;
            white-space: nowrap;
            line-height: 1.5;
        }

        .expand-all {
            position: relative;
            text-align: right;
            z-index: 1;
        }

        .expand-all a {
            text-decoration: none;
            color: #999;
        }

        .expand-all a:hover {
            border-bottom: 1px dashed;
        }

        .tree-inner.underline {
            text-decoration: line-through;
        }

        @media screen and (max-width: 1100px) {
            #tree-menu {
                width: 100%;
            }

            #tree-details-container {
                clear: both;
                width: 100%;
                margin-left: 0;
                padding-top: 20px;
            }

            #tree-details-container.fixed {
                position: static;
                overflow: visible;
                max-height: inherit;
            }
        }

        .tree-details {
            overflow: auto;
        }

        .block-option-value code {
            background: lightyellow;
            padding: 3px 8px 4px;
            border: 1px solid lightgray;
        }

        .dumped-string {
            color: #629755;
        }
    </style>
{% endblock %}

{% block panel %}
    {% import _self as tree %}

    <h2>Layouts</h2>
    {% if collector.data.context.items.theme is defined %}
        <h4>Layout updates in the
            <strong>{{ collector.data.context.items.theme }}</strong> theme can be added to:</h4>
        <table>
            {% set widgetContainer = collector.data.context.items.widget_container.getValue()|default('page') %}
            <tr>
                <td>
                    <span>Resources/views/layouts/{{ collector.data.context.items.theme }}/<b>{{ collector.data.context.items.route_name }}</b></span>
                </td>
                <td>for the <b>Current Route</b></td> {#All widget containers(pages, dialogs, etc).#}
            </tr>
            {% if widgetContainer != 'page' %}
                <tr>
                    <td>
                        <span>Resources/views/layouts/{{ collector.data.context.items.theme }}/<b>{{ collector.data.context.items.route_name }}</b>/{{ widgetContainer }}</span>
                    </td>
                    <td>for the <b>Current {{ widgetContainer|humanize }}</b></td>
                </tr>
            {% endif %}
            <tr>
                <td><span>Resources/views/layouts/{{ collector.data.context.items.theme }}/{{ widgetContainer }}</span>
                </td>
                <td>for <b>All {{ widgetContainer|humanize|pluralize }}</b></td>
            </tr>
        </table>
    {% endif %}
    <div id=\"layout-profiler\" class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Layout Tree
                <span class=\"badge\">{{ collector.data.count }} blocks</span>
            </h3>
            <div class=\"tab-content\">
                {% if collector.data.views|length %}
                    <div id=\"tree-menu\" class=\"tree\">
                        <div class=\"tree-menu-wrapper\">
                            <div class=\"expand-all\">
                                <a id=\"expand-all\" href=\"#\" data-collapsed-title=\"Collapse All\">Expand All</a>
                            </div>
                            <ul>
                                {% for viewId, viewData in collector.data.views %}
                                    {{ tree.view_tree_entry(viewId, viewData, true) }}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <div id=\"tree-details-container\">
                        {% for viewId, viewData in collector.data.views %}
                            {{ tree.view_tree_details(viewId, viewData) }}
                        {% endfor %}
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No views were found for this request.</p>
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Not Applied Actions
                <span class=\"badge\">{{ collector.data.not_applied_actions_count }}</span>
            </h3>
            <div class=\"tab-content\">
                {% if collector.data.not_applied_actions_count > 0 %}
                    {{ tree.not_applied_actions_tab(collector.data.not_applied_actions) }}
                {% endif %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Context</h3>
            <div class=\"tab-content\">
                <div class=\"tree-details\">
                    {% if collector.data.context.items|length %}
                        {{ tree.view_block_details('context', 'Context', {'Items': collector.data.context.items}) }}
                    {% endif %}

                    {% if collector.data.context.data|length %}
                        {{ tree.view_block_details('context-data', 'Context Data', {'Items': collector.data.context.data}, true) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            function Toggler(storage) {
                \"use strict\";

                var STORAGE_KEY = 'sf_toggle_data';
                var states = {};

                var isCollapsed = function (button) {
                    return Sfjs.hasClass(button, 'closed');
                };

                var isExpanded = function (button) {
                    return !isCollapsed(button);
                };

                var expand = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isCollapsed(button)) {
                        Sfjs.removeClass(button, 'closed');
                        Sfjs.removeClass(target, 'hidden');

                        states[targetId] = 1;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var collapse = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isExpanded(button)) {
                        Sfjs.addClass(button, 'closed');
                        Sfjs.addClass(target, 'hidden');

                        states[targetId] = 0;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var toggle = function (button) {
                    if (Sfjs.hasClass(button, 'closed')) {
                        expand(button);
                    } else {
                        collapse(button);
                    }
                };

                var initButtons = function (buttons) {
                    states = storage.getItem(STORAGE_KEY, {});

                    // must be an object, not an array or anything else
                    // `typeof` returns \"object\" also for arrays, so the following
                    // check must be done
                    // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                    if ('[object Object]' !== Object.prototype.toString.call(states)) {
                        states = {};
                    }

                    for (var i = 0, l = buttons.length; i < l; ++i) {
                        var targetId = buttons[i].dataset.toggleTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Toggle target \" + targetId + \" does not exist\";
                        }

                        // correct the initial state of the button
                        if (Sfjs.hasClass(target, 'hidden')) {
                            Sfjs.addClass(buttons[i], 'closed');
                        }

                        // attach listener for expanding/collapsing the target
                        clickHandler(buttons[i], toggle);

                        if (states.hasOwnProperty(targetId)) {
                            // open or collapse based on stored data
                            if (0 === states[targetId]) {
                                collapse(buttons[i]);
                            } else {
                                expand(buttons[i]);
                            }
                        }
                    }
                };

                return {
                    initButtons: initButtons,
                    toggle: toggle,
                    isExpanded: isExpanded,
                    isCollapsed: isCollapsed,
                    expand: expand,
                    collapse: collapse,
                };
            }

            function JsonStorage(storage) {
                var setItem = function (key, data) {
                    storage.setItem(key, JSON.stringify(data));
                };

                var getItem = function (key, defaultValue) {
                    var data = storage.getItem(key);

                    if (null !== data) {
                        try {
                            return JSON.parse(data);
                        } catch (e) {
                        }
                    }

                    return defaultValue;
                };

                return {
                    setItem: setItem,
                    getItem: getItem
                };
            }

            function TabView() {
                \"use strict\";

                var activeTab = null;
                var activeTarget = null;

                var select = function (tab) {
                    var targetId = tab.dataset.tabTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    if (activeTab) {
                        Sfjs.removeClass(activeTab, 'active');
                    }

                    if (activeTarget) {
                        Sfjs.addClass(activeTarget, 'hidden');
                    }

                    Sfjs.addClass(tab, 'active');
                    Sfjs.removeClass(target, 'hidden');

                    activeTab = tab;
                    activeTarget = target;
                };

                var initTabs = function (tabs) {
                    for (var i = 0, l = tabs.length; i < l; ++i) {
                        var targetId = tabs[i].dataset.tabTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Tab target \" + targetId + \" does not exist\";
                        }

                        clickHandler(tabs[i], select);

                        Sfjs.addClass(target, 'hidden');
                    }

                    select(tabs[0]);
                };

                return {
                    initTabs: initTabs,
                    select: select
                };
            }

            var tabTarget = new TabView();
            var storage = new JsonStorage(sessionStorage);
            var toggler = new Toggler(storage);
            var clickHandler = function (element, callback) {
                Sfjs.addEventListener(element, 'click', function (e) {
                    if (!e) {
                        e = window.event;
                    }

                    callback(this);

                    if (e.preventDefault) {
                        e.preventDefault();
                    } else {
                        e.returnValue = false;
                    }

                    e.stopPropagation();

                    return false;
                });
            };

            tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
            toggler.initButtons(document.querySelectorAll('a.toggle-button'));

            (function () {
                var STORAGE_KEY = 'sf_toggle_all_data';
                var buttons = document.querySelectorAll('.tree-inner a.toggle-button');
                var target = document.getElementById('expand-all');
                var isExpanded = storage.getItem(STORAGE_KEY, false);

                var changeTitle = function (target) {
                    var title = target.getAttribute('data-collapsed-title');
                    target.setAttribute('data-collapsed-title', target.text);
                    target.text = title;
                };

                if (isExpanded) {
                    changeTitle(target);
                }

                var toggleAll = function () {
                    var isExpanded = storage.getItem(STORAGE_KEY, false);
                    for (var i = 0; i < buttons.length; i++) {
                        if (isExpanded) {
                            toggler.collapse(buttons[i]);
                        } else {
                            toggler.expand(buttons[i]);
                        }
                    }
                    changeTitle(target);
                    storage.setItem(STORAGE_KEY, isExpanded ? false : true);
                };

                clickHandler(target, toggleAll);
            })();

            function fitDetailsContainer() {
                var container = document.getElementById('tree-details-container');

                if (window.scrollY > 375) {
                    Sfjs.addClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = window.innerHeight - container.offsetTop + 'px';
                } else {
                    Sfjs.removeClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = '';
                }
            }

            window.onscroll = fitDetailsContainer;
            fitDetailsContainer();
        }());
    </script>
{% endblock %}

{% macro view_tree_entry(name, data, expanded) %}
    {% import _self as tree %}
    <li>
        <div class=\"tree-inner{% if data.visible == false %} underline{% endif %}\"
             data-tab-target-id=\"{{ data.id }}-details\">
            {% if data.children is not empty %}
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\" href=\"#\"><span
                            class=\"toggle-icon\"></span></a>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            {{ name|default('(no name)') }} {% if data.type is defined %}[<abbr
                    title=\"Block Type\">{{ data.type|split('\\\\')|last }}</abbr>]{% endif %}
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not expanded %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ tree.view_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro view_tree_details(name, data) %}
    {% import _self as tree %}
    <div class=\"tree-details\"{% if data.id is defined %} id=\"{{ data.id }}-details\"{% endif %}>
        <h2>
            {{ name|default('(no name)') }}
            {% if data.type_class is defined and data.type is defined %}
                <span class=\"form-type\">[<abbr title=\"Block Type\">{{ data.type }}</abbr>]</span>
            {% endif %}
        </h2>

        <h3>Customize the following blocks in twig templates:</h3>
        <div>
            <table>
                {% for blockPrefix in data.block_prefixes|reverse %}
                    <tr>
                        <td>
                            {{ loop.index }}
                        </td>
                        <td>
                            {% verbatim %}{% block {% endverbatim %}
                            <strong>{{ blockPrefix }}_widget</strong>
                            {% verbatim %} %}{% endverbatim %}
                        </td>
                    </tr>
                {% endfor %}
            </table>
        </div>

        {% if data.view_vars is defined %}
            {{ tree.view_block_details(data.id ~ '-vars', 'Variables', {'Variables': data.view_vars}) }}
        {% endif %}
    </div>

    {% for childName, childData in data.children %}
        {{ tree.view_tree_details(childName, childData) }}
    {% endfor %}
{% endmacro %}

{% macro view_block_details(id, title, groups, hidden) %}
    <h3>
        <a class=\"toggle-button\" data-toggle-target-id=\"{{ id }}-details\" href=\"#\">
            {{ title }} <span class=\"toggle-icon\"></span>
        </a>
    </h3>
    <div id=\"{{ id }}-details\"{% if hidden %} class=\"hidden\"{% endif %}>
        {% for name, options in groups %}
            {% if options %}
                <table>
                    <thead>
                    <tr>
                        <th width=\"180\">Key</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for option, value in options %}
                        <tr class=\"block-option-value\">
                            <th scope=\"row\">{{ option }}</th>
                            <td>
                                {% if value is string %}
                                    <span class=\"dumped-string\">\"{{ value }}\"</span>
                                {% elseif value is expression %}
                                    <span title=\"Layout Expression\">{{ highlight_string(value) }}</span>
                                {% else %}
                                    {{ profiler_dump(value) }}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        {% endfor %}
    </div>
{% endmacro %}

{% macro not_applied_actions_tab(actions) %}
    {% import _self as tree %}
    <table>
        <thead>
        <tr>
            <th width=\"180\">Action name</th>
            <th>Arguments</th>
        </tr>
        </thead>
        <tbody>
        {% for action in actions %}
            <tr>
                <td>
                    <strong>
                        @{{ action.name }}
                    </strong>
                </td>
                <td>
                    {% for argName, argValue in action.args %}
                        <div>
                            <strong>{{ argName }}:</strong>
                            {% if argName == 'options' %}
                                {% for name, option in argValue %}
                                    {{ tree.option(name, option, 0) }}
                                {% endfor %}
                            {% else %}
                                <span class=\"dumped-string\">\"{{ argValue }}\"</span>
                            {% endif %}
                        </div>
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro option(name, value, offset) %}
    {% import _self as tree %}
    <div>
        <strong>{% for i in 1..offset %}&nbsp;{% endfor %}{{ name }}:</strong>
        {% if value is string %}
            <span class=\"dumped-string\">\"{{ value }}\"</span>
        {% elseif value is expression %}
            <span title=\"Layout Expression\">{{ highlight_string(value) }}</span>
        {% elseif value is iterable %}
            {% for childOptionName, childOptionValue in value %}
                {{ tree.option(childOptionName, childOptionValue, offset + 4) }}
            {% endfor %}
        {% else %}
            {{ highlight_string(value) }}
        {% endif %}
    </div>
{% endmacro %}
", "@OroLayout/Collector/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Collector/layout.html.twig");
    }
}
