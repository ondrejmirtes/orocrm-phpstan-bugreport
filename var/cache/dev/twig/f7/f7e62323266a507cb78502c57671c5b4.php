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

/* @OroUser/Reset/request.html.twig */
class __TwigTemplate_7c9a72753a1f453cd0f9f1c9703cf851 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyClass' => [$this, 'block_bodyClass'],
            'messages' => [$this, 'block_messages'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Reset/request.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/request.html.twig"));

        $this->parent = $this->loadTemplate("@OroUser/layout.html.twig", "@OroUser/Reset/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "login-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 4
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("messages", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 5
        echo "    ";
        $context["messagesContent"] = $this->renderParentBlock("messages", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<div class=\"container\">
    <div class=\"form-wrapper\">
        <div class=\"form-wrapper__inner\">
            ";
        // line 12
        $context["requestLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Request");
        // line 13
        echo "            ";
        $context["returnToLoginLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return to Login");
        // line 14
        echo "            ";
        $context["showLabels"] = ((twig_length_filter($this->env, (isset($context["requestLabel"]) || array_key_exists("requestLabel", $context) ? $context["requestLabel"] : (function () { throw new RuntimeError('Variable "requestLabel" does not exist.', 14, $this->source); })())) <= 9) && (twig_length_filter($this->env, (isset($context["returnToLoginLabel"]) || array_key_exists("returnToLoginLabel", $context) ? $context["returnToLoginLabel"] : (function () { throw new RuntimeError('Variable "returnToLoginLabel" does not exist.', 14, $this->source); })())) <= 15));
        // line 15
        echo "            ";
        $context["layoutName"] = (((isset($context["showLabels"]) || array_key_exists("showLabels", $context) ? $context["showLabels"] : (function () { throw new RuntimeError('Variable "showLabels" does not exist.', 15, $this->source); })())) ? ("form-row-layout") : ("form-column-layout"));
        // line 16
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_reset_send_email");
        echo "\" method=\"post\" class=\"form-signin form-signin--forgot ";
        echo twig_escape_filter($this->env, (isset($context["layoutName"]) || array_key_exists("layoutName", $context) ? $context["layoutName"] : (function () { throw new RuntimeError('Variable "layoutName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"title-box\">
                    <h2 class=\"title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password"), "html", null, true);
        echo "</h2>
                </div>
                <fieldset class=\"form-signin__fieldset\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) || array_key_exists("messagesContent", $context) ? $context["messagesContent"] : (function () { throw new RuntimeError('Variable "messagesContent" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
                    <input type=\"text\" id=\"prependedInput\" name=\"username\" required=\"required\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username or Email"), "html", null, true);
        echo "\" autofocus/>
                    <input type=\"hidden\" name=\"frontend\" value=\"1\" />
                    <div class=\"form-row form-signin__footer form-signin__footer\">
                        <button type=\"submit\" class=\"btn extra-submit btn-uppercase btn-primary\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["requestLabel"]) || array_key_exists("requestLabel", $context) ? $context["requestLabel"] : (function () { throw new RuntimeError('Variable "requestLabel" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_security_login");
        echo "\">&laquo; ";
        echo twig_escape_filter($this->env, (isset($context["returnToLoginLabel"]) || array_key_exists("returnToLoginLabel", $context) ? $context["returnToLoginLabel"] : (function () { throw new RuntimeError('Variable "returnToLoginLabel" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</a>
                    </div>
                </fieldset>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("oro-user-password-reset-request"), "html", null, true);
        echo "\"/>
            </form>
        </div>
        <div class=\"login-copyright\">";
        // line 32
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
        return "@OroUser/Reset/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 32,  183 => 29,  175 => 26,  171 => 25,  165 => 22,  161 => 21,  155 => 18,  147 => 16,  144 => 15,  141 => 14,  138 => 13,  136 => 12,  131 => 9,  118 => 8,  104 => 5,  91 => 4,  66 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUser/layout.html.twig' %}

{% block bodyClass %}login-page{% endblock %}
{% block messages %}
    {% set messagesContent = parent() %}
{% endblock messages %}

{% block content %}
<div class=\"container\">
    <div class=\"form-wrapper\">
        <div class=\"form-wrapper__inner\">
            {% set requestLabel = 'Request'|trans %}
            {% set returnToLoginLabel = 'Return to Login'|trans %}
            {% set showLabels = (requestLabel|length <= 9) and (returnToLoginLabel|length <= 15) %}
            {% set layoutName = showLabels ? 'form-row-layout' : 'form-column-layout' %}
            <form action=\"{{ path('oro_user_reset_send_email') }}\" method=\"post\" class=\"form-signin form-signin--forgot {{ layoutName }}\">
                <div class=\"title-box\">
                    <h2 class=\"title\">{{ 'Forgot Password'|trans }}</h2>
                </div>
                <fieldset class=\"form-signin__fieldset\">
                    {{ messagesContent }}
                    <input type=\"text\" id=\"prependedInput\" name=\"username\" required=\"required\" placeholder=\"{{ 'Username or Email'|trans }}\" autofocus/>
                    <input type=\"hidden\" name=\"frontend\" value=\"1\" />
                    <div class=\"form-row form-signin__footer form-signin__footer\">
                        <button type=\"submit\" class=\"btn extra-submit btn-uppercase btn-primary\">{{ requestLabel }}</button>
                        <a href=\"{{ path('oro_user_security_login') }}\">&laquo; {{ returnToLoginLabel }}</a>
                    </div>
                </fieldset>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('oro-user-password-reset-request') }}\"/>
            </form>
        </div>
        <div class=\"login-copyright\">{{ 'oro.copyright'|trans({ '{{year}}': 'now'|date('Y') }) }}</div>
    </div>
</div>
{% endblock %}
", "@OroUser/Reset/request.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Reset/request.html.twig");
    }
}
