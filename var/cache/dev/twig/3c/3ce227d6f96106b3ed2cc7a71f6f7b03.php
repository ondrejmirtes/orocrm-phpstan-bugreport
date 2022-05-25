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

/* @OroCalendar/Form/fields.html.twig */
class __TwigTemplate_03b6ba06648e81fd3a7d3c32b2e6a63c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_calendar_choice_row' => [$this, 'block_oro_calendar_choice_row'],
            'oro_calendar_choice_template_row' => [$this, 'block_oro_calendar_choice_template_row'],
            'oro_calendar_event_recurrence_row' => [$this, 'block_oro_calendar_event_recurrence_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_calendar_choice_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_calendar_choice_template_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('oro_calendar_event_recurrence_row', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_calendar_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_calendar_choice_row", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_choice_row"));

        // line 2
        echo "    ";
        if ( !twig_test_empty((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 3, $this->source); })())) > 1)) {
                // line 4
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'row');
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'row', ["label" => false]);
                echo "
        ";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 11
    public function block_oro_calendar_choice_template_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_calendar_choice_template_row", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_choice_template_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_choice_template_row"));

        // line 12
        echo "    <% var ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "Template = '';
    if (";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "TemplateType === 'single') {
        ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "Template = '";
        // line 15
        ob_start();
        // line 16
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div id=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" class=\"horizontal validate-group\">
                    <div class=\"oro-clearfix\">
                        <input type=\"checkbox\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "_0\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "[]\" value=\"< %- calendars[0].uid % >\">
                        <label for=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "_0\">< %- ";
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.add_to_calendar"));
        echo ".replace(\"%name%\", calendars[0].name) % ><em>&nbsp;</em></label>
                    </div>
                </div>
            </div>
        </div>
        ";
        $___internal_parse_75_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo twig_spaceless($___internal_parse_75_);
        // line 27
        echo "';
    } else if (";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "TemplateType === 'multiple') {
        ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "Template = '";
        // line 30
        ob_start();
        // line 31
        echo "        <div class=\"control-group\">
            <label data-required=\"1\" class=\"control-label required\" for=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 32, $this->source); })())), "html", null, true);
        echo "<em>*</em></label>
            <div class=\"controls\">
                <select id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" data-required=\"1\">
                < % for (var i = 0; i < calendars.length; i++) { % >
                    <option value=\"< %- calendars[i].uid % >\">< %- calendars[i].name % ></option>
                < % } % >
                </select>
            </div>
        </div>
        ";
        $___internal_parse_76_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_spaceless($___internal_parse_76_);
        // line 42
        echo "';
    } %>
    <% if (";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "Template) { %>
        <%= _.template(";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "Template.replace(/\\< %/g, '<' + '%').replace(/% \\>/g, '%' + '>'))({calendars: calendars}) %>
    <% } %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 49
    public function block_oro_calendar_event_recurrence_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_calendar_event_recurrence_row", $this->getTemplateName(), 49));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_event_recurrence_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_calendar_event_recurrence_row"));

        // line 50
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/Form/fields.html.twig", 50)->unwrap();
        // line 51
        echo "    ";
        $context["modelAttrs"] = [];
        // line 52
        echo "    ";
        $context["errors"] = [];
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "children", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54))) {
                // line 55
                echo "            ";
                $context["fieldErrors"] = [];
                // line 56
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 57
                    echo "                ";
                    $context["fieldErrors"] = twig_array_merge((isset($context["fieldErrors"]) || array_key_exists("fieldErrors", $context) ? $context["fieldErrors"] : (function () { throw new RuntimeError('Variable "fieldErrors" does not exist.', 57, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 57)]);
                    // line 58
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
                $context["errors"] = twig_array_merge((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 59, $this->source); })()), [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 60
$context["field"], "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60)), "name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 61
$context["field"], "vars", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "messages" =>                 // line 62
(isset($context["fieldErrors"]) || array_key_exists("fieldErrors", $context) ? $context["fieldErrors"] : (function () { throw new RuntimeError('Variable "fieldErrors" does not exist.', 62, $this->source); })())]]);
                // line 64
                echo "        ";
            }
            // line 65
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65))) {
                // line 66
                echo "            ";
                $context["modelAttrs"] = twig_array_merge((isset($context["modelAttrs"]) || array_key_exists("modelAttrs", $context) ? $context["modelAttrs"] : (function () { throw new RuntimeError('Variable "modelAttrs" does not exist.', 66, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66) => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66)]);
                // line 67
                echo "        ";
            }
            // line 68
            echo "        ";
            twig_get_attribute($this->env, $this->source, $context["field"], "setRendered", [], "any", false, false, false, 68);
            // line 69
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'errors');
        echo "
    <div ";
        // line 72
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orocalendar/js/app/components/calendar-event-recurrence-component", "name" => "calendar-event-recurrence", "options" => ["inputNamePrefixes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "full_name", [], "any", false, false, false, 76), "errors" =>         // line 77
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 77, $this->source); })()), "modelAttrs" =>         // line 78
(isset($context["modelAttrs"]) || array_key_exists("modelAttrs", $context) ? $context["modelAttrs"] : (function () { throw new RuntimeError('Variable "modelAttrs" does not exist.', 78, $this->source); })())]]], 72, $context, $this->getSourceContext());
        // line 80
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  319 => 80,  317 => 78,  316 => 77,  315 => 76,  314 => 72,  310 => 71,  307 => 70,  301 => 69,  298 => 68,  295 => 67,  292 => 66,  289 => 65,  286 => 64,  284 => 62,  283 => 61,  282 => 60,  280 => 59,  274 => 58,  271 => 57,  266 => 56,  263 => 55,  260 => 54,  255 => 53,  252 => 52,  249 => 51,  246 => 50,  233 => 49,  217 => 45,  213 => 44,  209 => 42,  207 => 30,  194 => 34,  187 => 32,  184 => 31,  182 => 30,  179 => 29,  175 => 28,  172 => 27,  170 => 15,  159 => 21,  153 => 20,  148 => 18,  144 => 16,  142 => 15,  139 => 14,  135 => 13,  130 => 12,  117 => 11,  103 => 8,  97 => 6,  91 => 4,  88 => 3,  85 => 2,  72 => 1,  59 => 49,  56 => 48,  54 => 11,  51 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_calendar_choice_row %}
    {% if choices is not empty %}
        {% if choices|length > 1 %}
            {{ form_row(form) }}
        {% else %}
            {{ form_row(form, {'label': false}) }}
        {% endif %}
    {% endif %}
{% endblock %}

