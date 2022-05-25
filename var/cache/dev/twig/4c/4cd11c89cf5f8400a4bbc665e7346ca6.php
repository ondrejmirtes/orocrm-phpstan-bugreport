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

/* @OroCurrency/Form/fields.html.twig */
class __TwigTemplate_a1d8a14f783e02bb29ba182916ad4b9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_currency_price_widget' => [$this, 'block_oro_currency_price_widget'],
            'oro_multicurrency_row' => [$this, 'block_oro_multicurrency_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCurrency/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCurrency/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCurrency/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_currency_price_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('oro_multicurrency_row', $context, $blocks);
        // line 59
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_currency_price_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_currency_price_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_currency_price_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_currency_price_widget"));

        // line 2
        echo "    <div class=\"currency-select-enabled\">
        <div class=\"multicurrency-fields-wrapper value-field input-append\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4), 'widget');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "currency", [], "any", false, false, false, 5), 'widget');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), 'errors');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "currency", [], "any", false, false, false, 7), 'errors');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block_oro_multicurrency_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_multicurrency_row", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multicurrency_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multicurrency_row"));

        // line 13
        echo "    <div class=\"control-group";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 13, $this->source); })()), "class", [], "any", false, false, false, 13), "html", null, true);
        }
        echo "\">
        <div class=\"control-label wrap\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'label');
        echo "
        </div>
        <div class=\"controls";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })())) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 18
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCurrency/Form/fields.html.twig", 18)->unwrap();
        // line 19
        echo "            <div class=\"currency-select-enabled\" ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "orocurrency/js/app/views/multicurrency-control-view", "autoRender" => true, "rates" =>         // line 24
(isset($context["currencyRates"]) || array_key_exists("currencyRates", $context) ? $context["currencyRates"] : (function () { throw new RuntimeError('Variable "currencyRates" does not exist.', 24, $this->source); })())]]], 19, $context, $this->getSourceContext());
        // line 26
        echo ">
                <div class=\"multicurrency-fields-wrapper value-field input-append\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "value", [], "any", false, false, false, 28), 'widget');
        echo "
                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "currency", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "hidden_field", [], "any", false, false, false, 29)) {
            // line 30
            echo "                        <span class=\"add-on\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "currency", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "choices", [], "any", false, false, false, 30), 0, [], "array", false, false, false, 30), "label", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
                        <input name=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "currency", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "full_name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "currency", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 33
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "currency", [], "any", false, false, false, 33), 'widget');
            echo "
                    ";
        }
        // line 35
        echo "                </div>
                ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baseCurrencyValue", [], "any", true, true, false, 36)) {
            // line 37
            echo "                    <div class=\"base-currency\">
                        <div class=\"base-currency-field input-append\">
                            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "baseCurrencyValue", [], "any", false, false, false, 39), 'widget');
            echo "
                            ";
            // line 40
            if (array_key_exists("defaultCurrency", $context)) {
                // line 41
                echo "                                <span class=\"add-on\">";
                echo twig_escape_filter($this->env, (isset($context["defaultCurrency"]) || array_key_exists("defaultCurrency", $context) ? $context["defaultCurrency"] : (function () { throw new RuntimeError('Variable "defaultCurrency" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "</span>
                            ";
            } else {
                // line 43
                echo "                                <span class=\"add-on\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "currency", [], "any", false, false, false, 43), 'widget');
                echo "</span>
                            ";
            }
            // line 45
            echo "                        </div>
                    </div>
                ";
        }
        // line 48
        echo "                <div class=\"default-currency-equivalent\" data-name=\"default-currency-equivalent\"></div>
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "currency", [], "any", false, false, false, 50), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "value", [], "any", false, false, false, 51), 'errors');
        echo "
                ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baseCurrencyValue", [], "any", true, true, false, 52)) {
            // line 53
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "baseCurrencyValue", [], "any", false, false, false, 53), 'errors');
            echo "
                ";
        }
        // line 55
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCurrency/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 55,  231 => 53,  229 => 52,  225 => 51,  221 => 50,  217 => 49,  214 => 48,  209 => 45,  203 => 43,  197 => 41,  195 => 40,  191 => 39,  187 => 37,  185 => 36,  182 => 35,  176 => 33,  169 => 31,  164 => 30,  162 => 29,  158 => 28,  154 => 26,  152 => 24,  150 => 19,  148 => 18,  142 => 17,  137 => 15,  128 => 13,  115 => 12,  98 => 7,  94 => 6,  90 => 5,  86 => 4,  82 => 2,  69 => 1,  55 => 59,  53 => 12,  50 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_currency_price_widget %}
    <div class=\"currency-select-enabled\">
        <div class=\"multicurrency-fields-wrapper value-field input-append\">
            {{ form_widget(form.value) }}
            {{ form_widget(form.currency) }}
            {{ form_errors(form.value) }}
            {{ form_errors(form.currency) }}
        </div>
    </div>
{% endblock %}

{% block oro_multicurrency_row %}
    <div class=\"control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}\">
        <div class=\"control-label wrap\">
            {{ form_label(form) }}
        </div>
        <div class=\"controls{% if errors|length > 0 %} validation-error{% endif %}\">
            {% import '@OroUI/macros.html.twig' as UI %}
            <div class=\"currency-select-enabled\" {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/view-component',
                options: {
                    view: 'orocurrency/js/app/views/multicurrency-control-view',
                    autoRender: true,
                    rates: currencyRates
                }
            }) }}>
                <div class=\"multicurrency-fields-wrapper value-field input-append\">
                    {{ form_widget(form.value) }}
                    {% if form.currency.vars.hidden_field %}
                        <span class=\"add-on\">{{ form.currency.vars.choices[0].label }}</span>
                        <input name=\"{{ form.currency.vars.full_name }}\" type=\"hidden\" value=\"{{ form.currency.vars.value }}\">
                    {% else %}
                        {{ form_widget(form.currency) }}
                    {% endif %}
                </div>
                {% if form.baseCurrencyValue is defined %}
                    <div class=\"base-currency\">
                        <div class=\"base-currency-field input-append\">
                            {{ form_widget(form.baseCurrencyValue) }}
                            {% if defaultCurrency is defined %}
                                <span class=\"add-on\">{{ defaultCurrency }}</span>
                            {% else %}
                                <span class=\"add-on\">{{ form_widget(form.currency) }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
                <div class=\"default-currency-equivalent\" data-name=\"default-currency-equivalent\"></div>
                {{ form_errors(form) }}
                {{ form_errors(form.currency) }}
                {{ form_errors(form.value) }}
                {% if form.baseCurrencyValue is defined %}
                    {{ form_errors(form.baseCurrencyValue) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

", "@OroCurrency/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CurrencyBundle/Resources/views/Form/fields.html.twig");
    }
}
