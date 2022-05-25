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

/* @OroCron/macros.html.twig */
class __TwigTemplate_53e257b75abd75e48bdb32bc842ad220 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCron/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_scheduleIntervalsInfo($__schedules__ = null, $__labels__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "schedules" => $__schedules__,
            "labels" => $__labels__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scheduleIntervalsInfo"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scheduleIntervalsInfo"));

            // line 2
            echo "    ";
            $context["defaultLabels"] = ["wasActivated" => "oro.cron.schedule_interval.was_activated", "activeNow" => "oro.cron.schedule_interval.active_now", "notActiveNow" => "oro.cron.schedule_interval.not_active_now", "willBeActivated" => "oro.cron.schedule_interval.will_be_acitivated", "wasDeactivated" => "oro.cron.schedule_interval.was_deactivated", "willBeDeactivated" => "oro.cron.schedule_interval.will_be_deacitivated"];
            // line 10
            echo "    ";
            $context["labels"] = twig_array_merge((isset($context["defaultLabels"]) || array_key_exists("defaultLabels", $context) ? $context["defaultLabels"] : (function () { throw new RuntimeError('Variable "defaultLabels" does not exist.', 10, $this->source); })()), (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 10, $this->source); })()));
            // line 11
            echo "    ";
            $context["now"] = twig_date_converter($this->env, "now", "UTC");
            // line 12
            echo "    <ul class=\"schedule-list\">
        ";
            // line 13
            $context["activityShown"] = false;
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["schedule"], "activeAt", [], "any", false, false, false, 15) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 15, $this->source); })()))) {
                    // line 16
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["schedule"], "activeAt", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "                    <li>
                        ";
                        // line 18
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 18, $this->source); })()), "wasActivated", [], "any", false, false, false, 18), ["%date%" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, $context["schedule"], "activeAt", [], "any", false, false, false, 18))]), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 21
                    echo "
                ";
                    // line 22
                    if (( !twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 22) || (twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 22) > (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 22, $this->source); })())))) {
                        // line 23
                        echo "                    ";
                        $context["activityShown"] = true;
                        // line 24
                        echo "                    <li>
                        ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 25, $this->source); })()), "activeNow", [], "any", false, false, false, 25)), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "
            ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["schedule"], "activeAt", [], "any", false, false, false, 30) > (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 30, $this->source); })()))) {
                    // line 31
                    echo "                ";
                    if ( !(isset($context["activityShown"]) || array_key_exists("activityShown", $context) ? $context["activityShown"] : (function () { throw new RuntimeError('Variable "activityShown" does not exist.', 31, $this->source); })())) {
                        // line 32
                        echo "                    ";
                        $context["activityShown"] = true;
                        // line 33
                        echo "                    <li>
                        ";
                        // line 34
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 34, $this->source); })()), "notActiveNow", [], "any", false, false, false, 34)), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 37
                    echo "                <li>
                    ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 38, $this->source); })()), "willBeActivated", [], "any", false, false, false, 38), ["%date%" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, $context["schedule"], "activeAt", [], "any", false, false, false, 38))]), "html", null, true);
                    echo "
                </li>
            ";
                }
                // line 41
                echo "
            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 43) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 43, $this->source); })()))) {
                        // line 44
                        echo "                    <li>
                        ";
                        // line 45
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 45, $this->source); })()), "wasDeactivated", [], "any", false, false, false, 45), ["%date%" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 45))]), "html", null, true);
                        echo "
                    </li>
                ";
                    } else {
                        // line 48
                        echo "                    <li>
                        ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 49, $this->source); })()), "willBeDeactivated", [], "any", false, false, false, 49), ["%date%" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, $context["schedule"], "deactivateAt", [], "any", false, false, false, 49))]), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            if ( !(isset($context["activityShown"]) || array_key_exists("activityShown", $context) ? $context["activityShown"] : (function () { throw new RuntimeError('Variable "activityShown" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "            <li>
                ";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 57, $this->source); })()), "notActiveNow", [], "any", false, false, false, 57)), "html", null, true);
                echo "
            </li>
        ";
            }
            // line 60
            echo "    </ul>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroCron/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 60,  203 => 57,  200 => 56,  198 => 55,  195 => 54,  189 => 53,  186 => 52,  180 => 49,  177 => 48,  171 => 45,  168 => 44,  165 => 43,  163 => 42,  160 => 41,  154 => 38,  151 => 37,  145 => 34,  142 => 33,  139 => 32,  136 => 31,  134 => 30,  131 => 29,  128 => 28,  122 => 25,  119 => 24,  116 => 23,  114 => 22,  111 => 21,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  91 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  77 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro scheduleIntervalsInfo(schedules, labels) %}
    {% set defaultLabels = {
        wasActivated: 'oro.cron.schedule_interval.was_activated',
        activeNow: 'oro.cron.schedule_interval.active_now',
        notActiveNow: 'oro.cron.schedule_interval.not_active_now',
        willBeActivated: 'oro.cron.schedule_interval.will_be_acitivated',
        wasDeactivated: 'oro.cron.schedule_interval.was_deactivated',
        willBeDeactivated: 'oro.cron.schedule_interval.will_be_deacitivated'
    } %}
    {% set labels = defaultLabels|merge(labels) %}
    {% set now = date('now', 'UTC') %}
    <ul class=\"schedule-list\">
        {% set activityShown = false %}
        {% for schedule in schedules %}
            {% if schedule.activeAt < now %}
                {% if schedule.activeAt %}
                    <li>
                        {{ labels.wasActivated|trans({'%date%': schedule.activeAt|oro_format_datetime}) }}
                    </li>
                {% endif %}

                {% if not schedule.deactivateAt or schedule.deactivateAt > now %}
                    {% set activityShown = true %}
                    <li>
                        {{ labels.activeNow|trans }}
                    </li>
                {% endif %}
            {% endif %}

            {% if schedule.activeAt > now %}
                {% if not activityShown %}
                    {% set activityShown = true %}
                    <li>
                        {{ labels.notActiveNow|trans }}
                    </li>
                {% endif %}
                <li>
                    {{ labels.willBeActivated|trans({'%date%': schedule.activeAt|oro_format_datetime}) }}
                </li>
            {% endif %}

            {% if schedule.deactivateAt %}
                {% if schedule.deactivateAt < now %}
                    <li>
                        {{ labels.wasDeactivated|trans({'%date%': schedule.deactivateAt|oro_format_datetime}) }}
                    </li>
                {% else %}
                    <li>
                        {{ labels.willBeDeactivated|trans({'%date%': schedule.deactivateAt|oro_format_datetime}) }}
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}

        {% if not activityShown %}
            <li>
                {{ labels.notActiveNow|trans }}
            </li>
        {% endif %}
    </ul>
{% endmacro %}
", "@OroCron/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CronBundle/Resources/views/macros.html.twig");
    }
}
