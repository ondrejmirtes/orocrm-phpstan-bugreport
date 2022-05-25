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

/* @OroApi/Collector/api.html.twig */
class __TwigTemplate_5c69f4b9bbd3d2753a9a84dc86ffc5a4 extends Template
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
            'panel' => [$this, 'block_panel'],
            'stats' => [$this, 'block_stats'],
            'actions' => [$this, 'block_actions'],
            'applicableCheckers' => [$this, 'block_applicableCheckers'],
            'processors' => [$this, 'block_processors'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroApi/Collector/api.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/Collector/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/Collector/api.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@OroApi/Collector/api.html.twig", 1);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("menu", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "empty", [], "any", false, false, false, 7)) ? ("disabled") : (""));
        echo "\">
        <strong>API</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("panel", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "empty", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <h2>API</h2>
        <div class=\"empty\">
            <p>No API actions were executed.</p>
        </div>
    ";
        } else {
            // line 19
            echo "        ";
            $this->displayBlock("stats", $context, $blocks);
            echo "
        ";
            // line 20
            $this->displayBlock("actions", $context, $blocks);
            echo "
        ";
            // line 21
            $this->displayBlock("applicableCheckers", $context, $blocks);
            echo "
        ";
            // line 22
            $this->displayBlock("processors", $context, $blocks);
            echo "

        <script>//<![CDATA[

            function sortTable(header, column, targetId) {
                \"use strict\";

                var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

                for (i = 0; i < rows.length; ++i) {
                    items.push(rows[i]);
                }

                for (i = 0; i < headers.length; ++i) {
                    headers[i].removeAttribute('data-sort-direction');
                    if (headers[i].children.length > 0) {
                        headers[i].children[0].innerHTML = '';
                    }
                }

                header.setAttribute('data-sort-direction', (-1*direction).toString());
                header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

                items.sort(function(a, b) {
                    return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
                });

                for (i = 0; i < items.length; ++i) {
                    Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                    Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                    target.appendChild(items[i]);
                }
            }

        //]]></script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 65
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 65));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 66
        echo "    <h2>API Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 70
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "totalTime", [], "any", false, false, false, 70) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Total time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "actionCount", [], "any", false, false, false, 74), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed actions</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "processorCount", [], "any", false, false, false, 78), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed processors</span>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 84
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("actions", $this->getTemplateName(), 84));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 85
        echo "    <h2>Actions</h2>

    <table class=\"alt\" id=\"actionsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'actions')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'actions')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody id=\"actions\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 96, $this->source); })()), "actions", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["i"] => $context["action"]) {
            // line 97
            echo "            <tr id=\"actionNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["action"], "time", [], "any", false, false, false, 98) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if (((twig_get_attribute($this->env, $this->source, $context["action"], "time", [], "any", false, false, false, 98) * 1000) > 5)) {
                echo " (";
                echo twig_escape_filter($this->env, twig_sprintf("%0.1f", ((twig_get_attribute($this->env, $this->source, $context["action"], "time", [], "any", false, false, false, 98) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 98, $this->source); })()), "totalTime", [], "any", false, false, false, 98))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "count", [], "any", false, false, false, 99), "html", null, true);
            echo " times</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 107
    public function block_applicableCheckers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("applicableCheckers", $this->getTemplateName(), 107));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "applicableCheckers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "applicableCheckers"));

        // line 108
        echo "    <h2>Applicable Checkers</h2>

    <table class=\"alt\" id=\"applicableCheckersPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'applicableCheckers')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'applicableCheckers')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody id=\"applicableCheckers\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "applicableCheckers", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["i"] => $context["applicableChecker"]) {
            // line 120
            echo "            <tr id=\"applicableCheckerNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["applicableChecker"], "time", [], "any", false, false, false, 121) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if (((twig_get_attribute($this->env, $this->source, $context["applicableChecker"], "time", [], "any", false, false, false, 121) * 1000) > 1)) {
                echo " (";
                echo twig_escape_filter($this->env, twig_sprintf("%0.1f", ((twig_get_attribute($this->env, $this->source, $context["applicableChecker"], "time", [], "any", false, false, false, 121) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "totalTime", [], "any", false, false, false, 121))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["applicableChecker"], "count", [], "any", false, false, false, 122), "html", null, true);
            echo " times</td>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["applicableChecker"], "class", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['applicableChecker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 130
    public function block_processors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("processors", $this->getTemplateName(), 130));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "processors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "processors"));

        // line 131
        echo "    <h2>Processors</h2>

    <table class=\"alt\" id=\"processorsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'processors')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'processors')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Id</th>
        </tr>
        </thead>
        <tbody id=\"processors\">
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "processors", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["i"] => $context["processor"]) {
            // line 143
            echo "            <tr id=\"processorNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["processor"], "time", [], "any", false, false, false, 144) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if (((twig_get_attribute($this->env, $this->source, $context["processor"], "time", [], "any", false, false, false, 144) * 1000) > 1)) {
                echo " (";
                echo twig_escape_filter($this->env, twig_sprintf("%0.1f", ((twig_get_attribute($this->env, $this->source, $context["processor"], "time", [], "any", false, false, false, 144) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 144, $this->source); })()), "totalTime", [], "any", false, false, false, 144))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["processor"], "count", [], "any", false, false, false, 145), "html", null, true);
            echo " times</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["processor"], "id", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['processor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroApi/Collector/api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 149,  468 => 146,  464 => 145,  454 => 144,  447 => 143,  443 => 142,  430 => 131,  417 => 130,  402 => 126,  393 => 123,  389 => 122,  379 => 121,  372 => 120,  368 => 119,  355 => 108,  342 => 107,  327 => 103,  318 => 100,  314 => 99,  304 => 98,  297 => 97,  293 => 96,  280 => 85,  267 => 84,  249 => 78,  242 => 74,  235 => 70,  229 => 66,  216 => 65,  161 => 22,  157 => 21,  153 => 20,  148 => 19,  141 => 14,  138 => 13,  125 => 12,  107 => 7,  94 => 6,  70 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.empty ? 'disabled' }}\">
        <strong>API</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.empty %}
        <h2>API</h2>
        <div class=\"empty\">
            <p>No API actions were executed.</p>
        </div>
    {% else %}
        {{ block('stats') }}
        {{ block('actions') }}
        {{ block('applicableCheckers') }}
        {{ block('processors') }}

        <script>//<![CDATA[

            function sortTable(header, column, targetId) {
                \"use strict\";

                var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

                for (i = 0; i < rows.length; ++i) {
                    items.push(rows[i]);
                }

                for (i = 0; i < headers.length; ++i) {
                    headers[i].removeAttribute('data-sort-direction');
                    if (headers[i].children.length > 0) {
                        headers[i].children[0].innerHTML = '';
                    }
                }

                header.setAttribute('data-sort-direction', (-1*direction).toString());
                header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

                items.sort(function(a, b) {
                    return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
                });

                for (i = 0; i < items.length; ++i) {
                    Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                    Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                    target.appendChild(items[i]);
                }
            }

        //]]></script>
    {% endif %}
{% endblock %}