{% block oro_calendar_choice_template_row %}
    <% var {{ name }}Template = '';
    if ({{ name }}TemplateType === 'single') {
        {{ name }}Template = '
        {%- apply spaceless %}
        <div class=\"control-group\">
            <div class=\"controls\">
                <div id=\"{{ id }}\" class=\"horizontal validate-group\">
                    <div class=\"oro-clearfix\">
                        <input type=\"checkbox\" id=\"{{ id }}_0\" name=\"{{ full_name }}[]\" value=\"< %- calendars[0].uid % >\">
                        <label for=\"{{ id }}_0\">< %- {{ 'oro.calendar.add_to_calendar'|trans|json_encode|raw }}.replace(\"%name%\", calendars[0].name) % ><em>&nbsp;</em></label>
                    </div>
                </div>
            </div>
        </div>
        {% endapply -%}
        ';
    } else if ({{ name }}TemplateType === 'multiple') {
        {{ name }}Template = '
        {%- apply spaceless %}
        <div class=\"control-group\">
            <label data-required=\"1\" class=\"control-label required\" for=\"{{ id }}\">{{ label|trans }}<em>*</em></label>
            <div class=\"controls\">
                <select id=\"{{ id }}\" name=\"{{ full_name }}\" data-required=\"1\">
                < % for (var i = 0; i < calendars.length; i++) { % >
                    <option value=\"< %- calendars[i].uid % >\">< %- calendars[i].name % ></option>
                < % } % >
                </select>
            </div>
        </div>
        {% endapply -%}
        ';
    } %>
    <% if ({{ name }}Template) { %>
        <%= _.template({{ name }}Template.replace(/\\< %/g, '<' + '%').replace(/% \\>/g, '%' + '>'))({calendars: calendars}) %>
    <% } %>
{% endblock %}

{% block oro_calendar_event_recurrence_row %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set modelAttrs = {} %}
    {% set errors = [] %}
    {% for field in form.children %}
        {% if field.vars.errors is not empty %}
            {% set fieldErrors = [] %}
            {% for error in field.vars.errors %}
                {% set fieldErrors = fieldErrors|merge([error.message]) %}
            {% endfor %}
            {% set errors = errors|merge([{
                label: field.vars.label|trans,
                name: field.vars.name,
                messages: fieldErrors
            }]) %}
        {% endif %}
        {% if field.vars.value is not empty %}
            {% set modelAttrs = modelAttrs|merge({(field.vars.name): field.vars.value}) %}
        {% endif %}
        {% do field.setRendered %}
    {% endfor %}

    {{ form_errors(form) }}
    <div {{ UI.renderPageComponentAttributes({
        module: 'orocalendar/js/app/components/calendar-event-recurrence-component',
        name: 'calendar-event-recurrence',
        options: {
            inputNamePrefixes: form.vars.full_name,
            errors: errors,
            modelAttrs: modelAttrs
        }
    }) }}></div>
{% endblock %}
", "@OroCalendar/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Form/fields.html.twig");
    }
}
