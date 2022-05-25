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

/* @OroCalendar/SystemCalendarEvent/widget/update.html.twig */
class __TwigTemplate_4ec1a56f7ce260b6b95004870318fd76 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/SystemCalendarEvent/widget/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/widget/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/SystemCalendarEvent/widget/update.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/SystemCalendarEvent/widget/update.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/widget-form-component", "options" => ["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_wid"], "method", false, false, false, 8), "data" => ((            // line 9
array_key_exists("saved", $context)) ? (_twig_default_filter((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 9, $this->source); })()), null)) : (null)), "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.controller.event.saved.message")]]], 5, $context, $this->getSourceContext());
            // line 12
            echo "></div>
    ";
        } else {
            // line 14
            echo "        ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "valid", [], "any", false, false, false, 14) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14)))) {
                // line 15
                echo "            <div class=\"alert alert-error\" role=\"alert\">
                <div class=\"message\">
                    ";
                // line 17
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            $context["calendarEventDateRange"] = ["module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => ["nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()]];
            // line 29
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), 'row');
            echo "
                        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "narrow-text-field"]]);
            echo "
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "backgroundColor", [], "any", false, false, false, 35), 'row');
            echo "

                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "children", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 38), "extra_field", [], "any", true, true, false, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 38), "extra_field", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                    echo "
                            ";
                }
                // line 41
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </div>
                    <div class=\"span6\">
                        <div ";
            // line 44
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["calendarEventDateRange"]) || array_key_exists("calendarEventDateRange", $context) ? $context["calendarEventDateRange"] : (function () { throw new RuntimeError('Variable "calendarEventDateRange" does not exist.', 44, $this->source); })())], 44, $context, $this->getSourceContext());
            echo ">
                            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "start", [], "any", false, false, false, 45), 'row');
            echo "
                            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "end", [], "any", false, false, false, 46), 'row');
            echo "
                            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "allDay", [], "any", false, false, false, 47), 'row');
            echo "
                        </div>
                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recurrence", [], "any", true, true, false, 49)) {
                // line 50
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "recurrence", [], "any", false, false, false, 50), 'row');
                echo "
                        ";
            }
            // line 52
            echo "                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 59
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()));
            echo "
        </div>
    ";
        }
        // line 62
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/SystemCalendarEvent/widget/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  171 => 59,  164 => 55,  160 => 54,  156 => 52,  150 => 50,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 42,  121 => 41,  115 => 39,  112 => 38,  108 => 37,  103 => 35,  99 => 34,  95 => 33,  85 => 30,  82 => 29,  80 => 22,  77 => 21,  70 => 17,  66 => 15,  63 => 14,  59 => 12,  57 => 9,  56 => 8,  54 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

<div class=\"widget-content\">
    {% if saved is defined and saved %}
        <div {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/widget-form-component',
            options: {
                _wid: app.request.get('_wid'),
                data: saved|default(null),
                message: 'oro.calendar.controller.event.saved.message'|trans
            }
        }) }}></div>
    {% else %}
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
                    <div class=\"span6\">
                        {{ form_row(form.title) }}
                        {{ form_row(form.description, { 'attr': {'class': 'narrow-text-field'} }) }}
                        {{ form_row(form.backgroundColor) }}

                        {% for child in form.children %}
                            {% if child.vars.extra_field is defined and child.vars.extra_field %}
                                {{ form_row(child) }}
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"span6\">
                        <div {{ UI.renderPageComponentAttributes(calendarEventDateRange) }}>
                            {{ form_row(form.start) }}
                            {{ form_row(form.end) }}
                            {{ form_row(form.allDay) }}
                        </div>
                        {% if form.recurrence is defined %}
                            {{ form_row(form.recurrence) }}
                        {% endif %}
                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    {% endif %}
</div>
", "@OroCalendar/SystemCalendarEvent/widget/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/SystemCalendarEvent/widget/update.html.twig");
    }
}
