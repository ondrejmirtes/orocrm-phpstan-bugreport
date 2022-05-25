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

/* @OroEntityConfig/Config/fieldUpdate.html.twig */
class __TwigTemplate_9c25523745ebb7a7b0cba4d18ac696af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Config/fieldUpdate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/fieldUpdate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/fieldUpdate.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => "@OroEntity/Form/fields.html.twig"], true);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 8
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 8), "N/A")) : ("N/A"))), "%fieldName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 9
($context["field"] ?? null), "fieldName", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fieldName", [], "any", false, false, false, 9), "N/A")) : ("N/A")))]]);
        // line 12
        $context["audit_entity_class"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "entity", [], "any", false, false, false, 12), "className", [], "any", false, false, false, 12), ["\\" => "_"]);
        // line 13
        $context["audit_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fieldName", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "fieldName", [], "any", false, false, false, 13), "N/A")) : ("N/A"))) . " - ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 13), "N/A")) : ("N/A"))));
        // line 14
        $context["audit_path"] = "oro_entityconfig_audit_field";
        // line 15
        $context["audit_entity_id"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15);
        // line 16
        $context["audit_show_change_history"] = true;
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroEntityConfig/Config/fieldUpdate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 19
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/fieldUpdate.html.twig", 19)->unwrap();
        // line 20
        echo "
    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_entityconfig_manage")) {
            // line 22
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "entity", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)])], 22, $context, $this->getSourceContext());
            echo "
        ";
            // line 23
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_entityconfig_view", "params" => ["id" => "\$entity.id"]]], 23, $context, $this->getSourceContext());
            // line 27
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_entityextend_field_create")) {
                // line 28
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 28, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_entityextend_field_create", "params" => ["id" => "\$entity.id"]]], 28, $context, $this->getSourceContext()));
                // line 32
                echo "        ";
            }
            // line 33
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 33, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_entityconfig_field_update", "params" => ["id" => "\$id"]]], 33, $context, $this->getSourceContext()));
            // line 37
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 37, $this->source); })())]], 37, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 42
        echo "    ";
        if (( !array_key_exists("entityTitle", $context) &&  !array_key_exists("breadcrumbs", $context))) {
            // line 43
            echo "        ";
            $context["entityTitle"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)) ? (_twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 44
(isset($context["field_config"]) || array_key_exists("field_config", $context) ? $context["field_config"] : (function () { throw new RuntimeError('Variable "field_config" does not exist.', 44, $this->source); })()), "get", [0 => "label"], "method", false, false, false, 44)), twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "fieldName", [], "any", false, false, false, 44)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.info.new_field.label")));
            // line 47
            echo "
        ";
            // line 48
            $context["breadcrumbs"] = ["entity" => "entity", "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.entity.plural_label"), "entityTitle" =>             // line 52
(isset($context["entityTitle"]) || array_key_exists("entityTitle", $context) ? $context["entityTitle"] : (function () { throw new RuntimeError('Variable "entityTitle" does not exist.', 52, $this->source); })()), "additional" => [0 => ["indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 55, $this->source); })()), "entity", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,             // line 56
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 56), "N/A")) : ("N/A")))]]];
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 65
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 65));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 66
        echo "    ";
        if ((array_key_exists("jsmodules", $context) && twig_length_filter($this->env, (isset($context["jsmodules"]) || array_key_exists("jsmodules", $context) ? $context["jsmodules"] : (function () { throw new RuntimeError('Variable "jsmodules" does not exist.', 66, $this->source); })())))) {
            // line 67
            echo "        <script>
            loadModules(";
            // line 68
            echo json_encode((isset($context["jsmodules"]) || array_key_exists("jsmodules", $context) ? $context["jsmodules"] : (function () { throw new RuntimeError('Variable "jsmodules" does not exist.', 68, $this->source); })()));
            echo ")
        </script>
    ";
        }
        // line 71
        echo "
    ";
        // line 72
        $context["id"] = "configfield-update";
        // line 73
        echo "    ";
        $context["dataBlocks"] = $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormDataBlocks($this->env, $context, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()));
        // line 74
        echo "    ";
        $context["data"] = ["formErrors" => ((        // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 76
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 76, $this->source); })()), "hiddenData" =>         // line 77
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'rest')];
        // line 79
        echo "
    ";
        // line 80
        if (((array_key_exists("non_extended_entities_classes", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["form"] ?? null), "extend", [], "any", false, true, false, 81), "relation", [], "any", true, true, false, 81)) && (twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 82, $this->source); })()), "type", [], "any", false, false, false, 82) != twig_constant("Oro\\Bundle\\EntityExtendBundle\\Extend\\RelationType::ONE_TO_MANY")))) {
            // line 84
            echo "        ";
            $context["options"] = ["nonExtendedEntitiesClassNames" =>             // line 85
(isset($context["non_extended_entities_classes"]) || array_key_exists("non_extended_entities_classes", $context) ? $context["non_extended_entities_classes"] : (function () { throw new RuntimeError('Variable "non_extended_entities_classes" does not exist.', 85, $this->source); })())];
            // line 87
            echo "        <div data-page-component-module=\"oroentityextend/js/bidirectional-only-for-extended-component\"
             data-page-component-options=\"";
            // line 88
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 88, $this->source); })())), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 91
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Config/fieldUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 91,  242 => 88,  239 => 87,  237 => 85,  235 => 84,  233 => 82,  232 => 81,  231 => 80,  228 => 79,  226 => 77,  225 => 76,  224 => 75,  222 => 74,  219 => 73,  217 => 72,  214 => 71,  208 => 68,  205 => 67,  202 => 66,  189 => 65,  174 => 62,  171 => 61,  168 => 60,  166 => 56,  165 => 55,  164 => 52,  163 => 48,  160 => 47,  158 => 44,  156 => 43,  153 => 42,  140 => 41,  123 => 37,  120 => 33,  117 => 32,  114 => 28,  111 => 27,  109 => 23,  104 => 22,  102 => 21,  99 => 20,  96 => 19,  83 => 18,  69 => 1,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  57 => 9,  56 => 8,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with [
    '@OroForm/Form/fields.html.twig',
    '@OroEntity/Form/fields.html.twig'
] %}

