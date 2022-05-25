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

/* @OroUser/Role/view.html.twig */
class __TwigTemplate_f15eee60a23d9df5c405b79e4ddb43ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'navButtonContainer' => [$this, 'block_navButtonContainer'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_data' => [$this, 'block_content_data'],
            'stats' => [$this, 'block_stats'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Role/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Role/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Role/view.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroUser/Role/view.html.twig", 2)->unwrap();
        // line 3
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Role/view.html.twig", 3)->unwrap();
        // line 4
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroUser/Role/view.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%role%" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6)]]);
        // line 8
        $context["gridName"] = "role-view-users-grid";
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroUser/Role/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 11
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 15
($context["entity"] ?? null), "label", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "label", [], "any", false, false, false, 15), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))];
        // line 17
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 20
    public function block_navButtonContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtonContainer", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtonContainer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtonContainer"));

        // line 21
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Role/view.html.twig", 21)->unwrap();
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('navButtons', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 24
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_navButtons", $context)) ? (_twig_default_filter((isset($context["view_navButtons"]) || array_key_exists("view_navButtons", $context) ? $context["view_navButtons"] : (function () { throw new RuntimeError('Variable "view_navButtons" does not exist.', 24, $this->source); })()), "view_navButtons")) : ("view_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })())]);
        // line 25
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", true, true, false, 25) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })())))) {
            // line 26
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_role", ["id" => twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "id" => "btn-remove-role", "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_label"), "disabled" =>  !            // line 33
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 33, $this->source); })())]], 26, $context, $this->getSourceContext());
            // line 35
            echo "
        ";
        }
        // line 37
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 41
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Role/view.html.twig", 41)->unwrap();
        // line 42
        echo "
    ";
        // line 43
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["data" => [0 => twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.role.label"), twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "label", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext())]]]]];
        // line 53
        echo "
    ";
        // line 54
        ob_start();
        // line 55
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "organization", [], "any", true, true, false, 55)) {
            // line 56
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.organization.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "organization", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 58
        echo "        ";
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.extend_description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "extendDescription", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext());
        echo "
        ";
        // line 59
        $context["ignoredFields"] = [0 => "organization", 1 => "extend_description"];
        // line 60
        echo "        ";
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 60, $this->source); })()), (isset($context["ignoredFields"]) || array_key_exists("ignoredFields", $context) ? $context["ignoredFields"] : (function () { throw new RuntimeError('Variable "ignoredFields" does not exist.', 60, $this->source); })())], 60, $context, $this->getSourceContext());
        echo "
    ";
        $context["additionalBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
    ";
        // line 63
        ob_start();
        // line 64
        echo "        ";
        $context["entityTabPanelId"] = uniqid("entity-tab-panel-");
        // line 65
        echo "        ";
        $context["tabsOptions"] = twig_array_merge((isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 65, $this->source); })()), ["controlTabPanel" =>         // line 66
(isset($context["entityTabPanelId"]) || array_key_exists("entityTabPanelId", $context) ? $context["entityTabPanelId"] : (function () { throw new RuntimeError('Variable "entityTabPanelId" does not exist.', 66, $this->source); })())]);
        // line 68
        echo "
        <div ";
        // line 69
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 71
(isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 71, $this->source); })())]], 69, $context, $this->getSourceContext());
        // line 72
        echo "></div>
        <div id=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["entityTabPanelId"]) || array_key_exists("entityTabPanelId", $context) ? $context["entityTabPanelId"] : (function () { throw new RuntimeError('Variable "entityTabPanelId" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-content\" role=\"tabpanel\">
            ";
        // line 74
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["role-permission-grid", ["role" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })())], ["cssClass" => "inner-permissions-grid", "themeOptions" => ["readonly" => true]]], 74, $context, $this->getSourceContext());
        echo "
            <div ";
        // line 75
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 77
(isset($context["capabilitySetOptions"]) || array_key_exists("capabilitySetOptions", $context) ? $context["capabilitySetOptions"] : (function () { throw new RuntimeError('Variable "capabilitySetOptions" does not exist.', 77, $this->source); })())]], 75, $context, $this->getSourceContext());
        // line 78
        echo "></div>
        </div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "
    ";
        // line 82
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 82, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional"), "subblocks" => [0 => ["data" => [0 =>         // line 86
(isset($context["additionalBlock"]) || array_key_exists("additionalBlock", $context) ? $context["additionalBlock"] : (function () { throw new RuntimeError('Variable "additionalBlock" does not exist.', 86, $this->source); })())]]]]]);
        // line 90
        echo "
    ";
        // line 91
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 91, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Entity"), "subblocks" => [0 => ["data" => [0 =>         // line 95
(isset($context["rolePermissionsGrid"]) || array_key_exists("rolePermissionsGrid", $context) ? $context["rolePermissionsGrid"] : (function () { throw new RuntimeError('Variable "rolePermissionsGrid" does not exist.', 95, $this->source); })())]]]]]);
        // line 99
        echo "
    ";
        // line 100
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 100, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label"), "subblocks" => [0 => ["title" => null, "useSpan" => false, "data" => [0 => twig_call_macro($macros["dataGrid"], "macro_renderGrid", [        // line 106
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 106, $this->source); })()), ["role_id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)], ["cssClass" => "inner-grid"]], 106, $context, $this->getSourceContext())]]]]]);
        // line 110
        echo "
    ";
        // line 111
        $context["id"] = "user-role-view";
        // line 112
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 112, $this->source); })())];
        // line 113
        echo "
    ";
        // line 114
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 117
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 117));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 118
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/Role/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 118,  317 => 117,  302 => 114,  299 => 113,  296 => 112,  294 => 111,  291 => 110,  289 => 106,  288 => 100,  285 => 99,  283 => 95,  282 => 91,  279 => 90,  277 => 86,  276 => 82,  273 => 81,  268 => 78,  266 => 77,  265 => 75,  261 => 74,  257 => 73,  254 => 72,  252 => 71,  251 => 69,  248 => 68,  246 => 66,  244 => 65,  241 => 64,  239 => 63,  236 => 62,  230 => 60,  228 => 59,  223 => 58,  217 => 56,  214 => 55,  212 => 54,  209 => 53,  207 => 48,  206 => 43,  203 => 42,  200 => 41,  187 => 40,  174 => 37,  170 => 35,  168 => 33,  167 => 30,  166 => 27,  164 => 26,  161 => 25,  158 => 24,  133 => 23,  130 => 22,  127 => 21,  114 => 20,  98 => 17,  96 => 15,  95 => 12,  93 => 11,  80 => 10,  66 => 1,  64 => 8,  62 => 6,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

