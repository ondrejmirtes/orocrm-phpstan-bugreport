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

/* @OroActivityList/ActivityList/js/workflowTemplate.html.twig */
class __TwigTemplate_903521f8b43c8a74d536e2f906807311 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/ActivityList/js/workflowTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/workflowTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/workflowTemplate.html.twig"));

        // line 1
        echo "<% if (workflowsData && workflowsData.length > 0) { %>
    <% _.each(workflowsData, function(workflow) { %>
        <% if (workflow.transitionsData.length > 0) { %>
            <li role=\"separator\" class=\"dropdown-divider\">&nbsp;</li>
            <% _.each(workflow.transitionsData, function(transition) { %>
                <li class=\"activity-action\">
                    <a href=\"<%- transition.transitionUrl %>\" class=\"dropdown-item transition-item\"
                       id=\"transition-<%- workflow.name %>-<%- transition.name %>\"
                       data-transition-url=\"<%- transition.transitionUrl %>\"
                       data-transition-label=\"<%- transition.label %>\"
                       data-message=\"<%- transition.message %>\"
                       data-dialog-url=\"<%- transition.dialogUrl %>\"
                        <% if (transition.frontendOptions && transition.frontendOptions.dialog) { %>
                            data-dialog-options=\"<%- JSON.stringify(transition.frontendOptions.dialog) %>\"
                        <% } %>
                    >
                        <i class=\"<%- transition.frontendOptions && transition.frontendOptions.icon
                                ? transition.frontendOptions.icon
                                : 'icon-empty'
                            %> hide-text\"><%- transition.label %></i>
                        <%- transition.label %>
                    </a>
                </li>
            <% }) %>
        <% } %>
    <% }) %>
<% } %>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/ActivityList/js/workflowTemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<% if (workflowsData && workflowsData.length > 0) { %>
    <% _.each(workflowsData, function(workflow) { %>
        <% if (workflow.transitionsData.length > 0) { %>
            <li role=\"separator\" class=\"dropdown-divider\">&nbsp;</li>
            <% _.each(workflow.transitionsData, function(transition) { %>
                <li class=\"activity-action\">
                    <a href=\"<%- transition.transitionUrl %>\" class=\"dropdown-item transition-item\"
                       id=\"transition-<%- workflow.name %>-<%- transition.name %>\"
                       data-transition-url=\"<%- transition.transitionUrl %>\"
                       data-transition-label=\"<%- transition.label %>\"
                       data-message=\"<%- transition.message %>\"
                       data-dialog-url=\"<%- transition.dialogUrl %>\"
                        <% if (transition.frontendOptions && transition.frontendOptions.dialog) { %>
                            data-dialog-options=\"<%- JSON.stringify(transition.frontendOptions.dialog) %>\"
                        <% } %>
                    >
                        <i class=\"<%- transition.frontendOptions && transition.frontendOptions.icon
                                ? transition.frontendOptions.icon
                                : 'icon-empty'
                            %> hide-text\"><%- transition.label %></i>
                        <%- transition.label %>
                    </a>
                </li>
            <% }) %>
        <% } %>
    <% }) %>
<% } %>
", "@OroActivityList/ActivityList/js/workflowTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/ActivityList/js/workflowTemplate.html.twig");
    }
}
