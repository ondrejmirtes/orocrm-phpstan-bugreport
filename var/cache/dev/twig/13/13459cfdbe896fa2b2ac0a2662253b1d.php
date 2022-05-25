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

/* @OroUser/User/view.html.twig */
class __TwigTemplate_f090a7159caa4dd79c82db581d3cc17d extends Template
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
            'pageTitleIcon' => [$this, 'block_pageTitleIcon'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'stats' => [$this, 'block_stats'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/view.html.twig", 2)->unwrap();
        // line 4
        $context["fullname"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"));

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 5
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 5, $this->source); })())]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroUser/User/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 8
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/view.html.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter((isset($context["view_navButtons"]) || array_key_exists("view_navButtons", $context) ? $context["view_navButtons"] : (function () { throw new RuntimeError('Variable "view_navButtons" does not exist.', 10, $this->source); })()), "view_navButtons")) : ("view_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })())]);
        // line 11
        echo "    ";
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 12
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CONFIGURE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })())) &&  !(isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_config", ["id" => twig_get_attribute($this->env, $this->source,                 // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.user_configuration.label"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.user_configuration.label"), "iCss" => "fa-cog"]], 13, $context, $this->getSourceContext());
                // line 18
                echo "
        ";
            } elseif ((            // line 19
(isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 19, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("update_own_configuration"))) {
                // line 20
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_profile_configuration"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.user_configuration.label"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.user_configuration.label"), "iCss" => "fa-cog"]], 20, $context, $this->getSourceContext());
                // line 25
                echo "
        ";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })())) &&  !(isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_label")]], 29, $context, $this->getSourceContext());
            // line 32
            echo "
    ";
        } elseif ((        // line 33
(isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 33, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("update_own_profile"))) {
            // line 34
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_profile_update"), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile")]], 34, $context, $this->getSourceContext());
            // line 37
            echo "
    ";
        }
        // line 39
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)))) {
            // line 40
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_user", ["id" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_label"), "disabled" =>  !            // line 47
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 47, $this->source); })())]], 40, $context, $this->getSourceContext());
            // line 48
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 53
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 54
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label"), "entityTitle" =>         // line 57
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 57, $this->source); })())];
        // line 59
        echo "
    ";
        // line 60
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 63
    public function block_pageTitleIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageTitleIcon", $this->getTemplateName(), 63));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        // line 64
        echo "    <div class=\"page-title__icon\">";
        // line 65
        $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroUser/User/view.html.twig", 65)->display(twig_array_merge($context, ["file" => twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "avatar", [], "any", false, false, false, 66), "filter" => "avatar_med", "img_attrs" => ["alt" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(        // line 68
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()))]]));
        // line 70
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 73
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 73));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 74
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/view.html.twig", 74)->unwrap();
        // line 75
        echo "
    ";
        // line 76
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "enabled", [], "any", false, false, false, 78)) {
            // line 79
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.enabled.enabled"), "enabled"], 79, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 81
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.enabled.disabled"), "disabled"], 81, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 83
        echo "
        ";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 84, $this->source); })()), "authStatus", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84) == "expired")) {
            // line 85
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "authStatus", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "disabled", "fa-unlock-alt"], 85, $context, $this->getSourceContext());
            echo "
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "authStatus", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86) == "active")) {
            // line 87
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 87, $this->source); })()), "authStatus", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "enabled", "fa-unlock"], 87, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 89
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })()), "authStatus", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "tentatively", "fa-lock"], 89, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 91
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_page_title_status", $context)) ? (_twig_default_filter((isset($context["view_page_title_status"]) || array_key_exists("view_page_title_status", $context) ? $context["view_page_title_status"] : (function () { throw new RuntimeError('Variable "view_page_title_status" does not exist.', 91, $this->source); })()), "view_page_title_status")) : ("view_page_title_status")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 91, $this->source); })())]);
        // line 92
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 95
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 95));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 96
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_view_user_login_attempt")) {
            // line 97
            echo "        ";
            ob_start();
            // line 98
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.last_login.label"), "html", null, true);
            echo ": <a title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.userloginattempt.entity_description"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->generateGridUrl("oro_user_login_attempts", "user-login-attempts-grid", ["f[user][value]" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 98, $this->source); })()), "lastLogin", [], "any", false, false, false, 98)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 98, $this->source); })()), "lastLogin", [], "any", false, false, false, 98))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
            echo "</a>
        ";
            $context["loginAttempts"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "    ";
        } else {
            // line 101
            echo "        ";
            ob_start();
            // line 102
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.last_login.label"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 102, $this->source); })()), "lastLogin", [], "any", false, false, false, 102)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 102, $this->source); })()), "lastLogin", [], "any", false, false, false, 102))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
            echo "
        ";
            $context["loginAttempts"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            echo "    ";
        }
        // line 105
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 105, $this->source); })()), "createdAt", [], "any", false, false, false, 105)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 105, $this->source); })()), "createdAt", [], "any", false, false, false, 105))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
        echo "</li>
    <li>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "updatedAt", [], "any", false, false, false, 106)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "updatedAt", [], "any", false, false, false, 106))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))), "html", null, true);
        echo "</li>
    <li>";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["loginAttempts"]) || array_key_exists("loginAttempts", $context) ? $context["loginAttempts"] : (function () { throw new RuntimeError('Variable "loginAttempts" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "</li>
    <li>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "loginCount", [], "any", true, true, false, 108)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "loginCount", [], "any", false, false, false, 108), 0)) : (0)), "html", null, true);
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 111
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 111));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 112
        echo "    ";
        ob_start();
        // line 113
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_widget_info", ["id" => twig_get_attribute($this->env, $this->source,         // line 115
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115), "viewProfile" => (isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 115, $this->source); })())]), "separateLayout" => false]);
        // line 117
        echo "
    ";
        $context["userInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "    ";
        ob_start();
        // line 120
        echo "        ";
        if ((((isset($context["isProfileView"]) || array_key_exists("isProfileView", $context) ? $context["isProfileView"] : (function () { throw new RuntimeError('Variable "isProfileView" does not exist.', 120, $this->source); })()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MANAGE_API_KEY", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })())))) {
            // line 121
            echo "            ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_apigen", ["id" => twig_get_attribute($this->env, $this->source,             // line 123
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "alias" => "user-apikey-gen-widget", "elementFirst" => true, "separateLayout" => false]);
            // line 127
            echo "
        ";
        }
        // line 129
        echo "    ";
        $context["apiKeyWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "subblocks" => [0 => ["data" => [0 =>         // line 134
(isset($context["userInformationWidget"]) || array_key_exists("userInformationWidget", $context) ? $context["userInformationWidget"] : (function () { throw new RuntimeError('Variable "userInformationWidget" does not exist.', 134, $this->source); })())]], 1 => ["data" => [0 =>         // line 135
(isset($context["apiKeyWidget"]) || array_key_exists("apiKeyWidget", $context) ? $context["apiKeyWidget"] : (function () { throw new RuntimeError('Variable "apiKeyWidget" does not exist.', 135, $this->source); })())]]]]];
        // line 139
        echo "
    ";
        // line 140
        $context["id"] = "userView";
        // line 141
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 141, $this->source); })())];
        // line 142
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
        return "@OroUser/User/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 142,  447 => 141,  445 => 140,  442 => 139,  440 => 135,  439 => 134,  437 => 130,  434 => 129,  430 => 127,  428 => 123,  426 => 121,  423 => 120,  420 => 119,  416 => 117,  414 => 115,  412 => 113,  409 => 112,  396 => 111,  379 => 108,  375 => 107,  369 => 106,  362 => 105,  359 => 104,  351 => 102,  348 => 101,  345 => 100,  333 => 98,  330 => 97,  327 => 96,  314 => 95,  300 => 92,  297 => 91,  291 => 89,  285 => 87,  283 => 86,  278 => 85,  276 => 84,  273 => 83,  267 => 81,  261 => 79,  259 => 78,  254 => 76,  251 => 75,  248 => 74,  235 => 73,  221 => 70,  219 => 68,  218 => 66,  217 => 65,  215 => 64,  202 => 63,  187 => 60,  184 => 59,  182 => 57,  181 => 54,  179 => 53,  166 => 52,  151 => 48,  149 => 47,  148 => 45,  147 => 41,  145 => 40,  142 => 39,  138 => 37,  135 => 34,  133 => 33,  130 => 32,  128 => 30,  126 => 29,  123 => 28,  120 => 27,  116 => 25,  113 => 20,  111 => 19,  108 => 18,  106 => 14,  104 => 13,  101 => 12,  98 => 11,  96 => 10,  93 => 9,  90 => 8,  77 => 7,  63 => 1,  61 => 5,  58 => 4,  56 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% set fullname = entity|oro_format_name|default('N/A'|trans) %}
{% oro_title_set({params : {\"%username%\": fullname }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% placeholder view_navButtons with {entity: entity} %}
    {% if isDesktopVersion() %}
        {% if is_granted('CONFIGURE', entity) and not isProfileView %}
            {{ UI.button({
                'path' : path('oro_user_config', { 'id': entity.id }),
                'label': 'oro.user.user_configuration.label'|trans,
                'title': 'oro.user.user_configuration.label'|trans,
                'iCss': 'fa-cog',
            }) }}
        {% elseif isProfileView and is_granted('update_own_configuration') %}
            {{ UI.button({
                'path' : path('oro_user_profile_configuration'),
                'label': 'oro.user.user_configuration.label'|trans,
                'title': 'oro.user.user_configuration.label'|trans,
                'iCss': 'fa-cog',
            }) }}
        {% endif %}
    {% endif %}
    {% if is_granted('EDIT', entity) and not isProfileView %}
        {{ UI.editButton({
            'path' : path('oro_user_update', { id: entity.id }),
            'entity_label': 'oro.user.entity_label'|trans
        }) }}
    {% elseif isProfileView and is_granted('update_own_profile') %}
        {{ UI.editButton({
            'path': path('oro_user_profile_update'),
            'entity_label': 'profile'|trans
        }) }}
    {% endif %}
    {% if is_granted('DELETE', entity) and entity.id != app.user.id %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_user', {'id': entity.id}),
            'dataRedirect': path('oro_user_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-user',
            'dataId': entity.id,
            'entity_label': 'oro.user.entity_label'|trans,
            'disabled': not allow_delete
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_user_index'),
        'indexLabel':  'oro.user.entity_plural_label'|trans,
        'entityTitle': fullname,
    } %}

    {{ parent() }}
{% endblock pageHeader %}

{% block pageTitleIcon %}
    <div class=\"page-title__icon\">
        {%- include '@OroAttachment/Twig/picture.html.twig' with {
            file: entity.avatar,
            filter: 'avatar_med',
            img_attrs: { alt: entity|oro_format_name }
        } -%}
    </div>
{% endblock %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <span class=\"page-title__status\">
        {% if entity.enabled %}
            {{ UI.badge('oro.user.enabled.enabled'|trans, 'enabled') }}
        {% else %}
            {{ UI.badge('oro.user.enabled.disabled'|trans, 'disabled') }}
        {% endif %}

        {% if entity.authStatus.id == 'expired' %}
            {{ UI.badge(entity.authStatus.name, 'disabled', 'fa-unlock-alt') }}
        {% elseif entity.authStatus.id == 'active' %}
            {{ UI.badge(entity.authStatus.name, 'enabled', 'fa-unlock') }}
        {% else %}
            {{ UI.badge(entity.authStatus.name, 'tentatively', 'fa-lock') }}
        {% endif %}
        {% placeholder view_page_title_status with {entity: entity} %}
    </span>
{% endblock breadcrumbs %}

{% block stats %}
    {% if is_granted('oro_view_user_login_attempt') %}
        {% set loginAttempts %}
            {{ 'oro.user.last_login.label'|trans }}: <a title=\"{{ 'oro.user.userloginattempt.entity_description'|trans }}\" href=\"{{ oro_datagrid_link('oro_user_login_attempts', 'user-login-attempts-grid', {'f[user][value]': entity.id}) }}\">{{ entity.lastLogin ? entity.lastLogin|oro_format_datetime : 'N/A'|trans }}</a>
        {% endset %}
    {% else %}
        {% set loginAttempts %}
            {{ 'oro.user.last_login.label'|trans }}: {{ entity.lastLogin ? entity.lastLogin|oro_format_datetime : 'N/A'|trans }}
        {% endset %}
    {% endif %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A'|trans }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A'|trans }}</li>
    <li>{{ loginAttempts }}</li>
    <li>{{ 'oro.user.login_count.label'|trans }}: {{ entity.loginCount|default(0) }}</li>
{% endblock stats %}

{% block content_data %}
    {% set userInformationWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_user_widget_info', {id: entity.id, viewProfile: isProfileView }),
            'separateLayout': false
        }) }}
    {% endset %}
    {% set apiKeyWidget %}
        {% if isProfileView or app.user.id == entity.id or is_granted('MANAGE_API_KEY', entity) %}
            {{ oro_widget_render({
                'widgetType': 'block',
                'url': path('oro_user_apigen', { id: entity.id }),
                'alias': 'user-apikey-gen-widget',
                'elementFirst': true,
                'separateLayout': false
            }) }}
        {% endif %}
    {% endset %}
    {% set dataBlocks = [
        {
            'title': 'General Information'|trans,
            'subblocks': [
                {'data' : [userInformationWidget]},
                {'data' : [apiKeyWidget]},
            ]
        }
    ] %}

    {% set id = 'userView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroUser/User/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/view.html.twig");
    }
}
