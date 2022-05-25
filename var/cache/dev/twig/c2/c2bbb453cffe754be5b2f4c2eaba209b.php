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

/* @OroEntityConfig/Config/view.html.twig */
class __TwigTemplate_78062d06c1d1b90a1e7ffb12cbd5c6fc extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Config/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Config/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/view.html.twig", 2)->unwrap();
        // line 3
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroEntityConfig/Config/view.html.twig", 3)->unwrap();
        // line 4
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroEntityConfig/Config/view.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 5
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 5), "N/A")) : ("N/A")))]]);
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_entityconfig_manage")) {
            // line 8
            $context["audit_entity_class"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "classname", [], "any", false, false, false, 8), ["\\" => "_"]);
            // line 9
            $context["audit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 9), (isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 9, $this->source); })()))) : ((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 9, $this->source); })()))));
            // line 10
            $context["audit_path"] = "oro_entityconfig_audit";
            // line 11
            $context["audit_show_change_history"] = true;
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroEntityConfig/Config/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 14));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 15
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/view.html.twig", 15)->unwrap();
        // line 16
        echo "
    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_entityconfig_manage")) {
            // line 18
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["extend_config"]) || array_key_exists("extend_config", $context) ? $context["extend_config"] : (function () { throw new RuntimeError('Variable "extend_config" does not exist.', 18, $this->source); })()), "is", [0 => "is_extend"], "method", false, false, false, 18)) {
                // line 19
                echo "            ";
                $this->loadTemplate("@OroImportExport/ImportExport/buttons_from_configuration.html.twig", "@OroEntityConfig/Config/view.html.twig", 19)->display(twig_array_merge($context, ["alias" => "oro_field_config_model", "options" => ["entity_id" => twig_get_attribute($this->env, $this->source,                 // line 21
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]]));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)])]], 25, $context, $this->getSourceContext());
            echo "
        ";
            // line 26
            echo twig_call_macro($macros["entityConfig"], "macro_displayLayoutActions", [(isset($context["button_config"]) || array_key_exists("button_config", $context) ? $context["button_config"] : (function () { throw new RuntimeError('Variable "button_config" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 30
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 30));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 31
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 32
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.entity.plural_label"), "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 35
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 35), (isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 35, $this->source); })()))) : ((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 35, $this->source); })()))))];
        // line 37
        echo "
    ";
        // line 38
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 42
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Config/view.html.twig", 42)->unwrap();
        // line 43
        echo "
    <li>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "created", [], "any", false, false, false, 44)), "html", null, true);
        echo "</li>
    <li>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "updated", [], "any", false, false, false, 45)), "html", null, true);
        echo "</li>
    ";
        // line 46
        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "    <li>
        ";
            // line 48
            echo twig_call_macro($macros["UI"], "macro_link", [["path" =>             // line 49
(isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 49, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.info.records_count.label", ["%count%" => ((            // line 50
array_key_exists("entity_count", $context)) ? (_twig_default_filter((isset($context["entity_count"]) || array_key_exists("entity_count", $context) ? $context["entity_count"] : (function () { throw new RuntimeError('Variable "entity_count" does not exist.', 50, $this->source); })()), 0)) : (0))])]], 48, $context, $this->getSourceContext());
            // line 51
            echo "
    </li>
    ";
        } else {
            // line 54
            echo "    <li>
        <span>";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.info.records_count.label", ["%count%" => ((array_key_exists("entity_count", $context)) ? (_twig_default_filter((isset($context["entity_count"]) || array_key_exists("entity_count", $context) ? $context["entity_count"] : (function () { throw new RuntimeError('Variable "entity_count" does not exist.', 55, $this->source); })()), 0)) : (0))]), "html", null, true);
            echo "</span>
    </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 61
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["jsmodules"]) || array_key_exists("jsmodules", $context) ? $context["jsmodules"] : (function () { throw new RuntimeError('Variable "jsmodules" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "        <script>
            loadModules(";
            // line 63
            echo json_encode((isset($context["jsmodules"]) || array_key_exists("jsmodules", $context) ? $context["jsmodules"] : (function () { throw new RuntimeError('Variable "jsmodules" does not exist.', 63, $this->source); })()));
            echo ")
        </script>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        ob_start();
        // line 68
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_widget_info", ["id" => twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.entity.information.label")]);
        // line 72
        echo "
    ";
        $context["entityInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
    ";
        // line 75
        ob_start();
        // line 76
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_widget_unique_keys", ["id" => twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.entity.unique.label")]);
        // line 80
        echo "
    ";
        $context["uniqueKeysWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "
    ";
        // line 83
        ob_start();
        // line 84
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_widget_entity_fields", ["id" => twig_get_attribute($this->env, $this->source,         // line 86
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)])]);
        // line 87
        echo "
    ";
        $context["entityFieldsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "
    ";
        // line 90
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.block_titles.general.label"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 95
(isset($context["entityInformationWidget"]) || array_key_exists("entityInformationWidget", $context) ? $context["entityInformationWidget"] : (function () { throw new RuntimeError('Variable "entityInformationWidget" does not exist.', 95, $this->source); })())]], 1 => ["data" => [0 =>         // line 96
(isset($context["uniqueKeysWidget"]) || array_key_exists("uniqueKeysWidget", $context) ? $context["uniqueKeysWidget"] : (function () { throw new RuntimeError('Variable "uniqueKeysWidget" does not exist.', 96, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.block_titles.fields.label"), "subblocks" => [0 => ["data" => [0 =>         // line 102
(isset($context["entityFieldsWidget"]) || array_key_exists("entityFieldsWidget", $context) ? $context["entityFieldsWidget"] : (function () { throw new RuntimeError('Variable "entityFieldsWidget" does not exist.', 102, $this->source); })())]]]]];
        // line 106
        echo "
    ";
        // line 107
        $context["id"] = "entityConfigView";
        // line 108
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 108, $this->source); })())];
        // line 109
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
        return "@OroEntityConfig/Config/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 109,  320 => 108,  318 => 107,  315 => 106,  313 => 102,  312 => 96,  311 => 95,  310 => 90,  307 => 89,  303 => 87,  301 => 86,  299 => 84,  297 => 83,  294 => 82,  290 => 80,  288 => 78,  286 => 76,  284 => 75,  281 => 74,  277 => 72,  275 => 70,  273 => 68,  271 => 67,  268 => 66,  262 => 63,  259 => 62,  256 => 61,  243 => 60,  226 => 55,  223 => 54,  218 => 51,  216 => 50,  215 => 49,  214 => 48,  211 => 47,  209 => 46,  203 => 45,  197 => 44,  194 => 43,  191 => 42,  178 => 41,  163 => 38,  160 => 37,  158 => 35,  157 => 32,  155 => 31,  142 => 30,  126 => 26,  122 => 25,  119 => 24,  116 => 23,  114 => 21,  112 => 19,  109 => 18,  107 => 17,  104 => 16,  101 => 15,  88 => 14,  74 => 1,  71 => 11,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  61 => 5,  58 => 4,  56 => 3,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% oro_title_set({params : {\"%entityName%\": entity_config.get('label')|default('N/A')|trans }}) %}

