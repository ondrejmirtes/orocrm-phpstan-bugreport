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

/* @OroDataGrid/macros.html.twig */
class __TwigTemplate_deda6d39cec8f209b78896f8ae4efe17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/macros.html.twig"));

        // line 83
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function macro_renderGrid($__name__ = null, $__params__ = [], $__renderParams__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderGrid"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderGrid"));

            // line 10
            echo "    ";
            $context["datagrid"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->getGrid((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 10, $this->source); })()));
            // line 11
            echo "    ";
            if ((isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "_widgetContainer"], "method", false, false, false, 12) == "dialog")) {
                    // line 13
                    echo "            ";
                    $context["renderParams"] = twig_array_merge(["enableViews" => false], (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 13, $this->source); })()));
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_grid_view", [], "any", false, true, false, 15), "_disabled", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 15, $this->source); })()), "_grid_view", [], "any", false, false, false, 15), "_disabled", [], "any", false, false, false, 15))) {
                    // line 16
                    echo "            ";
                    $context["renderParams"] = twig_array_merge((isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 16, $this->source); })()), ["enableViews" => false]);
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "        ";
                $context["metaData"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->getGridMetadata((isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 18, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 18, $this->source); })()));
                // line 19
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "routerEnabled", [], "any", true, true, false, 19)) {
                    // line 20
                    echo "            ";
                    $context["metadataOptions"] = ((twig_get_attribute($this->env, $this->source, ($context["metaData"] ?? null), "options", [], "any", true, true, false, 20)) ? (twig_get_attribute($this->env, $this->source, (isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20)) : ([]));
                    // line 21
                    echo "            ";
                    $context["metadataOptions"] = twig_array_merge((isset($context["metadataOptions"]) || array_key_exists("metadataOptions", $context) ? $context["metadataOptions"] : (function () { throw new RuntimeError('Variable "metadataOptions" does not exist.', 21, $this->source); })()), ["routerEnabled" => twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 21, $this->source); })()), "routerEnabled", [], "any", false, false, false, 21)]);
                    // line 22
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 22, $this->source); })()), ["options" => (isset($context["metadataOptions"]) || array_key_exists("metadataOptions", $context) ? $context["metadataOptions"] : (function () { throw new RuntimeError('Variable "metadataOptions" does not exist.', 22, $this->source); })())]);
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "enableFullScreenLayout", [], "any", true, true, false, 24) && twig_get_attribute($this->env, $this->source,                 // line 25
(isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 25, $this->source); })()), "enableFullScreenLayout", [], "any", false, false, false, 25)) && $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_data_grid.full_screen_layout_enabled"))) {
                    // line 27
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 27, $this->source); })()), ["enableFullScreenLayout" => true]);
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "enableFloatingHeaderPlugin", [], "any", true, true, false, 29)) {
                    // line 30
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 30, $this->source); })()), ["enableFloatingHeaderPlugin" => twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 30, $this->source); })()), "enableFloatingHeaderPlugin", [], "any", false, false, false, 30)]);
                    // line 31
                    echo "        ";
                } else {
                    // line 32
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 32, $this->source); })()), ["enableFloatingHeaderPlugin" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()]);
                    // line 33
                    echo "        ";
                }
                // line 34
                echo "        ";
                $context["metaData"] = twig_array_merge((isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 34, $this->source); })()), ["responsiveGrids" => ["enable" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 36
($context["renderParams"] ?? null), "responsiveGrids", [], "any", false, true, false, 36), "enable", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "responsiveGrids", [], "any", false, true, false, 36), "enable", [], "any", false, false, false, 36), false)) : (false))], "swipeActionsGrid" => ["enable" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 39
($context["renderParams"] ?? null), "swipeActionsGrid", [], "any", false, true, false, 39), "enable", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "swipeActionsGrid", [], "any", false, true, false, 39), "enable", [], "any", false, false, false, 39), false)) : (false))], "rowLinkEnabled" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_data_grid.row_link_enabled")]);
                // line 43
                echo "        ";
                $context["data"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->getGridData((isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 43, $this->source); })()));
                // line 44
                echo "        ";
                $context["gridId"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->generateGridElementId((isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 44, $this->source); })()));
                // line 45
                echo "        ";
                $context["enableFilters"] = ((twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "enableFilters", [], "any", true, true, false, 45)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 45, $this->source); })()), "enableFilters", [], "any", false, false, false, 45)) : (true));
                // line 46
                echo "        ";
                if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile() &&  !twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "enableToggleFilters", [], "any", true, true, false, 46))) {
                    // line 47
                    echo "            ";
                    $context["enableToggleFilters"] = false;
                    // line 48
                    echo "        ";
                } elseif (twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "enableToggleFilters", [], "any", true, true, false, 48)) {
                    // line 49
                    echo "            ";
                    $context["enableToggleFilters"] = twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 49, $this->source); })()), "enableToggleFilters", [], "any", false, false, false, 49);
                    // line 50
                    echo "        ";
                } else {
                    // line 51
                    echo "            ";
                    $context["enableToggleFilters"] = true;
                    // line 52
                    echo "        ";
                }
                // line 53
                echo "        ";
                $context["options"] = ["el" => ("#" .                 // line 54
(isset($context["gridId"]) || array_key_exists("gridId", $context) ? $context["gridId"] : (function () { throw new RuntimeError('Variable "gridId" does not exist.', 54, $this->source); })())), "gridName" => $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName(twig_get_attribute($this->env, $this->source,                 // line 55
(isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, (isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 55, $this->source); })()), "scope", [], "any", false, false, false, 55)), "builders" => twig_array_merge(twig_get_attribute($this->env, $this->source,                 // line 56
(isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 56, $this->source); })()), "jsmodules", [], "any", false, false, false, 56), ((twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "jsmodules", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "jsmodules", [], "any", false, false, false, 56), [])) : ([]))), "metadata" =>                 // line 57
(isset($context["metaData"]) || array_key_exists("metaData", $context) ? $context["metaData"] : (function () { throw new RuntimeError('Variable "metaData" does not exist.', 57, $this->source); })()), "data" =>                 // line 58
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "enableFilters" =>                 // line 59
(isset($context["enableFilters"]) || array_key_exists("enableFilters", $context) ? $context["enableFilters"] : (function () { throw new RuntimeError('Variable "enableFilters" does not exist.', 59, $this->source); })()), "enableToggleFilters" =>                 // line 60
(isset($context["enableToggleFilters"]) || array_key_exists("enableToggleFilters", $context) ? $context["enableToggleFilters"] : (function () { throw new RuntimeError('Variable "enableToggleFilters" does not exist.', 60, $this->source); })()), "filterContainerSelector" => ((twig_get_attribute($this->env, $this->source,                 // line 61
($context["renderParams"] ?? null), "filterContainerSelector", [], "any", true, true, false, 61)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 61, $this->source); })()), "filterContainerSelector", [], "any", false, false, false, 61)) : (null)), "filtersStateElement" => ((twig_get_attribute($this->env, $this->source,                 // line 62
($context["renderParams"] ?? null), "filtersStateElement", [], "any", true, true, false, 62)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 62, $this->source); })()), "filtersStateElement", [], "any", false, false, false, 62)) : (null)), "enableViews" => ((twig_get_attribute($this->env, $this->source,                 // line 63
($context["renderParams"] ?? null), "enableViews", [], "any", true, true, false, 63)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 63, $this->source); })()), "enableViews", [], "any", false, false, false, 63)) : ((isset($context["enableFilters"]) || array_key_exists("enableFilters", $context) ? $context["enableFilters"] : (function () { throw new RuntimeError('Variable "enableFilters" does not exist.', 63, $this->source); })()))), "showViewsInNavbar" => ((twig_get_attribute($this->env, $this->source,                 // line 64
($context["renderParams"] ?? null), "showViewsInNavbar", [], "any", true, true, false, 64)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 64, $this->source); })()), "showViewsInNavbar", [], "any", false, false, false, 64)) : (false)), "showViewsInCustomElement" => ((twig_get_attribute($this->env, $this->source,                 // line 65
($context["renderParams"] ?? null), "showViewsInCustomElement", [], "any", true, true, false, 65)) ? (twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 65, $this->source); })()), "showViewsInCustomElement", [], "any", false, false, false, 65)) : (false)), "inputName" => $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridInputName(twig_get_attribute($this->env, $this->source,                 // line 66
(isset($context["datagrid"]) || array_key_exists("datagrid", $context) ? $context["datagrid"] : (function () { throw new RuntimeError('Variable "datagrid" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66)), "themeOptions" => ((twig_get_attribute($this->env, $this->source,                 // line 67
($context["renderParams"] ?? null), "themeOptions", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "themeOptions", [], "any", false, false, false, 67), [])) : ([])), "toolbarOptions" => ((twig_get_attribute($this->env, $this->source,                 // line 68
($context["renderParams"] ?? null), "toolbarOptions", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "toolbarOptions", [], "any", false, false, false, 68), [])) : ([])), "gridViewsOptions" => ((twig_get_attribute($this->env, $this->source,                 // line 69
($context["renderParams"] ?? null), "gridViewsOptions", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "gridViewsOptions", [], "any", false, false, false, 69), [])) : ([])), "gridBuildersOptions" => ((twig_get_attribute($this->env, $this->source,                 // line 70
($context["renderParams"] ?? null), "gridBuildersOptions", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "gridBuildersOptions", [], "any", false, false, false, 70), [])) : ([]))];
                // line 72
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["gridId"]) || array_key_exists("gridId", $context) ? $context["gridId"] : (function () { throw new RuntimeError('Variable "gridId" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "\"
             data-page-component-module=\"";
                // line 73
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "datagridComponent", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "datagridComponent", [], "any", false, false, false, 73), "orodatagrid/js/app/components/datagrid-component")) : ("orodatagrid/js/app/components/datagrid-component")), "html", null, true);
                echo "\"
             data-page-component-name=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 74, $this->source); })()), "gridName", [], "any", false, false, false, 74), "html", null, true);
                echo "\"
             data-page-component-options=\"";
                // line 75
                echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 75, $this->source); })())), "html", null, true);
                echo "\"
             ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "cssClass", [], "any", true, true, false, 76)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 76, $this->source); })()), "cssClass", [], "any", false, false, false, 76), "html", null, true);
                    echo "\" ";
                }
                echo ">
             ";
                // line 77
                if (((twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "viewLoading", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["renderParams"] ?? null), "viewLoading", [], "any", false, false, false, 77), false)) : (false))) {
                    // line 78
                    echo "                 ";
                    $this->loadTemplate("@OroUI/view_loading.html.twig", "@OroDataGrid/macros.html.twig", 78)->display($context);
                    // line 79
                    echo "             ";
                }
                // line 80
                echo "        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 90
    public function macro_renderBlankCellValue($__parameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderBlankCellValue"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderBlankCellValue"));

            // line 91
            echo "    <span ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", true, true, false, 91)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 91, $this->source); })()), "class", [], "any", false, false, false, 91), "html", null, true);
                echo "\"";
            }
            // line 92
            echo "          aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.datagrid.cell.blank.aria_label"), "html", null, true);
            echo "\"
          data-blank-content=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.datagrid.cell.blank.placeholder"), "html", null, true);
            echo "\"></span>
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
        return "@OroDataGrid/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 93,  279 => 92,  272 => 91,  253 => 90,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  203 => 72,  201 => 70,  200 => 69,  199 => 68,  198 => 67,  197 => 66,  196 => 65,  195 => 64,  194 => 63,  193 => 62,  192 => 61,  191 => 60,  190 => 59,  189 => 58,  188 => 57,  187 => 56,  186 => 55,  185 => 54,  183 => 53,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  168 => 48,  165 => 47,  162 => 46,  159 => 45,  156 => 44,  153 => 43,  151 => 39,  150 => 36,  148 => 34,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  127 => 27,  125 => 25,  123 => 24,  120 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  81 => 10,  60 => 9,  46 => 83,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Renders datagrid widget

    parameters:
        name: datagrid name
        params: additional parameters for url
        renderParams: parameters for grid UI
