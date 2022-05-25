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

/* @OroOAuth2Server/Client/createResult.html.twig */
class __TwigTemplate_6f882b274f579d5e817191b165eee467 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Client/createResult.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/createResult.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/createResult.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/createResult.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%application.name%" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["entity"] ?? null), "name", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 4), "N/A")) : ("N/A"))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroOAuth2Server/Client/createResult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "frontend", [], "any", false, false, false, 8)) ? ("oro.oauth2server.menu.frontend_oauth_application.label") : ("oro.oauth2server.menu.backoffice_oauth_application.label"))), "html", null, true);
        // line 11
        echo "
    ";
        $context["entityLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "frontend", [], "any", false, false, false, 17)) ? ("oro_oauth2_frontend_view") : ("oro_oauth2_view")), ["id" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "title" =>             // line 20
(isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 20, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.view"), "iCss" => "fa-eye", "aCss" => "edit-button main-group"]], 15, $context, $this->getSourceContext());
            // line 24
            echo "
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "frontend", [], "any", false, false, false, 30)) ? ("oro_oauth2_frontend_update") : ("oro_oauth2_update")), ["id" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "entity_label" =>             // line 33
(isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 33, $this->source); })())]], 28, $context, $this->getSourceContext());
            // line 34
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 38
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 38));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 39
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 40
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "frontend", [], "any", false, false, false, 41)) ? ("oro_oauth2_frontend_index") : ("oro_oauth2_index"))), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 42, $this->source); })()), "frontend", [], "any", false, false, false, 42)) ? ("oro.oauth2server.menu.frontend_oauth_application.label") : ("oro.oauth2server.menu.backoffice_oauth_application.label"))), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 46
($context["entity"] ?? null), "name", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 46), "N/A")) : ("N/A"))];
        // line 48
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 51
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 51));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 54
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 54));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 55
        echo "        <div class=\"widget-content\">
            <div class=\"row-fluid form-horizontal\">
                <div class=\"alert alert-info \">
                    ";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.created_warning_message");
        echo "
                </div>
            </div>
            <div class=\"row-fluid form-horizontal\">
                <div class=\"responsive-block\">
                    <div>
                        <strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.identifier.label"), "html", null, true);
        echo ":</strong>
                        ";
        // line 65
        $context["client_id"] = uniqid("client-id-");
        // line 66
        echo "                        <span class=\"text-nowrap\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "identifier", [], "any", false, false, false, 66), "html", null, true);
        echo "</span>";
        // line 67
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon", "iCss" => "fa-copy", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.button.copy_to_clipboard.label"), "labelInIcon" => false, "pageComponent" => ["view" => ["view" => "oroui/js/app/views/element-value-copy-to-clipboard-view", "elementSelector" => ("#" .         // line 75
(isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 75, $this->source); })()))]]]], 67, $context, $this->getSourceContext());
        // line 79
        echo "</div>
                    <div>
                        <strong>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.secret.label"), "html", null, true);
        echo ":</strong>
                        ";
        // line 82
        $context["client_secret_id"] = uniqid("client-secret-");
        // line 83
        echo "                        <span class=\"text-nowrap\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["client_secret_id"]) || array_key_exists("client_secret_id", $context) ? $context["client_secret_id"] : (function () { throw new RuntimeError('Variable "client_secret_id" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "plainSecret", [], "any", false, false, false, 83), "html", null, true);
        echo "</span>";
        // line 84
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon", "iCss" => "fa-copy", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.button.copy_to_clipboard.label"), "labelInIcon" => false, "pageComponent" => ["view" => ["view" => "oroui/js/app/views/element-value-copy-to-clipboard-view", "elementSelector" => ("#" .         // line 92
(isset($context["client_secret_id"]) || array_key_exists("client_secret_id", $context) ? $context["client_secret_id"] : (function () { throw new RuntimeError('Variable "client_secret_id" does not exist.', 92, $this->source); })()))]]]], 84, $context, $this->getSourceContext());
        // line 96
        echo "</div>
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
        return "@OroOAuth2Server/Client/createResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 96,  256 => 92,  255 => 84,  249 => 83,  247 => 82,  243 => 81,  239 => 79,  237 => 75,  236 => 67,  230 => 66,  228 => 65,  224 => 64,  215 => 58,  210 => 55,  197 => 54,  173 => 51,  157 => 48,  155 => 46,  154 => 42,  153 => 41,  152 => 40,  150 => 39,  137 => 38,  122 => 34,  120 => 33,  119 => 31,  118 => 30,  116 => 28,  114 => 27,  111 => 26,  107 => 24,  105 => 20,  104 => 18,  103 => 17,  101 => 15,  99 => 14,  96 => 13,  92 => 11,  89 => 8,  86 => 7,  73 => 6,  59 => 1,  57 => 4,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% oro_title_set({params : {\"%application.name%\": entity.name|default('N/A') }}) %}

