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

/* @OroUI/widget_loader.html.twig */
class __TwigTemplate_7ede937bda5c7c31bbc58249b59a93f5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/widget_loader.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/widget_loader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/widget_loader.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/widget_loader.html.twig", 1)->unwrap();
        // line 2
        $context["widgetComponentOptions"] = ["type" =>         // line 3
(isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 3, $this->source); })()), "options" =>         // line 4
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })())];
        // line 6
        echo "
";
        // line 7
        $context["content"] = $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), "url", [], "any", false, false, false, 7));
        // line 8
        if (twig_length_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "    ";
            $context["separateLayout"] = ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "separateLayout", [], "any", true, true, false, 9) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()), "separateLayout", [], "any", false, false, false, 9));
            // line 10
            echo "    ";
            ob_start();
            // line 11
            echo "        ";
            if ((isset($context["separateLayout"]) || array_key_exists("separateLayout", $context) ? $context["separateLayout"] : (function () { throw new RuntimeError('Variable "separateLayout" does not exist.', 11, $this->source); })())) {
                echo " data-layout=\"separate\"";
            }
            // line 12
            echo "    ";
            $context["separateLayoutContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["elementId"]) || array_key_exists("elementId", $context) ? $context["elementId"] : (function () { throw new RuntimeError('Variable "elementId" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" ";
            echo twig_call_macro($macros["UI"], "macro_renderWidgetAttributes", [(isset($context["widgetComponentOptions"]) || array_key_exists("widgetComponentOptions", $context) ? $context["widgetComponentOptions"] : (function () { throw new RuntimeError('Variable "widgetComponentOptions" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
            echo twig_escape_filter($this->env, (isset($context["separateLayoutContent"]) || array_key_exists("separateLayoutContent", $context) ? $context["separateLayoutContent"] : (function () { throw new RuntimeError('Variable "separateLayoutContent" does not exist.', 13, $this->source); })()), "html", null, true);
            echo ">
        ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), "elementFirst", [], "any", false, false, false, 14)) {
                // line 15
                echo "            ";
                echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 15, $this->source); })());
                echo "
        ";
            }
            // line 17
            echo "    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/widget_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  83 => 15,  81 => 14,  73 => 13,  70 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 4,  49 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set widgetComponentOptions = {
    'type' : widgetType,
    'options' : options
} %}

{% set content = render(options.url) %}
{% if content|length %}
    {% set separateLayout = options.separateLayout is not defined or options.separateLayout %}
    {% set separateLayoutContent %}
        {% if separateLayout %} data-layout=\"separate\"{% endif %}
    {% endset %}
    <div id=\"{{ elementId }}\" {{ UI.renderWidgetAttributes(widgetComponentOptions) }}{{ separateLayoutContent }}>
        {% if options.elementFirst %}
            {{ content|raw }}
        {% endif %}
    </div>
{% endif %}
", "@OroUI/widget_loader.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/widget_loader.html.twig");
    }
}
