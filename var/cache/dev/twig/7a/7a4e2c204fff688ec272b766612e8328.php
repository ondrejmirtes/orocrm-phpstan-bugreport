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

/* @OroActivityContact/ActivityContact/widget/metrics.html.twig */
class __TwigTemplate_ee8ead46dc2a1b6c4165119a1ece2067 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityContact/ActivityContact/widget/metrics.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityContact/ActivityContact/widget/metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityContact/ActivityContact/widget/metrics.html.twig"));

        // line 1
        $context["entityClassName"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1, $this->source); })()), true);
        // line 2
        echo "
";
        // line 3
        $macros["metrics"] = $this->macros["metrics"] = $this;
        // line 4
        echo "
<div id=\"activity-count-";
        // line 5
        echo twig_escape_filter($this->env, (((isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 5, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)), "html", null, true);
        echo "\" class=\"activity-contact-info-title\">
    ";
        // line 6
        echo twig_call_macro($macros["metrics"], "macro_last_contacted_time", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })())], 6, $context, $this->getSourceContext());
        echo "
</div>
<script>
    loadModules(['jquery', 'routing', 'oroui/js/mediator'], function (\$, routing, mediator) {
        \$(function () {
            var reloadStatistics = function () {
                \$.ajax({
                    url: routing.generate('oro_activity_contact_metrics', {
                        entityClass: '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
                        entityId: '";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "'
                    }),
                    type: 'GET',
                    success: function (response) {
                        \$('#activity-count-' + '";
        // line 19
        echo twig_escape_filter($this->env, (((isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 19, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)), "html", null, true);
        echo "').html(
                            \$(response).filter('#activity-count-' + '";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 20, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)), "html", null, true);
        echo "').html()
                        );
                    }
                })
            };

            mediator.on(
                'widget:doRefresh:activity-list-widget ' +
                'widget_success:activity_list:refresh ' +
                'widget_success:activity_list:item:delete ' +
                'widget_success:activity_list:item:update',
                reloadStatistics
            );
            mediator.once('page:beforeChange', function () {
                mediator.off(
                    'widget:doRefresh:activity-list-widget ' +
                    'widget_success:activity_list:refresh ' +
                    'widget_success:activity_list:item:delete ' +
                    'widget_success:activity_list:item:update',
                    reloadStatistics
                );
            });
        });
    });
</script>

";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 46
    public function macro_last_contacted_time($__data__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "last_contacted_time"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "last_contacted_time"));

            // line 47
            echo "    ";
            $context["activity_scope_class"] = "Oro\\Bundle\\ActivityContactBundle\\EntityConfig\\ActivityScope";
            // line 48
            echo "
    ";
            // line 49
            $context["last_contact_date_key"] = twig_constant(((isset($context["activity_scope_class"]) || array_key_exists("activity_scope_class", $context) ? $context["activity_scope_class"] : (function () { throw new RuntimeError('Variable "activity_scope_class" does not exist.', 49, $this->source); })()) . "::LAST_CONTACT_DATE"));
            // line 50
            echo "    ";
            $context["last_contact_date_in_key"] = twig_constant(((isset($context["activity_scope_class"]) || array_key_exists("activity_scope_class", $context) ? $context["activity_scope_class"] : (function () { throw new RuntimeError('Variable "activity_scope_class" does not exist.', 50, $this->source); })()) . "::LAST_CONTACT_DATE_IN"));
            // line 51
            echo "    ";
            $context["last_contact_date_out_key"] = twig_constant(((isset($context["activity_scope_class"]) || array_key_exists("activity_scope_class", $context) ? $context["activity_scope_class"] : (function () { throw new RuntimeError('Variable "activity_scope_class" does not exist.', 51, $this->source); })()) . "::LAST_CONTACT_DATE_OUT"));
            // line 52
            echo "    ";
            $context["contact_count_key"] = twig_constant(((isset($context["activity_scope_class"]) || array_key_exists("activity_scope_class", $context) ? $context["activity_scope_class"] : (function () { throw new RuntimeError('Variable "activity_scope_class" does not exist.', 52, $this->source); })()) . "::CONTACT_COUNT"));
            // line 53
            echo "
    ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), (isset($context["contact_count_key"]) || array_key_exists("contact_count_key", $context) ? $context["contact_count_key"] : (function () { throw new RuntimeError('Variable "contact_count_key" does not exist.', 54, $this->source); })()), [], "array", true, true, false, 54) && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), (isset($context["contact_count_key"]) || array_key_exists("contact_count_key", $context) ? $context["contact_count_key"] : (function () { throw new RuntimeError('Variable "contact_count_key" does not exist.', 54, $this->source); })()), [], "array", false, false, false, 54) > 0))) {
                // line 55
                echo "        ";
                $context["last_datetime"] = "";
                // line 56
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), (isset($context["last_contact_date_key"]) || array_key_exists("last_contact_date_key", $context) ? $context["last_contact_date_key"] : (function () { throw new RuntimeError('Variable "last_contact_date_key" does not exist.', 56, $this->source); })()))) {
                    // line 57
                    echo "            ";
                    $context["last_datetime"] = _twig_default_filter($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), (isset($context["last_contact_date_key"]) || array_key_exists("last_contact_date_key", $context) ? $context["last_contact_date_key"] : (function () { throw new RuntimeError('Variable "last_contact_date_key" does not exist.', 57, $this->source); })()), [], "array", false, false, false, 57)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"));
                    // line 58
                    echo "        ";
                }
                // line 59
                echo "        ";
                $context["direction"] = (("<i class=\"fa-sign-" . (((twig_get_attribute($this->env, $this->source,                 // line 60
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), (isset($context["last_contact_date_in_key"]) || array_key_exists("last_contact_date_in_key", $context) ? $context["last_contact_date_in_key"] : (function () { throw new RuntimeError('Variable "last_contact_date_in_key" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60) >= twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), (isset($context["last_contact_date_out_key"]) || array_key_exists("last_contact_date_out_key", $context) ? $context["last_contact_date_out_key"] : (function () { throw new RuntimeError('Variable "last_contact_date_out_key" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60))) ? ("in") : ("out"))) . "\"></i>");
                // line 63
                echo "    <ul class=\"inline\">
        ";
                // line 64
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), (isset($context["contact_count_key"]) || array_key_exists("contact_count_key", $context) ? $context["contact_count_key"] : (function () { throw new RuntimeError('Variable "contact_count_key" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    echo "            <li>
            ";
                    // line 66
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity_contact.info_title_times", ["{{ total_contacted }}" => ((twig_get_attribute($this->env, $this->source,                     // line 67
($context["data"] ?? null), (isset($context["contact_count_key"]) || array_key_exists("contact_count_key", $context) ? $context["contact_count_key"] : (function () { throw new RuntimeError('Variable "contact_count_key" does not exist.', 67, $this->source); })()), [], "array", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), (isset($context["contact_count_key"]) || array_key_exists("contact_count_key", $context) ? $context["contact_count_key"] : (function () { throw new RuntimeError('Variable "contact_count_key" does not exist.', 67, $this->source); })()), [], "array", false, false, false, 67), 0)) : (0))]);
                    // line 68
                    echo "
            </li>
        ";
                }
                // line 71
                echo "        <li style=\"padding-right:0\">
        ";
                // line 72
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity_contact.info_title_last", ["{{ direction }}" =>                 // line 73
(isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 73, $this->source); })()), "{{ last_datetime }}" =>                 // line 74
(isset($context["last_datetime"]) || array_key_exists("last_datetime", $context) ? $context["last_datetime"] : (function () { throw new RuntimeError('Variable "last_datetime" does not exist.', 74, $this->source); })())]);
                // line 75
                echo "
        </li>
    </ul>
    ";
            } else {
                // line 79
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity_contact.info_title_no_data"), "html", null, true);
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroActivityContact/ActivityContact/widget/metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 79,  207 => 75,  205 => 74,  204 => 73,  203 => 72,  200 => 71,  195 => 68,  193 => 67,  192 => 66,  189 => 65,  187 => 64,  184 => 63,  182 => 60,  180 => 59,  177 => 58,  174 => 57,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  152 => 49,  149 => 48,  146 => 47,  126 => 46,  86 => 20,  82 => 19,  75 => 15,  71 => 14,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set entityClassName = oro_class_name(entity, true) %}

