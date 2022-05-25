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

/* @OroHangoutsCall/Call/widget/additionalProperties.html.twig */
class __TwigTemplate_5a16b3d65d83f7f5cd66b215b02fe81f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/Call/widget/additionalProperties.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/widget/additionalProperties.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/Call/widget/additionalProperties.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroHangoutsCall/Call/widget/additionalProperties.html.twig", 1)->unwrap();
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["hangoutOptions"] = ["widget_size" => 70];
        // line 6
        echo "    ";
        $this->loadTemplate("@OroHangoutsCall/Call/updateActions.html.twig", "@OroHangoutsCall/Call/widget/additionalProperties.html.twig", 6)->display($context);
        $context["hangoutButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo twig_call_macro($macros["UI"], "macro_renderControlGroup", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.hangoutscall.label"), (isset($context["hangoutButton"]) || array_key_exists("hangoutButton", $context) ? $context["hangoutButton"] : (function () { throw new RuntimeError('Variable "hangoutButton" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/Call/widget/additionalProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set hangoutButton %}
    {% set hangoutOptions = {
        widget_size: 70
    } %}
    {% include \"@OroHangoutsCall/Call/updateActions.html.twig\" %}
{% endset %}
{{ UI.renderControlGroup('oro.hangoutscall.label'|trans, hangoutButton) }}
", "@OroHangoutsCall/Call/widget/additionalProperties.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/Call/widget/additionalProperties.html.twig");
    }
}
