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

/* @OroEntityExtend/Form/fields.html.twig */
class __TwigTemplate_933dca95b364b78d8fa1c5c2e2476597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_entity_extend_enum_value_widget' => [$this, 'block_oro_entity_extend_enum_value_widget'],
            'oro_entity_extend_enum_value_collection_widget' => [$this, 'block_oro_entity_extend_enum_value_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityExtend/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_entity_extend_enum_value_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_entity_extend_enum_value_collection_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_entity_extend_enum_value_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_extend_enum_value_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_widget"));

        // line 2
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "label", [], "any", false, false, false, 2), "vars", [], "any", false, false, false, 2), "errors", [], "any", false, false, false, 2)) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 4, $this->source); })())]);
        echo "
            <span class=\"add-on ui-sortable-handle";
        // line 5
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 5, $this->source); })())) {
            echo " disabled";
        }
        echo "\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.enum_options.priority.tooltip"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v ";
        // line 8
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "priority", [], "any", false, false, false, 9), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 9, $this->source); })())]);
        echo "
            </span>
            <label class=\"add-on";
        // line 11
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 11, $this->source); })())) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.enum_options.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "is_default", [], "any", false, false, false, 12), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 12, $this->source); })())]);
        echo "
            </label>
        </div>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "label", [], "any", false, false, false, 15), 'errors');
        echo "
    </div>
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 20
    public function block_oro_entity_extend_enum_value_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_extend_enum_value_collection_widget", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_collection_widget"));

        // line 21
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityExtend/Form/fields.html.twig", 21)->unwrap();
        // line 22
        echo "    ";
        if ( !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <div class=\"enum-value-collection\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "oroentityextend/js/app/views/enum-values-view", "multiple" =>             // line 27
(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 27, $this->source); })()), "autoRender" => true]]], 23, $context, $this->getSourceContext());
            // line 30
            echo ">
            ";
            // line 31
            $this->displayBlock("oro_collection_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 34
            echo "        ";
            $this->displayBlock("oro_collection_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityExtend/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 34,  173 => 31,  170 => 30,  168 => 27,  166 => 23,  163 => 22,  160 => 21,  147 => 20,  132 => 17,  127 => 15,  121 => 12,  113 => 11,  108 => 9,  102 => 8,  98 => 7,  91 => 5,  87 => 4,  79 => 2,  66 => 1,  53 => 20,  50 => 19,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_entity_extend_enum_value_widget %}
    <div class=\"float-holder {% if form.label.vars.errors|length > 0 %} validation-error{% endif %}\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            {{ form_widget(form.label, {disabled: disabled}) }}
            <span class=\"add-on ui-sortable-handle{% if disabled %} disabled{% endif %}\"
                  data-name=\"sortable-handle\"
                  title=\"{{ 'oro.entity_extend.enum_options.priority.tooltip'|trans }}\">
                <i class=\"fa-arrows-v {% if disabled %} disabled{% endif %}\"></i>
                {{ form_widget(form.priority, {disabled: disabled}) }}
            </span>
            <label class=\"add-on{% if disabled %} disabled{% endif %}\" title=\"{{ 'oro.entity_extend.enum_options.default.tooltip'|trans }}\">
                {{ form_widget(form.is_default, {disabled: disabled}) }}
            </label>
        </div>
        {{ form_errors(form.label) }}
    </div>
    {{ form_rest(form) }}
{% endblock %}

{% block oro_entity_extend_enum_value_collection_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% if not disabled %}
        <div class=\"enum-value-collection\" {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/view-component',
            options: {
                view: 'oroentityextend/js/app/views/enum-values-view',
                multiple: multiple,
                autoRender: true
            }
        }) }}>
            {{ block('oro_collection_widget') }}
        </div>
    {% else %}
        {{ block('oro_collection_widget') }}
    {% endif %}
{% endblock %}
", "@OroEntityExtend/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityExtendBundle/Resources/views/Form/fields.html.twig");
    }
}
