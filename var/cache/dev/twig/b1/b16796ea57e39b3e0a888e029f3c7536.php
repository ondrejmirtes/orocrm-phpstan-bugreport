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

/* @OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig */
class __TwigTemplate_34943f328d49775746f8f1473cfded3d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig"));

        // line 1
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content form-horizontal box-content\">
    ";
        // line 4
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities_summary", $context)) ? (_twig_default_filter((isset($context["view_content_data_marketing_activities_summary"]) || array_key_exists("view_content_data_marketing_activities_summary", $context) ? $context["view_content_data_marketing_activities_summary"] : (function () { throw new RuntimeError('Variable "view_content_data_marketing_activities_summary" does not exist.', 4, $this->source); })()), "view_content_data_marketing_activities_summary")) : ("view_content_data_marketing_activities_summary")), ["campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 4, $this->source); })()), "entityClass" => (isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 4, $this->source); })()), "entityId" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 4, $this->source); })())]);
        // line 5
        echo "</div>
<div class=\"marketing-activities-section-data-grid\">
    <h5>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.entity_plural_label"), "html", null, true);
        echo "</h5>
    ";
        // line 8
        $context["scope"] = twig_replace_filter("marketing-activity-campaign-%campaign%", ["%campaign%" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 8, $this->source); })())]);
        // line 9
        echo "    ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [$this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName("marketing-activity-section-data-grid",         // line 10
(isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 10, $this->source); })())), ["id" =>         // line 11
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 11, $this->source); })()), "entityClass" => (isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 11, $this->source); })()), "entityId" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 11, $this->source); })())]], 9, $context, $this->getSourceContext());
        // line 12
        echo "
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  67 => 11,  66 => 10,  64 => 9,  62 => 8,  58 => 7,  54 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

<div class=\"widget-content form-horizontal box-content\">
    {% placeholder view_content_data_marketing_activities_summary with {'campaignId': campaignId, 'entityClass': entityClass, 'entityId': entityId} %}
</div>
<div class=\"marketing-activities-section-data-grid\">
    <h5>{{ 'oro.marketingactivity.entity_plural_label'|trans }}</h5>
    {% set scope = 'marketing-activity-campaign-%campaign%'|replace({'%campaign%': campaignId}) %}
    {{ dataGrid.renderGrid(
        oro_datagrid_build_fullname('marketing-activity-section-data-grid', scope),
        {'id': campaignId, 'entityClass': entityClass, 'entityId': entityId})
    }}
</div>
", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingActivityBundle/Resources/views/MarketingActivity/widget/marketingActivitySectionItemInfo.html.twig");
    }
}
