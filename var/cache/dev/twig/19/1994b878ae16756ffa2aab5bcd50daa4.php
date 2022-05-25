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

/* @OroImportExport/ImportExport/import-button.html.twig */
class __TwigTemplate_61e4bd834f4257abddfd8a9adf7768ff extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/import-button.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/import-button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/import-button.html.twig"));

        // line 1
        $context["showImportButton"] = false;
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Oro\Bundle\ImportExportBundle\Twig\GetImportExportConfigurationExtension']->getConfiguration((isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 3, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 4
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, $context["configuration"], "importProcessorAlias", [], "any", true, true, false, 4) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 5
$context["configuration"], "importProcessorAlias", [], "any", false, false, false, 5))) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_importexport_import")) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(("CREATE;entity:" . twig_get_attribute($this->env, $this->source,             // line 7
$context["configuration"], "entityClass", [], "any", false, false, false, 7))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(("EDIT;entity:" . twig_get_attribute($this->env, $this->source, $context["configuration"], "entityClass", [], "any", false, false, false, 7)))))) {
                // line 9
                echo "        ";
                $context["showImportButton"] = true;
                // line 10
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ((isset($context["showImportButton"]) || array_key_exists("showImportButton", $context) ? $context["showImportButton"] : (function () { throw new RuntimeError('Variable "showImportButton" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "    <div class=\"btn-group\">
        <a href=\"#\" role=\"button\"
            class=\"btn import-btn icons-holder-text no-hash\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 18
            echo twig_escape_filter($this->env, json_encode(["view" => "oroimportexport/js/app/views/import-button-view", "alias" =>             // line 20
(isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 20, $this->source); })()), "routeOptions" => ((            // line 21
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })()), [])) : ([]))]), "html", null, true);
            // line 22
            echo "\"
        >
            <span class=\"fa-download hide-text\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.label"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.label"), "html", null, true);
            echo "
        </a>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/import-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 22,  83 => 21,  82 => 20,  81 => 18,  75 => 14,  73 => 13,  70 => 12,  63 => 10,  60 => 9,  58 => 7,  57 => 5,  55 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set showImportButton = false %}

{% for configuration in get_import_export_configuration(alias) %}
    {% if configuration.importProcessorAlias is defined
        and configuration.importProcessorAlias is not empty
        and is_granted('oro_importexport_import')
        and (is_granted('CREATE;entity:' ~ configuration.entityClass) or is_granted('EDIT;entity:' ~ configuration.entityClass))
    %}
        {% set showImportButton = true %}
    {% endif %}
{% endfor %}

{% if showImportButton %}
    <div class=\"btn-group\">
        <a href=\"#\" role=\"button\"
            class=\"btn import-btn icons-holder-text no-hash\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"{{ {
                'view': 'oroimportexport/js/app/views/import-button-view',
                'alias': alias,
                'routeOptions': options|default({})
            }|json_encode }}\"
        >
            <span class=\"fa-download hide-text\">{{ 'oro.importexport.import.label'|trans }}</span>{{ 'oro.importexport.import.label'|trans }}
        </a>
    </div>
{% endif %}
", "@OroImportExport/ImportExport/import-button.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/import-button.html.twig");
    }
}