{% oro_title_set({params : {
    \"%entityName%\": entity_config.get('label')|default('N/A')|trans,
    \"%fieldName%\": field.fieldName|default('N/A')|trans,
}}) %}

{% set audit_entity_class = field.entity.className|replace({'\\\\':'_'}) %}
{% set audit_title = field.fieldName|default('N/A')|trans ~ ' - ' ~ entity_config.get('label')|default('N/A')|trans %}
{% set audit_path = 'oro_entityconfig_audit_field' %}
{% set audit_entity_id = field.id %}
{% set audit_show_change_history = true %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_entityconfig_manage') %}
        {{ UI.cancelButton(path('oro_entityconfig_view', {id: field.entity.id})) }}
        {% set html = UI.saveAndCloseButton({
            'route': 'oro_entityconfig_view',
            'params': {'id': '\$entity.id'}
        }) %}
        {% if is_granted('oro_entityextend_field_create') %}
            {% set html = html ~ UI.saveAndNewButton({
                'route': 'oro_entityextend_field_create',
                'params': {'id': '\$entity.id'}
            }) %}
        {% endif %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_entityconfig_field_update',
            'params': {'id': '\$id'}
        }) %}
        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% if not entityTitle is defined and not breadcrumbs is defined %}
        {% set entityTitle = field.id ?
            (field_config.get('label')|trans) | default(field.fieldName|capitalize) :
            'oro.entity_config.info.new_field.label'|trans
        %}

        {% set breadcrumbs = {
            'entity'      : 'entity',
            'indexPath'   : path('oro_entityconfig_index'),
            'indexLabel'  : 'oro.entity_config.entity.plural_label'|trans,
            'entityTitle' : entityTitle,
            'additional'  : [
                {
                    'indexPath'  : path('oro_entityconfig_view', {id: field.entity.id}),
                    'indexLabel' : entity_config.get('label')|default('N/A')|trans,
                },
            ]
        }%}
    {% endif %}

    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% if jsmodules is defined and jsmodules|length %}
        <script>
            loadModules({{ jsmodules|json_encode|raw }})
        </script>
    {% endif %}

    {% set id = 'configfield-update' %}
    {% set dataBlocks = form_data_blocks(form) %}
    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
        'hiddenData': form_rest(form)
    }%}

    {% if non_extended_entities_classes is defined
        and form.extend.relation is defined
        and field.type != constant('Oro\\\\Bundle\\\\EntityExtendBundle\\\\Extend\\\\RelationType::ONE_TO_MANY')
    %}
        {% set options = {
            'nonExtendedEntitiesClassNames': non_extended_entities_classes
        } %}
        <div data-page-component-module=\"oroentityextend/js/bidirectional-only-for-extended-component\"
             data-page-component-options=\"{{ options|json_encode }}\">
        </div>
    {% endif %}
    {{ parent() }}
{% endblock content_data %}
", "@OroEntityConfig/Config/fieldUpdate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Config/fieldUpdate.html.twig");
    }
}
