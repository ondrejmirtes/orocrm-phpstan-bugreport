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

/* @OroDashboard/Index/default.html.twig */
class __TwigTemplate_ae3cce809e255b6293f99ad685ffab71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
            'navButtons' => [$this, 'block_navButtons'],
            'titleNavButtons' => [$this, 'block_titleNavButtons'],
            'widgets_content' => [$this, 'block_widgets_content'],
            'widgets' => [$this, 'block_widgets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroDashboard/Index/default.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Index/default.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Index/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Index/default.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Index/default.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%name%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 3, $this->source); })()), "getLabel", [], "method", false, false, false, 3)]]);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.menu.dashboards_tab.label")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 7, $this->source); })()), "getLabel", [], "method", false, false, false, 7))]];
        // line 9
        echo "    ";
        $this->loadTemplate("@OroNavigation/Menu/breadcrumbs.html.twig", "@OroDashboard/Index/default.html.twig", 9)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        $context["widgetIdPrefix"] = (("dashboard-widget-" . twig_random($this->env)) . "-");
        // line 13
        $context["allowEdit"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 13, $this->source); })()), "entity", [], "any", false, false, false, 13));
        // line 14
        echo "
";
        // line 15
        $context["availableWidgets"] = [];
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["widgetName"] => $context["widget"]) {
            // line 17
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, $context["widget"], "acl", [], "any", true, true, false, 17) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, $context["widget"], "acl", [], "any", false, false, false, 17)))) {
                // line 18
                echo "        ";
                $context["icon"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((twig_get_attribute($this->env, $this->source, $context["widget"], "icon", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "icon", [], "any", false, false, false, 18), "bundles/orodashboard/img/no_icon.png")) : ("bundles/orodashboard/img/no_icon.png")));
                // line 19
                echo "        ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["widget"], "label", [], "any", false, false, false, 19));
                // line 20
                echo "        ";
                $context["description"] = "";
                // line 21
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["widget"], "description", [], "any", true, true, false, 21)) {
                    // line 22
                    echo "            ";
                    $context["description"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["widget"], "description", [], "any", false, false, false, 22));
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                $context["availableWidgets"] = twig_array_merge((isset($context["availableWidgets"]) || array_key_exists("availableWidgets", $context) ? $context["availableWidgets"] : (function () { throw new RuntimeError('Variable "availableWidgets" does not exist.', 24, $this->source); })()), [0 => ["dialogIcon" =>                 // line 25
(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 25, $this->source); })()), "iconClass" => ((twig_get_attribute($this->env, $this->source,                 // line 26
$context["widget"], "icon_class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "icon_class", [], "any", false, false, false, 26), null)) : (null)), "title" =>                 // line 27
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 27, $this->source); })()), "widgetName" =>                 // line 28
$context["widgetName"], "description" =>                 // line 29
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 29, $this->source); })()), "isNew" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["widget"], "isNew", [], "any", false, false, false, 30), "configurationDialogOptions" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["widget"], "configuration_dialog_options", [], "any", false, false, false, 31)]]);
                // line 33
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetName'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        $context["widgetIds"] = [];
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 37, $this->source); })()), "widgets", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 38
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, true, false, 38), "acl", [], "any", true, true, false, 38) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, false, false, 38), "acl", [], "any", false, false, false, 38)))) {
                // line 39
                echo "        ";
                $context["widgetIds"] = twig_array_merge((isset($context["widgetIds"]) || array_key_exists("widgetIds", $context) ? $context["widgetIds"] : (function () { throw new RuntimeError('Variable "widgetIds" does not exist.', 39, $this->source); })()), [0 => ((isset($context["widgetIdPrefix"]) || array_key_exists("widgetIdPrefix", $context) ? $context["widgetIdPrefix"] : (function () { throw new RuntimeError('Variable "widgetIdPrefix" does not exist.', 39, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 39))]);
                // line 40
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        // line 43
        $context["dashboardContainerOptions"] = ["widgetIds" =>         // line 44
(isset($context["widgetIds"]) || array_key_exists("widgetIds", $context) ? $context["widgetIds"] : (function () { throw new RuntimeError('Variable "widgetIds" does not exist.', 44, $this->source); })()), "dashboardId" => twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "columnsSelector" => ".dashboard-column", "allowEdit" => ((        // line 47
(isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 47, $this->source); })())) ? ("true") : ("false")), "availableWidgets" =>         // line 48
(isset($context["availableWidgets"]) || array_key_exists("availableWidgets", $context) ? $context["availableWidgets"] : (function () { throw new RuntimeError('Variable "availableWidgets" does not exist.', 48, $this->source); })())];
        // line 50
        echo "
";
        // line 51
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Index/default.html.twig", 51)->unwrap();
        // line 52
        echo "
<div class=\"layout-content dashboard-container-wrapper\" ";
        // line 53
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/app/views/dashboard-container-view", "options" =>         // line 55
(isset($context["dashboardContainerOptions"]) || array_key_exists("dashboardContainerOptions", $context) ? $context["dashboardContainerOptions"] : (function () { throw new RuntimeError('Variable "dashboardContainerOptions" does not exist.', 55, $this->source); })())]], 53, $context, $this->getSourceContext());
        // line 56
        echo ">
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                ";
        // line 60
        $this->displayBlock('title', $context, $blocks);
        // line 69
        echo "
                ";
        // line 70
        $this->displayBlock('navButtons', $context, $blocks);
        // line 89
        echo "
                ";
        // line 90
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 148
        echo "            </div>
        </div>
    </div>
    ";
        // line 151
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 181
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("title", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 61
        echo "                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">
                            ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 64, $this->source); })()), "getLabel", [], "method", false, false, false, 64)), "html", null, true);
        echo "
                        </h1>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 71
        echo "                    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Index/default.html.twig", 71)->unwrap();
        // line 72
        echo "
                    ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 73, $this->source); })())) > 1)) {
            // line 74
            echo "                        <div class=\"dashboard-selector-container pull-right\">
                            <label for=\"dashboard_selector\">";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                            <select id=\"dashboard_selector\" ";
            // line 76
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/app/views/dashboard-change-view"]], 76, $context, $this->getSourceContext());
            // line 78
            echo ">
                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 80
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dashboardModel"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["dashboardModel"], "id", [], "any", false, false, false, 80) == twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                        ";
                // line 81
                $context["translatedLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["dashboardModel"], "getLabel", [], "method", false, false, false, 81));
                // line 82
                echo "                                        ";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["translatedLabel"]) || array_key_exists("translatedLabel", $context) ? $context["translatedLabel"] : (function () { throw new RuntimeError('Variable "translatedLabel" does not exist.', 82, $this->source); })())) <= 50)) ? ((isset($context["translatedLabel"]) || array_key_exists("translatedLabel", $context) ? $context["translatedLabel"] : (function () { throw new RuntimeError('Variable "translatedLabel" does not exist.', 82, $this->source); })())) : ((twig_trim_filter(twig_slice($this->env, (isset($context["translatedLabel"]) || array_key_exists("translatedLabel", $context) ? $context["translatedLabel"] : (function () { throw new RuntimeError('Variable "translatedLabel" does not exist.', 82, $this->source); })()), 0, 50), null, "right") . "..."))), "html", null, true);
                echo "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                            </select>
                        </div>
                    ";
        }
        // line 88
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 90
    public function block_titleNavButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("titleNavButtons", $this->getTemplateName(), 90));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleNavButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleNavButtons"));

        // line 91
        echo "
                    ";
        // line 92
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_before"]) || array_key_exists("dashboard_navButtons_before", $context) ? $context["dashboard_navButtons_before"] : (function () { throw new RuntimeError('Variable "dashboard_navButtons_before" does not exist.', 92, $this->source); })()), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 93
        echo "
                    <div class=\"pull-right title-buttons-container\">
                        ";
        // line 95
        if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 95, $this->source); })())) {
            // line 96
            echo "                            <a href=\"#\" class=\"dashboard-widgets-add btn main-group\">
                                <span class=\"fa-plus\"></span>";
            // line 98
            echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.add_dashboard_widgets.add_widget")), "html", null, true);
            // line 99
            echo "</a>
                        ";
        }
        // line 101
        echo "
                        ";
        // line 102
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 102, $this->source); })()), "entity", [], "any", false, false, false, 102)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dashboard_create")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 102, $this->source); })()), "entity", [], "any", false, false, false, 102)))) {
            // line 103
            echo "                            ";
            ob_start();
            // line 104
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 104, $this->source); })()), "entity", [], "any", false, false, false, 104))) {
                // line 105
                echo "                                    ";
                echo twig_call_macro($macros["UI"], "macro_dropdownItem", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_update", ["id" => twig_get_attribute($this->env, $this->source,                 // line 106
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.edit_dashboard_link.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.edit_dashboard_link.text"), "aCss" => "dropdown-item", "iCss" => "fa-pencil-square-o"]], 105, $context, $this->getSourceContext());
                // line 111
                echo "
                                ";
            }
            // line 113
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dashboard_create")) {
                // line 114
                echo "                                    ";
                echo twig_call_macro($macros["UI"], "macro_dropdownItem", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_create"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.create_dashboard_link.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.create_dashboard_link.text"), "aCss" => "dropdown-item", "iCss" => "fa-plus"]], 114, $context, $this->getSourceContext());
                // line 120
                echo "
                                ";
            }
            // line 122
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 122, $this->source); })()), "entity", [], "any", false, false, false, 122))) {
                // line 123
                echo "                                    <li>
                                        ";
                // line 124
                echo twig_call_macro($macros["UI"], "macro_deleteLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_dashboard", ["id" => twig_get_attribute($this->env, $this->source,                 // line 125
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_index"), "aCss" => "no-hash remove-button dropdown-item", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source,                 // line 129
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.entity_label")]], 124, $context, $this->getSourceContext());
                // line 131
                echo "
                                    </li>
                                ";
            }
            // line 134
            echo "                            ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 135
            echo "
                            ";
            // line 136
            echo twig_call_macro($macros["UI"], "macro_dropdownButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.tools_dropdown.label"), "iCss" => "fa-cog", "aCss" => "pull-right", "html" =>             // line 140
(isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 140, $this->source); })())]], 136, $context, $this->getSourceContext());
            // line 141
            echo "
                        ";
        }
        // line 143
        echo "                    </div>

                    ";
        // line 145
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_after"]) || array_key_exists("dashboard_navButtons_after", $context) ? $context["dashboard_navButtons_after"] : (function () { throw new RuntimeError('Variable "dashboard_navButtons_after" does not exist.', 145, $this->source); })()), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 146
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 151
    public function block_widgets_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widgets_content", $this->getTemplateName(), 151));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets_content"));

        // line 152
        echo "        ";
        $context["contentClass"] = ((array_key_exists("contentClass", $context)) ? (_twig_default_filter((isset($context["contentClass"]) || array_key_exists("contentClass", $context) ? $context["contentClass"] : (function () { throw new RuntimeError('Variable "contentClass" does not exist.', 152, $this->source); })()), "dashboard-container")) : ("dashboard-container"));
        // line 153
        echo "        <div class=\"scrollable-container\">
            <div class=\"responsive-section ";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["contentClass"]) || array_key_exists("contentClass", $context) ? $context["contentClass"] : (function () { throw new RuntimeError('Variable "contentClass" does not exist.', 154, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"clearfix\">
                ";
        // line 156
        $this->displayBlock('widgets', $context, $blocks);
        // line 177
        echo "                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 156
    public function block_widgets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widgets", $this->getTemplateName(), 156));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 157
        echo "                    ";
        $macros["dashboardMacros"] = $this;
        // line 158
        echo "                    ";
        echo twig_call_macro($macros["dashboardMacros"], "macro_renderWidgetsColumn", [["widgets" => twig_get_attribute($this->env, $this->source,         // line 160
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 160, $this->source); })()), "getOrderedColumnWidgets", [0 => 0, 1 => false, 2 => true], "method", false, false, false, 160), "columnElementId" => "dashboard-column-0", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 163
(isset($context["widgetIdPrefix"]) || array_key_exists("widgetIdPrefix", $context) ? $context["widgetIdPrefix"] : (function () { throw new RuntimeError('Variable "widgetIdPrefix" does not exist.', 163, $this->source); })()), "allowEdit" =>         // line 164
(isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 164, $this->source); })())]], 159, $context, $this->getSourceContext());
        // line 166
        echo "
                    ";
        // line 167
        echo twig_call_macro($macros["dashboardMacros"], "macro_renderWidgetsColumn", [["widgets" => twig_get_attribute($this->env, $this->source,         // line 169
(isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 169, $this->source); })()), "getOrderedColumnWidgets", [0 => 1, 1 => true, 2 => false], "method", false, false, false, 169), "columnElementId" => "dashboard-column-1", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 172
(isset($context["widgetIdPrefix"]) || array_key_exists("widgetIdPrefix", $context) ? $context["widgetIdPrefix"] : (function () { throw new RuntimeError('Variable "widgetIdPrefix" does not exist.', 172, $this->source); })()), "allowEdit" =>         // line 173
(isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 173, $this->source); })())]], 168, $context, $this->getSourceContext());
        // line 175
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 184
    public function macro_renderWidgetsColumn($__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetsColumn"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetsColumn"));

            // line 185
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 185, $this->source); })()), "columnElementId", [], "any", false, false, false, 185), "html", null, true);
            echo "\" class=\"responsive-cell dashboard-column\">
        ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 186, $this->source); })()), "widgets", [], "any", false, false, false, 186));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 187
                echo "            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, true, false, 187), "acl", [], "any", true, true, false, 187) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, false, false, 187), "acl", [], "any", false, false, false, 187)))) {
                    // line 188
                    echo "                ";
                    echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "dashboard-item", "wid" => (twig_get_attribute($this->env, $this->source,                     // line 191
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 191, $this->source); })()), "widgetIdPrefix", [], "any", false, false, false, 191) . twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 191)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 192
$context["widget"], "config", [], "any", false, false, false, 192), "route", [], "any", false, false, false, 192), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, false, false, 192), "route_parameters", [], "any", false, false, false, 192), ["_widgetId" => twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 192)])), "state" => ["id" => twig_get_attribute($this->env, $this->source,                     // line 194
$context["widget"], "id", [], "any", false, false, false, 194), "expanded" => twig_get_attribute($this->env, $this->source,                     // line 195
$context["widget"], "expanded", [], "any", false, false, false, 195), "layoutPosition" => twig_get_attribute($this->env, $this->source,                     // line 196
$context["widget"], "layoutPosition", [], "any", false, false, false, 196)], "allowEdit" => twig_get_attribute($this->env, $this->source,                     // line 198
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 198, $this->source); })()), "allowEdit", [], "any", false, false, false, 198), "showConfig" => (twig_get_attribute($this->env, $this->source,                     // line 199
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 199, $this->source); })()), "allowEdit", [], "any", false, false, false, 199) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["widget"], "config", [], "any", false, false, false, 199), "configuration", [], "any", false, false, false, 199)) > 0)), "widgetName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 200
$context["widget"], "entity", [], "any", false, false, false, 200), "name", [], "any", false, false, false, 200), "configurationDialogOptions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 201
$context["widget"], "config", [], "any", false, false, false, 201), "configuration_dialog_options", [], "any", false, false, false, 201)]);
                    // line 203
                    echo "
            ";
                }
                // line 205
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "        <div class=\"empty-text";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 206, $this->source); })()), "widgets", [], "any", false, false, false, 206)) > 0)) {
                echo " hidden-empty-text";
            }
            echo "\">
            <div class=\"widget-placeholder\">
                ";
            // line 208
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 208, $this->source); })()), "allowEdit", [], "any", false, false, false, 208)) {
                // line 209
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.empty_column_message.allowed");
                echo "
                ";
            } else {
                // line 211
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.empty_column_message.denied"), "html", null, true);
                echo "
                ";
            }
            // line 213
            echo "            </div>
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

    public function getTemplateName()
    {
        return "@OroDashboard/Index/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 213,  628 => 211,  622 => 209,  620 => 208,  612 => 206,  606 => 205,  602 => 203,  600 => 201,  599 => 200,  598 => 199,  597 => 198,  596 => 196,  595 => 195,  594 => 194,  593 => 192,  592 => 191,  590 => 188,  587 => 187,  583 => 186,  578 => 185,  559 => 184,  545 => 175,  543 => 173,  542 => 172,  541 => 169,  540 => 167,  537 => 166,  535 => 164,  534 => 163,  533 => 160,  531 => 158,  528 => 157,  515 => 156,  499 => 177,  497 => 156,  492 => 154,  489 => 153,  486 => 152,  473 => 151,  459 => 146,  457 => 145,  453 => 143,  449 => 141,  447 => 140,  446 => 136,  443 => 135,  440 => 134,  435 => 131,  433 => 129,  432 => 125,  431 => 124,  428 => 123,  425 => 122,  421 => 120,  418 => 114,  415 => 113,  411 => 111,  409 => 106,  407 => 105,  404 => 104,  401 => 103,  399 => 102,  396 => 101,  392 => 99,  390 => 98,  387 => 96,  385 => 95,  381 => 93,  379 => 92,  376 => 91,  363 => 90,  350 => 88,  345 => 85,  335 => 82,  333 => 81,  324 => 80,  320 => 79,  317 => 78,  315 => 76,  311 => 75,  308 => 74,  306 => 73,  303 => 72,  300 => 71,  287 => 70,  269 => 64,  264 => 61,  251 => 60,  237 => 181,  235 => 151,  230 => 148,  228 => 90,  225 => 89,  223 => 70,  220 => 69,  218 => 60,  212 => 56,  210 => 55,  209 => 53,  206 => 52,  204 => 51,  201 => 50,  199 => 48,  198 => 47,  197 => 45,  196 => 44,  195 => 43,  192 => 42,  185 => 40,  182 => 39,  179 => 38,  175 => 37,  173 => 36,  170 => 35,  163 => 33,  161 => 31,  160 => 30,  159 => 29,  158 => 28,  157 => 27,  156 => 26,  155 => 25,  153 => 24,  150 => 23,  147 => 22,  144 => 21,  141 => 20,  138 => 19,  135 => 18,  132 => 17,  128 => 16,  126 => 15,  123 => 14,  121 => 13,  119 => 12,  106 => 11,  92 => 9,  90 => 7,  88 => 5,  75 => 4,  62 => 1,  60 => 3,  57 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroUI/macros.html.twig' as UI %}
{% oro_title_set({params : {\"%name%\": dashboard.getLabel() }}) %}
{% block breadcrumb %}
    {% set breadcrumbs = [
        {'label': 'oro.dashboard.menu.dashboards_tab.label'|trans },
        {'label': dashboard.getLabel()|trans }
    ] %}
    {% include '@OroNavigation/Menu/breadcrumbs.html.twig' %}
{% endblock breadcrumb %}
{% block content %}
{% set widgetIdPrefix = 'dashboard-widget-' ~ random() ~ '-' %}
{% set allowEdit = is_granted('EDIT', dashboard.entity) %}

{% set availableWidgets = [] %}
{% for widgetName, widget in widgets %}
    {% if widget.acl is not defined or is_granted(widget.acl) %}
        {% set icon = asset(widget.icon|default(\"bundles/orodashboard/img/no_icon.png\")) %}
        {% set title = widget.label|trans %}
        {% set description = '' %}
        {% if widget.description is defined %}
            {% set description = widget.description|trans %}
        {% endif %}
        {% set availableWidgets = availableWidgets|merge([{
            'dialogIcon': icon,
            'iconClass': widget.icon_class|default(null),
            'title': title,
            'widgetName': widgetName,
            'description': description,
            'isNew': widget.isNew,
            'configurationDialogOptions':  widget.configuration_dialog_options
        }]) %}
    {% endif %}
{% endfor %}

{% set widgetIds = [] %}
{% for widget in dashboard.widgets %}
    {% if widget.config.acl is not defined or is_granted(widget.config.acl) %}
        {% set widgetIds = widgetIds|merge([widgetIdPrefix ~ widget.id]) %}
    {% endif %}
{% endfor %}

{% set dashboardContainerOptions = {
    widgetIds: widgetIds,
    dashboardId: dashboard.id,
    columnsSelector: '.dashboard-column',
    allowEdit: allowEdit ? 'true' : 'false',
    availableWidgets: availableWidgets
} %}

{% import '@OroUI/macros.html.twig' as UI %}

<div class=\"layout-content dashboard-container-wrapper\" {{ UI.renderPageComponentAttributes({
    view: 'orodashboard/js/app/views/dashboard-container-view',
    options: dashboardContainerOptions
}) }}>
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                {% block title %}
                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">
                            {{ dashboard.getLabel()|trans }}
                        </h1>
                    </div>
                </div>
                {% endblock title %}

                {% block navButtons %}
                    {% import '@OroUI/macros.html.twig' as UI %}

                    {% if dashboards|length > 1 %}
                        <div class=\"dashboard-selector-container pull-right\">
                            <label for=\"dashboard_selector\">{{ 'oro.dashboard.entity_plural_label'|trans }}:</label>
                            <select id=\"dashboard_selector\" {{ UI.renderPageComponentAttributes({
                                view: 'orodashboard/js/app/views/dashboard-change-view'
                            }) }}>
                                {% for dashboardModel in dashboards %}
                                    <option value=\"{{ dashboardModel.id }}\"{% if dashboardModel.id == dashboard.id %} selected=\"selected\"{% endif %}>
                                        {% set translatedLabel = dashboardModel.getLabel()|trans %}
                                        {{ translatedLabel|length <= 50 ? translatedLabel : translatedLabel|slice(0, 50)|trim(side='right') ~ '...' }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    {% endif %}
                {% endblock navButtons %}

                {% block titleNavButtons %}

                    {% placeholder dashboard_navButtons_before %}

                    <div class=\"pull-right title-buttons-container\">
                        {% if allowEdit %}
                            <a href=\"#\" class=\"dashboard-widgets-add btn main-group\">
                                <span class=\"fa-plus\"></span>
                                {{- 'oro.dashboard.add_dashboard_widgets.add_widget'|trans|trim -}}
                            </a>
                        {% endif %}

                        {% if is_granted('DELETE', dashboard.entity) or is_granted('oro_dashboard_create') or is_granted('EDIT', dashboard.entity) %}
                            {% set html %}
                                {% if is_granted('EDIT', dashboard.entity) %}
                                    {{ UI.dropdownItem({
                                        'path': path('oro_dashboard_update', {id:dashboard.id}),
                                        'title': 'oro.dashboard.edit_dashboard_link.title'|trans,
                                        'label': 'oro.dashboard.edit_dashboard_link.text'|trans,
                                        'aCss': 'dropdown-item',
                                        'iCss': 'fa-pencil-square-o'
                                    }) }}
                                {% endif %}
                                {% if is_granted('oro_dashboard_create') %}
                                    {{ UI.dropdownItem({
                                        'path': path('oro_dashboard_create'),
                                        'title': 'oro.dashboard.create_dashboard_link.title'|trans,
                                        'label': 'oro.dashboard.create_dashboard_link.text'|trans,
                                        'aCss': 'dropdown-item',
                                        'iCss': 'fa-plus'
                                    }) }}
                                {% endif %}
                                {% if is_granted('DELETE', dashboard.entity) %}
                                    <li>
                                        {{  UI.deleteLink({
                                            'dataUrl': path('oro_api_delete_dashboard', {id:dashboard.id}),
                                            'dataRedirect': path('oro_dashboard_index'),
                                            'aCss': 'no-hash remove-button dropdown-item',
                                            'id': 'btn-remove-user',
                                            'dataId': dashboard.id,
                                            'entity_label': 'oro.dashboard.entity_label'|trans
                                        }) }}
                                    </li>
                                {% endif %}
                            {% endset %}

                            {{ UI.dropdownButton({
                                'label': 'oro.dashboard.tools_dropdown.label'|trans,
                                'iCss': 'fa-cog',
                                'aCss': 'pull-right',
                                'html': html
                            }) }}
                        {% endif %}
                    </div>

                    {% placeholder dashboard_navButtons_after %}

                {% endblock titleNavButtons %}
            </div>
        </div>
    </div>
    {% block widgets_content %}
        {% set contentClass = contentClass|default('dashboard-container') %}
        <div class=\"scrollable-container\">
            <div class=\"responsive-section {{ contentClass }}\">
                <div class=\"clearfix\">
                {% block widgets %}
                    {% import _self as dashboardMacros %}
                    {{
                        dashboardMacros.renderWidgetsColumn({
                            'widgets': dashboard.getOrderedColumnWidgets(0, false, true),
                            'columnElementId': 'dashboard-column-0',
                            'columnClass': 'dashboard-column',
                            'widgetIdPrefix': widgetIdPrefix,
                            'allowEdit': allowEdit
                        })
                    }}
                    {{
                        dashboardMacros.renderWidgetsColumn({
                            'widgets': dashboard.getOrderedColumnWidgets(1, true, false),
                            'columnElementId': 'dashboard-column-1',
                            'columnClass': 'dashboard-column',
                            'widgetIdPrefix': widgetIdPrefix,
                            'allowEdit': allowEdit
                        })
                    }}
                {% endblock widgets %}
                </div>
            </div>
        </div>
    {% endblock widgets_content %}
</div>
{% endblock content %}

{% macro renderWidgetsColumn(options) %}
    <div id=\"{{ options.columnElementId }}\" class=\"responsive-cell dashboard-column\">
        {% for widget in options.widgets %}
            {% if widget.config.acl is not defined or is_granted(widget.config.acl) %}
                {{
                    oro_widget_render({
                        'widgetType': 'dashboard-item',
                        'wid': options.widgetIdPrefix ~ widget.id,
                        'url': path(widget.config.route, widget.config.route_parameters|merge({'_widgetId': widget.id})),
                        'state': {
                            'id': widget.id,
                            'expanded': widget.expanded,
                            'layoutPosition': widget.layoutPosition,
                        },
                        'allowEdit': options.allowEdit,
                        'showConfig': options.allowEdit and widget.config.configuration|length > 0,
                        'widgetName': widget.entity.name,
                        'configurationDialogOptions': widget.config.configuration_dialog_options
                    })
                }}
            {% endif %}
        {% endfor %}
        <div class=\"empty-text{% if options.widgets|length > 0 %} hidden-empty-text{% endif %}\">
            <div class=\"widget-placeholder\">
                {% if options.allowEdit %}
                    {{ 'oro.dashboard.empty_column_message.allowed'|trans|raw }}
                {% else %}
                    {{ 'oro.dashboard.empty_column_message.denied'|trans }}
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}
", "@OroDashboard/Index/default.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Index/default.html.twig");
    }
}
