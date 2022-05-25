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

/* @OroMarketingList/MarketingList/view.html.twig */
class __TwigTemplate_2fa057cea9d9adc8f9f3d7b04af11727 extends Template
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
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingList/MarketingList/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingList/MarketingList/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingList/MarketingList/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 3)->unwrap();
        // line 4
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 4)->unwrap();
        // line 5
        $macros["segmentQD"] = $this->macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 5)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["entity"] ?? null), "name", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7), "N/A")) : ("N/A"))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 10)->unwrap();
        // line 11
        echo "
    ";
        // line 12
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("marketing_list_nav_buttons", $context)) ? (_twig_default_filter((isset($context["marketing_list_nav_buttons"]) || array_key_exists("marketing_list_nav_buttons", $context) ? $context["marketing_list_nav_buttons"] : (function () { throw new RuntimeError('Variable "marketing_list_nav_buttons" does not exist.', 12, $this->source); })()), "marketing_list_nav_buttons")) : ("marketing_list_nav_buttons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })())]);
        // line 13
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13) == twig_constant("Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListType::TYPE_STATIC")) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_post_marketinglist_segment_run", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "segment", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "aCss" => "no-hash run-button btn", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.refresh_list"), "iCss" => "fa-refresh", "dataAttributes" => ["page-component-module" => "orosegment/js/app/components/refresh-button", "page-component-options" => json_encode(["successMessage" => "oro.marketinglist.refresh_dialog.success", "content" => "oro.marketinglist.refresh_dialog.content", "reloadRequired" => true])]]], 14, $context, $this->getSourceContext());
            // line 27
            echo "
    ";
        }
        // line 29
        echo "    ";
        if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })())))) {
            // line 30
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_label")]], 30, $context, $this->getSourceContext());
            // line 33
            echo "
    ";
        }
        // line 35
        echo "    ";
        if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })())))) {
            // line 36
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_marketinglist", ["id" => twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_label")]], 36, $context, $this->getSourceContext());
            // line 43
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 48
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 49
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52)];
        // line 54
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingList/MarketingList/view.html.twig", 58)->unwrap();
        // line 60
        ob_start();
        // line 61
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 63
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
        echo "
                ";
        // line 64
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.union.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "union", [], "any", false, false, false, 64)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 64, $context, $this->getSourceContext());
        echo "
                ";
        // line 65
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.type.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65))], 65, $context, $this->getSourceContext());
        echo "
                ";
        // line 66
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        // line 68
        ob_start();
        // line 69
        echo "<i class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "icon", [], "any", false, false, false, 69), "html", null, true);
        echo " hide-text\"></i>&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "label", [], "any", false, false, false, 69), "html", null, true);
        $context["entityData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity.label"), (isset($context["entityData"]) || array_key_exists("entityData", $context) ? $context["entityData"] : (function () { throw new RuntimeError('Variable "entityData" does not exist.', 72, $this->source); })())], 72, $context, $this->getSourceContext());
        echo "

                ";
        // line 74
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "segment", [], "any", false, false, false, 74))) {
            // line 75
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.entity_label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 77, $this->source); })()), "segment", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 77, $this->source); })()), "segment", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "oro_segment_view"], 77, $context, $this->getSourceContext())], 75, $context, $this->getSourceContext());
            // line 78
            echo "
                ";
        }
        // line 80
        echo "
                ";
        // line 81
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.owner.label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "owner", [], "any", false, false, false, 83), $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "owner", [], "any", false, false, false, 83)), "oro_user_view"], 83, $context, $this->getSourceContext())], 81, $context, $this->getSourceContext());
        // line 84
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 87
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 87, $this->source); })())], 87, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["listInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        ob_start();
        // line 93
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("marketing_list_sync_info", $context)) ? (_twig_default_filter((isset($context["marketing_list_sync_info"]) || array_key_exists("marketing_list_sync_info", $context) ? $context["marketing_list_sync_info"] : (function () { throw new RuntimeError('Variable "marketing_list_sync_info" does not exist.', 93, $this->source); })()), "marketing_list_sync_info")) : ("marketing_list_sync_info")), ["marketingList" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 93, $this->source); })())]);
        $context["syncStatusData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        $context["itemsGridName"] = ((isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 96, $this->source); })()) . "_items");
        // line 97
        echo "    ";
        $context["removedItemsGridName"] = ((isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 97, $this->source); })()) . "_removed_items");
        // line 98
        echo "    ";
        $context["itemsMixin"] = "oro-marketing-list-items-mixin";
        // line 99
        echo "    ";
        $context["removedItemsMixin"] = "oro-marketing-list-removed-items-mixin";
        // line 100
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "manual", [], "any", false, false, false, 100)) {
            // line 101
            echo "        ";
            $context["itemsMixin"] = "oro-marketing-list-manual-items-mixin";
            // line 102
            echo "        ";
            $context["removedItemsMixin"] = "oro-marketing-list-manual-removed-items-mixin";
            // line 103
            echo "    ";
        }
        // line 104
        ob_start();
        // line 105
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["itemsGridName"]) || array_key_exists("itemsGridName", $context) ? $context["itemsGridName"] : (function () { throw new RuntimeError('Variable "itemsGridName" does not exist.', 105, $this->source); })()), ["grid-mixin" => (isset($context["itemsMixin"]) || array_key_exists("itemsMixin", $context) ? $context["itemsMixin"] : (function () { throw new RuntimeError('Variable "itemsMixin" does not exist.', 105, $this->source); })())], ["cssClass" => "inner-grid"]], 105, $context, $this->getSourceContext());
        $context["listData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        ob_start();
        // line 108
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["removedItemsGridName"]) || array_key_exists("removedItemsGridName", $context) ? $context["removedItemsGridName"] : (function () { throw new RuntimeError('Variable "removedItemsGridName" does not exist.', 108, $this->source); })()), ["grid-mixin" => (isset($context["removedItemsMixin"]) || array_key_exists("removedItemsMixin", $context) ? $context["removedItemsMixin"] : (function () { throw new RuntimeError('Variable "removedItemsMixin" does not exist.', 108, $this->source); })())], ["cssClass" => "inner-grid"]], 108, $context, $this->getSourceContext());
        $context["removedItemsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        $context["generalSectionBlocks"] = [0 => ["data" => [0 => (isset($context["listInformation"]) || array_key_exists("listInformation", $context) ? $context["listInformation"] : (function () { throw new RuntimeError('Variable "listInformation" does not exist.', 111, $this->source); })())]]];
        // line 112
        echo "    ";
        if ( !twig_test_empty((isset($context["syncStatusData"]) || array_key_exists("syncStatusData", $context) ? $context["syncStatusData"] : (function () { throw new RuntimeError('Variable "syncStatusData" does not exist.', 112, $this->source); })()))) {
            // line 113
            echo "        ";
            $context["generalSectionBlocks"] = twig_array_merge((isset($context["generalSectionBlocks"]) || array_key_exists("generalSectionBlocks", $context) ? $context["generalSectionBlocks"] : (function () { throw new RuntimeError('Variable "generalSectionBlocks" does not exist.', 113, $this->source); })()), [0 => ["data" => [0 =>             // line 114
(isset($context["syncStatusData"]) || array_key_exists("syncStatusData", $context) ? $context["syncStatusData"] : (function () { throw new RuntimeError('Variable "syncStatusData" does not exist.', 114, $this->source); })())]]]);
            // line 116
            echo "    ";
        }
        // line 117
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.block.general"), "class" => "active", "subblocks" =>         // line 121
(isset($context["generalSectionBlocks"]) || array_key_exists("generalSectionBlocks", $context) ? $context["generalSectionBlocks"] : (function () { throw new RuntimeError('Variable "generalSectionBlocks" does not exist.', 121, $this->source); })())], 1 => ["title" => twig_get_attribute($this->env, $this->source,         // line 124
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 124, $this->source); })()), "plural_label", [], "any", false, false, false, 124), "subblocks" => [0 => ["data" => [0 =>         // line 126
(isset($context["listData"]) || array_key_exists("listData", $context) ? $context["listData"] : (function () { throw new RuntimeError('Variable "listData" does not exist.', 126, $this->source); })())]]]], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.block.removed"), "subblocks" => [0 => ["data" => [0 =>         // line 132
(isset($context["removedItemsGrid"]) || array_key_exists("removedItemsGrid", $context) ? $context["removedItemsGrid"] : (function () { throw new RuntimeError('Variable "removedItemsGrid" does not exist.', 132, $this->source); })())]]]]];
        // line 136
        echo "
    <div data-page-component-module=\"oromarketinglist/js/app/components/grid-linker\"
         data-page-component-options=\"";
        // line 138
        echo twig_escape_filter($this->env, json_encode([0 => ["main" =>         // line 139
(isset($context["itemsGridName"]) || array_key_exists("itemsGridName", $context) ? $context["itemsGridName"] : (function () { throw new RuntimeError('Variable "itemsGridName" does not exist.', 139, $this->source); })()), "secondary" => (isset($context["removedItemsGridName"]) || array_key_exists("removedItemsGridName", $context) ? $context["removedItemsGridName"] : (function () { throw new RuntimeError('Variable "removedItemsGridName" does not exist.', 139, $this->source); })())], 1 => ["main" =>         // line 140
(isset($context["removedItemsGridName"]) || array_key_exists("removedItemsGridName", $context) ? $context["removedItemsGridName"] : (function () { throw new RuntimeError('Variable "removedItemsGridName" does not exist.', 140, $this->source); })()), "secondary" => (isset($context["itemsGridName"]) || array_key_exists("itemsGridName", $context) ? $context["itemsGridName"] : (function () { throw new RuntimeError('Variable "itemsGridName" does not exist.', 140, $this->source); })())]]), "html", null, true);
        // line 141
        echo "\"></div>

    ";
        // line 143
        $context["id"] = "marketingListView";
        // line 144
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 144, $this->source); })())];
        // line 145
        echo "
    ";
        // line 146
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroMarketingList/MarketingList/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 146,  328 => 145,  325 => 144,  323 => 143,  319 => 141,  317 => 140,  316 => 139,  315 => 138,  311 => 136,  309 => 132,  308 => 126,  307 => 124,  306 => 121,  304 => 117,  301 => 116,  299 => 114,  297 => 113,  294 => 112,  292 => 111,  289 => 108,  287 => 107,  284 => 105,  282 => 104,  279 => 103,  276 => 102,  273 => 101,  270 => 100,  267 => 99,  264 => 98,  261 => 97,  259 => 96,  256 => 93,  254 => 92,  248 => 87,  243 => 84,  241 => 83,  240 => 81,  237 => 80,  233 => 78,  231 => 77,  229 => 75,  227 => 74,  222 => 72,  216 => 69,  214 => 68,  212 => 66,  208 => 65,  204 => 64,  200 => 63,  196 => 61,  194 => 60,  191 => 58,  178 => 57,  162 => 54,  160 => 52,  159 => 49,  157 => 48,  144 => 47,  129 => 43,  127 => 41,  126 => 37,  124 => 36,  121 => 35,  117 => 33,  115 => 31,  113 => 30,  110 => 29,  106 => 27,  104 => 15,  102 => 14,  99 => 13,  97 => 12,  94 => 11,  91 => 10,  78 => 9,  64 => 1,  62 => 7,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% import '@OroSegment/macros.html.twig' as segmentQD %}

