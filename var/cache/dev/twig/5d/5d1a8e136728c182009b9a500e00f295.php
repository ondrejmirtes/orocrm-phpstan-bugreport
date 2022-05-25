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

/* @OroEntity/Collector/duplicate_queries.html.twig */
class __TwigTemplate_79868828acc3cce33cdb218e36e88892 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntity/Collector/duplicate_queries.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Collector/duplicate_queries.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Collector/duplicate_queries.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@OroEntity/Collector/duplicate_queries.html.twig", 1);
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
        if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 4) > 0) || (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 4) > 0))) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"20\" height=\"28\" alt=\"Doctrine Stats\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADoUlEQVRIDe1VTUwTQRSe7XZrS39BDtZEj0oUPRhjojEcGwyGi4lXThz05NWDZ4/cuWAPxpumgVBSSsLFE8QE/AkFSdoGWhGatiy09Hf93qa7mdlurQaPTjJ5M2/e//tmRmJ9RjweX9c0bdXr9eb9fv+woii3sA9DTe6livOCJEk7Dofjc6PR+Ar6TeolbPCXlpbaUKxAMSvL8vu1tbVMLpe7jHPFkOlF2+12s1wuq8fHx2VnLyGODx+SF86ug3c3lUrdyGQyD2HEw8nYLpG9zkdWzGErITKbna2EEgy43e4QHPv+ZCaTSd/ExITP6XT6+jpCJm8RfR6GNUwafXWMOGdmZtjGxgaDDSb0yK7xrVbrNhSpTwFQ+eTkxFGpVAaw1h2enp6yo6Mjls/n2f7+vk7RE8OXSYUeIdo7OBmpVqvZer1OjY8BbWPYp+HgI87rBwcH92DoGhwLmSFrBjl2dnZmGucXgiMcUGmExiNaf61WI0iPYjZIGb0iuTZvyGg8+Gx2dvYTf4YK7FgdUeOJZzTeRYihSTxMFy1QTiLCSCQSjHqysLDApqenR+jQcA79ESF9RPxvGt9BJY86ISOkvY6yxBHMY9AQqB+TSiQEhH3XiMViXTwedYIjSL5EWZJwEh0cHFSBqBfYUzn1knVZ6sPgnQvw7jw3LZQwh4v5ZmhoiJ6el7hwVdhsY90CqtzFYvEiZGyz3NvbY3Nzc10hWDOCLYl4VwDXB9FotLG9vR0E6ugOaeA1MQkoZMgWdQScycnJLAkYQ1XVotWRhkM9Szi8AFjKHdQR77eoW1lZMVGHkg2TEw51w0L6KMcXzApkzvfc2KBO+FOmpqZUZFICADSXy/Vza2tLKRQKV7EXAqJorQOvOiuVSvq7Zpyhl/pbh69ChC2yeYYeqOjBIv6e1XA4/B1O9NtqKP8NJdSl02kGm/orYOqCcR8ZjYKRhoNF/KjV8fHxHfACcExZKeD7AA56pgTEGkYoeryRxtakAhhgkJQJYTebzeaP3d3d2ubm5iUEoH9ydI5s4VOmuyU44hrP5ufnP5gesEBQKcERGDoIQGDP4UHkCmzTJ2f+plQGmtaxvLxsoi4QCDy1ngtNhsEEBIpwpD/jlIBVodeef27sZISMYJjAMAb6BML04ZuZ2CnzPP654fnGWog4EomkcYvfIaPnoVDotcfjyRqC56VCQ3ljh4eHfjQ4At4jZOjH7CnL6yHIVDAYfMXz/q/PVYFfJewFJv3g478AAAAASUVORK5CYII=\" />
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional\">
                <span class=\"sf-toolbar-lavel\">/</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Identical Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Similar Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@OroEntity/Collector/duplicate_queries.html.twig", 25)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 25, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 25, $this->source); })()), "")) : (""))]));
            // line 26
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("menu", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "<span class=\"label\">
    <span class=\"icon\">
        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADD0lEQVRIDe1VS28SURQ+lxkKtfZBxESjGBsT3bh255YFpDbRpXHZH6C/oPEPsHCBCxfuu2kb0jZNV8RoLEZDkL4SlDa2TVqqBChQGBi/M2XgzhQIE1248CZ37uO8z3fuGUG2sbS0dIqrjZGRkcPR0VG/2+2+o+v6ZUxhY+13rAohDhVF+Vqr1T5AdvWC8MrKCu51AuMZGD8lEolvBwcHAWh199PcjdZoNLRisVjI5/O/1G4MMEIw5sF6b2dnZ3J3d/cahC441U1WvkM2jGO9XieXTLDvYcjt9XqHce/C3vFYW1sT4XBYqKoqhB0TpOsBFCucPh6cx2az2Tca9hgpoqOjI8pkMrS5uUlIN01PT1MymaS9vT0Sdky2t7dv7u/vK/DCjxCUk5MTUalUuqbY8ET6IL1UKpWMWa1WJQqRoQAK25ik02n/1tYWQeg8JKK+0cjaZExYpzwsnoII3nMAsbdyylI99sCEIpEIxWIxikaj/EyMUS6XcyogyACDSWDDhSGwb5GdL2yEMWF8Z2ZmLplOA8NbLozPMPIKar9jrThX35FYWFigbDZL7CxnRK46jugxCFkYfD0xMZHTNO0NRB2nrWOus5MjbFcdyNrQ0ND78fHx22g/N3BW4JTOlQRHHBnO5XI0OzvbsYidXHUc3f25uTnf+vq6iZXgfA86JEw4dRYxe9UpqBALh13AIm07yFUXCoU0k4y3VWdDVXjtbV06isBUZK4yJouLi4oUocJV9xZebwCHU1QdT1PO8dqv6lww8BQRncJgAvNjIBBoOLbQQ0COUCwvL+swAFv6mcfj+YIWdBW9bRJRctUZb6KHnp7XhUKB4vG4hY7+bfQ5LgAv3tBd/H+0VCol/nqvQyRGKfKKyFT8erkV8f/H4tEgB7nq5ufnf5gy0J3lqsthXsGBNfP7cW6hpVHGZGxsjH//7aEiiidQ/gzrFG655Cxvq805wIarrtdwBYPBd/g7PkdEUz6f7yXaz89ezH9yb0nT8fHxdbyjF4juETAaxrTQBzXEmKBnPhyU/z/fv5GB33oWqtz/+AV9AAAAAElFTkSuQmCC\" /></span>
    <strong>Doctrine Stats</strong>
    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 34) || twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 34))) {
            // line 35
            echo "        <span class=\"count\">
            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
            <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 40
        echo "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 43
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("panel", $this->getTemplateName(), 43));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "identicalQueriesCount", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
            <span class=\"label\">Identical Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "similarQueriesCount", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
            <span class=\"label\">Similar Queries</span>
        </div>
    </div>

    <h2>Identical Queries <br/><small>Queries with identical parameters</small></h2>

    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "identicalQueries", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["connection"] => $context["identicalQueries"]) {
            // line 60
            echo "        ";
            if ( !twig_test_empty($context["identicalQueries"])) {
                // line 61
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["identicalQueries"]);
                foreach ($context['_seq'] as $context["_key"] => $context["identicalQuery"]) {
                    // line 72
                    echo "                    <tr>
                        <td class=\"nowrap\">";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["identicalQuery"], "count", [], "any", false, false, false, 73), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 75
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["identicalQuery"], "sql", [], "any", false, false, false, 75), true);
                    echo "
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["identicalQuery"], "parameters", [], "any", false, false, false, 77)), "html", null, true);
                    echo "
                            </div>
                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identicalQuery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                </tbody>
            </table>
        ";
            }
            // line 85
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['identicalQueries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    <h2>Similar Queries <br/><small>Queries with different parameters</small></h2>

    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "similarQueries", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["connection"] => $context["similarQueries"]) {
            // line 90
            echo "        ";
            if ( !twig_test_empty($context["similarQueries"])) {
                // line 91
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["similarQueries"]);
                foreach ($context['_seq'] as $context["_key"] => $context["similarQuery"]) {
                    // line 102
                    echo "                    <tr>
                        <td class=\"nowrap\">";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["similarQuery"], "count", [], "any", false, false, false, 103), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 104
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["similarQuery"], "sql", [], "any", false, false, false, 104), true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similarQuery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                </tbody>
            </table>
        ";
            }
            // line 110
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['similarQueries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntity/Collector/duplicate_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 110,  331 => 107,  322 => 104,  318 => 103,  315 => 102,  311 => 101,  297 => 91,  294 => 90,  290 => 89,  285 => 86,  279 => 85,  274 => 82,  263 => 77,  258 => 75,  253 => 73,  250 => 72,  246 => 71,  232 => 61,  229 => 60,  225 => 59,  215 => 52,  208 => 48,  202 => 44,  189 => 43,  175 => 40,  169 => 37,  165 => 36,  162 => 35,  160 => 34,  154 => 30,  141 => 29,  127 => 26,  125 => 25,  122 => 24,  116 => 21,  109 => 17,  105 => 15,  103 => 14,  100 => 13,  94 => 10,  88 => 7,  85 => 6,  82 => 5,  79 => 4,  66 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.identicalQueriesCount > 0 or collector.similarQueriesCount > 0 %}
        {% set icon %}
            <img width=\"20\" height=\"28\" alt=\"Doctrine Stats\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADoUlEQVRIDe1VTUwTQRSe7XZrS39BDtZEj0oUPRhjojEcGwyGi4lXThz05NWDZ4/cuWAPxpumgVBSSsLFE8QE/AkFSdoGWhGatiy09Hf93qa7mdlurQaPTjJ5M2/e//tmRmJ9RjweX9c0bdXr9eb9fv+woii3sA9DTe6livOCJEk7Dofjc6PR+Ar6TeolbPCXlpbaUKxAMSvL8vu1tbVMLpe7jHPFkOlF2+12s1wuq8fHx2VnLyGODx+SF86ug3c3lUrdyGQyD2HEw8nYLpG9zkdWzGErITKbna2EEgy43e4QHPv+ZCaTSd/ExITP6XT6+jpCJm8RfR6GNUwafXWMOGdmZtjGxgaDDSb0yK7xrVbrNhSpTwFQ+eTkxFGpVAaw1h2enp6yo6Mjls/n2f7+vk7RE8OXSYUeIdo7OBmpVqvZer1OjY8BbWPYp+HgI87rBwcH92DoGhwLmSFrBjl2dnZmGucXgiMcUGmExiNaf61WI0iPYjZIGb0iuTZvyGg8+Gx2dvYTf4YK7FgdUeOJZzTeRYihSTxMFy1QTiLCSCQSjHqysLDApqenR+jQcA79ESF9RPxvGt9BJY86ISOkvY6yxBHMY9AQqB+TSiQEhH3XiMViXTwedYIjSL5EWZJwEh0cHFSBqBfYUzn1knVZ6sPgnQvw7jw3LZQwh4v5ZmhoiJ6el7hwVdhsY90CqtzFYvEiZGyz3NvbY3Nzc10hWDOCLYl4VwDXB9FotLG9vR0E6ugOaeA1MQkoZMgWdQScycnJLAkYQ1XVotWRhkM9Szi8AFjKHdQR77eoW1lZMVGHkg2TEw51w0L6KMcXzApkzvfc2KBO+FOmpqZUZFICADSXy/Vza2tLKRQKV7EXAqJorQOvOiuVSvq7Zpyhl/pbh69ChC2yeYYeqOjBIv6e1XA4/B1O9NtqKP8NJdSl02kGm/orYOqCcR8ZjYKRhoNF/KjV8fHxHfACcExZKeD7AA56pgTEGkYoeryRxtakAhhgkJQJYTebzeaP3d3d2ubm5iUEoH9ydI5s4VOmuyU44hrP5ufnP5gesEBQKcERGDoIQGDP4UHkCmzTJ2f+plQGmtaxvLxsoi4QCDy1ngtNhsEEBIpwpD/jlIBVodeef27sZISMYJjAMAb6BML04ZuZ2CnzPP654fnGWog4EomkcYvfIaPnoVDotcfjyRqC56VCQ3ljh4eHfjQ4At4jZOjH7CnL6yHIVDAYfMXz/q/PVYFfJewFJv3g478AAAAASUVORK5CYII=\" />
            <span class=\"sf-toolbar-value\">{{ collector.identicalQueriesCount }}</span>
            <span class=\"sf-toolbar-info-piece-additional\">
                <span class=\"sf-toolbar-lavel\">/</span>
                <span class=\"sf-toolbar-value\">{{ collector.similarQueriesCount }}</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Identical Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.identicalQueriesCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Similar Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.similarQueriesCount }}</span>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { link: profiler_url, status: status|default('') } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">
        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADD0lEQVRIDe1VS28SURQ+lxkKtfZBxESjGBsT3bh255YFpDbRpXHZH6C/oPEPsHCBCxfuu2kb0jZNV8RoLEZDkL4SlDa2TVqqBChQGBi/M2XgzhQIE1248CZ37uO8z3fuGUG2sbS0dIqrjZGRkcPR0VG/2+2+o+v6ZUxhY+13rAohDhVF+Vqr1T5AdvWC8MrKCu51AuMZGD8lEolvBwcHAWh199PcjdZoNLRisVjI5/O/1G4MMEIw5sF6b2dnZ3J3d/cahC441U1WvkM2jGO9XieXTLDvYcjt9XqHce/C3vFYW1sT4XBYqKoqhB0TpOsBFCucPh6cx2az2Tca9hgpoqOjI8pkMrS5uUlIN01PT1MymaS9vT0Sdky2t7dv7u/vK/DCjxCUk5MTUalUuqbY8ET6IL1UKpWMWa1WJQqRoQAK25ik02n/1tYWQeg8JKK+0cjaZExYpzwsnoII3nMAsbdyylI99sCEIpEIxWIxikaj/EyMUS6XcyogyACDSWDDhSGwb5GdL2yEMWF8Z2ZmLplOA8NbLozPMPIKar9jrThX35FYWFigbDZL7CxnRK46jugxCFkYfD0xMZHTNO0NRB2nrWOus5MjbFcdyNrQ0ND78fHx22g/N3BW4JTOlQRHHBnO5XI0OzvbsYidXHUc3f25uTnf+vq6iZXgfA86JEw4dRYxe9UpqBALh13AIm07yFUXCoU0k4y3VWdDVXjtbV06isBUZK4yJouLi4oUocJV9xZebwCHU1QdT1PO8dqv6lww8BQRncJgAvNjIBBoOLbQQ0COUCwvL+swAFv6mcfj+YIWdBW9bRJRctUZb6KHnp7XhUKB4vG4hY7+bfQ5LgAv3tBd/H+0VCol/nqvQyRGKfKKyFT8erkV8f/H4tEgB7nq5ufnf5gy0J3lqsthXsGBNfP7cW6hpVHGZGxsjH//7aEiiidQ/gzrFG655Cxvq805wIarrtdwBYPBd/g7PkdEUz6f7yXaz89ezH9yb0nT8fHxdbyjF4juETAaxrTQBzXEmKBnPhyU/z/fv5GB33oWqtz/+AV9AAAAAElFTkSuQmCC\" /></span>
    <strong>Doctrine Stats</strong>
    {% if collector.identicalQueriesCount or collector.similarQueriesCount %}
        <span class=\"count\">
            <span>{{ collector.identicalQueriesCount }}</span>
            <span>{{ collector.similarQueriesCount }}</span>
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.identicalQueriesCount }}</span>
            <span class=\"label\">Identical Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.similarQueriesCount }}</span>
            <span class=\"label\">Similar Queries</span>
        </div>
    </div>

    <h2>Identical Queries <br/><small>Queries with identical parameters</small></h2>

    {% for connection, identicalQueries in collector.identicalQueries %}
        {% if identicalQueries is not empty %}
            <h3>{{ connection }} <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                {% for identicalQuery in identicalQueries %}
                    <tr>
                        <td class=\"nowrap\">{{ identicalQuery.count }}</td>
                        <td>
                            {{ identicalQuery.sql|doctrine_pretty_query(highlight_only = true) }}
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ identicalQuery.parameters|yaml_encode }}
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Similar Queries <br/><small>Queries with different parameters</small></h2>

    {% for connection, similarQueries in collector.similarQueries %}
        {% if similarQueries is not empty %}
            <h3>{{ connection }} <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                {% for similarQuery in similarQueries %}
                    <tr>
                        <td class=\"nowrap\">{{ similarQuery.count }}</td>
                        <td>{{ similarQuery.sql|doctrine_pretty_query(highlight_only = true) }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor%}
{% endblock %}
", "@OroEntity/Collector/duplicate_queries.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Collector/duplicate_queries.html.twig");
    }
}
