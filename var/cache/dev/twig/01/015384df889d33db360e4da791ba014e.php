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

/* @OroEntityConfig/macros.html.twig */
class __TwigTemplate_c262cfa1506983491daae0724b126d55 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/macros.html.twig"));

        // line 23
        echo "
";
        // line 41
        echo "
";
        // line 64
        echo "
";
        // line 135
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderDynamicFields($__entity__ = null, $__entity_class__ = null, $__ignoredFields__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "ignoredFields" => $__ignoredFields__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDynamicFields"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDynamicFields"));

            // line 2
            echo "    ";
            $macros["entityConfigMacros"] = $this;
            // line 3
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/macros.html.twig", 3)->unwrap();
            // line 4
            echo "    ";
            $context["dynamicFields"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\DynamicFieldsExtensionAttributeDecorator']->getFields((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 4, $this->source); })()));
            // line 5
            echo "    ";
            if ((array_key_exists("dynamicFields", $context) && twig_length_filter($this->env, (isset($context["dynamicFields"]) || array_key_exists("dynamicFields", $context) ? $context["dynamicFields"] : (function () { throw new RuntimeError('Variable "dynamicFields" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dynamicFields"]) || array_key_exists("dynamicFields", $context) ? $context["dynamicFields"] : (function () { throw new RuntimeError('Variable "dynamicFields" does not exist.', 6, $this->source); })()));
                foreach ($context['_seq'] as $context["fieldName"] => $context["item"]) {
                    // line 7
                    echo "            ";
                    if (!twig_in_filter($context["fieldName"], (isset($context["ignoredFields"]) || array_key_exists("ignoredFields", $context) ? $context["ignoredFields"] : (function () { throw new RuntimeError('Variable "ignoredFields" does not exist.', 7, $this->source); })()))) {
                        // line 8
                        echo "                ";
                        if ($this->extensions['Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension']->isResourceEnabled($context["fieldName"], "field_configs")) {
                            // line 9
                            echo "                    ";
                            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                             // line 10
$context["item"], "label", [], "any", false, false, false, 10)), twig_call_macro($macros["entityConfigMacros"], "macro_formatDynamicFieldValue", [                            // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()),                             // line 13
(isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 13, $this->source); })()),                             // line 14
$context["fieldName"],                             // line 15
$context["item"]], 11, $context, $this->getSourceContext())], 9, $context, $this->getSourceContext());
                            // line 17
                            echo "
                ";
                        }
                        // line 19
                        echo "            ";
                    }
                    // line 20
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_renderDynamicField($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDynamicField"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDynamicField"));

            // line 25
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/macros.html.twig", 25)->unwrap();
            // line 26
            echo "    ";
            $macros["entityConfigMacros"] = $this;
            // line 27
            echo "
    ";
            // line 28
            $context["dynamicField"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\DynamicFieldsExtensionAttributeDecorator']->getField((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 28, $this->source); })()));
            // line 29
            echo "    ";
            if ((isset($context["dynamicField"]) || array_key_exists("dynamicField", $context) ? $context["dynamicField"] : (function () { throw new RuntimeError('Variable "dynamicField" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "        ";
                echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 31
(isset($context["dynamicField"]) || array_key_exists("dynamicField", $context) ? $context["dynamicField"] : (function () { throw new RuntimeError('Variable "dynamicField" does not exist.', 31, $this->source); })()), "label", [], "any", false, false, false, 31)), twig_call_macro($macros["entityConfigMacros"], "macro_formatDynamicFieldValue", [                // line 33
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 34
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "entity", [], "any", false, false, false, 34), "className", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source,                 // line 35
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 35, $this->source); })()), "fieldName", [], "any", false, false, false, 35),                 // line 36
(isset($context["dynamicField"]) || array_key_exists("dynamicField", $context) ? $context["dynamicField"] : (function () { throw new RuntimeError('Variable "dynamicField" does not exist.', 36, $this->source); })())], 32, $context, $this->getSourceContext())], 30, $context, $this->getSourceContext());
                // line 38
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_formatDynamicFieldValue($__entity__ = null, $__entity_class__ = null, $__field_name__ = null, $__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "field_name" => $__field_name__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formatDynamicFieldValue"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formatDynamicFieldValue"));

            // line 43
            echo "    ";
            $macros["entityConfigMacros"] = $this;
            // line 44
            echo "
    ";
            // line 45
            $context["hasLink"] = false;
            // line 46
            echo "    ";
            $context["fieldValue"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "value", [], "any", false, false, false, 46);
            // line 47
            echo "    ";
            if (twig_test_iterable((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "values", [], "any", true, true, false, 48)) {
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 49, $this->source); })()), "values", [], "any", false, false, false, 49));
                    $context['_iterated'] = false;
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 50
                        echo twig_call_macro($macros["entityConfigMacros"], "macro_renderField", [$context["value"]], 50, $context, $this->getSourceContext());
                        // line 51
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                            // line 52
                            echo ",&nbsp;";
                        }
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 55
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 58
                    echo "            ";
                    echo twig_call_macro($macros["entityConfigMacros"], "macro_renderField", [(isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 58, $this->source); })())], 58, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                echo twig_call_macro($macros["entityConfigMacros"], "macro_renderFormatted", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 61, $this->source); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 61, $this->source); })()), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })())], 61, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 65
    public function macro_renderFormatted($__entity__ = null, $__entity_class__ = null, $__field_name__ = null, $__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "field_name" => $__field_name__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFormatted"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFormatted"));

            // line 66
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/macros.html.twig", 66)->unwrap();
            // line 67
            echo "    ";
            $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "value", [], "any", false, false, false, 67);
            // line 68
            echo "    ";
            $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68);
            // line 69
            echo "
    ";
            // line 70
            if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()) == "text") && (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 70, $this->source); })()))) {
                // line 71
                echo "        ";
                ob_start();
                // line 72
                echo "            ";
                echo twig_nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })()), "html", null, true));
                echo "
        ";
                $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 74, $this->source); })()) == "html")) {
                // line 75
                echo "        ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 75, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")), "html", null, true);
                echo "
    ";
            } elseif (((            // line 76
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 76, $this->source); })()) == "boolean") &&  !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })())))) {
                // line 77
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 77, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")));
                // line 78
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()) == "money")) {
                // line 79
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })()))) : (null));
                // line 80
                echo "    ";
            } elseif ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 80, $this->source); })()) == "decimal") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 80, $this->source); })()) == "float"))) {
                // line 81
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })()))) : (null));
                // line 82
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 82, $this->source); })()) == "percent")) {
                // line 83
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 83, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 83, $this->source); })()))) : (null));
                // line 84
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 84, $this->source); })()) == "date")) {
                // line 85
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 85, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 85, $this->source); })()))) : (null));
                // line 86
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 86, $this->source); })()) == "datetime")) {
                // line 87
                echo "        ";
                $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()))) : (null));
                // line 88
                echo "    ";
            }
            // line 89
            echo "
    ";
            // line 90
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 90, $this->source); })()) == "wysiwyg")) {
                // line 91
                echo "        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "value", [], "any", false, false, false, 91))) {
                    // line 92
                    echo "            <div class=\"alert alert-info alert--compact\" role=\"alert\">
                <span class=\"fa-info alert-icon\" aria-hidden=\"true\"></span>
                ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.entity.information_message"), "html", null, true);
                    echo "
            </div>
        ";
                }
                // line 97
                echo "        ";
                $macros["entityConfigMacros"] = $this;
                // line 98
                echo "        ";
                $context["toRenderValue"] = (((array_key_exists("value", $context) && twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 98, $this->source); })())))) ? (twig_call_macro($macros["entityConfigMacros"], "macro_renderWysiwygContentPreview", [                // line 99
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 99, $this->source); })())], 99, $context, $this->getSourceContext())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")));
                // line 102
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_renderCollapsibleHtml", [                // line 103
(isset($context["toRenderValue"]) || array_key_exists("toRenderValue", $context) ? $context["toRenderValue"] : (function () { throw new RuntimeError('Variable "toRenderValue" does not exist.', 103, $this->source); })()),                 // line 104
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 104, $this->source); })()), twig_get_attribute($this->env, $this->source,                 // line 105
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "label", [], "any", false, false, false, 105), "More", "Less"], 102, $context, $this->getSourceContext());
                // line 108
                echo "
    ";
            } elseif ((            // line 109
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 109, $this->source); })()) != "html")) {
                // line 110
                echo "        ";
                echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 110, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 114
    public function macro_renderWysiwygContentPreview($__content__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "content" => $__content__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWysiwygContentPreview"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWysiwygContentPreview"));

            // line 115
            ob_start();
            // line 116
            echo "        ";
            if ((array_key_exists("content", $context) && twig_length_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 116, $this->source); })())))) {
                // line 117
                echo "            <div data-page-component-view=\"oroentityconfig/js/views/wysiwyg-content-preview\">";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(call_user_func_array($this->env->getFilter('render_content')->getCallable(), [(isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 117, $this->source); })())]));
                echo "</div>
        ";
            }
            // line 119
            echo "    ";
            $___internal_parse_54_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 115
            echo twig_spaceless($___internal_parse_54_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 122
    public function macro_renderField($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderField"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderField"));

            // line 123
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/macros.html.twig", 123)->unwrap();
            // line 124
            echo "
    ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "template", [], "any", true, true, false, 125)) {
                // line 126
                echo "        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 126, $this->source); })()), "template", [], "any", false, false, false, 126), ["data" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 126, $this->source); })())]);
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 127
($context["value"] ?? null), "link", [], "any", true, true, false, 127) && (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 127, $this->source); })()), "link", [], "any", false, false, false, 127) != false))) {
                // line 128
                echo "        ";
                echo twig_call_macro($macros["ui"], "macro_renderUrl", [twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 128, $this->source); })()), "link", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 128, $this->source); })()), "title", [], "any", false, false, false, 128)], 128, $context, $this->getSourceContext());
                echo "
    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 129
