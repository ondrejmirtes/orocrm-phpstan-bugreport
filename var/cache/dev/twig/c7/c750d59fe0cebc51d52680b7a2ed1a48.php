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

/* @OroEmail/Email/Datagrid/Property/subject.html.twig */
class __TwigTemplate_6732b5954e73e6a636d078eb9b95a84e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Datagrid/Property/subject.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/subject.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/subject.html.twig"));

        // line 1
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Datagrid/Property/subject.html.twig", 1)->unwrap();
        // line 2
        $context["emailBody"] = ["textBody" => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 2, $this->source); })()), "getValue", [0 => "body_content"], "method", false, false, false, 2)];
        // line 3
        $context["isNew"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "is_new"], "method", false, false, false, 3);
        // line 4
        $context["valueToShow"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })())) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.subject.no_subject.label")));
        // line 5
        echo "
<div class=\"nowrap-ellipsis\">
    <div>
        ";
        // line 8
        if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            <strong class=\"email-subject\">";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["valueToShow"]) || array_key_exists("valueToShow", $context) ? $context["valueToShow"] : (function () { throw new RuntimeError('Variable "valueToShow" does not exist.', 9, $this->source); })()));
            echo "</strong>
        ";
        } else {
            // line 11
            echo "            <span class=\"email-subject\">";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["valueToShow"]) || array_key_exists("valueToShow", $context) ? $context["valueToShow"] : (function () { throw new RuntimeError('Variable "valueToShow" does not exist.', 11, $this->source); })()));
            echo "</span>
        ";
        }
        // line 13
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["emailBody"] ?? null), "textBody", [], "any", true, true, false, 13)) {
            // line 14
            echo "            <div class=\"email-body\">";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(twig_call_macro($macros["EA"], "macro_email_short_body", [(isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext()));
            echo "</div>
        ";
        }
        // line 16
        echo "    </div>
</div>
<div class=\"td-expander\"></div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Datagrid/Property/subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  76 => 14,  73 => 13,  67 => 11,  61 => 9,  59 => 8,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEmail/macros.html.twig' as EA %}
{% set emailBody = {textBody: record.getValue('body_content')} %}
{% set isNew = record.getValue('is_new') %}
{% set valueToShow = value ? value : 'oro.email.subject.no_subject.label'|trans %}

<div class=\"nowrap-ellipsis\">
    <div>
        {% if isNew %}
            <strong class=\"email-subject\">{{ valueToShow|oro_html_strip_tags }}</strong>
        {% else %}
            <span class=\"email-subject\">{{ valueToShow|oro_html_strip_tags }}</span>
        {% endif %}
        {% if emailBody.textBody is defined %}
            <div class=\"email-body\">{{ EA.email_short_body(emailBody)|oro_html_strip_tags }}</div>
        {% endif %}
    </div>
</div>
<div class=\"td-expander\"></div>
", "@OroEmail/Email/Datagrid/Property/subject.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Datagrid/Property/subject.html.twig");
    }
}
