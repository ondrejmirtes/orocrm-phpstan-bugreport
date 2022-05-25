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

/* @OroNote/Note/js/view.html.twig */
class __TwigTemplate_f86df9aec29dcc1a17026c8bb0954030 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/js/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/js/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/js/view.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html_attr");
        echo "\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"title-item\">
                <a href=\"#accordion-item<%- id %>\" class=\"no-hash accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
                <span class=\"visual\">
                    <% if (createdBy_avatarPicture and createdBy_avatarPicture.src) { %>
                        <span class=\"avatar\">
                            <picture>
                                <% _.each(typeof createdBy_avatarPicture.sources !== 'undefined' && createdBy_avatarPicture.sources ? createdBy_avatarPicture.sources : [], function(source) { %>
                                    <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
                                <% }); %>
                                <img src=\"<%- createdBy_avatarPicture.src %>\"/>
                            </picture>
                        </span>
                    <% } else { %>
                        <span class=\"avatar-placeholder fa-user-circle\" aria-hidden=\"true\"></span>
                    <% } %>

                    <% if (createdBy_url) { %>
                        <a class=\"user\" href=\"<%- createdBy_url %>\"><%- createdBy %></a>
                    <% } else if (createdBy) { %>
                        <span class=\"user\"><%- createdBy %></span>
                    <% } %>
                </span>
                <span class=\"details\">
                    <i class=\"date\"><%- createdAt %></i>
                </span>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%- brief_message %></div>
            </div>
            <div class=\"actions\">
                <button class=\"btn btn-icon btn-lighter item-edit-button<% if (!editable) { %> disabled<% } %>\"
                    <% if (!editable) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.action.edit"), "html_attr");
        echo "\">
                        <span class=\"fa-pencil-square-o\" aria-label=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.action.edit"), "html");
        echo "\"></span>
                ";
        // line 38
        echo "                </button><button
                    class=\"btn btn-icon btn-lighter item-remove-button<% if (!removable) { %> disabled<% } %>\"
                    <% if (!removable) { %> disabled=\"disabled\"<% } %> title=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.action.remove"), "html_attr");
        echo "\">
                        <span class=\"fa-trash-o\" aria-label=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.action.remove"), "html");
        echo "\"></span>
                </button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%- id %>\">
            <div class=\"message\">
                <%= message %>
            </div>
            <% if (hasUpdate) { %>
            <div class=\"details\">
                <div>
                    <%= _.template(
                        ";
        // line 53
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.widget_updated_by"));
        echo ",
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                    )({
                        user: updatedBy_url
                            ? '<a class=\"user\" href=\"' + updatedBy_url + '\">' +  _.escape(updatedBy) + '</a>'
                            : '<i class=\"user\">' +  _.escape(updatedBy) + '</i>',
                        date: '<i class=\"date\">' + updatedAt + '</i>'
                    }) %>
                </div>
            </div>
            <% } %>
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
        return "@OroNote/Note/js/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  100 => 41,  96 => 40,  92 => 38,  88 => 36,  84 => 35,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" id=\"{{ id|e('html_attr')|raw }}\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"title-item\">
                <a href=\"#accordion-item<%- id %>\" class=\"no-hash accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
                <span class=\"visual\">
                    <% if (createdBy_avatarPicture and createdBy_avatarPicture.src) { %>
                        <span class=\"avatar\">
                            <picture>
                                <% _.each(typeof createdBy_avatarPicture.sources !== 'undefined' && createdBy_avatarPicture.sources ? createdBy_avatarPicture.sources : [], function(source) { %>
                                    <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
                                <% }); %>
                                <img src=\"<%- createdBy_avatarPicture.src %>\"/>
                            </picture>
                        </span>
                    <% } else { %>
                        <span class=\"avatar-placeholder fa-user-circle\" aria-hidden=\"true\"></span>
                    <% } %>

                    <% if (createdBy_url) { %>
                        <a class=\"user\" href=\"<%- createdBy_url %>\"><%- createdBy %></a>
                    <% } else if (createdBy) { %>
                        <span class=\"user\"><%- createdBy %></span>
                    <% } %>
                </span>
                <span class=\"details\">
                    <i class=\"date\"><%- createdAt %></i>
                </span>
            </div>
            <div class=\"message-item\">
                <div class=\"message\"><%- brief_message %></div>
            </div>
            <div class=\"actions\">
                <button class=\"btn btn-icon btn-lighter item-edit-button<% if (!editable) { %> disabled<% } %>\"
                    <% if (!editable) { %> disabled=\"disabled\"<% } %> title=\"{{ 'oro.note.action.edit'|trans|e('html_attr')|raw }}\">
                        <span class=\"fa-pencil-square-o\" aria-label=\"{{ 'oro.note.action.edit'|trans|e('html')|raw }}\"></span>
                {# Deleted extra space between elements #}
                </button><button
                    class=\"btn btn-icon btn-lighter item-remove-button<% if (!removable) { %> disabled<% } %>\"
                    <% if (!removable) { %> disabled=\"disabled\"<% } %> title=\"{{ 'oro.note.action.remove'|trans|e('html_attr')|raw }}\">
                        <span class=\"fa-trash-o\" aria-label=\"{{ 'oro.note.action.remove'|trans|e('html')|raw }}\"></span>
                </button>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%- id %>\">
            <div class=\"message\">
                <%= message %>
            </div>
            <% if (hasUpdate) { %>
            <div class=\"details\">
                <div>
                    <%= _.template(
                        {{ 'oro.note.widget_updated_by'|trans|json_encode|raw }},
                        { interpolate: /\\{\\{(.+?)\\}\\}/g }
                    )({
                        user: updatedBy_url
                            ? '<a class=\"user\" href=\"' + updatedBy_url + '\">' +  _.escape(updatedBy) + '</a>'
                            : '<i class=\"user\">' +  _.escape(updatedBy) + '</i>',
                        date: '<i class=\"date\">' + updatedAt + '</i>'
                    }) %>
                </div>
            </div>
            <% } %>
        </div>
    </div>
</script>
", "@OroNote/Note/js/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/js/view.html.twig");
    }
}
