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

/* @OroAnalytics/Form/form.html.twig */
class __TwigTemplate_da7fce3e34128ceabc2e905bd045522b extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAnalytics/Form/form.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/Form/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/Form/form.html.twig"));

        // line 1
        if ((((array_key_exists("form", $context) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recency", [], "any", true, true, false, 1)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "frequency", [], "any", true, true, false, 1)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monetary", [], "any", true, true, false, 1))) {
            // line 2
            echo "    ";
            $context["options"] = ["rfm_enable_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "rfm_enabled", [], "any", false, false, false, 2), "vars", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)];
            // line 3
            echo "    ";
            $context["rfmEnabled"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 3), "value", [], "any", false, true, false, 3), "data", [], "any", false, true, false, 3), "rfm_enabled", [], "any", true, true, false, 3) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "data", [], "any", false, false, false, 3), "rfm_enabled", [], "any", false, false, false, 3));
            // line 4
            echo "    <div class=\"rfm-settings ";
            if ((isset($context["rfmEnabled"]) || array_key_exists("rfmEnabled", $context) ? $context["rfmEnabled"] : (function () { throw new RuntimeError('Variable "rfmEnabled" does not exist.', 4, $this->source); })())) {
                echo "rfm-enabled";
            }
            echo "\"
        data-page-component-module=\"oroanalytics/js/app/components/rfm-settings\"
        data-page-component-options=\"";
            // line 6
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "\">

        <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.rfm_setting.title"), "html", null, true);
            echo "</h4>

        ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "rfm_enabled", [], "any", false, false, false, 10), 'row');
            echo "

        <div class=\"control-group rfm-settings-data\">
            <div class=\"controls\">
                <div class=\"hide\">
                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recency", [], "any", true, true, false, 15)) {
                // line 16
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "recency", [], "any", false, false, false, 16), 'widget');
                echo "
                    ";
            }
            // line 18
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "frequency", [], "any", true, true, false, 18)) {
                // line 19
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "frequency", [], "any", false, false, false, 19), 'widget');
                echo "
                    ";
            }
            // line 21
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monetary", [], "any", true, true, false, 21)) {
                // line 22
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "monetary", [], "any", false, false, false, 22), 'widget');
                echo "
                    ";
            }
            // line 24
            echo "                </div>

                ";
            // line 26
            if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "recency", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "frequency", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "monetary", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0))) {
                // line 27
                echo "                    <div class=\"alert alert-error\" role=\"alert\">
                        <ul>
                            ";
                // line 29
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "recency", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
                    // line 30
                    echo "                                <li>
                                    <strong>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.recency.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 32
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "recency", [], "any", false, false, false, 32), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 35
                echo "
                            ";
                // line 36
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "frequency", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36)) > 0)) {
                    // line 37
                    echo "                                <li>
                                    <strong>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.frequency.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 39
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "frequency", [], "any", false, false, false, 39), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 42
                echo "
                            ";
                // line 43
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "monetary", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
                    // line 44
                    echo "                                <li>
                                    <strong>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.monetary.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "monetary", [], "any", false, false, false, 46), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 49
                echo "                        </ul>
                    </div>
                ";
            }
            // line 52
            echo "
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.score.title"), "html", null, true);
            echo "</label></th>
                        <th>
                            ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "recency", [], "any", false, false, false, 58), 'label');
            echo "
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.recency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "frequency", [], "any", false, false, false, 62), 'label');
            echo "
                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.frequency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "monetary", [], "any", false, false, false, 66), 'label');
            echo "
                            ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.monetary"), "html", null, true);
            echo "
                        </th>
                        <th class=\"action-column\"><label>";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.actions.title"), "html", null, true);
            echo "</label></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <button type=\"button\" class=\"btn action-add\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.title.add_row"), "html", null, true);
            echo "
                </button>
            </div>
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
        return "@OroAnalytics/Form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 76,  212 => 69,  207 => 67,  203 => 66,  197 => 63,  193 => 62,  187 => 59,  183 => 58,  178 => 56,  172 => 52,  167 => 49,  161 => 46,  157 => 45,  154 => 44,  152 => 43,  149 => 42,  143 => 39,  139 => 38,  136 => 37,  134 => 36,  131 => 35,  125 => 32,  121 => 31,  118 => 30,  116 => 29,  112 => 27,  110 => 26,  106 => 24,  100 => 22,  97 => 21,  91 => 19,  88 => 18,  82 => 16,  80 => 15,  72 => 10,  67 => 8,  62 => 6,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form is defined and form.recency is defined or form.frequency is defined or form.monetary is defined %}
    {% set options = {rfm_enable_id: form.rfm_enabled.vars.id} %}
    {% set rfmEnabled = form.vars.value.data.rfm_enabled is defined and form.vars.value.data.rfm_enabled %}
    <div class=\"rfm-settings {% if rfmEnabled %}rfm-enabled{% endif %}\"
        data-page-component-module=\"oroanalytics/js/app/components/rfm-settings\"
        data-page-component-options=\"{{ options|json_encode }}\">

        <h4>{{ 'oro.analytics.form.rfm_setting.title'|trans }}</h4>

        {{ form_row(form.rfm_enabled) }}

        <div class=\"control-group rfm-settings-data\">
            <div class=\"controls\">
                <div class=\"hide\">
                    {% if form.recency is defined %}
                        {{ form_widget(form.recency) }}
                    {% endif %}
                    {% if form.frequency is defined %}
                        {{ form_widget(form.frequency) }}
                    {% endif %}
                    {% if form.monetary is defined %}
                        {{ form_widget(form.monetary) }}
                    {% endif %}
                </div>

                {% if form.recency.vars.errors|length > 0 or form.frequency.vars.errors|length > 0 or form.monetary.vars.errors|length > 0 %}
                    <div class=\"alert alert-error\" role=\"alert\">
                        <ul>
                            {% if form.recency.vars.errors|length > 0 %}
                                <li>
                                    <strong>{{ 'oro.analytics.rfm.recency.label'|trans }}</strong>
                                    {{ form_errors(form.recency) }}
                                </li>
                            {% endif %}

                            {% if form.frequency.vars.errors|length > 0 %}
                                <li>
                                    <strong>{{ 'oro.analytics.rfm.frequency.label'|trans }}</strong>
                                    {{ form_errors(form.frequency) }}
                                </li>
                            {% endif %}

                            {% if form.monetary.vars.errors|length > 0 %}
                                <li>
                                    <strong>{{ 'oro.analytics.rfm.monetary.label'|trans }}</strong>
                                    {{ form_errors(form.monetary) }}
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                {% endif %}

                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>{{ 'oro.analytics.form.score.title'|trans }}</label></th>
                        <th>
                            {{ form_label(form.recency) }}
                            {{ 'oro.analytics.form.hint.recency'|trans }}
                        </th>
                        <th>
                            {{ form_label(form.frequency) }}
                            {{ 'oro.analytics.form.hint.frequency'|trans }}
                        </th>
                        <th>
                            {{ form_label(form.monetary) }}
                            {{ 'oro.analytics.form.hint.monetary'|trans }}
                        </th>
                        <th class=\"action-column\"><label>{{ 'oro.analytics.form.actions.title'|trans }}</label></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <button type=\"button\" class=\"btn action-add\">
                    {{ 'oro.analytics.title.add_row'|trans }}
                </button>
            </div>
        </div>
    </div>
{% endif %}
", "@OroAnalytics/Form/form.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AnalyticsBundle/Resources/views/Form/form.html.twig");
    }
}
