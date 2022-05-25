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

/* @OroChannel/Channel/widget/info.html.twig */
class __TwigTemplate_c277bdac2f79e20144fe866e893c00b3 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChannel/Channel/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Channel/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Channel/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/Channel/widget/info.html.twig", 1)->unwrap();
        // line 2
        $context["channelTypes"] = $this->extensions['Oro\Bundle\ChannelBundle\Twig\ChannelExtension']->getChannelTypeMetadata();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
            ";
        // line 8
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.channel_type.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["channelTypes"]) || array_key_exists("channelTypes", $context) ? $context["channelTypes"] : (function () { throw new RuntimeError('Variable "channelTypes" does not exist.', 8, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 8, $this->source); })()), "channelType", [], "any", false, false, false, 8), [], "array", false, false, false, 8))], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 9, $this->source); })()), "dataSource", [], "any", false, false, false, 9)) {
            // line 10
            echo "                ";
            $context["inegrationLink"] = twig_call_macro($macros["UI"], "macro_link", [["label" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 11, $this->source); })()), "dataSource", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 12, $this->source); })()), "dataSource", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_integration_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 13, $this->source); })()), "dataSource", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)])]], 10, $context, $this->getSourceContext());
            // line 15
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_renderHTMLProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.data_source.label"), (isset($context["inegrationLink"]) || array_key_exists("inegrationLink", $context) ? $context["inegrationLink"] : (function () { throw new RuntimeError('Variable "inegrationLink" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 17
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
        return "@OroChannel/Channel/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 15,  70 => 13,  69 => 12,  68 => 11,  66 => 10,  64 => 9,  60 => 8,  56 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set channelTypes = oro_channel_type_metadata() %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ UI.renderProperty('oro.channel.name.label'|trans, channel.name) }}
            {{ UI.renderProperty('oro.channel.channel_type.label'|trans, channelTypes[channel.channelType]|trans) }}
            {% if(channel.dataSource) %}
                {% set inegrationLink = UI.link({
                    'label' : channel.dataSource.name,
                    'title' : channel.dataSource.name,
                    'path'  : path('oro_integration_update', {'id' : channel.dataSource.id})
                }) %}
                {{ UI.renderHTMLProperty('oro.channel.data_source.label'|trans, inegrationLink) }}
            {% endif %}
        </div>
    </div>
</div>
", "@OroChannel/Channel/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/Channel/widget/info.html.twig");
    }
}
