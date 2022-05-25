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

/* @OroCalendar/Calendar/Menu/toggleCalendar.html.twig */
class __TwigTemplate_88ee30b9597d6702d76ba9b450324b4f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Calendar/Menu/toggleCalendar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/toggleCalendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/toggleCalendar.html.twig"));

        // line 1
        $macros["oro_menu"] = $this->macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroCalendar/Calendar/Menu/toggleCalendar.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "<li";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 4, $this->source); })())], 4, $context, $this->getSourceContext());
        echo ">";
        // line 5
        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "linkAttributes", [], "any", false, false, false, 5);
        // line 6
        echo "    <a href=\"#\" role=\"button\" ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 6, $this->source); })())], 6, $context, $this->getSourceContext());
        echo ">
    <% if (visible) { %>
        <span class=\"fa-eye-slash\" aria-hidden=\"true\"></span>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.context.hide"), "html", null, true);
        echo "
    <% } else { %>
        <span class=\"fa-eye\" aria-hidden=\"true\"></span>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.context.show"), "html", null, true);
        echo "
    <% } %>
    </a>
</li>
";
        $___internal_parse_79_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_79_);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Calendar/Menu/toggleCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 3,  70 => 10,  65 => 8,  59 => 6,  57 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

{% apply spaceless %}
<li{{ oro_menu.attributes(itemAttributes) }}>
    {%- set linkAttributes = item.linkAttributes %}
    <a href=\"#\" role=\"button\" {{ oro_menu.attributes(linkAttributes) }}>
    <% if (visible) { %>
        <span class=\"fa-eye-slash\" aria-hidden=\"true\"></span>{{ 'oro.calendar.context.hide'|trans }}
    <% } else { %>
        <span class=\"fa-eye\" aria-hidden=\"true\"></span>{{ 'oro.calendar.context.show'|trans }}
    <% } %>
    </a>
</li>
{% endapply %}
", "@OroCalendar/Calendar/Menu/toggleCalendar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Calendar/Menu/toggleCalendar.html.twig");
    }
}
