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

/* @OroCase/Comment/js/view.html.twig */
class __TwigTemplate_4488f86aceaae760e1f5bed3ba13ceca extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCase/Comment/js/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Comment/js/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Comment/js/view.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html_attr");
        echo "\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"title-item\">
                <a href=\"#accordion-item<%- id %>\" class=\"no-hash accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
                <span class=\"visual\">
                    <% if (createdBy) { %>
                        <span class=\"avatar\">
                            <% if (createdBy.avatarPicture && createdBy.avatarPicture.src) { %>
                                <picture>
                                    <% _.each(createdBy.avatarPicture.sources, function(source) { %>
                                        <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
                                    <% }); %>
                                    <img src=\"<%- createdBy.avatarPicture.src %>\"/>
                                </picture>
                            <% } else { %>
                                <span class=\"avatar-placeholder\" aria-hidden=\"true\"></span>
                            <% } %>
                        </span>

                        <% if (createdBy.url) { %>
                            <a class=\"user\" href=\"<%- createdBy.url %>\"><%- createdBy.fullName %></a>
                        <% } else { %>
                            <span class=\"user\"><%- createdBy %></span>
                        <% } %>
                    <% } %>
                </span>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%- briefMessage %></div>
            </div>
            <div class=\"labels\">
                <% if (!public) { %>
                    <span class=\"label\"><%- _.__(\"oro.case.private\") %></span>
                <% } %>
            </div>
            <div class=\"details\">
                <span class=\"date\"><%- createdAt %></span>
            </div>
            <div class=\"actions\">
                <button class=\"btn btn-icon btn-lighter item-edit-button<% if (!permissions.edit) { %> disabled<% } %>\"
                    <% if (!permissions.edit) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.action.edit"), "html_attr");
        echo "\">
                        <span class=\"action-button-icon fa-pencil-square-o\" aria-label=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.action.edit"), "html");
        echo "\"></span>
                ";
        // line 45
        echo "                </button><button
                     class=\"btn btn-icon btn-lighter item-remove-button<% if (!permissions.delete) { %> disabled<% } %>\"
                     <% if (!permissions.delete) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.action.delete"), "html_attr");
        echo "\">
                        <span class=\"action-button-icon fa-trash-o\" aria-label=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.action.delete"), "html");
        echo "\"></span>
                </button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\" id=\"accordion-item<%- id %>\">
            <div class=\"message\">
                <%- message %>
                <% if (updatedBy) { %>
                <div class=\"details\">
                    <div>
                        <%= _.template(
                        ";
        // line 59
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.message.updated_by"));
        echo ",
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                        )({
                        user: updatedBy.url
                        ? '<a class=\"user\" href=\"' + updatedBy.url + '\">' + _.escape(updatedBy.fullName) + '</a>'
                        : (updatedBy ? '<i class=\"user\">' + _.escape(updatedBy) + '</i>' : ''),
                        date: '<span class=\"date\">' + updatedAt + '</span>'
                        }) %>
                    </div>
                </div>
                <% } %>
            </div>
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
        return "@OroCase/Comment/js/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  107 => 48,  103 => 47,  99 => 45,  95 => 43,  91 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" id=\"{{ id|e('html_attr')|raw }}\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"title-item\">
                <a href=\"#accordion-item<%- id %>\" class=\"no-hash accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
                <span class=\"visual\">
                    <% if (createdBy) { %>
                        <span class=\"avatar\">
                            <% if (createdBy.avatarPicture && createdBy.avatarPicture.src) { %>
                                <picture>
                                    <% _.each(createdBy.avatarPicture.sources, function(source) { %>
                                        <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
                                    <% }); %>
                                    <img src=\"<%- createdBy.avatarPicture.src %>\"/>
                                </picture>
                            <% } else { %>
                                <span class=\"avatar-placeholder\" aria-hidden=\"true\"></span>
                            <% } %>
                        </span>

                        <% if (createdBy.url) { %>
                            <a class=\"user\" href=\"<%- createdBy.url %>\"><%- createdBy.fullName %></a>
                        <% } else { %>
                            <span class=\"user\"><%- createdBy %></span>
                        <% } %>
                    <% } %>
                </span>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%- briefMessage %></div>
            </div>
            <div class=\"labels\">
                <% if (!public) { %>
                    <span class=\"label\"><%- _.__(\"oro.case.private\") %></span>
                <% } %>
            </div>
            <div class=\"details\">
                <span class=\"date\"><%- createdAt %></span>
            </div>
            <div class=\"actions\">
                <button class=\"btn btn-icon btn-lighter item-edit-button<% if (!permissions.edit) { %> disabled<% } %>\"
                    <% if (!permissions.edit) { %> disabled=\"disabled\"<% } %> title=\"{{ 'oro.case.casecomment.action.edit'|trans|e('html_attr')|raw }}\">
                        <span class=\"action-button-icon fa-pencil-square-o\" aria-label=\"{{ 'oro.case.casecomment.action.edit'|trans|e('html')|raw }}\"></span>
                {# Deleted extra space between elements #}
                </button><button
                     class=\"btn btn-icon btn-lighter item-remove-button<% if (!permissions.delete) { %> disabled<% } %>\"
                     <% if (!permissions.delete) { %> disabled=\"disabled\"<% } %> title=\"{{ 'oro.case.casecomment.action.delete'|trans|e('html_attr')|raw }}\">
                        <span class=\"action-button-icon fa-trash-o\" aria-label=\"{{ 'oro.case.casecomment.action.delete'|trans|e('html')|raw }}\"></span>
                </button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\" id=\"accordion-item<%- id %>\">
            <div class=\"message\">
                <%- message %>
                <% if (updatedBy) { %>
                <div class=\"details\">
                    <div>
                        <%= _.template(
                        {{ 'oro.case.casecomment.message.updated_by'|trans|json_encode|raw }},
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                        )({
                        user: updatedBy.url
                        ? '<a class=\"user\" href=\"' + updatedBy.url + '\">' + _.escape(updatedBy.fullName) + '</a>'
                        : (updatedBy ? '<i class=\"user\">' + _.escape(updatedBy) + '</i>' : ''),
                        date: '<span class=\"date\">' + updatedAt + '</span>'
                        }) %>
                    </div>
                </div>
                <% } %>
            </div>
        </div>
    </div>
</script>
", "@OroCase/Comment/js/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/CaseBundle/Resources/views/Comment/js/view.html.twig");
    }
}