($context["value"] ?? null), "raw", [], "any", true, true, false, 129)) {
                // line 130
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 130, $this->source); })()), "title", [], "any", false, false, false, 130);
                echo "
    ";
            } else {
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 132, $this->source); })()), "title", [], "any", false, false, false, 132));
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 136
    public function macro_displayLayoutActions($__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayLayoutActions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayLayoutActions"));

            // line 137
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/macros.html.twig", 137)->unwrap();
            // line 138
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 139
                echo "        ";
                $context["componentData"] = [];
                // line 140
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["button"], "page_component_module", [], "any", true, true, false, 140)) {
                    // line 141
                    echo "            ";
                    $context["componentData"] = ["page-component-module" => twig_get_attribute($this->env, $this->source, $context["button"], "page_component_module", [], "any", false, false, false, 141)];
                    // line 142
                    echo "
            ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, $context["button"], "page_component_options", [], "any", true, true, false, 143)) {
                        // line 144
                        echo "                ";
                        $context["componentData"] = twig_array_merge((isset($context["componentData"]) || array_key_exists("componentData", $context) ? $context["componentData"] : (function () { throw new RuntimeError('Variable "componentData" does not exist.', 144, $this->source); })()), ["page-component-options" => json_encode(twig_get_attribute($this->env, $this->source,                         // line 145
$context["button"], "page_component_options", [], "any", false, false, false, 145))]);
                        // line 148
                        echo "            ";
                    }
                    // line 149
                    echo "
        ";
                }
                // line 151
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_button", [["path" => ((twig_get_attribute($this->env, $this->source,                 // line 152
$context["button"], "void", [], "any", true, true, false, 152)) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["button"], "route", [], "any", false, false, false, 152), ((twig_get_attribute($this->env, $this->source, $context["button"], "args", [], "any", true, true, false, 152)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "args", [], "any", false, false, false, 152), [])) : ([]))))), "data" => twig_array_merge(["url" => ((twig_get_attribute($this->env, $this->source,                 // line 154
$context["button"], "void", [], "any", true, true, false, 154)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["button"], "route", [], "any", false, false, false, 154), ((twig_get_attribute($this->env, $this->source, $context["button"], "args", [], "any", true, true, false, 154)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "args", [], "any", false, false, false, 154), [])) : ([])))) : (null))],                 // line 155
(isset($context["componentData"]) || array_key_exists("componentData", $context) ? $context["componentData"] : (function () { throw new RuntimeError('Variable "componentData" does not exist.', 155, $this->source); })())), "iCss" => ((twig_get_attribute($this->env, $this->source,                 // line 156
$context["button"], "iCss", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "iCss", [], "any", false, false, false, 156), "")) : ("")), "aCss" => ((twig_get_attribute($this->env, $this->source,                 // line 157
$context["button"], "aCss", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "aCss", [], "any", false, false, false, 157), "")) : ("")), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,                 // line 158
$context["button"], "title", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, $context["button"], "name", [], "any", false, false, false, 158))) : (twig_get_attribute($this->env, $this->source, $context["button"], "name", [], "any", false, false, false, 158)))), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 159
$context["button"], "name", [], "any", false, false, false, 159))]], 151, $context, $this->getSourceContext());
                // line 160
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 160,  636 => 159,  635 => 158,  634 => 157,  633 => 156,  632 => 155,  631 => 154,  630 => 152,  628 => 151,  624 => 149,  621 => 148,  619 => 145,  617 => 144,  615 => 143,  612 => 142,  609 => 141,  606 => 140,  603 => 139,  598 => 138,  595 => 137,  576 => 136,  560 => 132,  554 => 130,  552 => 129,  547 => 128,  545 => 127,  540 => 126,  538 => 125,  535 => 124,  532 => 123,  513 => 122,  498 => 115,  495 => 119,  489 => 117,  486 => 116,  484 => 115,  465 => 114,  446 => 110,  444 => 109,  441 => 108,  439 => 105,  438 => 104,  437 => 103,  435 => 102,  433 => 99,  431 => 98,  428 => 97,  422 => 94,  418 => 92,  415 => 91,  413 => 90,  410 => 89,  407 => 88,  404 => 87,  401 => 86,  398 => 85,  395 => 84,  392 => 83,  389 => 82,  386 => 81,  383 => 80,  380 => 79,  377 => 78,  374 => 77,  372 => 76,  367 => 75,  364 => 74,  358 => 72,  355 => 71,  353 => 70,  350 => 69,  347 => 68,  344 => 67,  341 => 66,  319 => 65,  300 => 61,  297 => 60,  291 => 58,  284 => 55,  270 => 52,  268 => 51,  266 => 50,  248 => 49,  245 => 48,  242 => 47,  239 => 46,  237 => 45,  234 => 44,  231 => 43,  209 => 42,  192 => 38,  190 => 36,  189 => 35,  188 => 34,  187 => 33,  186 => 31,  184 => 30,  181 => 29,  179 => 28,  176 => 27,  173 => 26,  170 => 25,  150 => 24,  134 => 21,  128 => 20,  125 => 19,  121 => 17,  119 => 15,  118 => 14,  117 => 13,  116 => 12,  115 => 10,  113 => 9,  110 => 8,  107 => 7,  102 => 6,  99 => 5,  96 => 4,  93 => 3,  90 => 2,  69 => 1,  55 => 135,  52 => 64,  49 => 41,  46 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderDynamicFields(entity, entity_class = null, ignoredFields = {}) %}
    {% import _self as entityConfigMacros %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% set dynamicFields = oro_get_dynamic_fields(entity, entity_class) %}
    {% if dynamicFields is defined and dynamicFields|length %}
        {% for fieldName, item in dynamicFields %}
            {% if fieldName not in ignoredFields %}
                {% if feature_resource_enabled(fieldName, 'field_configs') %}
                    {{ ui.renderHtmlProperty(
                        item.label|trans,
                        entityConfigMacros.formatDynamicFieldValue(
                            entity,
                            entity_class,
                            fieldName,
                            item
                        )
                    ) }}
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endif %}
{% endmacro %}