{% block stats %}
    <h2>API Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
            <span class=\"label\">Total time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.actionCount }}</span>
            <span class=\"label\">Executed actions</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.processorCount }}</span>
            <span class=\"label\">Executed processors</span>
        </div>
    </div>
{% endblock stats %}

{% block actions %}
    <h2>Actions</h2>

    <table class=\"alt\" id=\"actionsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'actions')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'actions')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody id=\"actions\">
        {% for i, action in collector.actions %}
            <tr id=\"actionNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(action.time * 1000) }}&nbsp;ms{% if action.time * 1000 > 5 %} ({{ '%0.1f'|format((action.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ action.count }} times</td>
                <td>{{ action.name }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock actions %}

{% block applicableCheckers %}
    <h2>Applicable Checkers</h2>

    <table class=\"alt\" id=\"applicableCheckersPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'applicableCheckers')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'applicableCheckers')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody id=\"applicableCheckers\">
        {% for i, applicableChecker in collector.applicableCheckers %}
            <tr id=\"applicableCheckerNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(applicableChecker.time * 1000) }}&nbsp;ms{% if applicableChecker.time * 1000 > 1 %} ({{ '%0.1f'|format((applicableChecker.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ applicableChecker.count }} times</td>
                <td>{{ applicableChecker.class }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock applicableCheckers %}

{% block processors %}
    <h2>Processors</h2>

    <table class=\"alt\" id=\"processorsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'processors')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'processors')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Id</th>
        </tr>
        </thead>
        <tbody id=\"processors\">
        {% for i, processor in collector.processors %}
            <tr id=\"processorNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(processor.time * 1000) }}&nbsp;ms{% if processor.time * 1000 > 1 %} ({{ '%0.1f'|format((processor.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ processor.count }} times</td>
                <td>{{ processor.id }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock processors %}
", "@OroApi/Collector/api.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/Collector/api.html.twig");
    }
}
