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

/* @OroNavigation/menuUpdate/update.html.twig */
class __TwigTemplate_14e8fa04f1180c8e9054a1fe351c1c74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'content_data' => [$this, 'block_content_data'],
            'content_column' => [$this, 'block_content_column'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/update.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 2)->unwrap();
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);
        // line 4
        $context["formAction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "uri", [], "any", false, false, false, 4);
        // line 5
        $context["entityId"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5);
        // line 6
        ob_start();
        // line 7
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 9
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "key", [], "any", false, false, false, 11)) {
            // line 12
            $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 12, $this->source); })()), ["entityTitle" => ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "isDivider", [], "any", false, false, false, 12)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.divider")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12))))]);
        } else {
            // line 14
            $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 14, $this->source); })()), ["entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")])]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 18
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 18)->unwrap();
        // line 19
        echo "
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "isDivider", [], "any", false, false, false, 20) == false)) {
            // line 21
            echo "        ";
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => (            // line 22
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 22, $this->source); })()) . "update"), "params" => ["menuName" => twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "menu", [], "any", false, false, false, 23), "key" => "\$key", "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 23, $this->source); })())]]], 21, $context, $this->getSourceContext());
            // line 25
            echo "
        ";
            // line 26
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 26, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => (            // line 27
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 27, $this->source); })()) . "create"), "params" => ["menuName" => twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "menu", [], "any", false, false, false, 28), "parentKey" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "key", [], "any", false, false, false, 28), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 28, $this->source); })())]]], 26, $context, $this->getSourceContext()));
            // line 30
            echo "
        ";
            // line 31
            echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 31, $this->source); })())]], 31, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "isCustom", [], "any", false, false, false, 34) ||  !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)))) {
            // line 35
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "key", [], "any", false, false, false, 35)) {
                // line 36
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "isCustom", [], "any", false, false, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)))) {
                    // line 37
                    echo "                ";
                    // line 38
                    echo "                ";
                    echo twig_call_macro($macros["UI"], "macro_deleteButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.delete"), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((                    // line 40
array_key_exists("deletedMessage", $context)) ? (_twig_default_filter((isset($context["deletedMessage"]) || array_key_exists("deletedMessage", $context) ? $context["deletedMessage"] : (function () { throw new RuntimeError('Variable "deletedMessage" does not exist.', 40, $this->source); })()), "oro.navigation.menuupdate.deleted_message")) : ("oro.navigation.menuupdate.deleted_message")), ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 40, $this->source); })())]), "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                    // line 41
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 41, $this->source); })()) . "ajax_delete"), ["context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 41, $this->source); })()), "menuName" => (isset($context["menuName"]) || array_key_exists("menuName", $context) ? $context["menuName"] : (function () { throw new RuntimeError('Variable "menuName" does not exist.', 41, $this->source); })()), "key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", [0 => "key"], "method", false, false, false, 41)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                    // line 42
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 42, $this->source); })()) . "view"), ["menuName" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 42, $this->source); })()), "menu", [], "any", false, false, false, 42), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 42, $this->source); })())]), "aCss" => "no-hash remove-button", "id" => "btn-remove-attribute", "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")]], 38, $context, $this->getSourceContext());
                    // line 46
                    echo "
            ";
                } else {
                    // line 48
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "active", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "                    ";
                        // line 50
                        echo "                    <div class=\"pull-right btn-group icons-holder\">
                        ";
                        // line 51
                        echo twig_call_macro($macros["UI"], "macro_ajaxButton", [["aCss" => "no-hash", "iCss" => "fa-eye-slash", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.hide"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.hide"), "dataId" => twig_get_attribute($this->env, $this->source,                         // line 56
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "dataMethod" => "PUT", "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                        // line 58
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 58, $this->source); })()) . "ajax_hide"), ["context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 58, $this->source); })()), "menuName" => (isset($context["menuName"]) || array_key_exists("menuName", $context) ? $context["menuName"] : (function () { throw new RuntimeError('Variable "menuName" does not exist.', 58, $this->source); })()), "key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", [0 => "key"], "method", false, false, false, 58)]), "dataRedirect" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 59
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "uri", [], "any", false, false, false, 59), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((                        // line 60
array_key_exists("hiddenMessage", $context)) ? (_twig_default_filter((isset($context["hiddenMessage"]) || array_key_exists("hiddenMessage", $context) ? $context["hiddenMessage"] : (function () { throw new RuntimeError('Variable "hiddenMessage" does not exist.', 60, $this->source); })()), "oro.navigation.menuupdate.hide_success_message")) : ("oro.navigation.menuupdate.hide_success_message")), ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 60, $this->source); })())])]], 51, $context, $this->getSourceContext());
                        // line 61
                        echo "
                    </div>
                ";
                    } else {
                        // line 64
                        echo "                    ";
                        // line 65
                        echo "                    <div class=\"pull-right btn-group icons-holder\">
                        ";
                        // line 66
                        echo twig_call_macro($macros["UI"], "macro_ajaxButton", [["aCss" => "no-hash", "iCss" => "fa-eye", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.show"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.show"), "dataId" => twig_get_attribute($this->env, $this->source,                         // line 71
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "dataMethod" => "PUT", "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                        // line 73
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 73, $this->source); })()) . "ajax_show"), ["context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 73, $this->source); })()), "menuName" => (isset($context["menuName"]) || array_key_exists("menuName", $context) ? $context["menuName"] : (function () { throw new RuntimeError('Variable "menuName" does not exist.', 73, $this->source); })()), "key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", [0 => "key"], "method", false, false, false, 73)]), "dataRedirect" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 74
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "uri", [], "any", false, false, false, 74), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((                        // line 75
array_key_exists("showedMessage", $context)) ? (_twig_default_filter((isset($context["showedMessage"]) || array_key_exists("showedMessage", $context) ? $context["showedMessage"] : (function () { throw new RuntimeError('Variable "showedMessage" does not exist.', 75, $this->source); })()), "oro.navigation.menuupdate.show_success_message")) : ("oro.navigation.menuupdate.show_success_message")), ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 75, $this->source); })())])]], 66, $context, $this->getSourceContext());
                        // line 76
                        echo "
                    </div>
                ";
                    }
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "        ";
            }
            // line 81
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })()), "isDivider", [], "any", false, false, false, 81) == false)) {
                // line 82
                echo "            ";
                // line 83
                echo "            ";
                $context["html"] = twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                // line 84
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 84, $this->source); })()) . "create"), ["menuName" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 84, $this->source); })()), "menu", [], "any", false, false, false, 84), "parentKey" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 84, $this->source); })()), "key", [], "any", false, false, false, 84), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 84, $this->source); })())]), "aCss" => "btn-primary", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.entity_label")])]], 83, $context, $this->getSourceContext());
                // line 89
                echo "            ";
                // line 90
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 90, $this->source); })()) . twig_call_macro($macros["UI"], "macro_ajaxButton", [["aCss" => "btn-primary no-hash menu-divider-create-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.divider")]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.divider")]), "dataMethod" => "POST", "dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((                // line 95
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 95, $this->source); })()) . "ajax_create"), ["context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 95, $this->source); })()), "menuName" => (isset($context["menuName"]) || array_key_exists("menuName", $context) ? $context["menuName"] : (function () { throw new RuntimeError('Variable "menuName" does not exist.', 95, $this->source); })()), "parentKey" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", [0 => "key"], "method", false, false, false, 95), "isDivider" => true]), "dataRedirect" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 96
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "uri", [], "any", false, false, false, 96), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((                // line 97
array_key_exists("dividerCreatedMessage", $context)) ? (_twig_default_filter((isset($context["dividerCreatedMessage"]) || array_key_exists("dividerCreatedMessage", $context) ? $context["dividerCreatedMessage"] : (function () { throw new RuntimeError('Variable "dividerCreatedMessage" does not exist.', 97, $this->source); })()), "oro.navigation.menuupdate.divider_created")) : ("oro.navigation.menuupdate.divider_created")), ["%reload_link%" => (isset($context["reloadLink"]) || array_key_exists("reloadLink", $context) ? $context["reloadLink"] : (function () { throw new RuntimeError('Variable "reloadLink" does not exist.', 97, $this->source); })())])]], 90, $context, $this->getSourceContext()));
                // line 99
                echo "
            ";
                // line 100
                $context["parameters"] = ["html" =>                 // line 101
(isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 101, $this->source); })()), "groupKey" => "createButtons", "options" => ["moreButtonAttrs" => ["class" => "btn-primary"]]];
                // line 109
                echo "
            ";
                // line 110
                echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 110, $this->source); })())], 110, $context, $this->getSourceContext());
                echo "

            ";
                // line 112
                echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 112, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 114
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 117
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 117));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 118
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 118)->unwrap();
        // line 119
        echo "
    ";
        // line 120
        $context["id"] = "menu-update-edit";
        // line 121
        echo "
    ";
        // line 122
        ob_start();
        // line 123
        echo "        ";
        $this->displayBlock('content_column', $context, $blocks);
        // line 153
        echo "    ";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        echo "
    ";
        // line 155
        $context["treeOptions"] = ["view" => "oronavigation/js/app/views/tree-manage-view", "data" =>         // line 157
(isset($context["tree"]) || array_key_exists("tree", $context) ? $context["tree"] : (function () { throw new RuntimeError('Variable "tree" does not exist.', 157, $this->source); })()), "nodeId" => twig_get_attribute($this->env, $this->source,         // line 158
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 158, $this->source); })()), "key", [], "any", false, false, false, 158), "menu" => twig_get_attribute($this->env, $this->source,         // line 159
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 159, $this->source); })()), "menu", [], "any", false, false, false, 159), "context" =>         // line 160
(isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 160, $this->source); })()), "updateAllowed" => true, "onRootSelectRoute" => (        // line 162
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 162, $this->source); })()) . "view"), "onSelectRoute" => (        // line 163
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 163, $this->source); })()) . "update"), "onMoveRoute" => (        // line 164
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 164, $this->source); })()) . "ajax_move"), "successMessage" => ((        // line 165
array_key_exists("movedMessage", $context)) ? (_twig_default_filter((isset($context["movedMessage"]) || array_key_exists("movedMessage", $context) ? $context["movedMessage"] : (function () { throw new RuntimeError('Variable "movedMessage" does not exist.', 165, $this->source); })()), "oro.navigation.menuupdate.moved_success_message")) : ("oro.navigation.menuupdate.moved_success_message"))];
        // line 167
        echo "
    <div class=\"sidebar-container\">
        ";
        // line 169
        $this->loadTemplate("@OroNavigation/menuUpdate/update.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 169, "1684215211")->display(twig_array_merge($context, ["options" => ["fixSidebarHeight" => false]]));
        // line 197
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 123
    public function block_content_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_column", $this->getTemplateName(), 123));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_column"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_column"));

        // line 124
        echo "            ";
        $context["dataBlocks"] = [];
        // line 125
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 125, $this->source); })()), "isDivider", [], "any", false, false, false, 125) == false)) {
            // line 126
            echo "                ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 126, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 133
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "titles", [], "any", false, false, false, 133), 'row'), 1 => ((twig_get_attribute($this->env, $this->source,             // line 134
($context["form"] ?? null), "uri", [], "any", true, true, false, 134)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "uri", [], "any", false, false, false, 134), 'row')) : (null)), 2 => ((twig_get_attribute($this->env, $this->source,             // line 135
($context["form"] ?? null), "aclResourceId", [], "any", true, true, false, 135)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "aclResourceId", [], "any", false, false, false, 135), 'row')) : (null)), 3 =>             // line 136
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "icon", [], "any", false, false, false, 136), 'row'), 4 =>             // line 137
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "descriptions", [], "any", false, false, false, 137), 'row')]]]]]);
            // line 142
            echo "            ";
        }
        // line 143
        echo "
            ";
        // line 144
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 144, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 145
        echo "
            ";
        // line 146
        $context["data"] = ["formErrors" => ((        // line 147
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 148
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 148, $this->source); })())];
        // line 150
        echo "
            ";
        // line 151
        $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 151)->displayBlock("content_data", $context);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 151,  354 => 150,  352 => 148,  351 => 147,  350 => 146,  347 => 145,  345 => 144,  342 => 143,  339 => 142,  337 => 137,  336 => 136,  335 => 135,  334 => 134,  333 => 133,  331 => 126,  328 => 125,  325 => 124,  312 => 123,  298 => 197,  296 => 169,  292 => 167,  290 => 165,  289 => 164,  288 => 163,  287 => 162,  286 => 160,  285 => 159,  284 => 158,  283 => 157,  282 => 155,  279 => 154,  276 => 153,  273 => 123,  271 => 122,  268 => 121,  266 => 120,  263 => 119,  260 => 118,  247 => 117,  233 => 114,  228 => 112,  223 => 110,  220 => 109,  218 => 101,  217 => 100,  214 => 99,  212 => 97,  211 => 96,  210 => 95,  208 => 90,  206 => 89,  204 => 84,  202 => 83,  200 => 82,  197 => 81,  194 => 80,  191 => 79,  186 => 76,  184 => 75,  183 => 74,  182 => 73,  181 => 71,  180 => 66,  177 => 65,  175 => 64,  170 => 61,  168 => 60,  167 => 59,  166 => 58,  165 => 56,  164 => 51,  161 => 50,  159 => 49,  156 => 48,  152 => 46,  150 => 42,  149 => 41,  148 => 40,  146 => 38,  144 => 37,  141 => 36,  138 => 35,  136 => 34,  133 => 33,  128 => 31,  125 => 30,  123 => 28,  122 => 27,  121 => 26,  118 => 25,  116 => 23,  115 => 22,  113 => 21,  111 => 20,  108 => 19,  105 => 18,  92 => 17,  78 => 1,  75 => 14,  72 => 12,  70 => 11,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}
{% set formAction = app.request.uri %}
{% set entityId = entity.id %}
{% set reloadLink -%}
    <a href=\"#\" onclick=\"window.location.reload(false);return false;\">
        {{- 'oro.navigation.menuupdate.reload_link.label'|trans -}}
    </a>
{%- endset %}
{% if entity.key %}
    {% set breadcrumbs = breadcrumbs|merge({'entityTitle': entity.isDivider ? 'oro.navigation.menuupdate.divider'|trans : entity.title|trans()}) %}
{% else %}
    {% set breadcrumbs = breadcrumbs|merge({'entityTitle': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans})}) %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.isDivider == false %}
        {% set html = UI.saveAndStayButton({
            'route': routePrefix ~ 'update',
            'params': {menuName: entity.menu, key: '\$key', context: context}
        }) %}

        {% set html = html ~ UI.saveAndNewButton({
            'route': routePrefix ~ 'create',
            'params': {menuName: entity.menu, parentKey: entity.key, context: context}
        }) %}

        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}

    {% if not entity.isCustom or entity.id is not null %}
        {% if entity.key %}
            {% if entity.isCustom and entity.id is not null %}
                {#Delete button #}
                {{ UI.deleteButton({
                    'label': 'oro.navigation.menuupdate.delete'|trans(),
                    'successMessage': deletedMessage|default('oro.navigation.menuupdate.deleted_message')|trans({'%reload_link%': reloadLink}),
                    'dataUrl': path(routePrefix ~ 'ajax_delete', {context: context, menuName: menuName, key: app.request.get('key')}),
                    'dataRedirect': path(routePrefix ~ 'view', {menuName: entity.menu, context: context}),
                    'aCss': 'no-hash remove-button',
                    'id': 'btn-remove-attribute',
                    'entity_label': 'oro.navigation.menuupdate.entity_label'|trans,
                }) }}
            {% else %}
                {% if entity.active %}
                    {# Hide button #}
                    <div class=\"pull-right btn-group icons-holder\">
                        {{ UI.ajaxButton({
                            'aCss':  'no-hash',
                            'iCss':  'fa-eye-slash',
                            'label': 'oro.navigation.menuupdate.hide'|trans,
                            'title': 'oro.navigation.menuupdate.hide'|trans,
                            'dataId': entity.id,
                            'dataMethod': 'PUT',
                            'dataUrl': path(routePrefix ~ 'ajax_hide', {context: context, menuName: menuName, key: app.request.get('key')}),
                            'dataRedirect': app.request.uri,
                            'successMessage': hiddenMessage|default('oro.navigation.menuupdate.hide_success_message')|trans({'%reload_link%': reloadLink})
                        }) }}
                    </div>
                {% else %}
                    {# Show button #}
                    <div class=\"pull-right btn-group icons-holder\">
                        {{ UI.ajaxButton({
                            'aCss':  'no-hash',
                            'iCss':  'fa-eye',
                            'label': 'oro.navigation.menuupdate.show'|trans,
                            'title': 'oro.navigation.menuupdate.show'|trans,
                            'dataId': entity.id,
                            'dataMethod': 'PUT',
                            'dataUrl': path(routePrefix ~ 'ajax_show', {context: context, menuName: menuName, key: app.request.get('key')}),
                            'dataRedirect': app.request.uri,
                            'successMessage': showedMessage|default('oro.navigation.menuupdate.show_success_message')|trans({'%reload_link%': reloadLink})
                        }) }}
                    </div>
                {% endif %}
            {% endif %}
        {% endif %}
        {% if entity.isDivider == false %}
            {# Create Menu Item button #}
            {% set html = UI.button({
                'path' : path(routePrefix ~ 'create', {menuName: entity.menu, parentKey: entity.key, context: context}),
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
                'dataUrl': path(routePrefix ~ 'ajax_create', {context: context, menuName: menuName, parentKey: app.request.get('key'), 'isDivider': true}),
                'dataRedirect': app.request.uri,
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

            {{ UI.buttonSeparator() }}
        {% endif %}
    {% endif %}
{% endblock navButtons %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'menu-update-edit' %}

    {% set content %}
        {% block content_column %}
            {% set dataBlocks = [] %}
            {% if entity.isDivider == false %}
                {% set dataBlocks = dataBlocks|merge([{
                    'title': 'General Information'|trans,
                    'class': 'active',
                    'subblocks': [
                        {
                            'title': '',
                            'data': [
                            form_row(form.titles),
                            form.uri is defined ? form_row(form.uri) : null,
                            form.aclResourceId is defined ? form_row(form.aclResourceId) : null,
                            form_row(form.icon),
                            form_row(form.descriptions)
                        ]
                        }
                    ]
                }]) %}
            {% endif %}

            {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

            {% set data = {
                'formErrors': form_errors(form)? form_errors(form) : null,
                'dataBlocks': dataBlocks,
            } %}

            {{ block('content_data', '@OroUI/actions/update.html.twig') }}
        {% endblock content_column %}
    {% endset %}

    {% set treeOptions = {
        'view' : 'oronavigation/js/app/views/tree-manage-view',
        'data' : tree,
        'nodeId': entity.key,
        'menu' : entity.menu,
        'context' : context,
        'updateAllowed' : true,
        'onRootSelectRoute' : routePrefix ~ 'view',
        'onSelectRoute' : routePrefix ~ 'update',
        'onMoveRoute' : routePrefix ~ 'ajax_move',
        'successMessage': movedMessage|default('oro.navigation.menuupdate.moved_success_message')
    } %}

    <div class=\"sidebar-container\">
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
                            'routeParams': {menuName: menuName, context: context}
                        }
                    }
                ) }}
            {% endblock sidebar %}

            {% block content %}
                {% autoescape %}
                    <div class=\"category-data\">
                        {{ content|raw}}
                    </div>
                {% endautoescape %}
            {% endblock content %}
        {% endembed %}
    </div>
{% endblock content_data %}
", "@OroNavigation/menuUpdate/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/update.html.twig");
    }
}


/* @OroNavigation/menuUpdate/update.html.twig */
class __TwigTemplate_14e8fa04f1180c8e9054a1fe351c1c74___1684215211 extends Template
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
        // line 169
        return "@OroUI/content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/update.html.twig"));

        $this->parent = $this->loadTemplate("@OroUI/content_sidebar.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 169);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 172
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sidebar", $this->getTemplateName(), 172));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 173
        echo "                ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/update.html.twig", 173)->unwrap();
        // line 174
        echo "                ";
        echo twig_call_macro($macros["UI"], "macro_renderJsTree", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menu.menu_list_default.label"), "treeOptions" =>         // line 177
(isset($context["treeOptions"]) || array_key_exists("treeOptions", $context) ? $context["treeOptions"] : (function () { throw new RuntimeError('Variable "treeOptions" does not exist.', 177, $this->source); })())], ["move" => ["view" => "oroui/js/app/views/jstree/move-action-view", "routeName" => (        // line 182
(isset($context["routePrefix"]) || array_key_exists("routePrefix", $context) ? $context["routePrefix"] : (function () { throw new RuntimeError('Variable "routePrefix" does not exist.', 182, $this->source); })()) . "move"), "routeParams" => ["menuName" =>         // line 183
(isset($context["menuName"]) || array_key_exists("menuName", $context) ? $context["menuName"] : (function () { throw new RuntimeError('Variable "menuName" does not exist.', 183, $this->source); })()), "context" => (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 183, $this->source); })())]]]], 174, $context, $this->getSourceContext());
        // line 186
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 189
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 189));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 190
        echo "                ";
        // line 191
        echo "                    <div class=\"category-data\">
                        ";
        // line 192
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 192, $this->source); })());
        echo "
                    </div>
                ";
        // line 195
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 195,  695 => 192,  692 => 191,  690 => 190,  677 => 189,  663 => 186,  661 => 183,  660 => 182,  659 => 177,  657 => 174,  654 => 173,  641 => 172,  612 => 169,  357 => 151,  354 => 150,  352 => 148,  351 => 147,  350 => 146,  347 => 145,  345 => 144,  342 => 143,  339 => 142,  337 => 137,  336 => 136,  335 => 135,  334 => 134,  333 => 133,  331 => 126,  328 => 125,  325 => 124,  312 => 123,  298 => 197,  296 => 169,  292 => 167,  290 => 165,  289 => 164,  288 => 163,  287 => 162,  286 => 160,  285 => 159,  284 => 158,  283 => 157,  282 => 155,  279 => 154,  276 => 153,  273 => 123,  271 => 122,  268 => 121,  266 => 120,  263 => 119,  260 => 118,  247 => 117,  233 => 114,  228 => 112,  223 => 110,  220 => 109,  218 => 101,  217 => 100,  214 => 99,  212 => 97,  211 => 96,  210 => 95,  208 => 90,  206 => 89,  204 => 84,  202 => 83,  200 => 82,  197 => 81,  194 => 80,  191 => 79,  186 => 76,  184 => 75,  183 => 74,  182 => 73,  181 => 71,  180 => 66,  177 => 65,  175 => 64,  170 => 61,  168 => 60,  167 => 59,  166 => 58,  165 => 56,  164 => 51,  161 => 50,  159 => 49,  156 => 48,  152 => 46,  150 => 42,  149 => 41,  148 => 40,  146 => 38,  144 => 37,  141 => 36,  138 => 35,  136 => 34,  133 => 33,  128 => 31,  125 => 30,  123 => 28,  122 => 27,  121 => 26,  118 => 25,  116 => 23,  115 => 22,  113 => 21,  111 => 20,  108 => 19,  105 => 18,  92 => 17,  78 => 1,  75 => 14,  72 => 12,  70 => 11,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}
{% set formAction = app.request.uri %}
{% set entityId = entity.id %}
{% set reloadLink -%}
    <a href=\"#\" onclick=\"window.location.reload(false);return false;\">
        {{- 'oro.navigation.menuupdate.reload_link.label'|trans -}}
    </a>
{%- endset %}
{% if entity.key %}
    {% set breadcrumbs = breadcrumbs|merge({'entityTitle': entity.isDivider ? 'oro.navigation.menuupdate.divider'|trans : entity.title|trans()}) %}
{% else %}
    {% set breadcrumbs = breadcrumbs|merge({'entityTitle': 'oro.ui.create_entity'|trans({'%entityName%': 'oro.navigation.menuupdate.entity_label'|trans})}) %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.isDivider == false %}
        {% set html = UI.saveAndStayButton({
            'route': routePrefix ~ 'update',
            'params': {menuName: entity.menu, key: '\$key', context: context}
        }) %}

        {% set html = html ~ UI.saveAndNewButton({
            'route': routePrefix ~ 'create',
            'params': {menuName: entity.menu, parentKey: entity.key, context: context}
        }) %}

        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}

    {% if not entity.isCustom or entity.id is not null %}
        {% if entity.key %}
            {% if entity.isCustom and entity.id is not null %}
                {#Delete button #}
                {{ UI.deleteButton({
                    'label': 'oro.navigation.menuupdate.delete'|trans(),
                    'successMessage': deletedMessage|default('oro.navigation.menuupdate.deleted_message')|trans({'%reload_link%': reloadLink}),
                    'dataUrl': path(routePrefix ~ 'ajax_delete', {context: context, menuName: menuName, key: app.request.get('key')}),
                    'dataRedirect': path(routePrefix ~ 'view', {menuName: entity.menu, context: context}),
                    'aCss': 'no-hash remove-button',
                    'id': 'btn-remove-attribute',
                    'entity_label': 'oro.navigation.menuupdate.entity_label'|trans,
                }) }}
            {% else %}
                {% if entity.active %}
                    {# Hide button #}
                    <div class=\"pull-right btn-group icons-holder\">
                        {{ UI.ajaxButton({
                            'aCss':  'no-hash',
                            'iCss':  'fa-eye-slash',
                            'label': 'oro.navigation.menuupdate.hide'|trans,
                            'title': 'oro.navigation.menuupdate.hide'|trans,
                            'dataId': entity.id,
                            'dataMethod': 'PUT',
                            'dataUrl': path(routePrefix ~ 'ajax_hide', {context: context, menuName: menuName, key: app.request.get('key')}),
                            'dataRedirect': app.request.uri,
                            'successMessage': hiddenMessage|default('oro.navigation.menuupdate.hide_success_message')|trans({'%reload_link%': reloadLink})
                        }) }}
                    </div>
                {% else %}
                    {# Show button #}
                    <div class=\"pull-right btn-group icons-holder\">
                        {{ UI.ajaxButton({
                            'aCss':  'no-hash',
                            'iCss':  'fa-eye',
                            'label': 'oro.navigation.menuupdate.show'|trans,
                            'title': 'oro.navigation.menuupdate.show'|trans,
                            'dataId': entity.id,
                            'dataMethod': 'PUT',
                            'dataUrl': path(routePrefix ~ 'ajax_show', {context: context, menuName: menuName, key: app.request.get('key')}),
                            'dataRedirect': app.request.uri,
                            'successMessage': showedMessage|default('oro.navigation.menuupdate.show_success_message')|trans({'%reload_link%': reloadLink})
                        }) }}
                    </div>
                {% endif %}
            {% endif %}
        {% endif %}
        {% if entity.isDivider == false %}
            {# Create Menu Item button #}
            {% set html = UI.button({
                'path' : path(routePrefix ~ 'create', {menuName: entity.menu, parentKey: entity.key, context: context}),
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
                'dataUrl': path(routePrefix ~ 'ajax_create', {context: context, menuName: menuName, parentKey: app.request.get('key'), 'isDivider': true}),
                'dataRedirect': app.request.uri,
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

            {{ UI.buttonSeparator() }}
        {% endif %}
    {% endif %}
{% endblock navButtons %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'menu-update-edit' %}

    {% set content %}
        {% block content_column %}
            {% set dataBlocks = [] %}
            {% if entity.isDivider == false %}
                {% set dataBlocks = dataBlocks|merge([{
                    'title': 'General Information'|trans,
                    'class': 'active',
                    'subblocks': [
                        {
                            'title': '',
                            'data': [
                            form_row(form.titles),
                            form.uri is defined ? form_row(form.uri) : null,
                            form.aclResourceId is defined ? form_row(form.aclResourceId) : null,
                            form_row(form.icon),
                            form_row(form.descriptions)
                        ]
                        }
                    ]
                }]) %}
            {% endif %}

            {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

            {% set data = {
                'formErrors': form_errors(form)? form_errors(form) : null,
                'dataBlocks': dataBlocks,
            } %}

            {{ block('content_data', '@OroUI/actions/update.html.twig') }}
        {% endblock content_column %}
    {% endset %}

    {% set treeOptions = {
        'view' : 'oronavigation/js/app/views/tree-manage-view',
        'data' : tree,
        'nodeId': entity.key,
        'menu' : entity.menu,
        'context' : context,
        'updateAllowed' : true,
        'onRootSelectRoute' : routePrefix ~ 'view',
        'onSelectRoute' : routePrefix ~ 'update',
        'onMoveRoute' : routePrefix ~ 'ajax_move',
        'successMessage': movedMessage|default('oro.navigation.menuupdate.moved_success_message')
    } %}

    <div class=\"sidebar-container\">
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
                            'routeParams': {menuName: menuName, context: context}
                        }
                    }
                ) }}
            {% endblock sidebar %}

            {% block content %}
                {% autoescape %}
                    <div class=\"category-data\">
                        {{ content|raw}}
                    </div>
                {% endautoescape %}
            {% endblock content %}
        {% endembed %}
    </div>
{% endblock content_data %}
", "@OroNavigation/menuUpdate/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/update.html.twig");
    }
}