{% oro_title_set({params : {\"%role%\": entity.label }}) %}

{% set gridName = 'role-view-users-grid' %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_user_role_index'),
        'indexLabel': 'oro.user.role.entity_plural_label'|trans,
        'entityTitle': entity.label|default('N/A'|trans)
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block navButtonContainer %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% block navButtons %}
        {% placeholder view_navButtons with {entity: entity} %}
        {% if entity.id is defined and is_granted('DELETE', entity) %}
            {{ UI.deleteButton({
                'dataUrl': path('oro_api_delete_role', {'id': entity.id}),
                'dataRedirect': path('oro_user_role_index'),
                'aCss': 'no-hash remove-button',
                'dataId': entity.id,
                'id': 'btn-remove-role',
                'entity_label': 'oro.user.role.entity_label'|trans,
                'disabled': not allow_delete
            })
            }}
        {% endif %}
    {% endblock navButtons %}
{% endblock navButtonContainer %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set dataBlocks = [
        {
            'title': 'General'|trans,
            'subblocks': [
                {'data' : [
                    UI.renderProperty('oro.user.role.role.label'|trans, entity.label)
                ]}
            ]
        }
    ] %}

    {% set additionalBlock %}
        {% if (entity.organization is defined) %}
            {{ UI.renderProperty('oro.user.role.organization.label'|trans, entity.organization) }}
        {% endif %}
        {{ UI.renderSwitchableHtmlProperty('oro.user.role.extend_description.label'|trans, entity.extendDescription) }}
        {% set ignoredFields = ['organization', 'extend_description'] %}
        {{ entityConfig.renderDynamicFields(entity, entity_class, ignoredFields) }}
    {% endset %}

    {% set rolePermissionsGrid %}
        {% set entityTabPanelId = 'entity-tab-panel-'|uniqid %}
        {% set tabsOptions = tabsOptions|merge({
            controlTabPanel: entityTabPanelId
        }) %}

        <div {{ UI.renderPageComponentAttributes({
            module: 'orouser/js/components/role/entity-category-tabs-component',
            options: tabsOptions
        }) }}></div>
        <div id=\"{{ entityTabPanelId }}\" class=\"tab-content\" role=\"tabpanel\">
            {{ dataGrid.renderGrid('role-permission-grid', {role: entity}, { cssClass: 'inner-permissions-grid', themeOptions: {readonly: true} }) }}
            <div {{ UI.renderPageComponentAttributes({
                module: 'orouser/js/components/role/capability-set-component',
                options: capabilitySetOptions
            }) }}></div>
        </div>
    {% endset %}

    {% set dataBlocks = dataBlocks|merge([{
        'title': 'Additional'|trans,
        'subblocks': [{
            'data': [
                additionalBlock
            ]
        }]
    }]) %}

    {% set dataBlocks = dataBlocks|merge([{
        'title': 'Entity'|trans,
        'subblocks': [{
            'data': [
                rolePermissionsGrid
            ]
        }]
    }]) %}

    {% set dataBlocks = dataBlocks|merge([{
        'title' : 'oro.user.entity_plural_label'|trans,
        'subblocks': [{
            'title' : null,
            'useSpan': false,
            'data' : [
                dataGrid.renderGrid(gridName, {role_id: entity.id}, { cssClass: 'inner-grid' })
            ]
        }]
    }] ) %}

    {% set id = 'user-role-view' %}
    {% set data = {'dataBlocks': dataBlocks} %}

    {{ parent() }}
{% endblock content_data %}

{% block stats %}
    {# Must be empty, because parent view uses this block to render dates, which are not implemented in this entity #}
{% endblock stats %}
", "@OroUser/Role/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Role/view.html.twig");
    }
}
