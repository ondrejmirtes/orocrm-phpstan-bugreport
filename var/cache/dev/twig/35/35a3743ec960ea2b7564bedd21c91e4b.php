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

/* @OroDashboard/Dashboard/bigNumberSubwidget.html.twig */
class __TwigTemplate_58ff087e7c20c9f296778d51e18eba64 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Dashboard/bigNumberSubwidget.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/bigNumberSubwidget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/bigNumberSubwidget.html.twig"));

        // line 1
        $context["itemTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "label", [], "any", false, false, false, 1));
        // line 2
        echo "<span class=\"title\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["itemTitle"]) || array_key_exists("itemTitle", $context) ? $context["itemTitle"] : (function () { throw new RuntimeError('Variable "itemTitle" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["itemTitle"]) || array_key_exists("itemTitle", $context) ? $context["itemTitle"] : (function () { throw new RuntimeError('Variable "itemTitle" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</span>
<h3 class=\"value\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "html", null, true);
        echo "</h3>
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, true, false, 4), "deviation", [], "any", true, true, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, true, false, 4), "previousRange", [], "any", true, true, false, 4))) {
            // line 5
            echo "<div class=\"deviation\">
    <span class=\"deviation ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, true, false, 6), "isPositive", [], "any", true, true, false, 6)) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), "isPositive", [], "any", false, false, false, 6)) {
                    echo "positive";
                } else {
                    echo "negative";
                }
            }
            echo "\">
        ";
            // line 7
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7), "deviation", [], "any", false, false, false, 7))) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.widget.big_number.no_changes"), "html", null, true);
                echo "
        ";
            } else {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "deviation", [], "any", false, false, false, 10), "html", null, true);
                echo "
        ";
            }
            // line 12
            echo "    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.widget.big_number.compare_to.label"), "html", null, true);
            echo ":
    </span>
    ";
            // line 18
            $context["range"] = $this->extensions['Oro\Bundle\DashboardBundle\Twig\DashboardExtension']->getViewValue(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), "previousRange", [], "any", false, false, false, 18));
            // line 19
            echo "    <span class=\"date-range\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 19, $this->source); })()), "html", null, true);
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
        return "@OroDashboard/Dashboard/bigNumberSubwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  99 => 18,  94 => 16,  88 => 12,  82 => 10,  76 => 8,  74 => 7,  64 => 6,  61 => 5,  59 => 4,  55 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set itemTitle = item.label|trans %}
<span class=\"title\" title=\"{{ itemTitle }}\">{{ itemTitle }}</span>
<h3 class=\"value\">{{ item.value.value }}</h3>
{% if item.value.deviation is defined and item.value.previousRange is defined %}
<div class=\"deviation\">
    <span class=\"deviation {% if item.value.isPositive is defined %}{% if item.value.isPositive %}positive{% else %}negative{% endif %}{% endif %}\">
        {% if item.value.deviation is empty %}
            {{ 'oro.dashboard.widget.big_number.no_changes'|trans }}
        {% else %}
            {{ item.value.deviation }}
        {% endif %}
    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        {{ 'oro.dashboard.widget.big_number.compare_to.label'|trans }}:
    </span>
    {% set range = oro_filter_date_range_view(item.value.previousRange) %}
    <span class=\"date-range\" title=\"{{ range }}\">{{ range }}</span>
</div>
{% endif %}
", "@OroDashboard/Dashboard/bigNumberSubwidget.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/bigNumberSubwidget.html.twig");
    }
}
