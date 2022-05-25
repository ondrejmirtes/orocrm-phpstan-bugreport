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

/* @OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig */
class __TwigTemplate_47269b2bc2fa0dfc065dba77f7ac7d46 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig"));

        // line 1
        $this->loadTemplate("@OroSales/Dashboard/forecastOfOpportunitiesSimpleSubwidget.html.twig", "@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig", 1)->display($context);
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, true, false, 2), "deviation", [], "any", true, true, false, 2)) {
            // line 3
            echo "<div class=\"deviation\">
    <span class=\"deviation ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, true, false, 4), "isPositive", [], "any", true, true, false, 4)) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4), "isPositive", [], "any", false, false, false, 4)) {
                    echo "positive";
                } else {
                    echo "negative";
                }
            }
            echo "\">
        ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5), "deviation", [], "any", false, false, false, 5), "html", null, true);
            echo "
    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.dashboard.forecast_of_opportunities.compare_to"), "html", null, true);
            echo ":
    </span>
    <span class=\"date-range\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "value", [], "any", false, false, false, 12), "previousRange", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
</div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  71 => 10,  63 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@OroSales/Dashboard/forecastOfOpportunitiesSimpleSubwidget.html.twig' %}
{% if item.value.deviation is defined %}
<div class=\"deviation\">
    <span class=\"deviation {% if item.value.isPositive is defined %}{% if item.value.isPositive %}positive{% else %}negative{% endif %}{% endif %}\">
        {{ item.value.deviation }}
    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        {{ 'oro.sales.dashboard.forecast_of_opportunities.compare_to'|trans }}:
    </span>
    <span class=\"date-range\">{{ item.value.previousRange }}</span>
</div>
{% endif %}
", "@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Dashboard/forecastOfOpportunitiesSubwidget.html.twig");
    }
}
