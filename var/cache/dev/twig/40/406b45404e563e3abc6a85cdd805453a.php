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

/* @OroUser/User/Autocomplete/result.html.twig */
class __TwigTemplate_63e6d3ab458ab65c9d0cd494e5b903cb extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/Autocomplete/result.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/Autocomplete/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/Autocomplete/result.html.twig"));

        // line 1
        echo "<% if (id !== null) { %>
    <span class=\"select2-result-label-icon\">
        <picture>
            <% _.each(avatar.sources, function(source) { %>
            <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
            <% }); %>
            <img src=\"<% if (avatar.src) { %><%- avatar.src %><% } else { %>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\">
        </picture>
    </span><span class=\"select2-result-label-title\"><%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)</span>
<% } else { %>
    <span class=\"select2-result-label-title\"><%= highlight(_.escape(email)) %></span>
<% } %>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/User/Autocomplete/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<% if (id !== null) { %>
    <span class=\"select2-result-label-icon\">
        <picture>
            <% _.each(avatar.sources, function(source) { %>
            <source srcset=\"<%- source.srcset %>\" type=\"<%- source.type %>\">
            <% }); %>
            <img src=\"<% if (avatar.src) { %><%- avatar.src %><% } else { %>{{ asset('bundles/oroui/img/avatar-xsmall.png')|e('html_attr') }}<% } %>\" width=\"16\" height=\"16\">
        </picture>
    </span><span class=\"select2-result-label-title\"><%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)</span>
<% } else { %>
    <span class=\"select2-result-label-title\"><%= highlight(_.escape(email)) %></span>
<% } %>
", "@OroUser/User/Autocomplete/result.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/Autocomplete/result.html.twig");
    }
}
