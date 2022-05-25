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

/* @OroUser/Reset/reset.html.twig */
class __TwigTemplate_2882175418c73440883d0812e3b94ac6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyClass' => [$this, 'block_bodyClass'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Reset/reset.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/reset.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "@OroUI/Form/login.html.twig", true);
        // line 1
        $this->parent = $this->loadTemplate("@OroUser/layout.html.twig", "@OroUser/Reset/reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "login-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"form-wrapper\">
            <div class=\"form-wrapper__inner\">
                ";
        // line 10
        $context["resetLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset");
        // line 11
        echo "                ";
        $context["cancelLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel");
        // line 12
        echo "                ";
        $context["showLabels"] = ((twig_length_filter($this->env, (isset($context["resetLabel"]) || array_key_exists("resetLabel", $context) ? $context["resetLabel"] : (function () { throw new RuntimeError('Variable "resetLabel" does not exist.', 12, $this->source); })())) <= 9) && (twig_length_filter($this->env, (isset($context["cancelLabel"]) || array_key_exists("cancelLabel", $context) ? $context["cancelLabel"] : (function () { throw new RuntimeError('Variable "cancelLabel" does not exist.', 12, $this->source); })())) <= 9));
        // line 13
        echo "                ";
        $context["layoutName"] = (((isset($context["showLabels"]) || array_key_exists("showLabels", $context) ? $context["showLabels"] : (function () { throw new RuntimeError('Variable "showLabels" does not exist.', 13, $this->source); })())) ? ("form-row-layout") : ("form-column-layout"));
        // line 14
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_reset_reset", ["token" =>         // line 15
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 15, $this->source); })())]), "attr" => ["class" => ("form-vertical form-signin form-signin--reset " .         // line 17
(isset($context["layoutName"]) || array_key_exists("layoutName", $context) ? $context["layoutName"] : (function () { throw new RuntimeError('Variable "layoutName" does not exist.', 17, $this->source); })()))]]);
        // line 19
        echo "
                    <div class=\"title-box\">
                        <h2 class=\"title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password Reset"), "html", null, true);
        echo "</h2>
                    </div>
                    <fieldset class=\"field-set form-signin__fieldset\">
                        ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) {
            // line 25
            echo "                            <div class=\"alert alert-error\" role=\"alert\">
                                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 29
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'rest');
        echo "
                        <div class=\"form-row form-signin__footer\">
                            <button class=\"btn extra-submit btn-uppercase btn-primary\" type=\"submit\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["resetLabel"]) || array_key_exists("resetLabel", $context) ? $context["resetLabel"] : (function () { throw new RuntimeError('Variable "resetLabel" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</button>
                            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_security_login");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, (isset($context["cancelLabel"]) || array_key_exists("cancelLabel", $context) ? $context["cancelLabel"] : (function () { throw new RuntimeError('Variable "cancelLabel" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</a>
                        </div>
                    </fieldset>
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"login-copyright\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.copyright", ["{{year}}" => twig_date_format_filter($this->env, "now", "Y")]), "html", null, true);
        echo "</div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/Reset/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 37,  166 => 35,  158 => 32,  154 => 31,  148 => 29,  142 => 26,  139 => 25,  137 => 24,  131 => 21,  127 => 19,  125 => 17,  124 => 15,  122 => 14,  119 => 13,  116 => 12,  113 => 11,  111 => 10,  106 => 7,  93 => 6,  68 => 4,  54 => 1,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUser/layout.html.twig' %}
{% form_theme form with '@OroUI/Form/login.html.twig' %}

{% block bodyClass %}login-page{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"form-wrapper\">
            <div class=\"form-wrapper__inner\">
                {% set resetLabel = 'Reset'|trans %}
                {% set cancelLabel = 'Cancel'|trans %}
                {% set showLabels = (resetLabel|length <= 9) and (cancelLabel|length <= 9) %}
                {% set layoutName = showLabels ? 'form-row-layout' : 'form-column-layout' %}
                {{ form_start(form, {
                    'action': path('oro_user_reset_reset', { token: token }),
                    'attr': {
                        'class': 'form-vertical form-signin form-signin--reset ' ~ layoutName
                    }
                }) }}
                    <div class=\"title-box\">
                        <h2 class=\"title\">{{ 'Password Reset'|trans }}</h2>
                    </div>
                    <fieldset class=\"field-set form-signin__fieldset\">
                        {% if form.vars.errors|length > 0 %}
                            <div class=\"alert alert-error\" role=\"alert\">
                                {{ form_errors(form) }}
                            </div>
                        {% endif %}
                        {{ form_rest(form) }}
                        <div class=\"form-row form-signin__footer\">
                            <button class=\"btn extra-submit btn-uppercase btn-primary\" type=\"submit\">{{ resetLabel }}</button>
                            <a href=\"{{ path('oro_user_security_login') }}\" class=\"btn\">{{ cancelLabel }}</a>
                        </div>
                    </fieldset>
                {{ form_end(form) }}
            </div>
            <div class=\"login-copyright\">{{ 'oro.copyright'|trans({ '{{year}}': 'now'|date('Y') }) }}</div>
        </div>
    </div>
{% endblock %}
", "@OroUser/Reset/reset.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Reset/reset.html.twig");
    }
}
