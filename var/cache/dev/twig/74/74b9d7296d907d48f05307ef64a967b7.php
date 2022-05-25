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

/* @OroEntityConfig/Config/widget/info.html.twig */
class __TwigTemplate_6bcd8e8f7086e3b1341e0c9e4b478785 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Config/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/widget/info.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        $context["entityIcon"] = twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 6, $this->source); })()), "get", [0 => "icon"], "method", false, false, false, 6);
        // line 7
        echo "            ";
        $context["iconContent"] = null;
        // line 8
        echo "            ";
        if ((isset($context["entityIcon"]) || array_key_exists("entityIcon", $context) ? $context["entityIcon"] : (function () { throw new RuntimeError('Variable "entityIcon" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                ";
            ob_start();
            // line 10
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, (isset($context["entityIcon"]) || array_key_exists("entityIcon", $context) ? $context["entityIcon"] : (function () { throw new RuntimeError('Variable "entityIcon" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " hide-text\"></i> (";
            echo twig_escape_filter($this->env, (isset($context["entityIcon"]) || array_key_exists("entityIcon", $context) ? $context["entityIcon"] : (function () { throw new RuntimeError('Variable "entityIcon" does not exist.', 10, $this->source); })()), "html", null, true);
            echo ")
                ";
            $context["iconContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "            ";
        }
        // line 13
        echo "
            ";
        // line 14
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), (isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "
            ";
        // line 15
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Icon"), (isset($context["iconContent"]) || array_key_exists("iconContent", $context) ? $context["iconContent"] : (function () { throw new RuntimeError('Variable "iconContent" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
        echo "
            ";
        // line 16
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), (((twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 18, $this->source); })()), "get", [0 => "label"], "method", false, false, false, 18) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 18, $this->source); })()), "get", [0 => "label"], "method", false, false, false, 18)))) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 20, $this->source); })()), "get", [0 => "label"], "method", false, false, false, 20))))], 16, $context, $this->getSourceContext());
        // line 21
        echo "
            ";
        // line 22
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Plural Label"), (((twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 24, $this->source); })()), "get", [0 => "plural_label"], "method", false, false, false, 24) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 24, $this->source); })()), "get", [0 => "plural_label"], "method", false, false, false, 24)))) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 26, $this->source); })()), "get", [0 => "plural_label"], "method", false, false, false, 26))))], 22, $context, $this->getSourceContext());
        // line 27
        echo "
            ";
        // line 28
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), twig_get_attribute($this->env, $this->source, (isset($context["entity_extend"]) || array_key_exists("entity_extend", $context) ? $context["entity_extend"] : (function () { throw new RuntimeError('Variable "entity_extend" does not exist.', 28, $this->source); })()), "get", [0 => "owner"], "method", false, false, false, 28)], 28, $context, $this->getSourceContext());
        echo "
            ";
        // line 29
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), (((twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 31, $this->source); })()), "get", [0 => "description"], "method", false, false, false, 31) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 31, $this->source); })()), "get", [0 => "description"], "method", false, false, false, 31)))) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 33, $this->source); })()), "get", [0 => "description"], "method", false, false, false, 33))))], 29, $context, $this->getSourceContext());
        // line 34
        echo "
            ";
        // line 35
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ownership Type"), (isset($context["entity_owner_type"]) || array_key_exists("entity_owner_type", $context) ? $context["entity_owner_type"] : (function () { throw new RuntimeError('Variable "entity_owner_type" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
        echo "
            ";
        // line 36
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module"), (isset($context["module_name"]) || array_key_exists("module_name", $context) ? $context["module_name"] : (function () { throw new RuntimeError('Variable "module_name" does not exist.', 36, $this->source); })())], 36, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Config/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  112 => 35,  109 => 34,  107 => 33,  106 => 31,  105 => 29,  101 => 28,  98 => 27,  96 => 26,  95 => 24,  94 => 22,  91 => 21,  89 => 20,  88 => 18,  87 => 16,  83 => 15,  79 => 14,  76 => 13,  73 => 12,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {% set entityIcon = entity_config.get('icon') %}
            {% set iconContent = null %}
            {% if entityIcon %}
                {% set iconContent %}
                    <i class=\"{{ entityIcon }} hide-text\"></i> ({{ entityIcon }})
                {% endset %}
            {% endif %}

            {{ ui.renderProperty('Name'|trans, entity_name) }}
            {{ ui.renderHtmlProperty('Icon'|trans, iconContent) }}
            {{ ui.renderProperty(
                'Label'|trans,
                (entity_config.get('label') == entity_config.get('label')|trans)
                    ? ''
                    : entity_config.get('label')|trans
            ) }}
            {{ ui.renderProperty(
                'Plural Label'|trans,
                (entity_config.get('plural_label') == entity_config.get('plural_label')|trans)
                    ? ''
                    : entity_config.get('plural_label')|trans
            ) }}
            {{ ui.renderProperty('Type'|trans, entity_extend.get('owner')) }}
            {{ ui.renderProperty(
                'Description'|trans,
                (entity_config.get('description') == entity_config.get('description')|trans)
                    ? ''
                    : entity_config.get('description')|trans
            ) }}
            {{ ui.renderProperty('Ownership Type'|trans, entity_owner_type) }}
            {{ ui.renderProperty('Module'|trans, module_name) }}
        </div>
    </div>
</div>
", "@OroEntityConfig/Config/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Config/widget/info.html.twig");
    }
}
