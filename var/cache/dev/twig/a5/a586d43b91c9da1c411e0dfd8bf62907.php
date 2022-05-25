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

/* @OroNavigation/menuUpdate/view.html.twig */
class __TwigTemplate_a80eb0423d31e692f5a33bbbc1546c2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroNavigation/menuUpdate/view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/view.html.twig"));

        // line 3
        $macros["navigationMacro"] = $this->macros["navigationMacro"] = $this->loadTemplate("@OroSync/Include/contentTags.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 3)->unwrap();
        // line 5
        ob_start();
        // line 6
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 8
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 11)->unwrap();
        // line 12
        echo "    ";
        $macros["menuUpdateView"] = $this;
        // line 13
        echo "
    <div class=\"layout-content\"";
        // line 14
        if (array_key_exists("pageComponent", $context)) {
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        }
        echo ">
        <div class=\"container-fluid page-title\">
            <div class=\"navigation navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-left-extra\">
                        ";
        // line 19
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 22
        echo "                    </div>
                    <div class=\"pull-right\">
                        ";
        // line 24
        echo twig_call_macro($macros["menuUpdateView"], "macro_resetButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((        // line 25
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 25, $this->source); })()) . "ajax_reset"), ["menuName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "root", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 25, $this->source); })())]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((        // line 26
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 26, $this->source); })()) . "view"), ["menuName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "root", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 26, $this->source); })())]), "menuKey" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "root", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "data" => ["success-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((        // line 29
array_key_exists("resetedMessage", $context)) ? (_twig_default_filter((isset($context["resetedMessage"]) || array_key_exists("resetedMessage", $context) ? $context["resetedMessage"] : (function () { throw new RuntimeError('Variable "resetedMessage" does not exist.', 29, $this->source); })()), "oro.navigation.menuupdate.reset_message")) : ("oro.navigation.menuupdate.reset_message")), ["%menuKey%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "root", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 29, $this->source); })())])]]], 24, $context, $this->getSourceContext());
        // line 31
        echo "

                        ";
        // line 33
        echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 33, $context, $this->getSourceContext());
        echo "

                        ";
        // line 35
        $context["html"] = twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((        // line 36
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 36, $this->source); })()) . "create"), ["menuName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "root", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 36, $this->source); })())]), "aCss" => "btn-primary", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")])]], 35, $context, $this->getSourceContext());
        // line 41
        echo "
                        ";
        // line 43
        echo "                        ";
        $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 43, $this->source); })()) . twig_call_macro($macros["UI"], "macro_ajaxButton", [["aCss" => "btn-primary no-hash menu-divider-create-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.divider")]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.divider")]), "dataMethod" => "POST", "dataRedirect" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "uri", [], "any", false, false, false, 48), "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((        // line 49
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 49, $this->source); })()) . "ajax_create"), ["context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 49, $this->source); })()), "menuName" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "parentKey" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "isDivider" => true]), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((        // line 50
array_key_exists("dividerCreatedMessage", $context)) ? (_twig_default_filter((isset($context["dividerCreatedMessage"]) || array_key_exists("dividerCreatedMessage", $context) ? $context["dividerCreatedMessage"] : (function () { throw new RuntimeError('Variable "dividerCreatedMessage" does not exist.', 50, $this->source); })()), "oro.navigation.menuupdate.divider_created")) : ("oro.navigation.menuupdate.divider_created")), ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 50, $this->source); })())])]], 43, $context, $this->getSourceContext()));
        // line 52
        echo "
                        ";
        // line 53
        $context["parameters"] = ["html" =>         // line 54
(isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 54, $this->source); })()), "groupKey" => "createButtons", "options" => ["moreButtonAttrs" => ["class" => "btn-primary"]]];
        // line 62
        echo "
                        ";
        // line 63
        echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 63, $this->source); })())], 63, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"scrollable-container sidebar-container clearfix\">
            ";
        // line 70
        $this->displayBlock('content_data', $context, $blocks);
        // line 116
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 19
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 19));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 20
        echo "                            ";
        echo twig_include($this->env, $context, "@OroNavigation/menuUpdate/pageHeader.html.twig");
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 71
        echo "                ";
        $context["treeOptions"] = ["data" =>         // line 72
(isset($context["tree"]) || array_key_exists("tree", $context) ? $context["tree"] : (function () { throw new RuntimeError('Variable "tree" does not exist.', 72, $this->source); })()), "menu" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "root", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "nodeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "root", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "context" =>         // line 75
(isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 75, $this->source); })()), "updateAllowed" => true, "view" => "oronavigation/js/app/views/tree-manage-view", "onRootSelectRoute" => (        // line 78
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 78, $this->source); })()) . "view"), "onSelectRoute" => (        // line 79
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 79, $this->source); })()) . "update"), "onMoveRoute" => (        // line 80
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 80, $this->source); })()) . "ajax_move"), "successMessage" => ((        // line 81
array_key_exists("movedMessage", $context)) ? (_twig_default_filter((isset($context["movedMessage"]) || array_key_exists("movedMessage", $context) ? $context["movedMessage"] : (function () { throw new RuntimeError('Variable "movedMessage" does not exist.', 81, $this->source); })()), "oro.navigation.menuupdate.moved_success_message")) : ("oro.navigation.menuupdate.moved_success_message"))];
        // line 83
        echo "
                ";
        // line 84
        $this->loadTemplate("@OroNavigation/menuUpdate/view.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 84, "1787562532")->display(twig_array_merge($context, ["options" => ["fixSidebarHeight" => false]]));
        // line 115
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 120
    public function macro_resetButton($__parameters__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "resetButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "resetButton"));

            // line 121
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 121)->unwrap();
            // line 122
            echo "
    ";
            // line 123
            $context["url"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataUrl", [], "any", true, true, false, 123)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 123, $this->source); })()), "dataUrl", [], "any", false, false, false, 123)) : (""));
            // line 124
            echo "
    ";
            // line 125
            $context["parametersData"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 125, $this->source); })()), "data", [], "any", false, false, false, 125), ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reset_confirm", ["%menuKey%" => twig_get_attribute($this->env, $this->source,             // line 126
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 126, $this->source); })()), "menuKey", [], "any", false, false, false, 126)]), "ok-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reset_ok_text"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reset_title"), "url" =>             // line 129
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 129, $this->source); })())]);
            // line 131
            echo "
    ";
            // line 132
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 132, $this->source); })()), ["data" =>             // line 133
(isset($context["parametersData"]) || array_key_exists("parametersData", $context) ? $context["parametersData"] : (function () { throw new RuntimeError('Variable "parametersData" does not exist.', 133, $this->source); })()), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reset"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reset"), "aCss" => " btn icons-holder-text no-hash remove-button", "path" => "#"]);
            // line 139
            echo "
    ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataRedirect", [], "any", true, true, false, 140)) {
                // line 141
                echo "        ";
                $context["data"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 141, $this->source); })()), "data", [], "any", false, false, false, 141), ["redirect" => twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 141, $this->source); })()), "dataRedirect", [], "any", false, false, false, 141)]);
                // line 142
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 142, $this->source); })()), ["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 142, $this->source); })())]);
                // line 143
                echo "    ";
            }
            // line 144
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 146
            echo twig_call_macro($macros["UI"], "macro_link", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 146, $this->source); })())], 146, $context, $this->getSourceContext());
            echo "
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
        return "@OroNavigation/menuUpdate/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 146,  303 => 144,  300 => 143,  297 => 142,  294 => 141,  292 => 140,  289 => 139,  287 => 133,  286 => 132,  283 => 131,  281 => 129,  280 => 126,  279 => 125,  276 => 124,  274 => 123,  271 => 122,  268 => 121,  249 => 120,  236 => 115,  234 => 84,  231 => 83,  229 => 81,  228 => 80,  227 => 79,  226 => 78,  225 => 75,  224 => 74,  223 => 73,  222 => 72,  220 => 71,  207 => 70,  191 => 20,  178 => 19,  163 => 116,  161 => 70,  151 => 63,  148 => 62,  146 => 54,  145 => 53,  142 => 52,  140 => 50,  139 => 49,  138 => 48,  136 => 43,  133 => 41,  131 => 36,  130 => 35,  125 => 33,  121 => 31,  119 => 29,  118 => 27,  117 => 26,  116 => 25,  115 => 24,  111 => 22,  109 => 19,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  77 => 10,  64 => 1,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}

