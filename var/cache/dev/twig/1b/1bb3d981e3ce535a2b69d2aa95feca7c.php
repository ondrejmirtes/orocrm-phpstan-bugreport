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

/* @OroUI/actions/dialog/move.html.twig */
class __TwigTemplate_7484f0e83307f01594a3ce2cb636e22e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/actions/dialog/move.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/dialog/move.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/actions/dialog/move.html.twig"));

        // line 1
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.jstree.move.success.label", ["%nodes%" =>             // line 4
(isset($context["nodesName"]) || array_key_exists("nodesName", $context) ? $context["nodesName"] : (function () { throw new RuntimeError('Variable "nodesName" does not exist.', 4, $this->source); })())]), "triggerSuccess" => true, "trigger" => [0 => ["eventBroker" => "widget", "name" => "formSave", "args" => [0 =>             // line 9
(isset($context["changed"]) || array_key_exists("changed", $context) ? $context["changed"] : (function () { throw new RuntimeError('Variable "changed" does not exist.', 9, $this->source); })())]]], "remove" => true]];
            // line 14
            echo "
    ";
            // line 15
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 15, $this->source); })()));
            echo "
";
        } else {
            // line 17
            echo "    ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => $this->getTemplateName()], true);
            // line 18
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            ";
            // line 20
            $context["formAction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "uri", [], "any", false, false, false, 20);
            // line 21
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 23
            $context["formErrors"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
            // line 24
            echo "
                    ";
            // line 25
            if ((isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                        <div class=\"alert alert-error alert-dismissible\" role=\"alert\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&times;</span></button>
                            ";
                // line 28
                echo (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 28, $this->source); })());
                echo "
                        </div>
                    ";
            }
            // line 31
            echo "                    <div class=\"span6\">
                        <div class=\"control-group control-group-hidden\">
                            <div class=\"control-label wrap\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.jstree.move.source.label"), "html", null, true);
            echo "</div>
                            <div class=\"controls\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35), "source", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 36
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["source"], "parents", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                    // line 37
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parent"], "label", [], "any", false, false, false, 37), "html", null, true);
                    echo "&nbsp;&gt;&nbsp;
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["source"], "label", [], "any", false, false, false, 39), "html", null, true);
                echo "
                                    <br />
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </div>
                        </div>
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'rest');
            echo "
                    </div>

                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 53
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()));
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
        return "@OroUI/actions/dialog/move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 53,  152 => 49,  148 => 48,  141 => 44,  137 => 42,  127 => 39,  118 => 37,  113 => 36,  109 => 35,  104 => 33,  100 => 31,  94 => 28,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  80 => 23,  70 => 21,  68 => 20,  64 => 18,  61 => 17,  56 => 15,  53 => 14,  51 => 9,  50 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if saved is defined and saved %}
    {% set widgetResponse = {
        widget: {
            message: 'oro.ui.jstree.move.success.label'|trans({'%nodes%': nodesName}),
            triggerSuccess: true,
            trigger: [{
                eventBroker: 'widget',
                name: 'formSave',
                args: [changed],
            }],
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    {% form_theme form with ['@OroForm/Form/fields.html.twig', _self] %}
    <div class=\"widget-content\">
        <div class=\"form-container\">
            {% set formAction = app.request.uri %}
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"{{ formAction }}\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    {% set formErrors = form_errors(form) %}

                    {% if formErrors %}
                        <div class=\"alert alert-error alert-dismissible\" role=\"alert\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|trans }}\"><span aria-hidden=\"true\">&times;</span></button>
                            {{ formErrors|raw }}
                        </div>
                    {% endif %}
                    <div class=\"span6\">
                        <div class=\"control-group control-group-hidden\">
                            <div class=\"control-label wrap\">{{ 'oro.ui.jstree.move.source.label'|trans }}</div>
                            <div class=\"controls\">
                                {% for source in form.vars.value.source %}
                                    {% for parent in source.parents %}
                                        {{ parent.label }}&nbsp;&gt;&nbsp;
                                    {% endfor %}
                                    {{ source.label }}
                                    <br />
                                {% endfor %}
                            </div>
                        </div>
                        {{ form_rest(form) }}
                    </div>

                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    </div>
{% endif %}
", "@OroUI/actions/dialog/move.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/actions/dialog/move.html.twig");
    }
}
