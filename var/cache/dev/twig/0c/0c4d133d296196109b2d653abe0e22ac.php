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

/* @OroSales/Autocomplete/customer/result.html.twig */
class __TwigTemplate_bb7487c696daab743f5318e3cb51f69a extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Autocomplete/customer/result.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Autocomplete/customer/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Autocomplete/customer/result.html.twig"));

        // line 1
        echo "<% if (!_.isEmpty(obj.icon)) { %>
    <% if (icon.type === 'file-path') { %>
        <img src=\"<%- icon.data.path %>\" class=\"separated-img\">
    <% } else if (icon.type === 'icon') { %>
        <i class=\"<%- icon.data.class %> hide-text separated-img\"></i>
    <% } %>
<% } %>

<%= highlight(_.escape(text)) %>
<% if (typeof(label) !== \"undefined\") { %>
<span class=\"type\">(<%- label %>)</span>
<% } %>

<% if (typeof(matchValue) !== \"undefined\") { %>
    <div class=\"match-value\"><%= highlight(_.escape(matchValue)) %></div>
<% } %>

<% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.sales.form.add_new_customer', {'account': _.escape(context.account)}) %>)
    </span>
<% } %>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/Autocomplete/customer/result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<% if (!_.isEmpty(obj.icon)) { %>
    <% if (icon.type === 'file-path') { %>
        <img src=\"<%- icon.data.path %>\" class=\"separated-img\">
    <% } else if (icon.type === 'icon') { %>
        <i class=\"<%- icon.data.class %> hide-text separated-img\"></i>
    <% } %>
<% } %>

<%= highlight(_.escape(text)) %>
<% if (typeof(label) !== \"undefined\") { %>
<span class=\"type\">(<%- label %>)</span>
<% } %>

<% if (typeof(matchValue) !== \"undefined\") { %>
    <div class=\"match-value\"><%= highlight(_.escape(matchValue)) %></div>
<% } %>

<% if (id === null) { %>
    <span class=\"select2__result-entry-info\">
        (<%= _.__('oro.sales.form.add_new_customer', {'account': _.escape(context.account)}) %>)
    </span>
<% } %>
", "@OroSales/Autocomplete/customer/result.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Autocomplete/customer/result.html.twig");
    }
}