{% macro renderDynamicField(entity, field) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% import _self as entityConfigMacros %}

    {% set dynamicField = oro_get_dynamic_field(entity, field) %}
    {% if dynamicField %}
        {{ ui.renderHtmlProperty(
            dynamicField.label|trans,
            entityConfigMacros.formatDynamicFieldValue(
                entity,
                field.entity.className,
                field.fieldName,
                dynamicField
            )
        ) }}
    {% endif %}
{% endmacro %}

{% macro formatDynamicFieldValue(entity, entity_class, field_name, item) %}
    {% import _self as entityConfigMacros %}

    {% set hasLink = false %}
    {% set fieldValue = item.value %}
    {% if fieldValue is iterable %}
        {% if fieldValue.values is defined %}
            {%- for value in fieldValue.values -%}
                {{- entityConfigMacros.renderField(value) -}}
                {%- if not loop.last -%}
                    ,&nbsp;
                {%- endif -%}
            {%- else -%}
                {{- 'N/A'|trans -}}
            {%- endfor -%}
        {% else %}
            {{ entityConfigMacros.renderField(fieldValue) }}
        {% endif %}
    {% else %}
        {{ entityConfigMacros.renderFormatted(entity, entity_class, field_name, item) }}
    {% endif %}
{% endmacro %}

