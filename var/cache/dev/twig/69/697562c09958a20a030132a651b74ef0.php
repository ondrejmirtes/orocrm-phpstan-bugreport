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

/* @OroTracking/TrackingWebsite/view.html.twig */
class __TwigTemplate_cdca5bd91294df1d8418f7b9539569b1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTracking/TrackingWebsite/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTracking/TrackingWebsite/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTracking/TrackingWebsite/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 3)->unwrap();
        // line 4
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 4)->unwrap();
        // line 5
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 5)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.name%" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["entity"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6), "N/A")) : ("N/A"))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 9
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 9)->unwrap();
        // line 10
        echo "
    ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_tracking_website_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.entity_label")]], 12, $context, $this->getSourceContext());
            // line 15
            echo "
    ";
        }
        // line 17
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_tracking_website", ["id" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_tracking_website_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.entity_label")]], 18, $context, $this->getSourceContext());
            // line 25
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 30
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 31
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_tracking_website_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)];
        // line 36
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 39
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 39));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 40
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTracking/TrackingWebsite/view.html.twig", 40)->unwrap();
        // line 42
        ob_start();
        // line 43
        echo "<div class=\"row-fluid\">
        <div class=\"responsive-block\">
            ";
        // line 45
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
        echo "
            ";
        // line 46
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.identifier.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), "identifier", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
        // line 48
        ob_start();
        // line 49
        echo "<a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->stripDangerousProtocols(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "url", [], "any", false, false, false, 49)), "html", null, true);
        echo "\">
                ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "url", [], "any", false, false, false, 50), "html", null, true);
        echo "
            </a>";
        $context["url"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.url.label"), (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 53, $this->source); })())], 53, $context, $this->getSourceContext());
        // line 55
        ob_start();
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "owner", [], "any", false, false, false, 56)) {
            // line 57
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), "owner", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
            echo "
                ";
            // line 58
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "owner", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext());
        }
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.trackingwebsite.owner.label"), (isset($context["ownerData"]) || array_key_exists("ownerData", $context) ? $context["ownerData"] : (function () { throw new RuntimeError('Variable "ownerData" does not exist.', 61, $this->source); })())], 61, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 64
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })())], 64, $context, $this->getSourceContext());
        echo "
        </div>
    </div>";
        $context["generalInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        ob_start();
        // line 69
        echo "<div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <p>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.help.event_tooltip"), "html", null, true);
        echo "</p>
            ";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "secure", [], "any", false, false, false, 72)) {
            // line 73
            echo "                <p><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.help.secure"), "html", null, true);
            echo "</strong></p>
            ";
        }
        // line 75
        echo "            <textarea class=\"code code-script\">";
        // line 76
        $this->loadTemplate("@OroTracking/TrackingWebsite/script.js.twig", "@OroTracking/TrackingWebsite/view.html.twig", 76)->display($context);
        // line 77
        echo "</textarea>
        </div>
    </div>";
        $context["trackingCode"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        ob_start();
        // line 83
        echo "        ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["website-tracking-events-grid", ["websiteIdentifier" => twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "identifier", [], "any", false, false, false, 85)], ["cssClass" => "inner-grid"]], 84, $context, $this->getSourceContext());
        // line 87
        echo "
    ";
        $context["trackingEventsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "
    ";
        // line 90
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.block.general"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 95
(isset($context["generalInformation"]) || array_key_exists("generalInformation", $context) ? $context["generalInformation"] : (function () { throw new RuntimeError('Variable "generalInformation" does not exist.', 95, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.block.tracking"), "subblocks" => [0 => ["data" => [0 =>         // line 101
(isset($context["trackingCode"]) || array_key_exists("trackingCode", $context) ? $context["trackingCode"] : (function () { throw new RuntimeError('Variable "trackingCode" does not exist.', 101, $this->source); })())]]]], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tracking.block.events"), "subblocks" => [0 => ["data" => [0 =>         // line 107
(isset($context["trackingEventsGrid"]) || array_key_exists("trackingEventsGrid", $context) ? $context["trackingEventsGrid"] : (function () { throw new RuntimeError('Variable "trackingEventsGrid" does not exist.', 107, $this->source); })())]]]]];
        // line 111
        echo "
    ";
        // line 112
        $context["id"] = "websiteView";
        // line 113
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 113, $this->source); })())];
        // line 114
        echo "
    ";
        // line 115
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTracking/TrackingWebsite/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 115,  283 => 114,  280 => 113,  278 => 112,  275 => 111,  273 => 107,  272 => 101,  271 => 95,  270 => 90,  267 => 89,  263 => 87,  261 => 85,  259 => 83,  257 => 82,  252 => 77,  250 => 76,  248 => 75,  242 => 73,  240 => 72,  236 => 71,  232 => 69,  230 => 68,  224 => 64,  218 => 61,  214 => 58,  210 => 57,  208 => 56,  206 => 55,  204 => 53,  199 => 50,  194 => 49,  192 => 48,  190 => 46,  186 => 45,  182 => 43,  180 => 42,  177 => 40,  164 => 39,  148 => 36,  146 => 34,  145 => 31,  143 => 30,  130 => 29,  115 => 25,  113 => 23,  112 => 19,  110 => 18,  107 => 17,  103 => 15,  101 => 13,  99 => 12,  97 => 11,  94 => 10,  91 => 9,  78 => 8,  64 => 1,  62 => 6,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% import '@OroUser/macros.html.twig' as U %}
{% oro_title_set({params : {\"%entity.name%\": entity.name|default('N/A') }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path('oro_tracking_website_update', { id: entity.id }),
            'entity_label': 'oro.tracking.trackingwebsite.entity_label'|trans
        }) }}
    {% endif %}
    {% if is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_tracking_website', {'id': entity.id}),
            'dataRedirect': path('oro_tracking_website_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-user',
            'dataId': entity.id,
            'entity_label': 'oro.tracking.trackingwebsite.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_tracking_website_index'),
        'indexLabel': 'oro.tracking.trackingwebsite.entity_plural_label'|trans,
        'entityTitle': entity.name
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set generalInformation -%}
    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            {{ UI.renderProperty('oro.tracking.trackingwebsite.name.label'|trans, entity.name) }}
            {{ UI.renderProperty('oro.tracking.trackingwebsite.identifier.label'|trans, entity.identifier) }}

            {%- set url -%}
            <a target=\"_blank\" href=\"{{ entity.url|strip_dangerous_protocols }}\">
                {{ entity.url }}
            </a>
            {%- endset -%}
            {{ UI.renderHtmlProperty('oro.tracking.trackingwebsite.url.label'|trans, url) }}

            {%- set ownerData -%}
            {%- if entity.owner -%}
                {{ U.render_user_name(entity.owner) }}
                {{ U.user_business_unit_name(entity.owner) }}
            {%- endif -%}
            {%- endset -%}
            {{ UI.renderHtmlProperty('oro.tracking.trackingwebsite.owner.label'|trans, ownerData) }}
        </div>
        <div class=\"responsive-block\">
            {{ entityConfig.renderDynamicFields(entity) }}
        </div>
    </div>
    {%- endset -%}
    {%- set trackingCode -%}
    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <p>{{ 'oro.tracking.help.event_tooltip'|trans }}</p>
            {% if not app.request.secure %}
                <p><strong>{{ 'oro.tracking.help.secure'|trans }}</strong></p>
            {% endif %}
            <textarea class=\"code code-script\">
                {%- include '@OroTracking/TrackingWebsite/script.js.twig' -%}
            </textarea>
        </div>
    </div>
    {%- endset -%}

    {% set trackingEventsGrid %}
        {{
            dataGrid.renderGrid('website-tracking-events-grid',
            {websiteIdentifier: entity.identifier},
            {cssClass: 'inner-grid'})
        }}
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.tracking.block.general'|trans,
            'class': 'active',
            'subblocks': [
                {'data' : [generalInformation]}
            ]
        },
        {
            'title': 'oro.tracking.block.tracking'|trans,
            'subblocks': [
                {'data' : [trackingCode]}
            ]
        },
        {
            'title': 'oro.tracking.block.events'|trans,
            'subblocks': [
                {'data' : [trackingEventsGrid]}
            ]
        }
    ] %}

    {% set id = 'websiteView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroTracking/TrackingWebsite/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/TrackingBundle/Resources/views/TrackingWebsite/view.html.twig");
    }
}