{% import _self as metrics %}

<div id=\"activity-count-{{ entityClassName ~ '-' ~ entity.id }}\" class=\"activity-contact-info-title\">
    {{ metrics.last_contacted_time(data, entity) }}
</div>
<script>
    loadModules(['jquery', 'routing', 'oroui/js/mediator'], function (\$, routing, mediator) {
        \$(function () {
            var reloadStatistics = function () {
                \$.ajax({
                    url: routing.generate('oro_activity_contact_metrics', {
                        entityClass: '{{ entityClassName }}',
                        entityId: '{{ entity.id }}'
                    }),
                    type: 'GET',
                    success: function (response) {
                        \$('#activity-count-' + '{{ entityClassName ~ '-' ~ entity.id }}').html(
                            \$(response).filter('#activity-count-' + '{{ entityClassName ~ '-' ~ entity.id }}').html()
                        );
                    }
                })
            };

            mediator.on(
                'widget:doRefresh:activity-list-widget ' +
                'widget_success:activity_list:refresh ' +
                'widget_success:activity_list:item:delete ' +
                'widget_success:activity_list:item:update',
                reloadStatistics
            );
            mediator.once('page:beforeChange', function () {
                mediator.off(
                    'widget:doRefresh:activity-list-widget ' +
                    'widget_success:activity_list:refresh ' +
                    'widget_success:activity_list:item:delete ' +
                    'widget_success:activity_list:item:update',
                    reloadStatistics
                );
            });
        });
    });
