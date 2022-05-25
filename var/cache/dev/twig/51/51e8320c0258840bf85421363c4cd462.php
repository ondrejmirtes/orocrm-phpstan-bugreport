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

/* @OroDataGrid/Grid/widget/widget.html.twig */
class __TwigTemplate_cdefd17873bda447463a01942d2f0633 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/Grid/widget/widget.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/Grid/widget/widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/Grid/widget/widget.html.twig"));

        // line 1
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroDataGrid/Grid/widget/widget.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $this->displayBlock('widget_content', $context, $blocks);
        // line 14
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_content", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 5
        echo "    <div class=\"flash-messages\">
        <div class=\"flash-messages-frame\">
            <div class=\"flash-messages-holder\"></div>
        </div>
    </div>
    <div class=\"filters-view-container\"></div>

    ";
        // line 12
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 12, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 12, $this->source); })()), twig_array_merge(["enableViews" => false, "enableToggleFilters" => false], (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 12, $this->source); })()))], 12, $context, $this->getSourceContext());
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDataGrid/Grid/widget/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  82 => 5,  69 => 4,  55 => 14,  53 => 4,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

<div class=\"widget-content\">
    {% block widget_content %}
    <div class=\"flash-messages\">
        <div class=\"flash-messages-frame\">
            <div class=\"flash-messages-holder\"></div>
        </div>
    </div>
    <div class=\"filters-view-container\"></div>

    {{ dataGrid.renderGrid(gridName, params, {'enableViews': false, 'enableToggleFilters': false}|merge(renderParams)) }}
    {% endblock %}
</div>
", "@OroDataGrid/Grid/widget/widget.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/Grid/widget/widget.html.twig");
    }
}
