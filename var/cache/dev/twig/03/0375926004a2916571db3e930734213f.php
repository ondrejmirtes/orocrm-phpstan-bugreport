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

/* @OroSales/Dashboard/leadsLaunchpad.html.twig */
class __TwigTemplate_3b4271bb349b8621e85ca9be86f6976b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroDashboard/Dashboard/launchpad.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Dashboard/leadsLaunchpad.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Dashboard/leadsLaunchpad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Dashboard/leadsLaunchpad.html.twig"));

        // line 3
        $context["widgetName"] = "leads_launchpad";
        // line 4
        $context["widgetLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.entity_plural_label");
        // line 5
        $context["widgetIcon"] = "phone";
        // line 6
        $context["widgetAcl"] = "oro_sales_lead_view";
        // line 8
        $context["items"] = ["index" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.list"), "route" => "oro_sales_lead_index", "acl" => "oro_sales_lead_view"], "create" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.entity_label")]), "route" => "oro_sales_lead_create", "acl" => "oro_sales_lead_create"]];
        // line 1
        $this->parent = $this->loadTemplate("@OroDashboard/Dashboard/launchpad.html.twig", "@OroSales/Dashboard/leadsLaunchpad.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/Dashboard/leadsLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 1,  58 => 8,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroDashboard/Dashboard/launchpad.html.twig' %}

{% set widgetName = 'leads_launchpad' %}
{% set widgetLabel = 'oro.sales.lead.entity_plural_label'|trans %}
{% set widgetIcon = 'phone' %}
{% set widgetAcl = 'oro_sales_lead_view' %}

{% set items = {
    index: {
        label: 'oro.dashboard.list'|trans,
        route: 'oro_sales_lead_index',
        acl: 'oro_sales_lead_view'
    },
    create: {
        label: 'oro.ui.create_entity'|trans({'%entityName%': 'oro.sales.lead.entity_label'|trans}),
        route: 'oro_sales_lead_create',
        acl: 'oro_sales_lead_create'
    }
} %}
", "@OroSales/Dashboard/leadsLaunchpad.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Dashboard/leadsLaunchpad.html.twig");
    }
}
