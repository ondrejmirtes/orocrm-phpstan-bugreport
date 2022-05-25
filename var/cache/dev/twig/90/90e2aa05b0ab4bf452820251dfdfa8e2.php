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

/* @OroSales/macros.html.twig */
class __TwigTemplate_b9df72c16e2ce2f0d1ed5e18fc94e1ef extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/macros.html.twig"));

        // line 31
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderCollectionWithPrimaryElement($__collection__ = null, $__isEmail__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collection" => $__collection__,
            "isEmail" => $__isEmail__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollectionWithPrimaryElement"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollectionWithPrimaryElement"));

            // line 2
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/macros.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            $macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroSales/macros.html.twig", 3)->unwrap();
            // line 4
            echo "
    ";
            // line 5
            $context["primaryElement"] = null;
            // line 6
            echo "    ";
            $context["elements"] = [];
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["element"], "primary", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "            ";
                    $context["primaryElement"] = $context["element"];
                    // line 11
                    echo "        ";
                } else {
                    // line 12
                    echo "            ";
                    $context["elements"] = twig_array_merge((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 12, $this->source); })()), [0 => $context["element"]]);
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
            if ((isset($context["primaryElement"]) || array_key_exists("primaryElement", $context) ? $context["primaryElement"] : (function () { throw new RuntimeError('Variable "primaryElement" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "        ";
                $context["elements"] = twig_array_merge([0 => (isset($context["primaryElement"]) || array_key_exists("primaryElement", $context) ? $context["primaryElement"] : (function () { throw new RuntimeError('Variable "primaryElement" does not exist.', 16, $this->source); })())], (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 16, $this->source); })()));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <ul class=\"extra-list\">";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            <li class=\"contact-collection-element";
                if (twig_get_attribute($this->env, $this->source, $context["element"], "primary", [], "any", false, false, false, 21)) {
                    echo " primary";
                }
                echo "\">
                ";
                // line 22
                if ((isset($context["isEmail"]) || array_key_exists("isEmail", $context) ? $context["isEmail"] : (function () { throw new RuntimeError('Variable "isEmail" does not exist.', 22, $this->source); })())) {
                    // line 23
                    echo "                    ";
                    echo twig_call_macro($macros["email"], "macro_renderEmailWithActions", [$context["element"], (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 25
                    echo "                    ";
                    echo twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [$context["element"], (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 27
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_render_customer_info($__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_customer_info"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_customer_info"));

            // line 33
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/macros.html.twig", 33)->unwrap();
            // line 34
            echo "    ";
            $macros["sales"] = $this;
            // line 35
            echo "
    ";
            // line 36
            $context["customer"] = (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "customerAssociation", [], "any", false, false, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "customerAssociation", [], "any", false, false, false, 36), "customerTarget", [], "any", false, false, false, 36))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "customerAssociation", [], "any", false, false, false, 37), "customerTarget", [], "any", false, false, false, 37)) : (null));
            // line 39
            echo "    ";
            $context["account"] = (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "customerAssociation", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "customerAssociation", [], "any", false, false, false, 39), "account", [], "any", false, false, false, 39))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "customerAssociation", [], "any", false, false, false, 40), "account", [], "any", false, false, false, 40)) : (null));
            // line 43
            $context["accountView"] = twig_call_macro($macros["sales"], "macro_entity_view", [(isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
            // line 45
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.customer.label"), (isset($context["accountView"]) || array_key_exists("accountView", $context) ? $context["accountView"] : (function () { throw new RuntimeError('Variable "accountView" does not exist.', 45, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "customer"], 45, $context, $this->getSourceContext());
            echo "

    ";
            // line 47
            if ( !twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "        <div class=\"base-currency-wrapper\">
            ";
                // line 49
                echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 49, $this->source); })())), "label")), twig_call_macro($macros["sales"], "macro_entity_view", [(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 49, $this->source); })())], 49, $context, $this->getSourceContext()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "customer"], 49, $context, $this->getSourceContext());
                echo "
        </div>
    ";
            }
            // line 52
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_entity_view($__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entity_view"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entity_view"));

            // line 56
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/macros.html.twig", 56)->unwrap();
            // line 58
            $context["entityName"] = (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })())) ? ($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()))) : (""));
            // line 59
            if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })())))) {
                // line 60
                echo twig_call_macro($macros["ui"], "macro_renderUrl", [$this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getEntityViewLink((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })())), (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 60, $this->source); })())], 60, $context, $this->getSourceContext());
            } else {
                // line 62
                echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 62, $this->source); })()), "html", null, true);
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
        return "@OroSales/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 62,  277 => 60,  275 => 59,  273 => 58,  271 => 56,  252 => 55,  236 => 52,  230 => 49,  227 => 48,  225 => 47,  220 => 45,  218 => 43,  216 => 40,  214 => 39,  212 => 37,  211 => 36,  208 => 35,  205 => 34,  202 => 33,  183 => 32,  167 => 29,  160 => 27,  154 => 25,  148 => 23,  146 => 22,  139 => 21,  135 => 20,  132 => 18,  129 => 17,  126 => 16,  123 => 15,  117 => 14,  114 => 13,  111 => 12,  108 => 11,  105 => 10,  102 => 9,  98 => 8,  95 => 7,  92 => 6,  90 => 5,  87 => 4,  84 => 3,  81 => 2,  60 => 1,  46 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderCollectionWithPrimaryElement(collection, isEmail, entity) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% import '@OroEmail/macros.html.twig' as email %}

    {% set primaryElement = null %}
    {% set elements = [] %}

    {% for element in collection %}
        {% if element.primary %}
            {% set primaryElement = element %}
        {% else %}
            {% set elements = elements|merge([element]) %}
        {% endif %}
    {% endfor %}
    {% if primaryElement %}
        {% set elements = [primaryElement]|merge(elements) %}
    {% endif %}

    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"contact-collection-element{% if element.primary %} primary{% endif %}\">
                {% if isEmail %}
                    {{ email.renderEmailWithActions(element, entity) }}
                {% else %}
                    {{ ui.renderPhoneWithActions(element, entity) }}
                {% endif %}
            </li>
        {% endfor -%}
    </ul>
{% endmacro %}

{% macro render_customer_info(entity) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% import _self as sales %}

    {% set customer = entity.customerAssociation and entity.customerAssociation.customerTarget
        ? entity.customerAssociation.customerTarget
        : null %}
    {% set account = entity.customerAssociation and entity.customerAssociation.account
        ? entity.customerAssociation.account
        : null %}

    {%- set accountView = sales.entity_view(account) -%}

    {{ ui.renderHtmlProperty('oro.sales.opportunity.customer.label'|trans, accountView, entity, 'customer') }}

    {% if customer is not empty %}
        <div class=\"base-currency-wrapper\">
            {{ ui.renderHtmlProperty(oro_entity_config_value(oro_class_name(customer), 'label')|trans, sales.entity_view(customer), entity, 'customer') }}
        </div>
    {% endif %}

{% endmacro %}

{%- macro entity_view(entity) -%}
    {%- import '@OroUI/macros.html.twig' as ui -%}

    {%- set entityName = entity ? entity|oro_format_name : '' -%}
    {%- if (entity and is_granted('VIEW', entity)) -%}
        {{ ui.renderUrl(oro_entity_object_view_link(entity), entityName) }}
    {%- else -%}
        {{ entityName }}
    {%- endif -%}
{%- endmacro -%}
", "@OroSales/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/macros.html.twig");
    }
}
