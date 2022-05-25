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

/* @OroUser/Reset/dialog/update.html.twig */
class __TwigTemplate_43f103b55a3e3964d1d47508d1c0d077 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Reset/dialog/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/dialog/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/dialog/update.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "@OroForm/Form/fields.html.twig", true);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.password.reset_password.flash.success"), "messageAfterPageChange" => true, "triggerSuccess" => true, "trigger" => [0 => ["eventFunction" => "execute", "name" => "refreshPage"]], "remove" => true]];
            // line 16
            echo "
    ";
            // line 17
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 17, $this->source); })()));
            echo "
";
        } else {
            // line 19
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Reset/dialog/update.html.twig", 19)->unwrap();
            // line 20
            echo "
    <div class=\"widget-content\" ";
            // line 21
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orouser/js/app/views/user-reset-password-view", "options" => ["passwordInputSelector" => "[data-ftid=oro_set_password_form_password]"]]], 21, $context, $this->getSourceContext());
            // line 26
            echo ">
        <div class=\"form-container\">
            <form id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" method=\"post\" class=\"change-password-form\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 30
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "valid", [], "any", false, false, false, 30) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)))) {
                // line 31
                echo "                        <div class=\"alert alert-error\" role=\"alert\">
                            <div class=\"message\">
                                ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 37
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'row');
            echo "
                </fieldset>
                <fieldset class=\"form-horizontal\">
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 47
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()));
            echo "
        </div>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/Reset/dialog/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  114 => 43,  110 => 42,  105 => 40,  98 => 37,  91 => 33,  87 => 31,  85 => 30,  76 => 28,  72 => 26,  70 => 21,  67 => 20,  64 => 19,  59 => 17,  56 => 16,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form with '@OroForm/Form/fields.html.twig' %}

{% if saved %}
    {% set widgetResponse = {
        widget: {
            message: 'oro.user.password.reset_password.flash.success'|trans,
            messageAfterPageChange: true,
            triggerSuccess: true,
            trigger: [{
                eventFunction: 'execute',
                name: 'refreshPage',
            }],
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"widget-content\" {{ UI.renderPageComponentAttributes({
        view: 'orouser/js/app/views/user-reset-password-view',
        options: {
            passwordInputSelector: '[data-ftid=oro_set_password_form_password]'
        }
    }) }}>
        <div class=\"form-container\">
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"{{ formAction }}\" method=\"post\" class=\"change-password-form\">
                <fieldset class=\"form form-horizontal\">
                    {% if not form.vars.valid and form.vars.errors|length %}
                        <div class=\"alert alert-error\" role=\"alert\">
                            <div class=\"message\">
                                {{ form_errors(form) }}
                            </div>
                        </div>
                    {% endif %}
                    {{ form_row(form.password) }}
                </fieldset>
                <fieldset class=\"form-horizontal\">
                    {{ form_rest(form) }}
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    </div>
{% endif %}
", "@OroUser/Reset/dialog/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Reset/dialog/update.html.twig");
    }
}
