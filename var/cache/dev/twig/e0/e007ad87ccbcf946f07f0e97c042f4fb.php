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

/* @OroEmail/Email/Datagrid/Property/contacts.html.twig */
class __TwigTemplate_4e7a59d9294f91fc4becbdb750d2a68c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Datagrid/Property/contacts.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/contacts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Datagrid/Property/contacts.html.twig"));

        // line 1
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Datagrid/Property/contacts.html.twig", 1)->unwrap();
        // line 2
        $macros["emailContacts"] = $this->macros["emailContacts"] = $this;
        // line 3
        echo "
";
        // line 4
        $context["isNew"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "is_new"], "method", false, false, false, 4);
        // line 5
        echo "
<span class=\"nowrap\">
    <span class=\"icon grid\">
        <i class=\"";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 8, $this->source); })()), "getValue", [0 => "incoming"], "method", false, false, false, 8)) ? ("fa-sign-in") : ("fa-sign-out"));
        echo "\"></i>
    </span>
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 10, $this->source); })()), "getValue", [0 => "incoming"], "method", false, false, false, 10)) {
            // line 11
            echo "        ";
            echo twig_call_macro($macros["emailContacts"], "macro_renderEmailAddressCell", [twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 11, $this->source); })()), "getValue", [0 => "fromName"], "method", false, false, false, 11), (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 11, $this->source); })()), 22], 11, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 13
            echo "        ";
            $context["recipients"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 13, $this->source); })()), "getValue", [0 => "recipients"], "method", false, false, false, 13);
            // line 14
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 14, $this->source); })())) > 0)) {
                // line 15
                echo "            ";
                if ((twig_length_filter($this->env, (isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 15, $this->source); })())) < 3)) {
                    // line 16
                    echo "                ";
                    echo twig_call_macro($macros["emailContacts"], "macro_renderEmailAddressCell", [twig_call_macro($macros["EA"], "macro_email_participants_name", [(isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 16, $this->source); })()), true, false], 16, $context, $this->getSourceContext()), (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 18
                    echo "                ";
                    $context["firstEmail"] = twig_first($this->env, (isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 18, $this->source); })()));
                    // line 19
                    echo "                ";
                    $context["lastEmail"] = twig_last($this->env, (isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 19, $this->source); })()));
                    // line 20
                    echo "                ";
                    $context["firstLastRecipients"] = ((twig_call_macro($macros["EA"], "macro_email_participant_name_or_me", [twig_get_attribute($this->env, $this->source,                     // line 21
(isset($context["firstEmail"]) || array_key_exists("firstEmail", $context) ? $context["firstEmail"] : (function () { throw new RuntimeError('Variable "firstEmail" does not exist.', 21, $this->source); })()), "emailAddress", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["firstEmail"]) || array_key_exists("firstEmail", $context) ? $context["firstEmail"] : (function () { throw new RuntimeError('Variable "firstEmail" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), true, false], 21, $context, $this->getSourceContext()) . " .. ") . twig_call_macro($macros["EA"], "macro_email_participant_name_or_me", [twig_get_attribute($this->env, $this->source,                     // line 23
(isset($context["lastEmail"]) || array_key_exists("lastEmail", $context) ? $context["lastEmail"] : (function () { throw new RuntimeError('Variable "lastEmail" does not exist.', 23, $this->source); })()), "emailAddress", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["lastEmail"]) || array_key_exists("lastEmail", $context) ? $context["lastEmail"] : (function () { throw new RuntimeError('Variable "lastEmail" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), true, false], 23, $context, $this->getSourceContext()));
                    // line 25
                    echo "                ";
                    echo twig_call_macro($macros["emailContacts"], "macro_renderEmailAddressCell", [(isset($context["firstLastRecipients"]) || array_key_exists("firstLastRecipients", $context) ? $context["firstLastRecipients"] : (function () { throw new RuntimeError('Variable "firstLastRecipients" does not exist.', 25, $this->source); })()), (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_email.threads_grouping")) {
            // line 30
            echo "        ";
            $context["threadEmailCount"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 30, $this->source); })()), "getValue", [0 => "thread_email_count"], "method", false, false, false, 30);
            // line 31
            echo "        ";
            if (((isset($context["threadEmailCount"]) || array_key_exists("threadEmailCount", $context) ? $context["threadEmailCount"] : (function () { throw new RuntimeError('Variable "threadEmailCount" does not exist.', 31, $this->source); })()) > 1)) {
                // line 32
                echo "            ";
                echo twig_call_macro($macros["emailContacts"], "macro_renderEmailAddressCell", [(("(" . (isset($context["threadEmailCount"]) || array_key_exists("threadEmailCount", $context) ? $context["threadEmailCount"] : (function () { throw new RuntimeError('Variable "threadEmailCount" does not exist.', 32, $this->source); })())) . ")"), (isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 32, $this->source); })())], 32, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</span>

";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function macro_renderEmailAddressCell($__label__ = null, $__isNew__ = null, $__maxLength__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "isNew" => $__isNew__,
            "maxLength" => $__maxLength__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailAddressCell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailAddressCell"));

            // line 38
            echo "    ";
            if (((isset($context["maxLength"]) || array_key_exists("maxLength", $context) ? $context["maxLength"] : (function () { throw new RuntimeError('Variable "maxLength" does not exist.', 38, $this->source); })()) && (twig_length_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 38, $this->source); })())) > (isset($context["maxLength"]) || array_key_exists("maxLength", $context) ? $context["maxLength"] : (function () { throw new RuntimeError('Variable "maxLength" does not exist.', 38, $this->source); })())))) {
                // line 39
                echo "        ";
                list($context["title"], $context["label"]) =                 [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 39, $this->source); })()), (twig_trim_filter(twig_slice($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 39, $this->source); })()), 0, (isset($context["maxLength"]) || array_key_exists("maxLength", $context) ? $context["maxLength"] : (function () { throw new RuntimeError('Variable "maxLength" does not exist.', 39, $this->source); })())), null, "right") . "...")];
                // line 40
                echo "    ";
            }
            // line 41
            if ((isset($context["isNew"]) || array_key_exists("isNew", $context) ? $context["isNew"] : (function () { throw new RuntimeError('Variable "isNew" does not exist.', 41, $this->source); })())) {
                // line 42
                echo "<strong";
                if (array_key_exists("title", $context)) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 42, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })()));
                echo "</strong>";
            } elseif (            // line 43
array_key_exists("title", $context)) {
                // line 44
                echo "<span title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "\">";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 44, $this->source); })()));
                echo "</span>";
            } else {
                // line 46
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 46, $this->source); })()));
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Datagrid/Property/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 46,  188 => 44,  186 => 43,  176 => 42,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  144 => 37,  129 => 35,  126 => 34,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  99 => 25,  97 => 23,  96 => 21,  94 => 20,  91 => 19,  88 => 18,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  67 => 11,  65 => 10,  60 => 8,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroEmail/macros.html.twig' as EA %}
{% import _self as emailContacts %}

