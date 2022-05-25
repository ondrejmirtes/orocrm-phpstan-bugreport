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

/* @OroDataAudit/macros.html.twig */
class __TwigTemplate_bd8e1074032125c453287d9623cb65ee extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataAudit/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderFieldValue($__fieldValue__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fieldValue" => $__fieldValue__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldValue"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldValue"));

            // line 2
            $macros["AuditMacro"] = $this;
            // line 4
            $context["type"] = null;
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "type", [], "any", true, true, false, 5)) {
                // line 6
                $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6);
            }
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "value", [], "any", true, true, false, 8)) {
                // line 9
                $context["fieldValue"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9);
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "timestamp", [], "any", true, true, false, 12) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()) == "date"))) {
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 13, $this->source); })())), "html", null, true);
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 14
($context["fieldValue"] ?? null), "timestamp", [], "any", true, true, false, 14) && twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), [0 => "datetime", 1 => "datetimetz"]))) {
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 15, $this->source); })())), "html", null, true);
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 16
($context["fieldValue"] ?? null), "timestamp", [], "any", true, true, false, 16) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 16, $this->source); })()) == "time"))) {
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatTime((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 17, $this->source); })())), "html", null, true);
            } elseif (((            // line 18
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()) == "array") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()) == "jsonarray"))) {
                // line 19
                (( !(null === (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 19, $this->source); })()))) ? (print (twig_escape_filter($this->env, json_encode((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 19, $this->source); })()), twig_constant("JSON_FORCE_OBJECT")), "html", null, true))) : (print ("")));
            } elseif ((((            // line 20
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "boolean") || ((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 20, $this->source); })()) === true)) || ((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 20, $this->source); })()) === false))) {
                // line 21
                echo twig_escape_filter($this->env, (((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 21, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"))), "html", null, true);
            } else {
                // line 23
                if (((twig_test_iterable((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 23, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_class", [], "any", true, true, false, 23)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 23, $this->source); })()), "entity_class", [], "any", false, false, false, 23)))) {
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dataaudit.record", ["%record%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 24, $this->source); })()), "entity_class", [], "any", false, false, false, 24), "label")), "%entity_name%" => ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_name", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_name", [], "any", false, false, false, 24), ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_id", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_id", [], "any", false, false, false, 24), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))))) : (((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_id", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "entity_id", [], "any", false, false, false, 24), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty")))))]), "html", null, true);
                    // line 25
                    if ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "change_set", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 25, $this->source); })()), "change_set", [], "any", false, false, false, 25)))) {
                        // line 26
                        echo "<dd>
                    <ul>";
                        // line 28
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 28, $this->source); })()), "change_set", [], "any", false, false, false, 28));
                        foreach ($context['_seq'] as $context["diffFieldName"] => $context["diffFieldValues"]) {
                            // line 29
                            echo "<li>";
                            // line 30
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(_twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 30, $this->source); })()), "entity_class", [], "any", false, false, false, 30), $context["diffFieldName"], "label"), $context["diffFieldName"])), "html", null, true);
                            echo ":
                                <s>";
                            // line 31
                            echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_first($this->env, $context["diffFieldValues"])], 31, $context, $this->getSourceContext());
                            echo "</s>&nbsp;";
                            echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_last($this->env, $context["diffFieldValues"])], 31, $context, $this->getSourceContext());
                            // line 32
                            echo "</li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['diffFieldName'], $context['diffFieldValues'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "</ul>
                </dd>";
                    }
                } elseif (twig_test_iterable(                // line 37
(isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 37, $this->source); })()))) {
                    // line 38
                    $context["result"] = [];
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 39, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        $context["result"] = twig_array_merge((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 40, $this->source); })()), [0 => twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [$context["item"]], 40, $context, $this->getSourceContext())]);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 42, $this->source); })()), ", "), "html", null, true);
                } else {
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "translationDomain", [], "any", true, true, false, 44)) {
                        // line 45
                        echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 45, $this->source); })()), [], twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "translationDomain", [], "any", false, false, false, 45)), ""), "html", null, true);
                    } else {
                        // line 47
                        echo twig_escape_filter($this->env, ((array_key_exists("fieldValue", $context)) ? (_twig_default_filter((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 47, $this->source); })()), "")) : ("")), "html", null, true);
                    }
                }
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 53
    public function macro_renderFieldName($__objectClass__ = null, $__fieldKey__ = null, $__fieldValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "objectClass" => $__objectClass__,
            "fieldKey" => $__fieldKey__,
            "fieldValue" => $__fieldValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldName"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldName"));

            // line 54
            $context["fieldLabel"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(twig_first($this->env, twig_split_filter($this->env, (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 54, $this->source); })()), "::")), twig_last($this->env, twig_split_filter($this->env, (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 54, $this->source); })()), "::")), "label"), (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 54, $this->source); })()));
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(_twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue((isset($context["objectClass"]) || array_key_exists("objectClass", $context) ? $context["objectClass"] : (function () { throw new RuntimeError('Variable "objectClass" does not exist.', 55, $this->source); })()), (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 55, $this->source); })()), "label"), (isset($context["fieldLabel"]) || array_key_exists("fieldLabel", $context) ? $context["fieldLabel"] : (function () { throw new RuntimeError('Variable "fieldLabel" does not exist.', 55, $this->source); })())), [], ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "translationDomain", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "translationDomain", [], "any", false, false, false, 55), "messages")) : ("messages"))), "html", null, true);
            echo ":";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_renderCollection($__objectClass__ = null, $__fieldKey__ = null, $__fieldValue__ = null, $__allowedDiffTypes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "objectClass" => $__objectClass__,
            "fieldKey" => $__fieldKey__,
            "fieldValue" => $__fieldValue__,
            "allowedDiffTypes" => $__allowedDiffTypes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollection"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollection"));

            // line 59
            $macros["AuditMacro"] = $this;
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 61, $this->source); })()), "collectionDiffs", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["diffType"] => $context["diffValues"]) {
                // line 62
                if (( !twig_test_empty($context["diffValues"]) && twig_in_filter($context["diffType"], (isset($context["allowedDiffTypes"]) || array_key_exists("allowedDiffTypes", $context) ? $context["allowedDiffTypes"] : (function () { throw new RuntimeError('Variable "allowedDiffTypes" does not exist.', 62, $this->source); })())))) {
                    // line 63
                    echo "<dl class=\"audit-list\">";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["diffValues"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["diffValue"]) {
                        // line 65
                        $context["record"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(twig_get_attribute($this->env, $this->source, $context["diffValue"], "entity_class", [], "any", false, false, false, 65), "label");
                        // line 66
                        if (((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 66, $this->source); })()) == $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 66, $this->source); })())))) {
                            // line 67
                            $context["record"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(twig_first($this->env, twig_split_filter($this->env, (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 67, $this->source); })()), "::")), twig_last($this->env, twig_split_filter($this->env, (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 67, $this->source); })()), "::")), "label"), (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 67, $this->source); })()));
                            // line 68
                            $context["record"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(_twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue((isset($context["objectClass"]) || array_key_exists("objectClass", $context) ? $context["objectClass"] : (function () { throw new RuntimeError('Variable "objectClass" does not exist.', 68, $this->source); })()), (isset($context["fieldKey"]) || array_key_exists("fieldKey", $context) ? $context["fieldKey"] : (function () { throw new RuntimeError('Variable "fieldKey" does not exist.', 68, $this->source); })()), "label"), (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 68, $this->source); })())), [], ((twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "translationDomain", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fieldValue"] ?? null), "translationDomain", [], "any", false, false, false, 68), "messages")) : ("messages")));
                        }
                        // line 70
                        echo "<dt>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("oro.dataaudit.collection." . $context["diffType"]), ["%record%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 70, $this->source); })())), "%entity_name%" => _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["diffValue"], "entity_name", [], "any", false, false, false, 70)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))]), "html", null, true);
                        // line 71
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["diffValue"], "change_set", [], "any", false, false, false, 71))) {
                            // line 72
                            echo ":
                        <dd>
                            <ul>";
                            // line 75
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["diffValue"], "change_set", [], "any", false, false, false, 75))));
                            foreach ($context['_seq'] as $context["_key"] => $context["diffFieldName"]) {
                                // line 76
                                $context["diffFieldValues"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["diffValue"], "change_set", [], "any", false, false, false, 76), $context["diffFieldName"], [], "array", false, false, false, 76);
                                // line 77
                                echo "<li>";
                                // line 78
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(_twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(twig_get_attribute($this->env, $this->source, $context["diffValue"], "entity_class", [], "any", false, false, false, 78), $context["diffFieldName"], "label"), $context["diffFieldName"])), "html", null, true);
                                echo ":
                                        ";
                                // line 79
                                if (!twig_in_filter("added", (isset($context["allowedDiffTypes"]) || array_key_exists("allowedDiffTypes", $context) ? $context["allowedDiffTypes"] : (function () { throw new RuntimeError('Variable "allowedDiffTypes" does not exist.', 79, $this->source); })()))) {
                                    // line 80
                                    echo "                                            <s>";
                                    echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_first($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 80, $this->source); })()))], 80, $context, $this->getSourceContext());
                                    echo "</s>";
                                    // line 81
                                    if (( !twig_test_empty(twig_first($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 81, $this->source); })()))) &&  !twig_test_empty(twig_last($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 81, $this->source); })()))))) {
                                        echo "&nbsp;";
                                    }
                                    // line 82
                                    echo "                                        ";
                                } elseif (!twig_in_filter("removed", (isset($context["allowedDiffTypes"]) || array_key_exists("allowedDiffTypes", $context) ? $context["allowedDiffTypes"] : (function () { throw new RuntimeError('Variable "allowedDiffTypes" does not exist.', 82, $this->source); })()))) {
                                    // line 83
                                    echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_last($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 83, $this->source); })()))], 83, $context, $this->getSourceContext());
                                } else {
                                    // line 85
                                    echo "                                            <s>";
                                    echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_first($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 85, $this->source); })()))], 85, $context, $this->getSourceContext());
                                    echo "</s>";
                                    // line 86
                                    if (( !twig_test_empty(twig_first($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 86, $this->source); })()))) &&  !twig_test_empty(twig_last($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 86, $this->source); })()))))) {
                                        echo "&nbsp;";
                                    }
                                    // line 87
                                    echo twig_call_macro($macros["AuditMacro"], "macro_renderFieldValue", [twig_last($this->env, (isset($context["diffFieldValues"]) || array_key_exists("diffFieldValues", $context) ? $context["diffFieldValues"] : (function () { throw new RuntimeError('Variable "diffFieldValues" does not exist.', 87, $this->source); })()))], 87, $context, $this->getSourceContext());
                                }
                                // line 89
                                echo "                                    </li>";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diffFieldName'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 91
                            echo "</ul>
                        </dd>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diffValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "</dl>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['diffType'], $context['diffValues'], $context['_parent'], $context['loop']);
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
        return "@OroDataAudit/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 95,  323 => 91,  317 => 89,  314 => 87,  310 => 86,  306 => 85,  303 => 83,  300 => 82,  296 => 81,  292 => 80,  290 => 79,  286 => 78,  284 => 77,  282 => 76,  278 => 75,  274 => 72,  272 => 71,  269 => 70,  266 => 68,  264 => 67,  262 => 66,  260 => 65,  256 => 64,  254 => 63,  252 => 62,  248 => 61,  246 => 59,  224 => 58,  208 => 55,  206 => 54,  185 => 53,  167 => 47,  164 => 45,  162 => 44,  159 => 42,  153 => 40,  149 => 39,  147 => 38,  145 => 37,  141 => 34,  135 => 32,  131 => 31,  127 => 30,  125 => 29,  121 => 28,  118 => 26,  116 => 25,  114 => 24,  112 => 23,  109 => 21,  107 => 20,  105 => 19,  103 => 18,  101 => 17,  99 => 16,  97 => 15,  95 => 14,  93 => 13,  91 => 12,  88 => 9,  86 => 8,  83 => 6,  81 => 5,  79 => 4,  77 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- macro renderFieldValue(fieldValue, field) -%}
    {% import _self as AuditMacro %}

    {%- set type = null -%}
    {%- if fieldValue.type is defined -%}
        {%- set type = fieldValue.type -%}
    {%- endif -%}
    {%- if fieldValue.value is defined -%}
        {%- set fieldValue = fieldValue.value -%}
    {%- endif -%}

    {%- if fieldValue.timestamp is defined and type == 'date' -%}
        {{- fieldValue|oro_format_date -}}
    {%- elseif fieldValue.timestamp is defined and type in ['datetime', 'datetimetz'] -%}
        {{- fieldValue|oro_format_datetime -}}
    {%- elseif fieldValue.timestamp is defined and type == 'time' -%}
        {{- fieldValue|oro_format_time -}}
    {%- elseif type == 'array' or type == 'jsonarray' -%}
        {{- fieldValue is not null ? fieldValue|json_encode(constant('JSON_FORCE_OBJECT')) -}}
    {%- elseif type == 'boolean' or fieldValue is same as(true) or fieldValue is same as(false) -%}
        {{- fieldValue ? 'Yes'|trans : 'No'|trans -}}
    {%- else -%}
        {%- if fieldValue is iterable and fieldValue.entity_class is defined and fieldValue.entity_class is not empty -%}
            {{- 'oro.dataaudit.record'|trans({'%record%': oro_entity_config_value(fieldValue.entity_class, 'label')|trans, '%entity_name%': fieldValue.entity_name|default(fieldValue.entity_id|default('oro.ui.empty'|trans)) }) -}}
            {%- if fieldValue.change_set is defined and fieldValue.change_set is not empty -%}
                <dd>
                    <ul>
                        {%- for diffFieldName, diffFieldValues in fieldValue.change_set -%}
                            <li>
                                {{- oro_field_config_value(fieldValue.entity_class, diffFieldName, 'label')|default(diffFieldName)|trans -}}:
                                <s>{{- AuditMacro.renderFieldValue(diffFieldValues|first) -}}</s>&nbsp;{{- AuditMacro.renderFieldValue(diffFieldValues|last) -}}
                            </li>
                        {%- endfor -%}
                    </ul>
                </dd>
            {%- endif -%}
        {%- elseif fieldValue is iterable -%}
            {%- set result = [] -%}
            {%- for item in fieldValue -%}
                {%- set result = result|merge([AuditMacro.renderFieldValue(item)]) -%}
            {%- endfor -%}
            {{- result|join(', ') -}}
        {%- else -%}
            {%- if field.translationDomain is defined -%}
                {{- fieldValue|trans({}, field.translationDomain)|default('') -}}
            {%- else -%}
                {{- fieldValue|default('') -}}
            {%- endif -%}
        {%- endif -%}
    {%- endif -%}
{%- endmacro -%}

