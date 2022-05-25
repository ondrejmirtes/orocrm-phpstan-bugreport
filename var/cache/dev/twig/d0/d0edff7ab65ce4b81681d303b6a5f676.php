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

/* @OroEntityConfig/Config/widget/uniqueKeys.html.twig */
class __TwigTemplate_ee8b183e5e263a4e8e570f62bda6b802 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Config/widget/uniqueKeys.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/widget/uniqueKeys.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/widget/uniqueKeys.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/widget/uniqueKeys.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["unique_key"]) || array_key_exists("unique_key", $context) ? $context["unique_key"] : (function () { throw new RuntimeError('Variable "unique_key" does not exist.', 6, $this->source); })()), "keys", [], "any", false, false, false, 6))) {
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["unique_key"]) || array_key_exists("unique_key", $context) ? $context["unique_key"] : (function () { throw new RuntimeError('Variable "unique_key" does not exist.', 7, $this->source); })()), "keys", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 8
                echo "                    ";
                echo twig_call_macro($macros["ui"], "macro_renderProperty", [twig_get_attribute($this->env, $this->source, $context["key"], "name", [], "any", false, false, false, 8), twig_join_filter(twig_get_attribute($this->env, $this->source, $context["key"], "key", [], "any", false, false, false, 8), ", ")], 8, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <div class=\"container-fluid\">
                    ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No unique keys found.", [], "messages");
            // line 13
            echo "                </div>
            ";
        }
        // line 15
        echo "        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Config/widget/uniqueKeys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  78 => 13,  76 => 12,  73 => 11,  70 => 10,  61 => 8,  56 => 7,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {% if unique_key.keys is not empty %}
                {% for key in unique_key.keys %}
                    {{ ui.renderProperty(key.name, key.key|join(', ')) }}
                {% endfor %}
            {% else %}
                <div class=\"container-fluid\">
                    {% trans %}No unique keys found.{% endtrans %}
                </div>
            {% endif %}
        </div>
    </div>
</div>
", "@OroEntityConfig/Config/widget/uniqueKeys.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Config/widget/uniqueKeys.html.twig");
    }
}