{% import '@OroSync/Include/contentTags.html.twig' as navigationMacro %}

{% set reloadLink -%}
    <a href=\"#\" onclick=\"window.location.reload(false);return false;\">
        {{- 'oro.navigation.menuupdate.reload_link.label'|trans -}}
    </a>
{%- endset %}
{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as menuUpdateView %}

    <div class=\"layout-content\"{% if pageComponent is defined %}{{ UI.renderPageComponentAttributes(pageComponent) }}{% endif %}>
        <div class=\"container-fluid page-title\">
            <div class=\"navigation navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-left-extra\">
                        {% block pageHeader %}
                            {{ include('@OroNavigation/menuUpdate/pageHeader.html.twig') }}
                        {% endblock pageHeader %}
                    </div>
                    <div class=\"pull-right\">
                        {{ menuUpdateView.resetButton({
                            'dataUrl': path(routePrefix ~ 'ajax_reset', {menuName: entity.root.name, context: context}),
                            'dataRedirect': path(routePrefix ~ 'view', {menuName: entity.root.name, context: context}),
                            'menuKey': entity.root.name,
                            'data': {
                                'success-message': resetedMessage|default('oro.navigation.menuupdate.reset_message')|trans({ '%menuKey%' : entity.root.name, '%reload_link%': reloadLink}),
                            }
                        }) }}

                        {{ UI.buttonSeparator() }}

                        {% set html = UI.button({
                            'path' : path(routePrefix ~ 'create', {menuName: entity.root.name, context: context}),
                            'aCss': 'btn-primary',
                            'label': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans}),
                            'title': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans})
                        }) %}

                        {# Create Divider button #}
                        {% set html = html ~ UI.ajaxButton({
                            'aCss': 'btn-primary no-hash menu-divider-create-button',
                            'label': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.divider'|trans}),
                            'title': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.divider'|trans}),
                            'dataMethod': 'POST',
                            'dataRedirect': app.request.uri,
                            'dataUrl': path(routePrefix ~ 'ajax_create', {context: context, menuName: entity.name, parentKey: entity.name, 'isDivider': true}),
                            'successMessage': dividerCreatedMessage|default('oro.navigation.menuupdate.divider_created')|trans({'%reload_link%': reloadLink})
                        }) %}

                        {% set parameters = {
                            'html': html,
                            'groupKey': 'createButtons',
                            'options': {
                                'moreButtonAttrs': {
                                    'class': 'btn-primary'
                                }
                            }
                        } %}

                        {{ UI.pinnedDropdownButton(parameters) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"scrollable-container sidebar-container clearfix\">
            {% block content_data %}
                {% set treeOptions = {
                    'data' : tree,
                    'menu' : entity.root.name,
                    'nodeId': entity.root.name,
                    'context' : context,
                    'updateAllowed' : true,
                    'view' : 'oronavigation/js/app/views/tree-manage-view',
                    'onRootSelectRoute' : routePrefix ~ 'view',
                    'onSelectRoute' : routePrefix ~ 'update',
                    'onMoveRoute' : routePrefix ~ 'ajax_move',
                    'successMessage': movedMessage|default('oro.navigation.menuupdate.moved_success_message')
                } %}

                {% embed \"@OroUI/content_sidebar.html.twig\" with {options: {
                    fixSidebarHeight: false
                }} %}
                    {% block sidebar %}
                        {% import '@OroUI/macros.html.twig' as UI %}

                        {{ UI.renderJsTree(
                            {
                                'label': 'oro.navigation.menu.menu_list_default.label'|trans,
                                'treeOptions': treeOptions
                            },
                            {
                                'move': {
                                    'view': 'oroui/js/app/views/jstree/move-action-view',
                                    'routeName': routePrefix ~ 'move',
                                    'routeParams': {menuName: entity.root.name, context: context}
                                }
                            }
                        ) }}
                    {% endblock sidebar %}

                    {% block content %}
                        <div class=\"category-data\">
                            <div class=\"tree-empty-content scrollable-container\">
                                <div class=\"no-data\">
                                    {{ 'oro.navigation.menuupdate.select_existing_or_create_new'|trans }}
                                </div>
                            </div>
                        </div>
                    {% endblock content %}
                {% endembed %}
            {% endblock content_data %}
        </div>
    </div>
{% endblock content %}

{% macro resetButton(parameters) %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}

    {% set parametersData = parameters.data|merge({
        'message': 'oro.navigation.menuupdate.reset_confirm'|trans({ '%menuKey%' : parameters.menuKey }),
        'ok-text': 'oro.navigation.menuupdate.reset_ok_text'|trans,
        'title': 'oro.navigation.menuupdate.reset_title'|trans,
        'url': url
    }) %}

    {% set parameters = parameters|merge({
        'data': parametersData,
        'title': 'oro.navigation.menuupdate.reset'|trans,
        'label': 'oro.navigation.menuupdate.reset'|trans,
        'aCss': ' btn icons-holder-text no-hash remove-button',
        'path': '#'
    }) %}

    {% if parameters.dataRedirect is defined %}
        {% set data = parameters.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set parameters = parameters|merge({ 'data': data }) %}
    {% endif %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UI.link(parameters) }}
    </div>
{% endmacro %}
", "@OroNavigation/menuUpdate/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/view.html.twig");
    }
}


