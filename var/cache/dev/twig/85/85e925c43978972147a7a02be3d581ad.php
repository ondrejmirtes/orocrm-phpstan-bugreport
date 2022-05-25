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

/* @OroAnalytics/label.html.twig */
class __TwigTemplate_519cc9389b48970599aba56c404142ba extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAnalytics/label.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/label.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/label.html.twig"));

        // line 1
        if (((((((array_key_exists("entity", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dataChannel", [], "any", false, true, false, 1), "data", [], "any", true, true, false, 1)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
($context["entity"] ?? null), "dataChannel", [], "any", false, true, false, 2), "data", [], "any", false, true, false, 2), "rfm_enabled", [], "any", true, true, false, 2)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "dataChannel", [], "any", false, false, false, 2), "data", [], "any", false, false, false, 2), "rfm_enabled", [], "any", false, false, false, 2)) && twig_get_attribute($this->env, $this->source,         // line 3
($context["entity"] ?? null), "recency", [], "any", true, true, false, 3)) && twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "frequency", [], "any", true, true, false, 3)) && twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "monetary", [], "any", true, true, false, 3))) {
            // line 5
            echo "    ";
            if (array_key_exists("vertical", $context)) {
                echo "<div class=\"rfm-analytics-label-wrapper\">";
            }
            // line 6
            echo "        <div class=\"pull-right label label-warning rfm-analytics-label";
            if (array_key_exists("vertical", $context)) {
                echo " rfm-analytics-label-vertical";
            }
            echo "\">
            ";
            // line 7
            $context["el"] = ((array_key_exists("vertical", $context)) ? ("p") : ("span"));
            // line 8
            echo "            <";
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.recency.title"), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.recency.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "recency", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "recency", [], "any", false, false, false, 9), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 10, $this->source); })()), "html", null, true);
            echo ">
            <";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.frequency.title"), "html", null, true);
            echo "\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.frequency.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "frequency", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "frequency", [], "any", false, false, false, 12), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 13, $this->source); })()), "html", null, true);
            echo ">
            <";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 14, $this->source); })()), "html", null, true);
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.monetary.title"), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.rfm.monetary.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "monetary", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "monetary", [], "any", false, false, false, 15), "-")) : ("-")), "html", null, true);
            echo "
            </";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["el"]) || array_key_exists("el", $context) ? $context["el"] : (function () { throw new RuntimeError('Variable "el" does not exist.', 16, $this->source); })()), "html", null, true);
            echo ">
        </div>
        <div class=\"clearfix\"></div>
    ";
            // line 19
            if (array_key_exists("vertical", $context)) {
                echo "</div>";
            }
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAnalytics/label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 19,  109 => 16,  103 => 15,  97 => 14,  93 => 13,  87 => 12,  81 => 11,  77 => 10,  71 => 9,  64 => 8,  62 => 7,  55 => 6,  50 => 5,  48 => 3,  47 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if entity is defined and entity.dataChannel.data is defined
    and entity.dataChannel.data.rfm_enabled is defined and entity.dataChannel.data.rfm_enabled
    and entity.recency is defined and entity.frequency is defined and entity.monetary is defined
%}
    {% if vertical is defined %}<div class=\"rfm-analytics-label-wrapper\">{% endif %}
        <div class=\"pull-right label label-warning rfm-analytics-label{% if vertical is defined %} rfm-analytics-label-vertical{% endif %}\">
            {% set el = vertical is defined ? 'p' : 'span' %}
            <{{ el }} title=\"{{ 'oro.analytics.rfm.recency.title'|trans}}\">
                {{ 'oro.analytics.rfm.recency.label'|trans}} {{ entity.recency|default('-') }}
            </{{ el }}>
            <{{ el }} title=\"{{ 'oro.analytics.rfm.frequency.title'|trans}}\">
                {{ 'oro.analytics.rfm.frequency.label'|trans}} {{ entity.frequency|default('-') }}
            </{{ el }}>
            <{{ el }} title=\"{{ 'oro.analytics.rfm.monetary.title'|trans}}\">
                {{ 'oro.analytics.rfm.monetary.label'|trans}} {{ entity.monetary|default('-') }}
            </{{ el }}>
        </div>
        <div class=\"clearfix\"></div>
    {% if vertical is defined %}</div>{% endif %}
{% endif %}
", "@OroAnalytics/label.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AnalyticsBundle/Resources/views/label.html.twig");
    }
}