{% set isNew = record.getValue('is_new') %}

<span class=\"nowrap\">
    <span class=\"icon grid\">
        <i class=\"{{ record.getValue('incoming') ? 'fa-sign-in' : 'fa-sign-out' }}\"></i>
    </span>
    {% if record.getValue('incoming') %}
        {{ emailContacts.renderEmailAddressCell(record.getValue('fromName'), isNew, 22) }}
    {% else %}
        {% set recipients = record.getValue('recipients') %}
        {% if recipients|length > 0 %}
            {% if recipients|length < 3 %}
                {{ emailContacts.renderEmailAddressCell(EA.email_participants_name(recipients, true, false), isNew) }}
            {% else %}
                {% set firstEmail = recipients|first %}
                {% set lastEmail = recipients|last %}
                {% set firstLastRecipients =
                    EA.email_participant_name_or_me(firstEmail.emailAddress, firstEmail.name, true, false)
                    ~ ' .. ' ~
                    EA.email_participant_name_or_me(lastEmail.emailAddress, lastEmail.name, true, false)
                    %}
                {{ emailContacts.renderEmailAddressCell(firstLastRecipients, isNew) }}
            {% endif %}
        {% endif %}
    {% endif %}
    {% if oro_config_value('oro_email.threads_grouping') %}
        {% set threadEmailCount = record.getValue('thread_email_count') %}
        {% if threadEmailCount > 1 %}
            {{ emailContacts.renderEmailAddressCell('(' ~ threadEmailCount ~ ')', isNew) }}
        {% endif %}
    {% endif %}
</span>

{% macro renderEmailAddressCell(label, isNew, maxLength) %}
    {% if maxLength and label|length > maxLength %}
        {% set title, label = label, label|slice(0, maxLength)|trim(side='right') ~ '...' %}
    {% endif %}
    {%- if isNew -%}
        <strong{% if title is defined %} title=\"{{ title }}\"{% endif %}>{{ label|oro_html_strip_tags }}</strong>
    {%- elseif title is defined -%}
        <span title=\"{{ title }}\">{{ label|oro_html_strip_tags }}</span>
    {%- else -%}
        {{ label|oro_html_strip_tags }}
    {%- endif -%}
{% endmacro %}
", "@OroEmail/Email/Datagrid/Property/contacts.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Datagrid/Property/contacts.html.twig");
    }
}
