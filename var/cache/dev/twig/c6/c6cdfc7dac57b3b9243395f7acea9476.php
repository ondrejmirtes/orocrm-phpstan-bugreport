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

/* @OroFilter/Js/embedded_templates.js.twig */
class __TwigTemplate_23edb54fb28a79736d93cc600e42dfe5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroFilter/Js/embedded_templates.js.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroFilter/Js/embedded_templates.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroFilter/Js/embedded_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"none-filter-template-embedded\">
</script>
<script type=\"text/template\" id=\"text-filter-template-embedded\">
    <input type=\"text\" name=\"value\" value=\"\"/>
</script>
<script type=\"text/template\" id=\"choice-filter-template-embedded\">
    <% var togglerId = _.uniqueId('dropdown-') %>
    <span> <%- _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a id=\"<%- togglerId %>\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
            aria-label=\"<%- _.__('Filter criteria') %>\"
            aria-haspopup=\"true\" aria-expanded=\"false\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%- option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input type=\"text\" name=\"value\" value=\"<%- value %>\">
        <input class=\"name_input\" type=\"hidden\" name=\"<%- name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"select-field-template-embedded\">
    <div class=\"dropdown\">
        <% if (choices.length > 1) { %>
            <a class=\"dropdown-toggle\"
               <% if (typeof selectedChoiceTooltip !== 'undefined') { %>
                   title=\"<%- selectedChoiceTooltip %>\"
               <% } %>
               data-toggle=\"dropdown\" href=\"#\">
               <%- selectedChoiceLabel %>
            </a>
        <% } else { %>
            <span><%- selectedChoiceLabel %></span>
        <% } %>
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
            <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                <a class=\"choice-value\"
                   <% if (option.tooltip) { %> title=\"<%- option.tooltip %>\"<% } %>
                   href=\"#\" data-value=\"<%- option.value %>\">
                   <%- option.label %>
                </a>
            </li>
            <% }); %>
        </ul>
        <select name=\"<%- name %>\" class=\"filter-select-oro name_input\" style=\"display:none\">
            <% _.each(choices, function (option) { %>
            <option value=\"<%- option.value %>\"<% if (option.value == selectedChoice) { %> selected=\"selected\"<% } %>><%- option.label %></option>
            <% }); %>
        </select>
    </div>
</script>

<script type=\"text/template\" id=\"date-filter-template-embedded\">
    <% if (obj.popoverContent) { %>
    <div class=\"field-condition-date-popover\">
        <i class=\"fa-info-circle\" data-content=\"<%- popoverContent %>\" data-placement=\"bottom\" data-toggle=\"popover\"></i>
    </div>
    <% } %>
    <span> <%- _.__('oro.filter.embedded.date.field_to_value') %> </span>
    <%= parts.join('') %>:
    <div></div>
    <div class=\"filter-start-date\">
        <input type=\"text\" class=\"<%- inputClass %>\"
               value=\"<%- value.value.start %>\" name=\"start\" placeholder=\"<%- _.__('from') %>\">
    </div>
    <span class=\"filter-separator\">-</span>
    <div class=\"filter-end-date\">
        <input type=\"text\" class=\"<%- inputClass %>\"
               value=\"<%- value.value.end %>\" name=\"end\" placeholder=\"<%- _.__('to') %>\">
    </div>
</script>