</script>

{% macro last_contacted_time(data, entity) %}
    {% set activity_scope_class = 'Oro\\\\Bundle\\\\ActivityContactBundle\\\\EntityConfig\\\\ActivityScope' %}

    {% set last_contact_date_key     = constant(activity_scope_class ~ '::LAST_CONTACT_DATE') %}
    {% set last_contact_date_in_key  = constant(activity_scope_class ~ '::LAST_CONTACT_DATE_IN') %}
    {% set last_contact_date_out_key = constant(activity_scope_class ~ '::LAST_CONTACT_DATE_OUT') %}
    {% set contact_count_key         = constant(activity_scope_class ~ '::CONTACT_COUNT') %}

    {% if data[contact_count_key] is defined and data[contact_count_key] > 0 %}
        {% set last_datetime = '' %}
        {% if  is_granted('VIEW', entity, last_contact_date_key) %}
            {% set last_datetime = data[last_contact_date_key]|oro_format_datetime|default('N/A'|trans) %}
        {% endif %}
        {% set direction     = '<i class=\"fa-sign-'
            ~ ( data[last_contact_date_in_key] >= data[last_contact_date_out_key] ? 'in' : 'out' )
            ~ '\"></i>'
        %}
    <ul class=\"inline\">
        {% if  is_granted('VIEW', entity, contact_count_key) %}
            <li>
            {{ 'oro.activity_contact.info_title_times'|trans({
                '{{ total_contacted }}': data[contact_count_key]|default(0)
            })|raw }}
            </li>
        {% endif %}
        <li style=\"padding-right:0\">
        {{ 'oro.activity_contact.info_title_last'|trans({
            '{{ direction }}': direction,
            '{{ last_datetime }}': last_datetime
        })|raw }}
        </li>
    </ul>
    {% else %}
        {{ 'oro.activity_contact.info_title_no_data'|trans }}
    {% endif %}
{% endmacro %}
", "@OroActivityContact/ActivityContact/widget/metrics.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ActivityContactBundle/Resources/views/ActivityContact/widget/metrics.html.twig");
    }
}
