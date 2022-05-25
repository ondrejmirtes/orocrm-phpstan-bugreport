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

/* @OroEmail/EmailTemplate/update.html.twig */
class __TwigTemplate_d1ad6fc92624f7b76d4b53a5b66a6970 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/EmailTemplate/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/EmailTemplate/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/EmailTemplate/update.html.twig"));

        // line 2
        $context["pageComponent"] = ["module" => "oroui/js/app/components/view-component", "options" => ["view" => "oroemail/js/app/views/email-template-editor-view"], "layout" => "separate"];
        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => "@OroEmail/Form/fields.html.twig"], true);
        // line 11
        $macros["_emailMacros"] = $this->macros["_emailMacros"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/EmailTemplate/update.html.twig", 11)->unwrap();
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)]]);
        }
        // line 16
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroEmail/EmailTemplate/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 22
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/EmailTemplate/update.html.twig", 22)->unwrap();
        // line 23
        echo "
    ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_emailtemplate_preview")) {
            // line 25
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_preview", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.action.preview"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.action.preview"), "aCss" => "btn-success dialog-form-renderer no-hash", "iCss" => "fa-share-square-o"]], 25, $context, $this->getSourceContext());
            // line 31
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_emailtemplate_clone"))) {
            // line 35
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_clone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.action.clone"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.action.clone"), "aCss" => "btn-success", "iCss" => "fa-share-square-o"]], 35, $context, $this->getSourceContext());
            // line 41
            echo "
        ";
            // line 42
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 42, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45)))) {
            // line 46
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_emailtemplate", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-emailtemplate", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.entity_label")]], 46, $context, $this->getSourceContext());
            // line 53
            echo "
    ";
        }
        // line 55
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_index")], 55, $context, $this->getSourceContext());
        echo "
    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "isEditable", [], "any", false, false, false, 56)) {
            // line 57
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 57, $context, $this->getSourceContext());
            echo "
        ";
            // line 58
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_email_emailtemplate_index"]], 58, $context, $this->getSourceContext());
            // line 59
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_emailtemplate_create")) {
                // line 60
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 60, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_email_emailtemplate_create"]], 60, $context, $this->getSourceContext()));
                // line 63
                echo "        ";
            }
            // line 64
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_emailtemplate_update"))) {
                // line 65
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 65, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_email_emailtemplate_update", "params" => ["id" => "\$id"]]], 65, $context, $this->getSourceContext()));
                // line 69
                echo "        ";
            }
            // line 70
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 70, $this->source); })())]], 70, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 74
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 74));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 75
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)) {
            // line 76
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_emailtemplate_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.entity_plural_label"), "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.edit_entity", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80)])];
            // line 82
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 84
            echo "        ";
            $context["title"] = (((isset($context["isClone"]) || array_key_exists("isClone", $context) ? $context["isClone"] : (function () { throw new RuntimeError('Variable "isClone" does not exist.', 84, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.clone_entity")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.entity_label")])));
            // line 87
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroEmail/EmailTemplate/update.html.twig", 87)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 87, $this->source); })())]));
            // line 88
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 91
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 91));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 92
        echo "    ";
        $context["id"] = "emailtemplate-edit";
        // line 93
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.sections.general"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 100
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), 'row'), 1 =>         // line 101
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "type", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "choice-template-type"]]), 2 =>         // line 102
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "entityName", [], "any", false, false, false, 102), 'row')]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.sections.template_data"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 112
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "translations", [], "any", false, false, false, 112), 'widget')]], 1 => ["title" => "", "data" => [0 => twig_call_macro($macros["_emailMacros"], "macro_renderAvailableVariablesWidget", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 118
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "vars", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "entityName", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "entityName", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118)], 118, $context, $this->getSourceContext())]]]]];
        // line 123
        echo "
    ";
        // line 124
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 124, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 125
        echo "
    ";
        // line 126
        $context["data"] = ["formErrors" => ((        // line 127
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 128
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 128, $this->source); })())];
        // line 131
        echo "
    ";
        // line 132
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/EmailTemplate/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 132,  274 => 131,  272 => 128,  271 => 127,  270 => 126,  267 => 125,  265 => 124,  262 => 123,  260 => 118,  259 => 112,  258 => 102,  257 => 101,  256 => 100,  254 => 93,  251 => 92,  238 => 91,  224 => 88,  221 => 87,  218 => 84,  212 => 82,  210 => 80,  209 => 77,  207 => 76,  204 => 75,  191 => 74,  174 => 70,  171 => 69,  168 => 65,  165 => 64,  162 => 63,  159 => 60,  156 => 59,  154 => 58,  149 => 57,  147 => 56,  142 => 55,  138 => 53,  136 => 51,  135 => 47,  133 => 46,  131 => 45,  128 => 44,  123 => 42,  120 => 41,  118 => 36,  116 => 35,  114 => 34,  111 => 33,  107 => 31,  105 => 26,  103 => 25,  101 => 24,  98 => 23,  95 => 22,  82 => 21,  68 => 1,  66 => 17,  65 => 16,  62 => 13,  59 => 12,  57 => 11,  55 => 7,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% set pageComponent = {
    'module': 'oroui/js/app/components/view-component',
    'options': {'view': 'oroemail/js/app/views/email-template-editor-view'},
    'layout': 'separate'
} %}
{% form_theme form with [
    '@OroForm/Form/fields.html.twig',
    '@OroEmail/Form/fields.html.twig',
]%}
{% import '@OroEmail/macros.html.twig' as _emailMacros %}
{% if form.vars.value.id %}
    {% oro_title_set({params : {\"%name%\": form.vars.value.name} }) %}
{% endif %}

{% set formAction = form.vars.value.id
    ? path('oro_email_emailtemplate_update', { id: form.vars.value.id })
    : path('oro_email_emailtemplate_create')
%}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_email_emailtemplate_preview') %}
        {{ UI.button({
            'path' :  path('oro_email_emailtemplate_preview', {'id': form.vars.value.id }),
            'title' : 'oro.email.emailtemplate.action.preview'|trans,
            'label' : 'oro.email.emailtemplate.action.preview'|trans,
            'aCss': 'btn-success dialog-form-renderer no-hash',
            'iCss': 'fa-share-square-o'
        }) }}
    {% endif %}

    {% if form.vars.value.id and is_granted('oro_email_emailtemplate_clone') %}
        {{ UI.button({
            'path':  path('oro_email_emailtemplate_clone', {'id': form.vars.value.id}),
            'title': 'oro.email.emailtemplate.action.clone'|trans,
            'label': 'oro.email.emailtemplate.action.clone'|trans,
            'aCss': 'btn-success',
            'iCss': 'fa-share-square-o'
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}

    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_emailtemplate', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_email_emailtemplate_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-emailtemplate',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.email.emailtemplate.entity_label'|trans
        }) }}
    {% endif %}
    {{ UI.cancelButton(path('oro_email_emailtemplate_index')) }}
    {% if form.vars.value.isEditable %}
        {{ UI.buttonSeparator() }}
        {% set html = UI.saveAndCloseButton({'route': 'oro_email_emailtemplate_index'}) %}
        {% if is_granted('oro_email_emailtemplate_create') %}
            {% set html = html ~ UI.saveAndNewButton({
                'route': 'oro_email_emailtemplate_create'
            }) %}
        {% endif %}
        {% if form.vars.value.id or is_granted('oro_email_emailtemplate_update') %}
            {% set html = html ~ UI.saveAndStayButton({
                'route': 'oro_email_emailtemplate_update',
                'params': {'id': '\$id'}
            }) %}
        {% endif %}
        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_email_emailtemplate_index'),
            'indexLabel':  'oro.email.emailtemplate.entity_plural_label'|trans,
            'entityTitle': 'oro.email.emailtemplate.edit_entity'|trans({'%name%': form.vars.value.name})
        } %}
        {{ parent() }}
    {% else %}
        {% set title = isClone
            ? 'oro.email.emailtemplate.clone_entity'|trans
            : 'oro.ui.create_entity'|trans({'%entityName%': 'oro.email.emailtemplate.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'emailtemplate-edit' %}
    {% set dataBlocks = [
        {
            'title': 'oro.email.emailtemplate.sections.general'|trans,
            'class': 'active',
            'subblocks': [{
                'title': '',
                'data': [
                    form_row(form.name),
                    form_row(form.type, {'attr' : {'class': 'choice-template-type'}}),
                    form_row(form.entityName)
                ]
            }]
        },
        {
            'title': 'oro.email.emailtemplate.sections.template_data'|trans,
            'subblocks': [
            {
                'title': '',
                'data': [
                    form_widget(form.translations)
                ]
            },
            {
                'title': '',
                'data': [
                    _emailMacros.renderAvailableVariablesWidget(form.vars.value.entityName, form.entityName.vars.id)
                ]
            }]
        }
    ] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
        }
    %}

    {{ parent() }}
{% endblock content_data %}
", "@OroEmail/EmailTemplate/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/EmailTemplate/update.html.twig");
    }
}
