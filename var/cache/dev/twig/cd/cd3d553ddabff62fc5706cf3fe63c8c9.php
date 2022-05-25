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

/* @OroUser/User/update.html.twig */
class __TwigTemplate_2148f5067c3b9cf16ca0ae60b6cf89a9 extends Template
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
            'stats' => [$this, 'block_stats'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);
        // line 4
        $context["fullname"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)), "N/A");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 5
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 5, $this->source); })()), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_label")]]);
        // line 7
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroUser/User/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 10
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/update.html.twig", 10)->unwrap();
        // line 11
        echo "
    ";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)))) {
            // line 13
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_label"), "disabled" =>  !            // line 20
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 20, $this->source); })())]], 13, $context, $this->getSourceContext());
            // line 21
            echo "
        ";
            // line 22
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 22, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 24
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index")], 24, $context, $this->getSourceContext());
        echo "
    ";
        // line 25
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_user_view", "params" => ["id" => "\$id"]]], 25, $context, $this->getSourceContext());
        // line 29
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_create")) {
            // line 30
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 30, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_user_create"]], 30, $context, $this->getSourceContext()));
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_user_update"))) {
            // line 35
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 35, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_user_update", "params" => ["id" => "\$id"]]], 35, $context, $this->getSourceContext()));
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 40, $this->source); })())]], 40, $context, $this->getSourceContext());
        echo "
    ";
        // line 41
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 45
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label"), "entityTitle" =>             // line 50
(isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 50, $this->source); })())];
            // line 53
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 55
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_label")]);
            // line 56
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroUser/User/update.html.twig", 56)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 56, $this->source); })())]));
            // line 57
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_pageTitleIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageTitleIcon", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitleIcon"));

        // line 61
        echo "    <div class=\"page-title__icon\">";
        // line 62
        $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroUser/User/update.html.twig", 62)->display(twig_array_merge($context, ["file" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "avatar", [], "any", false, false, false, 63), "filter" => "avatar_med", "img_attrs" => ["alt" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65))]]));
        // line 67
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 71
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vars", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), "createdAt", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vars", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), "createdAt", [], "any", false, false, false, 71)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "updatedAt", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "updatedAt", [], "any", false, false, false, 72)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.last_login.label"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "lastLogin", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "lastLogin", [], "any", false, false, false, 73)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 74), "value", [], "any", false, true, false, 74), "loginCount", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 74), "value", [], "any", false, true, false, 74), "loginCount", [], "any", false, false, false, 74), 0)) : (0)), "html", null, true);
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 77
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 77));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 78
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/update.html.twig", 78)->unwrap();
        // line 79
        echo "
