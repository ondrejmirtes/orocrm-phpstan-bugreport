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

/* @OroCalendar/CalendarEvent/widget/update.html.twig */
class __TwigTemplate_05039f690f5ce2e843be92e25023396c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/CalendarEvent/widget/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/widget/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/CalendarEvent/widget/update.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/CalendarEvent/widget/update.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.controller.event.saved.message"), "triggerSuccess" => true, "remove" => true]];
            // line 11
            echo "
    ";
            // line 12
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 12, $this->source); })()));
            echo "
";
        } else {
            // line 14
            echo "    <div class=\"widget-content\">
        ";
            // line 15
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)))) {
                // line 16
                echo "            <div class=\"alert alert-error\" role=\"alert\">
                <div class=\"message\">
                    ";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            $context["calendarEventDateRange"] = ["module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => ["nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()]];
            // line 30
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 33
            ob_start();
            // line 34
            echo "                        <div class=\"control-group-container\" ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["calendarEventDateRange"]) || array_key_exists("calendarEventDateRange", $context) ? $context["calendarEventDateRange"] : (function () { throw new RuntimeError('Variable "calendarEventDateRange" does not exist.', 34, $this->source); })())], 34, $context, $this->getSourceContext());
            echo ">
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "start", [], "any", false, false, false, 35), 'row');
            echo "
                            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "end", [], "any", false, false, false, 36), 'row');
            echo "
                            ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "allDay", [], "any", false, false, false, 37), 'row');
            echo "
                        </div>
                        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recurrence", [], "any", true, true, false, 39)) {
                // line 40
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "recurrence", [], "any", false, false, false, 40), 'row');
                echo "
                        ";
            }
            // line 42
            echo "                    ";
            $context["rightColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
                    ";
            // line 44
            ob_start();
            // line 45
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), 'row');
            echo "
                        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "narrow-text-field"]]);
            echo "
                        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "backgroundColor", [], "any", false, false, false, 47), 'row');
            echo "
                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calendarUid", [], "any", true, true, false, 48)) {
                // line 49
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "calendarUid", [], "any", false, false, false, 49), 'row');
                echo "
                        ";
            }
            // line 51
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "attendees", [], "any", false, false, false, 51), 'row');
            echo "
                        ";
            // line 52
            if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "recurrence", [], "any", false, false, false, 52))) {
                // line 53
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reminders", [], "any", false, false, false, 53), 'row');
                echo "
                        ";
            } else {
                // line 55
                echo "                            ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "reminders", [], "any", false, false, false, 55), "setRendered", [], "any", false, false, false, 55);
                // line 56
                echo "                        ";
            }
            // line 57
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'rest');
            echo "
                    ";
            $context["leftColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
                    <div class=\"span6 control-group-container\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["leftColumn"]) || array_key_exists("leftColumn", $context) ? $context["leftColumn"] : (function () { throw new RuntimeError('Variable "leftColumn" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "
                    </div>
                    <div class=\"span6 control-group-container\">
                        ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["rightColumn"]) || array_key_exists("rightColumn", $context) ? $context["rightColumn"] : (function () { throw new RuntimeError('Variable "rightColumn" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "
                    </div>

                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 73
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()));
            echo "
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
        return "@OroCalendar/CalendarEvent/widget/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 73,  200 => 69,  196 => 68,  189 => 64,  183 => 61,  179 => 59,  173 => 57,  170 => 56,  167 => 55,  161 => 53,  159 => 52,  154 => 51,  148 => 49,  146 => 48,  142 => 47,  138 => 46,  133 => 45,  131 => 44,  128 => 43,  125 => 42,  119 => 40,  117 => 39,  112 => 37,  108 => 36,  104 => 35,  99 => 34,  97 => 33,  88 => 31,  85 => 30,  83 => 23,  80 => 22,  73 => 18,  69 => 16,  67 => 15,  64 => 14,  59 => 12,  56 => 11,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% if saved is defined and saved %}
    {% set widgetResponse = {
        widget: {
            message: 'oro.calendar.controller.event.saved.message'|trans,
            triggerSuccess: true,
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"widget-content\">
        {% if not form.vars.valid and form.vars.errors|length %}
            <div class=\"alert alert-error\" role=\"alert\">
                <div class=\"message\">
                    {{ form_errors(form) }}
                </div>
            </div>
        {% endif %}

        {% set calendarEventDateRange = {
            module: 'orocalendar/js/app/components/calendar-event-date-range-component',
            name: 'calendar-event-date-range',
            options: {
                nativeMode: isMobileVersion()
            }
        } %}
        <div class=\"form-container\">
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"{{ formAction }}\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    {% set rightColumn %}
                        <div class=\"control-group-container\" {{ UI.renderPageComponentAttributes(calendarEventDateRange) }}>
                            {{ form_row(form.start) }}
                            {{ form_row(form.end) }}
                            {{ form_row(form.allDay) }}
                        </div>
                        {% if form.recurrence is defined %}
                            {{ form_row(form.recurrence) }}
                        {% endif %}
                    {% endset %}

                    {% set leftColumn %}
                        {{ form_row(form.title) }}
                        {{ form_row(form.description, { 'attr': {'class': 'narrow-text-field'} }) }}
                        {{ form_row(form.backgroundColor) }}
                        {% if form.calendarUid is defined %}
                            {{ form_row(form.calendarUid) }}
                        {% endif %}
                        {{ form_row(form.attendees) }}
                        {% if form.vars.value.recurrence is null %}
                            {{ form_row(form.reminders) }}
                        {% else %}
                            {% do form.reminders.setRendered %}
                        {% endif %}
                        {{ form_rest(form) }}
                    {% endset %}

                    <div class=\"span6 control-group-container\">
                        {{ leftColumn }}
                    </div>
                    <div class=\"span6 control-group-container\">
                        {{ rightColumn }}
                    </div>

                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    </div>
{% endif %}
", "@OroCalendar/CalendarEvent/widget/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/CalendarEvent/widget/update.html.twig");
    }
}
