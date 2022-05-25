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

/* @OroChannel/ChannelIntegration/widget/update.html.twig */
class __TwigTemplate_95053cf3637ce26d3a870ce8db5b091b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@OroIntegration/Integration/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChannel/ChannelIntegration/widget/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/ChannelIntegration/widget/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/ChannelIntegration/widget/update.html.twig"));

        // line 1
        $context["isWidgetContext"] = true;
        // line 2
        $context["formAction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "uri", [], "any", false, false, false, 2);
        // line 4
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/ChannelIntegration/widget/update.html.twig", 4)->unwrap();
        // line 3
        $this->parent = $this->loadTemplate("@OroIntegration/Integration/update.html.twig", "@OroChannel/ChannelIntegration/widget/update.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 7
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/ChannelIntegration/widget/update.html.twig", 7)->unwrap();
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Done"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 15
        $context["wid"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "get", [0 => "_wid"], "method", false, false, false, 15);
        // line 16
        echo "
    <div ";
        // line 17
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orochannel/js/app/views/configure-integration-view", "options" => ["_sourceElement" => (("[data-wid=\"" .         // line 20
(isset($context["wid"]) || array_key_exists("wid", $context) ? $context["wid"] : (function () { throw new RuntimeError('Variable "wid" does not exist.', 20, $this->source); })())) . "\"]"), "wid" =>         // line 21
(isset($context["wid"]) || array_key_exists("wid", $context) ? $context["wid"] : (function () { throw new RuntimeError('Variable "wid" does not exist.', 21, $this->source); })()), "dataFieldSelector" => "[data-ftid=oro_channel_form_dataSource_data]", "apiKeyFieldSelector" => "[data-ftid=oro_integration_channel_form_transport_apiKey]"]]], 17, $context, $this->getSourceContext());
        // line 25
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroChannel/ChannelIntegration/widget/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  112 => 21,  111 => 20,  110 => 17,  107 => 16,  105 => 15,  99 => 12,  95 => 11,  90 => 9,  87 => 8,  84 => 7,  71 => 6,  57 => 3,  55 => 4,  53 => 2,  51 => 1,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isWidgetContext = true %}
{% set formAction = app.request.uri %}
{% extends '@OroIntegration/Integration/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
        <button type=\"submit\" class=\"btn btn-success\">{{ 'Done'|trans }}</button>
    </div>

    {% set wid = app.request.get('_wid') %}

    <div {{ UI.renderPageComponentAttributes({
        view: 'orochannel/js/app/views/configure-integration-view',
        options: {
            _sourceElement: '[data-wid=\"' ~ wid ~ '\"]',
            wid: wid,
            dataFieldSelector: '[data-ftid=oro_channel_form_dataSource_data]',
            apiKeyFieldSelector: '[data-ftid=oro_integration_channel_form_transport_apiKey]'
        },
    }) }}></div>
{% endblock content_data %}
", "@OroChannel/ChannelIntegration/widget/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/ChannelIntegration/widget/update.html.twig");
    }
}
