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

/* @OroApi/ApiDoc/input.html.twig */
class __TwigTemplate_405a169a42db1ef99bff855a318034b7 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroApi/ApiDoc/input.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/input.html.twig"));

        // line 1
        echo "<h4>Input</h4>
<table class='fullwidth input'>
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
            // line 12
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, $context["infos"], "readonly", [], "any", false, false, false, 12)) {
                // line 13
                echo "                <tr>
                    <td>";
                // line 14
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                    <td>";
                // line 15
                ((twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", true, true, false, 15)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 15) . (((twig_get_attribute($this->env, $this->source, $context["infos"], "subType", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, $context["infos"], "subType", [], "any", false, false, false, 15))) ? (((" (" . twig_get_attribute($this->env, $this->source, $context["infos"], "subType", [], "any", false, false, false, 15)) . ")")) : (""))), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 16)) ? ($this->extensions['Oro\Bundle\ApiBundle\Twig\MarkdownExtension']->markdown(twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 16))) : (""));
                echo "</td>
                </tr>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
</table>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroApi/ApiDoc/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 19,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  62 => 12,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>Input</h4>
<table class='fullwidth input'>
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
        <tbody>
        {% for name, infos in data %}
            {% if not infos.readonly %}
                <tr>
                    <td>{{ name }}</td>
                    <td>{{ infos.dataType is defined ? infos.dataType ~ (infos.subType is defined and infos.subType ? ' (' ~ infos.subType ~ ')': '') : '' }}</td>
                    <td>{{ infos.description is defined ? infos.description|extra_markdown : '' }}</td>
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
</table>
", "@OroApi/ApiDoc/input.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/ApiDoc/input.html.twig");
    }
}
