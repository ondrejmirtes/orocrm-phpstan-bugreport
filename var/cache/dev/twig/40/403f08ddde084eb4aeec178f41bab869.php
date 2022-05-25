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

/* @OroSecurity/Organization/selector.html.twig */
class __TwigTemplate_95258a107ea29974440c6a4069c0cf86 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSecurity/Organization/selector.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSecurity/Organization/selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSecurity/Organization/selector.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSecurity/Organization/selector.html.twig", 1)->unwrap();
        // line 2
        $macros["organizationSelector"] = $this->macros["organizationSelector"] = $this;
        // line 3
        echo "
";
        // line 4
        $context["curr_organization"] = $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->getCurrentOrganization();
        // line 5
        $context["organizations"] = $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->getOrganizations();
        // line 6
        echo "
";
        // line 7
        ob_start();
        // line 8
        ob_start();
        // line 9
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("organization_name", $context)) ? (_twig_default_filter((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 9, $this->source); })()), "organization_name")) : ("organization_name")), array());
        $___internal_parse_39_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo twig_spaceless($___internal_parse_39_);
        $context["organization_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 14
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) || array_key_exists("organizations", $context) ? $context["organizations"] : (function () { throw new RuntimeError('Variable "organizations" does not exist.', 14, $this->source); })())) > 1)) {
                // line 15
                echo "        <div class=\"nav logo-wrapper dropdown\"
            ";
                // line 16
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orosecurity/js/app/components/switch-organization-component", "options" => ["currentOrganizationId" => twig_get_attribute($this->env, $this->source,                 // line 19
(isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 19, $this->source); })()), "getId", [], "method", false, false, false, 19)]]], 16, $context, $this->getSourceContext());
                // line 21
                echo "
        >
            ";
                // line 23
                echo twig_call_macro($macros["UI"], "macro_app_logo", [(isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
                echo "
            ";
                // line 24
                echo twig_call_macro($macros["organizationSelector"], "macro_organization_name_and_logo", [(isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
                echo "
            ";
                // line 25
                $context["togglerId"] = uniqid("dropdown-");
                // line 26
                echo "            <span id=\"";
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "\" class=\"dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"
                  role=\"button\" aria-label=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.security.organization.switch"), "html", null, true);
                echo "\" aria-haspopup=\"true\" aria-expanded=\"false\"></span>
            <ul class=\"dropdown-menu dropdown-organization-switcher\" role=\"menu\" aria-labelledby=\"";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) || array_key_exists("organizations", $context) ? $context["organizations"] : (function () { throw new RuntimeError('Variable "organizations" does not exist.', 29, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 30
                    echo "                    <li>
                        ";
                    // line 31
                    if (((isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 31, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 31, $this->source); })()), "getId", [], "method", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["organization"], "id", [], "any", false, false, false, 31)))) {
                        // line 32
                        echo "                        <span class=\"dropdown-item-text selected\" aria-selected=\"true\"><b>";
                        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["organization"], "name", [], "any", false, false, false, 32)), "html", null, true);
                        echo "</b></span>
                        ";
                    } else {
                        // line 34
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_security_switch_organization", ["id" => twig_get_attribute($this->env, $this->source, $context["organization"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                        echo "\"
                           class=\"dropdown-item organization-switcher no-hash\">";
                        // line 36
                        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["organization"], "name", [], "any", false, false, false, 36)), "html", null, true);
                        // line 37
                        echo "</a>
                        ";
                    }
                    // line 39
                    echo "                    </li>
                    ";
                    // line 40
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    ";
                    }
                    // line 45
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            </ul>
        </div>
    ";
            } else {
                // line 49
                echo "        <div class=\"nav logo-wrapper\">
            ";
                // line 50
                echo twig_call_macro($macros["UI"], "macro_app_logo", [(isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 50, $this->source); })())], 50, $context, $this->getSourceContext());
                echo "
            ";
                // line 51
                echo twig_call_macro($macros["organizationSelector"], "macro_organization_name_and_logo", [(isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 51, $this->source); })())], 51, $context, $this->getSourceContext());
                echo "
        </div>
    ";
            }
        } else {
            // line 55
            echo "    ";
            // line 56
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) || array_key_exists("organizations", $context) ? $context["organizations"] : (function () { throw new RuntimeError('Variable "organizations" does not exist.', 56, $this->source); })())) > 1)) {
                // line 57
                echo "        <div class=\"organization-switcher dropdown\"
            ";
                // line 58
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orosecurity/js/app/components/switch-organization-component", "options" => ["currentOrganizationId" => twig_get_attribute($this->env, $this->source,                 // line 61
(isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 61, $this->source); })()), "getId", [], "method", false, false, false, 61)]]], 58, $context, $this->getSourceContext());
                // line 63
                echo "
        >
            ";
                // line 65
                $context["togglerId"] = uniqid("dropdown-");
                // line 66
                echo "            <a id=\"";
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\" href=\"#\" role=\"button\" class=\"logo dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"
                aria-label=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.security.organization.switch"), "html", null, true);
                echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"organization-name\">";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "</span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) || array_key_exists("organizations", $context) ? $context["organizations"] : (function () { throw new RuntimeError('Variable "organizations" does not exist.', 71, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 72
                    echo "                    ";
                    $context["is_current_organization"] = ((isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 72, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["curr_organization"]) || array_key_exists("curr_organization", $context) ? $context["curr_organization"] : (function () { throw new RuntimeError('Variable "curr_organization" does not exist.', 72, $this->source); })()), "getId", [], "method", false, false, false, 72) == twig_get_attribute($this->env, $this->source, $context["organization"], "id", [], "any", false, false, false, 72)));
                    // line 73
                    echo "                    <li ";
                    if ((isset($context["is_current_organization"]) || array_key_exists("is_current_organization", $context) ? $context["is_current_organization"] : (function () { throw new RuntimeError('Variable "is_current_organization" does not exist.', 73, $this->source); })())) {
                        echo "class=\"current\"";
                    }
                    echo ">
                        <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_security_switch_organization", ["id" => twig_get_attribute($this->env, $this->source, $context["organization"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\" class=\"dropdown-item no-hash\"
                           ";
                    // line 75
                    if ((isset($context["is_current_organization"]) || array_key_exists("is_current_organization", $context) ? $context["is_current_organization"] : (function () { throw new RuntimeError('Variable "is_current_organization" does not exist.', 75, $this->source); })())) {
                        echo "aria-selected=\"true\"";
                    }
                    echo ">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["organization"], "name", [], "any", false, false, false, 76), "html", null, true);
                    // line 77
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "            </ul>
        </div>
    ";
            } else {
                // line 83
                echo "        <h1 class=\"logo\">
            <a href=\"";
                // line 84
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_trim_filter(twig_striptags((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 84, $this->source); })()))), "html", null, true);
                echo "\" class=\"organization-name\">";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 85, $this->source); })()), "html", null, true);
                // line 86
                echo "</a>
        </h1>
    ";
            }
        }
        // line 90
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 91
    public function macro_organization_name_and_logo($__organization_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "organization_name" => $__organization_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "organization_name_and_logo"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "organization_name_and_logo"));

            // line 92
            echo "    ";
            if (twig_length_filter($this->env, (isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 92, $this->source); })()))) {
                // line 93
                echo "        <div class=\"logo logo-text\">
            <a href=\"";
                // line 94
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 94, $this->source); })()), "html", null, true);
                echo "\" class=\"organization-name\">";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 95, $this->source); })()), "html", null, true);
                // line 96
                echo "</a>
        </div>
    ";
            } else {
                // line 99
                echo "        <span class=\"logo-placeholder\"></span>
    ";
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
        return "@OroSecurity/Organization/selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 99,  330 => 96,  328 => 95,  323 => 94,  320 => 93,  317 => 92,  298 => 91,  284 => 90,  278 => 86,  276 => 85,  271 => 84,  268 => 83,  263 => 80,  255 => 77,  253 => 76,  248 => 75,  244 => 74,  237 => 73,  234 => 72,  230 => 71,  226 => 70,  221 => 68,  217 => 67,  212 => 66,  210 => 65,  206 => 63,  204 => 61,  203 => 58,  200 => 57,  197 => 56,  195 => 55,  188 => 51,  184 => 50,  181 => 49,  176 => 46,  162 => 45,  156 => 41,  154 => 40,  151 => 39,  147 => 37,  145 => 36,  140 => 34,  134 => 32,  132 => 31,  129 => 30,  112 => 29,  108 => 28,  104 => 27,  99 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 21,  83 => 19,  82 => 16,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  68 => 8,  64 => 9,  62 => 8,  60 => 7,  57 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import _self as organizationSelector %}

{% set curr_organization = get_current_organization() %}
{% set organizations = get_enabled_organizations() %}

{% set organization_name %}
{% apply spaceless %}
    {% placeholder organization_name %}
{% endapply %}
{% endset %}

{% if isDesktopVersion() %}
    {% if organizations|length > 1 %}
        <div class=\"nav logo-wrapper dropdown\"
            {{ UI.renderPageComponentAttributes({
                module: 'orosecurity/js/app/components/switch-organization-component',
                options: {
                    currentOrganizationId: curr_organization.getId()
                }
            }) }}
        >
            {{ UI.app_logo(organization_name) }}
            {{ organizationSelector.organization_name_and_logo(organization_name) }}
            {% set togglerId = 'dropdown-'|uniqid %}
            <span id=\"{{ togglerId }}\" class=\"dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"
                  role=\"button\" aria-label=\"{{ 'oro.security.organization.switch'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\"></span>
            <ul class=\"dropdown-menu dropdown-organization-switcher\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                {% for organization in organizations %}
                    <li>
                        {% if curr_organization and curr_organization.getId() == organization.id %}
                        <span class=\"dropdown-item-text selected\" aria-selected=\"true\"><b>{{- organization.name|trim -}}</b></span>
                        {% else %}
                        <a href=\"{{ path('oro_security_switch_organization', {'id': organization.id}) }}\"
                           class=\"dropdown-item organization-switcher no-hash\">
                            {{- organization.name|trim -}}
                        </a>
                        {% endif %}
                    </li>
                    {% if not loop.last %}
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    {% else %}{# if organizations|length == 1 #}
        <div class=\"nav logo-wrapper\">
            {{ UI.app_logo(organization_name) }}
            {{ organizationSelector.organization_name_and_logo(organization_name) }}
        </div>
    {% endif %}
{% else %}
    {# Mobile view #}
    {% if organizations|length > 1 %}
        <div class=\"organization-switcher dropdown\"
            {{ UI.renderPageComponentAttributes({
                module: 'orosecurity/js/app/components/switch-organization-component',
                options: {
                    currentOrganizationId: curr_organization.getId()
                }
            }) }}
        >
            {% set togglerId = 'dropdown-'|uniqid %}
            <a id=\"{{ togglerId }}\" href=\"#\" role=\"button\" class=\"logo dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"
                aria-label=\"{{ 'oro.security.organization.switch'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"organization-name\">{{- organization_name -}}</span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                {% for organization in organizations %}
                    {% set is_current_organization = curr_organization and curr_organization.getId() == organization.id %}
                    <li {% if is_current_organization %}class=\"current\"{% endif %}>
                        <a href=\"{{ path('oro_security_switch_organization', {'id': organization.id}) }}\" class=\"dropdown-item no-hash\"
                           {% if is_current_organization %}aria-selected=\"true\"{% endif %}>
                            {{- organization.name -}}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% else %}{# if organizations|length == 1 #}
        <h1 class=\"logo\">
            <a href=\"{{ path('oro_default') }}\" title=\"{{ organization_name|striptags|trim }}\" class=\"organization-name\">
                {{- organization_name -}}
            </a>
        </h1>
    {% endif %}
{% endif %}

{% macro organization_name_and_logo(organization_name) %}
    {% if organization_name|length %}
        <div class=\"logo logo-text\">
            <a href=\"{{ path('oro_default') }}\" title=\"{{ organization_name }}\" class=\"organization-name\">
                {{- organization_name -}}
            </a>
        </div>
    {% else %}
        <span class=\"logo-placeholder\"></span>
    {% endif %}
{% endmacro %}
", "@OroSecurity/Organization/selector.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SecurityBundle/Resources/views/Organization/selector.html.twig");
    }
}