/* @OroNavigation/menuUpdate/view.html.twig */
class __TwigTemplate_a80eb0423d31e692f5a33bbbc1546c2d___1787562532 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 84
        return "@OroUI/content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/view.html.twig"));

        $this->parent = $this->loadTemplate("@OroUI/content_sidebar.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 84);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 87
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sidebar", $this->getTemplateName(), 87));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 88
        echo "                        ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/view.html.twig", 88)->unwrap();
        // line 89
        echo "
                        ";
        // line 90
        echo twig_call_macro($macros["UI"], "macro_renderJsTree", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.menu_list_default.label"), "treeOptions" =>         // line 93
(isset($context["treeOptions"]) || array_key_exists("treeOptions", $context) ? $context["treeOptions"] : (function () { throw new RuntimeError('Variable "treeOptions" does not exist.', 93, $this->source); })())], ["move" => ["view" => "oroui/js/app/views/jstree/move-action-view", "routeName" => (        // line 98
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 98, $this->source); })()) . "move"), "routeParams" => ["menuName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 99, $this->source); })()), "root", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 99, $this->source); })())]]]], 90, $context, $this->getSourceContext());
        // line 102
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 105
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 105));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 106
        echo "                        <div class=\"category-data\">
                            <div class=\"tree-empty-content scrollable-container\">
                                <div class=\"no-data\">
                                    ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.select_existing_or_create_new"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 109,  595 => 106,  582 => 105,  568 => 102,  566 => 99,  565 => 98,  564 => 93,  563 => 90,  560 => 89,  557 => 88,  544 => 87,  515 => 84,  307 => 146,  303 => 144,  300 => 143,  297 => 142,  294 => 141,  292 => 140,  289 => 139,  287 => 133,  286 => 132,  283 => 131,  281 => 129,  280 => 126,  279 => 125,  276 => 124,  274 => 123,  271 => 122,  268 => 121,  249 => 120,  236 => 115,  234 => 84,  231 => 83,  229 => 81,  228 => 80,  227 => 79,  226 => 78,  225 => 75,  224 => 74,  223 => 73,  222 => 72,  220 => 71,  207 => 70,  191 => 20,  178 => 19,  163 => 116,  161 => 70,  151 => 63,  148 => 62,  146 => 54,  145 => 53,  142 => 52,  140 => 50,  139 => 49,  138 => 48,  136 => 43,  133 => 41,  131 => 36,  130 => 35,  125 => 33,  121 => 31,  119 => 29,  118 => 27,  117 => 26,  116 => 25,  115 => 24,  111 => 22,  109 => 19,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  77 => 10,  64 => 1,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}

