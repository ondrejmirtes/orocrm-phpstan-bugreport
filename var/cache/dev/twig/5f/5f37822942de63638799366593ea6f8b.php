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

/* @OroEmbeddedForm/EmbeddedForm/update.html.twig */
class __TwigTemplate_5f3b97adc717e7cac5362b2b8eb06e8e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmbeddedForm/EmbeddedForm/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmbeddedForm/EmbeddedForm/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmbeddedForm/EmbeddedForm/update.html.twig"));

        // line 3
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_create")));

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%form.title%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_label")]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroEmbeddedForm/EmbeddedForm/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 7
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmbeddedForm/EmbeddedForm/update.html.twig", 7)->unwrap();
        // line 8
        echo "
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_embedded_form_delete"))) {
            // line 10
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-embedded-form", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_label")]], 10, $context, $this->getSourceContext());
            // line 17
            echo "
        ";
            // line 18
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 18, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 20
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel")]], 20, $context, $this->getSourceContext());
        echo "

    ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "formType", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "choices", [], "any", false, false, false, 22))) {
            // line 23
            echo "        ";
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_embedded_form_view", "params" => ["id" => "\$id"]]], 23, $context, $this->getSourceContext());
            // line 27
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_embedded_form_create")) {
                // line 28
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 28, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_embedded_form_create"]], 28, $context, $this->getSourceContext()));
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_embedded_form_update")) {
                // line 33
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 33, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_embedded_form_update", "params" => ["id" => "\$id"]]], 33, $context, $this->getSourceContext()));
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 38, $this->source); })())]], 38, $context, $this->getSourceContext());
            echo "
    ";
        }
        
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)) {
            // line 44
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 48
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48)];
            // line 50
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 52
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_label")]);
            // line 53
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroEmbeddedForm/EmbeddedForm/update.html.twig", 53)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 53, $this->source); })())]));
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
        $context["id"] = "embedded-form";
        // line 59
        echo "
    ";
        // line 60
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "formType", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "choices", [], "any", false, false, false, 60))) {
            // line 61
            echo "        ";
            $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Embedded Form"), "data" => [0 =>             // line 67
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "title", [], "any", false, false, false, 67), 'row'), 1 =>             // line 68
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "formType", [], "any", false, false, false, 68), 'row'), 2 =>             // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "css", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "span12"]]), 3 =>             // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "successMessage", [], "any", false, false, false, 70), 'row'), 4 =>             // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "allowedDomains", [], "any", false, false, false, 71), 'row')]]]]];
            // line 75
            echo "
        ";
            // line 76
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 76, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
            // line 77
            echo "
        ";
            // line 78
            $context["data"] = ["formErrors" => ((            // line 79
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>             // line 80
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 80, $this->source); })())];
            // line 82
            echo "        ";
            $context["componentOptions"] = ["view" => "oroembeddedform/js/embedded-form-watcher", "formTypeFieldId" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "formType", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)), "cssFieldId" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "css", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)), "successMessageFieldId" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 86
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "successMessage", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)), "defaultCss" =>             // line 87
(isset($context["defaultCss"]) || array_key_exists("defaultCss", $context) ? $context["defaultCss"] : (function () { throw new RuntimeError('Variable "defaultCss" does not exist.', 87, $this->source); })()), "defaultSuccessMessage" =>             // line 88
(isset($context["defaultSuccessMessage"]) || array_key_exists("defaultSuccessMessage", $context) ? $context["defaultSuccessMessage"] : (function () { throw new RuntimeError('Variable "defaultSuccessMessage" does not exist.', 88, $this->source); })()), "forceDataLoading" => ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 89
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "formType", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89))) ? (true) : (false))];
            // line 91
            echo "
        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 93
            echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 93, $this->source); })())), "html", null, true);
            echo "\">
        </div>
        ";
            // line 95
            $this->displayParentBlock("content_data", $context, $blocks);
            echo "
    ";
        } else {
            // line 97
            echo "        <div class=\"container-fluid\">
            <div class=\"grid-container\">
                <div class=\"no-data\">
                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.no_types_available"), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/EmbeddedForm/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 100,  263 => 97,  258 => 95,  253 => 93,  249 => 91,  247 => 89,  246 => 88,  245 => 87,  244 => 86,  243 => 85,  242 => 84,  240 => 82,  238 => 80,  237 => 79,  236 => 78,  233 => 77,  231 => 76,  228 => 75,  226 => 71,  225 => 70,  224 => 69,  223 => 68,  222 => 67,  220 => 61,  218 => 60,  215 => 59,  212 => 58,  199 => 57,  185 => 54,  182 => 53,  179 => 52,  173 => 50,  171 => 48,  170 => 45,  168 => 44,  165 => 43,  152 => 42,  135 => 38,  132 => 37,  129 => 33,  126 => 32,  123 => 31,  120 => 28,  117 => 27,  114 => 23,  112 => 22,  106 => 20,  101 => 18,  98 => 17,  96 => 15,  95 => 11,  93 => 10,  91 => 9,  88 => 8,  85 => 7,  72 => 6,  58 => 1,  56 => 4,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}

{% set formAction = form.vars.value.id ? path('oro_embedded_form_update', { 'id': form.vars.value.id }) : path('oro_embedded_form_create') %}
{% oro_title_set({ params : {\"%form.title%\": form.vars.value.title, \"%entityName%\": 'oro.embeddedform.entity_label'|trans} }) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('oro_embedded_form_delete') %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_embedded_form_delete', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_embedded_form_list'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-embedded-form',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.embeddedform.entity_label'|trans,
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.button({'path' : path('oro_embedded_form_list'), 'title' : 'Cancel'|trans, 'label' : 'Cancel'|trans}) }}

    {% if form.formType.vars.choices is not empty %}
        {% set html = UI.saveAndCloseButton({
            'route': 'oro_embedded_form_view',
            'params': {'id': '\$id'}
        }) %}
        {% if is_granted('oro_embedded_form_create') %}
            {% set html = html ~ UI.saveAndNewButton({
                'route': 'oro_embedded_form_create'
            }) %}
        {% endif %}
        {% if is_granted('oro_embedded_form_update') %}
            {% set html = html ~ UI.saveAndStayButton({
                'route': 'oro_embedded_form_update',
                'params': {'id': '\$id'}
            }) %}
        {% endif %}
        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_embedded_form_list'),
            'indexLabel': 'oro.embeddedform.entity_plural_label'|trans,
            'entityTitle': form.vars.value.title
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.embeddedform.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with {title: title} %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'embedded-form' %}

    {% if form.formType.vars.choices is not empty %}
        {% set dataBlocks = [{
            'title': 'General'|trans,
            'class': 'active',
            'subblocks': [{
                'title': 'Embedded Form'|trans,
                'data': [
                    form_row(form.title),
                    form_row(form.formType),
                    form_row(form.css, {'attr':{'class': 'span12' }}),
                    form_row(form.successMessage),
                    form_row(form.allowedDomains),
                ]
            }]
        }] %}

        {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

        {% set data = {
            'formErrors': form_errors(form) ? form_errors(form) : null,
            'dataBlocks': dataBlocks
        } %}
        {% set componentOptions = {
            'view': 'oroembeddedform/js/embedded-form-watcher',
            'formTypeFieldId': '#' ~ form.formType.vars.id ,
            'cssFieldId': '#' ~ form.css.vars.id,
            'successMessageFieldId': '#' ~ form.successMessage.vars.id,
            'defaultCss': defaultCss,
            'defaultSuccessMessage': defaultSuccessMessage,
            'forceDataLoading': form.formType.vars.value is empty ? true : false
        } %}

        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"{{ componentOptions|json_encode }}\">
        </div>
        {{ parent() }}
    {% else %}
        <div class=\"container-fluid\">
            <div class=\"grid-container\">
                <div class=\"no-data\">
                    {{ 'oro.embeddedform.no_types_available'|trans }}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock content_data %}
", "@OroEmbeddedForm/EmbeddedForm/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/EmbeddedForm/update.html.twig");
    }
}
