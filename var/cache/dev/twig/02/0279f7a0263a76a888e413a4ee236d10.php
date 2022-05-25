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

/* @OroActivityList/Merge/value.html.twig */
class __TwigTemplate_47e7456700a7ceb697c3e14248ddad46 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/Merge/value.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/Merge/value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/Merge/value.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        if (twig_length_filter($this->env, (isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.merge.items.label", ["%count%" => (isset($context["convertedValue"]) || array_key_exists("convertedValue", $context) ? $context["convertedValue"] : (function () { throw new RuntimeError('Variable "convertedValue" does not exist.', 7, $this->source); })())]), "html", null, true);
            echo "
";
        } else {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["empty_cell"]) || array_key_exists("empty_cell", $context) ? $context["empty_cell"] : (function () { throw new RuntimeError('Variable "empty_cell" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/Merge/value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  64 => 7,  59 => 6,  57 => 5,  54 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set empty_cell %}
    <span class=\"empty\">-- {{ 'oro.entity_merge.form.empty'|trans }} --</span>
{% endset %}

{% if convertedValue|length %}
    {{ convertedValue }}
    {{ 'oro.activitylist.merge.items.label'|trans({'%count%': convertedValue}) }}
{% else %}
    {{ empty_cell }}
{% endif %}
", "@OroActivityList/Merge/value.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/Merge/value.html.twig");
    }
}
