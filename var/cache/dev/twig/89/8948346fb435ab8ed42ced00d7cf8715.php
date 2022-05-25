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

/* @OroContactUs/ContactRequest/update.html.twig */
class __TwigTemplate_d87c5530db37aba5cc60612210674c44 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroContactUs/ContactRequest/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContactUs/ContactRequest/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContactUs/ContactRequest/update.html.twig"));

        // line 3
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_create")));
        // line 4
        $context["fullname"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"));

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%request.clientName%" =>         // line 5
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 5, $this->source); })())]]);
        // line 7
        $context["formAttr"] = ["data-validation" => ["Oro\\Bundle\\ContactUsBundle\\Validator\\ContactRequestCallbackValidator" => ["target" => "preferredContactMethod", "deps" => ["oro.contactus.contactrequest.method.both" => [0 => "emailAddress", 1 => "phone"], "oro.contactus.contactrequest.method.phone" => "phone", "oro.contactus.contactrequest.method.email" => "emailAddress"]]]];
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroContactUs/ContactRequest/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 21
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroContactUs/ContactRequest/update.html.twig", 21)->unwrap();
        // line 22
        echo "
    ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_contactus_request_delete"))) {
            // line 24
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact-request-form", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.entity_label")]], 24, $context, $this->getSourceContext());
            // line 31
            echo "
        ";
            // line 32
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 32, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 34
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_index"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel")]], 34, $context, $this->getSourceContext());
        echo "
    ";
        // line 35
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_contactus_request_view", "params" => ["id" => "\$id"]]], 35, $context, $this->getSourceContext());
        // line 39
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_contactus_request_create")) {
            // line 40
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 40, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_contactus_request_create"]], 40, $context, $this->getSourceContext()));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_contactus_request_edit")) {
            // line 45
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 45, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_contactus_request_update", "params" => ["id" => "\$id"]]], 45, $context, $this->getSourceContext()));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 50, $this->source); })())]], 50, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 53
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 53));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 54
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)) {
            // line 55
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 56
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contactus_request_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.entity_plural_label"), "entityTitle" =>             // line 59
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 59, $this->source); })())];
            // line 61
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 63
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.entity_label")]);
            // line 64
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroContactUs/ContactRequest/update.html.twig", 64)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 64, $this->source); })())]));
            // line 65
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 68
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 68));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 69
        echo "    ";
        $context["id"] = "contact-request-form";
        // line 70
        echo "
    ";
        // line 71
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.block.general"), "class" => "active", "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.block.request_information"), "data" => [0 =>         // line 78
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "firstName", [], "any", false, false, false, 78), 'row'), 1 =>         // line 79
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "lastName", [], "any", false, false, false, 79), 'row'), 2 =>         // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "organizationName", [], "any", false, false, false, 80), 'row'), 3 =>         // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "preferredContactMethod", [], "any", false, false, false, 81), 'row'), 4 =>         // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "phone", [], "any", false, false, false, 82), 'row'), 5 =>         // line 83
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "emailAddress", [], "any", false, false, false, 83), 'row'), 6 =>         // line 84
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "contactReason", [], "any", false, false, false, 84), 'row'), 7 =>         // line 85
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "comment", [], "any", false, false, false, 85), 'row')]]]]];
        // line 90
        echo "
    ";
        // line 91
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 91, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.block.additional")));
        // line 92
        echo "
    ";
        // line 93
        $context["data"] = ["formErrors" => ((        // line 94
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 95
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 95, $this->source); })())];
        // line 97
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
        return "@OroContactUs/ContactRequest/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  237 => 95,  236 => 94,  235 => 93,  232 => 92,  230 => 91,  227 => 90,  225 => 85,  224 => 84,  223 => 83,  222 => 82,  221 => 81,  220 => 80,  219 => 79,  218 => 78,  217 => 71,  214 => 70,  211 => 69,  198 => 68,  184 => 65,  181 => 64,  178 => 63,  172 => 61,  170 => 59,  169 => 56,  167 => 55,  164 => 54,  151 => 53,  135 => 50,  132 => 49,  129 => 45,  126 => 44,  123 => 43,  120 => 40,  117 => 39,  115 => 35,  110 => 34,  105 => 32,  102 => 31,  100 => 29,  99 => 25,  97 => 24,  95 => 23,  92 => 22,  89 => 21,  76 => 20,  62 => 1,  60 => 7,  58 => 5,  55 => 4,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}

{% set formAction = form.vars.value.id ? path('oro_contactus_request_update', { 'id': form.vars.value.id }) : path('oro_contactus_request_create') %}
{% set fullname = form.vars.value|oro_format_name|default('N/A'|trans) %}
{% oro_title_set({ params : {\"%request.clientName%\": fullname} }) %}

{% set formAttr = {
    \"data-validation\": {
        \"Oro\\\\Bundle\\\\ContactUsBundle\\\\Validator\\\\ContactRequestCallbackValidator\": {
            \"target\": \"preferredContactMethod\",
            \"deps\": {
                \"oro.contactus.contactrequest.method.both\": [\"emailAddress\", \"phone\"],
                \"oro.contactus.contactrequest.method.phone\": \"phone\",
                \"oro.contactus.contactrequest.method.email\": \"emailAddress\"
            }
        }
    }
} %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('oro_contactus_request_delete') %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_contactus_request_delete', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_contactus_request_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-contact-request-form',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.contactus.contactrequest.entity_label'|trans,
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.button({'path' : path('oro_contactus_request_index'), 'title' : 'Cancel'|trans, 'label' : 'Cancel'|trans}) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_contactus_request_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_contactus_request_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_contactus_request_create'
        }) %}
    {% endif %}
    {% if is_granted('oro_contactus_request_edit') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_contactus_request_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_contactus_request_index'),
            'indexLabel': 'oro.contactus.contactrequest.entity_plural_label'|trans,
            'entityTitle': fullname
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.contactus.contactrequest.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'contact-request-form' %}

    {% set dataBlocks = [{
        'title': 'oro.contactus.block.general'|trans,
        'class': 'active',
        'subblocks': [
            {
                'title': 'oro.contactus.block.request_information'|trans,
                'data': [
                    form_row(form.firstName),
                    form_row(form.lastName),
                    form_row(form.organizationName),
                    form_row(form.preferredContactMethod),
                    form_row(form.phone),
                    form_row(form.emailAddress),
                    form_row(form.contactReason),
                    form_row(form.comment)
                ]
            }
        ]
    }] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'oro.contactus.block.additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroContactUs/ContactRequest/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactUsBundle/Resources/views/ContactRequest/update.html.twig");
    }
}
