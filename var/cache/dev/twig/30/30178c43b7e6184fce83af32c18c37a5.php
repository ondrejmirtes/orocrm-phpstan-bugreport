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

/* @OroImportExport/ImportExport/widget/importForm.html.twig */
class __TwigTemplate_5aed20c29b7943cf41935740cc85c269 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/widget/importForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importForm.html.twig"));

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
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "additionalNotices", [], "any", true, true, false, 5)) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 6, $this->source); })()), "additionalNotices", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["additionalNotice"]) {
                // line 7
                echo "                ";
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["additionalNotice"]), "html", null, true));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['additionalNotice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        ";
        }
        // line 10
        echo "    </div>
    <div class=\"form-container\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_importexport_import_form", ["entity" =>         // line 13
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 13, $this->source); })()), "importJob" => (isset($context["importJob"]) || array_key_exists("importJob", $context) ? $context["importJob"] : (function () { throw new RuntimeError('Variable "importJob" does not exist.', 13, $this->source); })()), "importValidateJob" => (isset($context["importValidateJob"]) || array_key_exists("importValidateJob", $context) ? $context["importValidateJob"] : (function () { throw new RuntimeError('Variable "importValidateJob" does not exist.', 13, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })())]), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "data-nohash" => "true", "class" => "form-horizontal"]]);
        // line 19
        echo "

            <fieldset class=\"form\">
                <div class=\"control-group-container import-file\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "file", [], "any", false, false, false, 23), 'row', ["label" => "oro.importexport.import.file"]);
        echo "
                </div>
                <div class=\"control-group-container\" ";
        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "processorAlias", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "choices", [], "any", false, false, false, 25)) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo ">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "processorAlias", [], "any", false, false, false, 26), 'row', ["label" => "oro.importexport.import.strategy"]);
        echo "
                </div>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button>
            </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        ";
        // line 36
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()));
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
        return "@OroImportExport/ImportExport/widget/importForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  123 => 35,  118 => 33,  114 => 32,  107 => 28,  102 => 26,  96 => 25,  91 => 23,  85 => 19,  83 => 15,  82 => 13,  81 => 12,  77 => 10,  74 => 9,  65 => 7,  60 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-content import-widget-content\">
    <div class=\"alert alert-info import-notice\" role=\"alert\">
        <strong>{{ 'oro.importexport.import.importance'|trans }}</strong>:
        {{ 'oro.importexport.import.columns_notice'|trans }}
        {% if options.additionalNotices is defined %}
            {% for additionalNotice in options.additionalNotices %}
                {{ additionalNotice|trans|nl2br }}
            {% endfor %}
        {% endif %}
    </div>
    <div class=\"form-container\">
        {{ form_start(form, {
            'action': path('oro_importexport_import_form', {entity: entityName, importJob: importJob, importValidateJob: importValidateJob, options: options}),
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
", "@OroImportExport/ImportExport/widget/importForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/widget/importForm.html.twig");
    }
}
