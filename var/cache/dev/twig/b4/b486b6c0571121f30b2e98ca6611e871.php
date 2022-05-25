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

/* @OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig */
class __TwigTemplate_83e4752ca7f6e34eb69f046924124d46 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 4
        $context["attributeFamilies"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "attributeFamiliesViewData"], "method", false, false, false, 4);
        // line 5
        if ( !twig_test_empty((isset($context["attributeFamilies"]) || array_key_exists("attributeFamilies", $context) ? $context["attributeFamilies"] : (function () { throw new RuntimeError('Variable "attributeFamilies" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "<ul class=\"extra-list\">
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributeFamilies"]) || array_key_exists("attributeFamilies", $context) ? $context["attributeFamilies"] : (function () { throw new RuntimeError('Variable "attributeFamilies" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributeFamily"]) {
                // line 8
                echo "    <li class=\"extra-list-element\">
    ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["attributeFamily"], "viewLink", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        ";
                    echo twig_call_macro($macros["UI"], "macro_renderUrl", [twig_get_attribute($this->env, $this->source, $context["attributeFamily"], "viewLink", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["attributeFamily"], "label", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
                    echo "
    ";
                } else {
                    // line 12
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attributeFamily"], "label", [], "any", false, false, false, 12), "html", null, true);
                    echo "
    ";
                }
                // line 14
                echo "    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeFamily'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</ul>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  79 => 14,  73 => 12,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  51 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{# Template data provided by Oro\\Bundle\\EntityConfigBundle\\EventListener\\AttributesDatagridListener #}
{% set attributeFamilies = record.getValue('attributeFamiliesViewData') %}
{% if attributeFamilies is not empty %}
<ul class=\"extra-list\">
{% for attributeFamily in attributeFamilies %}
    <li class=\"extra-list-element\">
    {% if attributeFamily.viewLink %}
        {{ UI.renderUrl(attributeFamily.viewLink, attributeFamily.label) }}
    {% else %}
        {{ attributeFamily.label }}
    {% endif %}
    </li>
{% endfor %}
</ul>
{% endif %}
", "@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Datagrid/Column/attributeFamilies.html.twig");
    }
}
