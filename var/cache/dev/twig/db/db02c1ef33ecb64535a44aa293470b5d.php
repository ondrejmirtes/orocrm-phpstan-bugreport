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

/* @OroIntegration/Autocomplete/integration/result.html.twig */
class __TwigTemplate_73a183a8b6cb9d9e136be46571988b2d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroIntegration/Autocomplete/integration/result.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Autocomplete/integration/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Autocomplete/integration/result.html.twig"));

        // line 1
        echo "<%
    var data = \$(element).data(),
        background;
    if (data.icon) {
        background = 'style=\"background: url(' + data.icon + ') no-repeat;\"';
    } else {
        background = 'style=\"display: none;\"';
    }
%>
<span class=\"aware-icon-block aware-icon-block-text\" <%= background %> ></span>
<span class=\"aware-icon-block-text\">
    <%= highlight(_.escape(text)) %>
    (<% if (data.status) { %>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.enabled.active.label"), "html", null, true);
        echo "<% } else { %>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.enabled.inactive.label"), "html", null, true);
        echo "<% } %>)
</span>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroIntegration/Autocomplete/integration/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<%
    var data = \$(element).data(),
        background;
    if (data.icon) {
        background = 'style=\"background: url(' + data.icon + ') no-repeat;\"';
    } else {
        background = 'style=\"display: none;\"';
    }
%>
<span class=\"aware-icon-block aware-icon-block-text\" <%= background %> ></span>
<span class=\"aware-icon-block-text\">
    <%= highlight(_.escape(text)) %>
    (<% if (data.status) { %>{{ 'oro.integration.integration.enabled.active.label'|trans }}<% } else { %>{{ 'oro.integration.integration.enabled.inactive.label'|trans }}<% } %>)
</span>
", "@OroIntegration/Autocomplete/integration/result.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/IntegrationBundle/Resources/views/Autocomplete/integration/result.html.twig");
    }
}
