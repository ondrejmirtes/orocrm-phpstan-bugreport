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

/* @OroEmail/AutoResponseRule/dialog/update.html.twig */
class __TwigTemplate_5fc46ceb1af09921c4297478ad71c0e7 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/AutoResponseRule/dialog/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/AutoResponseRule/dialog/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/AutoResponseRule/dialog/update.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/AutoResponseRule/dialog/update.html.twig", 1)->unwrap();
        // line 2
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroEmail/AutoResponseRule/dialog/update.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["triggerSuccess" => true, "trigger" => [0 => ["name" => "auto_response_rule:save", "args" => [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]]], "remove" => true]];
            // line 15
            echo "
    ";
            // line 16
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 16, $this->source); })()));
            echo "
";
        } else {
            // line 18
            echo "    <div class=\"widget-content\">
        ";
            // line 19
            $context["pageComponent"] = ["view" => "oroemail/js/app/views/email-template-editor-view", "layout" => "separate"];
            // line 23
            echo "        <div class=\"form-container\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
            echo ">
            ";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(            // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31), "get", [0 => "_route"], "method", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", [0 => "_route_params"], "method", false, false, false, 32))]);
            // line 35
            echo "
                <fieldset class=\"form form-horizontal\">
                    <div>
                        ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "active", [], "any", false, false, false, 38), 'row');
            echo "
                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'row');
            echo "
                        <div class=\"control-group\">
                            <label class=\"required control-label\">
                                ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.autoresponserule.conditions.label"), "html", null, true);
            echo "
                            </label>
                            <div class=\"controls\">
                                ";
            // line 45
            echo twig_call_macro($macros["QD"], "macro_query_designer_condition_builder", [["id" => "oro_email_autoresponserule-condition-builder", "fieldConditionModule" => "oroemail/js/app/views/email-field-condition-view", "fieldConditionOptions" => ["entityData" =>             // line 49
(isset($context["emailEntityData"]) || array_key_exists("emailEntityData", $context) ? $context["emailEntityData"] : (function () { throw new RuntimeError('Variable "emailEntityData" does not exist.', 49, $this->source); })())], "metadata" =>             // line 51
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 51, $this->source); })())]], 45, $context, $this->getSourceContext());
            // line 52
            echo "
                            </div>
                        </div>
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'rest');
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        ";
            // line 59
            $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "data", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)) ? ("Update") : ("Add"));
            // line 60
            echo "                        <button class=\"btn btn-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 60, $this->source); })())), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            ";
            // line 63
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
            echo "
            ";
            // line 64
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()));
            echo "
            <div";
            // line 65
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroemail/js/app/components/auto-response-rule-component"]], 65, $context, $this->getSourceContext());
            // line 67
            echo "></div>
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
        return "@OroEmail/AutoResponseRule/dialog/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 67,  140 => 65,  136 => 64,  132 => 63,  125 => 60,  123 => 59,  119 => 58,  113 => 55,  108 => 52,  106 => 51,  105 => 49,  104 => 45,  98 => 42,  92 => 39,  88 => 38,  83 => 35,  81 => 32,  80 => 31,  79 => 28,  78 => 25,  77 => 24,  72 => 23,  70 => 19,  67 => 18,  62 => 16,  59 => 15,  57 => 10,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}

{% if saved %}
    {% set widgetResponse = {
        widget: {
            triggerSuccess: true,
            trigger: [{
                name: 'auto_response_rule:save',
                args: [form.vars.value.id],
            }],
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"widget-content\">
        {% set pageComponent = {
            'view': 'oroemail/js/app/views/email-template-editor-view',
            'layout': 'separate'
        } %}
        <div class=\"form-container\" {{ UI.renderPageComponentAttributes(pageComponent) }}>
            {{ form_start(
                form,
                {
                    attr: {
                        id: form.vars.id,
                    },
                    action: path(
                        app.request.attributes.get('_route'),
                        app.request.attributes.get('_route_params')
                    )
                }
            ) }}
                <fieldset class=\"form form-horizontal\">
                    <div>
                        {{ form_row(form.active) }}
                        {{ form_row(form.name) }}
                        <div class=\"control-group\">
                            <label class=\"required control-label\">
                                {{ 'oro.email.autoresponserule.conditions.label'|trans }}
                            </label>
                            <div class=\"controls\">
                                {{ QD.query_designer_condition_builder({
                                    'id': 'oro_email_autoresponserule-condition-builder',
                                    'fieldConditionModule': 'oroemail/js/app/views/email-field-condition-view',
                                    'fieldConditionOptions': {
                                        'entityData': emailEntityData
                                    },
                                    'metadata': metadata
                                }) }}
                            </div>
                        </div>
                        {{ form_rest(form) }}
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        {% set label = form.vars.data.id ? 'Update' : 'Add' %}
                        <button class=\"btn btn-primary\" type=\"submit\">{{ label|trans }}</button>
                    </div>
                </fieldset>
            {{ form_end(form) }}
            {{ oro_form_js_validation(form) }}
            <div{{ UI.renderPageComponentAttributes({
                'module': 'oroemail/js/app/components/auto-response-rule-component'
            }) }}></div>
        </div>
    </div>
{% endif %}
", "@OroEmail/AutoResponseRule/dialog/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/AutoResponseRule/dialog/update.html.twig");
    }
}
