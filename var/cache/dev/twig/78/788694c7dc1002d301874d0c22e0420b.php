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

/* @OroChannel/macros.html.twig */
class __TwigTemplate_d4202d4204c67e5c24451905f7e68bd2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChannel/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/macros.html.twig"));

        // line 23
        echo "
";
        // line 47
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function macro_initializeChannelForm($__form__ = null, $__entitiesMetadata__ = null, $__customerIdentity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "entitiesMetadata" => $__entitiesMetadata__,
            "customerIdentity" => $__customerIdentity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initializeChannelForm"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initializeChannelForm"));

            // line 8
            echo "    ";
            $context["options"] = ["channelTypeEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "channelType", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)), "channelEntitiesEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "entities", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)), "customerIdentity" =>             // line 11
(isset($context["customerIdentity"]) || array_key_exists("customerIdentity", $context) ? $context["customerIdentity"] : (function () { throw new RuntimeError('Variable "customerIdentity" does not exist.', 11, $this->source); })()), "entitiesMetadata" =>             // line 12
(isset($context["entitiesMetadata"]) || array_key_exists("entitiesMetadata", $context) ? $context["entitiesMetadata"] : (function () { throw new RuntimeError('Variable "entitiesMetadata" does not exist.', 12, $this->source); })()), "fields" => ["name" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)), "channelType" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "channelType", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)), "tokenEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "_token", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16))]];
            // line 19
            echo "
    <div data-page-component-module=\"orochannel/js/app/components/channel\"
         data-page-component-options=\"";
            // line 21
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })())), "html", null, true);
            echo "\"></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_inializeEntitiesViewComponent($__channel__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "channel" => $__channel__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "inializeEntitiesViewComponent"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "inializeEntitiesViewComponent"));

            // line 30
            echo "    ";
            $context["containerIdentifier"] = "entities-list-view";
            // line 31
            echo "
    <div id=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["containerIdentifier"]) || array_key_exists("containerIdentifier", $context) ? $context["containerIdentifier"] : (function () { throw new RuntimeError('Variable "containerIdentifier" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"></div>
    <script>
        loadModules(['jquery', 'orochannel/js/entity-management/entity-component-view'],
        function (\$, EntityComponentView) {
            var entityComponentView = new EntityComponentView({
                data:     ";
            // line 37
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 37, $this->source); })()), "entities", [], "any", false, false, false, 37));
            echo ",
                mode:     EntityComponentView.prototype.MODES.VIEW_MODE,
                metadata: ";
            // line 39
            echo json_encode($this->extensions['Oro\Bundle\ChannelBundle\Twig\ChannelExtension']->getEntitiesMetadata());
            echo "
            });

            entityComponentView.render();
            \$(";
            // line 43
            echo json_encode(("#" . (isset($context["containerIdentifier"]) || array_key_exists("containerIdentifier", $context) ? $context["containerIdentifier"] : (function () { throw new RuntimeError('Variable "containerIdentifier" does not exist.', 43, $this->source); })())));
            echo ").append(entityComponentView.\$el);
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_renderChannelProperty($__entity__ = null, $__params__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChannelProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderChannelProperty"));

            // line 56
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/macros.html.twig", 56)->unwrap();
            // line 57
            echo "
    ";
            // line 58
            $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "label", [], "any", true, true, false, 58)) ? (twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 59, $this->source); })()), "label", [], "any", false, false, false, 59)) : ($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue("Oro\\Bundle\\ChannelBundle\\Entity\\Channel", "label")));
            // line 62
            echo "
    ";
            // line 63
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 63, $this->source); })())), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "dataChannel", [], "any", false, false, false, 63), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "dataChannel", [], "any", false, false, false, 63)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "dataChannel", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63)) : (null)), "oro_channel_view"], 63, $context, $this->getSourceContext())], 63, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroChannel/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 63,  208 => 62,  206 => 59,  205 => 58,  202 => 57,  199 => 56,  179 => 55,  160 => 43,  153 => 39,  148 => 37,  140 => 32,  137 => 31,  134 => 30,  115 => 29,  98 => 21,  94 => 19,  92 => 16,  91 => 15,  90 => 14,  89 => 12,  88 => 11,  87 => 10,  86 => 9,  84 => 8,  63 => 7,  49 => 47,  46 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Prepares options for channel form and initialize page component
    params:
        form                        - Symfony\\Component\\Form\\FormView
        entitiesMetadata            - array of entities metadata
#}
{% macro initializeChannelForm(form, entitiesMetadata, customerIdentity) %}
    {% set options = {
        channelTypeEl:     '#' ~ form.channelType.vars.id,
        channelEntitiesEl: '#' ~ form.entities.vars.id,
        customerIdentity:  customerIdentity,
        entitiesMetadata:  entitiesMetadata,
        fields: {
            name:        '#' ~ form.name.vars.id,
            channelType: '#' ~ form.channelType.vars.id,
            tokenEl:     '#' ~ form._token.vars.id
        }
    } %}

    <div data-page-component-module=\"orochannel/js/app/components/channel\"
         data-page-component-options=\"{{ options|json_encode }}\"></div>
{% endmacro %}

{#
    Renders and initialize entity list compoenent in view mode
    params:
        channel - Oro\\Bundle\\ChannelBundle\\Entity\\Channel
#}
{% macro inializeEntitiesViewComponent(channel) %}
    {% set containerIdentifier = 'entities-list-view' %}

    <div id=\"{{ containerIdentifier }}\"></div>
    <script>
        loadModules(['jquery', 'orochannel/js/entity-management/entity-component-view'],
        function (\$, EntityComponentView) {
            var entityComponentView = new EntityComponentView({
                data:     {{ channel.entities|json_encode|raw }},
                mode:     EntityComponentView.prototype.MODES.VIEW_MODE,
                metadata: {{ oro_channel_entities_metadata()|json_encode|raw }}
            });

            entityComponentView.render();
            \$({{ ('#' ~ containerIdentifier)|json_encode|raw }}).append(entityComponentView.\$el);
        });
    </script>
{% endmacro %}

{#
    Renders channel property for entities that aware of it. Check wheter view of channel is allowed then renders
    link to channel view page.
    params:
        entity - entity instanse of Oro\\Bundle\\ChannelBundle\\Model\\ChannelAwareInterface
        params - set of params required for render(e.g. label etc..)
#}
{% macro renderChannelProperty(entity, params = {}) %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set label = params.label is defined
        ? params.label
        :  oro_entity_config_value('Oro\\\\Bundle\\\\ChannelBundle\\\\Entity\\\\Channel', 'label')
    %}

    {{ UI.renderHtmlProperty(label|trans, UI.entityViewLink(entity.dataChannel, entity.dataChannel ? entity.dataChannel.name : null, 'oro_channel_view')) }}
{% endmacro %}
", "@OroChannel/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/macros.html.twig");
    }
}