<script type=\"text/template\" id=\"select-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%- _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select data-skip-input-widgets>
                <% _.each(options, function (option) { %>
                <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                    <% if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"multiselect-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%- _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select multiple data-skip-input-widgets>
                <% _.each(options, function (option) { %>
                <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                    <% if (_.isArray(selected.value)) { %><% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                    <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"dictionary-filter-template-embedded\">
    <span> <%- _.__('oro.filter.embedded.choice.field_to_value') %></span><%= parts.join('') %>:
    <input type=\"hidden\" name=\"select-values-autocomplete\" class=\"select-values-autocomplete hide\" value=\"\" />
    <input class=\"name_input\" type=\"hidden\" name=\"<%- name %>\" value=\"<%- selectedChoice %>\"/>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroFilter/Js/embedded_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/template\" id=\"none-filter-template-embedded\">
</script>
<script type=\"text/template\" id=\"text-filter-template-embedded\">
    <input type=\"text\" name=\"value\" value=\"\"/>
</script>
<script type=\"text/template\" id=\"choice-filter-template-embedded\">
    <% var togglerId = _.uniqueId('dropdown-') %>
    <span> <%- _.__('oro.filter.embedded.choice.field_to_value') %> </span>
    <div class=\"dropdown\">
        <a id=\"<%- togglerId %>\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
            aria-label=\"<%- _.__('Filter criteria') %>\"
            aria-haspopup=\"true\" aria-expanded=\"false\"><%- selectedChoiceLabel %></a>:
        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
            <% _.each(choices, function (option) { %>
                <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                    <a class=\"choice-value\" href=\"#\" data-value=\"<%- option.value %>\"><%- option.label %></a>
                </li>
            <% }); %>
        </ul>
        <input type=\"text\" name=\"value\" value=\"<%- value %>\">
        <input class=\"name_input\" type=\"hidden\" name=\"<%- name %>\" value=\"<%- selectedChoice %>\"/>
    </div>
</script>

<script type=\"text/template\" id=\"select-field-template-embedded\">
    <div class=\"dropdown\">
        <% if (choices.length > 1) { %>
            <a class=\"dropdown-toggle\"
               <% if (typeof selectedChoiceTooltip !== 'undefined') { %>
                   title=\"<%- selectedChoiceTooltip %>\"
               <% } %>
               data-toggle=\"dropdown\" href=\"#\">
               <%- selectedChoiceLabel %>
            </a>
        <% } else { %>
            <span><%- selectedChoiceLabel %></span>
        <% } %>
        <ul class=\"dropdown-menu\">
            <% _.each(choices, function (option) { %>
            <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                <a class=\"choice-value\"
                   <% if (option.tooltip) { %> title=\"<%- option.tooltip %>\"<% } %>
                   href=\"#\" data-value=\"<%- option.value %>\">
                   <%- option.label %>
                </a>
            </li>
            <% }); %>
        </ul>
        <select name=\"<%- name %>\" class=\"filter-select-oro name_input\" style=\"display:none\">
            <% _.each(choices, function (option) { %>
            <option value=\"<%- option.value %>\"<% if (option.value == selectedChoice) { %> selected=\"selected\"<% } %>><%- option.label %></option>
            <% }); %>
        </select>
    </div>
</script>

<script type=\"text/template\" id=\"date-filter-template-embedded\">
    <% if (obj.popoverContent) { %>
    <div class=\"field-condition-date-popover\">
        <i class=\"fa-info-circle\" data-content=\"<%- popoverContent %>\" data-placement=\"bottom\" data-toggle=\"popover\"></i>
    </div>
    <% } %>
    <span> <%- _.__('oro.filter.embedded.date.field_to_value') %> </span>
    <%= parts.join('') %>:
    <div></div>
    <div class=\"filter-start-date\">
        <input type=\"text\" class=\"<%- inputClass %>\"
               value=\"<%- value.value.start %>\" name=\"start\" placeholder=\"<%- _.__('from') %>\">
    </div>
    <span class=\"filter-separator\">-</span>
    <div class=\"filter-end-date\">
        <input type=\"text\" class=\"<%- inputClass %>\"
               value=\"<%- value.value.end %>\" name=\"end\" placeholder=\"<%- _.__('to') %>\">
    </div>
</script>

<script type=\"text/template\" id=\"select-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%- _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select data-skip-input-widgets>
                <% _.each(options, function (option) { %>
                <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                    <% if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"multiselect-filter-template-embedded\">
    <div class=\"filter-item\">
        <span> <%- _.__('oro.filter.embedded.select.field_to_value') %> </span>
        <div class=\"filter-select filter-criteria-selector\">
            <select multiple data-skip-input-widgets>
                <% _.each(options, function (option) { %>
                <option value=\"<%- option.value %>\" title=\"<%- option.label %>\"
                    <% if (_.isArray(selected.value)) { %><% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                    <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"dictionary-filter-template-embedded\">
    <span> <%- _.__('oro.filter.embedded.choice.field_to_value') %></span><%= parts.join('') %>:
    <input type=\"hidden\" name=\"select-values-autocomplete\" class=\"select-values-autocomplete hide\" value=\"\" />
    <input class=\"name_input\" type=\"hidden\" name=\"<%- name %>\" value=\"<%- selectedChoice %>\"/>
</script>
", "@OroFilter/Js/embedded_templates.js.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/FilterBundle/Resources/views/Js/embedded_templates.js.twig");
    }
}
