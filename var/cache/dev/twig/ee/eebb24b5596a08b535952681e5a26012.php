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

/* @OroEmail/Js/default_templates.js.twig */
class __TwigTemplate_1779d8172b4cc73455fd409d41052738 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Js/default_templates.js.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Js/default_templates.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Js/default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%- label %><% } %><span class=\"filter-item-hint\"></span>
            <select multiple data-skip-input-widgets>
                <% _.each(options, function (item, key) { %>
                    <optgroup label=\"<%- key %>\">
                        <% _.each(item['choices']['folder']['choices'], function (option) { %>
                            <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                            <% if (_.isArray(selected.value)) { %>
                            <% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                            <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                            <%- option.label %>
                            </option>
                        <% }); %>
                    </optgroup>
                <% }); %>
            </select>
        </div>
    </div>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Js/default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%- label %><% } %><span class=\"filter-item-hint\"></span>
            <select multiple data-skip-input-widgets>
                <% _.each(options, function (item, key) { %>
                    <optgroup label=\"<%- key %>\">
                        <% _.each(item['choices']['folder']['choices'], function (option) { %>
                            <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                            <% if (_.isArray(selected.value)) { %>
                            <% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                            <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                            <%- option.label %>
                            </option>
                        <% }); %>
                    </optgroup>
                <% }); %>
            </select>
        </div>
    </div>
</script>
", "@OroEmail/Js/default_templates.js.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Js/default_templates.js.twig");
    }
}