{% oro_title_set({params : {\"%entityName%\": entity.name|default('N/A') }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% placeholder marketing_list_nav_buttons with {entity: entity} %}
    {% if entity.type.name == constant('Oro\\\\Bundle\\\\MarketingListBundle\\\\Entity\\\\MarketingListType::TYPE_STATIC') and is_granted('EDIT', entity) %}
        {{ UI.clientButton({
            'dataUrl': path('oro_api_post_marketinglist_segment_run', { 'id': entity.segment.id }) ,
            'aCss':   'no-hash run-button btn',
            'label' : 'oro.marketinglist.refresh_list'|trans,
            'iCss':   'fa-refresh',
            'dataAttributes': {
                'page-component-module': 'orosegment/js/app/components/refresh-button',
                'page-component-options': {
                    'successMessage': 'oro.marketinglist.refresh_dialog.success',
                    'content': 'oro.marketinglist.refresh_dialog.content',
                    'reloadRequired': true
                }|json_encode,
            }
        }) }}
    {% endif %}
    {% if isDesktopVersion() and is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path('oro_marketing_list_update', { id: entity.id }),
            'entity_label': 'oro.marketinglist.entity_label'|trans
        }) }}
    {% endif %}
    {% if isDesktopVersion() and is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_marketinglist', {'id': entity.id}),
            'dataRedirect': path('oro_marketing_list_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-user',
            'dataId': entity.id,
            'entity_label': 'oro.marketinglist.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_marketing_list_index'),
        'indexLabel': 'oro.marketinglist.entity_plural_label'|trans,
        'entityTitle': entity.name
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set listInformation -%}
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.marketinglist.name.label'|trans, entity.name) }}
                {{ UI.renderProperty('oro.marketinglist.union.label'|trans, entity.union ? 'Yes'|trans : 'No'|trans) }}
                {{ UI.renderProperty('oro.marketinglist.type.label'|trans, entity.type.label|trans) }}
                {{ UI.renderSwitchableHtmlProperty('oro.marketinglist.description.label'|trans, entity.description) }}

                {%- set entityData -%}
                    <i class=\"{{ config.icon }} hide-text\"></i>&nbsp;{{ config.label }}
                {%- endset -%}

                {{ UI.renderHtmlProperty('oro.marketinglist.entity.label'|trans, entityData) }}

                {% if entity.segment is not empty %}
                    {{ UI.renderHtmlProperty(
                        'oro.segment.entity_label'|trans,
                        UI.entityViewLink(entity.segment, entity.segment.name, 'oro_segment_view')
                    ) }}
                {% endif %}

                {{ UI.renderHtmlProperty(
                    'oro.marketinglist.owner.label'|trans,
                    UI.entityViewLink(entity.owner, entity.owner|oro_format_name, 'oro_user_view')
                ) }}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(entity) }}
            </div>
        </div>
    {%- endset -%}

    {%- set syncStatusData -%}
        {% placeholder marketing_list_sync_info with {marketingList: entity} %}
    {%- endset -%}

    {% set itemsGridName = gridName ~ '_items' %}
    {% set removedItemsGridName = gridName ~ '_removed_items' %}
    {% set itemsMixin = 'oro-marketing-list-items-mixin' %}
    {% set removedItemsMixin = 'oro-marketing-list-removed-items-mixin' %}
    {% if entity.manual %}
        {% set itemsMixin = 'oro-marketing-list-manual-items-mixin' %}
        {% set removedItemsMixin = 'oro-marketing-list-manual-removed-items-mixin' %}
    {% endif %}
    {%- set listData -%}
        {{ dataGrid.renderGrid(itemsGridName, {'grid-mixin': itemsMixin}, {cssClass: 'inner-grid'}) }}
    {%- endset -%}
    {%- set removedItemsGrid -%}
        {{  dataGrid.renderGrid(removedItemsGridName, {'grid-mixin': removedItemsMixin}, {cssClass: 'inner-grid'}) }}
    {%- endset -%}

    {% set generalSectionBlocks = [{'data' : [listInformation]}]%}
    {% if syncStatusData is not empty %}
        {% set generalSectionBlocks = generalSectionBlocks|merge(
            [{'data': [syncStatusData]}]
        ) %}
    {% endif %}
    {% set dataBlocks = [
        {
            'title': 'oro.marketinglist.block.general'|trans,
            'class': 'active',
            'subblocks': generalSectionBlocks
        },
        {
            'title': config.plural_label,
            'subblocks': [
                {'data' : [listData]}
            ]
        },
        {
            'title' : 'oro.marketinglist.block.removed'|trans,
            'subblocks': [
                {'data' : [removedItemsGrid]}
            ]
        }
    ] %}

    <div data-page-component-module=\"oromarketinglist/js/app/components/grid-linker\"
         data-page-component-options=\"{{ [
             {main: itemsGridName, secondary: removedItemsGridName},
             {main: removedItemsGridName, secondary: itemsGridName}
         ]|json_encode }}\"></div>

    {% set id = 'marketingListView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroMarketingList/MarketingList/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingListBundle/Resources/views/MarketingList/view.html.twig");
    }
}
