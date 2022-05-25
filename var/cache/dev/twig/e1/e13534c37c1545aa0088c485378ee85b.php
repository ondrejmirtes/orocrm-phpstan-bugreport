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

/* @OroUser/User/widget/info.html.twig */
class __TwigTemplate_e653c67f1cc994036ecb73812ea7203e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["tag"] = $this->macros["tag"] = $this->loadTemplate("@OroTag/macros.html.twig", "@OroUser/User/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroUser/User/widget/info.html.twig", 3)->unwrap();
        // line 4
        $macros["userInfo"] = $this->macros["userInfo"] = $this;
        // line 5
        echo "
";
        // line 12
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 16
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.username.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
        echo "
            ";
        // line 17
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.birthday.label"), twig_call_macro($macros["ui"], "macro_render_birthday", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "birthday", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext())], 17, $context, $this->getSourceContext());
        echo "

            ";
        // line 19
        $context["emails"] = [0 => twig_call_macro($macros["userInfo"], "macro_renderEmail", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), true, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext())];
        // line 20
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "emails", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["emailEntity"]) {
            // line 21
            echo "                ";
            $context["emails"] = twig_array_merge((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 21, $this->source); })()), [0 => twig_call_macro($macros["userInfo"], "macro_renderEmail", [twig_get_attribute($this->env, $this->source, $context["emailEntity"], "email", [], "any", false, false, false, 21), false, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext())]);
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.emails.label"), twig_join_filter((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 23, $this->source); })()), "<br />")], 23, $context, $this->getSourceContext());
        echo "

            ";
        // line 25
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.phone.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "phone", [], "any", false, false, false, 25)) ? (twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "phone", [], "any", false, false, false, 25), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext())) : (null))], 25, $context, $this->getSourceContext());
        echo "

            ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_role_view")) {
            // line 28
            echo "                ";
            $context["roles"] = [];
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "userRoles", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["entityRole"]) {
                // line 30
                echo "                    ";
                $context["roles"] = twig_array_merge((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 30, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["entityRole"], "label", [], "any", false, false, false, 30)]);
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityRole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.roles.label"), twig_nl2br(twig_escape_filter($this->env, twig_join_filter((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 32, $this->source); })()), "
")))], 32, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 34
        echo "
            ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_group_view")) {
            // line 36
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.groups.label"), twig_nl2br(twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "groups", [], "any", false, false, false, 36), "
")))], 36, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_business_unit_view")) {
            // line 40
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.business_units.label"), twig_nl2br(twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "businessUnits", [], "any", false, false, false, 40), "
")))], 40, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>

";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function macro_renderEmail($__emailAddress__ = null, $__isPrimary__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "isPrimary" => $__isPrimary__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmail"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmail"));

            // line 7
            echo "    ";
            $macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroUser/User/widget/info.html.twig", 7)->unwrap();
            // line 8
            echo "    ";
            if ((isset($context["isPrimary"]) || array_key_exists("isPrimary", $context) ? $context["isPrimary"] : (function () { throw new RuntimeError('Variable "isPrimary" does not exist.', 8, $this->source); })())) {
                echo "<strong>";
            }
            // line 9
            echo "        ";
            echo twig_call_macro($macros["email"], "macro_renderEmailWithActions", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 9, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })())], 9, $context, $this->getSourceContext());
            echo "
    ";
            // line 10
            if ((isset($context["isPrimary"]) || array_key_exists("isPrimary", $context) ? $context["isPrimary"] : (function () { throw new RuntimeError('Variable "isPrimary" does not exist.', 10, $this->source); })())) {
                echo "</strong>";
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
        return "@OroUser/User/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 10,  200 => 9,  195 => 8,  192 => 7,  171 => 6,  152 => 43,  149 => 42,  142 => 40,  140 => 39,  137 => 38,  130 => 36,  128 => 35,  125 => 34,  118 => 32,  112 => 31,  109 => 30,  104 => 29,  101 => 28,  99 => 27,  94 => 25,  88 => 23,  82 => 22,  79 => 21,  74 => 20,  72 => 19,  67 => 17,  63 => 16,  57 => 12,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroTag/macros.html.twig' as tag %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import _self as userInfo %}

{% macro renderEmail(emailAddress, isPrimary, entity) %}
    {% import '@OroEmail/macros.html.twig' as email %}
    {% if isPrimary %}<strong>{% endif %}
        {{ email.renderEmailWithActions(emailAddress, entity) }}
    {% if isPrimary %}</strong>{% endif %}
{% endmacro %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.user.username.label'|trans, entity.username) }}
            {{ ui.renderProperty('oro.user.birthday.label'|trans, ui.render_birthday(entity.birthday)) }}

            {% set emails = [userInfo.renderEmail(entity.email, true, entity)] %}
            {% for emailEntity in entity.emails %}
                {% set emails = emails|merge([userInfo.renderEmail(emailEntity.email, false, entity)]) %}
            {% endfor %}
            {{ ui.renderHtmlProperty('oro.user.emails.label'|trans, emails|join('<br />')) }}

            {{ ui.renderHtmlProperty('oro.user.phone.label'|trans, entity.phone ? ui.renderPhoneWithActions(entity.phone, entity) : null) }}

            {% if is_granted('oro_user_role_view') %}
                {% set roles = [] %}
                {% for entityRole in entity.userRoles %}
                    {% set roles = roles|merge([entityRole.label]) %}
                {% endfor %}
                {{ ui.renderHtmlProperty('oro.user.roles.label'|trans, roles|join('\\n')|escape|nl2br) }}
            {% endif %}

            {% if is_granted('oro_user_group_view') %}
                {{ ui.renderHtmlProperty('oro.user.groups.label'|trans, entity.groups|join('\\n')|escape|nl2br) }}
            {% endif %}

            {% if is_granted('oro_business_unit_view') %}
                {{ ui.renderHtmlProperty('oro.user.business_units.label'|trans, entity.businessUnits|join('\\n')|escape|nl2br) }}
            {% endif %}

            {{ entityConfig.renderDynamicFields(entity) }}
        </div>
    </div>
</div>

", "@OroUser/User/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/widget/info.html.twig");
    }
}
