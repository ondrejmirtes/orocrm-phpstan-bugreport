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

/* @OroEntitySerializedFields/Form/fields.html.twig */
class __TwigTemplate_888ca2d793437cde0268a0445700d242 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_serialized_fields_is_serialized_type_widget' => [$this, 'block_oro_serialized_fields_is_serialized_type_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntitySerializedFields/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntitySerializedFields/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntitySerializedFields/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_serialized_fields_is_serialized_type_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_oro_serialized_fields_is_serialized_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_serialized_fields_is_serialized_type_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_serialized_fields_is_serialized_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_serialized_fields_is_serialized_type_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'widget');
        echo "
        <script type=\"text/javascript\">
            loadModules(['jquery', 'oroui/js/mediator'], function (\$, mediator) {
                \$(function () {
                    var storageTypeSelector  = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_is_serialized]';
                    var fieldTypeSelector    = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_type]';
                    var _onChangeStorageType = function () {
                        var serializableTypes = ";
        // line 10
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "serializableTypes", [], "any", false, false, false, 10));
        echo ";
                        var excludeTypes = [];
                        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 12), "vars", [], "any", false, true, false, 12), "excludeTypes", [], "any", true, true, false, 12)) {
            // line 13
            echo "                            excludeTypes = ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "parent", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "excludeTypes", [], "any", false, false, false, 13));
            echo ";
                        ";
        }
        // line 15
        echo "                        \$(fieldTypeSelector + ' optgroup').each(function (index, value) {
                            \$.each(\$(value).find('option'), function (index, value) {
                                \$(value).removeAttr('disabled');
                                var selectedStorageType = \$(storageTypeSelector).val();
                                if (selectedStorageType == 1) {
                                    if (serializableTypes.indexOf(\$(value).val()) === -1) {
                                        \$(value).attr('disabled', 'disabled');
                                    }
                                } else {
                                    if (excludeTypes.indexOf(\$(value).val()) !== -1) {
                                        \$(value).attr('disabled', 'disabled');
                                    }
                                }
                            })
                        });
                        \$(fieldTypeSelector).select2('val', '');
                    };

                    \$(storageTypeSelector).on('change.changeStorageType', _onChangeStorageType);

                    mediator.once('page:beforeChange', function () {
                        \$(storageTypeSelector).off('change.changeStorageType', _onChangeStorageType);
                    });
                })
            });
        </script>
    ";
        $___internal_parse_89_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_89_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntitySerializedFields/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 2,  99 => 15,  93 => 13,  91 => 12,  86 => 10,  75 => 3,  72 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_serialized_fields_is_serialized_type_widget %}
    {% apply spaceless %}
        {{ form_widget(form) }}
        <script type=\"text/javascript\">
            loadModules(['jquery', 'oroui/js/mediator'], function (\$, mediator) {
                \$(function () {
                    var storageTypeSelector  = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_is_serialized]';
                    var fieldTypeSelector    = 'form[name=oro_entity_extend_field_type] select[data-ftid=oro_entity_extend_field_type_type]';
                    var _onChangeStorageType = function () {
                        var serializableTypes = {{ form.vars.serializableTypes|json_encode()|raw }};
                        var excludeTypes = [];
                        {% if form.parent.vars.excludeTypes is defined %}
                            excludeTypes = {{ form.parent.vars.excludeTypes|json_encode()|raw }};
                        {% endif %}
                        \$(fieldTypeSelector + ' optgroup').each(function (index, value) {
                            \$.each(\$(value).find('option'), function (index, value) {
                                \$(value).removeAttr('disabled');
                                var selectedStorageType = \$(storageTypeSelector).val();
                                if (selectedStorageType == 1) {
                                    if (serializableTypes.indexOf(\$(value).val()) === -1) {
                                        \$(value).attr('disabled', 'disabled');
                                    }
                                } else {
                                    if (excludeTypes.indexOf(\$(value).val()) !== -1) {
                                        \$(value).attr('disabled', 'disabled');
                                    }
                                }
                            })
                        });
                        \$(fieldTypeSelector).select2('val', '');
                    };

                    \$(storageTypeSelector).on('change.changeStorageType', _onChangeStorageType);

                    mediator.once('page:beforeChange', function () {
                        \$(storageTypeSelector).off('change.changeStorageType', _onChangeStorageType);
                    });
                })
            });
        </script>
    {% endapply %}
{% endblock %}
", "@OroEntitySerializedFields/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform-serialised-fields/Resources/views/Form/fields.html.twig");
    }
}
