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

/* @OroTag/Taxonomy/widget/info.html.twig */
class __TwigTemplate_cc487b75f2655f6ae1fd804dbcf02ef3 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTag/Taxonomy/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Taxonomy/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Taxonomy/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTag/Taxonomy/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroTag/Taxonomy/widget/info.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["taxonomy"]) || array_key_exists("taxonomy", $context) ? $context["taxonomy"] : (function () { throw new RuntimeError('Variable "taxonomy" does not exist.', 6, $this->source); })()), "name")) {
            // line 7
            echo "            <div class=\"responsive-block\">
                ";
            // line 8
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.taxonomy.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["taxonomy"]) || array_key_exists("taxonomy", $context) ? $context["taxonomy"] : (function () { throw new RuntimeError('Variable "taxonomy" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
            echo "
            </div>
            <div class=\"responsive-block\">
                ";
            // line 11
            echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["taxonomy"]) || array_key_exists("taxonomy", $context) ? $context["taxonomy"] : (function () { throw new RuntimeError('Variable "taxonomy" does not exist.', 11, $this->source); })())], 11, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTag/Taxonomy/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  66 => 11,  60 => 8,  57 => 7,  55 => 6,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        {% if is_granted('VIEW', taxonomy, 'name') %}
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.taxonomy.name.label'|trans, taxonomy.name) }}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(taxonomy) }}
            </div>
        {% endif %}
    </div>
</div>
", "@OroTag/Taxonomy/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TagBundle/Resources/views/Taxonomy/widget/info.html.twig");
    }
}