#}
{% macro renderGrid(name, params = {}, renderParams = {}) %}
    {% set datagrid = oro_datagrid_build(name, params) %}
    {% if datagrid %}
        {% if app.request.get('_widgetContainer') == 'dialog' %}
            {% set renderParams = {'enableViews': false}|merge(renderParams) %}
        {% endif %}
        {% if params._grid_view._disabled is defined and params._grid_view._disabled %}
            {% set renderParams = renderParams|merge({'enableViews': false}) %}
        {% endif %}
        {% set metaData = oro_datagrid_metadata(datagrid, params) %}
        {% if renderParams.routerEnabled is defined %}
            {% set metadataOptions = metaData.options is defined ? metaData.options : {} %}
            {% set metadataOptions = metadataOptions|merge({'routerEnabled': renderParams.routerEnabled}) %}
            {% set metaData = metaData|merge({'options': metadataOptions}) %}
        {% endif %}
        {% if renderParams.enableFullScreenLayout is defined
                and renderParams.enableFullScreenLayout
                and oro_config_value('oro_data_grid.full_screen_layout_enabled') %}
            {% set metaData = metaData|merge({enableFullScreenLayout: true}) %}
        {% endif %}
        {% if renderParams.enableFloatingHeaderPlugin is defined %}
            {% set metaData = metaData|merge({enableFloatingHeaderPlugin: renderParams.enableFloatingHeaderPlugin}) %}
        {% else %}
            {% set metaData = metaData|merge({enableFloatingHeaderPlugin: isMobileVersion()}) %}
        {% endif %}
        {% set metaData = metaData|merge({
            responsiveGrids: {
                enable: renderParams.responsiveGrids.enable|default(false)
            },
            swipeActionsGrid: {
                enable: renderParams.swipeActionsGrid.enable|default(false)
            },
            rowLinkEnabled: oro_config_value('oro_data_grid.row_link_enabled')
        }) %}
        {% set data     = oro_datagrid_data(datagrid) %}
        {% set gridId   = oro_datagrid_generate_element_id(datagrid) %}
        {% set enableFilters = renderParams.enableFilters is defined ? renderParams.enableFilters : true %}
        {% if isMobileVersion() and renderParams.enableToggleFilters is not defined %}
            {% set enableToggleFilters = false %}
        {% elseif renderParams.enableToggleFilters is defined %}
            {% set enableToggleFilters = renderParams.enableToggleFilters %}
        {% else %}
            {% set enableToggleFilters = true %}
        {% endif %}
        {% set options  = {
            el: '#' ~ gridId,
            gridName: oro_datagrid_build_fullname(datagrid.name, datagrid.scope),
            builders: metaData.jsmodules|merge(renderParams.jsmodules|default([])),
            metadata: metaData,
            data: data,
            enableFilters: enableFilters,
            enableToggleFilters: enableToggleFilters,
            filterContainerSelector: renderParams.filterContainerSelector is defined ? renderParams.filterContainerSelector : null,
            filtersStateElement: renderParams.filtersStateElement is defined ? renderParams.filtersStateElement : null,
            enableViews: renderParams.enableViews is defined ? renderParams.enableViews : enableFilters,
            showViewsInNavbar: renderParams.showViewsInNavbar is defined ? renderParams.showViewsInNavbar : false,
            showViewsInCustomElement: renderParams.showViewsInCustomElement is defined ? renderParams.showViewsInCustomElement : false,
            inputName: oro_datagrid_build_inputname(datagrid.name),
            themeOptions: renderParams.themeOptions|default({}),
            toolbarOptions: renderParams.toolbarOptions|default({}),
            gridViewsOptions: renderParams.gridViewsOptions|default({}),
            gridBuildersOptions: renderParams.gridBuildersOptions|default({}),
        } %}
        <div id=\"{{ gridId }}\"
             data-page-component-module=\"{{ renderParams.datagridComponent|default(\"orodatagrid/js/app/components/datagrid-component\") }}\"
             data-page-component-name=\"{{ options.gridName }}\"
             data-page-component-options=\"{{ options|json_encode }}\"
             {% if renderParams.cssClass is defined %} class=\"{{ renderParams.cssClass }}\" {% endif %}>
             {% if renderParams.viewLoading|default(false) %}
                 {% include \"@OroUI/view_loading.html.twig\" %}
             {% endif %}
        </div>
    {% endif %}
{% endmacro %}

{#
    Renders element that represents blank value

    parameters:
        class: css class for the element
#}
{% macro renderBlankCellValue(parameters = {}) %}
    <span {% if (parameters.class is defined) %}class=\"{{ parameters.class }}\"{% endif %}
          aria-label=\"{{ 'oro.datagrid.cell.blank.aria_label'|trans }}\"
          data-blank-content=\"{{ 'oro.datagrid.cell.blank.placeholder'|trans }}\"></span>
{% endmacro %}
", "@OroDataGrid/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/macros.html.twig");
    }
}
