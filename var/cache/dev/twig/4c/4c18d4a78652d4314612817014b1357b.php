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

/* @OroHangoutsCall/inviteHangoutLink.html.twig */
class __TwigTemplate_01979b45e7a9bf8a942945312d29ceb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'action_controll' => [$this, 'block_action_controll'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/inviteHangoutLink.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/inviteHangoutLink.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/inviteHangoutLink.html.twig"));

        // line 1
        $context["options"] = ["class" => ((        // line 2
array_key_exists("cssClass", $context)) ? ((isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 2, $this->source); })())) : ("")), "aCss" => "no-hash", "iCss" => "icon-hangouts", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.hangoutscall.call.hangouts_call"), "pageComponent" => ["module" => "orohangoutscall/js/app/components/invite-hangout-component", "options" => twig_array_merge(["modalOptions" => ["hangoutOptions" => ((        // line 10
array_key_exists("hangoutOptions", $context)) ? ((isset($context["hangoutOptions"]) || array_key_exists("hangoutOptions", $context) ? $context["hangoutOptions"] : (function () { throw new RuntimeError('Variable "hangoutOptions" does not exist.', 10, $this->source); })())) : ([]))]], ((        // line 12
array_key_exists("extraComponentOptions", $context)) ? ((isset($context["extraComponentOptions"]) || array_key_exists("extraComponentOptions", $context) ? $context["extraComponentOptions"] : (function () { throw new RuntimeError('Variable "extraComponentOptions" does not exist.', 12, $this->source); })())) : ([])))]];
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('action_controll', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_action_controll($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("action_controll", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action_controll"));

        // line 17
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroHangoutsCall/inviteHangoutLink.html.twig", 17)->unwrap();
        // line 18
        echo "
    ";
        // line 19
        echo twig_call_macro($macros["UI"], "macro_clientLink", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/inviteHangoutLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  83 => 18,  80 => 17,  55 => 16,  52 => 15,  50 => 12,  49 => 10,  48 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set options = {
    class: cssClass is defined ? cssClass : '',
    aCss: 'no-hash',
    iCss: 'icon-hangouts',
    label: 'oro.hangoutscall.call.hangouts_call'|trans,
    pageComponent: {
        module: 'orohangoutscall/js/app/components/invite-hangout-component',
        options: {
            modalOptions: {
                hangoutOptions: hangoutOptions is defined ? hangoutOptions : {}
            }
        }|merge(extraComponentOptions is defined ? extraComponentOptions : {})
    }
} %}

{% block action_controll %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.clientLink(options) }}
{% endblock %}
", "@OroHangoutsCall/inviteHangoutLink.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/inviteHangoutLink.html.twig");
    }
}
