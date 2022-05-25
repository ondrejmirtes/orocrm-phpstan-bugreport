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

/* @OroCampaign/Campaign/widget/view.html.twig */
class __TwigTemplate_1a27131823f5793c25b5ebed172291c3 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/Campaign/widget/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Campaign/widget/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Campaign/widget/view.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/Campaign/widget/view.html.twig", 1)->unwrap();
        // line 2
        $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroCampaign/Campaign/widget/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCampaign/Campaign/widget/view.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        // line 9
        ob_start();
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "code", [], "any", false, false, false, 10), "html", null, true);
        echo "
                ";
        // line 11
        if ( !twig_test_empty((isset($context["codes_history"]) || array_key_exists("codes_history", $context) ? $context["codes_history"] : (function () { throw new RuntimeError('Variable "codes_history" does not exist.', 11, $this->source); })()))) {
            echo " (";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["codes_history"]) || array_key_exists("codes_history", $context) ? $context["codes_history"] : (function () { throw new RuntimeError('Variable "codes_history" does not exist.', 11, $this->source); })()), ", "), "html", null, true);
            echo ") ";
            echo twig_call_macro($macros["ui"], "macro_tooltip", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.code.tooltip")], 11, $context, $this->getSourceContext());
        }
        $context["codesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.code.label"), (isset($context["codesData"]) || array_key_exists("codesData", $context) ? $context["codesData"] : (function () { throw new RuntimeError('Variable "codesData" does not exist.', 13, $this->source); })()), null, null, ["dir" => "ltr"]], 13, $context, $this->getSourceContext());
        echo "
            ";
        // line 14
        echo twig_call_macro($macros["ui"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 18
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.budget.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "budget", [], "any", false, false, false, 18))], 18, $context, $this->getSourceContext());
        echo "
            ";
        // line 19
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.start_date.label"), ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "startDate", [], "any", false, false, false, 19))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")) : ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "startDate", [], "any", false, false, false, 19))))], 19, $context, $this->getSourceContext());
        echo "
            ";
        // line 20
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.end_date.label"), ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "endDate", [], "any", false, false, false, 20))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")) : ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "endDate", [], "any", false, false, false, 20))))], 20, $context, $this->getSourceContext());
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.report_period.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("oro.campaign.report_period." . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "reportPeriod", [], "any", false, false, false, 21)))], 21, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 25
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCampaign/Campaign/widget/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  78 => 14,  74 => 13,  66 => 11,  62 => 10,  60 => 9,  58 => 8,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEmail/macros.html.twig' as email %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.campaign.name.label'|trans, entity.name) }}
            {%- set codesData -%}
                {{ entity.code }}
                {% if codes_history is not empty %} ({{ codes_history|join(', ') }}) {{ ui.tooltip('oro.campaign.code.tooltip'|trans) }}{% endif %}
            {%- endset -%}
            {{ ui.renderHtmlProperty('oro.campaign.code.label'|trans, codesData, null, null, {'dir': 'ltr'}) }}
            {{ ui.renderSwitchableHtmlProperty('oro.campaign.description.label'|trans, entity.description) }}
        </div>

        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.campaign.budget.label'|trans, entity.budget|oro_format_currency) }}
            {{ ui.renderProperty('oro.campaign.start_date.label'|trans, entity.startDate is empty ? 'N/A'|trans : entity.startDate|oro_format_date) }}
            {{ ui.renderProperty('oro.campaign.end_date.label'|trans, entity.endDate is empty ? 'N/A'|trans : entity.endDate|oro_format_date) }}
            {{ ui.renderProperty('oro.campaign.report_period.label'|trans, ('oro.campaign.report_period.' ~ entity.reportPeriod)|trans) }}
        </div>

        <div class=\"responsive-block\">
            {{ entityConfig.renderDynamicFields(entity) }}
        </div>
    </div>
</div>
", "@OroCampaign/Campaign/widget/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/Campaign/widget/view.html.twig");
    }
}
