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

/* @OroDotmailer/DataFieldMapping/update.html.twig */
class __TwigTemplate_6f1b6ca89a9d5e7e990733ddddc6f578 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyClass' => [$this, 'block_bodyClass'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/DataFieldMapping/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/DataFieldMapping/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/DataFieldMapping/update.html.twig"));

        // line 2
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.name%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "entity", [], "any", false, false, false, 5), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmapping.entity_label")]]);
        // line 8
        $context["entityId"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8);
        // line 10
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_datafield_mapping_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_datafield_mapping_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "dotmailer-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 13
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 13)->unwrap();
        // line 14
        echo "
    ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15)))) {
            // line 16
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_dotmailer_datafield_mapping", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_datafield_mapping_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmapping.entity_label")]], 16, $context, $this->getSourceContext());
            // line 22
            echo "

        ";
            // line 24
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 24, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 26
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_datafield_mapping_index")], 26, $context, $this->getSourceContext());
        echo "
    ";
        // line 27
        $context["html"] = "";
        // line 28
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dotmailer_datafield_mapping_create")) {
            // line 29
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 29, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_dotmailer_datafield_mapping_create"]], 29, $context, $this->getSourceContext()));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dotmailer_datafield_mapping_update"))) {
            // line 34
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 34, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_dotmailer_datafield_mapping_update", "params" => ["id" => "\$id"]]], 34, $context, $this->getSourceContext()));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 39, $this->source); })())]], 39, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 43
        echo "    ";
        if ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 45
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_datafield_mapping_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmapping.entity_plural_label"), "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmapping.entity_label")];
            // line 50
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 52
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmapping.entity_label")]);
            // line 53
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 53)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 53, $this->source); })())]));
            // line 54
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 58
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 58)->unwrap();
        // line 59
        echo "    ";
        $macros["dataFieldMappingUpdate"] = $this;
        // line 60
        echo "
    ";
        // line 61
        $context["id"] = "dotmailer-datafield-mapping-form";
        // line 62
        echo "    ";
        $context["type"] = "oro_dotmailer_datafield_mapping";
        // line 63
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.block.general"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 68
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "channel", [], "any", false, false, false, 68), 'row'), 1 =>         // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "entity", [], "any", false, false, false, 69), 'row'), 2 =>         // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "syncPriority", [], "any", false, false, false, 70), 'row')]]]]];
        // line 74
        echo "    ";
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 74, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.block.mapping"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 79
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "config_source", [], "any", false, false, false, 79), 'row'), 1 => twig_call_macro($macros["UI"], "macro_scrollSubblock", ["", [0 => twig_call_macro($macros["dataFieldMappingUpdate"], "macro_mapping_form", [twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "config", [], "any", false, false, false, 84), ["id" => (        // line 85
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 85, $this->source); })()) . "-mapping-form")]], 83, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["dataFieldMappingUpdate"], "macro_mapping_list", [["id" => (        // line 89
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 89, $this->source); })()) . "-mapping-list"), "rowId" => (        // line 90
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 90, $this->source); })()) . "-mapping-row")]], 87, $context, $this->getSourceContext())], "", "", (        // line 96
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 96, $this->source); })()) . "-mappings")], 80, $context, $this->getSourceContext())]]]]]);
        // line 101
        echo "
    ";
        // line 102
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 102, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.block.additional")));
        // line 103
        echo "
    ";
        // line 104
        $context["data"] = ["formErrors" => ((        // line 105
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 106
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 106, $this->source); })())];
        // line 108
        echo "
    ";
        // line 109
        echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", ["column-chain-template"], 109, $context, $this->getSourceContext());
        echo "
    ";
        // line 110
        echo twig_call_macro($macros["dataFieldMappingUpdate"], "macro_initJsWidgets", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 110, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 110, $this->source); })())], 110, $context, $this->getSourceContext());
        echo "

    ";
        // line 112
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 114
    public function macro_mapping_form($__form__ = null, $__attr__ = null, $__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_form"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_form"));

            // line 115
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 115)->unwrap();
            // line 116
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 116, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,             // line 117
($context["attr"] ?? null), "class", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 117), "")) : ("")) . " dotmailer-mapping-form clearfix"))]);
            // line 119
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 119, $this->source); })())], 119, $context, $this->getSourceContext());
            echo ">
        ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "entityFields", [], "any", false, false, false, 120), 'row', ["label" => "oro.dotmailer.datafieldmappingconfig.entity_fields.label", "attr" => ["data-purpose" => "multiple-entityfield-selector", "data-validation" => json_encode(["NotBlank" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.validation.entity_field_required")]])]]);
            // line 126
            echo "
        ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "dataField", [], "any", false, false, false, 127), 'row', ["label" => "oro.dotmailer.datafieldmappingconfig.data_field.label", "attr" => ["data-purpose" => "datafield-selector", "data-validation" => json_encode(["NotBlank" => null])]]);
            // line 133
            echo "
        ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "isTwoWaySync", [], "any", false, false, false, 134), 'row', ["label" => "oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label", "attr" => ["class" => "two-way-sync-selector", "data-purpose" => "two-way-sync-selector"]]);
            // line 140
            echo "
        <div class=\"pull-right\">
            <div class=\"btn-group\">
                ";
            // line 143
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["aCss" => "no-hash cancel-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.cancel")]], 143, $context, $this->getSourceContext());
            // line 146
            echo "
            </div>
            <div class=\"btn-group\">
                ";
            // line 149
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-success save-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.save")]], 149, $context, $this->getSourceContext());
            // line 153
            echo "
            </div>
            <div class=\"btn-group\">
                ";
            // line 156
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-primary add-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.add")]], 156, $context, $this->getSourceContext());
            // line 160
            echo "
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 165
    public function macro_mapping_list($__attr__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attr" => $__attr__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_list"));

            // line 166
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/DataFieldMapping/update.html.twig", 166)->unwrap();
            // line 167
            echo "    ";
            $macros["dataFieldMappingUpdate"] = $this;
            // line 168
            echo "
    ";
            // line 169
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 169, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 169)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 169), "")) : ("")) . " grid-container query-designer-grid-container"))]);
            // line 170
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 170, $this->source); })())], 170, $context, $this->getSourceContext());
            echo ">
        <table class=\"grid table-hover table table-bordered table-condensed\">
            <thead>
            <tr>
                <th class=\"entityfield-column\"><span>";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.entity_fields.label"), "html", null, true);
            echo "</span></th>
                <th class=\"datafield-column\"><span>";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.data_field.label"), "html", null, true);
            echo "</span></th>
                <th class=\"twowaysync-column\"><span>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label"), "html", null, true);
            echo "</span></th>
                <th class=\"action-column\"><span>";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
            echo "</span></th>
            </tr>
            </thead>
            <tbody class=\"mapping-container\">
            </tbody>
        </table>
    </div>
    ";
            // line 184
            echo twig_call_macro($macros["dataFieldMappingUpdate"], "macro_mapping_template", [twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 184, $this->source); })()), "rowId", [], "any", false, false, false, 184)], 184, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 186
    public function macro_mapping_template($__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "mapping_template"));

            // line 187
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 187, $this->source); })()), "html", null, true);
            echo "\">
        <tr data-cid=\"<%- cid %>\">
            <td class=\"field-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= entityFields %></td>
            <td class=\"datafield-cell\"><%- dataField %></td>
            <td class=\"twowaysync-cell\"><%= isTwoWaySync %></td>
            <td class=\"action-cell\">
                ";
            // line 193
            ob_start();
            // line 194
            echo "                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.update_mapping"), "html", null, true);
            echo "\"
                        role=\"button\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-edit\" aria-hidden=\"true\"></span>
                </a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.delete_mapping"), "html", null, true);
            echo "\"
                        role=\"button\"
                        data-collection-action=\"delete\"
                        data-message=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.delete_mapping_confirmation"), "html", null, true);
            echo "\">
                    <span class=\"fa-trash\" aria-hidden=\"true\"></span>
                </a>
                ";
            $___internal_parse_91_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 193
            echo twig_spaceless($___internal_parse_91_);
            // line 208
            echo "            </td>
        </tr>
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 212
    public function macro_initJsWidgets($__type__ = null, $__form__ = null, $__entities__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "form" => $__form__,
            "entities" => $__entities__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initJsWidgets"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initJsWidgets"));

            // line 213
            echo "    ";
            $context["widgetOptions"] = ["dataProviderFilterPreset" => "dotmailer", "valueSource" => (("[data-ftid=" .             // line 215
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 215, $this->source); })())) . "_form_config_source]"), "entityChoice" => (("[data-ftid=" .             // line 216
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 216, $this->source); })())) . "_form_entity]"), "entityChangeConfirmMessage" => "oro.dotmailer.datafieldmapping.change_entity_confirmation", "mapping" => ["editor" => ["namePattern" => (("^" .             // line 219
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 219, $this->source); })())) . "_form\\[config\\]\\[([\\w\\W]*)\\]\$")], "form" => (("#" .             // line 220
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 220, $this->source); })())) . "-mapping-form"), "itemContainer" => (("#" .             // line 221
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 221, $this->source); })())) . "-mapping-list .mapping-container"), "itemTemplate" => (("#" .             // line 222
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 222, $this->source); })())) . "-mapping-row")], "channel" => ["channelChoice" => (("[data-ftid=" .             // line 225
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 225, $this->source); })())) . "_form_channel]"), "changeChannelConfirmMessage" => "oro.dotmailer.datafieldmapping.change_channel_confirmation"], "select2FieldChoiceTemplate" => "#column-chain-template", "select2FieldChoicePlaceholoder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.datafieldmappingconfig.entityField.placeholder")];
            // line 231
            echo "
    <div data-page-component-module=\"orodotmailer/js/app/components/mapping-component\"
         data-page-component-options=\"";
            // line 233
            echo twig_escape_filter($this->env, json_encode((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 233, $this->source); })())), "html", null, true);
            echo "\"></div>
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
        return "@OroDotmailer/DataFieldMapping/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 233,  574 => 231,  572 => 225,  571 => 222,  570 => 221,  569 => 220,  568 => 219,  567 => 216,  566 => 215,  564 => 213,  543 => 212,  525 => 208,  523 => 193,  516 => 204,  510 => 201,  501 => 195,  498 => 194,  496 => 193,  486 => 187,  467 => 186,  450 => 184,  440 => 177,  436 => 176,  432 => 175,  428 => 174,  420 => 170,  418 => 169,  415 => 168,  412 => 167,  409 => 166,  390 => 165,  371 => 160,  369 => 156,  364 => 153,  362 => 149,  357 => 146,  355 => 143,  350 => 140,  348 => 134,  345 => 133,  343 => 127,  340 => 126,  338 => 120,  333 => 119,  331 => 117,  329 => 116,  326 => 115,  305 => 114,  290 => 112,  285 => 110,  281 => 109,  278 => 108,  276 => 106,  275 => 105,  274 => 104,  271 => 103,  269 => 102,  266 => 101,  264 => 96,  263 => 90,  262 => 89,  261 => 85,  260 => 84,  259 => 79,  257 => 74,  255 => 70,  254 => 69,  253 => 68,  251 => 63,  248 => 62,  246 => 61,  243 => 60,  240 => 59,  237 => 58,  224 => 57,  210 => 54,  207 => 53,  204 => 52,  198 => 50,  196 => 45,  194 => 44,  191 => 43,  178 => 42,  162 => 39,  159 => 38,  156 => 34,  153 => 33,  150 => 32,  147 => 29,  144 => 28,  142 => 27,  137 => 26,  132 => 24,  128 => 22,  126 => 20,  125 => 17,  123 => 16,  121 => 15,  118 => 14,  115 => 13,  102 => 12,  77 => 11,  63 => 1,  61 => 10,  59 => 8,  57 => 5,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}

