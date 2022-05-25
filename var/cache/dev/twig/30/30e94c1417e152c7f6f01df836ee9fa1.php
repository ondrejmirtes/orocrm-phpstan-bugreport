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

/* @OroUser/Mail/invite.html.twig */
class __TwigTemplate_c55ceef68ed2ec8a3faef7a3014b6d1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUser/Mail/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Mail/invite.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Mail/invite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Mail/invite.html.twig"));

        $this->parent = $this->loadTemplate("@OroUser/Mail/layout.html.twig", "@OroUser/Mail/invite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <style>
        @media (max-width: 480pt) {
            .wrapper{
                width: 100% !important;
            }
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

    <table class=\"wrapper\" style=\"border-collapse: collapse; width: 640px; width: 480pt; max-width: 100%; box-sizing: border-box\">
        <tr>
            <td style=\"background-color: #ffffff; padding: 4pt\">
                <span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14pt; line-height: 14pt; color: #444444\">Hello, ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "!</span>
                <div style=\"height: 10pt; line-height: 10pt\">&nbsp;</div>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 5pt 0;\">
                    A new user has been created for you at <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getAbsoluteUrl("oro_user_security_login"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_ui.application_url"), "html", null, true);
        echo "</a>
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    Please use the following credentials to log in:
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    <strong>Login:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "
                </p>

                ";
        // line 30
        if ( !twig_test_empty((isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Password:</strong> ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
                    </p>
                    <p></p>
                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>We strongly recommend that you change your password after logging in.</strong>
                    </p>
                ";
        } else {
            // line 39
            echo "                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Proceed to creating your own password by clicking the Reset Password button.</strong>
                    </p>
                    <table style=\"width: 100%;\">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td style=\"padding: 5pt 0; background: #2ea63a; width: 130pt; text-align: center\">
                                <a style=\"color: #ffffff; font-size: 11pt; text-transform: uppercase; text-decoration: none; line-height: 1em; font-family: Arial, Helvetica, sans-serif;\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getAbsoluteUrl("oro_user_reset_reset", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "confirmationToken", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" target=\"_blank\">
                                    RESET&nbsp;PASSWORD
                                </a>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                ";
        }
        // line 56
        echo "            </td>
        </tr>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/Mail/invite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 56,  141 => 47,  131 => 39,  121 => 32,  118 => 31,  116 => 30,  110 => 27,  99 => 21,  93 => 18,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUser/Mail/layout.html.twig' %}

{% block content %}
    <style>
        @media (max-width: 480pt) {
            .wrapper{
                width: 100% !important;
            }
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

    <table class=\"wrapper\" style=\"border-collapse: collapse; width: 640px; width: 480pt; max-width: 100%; box-sizing: border-box\">
        <tr>
            <td style=\"background-color: #ffffff; padding: 4pt\">
                <span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14pt; line-height: 14pt; color: #444444\">Hello, {{ user|oro_format_name }}!</span>
                <div style=\"height: 10pt; line-height: 10pt\">&nbsp;</div>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 5pt 0;\">
                    A new user has been created for you at <a href=\"{{ oro_get_absolute_url('oro_user_security_login') }}\">{{ oro_config_value('oro_ui.application_url') }}</a>
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    Please use the following credentials to log in:
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    <strong>Login:</strong> {{ user.username }}
                </p>

                {% if password is not empty %}
                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Password:</strong> {{ password }}
                    </p>
                    <p></p>
                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>We strongly recommend that you change your password after logging in.</strong>
                    </p>
                {% else %}
                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Proceed to creating your own password by clicking the Reset Password button.</strong>
                    </p>
                    <table style=\"width: 100%;\">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td style=\"padding: 5pt 0; background: #2ea63a; width: 130pt; text-align: center\">
                                <a style=\"color: #ffffff; font-size: 11pt; text-transform: uppercase; text-decoration: none; line-height: 1em; font-family: Arial, Helvetica, sans-serif;\" href=\"{{ oro_get_absolute_url('oro_user_reset_reset', { token: user.confirmationToken }) }}\" target=\"_blank\">
                                    RESET&nbsp;PASSWORD
                                </a>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                {% endif %}
            </td>
        </tr>
    </table>
{% endblock %}
", "@OroUser/Mail/invite.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Mail/invite.html.twig");
    }
}
