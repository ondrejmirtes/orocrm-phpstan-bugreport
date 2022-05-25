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

/* @OroCalendar/Calendar/Menu/removeCalendar.html.twig */
class __TwigTemplate_de9ba6cc025753f5406313189f06baaa extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/Calendar/Menu/removeCalendar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/removeCalendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/Calendar/Menu/removeCalendar.html.twig"));

        // line 1
        $macros["oro_menu"] = $this->macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroCalendar/Calendar/Menu/removeCalendar.html.twig", 1)->unwrap();
        // line 2
        echo "
<% if (removable) { %>";
        // line 4
        ob_start();
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "getExtra", [0 => "icon"], "method", false, false, false, 5)) {
            // line 6
            echo "<span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "getExtra", [0 => "icon"], "method", false, false, false, 6), "html", null, true);
            echo "\" aria-hidden=\"true\"></span>";
        }
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 8))) {
            // line 9
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9)));
        } else {
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getExtra", [0 => "translateParams", 1 => []], "method", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getExtra", [0 => "translateDomain", 1 => "messages"], "method", false, false, false, 11)), "html", null, true);
        }
        $context["Label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo "<li ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo ">";
        // line 15
        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "linkAttributes", [], "any", false, false, false, 15);
        // line 16
        echo "<a href=\"#\" role=\"button\" ";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["Label"]) || array_key_exists("Label", $context) ? $context["Label"] : (function () { throw new RuntimeError('Variable "Label" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</a>
    </li>
<% } %>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCalendar/Calendar/Menu/removeCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  73 => 15,  69 => 14,  65 => 11,  62 => 9,  60 => 8,  55 => 6,  53 => 5,  51 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

<% if (removable) { %>
    {%- set Label -%}
        {%- if item.getExtra('icon') -%}
            <span class=\"{{- item.getExtra('icon') -}}\" aria-hidden=\"true\"></span>
        {%- endif -%}
        {%- if options.allow_safe_labels and item.getExtra('safe_label', false) -%}
            {{- item.label|trans|oro_html_sanitize -}}
        {%- else -%}
            {{- item.label|trans(item.getExtra('translateParams', {}), item.getExtra('translateDomain', 'messages')) -}}
        {%- endif -%}
    {%- endset -%}
    <li {{ oro_menu.attributes(itemAttributes) }}>
        {%- set linkAttributes = item.linkAttributes -%}
        <a href=\"#\" role=\"button\" {{ oro_menu.attributes(linkAttributes) }}>{{- Label -}}</a>
    </li>
<% } %>
", "@OroCalendar/Calendar/Menu/removeCalendar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/Calendar/Menu/removeCalendar.html.twig");
    }
}
