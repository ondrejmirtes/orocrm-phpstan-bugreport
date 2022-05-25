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

/* @OroCron/Form/fields.html.twig */
class __TwigTemplate_af02f885dbb8000cd76a49ba9f82878e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_cron_schedule_intervals_collection_widget' => [$this, 'block_oro_cron_schedule_intervals_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCron/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/Form/fields.html.twig"));

        // line 2
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('oro_cron_schedule_intervals_collection_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_oro_cron_schedule_intervals_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_cron_schedule_intervals_collection_widget", $this->getTemplateName(), 30));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_cron_schedule_intervals_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_cron_schedule_intervals_collection_widget"));

        // line 31
        echo "    ";
        $macros["cronFormFields"] = $this;
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 35
            echo "            ";
            $context["prototype_html"] = twig_call_macro($macros["cronFormFields"], "macro_schedule_interval_prototype", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
            // line 36
            echo "        ";
        }
        // line 37
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 37)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "class", [], "any", false, false, false, 37) . " ")) : ("")) . "oro-item-collection oro-item-collection__row--align-middle collection-fields-list")]);
        // line 38
        echo "        ";
        $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()) . "_collection");
        // line 39
        echo "        <div class=\"row-oro schedule-intervals\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
        // line 41
        echo twig_escape_filter($this->env, json_encode(["view" => "orocron/js/app/views/schedule-intervals-view"]), "html", null, true);
        // line 43
        echo "\">
            ";
        // line 44
        $context["prototype_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "prototype_name", [], "any", false, false, false, 44);
        // line 45
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><span>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cron.schedule_interval.active_at.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cron.schedule_interval.deactivate_at.label"), "html", null, true);
        echo "</span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "children", [], "any", false, false, false, 54)), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "row_count_add", [], "any", false, false, false, 54), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 54, $this->source); })()));
            echo "\"";
        }
        echo ">
                    ";
        // line 55
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "children", [], "any", false, false, false, 55))) {
            // line 56
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "children", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 57
                echo "                            ";
                echo twig_call_macro($macros["cronFormFields"], "macro_schedule_interval_prototype", [$context["child"]], 57, $context, $this->getSourceContext());
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    ";
        } elseif (((isset($context["show_form_when_empty"]) || array_key_exists("show_form_when_empty", $context) ? $context["show_form_when_empty"] : (function () { throw new RuntimeError('Variable "show_form_when_empty" does not exist.', 59, $this->source); })()) && array_key_exists("prototype_html", $context))) {
            // line 60
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "row_count_initial", [], "any", false, false, false, 60) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 61
                echo "                            ";
                echo twig_replace_filter((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 61, $this->source); })()), [(isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 61, $this->source); })()) => $context["i"]]);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    ";
        }
        // line 64
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"btn-container\">
                <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"#\"><i class=\"fa-plus\"></i>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.cron.schedule_interval.add"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 71
        if (((isset($context["handle_primary"]) || array_key_exists("handle_primary", $context) ? $context["handle_primary"] : (function () { throw new RuntimeError('Variable "handle_primary" does not exist.', 71, $this->source); })()) && ( !array_key_exists("prototype", $context) || twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "primary", [], "any", true, true, false, 71)))) {
            // line 72
            echo "            ";
            echo twig_call_macro($macros["cronFormFields"], "macro_oro_collection_validate_primary_js", [$context], 72, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 74
        echo "    ";
        $___internal_parse_48_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo twig_spaceless($___internal_parse_48_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 3
    public function macro_schedule_interval_prototype($__widget__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "schedule_interval_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "schedule_interval_prototype"));

            // line 4
            echo "    ";
            if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "block_prefixes", [], "any", false, false, false, 4))) {
                // line 5
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "prototype", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 8, $this->source); })());
                // line 9
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "full_name", [], "any", false, false, false, 9);
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    ";
            // line 12
            $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "activeAt", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "deactivateAt", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)));
            // line 13
            echo "
    <tr data-content=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" data-validation-optional-group class=\"schedule-interval__row ";
            if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 14, $this->source); })())) {
                echo "has-row-error";
            }
            echo "\" data-role=\"schedule-interval-row\">
        <td>";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "activeAt", [], "any", false, false, false, 15), 'widget');
            echo "</td>
        <td>";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "deactivateAt", [], "any", false, false, false, 16), 'widget');
            echo "</td>
        <td>
            <button type=\"button\" class=\"removeRow btn btn-icon btn-square-lighter\" aria-label=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove row"), "html", null, true);
            echo "\"><span class=\"fa-trash-o\" aria-hidden=\"true\"></span></button>
        </td>
    </tr>
    <tr ";
            // line 21
            if ( !(isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 21, $this->source); })())) {
                echo "style=\"display: none\"";
            }
            echo " class=\"schedule-interval__error-row\" data-role=\"schedule-interval-row-error\">
        <td colspan=\"3\">
            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
            echo "
            ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "activeAt", [], "any", false, false, false, 24), 'errors');
            echo "
            ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "deactivateAt", [], "any", false, false, false, 25), 'errors');
            echo "
        </td>
    </tr>
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
        return "@OroCron/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 25,  299 => 24,  295 => 23,  288 => 21,  282 => 18,  277 => 16,  273 => 15,  265 => 14,  262 => 13,  260 => 12,  257 => 11,  254 => 10,  251 => 9,  248 => 8,  245 => 7,  242 => 6,  239 => 5,  236 => 4,  217 => 3,  204 => 33,  201 => 74,  195 => 72,  193 => 71,  187 => 68,  181 => 64,  178 => 63,  169 => 61,  164 => 60,  161 => 59,  152 => 57,  147 => 56,  145 => 55,  131 => 54,  124 => 50,  120 => 49,  112 => 45,  110 => 44,  107 => 43,  105 => 41,  101 => 39,  98 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  84 => 33,  81 => 32,  78 => 31,  53 => 30,  50 => 29,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# --------------------------- Schedule Intervals ------------------------------------------------------ #}