{% import '@OroSync/Include/contentTags.html.twig' as navigationMacro %}

{% set reloadLink -%}
    <a href=\"#\" onclick=\"window.location.reload(false);return false;\">
        {{- 'oro.navigation.menuupdate.reload_link.label'|trans -}}
    </a>
{%- endset %}
{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as menuUpdateView %}

    <div class=\"layout-content\"{% if pageComponent is defined %}{{ UI.renderPageComponentAttributes(pageComponent) }}{% endif %}>
        <div class=\"container-fluid page-title\">
            <div class=\"navigation navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-left-extra\">
                        {% block pageHeader %}
                            {{ include('@OroNavigation/menuUpdate/pageHeader.html.twig') }}
                        {% endblock pageHeader %}
                    </div>
                    <div class=\"pull-right\">
                        {{ menuUpdateView.resetButton({
                            'dataUrl': path(routePrefix ~ 'ajax_reset', {menuName: entity.root.name, context: context}),
                            'dataRedirect': path(routePrefix ~ 'view', {menuName: entity.root.name, context: context}),
                            'menuKey': entity.root.name,
                            'data': {
                                'success-message': resetedMessage|default('oro.navigation.menuupdate.reset_message')|trans({ '%menuKey%' : entity.root.name, '%reload_link%': reloadLink}),
                            }
                        }) }}

                        {{ UI.buttonSeparator() }}

                        {% set html = UI.button({
                            'path' : path(routePrefix ~ 'create', {menuName: entity.root.name, context: context}),
                            'aCss': 'btn-primary',
                            'label': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans}),
                            'title': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans})
                        }) %}

                        {# Create Divider button #}
                        {% set html = html ~ UI.ajaxButton({
                            'aCss': 'btn-primary no-hash menu-divider-create-button',
                            'label': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.divider'|trans}),
                            'title': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.divider'|trans}),
                            'dataMethod': 'POST',
                            'dataRedirect': app.request.uri,
                            'dataUrl': path(routePrefix ~ 'ajax_create', {context: context, menuName: entity.name, parentKey: entity.name, 'isDivider': true}),
                            'successMessage': dividerCreatedMessage|default('oro.navigation.menuupdate.divider_created')|trans({'%reload_link%': reloadLink})
                        }) %}

                        {% set parameters = {
                            'html': html,
                            'groupKey': 'createButtons',
                            'options': {
                                'moreButtonAttrs': {
                                    'class': 'btn-primary'
                                }
                            }
                        } %}

                        {{ UI.pinnedDropdownButton(parameters) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"scrollable-container sidebar-container clearfix\">
            {% block content_data %}
                {% set treeOptions = {
                    'data' : tree,
                    'menu' : entity.root.name,
                    'nodeId': entity.root.name,
                    'context' : context,
                    'updateAllowed' : true,
                    'view' : 'oronavigation/js/app/views/tree-manage-view',
                    'onRootSelectRoute' : routePrefix ~ 'view',
                    'onSelectRoute' : routePrefix ~ 'update',
                    'onMoveRoute' : routePrefix ~ 'ajax_move',
                    'successMessage': movedMessage|default('oro.navigation.menuupdate.moved_success_message')
                } %}

                {% embed \"@OroUI/content_sidebar.html.twig\" with {options: {
                    fixSidebarHeight: false
                }} %}
                    {% block sidebar %}
                        {% import '@OroUI/macros.html.twig' as UI %}

                        {{ UI.renderJsTree(
                            {
                                'label': 'oro.navigation.menu.menu_list_default.label'|trans,
                                'treeOptions': treeOptions
                            },
                            {
                                'move': {
                                    'view': 'oroui/js/app/views/jstree/move-action-view',
                                    'routeName': routePrefix ~ 'move',
                                    'routeParams': {menuName: entity.root.name, context: context}
                                }
                            }
                        ) }}
                    {% endblock sidebar %}

                    {% block content %}
                        <div class=\"category-data\">
                            <div class=\"tree-empty-content scrollable-container\">
                                <div class=\"no-data\">
                                    {{ 'oro.navigation.menuupdate.select_existing_or_create_new'|trans }}
                                </div>
                            </div>
                        </div>
                    {% endblock content %}
                {% endembed %}
            {% endblock content_data %}
        </div>
    </div>
{% endblock content %}

{% macro resetButton(parameters) %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}

    {% set parametersData = parameters.data|merge({
        'message': 'oro.navigation.menuupdate.reset_confirm'|trans({ '%menuKey%' : parameters.menuKey }),
        'ok-text': 'oro.navigation.menuupdate.reset_ok_text'|trans,
        'title': 'oro.navigation.menuupdate.reset_title'|trans,
        'url': url
    }) %}

    {% set parameters = parameters|merge({
        'data': parametersData,
        'title': 'oro.navigation.menuupdate.reset'|trans,
        'label': 'oro.navigation.menuupdate.reset'|trans,
        'aCss': ' btn icons-holder-text no-hash remove-button',
        'path': '#'
    }) %}

    {% if parameters.dataRedirect is defined %}
        {% set data = parameters.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set parameters = parameters|merge({ 'data': data }) %}
    {% endif %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UI.link(parameters) }}
    </div>
{% endmacro %}
", "@OroNavigation/menuUpdate/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/view.html.twig");
    }
}
