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

/* @OroTranslation/Operation/loadLanguage.html.twig */
class __TwigTemplate_80d0be0197cacb9af64a63cc0e240701 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTranslation/Operation/loadLanguage.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/Operation/loadLanguage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/Operation/loadLanguage.html.twig"));

        $this->parent = $this->loadTemplate("@OroAction/Operation/form.html.twig", "@OroTranslation/Operation/loadLanguage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_widget", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        echo "    ";
        $context["translationCompleteness"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "stat", [], "any", false, true, false, 4), "translationStatus", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "stat", [], "any", false, true, false, 4), "translationStatus", [], "any", false, false, false, 4), null)) : (null));
        // line 5
        echo "
    <div>
        <div class=\"pull-left\">
            <span class=\"fa-info-circle tooltip-icon\"
               data-toggle=\"popover\"
               data-content=\"<div class='oro-popover-content'>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.translation.form.tooltip.translation_completeness"), "html", null, true);
        echo "</div>\"
            ></span>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.translation.action.translation_completeness.label"), "html", null, true);
        echo "&nbsp;</div>
        <div class=\"pull-right\">
            ";
        // line 14
        if ( !(null === (isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                <div class=\"oro-translation-languages\">
                    <div class=\"translation-completeness\">
                        <div class=\"progress\">
                            <div class=\"progress-bar success\" style=\"width: ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "%;\"></div>
                        </div>
                        <b class=\"progress-label\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(((isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 20, $this->source); })()) / 100)), "html", null, true);
            echo "</b>
                    </div>
                </div>
            ";
        } else {
            // line 24
            echo "                <span class=\"badge badge-disabled\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "</span>
            ";
        }
        // line 26
        echo "        </div>
    </div>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTranslation/Operation/loadLanguage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  122 => 26,  116 => 24,  109 => 20,  104 => 18,  99 => 15,  97 => 14,  92 => 12,  87 => 10,  80 => 5,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroAction/Operation/form.html.twig' %}

{% block form_widget %}
    {% set translationCompleteness = context.stat.translationStatus|default(null) %}

    <div>
        <div class=\"pull-left\">
            <span class=\"fa-info-circle tooltip-icon\"
               data-toggle=\"popover\"
               data-content=\"<div class='oro-popover-content'>{{ 'oro.translation.form.tooltip.translation_completeness'|trans }}</div>\"
            ></span>
            {{ 'oro.translation.action.translation_completeness.label'|trans }}&nbsp;</div>
        <div class=\"pull-right\">
            {% if translationCompleteness is not null %}
                <div class=\"oro-translation-languages\">
                    <div class=\"translation-completeness\">
                        <div class=\"progress\">
                            <div class=\"progress-bar success\" style=\"width: {{ translationCompleteness }}%;\"></div>
                        </div>
                        <b class=\"progress-label\">{{ (translationCompleteness / 100)|oro_format_percent }}</b>
                    </div>
                </div>
            {% else %}
                <span class=\"badge badge-disabled\">{{ 'N/A'|trans }}</span>
            {% endif %}
        </div>
    </div>
    {{ form_widget(form) }}
{% endblock %}
", "@OroTranslation/Operation/loadLanguage.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/Operation/loadLanguage.html.twig");
    }
}