<div class=\"user-profile-cols\">
    ";
        // line 81
        $context["id"] = "user-profile";
        // line 82
        echo "
    ";
        // line 83
        $context["formRows"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 84
($context["form"] ?? null), "enabled", [], "any", true, true, false, 84)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "enabled", [], "any", false, false, false, 84), 'row')) : ("")), 1 =>         // line 85
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), 'row'), 2 => ((twig_get_attribute($this->env, $this->source,         // line 86
($context["form"] ?? null), "plainPassword", [], "any", true, true, false, 86)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "plainPassword", [], "any", false, false, false, 86), 'row')) : ("")), 3 =>         // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "namePrefix", [], "any", false, false, false, 87), 'row'), 4 =>         // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "firstName", [], "any", false, false, false, 88), 'row'), 5 =>         // line 89
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "middleName", [], "any", false, false, false, 89), 'row'), 6 =>         // line 90
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "lastName", [], "any", false, false, false, 90), 'row'), 7 =>         // line 91
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "nameSuffix", [], "any", false, false, false, 91), 'row'), 8 =>         // line 92
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "birthday", [], "any", false, false, false, 92), 'row'), 9 =>         // line 93
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "avatar", [], "any", false, false, false, 93), 'row'), 10 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)) ? ("") : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "inviteUser", [], "any", false, false, false, 94), 'row')))];
        // line 96
        echo "
    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "passwordGenerate", [], "any", true, true, false, 97)) {
            // line 98
            echo "        ";
            $context["formRows"] = twig_array_merge((isset($context["formRows"]) || array_key_exists("formRows", $context) ? $context["formRows"] : (function () { throw new RuntimeError('Variable "formRows" does not exist.', 98, $this->source); })()), [0 =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "passwordGenerate", [], "any", false, false, false, 99), 'row')]);
            // line 101
            echo "        <span data-page-component-module=\"orouser/js/components/password-generate\"
              data-page-component-options=\"";
            // line 102
            echo twig_escape_filter($this->env, json_encode(["checkbox" => "[data-name=\"field__password-generate\"]", "passwordInput" => "[data-name=\"field__first\"],[data-name=\"field__second\"]"]), "html", null, true);
            // line 105
            echo "\"></span>
    ";
        }
        // line 107
        echo "
    ";
        // line 108
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["title" => "", "data" =>         // line 113
(isset($context["formRows"]) || array_key_exists("formRows", $context) ? $context["formRows"] : (function () { throw new RuntimeError('Variable "formRows" does not exist.', 113, $this->source); })())], 1 => ["title" => "", "data" => [0 =>         // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'row'), 1 =>         // line 119
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "emails", [], "any", false, false, false, 119), 'form_row_collection'), 2 =>         // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "phone", [], "any", false, false, false, 120), 'row')]]]]];
        // line 125
        echo "
    ";
        // line 126
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 126, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 127
        echo "
    ";
        // line 128
        $context["hasGroups"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "groups", [], "any", true, true, false, 128);
        // line 129
        echo "    ";
        $context["hasRoles"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "userRoles", [], "any", true, true, false, 129);
        // line 130
        echo "    ";
        if (((isset($context["hasGroups"]) || array_key_exists("hasGroups", $context) ? $context["hasGroups"] : (function () { throw new RuntimeError('Variable "hasGroups" does not exist.', 130, $this->source); })()) || (isset($context["hasRoles"]) || array_key_exists("hasRoles", $context) ? $context["hasRoles"] : (function () { throw new RuntimeError('Variable "hasRoles" does not exist.', 130, $this->source); })()))) {
            // line 131
            echo "        ";
            ob_start();
            // line 132
            echo "            ";
            if ((isset($context["hasGroups"]) || array_key_exists("hasGroups", $context) ? $context["hasGroups"] : (function () { throw new RuntimeError('Variable "hasGroups" does not exist.', 132, $this->source); })())) {
                // line 133
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "groups", [], "any", false, false, false, 133), 'row', ["attr" => ["class" => "horizontal"]]);
                echo "
            ";
            }
            // line 135
            echo "        ";
            $context["userGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 136
            echo "
        ";
            // line 137
            ob_start();
            // line 138
            echo "            ";
            if ((isset($context["hasRoles"]) || array_key_exists("hasRoles", $context) ? $context["hasRoles"] : (function () { throw new RuntimeError('Variable "hasRoles" does not exist.', 138, $this->source); })())) {
                // line 139
                echo "                <div class=\"form-horizontal\" id=\"roles-list\">
                    ";
                // line 140
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "userRoles", [], "any", false, false, false, 140), 'row', ["attr" => ["class" => "horizontal"]]);
                echo "
                </div>
            ";
            }
            // line 143
            echo "        ";
            $context["userRoles"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 144
            echo "
        ";
            // line 145
            $context["title"] = "";
            // line 146
            echo "        ";
            if (((isset($context["hasGroups"]) || array_key_exists("hasGroups", $context) ? $context["hasGroups"] : (function () { throw new RuntimeError('Variable "hasGroups" does not exist.', 146, $this->source); })()) && (isset($context["hasRoles"]) || array_key_exists("hasRoles", $context) ? $context["hasRoles"] : (function () { throw new RuntimeError('Variable "hasRoles" does not exist.', 146, $this->source); })()))) {
                // line 147
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%groups% and %roles%", ["%groups%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.groups.label"), "%roles%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.roles.label")]);
                // line 151
                echo "        ";
            } elseif ((isset($context["hasGroups"]) || array_key_exists("hasGroups", $context) ? $context["hasGroups"] : (function () { throw new RuntimeError('Variable "hasGroups" does not exist.', 151, $this->source); })())) {
                // line 152
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.groups.label");
                // line 153
                echo "        ";
            } elseif ((isset($context["hasRoles"]) || array_key_exists("hasRoles", $context) ? $context["hasRoles"] : (function () { throw new RuntimeError('Variable "hasRoles" does not exist.', 153, $this->source); })())) {
                // line 154
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.roles.label");
                // line 155
                echo "        ";
            }
            // line 156
            echo "
        ";
            // line 157
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 157, $this->source); })()), [0 => ["title" =>             // line 158
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 158, $this->source); })()), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 162
(isset($context["userGroups"]) || array_key_exists("userGroups", $context) ? $context["userGroups"] : (function () { throw new RuntimeError('Variable "userGroups" does not exist.', 162, $this->source); })()), 1 => (isset($context["userRoles"]) || array_key_exists("userRoles", $context) ? $context["userRoles"] : (function () { throw new RuntimeError('Variable "userRoles" does not exist.', 162, $this->source); })())]]]]]);
            // line 166
            echo "    ";
        }
        // line 167
        echo "
    ";
        // line 168
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organizations", [], "any", true, true, false, 168)) {
            // line 169
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 169, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Access Settings"), "subblocks" => [0 => ["title" => "", "useSpan" => false, "data" => [0 =>             // line 174
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "organizations", [], "any", false, false, false, 174), 'row')]]]]]);
            // line 177
            echo "    ";
        }
        // line 178
        echo "
    ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "change_password", [], "any", true, true, false, 179)) {
            // line 180
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 180, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.password.label"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 186
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "change_password", [], "any", false, false, false, 186), 'widget')]]]]]);
            // line 191
            echo "    ";
        }
        // line 192
        echo "
    ";
        // line 193
        $context["data"] = ["formErrors" => ((        // line 194
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 195
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 195, $this->source); })())];
        // line 197
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/User/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 197,  467 => 195,  466 => 194,  465 => 193,  462 => 192,  459 => 191,  457 => 186,  455 => 180,  453 => 179,  450 => 178,  447 => 177,  445 => 174,  443 => 169,  441 => 168,  438 => 167,  435 => 166,  433 => 162,  432 => 158,  431 => 157,  428 => 156,  425 => 155,  422 => 154,  419 => 153,  416 => 152,  413 => 151,  410 => 147,  407 => 146,  405 => 145,  402 => 144,  399 => 143,  393 => 140,  390 => 139,  387 => 138,  385 => 137,  382 => 136,  379 => 135,  373 => 133,  370 => 132,  367 => 131,  364 => 130,  361 => 129,  359 => 128,  356 => 127,  354 => 126,  351 => 125,  349 => 120,  348 => 119,  347 => 118,  346 => 113,  345 => 108,  342 => 107,  338 => 105,  336 => 102,  333 => 101,  331 => 99,  329 => 98,  327 => 97,  324 => 96,  322 => 94,  321 => 93,  320 => 92,  319 => 91,  318 => 90,  317 => 89,  316 => 88,  315 => 87,  314 => 86,  313 => 85,  312 => 84,  311 => 83,  308 => 82,  306 => 81,  302 => 79,  300 => 78,  287 => 77,  270 => 74,  264 => 73,  258 => 72,  251 => 71,  238 => 70,  224 => 67,  222 => 65,  221 => 63,  220 => 62,  218 => 61,  205 => 60,  191 => 57,  188 => 56,  185 => 55,  179 => 53,  177 => 50,  176 => 47,  174 => 46,  171 => 45,  158 => 44,  143 => 41,  138 => 40,  135 => 39,  132 => 35,  129 => 34,  126 => 33,  123 => 30,  120 => 29,  118 => 25,  113 => 24,  108 => 22,  105 => 21,  103 => 20,  102 => 18,  101 => 14,  99 => 13,  97 => 12,  94 => 11,  91 => 10,  78 => 9,  64 => 1,  62 => 7,  60 => 5,  57 => 4,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}