{% macro renderFormatted(entity, entity_class, field_name, item) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set value = item.value %}
    {% set type  = item.type %}

    {% if type == 'text' and value %}
        {% set value %}
            {{ value|nl2br }}
        {% endset %}
    {% elseif type == 'html' %}
        {{ value|oro_html_sanitize|default('N/A'|trans) }}
    {% elseif type == 'boolean' and value is not null %}
        {% set value = value ? 'Yes'|trans : 'No'|trans %}
    {% elseif type == 'money' %}
        {% set value = value ? value | oro_format_currency : null %}
    {% elseif type == 'decimal' or type == 'float' %}
        {% set value = value ? value | oro_format_decimal : null %}
    {% elseif type == 'percent' %}
        {% set value = value ? value | oro_format_percent : null %}
    {% elseif type == 'date' %}
        {% set value = value ? value | oro_format_date : null %}
    {% elseif type == 'datetime' %}
        {% set value = value ? value | oro_format_datetime : null %}
    {% endif %}

    {% if type == 'wysiwyg' %}
        {% if item.value is not null %}
            <div class=\"alert alert-info alert--compact\" role=\"alert\">
                <span class=\"fa-info alert-icon\" aria-hidden=\"true\"></span>
                {{ 'oro.entity_config.entity.information_message'|trans }}
            </div>
        {% endif %}
        {% import _self as entityConfigMacros %}
        {% set toRenderValue = value is defined and value|length
            ? entityConfigMacros.renderWysiwygContentPreview(value)
            : 'N/A'|trans
        %}
        {{ UI.renderCollapsibleHtml(
            toRenderValue|raw,
            entity,
            item.label,
            'More',
            'Less'
        ) }}
    {% elseif type != 'html' %}
        {{ value|default('N/A'|trans) }}
    {% endif %}
{% endmacro %}

