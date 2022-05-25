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

/* @OroUser/User/Autocomplete/Widget/result.html.twig */
class __TwigTemplate_7b7181c2d65848d83e41b0ab31f578db extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/Autocomplete/Widget/result.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/Autocomplete/Widget/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/Autocomplete/Widget/result.html.twig"));

        // line 1
        echo "<span class=\"select2-result-label-icon\">
    <picture>
        <% if (typeof avatar != 'undefined' && avatar) { %>
             <% _.each(avatar.sources, function(source) { %>
            <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
            <% }); %>
            <img src=\"<% if (avatar.src) { %><%- avatar.src %><% } else { %>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\">
        <% } else { %>
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "\" width=\"16\" height=\"16\">
        <% } %>
    </picture>
</span><span class=\"select2-result-label-title\"><% if (id == 'current_user') { %><i><% } %><%= highlight(_.escape(fullName)) %><% if (id == 'current_user') { %></i><% } %><% if (typeof email != 'undefined' && typeof username != 'undefined') { %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)<% } %></span>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/User/Autocomplete/Widget/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"select2-result-label-icon\">
    <picture>
        <% if (typeof avatar != 'undefined' && avatar) { %>
             <% _.each(avatar.sources, function(source) { %>
            <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
            <% }); %>
            <img src=\"<% if (avatar.src) { %><%- avatar.src %><% } else { %>{{ asset('bundles/oroui/img/avatar-xsmall.png')|e('html_attr') }}<% } %>\" width=\"16\" height=\"16\">
        <% } else { %>
            <img src=\"{{ asset('bundles/oroui/img/avatar-xsmall.png')|e('html_attr') }}\" width=\"16\" height=\"16\">
        <% } %>
    </picture>
</span><span class=\"select2-result-label-title\"><% if (id == 'current_user') { %><i><% } %><%= highlight(_.escape(fullName)) %><% if (id == 'current_user') { %></i><% } %><% if (typeof email != 'undefined' && typeof username != 'undefined') { %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)<% } %></span>
", "@OroUser/User/Autocomplete/Widget/result.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/Autocomplete/Widget/result.html.twig");
    }
}
