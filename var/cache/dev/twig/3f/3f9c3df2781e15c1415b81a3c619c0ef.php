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

/* @OroCache/Action/invalidate.html.twig */
class __TwigTemplate_037058b09d162632d5371dd5a075524f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroAction/Operation/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCache/Action/invalidate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCache/Action/invalidate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCache/Action/invalidate.html.twig"));

        $this->parent = $this->loadTemplate("@OroAction/Operation/form.html.twig", "@OroCache/Action/invalidate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form", $this->getTemplateName(), 2));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "    ";
        $context["buttonOptions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 3, $this->source); })()), "definition", [], "any", false, false, false, 3), "buttonOptions", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["pageComponentOptions"] = [];
        // line 5
        echo "    <div class=\"widget-content invalidate-cache-content\" data-page-component-module=\"orocache/js/app/components/invalidate-cache-component\">
        ";
        // line 6
        $context["attr"] = ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "data-collect" => "true", "class" => "form-dialog invalidate-cache-form"];
        // line 7
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["buttonOptions"] ?? null), "page_component_module", [], "any", true, true, false, 7)) {
            // line 8
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), ["data-page-component-module" => twig_get_attribute($this->env, $this->source, (isset($context["buttonOptions"]) || array_key_exists("buttonOptions", $context) ? $context["buttonOptions"] : (function () { throw new RuntimeError('Variable "buttonOptions" does not exist.', 8, $this->source); })()), "page_component_module", [], "any", false, false, false, 8)]);
            // line 9
            echo "        ";
        }
        // line 10
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "uri", [], "any", false, false, false, 10), "attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })())]);
        echo "
            <table>
                <tbody>
                <tr class=\"invalidate-cache-tr\">
                    <td class=\"invalidate-cache-td-labels\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cache.invalidate.label"), "html", null, true);
        echo ":&nbsp;</td>
                    <td>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "invalidateType", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "cache-invalidate-type"]]);
        echo "</td>
                    <td class=\"invalidate-cache-td-labels\">&nbsp;";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cache.invalidate.at.label"), "html", null, true);
        echo "&nbsp;</td>
                    <td class=\"invalidate-cache-td-fields\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "invalidateCacheAt", [], "any", false, false, false, 17), 'widget');
        echo "</td>
                </tr>
                </tbody>
            </table>
            <div class=\"hidden\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'rest');
        echo "
            </div>
            <div class=\"widget-actions invalidate-cache-buttons\">
                <button type=\"reset\" class=\"btn\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cache.invalidate.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"remove_scheduled_cache_invalidation_button\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cache.invalidate.action.remove"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cache.invalidate.action.submit"), "html", null, true);
        echo "</button>
            </div>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        ";
        // line 30
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCache/Action/invalidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  144 => 29,  139 => 27,  135 => 26,  131 => 25,  125 => 22,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  97 => 10,  94 => 9,  91 => 8,  88 => 7,  86 => 6,  83 => 5,  80 => 4,  77 => 3,  64 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroAction/Operation/form.html.twig' %}
{% block form %}
    {% set buttonOptions = operation.definition.buttonOptions %}
    {% set pageComponentOptions = {} %}
    <div class=\"widget-content invalidate-cache-content\" data-page-component-module=\"orocache/js/app/components/invalidate-cache-component\">
        {% set attr = {'id': form.vars.id, 'data-collect': 'true', 'class': 'form-dialog invalidate-cache-form'} %}
        {% if buttonOptions.page_component_module is defined %}
            {% set attr = attr|merge({'data-page-component-module': buttonOptions.page_component_module}) %}
        {% endif %}
        {{ form_start(form, {'action': app.request.uri, 'attr': attr}) }}
            <table>
                <tbody>
                <tr class=\"invalidate-cache-tr\">
                    <td class=\"invalidate-cache-td-labels\">{{ 'oro.cache.invalidate.label'|trans }}:&nbsp;</td>
                    <td>{{ form_widget(form.invalidateType, { 'attr': {'class': 'cache-invalidate-type'}}) }}</td>
                    <td class=\"invalidate-cache-td-labels\">&nbsp;{{ 'oro.cache.invalidate.at.label'|trans }}&nbsp;</td>
                    <td class=\"invalidate-cache-td-fields\">{{ form_widget(form.invalidateCacheAt)}}</td>
                </tr>
                </tbody>
            </table>
            <div class=\"hidden\">
                {{ form_rest(form) }}
            </div>
            <div class=\"widget-actions invalidate-cache-buttons\">
                <button type=\"reset\" class=\"btn\">{{ 'oro.cache.invalidate.action.cancel'|trans }}</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"remove_scheduled_cache_invalidation_button\">{{ 'oro.cache.invalidate.action.remove'|trans }}</button>
                <button type=\"submit\" class=\"btn btn-success\">{{ 'oro.cache.invalidate.action.submit'|trans }}</button>
            </div>
        {{ form_end(form) }}
        {{ oro_form_js_validation(form) }}
    </div>
{% endblock %}
", "@OroCache/Action/invalidate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CacheBundle/Resources/views/Action/invalidate.html.twig");
    }
}
