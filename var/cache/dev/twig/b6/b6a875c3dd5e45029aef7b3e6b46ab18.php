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

/* @OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig */
class __TwigTemplate_a66bc47a813f18bfa4bb8b0f61ae88ab extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 1, $this->source); })()), "rootEntity", [], "any", false, false, false, 1), "sourceFile", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig", 2)->display(twig_array_merge($context, ["file" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 3
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "rootEntity", [], "any", false, false, false, 3), "sourceFile", [], "any", false, false, false, 3), "filter" => "digital_asset_in_dialog", "img_attrs" => ["class" => "digital-asset-thumbnail", "alt" => $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileTitle(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "rootEntity", [], "any", false, false, false, 7), "sourceFile", [], "any", false, false, false, 7))]]));
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if record.rootEntity.sourceFile %}
    {% include '@OroAttachment/Twig/picture.html.twig' with {
        file: record.rootEntity.sourceFile,
        filter: 'digital_asset_in_dialog',
        img_attrs: {
            class: 'digital-asset-thumbnail',
            alt: oro_file_title(record.rootEntity.sourceFile),
        }
    } %}
{% endif %}
", "@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DigitalAssetBundle/Resources/views/DigitalAsset/Datagrid/Property/image.html.twig");
    }
}
