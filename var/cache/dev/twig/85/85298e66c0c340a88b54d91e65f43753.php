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

/* @OroContact/Contact/widget/accountContacts.html.twig */
class __TwigTemplate_9e1d6dad4463c3b760eeb5b3377361bf extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroContact/Contact/widget/accountContacts.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/widget/accountContacts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/widget/accountContacts.html.twig"));

        // line 1
        $macros["account_contacts"] = $this->macros["account_contacts"] = $this;
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"contact-box-wrapper\">
        ";
        // line 5
        if (((isset($context["defaultContact"]) || array_key_exists("defaultContact", $context) ? $context["defaultContact"] : (function () { throw new RuntimeError('Variable "defaultContact" does not exist.', 5, $this->source); })()) || twig_length_filter($this->env, (isset($context["contactsWithoutDefault"]) || array_key_exists("contactsWithoutDefault", $context) ? $context["contactsWithoutDefault"] : (function () { throw new RuntimeError('Variable "contactsWithoutDefault" does not exist.', 5, $this->source); })())))) {
            // line 6
            echo "            ";
            if ((isset($context["defaultContact"]) || array_key_exists("defaultContact", $context) ? $context["defaultContact"] : (function () { throw new RuntimeError('Variable "defaultContact" does not exist.', 6, $this->source); })())) {
                // line 7
                echo "                ";
                echo twig_call_macro($macros["account_contacts"], "macro_render_contact_box", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), (isset($context["defaultContact"]) || array_key_exists("defaultContact", $context) ? $context["defaultContact"] : (function () { throw new RuntimeError('Variable "defaultContact" does not exist.', 7, $this->source); })()), true], 7, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contactsWithoutDefault"]) || array_key_exists("contactsWithoutDefault", $context) ? $context["contactsWithoutDefault"] : (function () { throw new RuntimeError('Variable "contactsWithoutDefault" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 10
                echo "                ";
                echo twig_call_macro($macros["account_contacts"], "macro_render_contact_box", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), $context["contact"], false], 10, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            <div class=\"no-data\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.account.no_contacts_exist"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 17
        echo "    </div>
</div>

";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function macro_render_contact_box($__account__ = null, $__contact__ = null, $__isDefault__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "account" => $__account__,
            "contact" => $__contact__,
            "isDefault" => $__isDefault__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_contact_box"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_contact_box"));

            // line 21
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroContact/Contact/widget/accountContacts.html.twig", 21)->unwrap();
            // line 22
            echo "    ";
            $macros["Email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroContact/Contact/widget/accountContacts.html.twig", 22)->unwrap();
            // line 23
            echo "    <div class=\"contact-box\">
        <div class=\"contact-box-title\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contact_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "\" class=\"contact-box-name-link contact-box-link\" >";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 26, $this->source); })())), "html", null, true);
            // line 27
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "                    <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.default_contact.label"), "html", null, true);
                echo "</span>
                ";
            }
            // line 30
            echo "            </a>
        </div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.phone.label"), "html", null, true);
            echo ":</span>
            ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 34, $this->source); })()), "primaryPhone", [], "any", false, false, false, 34)) {
                // line 35
                echo "                ";
                echo twig_call_macro($macros["UI"], "macro_renderPhoneWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "primaryPhone", [], "any", false, false, false, 35), (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
                echo "
            ";
            } else {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
                echo "
            ";
            }
            // line 39
            echo "        </div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.email.label"), "html", null, true);
            echo ":</span>
            ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 42, $this->source); })()), "primaryEmail", [], "any", false, false, false, 42)) {
                // line 43
                echo "                ";
                echo twig_call_macro($macros["Email"], "macro_renderEmailWithActions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 43, $this->source); })()), "primaryEmail", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
                echo "
            ";
            } else {
                // line 45
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
                echo "
            ";
            }
            // line 47
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroContact/Contact/widget/accountContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 47,  191 => 45,  185 => 43,  183 => 42,  179 => 41,  175 => 39,  169 => 37,  163 => 35,  161 => 34,  157 => 33,  152 => 30,  146 => 28,  144 => 27,  142 => 26,  137 => 25,  133 => 23,  130 => 22,  127 => 21,  106 => 20,  90 => 17,  84 => 14,  81 => 13,  78 => 12,  69 => 10,  64 => 9,  58 => 7,  55 => 6,  53 => 5,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as account_contacts %}

<div class=\"widget-content\">
    <div class=\"contact-box-wrapper\">
        {% if defaultContact or contactsWithoutDefault|length %}
            {% if defaultContact %}
                {{ account_contacts.render_contact_box(entity, defaultContact, true) }}
            {% endif %}
            {% for contact in contactsWithoutDefault %}
                {{ account_contacts.render_contact_box(entity, contact, false) }}
            {% endfor %}
        {% else %}
            <div class=\"no-data\">
                {{ \"oro.contact.account.no_contacts_exist\"|trans }}
            </div>
        {% endif %}
    </div>
</div>

{% macro render_contact_box(account, contact, isDefault) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import '@OroEmail/macros.html.twig' as Email %}
    <div class=\"contact-box\">
        <div class=\"contact-box-title\">
            <a href=\"{{ path('oro_contact_view',{'id': contact.id }) }}\" title=\"{{ contact|oro_format_name }}\" class=\"contact-box-name-link contact-box-link\" >
                {{- contact|oro_format_name -}}
                {% if isDefault %}
                    <span class=\"label label-info\">{{ \"oro.account.default_contact.label\"|trans }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">{{ \"oro.account.phone.label\"|trans }}:</span>
            {% if contact.primaryPhone %}
                {{ UI.renderPhoneWithActions(contact.primaryPhone, contact) }}
            {% else %}
                {{ 'N/A'|trans }}
            {% endif %}
        </div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">{{ \"oro.account.email.label\"|trans }}:</span>
            {% if contact.primaryEmail %}
                {{ Email.renderEmailWithActions(contact.primaryEmail.email, contact) }}
            {% else %}
                {{ 'N/A'|trans }}
            {% endif %}
        </div>
    </div>
{% endmacro %}
", "@OroContact/Contact/widget/accountContacts.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactBundle/Resources/views/Contact/widget/accountContacts.html.twig");
    }
}
