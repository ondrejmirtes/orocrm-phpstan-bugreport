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

/* @OroCall/Call/widget/update.html.twig */
class __TwigTemplate_4331e70b520e266fdbbbf9c4f199e5e2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCall/Call/widget/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/widget/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/widget/update.html.twig"));

        // line 1
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Call logged successfully"), "triggerSuccess" => true, "remove" => true]];
            // line 9
            echo "
    ";
            // line 10
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 10, $this->source); })()));
            echo "
";
        } else {
            // line 12
            echo "    <div class=\"widget-content\">
        ";
            // line 13
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "valid", [], "any", false, false, false, 13) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)))) {
                // line 14
                echo "            <div class=\"alert alert-error\" role=\"alert\">
                <div class=\"message\">
                    ";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 20
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 24)) {
                // line 25
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "owner", [], "any", false, false, false, 25), 'row');
                echo "
                        ";
            }
            // line 27
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "subject", [], "any", false, false, false, 27), 'row');
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "notes", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "narrow-text-field"]]);
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "callDateTime", [], "any", false, false, false, 31), 'row');
            echo "
                        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "phoneNumber", [], "any", false, false, false, 32), 'row');
            echo "
                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "direction", [], "any", false, false, false, 33), 'row');
            echo "
                        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "duration", [], "any", false, false, false, 34), 'row');
            echo "
                        <div class=\"hide\">
                            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "callStatus", [], "any", false, false, false, 36), 'row');
            echo "
                        </div>
                    </div>
                    <div class=\"span6\">
                        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'rest');
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 43
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("call_log_widget_additional_properties", $context)) ? (_twig_default_filter((isset($context["call_log_widget_additional_properties"]) || array_key_exists("call_log_widget_additional_properties", $context) ? $context["call_log_widget_additional_properties"] : (function () { throw new RuntimeError('Variable "call_log_widget_additional_properties" does not exist.', 43, $this->source); })()), "call_log_widget_additional_properties")) : ("call_log_widget_additional_properties")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "formAction" => (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 43, $this->source); })()), "saved" => (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 43, $this->source); })())]);
            // line 44
            echo "                    </div>

                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)) {
                // line 49
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.update_log_call"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 51
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.log_call"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 53
            echo "                        ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("call_log_widget_update_actions", $context)) ? (_twig_default_filter((isset($context["call_log_widget_update_actions"]) || array_key_exists("call_log_widget_update_actions", $context) ? $context["call_log_widget_update_actions"] : (function () { throw new RuntimeError('Variable "call_log_widget_update_actions" does not exist.', 53, $this->source); })()), "call_log_widget_update_actions")) : ("call_log_widget_update_actions")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "formAction" => (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 53, $this->source); })()), "saved" => (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 53, $this->source); })())]);
            // line 54
            echo "                    </div>
                </fieldset>
            </form>
            ";
            // line 57
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()));
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
        return "@OroCall/Call/widget/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  165 => 54,  162 => 53,  156 => 51,  150 => 49,  148 => 48,  144 => 47,  139 => 44,  137 => 43,  131 => 40,  124 => 36,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  101 => 28,  96 => 27,  90 => 25,  88 => 24,  78 => 21,  75 => 20,  68 => 16,  64 => 14,  62 => 13,  59 => 12,  54 => 10,  51 => 9,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if saved is defined and saved %}
    {% set widgetResponse = {
        widget: {
            message: 'Call logged successfully'|trans,
            triggerSuccess: true,
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"widget-content\">
        {% if not form.vars.valid and form.vars.errors|length %}
            <div class=\"alert alert-error\" role=\"alert\">
                <div class=\"message\">
                    {{ form_errors(form) }}
                </div>
            </div>
        {% endif %}
        <div class=\"form-container\">
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"{{ formAction }}\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        {% if form.owner is defined %}
                            {{ form_row(form.owner) }}
                        {% endif %}
                        {{ form_row(form.subject) }}
                        {{ form_row(form.notes, { 'attr': {'class': 'narrow-text-field'} }) }}
                    </div>
                    <div class=\"span6\">
                        {{ form_row(form.callDateTime) }}
                        {{ form_row(form.phoneNumber) }}
                        {{ form_row(form.direction) }}
                        {{ form_row(form.duration) }}
                        <div class=\"hide\">
                            {{ form_row(form.callStatus) }}
                        </div>
                    </div>
                    <div class=\"span6\">
                        {{ form_rest(form) }}
                    </div>
                    <div class=\"span6\">
                        {% placeholder call_log_widget_additional_properties with {entity: entity, form: form, formAction: formAction, saved: saved} %}
                    </div>

                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        {% if form.vars.value.id %}
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'oro.call.update_log_call'|trans }}</button>
                        {% else %}
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'oro.call.log_call'|trans }}</button>
                        {% endif %}
                        {% placeholder call_log_widget_update_actions with {entity: entity, form: form, formAction: formAction, saved: saved} %}
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    </div>
{% endif %}
", "@OroCall/Call/widget/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-call-bundle/Resources/views/Call/widget/update.html.twig");
    }
}
