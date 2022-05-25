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

/* @OroOrganization/BusinessUnit/widget/info.html.twig */
class __TwigTemplate_619ea313af5b46c88f001172ee69233b extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOrganization/BusinessUnit/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/BusinessUnit/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/BusinessUnit/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOrganization/BusinessUnit/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroOrganization/BusinessUnit/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroOrganization/BusinessUnit/widget/info.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.organization.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "organization", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
            ";
        // line 10
        $context["website"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "website", [], "any", false, false, false, 10)) ? (twig_call_macro($macros["ui"], "macro_renderUrl", [$this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->stripDangerousProtocols(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "website", [], "any", false, false, false, 10))], 10, $context, $this->getSourceContext())) : (null));
        // line 11
        echo "            ";
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.website.label"), (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 11, $this->source); })()), null, null, ["dir" => (((isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 11, $this->source); })())) ? ("ltr") : (null))]], 11, $context, $this->getSourceContext());
        echo "

            ";
        // line 13
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 17
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.email.label"), twig_call_macro($macros["email"], "macro_renderEmailWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext())], 17, $context, $this->getSourceContext());
        echo "
            ";
        // line 18
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.phone.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "phone", [], "any", false, false, false, 18)) ? (twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "phone", [], "any", false, false, false, 18), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })())], 18, $context, $this->getSourceContext())) : (null))], 18, $context, $this->getSourceContext());
        echo "
            ";
        // line 19
        $context["faxPhone"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "fax", [], "any", false, false, false, 19)) ? (twig_call_macro($macros["ui"], "macro_renderPhone", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "fax", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext())) : (null));
        // line 20
        echo "            ";
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.organization.businessunit.fax.label"), (isset($context["faxPhone"]) || array_key_exists("faxPhone", $context) ? $context["faxPhone"] : (function () { throw new RuntimeError('Variable "faxPhone" does not exist.', 20, $this->source); })()), null, null, ["dir" => (((isset($context["faxPhone"]) || array_key_exists("faxPhone", $context) ? $context["faxPhone"] : (function () { throw new RuntimeError('Variable "faxPhone" does not exist.', 20, $this->source); })())) ? ("ltr") : (null))]], 20, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroOrganization/BusinessUnit/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  89 => 19,  85 => 18,  81 => 17,  74 => 13,  68 => 11,  66 => 10,  62 => 9,  58 => 8,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEmail/macros.html.twig' as email %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.organization.businessunit.name.label'|trans, entity.name) }}
            {{ ui.renderProperty('oro.organization.businessunit.organization.label'|trans, entity.organization) }}
            {% set website = entity.website ? ui.renderUrl(entity.website|strip_dangerous_protocols) : null %}
            {{ ui.renderHtmlProperty('oro.organization.businessunit.website.label'|trans, website, null, null, {'dir': website ? 'ltr' : null}) }}

            {{ entityConfig.renderDynamicFields(entity) }}
        </div>

        <div class=\"responsive-block\">
            {{ ui.renderHtmlProperty('oro.organization.businessunit.email.label'|trans, email.renderEmailWithActions(entity.email, entity)) }}
            {{ ui.renderHtmlProperty('oro.organization.businessunit.phone.label'|trans, entity.phone ? ui.renderPhoneWithActions(entity.phone, entity) : null) }}
            {% set faxPhone = entity.fax ? ui.renderPhone(entity.fax) : null %}
            {{ ui.renderHtmlProperty('oro.organization.businessunit.fax.label'|trans, faxPhone, null, null, {'dir': faxPhone ? 'ltr' : null}) }}
        </div>
    </div>
</div>
", "@OroOrganization/BusinessUnit/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/OrganizationBundle/Resources/views/BusinessUnit/widget/info.html.twig");
    }
}