{% set fullname = form.vars.value|oro_format_name|default('N/A') %}
{% oro_title_set({params : {\"%username%\": fullname, \"%entityName%\": 'oro.user.entity_label'|trans }}) %}

{% set formAction = form.vars.value.id ? path('oro_user_update', { id: form.vars.value.id}) : path('oro_user_create') %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) and form.vars.value.id != app.user.id %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_user', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_user_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-user',
            'dataId':  form.vars.value.id,
            'entity_label': 'oro.user.entity_label'|trans,
            'disabled': not allow_delete
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_user_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_user_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_user_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_user_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_user_user_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_user_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
    {{ parent() }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_user_index'),
            'indexLabel': 'oro.user.entity_plural_label'|trans,
            'entityTitle': fullname,
        }
        %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.user.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block pageTitleIcon %}
    <div class=\"page-title__icon\">
        {%- include '@OroAttachment/Twig/picture.html.twig' with {
            file: form.vars.value.avatar,
            filter: 'avatar_med',
            img_attrs: { alt: form.vars.value|oro_format_name }
        } -%}
    </div>
{% endblock %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ form.vars.value.createdAt ? form.vars.value.createdAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ form.vars.value.updatedAt ? form.vars.value.updatedAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.user.last_login.label'|trans }}: {{ form.vars.value.lastLogin ? form.vars.value.lastLogin|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.user.login_count.label'|trans }}: {{ form.vars.value.loginCount|default(0) }}</li>
{% endblock stats %}

{% block content_data %}
{% import '@OroUI/macros.html.twig' as UI %}

<div class=\"user-profile-cols\">
    {% set id = 'user-profile' %}

    {% set formRows = [
        form.enabled is defined ? form_row(form.enabled),
        form_row(form.username),
        form.plainPassword is defined ? form_row(form.plainPassword) : '',
        form_row(form.namePrefix),
        form_row(form.firstName),
        form_row(form.middleName),
        form_row(form.lastName),
        form_row(form.nameSuffix),
        form_row(form.birthday),
        form_row(form.avatar),
        form.vars.value.id ? '' : form_row(form.inviteUser),
    ] %}

    {% if form.passwordGenerate is defined %}
        {% set formRows = formRows|merge([
            form_row(form.passwordGenerate)
        ]) %}
        <span data-page-component-module=\"orouser/js/components/password-generate\"
              data-page-component-options=\"{{ {
                  checkbox: '[data-name=\"field__password-generate\"]',
                  passwordInput: '[data-name=\"field__first\"],[data-name=\"field__second\"]'
              }|json_encode }}\"></span>
    {% endif %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'subblocks': [
            {
                'title': '',
                'data': formRows
            },
            {
                'title': '',
                'data': [
                    form_row(form.email),
                    form_row_collection(form.emails),
                    form_row(form.phone),
                ]
            }
        ]
    }] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set hasGroups = form.groups is defined %}
    {% set hasRoles = form.userRoles is defined %}
    {% if hasGroups or hasRoles %}
        {% set userGroups %}
            {% if hasGroups %}
                {{ form_row(form.groups, {attr: { class: 'horizontal' } }) }}
            {% endif %}
        {% endset %}

        {% set userRoles %}
            {% if hasRoles %}
                <div class=\"form-horizontal\" id=\"roles-list\">
                    {{ form_row(form.userRoles, {attr: { class: 'horizontal' } }) }}
                </div>
            {% endif %}
        {% endset %}

        {% set title = '' %}
        {% if hasGroups and hasRoles %}
            {% set title = '%groups% and %roles%'|trans({
                '%groups%' : 'oro.user.groups.label'|trans,
                '%roles%' : 'oro.user.roles.label'|trans
            }) %}
        {% elseif hasGroups %}
            {% set title = 'oro.user.groups.label'|trans %}
        {% elseif hasRoles %}
            {% set title = 'oro.user.roles.label'|trans %}
        {% endif %}

        {% set dataBlocks = dataBlocks|merge( [{
            'title': title,
            'subblocks': [
                {
                    'title': '',
                    'data': [userGroups, userRoles]
                }
            ]
        }] ) %}
    {% endif %}

    {% if form.organizations is defined %}
        {% set dataBlocks = dataBlocks|merge( [{
            'title': 'Access Settings'|trans,
            'subblocks': [{
                'title': '',
                'useSpan': false,
                'data': [form_row(form.organizations)]
            }]
        }] ) %}
    {% endif %}

    {% if form.change_password is defined %}
        {% set dataBlocks = dataBlocks|merge( [{
            'title': 'oro.user.password.label'|trans,
            'subblocks': [
                {
                    'title': '',
                    'data': [
                        form_widget(form.change_password)
                    ]
                }
            ]
        }] ) %}
    {% endif %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
    </div>
{% endblock content_data %}
", "@OroUser/User/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/update.html.twig");
    }
}
