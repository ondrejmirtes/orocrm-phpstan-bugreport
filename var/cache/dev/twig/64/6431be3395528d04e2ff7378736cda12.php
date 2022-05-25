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

/* @OroImportExport/ImportExport/widget/importValidationForm.html.twig */
class __TwigTemplate_730466c5ea390208e4cbdcda638cb530 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/widget/importValidationForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importValidationForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importValidationForm.html.twig"));

        // line 1
        echo "<div class=\"widget-content import-widget-content\">
    <div class=\"alert alert-info import-notice\" role=\"alert\">
        <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.importance"), "html", null, true);
        echo "</strong>:
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.columns_notice"), "html", null, true);
        echo "
    </div>
    <div class=\"form-container\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_importexport_import_validation_form", ["entity" =>         // line 8
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 8, $this->source); })()), "importJob" => (isset($context["importJob"]) || array_key_exists("importJob", $context) ? $context["importJob"] : (function () { throw new RuntimeError('Variable "importJob" does not exist.', 8, $this->source); })()), "importValidateJob" => (isset($context["importValidateJob"]) || array_key_exists("importValidateJob", $context) ? $context["importValidateJob"] : (function () { throw new RuntimeError('Variable "importValidateJob" does not exist.', 8, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })())]), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "data-nohash" => "true", "class" => "form-horizontal"]]);
        // line 14
        echo "

            <fieldset class=\"form\">
                <div class=\"control-group-container import-file\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "file", [], "any", false, false, false, 18), 'row', ["label" => "oro.importexport.import.file"]);
        echo "
                </div>
                <div class=\"control-group-container\" ";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "processorAlias", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "choices", [], "any", false, false, false, 20)) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo ">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "processorAlias", [], "any", false, false, false, 21), 'row', ["label" => "oro.importexport.import.strategy"]);
        echo "
                </div>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button>
            </div>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
        ";
        // line 31
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/widget/importValidationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  102 => 30,  97 => 28,  93 => 27,  86 => 23,  81 => 21,  75 => 20,  70 => 18,  64 => 14,  62 => 10,  61 => 8,  60 => 7,  54 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-content import-widget-content\">
    <div class=\"alert alert-info import-notice\" role=\"alert\">
        <strong>{{ 'oro.importexport.import.importance'|trans }}</strong>:
        {{ 'oro.importexport.import.columns_notice'|trans }}
    </div>
    <div class=\"form-container\">
        {{ form_start(form, {
            'action': path('oro_importexport_import_validation_form', {entity: entityName, importJob: importJob, importValidateJob: importValidateJob, options: options}),
            'attr': {
                'id': form.vars.id,
                'data-nohash': 'true',
                'class': 'form-horizontal'
            }
        }) }}

            <fieldset class=\"form\">
                <div class=\"control-group-container import-file\">
                    {{ form_row(form.file, {'label': 'oro.importexport.import.file'}) }}
                </div>
                <div class=\"control-group-container\" {% if form.processorAlias.vars.choices|length <= 1 %}style=\"display: none;\"{% endif %}>
                    {{ form_row(form.processorAlias, {'label': 'oro.importexport.import.strategy'}) }}
                </div>
                {{ form_rest(form) }}
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                <button class=\"btn btn-primary\" type=\"submit\">{{ 'Submit'|trans }}</button>
            </div>
        {{ form_end(form) }}
        {{ oro_form_js_validation(form) }}
    </div>
</div>
", "@OroImportExport/ImportExport/widget/importValidationForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/widget/importValidationForm.html.twig");
    }
}