{% if is_granted('oro_entityconfig_manage') %}
    {% set audit_entity_class = entity.classname|replace({'\\\\':'_'}) %}
    {% set audit_title = entity_config.get('label')|default(entity_name)|trans %}
    {% set audit_path = 'oro_entityconfig_audit' %}
    {% set audit_show_change_history = true %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_entityconfig_manage') %}
        {% if extend_config.is('is_extend') %}
            {% include '@OroImportExport/ImportExport/buttons_from_configuration.html.twig' with {
                'alias': 'oro_field_config_model',
                'options': {'entity_id': entity.id}
            } %}
        {% endif %}

        {{ UI.editButton({'path': path('oro_entityconfig_update', { id: entity.id })}) }}
        {{ entityConfig.displayLayoutActions(button_config) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_entityconfig_index'),
        'indexLabel': 'oro.entity_config.entity.plural_label'|trans,
        'entityTitle': entity_config.get('label')|default(entity_name)|trans,
    }%}

    {{ parent() }}
{% endblock pageHeader %}

{% block stats %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <li>{{ 'oro.ui.created_at'|trans }}: {{ entity.created|oro_format_datetime }}</li>
    <li>{{ 'oro.ui.updated_at'|trans }}: {{ entity.updated|oro_format_datetime }}</li>
    {% if link %}
    <li>
        {{ UI.link({
            'path': link,
            'label': 'oro.entity_config.info.records_count.label'|trans({'%count%': entity_count|default(0)})
        }) }}
    </li>
    {% else %}
    <li>
        <span>{{ 'oro.entity_config.info.records_count.label'|trans({'%count%': entity_count|default(0)}) }}</span>
    </li>
    {% endif %}
{% endblock stats%}

{% block content_data %}
    {% if jsmodules|length %}
        <script>
            loadModules({{ jsmodules|json_encode|raw }})
        </script>
    {% endif %}

    {% set entityInformationWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_entityconfig_widget_info', {id: entity.id}),
            'title': 'oro.entity_config.entity.information.label'|trans
        }) }}
    {% endset %}

    {% set uniqueKeysWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_entityconfig_widget_unique_keys', {id: entity.id}),
            'title': 'oro.entity_config.entity.unique.label'|trans
        }) }}
    {% endset %}

    {% set entityFieldsWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_entityconfig_widget_entity_fields', {id: entity.id})
        }) }}
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.entity_config.block_titles.general.label'|trans,
            'class': 'active',
            'subblocks': [
                {'data' : [entityInformationWidget]},
                {'data' : [uniqueKeysWidget]}
            ]
        },
        {
            'title': 'oro.entity_config.block_titles.fields.label'|trans,
            'subblocks': [
                {'data' : [entityFieldsWidget]},
            ]
        },
    ] %}

    {% set id = 'entityConfigView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroEntityConfig/Config/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Config/view.html.twig");
    }
}