{% oro_title_set({params : {
    '%entity.name%': entity.entity,
    '%entityName%': 'oro.dotmailer.datafieldmapping.entity_label'|trans }
}) %}
{% set entityId = entity.id %}

{% set formAction = form.vars.value.id ? path('oro_dotmailer_datafield_mapping_update', { 'id': form.vars.value.id }) : path('oro_dotmailer_datafield_mapping_create')  %}
{% block bodyClass %}dotmailer-page{% endblock %}
{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_dotmailer_datafield_mapping', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_dotmailer_datafield_mapping_index'),
            'aCss': 'no-hash remove-button',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.dotmailer.datafieldmapping.entity_label'|trans
        }) }}

        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_dotmailer_datafield_mapping_index')) }}
    {% set html = '' %}
    {% if is_granted('oro_dotmailer_datafield_mapping_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_dotmailer_datafield_mapping_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_dotmailer_datafield_mapping_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_dotmailer_datafield_mapping_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if entityId %}
        {% set breadcrumbs = {
            'entity': entity,
            'indexPath': path('oro_dotmailer_datafield_mapping_index'),
            'indexLabel': 'oro.dotmailer.datafieldmapping.entity_plural_label'|trans,
            'entityTitle': 'oro.dotmailer.datafieldmapping.entity_label'|trans
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.dotmailer.datafieldmapping.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as dataFieldMappingUpdate %}

    {% set id = 'dotmailer-datafield-mapping-form' %}
    {% set type = 'oro_dotmailer_datafield_mapping' %}
    {% set dataBlocks = [{
        'title': 'oro.dotmailer.block.general'|trans,
        'subblocks': [{
            'title': '',
            'data': [
                form_row(form.channel),
                form_row(form.entity),
                form_row(form.syncPriority)
            ]
        }]
    }] %}
    {% set dataBlocks =  dataBlocks|merge( [{
        'title': 'oro.dotmailer.block.mapping'|trans,
        'subblocks': [{
            'title': '',
            'data': [
                form_row(form.config_source),
                UI.scrollSubblock(
                    '',
                    [
                        dataFieldMappingUpdate.mapping_form(
                            form.config,
                            {'id': type ~ '-mapping-form'}
                        ),
                        dataFieldMappingUpdate.mapping_list(
                            {
                                'id': type ~ '-mapping-list',
                                'rowId': type ~ '-mapping-row'
                            }
                        ),
                    ],
                    '',
                    '',
                    type ~ '-mappings'
                ),
            ]
        }]
    }] ) %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'oro.dotmailer.block.additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}

    {{ QD.query_designer_column_chain_template('column-chain-template') }}
    {{ dataFieldMappingUpdate.initJsWidgets(type, form, entities) }}

    {{ parent() }}
{% endblock content_data %}
{% macro mapping_form(form, attr, params) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = attr|default({})|merge({
        'class': (attr.class|default('') ~ ' dotmailer-mapping-form clearfix')|trim
    }) %}
    <div{{ UI.attributes(attr) }}>
        {{ form_row(form.entityFields, {
            'label': 'oro.dotmailer.datafieldmappingconfig.entity_fields.label',
            'attr': {
                'data-purpose': 'multiple-entityfield-selector',
                'data-validation': { NotBlank: {'message': 'oro.dotmailer.datafieldmappingconfig.validation.entity_field_required'|trans } }|json_encode
            }
        }) }}
        {{ form_row(form.dataField, {
            'label': 'oro.dotmailer.datafieldmappingconfig.data_field.label',
            'attr': {
                'data-purpose': 'datafield-selector',
                'data-validation': { NotBlank: null }|json_encode
            }
        }) }}
        {{ form_row(form.isTwoWaySync, {
            'label': 'oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label',
            'attr': {
                'class': 'two-way-sync-selector',
                'data-purpose': 'two-way-sync-selector'
            }
        }) }}
        <div class=\"pull-right\">
            <div class=\"btn-group\">
                {{ UI.clientButton({
                    'aCss': 'no-hash cancel-button column-form-button',
                    'label' : 'oro.query_designer.form.action.cancel'|trans
                }) }}
            </div>
            <div class=\"btn-group\">
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-success save-button column-form-button',
                    'label' : 'oro.query_designer.form.action.save'|trans
                }) }}
            </div>
            <div class=\"btn-group\">
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-primary add-button column-form-button',
                    'label' : 'oro.query_designer.form.action.add'|trans
                }) }}
            </div>
        </div>
    </div>
{% endmacro %}
{% macro mapping_list(attr) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as dataFieldMappingUpdate %}

    {% set attr = attr|default({})|merge({'class': (attr.class|default('') ~ ' grid-container query-designer-grid-container')|trim}) %}
    <div{{ UI.attributes(attr) }}>
        <table class=\"grid table-hover table table-bordered table-condensed\">
            <thead>
            <tr>
                <th class=\"entityfield-column\"><span>{{ 'oro.dotmailer.datafieldmappingconfig.entity_fields.label'|trans }}</span></th>
                <th class=\"datafield-column\"><span>{{ 'oro.dotmailer.datafieldmappingconfig.data_field.label'|trans }}</span></th>
                <th class=\"twowaysync-column\"><span>{{ 'oro.dotmailer.datafieldmappingconfig.is_two_way_sync.label'|trans }}</span></th>
                <th class=\"action-column\"><span>{{ 'oro.query_designer.datagrid.column.actions'|trans }}</span></th>
            </tr>
            </thead>
            <tbody class=\"mapping-container\">
            </tbody>
        </table>
    </div>
    {{ dataFieldMappingUpdate.mapping_template(attr.rowId) }}
{% endmacro %}
{% macro mapping_template(id) %}
    <script type=\"text/html\" id=\"{{ id }}\">
        <tr data-cid=\"<%- cid %>\">
            <td class=\"field-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= entityFields %></td>
            <td class=\"datafield-cell\"><%- dataField %></td>
            <td class=\"twowaysync-cell\"><%= isTwoWaySync %></td>
            <td class=\"action-cell\">
                {% apply spaceless %}
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"{{ 'oro.dotmailer.datafieldmappingconfig.update_mapping'|trans }}\"
                        role=\"button\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-edit\" aria-hidden=\"true\"></span>
                </a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"{{ 'oro.dotmailer.datafieldmappingconfig.delete_mapping'|trans }}\"
                        role=\"button\"
                        data-collection-action=\"delete\"
                        data-message=\"{{ 'oro.dotmailer.datafieldmappingconfig.delete_mapping_confirmation'|trans }}\">
                    <span class=\"fa-trash\" aria-hidden=\"true\"></span>
                </a>
                {% endapply %}
            </td>
        </tr>
    </script>
{% endmacro %}
{% macro initJsWidgets(type, form, entities) %}
    {% set widgetOptions = {
        dataProviderFilterPreset:   'dotmailer',
        valueSource:                '[data-ftid=' ~ type ~ '_form_config_source]',
        entityChoice:               '[data-ftid=' ~ type ~ '_form_entity]',
        entityChangeConfirmMessage: 'oro.dotmailer.datafieldmapping.change_entity_confirmation',
        mapping: {
            editor:        { namePattern: '^' ~ type ~ '_form\\\\[config\\\\]\\\\[([\\\\w\\\\W]*)\\\\]\$' },
            form:          '#' ~ type ~ '-mapping-form',
            itemContainer: '#' ~ type ~ '-mapping-list .mapping-container',
            itemTemplate:  '#' ~ type ~ '-mapping-row'
        },
        channel: {
            channelChoice: '[data-ftid=' ~ type ~ '_form_channel]',
            changeChannelConfirmMessage: 'oro.dotmailer.datafieldmapping.change_channel_confirmation',
        },
        select2FieldChoiceTemplate:     '#column-chain-template',
        select2FieldChoicePlaceholoder: 'oro.dotmailer.datafieldmappingconfig.entityField.placeholder'|trans,
    } %}

    <div data-page-component-module=\"orodotmailer/js/app/components/mapping-component\"
         data-page-component-options=\"{{ widgetOptions|json_encode }}\"></div>
{% endmacro %}
", "@OroDotmailer/DataFieldMapping/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/DataFieldMapping/update.html.twig");
    }
}