{%- macro renderWysiwygContentPreview(content) -%}
    {% apply spaceless %}
        {% if content is defined and content|length %}
            <div data-page-component-view=\"oroentityconfig/js/views/wysiwyg-content-preview\">{{ content|render_content|oro_html_sanitize }}</div>
        {% endif %}
    {% endapply %}
{%- endmacro -%}

{% macro renderField(value) %}
    {% import '@OroUI/macros.html.twig' as ui %}

    {% if value.template is defined %}
        {{ include(value.template, { data: value}) }}
    {% elseif value.link is defined and value.link != false  %}
        {{ ui.renderUrl(value.link, value.title) }}
    {% elseif value.raw is defined %}
        {{ value.title|raw }}
    {% else %}
        {{- value.title|escape -}}
    {% endif %}
{% endmacro %}

{% macro displayLayoutActions(actions) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% for button in actions %}
        {% set componentData = {} %}
        {% if  button.page_component_module is defined %}
            {% set componentData = {'page-component-module' : button.page_component_module} %}

            {% if  button.page_component_options is defined %}
                {% set componentData = componentData|merge({
                    'page-component-options' : button.page_component_options|json_encode
                })
                %}
            {% endif %}

        {% endif %}
        {{ UI.button({
            'path'   : button.void is defined ? '#' : path(button.route, button.args|default({})),
            'data'   : {
                'url' : button.void is defined ? path(button.route, button.args|default({})) : null,
            }|merge(componentData),
            'iCss'   : button.iCss|default(''),
            'aCss'   : button.aCss|default(''),
            'title'  : button.title|default(button.name)|trans,
            'label'  : button.name|trans
        }) }}
    {% endfor %}
{% endmacro %}
", "@OroEntityConfig/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/macros.html.twig");
    }
}