{% block navButtons %}
    {% set entityLabel %}
        {{ (entity.frontend
        ? 'oro.oauth2server.menu.frontend_oauth_application.label'
        : 'oro.oauth2server.menu.backoffice_oauth_application.label'
        )|trans }}
    {% endset %}

    {% if is_granted('VIEW', entity) %}
        {{ UI.button({
            'path': path(
                entity.frontend ? 'oro_oauth2_frontend_view' : 'oro_oauth2_view',
                { id: entity.id }
            ),
            'title': entityLabel,
            'label': 'oro.ui.view'|trans,
            'iCss': 'fa-eye',
            'aCss': 'edit-button main-group'
        }) }}
    {% endif %}

    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path(
                entity.frontend ? 'oro_oauth2_frontend_update' : 'oro_oauth2_update',
                { id: entity.id }
            ),
            'entity_label': entityLabel
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path(entity.frontend ? 'oro_oauth2_frontend_index' : 'oro_oauth2_index'),
        'indexLabel':  (entity.frontend
        ? 'oro.oauth2server.menu.frontend_oauth_application.label'
        : 'oro.oauth2server.menu.backoffice_oauth_application.label'
        )|trans,
        'entityTitle': entity.name|default('N/A'),
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block stats %}
{% endblock stats %}

{% block content_data %}
        <div class=\"widget-content\">
            <div class=\"row-fluid form-horizontal\">
                <div class=\"alert alert-info \">
                    {{ 'oro.oauth2server.client.created_warning_message'|trans|raw }}
                </div>
            </div>
            <div class=\"row-fluid form-horizontal\">
                <div class=\"responsive-block\">
                    <div>
                        <strong>{{ 'oro.oauth2server.client.identifier.label'|trans }}:</strong>
                        {% set client_id = 'client-id-'|uniqid %}
                        <span class=\"text-nowrap\" id=\"{{ client_id }}\">{{ entity.identifier }}</span>
                        {{- UI.clientLink({
                            aCss: 'btn btn-icon',
                            iCss: 'fa-copy',
                            title: 'oro.ui.button.copy_to_clipboard.label'|trans,
                            labelInIcon: false,
                            pageComponent: {
                                view: {
                                    view: 'oroui/js/app/views/element-value-copy-to-clipboard-view',
                                    elementSelector: '#' ~ client_id
                                }
                            }
                        }) -}}
                    </div>
                    <div>
                        <strong>{{ 'oro.oauth2server.client.secret.label'|trans }}:</strong>
                        {% set client_secret_id = 'client-secret-'|uniqid %}
                        <span class=\"text-nowrap\" id=\"{{ client_secret_id }}\">{{ entity.plainSecret }}</span>
                        {{- UI.clientLink({
                            aCss: 'btn btn-icon',
                            iCss: 'fa-copy',
                            title: 'oro.ui.button.copy_to_clipboard.label'|trans,
                            labelInIcon: false,
                            pageComponent: {
                                view: {
                                    view: 'oroui/js/app/views/element-value-copy-to-clipboard-view',
                                    elementSelector: '#' ~ client_secret_id
                                }
                            }
                        }) -}}
                    </div>
                </div>
            </div>
        </div>
{% endblock content_data %}
", "@OroOAuth2Server/Client/createResult.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Client/createResult.html.twig");
    }
}
