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

/* @OroUI/page_title_block.html.twig */
class __TwigTemplate_8ce4c674877486d8c726cdb92641fe88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/page_title_block.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/page_title_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/page_title_block.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        if (array_key_exists("title", $context)) {
            // line 3
            echo "        <div class=\"pull-left-extra\">
            <h1 class=\"page-title__entity-title\">";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "</h1>
        </div>
    ";
        }
        // line 7
        echo "    ";
        if ((array_key_exists("titleButtonsBlock", $context) &&  !twig_test_empty(twig_trim_filter((isset($context["titleButtonsBlock"]) || array_key_exists("titleButtonsBlock", $context) ? $context["titleButtonsBlock"] : (function () { throw new RuntimeError('Variable "titleButtonsBlock" does not exist.', 7, $this->source); })()))))) {
            // line 8
            echo "        <div class=\"pull-right title-buttons-container\">
            ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["titleButtonsBlock"]) || array_key_exists("titleButtonsBlock", $context) ? $context["titleButtonsBlock"] : (function () { throw new RuntimeError('Variable "titleButtonsBlock" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "</div>
<div class=\"row inline-info\">
    ";
        // line 14
        if ((array_key_exists("pageStatsBlock", $context) &&  !twig_test_empty(twig_trim_filter((isset($context["pageStatsBlock"]) || array_key_exists("pageStatsBlock", $context) ? $context["pageStatsBlock"] : (function () { throw new RuntimeError('Variable "pageStatsBlock" does not exist.', 14, $this->source); })()))))) {
            // line 15
            echo "    <div class=\"pull-left-extra\">
        <div class=\"clearfix\">
            <ul class=\"inline\">
                ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["pageStatsBlock"]) || array_key_exists("pageStatsBlock", $context) ? $context["pageStatsBlock"] : (function () { throw new RuntimeError('Variable "pageStatsBlock" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "
            </ul>
        </div>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((array_key_exists("pageActionsBlock", $context) &&  !twig_test_empty(twig_trim_filter((isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 23, $this->source); })()))))) {
            // line 24
            echo "    <div class=\"pull-right page-title__entity-info-state\">
        <div class=\"inline-decorate-container\">
            <ul class=\"inline-decorate\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["pageActionsBlock"]) || array_key_exists("pageActionsBlock", $context) ? $context["pageActionsBlock"] : (function () { throw new RuntimeError('Variable "pageActionsBlock" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "
            </ul>
        </div>
    </div>
    ";
        }
        // line 32
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/page_title_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  99 => 27,  94 => 24,  91 => 23,  83 => 18,  78 => 15,  76 => 14,  72 => 12,  66 => 9,  63 => 8,  60 => 7,  54 => 4,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    {% if title is defined %}
        <div class=\"pull-left-extra\">
            <h1 class=\"page-title__entity-title\">{{ title }}</h1>
        </div>
    {% endif %}
    {% if titleButtonsBlock is defined and titleButtonsBlock|trim is not empty %}
        <div class=\"pull-right title-buttons-container\">
            {{ titleButtonsBlock }}
        </div>
    {% endif %}
</div>
<div class=\"row inline-info\">
    {% if pageStatsBlock is defined and pageStatsBlock|trim is not empty %}
    <div class=\"pull-left-extra\">
        <div class=\"clearfix\">
            <ul class=\"inline\">
                {{ pageStatsBlock }}
            </ul>
        </div>
    </div>
    {% endif %}
    {% if pageActionsBlock is defined and pageActionsBlock|trim is not empty %}
    <div class=\"pull-right page-title__entity-info-state\">
        <div class=\"inline-decorate-container\">
            <ul class=\"inline-decorate\">
                {{ pageActionsBlock }}
            </ul>
        </div>
    </div>
    {% endif %}
</div>
", "@OroUI/page_title_block.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/page_title_block.html.twig");
    }
}
