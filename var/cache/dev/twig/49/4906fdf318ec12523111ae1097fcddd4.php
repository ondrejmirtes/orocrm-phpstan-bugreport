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

/* @OroAttachment/Twig/dynamicField.html.twig */
class __TwigTemplate_7b16e25560bdbd9798a1d224d3114696 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAttachment/Twig/dynamicField.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/dynamicField.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/dynamicField.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAttachment/Twig/dynamicField.html.twig", 1)->unwrap();
        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroAttachment/Twig/dynamicField.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "fieldConfigId", [], "any", false, false, false, 4), "fieldType", [], "any", false, false, false, 4);
        // line 5
        $context["fieldName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "fieldConfigId", [], "any", false, false, false, 5), "fieldName", [], "any", false, false, false, 5);
        // line 6
        $context["className"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "fieldConfigId", [], "any", false, false, false, 6), "className", [], "any", false, false, false, 6);
        // line 7
        $context["entityId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "entity", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "value", [], "any", false, false, false, 8), null)) : (null));
        // line 9
        echo "
";
        // line 10
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()) == "file")) {
            // line 11
            echo "    ";
            ob_start();
            // line 12
            echo $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileView($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 12, $this->source); })()));
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        } elseif ((        // line 14
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()) == "image")) {
            // line 15
            echo "    ";
            ob_start();
            // line 16
            echo $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getImageView($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()));
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 19
        echo "
";
        // line 20
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "file") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "image"))) {
            // line 21
            echo "    ";
            echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
            echo "
";
        } else {
            // line 23
            echo "    ";
            $context["gridName"] = ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) == "multiFile")) ? ("attachment-files-grid") : ("attachment-images-grid"));
            // line 24
            echo "    ";
            $context["gridFullName"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName((isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 24, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 24, $this->source); })()));
            // line 25
            echo "    <div class=\"widget-content\">
        ";
            // line 26
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridFullName"]) || array_key_exists("gridFullName", $context) ? $context["gridFullName"] : (function () { throw new RuntimeError('Variable "gridFullName" does not exist.', 26, $this->source); })()), ["entityId" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 26, $this->source); })()), "entityField" => (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 26, $this->source); })()), "entityTable" => (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 26, $this->source); })())]], 26, $context, $this->getSourceContext());
            echo "
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAttachment/Twig/dynamicField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  100 => 25,  97 => 24,  94 => 23,  88 => 21,  86 => 20,  83 => 19,  79 => 16,  76 => 15,  74 => 14,  71 => 12,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% set type = data.fieldConfigId.fieldType %}
{% set fieldName = data.fieldConfigId.fieldName %}
{% set className = data.fieldConfigId.className %}
{% set entityId = data.entity.id %}
{% set value = data.value|default(null) %}

{% if type == 'file' %}
    {% set value %}
        {{- oro_file_view(value) -}}
    {% endset %}
{% elseif type == 'image' %}
    {% set value %}
        {{- oro_image_view(value) -}}
    {% endset %}
{% endif %}

{% if type == 'file' or type == 'image' %}
    {{ value|default('N/A'|trans) }}
{% else %}
    {% set gridName = (type == 'multiFile' ? 'attachment-files-grid' : 'attachment-images-grid') %}
    {% set gridFullName = oro_datagrid_build_fullname(gridName, fieldName) %}
    <div class=\"widget-content\">
        {{ dataGrid.renderGrid(gridFullName, {entityId: entityId, entityField: fieldName, entityTable: className}) }}
    </div>
{% endif %}
", "@OroAttachment/Twig/dynamicField.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Twig/dynamicField.html.twig");
    }
}
