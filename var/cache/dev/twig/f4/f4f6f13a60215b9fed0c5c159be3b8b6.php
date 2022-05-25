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

/* @OroDashboard/Js/items.html.twig */
class __TwigTemplate_2a96e1b67246c8e2d862a20ab2cadb46 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Js/items.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Js/items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Js/items.html.twig"));

        // line 1
        echo "<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%- item.get('id') %>\"><%- item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr class=\"widget-items-item-row\" data-cid=\"<%- cid %>\">
        <td><%- label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%- namePrefix %>[id]\" value=\"<%- id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%- namePrefix %>[order]\" value=\"<%- order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%- namePrefix %>[show]\" <%- show ? 'checked' : '' %>>
            <% if (_.isMobile()) { %>
            <span class=\"btn btn-icon delete-button\" data-collection-action=\"delete\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.move_column_up.label"), "html", null, true);
        echo "\" aria-hidden=\"true\">
                <i class=\"fa-trash-o\"></i>
            </span>
            <span class=\"btn btn-icon move-up<% if (isFirst) { %> disabled<% } %>\" data-collection-action=\"moveUp\" title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.move_column_up.label"), "html", null, true);
        echo "\" aria-hidden=\"true\">
                <i class=\"fa-chevron-up\"></i>
            </span>
            <span class=\"btn btn-icon move-down<% if (isLast) { %> disabled<% } %>\" data-collection-action=\"moveDown\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.move_column_down.label"), "html", null, true);
        echo "\" aria-hidden=\"true\">
                <i class=\"fa-chevron-down\"></i>
            </span>
            <% } else { %>
            <a href=\"#\" role=\"button\" class=\"action btn-icon no-hash delete-button\"
               title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.delete.label"), "html", null, true);
        echo "\"
               data-collection-action=\"delete\"
               aria-hidden=\"true\">
                <i class=\"fa-trash-o hide-text\"></i>
            </a>
            <span class=\"btn-icon\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.move_column.label"), "html", null, true);
        echo "\" aria-hidden=\"true\">
                <i class=\"fa-arrows-v handle\"></i>
            </span>
            <% } %>
        </td>
    </tr>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Js/items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  87 => 31,  79 => 26,  73 => 23,  67 => 20,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%- item.get('id') %>\"><%- item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr class=\"widget-items-item-row\" data-cid=\"<%- cid %>\">
        <td><%- label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%- namePrefix %>[id]\" value=\"<%- id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%- namePrefix %>[order]\" value=\"<%- order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%- namePrefix %>[show]\" <%- show ? 'checked' : '' %>>
            <% if (_.isMobile()) { %>
            <span class=\"btn btn-icon delete-button\" data-collection-action=\"delete\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_up.label'|trans }}\" aria-hidden=\"true\">
                <i class=\"fa-trash-o\"></i>
            </span>
            <span class=\"btn btn-icon move-up<% if (isFirst) { %> disabled<% } %>\" data-collection-action=\"moveUp\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_up.label'|trans }}\" aria-hidden=\"true\">
                <i class=\"fa-chevron-up\"></i>
            </span>
            <span class=\"btn btn-icon move-down<% if (isLast) { %> disabled<% } %>\" data-collection-action=\"moveDown\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column_down.label'|trans }}\" aria-hidden=\"true\">
                <i class=\"fa-chevron-down\"></i>
            </span>
            <% } else { %>
            <a href=\"#\" role=\"button\" class=\"action btn-icon no-hash delete-button\"
               title=\"{{ 'oro.dashboard.datagrid.actions.delete.label'|trans }}\"
               data-collection-action=\"delete\"
               aria-hidden=\"true\">
                <i class=\"fa-trash-o hide-text\"></i>
            </a>
            <span class=\"btn-icon\" title=\"{{ 'oro.dashboard.datagrid.actions.move_column.label'|trans }}\" aria-hidden=\"true\">
                <i class=\"fa-arrows-v handle\"></i>
            </span>
            <% } %>
        </td>
    </tr>
</script>
", "@OroDashboard/Js/items.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Js/items.html.twig");
    }
}
