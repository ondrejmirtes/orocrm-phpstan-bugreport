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

/* @OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig */
class __TwigTemplate_720c39217de874fa6c2febcb729e60e4 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig", 1)->unwrap();
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_activity_widget_marketing_activities", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "title" => "", "alias" => "marketing-activities-widget", "cssClass" => "list-widget activity-list-widget marketing-activities-list-widget standard-action-buttons"]);
        // line 12
        echo "
";
        $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_call_macro($macros["UI"], "macro_scrollSubblock", [null, [0 => (isset($context["widgetContent"]) || array_key_exists("widgetContent", $context) ? $context["widgetContent"] : (function () { throw new RuntimeError('Variable "widgetContent" does not exist.', 14, $this->source); })())]], 14, $context, $this->getSourceContext());
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 12,  53 => 7,  52 => 6,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set widgetContent %}
    {{ oro_widget_render({
        'widgetType': 'block',
        'url': path('oro_marketing_activity_widget_marketing_activities', {
            entityClass: oro_class_name(entity, true),
            entityId: entity.id
        }),
        'title': '',
        'alias': 'marketing-activities-widget',
        'cssClass': 'list-widget activity-list-widget marketing-activities-list-widget standard-action-buttons',
    }) }}
{% endset %}
{{ UI.scrollSubblock(null, [widgetContent]) }}
", "@OroMarketingActivity/MarketingActivity/marketingActivitiesSection.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingActivityBundle/Resources/views/MarketingActivity/marketingActivitiesSection.html.twig");
    }
}
