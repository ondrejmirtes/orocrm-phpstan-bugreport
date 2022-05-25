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

/* @OroImap/Connection/checkAuthorized.html.twig */
class __TwigTemplate_7c5cfdc8bdaac35f8cb850e5284847ec extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImap/Connection/checkAuthorized.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Connection/checkAuthorized.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Connection/checkAuthorized.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "imapAccountType", [], "any", false, false, false, 1), "userEmailOrigin", [], "any", false, false, false, 1), "user", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "value", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.reset_email.label"), "html", null, true);
            echo "
        </div>
        <div class=\"controls oro-item-collection\">
            <div class=\"controls-line-group\">
                <strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "imapAccountType", [], "any", false, false, false, 8), "userEmailOrigin", [], "any", false, false, false, 8), "user", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "html", null, true);
            echo "</strong>
                <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                        title=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.disconnect.label"), "html", null, true);
            echo "\"
                >
                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                </button>
            </div>
        </div>
    </div>
";
        }
        // line 18
        echo "
<div class=\"control-group\">
    <div class=\"controls\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imapAccountType", [], "any", false, false, false, 21), "userEmailOrigin", [], "any", false, false, false, 21), "checkFolder", [], "any", false, false, false, 21), 'row');
        echo "
    </div>
</div>
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "imapAccountType", [], "any", false, false, false, 24), "userEmailOrigin", [], "any", false, false, false, 24), "folders", [], "any", false, false, false, 24), 'row');
        echo "

";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "imapAccountType", [], "any", false, false, false, 26), "userEmailOrigin", [], "any", false, false, false, 26), "user", [], "any", false, false, false, 26), 'row');
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imapAccountType", [], "any", false, false, false, 27), "userEmailOrigin", [], "any", false, false, false, 27), "accessToken", [], "any", false, false, false, 27), 'row');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "imapAccountType", [], "any", false, false, false, 28), "userEmailOrigin", [], "any", false, false, false, 28), "refreshToken", [], "any", false, false, false, 28), 'row');
        echo "
";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "imapAccountType", [], "any", false, false, false, 29), "userEmailOrigin", [], "any", false, false, false, 29), "clientId", [], "any", false, false, false, 29), 'row');
        echo "
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "imapAccountType", [], "any", false, false, false, 30), "userEmailOrigin", [], "any", false, false, false, 30), "imapPort", [], "any", false, false, false, 30), 'row');
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "imapAccountType", [], "any", false, false, false, 31), "userEmailOrigin", [], "any", false, false, false, 31), "imapHost", [], "any", false, false, false, 31), 'row');
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "imapAccountType", [], "any", false, false, false, 32), "userEmailOrigin", [], "any", false, false, false, 32), "imapEncryption", [], "any", false, false, false, 32), 'row');
        echo "
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "imapAccountType", [], "any", false, false, false, 33), "userEmailOrigin", [], "any", false, false, false, 33), "smtpPort", [], "any", false, false, false, 33), 'row');
        echo "
";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "imapAccountType", [], "any", false, false, false, 34), "userEmailOrigin", [], "any", false, false, false, 34), "smtpHost", [], "any", false, false, false, 34), 'row');
        echo "
";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "imapAccountType", [], "any", false, false, false, 35), "userEmailOrigin", [], "any", false, false, false, 35), "smtpEncryption", [], "any", false, false, false, 35), 'row');
        echo "
";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "imapAccountType", [], "any", false, false, false, 36), "userEmailOrigin", [], "any", false, false, false, 36), "accessTokenExpiresAt", [], "any", false, false, false, 36), 'row');
        echo "
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "imapAccountType", [], "any", false, false, false, 37), "userEmailOrigin", [], "any", false, false, false, 37), "accountType", [], "any", false, false, false, 37), 'row');
        echo "

<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImap/Connection/checkAuthorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  86 => 24,  80 => 21,  75 => 18,  64 => 10,  59 => 8,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form.imapAccountType.userEmailOrigin.user.vars.value|length %}
    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            {{ 'oro.imap.configuration.reset_email.label'|trans }}
        </div>
        <div class=\"controls oro-item-collection\">
            <div class=\"controls-line-group\">
                <strong>{{ form.imapAccountType.userEmailOrigin.user.vars.value }}</strong>
                <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                        title=\"{{ 'oro.imap.configuration.disconnect.label'|trans }}\"
                >
                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                </button>
            </div>
        </div>
    </div>
{% endif %}

<div class=\"control-group\">
    <div class=\"controls\">
        {{ form_row(form.imapAccountType.userEmailOrigin.checkFolder) }}
    </div>
</div>
{{ form_row(form.imapAccountType.userEmailOrigin.folders) }}

{{ form_row(form.imapAccountType.userEmailOrigin.user) }}
{{ form_row(form.imapAccountType.userEmailOrigin.accessToken) }}
{{ form_row(form.imapAccountType.userEmailOrigin.refreshToken) }}
{{ form_row(form.imapAccountType.userEmailOrigin.clientId) }}
{{ form_row(form.imapAccountType.userEmailOrigin.imapPort) }}
{{ form_row(form.imapAccountType.userEmailOrigin.imapHost) }}
{{ form_row(form.imapAccountType.userEmailOrigin.imapEncryption) }}
{{ form_row(form.imapAccountType.userEmailOrigin.smtpPort) }}
{{ form_row(form.imapAccountType.userEmailOrigin.smtpHost) }}
{{ form_row(form.imapAccountType.userEmailOrigin.smtpEncryption) }}
{{ form_row(form.imapAccountType.userEmailOrigin.accessTokenExpiresAt) }}
{{ form_row(form.imapAccountType.userEmailOrigin.accountType) }}

<div class=\"control-group\">
    <div class=\"controls\">
        <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
    </div>
</div>
", "@OroImap/Connection/checkAuthorized.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/Connection/checkAuthorized.html.twig");
    }
}