{%- macro renderFieldName(objectClass, fieldKey, fieldValue) -%}
    {%- set fieldLabel = oro_field_config_value(fieldKey|split('::')|first, fieldKey|split('::')|last, 'label')|default(fieldKey) -%}
    {{- oro_field_config_value(objectClass, fieldKey, 'label')|default(fieldLabel)|trans({}, fieldValue.translationDomain|default('messages')) -}}:
{%- endmacro -%}

{%- macro renderCollection(objectClass, fieldKey, fieldValue, allowedDiffTypes) -%}
    {% import _self as AuditMacro %}

    {%- for diffType, diffValues in fieldValue.collectionDiffs -%}
        {%- if diffValues is not empty and diffType in allowedDiffTypes -%}
            <dl class=\"audit-list\">
                {%- for diffValue in diffValues -%}
                    {%- set record = oro_entity_config_value(diffValue.entity_class, 'label') -%}
                    {%- if record == record|trans -%}
                        {%- set record = oro_field_config_value(fieldKey|split('::')|first, fieldKey|split('::')|last, 'label')|default(fieldKey) -%}
                        {%- set record = oro_field_config_value(objectClass, fieldKey, 'label')|default(record)|trans({}, fieldValue.translationDomain|default('messages')) -%}
                    {%- endif -%}
                    <dt>{{- ('oro.dataaudit.collection.' ~ diffType)|trans({'%record%': record|trans, '%entity_name%': diffValue.entity_name|trans|default('oro.ui.empty'|trans) }) -}}
                    {%- if diffValue.change_set is not empty -%}
                        :
                        <dd>
                            <ul>
                                {%- for diffFieldName in diffValue.change_set|keys|sort -%}
                                    {%- set diffFieldValues = diffValue.change_set[diffFieldName] -%}
                                    <li>
                                        {{- oro_field_config_value(diffValue.entity_class, diffFieldName, 'label')|default(diffFieldName)|trans -}}:
                                        {% if 'added' not in allowedDiffTypes %}{# old values #}
                                            <s>{{- AuditMacro.renderFieldValue(diffFieldValues|first) -}}</s>
                                            {%- if diffFieldValues|first is not empty and diffFieldValues|last is not empty -%}&nbsp;{% endif %}
                                        {% elseif 'removed' not in allowedDiffTypes %}{# new values #}
                                            {{- AuditMacro.renderFieldValue(diffFieldValues|last) -}}
                                        {% else %}{# preserve the original output #}
                                            <s>{{- AuditMacro.renderFieldValue(diffFieldValues|first) -}}</s>
                                            {%- if diffFieldValues|first is not empty and diffFieldValues|last  is not empty -%}&nbsp;{% endif %}
                                            {{- AuditMacro.renderFieldValue(diffFieldValues|last) -}}
                                        {% endif %}
                                    </li>
                                {%- endfor -%}
                            </ul>
                        </dd>
                    {%- endif -%}
                {%- endfor -%}
            </dl>
        {%- endif -%}
    {%- endfor -%}
{%- endmacro -%}
", "@OroDataAudit/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/macros.html.twig");
    }
}
