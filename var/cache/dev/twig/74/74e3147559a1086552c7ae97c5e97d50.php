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

/* @OroCalendar/Calendar/Menu/changeCalendarColor.html.twig */
class __TwigTemplate_3627af75ce16797cac9e5f8c1bdc71b4 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig"));

        // line 1
        $macros["oro_menu"] = $this->macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "<li ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 4, $this->source); })())], 4, $context, $this->getSourceContext());
        echo ">
    <div class=\"color-picker\"></div>
    <div class=\"dropdown-divider context-menu-divider\"></div>";
        // line 7
        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "linkAttributes", [], "any", false, false, false, 7);
        // line 8
        echo "        <a href=\"#\" role=\"button\" ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
        echo ">
            <span class=\"custom-color-wrapper\">
                <span class=\"custom-color\"></span>
            </span>
            <span class=\"custom-color-name\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.context.edit_color"), "html", null, true);
        echo "</span>
        </a>
</li>
";
        $___internal_parse_80_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_80_);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 3,  69 => 12,  61 => 8,  59 => 7,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

{% apply spaceless %}
<li {{ oro_menu.attributes(itemAttributes) }}>
    <div class=\"color-picker\"></div>
    <div class=\"dropdown-divider context-menu-divider\"></div>
        {%- set linkAttributes = item.linkAttributes %}
        <a href=\"#\" role=\"button\" {{ oro_menu.attributes(linkAttributes) }}>
            <span class=\"custom-color-wrapper\">
                <span class=\"custom-color\"></span>
            </span>
            <span class=\"custom-color-name\">{{ 'oro.calendar.context.edit_color'|trans }}</span>
        </a>
</li>
{% endapply %}
", "@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Calendar/Menu/changeCalendarColor.html.twig");
    }
}
