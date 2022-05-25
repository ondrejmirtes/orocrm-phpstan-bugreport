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

/* @OroEmail/Email/Forward/parentBody.html.twig */
class __TwigTemplate_9a863b0395208222c7d591ba4f79bd1b extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Forward/parentBody.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Forward/parentBody.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Forward/parentBody.html.twig"));

        // line 1
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Forward/parentBody.html.twig", 1)->unwrap();
        // line 2
        echo "
<body> ";
        // line 4
        echo "<br><br>
<div class=\"quote\">
    <div>
        <p>---------- ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forwarded_message"), "html", null, true);
        echo " ----------</p>
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From"), "html", null, true);
        echo ":
            ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 9, $this->source); })()), "fromEmailAddress", [], "any", false, false, false, 9), "owner", [], "any", false, false, false, 9))) {
            // line 10
            echo "                ";
            echo twig_call_macro($macros["EA"], "macro_email_address_link", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "fromEmailAddress", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 12, $this->source); })()), "fromName", [], "any", false, false, false, 12), "html", null, true);
            echo "
            ";
        }
        // line 14
        echo "        </p>
        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.sent_at.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 15, $this->source); })()), "sentAt", [], "any", false, false, false, 15)), "html", null, true);
        echo "</p>
        <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 16, $this->source); })()), "subject", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
        <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        echo ": <bdo dir=\"ltr\">";
        echo twig_call_macro($macros["EA"], "macro_recipient_email_addresses", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 17, $this->source); })()), "toCc", [], "any", false, false, false, 17), false, false], 17, $context, $this->getSourceContext());
        echo "</bdo></p>
    </div>
    <br>
    <div class=\"email-prev-body\">
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "emailBody", [], "any", false, false, false, 21)) {
            // line 22
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 22, $this->source); })()), "emailBody", [], "any", false, false, false, 22), "bodyContent", [], "any", false, false, false, 22);
            echo "
        ";
        }
        // line 24
        echo "    </div>
</div>
</body>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Forward/parentBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  104 => 22,  102 => 21,  93 => 17,  87 => 16,  81 => 15,  78 => 14,  72 => 12,  66 => 10,  64 => 9,  60 => 8,  56 => 7,  51 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEmail/macros.html.twig' as EA %}

<body> {# this template requires body tag because it will be cut depending on it by the component #}
<br><br>
<div class=\"quote\">
    <div>
        <p>---------- {{ 'oro.email.forwarded_message'|trans }} ----------</p>
        <p>{{ 'From'|trans }}:
            {% if (email.fromEmailAddress.owner is not empty) %}
                {{ EA.email_address_link(email.fromEmailAddress) }}
            {% else %}
                {{ email.fromName }}
            {% endif %}
        </p>
        <p>{{ 'oro.email.sent_at.label'|trans }}: {{ email.sentAt|oro_format_datetime }}</p>
        <p>{{ 'Subject'|trans }}: {{ email.subject }}</p>
        <p>{{ 'To'|trans }}: <bdo dir=\"ltr\">{{ EA.recipient_email_addresses(email.toCc, false, false) }}</bdo></p>
    </div>
    <br>
    <div class=\"email-prev-body\">
        {% if email.emailBody %}
            {{ email.emailBody.bodyContent|raw }}
        {% endif %}
    </div>
</div>
</body>
", "@OroEmail/Email/Forward/parentBody.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Forward/parentBody.html.twig");
    }
}
