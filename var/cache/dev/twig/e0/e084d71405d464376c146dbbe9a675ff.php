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

/* @OroSales/LeadAddress/widget/addressBook.html.twig */
class __TwigTemplate_9700f0dbbc62869da5021267fac9bada extends Template
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
        return "@OroAddress/widget/addressBook.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/LeadAddress/widget/addressBook.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/LeadAddress/widget/addressBook.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/LeadAddress/widget/addressBook.html.twig"));

        // line 2
        $context["addressListUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_lead_addresses", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]);
        // line 3
        $context["addressCreateUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_lead_address_create", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]);
        // line 4
        $context["addressUpdateRoute"] = "oro_sales_lead_address_update";
        // line 5
        $context["addressDeleteRoute"] = "oro_api_delete_lead_address";
        // line 6
        $context["ownerParam"] = "leadId";
        // line 1
        $this->parent = $this->loadTemplate("@OroAddress/widget/addressBook.html.twig", "@OroSales/LeadAddress/widget/addressBook.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/LeadAddress/widget/addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 1,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@OroAddress/widget/addressBook.html.twig\" %}
{% set addressListUrl = path('oro_api_get_lead_addresses', {'leadId': entity.id}) %}
{% set addressCreateUrl = path('oro_sales_lead_address_create', {'leadId': entity.id}) %}
{% set addressUpdateRoute = 'oro_sales_lead_address_update' %}
{% set addressDeleteRoute = 'oro_api_delete_lead_address' %}
{% set ownerParam = 'leadId' %}
", "@OroSales/LeadAddress/widget/addressBook.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/LeadAddress/widget/addressBook.html.twig");
    }
}