{% macro schedule_interval_prototype(widget) %}
    {% if 'collection' in widget.vars.block_prefixes %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}

    {% set hasErrors = (form.activeAt.vars.errors|length or form.deactivateAt.vars.errors|length) %}

    <tr data-content=\"{{ name }}\" data-validation-optional-group class=\"schedule-interval__row {% if hasErrors %}has-row-error{% endif %}\" data-role=\"schedule-interval-row\">
        <td>{{ form_widget(form.activeAt) }}</td>
        <td>{{ form_widget(form.deactivateAt) }}</td>
        <td>
            <button type=\"button\" class=\"removeRow btn btn-icon btn-square-lighter\" aria-label=\"{{ 'Remove row'|trans }}\"><span class=\"fa-trash-o\" aria-hidden=\"true\"></span></button>
        </td>
    </tr>
    <tr {% if not hasErrors %}style=\"display: none\"{% endif %} class=\"schedule-interval__error-row\" data-role=\"schedule-interval-row-error\">
        <td colspan=\"3\">
            {{ form_errors(form) }}
            {{ form_errors(form.activeAt) }}
            {{ form_errors(form.deactivateAt) }}
        </td>
    </tr>
{% endmacro %}

{% block oro_cron_schedule_intervals_collection_widget %}
    {% import _self as cronFormFields %}

    {% apply spaceless %}
        {% if prototype is defined %}
            {% set prototype_html = cronFormFields.schedule_interval_prototype(form) %}
        {% endif %}
        {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection oro-item-collection__row--align-middle collection-fields-list' }) %}
        {% set id = id ~ '_collection' %}
        <div class=\"row-oro schedule-intervals\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"{{ {
                 view: 'orocron/js/app/views/schedule-intervals-view',
             }|json_encode }}\">
            {% set prototype_name = form.vars.prototype_name %}
            <div {{ block('widget_container_attributes') }}>
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><span>{{ 'oro.cron.schedule_interval.active_at.label'|trans }}</span></th>
                        <th><span>{{ 'oro.cron.schedule_interval.deactivate_at.label'|trans }}</span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody data-last-index=\"{{ form.children|length }}\" data-row-count-add=\"{{ form.vars.row_count_add }}\" data-prototype-name=\"{{ prototype_name }}\"{% if prototype_html is defined %} data-prototype=\"{{ prototype_html|escape }}\"{% endif %}>
                    {% if form.children|length %}
                        {% for child in form.children %}
                            {{ cronFormFields.schedule_interval_prototype(child) }}
                        {% endfor %}
                    {% elseif show_form_when_empty and prototype_html is defined %}
                        {% for i in 0..(form.vars.row_count_initial - 1) %}
                            {{ prototype_html|replace({(prototype_name): i})|raw }}
                        {% endfor %}
                    {% endif %}
                    </tbody>
                </table>
            </div>
            <div class=\"btn-container\">
                <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"#\"><i class=\"fa-plus\"></i>{{ 'oro.cron.schedule_interval.add'|trans }}</a>
            </div>
        </div>
        {% if handle_primary and (prototype is not defined or prototype.primary is defined) %}
            {{ cronFormFields.oro_collection_validate_primary_js(_context) }}
        {% endif %}
    {% endapply %}
{% endblock %}
", "@OroCron/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CronBundle/Resources/views/Form/fields.html.twig");
    }
}
