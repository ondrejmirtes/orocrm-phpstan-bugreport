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

/* @OroNote/Note/dialog/update.html.twig */
class __TwigTemplate_fe37b7672734682e0ea8f8d5feffe005 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/dialog/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/dialog/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/dialog/update.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => $this->getTemplateName()], true);
        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNote/Note/dialog/update.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_saved"), "triggerSuccess" => true, "remove" => true]];
            // line 12
            echo "
    ";
            // line 13
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 13, $this->source); })()));
            echo "
";
        } else {
            // line 15
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form id=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" method=\"post\" class=\"note-form\">
                <fieldset class=\"form-horizontal\">
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19), 'row');
            echo "
                    <div class=\"control-group\">
                        <div class=\"attachment-container\">
                            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "attachment", [], "any", false, false, false, 22), 'widget');
            echo "
                        </div>
                    </div>
                    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["submitLabel"]) || array_key_exists("submitLabel", $context) ? $context["submitLabel"] : (function () { throw new RuntimeError('Variable "submitLabel" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 32
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()));
            echo "
        </div>
    </div>
";
        }
        // line 36
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNote/Note/dialog/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  107 => 32,  100 => 28,  96 => 27,  91 => 25,  85 => 22,  79 => 19,  70 => 17,  66 => 15,  61 => 13,  58 => 12,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form with ['@OroForm/Form/fields.html.twig', _self] %}
{% import '@OroUI/macros.html.twig' as UI %}

{% if saved %}
    {% set widgetResponse = {
        widget: {
            message: 'oro.note.note_saved'|trans,
            triggerSuccess: true,
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form id=\"{{ form.vars.id }}\" name=\"{{ form.vars.name }}\" action=\"{{ formAction }}\" method=\"post\" class=\"note-form\">
                <fieldset class=\"form-horizontal\">
                    {{ form_row(form.message) }}
                    <div class=\"control-group\">
                        <div class=\"attachment-container\">
                            {{ form_widget(form.attachment) }}
                        </div>
                    </div>
                    {{ form_rest(form) }}
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                        <button class=\"btn btn-primary\" type=\"submit\">{{ submitLabel }}</button>
                    </div>
                </fieldset>
            </form>
            {{ oro_form_js_validation(form) }}
        </div>
    </div>
{% endif %}

", "@OroNote/Note/dialog/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/dialog/update.html.twig");
    }
}
