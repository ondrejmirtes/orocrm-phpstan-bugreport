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

/* @OroDashboard/Js/default_templates.js.twig */
class __TwigTemplate_e1e27c0cf63720647bbe4bfdbb2d33f0 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Js/default_templates.js.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Js/default_templates.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Js/default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%- inputClass %>\"
                   value=\"<%- value.value.start %>\"
                   name=\"<%- value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%- inputClass %>\"
                   value=\"<%- value.value.end %>\"
                   name=\"<%- value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
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
        return "@OroDashboard/Js/default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%- inputClass %>\"
                   value=\"<%- value.value.start %>\"
                   name=\"<%- value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%- inputClass %>\"
                   value=\"<%- value.value.end %>\"
                   name=\"<%- value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
        </div>
    </div>
</script>
", "@OroDashboard/Js/default_templates.js.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Js/default_templates.js.twig");
    }
}
