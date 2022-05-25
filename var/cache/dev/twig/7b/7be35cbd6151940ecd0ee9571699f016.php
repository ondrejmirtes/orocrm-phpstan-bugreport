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

/* @OroTranslation/Language/Datagrid/translationCompleteness.html.twig */
class __TwigTemplate_8fdf0a324a51873d627afa6ba11a3d3f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTranslation/Language/Datagrid/translationCompleteness.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/Language/Datagrid/translationCompleteness.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/Language/Datagrid/translationCompleteness.html.twig"));

        // line 1
        $context["translationCompleteness"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "getValue", [0 => "translationCompleteness"], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if ( !(null === (isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <div class=\"translation-completeness\">
        <div class=\"progress\">
            <div class=\"progress-bar success\" style=\"width: ";
            // line 6
            echo twig_escape_filter($this->env, ((isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 6, $this->source); })()) * 100), "html", null, true);
            echo "%;\"></div>
        </div>
        <b class=\"progress-label\">";
            // line 8
            echo twig_escape_filter($this->env, twig_round(((isset($context["translationCompleteness"]) || array_key_exists("translationCompleteness", $context) ? $context["translationCompleteness"] : (function () { throw new RuntimeError('Variable "translationCompleteness" does not exist.', 8, $this->source); })()) * 100), 0, "floor"), "html", null, true);
            echo "%</b>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTranslation/Language/Datagrid/translationCompleteness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set translationCompleteness = record.getValue('translationCompleteness') %}

{% if translationCompleteness is not null %}
    <div class=\"translation-completeness\">
        <div class=\"progress\">
            <div class=\"progress-bar success\" style=\"width: {{ translationCompleteness * 100 }}%;\"></div>
        </div>
        <b class=\"progress-label\">{{ (translationCompleteness * 100)|round(0, 'floor') }}%</b>
    </div>
{% endif %}
", "@OroTranslation/Language/Datagrid/translationCompleteness.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/Language/Datagrid/translationCompleteness.html.twig");
    }
}
